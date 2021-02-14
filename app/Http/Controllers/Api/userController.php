<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{

    public function index()
    {
        $users = user::get();
        return $users;
    }

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

    public function show(User $user)
    {  
       return response()->json($user,200);
    }

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

    public function destroy(User $user)
    {
       $user->delete();

       return response()->json(null,204);
    }
}
