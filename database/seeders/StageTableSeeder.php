<?php

namespace Database\Seeders;

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StageTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('stages')->insert([

			['stage' => '0%-Lost', 'created_at' => date('Y-m-d H:i:s')],
			['stage' => 'Dormant', 'created_at' => date('Y-m-d H:i:s')],
			['stage' => '10%-Lead', 'created_at' => date('Y-m-d H:i:s')],
			['stage' => '25%-Requirement Mapping', 'created_at' => date('Y-m-d H:i:s')],
			['stage' => '50%-Proposal/Price Quote', 'created_at' => date('Y-m-d H:i:s')],
			['stage' => '70%-Negotiation', 'created_at' => date('Y-m-d H:i:s')],
			['stage' => '90%-Agreement', 'created_at' => date('Y-m-d H:i:s')],
			['stage' => '100%-Business Onboarded', 'created_at' => date('Y-m-d H:i:s')],

		]);
	}
}
