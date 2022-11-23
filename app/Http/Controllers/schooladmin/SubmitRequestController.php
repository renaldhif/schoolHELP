<?php

namespace App\Http\Controllers\schooladmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubmitRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('schooladmin.submitrequest');
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

    //store tutor request
    public function storeTutorRequest(Request $request)
    {
        // TODO:activate this code (line 45-62) when the tutor request form is ready and the github has been updated
        // $request->validate(request(), [
        //     'tutorialdescription' => 'required',
        //     'proposeddatetime' => 'required',
        //     'studentlevel' => 'required',
        //     'numberofexpectedstudent' => 'required',
        // ]);

        // $submitrequest = new Request();
        // $submitrequest->user_id = auth()->user()->id;
        // $submitrequest->school_id = $request->user()->school->id;
        // $submitrequest->request_date = now();
        // $submitrequest->request_status = 'New';
        // $submitrequest->description = $request['tutorialdescription'];
        // $submitrequest->proposed_date = $request['proposeddatetime'];
        // $submitrequest->student_level = $request['studentlevel'];
        // $submitrequest->student_number = $request['numberofexpectedstudent'];
        // $submitrequest->save();
        // return redirect()->route('schooladmin.submitrequest.index')->with('success', 'Request submitted successfully');
    }

    public function storeResourceRequest(Request $request)
    {
        $request->validate(request(), [
            'description' => 'required',
            'resourcetype' => 'required',
            'numberrequired' => 'required',
        ]);

        //TODO delete code below when the resource request form is ready and the github has been updated
        // $request->user()->requests()->create([
        //     'user_id' => auth()->user()->id,
        //     'school_id' => $request->user()->school->id,
        //     'request_date' => now(),
        //     'request_status' => 'New',
        //     'description' => $request->description,
        //     'resource_category' => $request->resourcetype,
        //     'resource_quantity' => $request->numberrequired,
        // ]);

        //TODO activate code below (line 85-94) when the resource request form is ready and the github has been updated
        // $submitrequest = new Request();
        // $submitrequest->user_id = auth()->user()->id;
        // $submitrequest->school_id = $request->user()->school->id;
        // $submitrequest->request_date = now();
        // $submitrequest->request_status = 'New';
        // $submitrequest->description = $request['resourcedescription'];
        // $submitrequest->resource_category = $request['resourcetype'];
        // $submitrequest->resource_quantity = $request['numberrequired'];
        // $submitrequest->save();
        // return redirect()->route('schooladmin.submitrequest.index')->with('success', 'Request submitted successfully');
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