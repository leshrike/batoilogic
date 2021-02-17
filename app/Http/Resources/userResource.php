<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Model\User;

    /** 
     * @OA\Schema(
     *      title="userResource",
     *      description="recurso del proyecto",
     *      @OA\Xml(name="userResource"),
     * )
    */

class userResource extends JsonResource
{

    
    /**
     * @OA\Property(
     *  property="data",
     *  title="data",
     *  description="Data Wraper",
     * )
     * 
     * @var \App\Models\User[]
     */
    public function toArray($request)
    {
       return[

        'id' => $this->id,
        'name' => $this->name,
        'email' => $this->email,
        'password' => $this->password,
        'role' => $this->role,
        'remember_token' => $this->remember_token,
        'profile_photo_path'=>$this->profile_photo_path,
        'address' => $this->address,

       ];
    }
}
