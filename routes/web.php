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
Route::get('/', 'FrontController@index');

Auth::routes();

Route::get('/article/{id}', 'FrontController@detailArticle')->name('detail-article');
Route::post('/front/comment/store', 'FrontController@storeComment')->name('front-comment');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    // post
    Route::get('/posts', 'PostController@index')->name('posts');
    Route::get('/post/create', 'PostController@create')->name('post-create');
    Route::post('/post/store', 'PostController@store')->name('post-store');
    Route::get('/post/edit/{id}', 'PostController@edit')->name('post-edit');
    Route::post('/post/update/{id}', 'PostController@update')->name('post-update');
    Route::get('/post/delete/{id}', 'PostController@delete')->name('post-delete');
    Route::get('/post/{id}', 'PostController@detail');

    // comment
    Route::get('/comments', 'CommentController@index')->name('comments');
    Route::get('/comment/create', 'CommentController@create')->name('comment-create');
    Route::post('/comment/store', 'CommentController@store')->name('comment-store');
    Route::get('/comment/edit/{id}', 'CommentController@edit')->name('comment-edit');
    Route::post('/comment/update/{id}', 'CommentController@update')->name('comment-update');
    Route::get('/comment/delete/{id}', 'CommentController@delete')->name('comment-delete');
    Route::get('/comment/{id}', 'CommentController@detail');

    Route::get('/users', 'UserController@index')->name('users');
    Route::get('/user/{id}', 'UserController@detail');
});
