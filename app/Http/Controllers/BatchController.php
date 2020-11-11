<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Students;
use App\Batches;

class BatchController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:superadministrator');
    }
    public function index()
    {
        return view('admin.batch');
    }
    public function store()
    {   
        $check=Batches::where('batch_name',  request('batch'))->first();
        if(empty($check)){
            $batch = new Batches();
            $batch->batch_name = request('batch');
            $batch->save();
            return redirect()->back()->with('success','batch has been added');
        }else{
                return redirect()->back()->with('error','batch has been already saved');
            }
            
        
       
 
        
  
    }
}
