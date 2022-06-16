<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reportsController extends Controller
{
    //
    function reportsShow()
    {

        return view('site.reports.reports');
    }
}
