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
    public function pings($comment_id) {
    	$pings = Comment::find($comment_id)->pings;
    	return $pings;
    }

    // Admin
    public function getDelete($idComment) {
        $comment = Comment::find($idComment);
        $pingsOfComment = $comment->pings;
        foreach ($pingsOfComment as $ping) {
            $ping->delete();    // Delete pings of comment
        }
        $comment->delete();

        return redirect()->back()->with('thongbao_comment', 'Xóa Thành Công');
    }
}
