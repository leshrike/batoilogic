<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\product;
use \App\Models\provider;

class productFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            
            'provider_id'=> provider::inRandomOrder()->value('id'),
            'name'=>$this->faker->word(),
            'description'=>$this->faker->realText(200),
            'price'=>$this->faker->numberBetween(2,200),
            'stock'=>$this->faker->numberBetween(0,100),
            'active'=>$this->faker->randomElement([true,false]),
            'photo'=>"/images/640.png",
        ];
    }
}
