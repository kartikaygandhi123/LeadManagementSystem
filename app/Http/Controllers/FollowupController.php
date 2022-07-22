<?php

namespace App\Http\Controllers;

use App\Models\Followup;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FollowupController extends Controller
{


    function FollowupShow($id)
    {

        $stage = Lead::where('id', $id)->first();


        return view('site.custom.followup', ['stage' => $stage]);
    }


    public function SaveFollowup(Request $req)
    {

        $followup = new Followup;
        $followup->Follow_up_date = $req->date;
        $followup->lead_id = $req->id;

        $followup->Remarks = $req->remarks;
        $followup->save();
        LeadLogger(['lead_id' => $req->id,  "message" => "Followup Scheduled Successfully"]);

        return redirect()->back()->with('success', 'Followup mail scheduled, Open Details Tab For More Info');
    }
}
