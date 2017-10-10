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

class DocumentationController extends Controller
{
    public function user($documentation_id) {
    	$user = Documentation::find($documentation_id)->user;
    	return $user;
    }
    public function tags($documentation_id) {
    	$tags = Documentation::find($documentation_id)->tags;
    	return $tags;
    }
    public function comments($documentation_id) {
    	$comments = Documentation::find($documentation_id)->comments;
    	return $comments;
    }
    public function votes($documentation_id) {
        $votes = Documentation::find($documentation_id)->votes;
        return $votes;
    }

    public function countvotes($documentation_id) {
        $countvotes_up = Documentation::find($documentation_id)->votes->where('vote_action', 'up')->count();
        $countvotes_down = Documentation::find($documentation_id)->votes->where('vote_action', 'down')->count();
        return $countvotes_up - $countvotes_down;
    }
}
