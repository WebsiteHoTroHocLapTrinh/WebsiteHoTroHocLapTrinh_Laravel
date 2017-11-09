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


    //////////////
    public function postEdit(Request $request, $cmt_id){
        $comment = Comment::find($cmt_id);
        if(Auth::id()==$comment->user_id){
            $comment->content = $request->content;
            $comment->save();
            return Response()->json(['success' => true]); 
        } 
        return Response()->json(['success' => false]); 
    }

    public function postAdd(Request $request){
        //add comment
        $comment = new Comment;
        $comment->user_id = Auth::id();
        $comment->commentable_id = $request->commentable_id;
        switch ($request->type) {
            case 1:
                $comment->commentable_type = 'App\Question';
                break;
            case 2:
                $comment->commentable_type = 'App\Answer';
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
        switch (get_class($object)) {
            case 'App\Question':
                $activity->content = 'đã bình luận cho câu hỏi <a href="/admin/question/list" target="_blank">'.$object->title.'</a>';
                break;
            case 'App\Documentation':
                // $activity->content = 'Xóa bình luận của tài liệu <a href="/admin/documentation/list" target="_blank">'.$object->title.'</a>';
                break;
            case 'App\Answer':
                $activity->content = 'đã bình luận cho câu trả lời <a href="/admin/question/answer/list/'.$object->question->id.'" target="_blank"> ID: '.$object->id.'</a>';
                break;
            
            default:
                # code...
                break;
        }
        $activity->type = 1;
        $activity->save();

        //
        switch ($request->type) {
            case 1:{
                $question = Question::find($request->commentable_id);
                $new_comments = $question->comments()->orderBy('id','desc')->get();
            } break;
            case 2:{
                $answer = Answer::find($request->commentable_id);
                $new_comments = $answer->comments()->orderBy('id','desc')->get();
            } break;

            default:
                # code...
                break;
        }
        
        return view('question.list_comments',['comments'=>$new_comments]);
    }

    public function getDeleteCmt($cmt_id){
        $comment = Comment::find($cmt_id);

        if(Auth::id()==$comment->user_id){

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

            return Response()->json(['success' => true]); 
        }

       return Response()->json(['success' => false]); 
    }
    
}
