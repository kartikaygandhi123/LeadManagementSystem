<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndustriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('industries')->insert([
            ['name' => 'Automotive', 'created_at' => date('Y-m-d H:i:s')],
            // ['name' => 'Car Rental', 'created_at' => date('Y-m-d H:i:s')],
            // ['name' => 'DirectSelling', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'E-commerce', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Engineering', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Fashion & Lifestyle', 'created_at' => date('Y-m-d H:i:s')],
            // ['name' => 'Finance', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'FMCG', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'FMCD', 'created_at' => date('Y-m-d H:i:s')],
            //['name' => 'Food & Beverages', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Health & Personal Care', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Heavy Machinery/Construction', 'created_at' => date('Y-m-d H:i:s')],
            //['name' => 'Home Service', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Information Technology', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Logistics', 'created_at' => date('Y-m-d H:i:s')],
            //['name' => 'Luxury', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Manufacturing', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Others', 'created_at' => date('Y-m-d H:i:s')],
            //['name' => 'Petroleum', 'created_at' => date('Y-m-d H:i:s')],
            //['name' => 'Power', 'created_at' => date('Y-m-d H:i:s')],
            // ['name' => 'White & Brown Goods', 'created_at' => date('Y-m-d H:i:s')],
        ]);
    }
}
