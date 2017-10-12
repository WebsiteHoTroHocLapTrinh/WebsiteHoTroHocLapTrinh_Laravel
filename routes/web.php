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

// Test giao diện
Route::get('', function () {
    return view('index.index');
});
Route::get('Index', function () {
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
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', function() {
        return view('admin.index');
    });
    Route::group(['prefix' => 'question'], function() {
        Route::get('list', function() {
            return view('admin.question.list');
        });
        Route::get('add', function() {
            return view('admin.question.add');
        });
        Route::get('edit', function() {
            return view('admin.question.edit');
        });
    });
    Route::group(['prefix' => 'answer'], function() {
        Route::get('list', function() {
            return view('admin.answer.list');
        });
        Route::get('add', function() {
            return view('admin.answer.add');
        });
        Route::get('edit', function() {
            return view('admin.answer.edit');
        });
    });
    Route::group(['prefix' => 'documentation'], function() {
        Route::get('list', function() {
            return view('admin.documentation.list');
        });
        Route::get('add', function() {
            return view('admin.documentation.add');
        });
        Route::get('edit', function() {
            return view('admin.documentation.edit');
        });
    });
    Route::group(['prefix' => 'permission'], function() {
        Route::get('list', function() {
            return view('admin.permission.list');
        });
        Route::get('add', function() {
            return view('admin.permission.add');
        });
        Route::get('edit', function() {
            return view('admin.permission.edit');
        });
    });
    Route::group(['prefix' => 'subject'], function() {
        Route::get('list', function() {
            return view('admin.subject.list');
        });
        Route::get('add', function() {
            return view('admin.subject.add');
        });
        Route::get('edit', function() {
            return view('admin.subject.edit');
        });
    });
    Route::group(['prefix' => 'tag'], function() {
        Route::get('list', function() {
            return view('admin.tag.list');
        });
        Route::get('add', function() {
            return view('admin.tag.add');
        });
        Route::get('edit', function() {
            return view('admin.tag.edit');
        });
    });
    Route::group(['prefix' => 'user'], function() {
        Route::get('list', function() {
            return view('admin.user.list');
        });
        Route::get('add', function() {
            return view('admin.user.add');
        });
        Route::get('edit', function() {
            return view('admin.user.edit');
        });
    });

});

// Test API

Route::group(['prefix' => 'user'], function() {
    Route::get('permission/{user_id}', 'UserController@permission');
    Route::get('questions/{user_id}', 'UserController@questions');
    Route::get('answers/{user_id}', 'UserController@answers');
    Route::get('documentations/{user_id}', 'UserController@documentations');
    Route::get('comments/{user_id}', 'UserController@comments');
    Route::get('tags_favorited/{user_id}', 'UserController@tags_favorited');
    Route::get('votes/{user_id}', 'UserController@votes');
    Route::get('permission_created/{user_id}', 'UserController@permission_created');
    Route::get('subject_created/{user_id}', 'UserController@subject_created');
    Route::get('tag_created/{user_id}', 'UserController@tag_created');
});
Route::group(['prefix' => 'question'], function() {
    Route::get('user/{question_id}', 'QuestionController@user');
    Route::get('tags/{question_id}', 'QuestionController@tags');
    Route::get('comments/{question_id}', 'QuestionController@comments');
    Route::get('votes/{question_id}', 'QuestionController@votes');
    Route::get('countvotes/{question_id}', 'QuestionController@countvotes');  
});
Route::group(['prefix' => 'documentation'], function() {
    Route::get('user/{documentation_id}', 'DocumentationController@user');
    Route::get('tags/{documentation_id}', 'DocumentationController@tags');
    Route::get('comments/{documentation_id}', 'DocumentationController@comments');
    Route::get('votes/{documentation_id}', 'DocumentationController@votes'); 
    Route::get('countvotes/{documentation_id}', 'DocumentationController@countvotes');
});
Route::group(['prefix' => 'answer'], function() {
    Route::get('user/{answer_id}', 'AnswerController@user');
    Route::get('comments/{answer_id}', 'AnswerController@comments');
    Route::get('votes/{answer_id}', 'AnswerController@votes'); 
    Route::get('countvotes/{answer_id}', 'AnswerController@countvotes');
});
Route::group(['prefix' => 'comment'], function() {
    Route::get('user/{comment_id}', 'CommentController@user');
    Route::get('commentable/{comment_id}', 'CommentController@commentable');
    Route::get('pings/{comment_id}', 'CommentController@pings');
});
Route::group(['prefix' => 'permission'], function() {
    Route::get('users/{permission_id}', 'PermissionController@users');
    Route::get('user_created/{permission_id}', 'PermissionController@user_created');
});
Route::group(['prefix' => 'subject'], function() {
    Route::get('documentations/{subject_id}', 'SubjectController@documentations');
    Route::get('user_created/{subject_id}', 'SubjectController@user_created');
});
Route::group(['prefix' => 'tag'], function() {
    Route::get('questions/{tag_id}', 'TagController@questions');
    Route::get('documentations/{tag_id}', 'TagController@documentations');
    Route::get('users_favorited/{tag_id}', 'TagController@users_favorited');
    Route::get('user_created/{tag_id}', 'TagController@user_created');
});