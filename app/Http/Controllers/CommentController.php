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
        
        $comment->delete();

        //Create Activity
        $object = $comment->commentable;
        $activity = new Activity;
        $activity->user_id = Auth::id();
        $activity->user_related_id = $object->user->id;
        switch (get_class($object)) {
            case 'App\Question':
                $activity->content = 'đã xóa bình luận cho câu hỏi <strong>'.$object->title.'</strong>';
                break;
            case 'App\Answer':
                $activity->content = 'đã xóa bình luận cho câu trả lời';
                break;
            case 'App\Documentation':
                $activity->content = 'đã xóa bình luận cho tài liệu <strong>'.$object->title.'</strong>';
                break;
            default:
                # code...
                break;
        }
        $activity->link = route('detail-question', ['question_id' => $object->id]);
        $activity->type = Auth::user()->permission->key;
        $activity->save();

        return redirect()->back()->with('thongbao_comment', 'Xóa Thành Công');
    }


    //////////////
     public function postAddComment(Request $request) {
        //add comment
        $comment = new Comment;
        $comment->user_id = Auth::id();
        $comment->commentable_id = $request->commentable_id;

        $type = (int) $request->type;
        switch ($type) {
            case 1:
                $comment->commentable_type = 'App\Question';
                break;
            case 2:
                $comment->commentable_type = 'App\Answer';
                break;
            case 3:
                $comment->commentable_type = 'App\Documentation';
                break;
            default:
                # code...
                break;
        }
        
        $comment->content = $request->content;
        $comment->save();

        //add new activity
        $object = $comment->commentable;
        $activity = new Activity;
        $activity->user_id = Auth::id();
        $activity->user_related_id = $object->user->id;
        switch (get_class($object)) {
            case 'App\Question':
                $activity->content = 'đã bình luận cho câu hỏi <strong>'.$object->title.'</strong>';
                break;
            case 'App\Answer':
                $activity->content = 'đã bình luận cho câu trả lời';
                break;
            case 'App\Documentation':
                $activity->content = 'đã bình luận cho tài liệu <strong>'.$object->title.'</strong>';
                break;
            default:
                # code...
                break;
        }
        $activity->link = route('detail-question', ['question_id' => $object->id]);
        $activity->type = Auth::user()->permission->key;
        $activity->save();

        //variable for view list comment
        switch ($type) {
            case 1:
                $question = Question::find($request->commentable_id);
                $new_comments = $question->comments()->orderBy('created_at','asc')->get();
                break;
            case 2:
                $answer = Answer::find($request->commentable_id);
                $new_comments = $answer->comments()->orderBy('created_at','asc')->get();
                break;
            case 3:
                $documentation = Documentation::find($request->commentable_id);
                $new_comments = $documentation->comments()->orderBy('created_at','asc')->get();
                break;
            default:
                # code...
                break;
        }
        
        return view('comment.list_comment', ['comments' => $new_comments]);
    }

    public function postEditComment(Request $request, $cmt_id = 0) {
        $comment = Comment::find($cmt_id);
        if(Auth::id()==$comment->user_id){
            $comment->content = $request->content;
            $comment->save();
            return Response()->json(['success' => true]); 
        } 
        return Response()->json(['success' => false]); 
    }

    public function getDeleteComment($cmt_id = 0) {
        $comment = Comment::find($cmt_id);

        if (Auth::id() == $comment->user_id) {

            $comment->active = false;
            $comment->save();

            //add new activity
            $object = $comment->commentable;
            $activity = new Activity;
            $activity->user_id = Auth::id();
            $activity->user_related_id = $object->user->id;
            switch (get_class($object)) {
                case 'App\Question':
                    $activity->content = 'đã xóa bình luận cho câu hỏi <strong>'.$object->title.'</strong>';
                    break;
                case 'App\Answer':
                    $activity->content = 'đã xóa bình luận cho câu trả lời';
                    break;
                case 'App\Documentation':
                    $activity->content = 'đã xóa bình luận cho tài liệu <strong>'.$object->title.'</strong>';
                    break;
                default:
                    # code...
                    break;
            }
            $activity->link = route('detail-question', ['question_id' => $object->id]);
            $activity->type = Auth::user()->permission->key;
            $activity->save();

            return Response()->json(['success' => true]); 
        }

       return Response()->json(['success' => false]); 
    }
    
}
