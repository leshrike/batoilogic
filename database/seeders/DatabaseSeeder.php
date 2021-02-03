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
        $this->call(userSeeder::class);
        $this->call(addressSeeder::class);
        $this->call(stateSeeder::class);
        $this->call(providerSeeder::class);
        $this->call(productSeeder::class);
        
        $this->call(ordersSeeder::class);
    }
}
