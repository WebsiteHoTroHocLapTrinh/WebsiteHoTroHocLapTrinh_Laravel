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

class ActivityController extends Controller
{
    //Admin
    public function getActivity() {
    	$new_question = Question::where('is_new', true)->count();
    	$new_documentation = Documentation::where('is_new', true)->count();
    	$new_tag = Tag::where('is_new', true)->count();
    	$new_user = User::where('is_new', true)->count();
    	$activities_admin = Activity::where('type','=', 2)->orderByDesc('created_at')->get();
        $activities_user = Activity::where('type', '=', 1)->orderByDesc('created_at')->get();

    	return view('admin.index', ['activities_admin' => $activities_admin, 'activities_user' => $activities_user, 
    		'new_question' => $new_question, 
    		'new_documentation' => $new_documentation, 
    		'new_tag' => $new_tag, 
    		'new_user' => $new_user,]);
    }
}
