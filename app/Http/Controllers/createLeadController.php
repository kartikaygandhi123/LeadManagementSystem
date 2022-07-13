<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Models\Lead;
use App\Models\LeadSource;
use Illuminate\Http\Request;

class CreateLeadController extends Controller
{

    function CreateLeadShow()
    {

        $industries = Industry::get();
        $leadsource = LeadSource::get();
        $lead = Lead::get();

        // return view('site.custom.createlead', ['industries' => $industries, 'leadsource' =>  $leadsource, 'lead' => $lead]);
        return view('site.custom.createlead', ['industries' => $industries, 'leadsource' =>  $leadsource, 'lead' => $lead]);
    }

    function Fetchcustomer(Request $req)
    {
        $find = $req->get('find');


        $customer = Lead::where('id', $find)->first();
        return response()->json(['customers' => $customer]);
    }
}
