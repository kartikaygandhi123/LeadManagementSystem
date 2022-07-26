<?php

namespace App\Services;

use GuzzleHttp;
use  Exception;

class Dopex
{
    private $_url; 

    private $_username;

    private $_password;

    private $_headers =[];

    private $_API;


    public function __construct()
    {
       // $this->setup();
    }


    /**
     * setup for the integartion
     */
    public function setup()
    {

        
        
        
        
        
        
        
        
        
        
        
    }

    
    
    
   
    public function leadRemarksTicket($id)
    {
        
        $client = new \GuzzleHttp\Client();
        $url = config('app.TICKET_SYSTEM_URL')."/api/task_create_ticket";
        // dd($_SERVER['HTTP_HOST']);
        $data = [];
        $sent_to = ['dheeraj.sharma@holisollogistics.com'];
      
        foreach ($sent_to as $value) {
           // dd($value);
            array_push($data, [
            'sent_from' => config('app.TICKET_SYSTEM_USER'),
            'sent_to' => $value,
            'title' => "New Lead Remarks ticket by ".\auth()->user()->name,
            'category' => config('app.TICKET_SYSTEM_CATEGORY'),
            'description' => "Hi, ".\auth()->user()->name." has forwarded you a lead for your remarks. Please visit <a href='".$_SERVER['HTTP_HOST']."/view_lead_legal/".$id."'>View Lead.</a>",
                'task_end_date' => date('Y-m-d', strtotime("+7 day", time()))
            ]);
        }
        
        
       
        $request = $client->request("POST", $url, ['body' => json_encode($data)]);
        $response = $request->getBody()->getContents();
       // dd($response);
       

        return true;

    
        
        }
   
        
         
    public function leadExecuteTicket($id)
         {
        
        $client = new \GuzzleHttp\Client();
        $url = config('app.TICKET_SYSTEM_URL')."/api/task_create_ticket";
        // dd($_SERVER['HTTP_HOST']);
        $data = [];
        $sent_to = ['dheeraj.sharma@holisollogistics.com'];
      
        foreach ($sent_to as $value) {
           // dd($value);
            array_push($data, [
            'sent_from' => config('app.TICKET_SYSTEM_USER'),
            'sent_to' => $value,
            'title' => "New Agreement Execution ticket by ".\auth()->user()->name,
            'category' => config('app.TICKET_SYSTEM_CATEGORY'),
            'description' => "Hi, ".\auth()->user()->name." has forwarded you a lead for Agreement Execution. Please visit <a href='".$_SERVER['HTTP_HOST']."/view_lead_legal/".$id."'>View Lead.</a>",
                'task_end_date' => date('Y-m-d', strtotime("+7 day", time()))
            ]);
        }
        
        
       
        $request = $client->request("POST", $url, ['body' => json_encode($data)]);
        $response = $request->getBody()->getContents();
       // dd($response);
       

        return true;

    
        
        }
        
        
            
    public function leadVerificationTicket($id)
         {
        
        $client = new \GuzzleHttp\Client();
        $url = config('app.TICKET_SYSTEM_URL')."/api/task_create_ticket";
        // dd($_SERVER['HTTP_HOST']);
        $data = [];
        $sent_to = ['dheeraj.sharma@holisollogistics.com'];
      
        foreach ($sent_to as $value) {
           // dd($value);
            array_push($data, [
            'sent_from' => config('app.TICKET_SYSTEM_USER'),
            'sent_to' => $value,
            'title' => "New Lead Customer Verification ticket by ".\auth()->user()->name,
            'category' => config('app.TICKET_SYSTEM_CATEGORY'),
            'description' => "Hi, ".\auth()->user()->name." has forwarded you a lead forcustomer verification. Please visit <a href='".$_SERVER['HTTP_HOST']."/view_lead_finance/".$id."'>View Lead.</a>",
                'task_end_date' => date('Y-m-d', strtotime("+7 day", time()))
            ]);
        }
        
        
       
        $request = $client->request("POST", $url, ['body' => json_encode($data)]);
        $response = $request->getBody()->getContents();
       // dd($response);
       

        return true;

    
        
        }
   

    
}