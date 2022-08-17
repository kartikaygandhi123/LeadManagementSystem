<?php

namespace App\Http\Controllers;

use App\Models\Stages;
use Illuminate\Http\Request;

class MastersAllStageController extends Controller
{

    function AllStageShow()
    {
        $stages = Stages::get();
        return view('site.masters.allstage', ['stages' => $stages]);
    }

    function AddStage(Request $request)
    {



        $stage = new Stages;
        $stage->stage = $request->stage;
        $stage->save();
        return redirect()->back()->with('success', 'Stage Added');
    }
}
