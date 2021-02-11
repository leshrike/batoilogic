<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\provider; 


class providerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = provider::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'name'=>$this->faker->name(),
            'logo'=>'/images/640.png',
            'email'=>$this->faker->unique()->safeEmail,
            'phone'=>$this->faker->phoneNumber(),
        ];
    }
}
