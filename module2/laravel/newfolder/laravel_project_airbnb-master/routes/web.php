<?php

Route::match(['get', 'post'], '/', 'HousesController@showHouses')->name('listBockHouse');

Route::get('/list-bock-house', 'HousesController@showHouses')->name('listBockHouse');

Route::get('/show-updated-home-status/{id}', 'HousesController@showUpdatedHomeStatus')->name('showUpdatedHomeStatus');


Route::get('/create', 'CreatePostsController@create')->name('post.create');

Route::post('/create', 'CreatePostsController@store')->name('post.store');

Route::get('/search', 'HousesController@search')->name('search');



Route::prefix('sign-in')->group(function () {

    Route::get('/', 'LoginController@signIn')->name('sign-in');

    Route::post('/sign-in', 'LoginController@login')->name('sign-store');

    Route::post('/updated-home-status', 'HousesController@updatedHomeStatus')->name('updatedHomeStatus');

    Route::get('/sign-up', 'LoginController@signUp')->name('sign-up');

    Route::post('/sign-up', 'LoginController@register')->name('sign-up');

});

Route::get('/logout','LoginController@logout')->name('logout');

Route::get('/dashboard', 'DashBoardController@dashBoard')->name('dashboard')->middleware('auth');

Route::post('/calendar/{id_house}', 'UserController@BockCalendar')->name('calendar');

Route::get('/calendar/{id}', 'UserController@deleteCalender')->name('deleteCalender');


Route::prefix('user')->group(function () {

    Route::get('/calendar/{id}', 'UserController@showCalendar')->name('showCalendar');

    Route::get('/editUsers/{id}', 'DashBoardController@editUser')->name('editUsers');

    Route::post('/editUser/{id}', 'DashBoardController@updateUser')->name('editUser');

    Route::get('/forgot-pass/{id}', 'DashBoardController@forgotPassword')->name('forgot-pass');

    Route::post('forgot-password/{id}', 'DashBoardController@forgotPass')->name('forgot-password');

    Route::post('/post', 'DashBoardController@post')->name('post');

});


Route::get('/create/{id}', 'CreatePostsController@create')->name('post.create');

Route::post('/create/{id}', 'CreatePostsController@store')->name('post.store');

Route::get('/new-post/{id}', 'CreatePostsController@showNewPost')->name('showNewPost');

Route::get('/information-post/id={id}', 'HousesController@seeDetails')->name('seeDetails');

Route::get('/show-statistics/{id}', 'UserController@showStatistics')->name('showStatistics');

Route::post('/feedback/{id}', 'UserController@feedback')->name('feedback');



