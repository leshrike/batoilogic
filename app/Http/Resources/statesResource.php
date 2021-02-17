<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

    /** 
     * @OA\Schema(
     *      title="orderResource",
     *      description="recurso del proyecto",
     *      @OA\Xml(name="stateResource"),
     * )
    */

class statesResource extends JsonResource
{

    
    /**
     * @OA\Property(
     *  property="data",
     *  title="data",
     *  description="Data Wraper",
     * )
     * 
     * @var \App\Models\state[]
     */
    public function toArray($request)
    {
        return [

            'id'=> $this->id,
            'text'=> $this->text,
        ];
    }
}
