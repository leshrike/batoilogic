<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\orderline;
use Illuminate\Http\Request;

class orderlineController extends Controller
{
    public function __construct(){
        
        $this->middleware('auth:sanctum',['except' => ['index', 'show']]);
    }
    
    public function index(){
        return orderlineResource::collection(orderline::get());
    }

    /**
         * @OA\Get(
         * path="/api/orderline",
         * summary="Gets all orderlines",
         * description="Obtains all orderlines that are stored in the database",
         * operationId="getOrderlines",
         * tags={"orderlines"},
         * 
         * 
         * @OA\Response(
         *      response=200,
         *      description="Success",
         *      @OA\JsonContent(ref="#/components/schemas/orderline"),
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

    public function store(Request $request){
        $orderline = new orderline();

        $orderline->order_id = $request->order_id;
        $orderline->product_id = $request->product_id;
        $orderline->quantity = $request->quantity;
        try {
            
            $orderline->save();
            return response()->json($orderline, 201);
            
        }catch (QueryException $e){

            return response()->json(['error'=>$e->getMessage()],400);
        }
    }

    /**
         * @OA\Post(
         * path="/api/orderline",
         * summary="Add an orderline",
         * description="Store a new orderline in the database",
         * operationId="postOrderline",
         * tags={"orderlines"},
         * security={ { "apiAuth": {}  }},
         * @OA\RequestBody(
         *    required=true,
         *    description="Posting an orderline",
         *    @OA\JsonContent(ref="#/components/schemas/orderlineResource"),
         * ),
         * 
         * @OA\Response(
         *      response=201,
         *      description="Success",
         *      @OA\JsonContent(
         *      @OA\Property(property="message",type="string",example="Success"),
         *      ),
         * ),
         * 
         * @OA\Response(
         *      response=403,
         *      description="Forbidden",
         * ),
         * 
         * @OA\Response(
         *      response=400,
         *      description="Bad Request"
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
         * )
         */



    public function show(orderline $orderline){
        return response()->json($orderline,200);
    }

    /**
         * @OA\Get(
         * path="/api/orderline/{id}",
         * summary="Show an orderline",
         * description="Show an orderline stored in the database",
         * operationId="showOrderline",
         * tags={"orderlines"},
         * @OA\RequestBody(
         *    required=true,
         *    description="Posting an orderline",
         *    @OA\JsonContent(
         *       required={"id"},
         *       @OA\Property()
         *    ),
         * ),
         * 
         * @OA\Response(
         *      response=201,
         *      description="Success",
         *      @OA\JsonContent(ref="#/components/schemas/orderlineResource")),
         *      
         * ),
         * )
        */

    public function update(Request $request, orderline $orderline){
        $orderline->order_id = $request->order_id;
        $orderline->product_id = $request->product_id;
        $orderline->quantity = $request->quantity;
        try {
        
            $orderline->save();
            return response()->json($orderline, 200);
        
        }catch (QueryException $e){
            
            return response()->json(['error'=>$e->getMessage()],400);

        }
    }

    /**
         * @OA\Put(
         * path="/api/orderline/{id}",
         * summary="Edits an orderline",
         * description="Overwrites an orderline stored in the database",
         * operationId="updateOrderline",
         * tags={"orderlines"},
         * security={ { "apiAuth": {}  }},
         * 
         * 
         * @OA\Response(
         *      response=200,
         *      description="Success",
         *      @OA\JsonContent(ref="#/components/schemas/orderlineResource"),
         * ),
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


    public function destroy(orderline $orderline)
    {
        $orderline->delete();
        return response()->json(null,204);
    }

     /**
         * @OA\Delete(
         * path="/api/orderline/{id}",
         * summary="Deletes an orderline",
         * description="Deletes an orderline stored in the database",
         * operationId="deletesOrderline",
         * tags={"orderlines"},
         * security={ { "apiAuth": {}  }},
         * 
         * 
         * @OA\Response(
         *      response=204,
         *      description="Success",
         * ),
         * @OA\Response(
         *      response=401,
         *      description="Unauthenticated",
         *      @OA\JsonContent(
         *          @OA\Property(
         *              property="error",
         *              type="string",
         *              example="The user has not been authenticated"))
         * ),
         * )
         */
}
