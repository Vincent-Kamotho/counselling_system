<?php

namespace App\Http\Controllers\Admin;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\AdultCounselling;
use Illuminate\Support\Facades\DB;
use App\Models\BusinessCounselling;
use App\Models\ChildrenCounselling;
use App\Http\Controllers\Controller;

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
        $appointmentApproval = DB::table('adult_counsellings')->where('id' , $id)->get();

        $approvedRecord = $appointmentApproval->map(function ($record){
            $record->status = 'Approved';
            return (array) $record;
        })->all();

        DB::table('appointments')->insert($approvedRecord);

        DB::table('adult_counsellings')->where('id' , $id)->delete();

        return redirect()->back()->with('success','Appointment Approved');
    }

    public function DeclineAdultAppointment($id)
    {
        $appointmentDecline = DB::table('adult_counsellings')->where('id' , $id)->get();

        $declinedRecord = $appointmentDecline->map(function ($record){
            $record->status = 'Declined';
            return (array) $record;
        })->all();

        DB::table('appointments')->insert($declinedRecord);

        DB::table('adult_counsellings')->where('id' , $id)->delete();

        return redirect()->back()->with('success','Appointment Declined');
    }

    public function ApproveChildrenAppointment($id)
    {
        $appointmentApprove = DB::table('children_counsellings')->where('id' , $id)->get();

        $approvedRecord = $appointmentApprove->map(function($record){
            $record->status = 'Approved';
            return (array) $record;
        })->all();

        DB::table('appointments')->insert($approvedRecord);

        DB::table('children_counsellings')->where('id' , $id)->delete();

        return redirect()->back()->with('success','Appointment Approved');
    }

    public function DeclineChildrenAppointment($id)
    {
        $appointmentDecline = DB::table('children_counsellings')->where('id' , $id)->get();

        $declinedRecord = $appointmentDecline->map(function($record){
            $record->status = 'Declined';
            return (array) $record;
        })->all();

        DB::table('appointments')->insert($declinedRecord);

        DB::table('children_counsellings')->where('id' , $id)->delete();

        return redirect()->back()->with('success','Appointment Declined');
    }

    public function ApproveBusinessAppointment($id)
    {
        $appointmentApproval = DB::table('business_counsellings')->where('id' , $id)->get();

        $approvedRecord = $appointmentApproval->map(function($record){
            $record->status = 'Approved';
            return (array) $record;
        })->all();

        DB::table('appointments')->insert($approvedRecord);

        DB::table('business_counsellings')->where('id' , $id)->delete();

        return redirect()->back()->with('success', 'Appointment Approved');
    }

    public function DeclineBusinessAppointment($id)
    {
        $appointmentDecline = DB::table('business_counsellings')->where('id' , $id)->get();

        $declinedRecord = $appointmentDecline->map(function($record){
            $record->status = 'Declined';
            return (array) $record;
        })->all();

        DB::table('appointments')->insert($declinedRecord);

        DB::table('business_counselling')->where('id' , $id)->delete();

        return redirect()->back()->with('success','Appointment Declined');
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
