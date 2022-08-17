<?php

namespace App\Http\Controllers;

use App\Models\LeadSource;
use Illuminate\Http\Request;

class MastersAllLeadSourceController extends Controller
{

    function AllLeadSourceShow()
    {
        $leadsource = LeadSource::get();
        return view('site.masters.allleadsource', ['leadsource' => $leadsource]);
    }

    function AddLeadSource(Request $request)
    {


        $leadsource = new LeadSource;
        $leadsource->lead_source = $request->leadsource;
        $leadsource->save();
        return redirect()->back()->with('success', 'Lead Source Added');
    }
}
