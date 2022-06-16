<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class opportunitiesController extends Controller
{
    //
    function opportunitiesShow()
    {
        return view('site.opportunities.opportunities');
    }
}
