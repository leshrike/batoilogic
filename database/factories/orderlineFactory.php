<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\order;
use \App\Models\orderline;
use \App\Models\product;


class orderlineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = orderline::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //Seleccionaremos cualquier id resultante de la ejecucion de la factoria cuando creemos nuestra order line

            'order_id'=> order::inRandomOrder()->value('id'),
            'product_id'=> product::inRandomOrder()->value('id'),
            'quantity'=>$this->faker->numberBetween(1,9),

        ];
    }
}
