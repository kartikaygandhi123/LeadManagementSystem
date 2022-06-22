<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class brandProfileController extends Controller
{
    //
    function brandShow()
    {
        $brand = Lead::get();
        return view('site.brand profile.brandprofile', ['brand' => $brand]);
    }
}
