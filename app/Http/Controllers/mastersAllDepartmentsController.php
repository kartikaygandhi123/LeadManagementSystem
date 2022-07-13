<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class MastersAllDepartmentsController extends Controller
{
    //
    function AllDepartmentsShow()
    {
        $departments = Department::get();
        return view('site.masters.alldepartments', ['departments' => $departments]);
    }
}
