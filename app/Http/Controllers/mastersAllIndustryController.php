<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use Illuminate\Http\Request;

class MastersAllIndustryController extends Controller
{
    //
    function AllIndustryShow()
    {

        $industries = Industry::get();
        return view('site.masters.allindustry', ['industries' => $industries]);
    }
}
