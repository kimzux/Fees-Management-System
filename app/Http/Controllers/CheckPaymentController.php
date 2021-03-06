<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckPaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:superadministrator');
    }
    public function index()
    {
        return view('admin.check_payment');
    }
}
