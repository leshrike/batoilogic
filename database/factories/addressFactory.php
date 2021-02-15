<?php

namespace Database\Factories;

use App\Models\address;
use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\User;

class addressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() 
    {
        return [
            'user_id'=> User::inRandomOrder()->value('id'),
            'phone'=> $this->faker->phoneNumber(),
            'address'=>$this->faker->firstname(),
            'floor'=>$this->faker->numberBetween(1,9),
            'door'=>$this->faker->numberBetween(1,180),
            'address'=>$this->faker->address(),
            'zipcode'=>$this->faker->postcode(),
            'city'=>$this->faker->city(),
            'state'=>$this->faker->state(),
            'country'=>$this->faker->country(),
        ];
    }
}
