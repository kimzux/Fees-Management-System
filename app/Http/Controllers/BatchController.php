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
        
            $batch = new Batches();
            $batch->batch_name = request('batch');
            $batch->save();
            if($batch){
                return redirect()->back()->with('success','batch has been saved');
            }
            else{
                return redirect()->back()->with('error','batch has been failed to be saved');
            }
            
        
       
 
        
  
    }
}
