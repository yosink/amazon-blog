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

Route::get('/', 'IndexController@index');
Route::get('articles', 'ArticleController@index');
Route::get('articles/{article}', 'ArticleController@show')->name('article-detail');
Route::get('user/center/{user}', 'UserController@index')->name('user-center');
Route::get('user/message/{to}', 'UserController@message');
Route::post('user/message/send/{con}', 'UserController@doChat');

Route::get('login', 'Auth\LoginController@loginForm');
Route::get('register', 'Auth\RegisterController@registerForm');
