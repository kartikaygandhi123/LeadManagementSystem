<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllBusinessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('all_businesses')->insert([
            ['all_businesses' => 'Communication', 'org_id' => 1, 'created_at' => date('Y-m-d H:i:s')],
            ['all_businesses' => 'Consulting', 'org_id' => 1, 'created_at' => date('Y-m-d H:i:s')],
            ['all_businesses' => 'Freight', 'org_id' => 1, 'created_at' => date('Y-m-d H:i:s')],
            ['all_businesses' => 'Fulfilment Centre', 'org_id' => 1, 'created_at' => date('Y-m-d H:i:s')],
            ['all_businesses' => 'HoliTech', 'org_id' => 1, 'created_at' => date('Y-m-d H:i:s')],
            ['all_businesses' => 'Hyperlocal', 'org_id' => 1, 'created_at' => date('Y-m-d H:i:s')],
            ['all_businesses' => 'ISCM', 'org_id' => 1, 'created_at' => date('Y-m-d H:i:s')],
            ['all_businesses' => 'LMD', 'org_id' => 1, 'created_at' => date('Y-m-d H:i:s')],
            ['all_businesses' => 'OSCM', 'org_id' => 1, 'created_at' => date('Y-m-d H:i:s')],
            ['all_businesses' => 'PAS Engineering', 'org_id' => 1, 'created_at' => date('Y-m-d H:i:s')],
            //['all_businesses' => 'Talent Solution Group','org_id'=>1, 'created_at' => date('Y-m-d H:i:s')],
            ['all_businesses' => 'Transportation', 'org_id' => 1, 'created_at' => date('Y-m-d H:i:s')],
        ]);
    }
}
