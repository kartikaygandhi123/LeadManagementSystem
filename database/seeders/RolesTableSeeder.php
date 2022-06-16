<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        	['role' => 'administrator', 'created_at' => date('Y-m-d H:i:s')],
        	['role' => 'standard', 'created_at' => date('Y-m-d H:i:s')],
            ['role' => 'superadmin', 'created_at' => date('Y-m-d H:i:s')],
            ['role' => 'lob_head', 'created_at' => date('Y-m-d H:i:s')],
            ['role' => 'ipl_head', 'created_at' => date('Y-m-d H:i:s')],
            ['role' => 'lob_bd', 'created_at' => date('Y-m-d H:i:s')],
            ['role' => 'ipl_bd', 'created_at' => date('Y-m-d H:i:s')]

        ]);
    }
}
