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


Route::get('/', 'ArticleController@index');
Route::get('/register', 'UserController@register');
Route::post('/register', 'UserController@doregist');
Route::get('/login', 'UserController@login');
Route::post('/login', 'UserController@dologin');
Route::resource('/article', 'ArticleController');

Route::get('/logout', 'UserController@logout');

Route::resource('/diary', 'DiaryController');
Route::post('/fileUpload', 'MediaController@upload');
Route::resource('/media', 'MediaController');
Route::get('/visit' , 'VisitController@index');

Route::get('/personal', 'UserController@show');

Route::get('/password', 'UserController@password');

Route::get('/test', ['middleware' => 'loginrequire', function() {
    echo 1;
}]);
