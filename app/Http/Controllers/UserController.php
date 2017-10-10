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

class UserController extends Controller
{
    public function permission($user_id) {
    	$permission = User::find($user_id)->permission;
    	return $permission;
    }
    public function questions($user_id) {
    	$questions = User::find($user_id)->questions;
    	return $questions;
    }
    public function answers($user_id) {
    	$answers = User::find($user_id)->answers;
    	return $answers;
    }
    public function documentations($user_id) {
    	$documentations = User::find($user_id)->documentations;
    	return $documentations;
    }
    public function comments($user_id) {
    	$comments = User::find($user_id)->comments;
    	return $comments;
    }
    public function tags($user_id) {
    	$tags = User::find($user_id)->tags;
    	return $tags;
    }
    public function votes($user_id) {
        $votes = User::find($user_id)->votes;
        return $votes;
    }
    public function permission_created($user_id) {
        $permission_created = User::find($user_id)->permission_created;
        return $permission_created;
    }
    public function subject_created($user_id) {
        $subject_created = User::find($user_id)->subject_created;
        return $subject_created;
    }
    public function tag_created($user_id) {
        $tag_created = User::find($user_id)->tag_created;
        return $tag_created;
    }
}
