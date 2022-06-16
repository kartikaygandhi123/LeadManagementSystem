<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class brandProfileController extends Controller
{
    //
    function brandShow()
    {
        return view('site.brand profile.brandprofile');
    }
}
