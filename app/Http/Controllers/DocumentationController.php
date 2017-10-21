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
use App\Subject;
use Validator;
use DateTime;
use Auth;


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


    //Admin
    public function getList(){
        $List = Documentation::all();
        return view('admin.documentation.list',['list'=>$List]);
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
        
        return redirect()->back()->with('thongbao', 'Thêm Thành Công');
    }
}
