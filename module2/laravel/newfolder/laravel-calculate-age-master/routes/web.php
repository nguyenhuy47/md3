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

use Carbon\Carbon;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('calculate_age');
});

Route::get('/{date}', function ($birthday) {
    $years = Carbon::parse($birthday)->age;
    echo "Tuổi của bạn là: " . $years;

});
