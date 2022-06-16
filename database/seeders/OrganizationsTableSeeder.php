<?php

use Illuminate\Database\Seeder;

class OrganizationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organizations')->insert([
        	['company_name' => 'Holisol Logistics Pvt. Ltd.', 'company_code' => 'HLSL', 'company_address' => 'A-1, Cariappa Marg, Sainik Farms, Gate No. 2 New Delhi 110062. India', 'contact_number'=> '0120-6262650', 'contact_email'=> 'info@holisollogistics.com', 'finance_email'=> 'finance@holisollogistics.com', 'created_at' => date('Y-m-d H:i:s')],
        ]);
    }
}
