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
        $product($id)->logo = $request->logo->storePubliclyAs('images','s3');
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
        
        $provider($id)->name = $request->name;
        $product($id)->logo = $request->logo->storePubliclyAs('images','s3');
        $provider($id)->email = $request->email;
        $provider($id)->phone = $request->phone;

        $provider()->save();
        return redirect('/proveedores/{id}');

    }

    public function destroy(id $id){
       provider::where('id',$id)->delete();
       return redirect('/proveedores');
    }




}
