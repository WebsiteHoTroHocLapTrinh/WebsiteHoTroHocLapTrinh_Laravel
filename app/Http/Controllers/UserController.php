<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DateTime;
use Auth;
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

class UserController extends Controller
{
    public function permission($user_id) {
    	$permission = User::find($user_id)->permission;
    	return $permission;
    }
    public function questions($user_id) {
    	$questions = User::find($user_id)->questions;
    	return $questions;
    }
    public function answers($user_id) {
    	$answers = User::find($user_id)->answers;
    	return $answers;
    }
    public function documentations($user_id) {
    	$documentations = User::find($user_id)->documentations;
    	return $documentations;
    }
    public function comments($user_id) {
    	$comments = User::find($user_id)->comments;
    	return $comments;
    }
    public function tags($user_id) {
    	$tags = User::find($user_id)->tags;
    	return $tags;
    }
    public function votes($user_id) {
        $votes = User::find($user_id)->votes;
        return $votes;
    }
    public function permission_created($user_id) {
        $permission_created = User::find($user_id)->permission_created;
        return $permission_created;
    }
    public function subject_created($user_id) {
        $subject_created = User::find($user_id)->subject_created;
        return $subject_created;
    }
    public function tag_created($user_id) {
        $tag_created = User::find($user_id)->tag_created;
        return $tag_created;
    }

    public function getLogin() {
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
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
             return redirect('congratulation')->with('thongbao', 
            '<h1>Đăng Nhập Thành Công !!!</h1>
            <br>
            <h3>Hãy cùng giúp nhau để phát triễn nhé. Thân !!!</h3>
            <br>');
        }
        else {
            return redirect()->back()->with('thongbao','Sai tên đăng nhập hoặc mật khẩu');
        }

    }

    public function getLogout() {
        Auth::user()->last_online = new DateTime();
        Auth::logout();
        return redirect('/');
    }

    public function getRegister() {
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
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->last_online = new DateTime();
        $user->created_at = new DateTime();
        $user->updated_at = new DateTime();
        $user->save();

        Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        return redirect('congratulation')->with('thongbao', 
            '<h1>Đăng Ký Thành Công !!!</h1>
            <br>
            <h3>Hãy cùng giúp nhau để phát triễn nhé. Thân !!!</h3>
            <br>');
    }

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
        if ($request->has('active')) {
            $user->active = true;
        }
        else {
            $user->active = false;
        }
        $user->save();

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
        $user->email = $request->email;
        $user->password = bcrypt('123456');
        if($request->has('active'))
            $user->active = true;
        else
            $user->active=false;
        $user->save();

         return redirect()->back()->with('thongbao', 'Thêm user Thành Công');
    }
}
