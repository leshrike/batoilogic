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
        $proveedor = provider::find($product->provider_id);
        return view('products.create',compact('proveedor'));
    }

    public function store(Request $request){
        
        $product = new Product();

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->active = $request->active;
        $product->photo = $request->photo->storePubliclyAs('images','s3');
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
        
        $product($id)->name = $request->name;
        $product($id)->logo = $request->logo;
        $product($id)->email = $request->email;
        $product($id)->phone = $request->phone;
        $product($id)->active = $request->active;
        $product($id)->photo = $request->photo->storePubliclyAs('images','s3');
        $product()->save();
        $proveedor = provider::find($product->provider_id);
        return redirect('/productos/{id}',compact('product','proveedor'));

    }

    public function destroy(id $id){
       product::where('id',$id)->delete();
       return redirect('/productos');
    }
}
