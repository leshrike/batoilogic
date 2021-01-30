<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\order;

class ordersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        order::factory()->count(5)->create();
    }
}
