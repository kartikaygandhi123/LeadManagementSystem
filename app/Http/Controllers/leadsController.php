<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Models\Lead;
use App\Models\LeadSource;
use App\Models\Stages;
use Illuminate\Http\Request;

class LeadsController extends Controller
{

    //


    function LeadsShow()
    {
        $leads = Lead::with('created_by_user')->get();

        //   dd(\auth()->user()->id);
        return view('site.leads.leads', ['leads' => $leads]);
    }



    function Store(Request $req)
    {
        $this->validate(
            $req,
            [
                'Customer_Name' => ['required', 'string', 'max:255'],
                'Email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'Contact_Number' => ['required', 'min:10', 'numeric'],

            ]
        );
        $data = new Lead;
        $data->Customer_Name = $req->Input(['Customer_Name']);
        $data->Contact_Number = $req->Input(['Contact_Number']);
        $data->POC_Name = $req->Input(['POC_Name']);
        $data->Industry = $req->Input(['Industry']);
        $data->Lead_Source = $req->Input(['Lead_Source_name']);
        $data->Email = $req->Input(['Email']);
        $data->First_Contact_Date = $req->Input(['First_Contact_Date']);
        $data->Lead_Status = $req->Input(['Lead_Status']);
        $data->created_by = \auth()->user()->id;

        if ($data->save()) {
            $data->stage = "Lead";
            $data->update();
        }

        if ($req->Lead_Status == "Prospect") {
            return view('site.custom.followup', ['data' => $data]);
        } elseif ($req->Lead_Status == "Qualified")
            return view('site.custom.requirementsmapshow', ['data' => $data]);
    }



    function Update(Request $req)
    {
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
            return view('site.custom.followup', ['data' => $data, 'id' => $id]);
        } elseif ($req->Lead_Status == "Qualified")
            return view('site.custom.requirementsmapshow', ['data' => $data]);
    }



    function Edit_Lead(Request $request)
    {
        $industries = Industry::get();
        $leadsource = LeadSource::get();
        $lead = Lead::get();
        $editlead = Lead::where('id', $request->id)->first();
        return view('site.leads.editlead', ['editlead' => $editlead, 'industries' => $industries, 'leadsource' =>  $leadsource, 'lead' => $lead]);
    }




    function Update_Lead(Request $request)
    {
        $editlead = Lead::where('id', $request->id)->first();
        $editlead->Customer_Name = $request->Customer_Name;
        $editlead->Contact_Number = $request->Contact_Number;
        $editlead->POC_Name = $request->POC_Name;
        $editlead->Industry = $request->Industry;
        $editlead->Lead_Source = $request->Lead_Source;
        $editlead->Email = $request->Email;
        $editlead->First_Contact_Date = $request->First_Contact_Date;
        $editlead->Lead_Status = $request->Lead_Status;
        $editlead->save();

        if (auth()->user()->role_id == 6) {
            return redirect('admin/leadsshow')->with('success', 'record updated');
        } elseif (auth()->user()->role_id == 7) {
            return redirect('superuser/leadsshow')->with('success', 'record updated');
        }
    }



    function Delete_Lead($id)
    {
        $deletelead = Lead::where('id', $id)->first();
        $deletelead->delete();
        if (auth()->user()->role_id == 6) {
            return redirect('admin/leadsshow')->with('success', 'record deleted');
        } elseif (auth()->user()->role_id == 7) {
            return redirect('superuser/leadsshow')->with('success', 'record deleted');
        }
    }




    function GetView_Lead(Request $request)
    {
        $viewlead = Lead::where('id', $request->id)->with('created_by_user')->first();
        return view('site.leads.viewlead', ['viewlead' => $viewlead]);
    }





    function Update_stage_status(Request $request)
    {
        $lead = Lead::where('id', $request->id)->first();
        $lead->lost_reason = $request->lost_reason;
        $lead->dorment_reason = $request->dorment_reason;
        $lead->stage = $request->stage;
        $lead->save();
        return  redirect('admin/dashboard')->with("success", "Successfuly changed State");
    }
}
