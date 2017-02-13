<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', 'UserController@login');

Route::get('/blogger', function () {
    return view('blogger');
});

Route::get('/article', function () {
    return view('article');
});

Route::get('/diary', function () {
    return view('diary');
});

Route::get('/test', 'TestController@index');

Route::resource('article' , 'ArticleController');
Route::resource('diary', 'DiaryController');

Route::get('admin', function () {
    return view('admin.login');
});

Route::post('admin', 'AdminController@login');

Route::get('admin/home', 'AdminController@home');

Route::get('admin/show', 'AdminController@show');