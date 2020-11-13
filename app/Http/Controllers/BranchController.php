<?php

namespace App\Http\Controllers;
use App\Branches;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:superadministrator');
    }
    
    public function index()
    {
        return view('admin.branch');
    }

    public function store(){
        $check= Branches::where('branch_name',  request('branch'))->first();
        if(empty($check)){
            $branch = new Branches();
            $branch->branch_name = request('branch');
            $branch->save();
            return redirect()->back()->with('success','branch has been added');
        }else{
                return redirect()->back()->with('error','branch has been already saved');
            }
            
        
       
    
        
    
    }
    }
   

