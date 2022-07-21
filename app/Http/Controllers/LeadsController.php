<?php

namespace App\Http\Controllers;

use App\Models\BrandProfile;
use App\Models\Contact;
use App\Models\Followup;
use App\Models\Industry;
use App\Models\Lead;
use App\Models\LeadProposal;
use App\Models\LeadSource;
use App\Models\LegalRemark;
use App\Models\RequirementsMap;
use App\Models\Stages;
use App\Models\User;
use Illuminate\Http\Request;

class LeadsController extends Controller
{

    //




    function LeadsShow()
    {
        $leads = Lead::with('created_by_user')
            ->when(isset(\auth()->user()->lob_id), function ($q1) {
                $q1->where('lob_id', \auth()->user()->lob_id);
            })
            ->when(!in_array(\auth()->user()->role_id, [1, 2, 3, 5]), function ($q) {
                $q->where(function ($query) {
                    $query->where('created_by', '=', \auth()->user()->id)
                        ->orWhere('user_id', '=', \auth()->user()->id);
                });
            })
            ->get();

        //   dd(\auth()->user()->id);
        return view('site.leads.leads', ['leads' => $leads]);
    }



    // Legal Leads Show

    function LeadsShowLegal()
    {
        $leads = Lead::with('created_by_user')

            ->where('stage', "Agreement")
            ->get();

        //   dd(\auth()->user()->id);
        return view('site.legal.leadslegal', ['leads' => $leads]);
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
        $data->Lead_Source = $req->Input(['Lead_Source']);
        $data->Email = $req->Input(['Email']);
        $data->First_Contact_Date = $req->Input(['First_Contact_Date']);
        $data->Lead_Status = $req->Input(['Lead_Status']);
        $data->map_requirements = $req->Input(['map_requirements']);
        $data->created_by = \auth()->user()->id;
        $data->user_id = \auth()->user()->id;
        $data->lob_id = \auth()->user()->lob_id;
        $data->stage = "Lead";

        if ($data->save()) {


            $brand = new BrandProfile;

            $brand->Customer_Name = $req->Input(['Customer_Name']);
            $brand->Contact_Number = $req->Input(['Contact_Number']);
            $brand->POC_Name = $req->Input(['POC_Name']);
            $brand->Industry = $req->Input(['Industry']);
            $brand->Email = $req->Input(['Email']);
            $brand->save();

            $contact = new Contact;

            $contact->Customer_Name = $req->Input(['Customer_Name']);
            $contact->Contact_Number = $req->Input(['Contact_Number']);
            $contact->POC_Name = $req->Input(['POC_Name']);

            $contact->Email = $req->Input(['Email']);
            $contact->save();
        }

        LeadLogger(['lead_id' => $data->id, "message" => "Lead Created Successfully"]);

        if ($req->Lead_Status == "Prospect") {
            // $data->showfollowform="YES";
            // return redirect('site.custom.followup', ['data' => $data]);
            return redirect('view_lead/' . $data->id . "?followup=YES")->with("success", "Lead Created Successfully");
        } elseif ($req->Lead_Status == "Qualified") {

            // $req->map_requirements == "No"

            if ($req->map_requirements == "Yes") {
                return redirect('view_lead/' . $data->id . "?requirements=YES")->with("success", "Lead Created Successfully");
            } else {
                return redirect('view_lead/' . $data->id . "?followup=YES")->with("success", "Lead Created Successfully");
            }
        }

        return redirect('view_lead/' . $data->id)->with("error", "Lead Not Qualified, Update Reason Below ");
    }

    function Update(Request $req)
    {
        // $id = $req->id;
        // $data = Lead::find($req->id);
        //$data = Lead::where('id', $req->id);
        $data = new Lead;
        $data->Customer_Name = $req->Customer_Name;
        $data->Contact_Number = $req->Contact_Number;
        $data->POC_Name = $req->POC_Name;
        $data->Industry = $req->Industry;
        $data->Lead_Source = $req->Lead_Source;
        $data->Email = $req->Email;
        $data->First_Contact_Date = $req->First_Contact_Date;
        $data->Lead_Status = $req->Lead_Status;
        $data->map_requirements = $req->Input(['map_requirements']);
        $data->created_by = \auth()->user()->id;
        $data->user_id = \auth()->user()->id;
        $data->lob_id = \auth()->user()->lob_id;
        $data->stage = "Lead";

        if ($data->save()) {

            $contact = new Contact;

            $contact->Customer_Name = $req->Input(['Customer_Name']);
            $contact->Contact_Number = $req->Input(['Contact_Number']);
            $contact->POC_Name = $req->Input(['POC_Name']);

            $contact->Email = $req->Input(['Email']);
            $contact->save();
        }


        LeadLogger(['lead_id' => $data->id, "message" => "Lead Created Successfully"]);

        if ($req->Lead_Status == "Prospect") {
            return redirect('view_lead/' . $data->id . "?followup=YES")->with("success", "Lead Created Successfully");
            // return view('site.custom.followup', ['data' => $data, 'id' => $id]);
        } elseif ($req->Lead_Status == "Qualified") {
            if ($req->map_requirements == "Yes") {
                return redirect('view_lead/' . $data->id . "?requirements=YES")->with("success", "Lead Created Successfully");
            } else {
                return redirect('view_lead/' . $data->id . "?followup=YES")->with("success", "Lead Created Successfully");
            }
            return redirect('view_lead/' . $data->id)->with("error", "Lead Not Qualified, Update Reason Below ");
        }
    }

    function Edit_Lead(Request $request)
    {
        $industries = Industry::get();
        $leadsource = LeadSource::get();
        $lead = Lead::get();
        $editlead = Lead::where('id', $request->id)->first();
        return view('site.leads.editlead', ['editlead' => $editlead, 'industries' => $industries, 'leadsource' => $leadsource, 'lead' => $lead]);
    }

    // view button not using
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
        // if (auth()->user()->role_id == 6) {
        //     return redirect('admin/leadsshow')->with('success', 'record deleted');
        // } elseif (auth()->user()->role_id == 7) {
        //     return redirect('superuser/leadsshow')->with('success', 'record deleted');
        // }

        return redirect('/leadsshow')->with('success', 'record deleted');
    }

    function GetView_Lead(Request $request)
    {
        $f = isset($request->followup) ? $request->followup : "NO";
        $g = isset($request->requirements) ? $request->requirements : "NO";
        $h = isset($request->proposal) ? $request->proposal : "NO";
        $i = isset($request->remarks) ? $request->remarks : "NO";
        $data = getLeadLogData($request->id);
        $users = User::when(isset(\auth()->user()->lob_id), function ($q1) {
            $q1->where('lob_id', \auth()->user()->lob_id);
        })
            ->pluck('name', 'id');  
        $viewlead = Lead::where('id', $request->id)->with('created_by_user')->with('legalRemarks')->with('proposals')->with('followups')->first();
        $requirements = RequirementsMap::where('lead_id', $request->id)->latest()->first();
        $proposal = LeadProposal::where('lead_id', $request->id)->latest()->first();
        $remarks = LegalRemark::where('lead_id', $request->id)->first();
        return view('site.leads.viewlead', ['viewlead' => $viewlead, 'users' => $users, 'openfollowup' => $f, 'openrequirements' => $g, 'leadlogdata' => $data, 'openproposal' => $h, 'requirements' => $requirements, 'proposal' => $proposal, 'openremarks' => $i, 'remarks' => $remarks]);
    }

    function GetView_Lead_Legal(Request $request)
    {
        $f = isset($request->followup) ? $request->followup : "NO";
        $g = isset($request->requirements) ? $request->requirements : "NO";
        $h = isset($request->proposal) ? $request->proposal : "NO";
        $i = isset($request->remarks) ? $request->remarks : "NO";
        $data = getLeadLogData($request->id);
        $users = User::when(isset(\auth()->user()->lob_id), function ($q1) {
            $q1->where('lob_id', \auth()->user()->lob_id);
        })
            ->pluck('name', 'id');
        $viewlead = Lead::where('id', $request->id)->with('created_by_user')->with('proposals')->with('followups')->first();
        $requirements = RequirementsMap::where('lead_id', $request->id)->latest()->first();
        $proposal = LeadProposal::where('lead_id', $request->id)->latest()->first();
        $remarks = LegalRemark::where('lead_id', $request->id)->first();
        return view('site.legal.viewleadlegal', ['viewlead' => $viewlead, 'users' => $users, 'openfollowup' => $f, 'openrequirements' => $g, 'leadlogdata' => $data, 'openproposal' => $h, 'requirements' => $requirements, 'proposal' => $proposal, 'openremarks' => $i, 'remarks' => $remarks]);
    }

    function Update_stage_status(Request $request)
    {
        $lead = Lead::where('id', $request->id)->first();
        $lead->lost_reason = $request->lost_reason;
        $lead->dormant_reason = $request->dormant_reason;
        $lead->stage = $request->stage;
        $lead->save();
        LeadLogger(['lead_id' => $lead->id, 'followed_up_update' => date('y-m-d H:m:s'), "message" => "Lead Lost", "lead_stage" => $lead->stage]);
        // return redirect('/dashboard')->with("success", "Successfuly changed State");
        return redirect('view_lead/' . $request->id)->with("success", "Successfuly changed State");
    }

    function Followup_Done(Request $request)
    {

        $followup = Followup::where('id', $request->id)->first();
        $followup->followed_up_date = date('y-m-d H:m:s');
        $followup->save();
        LeadLogger(['lead_id' => $followup->lead_id, "message" => "Followup Done Successfully"]);
        return response()->json(['data' => $followup]);
    }

    function AccessLeadLogger()
    {
        $data = getLeadLogData(3);
        return $data;
    }

    function SaveRequirementsMap(Request $request)
    {

        $stageupdate = Lead::where('id', $request->id)->first();
        $requirements = new RequirementsMap;
        $requirements->lead_id = $request->id;
        $requirements->business_requirement = $request->business_requirement;

        $requirements->upload_requirement_documents = $request->upload_requirement_documents;

        // $d = "";
        // if (isset($request->upload_requirement_documents)) {
        //     $d = getName($request->upload_requirement_documents);
        // }
        // $requirements->upload_requirement_documents = $d;
        // $store = RequirementsMap::create($requirements);



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
        $requirements->share_business_proposal = "No";

        if ($requirements->save()) {
            $stageupdate->stage = "Requirements Mapping";
            $stageupdate->update();
        }

        LeadLogger(['lead_id' => $request->id, "message" => "Requirements mapping done  "]);

        return redirect('view_lead/' . $requirements->lead_id . "?followup=YES");
    }

    function Update_status(Request $request)
    {
        $status = Lead::where('id', $request->id)->first();
        $status->Lead_Status = $request->status;
        $status->Reason = $request->Reason;

        $status->save();

        LeadLogger(['lead_id' => $request->id, "message" => "Lead Status Changed to  " . $request->status]);

        if ($request->status == "Not Qualified") {
            return redirect('view_lead/' . $request->id)->with("success", "Status Changed To Not Qualified");
        } elseif ($request->status == "Qualified") {

            return redirect('view_lead/' . $request->id . "?requirements=YES")->with("success", "Status Changed To Qualified");
        } elseif ($request->status == "Prospect") {
            return redirect('view_lead/' . $request->id . "?followup=YES")->with("success", "Status Changed To Lead");
        }
    }

    function Save_Business_Proposal(Request $request)
    {
        $stageupdate = Lead::where('id', $request->id)->first();

        $proposal = new LeadProposal;
        $proposal->lead_id = $request->id;
        $proposal->reason_for_changing_proposal = $request->reason_for_changing_proposal;
        
        $doclink="";
         if(isset($request->upload_proposal_documents )){
            
                $doclink = getName($request->upload_proposal_documents);
         }
        
        
        
        $proposal->proposal_documents = $doclink;
        $proposal->proposal_accepted = $request->proposal_accepted;

        if ($proposal->save()) {
            $stageupdate->stage = "Proposal";
            $stageupdate->update();
        }

        LeadLogger(['lead_id' => $request->id, "message" => "Business Proposal Submitted "]);

        return redirect('view_lead/' . $request->id)->with("success", "Proposal Done");
    }

    function Proposal_Accepted(Request $request)
    {
        //dd($request->all());

        $stageupdate = Lead::where('id', $request->id)->first();

        $accept = LeadProposal::where('lead_id', $request->id)->latest()->first();

        $accept->proposal_accepted = $request->accept_proposal;

        $accept->update();

        if ($request->accept_proposal == "Yes") {
            LeadLogger(['lead_id' => $request->id, "message" => "Business Proposal Acccepted "]);

            return redirect('view_lead/' . $accept->lead_id . "?remarks=YES")->with("success", "Proposal Accepted");
        } else if ($request->accept_proposal == "No") {
            if ($request->counter_proposal == "Yes") {

                $stageupdate->stage = "Negotiation";
                $stageupdate->update();

                LeadLogger(['lead_id' => $request->id, "message" => "Counter Proposal received "]);

                return redirect('view_lead/' . $accept->lead_id . "?proposal=YES")->with("success", "Status updated");
            } else {
                LeadLogger(['lead_id' => $request->id, "message" => "Business Proposal Not Yet Acccepted "]);

                return redirect('view_lead/' . $accept->lead_id . "?followup=YES")->with("success", "Proposal Accepted");
            }
        } else {

            LeadLogger(['lead_id' => $request->id, "message" => "Business Proposal Not Acccepted "]);
        }
    }

    function Save_Legalremarks(Request $request)
    {
        $stageupdate = Lead::where('id', $request->id)->first();

        
      // dd( \auth()->user()->id);




        
                
     
            if(isset($request->customer_agreement )){
            
                $doclink = getName($request->customer_agreement);
                
             $attributes[0]['document_link'] = $doclink;   
             
             $attributes[0]['lead_id'] = $request->id;
             
             
             $attributes[0]['document_type'] = "Customer Agreement";
             $attributes[0]['user_id'] = \auth()->user()->id ;
             $attributes[0]['remarks_by_legal'] = "";
            
            }
           
            if(isset($request->commercial )){
            
                $doclink = getName($request->commercial);
                
             $attributes[1]['document_link'] = $doclink;   
             
             $attributes[1]['lead_id'] = $request->id;
             
             
             $attributes[1]['document_type'] = "Commercial Agreement";
             $attributes[1]['user_id'] = \auth()->user()->id ;
             $attributes[1]['remarks_by_legal'] = "";
       
            }
            
             if(isset($request->nda )){
            
                $doclink = getName($request->nda);
                
             $attributes[2]['document_link'] = $doclink;   
             
             $attributes[2]['lead_id'] = $request->id;
             
             
             $attributes[2]['document_type'] = "NDA Agreement";
             $attributes[2]['user_id'] = \auth()->user()->id;
             $attributes[2]['remarks_by_legal'] = "";
              
    
            }
            
                LegalRemark::insert($attributes); 
            

  
        
        
        
        
        
//        $remarks->agreement_finalized = $request->agreement_finalized;
//        $remarks->business_onboarded = $request->business_onboarded;

            $stageupdate->stage = "Agreement";
             $stageupdate->agreement_finalized = $request->agreement_finalized;
        $stageupdate->business_onboarded = $request->business_onboarded;

        $stageupdate->remarks_for_legal = $request->remarks_for_legal;
            $stageupdate->update();
        

        LeadLogger(['lead_id' => $request->id, "message" => "Lead data sent to Legal Team "]);

        return redirect('view_lead/' . $request->id)->with("success", "Legal Remarks Captured");
    }

    function Agreement_Finalized(Request $request)
    {
//        $agreement = LegalRemark::where('lead_id', $request->id)->first();
//
//        $agreement->agreement_finalized = $request->agreement_finalized;
//
//        $agreement->save();
        
        
        $stageupdate = Lead::where('id', $request->id)->first();
 $stageupdate->agreement_finalized = $request->agreement_finalized;
       
            $stageupdate->update();
        
        
        

        if ($request->agreement_finalized == "Yes") {

            LeadLogger(['lead_id' => $request->id, "message" => "Lead Agreement Finalized"]);

            return redirect('view_lead/' . $request->id)->with("success", "Agreement Finalized");
        } elseif ($request->agreement_finalized == "No") {
            LeadLogger(['lead_id' => $request->id, "message" => "Lead Agreement Not Finalized"]);

            return redirect('view_lead/' . $request->id . "?remarks=YES")->with("error", "Agreement Not Finalized");
        }
    }

    function Business_Onboarded(Request $request)
    {

        $stageupdate = Lead::where('id', $request->id)->first();

//        $business = LegalRemark::where('lead_id', $request->id)->first();
//
//        $business->business_onboarded = $request->business_onboarded;
//
//        $business->save();

        if ($request->business_onboarded == "Yes") {
            $stageupdate->stage = "Business Onboarded";
            $stageupdate->business_onboarded = $request->business_onboarded;

            $stageupdate->update();

            LeadLogger(['lead_id' => $request->id, "message" => "Business Onboarded Successfully"]);

            return redirect('view_lead/' . $request->id)->with("success", "Business Onboarded");
        } elseif ($request->business_onboarded == "No") {
            $stageupdate->stage = "Business Not Onboarded";
            $stageupdate->business_onboarded = $request->business_onboarded;

            $stageupdate->update();

            LeadLogger(['lead_id' => $request->id, "message" => "Business Not Onboarded"]);

            return redirect('view_lead/' . $request->id . "?followup=YES")->with("error", "Business is not Boarded");
        }
    }

    function Update_Proposal_Shared(Request $request)
    {



        $updateproposal = RequirementsMap::where('lead_id', $request->id)->first();

        $updateproposal->share_business_proposal = $request->proposal_shared;

        $updateproposal->save();

        if ($request->proposal_shared == "Yes") {
            LeadLogger(['lead_id' => $request->id, "message" => "Business Proposal Shared"]);

            return redirect('view_lead/' . $request->id . "?proposal=YES")->with("success", "Business Proposal Shared");
        } elseif ($request->proposal_shared == "No") {
            LeadLogger(['lead_id' => $request->id, "message" => "Business Proposal Not shared "]);

            return redirect('view_lead/' . $request->id . "?followup=YES")->with("error", "Business Proposal Not shared");
        }
    }

    function Update_User(Request $r)
    {


        $stageupdate = Lead::where('id', $r->id)->first();
        $stageupdate->user_id = $r->assigned_user;
        $stageupdate->update();
        return redirect()->back()->with("success", "User Assigned successfuly");
    }
}
