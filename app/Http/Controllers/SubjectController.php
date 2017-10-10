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

class SubjectController extends Controller
{
    public function documentations($subject_id) {
    	$documentations = Subject::find($subject_id)->documentations;
    	return $documentations;
    }
        public function user_created($subject_id) {
    	$user_created = Subject::find($subject_id)->user_created;
    	return $user_created;
    }
}
