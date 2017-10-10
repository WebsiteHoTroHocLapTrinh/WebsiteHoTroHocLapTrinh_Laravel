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

class TestController extends Controller
{
    public function morphMany() {
    	// $question = Question::find('8');
    	// return $question->tags;
    	$documentation = Documentation::find('10');
    	return $documentation->tags;
    	// $tag = Tag::find('10');
    	// return $tag->questions;
    }

    public function morphTo() {
    	// $comment = Comment::find('12');
    	// return $comment->commentable;
    	$answer = Answer::find('10');
    	return $answer->comments;
    }
}
