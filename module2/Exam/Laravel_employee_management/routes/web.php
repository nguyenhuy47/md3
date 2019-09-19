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

Route::get('/admin', function () {
    return view('admin.dashboard.main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'employees'], function () {

    Route::get('/','EmployeeController@index')->name('employees.index');

    Route::get('/create','EmployeeController@create')->name('employees.create');

    Route::post('/create','EmployeeController@store')->name('employees.store');

    Route::get('/{id}/edit','EmployeeController@edit')->name('employees.edit');

    Route::post('/{id}/edit','EmployeeController@update')->name('employees.update');

    Route::get('/{id}/destroy','EmployeeController@destroy')->name('employees.destroy');

    Route::get('/filter','EmployeeController@filterByTeam')->name('employees.filterByTeam');

    Route::get('/search','EmployeeController@search')->name('employees.search');


});


Route::group(['prefix' => 'teams'], function () {
    Route::get('/','TeamController@index')->name('teams.index');

    Route::get('/create','TeamController@create')->name('teams.create');

    Route::post('/create','TeamController@store')->name('teams.store');

    Route::get('/{id}/edit','TeamController@edit')->name('teams.edit');

    Route::post('/{id}/edit','TeamController@store')->name('teams.store');

    Route::get('/{id}/delete','TeamController@destroy')->name('teams.destroy');

});

