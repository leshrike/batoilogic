<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

    /** 
     * @OA\Schema(
     *      title="prodcutResource",
     *      description="recurso del proyecto",
     *      @OA\Xml(name="productResource"),
     * )
    */

class productResource extends JsonResource
{
   /**
     * @OA\Property(
     *  property="data",
     *  title="data",
     *  description="Data Wraper",
     * )
     * 
     * @var \App\Models\product[]
     */

    public function toArray($request)
    {
     
        return [

            'id'=> $this->id,
            'provider_id' => $this->provider_id,
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'stock' => $this->stock,
            'active' => $this->active,
            'photo' => $this->photo,

        ];
    }
}
