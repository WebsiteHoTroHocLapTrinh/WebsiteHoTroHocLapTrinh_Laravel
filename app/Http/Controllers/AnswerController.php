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
use App\TagUser;
use App\PasswordReset;

class AnswerController extends Controller
{
    public function user($answer_id) {
    	$user = Answer::find($answer_id)->user;
    	return $user;
    }
    public function question($answer_id) {
        $question = Answer::find($answer_id)->question;
        return $question;
    }
    public function comments($answer_id) {
    	$comments = Answer::find($answer_id)->comments;
    	return $comments;
    }
    public function votes($answer_id) {
    	$votes = Answer::find($answer_id)->votes;
    	return $votes;
    }

    public function countvotes($answer_id) {
        $countvotes_up = Answer::find($answer_id)->votes->where('vote_action', 'up')->count();
        $countvotes_down = Answer::find($answer_id)->votes->where('vote_action', 'down')->count();
        return $countvotes_up - $countvotes_down;
    }

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

        return redirect()->back()->with('thongbao', 'Xóa Thành Công');
    }
}
