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
        $activity->user_id = Auth::id();
        $activity->user_related_id = $answer->user->id;
        $activity->content = 'đã thêm câu trả lời mới trong câu hỏi <strong>'.$answer->question->title.'</strong>';
        $activity->link = route('detail-question', ['question_id' => $answer->question->id]);
        $activity->type = Auth::user()->permission->key;
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
        $activity->user_id = Auth::id();
        $activity->user_related_id = $answer->user->id;
        $activity->content = 'đã chỉnh sửa câu trả lời trong câu hỏi <strong>'.$answer->question->title.'</strong>';
        $activity->link = route('detail-question', ['question_id' => $answer->question->id]);
        $activity->type = Auth::user()->permission->key;
        $activity->save();

        return redirect()->back()->with('thongbao', 'Cập Nhật Thành Công');
    }

    public function getDelete($idAnswer) {
        $answer = Answer::find($idAnswer);
        $commentsOfAnswer = $answer->comments;
        foreach ($commentsOfAnswer as $cmt) {
            $cmt->delete();  // Delete comments of answer
        }

        $answer->delete(); // Delete answer

        //Create Activity
        $activity = new Activity;
        $activity->user_id = Auth::id();
        $activity->user_related_id = $answer->user->id;
        $activity->content = 'đã xóa câu trả lời trong câu hỏi <strong>'.$answer->question->title.'</strong>';
        $activity->link = route('detail-question', ['question_id' => $answer->question->id]);
        $activity->type = Auth::user()->permission->key;
        $activity->save();

        return redirect()->back()->with('thongbao', 'Xóa Thành Công');
    }

    ////
    public function postVoteAnswer(Request $request, $answer_id = 0){
        if (Auth::check()) {
            $answer = Answer::find($answer_id);
            $user = $answer->user;
            $vote_record = $answer->votes->where('user_id', Auth::id())->first(); 
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
                    $answer->point_rating = $answer->point_rating - 1;
                    $answer->save();
                    $user->point_reputation = $user->point_reputation - 1;
                    $user->save();
                    
                    $isAddClass = false;
                }
                else {
                    if ($isPressedDown) {  // Status pressed down => pressed up
                        $answer->point_rating = $answer->point_rating + 2;
                        $answer->save();
                        $user->point_reputation = $user->point_reputation + 2;
                        $user->save();
                    }
                    else {                          // Status balance => pressed up
                        $answer->point_rating = $answer->point_rating + 1;
                        $answer->save();
                        $user->point_reputation = $user->point_reputation + 1;
                        $user->save();
                    }
                    // Add vote table
                    $vote = new Vote;
                    $vote->user_id = Auth::id();
                    $vote->vote_action = 'up';
                    $vote->votable_id = $answer_id;
                    $vote->votable_type = 'App\Answer';
                    $vote->save();
                }
            }
            else {
                if ($isPressedDown) {    // Status pressed down => balance
                    $answer->point_rating = $answer->point_rating + 1;
                    $answer->save();
                    $user->point_reputation = $user->point_reputation + 1;
                    $user->save();
                    
                    $isAddClass = false;
                }
                else {
                    if ($isPressedUp) {  // Status pressed up => pressed down
                        $answer->point_rating = $answer->point_rating - 2;
                        $answer->save();
                        $user->point_reputation = $user->point_reputation - 2;
                        $user->save();
                    }
                    else {                          // Status balance => pressed down
                        $answer->point_rating = $answer->point_rating - 1;
                        $answer->save();
                        $user->point_reputation = $user->point_reputation - 1;
                        $user->save();
                    }
                    // Add vote table
                    $vote = new Vote;
                    $vote->user_id = Auth::id();
                    $vote->vote_action = 'down';
                    $vote->votable_id = $answer_id;
                    $vote->votable_type = 'App\Answer';
                    $vote->save();
                }
            }
            return Response()->json(['success' => true, 'isAddClass' => $isAddClass]); 
        }
        else {
            return Response()->json(['success' => false, 'message' => 'Bạn cần phải đăng nhập để được vote cho câu hỏi này']); 
        }
        
    }

    public function postVoteBestAnswer(Request $request, $answer_id = 0){
        $question = Question::find($request->question_id);
        if ($question->user->id == Auth::id()) {
            $best_answer_old = Answer::where([['question_id', $request->question_id], ['best_answer', true]])->first();

            if(!is_null($best_answer_old)) {
                $best_answer_old->best_answer = false;
                $best_answer_old->save();

                $user_old = $best_answer_old->user;
                $user_old->point_reputation = $user_old->point_reputation - 10;
                $user_old->save();  

                if ($best_answer_old->id == $answer_id) {   //Status best => normal
                    return Response()->json(['exist' => true,'same' => true]);
                }
                else {  // Status normal => best
                    $best_answer = Answer::find($answer_id);
                    $best_answer->best_answer = true;
                    $best_answer->save();

                    $user_new = $best_answer->user;
                    $user_new->point_reputation =$user_new->point_reputation + 10;
                    $user_new->save();

                    return Response()->json(['exist' => true, 'same' => false, 'best_answer_old' => $best_answer_old->id]);
                }
            }
            else{

                $best_answer = Answer::find($answer_id);
                $best_answer->best_answer = true;
                $best_answer->save();
                
                $user_new = $best_answer->user;
                $user_new->point_reputation = $user_new->point_reputation + 10;
                $user_new->save();
                
                return Response()->json(['exist'=> false]);
            }  
        }
        return view('404_page');
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
        $activity = new Activity;
        $activity->user_id = Auth::id();
        $activity->user_related_id = $answer->question->id;
        $activity->content = 'đã trả lời cho câu hỏi <strong>'.$answer->question->title.'</strong>';
        $activity->link = route('detail-question', ['question_id' => $answer->question->id]);
        $activity->type = Auth::user()->permission->key;
        $activity->save();
        
        return redirect()->back()->with('AnswerSuccess', 'Câu trả lời đã được đăng!');
    }

    public function getEditAnswer($answer_id){
        $answer = Answer::find($answer_id);
        $question = $answer->question;
        Session::put('previousURLEditAnswer', Session::previousUrl());    
        return view('answer.edit_answer',['answer'=> $answer, 'question' => $question]);
    }

    public function postEditAnswer(Request $request, $answer_id){
        $answer = Answer::find($answer_id);
        $answer->content = $request->content_edit_answer;
        $answer->save();

        return redirect(session('previousURLEditAnswer'))->with('successEditAnswer', true);

    }

    public function getDeleteAnswer($answer_id) {
        $answer = Answer::find($answer_id);
        $answer->active = false;
        $answer->save();

        return redirect(route('detail-question', ['question_id' => $answer->question->id]))->with('action', 'Câu trả lời đã được xóa !');
    }
}
