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

class PermissionController extends Controller
{
    public function users($permission_id) {
    	$users = Permission::find($permission_id)->users;
    	return $users;
    }
    public function user_created($permission_id) {
    	$user_created = Permission::find($permission_id)->user_created;
    	return $user_created;
    }
}
