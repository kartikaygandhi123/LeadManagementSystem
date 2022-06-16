<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LobServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('lob_services')->truncate();
        DB::table('lob_services')->insert([
            // ['services' => 'Web Designing','business_line_id' => '1', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'Social Media Marketing','business_line_id' => '1', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'Search Engine Optimization','business_line_id' => '1', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'Content Marketing','business_line_id' => '1', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'Other Marketing Activities','business_line_id' => '1', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'Feasibility Studies','business_line_id' => '2', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'GST Consulting','business_line_id' => '2', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'Internal Consulting','business_line_id' => '2', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'New Logistics Set up','business_line_id' => '2', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'Process Design & Engineering','business_line_id' => '2', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'Supply  Chain Network Modelling','business_line_id' => '2', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'Transportation Packaging Solution Design','business_line_id' => '2', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'Warehouse Design & Layout','business_line_id' => '2', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'Export','business_line_id' => '3', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'Import','business_line_id' => '3', 'created_at' => date('Y-m-d H:i:s')],
            ['services' => 'DFC', 'business_line_id' => '4', 'created_at' => date('Y-m-d H:i:s')],
            ['services' => 'MFC-Ahmedabad', 'business_line_id' => '4', 'created_at' => date('Y-m-d H:i:s')],
            ['services' => 'MFC-Bangalore Achala', 'business_line_id' => '4', 'created_at' => date('Y-m-d H:i:s')],
            //['services' => 'MFC-Bangalore Hyundai','business_line_id' => '4', 'created_at' => date('Y-m-d H:i:s')],
            ['services' => 'MFC-Bangalore Jigani', 'business_line_id' => '4', 'created_at' => date('Y-m-d H:i:s')],
            ['services' => 'MFC-Chennai', 'business_line_id' => '4', 'created_at' => date('Y-m-d H:i:s')],
            ['services' => 'MFC-Delhi Bamnoli 2', 'business_line_id' => '4', 'created_at' => date('Y-m-d H:i:s')],
            ['services' => 'MFC-Delhi Mundka', 'business_line_id' => '4', 'created_at' => date('Y-m-d H:i:s')],
            ['services' => 'MFC-Gurgaon Gadoli', 'business_line_id' => '4', 'created_at' => date('Y-m-d H:i:s')],
            ['services' => 'MFC-Gurgaon Tauru', 'business_line_id' => '4', 'created_at' => date('Y-m-d H:i:s')],
            ['services' => 'MFC-Kolkata 1', 'business_line_id' => '4', 'created_at' => date('Y-m-d H:i:s')],
            ['services' => 'MFC-Kolkata 2', 'business_line_id' => '4', 'created_at' => date('Y-m-d H:i:s')],
            ['services' => 'MFC-Mumbai AB2', 'business_line_id' => '4', 'created_at' => date('Y-m-d H:i:s')],
            ['services' => 'MFC-Mumbai I3', 'business_line_id' => '4', 'created_at' => date('Y-m-d H:i:s')],
            ['services' => 'MFC-Noida Dadri', 'business_line_id' => '4', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'Clarviz - OSPREY','business_line_id' => '5', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'D-Talent','business_line_id' => '5', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'DMS', 'business_line_id' => '5', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'DOMMS', 'business_line_id' => '5', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'Dopex' ,'business_line_id' => '5', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'e-Logistics','business_line_id' => '5', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'End to End IT Solutions','business_line_id' => '5', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'Holiscope' ,'business_line_id' => '5', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'HOPS' ,'business_line_id' => '5', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'Hyperlocal' ,'business_line_id' => '5', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'OCFS' ,'business_line_id' => '5', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'Pick n Pack' ,'business_line_id' => '5', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'RMS','business_line_id' => '5', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'Social Distancing Tool','business_line_id' => '6', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'TMS','business_line_id' => '5', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'ULMS','business_line_id' => '5', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'Yard Management System' ,'business_line_id' => '5', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'WMS' ,'business_line_id' => '5', 'created_at' => date('Y-m-d H:i:s')],

            // ['services' => 'Returnable Packaging','business_line_id' => '7', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'Just-in-Time (JIT)','business_line_id' => '7', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'Warehousing','business_line_id' => '7', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'Forward Transportation','business_line_id' => '7', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'Box/Pallets Sale','business_line_id' => '7', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'PAS service-ISCM','business_line_id' => '10', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'One way Packaging','business_line_id' => '10', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'PAS service-OSCM','business_line_id' => '10', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'Returable Packaging','business_line_id' => '10', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'Value Engineering','business_line_id' => '10', 'created_at' => date('Y-m-d H:i:s')],


            // ['services' => 'Domestic Air Freight','business_line_id' => '12', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'Industrial Project','business_line_id' => '12', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'International Air Freight','business_line_id' => '12', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'Sea Freight','business_line_id' => '12', 'created_at' => date('Y-m-d H:i:s')],
            // ['services' => 'Multi Transportation','business_line_id' => '12', 'created_at' => date('Y-m-d H:i:s')],






        ]);
    }
}
