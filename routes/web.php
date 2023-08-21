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
Route::group(['prefix' => 'adults'], function(){
    Route::get('adult_counselling', function(){
        return view('adult_counseling');
    });
    Route::post('save_adult_appointment', [App\Http\Controllers\AppointmentsController::class, 'SaveAdultAppointment']);
});

Route::group(['prefix' => 'children'], function(){
    Route::get('children_counselling', function(){
        return view('children_counselling');
    });
    Route::post('save_child_appointment', [App\Http\Controllers\AppointmentsController::class, 'SaveChildAppointment']);
});

Route::group(['prefix' => 'business'], function(){
    Route::get('business_counselling', function(){
        return view('business_counselling');
    });
    Route::post('save_business_appointment', [App\Http\Controllers\AppointmentsController::class, 'SaveBusinessAppointment']);
});

Route::get('admin/home', function(){
    return view('admin.dashboard');
});


Route::group(['prefix' => 'admin'], function(){
    Route::get('adult_appointments', [App\Http\Controllers\Admin\Appointments::class, 'AdultAppointment']);
    Route::get('children_appointments', [App\Http\Controllers\Admin\Appointments::class , 'ChildrenAppointment']);
    Route::get('business_appointments', [App\Http\Controllers\Admin\Appointments::class, 'BusinessAppointment']);
});

Route::post('email', [App\Http\Controllers\AppointmentsController::class, 'receivemail']);

