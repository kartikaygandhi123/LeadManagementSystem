<?php

namespace App\Http\Controllers;

use App\Models\Stages;
use Illuminate\Http\Request;

class mastersAllStageController extends Controller
{
    //
    function allStageShow()
    {
        $stages = Stages::get();
        return view('site.masters.allstage', ['stages' => $stages]);
    }
}
