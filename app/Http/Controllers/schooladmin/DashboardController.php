<?php

namespace App\Http\Controllers\schooladmin;

use App\Http\Controllers\Controller;
use App\Models\School;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        return view('schooladmin.dashboard');
    }

    //get school data from database and pass to view to display on dashboard page
    // public function getSchoolData() {
    //     $school = School::where('id', Auth::user()->school_id)->first();
    //     return view('schooladmin.dashboard', compact('school'));
    // }
}