<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class MastersAllDepartmentsController extends Controller
{

    function AllDepartmentsShow()
    {
        $departments = Department::get();
        return view('site.masters.alldepartments', ['departments' => $departments]);
    }

    function AddDepartment(Request $request)
    {



        $department = new Department;
        $department->department = $request->department;
        $department->save();
        return redirect()->back()->with('success', 'Department Added');
    }
}
