<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequirementsMapController extends Controller
{

    function RequirementsMapShow()
    {

        return view('site.custom.requirementsmapshow');
    }
}
