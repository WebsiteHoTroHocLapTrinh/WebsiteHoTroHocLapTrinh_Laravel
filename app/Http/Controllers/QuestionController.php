<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use DateTime;
use App\Permission;
use App\User;
use App\Tag;
use App\Question;
use App\Answer;
use App\Taggable;
use App\Documentation;
use App\Comment;
use App\Subject;
use App\Activity;
use App\Ping;
use App\Vote;
use App\PasswordReset;

class QuestionController extends Controller
{
    // Admin
    public function getList() {
        $questions = Question::all();
        return view('admin.question.list', ['questions' => $questions]);
    }

    public function getAdd() {
        $tags = Tag::where('active', '1')->get();
        return view('admin.question.add', ['tags' => $tags]);
    }

    public function postAdd(Request $request) {
        // Validate date input
        $validator = Validator::make($request->all(), 
            [
                'title' => 'required|min:6',
                'content' => 'required',
                'list_tag' => 'required',
            ],
            [
                'title.required' => 'Bạn chưa nhập tiêu đề',
                'title.min' => 'Tiêu đề phải có ít nhất 6 ký tự',
                'content.required' => 'Bạn chưa nhập nội dung',
                'list_tag.required' => 'Bạn chưa nhập các thẻ liên quan',
            ] 
        );
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        // Create Model Question and set properties
        $question = new Question;
        $question->user_id = Auth::user()->id;
        $question->title = $request->title;
        $question->title_url = changeTitle($request->title);
        $question->content = $request->content;
        if ($request->has('active')) {
            $question->active = true;
        }
        else {
            $question->active = false;
        }
        $question->created_at = new DateTime();
        $question->updated_at = new DateTime();
        $question->save();  // Save into database

        //Process list tag
        $arrayTags = explode(',', $request->list_tag);  // Split data Ex: 1,2,3 => ["1", "2", "3"]
        foreach ($arrayTags as $tag) {
            // Create Model Taggable and set properties
            $taggable = new Taggable;
            $taggable->tag_id = $tag;
            $taggable->taggable_id = $question->id;
            $taggable->taggable_type = "App\Question";
            $taggable->active = true;
            $taggable->created_at = new DateTime();
            $taggable->updated_at = new DateTime();
            $taggable->save();   // Save into database
        }

        //Create Activity
        $activity = new Activity;
        $activity->user_id = Auth::user()->id;
        $activity->content = 'Thêm câu hỏi mới <a href="/admin/question/edit/'.$question->id.'" target="_blank">'.$question->title.'</a>';
        $activity->type = 1;
        $activity->save();

        return redirect()->back()->with('thongbao', 'Thêm Thành Công');
    }

    public function getEdit($idQuestion) {
        $question = Question::find($idQuestion);
        $tags = Tag::where('active', '1')->get();
        return view('admin.question.edit', ['question' => $question, 'tags' => $tags]);
    }

    public function postEdit(Request $request, $idQuestion) {
        // Validate date input
        $validator = Validator::make($request->all(), 
            [
                'title' => 'required|min:6',
                'content' => 'required',
                'list_tag' => 'required',
            ],
            [
                'title.required' => 'Bạn chưa nhập tiêu đề',
                'title.min' => 'Tiêu đề phải có ít nhất 6 ký tự',
                'content.required' => 'Bạn chưa nhập nội dung',
                'list_tag.required' => 'Bạn chưa nhập các thẻ liên quan',
            ] 
        );
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        // Get Model Question and set properties
        $question = Question::find($idQuestion);
        $question->title = $request->title;
        $question->title_url = changeTitle($request->title);
        $question->content = $request->content;
        if ($request->has('active')) {
            $question->active = true;
        }
        else {
            $question->active = false;
        }
        $quesion->is_new = true;
        $question->updated_at = new DateTime();
        $question->save();  // Save into database

        //Process list tag
        foreach ($question->tags as $taggable) {
            $taggable->pivot->delete();    // Delete old taggables
        }

        $arrayTags = explode(',', $request->list_tag);  // Split data Ex: 1,2,3 => ["1", "2", "3"]
        foreach ($arrayTags as $tag) {
            // Create Model Taggable and set properties
            $taggable = new Taggable;
            $taggable->tag_id = $tag;
            $taggable->taggable_id = $question->id;
            $taggable->taggable_type = "App\Question";
            $taggable->active = true;
            $taggable->created_at = new DateTime();
            $taggable->updated_at = new DateTime();
            $taggable->save();   // Save into database
        }

        //Create Activity
        $activity = new Activity;
        $activity->user_id = Auth::user()->id;
        $activity->content = 'Cập nhật câu hỏi <a href="/admin/question/edit/'.$question->id.'" target="_blank">'.$question->title.'</a>';
        $activity->type = 1;
        $activity->save();

        return redirect()->back()->with('thongbao', 'Cập Nhật Thành Công');
    }

    public function getDelete($idQuestion) 
     {
        $question = Question::find($idQuestion);
        // Delete all comment of question
        $commentsOfQuestion = $question->comments;
        foreach ($commentsOfQuestion as $cmt) {
            $pingsOfComment = $cmt->pings;
            foreach ($pingsOfComment as $ping) {
                $ping->delete();    // Delete pings of comment
            }
            $cmt->delete();  // Delete comments of question
        }
        // Delete all answer of question
        $answers = $question->answers;
        foreach ($answers as $ans) {
            $commentsOfAnswer = $ans->comments;
            foreach ($commentsOfAnswer as $cmt) {
                $pingsOfComment = $cmt->pings;
                foreach ($pingsOfComment as $ping) {
                    $ping->delete();    // Delete pings of comment
                }
                $cmt->delete();  // Delete comments of question
            }
            $ans->delete(); // Delete answers of quesion
        }
        // Delete all taggable of question
        foreach ($question->tags as $tag) {
            Taggable::where([
                ['taggable_id', $tag->pivot->taggable_id], 
                ['tag_id', $tag->pivot->tag_id]
            ])->delete();
        }

        $question->delete(); // Delete question

        //Create Activity
        $activity = new Activity;
        $activity->user_id = Auth::user()->id;
        $activity->content = 'Xóa câu hỏi <a href="/admin" target="_blank">'.$question->title.'</a>';
        $activity->type = 1;
        $activity->save();

        return redirect()->back()->with('thongbao', 'Xóa Thành Công');
    }


    //List Question
    public function ListQuestion()
    {
        $ListQuestion = Question::where('active',1)->get();
        //$AllAnswer= Answer::where('active',1)->get();
        $user_rank = User::where('active',1)->get();
        $SortByAnswer = Question::with('answers')->where('active',1)->get()->sortByDesc(function($SortByAnswer)
        {
            return $SortByAnswer->answers->where('active',1)->count();
        });
        return view('question.list_question',['list'=>$ListQuestion,'user_rank'=>$user_rank,'SortByAnswer'=>$SortByAnswer]);
    }

   
}
