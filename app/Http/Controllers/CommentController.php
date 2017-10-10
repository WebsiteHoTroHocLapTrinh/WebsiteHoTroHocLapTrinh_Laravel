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

class CommentController extends Controller
{
    public function user($comment_id) {
    	$user = Comment::find($comment_id)->user;
    	return $user;
    }
    public function commentable($comment_id) {
    	$commentable = Comment::find($comment_id)->commentable;
    	return $commentable;
    }
}
