<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class mastersAllCityController extends Controller
{
    //
    function allCityShow()
    {

        $cities = City::get();
        return view('site.masters.allcity', ['cities' => $cities]);
    }
}
