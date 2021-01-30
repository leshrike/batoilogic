<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            /*Campos de Usuario
            
            CAMBIOS:(ejemplos prácticos en la documentación)

                - El rol definirá si el usuario es repartidor, administrador o usuario.
                - Los usuarios podrán tener más de una dirección. 
                - Una misma dirección podrá ser asignada a más de un usuario.
                - Una direccion puede tener asignado un numero de teléfono.

            */

            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role',['admin','dealer','user']);
            
            /* Campos de Autenticación */ 
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
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
        Schema::dropIfExists('users');
    }
}
