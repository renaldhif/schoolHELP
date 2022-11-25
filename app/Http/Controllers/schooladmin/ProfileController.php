<?php

namespace App\Http\Controllers\schooladmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('schooladmin.profile');
    }

    public function editProfile(Request $request){

        $request->user()->update($request->all());
        if($request) {
            return back()->with('success', 'Admin Profile updated successfully');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
            
        
    }
}
