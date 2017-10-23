<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use DateTime;
use Session;
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
use Carbon\Carbon;

class UserController extends Controller
{
    // Auth
    public function getLogin() {
        $previousURL = Session::previousUrl();
        return view('user.login', ['previousURL' => $previousURL]);
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
            Auth::user()->last_online = new DateTime();
            Auth::user()->save();
            return redirect('congratulation')->with('thongbao', 
            '<h1>Đăng Nhập Thành Công !!!</h1>
            <br>
            <h3>Hãy cùng giúp nhau để phát triễn nhé. Thân !!!</h3>
            <br>')->with('previousURL', $request->previousURL);
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
        $previousURL = Session::previousUrl();
        return view('user.register', ['previousURL' => $previousURL]);
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

        Auth::attempt(['email' => $request->email, 'password' => $request->password, 'active' => true]);

        return redirect('congratulation')->with('thongbao', 
            '<h1>Đăng Ký Thành Công !!!</h1>
            <br>
            <h3>Hãy cùng giúp nhau để phát triễn nhé. Thân !!!</h3>
            <br>')->with('previousURL', $request->previousURL);
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
        $activity->user_id = Auth::user()->id;
        $activity->content = 'Cập nhật người dùng <a href="/admin/user/edit/'.$user->id.'" target="_blank">'.$user->name.'</a>';
        $activity->type = 1;
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
        $user->email = $request->email;
        $user->password = bcrypt('123456');
        if($request->has('active'))
            $user->active = true;
        else
            $user->active=false;
        $user->save();

        //Create Activity
        $activity = new Activity;
        $activity->user_id = Auth::user()->id;
        $activity->content = 'Thêm người dùng mới <a href="/admin/user/edit/'.$user->id.'" target="_blank">'.$user->name.'</a>';
        $activity->type = 1;
        $activity->save();

         return redirect()->back()->with('thongbao', 'Thêm user Thành Công');
    }


    public function getInfo($user_id){
        $user = User::find($user_id);

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

        return view('user.user_information',['user'=>$user, 'last_online'=>$time]);
    }
}
