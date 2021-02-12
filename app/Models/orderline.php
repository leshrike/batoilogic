<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderline extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function product(){

        return $this->belongsTo('\App\Models\product');
    }

    public function order(){

        return $this->belongsToMany('\App\Models\order');
    }
}
