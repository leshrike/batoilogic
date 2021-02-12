<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\state;
use Illuminate\Http\Request;

class stateController extends Controller
{

    public function index()
    {
        $states = states::get();
        return $states;
    }
}
