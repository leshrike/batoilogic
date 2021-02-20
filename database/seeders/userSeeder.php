<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\orderlines;
use \App\Models\User;
use Illuminate\Support\Str;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            'name' => "admin",
            'email' => "admin@batoilogic.com",
            'email_verified_at' => now(),
            'password' => bcrypt('1234'), // password
            'remember_token' => Str::random(10),
            'role'=>"admin",
        ];

        $dealer =[ 
            'name' => "dealer",
            'email' => "dealer@batoilogic.com",
            'email_verified_at' => now(),
            'password' => bcrypt('1234'), // password
            'remember_token' => Str::random(10),
            'role'=>"dealer",
        ];
        
        User::create($admin);
        User::create($dealer);
        User::factory()->count(10)->create();
       
    }
}
