<?php

namespace App\Http\Controllers;

use App\Models\provider;

use Illuminate\Http\Request;

class providerController extends Controller
{

    public function index(){
        
        $providers = provider::all();
        return view('providers.index',compact('providers'));
    }

    public function create(){
        
        return view('providers.create');
    }

    public function store(Request $request){
        
        $provider = new provider();

        $provider->name = $request->name;
        $path = $request->logo->storeAs('images',$request->logo->getClientOriginalName(),'public');
        $provider->logo = $path;
        $provider->email = $request->email;
        $provider->phone = $request->phone;

        $provider()->save();
        return redirect('/proveedores');
    }

    public function show($id){
        $provider = provider::findOrFail($id);
       
        return view('providers.show',compact('provider'));
    }

    public function edit($id){
        $provider = provider::findOrFail($id);
        return view('providers.edit',compact('provider'));
    }

    public function update(Request $request,$id){
        $provider = provider::findOrFail($id);
        
        $provider->name = $request->name;
        $path = $request->logo->storeAs('images',$request->logo->getClientOriginalName(),'public');
        $provider->logo = $path;
        $provider->email = $request->email;
        $provider->phone = $request->phone;
        $provider->save();
        return redirect('/proveedores/'.$id);

    }

    public function destroy(id $id){
       provider::where('id',$id)->delete();
       return redirect('/proveedores');
    }

    public function stocking($id){
        $provider = provider::findOrFail($id);
        return view('providers.stocking',compact('provider'));
    }

    public function stockUpdate(Request $request, $id){

        $fichero = file_get_contents($request->stock_file);

        $productos = json_decode($fichero,true);

        foreach($productos as $producto){

            $producto_id = $producto->id;
        }
    }

}
