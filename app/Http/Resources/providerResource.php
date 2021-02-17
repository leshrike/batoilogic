<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Model\User;

/** 
     * @OA\Schema(
     *      title="providerResource",
     *      description="recurso del proyecto, proveedor",
     *      @OA\Xml(name="providerResource"),
     * )
    */

class providerResource extends JsonResource
{
    /**
     * @OA\Property(
     *  property="data",
     *  title="data",
     *  description="Data Wraper",
     * )
     * 
     * @var \App\Models\provider[]
     */
    public function toArray($request)
    {
        return [

            'id'=>$this->id,
            'name'=>$this->name,
            'logo'=>$this->logo,
            'email'=>$this->email,
            'phone'=>$this->phone,
        ];
    }
}
