<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\LeadSource;
use App\Models\Stages;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{

    function ReportsShow()
    {
        $leads = Lead::with('created_by_user')->get();
        $user = User::get();
        $stage = Stages::get();
        $lead_source = LeadSource::get();
        return view('site.reports.reports', ['leads' => $leads, "stage" => $stage, 'lead_source' => $lead_source, 'user' => $user]);
    }



    function FilterResult(Request $request)
    {
        // $leads = Lead::with('created_by_user')->get();

        $stage = Stages::get();
        $lead_source = LeadSource::get();
        $user = User::get();
        $leads = new Lead();

        $leads = $leads->with('created_by_user');



        if ($request->name) {
            $leads = $leads->whereIn('Customer_Name', $request->name);
        }
        if ($request->stage) {
            $leads = $leads->whereIn('stage', $request->stage);
        }

        if ($request->lead_source) {
            $leads = $leads->whereIn('lead_source', $request->lead_source);
        }
        if ($request->user) {
            $leads = $leads->where('created_by', $request->user);
        }
        if (($request->from) && ($request->to)) {
            $leads = $leads->whereBetween('First_Contact_Date', array($request->from, $request->to));
        }
        $leads = $leads->get();
        // dd($leads);

        return view('site.reports.reports', ['leads' => $leads, 'stage' => $stage, 'lead_source' => $lead_source, 'user' => $user]);
    }

    function Leads_FilterResult(Request $request)
    {
        // $leads = Lead::with('created_by_user')->get();

        $stage = Stages::get();
        $lead_source = LeadSource::get();
        $user = User::get();
        $leads = new Lead();

        $leads = $leads->with('created_by_user');



        if ($request->name) {
            $leads = $leads->whereIn('Customer_Name', $request->name);
        }
        if ($request->stage) {
            $leads = $leads->whereIn('stage', $request->stage);
        }

        if ($request->lead_source) {
            $leads = $leads->whereIn('lead_source', $request->lead_source);
        }
        if ($request->user) {
            $leads = $leads->where('created_by', $request->user);
        }
        if (($request->from) && ($request->to)) {
            $leads = $leads->whereBetween('First_Contact_Date', array($request->from, $request->to));
        }
        $leads = $leads->get();
        // dd($leads);

        return view('site.leads.leads', ['leads' => $leads, 'stage' => $stage, 'lead_source' => $lead_source, 'user' => $user]);
    }
}
