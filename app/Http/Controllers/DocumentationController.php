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


class DocumentationController extends Controller
{
    //Admin
    public function getList(){
        $documents = Documentation::all();
        return view('admin.documentation.list',['documents'=>$documents]);
    }

    public function getDelete($idDocument){
        $document = Documentation::find($idDocument);
        $comments = $document->comments;
        //
        foreach($comments as $cmt){
            $pingsOfComment = $cmt->pings;
            foreach ($pingsOfComment as $ping) {
                $ping->delete();   
            }
            $cmt->delete();
        }
        //
        foreach ($document->tags as $tag) {
            Taggable::where([
                ['taggable_id', $tag->pivot->taggable_id], 
                ['tag_id', $tag->pivot->tag_id]
            ])->delete();
        }
        $document->delete();

        //Create Activity
        $activity = new Activity;
        $activity->user_id = Auth::user()->id;
        $activity->content = 'Xóa tài liệu <a href="/admin" target="_blank">'.$document->title.'</a>';
        $activity->type = 1;
        $activity->save();

        return redirect()->back()->with('thongbao', 'Xóa Thành Công');
    }

    public function getEdit($idDocument){
        $document= Documentation::find($idDocument);
        $id = $document->subject_id;
        $subjects = Subject::where('active','1')->get();
        $tags = Tag::where('active',1)->get();
        return view('admin.documentation.edit',['document'=>$document,'subjects'=>$subjects, 'tags'=>$tags]);
    }

    public function postEdit(Request $request, $idDocument){
        // Validate date input
        $validator = Validator::make($request->all(), 
            [
                'title' => 'required|min:6',
                'content' => 'required',
                'link' =>'required',
                'list_tag' => 'required',
            ],
            [
                'title.required' => 'Bạn chưa nhập tiêu đề',
                'title.min' => 'Tiêu đề phải có ít nhất 6 ký tự',
                'content.required' => 'Bạn chưa nhập nội dung',
                'link.required' => 'Bạn chưa nhập link',
                'list_tag.required' => 'Bạn chưa nhập các thẻ liên quan',
            ] 
        );
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        //update table Documentation
        $Document = Documentation::find($idDocument);
        $Document->subject_id = $request->subject;
        $Document->title = $request->title;
        $Document->title_url = changeTitle($request->title);
        $Document->content = $request->content;
        $Document->link = $request->link;
        if ($request->has('active')) {
            $Document->active = true;
        }
        else {
            $Document->active = false;
        }
        $Document->updated_at = new DateTime();
        $Document->save();

        //update tagtable
        foreach ($Document->tags as $taggable) {
            $taggable->pivot->delete();
        }
        //
         $arrayTags = explode(',', $request->list_tag);  // Split data Ex: 1,2,3 => ["1", "2", "3"]
         foreach ($arrayTags as $tag) {
            $taggable = new Taggable;
            $taggable->tag_id = $tag;
            $taggable->taggable_id = $Document->id;
            $taggable->taggable_type = "App\Documentation";
            $taggable->active = true;
            $taggable->created_at = new DateTime();
            $taggable->updated_at = new DateTime();
            $taggable->save();
        }

        //Create Activity
        $activity = new Activity;
        $activity->user_id = Auth::user()->id;
        $activity->content = 'Cập nhật tài liệu <a href="/admin/documentation/edit/'.$Document->id.'" target="_blank">'.$Document->title.'</a>';
        $activity->type = 1;
        $activity->save();

        return redirect()->back()->with('thongbao', 'Cập Nhật Thành Công');  
    }

    public function getAdd(){
        $tags = Tag::where('active',1)->get();
        $subjects= Subject::where('active',1)->get();
        return view('admin.documentation.add', ['tags' => $tags, 'subjects'=>$subjects]);
    }

    public function postAdd(Request $request){
        // Validate date input
        $validator = Validator::make($request->all(), 
            [
                'title' => 'required|min:6',
                'content' => 'required',
                'link' =>'required',
                'list_tag' => 'required',
            ],
            [
                'title.required' => 'Bạn chưa nhập tiêu đề',
                'title.min' => 'Tiêu đề phải có ít nhất 6 ký tự',
                'content.required' => 'Bạn chưa nhập nội dung',
                'link.required' => 'Bạn chưa nhập link',
                'list_tag.required' => 'Bạn chưa nhập các thẻ liên quan',
            ] 
        );
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        //add to tbDocunmentation
        $tbDocumentation = new Documentation;
        $tbDocumentation->user_id = Auth::user()->id;
        $tbDocumentation->subject_id = $request->subject;
        $tbDocumentation->title = $request->title;
        $tbDocumentation->title_url = changeTitle($request->title);
        $tbDocumentation->content = $request->content;
        $tbDocumentation->link = $request->link;
        if ($request->has('active')) {
            $tbDocumentation->active = true;
        }
        else {
            $tbDocumentation->active = false;
        }
        $tbDocumentation->created_at = new DateTime();
        $tbDocumentation->updated_at = new DateTime();
        $tbDocumentation->save();

        //add tagtable
         $arrayTags = explode(',', $request->list_tag);  // Split data Ex: 1,2,3 => ["1", "2", "3"]
         foreach ($arrayTags as $tag) {
            $taggable = new Taggable;
            $taggable->tag_id = $tag;
            $taggable->taggable_id = $tbDocumentation->id;
            $taggable->taggable_type = "App\Documentation";
            $taggable->active = true;
            $taggable->created_at = new DateTime();
            $taggable->updated_at = new DateTime();
            $taggable->save();
        }

        //Create Activity
        $activity = new Activity;
        $activity->user_id = Auth::user()->id;
        $activity->content = 'Thêm tài liệu mới <a href="/admin/documentation/edit/'.$tbDocumentation->id.'" target="_blank">'.$tbDocumentation->title.'</a>';
        $activity->type = 1;
        $activity->save();
        
        return redirect()->back()->with('thongbao', 'Thêm Thành Công');
    }
}
