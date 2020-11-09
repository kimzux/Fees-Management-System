<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Students;
class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:superadministrator');
    }
    public function index()
    {
        $this->data['total_students'] = Students::all()->count();
        return view('admin.dashboard', $this->data);
    }
    
}
