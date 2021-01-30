<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class providers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table){
            /* Campos de Proveedores
            CAMBIOS:(ejemplos prácticos en el CRUD y en la documentación)

                -La tabla ha sido representada vacía  por lo tanto añadiremos los campos que consideremos:

                    -id
                    -Logo
                    -Nombre
                    -Email
                    -Telefono
            */
            $table->id();
            $table->string('name');
            $table->string('logo');
            $table->string('email');
            $table->string('phone');

        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('providers');
    }
}
