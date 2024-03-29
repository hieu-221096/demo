<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('hone/', function () {
        $start_date2 = "2022-10-19";
        if ($start_date1322 > "abc" || $start_date2 > 1) {
            return view ('welcome', ['start_date' => $start_date]);
        }
    });
});
