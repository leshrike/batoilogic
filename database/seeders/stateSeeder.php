<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  \App\Models\state;

class stateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $n = 0;
        while($n<7){

            $state = new state();

            switch($n){
            
            case 0:
                $state->text="En preparacion";
                $state->save();
                break;

            case 1:
                $state->text="En ruta";
                $state->save();
                break;

            case 2:
                $state->text="Entregado";
                $state->save();
                break;

            case 3:
                $state->text="No entregado.";
                $state->save();
                break;

            case 4:
                $state->text="No entregado.Receptor ausente";
                $state->save();
                break;

            case 5:
                $state->text="No entregado.Direccion incorrecta";
                $state->save();
                break;
            }
            $n = $n+1;
        }
    }
}