<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
/**
 * Frontend Route
 */
Route::resource('student', 'App\Http\Controllers\StudentController');
Route::resource('product', 'App\Http\Controllers\ProductController');
