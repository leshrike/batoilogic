<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\provider;
use Illuminate\Http\Request;
use App\Http\Resources\providerResource;

class providerController extends Controller
{
    public function __construct(){
        
        $this->middleware('auth:sanctum',['except' => ['index', 'show']]);
    }
    
    public function index(){

        return providerResource::collection(provider::get());
    }

     /**
         * @OA\Get(
         * path="/api/provider",
         * summary="Gets all providers",
         * description="Obtains all providers that are stored in the database",
         * operationId="getProviders",
         * tags={"providers"},
         * 
         * 
         * @OA\Response(
         *      response=200,
         *      description="Success",
         *      @OA\JsonContent(ref="#/components/schemas/providerResource"),
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


    public function store(Request $request)
    {
        $provider = new provider();
        $provider->name = $request->name;
        $path = $request->logo;
        $provider->logo = $path;
        $provider->email = $request->email;
        $provider->phone = $request->phone;
        
        try{
            $provider->save();
            return response()->json($provider,201);
        }catch (QueryException $e){
            
            return response()->json(['error'=>$e->getMessage()],400);
        }
    }

    /**
         * @OA\Post(
         * path="/api/provider",
         * summary="Add a provider",
         * description="Store a new provider in the database",
         * operationId="postprovider",
         * tags={"providers"},
         * security={ { "apiAuth": {}  }},
         * @OA\RequestBody(
         *    required=true,
         *    description="Posting a provider",
         *    @OA\JsonContent(ref="#/components/schemas/providerResource"),
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

    public function show(provider $provider)
    {
        return response()->json($provider,200);
    }

    /**
         * @OA\Get(
         * path="/api/provider/{id}",
         * summary="Show a provider",
         * description="Show a provider stored in the database",
         * operationId="showProvider",
         * tags={"providers"},
         * @OA\RequestBody(
         *    required=true,
         *    description="Posting a provider",
         *    @OA\JsonContent(
         *       required={"id"},
         *       @OA\Property()
         *    ),
         * ),
         * 
         * @OA\Response(
         *      response=201,
         *      description="Success",
         *      @OA\JsonContent(ref="#/components/schemas/providerResource")),
         *      
         * ),
         * 
         *)
        */

    public function update(Request $request, provider $provider)
    {
        $provider->name = $request->name;
        $path = $request->logo;
        $provider->logo = $path;
        $provider->email = $request->email;
        $provider->phone = $request->phone;
        
            try {
              
                $provider->save();
                return response()->json($provider, 200);

            }catch (QueryException $e){
                
                return response()->json(['error'=>$e->getMessage()],400);
            }

        }

        /**
         * @OA\Put(
         * path="/api/provider/{id}",
         * summary="Edits a provider",
         * description="Overwrites a provider stored in the database",
         * operationId="updateProvider",
         * tags={"providers"},
         * 
         * 
         * @OA\Response(
         *      response=200,
         *      description="Success",
         *      @OA\JsonContent(ref="#/components/schemas/providerResource"),
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

    public function destroy(provider $provider)
    {
        $provider->delete();

        return response()->json(null,204);
    }

     /**
         * @OA\Delete(
         * path="/api/provider/{id}",
         * summary="Deletes an provider",
         * description="Deletes a provider stored in the database",
         * operationId="deletesprovider",
         * tags={"providers"},
         * 
         * @OA\Response(
         *      response=204,
         *      description="Success",
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
}
