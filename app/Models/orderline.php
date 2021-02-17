<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 *
 * @OA\Schema(
 * 
 * required={"id,product_id,quantity,order_id"},
 * @OA\Xml(name="orderline"),
 * @OA\Property(property="id", type="integer", readOnly="true", example="1"),
 * @OA\Property(property="product_id", type="string", readOnly="true", example="Iphone 11"),
 * @OA\Property(property="order_id", type="string", readOnly="true", example="1"),
 *  @OA\Property(property="quantity", type="integer", readOnly="true", example="5"),
 * )
 * 
 * Class orderline
 * 
 */

class orderline extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function product(){

        return $this->belongsTo('\App\Models\product');
    }

    public function order(){

        return $this->belongsToMany('\App\Models\order');
    }
}
