<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Models\LeadSource;
use Illuminate\Http\Request;

class createLeadController extends Controller
{
    //
    function createLeadShow()
    {

        $industries = Industry::get();
        $leadsource = LeadSource::get();
        return view('site.custom.createlead', ['industries' => $industries, 'leadsource' => $leadsource]);
    }
}
