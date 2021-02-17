<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 * @OA\Schema(
 * 
 * required={"id,name,description,price,stock,active,provider_id"},
 * @OA\Xml(name="product"),
 * @OA\Property(property="id", type="integer", readOnly="true", example="1"),
 * @OA\Property(property="provider_id", type="string", readOnly="true", example="6"),
 * @OA\Property(property="name", type="string", readOnly="true", example="5"),
 * @OA\Property(property="description", type="string", readOnly="true", example="1"),
 * @OA\Property(property="price", type="date", readOnly="true", description="Date expected for the package to arrive", example="2000-04-12"),
 * @OA\Property(property="stock", type="integer", readOnly="true",  description="Amount of items that are available in the storage", example="6"),
 * @OA\Property(property="active", type="integer", readOnly="true",  description="Shows if an article is active or not. 1 stands for active, 0 stands for inactive", example="6"),
 * @OA\Property(property="photo", type="integer", readOnly="true",  description="This field is nullable. Here we will find the photo linked to a certain prouct", example="6"),
 *
 * )
 * 
 * Class product
 * 
 */


class product extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function orderline(){

        return $this->hasMany('\App\Models\orderline');
    }

    public function provider(){

        return $this->belongsToMany('\App\Models\provider');
    } 
}
