<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class BrandProfileController extends Controller
{
    //
    function BrandShow()
    {
        $brand = Lead::get();
        return view('site.brand profile.brandprofile', ['brand' => $brand]);
    }
}
