<?php

namespace App\Http\Controllers\schoolhelpadmin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AddSchoolController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('schoolhelpadmin.addschool');
    }

    public function addSchool(Request $request) {
        $request -> validate([
            'school_name' => 'required',
            'school_address' => 'required',
            'school_city' => 'required',
        ]);

        // $school->save();
        $query = DB::table('schools')->insert([
            'school_name' => $request->school_name,
            'school_address' => $request->school_address,
            'school_city' => $request->school_city,
            'created_at' => now(),
        ]);

        if($query) {
            return back()->with('success', 'School added successfully');
        } else {
            return back()->with('fail', 'Something went wrong');
        }

    }
}
