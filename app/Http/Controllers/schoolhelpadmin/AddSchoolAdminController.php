<?php

namespace App\Http\Controllers\schoolhelpadmin;

use App\Models\User;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Auth\RegisterController;

class AddSchoolAdminController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::all();
        // dd($schools);
        return view('schoolhelpadmin.addschooladmin', ['schools' => $schools]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        //     'role' => 'schooladmin',
        //     'school_id' => $data['school_id'],
        // ]);        
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

    public function addSchoolAdmin(Request $request) {
        

        // $request -> validate([
        //     'school_id' => 'required',
        //     'fullname' => 'required',
        //     'staff_id' => 'required',
        //     'position' => 'required',
        // ]);

        $request -> validate([
            'phone_number' => 'required',
        ]);
        // dd($request->all());

        $query = User::create([
            'school_id' => $request['school_id'],
            'name' => $request['name'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'phone_number' => $request['phone_number'],
            'staff_id' => $request['staff_id'],
            'role' => 'schooladmin',
            'position' => $request['position'],
        ]);
        if($query) {
            return back()->with('success', 'School Admin added successfully');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
        // return redirect('/schoolhelpadmin/addschooladmin')->with('success', 'School Admin added successfully');

        // $query->school

        // $school_id = $request -> input('school_id');
        // $username = $request -> input('username');
        // $password = $request -> input('password');
        // $fullname = $request -> input('fullname');
        // $email = $request -> input('email');
        // $phone_number = $request -> input('phone_number');
        // $staff_id = $request -> input('staff_id');
        // $position = $request -> input('position');
        
        // $data = array(
        //     'school_id' => $school_id, 
        //     'username' => $username, 
        //     'password' => $password, 
        //     'fullname' => $fullname, 
        //     'email' => $email, 
        //     'phone_number' => $phone_number, 
        //     'staff_id' => $staff_id, 
        //     'position' => $position
        // );
        // DB::table('users')->insert($data);
        // return back()->with('success', 'School Admin added successfully');


        // if($query) {
        //     return back()->with('success', 'School Admin added successfully');
        // } else {
        //     return back()->with('fail', 'Something went wrong');
        // }
        // return redirect('/schoolhelpadmin/addschooladmin')->with('success', 'School Admin added successfully');
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
