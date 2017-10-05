<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('index', function () {
    return view('index.index');
});
route::get('ListQuestion',function(){
	return view('question.list-question');
});
route::get('DetailQuestion', function(){
	return view('question.detail_question');
});
route::get('CreateQuestion',function(){
	return view('question.create_question');
});
route::get('NoteCreateQuestion',function(){
	return view('question.note_create_question');
});
route::get('Congratulation',function(){
	return view('question.congratulation');
});
route::get('ListDocumentation',function(){
	return view('documentation.list_documentation');
});
route::get('DetailDocumentation',function(){
	return view('documentation.detail_documentation');
});
route::get('CreateDocumentation',function(){
	return view('documentation.create_documentation');
});
route::get('ListTag',function(){
	return view('list-Tag.list_tag');
});
route::get('User',function(){
	return view('user.user');
});
route::get('ListUser',function(){
	return view('user.list_user');
});
route::get('EditUser',function(){
	return view('user.edit_user');
});
route::get('Login',function(){
	return view('user.login');
});
route::get('Register',function(){
	return view('user.register');
});
route::get('About',function(){
	return view('about.about');
});
route::get('About1',function(){
	return view('about.a');
});