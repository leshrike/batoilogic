<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        $user = new user();

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->role = $request->role;

        $user()->save();
        return redirect('/');
    }

    public function show(User $user){
        //
    }

    public function edit(User $user){
        //
    }

    public function destroy(User $user){
        //
    }
}
