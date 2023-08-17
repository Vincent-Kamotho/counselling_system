<?php

namespace App\Http\Controllers;

use App\Models\AdultCounselling;
use App\Models\ChildrenCounselling;
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
            'appointment_date' => 'required|date|after_or_equal:today',
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
    }

    public function SaveChildAppointment(Request $request)
    {
        $request->validate([
            'first_name' => 'required|min:3',
            'second_name' => 'required|min:3',
            'parent_phone' => 'required|regex:/^07\d{8}$/|min:10',
            'parent_email' => 'required|email',
            'appointment_date' => 'required|date|after_or_equal:today',
            'time_slot' => 'required',
            'service'=>'required'
        ]);

        $children_counselling = new ChildrenCounselling;
        $children_counselling->first_name = $request->input('first_name');
        $children_counselling->second_name = $request->input('second_name');
        $children_counselling->parents_phone = $request->input('parent_phone');
        $children_counselling->parents_email = $request->input('parent_email');
        $children_counselling->appointment_date = $request->input('appointment_date');
        $children_counselling->time_slot=$request->input('time_slot');
        $children_counselling->service = $request->input('service');

        $children_counselling->save();
        return redirect()->back()->with('success' ,' Your Application has been made. Please wait for the confirmation');
    }
}
