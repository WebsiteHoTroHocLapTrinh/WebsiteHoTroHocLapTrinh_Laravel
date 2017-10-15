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
use App\TagUser;
use App\PasswordReset;

class PermissionController extends Controller
{
    public function users($permission_id) {
    	$users = Permission::find($permission_id)->users;
    	return $users;
    }
    public function user_created($permission_id) {
    	$user_created = Permission::find($permission_id)->user_created;
    	return $user_created;
    }

    // Admin
    public function getList() {
    	$permissions = Permission::all();
    	return view('admin.permission.list', ['permissions' => $permissions]);
    }

    public function getAdd() {
    	return view('admin.permission.add');
    }

    public function postAdd(Request $request) {
    	// Validate date input
        $validator = Validator::make($request->all(), 
            [
                'name' => 'required',
                'key' => 'required',
            ],
            [
                'name.required' => 'Bạn chưa nhập tên thẻ',
                'key.required' => 'Bạn chưa nhập số key cho thẻ',
            ] 
        );
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        // Create Model Permisson and set properties
        $permission = new Permission;
        $permission->user_id = Auth::user()->id;
        $permission->name = $request->name;
        $permission->key = $request->key;
        if ($request->has('active')) {
            $permission->active = true;
        }
        else {
            $permission->active = false;
        }
        $permission->created_at = new DateTime();
        $permission->updated_at = new DateTime();
        $permission->save();  // Save into database

        return redirect()->back()->with('thongbao', 'Thêm Thành Công');
    }

    public function getEdit($idPermission) {
    	$permission = Permission::find($idPermission);
    	return view('admin.permission.edit', ['permission' => $permission]);
    }

    public function postEdit(Request $request, $idPermission) {
    	// Validate date input
        $validator = Validator::make($request->all(), 
            [
                'name' => 'required',
                'key' => 'required',
            ],
            [
                'name.required' => 'Bạn chưa nhập tên thẻ',
                'key.required' => 'Bạn chưa nhập số key cho thẻ',
            ] 
        );
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        // Create Model Permisson and set properties
        $permission =  Permission::find($idPermission);
        $permission->name = $request->name;
        $permission->key = $request->key;
        if ($request->has('active')) {
            $permission->active = true;
        }
        else {
            $permission->active = false;
        }
        $permission->updated_at = new DateTime();
        $permission->save();  // Save into database

        return redirect()->back()->with('thongbao', 'Thêm Thành Công');
    }

    public function getDelete($idPermission) {
    	$permission = Permission::find($idPermission);
    	$permission->delete();
    	
    	return redirect()->back()->with('thongbao', 'Xóa Thành Công');
    }
}
