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

Route::get('/', 'QM\IndexController@index');
Route::group([ 'middleware' => ['web'], 'prefix' => 'qm', 'namespace' => 'QM'], function () {
    Route::any('/','IndexController@index');
    Route::any('index','IndexController@index');
    Route::any('index/test','IndexController@test');



    Route::any('login', 'AuthController@login');
    Route::post('check_login', 'AuthController@check_login');
    Route::any('quit', 'AuthController@quit'); //登录注册页面跳转


    Route::any('reg', 'AuthController@reg');
    Route::post('check_reg', 'AuthController@check_reg');
    Route::post('check_code', 'AuthController@check_code');
    Route::get('captcha/{tmp}', 'AuthController@captcha');
    Route::post('check_username', 'AuthController@check_username'); //登录注册请求


    Route::any('talk','TalkController@index'); //跳转到划水区首页

});

Route::any('mail/sendtext','MailController@sendtext');
Route::any('mail/sendimg','MailController@sendimg');