<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    //mostramos todos los productos
    public function index()
    {
        $products = product::get();
        return $products;
    }

    //guardamos el producto que pasamos como parametro
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->active = $request->active;
        $path = $request->photo->storeAs('images',$request->photo->getClientOriginalName(),'public');
        $product->photo = $path;
        $product->id_provider = $request->photo->id_provider;
        $product()->save();  

        return response()->json($product,201);
    }

    //mostramos el producto que pasamos como parametro
    public function show(product $product)
    {
        return response()->json($product, 200);
    }

    //editamos el producto que pasamos como parametro
    public function update(Request $request, product $product)
    {
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->active = $request->active;
        $path = $request->photo->storeAs('images',$request->photo->getClientOriginalName(),'public');
        $product->photo = $path;
        $product->save();
        $proveedor = provider::find($product->provider_id);
       
        return response()->json($product);
    }

    //eliminamos el producto que pasamos como parametro
    public function destroy(product $product)
    {
       $product->delete();
       return response()->json(null,204);
    }

    // obtenemos un producto con  la ID obtenida como parametro
    public function getOne($id){
        $product = product::get($id);
        return $product;
    }
}
