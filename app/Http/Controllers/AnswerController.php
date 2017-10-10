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

class AnswerController extends Controller
{
    public function user($answer_id) {
    	$user = Answer::find($answer_id)->user;
    	return $user;
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
}
