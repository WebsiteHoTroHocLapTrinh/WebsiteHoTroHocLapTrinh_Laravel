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

// // Test giao diện
// 
// route::get('detail-question', function(){
// 	return view('question.detail_question');
// });
// route::get('create-question',function(){
// 	return view('question.create_question');
// });
// route::get('note-create-question',function(){
// 	return view('question.note_create_question');
// });
// route::get('list-documentation',function(){
// 	return view('documentation.list_documentation');
// });
// route::get('detail-documentation',function(){
// 	return view('documentation.detail_documentation');
// });
// route::get('create-documentation',function(){
// 	return view('documentation.create_documentation');
// });
// route::get('list-tag',function(){
// 	return view('tag.list_tag');
// });
// route::get('user-information',function(){
// 	return view('user.user_information');
// });
// route::get('list-user',function(){
// 	return view('user.list_user');
// });
// route::get('edit-user',function(){
// 	return view('user.edit_user');
// });
// route::get('about',function(){
// 	return view('about');
// });

//////////////////////////////////////////////////
Route::get('', function () {
    return view('index');
});

//Group Admin
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::get('/', 'ActivityController@getActivity');

    //Question
    Route::group(['prefix' => 'question'], function() {
        Route::get('list', 'QuestionController@getList');
        Route::get('add', 'QuestionController@getAdd');
        Route::post('add', 'QuestionController@postAdd');
        Route::get('edit/{idQuestion}', 'QuestionController@getEdit');
        Route::post('edit/{idQuestion}', 'QuestionController@postEdit');
        Route::get('delete/{idQuestion}', 'QuestionController@getDelete');

        Route::group(['prefix' => 'answer'], function() {
            Route::get('list/{idQuestion}', 'AnswerController@getList');
            Route::get('add/{idQuestion}', 'AnswerController@getAdd');
            Route::post('add/{idQuestion}', 'AnswerController@postAdd');
            Route::get('edit/{idAnswer}', 'AnswerController@getEdit');
            Route::post('edit/{idAnswer}', 'AnswerController@postEdit');
            Route::get('delete/{idAnswer}', 'AnswerController@getDelete');
        });
    });

    //Documents
    Route::group(['prefix' => 'documentation'], function() {
        Route::get('list','DocumentationController@getList');
        Route::get('edit/{idDocument}', 'DocumentationController@getEdit');
        Route::post('edit/{idDocument}', 'DocumentationController@postEdit');
        Route::get('delete/{idDocument}', 'DocumentationController@getDelete');
        Route::get('add','DocumentationController@getAdd');
        Route::post('add','DocumentationController@postAdd');
        
    });

     //Subject
    Route::group(['prefix' => 'subject'], function() {
        Route::get('list','SubjectController@getList');
        Route::get('edit/{idSubject}','SubjectController@getEdit');
        Route::post('edit/{idSubject}','SubjectController@postEdit');
        Route::post('add','SubjectController@postAdd');
        Route::get('add', 'SubjectController@getAdd');
        Route::get('delete/{idSubject}', 'SubjectController@getDelete');
    });


    //User
   Route::group(['prefix' => 'user'], function() {
        Route::get('list','UserController@getList');
        Route::get('edit/{idUser}','UserController@getEdit');
        Route::post('edit/{idUser}','UserController@postEdit');
        Route::get('editpass/{idUser}','UserController@getResetPassword');
        Route::get('add','UserController@getAdd');
        Route::post('add','UserController@postAdd');
        
    });
    


    Route::group(['prefix' => 'comment'], function() {
        Route::get('delete/{idComment}', 'CommentController@getDelete');
    });
    
    
    Route::group(['prefix' => 'permission'], function() {
        Route::get('list', 'PermissionController@getList');
        Route::get('add', 'PermissionController@getAdd');
        Route::post('add', 'PermissionController@postAdd');
        Route::get('edit/{idPermission}', 'PermissionController@getEdit');
        Route::post('edit/{idPermission}', 'PermissionController@postEdit');
        Route::get('delete/{idPermission}', 'PermissionController@getDelete');
    });

   

    Route::group(['prefix' => 'tag'], function() {
        Route::get('list', 'TagController@getList');
        Route::get('add', 'TagController@getAdd');
        Route::post('add', 'TagController@postAdd');
        Route::get('edit/{idTag}', 'TagController@getEdit');
        Route::post('edit/{idTag}', 'TagController@postEdit');
        Route::get('delete/{idTag}', 'TagController@getDelete');
    });
});

//Group Ajax
Route::group(['prefix' => 'ajax'], function() {
    Route::get('commentsOfQuestion/{idQuestion}', 'AjaxController@getCommentsOfQuestion');
    Route::get('commentsOfDocument/{idDocument}', 'AjaxController@getCommentsOfDocument');
    Route::get('commentsOfAnswer/{idAnswer}', 'AjaxController@getCommentsOfAnswer');
    Route::get('changeActive/{type}/{id}/{value}', 'AjaxController@changeActive');
    Route::get('dismissNew/{type}/{id}', 'AjaxController@dismissNew');
    Route::get('getMoreActive/{type}/{id}', 'AjaxController@getMore');


});

//Group Questions
Route::group(['prefix' => 'question'], function() {
    Route::get('list-question/{tab?}','QuestionController@getListQuestion')->name('list-question');
    Route::post('vote-question/{question_id}', 'QuestionController@postVoteQuestion')->name('vote-question');
    Route::get('detail-question/{question_id}/{question_url}', 'QuestionController@getDetailQuestion')->name('detail-question')->middleware('active');
    Route::get('create-question', 'QuestionController@getCreateQuestion')->name('create-question')->middleware('login');
    Route::post('create-question', 'QuestionController@postCreateQuestion')->name('create-question')->middleware('login');
    Route::get('edit-question/{question_id}', 'QuestionController@getEditQuestion')->name('edit-question')->middleware('own');
    Route::post('edit-question/{question_id}', 'QuestionController@postEditQuestion')->name('edit-question')->middleware('own');
    Route::get('delete-question/{question_id}', 'QuestionController@getDeleteQuestion')->name('delete-question')->middleware('own');
    Route::get('restore-question/{question_id}', 'QuestionController@getRestoreQuestion')->name('restore-question')->middleware('own');
    Route::get('search-question', 'QuestionController@getSearchQuestion')->name('search-question');
});

//Group Answer
Route::group(['prefix'=>'answer'], function(){
    Route::post('vote-answer/{answer_id?}', 'AnswerController@postVoteAnswer')->name('vote-answer');
    Route::post('vote-best-answer/{answer_id?}', 'AnswerController@postVoteBestAnswer')->name('vote-best-answer');
    Route::post('add-answer/{question_id}', 'AnswerController@postAddAnswer')->name('add-answer')->middleware('login');
    Route::get('edit-answer/{answer_id}', 'AnswerController@getEditAnswer')->name('edit-answer')->middleware('own');
    Route::post('edit-answer/{answer_id}', 'AnswerController@postEditAnswer')->name('edit-answer')->middleware('own');
    Route::get('delete-answer/{answer_id}', 'AnswerController@getDeleteAnswer')->name('delete-answer')->middleware('own');

});

//Group Documentation
Route::group(['prefix'=>'documentation'], function(){
    Route::get('list-documentation/{tab?}', 'DocumentationController@getListDocumentation')->name('list-documentation');
    Route::get('detail-documentation/{documentation_id}/{documentation_url}', 'DocumentationController@getDetailDocumentation')->name('detail-documentation')->middleware('active');
    Route::post('vote-documentation/{documentation_id}', 'DocumentationController@postVoteDocumentation')->name('vote-documentation');
    Route::get('create-documentation', 'DocumentationController@getCreateDocumentation')->name('create-documentation')->middleware('login');
    Route::post('create-documentation', 'DocumentationController@postCreateDocumentation')->name('create-documentation')->middleware('login');
    Route::get('edit-documentation/{documentation_id}', 'DocumentationController@getEditDocumentation')->name('edit-documentation')->middleware('own');
    Route::post('edit-documentation/{documentation_id}', 'DocumentationController@postEditDocumentation')->name('edit-documentation')->middleware('own');
    Route::get('delete-documentation/{documentation_id}', 'DocumentationController@getDeleteDocumentation')->name('delete-documentation')->middleware('own');
    Route::get('restore-documentation/{documentation_id}', 'DocumentationController@getRestoreDocumentation')->name('restore-documentation')->middleware('own');
    Route::get('search-documentation', 'DocumentationController@getSearchDocumentation')->name('search-documentation');
});

//Group Comment
Route::group(['prefix'=>'comment'], function(){
    Route::post('add-comment', 'CommentController@postAddComment')->name('add-comment')->middleware('login');
    Route::post('edit-comment/{cmt_id?}', 'CommentController@postEditComment')->name('edit-comment')->middleware('own');
    Route::get('delete-comment/{cmt_id?}', 'CommentController@getDeleteComment')->name('delete-comment')->middleware('own');
});

//Group Tags
Route:: group(['prefix'=>'tag'], function(){
    Route::get('list-tag/{tab?}', 'TagController@getListTag')->name('list-tag');
    Route::post('create-tag', 'TagController@postCreateTag')->name('create-tag')->middleware('login');
    Route::get('search-tag', 'TagController@getSearchTag')->name('search-tag');
});

//Group User
Route::group(['prefix'=>'user'], function() {
    Route::get('user-information/{user_id}/{user_url}', 'UserController@getUserInformation')->name('user-information');
    Route::get('edit-user', 'UserController@getEditUser')->middleware('login');
    Route::post('edit-info', 'UserController@postEditInfo')->middleware('login');
    Route::post('edit-avatar', 'UserController@postEditAvatar')->middleware('login');
    Route::post('edit-changepass', 'UserController@postChangePass')->middleware('login');
    Route::get('list-user/{tab?}', 'UserController@getListUser')->name('list-user');
    Route::get('search-user', 'UserController@getSearchUser')->name('search-user');

});

//Group Reset Password
Route::group(['prefix'=>'password'], function(){
    Route::get('showform', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('showform');
    Route::post('sendlink', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('sendlink');
    Route::get('reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('reset.token');
    Route::post('reset', 'Auth\ResetPasswordController@reset')->name('reset');
});

//Group Authencation
Route::get('login', 'UserController@getLogin')->name('login')->middleware('preventLogin');
Route::post('login', 'UserController@postLogin')->name('login')->middleware('preventLogin');
Route::get('register', 'UserController@getRegister')->name('register')->middleware('preventLogin');
Route::post('register', 'UserController@postRegister')->name('register')->middleware('preventLogin');
Route::get('logout', 'UserController@getLogout')->name('logout')->middleware('logout');
Route::get('congratulation',function() {
    return view('congratulation');
})->name('congratulation');
Route::get('error_404', function() {
    return view('404_page');
})->name('404');
Route::get('error_500', function() {
    return view('500_page');
})->name('500');

Route::get('about', function(){
    return view('about');
})->name('about');
