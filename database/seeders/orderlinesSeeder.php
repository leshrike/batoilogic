<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\orderline;

class orderlinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    
    public function run()
    {
        orderline::factory()->create();
    }
}
