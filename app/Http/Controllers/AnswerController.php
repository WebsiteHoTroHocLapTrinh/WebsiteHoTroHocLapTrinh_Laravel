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

class AnswerController extends Controller
{
    // Admin
    public function getList($idQuestion) {
        $question = Question::find($idQuestion);
        $answers = $question->answers;
        return view('admin.answer.list', ['answers' => $answers, 'question' => $question]);
    }

    public function getAdd($idQuestion) {
        $question = Question::find($idQuestion);
        return view('admin.answer.add', ['question' => $question]);
    }

    public function postAdd(Request $request, $idQuestion) {
        // Validate date input
        $validator = Validator::make($request->all(), 
            [
                'content' => 'required',
            ],
            [
                'content.required' => 'Bạn chưa nhập nội dung',
            ] 
        );
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        // Create Model Answer and set properties
        $answer = new Answer;
        $answer->user_id = Auth::user()->id;
        $answer->question_id = $idQuestion;
        $answer->content = $request->content;
        if ($request->has('active')) {
            $answer->active = true;
        }
        else {
            $answer->active = false;
        }
        $answer->created_at = new DateTime();
        $answer->updated_at = new DateTime();
        $answer->save();  // Save into database

        //Create Activity
        $activity = new Activity;
        $activity->user_id = Auth::user()->id;
        $activity->content = 'Thêm câu trả lời <a href="/admin/question/edit/'.$answer->id.'" target="_blank">ID: '.$answer->id.'</a>';
        $activity->type = 1;
        $activity->save();

        return redirect()->back()->with('thongbao', 'Thêm Thành Công');
    }

    public function getEdit($idAnswer) {
        $answer = Answer::find($idAnswer);
        return view('admin.answer.edit', ['answer' => $answer]);
    }

    public function postEdit(Request $request, $idAnswer) {
        // Validate date input
        $validator = Validator::make($request->all(), 
            [
                'content' => 'required',
            ],
            [
                'content.required' => 'Bạn chưa nhập nội dung',
            ] 
        );
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        // Get Model Answer and set properties
        $answer = Answer::find($idAnswer);
        $answer->content = $request->content;
        if ($request->has('active')) {
            $answer->active = true;
        }
        else {
            $answer->active = false;
        }
        $answer->updated_at = new DateTime();
        $answer->save();  // Save into database

        //Create Activity
        $activity = new Activity;
        $activity->user_id = Auth::user()->id;
        $activity->content = 'Cập nhật câu trả lời <a href="/admin/question/edit/'.$answer->id.'" target="_blank">ID: '.$answer->id.'</a>';
        $activity->type = 1;
        $activity->save();

        return redirect()->back()->with('thongbao', 'Cập Nhật Thành Công');
    }

    public function getDelete($idAnswer) {
        $answer = Answer::find($idAnswer);
        $commentsOfAnswer = $answer->comments;
        foreach ($commentsOfAnswer as $cmt) {
            $pingsOfComment = $cmt->pings;
            foreach ($pingsOfComment as $ping) {
                $ping->delete();    // Delete pings of comment
            }
            $cmt->delete();  // Delete comments of answer
        }

        $answer->delete(); // Delete answer

        //Create Activity
        $activity = new Activity;
        $activity->user_id = Auth::user()->id;
        $activity->content = 'Xóa câu trả lời <a href="/admin" target="_blank">ID: '.$answer->id.'</a>';
        $activity->type = 1;
        $activity->save();

        return redirect()->back()->with('thongbao', 'Xóa Thành Công');
    }
}
