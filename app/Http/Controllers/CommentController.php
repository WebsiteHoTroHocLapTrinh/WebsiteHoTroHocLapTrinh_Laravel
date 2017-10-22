<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use DateTime;
use App\Permission;
use App\User;
use App\Tag;
use App\Question;
use App\Answer;
use App\Taggable;
use App\Documentation;
use App\Comment;
use App\Subject;
use App\Activity;
use App\Ping;
use App\Vote;
use App\PasswordReset;

class CommentController extends Controller
{
    // Admin
    public function getDelete($idComment) {
        $comment = Comment::find($idComment);
        $pingsOfComment = $comment->pings;
        foreach ($pingsOfComment as $ping) {
            $ping->delete();    // Delete pings of comment
        }
        $comment->delete();

        //Create Activity
        $object = $comment->commentable;
        $activity = new Activity;
        $activity->user_id = Auth::user()->id;
        switch (get_class($object)) {
            case 'App\Question':
                $activity->content = 'Xóa bình luận của câu hỏi <a href="/admin/question/list" target="_blank">'.$object->title.'</a>';
                break;
            case 'App\Documentation':
                $activity->content = 'Xóa bình luận của tài liệu <a href="/admin/documentation/list" target="_blank">'.$object->title.'</a>';
                break;
            case 'App\Answer':
                $activity->content = 'Xóa bình luận của câu trả lời <a href="/admin/question/answer/list/'.$object->question->id.'" target="_blank"> ID: '.$object->id.'</a>';
                break;
            
            default:
                # code...
                break;
        }
        
        $activity->type = 1;
        $activity->save();

        return redirect()->back()->with('thongbao_comment', 'Xóa Thành Công');
    }
}
