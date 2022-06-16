<?php

use Illuminate\Database\Seeder;

class ContractDurationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('contract_durations')->insert([

        	['contract_duration' => 'One-Time', 'created_at' => date('Y-m-d H:i:s')],
        	['contract_duration' => '1 Month', 'created_at' => date('Y-m-d H:i:s')],
        	['contract_duration' => '2 Month', 'created_at' => date('Y-m-d H:i:s')],
        	['contract_duration' => '3 Month', 'created_at' => date('Y-m-d H:i:s')],
        	['contract_duration' => '4 Month', 'created_at' => date('Y-m-d H:i:s')],
        	['contract_duration' => '5 Month', 'created_at' => date('Y-m-d H:i:s')],
        	['contract_duration' => '6 Month', 'created_at' => date('Y-m-d H:i:s')],
        	['contract_duration' => '7 Month', 'created_at' => date('Y-m-d H:i:s')],
        	['contract_duration' => '8 Month', 'created_at' => date('Y-m-d H:i:s')],
        	['contract_duration' => '9 Month', 'created_at' => date('Y-m-d H:i:s')],
        	['contract_duration' => '10 Month', 'created_at' => date('Y-m-d H:i:s')],
        	['contract_duration' => '11 Month', 'created_at' => date('Y-m-d H:i:s')],
        	['contract_duration' => '1 Year', 'created_at' => date('Y-m-d H:i:s')],
        	['contract_duration' => '2 Years', 'created_at' => date('Y-m-d H:i:s')],
        	['contract_duration' => '3 Years', 'created_at' => date('Y-m-d H:i:s')],
        ]);
    }
}
