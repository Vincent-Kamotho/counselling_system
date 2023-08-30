<?php

namespace App\Http\Controllers\Admin;

use App\Mail\AppointmentApproved;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\AdultCounselling;
use App\Mail\AppointmentDeclined;
use Illuminate\Support\Facades\DB;
use App\Models\BusinessCounselling;
use App\Models\ChildrenCounselling;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class Appointments extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function AdultAppointment()
    {
        $adult_appointment = AdultCounselling::all();
        return view('admin.adultappointment.appointment')->with('adult_appointment' , $adult_appointment);
    }

    public function ChildrenAppointment()
    {
        $children_appointment = ChildrenCounselling::all();
        return view('admin.childrenappointment.appointment')->with('children_appointment' , $children_appointment);
    }

    public function BusinessAppointment()
    {
        $business_appointment = BusinessCounselling::all();
        return view('admin.businessappointment.appointment')->with('business_appointment' , $business_appointment);
    }

    public function ApproveAdultAppointment($id)
    {
        $appointmentApproval = DB::table('adult_counsellings')->where('id' , $id)->first();

        if($appointmentApproval){
            
            $appointmentData = (array) $appointmentApproval;
            unset($appointmentData['id']);

            //Add the 'status' field with 'Approved' value 
            $appointmentData['status'] = 'Approved';

            //Insert the modified appointment data into the 'appointments' table
            DB::table('appointments')->insert($appointmentData);
            Mail::to($appointmentApproval->email)->send(new AppointmentApproved($appointmentApproval));

            //Delete the approved appointment from the 'adult_counsellings' table
            DB::table('adult_counsellings')->where('id' , $id)->delete();
            return redirect()->back()->with('success','Appointment Approved');
        }
    }

    public function DeclineAdultAppointment($id)
    {

        $appointmentDecline = DB::table('adult_counsellings')->where('id' , $id)->first();

        if($appointmentDecline){
            
            $appointmentData = (array) $appointmentDecline;
            unset($appointmentData['id']);

            //Add the 'status' field with 'Declined' value 
            $appointmentData['status'] = 'Declined';

            //Insert the modified appointment data into the 'appointments' table
            DB::table('appointments')->insert($appointmentData);
            Mail::to($appointmentDecline->email)->send(new AppointmentDeclined($appointmentDecline));

            //Delete the declined appointment from the 'children_counsellings' table
            DB::table('adult_counsellings')->where('id' , $id)->delete();
            return redirect()->back()->with('success','Appointment Declined');
        }

    }

    public function ApproveChildrenAppointment($id)
    {
        $appointmentApproval = DB::table('children_counsellings')->where('id' , $id)->first();

        if($appointmentApproval){
            
            $appointmentData = (array) $appointmentApproval;
            unset($appointmentData['id']);

            //Add the 'status' field with 'Approved' value 
            $appointmentData['status'] = 'Approved';

            //Insert the modified appointment data into the 'appointments' table
            DB::table('appointments')->insert($appointmentData);
            Mail::to($appointmentApproval->email)->send(new AppointmentApproved($appointmentApproval));

            //Delete the declined appointment from the 'children_counsellings' table
            DB::table('children_counsellings')->where('id' , $id)->delete();
            return redirect()->back()->with('success','Appointment Declined');
        }
    }

    public function DeclineChildrenAppointment($id)
    {

        $appointmentDecline = DB::table('children_counsellings')->where('id' , $id)->first();

        if($appointmentDecline){
            
            $appointmentData = (array) $appointmentDecline;
            unset($appointmentData['id']);

            //Add the 'status' field with 'Declined' value 
            $appointmentData['status'] = 'Declined';

            //Insert the modified appointment data into the 'appointments' table
            DB::table('appointments')->insert($appointmentData);

            //Delete the declined appointment from the 'children_counsellings' table
            DB::table('children_counsellings')->where('id' , $id)->delete();

            return redirect()->back()->with('success','Appointment Declined');
        }
    }

    public function ApproveBusinessAppointment($id)
    {

        $appointmentApproval = DB::table('business_counsellings')->where('id' , $id)->first();

        if($appointmentApproval){
            
            $appointmentData = (array) $appointmentApproval;
            unset($appointmentData['id']);

            //Add the 'status' field with 'Approved' value 
            $appointmentData['status'] = 'Approved';

            //Insert the modified appointment data into the 'appointments' table
            DB::table('appointments')->insert($appointmentData);

            //Delete the approved appointment from the 'business_counsellings' table
            DB::table('business_counsellings')->where('id' , $id)->delete();

            return redirect()->back()->with('success','Appointment Approved');
        }
    }

    public function DeclineBusinessAppointment($id)
    {

        $appointmentDecline = DB::table('business_counsellings')->where('id' , $id)->first();

        if ($appointmentDecline){

            $appointmentData = (array) $appointmentDecline;
            unset($appointmentData['id']);

            //Add the 'status' field with 'Declined' value
            $appointmentData['status'] = 'Declined';

            //Insert the modified appointment data into the 'appointments' table
            DB::table('appointments')->insert($appointmentData);

            Mail::to($appointmentDecline->email)->send(new AppointmentDeclined($appointmentDecline));

            DB::table('business_counsellings')->where('id' , $id)->delete();

            return redirect()->back()->with('success','Appointment Declined');
        }
        
    }

    public function schedule()
    {
        $schedule = Appointment::all();
        
        return view('admin.schedule.appointments')->with('schedule' , $schedule);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
