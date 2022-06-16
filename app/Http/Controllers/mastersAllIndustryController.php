<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use Illuminate\Http\Request;

class mastersAllIndustryController extends Controller
{
    //
    function allIndustryShow()
    {

        $industries = Industry::get();
        return view('site.masters.allindustry', ['industries' => $industries]);
    }
}
