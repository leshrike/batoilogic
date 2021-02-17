<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\provider;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function index(){
        $products = product::all();
        return view('products.index',compact('products'));
    }

    public function create(){
        return view('products.create',compact('proveedor'));
    }

    public function store(Request $request){
        
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->active = $request->active;
        $product->photo = $request->photo->storeAs('images',$request->photo->getClientOriginalName(),'public');
        $product->id_provider = $request->photo->id_provider;
        
        $product()->save();
        return redirect('/productos');
    }

    public function show($id){
        $product = product::findOrFail($id);
        $proveedor = provider::find($product->provider_id);
        return view('products.show',compact('product','proveedor'));
    }

    public function edit($id){
        $product = product::findOrFail($id);
        $proveedores = provider::all();
        return view('products.edit',compact('product','proveedores'));
    }

    public function update(Request $request,$id){
        $product = product::findOrFail($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->active = $request->active;
        $product->photo = $request->photo->storeAs('images',$request->photo->getClientOriginalName(),'public');
        $product->save();
        $proveedor = provider::find($product->provider_id);
        return redirect('/productos/'.$id);

    }

    public function destroy($id){
       product::where('id',$id)->delete();
       return redirect('/productos');
    }
}
