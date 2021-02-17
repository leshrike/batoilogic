<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

    /** 
     * @OA\Schema(
     *      title="orderlineResource",
     *      description="recurso del proyecto -- orderline",
     *      @OA\Xml(name="orderlineResource"),
     * )
    */

class orderlineResource extends JsonResource
{

    /**
     * @OA\Property(
     *  property="data",
     *  title="data",
     *  description="Data Wraper",
     * )
     * 
     * @var \App\Models\orderline[]
     */
    public function toArray($request)
    {
        return[

            'id'=>$this->id,
            'product_id'=>$this->product->name,
            'order_id'=>$this->order_id,
            'quantity'=>$this->quantity,

        ];
    }
}
