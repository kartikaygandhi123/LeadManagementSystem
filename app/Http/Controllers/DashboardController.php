<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Models\Lead;
use App\Models\Stages;
use App\Models\User;
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
        $usercount = User::count();
        $users = User::with('roles')->get();

        return view('dashboard', ['leads' => $leads, 'stages' => $stages, 'industry' => $industry, 'leadsname' => $leadsname, 'users' => $users, 'usercount' => $usercount]);
    }


    function RetailBdHead(Request $req)
    {

        $leads = Lead::count();
        $leadsname = Lead::get();
        $industry = Industry::count();
        $stages = Stages::count();
        $usercount = User::count();
        $users = User::with('roles')->get();
        return view('site.Retailbdhead.dashboard', ['leads' => $leads, 'stages' => $stages, 'industry' => $industry, 'leadsname' => $leadsname, 'users' => $users, 'usercount' => $usercount]);
    }

    function IplBdHead(Request $req)
    {

        $leads = Lead::count();
        $leadsname = Lead::get();
        $industry = Industry::count();
        $stages = Stages::count();
        $usercount = User::count();
        $users = User::with('roles')->get();
        return view('site.Iplbdhead.dashboard', ['leads' => $leads, 'stages' => $stages, 'industry' => $industry, 'leadsname' => $leadsname, 'users' => $users, 'usercount' => $usercount]);
    }

    function TechBdHead(Request $req)
    {

        $leads = Lead::count();
        $leadsname = Lead::get();
        $industry = Industry::count();
        $stages = Stages::count();
        $usercount = User::count();
        $users = User::with('roles')->get();
        return view('site.Techbdhead.dashboard', ['leads' => $leads, 'stages' => $stages, 'industry' => $industry, 'leadsname' => $leadsname, 'users' => $users, 'usercount' => $usercount]);
    }


    function RetailBd(Request $req)
    {

        $leads = Lead::count();
        $leadsname = Lead::get();
        $industry = Industry::count();
        $stages = Stages::count();
        $usercount = User::count();
        $users = User::with('roles')->get();
        return view('site.Retailbd.dashboard', ['leads' => $leads, 'stages' => $stages, 'industry' => $industry, 'leadsname' => $leadsname, 'users' => $users, 'usercount' => $usercount]);
    }


    function TechBd(Request $req)
    {

        $leads = Lead::count();
        $leadsname = Lead::get();
        $industry = Industry::count();
        $stages = Stages::count();
        $usercount = User::count();
        $users = User::with('roles')->get();
        return view('site.Techbd.dashboard', ['leads' => $leads, 'stages' => $stages, 'industry' => $industry, 'leadsname' => $leadsname, 'users' => $users, 'usercount' => $usercount]);
    }

    function Admin(Request $req)
    {

        $leads = Lead::count();
        $leadsname = Lead::get();
        $industry = Industry::count();
        $stages = Stages::count();
        $usercount = User::count();
        $users = User::with('roles')->get();
        return view('site.Admin.dashboard', ['leads' => $leads, 'stages' => $stages, 'industry' => $industry, 'leadsname' => $leadsname, 'users' => $users, 'usercount' => $usercount]);
    }

    function SuperAdmin(Request $req)
    {

        $leads = Lead::count();
        $leadsname = Lead::get();
        $industry = Industry::count();
        $stages = Stages::count();
        $usercount = User::count();
        $users = User::with('roles')->get();


        return view('site.Superadmin.dashboard', ['leads' => $leads, 'stages' => $stages, 'industry' => $industry, 'leadsname' => $leadsname, 'users' => $users, 'usercount' => $usercount]);
    }

    function IplBd(Request $req)
    {

        $leads = Lead::count();
        $leadsname = Lead::get();
        $industry = Industry::count();
        $stages = Stages::count();
        $usercount = User::count();
        $users = User::with('roles')->get();
        return view('site.Iplbd.dashboard', ['leads' => $leads, 'stages' => $stages, 'industry' => $industry, 'leadsname' => $leadsname, 'users' => $users, 'usercount' => $usercount]);
    }
}
