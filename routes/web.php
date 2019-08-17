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

Route::get('/', 'ThreadsController@index');
Route::get('/threads/{thread}', 'ThreadsController@show')->where('thread', '[0-9]+');
Route::get('/threads/create', 'ThreadsController@create');
Route::post('/threads', 'ThreadsController@store');
Route::get('/threads/{thread}/edit', 'ThreadsController@edit');
Route::patch('/threads/{thread}', 'ThreadsController@update');
Route::delete('/threads/{thread}', 'ThreadsController@destroy');

Route::post('/threads/{thread}/comments', 'CommentsController@store');
Auth::routes();

Route::get('/users/{user}', 'UserController@show');

// Route::get('/home', 'HomeController@index')->name('home');
