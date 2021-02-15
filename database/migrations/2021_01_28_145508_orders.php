<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders',function (Blueprint $table){

            /* Campos de los Pedidos // Orders
            
                - Con finalidad de comprender mejor nuestro código, hemos renombrado la tabla orders a deliveries
                - Dudas en los estados del producto, no sabemos si hacer tabla exclusiva para ellos o no
                - El campo order solo se necesitará para la app del repartidor

            */

            $table->id();

            $table->unsignedBigInteger('dealer_id')->unsigned();
            $table->unsignedBigInteger('client_id')->unsigned();
            $table->unsignedBigInteger('state_id')->unsigned();
            $table->Date('delivery_date');


            $table->foreign('dealer_id')->references('id')->on('users')->onDelete('cascade'); 
            $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
           
            $table->smallinteger('order'); // se refiere al orden de entrega del producto
            
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
     Schema::dropIfExists('orders');
     $table->dropforeign('user_dealer_id_foreign');
     $table->dropforeign('user_client_id_foreign');
     $table->dropforeign('states_state_id_foreign');

    }
}
