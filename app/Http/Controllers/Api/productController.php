<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Resources\productResource;

class productController extends Controller
{
    public function __construct(){
        
        $this->middleware('auth:sanctum',['except' => ['index', 'show']]);
    }
    
    //mostramos todos los productos
    public function index()
    {
        $products = product::get();
        return $products;
    }

     /**
         * @OA\Get(
         * path="/api/products",
         * summary="Gets all products",
         * description="Obtains all products that are stored in the database",
         * operationId="getProducts",
         * tags={"products"},
         * 
         * 
         * @OA\Response(
         *      response=200,
         *      description="Success",
         *      @OA\JsonContent(ref="#/components/schemas/product"),
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

    //guardamos el producto que pasamos como parametro
    public function store(Request $request)
    {
        $product = new product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->provider_id = $request->provider_id;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->active = $request->active;
        $path = $request->photo;
        $product->photo = $path;
            try {
                $product->save();
                return response()->json($product, 201);
            }catch (QueryException $e){
                
                return response()->json([$e->getMessage()],400);

            }
        
        }

        /**
         * @OA\Post(
         * path="/api/products",
         * summary="Add an product",
         * description="Store a new product in the database",
         * operationId="postproduct",
         * tags={"products"},
         * security={ { "apiAuth": {}  }},
         * @OA\RequestBody(
         *    required=true,
         *    description="Posting an product",
         *    @OA\JsonContent(ref="#/components/schemas/productResource"),
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


    //mostramos el producto que pasamos como parametro
    public function show(product $product)
    {
        return response()->json($product, 200);
    }


    /**
         * @OA\Get(
         * path="/api/products/{id}",
         * summary="Show a product",
         * description="Show a product stored in the database",
         * operationId="showproduct",
         * tags={"products"},
         * @OA\RequestBody(
         *    required=true,
         *    description="Posting an product",
         *    @OA\JsonContent(
         *       required={"id"},
         *       @OA\Property()
         *    ),
         * ),
         * 
         * @OA\Response(
         *      response=201,
         *      description="Success",
         *      @OA\JsonContent(ref="#/components/schemas/productResource")),
         *      
         * ),
         * )
        */

    //editamos el producto que pasamos como parametro
    public function update(Request $request, product $product)
    {
        $product->name = $request->name;
        $product->description = $request->description;
        $product->provider_id = $request->provider_id;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->active = $request->active;
        $path = $request->photo;
        $product->photo = $path;
            
        try {
                $product->save();
        
                return response()->json($product);
            }catch (QueryException $e){
            
                return response()->json(['error'=>$e->getMessage()],400);
    
            }
    }
    /**
         * @OA\Put(
         * path="/api/products/{id}",
         * summary="Edits a product",
         * description="Overwrites a product stored in the database",
         * operationId="updateproduct",
         * security={ { "apiAuth": {}  }},
         * tags={"products"},
         * 
         * 
         * @OA\Response(
         *      response=200,
         *      description="Success",
         *      @OA\JsonContent(ref="#/components/schemas/productResource"),
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
    

    //eliminamos el producto que pasamos como parametro
    public function destroy(product $product)
    {
       $product->delete();
       return response()->json(null,204);
    }

    /**
         * @OA\Delete(
         * path="/api/products/{id}",
         * summary="Deletes a product",
         * description="Deletes a product stored in the database",
         * operationId="deletesproduct",
         * security={ { "apiAuth": {}  }},
         * tags={"products"},
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
