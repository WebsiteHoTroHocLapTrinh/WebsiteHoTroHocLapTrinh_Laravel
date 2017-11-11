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
use Session;

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
        $answer->is_new = true;
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

    ////
    public function postVote(Request $request, $answer_id){
        if(Auth::check()){
            $answer = Answer::find($answer_id);
            $user = $answer->user;
            $vote_record = $answer->votes->where('user_id', Auth::id())->first(); 
            
            if(!is_null($vote_record)){//exist user (up or down)
                if($vote_record->vote_action != $request->up_down){
                    if($request->up_down=='up'){
                        $answer->point_rating = $answer->point_rating + 1;
                        $user->point_reputation = $user->point_reputation + 1;
                        $vote_record->vote_action = 'up';
                        $answer->save();
                        $user->save();
                        $vote_record->save();
                    }
                    else{
                        $answer->point_rating = $answer->point_rating - 1;
                        $user->point_reputation = $user->point_reputation - 1;
                        $vote_record->vote_action = 'down';
                        $answer->save();
                        $user->save();
                        $vote_record->save();
                    }

                    return Response()->json(['success' => true]); 
                }
                else{
                    return Response()->json(['success' => false, 'message' => 'Bạn chỉ được vote (up/down) một lần!']);
                }
            }
            else{

                if($request->up_down=='up'){
                    $answer->point_rating = $answer->point_rating + 1;
                    $user->point_reputation = $user->point_reputation + 1;
                    $answer->save();
                    $user->save();
                        //add vote table
                    $vote = new Vote;
                    $vote->user_id = Auth::id();
                    $vote->vote_action = 'up';
                    $vote->votable_id = $answer_id;
                    $vote->votable_type = 'App\Answer';
                    $vote->save();
                }
                else{
                    $answer->point_rating = $answer->point_rating - 1;
                    $user->point_reputation = $user->point_reputation - 1;
                    $answer->save();
                    $user->save();
                         //add vote table
                    $vote = new Vote;
                    $vote->user_id = Auth::id();
                    $vote->vote_action = 'down';
                    $vote->votable_id = $question_id;
                    $vote->votable_type = 'App\Answer';
                    $vote->save();
                }
                return Response()->json(['success' => true]); 
            }

        }
        //don't login yet
        return Response()->json(['success' => false, 'message' => 'Bạn cần phải đăng nhập để được vote cho câu hỏi này']); 
        
    }

    public function postBestAnswer(Request $request, $answer_id){
        $best_answer_old = Answer::where([['question_id',$request->question_id], ['best_answer', 1]])->first();
        if(!is_null($best_answer_old)){
            $best_answer_old->best_answer =false;
            $user_old = $best_answer_old->user;
            $user_old->point_reputation = $user_old->point_reputation -10;
            $user_old->save();
            $best_answer_old->save();

            if($best_answer_old->id==$answer_id){
                return Response()->json(['exist'=>true,'trung' =>true]);
            }
            

            $best_answer = Answer::find($answer_id);
            $user_new = $best_answer->user;
            $best_answer->best_answer = true;
            $user_new->point_reputation =$user_new->point_reputation +10;
            $best_answer->save();
            $user_new->save();
            return Response()->json(['exist'=>true, 'trung'=>false, 'best_answer_old'=>$best_answer_old->id]);
        }
        else{

            $best_answer = Answer::find($answer_id);
            $user_new = $best_answer->user;
            $user_new->point_reputation =$user_new->point_reputation +10;
            $best_answer->best_answer = true;
            $user_new->save();
            $best_answer->save();
            return Response()->json(['exist'=> false]);
        }  
    }

    public function postAddAnswer(Request $request, $question_id){
        $validator = Validator::make($request->all(), 
            [
                'content_new_answer' => 'required',
            ],
            [
                'content_new_answer' => 'Bạn chưa nhập nội dung',
            ] 
        );
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        $answer = new Answer;
        $answer->user_id = Auth::id();
        $answer->question_id = $question_id;
        $answer->content = $request->content_new_answer;
        $answer->save();

         //Create Activity
        $question = Question::find($question_id);
        $activity = new Activity;
        $activity->user_id = Auth::id();
        $activity->content = 'trả lời câu hỏi <a href="/admin/question/list" target="_blank">'.$question->title.'</a>';
        $activity->type = 1;
        $activity->save();
        
        return redirect()->back()->with('AnswerSuccess', 'Câu trả lời đã được đăng!');
    }

    public function getEditAnswer($answer_id){
        $answer = Answer::find($answer_id);
        $question = $answer->question;
        Session::put('previousURLEditAnswer', Session::previousUrl());    
        return view('question.edit_answer',['answer'=> $answer, 'question' => $question]);
    }

    public function postEditAnswer(Request $request, $answer_id){
        $answer = Answer::find($answer_id);
        $answer->content = $request->content_edit_answer;
        $answer->save();
        //Create Activity
        $question = $answer->question;
        $activity = new Activity;
        $activity->user_id = Auth::id();
        $activity->content = 'cập nhật câu trả lời ID:'.$answer_id.' cho câu hỏi <a href="/admin/question/list" target="_blank">'.$question->title.'</a>';
        $activity->type = 1;
        $activity->save();
        return redirect(session('previousURLEditAnswer'))->with('successEditAnswer', true);

    }
}
