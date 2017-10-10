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
use App\Subject;
use App\TagUser;
use App\PasswordReset;

class TagController extends Controller
{
    public function questions($tag_id) {
    	$questions = Tag::find($tag_id)->questions;
    	return $questions;
    }
    public function documentations($tag_id) {
    	$documentations = Tag::find($tag_id)->documentations;
    	return $documentations;
    }
    public function users($tag_id) {
    	$users = Tag::find($tag_id)->users;
    	return $users;
    }
    public function user_created($tag_id) {
        $user_created = Tag::find($tag_id)->user_created;
        return $user_created;
    }
}
