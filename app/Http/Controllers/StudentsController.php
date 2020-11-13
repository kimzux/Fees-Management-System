<?php 

namespace App\Http\Controllers;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Students;
use App\User;
use App\Batches;
use App\Student_batch;
use Hash;
use DB;
class StudentsController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
    
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    if($_POST){
      // dd(request()->all());
    $user = User::where('email', request('email'))->first();
    if(!$user){
  $user = new User();
  $user->name = request('name');
  $user->email = request('email');
  $user->password = Hash::make( request('email'));
  $user->save();
  $user->attachRole('user');
    }
    else{
      // return redirect()->back()->with('error','sorry user with that email address already exist!!');
      // return redirect(‘admission’)->with(‘message’, ‘User registered!);
      return redirect()->back()->with('error','sorry user with that email address already exist!!');
    }
  $check=Students::where('registration_number',  request('registration_number'))->first();
  if(empty($check)){
  $student = new Students();
  $student->user_id = $user->id;
  $student->name = $user->name;
  $student->email = $user->email;
  $student->phone_number=request('phone');
  $student->registration_number=request('registration_number');
  $student->parent_name=request('parent_name');
  $student->address= request('address');
  $student->date_of_birth= request('dob');
  $student->date_of_joining= request('doj');
  $student->gender= request('gender');
  // $student->image= request('image')->nullable
  $student->save();
  
  $student_batch= new Student_batch();
  $student_batch->student_id=$student->id;
  $student_batch->batch_id=request('batch');
  $student_batch->save();
  return redirect()->back()->with('success','Data Saved');
  }
  else{
  
    return redirect()->back()->with('warning','sorry these student already exist');
   }


   

  // $student = DB::table('students')->insert(request()->except('password','_token'));

    // DB::select('insert into students(username,email,parent_name,address,date_of_birth,d,ate_of_join,password,gender) values(?,?,?,?,?,?,?,?,?)',[$admission_number, $student_name,$student_email,$parent_name,$student_address,$date_of_birth,$date_of_join,$password,$gender]);
  // if($student){
  //  return redirect()->back()->with('success','Data Saved');
 
   
  }
}
public function import(Request $request) 
{   
  $this->validate($request,[
    'select_file'=>'required|mimes:xls,xlsx'
]);
    $path = $request->file('select_file')->getRealPath();
    Excel::import(new UsersImport,  $path);
    
    return redirect('/')->with('success', 'All good!');
}

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

