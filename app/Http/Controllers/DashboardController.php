<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Models\Lead;
use App\Models\Stages;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    function dashboardShow(Request $req)
    {

        $leads = Lead::count();
        $leadsname = Lead::get();
        $industry = Industry::count();
        $stages = Stages::count();
        return view('dashboard', ['leads' => $leads, 'stages' => $stages, 'industry' => $industry, 'leadsname' => $leadsname]);
    }
}
