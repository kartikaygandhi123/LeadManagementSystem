<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{

    function ReportsShow()
    {

        return view('site.reports.reports');
    }
}
