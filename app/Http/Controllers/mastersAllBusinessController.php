<?php

namespace App\Http\Controllers;

use App\Models\AllBusiness;
use Illuminate\Http\Request;

class mastersAllBusinessController extends Controller
{
    //
    function allBusinessShow()
    {
        $business = AllBusiness::get();
        return view('site.masters.allbusiness', ['business' => $business]);
    }
}
