<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\provider;

class providerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public $timestamps = false;
    
    public function run()
    {
        provider::factory()->count(10)->create();
    }
}
