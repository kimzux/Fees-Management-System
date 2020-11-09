<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
class UserDashboardController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        return view('user.userdashboard');
    }

public function userprofile()
{
    if($_POST){
       // dd(request()->all());
     $admission_number= $request->input('registration_number');
     $student_name= $request->input('username');
     $student_email= $request->input('email');
     $parent_name= $request->input('parent_name');
     $student_address= $request->input('address');
     $date_of_birth= $request->input('date_of_birth');
     $date_of_join= $request->input('date_of_join');
     $password= $request->input('password');
     $gender= $request->input('gender');
        
     DB::insert('insert into students(username,email,parent_name,address,date_of_birth,d,ate_of_join,,password,gender) values(?,?,?,?,?,?,?,?,?)',[$admission_number, $student_name,$student_email,$parent_name,$student_address,$date_of_birth,$date_of_join,$password,$gender]);
  
     return redirect('profile')->with('success','Data Saved');
     
    }
    return view('user.profile');
}

}
