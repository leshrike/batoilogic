<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\product;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        product::factory()->count(10)->create();
    }
}
