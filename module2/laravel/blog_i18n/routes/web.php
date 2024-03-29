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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts','PostController@index')->name('posts.list');
Route::get('/posts/create','PostController@create')->name('posts.create');
Route::get('/posts/create', 'PostController@store')->name('posts.store');
Route::get('/change-language/{language}', 'LanguageController@changeLanguage')->name('user.change-language');
