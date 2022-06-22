<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Models\Lead;
use App\Models\LeadSource;
use Illuminate\Http\Request;

class createLeadController extends Controller
{
    //
    function createLeadShow()
    {

        $industries = Industry::get();
        $leadsource = LeadSource::get();
        $lead = Lead::get();

        return view('site.custom.createlead', ['industries' => $industries, 'leadsource' =>  $leadsource, 'lead' => $lead]);
        // return view('site.testform', ['industries' => $industries, 'leadsource' =>  $leadsource, 'lead' => $lead]);
    }

    function fetchcustomer(Request $req)
    {
        $find = $req->get('find');


        $customer = Lead::where('id', $find)->first();
        return response()->json(['customers' => $customer]);
    }
}
