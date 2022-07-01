<?php

namespace App\Http\Controllers;

use App\Models\followup;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FollowupController extends Controller
{
    //

    function followupShow($id)
    {

        $stage = Lead::where('id', $id)->first();


        return view('site.custom.followup', ['stage' => $stage]);
    }


    public function saveFollowup(Request $req)
    {

        $followup = new followup;
        $followup->Follow_up_date = $req->date;
        $followup->lead_id = $req->id;

        $followup->Remarks = $req->remarks;
        $followup->save();



        // return redirect()->back()->with('success', 'followup mail scheduled');

        if (auth()->user()->role_id == 1) {
            return redirect()->route('retailbdhead.dashboard')->with('success', 'followup mail scheduled');
        } elseif (auth()->user()->role_id == 2) {

            return redirect()->route('iplbdhead.dashboard')->with('success', 'followup mail scheduled');
        } elseif (auth()->user()->role_id == 3) {

            return redirect()->route('techbdhead.dashboard')->with('success', 'followup mail scheduled');
        } elseif (auth()->user()->role_id == 4) {

            return redirect()->route('retailbd.dashboard')->with('success', 'followup mail scheduled');
        } elseif (auth()->user()->role_id == 5) {

            return redirect()->route('techbd.dashboard')->with('success', 'followup mail scheduled');
        } elseif (auth()->user()->role_id == 6) {

            return redirect()->route('admin.dashboard')->with('success', 'followup mail scheduled');
        } elseif (auth()->user()->role_id == 7) {

            return redirect()->route('superuser.dashboard')->with('success', 'followup mail scheduled');
        } elseif (auth()->user()->role_id == 8) {

            return redirect()->route('iplbd.dashboard')->with('success', 'followup mail scheduled');
        } else {
            return view('site.errorinternal')->with('error', 'followup mail not scheduled');
        }





        // return redirect('admin/dashboard')->with('success', 'followup mail scheduled');
    }





    // public function email(Request $req)
    // {

    //     $data = array(

    //         'remarks' => $req->remarks,
    //         'followupdate' => $req->date,

    //     );

    //     Mail::send('site.custom.mail', $data, function ($message) use ($req) {

    //         $message->from('reachkartikay@yahoo.com', 'kartikay');

    //         $message->to('kartikaygandhi123@gmail.com')->subject('FollowUp');
    //     });


    //     // return "success";
    //     return redirect('admin/dashboard')->with('success', 'email scheduled');
    // }
}
