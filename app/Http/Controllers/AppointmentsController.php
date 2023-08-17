<?php

namespace App\Http\Controllers;

use App\Models\AdultCounselling;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    public function SaveAdultAppointment(Request $request)
    {
        $request->validate([
            'first_name' => 'required|min:3',
            'second_name' => 'required|min:3',
            'phone' => 'required|regex:/^07\d{8}$/|min:10',
            'email' => 'required|email',
            'appointment_date' => 'required',
            'time_slot' => 'required',
            'service'=>'required'
        ]);

        $adult_counselling = new AdultCounselling;
        $adult_counselling->first_name = $request->input('first_name');
        $adult_counselling->second_name = $request->input('second_name');
        $adult_counselling->phone_number = $request->input('phone');
        $adult_counselling->email = $request->input('email');
        $adult_counselling->appointment_date = $request->input('appointment_date');
        $adult_counselling->time_slot = $request->input('time_slot');
        $adult_counselling->service = $request->input('service');

        $adult_counselling->save();
        return redirect()->back()->with('success' ,' Your Application has been made. Please wait for the confirmation');
        // dd($request->input('first_name'), $request->input('second_name'), $request->input('phone'),
        // $request->input('email'), $request->input('appointment_date'), $request->input('time_slot'),
        // $request->input('service'));
    }
}
