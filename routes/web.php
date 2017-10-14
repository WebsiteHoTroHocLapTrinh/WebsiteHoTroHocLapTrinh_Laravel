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
    return view('index');
});
route::get('list-question',function(){
	return view('question.list_question');
});
route::get('detail-question', function(){
	return view('question.detail_question');
});
route::get('create-question',function(){
	return view('question.create_question');
});
route::get('note-create-question',function(){
	return view('question.note_create_question');
});
route::get('congratulation',function(){
	return view('congratulation');
});
route::get('list-documentation',function(){
	return view('documentation.list_documentation');
});
route::get('detail-documentation',function(){
	return view('documentation.detail_documentation');
});
route::get('create-documentation',function(){
	return view('documentation.create_documentation');
});
route::get('list-tag',function(){
	return view('tag.list_tag');
});
route::get('user-information',function(){
	return view('user.user_information');
});
route::get('list-user',function(){
	return view('user.list_user');
});
route::get('edit-user',function(){
	return view('user.edit_user');
});
route::get('about',function(){
	return view('about');
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::get('/', function() {
        return view('admin.index');
    });
    Route::group(['prefix' => 'question'], function() {
        Route::get('list', 'QuestionController@getList');
        Route::get('add', 'QuestionController@getAdd');
        Route::post('add', 'QuestionController@postAdd');
        Route::get('edit/{idQuestion}', 'QuestionController@getEdit');
        Route::post('edit/{idQuestion}', 'QuestionController@postEdit');
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

Route::group(['prefix' => 'ajax'], function() {
    Route::get('commentsOfQuestion/{idQuestion}', 'AjaxController@getCommentsOfQuestion');
});

Route::get('login', 'UserController@getLogin');
Route::post('login', 'UserController@postLogin');
Route::get('register', 'UserController@getRegister');
Route::post('register', 'UserController@postRegister');
Route::get('logout', 'UserController@getLogout');

// Test API

// Route::group(['prefix' => 'user'], function() {
//     Route::get('permission/{user_id}', 'UserController@permission');
//     Route::get('questions/{user_id}', 'UserController@questions');
//     Route::get('answers/{user_id}', 'UserController@answers');
//     Route::get('documentations/{user_id}', 'UserController@documentations');
//     Route::get('comments/{user_id}', 'UserController@comments');
//     Route::get('tags/{user_id}', 'UserController@tags');
//     Route::get('votes/{user_id}', 'UserController@votes');
//     Route::get('permission_created/{user_id}', 'UserController@permission_created');
//     Route::get('subject_created/{user_id}', 'UserController@subject_created');
//     Route::get('tag_created/{user_id}', 'UserController@tag_created');
// });
// Route::group(['prefix' => 'question'], function() {
//     Route::get('user/{question_id}', 'QuestionController@user');
//     Route::get('tags/{question_id}', 'QuestionController@tags');
//     Route::get('answers/{question_id}', 'QuestionController@answers');
//     Route::get('comments/{question_id}', 'QuestionController@comments');
//     Route::get('votes/{question_id}', 'QuestionController@votes');
//     Route::get('countvotes/{question_id}', 'QuestionController@countvotes');  
// });
// Route::group(['prefix' => 'documentation'], function() {
//     Route::get('user/{documentation_id}', 'DocumentationController@user');
//     Route::get('tags/{documentation_id}', 'DocumentationController@tags');
//     Route::get('comments/{documentation_id}', 'DocumentationController@comments');
//     Route::get('votes/{documentation_id}', 'DocumentationController@votes'); 
//     Route::get('countvotes/{documentation_id}', 'DocumentationController@countvotes');
// });
// Route::group(['prefix' => 'answer'], function() {
//     Route::get('user/{answer_id}', 'AnswerController@user');
//     Route::get('question/{answer_id}', 'AnswerController@question');
//     Route::get('comments/{answer_id}', 'AnswerController@comments');
//     Route::get('votes/{answer_id}', 'AnswerController@votes'); 
//     Route::get('countvotes/{answer_id}', 'AnswerController@countvotes');
// });
// Route::group(['prefix' => 'comment'], function() {
//     Route::get('user/{comment_id}', 'CommentController@user');
//     Route::get('commentable/{comment_id}', 'CommentController@commentable');
//     Route::get('pings/{comment_id}', 'CommentController@pings');
// });
// Route::group(['prefix' => 'permission'], function() {
//     Route::get('users/{permission_id}', 'PermissionController@users');
//     Route::get('user_created/{permission_id}', 'PermissionController@user_created');
// });
// Route::group(['prefix' => 'subject'], function() {
//     Route::get('documentations/{subject_id}', 'SubjectController@documentations');
//     Route::get('user_created/{subject_id}', 'SubjectController@user_created');
// });
// Route::group(['prefix' => 'tag'], function() {
//     Route::get('questions/{tag_id}', 'TagController@questions');
//     Route::get('documentations/{tag_id}', 'TagController@documentations');
//     Route::get('users_favorited/{tag_id}', 'TagController@users_favorited');
//     Route::get('user_created/{tag_id}', 'TagController@user_created');
// });