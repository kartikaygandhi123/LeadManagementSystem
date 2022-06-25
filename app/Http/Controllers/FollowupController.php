<?php

namespace App\Http\Controllers;

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


    public function email(Request $req)
    {

        $data = array(

            'remarks' => $req->remarks,
            'followupdate' => $req->date,

        );

        Mail::send('site.custom.mail', $data, function ($message) use ($req) {

            $message->from('reachkartikay@yahoo.com', 'kartikay');

            $message->to('kartikaygandhi123@gmail.com')->subject('FollowUp');
        });


        return redirect('admin/createleadshow')->with('success', 'email scheduled');
    }
}
