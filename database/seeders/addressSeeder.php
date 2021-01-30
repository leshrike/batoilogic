<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\address;

class addressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        address::factory()->count(3)->create();
    }
}
