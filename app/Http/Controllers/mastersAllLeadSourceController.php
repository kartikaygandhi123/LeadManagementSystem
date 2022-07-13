<?php

namespace App\Http\Controllers;

use App\Models\LeadSource;
use Illuminate\Http\Request;

class MastersAllLeadSourceController extends Controller
{
    //
    function AllLeadSourceShow()
    {
        $leadsource = LeadSource::get();
        return view('site.masters.allleadsource', ['leadsource' => $leadsource]);
    }
}
