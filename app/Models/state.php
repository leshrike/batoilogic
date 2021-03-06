<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\order;

/**
 *
 * @OA\Schema(
 * 
 * required={"id,text"},
 * @OA\Xml(name="states"),
 * @OA\Property(property="id", type="integer", readOnly="true", example="1"),
 * @OA\Property(property="text", type="string", readOnly="true", example="En ruta"),
 * )
 * 
 * Class order
 * 
 */

class state extends Model
{

    public $timestamps = false;
    
    public function product (){
        return $this->belongsTo('\App\Models\order');
    }
}
