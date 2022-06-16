<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeadSourcesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('lead_sources')->insert([
			// ['lead_source' => 'Advertisement', 'created_at' => date('Y-m-d H:i:s')],
			['lead_source' => 'Customer Reference', 'created_at' => date('Y-m-d H:i:s')],
			['lead_source' => 'Email Marketing', 'created_at' => date('Y-m-d H:i:s')],
			['lead_source' => 'Employee Referral', 'created_at' => date('Y-m-d H:i:s')],
			// ['lead_source' => 'Events', 'created_at' => date('Y-m-d H:i:s')],
			['lead_source' => 'Existing Business', 'created_at' => date('Y-m-d H:i:s')],
			['lead_source' => 'Market Research', 'created_at' => date('Y-m-d H:i:s')],
			['lead_source' => 'Others', 'created_at' => date('Y-m-d H:i:s')],
			['lead_source' => 'Social Media', 'created_at' => date('Y-m-d H:i:s')],
			['lead_source' => 'Web Research', 'created_at' => date('Y-m-d H:i:s')],
			['lead_source' => 'Website', 'created_at' => date('Y-m-d H:i:s')],
		]);
	}
}
