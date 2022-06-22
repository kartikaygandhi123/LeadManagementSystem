<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Models\Lead;
use Illuminate\Http\Request;

class leadsController extends Controller
{
    function leadsShow()
    {
        $leads = Lead::get();
        return view('site.leads.leads', ['leads' => $leads]);
    }
    function store(Request $req)
    {

        $data = new Lead;


        $data->Customer_Name = $req->Customer_Name;
        $data->Contact_Number = $req->Contact_Number;
        $data->POC_Name = $req->POC_Name;
        $data->Industry = $req->Industry;
        $data->Lead_Source = $req->Lead_Source;
        $data->Email = $req->Email;
        $data->First_Contact_Date = $req->First_Contact_Date;
        $data->Lead_Status = $req->Lead_Status;

        if ($data->save()) {
            $data->stage = "Lead";
            $data->update();
        }

        if ($req->Lead_Status == "Prospect") {
            return view('site.custom.followup', ['data' => $data]);
        } elseif ($req->Lead_Status == "Qualified")
            return view('site.custom.requirementsmapshow', ['data' => $data]);


        // if ($req->Lead_Status == "Prospect") {
        //     return redirect('followupshow', $data);
        // } elseif ($req->Lead_Status == "Qualified")
        //     return redirect('requirementsmapshow', $data);
    }
    function update(Request $req)
    {
        // $data = Lead::where('id', $req->id)->get();
        $id = $req->id;
        $data = Lead::find($req->id);
        $data->Customer_Name = $req->Customer_Name;
        $data->Contact_Number = $req->Contact_Number;
        $data->POC_Name = $req->POC_Name;
        $data->Industry = $req->Industry;
        $data->Lead_Source = $req->Lead_Source;
        $data->Email = $req->Email;
        $data->First_Contact_Date = $req->First_Contact_Date;
        $data->Lead_Status = $req->Lead_Status;

        if ($data->save()) {
            $data->stage = "Lead";
            $data->update();
        }


        if ($req->Lead_Status == "Prospect") {
            return view('site.custom.followup', ['data' => $data]);
        } elseif ($req->Lead_Status == "Qualified")
            return view('site.custom.requirementsmapshow', ['data' => $data]);

        // if ($req->Lead_Status == "Prospect") {
        //     return redirect('followupshow/' . $id . '');
        // } elseif ($req->Lead_Status == "Qualified")
        //     return redirect('requirementsmapshow' . $id . '');
    }
}
