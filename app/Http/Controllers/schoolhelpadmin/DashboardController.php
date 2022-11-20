<?php

namespace App\Http\Controllers\schoolhelpadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('schoolhelpadmin.dashboard');
    }
}
