<?php

namespace App\Http\Controllers;


use App\Models\AllBusiness;
use App\Models\City;
use App\Models\Department;
use App\Models\Industry;
use App\Models\LeadSource;
use App\Models\LobService;
use App\Models\Stages;
use Illuminate\Http\Request;


class AllMaster extends Controller
{
    function addUsersShow()
    {
        return view('site.masters.addusers');
    }



    function allBusinessShow()
    {
        dd('here');
        $business = AllBusiness::get();
        return view('site.masters.allbusiness', ['business' => $business]);
    }


    function allCityShow()
    {

        $cities = City::get();
        return view('site.masters.allcity', ['cities' => $cities]);
    }


    function allDepartmentsShow()
    {
        $departments = Department::get();
        return view('site.masters.alldepartments', ['departments' => $departments]);
    }


    function allIndustryShow()
    {

        $industries = Industry::get();
        return view('site.masters.allindustry', ['industries' => $industries]);
    }

    function allLeadSourceShow()
    {
        $leadsource = LeadSource::get();
        return view('site.masters.allleadsource', ['leadsource' => $leadsource]);
    }

    function allObServiceShow()
    {
        $lobservices = LobService::get();
        return view('site.masters.alllobservice', ['lobservices' => $lobservices]);
    }

    function allStageShow()
    {
        $stages = Stages::get();
        return view('site.masters.allstage', ['stages' => $stages]);
    }
}
