<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('products',function (Blueprint $table){

        /*  CAMBIOS: (ejemplos practicos en la documentación)
            -Un producto debería poder estar disponible en uno o más proveedores.
                Para ello, y para mostrar el nombre de éste, incluiremos el campo provider_id.
        */
            $table->id();

            $table->unsignedBigInteger('provider_id')->unisgned();
            $table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade'); 
            //relacionamos esta tabla con la de proveedor,usando el id del proveedor

            $table->string('name');
            $table->string('description');
            $table->double('price');
            $table->integer('stock');
            $table->boolean('active')->default(true); //determina si un producto está activo o no
            $table->string('photo');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('products');
       $table->dropforeign('provider_id');
    }
}
