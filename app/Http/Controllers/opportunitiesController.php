<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpportunitiesController extends Controller
{
    //
    function OpportunitiesShow()
    {
        return view('site.opportunities.opportunities');
    }
}
