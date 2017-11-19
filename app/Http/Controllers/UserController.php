<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use DateTime;
use Session;
use Carbon\Carbon;
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
use File;
use Hash;

class UserController extends Controller
{
    // Auth
    public function getLogin() {
        Session::put('previousURL', Session::previousUrl());    
        return view('user.login');
    }

    public function postLogin(Request $request) {
        $validator = Validator::make($request->all(), 
            [
                'email' => 'required|email',
                'password' => 'required|min:6|max:32',
            ], 
            [
                'email.required' => 'Bạn chưa nhập email',
                'email.email' => 'Bạn chưa nhập đúng định dạng email',
                'password.required' => 'Bạn chưa nhập password',
                'password.min' => 'Mật khẩu phải có độ dài từ 6 đến 32 ký tự',
                'password.max' => 'Mật khẩu phải có độ dài từ 6 đến 32 ký tự',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'active' => true])) {
            $previousURL = Session::get('previousURL');
            Session::forget('previousURL');
            return redirect('congratulation')->with('thongbao', 
            '<h1>Đăng Nhập Thành Công !!!</h1>
            <br>
            <h3>Hãy cùng giúp nhau để phát triễn nhé. Thân !!!</h3>
            <br>')->with('previousURL', $previousURL);
        }
        else {
            return redirect()->back()->with('thongbao','Sai tên đăng nhập hoặc mật khẩu');
        }

    }

    public function getLogout() {
        Auth::user()->last_activity_time = new DateTime();
        Auth::logout();
        return redirect(Session::previousUrl());
    }

    public function getRegister() {
        Session::put('previousURL', Session::previousUrl());  
        return view('user.register');
    }

    public function postRegister(Request $request) {
        $validator = Validator::make($request->all(), 
            [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6|max:32',
                'confirm_password' => 'required|same:password',
            ], 
            [
                'name.required' => 'Bạn chưa nhập tên hiển thị',
                'email.required' => 'Bạn chưa nhập email',
                'email.email' => 'Bạn chưa nhập đúng định dạng email',
                'email.unique' => 'Email này đã tồn tại',
                'password.required' => 'Bạn chưa nhập password',
                'password.min' => 'Mật khẩu phải có độ dài từ 6 đến 32 ký tự',
                'password.max' => 'Mật khẩu phải có độ dài từ 6 đến 32 ký tự',
                'confirm_password.required' => 'Bạn chưa nhập lại password',
                'confirm_password.same' => 'Nhập lại password sai',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $user = new User;
        $user->name = $request->name;
        $user->name_url = changeTitle($request->name);
        $user->avatar = 'default_avatar.png';
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->last_activity_time = new DateTime();
        $user->created_at = new DateTime();
        $user->updated_at = new DateTime();
        $user->save();

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'active' => true])) {
            $previousURL = Session::get('previousURL');
            Session::forget('previousURL');
            return redirect('congratulation')->with('thongbao', 
            '<h1>Đăng Ký Thành Công !!!</h1>
            <br>
            <h3>Hãy cùng giúp nhau để phát triễn nhé. Thân !!!</h3>
            <br>')->with('previousURL', $previousURL);
        }
        else {
            return redirect()->back()->with('thongbao','Đăng ký không thành công');
        }
        
    }

    // Admin
    public function getList(){
        $Users = User::all();
        return view('admin.user.list',['users'=>$Users]);
    }

    public function getEdit($idUser){
        $user = User::find($idUser);
        $permission = Permission::where('active', '1')->get();
        return view('admin.user.edit',['user'=>$user, 'permission'=>$permission]);
    }

    public function postEdit(Request $request, $idUser){
        // Validate date input
        $validator = Validator::make($request->all(), 
            [
                'name' => 'required',
                
            ],
            [
                'name.required' => 'Bạn chưa nhập tên',
            ] 
        );
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        $user = User::find($idUser);
        $user->permission_id = $request->permission;
        $user->name = $request->name;
        $user->name_url = changeTitle($request->name);
        if ($request->has('active')) {
            $user->active = true;
        }
        else {
            $user->active = false;
        }
        $user->is_new = true;
        $user->save();

        //Create Activity
        $activity = new Activity;
        $activity->user_id = Auth::id();
        $activity->user_related_id = $user->id;
        $activity->content = 'đã chỉnh sửa người dùng <strong>'.$user->name.'</strong>';
        $activity->link = route('user-information', ['user_id' => $user->id]);
        $activity->type = Auth::user()->permission->key;
        $activity->save();

        return redirect()->back()->with('thongbao', 'Cập Nhật Thành Công');  
    }

    public function getResetPassword($idUser){
        $user = User::find($idUser);
        $user->password = bcrypt('000000');

        return redirect()->back()->with('thongbao_resetpass', 'ResetPassword Thành Công');  
    }

    public function getAdd(){
        $permissions = Permission::where('active', 1)->get();
        return view('admin.user.add',['permissions'=>$permissions]);
    }

    public function postAdd(Request $request){
        // Validate date input
        $validator = Validator::make($request->all(), 
            [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                
            ],
            [
                'name.required' => 'Bạn chưa nhập tên',
                'email.required' => 'Bạn chưa nhập email',
                'email.email' => 'Bạn chưa nhập đúng định dạng email',
                'email.unique' => 'Email này đã tồn tại',
            ] 
        );
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        //Add user
        $user = new User;
        $user->permission_id = $request->permission;
        $user->name = $request->name;
        $user->name_url = changeTitle($request->name);
        $user->email = $request->email;
        $user->avatar = 'default_avatar.png';
        $user->password = bcrypt('123456');
        if($request->has('active'))
            $user->active = true;
        else
            $user->active=false;
        $user->save();

        //Create Activity
        $activity = new Activity;
        $activity->user_id = Auth::id();
        $activity->user_related_id = $user->id;
        $activity->content = 'đã thêm người dùng mới <strong>'.$user->name.'</strong>';
        $activity->link = route('user-information', ['user_id' => $user->id]);
        $activity->type = Auth::user()->permission->key;
        $activity->save();

         return redirect()->back()->with('thongbao', 'Thêm user Thành Công');
    }

    //////////////////////////////////////////////////////////
    public function getUserInformation($user_id){
        $user = User::find($user_id);
        //answer group by question_id
        $answers = $user->answers()->groupBy('question_id')->get()->sortByDesc('id');

        if($user->isOnline())
            $time="Online";
        else
        {
            $date1 = DateTime::createFromFormat('Y-m-d H:i:s', $user->last_activity_time);
            $date2 = Carbon::now();
            $interval = $date1->diff($date2);
            if($interval->y!=0) 
                $time= $interval->y . " năm trước"; 
            elseif ($interval->m!=0)
                $time= $interval->m . " tháng trước";
            elseif ($interval->d!=0)
                $time= $interval->d . " ngày trước";
            elseif($interval->h!=0)
                $time= $interval->h . " giờ trước";
            elseif($interval->i!=0)
                $time= $interval->i . " phút trước";
            else
                $time=" mới đăng xuất";

        }

        //tag
        $tagQuestions =  Question::join('taggables','questions.id','=','taggables.taggable_id')->
        where([['questions.user_id', $user_id],['taggable_type','App\Question']])->
        join('tags', 'taggables.tag_id','=','tags.id')->
        selectRaw('tags.id, tags.name, taggables.id AS taggable_id');

        $tagDocuments = Documentation::join('taggables','documentations.id','=','taggables.taggable_id')->
        where([['documentations.user_id', $user_id],['taggable_type','App\Documentation']])->
        join('tags', 'taggables.tag_id','=','tags.id')->
        selectRaw('tags.id, tags.name, taggables.id AS taggable_id');
       
        $result_group = $tagQuestions->get()->merge($tagDocuments->get())->sortByDesc('id');
        $result_all = $tagDocuments->union($tagQuestions)->get();

        return view('user.user_information',['user'=>$user, 'answers'=>$answers, 'last_online'=>$time,'rs_all'=>$result_all, 'rs_gr'=>$result_group]);
    }

    public function getEditUser(){
        
        return view('user.edit_user',['user'=>Auth::user()]);
    }

    public function postEditInfo(Request $request){
        $user = User::find(Auth::id());
         // Validate date input
        $validator = Validator::make($request->all(), 
            [
                'name' => 'required',
                'status' => 'required',
                'location' => 'required',
                'job' => 'required',
                'about' => 'required',
                
            ],
            [
                'name.required' => 'Bạn chưa nhập tên',
                'status.required' => 'Bạn chưa nhập status',
                'location.required' => 'Bạn chưa nhập location',
                'job.required' => 'Bạn chưa nhập job',
                'about.required' => 'Bạn chưa nhập about',
            ] 
        );
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        //update info
        $user->name = $request->name;
        $user->status = $request->status;
        $user->location = $request->location;
        $user->job = $request->job;
        $user->about = $request->about;
        $user->updated_at = new DateTime();
        $user->save();
        return redirect()->back()->with('thongbao', 'Update thành công!');
    }

    public function postEditAvatar(Request $request){
        $user = User::find(Auth::id());
        $oldAvatarName = $user->avatar;

        $validator = Validator::make($request->all(), 
            [
                'avatar' => 'required|image',
                
            ],
            [
                'avatar.required' => 'Bạn chưa chọn ảnh',
                'avatar.image' => 'Định dạng không hỗ trợ',
            ] 
        );
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        $file = $request->file('avatar');
        $fileExtension = $file->getClientOriginalExtension();
        $fileName = time() . "_" . rand(0,9999999) . "." . $fileExtension;
        $file->move('image/avatar_users', $fileName);

        //delete old file
        if($oldAvatarName!='default_avatar.png'){
           if(File::exists(public_path('image/avatar_users/'. $oldAvatarName))){
            File::delete(public_path('image/avatar_users/' . $oldAvatarName));
            }
        }
       
        
        //update database
        $user->avatar = $fileName;
        $user->save();

        return redirect()->back()->with('thongbao', 'Update thành công!');
    }

    public function postChangePass(Request $request){
        $hashedPassword = Auth::user()->password;
         $validator = Validator::make($request->all(), 
            [
                'oldpass' => 'required|min:6|max:32',
                'newpass' => 'required|min:6|max:32',
                'confirm' => 'required|min:6|max:32|same:newpass',
                
            ],
            [
                'oldpass.required' => 'Bạn chưa nhập Old Password',
                'oldpass.min' => 'Old Password phải có độ dài từ 6 đến 32 ký tự',
                'oldpass.max' => 'Old Password có độ dài từ 6 đến 32 ký tự',
                'newpass.required' => 'Bạn chưa nhập New Password',
                'newpass.min' => 'New Password phải có độ dài từ 6 đến 32 ký tự',
                'newpass.max' => 'New Password có độ dài từ 6 đến 32 ký tự',
                'confirm.required' => 'Bạn chưa nhập Confirm Password',
                'confirm.min' => 'Confirm Password phải có độ dài từ 6 đến 32 ký tự',
                'confirm.max' => 'Confirm Password phải có độ dài từ 6 đến 32 ký tự',
                'confirm.same' => 'Password không trùng khớp',
            ] 
        );
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        if(Hash::check($request->oldpass, $hashedPassword)){
            Auth::user()->fill(['password' => Hash::make($request->newpass)])->save();

            return redirect()->back()->with('thongbao', 'Update thành công!');
        }
        return redirect()->back()->with('thongbao', 'Password không trùng khớp!');
    }   

    public function getListUser(Request $request, $tab ='point'){
       switch ($tab) {
        case 'point':
        $list_paginate = User::where('active',1)->orderBy('point_reputation', 'desc')->paginate(16);
        break;
        case 'name':
        $list_paginate = User::where('active',1)->orderBy('name')->paginate(16);
        break;
        case 'new':
        $list_paginate = User::where('active',1)->orderBy('id', 'desc')->paginate(16);
        break;
        default:
        break;
        }
        if($request->ajax()){
            return view('user.items_user',['list_paginate'=>$list_paginate, 'tab'=>$tab]);
        }
        return view('user.list_user',['list_paginate'=>$list_paginate, 'tab'=>$tab]);
    }

    public function postSearchUser(Request $request){
        $key = $request->key_search;
        $words = explode(' ', $key);
        $list_paginate = User::where(function ($query)use($words) {
            foreach($words as $word) {
                $query->orWhere('name', 'LIKE', '%' . $word . '%');
            }
        })->get();

        return view('user.result_search',['list_paginate'=>$list_paginate, 'key'=>$key]);
    }
}
    