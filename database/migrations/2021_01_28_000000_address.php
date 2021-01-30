<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class address extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address',function (Blueprint $table){

            /*Campos de Address
            
            CAMBIOS:(ejemplos prácticos en la documentación)

                - Los usuarios podrán tener más de una dirección. 
                - Una misma dirección podrá ser asignada a más de un usuario.
                - Una direccion puede tener asignado un numero de teléfono.
                - Los numeros de telefono pueden ser aplicados a direcciones.(ejemplo practico en la documentacion)
                - El campo door hace referencia al identificador de la casa en la vivienda (11-A, 14-D, 15 izquierda....)

            */
            $table->id();

            /*Datos del usuario -- teléfono, id de usuario y */
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
            
            $table->string('phone')->nullable();

           /*Direccion del usuario */
            $table->string('address');
            $table->string('floor')->nullable();
            $table->string('door')->nullable(); //El campo door hace referencia al identificador de la casa en la vivienda (11-A, 14-D, 15 izquierda....)

            /* Ciudad, región, país y codigo postal */
            $table->string('city');
            $table->string('zipcode');
            $table->string('state');
            $table->string('country');
            
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address');
        $table->dropforeign('user_id');
    }
}
