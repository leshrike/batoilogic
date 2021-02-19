<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

/**
 * @OA\Post(
 * path="/login",
 * summary="Sign in",
 * description="Login by email, password",
 * operationId="authLogin",
 * tags={"auth"},
 * @OA\RequestBody(
 *    required=true,
 *    description="Pass user credentials",
 *    @OA\JsonContent(
 *       @OA\Property(property="user", type="object", ref="#/components/schemas/User"),
 *    ),
 * ),
 * @OA\Response(
 *    response=422,
 *    description="Wrong credentials response",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, wrong email address or password. Please try again"),
 *        ),
 *     ),
 *  ),
 * @OA\Response(
 *  response=200,
 *  description="Success",
 *  @OA\JsonContent(
 *      @OA\Property(property="user", type="object", ref="#/components/schemas/User"),
 *  ),
 * ),
 * 
 * )
 */

class LoginController extends Controller
{
    public function login(Request $request){
        $usuario = User::where('email', $request->login)->first();
        if (!$usuario || !Hash::check($request->password, $usuario->password))
        {
            return response()->json(['error' => 'Credenciales no válidas'], 401);
        }
        else
        {
            return response()->json(['token' => $usuario->createToken($usuario->email)->plainTextToken]);
        }
    }
}
