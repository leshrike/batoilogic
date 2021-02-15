<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Model\User;


    /** 
     * @OA\Schema(
     *      title="orderResource",
     *      description="recurso del proyecto",
     *      @OA\Xml(name="orderResource"),
     * )
    */

class orderResource extends JsonResource
{


    /**
     * @OA\Property(
     *  property="data",
     *  title="data",
     *  description="Data Wraper",
     * )
     * 
     * @var \App\Models\Movie[]
     */


    public function toArray($request)
    {
        return [
            
            'id' => $this->id,
            'dealer_id' => $this->dealer->name,
            'client_id' => $this->client->name,
            'state_id' =>$this->state->text,
            'delivery_date' => $this->delivery_date,
            'order' => $this->order,

        ];
    }
}

       