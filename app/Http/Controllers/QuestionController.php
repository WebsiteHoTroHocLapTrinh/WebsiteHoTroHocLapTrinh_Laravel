<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use DateTime;
use Session;
use Event;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
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
        $activity->user_id = Auth::id();
        $activity->user_related_id = $question->user->id;
        $activity->content = 'đã thêm câu hỏi mới <strong>'.$question->title.'</strong>';
        $activity->link = route('detail-question', ['question_id' => $question->id, 'question_url' => $question->title_url]);
        $activity->type = 2;
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
        // $question->is_new = true;
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
        $activity->user_id = Auth::id();
        $activity->user_related_id = $question->user->id;
        $activity->content = 'đã chỉnh sửa câu hỏi <strong>'.$question->title.'</strong>';
        $activity->link = route('detail-question', ['question_id' => $question->id, 'question_url' => $question->title_url]);
        $activity->type = 2;
        $activity->save();

        return redirect()->back()->with('thongbao', 'Cập Nhật Thành Công');
    }

    public function getDelete($idQuestion) 
     {
        $question = Question::find($idQuestion);
        // Delete all comment of question
        $commentsOfQuestion = $question->comments;
        foreach ($commentsOfQuestion as $cmt) {
            $cmt->delete();  // Delete comments of question
        }
        // Delete all answer of question
        $answers = $question->answers;
        foreach ($answers as $ans) {
            $commentsOfAnswer = $ans->comments;
            foreach ($commentsOfAnswer as $cmt) {
                $cmt->delete();  // Delete comments of question
            }
            $ans->delete(); // Delete answers of question
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
        $activity->user_id = Auth::id();
        $activity->user_related_id = $question->user->id;
        $activity->content = 'đã xóa vĩnh viễn câu hỏi <strong>'.$question->title.'</strong>';
        $activity->link = route('detail-question', ['question_id' => $question->id, 'question_url' => $question->title_url]);
        $activity->type = 2;
        $activity->save();

        return redirect()->back()->with('thongbao', 'Xóa Thành Công');
    }


    //List Question
    public function getListQuestion(Request $request, $tab = 'new'){
        $list = Question::where('active',1)->get();
        switch ($tab) {
            case 'new':
                $list_paginate = Question::where('active',1)->orderBy('id', 'desc')->paginate(5);
                break;
            case 'view':
                $list_paginate = Question::where('active',1)->orderBy('view', 'desc')->paginate(5);
                break;
            case 'rep':
                $list_paginate = Question::leftJoin('answers','questions.id','=','answers.question_id')->
                selectRaw('questions.*, count(answers.question_id) AS `count`')->
                groupBy('questions.id')->
                orderBy('count','desc')->
                paginate(5);
                break;
            case 'rate':
                $list_paginate = Question::where('active',1)->orderBy('point_rating', 'desc')->paginate(5);
                break;
            default:
                //$list_paginate = Question::where('active',1)->orderBy('id', 'desc')->paginate(5);
                break;
        }

        $top_user = User::where('active',1)->orderBy('point_reputation','desc')->get()->take(10);
        $top_tag = Tag::join('taggables','taggables.tag_id','=','tags.id')->
        selectRaw('count(taggables.tag_id) AS `kount`, tags.id, tags.name')->
        groupBy('tags.id')->
        orderBy('kount', 'desc')->
        get()->take(10);
        
        if($request->ajax()){
            return view('question.items_question',['tab'=>$tab,'list'=>$list, 'list_paginate'=>$list_paginate,'top_user'=>$top_user,'top_tag'=>$top_tag]);
        }
        return view('question.list_question',['tab'=>$tab,'list'=>$list, 'list_paginate'=>$list_paginate,'top_user'=>$top_user,'top_tag'=>$top_tag]);
    }

    public function getDetailQuestion(Request $request, $question_id){
        $question = Question::find($question_id);
        $answers = $question->answers->where('active', true);
        if($request->ajax()){
            switch ($request->type) {
                case 'comments-question':
                    $list_comment = $question->comments->where('active', true);
                    if(count($list_comment) > 3) {
                        $comments_skip =  $list_comment->sortBy('created_at')->slice(3);
                        return view('comment.list_comment', ['comments'=>$comments_skip]);
                    }
                    break;
                case 'comments-answer-'.$request->id_target: {
                    $answer = Answer::find($request->id_target);
                    $list_comment = $answer->comments->where('active', true);
                    if(count($list_comment) > 3) {
                        $comments_skip = $list_comment->sortBy('created_at')->slice(3);
                        return view('comment.list_comment', ['comments'=>$comments_skip]);
                    }
                }
                    break;
                default:
                    # code...
                    break;
            }

        }
        // Question related
        $tags = $question->tags;
        $all_question_related = new Collection;   
        foreach ($tags as $tag) {
            $questions_related = $tag->questions->where('id', '!=', $question->id)->unique()->values();
            foreach ($questions_related as $qs) {
                $all_question_related->push($qs);
            }  
        }
        $top10_question_related = $all_question_related->unique()->sortByDesc('point_rating')->values()->take(10);

        Event::fire('question.view', $question);//increase view
        return view('question.detail_question', ['question'=>$question, 'answers'=>$answers, 'top10_question_related' => $top10_question_related]);
    }

    public function postVoteQuestion(Request $request, $question_id) {
        if (Auth::check()) {
            $question = Question::find($question_id);
            $user = $question->user;
            $vote_record = $question->votes->where('user_id', Auth::id())->first(); 
            // Flag
            $isAddClass = true;
            //Convert string to boolen
            $isPressedUp = $request->isPressedUp === 'true' ? true : false;
            $isPressedDown = $request->isPressedDown === 'true' ? true : false;

            if (!is_null($vote_record)) {
                $vote_record->delete(); // Delete current vote if exist
            }
            if ($request->up_down == 'up') {

                if ($isPressedUp) {    // Status pressed up => balance
                    $question->point_rating = $question->point_rating - 1;
                    $question->save();
                    $user->point_reputation = $user->point_reputation - 1;
                    $user->save();
                    
                    $isAddClass = false;
                }
                else {
                    if ($isPressedDown) {  // Status pressed down => pressed up
                        $question->point_rating = $question->point_rating + 2;
                        $question->save();
                        $user->point_reputation = $user->point_reputation + 2;
                        $user->save();
                    }
                    else {                          // Status balance => pressed up
                        $question->point_rating = $question->point_rating + 1;
                        $question->save();
                        $user->point_reputation = $user->point_reputation + 1;
                        $user->save();
                    }
                    // Add vote table
                    $vote = new Vote;
                    $vote->user_id = Auth::id();
                    $vote->vote_action = 'up';
                    $vote->votable_id = $question_id;
                    $vote->votable_type = 'App\Question';
                    $vote->save();
                }
            }
            else {
                if ($isPressedDown) {    // Status pressed down => balance
                    $question->point_rating = $question->point_rating + 1;
                    $question->save();
                    $user->point_reputation = $user->point_reputation + 1;
                    $user->save();
                    
                    $isAddClass = false;
                }
                else {
                    if ($isPressedUp) {  // Status pressed up => pressed down
                        $question->point_rating = $question->point_rating - 2;
                        $question->save();
                        $user->point_reputation = $user->point_reputation - 2;
                        $user->save();
                    }
                    else {                          // Status balance => pressed down
                        $question->point_rating = $question->point_rating - 1;
                        $question->save();
                        $user->point_reputation = $user->point_reputation - 1;
                        $user->save();
                    }
                    // Add vote table
                    $vote = new Vote;
                    $vote->user_id = Auth::id();
                    $vote->vote_action = 'down';
                    $vote->votable_id = $question_id;
                    $vote->votable_type = 'App\Question';
                    $vote->save();
                }
            }
            return Response()->json(['success' => true, 'isAddClass' => $isAddClass]); 
        }
        else {
            return Response()->json(['success' => false, 'message' => 'Bạn cần phải đăng nhập để được vote cho câu hỏi này']); 
        }
    }

    public function getDeleteQuestion($question_id) {
        $question = Question::find($question_id);
        $question->active = false;
        $question->save();

        return redirect(route('detail-question', ['question_id' => $question->id, 'question_url' => $question->title_url]))->with('action', 'Câu hỏi đã được xóa !');
    }

    public function getRestoreQuestion($question_id) {
        $question = Question::find($question_id);
        $question->active = true;
        $question->save();

        return redirect(route('detail-question', ['question_id' => $question->id, 'question_url' => $question->title_url]))->with('action', 'Câu hỏi đã được khôi phục !');
    }

    public function getCreateQuestion(){
        $tags = Tag::where('active', true)->get();
        return view('question.create_question', ['tags' => $tags]);

    }

    public function postCreateQuestion(Request $request) {
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

        // Increase User point reputation
        Auth::user()->point_reputation += 10;
        Auth::user()->save();

        //Create Activity
        $activity = new Activity;
        $activity->user_id = Auth::id();
        $activity->user_related_id = $question->user->id;
        $activity->content = 'đã đăng câu hỏi mới <strong>'.$question->title.'</strong>';
        $activity->link = route('detail-question', ['question_id' => $question->id, 'question_url' => $question->title_url]);
        $activity->type = 1;
        $activity->save();

        $previousURL = route('list-question');  //Chuyển lại về chi tiết khi làm xong
        return redirect('congratulation')->with('thongbao', 
            '<h1>Đặt Câu Hỏi Thành Công !!!</h1>
            <br>
            <h3>Bạn nhận được 10 điểm uy tín !!!</h3>
            <br>')->with('previousURL', $previousURL);
    }

    public function getEditQuestion($question_id) {
        $tags = Tag::where('active', true)->get();
        $question = Question::find($question_id);
        Session::put('previousURLEditQuestion', Session::previousUrl());   
        return view('question.edit_question', ['question' => $question, 'tags' => $tags]);
    }

    public function postEditQuestion(Request $request, $question_id) {
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
        $question = Question::find($question_id);
        $question->title = $request->title;
        $question->title_url = changeTitle($request->title);
        $question->content = $request->content;
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

        return redirect(session('previousURLEditQuestion'));
    }

    public function getSearchQuestion(Request $request) {
        $searchByKeyWord = $this->searchByKeyWord($request->keyword);
        $searchByTag = $this->searchByTag($request->list_tag);
        $collection = $searchByKeyWord->intersect($searchByTag)->sortByDesc('created_at');
        $list_paginate = $this->paginate($collection, 5, $request->page,['path' => LengthAwarePaginator::resolveCurrentPath()]);


        $top_user = User::where('active',1)->orderBy('point_reputation','desc')->get()->take(10);
        $top_tag = Tag::join('taggables','taggables.tag_id','=','tags.id')->
        selectRaw('count(taggables.tag_id) AS `kount`, tags.id, tags.name')->
        groupBy('tags.id')->
        orderBy('kount', 'desc')->
        get()->take(10);

        $tags = Tag::where('active', true)->get();
        $tags_filter = $tags->whereIn('id', explode(',', $request->list_tag))->values();

        return view('question.result_search', ['list_paginate'=>$list_paginate,'top_user'=>$top_user,'top_tag'=>$top_tag, 'keyword' => $request->keyword, 'list_tag' => $request->list_tag, 'tags_filter' => $tags_filter, 'tags' => $tags]);
    }

    public function searchByKeyWord($keyword) {
        if ($keyword == null) {
            return Question::where('active', true)->get();
        }
        else {
            $words = explode(' ', $keyword);
            $questions = Question::where(function ($query)use($words) {
                foreach($words as $word) {
                    $query->orWhere('title', 'LIKE', '%' . $word . '%');
                }
            })->where('active', true)->get();
            return $questions;
        }
    }

    public function searchByTag($list_tag) {
        if ($list_tag == null) {
            return Question::where('active', true)->get();
        }
        else {
            $questions = Question::join('taggables', function($join) {
                    $join->on('questions.id', '=', 'taggables.taggable_id')
                    ->where('taggables.taggable_type', '=', 'App\Question');
                })->join('tags', function($join) use ($list_tag) {
                    $join->on('taggables.tag_id', '=', 'tags.id')
                    ->whereIn('tags.id', explode(',', $list_tag));
                })
            ->where('questions.active', true)->select('questions.*')->distinct()->get();
            return $questions;
        }
    }

    public function paginate($items, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
   
}
