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

Route::get('blog', 'PublicController@blog')->name('blog');
Route::get('/', 'PublicController@landing')->name('landing');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('category', 'CategoryController');
Route::resource('post', 'PostController');
Route::resource('comment', 'CommentController');

Route::post('/post/{post}/comment', 'CommentController@store')->name('comment.post.store');
