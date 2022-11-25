<?php

namespace App\Http\Controllers\schooladmin;

use App\Http\Controllers\Controller;
use App\Models\RequestData;
use App\Models\ResourceCategory;
use App\Models\StudentLevelCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SubmitRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student_levels = StudentLevelCategory::all();
        $resource_categories = ResourceCategory::all();
        return view(
            'schooladmin.submitrequest',
            [
                'student_levels' => $student_levels,
                'resource_categories' => $resource_categories
            ]
        );
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
        $this->validate(request(), [
            'description' => 'required|max:255',
            'proposed_date' => 'required',
            'student_level' => 'required',
            'student_number' => 'required|numeric|gt:0',
        ]);

        $query = RequestData::create([
            'user_id' => auth()->user()->id,
            'school_id' => auth()->user()->school_id,
            'request_date' => now(),
            'description' => $request['description'],
            'proposed_date' => $request['proposed_date'],
            'student_level' => $request['student_level'],
            'student_number' => $request['student_number'],
        ]);
        if ($query) {
            return back()->with('success', 'Request submitted successfully');
        } else {
            return back()->with('error', 'Request submission failed');
        }
    }

    public function storeResourceRequest(Request $request)
    {
        $this->validate(request(), [
            'description' => 'required|max:255',
            'resource_category' => 'required',
            'resource_quantity' => 'required|numeric|gt:0',
        ]);

        $query = RequestData::create([
            'user_id' => auth()->user()->id,
            'school_id' => auth()->user()->school_id,
            'request_date' => now(),
            'description' => $request['description'],
            'resource_category' => $request['resource_category'],
            'resource_quantity' => $request['resource_quantity'],
        ]);
        if ($query) {
            return back()->with('success', 'Request submitted successfully');
        } else {
            return back()->with('error', 'Request submission failed');
        }
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

    /**
     */
    public function __construct()
    {
    }
}