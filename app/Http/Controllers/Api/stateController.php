<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\state;
use Illuminate\Http\Request;

class stateController extends Controller
{
    public function __construct(){
        
        $this->middleware('auth:sanctum',['except' => ['index', 'show']]);
    }
    
    public function index()
    {
        $states = state::get();
        return $states;
    }

    public function show(state $state)
    {
        return response()->json($state,200);
    }
}
