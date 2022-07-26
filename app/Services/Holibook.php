<?php

namespace App\Services;

use GuzzleHttp;
use  Exception;

class Holibook
{
    private $_url; 

    private $_username;

    private $_password;

    private $_headers =[];

    private $_API;


    public function __construct()
    {
        $this->setup();
    }


    /**
     * setup for the integartion
     */
    public function setup()
    {

        $this->_url = "https://holibook.holisollogistics.com/api/"; //"https://holitest.holisollogistics.com/api/"; //config('integrations.holibook.endpoint');

        $this->_username = "FMS"; //config('integrations.holibook.username');

        $this->_password =  "UmsxVExUSXdNakl3TnpBNA==";//config('integrations.holibook.password');

        $this->_headers =
        [
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic ' . base64_encode("{$this->_username}:{$this->_password}")
        ];
        $this->_API = new GuzzleHttp\Client(['headers' => $this->_headers]);
        
    }

    /**
     * Get cost center from Holibook
     *
     * @return void
     */
    public function fetchCostcenters()
    {
        try {
            $request = $this->_API->request(
                "GET",
                $this->_url . 'costcenter?lob=IPL-ISCM'
            );
            $data = $request->getBody()->getContents();
            return json_decode($data, true);
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * Create invoice request
     *
     * @param [type] $body
     * @return void
     */
    public function createInvoiceRequest($body)
    {
        try {
            $request = $this->_API->request(
                "POST",
                $this->_url . 'transaction?uniquekey=VlV4TlV5MHlNREl3TURneU1nPT0=',
                [
                    'json' => $body,
                    'http_error' => true
                ]
            );
            $data = $request->getBody()->getContents();
            return json_decode($data, true);
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * Get clinets data  from Holibook
     *
     * @return void
     */
    public function fetchBillableClients()
    {
        try {
            $request = $this->_API->request(
                "GET",
                $this->_url . 'customer?lob=IPL-ISCM'
            );
            $data = $request->getBody()->getContents();
            return json_decode($data, true);
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * Get clinets data  from Holibook
     *
     * @return void
     */
    public function fetchClientLocations()
    {
        try {
            $request = $this->_API->request(
                "GET",
                $this->_url . 'locations'
            );
            $data = $request->getBody()->getContents();
            return json_decode($data, true);
        } catch (Exception $e) {
            return false;
        }
    }
      /**
     * Get clinets from Holibook
     *
     * @return void
     */

    public function fetchClients()
    {
        try {
            $request = $this->_API->request(
                "GET",
                $this->_url . 'supercustomer'
            );
            $data = $request->getBody()->getContents();
            return json_decode($data, true);
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * Get clinets data  from Holibook
     *
     * @return void
     *//**
     * Get clinets data  from Holibook
     *
     * @return void
     */
    public function fetchPincodes($pincode)
    {
        try {
            $request = $this->_API->request(
                "GET",
                "{$this->_url}pincode?pincode={$pincode}"
            );
            $data = $request->getBody()->getContents();
          
            return json_decode($data, true);
        } catch (Exception $e) {
            return false;
        }
    }
    
    
      /**
     * Get cost center from Holibook
     *
     * @return void
     */
    public function fetchAllCostcenters()
    {
        try {
            $request = $this->_API->request(
                "GET",
                $this->_url . 'costcenter_mst'
            );
            $data = $request->getBody()->getContents();
            return json_decode($data, true);
        } catch (Exception $e) {
            return false;
        }
    }
}