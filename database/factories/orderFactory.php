<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\state;
use \App\Models\order;
use Illuminate\Database\Eloquent\Factories\Factory;

class orderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'dealer_id'=> User::inRandomOrder()->value('id'),
            'client_id'=> User::inRandomOrder()->value('id'),
            'order'=>$this->faker->numberBetween(1,15),
            'state_id'=> state::inRandomOrder()->value('id'),
        ];
    }
}
