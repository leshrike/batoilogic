<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index',compact('users'));
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

        $user->save();
        return redirect('/');
    }

    public function show($id){
        
        $user = User::findOrFail($id);
        return view('users.show',compact('user'));
    }

    public function edit(Request $request, $id){
        $user = User::findOrFail($id);
        
        return view('users.edit',compact('user'));
    }

    //al actualizar los usuarios, enviamos al usuario al home
    public function update(Request $request,$id){
        

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->save();
        return('/');
    }

    // eliminamos el usuario y lo enviamos al home de la app
    public function destroy(User $user){
        User::where('id',$id)->delete();

        return redirect('/');
    }
}
