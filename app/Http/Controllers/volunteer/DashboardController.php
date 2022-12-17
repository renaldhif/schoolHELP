<?php

namespace App\Http\Controllers\volunteer;

use App\Models\School;
use App\Models\RequestData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $schools = School::all();
        // $requests = RequestData::all();
        // $requestData = RequestData::with('school')->get(); // with('relationNameInModel')
        $requests = RequestData::with('school')
        ->distinct(['school_name', 'school_city', 'request_date'])
        ->where('request_status','NEW')->get(); // with('relationNameInModel')
        // show unique school name

        return view('volunteer.dashboard', ['schools' => $schools, 'requests' => $requests]);
    }
}
