<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Model\User;

class orderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
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
