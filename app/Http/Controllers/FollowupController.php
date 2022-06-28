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

        return redirect('admin/dashboard')->with('success', 'followup mail scheduled');
        // return redirect('admin/dashboard');
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
