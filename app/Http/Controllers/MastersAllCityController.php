<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class MastersAllCityController extends Controller
{

    function AllCityShow()
    {

        $cities = City::get();
        return view('site.masters.allcity', ['cities' => $cities]);
    }

    function AddCity(Request $request)
    {


        $city = new City;
        $city->name = $request->city;
        $city->save();
        return redirect()->back()->with('success', 'City Added');
    }
}
