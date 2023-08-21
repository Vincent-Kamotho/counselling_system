<?php

namespace App\Http\Controllers;

use App\Mail\ReceiveMail;
use Illuminate\Http\Request;
use App\Models\AdultCounselling;
use App\Models\BusinessCounselling;
use App\Models\ChildrenCounselling;
use Illuminate\Support\Facades\Mail;

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
    
    public function SaveBusinessAppointment(Request $request)
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

        $business_counselling = new BusinessCounselling;
        $business_counselling->first_name = $request->input('first_name');
        $business_counselling->second_name = $request->input('second_name');
        $business_counselling->phone_number = $request->input('phone');
        $business_counselling->email = $request->input('email');
        $business_counselling->appointment_date = $request->input('appointment_date');
        $business_counselling->time_slot = $request->input('time_slot');
        $business_counselling->service = $request->input('service');

        $business_counselling->save();
        return redirect()->back()->with('success' ,' Your Application has been made. Please wait for the confirmation');

    }

    public function receivemail(Request $request)
    {
        // $name = $request->input('name');
        // $email = $request->input('email');
        // $subject = $request->input('subject');
        // $message = $request->input('message');

        // Mail::to($email)
        // ->send(new ReceiveMail());

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        if($this->isOnline()){
            $mail_data = [
                'recipient' => 'vinsentwambugu@gmail.com',
                'fromEmail' => $request->email,
                'fromName' => $request->name,
                'subject' => $request->subject,
                'message' => $request->message
            ];
            \Mail::send('mail.receivemail',$mail_data, function($message) use ($mail_data){
                $message->to($mail_data['recipient'])
                        ->from($mail_data['fromEmail'], $mail_data['fromName'])
                        ->subject($mail_data['subject']);
            });

            return redirect()->back()->with('success' , 'Email sent');
        }else{
            return redirect()->back()->withInput()->with('error', 'Check your internet connection'); 
        }
    }

    public function isOnline($site = "https://youtube.com/"){
        if(@fopen($site, "r")){
            return true;
        }else{
            return false;
        }
    }
}
