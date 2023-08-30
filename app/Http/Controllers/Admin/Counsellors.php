<?php

namespace App\Http\Controllers\Admin;

use App\Models\Counsellor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Counsellors extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counsellors = Counsellor::all();
        return view('admin.counsellors.listcounsellors')->with('counsellors' , $counsellors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.counsellors.addcounsellor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => 'required|email',
            'phone_number' => 'required|regex:/^07\d{8}$/|min:10',
            'price' => 'required'
        ]);

        $counsellor = new Counsellor;
        $counsellor->first_name = $request->input('first_name');
        $counsellor->last_name = $request->input('last_name');
        $counsellor->phone_number = $request->input('phone_number');
        $counsellor->email = $request->input('email');
        $counsellor->price = $request->input('price');
        $counsellor->save();

        return redirect()->to('admin/counsellors/list')->with('success','Counsellor Successfully added');
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
        $counsellor = Counsellor::find($id);
        return view('admin.counsellors.editcounsellor')->with('counsellor' , $counsellor);
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
        $request->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => 'required|email',
            'phone_number' => 'required|regex:/^07\d{8}$/|min:10',
            'price' => 'required'
        ]);

        $counsellor = Counsellor::find($id);
        $counsellor->first_name = $request->input('first_name');
        $counsellor->last_name = $request->input('last_name');
        $counsellor->phone_number = $request->input('phone_number');
        $counsellor->email = $request->input('email');
        $counsellor->price = $request->input('price');
        $counsellor->update();
        return redirect()->to('admin/counsellors/list')->with('success','Record Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $counsellor = Counsellor::find($id);
        $counsellor->delete();

        return redirect()->to('admin/counsellors/list')->with('success','Record Deleted Successfully');
    }
}
