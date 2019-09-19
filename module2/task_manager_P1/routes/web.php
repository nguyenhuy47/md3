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

Route::group(['prefix'=>'customer'], function () {

    Route::get('/index','TaskController@index')->name('Task.index');
    Route::get('/create','TaskController@create')->name('Task.create');
    Route::get('/create','TaskController@store')->name('Task.store');



    Route::post('store',function (){
        return 'luu du lieu khach hang thong qua phuong thuc post';
    });

    Route::get('{id}/show',function (){
        return 'Hien thi thong tin chi tiet khach hang';
    });

    Route::get('{id}/edit',function (){
        return 'tao form chinh sua thong tin khach hang';
    });

    Route::patch('{id}/update',function (){
        return 'luu du lieu chinh sua thong tin khach hang';
    });

    Route::delete('id',function (){
        return 'xoa thong tin khach hang';
    });
});
