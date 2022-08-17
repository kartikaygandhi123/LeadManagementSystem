<?php

namespace App\Http\Controllers;

use App\Models\AllBusiness;
use App\Models\LobService;
use Illuminate\Http\Request;

class MastersAllObServiceController extends Controller
{

    function AllObServiceShow()
    {
        $allbusiness = AllBusiness::get();
        $lobservices = LobService::get();
        return view('site.masters.alllobservice', ['lobservices' => $lobservices, 'lob' => $allbusiness]);
    }

    function AddLobService(Request $request)
    {

        $lobservice = new LobService;
        $lobservice->services = $request->lobservice;
        $lobservice->business_line_id = $request->businessline;
        $lobservice->save();
        return redirect()->back()->with('success', 'Lob Services Added');
    }
}
