<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\state;
use Illuminate\Http\Request;
use App\Http\Resources\statesResource;

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

    /**
         * @OA\Get(
         * path="/api/states",
         * summary="Gets all states",
         * description="Obtains all states that are stored in the database",
         * operationId="getstates",
         * tags={"states"},
         * 
         * 
         * @OA\Response(
         *      response=200,
         *      description="Success",
         *      @OA\JsonContent(ref="#/components/schemas/state"),
         * ),
         * 
         * @OA\Response(
         *      response=403,
         *      description="Forbidden",
         * ),
         * 
         * @OA\Response(
         *      response=401,
         *      description="Unauthenticated",
         *      @OA\JsonContent(
         *          @OA\Property(
         *              property="error",
         *              type="string",
         *              example="The user has not been authenticated"))
         * ),
         * 
         * )
         */



    public function show(state $state)
    {
        return response()->json($state,200);
    }

    /**
         * @OA\Get(
         * path="/api/states/{id}",
         * summary="Show an state",
         * description="Show an state stored in the database",
         * operationId="showstate",
         * tags={"states"},
         * @OA\RequestBody(
         *    required=true,
         *    description="Posting an state",
         *    @OA\JsonContent(
         *       required={"id"},
         *       @OA\Property()
         *    ),
         * ),
         * 
         * @OA\Response(
         *      response=201,
         *      description="Success",
         *      @OA\JsonContent(ref="#/components/schemas/state")),
         *      
         * ),
         * )
        */
}
