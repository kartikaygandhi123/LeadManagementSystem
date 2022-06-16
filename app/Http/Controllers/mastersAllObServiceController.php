<?php

namespace App\Http\Controllers;

use App\Models\LobService;
use Illuminate\Http\Request;

class mastersAllObServiceController extends Controller
{
    //
    function allObServiceShow()
    {
        $lobservices = LobService::get();
        return view('site.masters.alllobservice', ['lobservices' => $lobservices]);
    }
}
