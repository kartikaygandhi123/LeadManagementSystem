<?php

use Illuminate\Database\Seeder;

class ReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reports')->truncate();
        DB::table('reports')->insert([
        	['report' => 'Account Won Current Year', 'description' => 'Dashboard report' ,'url'=>'accountWon','created_at' => date('Y-m-d H:i:s')],
        	['report' => 'Opportunities vs Closing Month','description' => 'Dashboard report','url'=>'opportunityvsCloseMonth' , 'created_at' => date('Y-m-d H:i:s')],
        	['report' => 'Owner Wise opportunities','description' => 'Dashboard report','url'=>'opportunityOwner', 'created_at' => date('Y-m-d H:i:s')],
        	['report' => 'Holisol LOB wise Opportunities','description' => 'Dashboard report','url'=>'opportunityLob', 'created_at' => date('Y-m-d H:i:s')],
        	['report' => 'Dormant/Lost opportunities current Year','description' => 'Dashboard report','url'=>'lostOpportunityCurrentMonth', 'created_at' => date('Y-m-d H:i:s')],
        	['report' => 'Opportunity Added current Month','description' => 'Dashboard report','url'=>'opportunityAddedCurrentmonth', 'created_at' => date('Y-m-d H:i:s')],
        	['report' => 'Closing date Due','description' => 'Dashboard report','url'=>'closingDatedue', 'created_at' => date('Y-m-d H:i:s')],
        	['report' => 'Brand profile Industry vs Opportunites','description' => 'Dashboard report','url'=>'opportunityIndustry', 'created_at' => date('Y-m-d H:i:s')],
        	['report' => 'FC report','description' => 'Dashboard report','url'=>'fcReport', 'created_at' => date('Y-m-d H:i:s')],
        	['report' => 'Converted Leads','description' => 'Dashboard report','url'=>'convertedLead', 'created_at' => date('Y-m-d H:i:s')],
            ['report' => 'Brand Profile Added Current Month','description' => 'Dashboard report','url'=>'brandprofileCurrentMonth', 'created_at' => date('Y-m-d H:i:s')],
             ['report' => 'Opportunity Closing by Current Quarter','description' => 'Dashboard report','url'=>'quarterClosingdate', 'created_at' => date('Y-m-d H:i:s')],
        ]);
    }
}
