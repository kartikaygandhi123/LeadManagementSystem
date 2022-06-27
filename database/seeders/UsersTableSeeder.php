<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Retail BD Head',
            'email' => 'retailbdhead@gmail.com',
            'password' => bcrypt('pass@admin'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'IPL BD Head',
            'email' => 'iplbdhead@gmail.com',
            'password' => bcrypt('pass@admin'),
        ]);

        DB::table('users')->insert([
            'role_id' => '3',
            'name' => 'Tech BD Head',
            'email' => 'techbdhead@gmail.com',
            'password' => bcrypt('pass@admin'),
        ]);
        DB::table('users')->insert([
            'role_id' => '4',
            'name' => 'Retail BD',
            'email' => 'retailbd@gmail.com',
            'password' => bcrypt('pass@admin'),
        ]);
        DB::table('users')->insert([
            'role_id' => '5',
            'name' => 'Tech BD',
            'email' => 'techbd@gmail.com',
            'password' => bcrypt('pass@admin'),
        ]);
        DB::table('users')->insert([
            'role_id' => '6',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('pass@admin'),
        ]);
        DB::table('users')->insert([
            'role_id' => '7',
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('pass@admin'),
        ]);
        DB::table('users')->insert([
            'role_id' => '8',
            'name' => 'IPL BD',
            'email' => 'iplbd@gmail.com',
            'password' => bcrypt('pass@admin'),
        ]);
    }
}
