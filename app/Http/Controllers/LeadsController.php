<?php

namespace App\Http\Controllers;

use App\Models\Followup;
use App\Models\Industry;
use App\Models\Lead;
use App\Models\Lead_Propsal;
use App\Models\LeadSource;
use App\Models\RequirementsMap;
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
            // $data->showfollowform="YES";
            // return redirect('site.custom.followup', ['data' => $data]);
            return redirect('view_lead/' . $data->id . "?followup=YES");
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
            return redirect('view_lead/' . $data->id . "?followup=YES");
            // return view('site.custom.followup', ['data' => $data, 'id' => $id]);
        } elseif ($req->Lead_Status == "Qualified")
            return redirect('view_lead/' . $data->id . "?requirements=YES");
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

        $f = isset($request->followup) ? $request->followup : "NO";

        $g = isset($request->requirements) ? $request->requirements : "NO";

        $h = isset($request->proposal) ? $request->proposal : "NO";
        $data = getLeadLogData();

        $viewlead = Lead::where('id', $request->id)->with('created_by_user')->with('followups')->first();


        $requirements = RequirementsMap::where('lead_id', $request->id)->first();

        $proposal = Lead_Propsal::where('lead_id', $request->id)->first();


        return view('site.leads.viewlead', ['viewlead' => $viewlead, 'openfollowup' => $f, 'openrequirements' => $g, 'leadlogdata' => $data, 'openproposal' => $h, 'requirements' => $requirements, 'proposal' => $proposal]);
    }







    function Update_stage_status(Request $request)
    {
        $lead = Lead::where('id', $request->id)->first();
        $lead->lost_reason = $request->lost_reason;
        $lead->dorment_reason = $request->dorment_reason;
        $lead->stage = $request->stage;
        $lead->save();
        LeadLogger(['lead_id' => $lead->id, 'followed_up_update' => date('y-m-d H:m:s'), "message" => "Lead Lost", "lead_stage" => $lead->stage]);
        return  redirect('admin/dashboard')->with("success", "Successfuly changed State");
    }




    function Followup_Done(Request $request)
    {

        $followup = Followup::where('id', $request->id)->first();
        $followup->followed_up_date = date('y-m-d H:m:s');
        $followup->save();
        LeadLogger(['lead_id' => $followup->lead_id, 'followed_up_update' => date('y-m-d H:m:s'), "message" => "Followup Done Successfully"]);
        return response()->json(['data' => $followup]);
    }




    function AccessLeadLogger()
    {
        $data = getLeadLogData();
        return $data;
    }




    function SaveRequirementsMap(Request $request)
    {

        $stageupdate = Lead::where('id', $request->id)->first();
        $requirements = new RequirementsMap;
        $requirements->lead_id = $request->id;
        $requirements->business_requirement = $request->business_requirement;
        $requirements->upload_requirement_documents = $request->upload_requirement_documents;
        $requirements->lob = $request->lob;
        $requirements->services = $request->services;
        $requirements->area = $request->area;
        $requirements->expected_closure_date = $request->expected_closure_date;
        $requirements->location = $request->location;
        $requirements->business_type = $request->business_type;
        $requirements->expected_monthly_revenue = $request->expected_monthly_revenue;
        $requirements->expected_capex = $request->expected_capex;
        $requirements->ebdta_percentage = $request->ebdta_percentage;
        $requirements->ebdta_amount = $request->ebdta_amount;
        $requirements->share_business_proposal = $request->share_business_proposal;


        if ($requirements->save()) {
            $stageupdate->stage = "Requirements Mapping";
            $stageupdate->update();
        }

        if ($request->share_business_proposal == "Yes") {
            return redirect('view_lead/' . $requirements->lead_id . "?proposal=YES");
        } elseif ($request->share_business_proposal == "No")
            return redirect('view_lead/' . $requirements->lead_id . "?followup=YES");
    }

    function Update_status(Request $request)
    {
        $status = Lead::where('id', $request->id)->first();
        $status->Lead_Status = $request->status;
        $status->Reason = $request->Reason;
        $status->save();

        return redirect()->back()->with("success", "Status Changed");
    }

    function Save_Business_Proposal(Request $request)
    {
        $stageupdate = Lead::where('id', $request->id)->first();

        $proposal = new Lead_Propsal;
        $proposal->lead_id = $request->id;
        $proposal->reason_for_changing_proposal = $request->reason_for_changing_proposal;
        $proposal->proposal_documents = $request->upload_proposal_documents;

        if ($proposal->save()) {
            $stageupdate->stage = "Proposal";
            $stageupdate->update();
        }

        return redirect('admin/dashboard')->with("success", "Proposal Done");
    }
}
