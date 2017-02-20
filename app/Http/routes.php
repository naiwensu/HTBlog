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
Route::get('/', 'UserController@index');
Route::get('/register', 'UserController@register');
Route::post('/register', 'UserController@doregist');
Route::get('/login', 'UserController@login');
Route::post('/login', 'UserController@dologin');
Route::get('/logout', 'UserController@logout');

/**
 * 文章
 */
//Route::get('/article/create', 'ArticleController@create');

/**
 * 日记
 */
Route::resource('/diary', 'DiaryController');

/**
 * 照片墙
 */
//Route::resource('photo', 'PhotoController');

/**
 * 站长统计
 */
//Route::get('/statistics', 'StatisticsController@index');

/**
 * 图片上传
 */
Route::post('/fileUpload', 'MediaController@upload');

/**
 * 测试
 */
//Route::get('/test', 'TestController@index');
//Route::post('/diary/ajax_upload', function () {
//    echo 1;
//});

