<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class mastersAllDepartmentsController extends Controller
{
    //
    function allDepartmentsShow()
    {
        $departments = Department::get();
        return view('site.masters.alldepartments', ['departments' => $departments]);
    }
}
