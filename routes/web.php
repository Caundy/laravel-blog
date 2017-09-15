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

#root
Route::get('/', 'PostsController@index');

#get ALL posts
Route::get('/posts', 'PostsController@index');

#create a post and POST it
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');

#show specific post
Route::get('/posts/{post}', 'PostsController@show');

#COMMENTS ROUTES
Route::post('/comments', 'CommentsController@store');

