<?php

namespace App\Http\Controllers\Admin;

use App\Models\BusinessCounselling;
use App\Models\ChildrenCounselling;
use Illuminate\Http\Request;
use App\Models\AdultCounselling;
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
