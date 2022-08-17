<?php

namespace App\Http\Controllers;

use App\Models\AllBusiness;
use Illuminate\Http\Request;

class MastersAllBusinessController extends Controller
{

    function AllBusinessShow()
    {
        $business = AllBusiness::get();
        return view('site.masters.allbusiness', ['business' => $business]);
    }

    function AddBusiness(Request $request)
    {


        $business = new AllBusiness;
        $business->all_businesses = $request->business;
        $business->save();
        return redirect()->back()->with('success', 'New Business Added');
    }
}
