<?php

namespace App\Http\Controllers;

use App\Models\LeadSource;
use Illuminate\Http\Request;

class mastersAllLeadSourceController extends Controller
{
    //
    function allLeadSourceShow()
    {
        $leadsource = LeadSource::get();
        return view('site.masters.allleadsource', ['leadsource' => $leadsource]);
    }
}
