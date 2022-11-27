<?php

namespace App\Http\Controllers\schooladmin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        // User::whereId(auth()->user()->id)->update([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone_number' => $request->phone_number,
        //     'staff_id' => $request->staff_id,
        //     'position' => $request->position,
        // ]);
        
        if($request) {
            return back()->with('success', 'Admin Profile updated successfully');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
            
        
    }
}
