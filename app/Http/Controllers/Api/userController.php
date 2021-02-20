<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\userResource;

class userController extends Controller
{

    public function __construct(){
        
        $this->middleware('auth:sanctum',['except' => ['index', 'show']]);
    }
    
    public function index()
    {
        $users = User::get();
        return $users;
    }

    /**
         * @OA\Get(
         * path="/api/User",
         * summary="Gets all Users",
         * description="Obtains all Users that are stored in the database",
         * operationId="getUsers",
         * tags={"Users"},
         * 
         * 
         * @OA\Response(
         *      response=200,
         *      description="Success",
         *      @OA\JsonContent(ref="#/components/schemas/User"),
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
        $user = new user();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;

        try {
            $user->save();
            return response()->json($user, 201);
        } catch (QueryException $e){
            return response()->json(['error'=>$e->getMessage()], 400);
        }
    }

     /**
         * @OA\Post(
         * path="/api/User",
         * summary="Add a User",
         * description="Store a new User in the database",
         * operationId="postUser",
         * tags={"Users"},
         * security={ { "apiAuth": {}  }},
         * @OA\RequestBody(
         *    required=true,
         *    description="Posting a User",
         *    @OA\JsonContent(ref="#/components/schemas/userResource"),
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

    public function show($id)
    {   
        $user = User::findOrFail($id);
        return response()->json($user,200);
    }

    /**
         * @OA\Get(
         * path="/api/User/{id}",
         * summary="Show an User",
         * description="Show an User stored in the database",
         * operationId="showUser",
         * tags={"Users"},
         * @OA\RequestBody(
         *    required=true,
         *    description="Posting an User",
         *    @OA\JsonContent(
         *       required={"id"},
         *       @OA\Property()
         *    ),
         * ),
         * 
         * @OA\Response(
         *      response=201,
         *      description="Success",
         *      @OA\JsonContent(ref="#/components/schemas/userResource")),
         *      
         * ),
         * )
        */

    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        try {
            $user->save();
            return response()->json($user, 200);
        }catch (QueryException $e){
            
            return response()->json(['error'=>$e->getMessage()],400);
        }
    }

    /**
         * @OA\Put(
         * path="/api/User/{id}",
         * summary="Edits an user",
         * description="Overwrites an user stored in the database",
         * operationId="updateUser",
         * tags={"Users"},
         * security={ { "apiAuth": {}  }},
         * 
         * 
         * @OA\Response(
         *      response=200,
         *      description="Success",
         *      @OA\JsonContent(ref="#/components/schemas/userResource"),
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

    public function destroy(User $user)
    {
       $user->delete();

       return response()->json(null,204);
    }

      /**
         * @OA\Delete(
         * path="/api/User/{id}",
         * summary="Deletes an User",
         * description="Deletes an User stored in the database",
         * operationId="deletesUser",
         * tags={"Users"},
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
