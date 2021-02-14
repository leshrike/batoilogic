<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\state;

/**
 *
 * @OA\Schema(
 * 
 * required={"id,title"},
 * @OA\Xml(name="order"),
 * @OA\Property(property="id", type="integer", readOnly="true", example="1"),
 * @OA\Property(property="dealer_id", type="string", readOnly="true", example="6"),
 * @OA\Property(property="client_id", type="string", readOnly="true", example="5"),
 * @OA\Property(property="state_id", type="string", readOnly="true", example="1"),
 * @OA\Property(property="title", type="date", readOnly="true", description="Date expected for the package to arrive", example="2000-04-12"),
 * @OA\Property(property="order", type="integer", readOnly="true",  description="Order that determines wich order will be delivered first", example="6"),
 *
 * )
 * 
 * Class order
 * 
 */



class order extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function dealer(){

        return $this->belongsTo('\App\Models\User');
    }

    public function client(){
        
        return $this->belongsTo('\App\Models\User');
    }

    public function ordeline(){

        return $this->hasMany('\App\Models\orderline');
    }

    public function state(){

        return $this->belongsTo('\App\Models\state');
    }
}
