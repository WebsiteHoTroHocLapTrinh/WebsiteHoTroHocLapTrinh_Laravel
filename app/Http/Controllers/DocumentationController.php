<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use DateTime;
use Event;
use Session;
use Illuminate\Database\Eloquent\Collection;
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
        $activity->user_id = Auth::id();
        $activity->user_related_id = $document->user->id;
        $activity->content = 'đã xóa vĩnh viễn tài liệu <strong>'.$document->title.'</strong>';
        // $activity->link = route('detail-question', ['question_id' => $idQuestion]);
        $activity->type = Auth::user()->permission->key;
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
        $Document->is_new = true;
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
        $activity->user_id = Auth::id();
        $activity->user_related_id = $Document->user->id;
        $activity->content = 'đã chỉnh sửa tài liệu <strong>'.$Document->title.'</strong>';
        // $activity->link = route('detail-question', ['question_id' => $idQuestion]);
        $activity->type = Auth::user()->permission->key;
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
        $activity->user_id = Auth::id();
        $activity->user_related_id = $tbDocumentation->user->id;
        $activity->content = 'đã thêm tài liệu mới <strong>'.$tbDocumentation->title.'</strong>';
        // $activity->link = route('detail-question', ['question_id' => $idQuestion]);
        $activity->type = Auth::user()->permission->key;
        $activity->save();
        
        return redirect()->back()->with('thongbao', 'Thêm Thành Công');
    }

    //User
    public function getListDocumentation(Request $request, $subject = 0, $list_tag = 0, $tab = 'new') {
        $subjects = Subject::where('active', true)->get();
        $tags = Tag::where('active', true)->get();
        
        $documentations = $this->collectDocumentation($subject, $list_tag);
        switch ($tab) {
            case 'new':
                $documentations = $documentations->orderBy('created_at', 'desc')->paginate(5);
                break;
            case 'view':
                $documentations = $documentations->orderBy('view', 'desc')->paginate(5);
                break;
            case 'favorite':
                $documentations = $documentations->orderBy('point_rating', 'desc')->paginate(5);
                break;
            default:
                $documentations = $documentations->paginate(5);
                break;
        }

        if($request->ajax()){
            return view('documentation.items_documentation', ['documentations' => $documentations, 'tab' => $tab]);
        }

        $top_user = User::where('active',1)->orderBy('point_reputation','desc')->get()->take(10);
        $top_tag = Tag::join('taggables','taggables.tag_id','=','tags.id')->
        selectRaw('count(taggables.tag_id) AS `kount`, tags.name')->
        groupBy('tags.id')->
        orderBy('kount', 'desc')->
        get();

        $tags_filter = $tags->whereIn('id', explode(',', $list_tag))->values();
        return view('documentation.list_documentation', ['subjects' => $subjects, 'tags' => $tags, 'documentations' => $documentations,'top_user'=>$top_user,'top_tag'=>$top_tag, 'subject_filter' => $subject, 'tags_filter' => $tags_filter, 'tab' => $tab]);
    }

    public function collectDocumentation($subject, $list_tag) {
        if ($subject == 0 && $list_tag == 0) {
            return $documentations = Documentation::where('active', true);
        }
        if ($list_tag == 0) {
            return $documentations = Documentation::where('active', true)->where('subject_id', $subject);
        }
        if ($subject == 0) {
            return $documentations = Documentation::join('taggables', function($join) {
                    $join->on('documentations.id', '=', 'taggables.taggable_id')
                    ->where('taggables.taggable_type', '=', 'App\Documentation');
                })->join('tags', function($join) use ($list_tag) {
                    $join->on('taggables.tag_id', '=', 'tags.id')
                    ->whereIn('tags.id', explode(',', $list_tag));
                })
            ->select('documentations.*')->distinct()->where('documentations.active', true);
        }
        return $documentations = Documentation::join('taggables', function($join) {
                    $join->on('documentations.id', '=', 'taggables.taggable_id')
                    ->where('taggables.taggable_type', '=', 'App\Documentation');
                })->join('tags', function($join) use ($list_tag) {
                    $join->on('taggables.tag_id', '=', 'tags.id')
                    ->whereIn('tags.id', explode(',', $list_tag));
                })
            ->select('documentations.*')->distinct()->where('documentations.active', true)->where('documentations.subject_id', $subject);
    }

    public function getDetailDocumentation(Request $request, $documentation_id){
        $documentation = Documentation::find($documentation_id);
        if($request->ajax()){
            switch ($request->type) {
                case 'comments-documentation':
                    $list_comment = $documentation->comments->where('active', true);
                    if(count($list_comment) > 3) {
                        $comments_skip =  $list_comment->sortBy('created_at')->slice(3);
                        return view('comment.list_comment', ['comments'=>$comments_skip]);
                    }
                    break;
                default:
                    # code...
                    break;
            }

        }

        // Documentation related
        $tags = $documentation->tags;
        $all_documentation_related = new Collection;   
        foreach ($tags as $tag) {
            $documentations_related = $tag->documentations->where('id', '!=', $documentation->id)->unique()->values();
            foreach ($documentations_related as $doc) {
                $all_documentation_related->push($doc);
            }  
        }
        $top10_documentation_related = $all_documentation_related->unique()->sortByDesc('point_rating')->values()->take(10);

        Event::fire('documentation.view', $documentation);//increase view
        return view('documentation.detail_documentation', ['documentation'=>$documentation, 'top10_documentation_related' => $top10_documentation_related]);
    }

    public function postVoteDocumentation(Request $request, $documentation_id) {
        if (Auth::check()) {
            $documentation = Documentation::find($documentation_id);
            $user = $documentation->user;
            $vote_record = $documentation->votes->where('user_id', Auth::id())->first(); 
            // Flag
            $isAddClass = true;
            //Convert string to boolen
            $isPressedUp = $request->isPressedUp === 'true' ? true : false;

            if (!is_null($vote_record)) {
                $vote_record->delete(); // Delete current vote if exist
            }

            if ($isPressedUp) {    // Status pressed up => balance
                $documentation->point_rating = $documentation->point_rating - 1;
                $documentation->save();
                $user->point_reputation = $user->point_reputation - 1;
                $user->save();
                
                $isAddClass = false;
            }
            else {
                // Status balance => pressed up
                $documentation->point_rating = $documentation->point_rating + 1;
                $documentation->save();
                $user->point_reputation = $user->point_reputation + 1;
                $user->save();

                // Add vote table
                $vote = new Vote;
                $vote->user_id = Auth::id();
                $vote->vote_action = 'up';
                $vote->votable_id = $documentation_id;
                $vote->votable_type = 'App\Documentation';
                $vote->save();
            }

            return Response()->json(['success' => true, 'isAddClass' => $isAddClass]); 
        }
        else {
            return Response()->json(['success' => false, 'message' => 'Bạn cần phải đăng nhập để được vote cho câu hỏi này']); 
        }
    }

    public function getCreateDocumentation() {
        $subjects = Subject::where('active', true)->get();
        $tags = Tag::where('active', true)->get();
        return view('documentation.create_documentation', ['subjects' => $subjects, 'tags' => $tags]);
    }

    public function postCreateDocumentation(Request $request) {
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

        //create Docunmentation
        $tbDocumentation = new Documentation;
        $tbDocumentation->user_id = Auth::user()->id;
        $tbDocumentation->subject_id = $request->subject;
        $tbDocumentation->title = $request->title;
        $tbDocumentation->title_url = changeTitle($request->title);
        $tbDocumentation->content = $request->content;
        $tbDocumentation->link = $request->link;
        $tbDocumentation->created_at = new DateTime();
        $tbDocumentation->updated_at = new DateTime();
        $tbDocumentation->save();

        //create Taggable
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

        // Increase User point reputation
        Auth::user()->point_reputation += 100;
        Auth::user()->save();

        //Create Activity
        $activity = new Activity;
        $activity->user_id = Auth::id();
        $activity->user_related_id = $tbDocumentation->user->id;
        $activity->content = 'đã đăng tài liệu mới <strong>'.$tbDocumentation->title.'</strong>';
        // $activity->link = route('detail-question', ['question_id' => $idQuestion]);
        $activity->type = Auth::user()->permission->key;
        $activity->save();

        $previousURL = route('list-documentation');  //Chuyển lại về chi tiết khi làm xong
        return redirect('congratulation')->with('thongbao', 
            '<h1>Chia Sẽ Tài Liệu Thành Công !!!</h1>
            <br>
            <h3>Bạn nhận được 100 điểm uy tín !!!</h3>
            <br>')->with('previousURL', $previousURL);
    }

    public function getEditDocumentation($documentation_id) {
        $subjects = Subject::where('active', true)->get();
        $tags = Tag::where('active', true)->get();
        $documentation = Documentation::find($documentation_id);
        Session::put('previousURLEditDocumentation', Session::previousUrl());   
        return view('documentation.edit_documentation', ['documentation' => $documentation, 'tags' => $tags, 'subjects' => $subjects]);
    }

    public function postEditDocumentation(Request $request, $documentation_id) {
        // Validate date input
        $validator = Validator::make($request->all(), 
            [
                'title' => 'required|min:6',
                'content' => 'required',
                'list_tag' => 'required',
            ],
            [
                'title.required' => 'Bạn chưa nhập tiêu đề',
                'title.min' => 'Tiêu đề phải có ít nhất 6 ký tự',
                'content.required' => 'Bạn chưa nhập nội dung',
                'list_tag.required' => 'Bạn chưa nhập các thẻ liên quan',
            ] 
        );
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        // Create Model Documentation and set properties
        $documentation = Documentation::find($documentation_id);
        $documentation->subject_id = $request->subject;
        $documentation->title = $request->title;
        $documentation->title_url = changeTitle($request->title);
        $documentation->content = $request->content;
        $documentation->link = $request->link;
        $documentation->save();

        //Process list tag
        foreach ($documentation->tags as $taggable) {
            $taggable->pivot->delete();    // Delete old taggables
        }

        $arrayTags = explode(',', $request->list_tag);  // Split data Ex: 1,2,3 => ["1", "2", "3"]
        foreach ($arrayTags as $tag) {
            // Create Model Taggable and set properties
            $taggable = new Taggable;
            $taggable->tag_id = $tag;
            $taggable->taggable_id = $documentation->id;
            $taggable->taggable_type = "App\Documentation";
            $taggable->active = true;
            $taggable->created_at = new DateTime();
            $taggable->updated_at = new DateTime();
            $taggable->save();   // Save into database
        }

        return redirect(session('previousURLEditDocumentation'))->with('successEditDocumentation', true);
    }

     public function getDeleteDocumentation($documentation_id) {
        $documentation = Documentation::find($documentation_id);
        $documentation->active = false;
        $documentation->save();

        return redirect(route('detail-documentation', ['documentation_id' => $documentation->id]))->with('action', 'Tài liệu đã được xóa !');
    }

    public function getRestoreDocumentation($documentation_id) {
        $documentation = Documentation::find($documentation_id);
        $documentation->active = true;
        $documentation->save();

        return redirect(route('detail-documentation', ['documentation_id' => $documentation->id]))->with('action', 'Tài liệu đã được khôi phục !');
    }

    public function postSearchDocumentation(Request $request){
        $key = $request->key_search;
        $words = explode(' ', $key);
        $documentations = Documentation::where(function ($query)use($words) {
            foreach($words as $word) {
                $query->orWhere('title', 'LIKE', '%' . $word . '%');
            }
        })->orWhere(function ($query)use($words) {
            foreach($words as $word) {
                $query->orWhere('content', 'LIKE', '%' . $word . '%');
            }
        })->get();

        $top_user = User::where('active',1)->orderBy('point_reputation','desc')->get()->take(10);
        $top_tag = Tag::join('taggables','taggables.tag_id','=','tags.id')->
        selectRaw('count(taggables.tag_id) AS `kount`, tags.name')->
        groupBy('tags.id')->
        orderBy('kount', 'desc')->
        get();

        return view('documentation.result_search', ['documentations' => $documentations,'top_user'=>$top_user,'top_tag'=>$top_tag, 'key' => $key]);
    }
}
