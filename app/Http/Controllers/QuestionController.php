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
use App\TagUser;
use App\PasswordReset;

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
}
