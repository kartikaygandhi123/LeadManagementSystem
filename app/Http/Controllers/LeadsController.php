<?php

namespace App\Http\Controllers;

use App\Models\BrandProfile;
use App\Models\City;
use App\Models\Contact;
use App\Models\Followup;
use App\Models\Industry;
use App\Models\Lead;
use App\Models\LeadExecutedAgreement;
use App\Models\LeadProposal;
use App\Models\LeadSource;
use App\Models\LegalRemark;
use App\Models\RequirementsMap;
use App\Models\Stages;
use App\Models\User;
use Illuminate\Http\Request;

use App\Services\Dopex;

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
            })->orderBy('id', 'desc')
            ->get();

        //   dd(\auth()->user()->id);
        return view('site.leads.leads', ['leads' => $leads]);
    }



    // Legal Leads Show

    function LeadsShowLegal()
    {
        $leads = Lead::with('created_by_user')

            ->whereIn('stage', ["Agreement"])->orderBy('id', 'desc')
            ->get();

        //   dd(\auth()->user()->id);
        return view('site.legal.leadslegal', ['leads' => $leads]);
    }

    function LeadsShowFinance()
    {
        $leads = Lead::with('created_by_user')

            ->whereIn('stage', ["Agreement"])->orderBy('id', 'desc')
            ->get();

        //   dd(\auth()->user()->id);
        return view('site.finance.leadsfinance', ['leads' => $leads]);
    }





    function Store(Request $req)
    {
        // $this->validate(
        //     $req,
        //     [
        //         'Customer_Name' => ['required', 'string', 'max:255'],
        //         'Email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //         'Contact_Number' => ['required', 'min:10', 'numeric'],
        //     ]
        // );

        $data = new Lead;
        $data->Customer_Name = $req->Input(['Customer_Name']);
        $data->Contact_Number = $req->Input(['Contact_Number']);
        $data->POC_Name = $req->Input(['POC_Name']);

        $data->Industry = $req->Input(['Industry']);

        $data->lead_source = $req->Input(['Lead_Source']);

        $data->Email = $req->Input(['Email']);
        $data->First_Contact_Date = $req->Input(['First_Contact_Date']);
        $data->Lead_Status = $req->Input(['Lead_Status']);
        $data->map_requirements = $req->Input(['map_requirements']);
        $data->lead_description = $req->Input(['lead_description']);
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

            $data->customer_id = $brand->id;
            $data->update();

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
            return redirect('view_lead/' . $data->id . "?followup=YES")->with("success", "Lead is a Prospect, Schedule a Followup");
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
        $data->customer_id = $req->id;
        $data->Customer_Name = $req->Customer_Name;
        $data->Contact_Number = $req->Contact_Number;
        $data->POC_Name = $req->POC_Name;
        $data->Industry = $req->Industry;
        $data->lead_source = $req->Lead_Source;
        $data->lead_description = $req->lead_description;
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
    // function Update_Lead(Request $request)
    // {
    //     $editlead = Lead::where('id', $request->id)->first();
    //     $editlead->Customer_Name = $request->Customer_Name;
    //     $editlead->Contact_Number = $request->Contact_Number;
    //     $editlead->POC_Name = $request->POC_Name;
    //     $editlead->Industry = $request->Industry;
    //     $editlead->Lead_Source = $request->Lead_Source;
    //     $editlead->Email = $request->Email;
    //     $editlead->First_Contact_Date = $request->First_Contact_Date;
    //     $editlead->Lead_Status = $request->Lead_Status;
    //     $editlead->save();

    //     if (auth()->user()->role_id == 6) {
    //         return redirect('admin/leadsshow')->with('success', 'record updated');
    //     } elseif (auth()->user()->role_id == 7) {
    //         return redirect('superuser/leadsshow')->with('success', 'record updated');
    //     }
    // }

    function Delete_Lead($id)
    {
        $deletelead = Lead::where('id', $id)->first();
        $deletelead->delete();


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

        // dd($request->id);
        $viewlead = Lead::where('id', $request->id)
            ->with('created_by_user')
            ->with('legalRemarks')
            ->with('requirements')
            ->with('proposals')
            ->with('followups')
            ->with('legalExecuted')
            ->with('finance_user')
            ->with('customer')->first();
        $lobs = \App\Models\AllBusiness::pluck('all_businesses', 'id');
        $cities = City::get();

        $industries = Industry::get();
        $requirements = RequirementsMap::where('lead_id', $request->id)->latest()->first();
        $proposal = LeadProposal::where('lead_id', $request->id)->latest()->first();
        $remarks = LegalRemark::where('lead_id', $request->id)->latest();
        return view('site.leads.viewlead', ['viewlead' => $viewlead, 'cities' => $cities, 'industries' => $industries, 'lobs' => $lobs, 'users' => $users, 'openfollowup' => $f, 'openrequirements' => $g, 'leadlogdata' => $data, 'openproposal' => $h, 'requirements' => $requirements, 'proposal' => $proposal, 'openremarks' => $i,  'remarks' => $remarks]);
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
        $viewlead = Lead::where('id', $request->id)
            ->with('created_by_user')
            ->with('legalRemarks')
            ->with('requirements')
            ->with('proposals')
            ->with('followups')
            ->with('legalExecuted')
            ->with('finance_user')
            ->with('customer')->first();

        $lobs = \App\Models\AllBusiness::pluck('all_businesses', 'id');
        $cities = City::get();

        $industries = Industry::get();


        $requirements = RequirementsMap::where('lead_id', $request->id)->latest()->first();
        $proposal = LeadProposal::where('lead_id', $request->id)->latest()->first();

        $remarks = LegalRemark::where('lead_id', $request->id)->latest();
        return view('site.legal.viewleadlegal', ['viewlead' => $viewlead, 'cities' => $cities, 'industries' => $industries, 'lobs' => $lobs, 'users' => $users, 'openfollowup' => $f, 'openrequirements' => $g, 'leadlogdata' => $data, 'openproposal' => $h, 'requirements' => $requirements, 'proposal' => $proposal, 'openremarks' => $i, 'remarks' => $remarks]);
    }


    function GetView_Lead_Finance(Request $request)
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
        $viewlead = Lead::where('id', $request->id)
            ->with('created_by_user')
            ->with('legalRemarks')
            ->with('requirements')
            ->with('proposals')
            ->with('followups')
            ->with('legalExecuted')
            ->with('finance_user')
            ->with('customer')->first();



        $lobs = \App\Models\AllBusiness::pluck('all_businesses', 'id');
        $cities = City::get();

        $industries = Industry::get();
        $requirements = RequirementsMap::where('lead_id', $request->id)->latest()->first();
        $proposal = LeadProposal::where('lead_id', $request->id)->latest()->first();

        $remarks = LegalRemark::where('lead_id', $request->id)->latest();
        return view('site.finance.viewleadfinance', ['viewlead' => $viewlead, 'cities' => $cities, 'industries' => $industries, 'lobs' => $lobs, 'users' => $users, 'openfollowup' => $f, 'openrequirements' => $g, 'leadlogdata' => $data, 'openproposal' => $h, 'requirements' => $requirements, 'proposal' => $proposal, 'openremarks' => $i, 'remarks' => $remarks]);
    }








    function Update_stage_status(Request $request)
    {
        $lead = Lead::where('id', $request->id)->first();
        $lead->lost_reason = $request->lost_reason;
        // $lead->dormant_reason = $request->dormant_reason;
        $lead->stage = $request->stage;
        $lead->save();
        LeadLogger(['lead_id' => $lead->id, 'followed_up_update' => date('y-m-d H:m:s'), "message" => "Lead Lost", "lead_stage" => $lead->stage]);

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

    // function AccessLeadLogger()
    // {
    //     $data = getLeadLogData(3);
    //     return $data;
    // }




    function Fetch_Requirements(Request $request)
    {


        $find = $request->get('find');



        $requirements = RequirementsMap::where('lead_id', $find)->with('service')->orderBy('lead_id', 'desc')->first();



        return response()->json(['requirements' => $requirements]);
    }

    function Update_status(Request $request)
    {
        $status = Lead::where('id', $request->id)->first();
        $status->Lead_Status = $request->status;
        $status->Reason = $request->Reason;

        $status->save();

        LeadLogger(['lead_id' => $request->id, "message" => "Lead Status Changed to  " . $request->status]);

        if ($request->status == "Not Qualified") {

            $status->stage = "Lost";
            $status->lost_reason = $request->Reason;
            $status->update();
            return redirect('view_lead/' . $request->id)->with("error", "Lead Not Qualified, Status Changed To Lost ");
        } elseif ($request->status == "Qualified") {

            $status->stage = "Lead";
            $status->update();
            return redirect('view_lead/' . $request->id . "?requirements=YES")->with("success", "Lead Qualified, Map Business Requirements");
        } elseif ($request->status == "Prospect") {
            $status->stage = "Lead";
            $status->update();
            return redirect('view_lead/' . $request->id . "?followup=YES")->with("success", "Lead Is a Prospect, Schedule Followup");
        }
    }

    function Save_Business_Proposal(Request $request)
    {

        // dd($request);
        $stageupdate = Lead::where('id', $request->id)->first();

        $proposal = new LeadProposal;
        $proposal->lead_id = $request->id;
        $proposal->reason_for_changing_proposal = $request->reason_for_changing_proposal;
        $proposal->proposal_remarks = $request->proposal_remarks;

        $doclink = "";
        if (isset($request->upload_proposal_documents)) {

            $doclink = getName($request->upload_proposal_documents);
        }



        $proposal->proposal_documents = $doclink;
        $proposal->proposal_accepted = $request->proposal_accepted;

        if ($proposal->save()) {
            $stageupdate->stage = "Proposal";
            $stageupdate->Lead_Status = "Proposal Submitted";

            $stageupdate->update();
        }

        LeadLogger(['lead_id' => $request->id, "message" => "Business Proposal Submitted "]);

        return redirect('view_lead/' . $request->id)->with("success", "Proposal Submitted, Waiting For Proposal Acceptance");
    }

    function Proposal_Accepted(Request $request)
    {


        $stageupdate = Lead::where('id', $request->id)->latest()->first();

        $accept = LeadProposal::where('lead_id', $request->id)->latest()->first();

        $accept->proposal_accepted = $request->accept_proposal;

        $accept->update();

        if ($request->accept_proposal == "Yes") {

            $stageupdate->Lead_Status = "Proposal Accepted";
            $stageupdate->update();
            LeadLogger(['lead_id' => $request->id, "message" => "Business Proposal Acccepted "]);

            return redirect('view_lead/' . $accept->lead_id . "?remarks=YES")->with("success", "Proposal Accepted, Fill Legal Remarks Form");
        } else if ($request->accept_proposal == "No") {
            if ($request->counter_proposal == "Yes") {

                $stageupdate->stage = "Negotiation";
                $stageupdate->Lead_Status = "Proposal Negotiation";
                $stageupdate->update();

                LeadLogger(['lead_id' => $request->id, "message" => "Counter Proposal received "]);

                return redirect('view_lead/' . $accept->lead_id . "?proposal=YES")->with("success", "Status : Proposal Negotiation");
            } else {


                LeadLogger(['lead_id' => $request->id, "message" => "Business Proposal Not Yet Acccepted "]);

                return redirect('view_lead/' . $accept->lead_id . "?followup=YES")->with("success", "Business Proposal Not Yet Acccepted Waiting For Acceptance, Go to Details Tab For more info");
            }
        } else {

            LeadLogger(['lead_id' => $request->id, "message" => "Business Proposal Not Acccepted "]);
        }
    }



    function Save_Legalremarks(Request $request)
    {

        $stageupdate = Lead::where('id', $request->id)->first();
        $i = 0;
        $attributes = array();

        //dd($request->data[0]);
        foreach ($request->data as $d) {
            //  dd($d['document_link']);

            if (isset($d['document_link'])) {

                $doclink = getName($d['document_link']);

                $attributes[$i]['document_link'] = $doclink;

                $attributes[$i]['lead_id'] = $request->id;


                $attributes[$i]['document_type'] = $d['document_type'];
                $attributes[$i]['user_id'] = \auth()->user()->id;
                $attributes[$i]['remarks_for_legal'] = $d['remarks_for_legal'];
                $attributes[$i]['remarks_by_legal'] = "";
                $attributes[$i]['bd_submitted_time'] = date("Y-m-d H:i");

                $i++;
            }
        }
        // dd($attributes);

        LegalRemark::insert($attributes);

        $stageupdate->stage = "Agreement";
        $stageupdate->Lead_Status = "Document Revision";
        $stageupdate->agreement_finalized = $request->agreement_finalized;
        $stageupdate->business_onboarded = $request->business_onboarded;

        $stageupdate->remarks_for_legal = $request->remarks;
        $stageupdate->update();


        LeadLogger(['lead_id' => $request->id, "message" => "Lead data sent to Legal Team "]);

        $sendticket = new Dopex;
        $response = $sendticket->leadRemarksTicket($request->id);
        // dd($response);

        return redirect('view_lead/' . $request->id)->with("success", "Legal Remarks Captured and sent to Legal Team");
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

            $stageupdate->Lead_Status = "Document Finalized";
            $stageupdate->update();

            LeadLogger(['lead_id' => $request->id, "message" => "Lead Agreement Finalized"]);

            $sendticket = new Dopex;
            $response = $sendticket->leadExecuteTicket($request->id);


            $sendticket2 = new Dopex;
            $response = $sendticket2->leadVerificationTicket($request->id);

            return redirect('view_lead/' . $request->id)->with("success", "Agreement Finalized, waiting for Executed Agreement By Legal Team");
        } elseif ($request->agreement_finalized == "No") {

            $stageupdate->Lead_Status = "Document Re-Revision";
            $stageupdate->update();
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

            return redirect('view_lead/' . $request->id . "?followup=YES")->with("error", "Business is not Boarded, Schedule a Followup");
        }
    }

    function Update_Proposal_Shared(Request $request)
    {



        $updateproposal = RequirementsMap::where('lead_id', $request->id)->latest()->first();
        // dd($request);

        $updateproposal->share_business_proposal = $request->proposal_shared;

        $updateproposal->update();
        // $stage = Lead::where('id', $request->id)->first();

        if ($request->proposal_shared == "Yes") {


            // $stage->Lead_Status = "Proposal Shared";
            // $stage->update();
            LeadLogger(['lead_id' => $request->id, "message" => "Business Proposal Shared"]);

            return redirect('view_lead/' . $request->id . "?proposal=YES")->with("success", "Fill Proposal Form To Share Business Proposal");
        } elseif ($request->proposal_shared == "No") {

            // $stage->Lead_Status = "Proposal";
            // $stage->update();

            LeadLogger(['lead_id' => $request->id, "message" => "Business Proposal Not shared "]);

            return redirect('view_lead/' . $request->id . "?followup=YES")->with("error", "Business Proposal Not shared, Schedule Followup");
        }
    }

    function Update_User(Request $r)
    {


        $stageupdate = Lead::where('id', $r->id)->first();
        $stageupdate->user_id = $r->assigned_user;
        $stageupdate->update();
        return redirect()->back()->with("success", "User Assigned successfuly");
    }


    function Update_Executed_Document(Request $request)
    {




        if (isset($request->legal_document_link)) {
            $doclink = getName($request->legal_document_link);



            LegalRemark::where('id', $request->id)->update([
                'remarks_by_legal' => $request->remarks_by_legal,
                'legal_document_link' => $doclink,
                'legal_submitted_time' => date("Y-m-d H:i"),

            ]);







            // LegalRemark::insert($attributes);

            $stage = Lead::where('id', $request->lead_id)->first();

            $stage->Lead_Status = "Document Revised";
            LeadLogger(['lead_id' => $request->lead_id, "message" => "Legal Team Sent Executed Document and remarks "]);


            return redirect('view_lead_legal/' . $request->lead_id)->with("success", "Remarks And Executed Documents sent to BD Team");
        } else {
            return redirect('view_lead_legal/' . $request->lead_id)->with("success", "Please upload file");
        }
    }


    function Executed_Agreement(Request $request)
    {



        $doclink = getName($request->executed_agreement);
        $attributes['document_upload'] = $doclink;

        $attributes['lead_id'] = $request->id;

        $attributes['user_id'] = \auth()->user()->id;
        $attributes['remarks'] = $request->agreement_remarks;
        $attributes['start_date'] = $request->start_date;
        $attributes['expiry_date'] = $request->expiry_date;


        LeadExecutedAgreement::insert($attributes);


        $stageupdate = Lead::where('id', $request->id)->first();
        $stageupdate->legal_user_id = \auth()->user()->id;
        $stageupdate->Lead_Status = "Agreement Finalized";


        $stageupdate->update();


        LeadLogger(['lead_id' => $request->id, "message" => "Uploaded Legal Executed Agreement"]);
        return redirect('view_lead_legal/' . $request->id)->with("success", "Uploaded Legal Executed Agreement,Documents Sent To Financial Verification");
    }

    function update_customer_details(Request $request)
    {
        $stageupdate = Lead::where('id', $request->id)->first();

        $stageupdate->Customer_Name = $request->Customer_Name;
        $stageupdate->Contact_Number =  $request->Contact_Number;
        $stageupdate->POC_Name =  $request->POC_Name;
        $stageupdate->Email =   $request->Email;
        $stageupdate->cost_center = $request->cost_center;
        $stageupdate->Industry =  $request->Industry;
        $stageupdate->Lead_Status = "Pending Verification";
        $stageupdate->update();


        $brand = BrandProfile::where('id', $request->customer_id)->first();

        $brand->Customer_Name = $request->Customer_Name;
        $brand->Contact_Number =  $request->Contact_Number;
        $brand->POC_Name =  $request->POC_Name;
        $brand->Email =  $request->Email;

        $brand->Industry =  $request->Industry;
        $brand->gst_no =  $request->gst_no;
        $brand->address =  $request->address;


        if (isset($request->gst_file)) {

            $brand->gst_file =  getName($request->gst_file);
        }


        $brand->update();



        LeadLogger(['lead_id' => $request->id, "message" => "Customer details updated by " . \auth()->user()->name]);
        return redirect('view_lead/' . $request->id)->with("success", "Customer details updated");
    }



    function Finance_Verification(Request $request)
    {


        $stageupdate = Lead::where('id', $request->id)->first();

        $stageupdate->Customer_Name = $request->Customer_Name;
        $stageupdate->Contact_Number =  $request->Contact_Number;
        $stageupdate->POC_Name =  $request->POC_Name;
        $stageupdate->Email =   $request->Email;
        $stageupdate->cost_center = $request->cost_center;
        $stageupdate->Industry =  $request->Industry;
        $stageupdate->Lead_Status = "Finance Verified";
        $stageupdate->finance_user_id = \auth()->user()->id;

        $stageupdate->update();


        $brand = BrandProfile::where('id', $request->customer_id)->first();

        $brand->Customer_Name = $request->Customer_Name;
        $brand->Contact_Number =  $request->Contact_Number;
        $brand->POC_Name =  $request->POC_Name;
        $brand->Email =  $request->Email;

        $brand->Industry =  $request->Industry;
        $brand->gst_no =  $request->gst_no;
        $brand->address =  $request->address;


        if (isset($request->gst_file)) {

            $brand->gst_file =  getName($request->gst_file);
        }


        $brand->update();



        LeadLogger(['lead_id' => $request->id, "message" => "Customer details verified by " . \auth()->user()->name]);
        return redirect('view_lead_finance/' . $request->id)->with("success", "Customer details verified By Finance");
    }


    function SaveRequirementsMap(Request $request)
    {

        try {


            $stageupdate = Lead::where('id', $request->id)->first();


            if (isset($request->upload_requirement_documents)) {
                $doclink = getName($request->upload_requirement_documents);
            } else {

                $data = RequirementsMap::where('lead_id', $request->id)->first();

                $doclink = $data->upload_requirement_documents;
            }
            // $requirements->lead_id = $request->id;



            $requirements = array(
                'business_requirement' => $request->business_requirement,
                'lob' => $request->lob,
                'services' => $request->services,
                'area' => $request->area,
                'expected_closure_date' => $request->expected_closure_date,
                'location' => $request->location,
                'business_type' => $request->business_type,
                'expected_monthly_revenue' => $request->expected_monthly_revenue,
                'expected_capex' => $request->expected_capex,
                'ebdta_percentage' => $request->ebdta_percentage,
                'ebdta_amount' => $request->ebdta_amount,
                'share_business_proposal' => $request->share_business_proposal,
                'upload_requirement_documents' => $doclink,
            );
            RequirementsMap::updateOrCreate(
                ['lead_id' => $request->id],
                $requirements
            );
            $stageupdate->stage = "Requirements Mapping";
            $stageupdate->Lead_Status = "Proposal To Be Shared";
            $stageupdate->update();

            LeadLogger(['lead_id' => $request->id, "message" => "Requirements mapping done  "]);

            if ($request->share_business_proposal == "Yes") {
                LeadLogger(['lead_id' => $request->id, "message" => "Business Proposal Shared"]);

                return redirect('view_lead/' . $request->id . "?proposal=YES")->with("success", "Fill Proposal Form To Share Business Proposal");
            } elseif ($request->share_business_proposal == "No") {
                LeadLogger(['lead_id' => $request->id, "message" => "Business Proposal Not shared "]);

                return redirect('view_lead/' . $request->id . "?followup=YES")->with("error", "Business Proposal Not shared, Schedule Followup");
            }
        } catch (\Exception $e) {
            dd($e);
        }
    }


    // function SaveRequirements(Request $request)
    // {



    //     $stageupdate = Lead::where('id', $request->id)->first();


    //     $requirements = new RequirementsMap;
    //     $requirements->lead_id = $request->id;
    //     $requirements->business_requirement = $request->business_requirement;

    //     $doclink = "";
    //     if (isset($request->upload_requirement_documents)) {


    //         $doclink = getName($request->upload_requirement_documents);
    //     }
    //     $requirements->upload_requirement_documents = $doclink;
    //     $requirements->lob = $request->lob;
    //     $requirements->services = $request->services;
    //     $requirements->area = $request->area;
    //     $requirements->expected_closure_date = $request->expected_closure_date;
    //     $requirements->location = $request->location;
    //     $requirements->business_type = $request->business_type;
    //     $requirements->expected_monthly_revenue = $request->expected_monthly_revenue;
    //     $requirements->expected_capex = $request->expected_capex;
    //     $requirements->ebdta_percentage = $request->ebdta_percentage;
    //     $requirements->ebdta_amount = $request->ebdta_amount;
    //     $requirements->share_business_proposal = $request->share_business_proposal;


    //     if ($requirements->save()) {
    //         $stageupdate->stage = "Requirements Mapping";
    //         $stageupdate->Lead_Status = "Proposal To Be Shared";
    //         $stageupdate->update();
    //     }








    //     LeadLogger(['lead_id' => $request->id, "message" => "Requirements mapping done  "]);

    //     if ($request->share_business_proposal == "Yes") {
    //         LeadLogger(['lead_id' => $request->id, "message" => "Business Proposal Shared"]);

    //         return redirect('view_lead/' . $request->id . "?proposal=YES")->with("success", "Fill Proposal Form To Share Business Proposal");
    //     } elseif ($request->share_business_proposal == "No") {
    //         LeadLogger(['lead_id' => $request->id, "message" => "Business Proposal Not shared "]);

    //         return redirect('view_lead/' . $request->id . "?followup=YES")->with("error", "Business Proposal Not shared, Schedule Followup");
    //     }
    // }




}
