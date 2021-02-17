<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 * @OA\Schema(
 * 
 * required={"id,name,email,phone"},
 * @OA\Xml(name="provider"),
 * @OA\Property(property="id", type="integer", readOnly="true", example="1"),
 * 
 * @OA\Property(property="name", type="string", readOnly="true", example="6"),
 * 
 * @OA\Property(property="logo", type="string", readOnly="true", description="Photo that is assigned as the provider's logo"),
 * 
 * @OA\Property(property="email", type="string", readOnly="true", example="1"),
 * 
 * @OA\Property(property="phone", type="string", readOnly="true", description="Phone assigned to the provider", example="606055814"),
 * )
 * 
 * Class order
 * 
 */

class provider extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function product (){
        return $this->hasMany('\App\Models\product');
    }
}
