<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('about', function(){
    return view('about');
});
Route::get('counsellor', function(){
    return view('counselor');
});
Route::get('services', function(){
    return view('services');
});
Route::get('pricing', function(){
    return view('pricing');
});
Route::get('contact', function(){
    return view('contact');
});
Route::get('adult_counselling', function(){
    return view('adult_counseling');
});
