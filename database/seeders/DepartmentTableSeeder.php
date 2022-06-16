<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            ['department' => 'Retail BD Head', 'active' => 1, 'created_at' => date('Y-m-d H:i:s')],
            ['department' => 'IPL BD Head', 'active' => 1, 'created_at' => date('Y-m-d H:i:s')],
            ['department' => 'Tech BD Head', 'active' => 1, 'created_at' => date('Y-m-d H:i:s')],
            ['department' => 'Retail BD', 'active' => 1, 'created_at' => date('Y-m-d H:i:s')],
            ['department' => 'Tech BD', 'active' => 1, 'created_at' => date('Y-m-d H:i:s')],
            ['department' => 'Admin', 'active' => 1, 'created_at' => date('Y-m-d H:i:s')],
            ['department' => 'Super Admin', 'active' => 1, 'created_at' => date('Y-m-d H:i:s')],
            ['department' => 'IPL BD', 'active' => 1, 'created_at' => date('Y-m-d H:i:s')],
        ]);
    }
}
