<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // if (app()->environment() == 'production') {
        // } else {
        $this->call([

            UsersTableSeeder::class,
            DepartmentTableSeeder::class,
            IndustriesTableSeeder::class,
            CitiesTableSeeder::class,
            LeadSourcesTableSeeder::class,
            DesignationsTableSeeder::class,
            BusinessLinesTableSeeder::class,
            LobServicesTableSeeder::class,
            StageTableSeeder::class,
            ContractDurationsTableSeeder::class,
            RolesTableSeeder::class,
            OrganizationsTableSeeder::class,

        ]);
    }
    // }
}
