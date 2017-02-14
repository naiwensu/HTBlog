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

/**
 * 用户
 */
Route::get('/', 'ArticleController@index');
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', 'UserController@login');
Route::get('/personal', 'UserController@personal');
Route::get('/logout', 'UserController@logout');

/**
 * 文章
 */
Route::get('/article', function () {
    return view('article');
});
Route::resource('article' , 'ArticleController');
Route::get('/article/manage', 'ArticleController@manage');

/**
 * 日记
 */
Route::get('/diary', function () {
    return view('diary');
});
Route::resource('diary', 'DiaryController');

/**
 * 测试
 */
Route::get('/test', 'TestController@index');
