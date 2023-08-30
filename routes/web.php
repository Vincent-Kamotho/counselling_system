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

Route::group(['prefix' => 'schedule'], function(){
    Route::get('appointments', function(){
        return view('admin.schedule.appointments');
    });
});

Route::get('admin/home', function(){
    return view('admin.dashboard');
});


Route::group(['prefix' => 'admin'], function(){
    Route::get('adult_appointments', [App\Http\Controllers\Admin\Appointments::class, 'AdultAppointment']);
    Route::get('approve_adult_appointment/{id}',[App\Http\Controllers\Admin\Appointments::class, 'ApproveAdultAppointment']);
    Route::get('decline_adult_appointment/{id}',[App\Http\Controllers\Admin\Appointments::class, 'DeclineAdultAppointment']);
    Route::get('approve_child_appointment/{id}',[App\Http\Controllers\Admin\Appointments::class, 'ApproveChildrenAppointment']);
    Route::get('decline_child_appointment/{id}',[App\Http\Controllers\Admin\Appointments::class, 'DeclineChildrenAppointment']);
    Route::get('approve_business_appointment/{id}',[App\Http\Controllers\Admin\Appointments::class, 'ApproveBusinessAppointment']);
    Route::get('decline_business_appointment/{id}',[App\Http\Controllers\Admin\Appointments::class,'DeclineBusinessAppointment']);
    Route::get('children_appointments', [App\Http\Controllers\Admin\Appointments::class , 'ChildrenAppointment']);
    Route::get('business_appointments', [App\Http\Controllers\Admin\Appointments::class, 'BusinessAppointment']);
    Route::get('schedule', [App\Http\Controllers\Admin\Appointments::class, 'schedule']);

    Route::group(['prefix' => 'counsellors'], function(){
        Route::get('list', [App\Http\Controllers\Admin\Counsellors::class, 'index']);
        Route::get('add', [App\Http\Controllers\Admin\Counsellors::class, 'create']);
        Route::post('save', [App\Http\Controllers\Admin\Counsellors::class, 'store']);
        Route::get('edit/{id}', [App\Http\Controllers\Admin\Counsellors::class, 'edit']);
        Route::post('update/{id}', [App\Http\Controllers\Admin\Counsellors::class, 'update']);
        Route::get('delete/{id}', [App\Http\Controllers\Admin\Counsellors::class, 'destroy']);
    });
});

Route::post('email', [App\Http\Controllers\AppointmentsController::class, 'ReceiveMail']);

