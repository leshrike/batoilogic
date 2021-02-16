<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\order;
use Illuminate\Http\Request;
use App\Http\Resources\orderResource;

class orderController extends Controller
{

    public function __construct(){
        
        $this->middleware('auth:sanctum',['except' => ['index', 'show']]);
    }

    public function index()
    {
        return orderResource::collection(order::get());
    }

        /**
         * @OA\Get(
         * path="/api/order",
         * summary="Gets all orders",
         * description="Obtains all orders that are stored in the database",
         * operationId="getOrders",
         * tags={"orders"},
         * 
         * 
         * @OA\Response(
         *      response=200,
         *      description="Success",
         *      @OA\JsonContent(ref="#/components/schemas/order"),
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
        $order = new order();
        $order->dealer_id = $request->dealer_id;
        $order->client_id = $request->client_id;
        $order->state_id = $request->state_id;
        $order->order = $request->order;
        $order->delivery_date = $request->delivery_date;

        try{
            $order->save();
            return response()->json($order,201);
        }catch (QueryException $e){
                
            return response()->json(['error'=>$e->getMessage()],400);

        }
    }

        /**
         * @OA\Post(
         * path="/api/order",
         * summary="Add an order",
         * description="Store a new order in the database",
         * operationId="postOrder",
         * tags={"orders"},
         * security={ { "apiAuth": {}  }},
         * @OA\RequestBody(
         *    required=true,
         *    description="Posting an order",
         *    @OA\JsonContent(ref="#/components/schemas/orderResource"),
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


    public function show(order $order){
        return response()->json($order,200);
    }

        /**
         * @OA\Get(
         * path="/api/order/{id}",
         * summary="Show an order",
         * description="Show an order stored in the database",
         * operationId="showOrder",
         * tags={"orders"},
         * @OA\RequestBody(
         *    required=true,
         *    description="Posting an order",
         *    @OA\JsonContent(
         *       required={"id"},
         *       @OA\Property()
         *    ),
         * ),
         * 
         * @OA\Response(
         *      response=201,
         *      description="Success",
         *      @OA\JsonContent(ref="#/components/schemas/orderResource")),
         *      
         * ),
         * 
         * @OA\Response(
         *      response=403,
         *      description="Forbidden",
         * ),
         * )
        */
    public function update(Request $request, order $order){
        $order->dealer_id=$request->dealer_id;
        $order->client_id=$request->client_id;
        $order->state_id=$request->state_id;
        $order->order=$request->order;
        $order->delivery_date=$request->delivery_date;

        try{
            $order->save();
            return response()->json($order,201);
        }catch (QueryException $e){
                
            return response()->json(['error'=>$e->getMessage()],400);

        }
    }

   
    public function destroy(order $order){
        $order->delete();
        response()->json(null,204);
    }
}
