<?php

namespace App\Http\Controllers;

use App\Models\LobService;
use Illuminate\Http\Request;

class MastersAllObServiceController extends Controller
{

    function AllObServiceShow()
    {
        $lobservices = LobService::get();
        return view('site.masters.alllobservice', ['lobservices' => $lobservices]);
    }
}
