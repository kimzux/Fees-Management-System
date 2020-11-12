<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use DB;
class ImportExportController extends Controller
{
//     function index(){
//         $data = DB::table('students')->orderBy('id','DESC')->get();
//         return redirect()->back()->with('success','Data Saved');
//     }
function import(Request $request){
    $this->validate($request,[
        'select_file'=>'required|mimes:xls,xlsx'
    ]);
    $path = $request->file('select_file')->getRealPath();
    //$data = Excel::import($path)->get();
    $data = Excel::import(new UsersImport, $path)->get();
        dd($data);
    if($data->count() > 0){
        foreach($data->toArray as $ke->$value){
            foreach($value as $row){
                $insert_data[]=array(
                    'name'   => $row ['name'],
                    'email'  => $row ['email'],
                    'phone_number'    => $row ['phone'],
                    'registration_number'  => $row['admission_number'],
                    'parent_name'  => $row['parent_name'],
                    'address'  => $row['address'],
                    'address'  => $row['address'],
                   'date_of_birth'=> $row['dob'],
                   'date_of_joining'=> $row['doj'],
                      'gender'=>$gender['gender']

                );
            }
        }

        if(!empty($insert_data)){
           DB::table('students')->insert($insert_data);
        }
    }
    return redirect()->back()->with('success','Excel data successful inserted');
   
}

}
