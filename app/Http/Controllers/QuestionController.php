<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;
use App\User;
use App\Tag;
use App\Question;
use App\Answer;
use App\Taggable;
use App\Documentation;
use App\Comment;
use App\UserFavoriteTag;
use App\PasswordReset;
use App\Activity;
use App\Ping;
use App\Subject;
use App\Vote;

class QuestionController extends Controller
{
    public function user($question_id) {
    	$user = Question::find($question_id)->user;
    	return $user;
    }
    public function tags($question_id) {
    	$tags = Question::find($question_id)->tags;
    	return $tags;
    }
    public function comments($question_id) {
    	$comments = Question::find($question_id)->comments;
    	return $comments;
    }
    public function votes($question_id) {
        $votes = Question::find($question_id)->votes;
        return $votes;
    }
    public function countvotes($question_id) {
        $countvotes_up = Question::find($question_id)->votes->where('vote_action', 'up')->count();
        $countvotes_down = Question::find($question_id)->votes->where('vote_action', 'down')->count();
        return $countvotes_up - $countvotes_down;
    }

    // Admin
    public function getList() {
        $questions = Question::all();
        return view('admin.question.list', ['questions' => $questions]);
    }

    public function getAdd() {
        $tags = Tag::where('active', '1')->get();
        return view('admin.question.add', ['tags' => $tags]);
    }

    public function postAdd(Requestư $request) {
        $this->validate($request, 
            [

            ],
            [
                
            ] 
        );
    }
}
