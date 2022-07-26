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
use App\Services\Holibook;

class MasterController extends Controller
{

    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    function addUsersShow()
    {
        return view('site.masters.addusers');
    }



    function allBusinessShow()
    {

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
    
    
    
    
     /* get clients from holibook */
    public function get_holibook_clients(){
        try {
            $Fetch_clients = new Holibook;
            $response = $Fetch_clients->fetchClients();
            if($response["success"]){
                if(count($response["data"])>0){
                    return response(["success"=>true,"message"=>"data found","data"=>$response["data"]],200);
                }else{
                    return response(["success"=>false,"message"=>'no clients found',"data"=>[]],200); 
                }
            }else{
                return response(["success"=>false,"message"=>'something went wrong on holibook',"data"=>[]],404);
            }
        } catch (\Exception $th) {
            return response(["success"=>false,"message"=>'something went wrong',"data"=>$th],400);
        }
    }
    
      /* get clients from holibook */
    public function get_cost_centers(){
        try {
            $Fetch_cc = new Holibook;
            $response = $Fetch_cc->fetchAllCostcenters();
            if($response["success"]){
                if(count($response["data"])>0){
                    return response(["success"=>true,"message"=>"data found","data"=>$response["data"]],200);
                }else{
                    return response(["success"=>false,"message"=>'no clients found',"data"=>[]],200); 
                }
            }else{
                return response(["success"=>false,"message"=>'something went wrong on holibook',"data"=>[]],404);
            }
        } catch (\Exception $th) {
            return response(["success"=>false,"message"=>'something went wrong',"data"=>$th],400);
        }
    }
    
      /* get clients from holibook */
    public function get_holibook_locations(){
        try {
            $Fetch_cc = new Holibook;
            $response = $Fetch_cc->fetchClientLocations();
            if($response["success"]){
                if(count($response["data"])>0){
                    return response(["success"=>true,"message"=>"data found","data"=>$response["data"]],200);
                }else{
                    return response(["success"=>false,"message"=>'no clients found',"data"=>[]],200); 
                }
            }else{
                return response(["success"=>false,"message"=>'something went wrong on holibook',"data"=>[]],404);
            }
        } catch (\Exception $th) {
            return response(["success"=>false,"message"=>'something went wrong',"data"=>$th],400);
        }
    }
    
    
    /* get clients from holibook */
    public function get_lob_services(Request $r){
        try {
          // dd($r->id);
           
           
           $res= LobService::where('business_line_id', $r->id)->pluck('services', 'id');
          // dd($res);
           
          
                    return response(["success"=>true,"message"=>"data found","data"=>$res],200);
              
          
        } catch (\Exception $th) {
            return response(["success"=>false,"message"=>'something went wrong',"data"=>$th],400);
        }
    }
    
    
    
    
    
    
}
