<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\order;
use \App\Models\orderline;

class ordersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        order::factory()->count(15)->create();
        $orders = order::all();
        
        /* Creamos 2 lineas por cada pedido */

        $orders->each(function($order){
            orderline::factory()->count(2)->create([
                'order_id' => $order->id]);
        });
    }
}
