<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use Illuminate\Http\Request;

class MastersAllIndustryController extends Controller
{

    function AllIndustryShow()
    {

        $industries = Industry::get();
        return view('site.masters.allindustry', ['industries' => $industries]);
    }

    function AddIndustry(Request $request)
    {


        $industry = new Industry;
        $industry->name = $request->industry;
        $industry->save();
        return redirect()->back()->with('success', 'Industry Added');
    }
}
