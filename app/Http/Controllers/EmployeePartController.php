<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeePartController extends Controller
{
    public function dashboard()
    {
        return view('employeepart.employeedashboard');
    }
}
