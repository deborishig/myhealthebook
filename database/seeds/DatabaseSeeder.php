<?php

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
        //Seed the countries
        $this->call('CountriesSeeder');
        $this->command->info('Seeded the countries!');

        // Role comes before User seeder here.
        $this->call(RoleTableSeeder::class);

        // User seeder will use the roles above created.
        $this->call(UserTableSeeder::class);
    }
}
