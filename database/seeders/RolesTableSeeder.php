<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'role_name' => 'Retail BD Head',
            'role_slug' => 'Retail BD Head',
        ]);

        DB::table('roles')->insert([
            'role_name' => 'IPL BD Head',
            'role_slug' => 'IPL BD Head',
        ]);

        DB::table('roles')->insert([
            'role_name' => 'Tech BD Head',
            'role_slug' => 'Tech BD Head',
        ]);
        DB::table('roles')->insert([
            'role_name' => 'Retail BD',
            'role_slug' => 'Retail BD',
        ]);
        DB::table('roles')->insert([
            'role_name' => 'Tech BD',
            'role_slug' => 'Tech BD',
        ]);
        DB::table('roles')->insert([
            'role_name' => 'Admin',
            'role_slug' => 'Admin',
        ]);
        DB::table('roles')->insert([
            'role_name' => 'Super Admin',
            'role_slug' => 'Super Admin',
        ]);
        DB::table('roles')->insert([
            'role_name' => 'IPL BD',
            'role_slug' => 'manager',
        ]);
    }
}
