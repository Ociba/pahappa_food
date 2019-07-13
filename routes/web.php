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

Route::get('/', function(){return view('auth.login');});
Route::get('/login', function(){return redirect('/');});


Route::group(['middleware' =>'auth'], function(){

Route::get('/index','CalendarController@index');
Route::get('/chat-js', 'ChatjsController@index');
Route::get('/inbox', 'InboxController@index');
Route::get('/requests','TransactionsController@show');
Route::get('/chat-room','ChatroomController@index');
Route::get('/lock','LockscreenController@index');

});
Auth::routes();
