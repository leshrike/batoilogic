<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function orderline(){

        return $this->hasMany('\App\Models\orderline');
    }

    public function provider(){

        return $this->belongsToMany('\App\Models\provider');
    } 
}
