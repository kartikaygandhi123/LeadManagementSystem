<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class MastersAllCityController extends Controller
{
    //
    function AllCityShow()
    {

        $cities = City::get();
        return view('site.masters.allcity', ['cities' => $cities]);
    }
}
