<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\order;

class state extends Model
{

    public $timestamps = false;
    
    public function product (){
        return $this->belongsTo('\App\Models\order');
    }
}
