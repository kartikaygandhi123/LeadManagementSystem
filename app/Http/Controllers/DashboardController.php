<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Models\Lead;
use App\Models\Stages;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    function dashboardShow(Request $req)
    {

        $leads = Lead::count();
        $leadsname = Lead::get();
        $industry = Industry::count();
        $stages = Stages::count();
        return view('dashboard', ['leads' => $leads, 'stages' => $stages, 'industry' => $industry, 'leadsname' => $leadsname]);
    }


    function RetailBdHead(Request $req)
    {

        $leads = Lead::count();
        $leadsname = Lead::get();
        $industry = Industry::count();
        $stages = Stages::count();
        return view('site.Retailbdhead.dashboard', ['leads' => $leads, 'stages' => $stages, 'industry' => $industry, 'leadsname' => $leadsname]);
    }

    function IplBdHead(Request $req)
    {

        $leads = Lead::count();
        $leadsname = Lead::get();
        $industry = Industry::count();
        $stages = Stages::count();
        return view('site.Iplbdhead.dashboard', ['leads' => $leads, 'stages' => $stages, 'industry' => $industry, 'leadsname' => $leadsname]);
    }

    function TechBdHead(Request $req)
    {

        $leads = Lead::count();
        $leadsname = Lead::get();
        $industry = Industry::count();
        $stages = Stages::count();
        return view('site.Techbdhead.dashboard', ['leads' => $leads, 'stages' => $stages, 'industry' => $industry, 'leadsname' => $leadsname]);
    }


    function RetailBd(Request $req)
    {

        $leads = Lead::count();
        $leadsname = Lead::get();
        $industry = Industry::count();
        $stages = Stages::count();
        return view('site.Retailbd.dashboard', ['leads' => $leads, 'stages' => $stages, 'industry' => $industry, 'leadsname' => $leadsname]);
    }


    function TechBd(Request $req)
    {

        $leads = Lead::count();
        $leadsname = Lead::get();
        $industry = Industry::count();
        $stages = Stages::count();
        return view('site.Techbd.dashboard', ['leads' => $leads, 'stages' => $stages, 'industry' => $industry, 'leadsname' => $leadsname]);
    }

    function Admin(Request $req)
    {

        $leads = Lead::count();
        $leadsname = Lead::get();
        $industry = Industry::count();
        $stages = Stages::count();
        return view('site.Admin.dashboard', ['leads' => $leads, 'stages' => $stages, 'industry' => $industry, 'leadsname' => $leadsname]);
    }

    function SuperAdmin(Request $req)
    {

        $leads = Lead::count();
        $leadsname = Lead::get();
        $industry = Industry::count();
        $stages = Stages::count();
        return view('site.Superadmin.dashboard', ['leads' => $leads, 'stages' => $stages, 'industry' => $industry, 'leadsname' => $leadsname]);
    }

    function IplBd(Request $req)
    {

        $leads = Lead::count();
        $leadsname = Lead::get();
        $industry = Industry::count();
        $stages = Stages::count();
        return view('site.Iplbd.dashboard', ['leads' => $leads, 'stages' => $stages, 'industry' => $industry, 'leadsname' => $leadsname]);
    }
}
