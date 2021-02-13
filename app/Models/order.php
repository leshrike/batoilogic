<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\state;

class order extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function dealer(){

        return $this->belongsTo('\App\Models\User');
    }

    public function client(){
        
        return $this->belongsTo('\App\Models\User');
    }

    public function ordeline(){

        return $this->hasMany('\App\Models\orderline');
    }

    public function state(){

        return $this->hasOne('\App\Models\state');
    }
}
