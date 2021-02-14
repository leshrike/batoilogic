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
        $product = new product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->provider_id = $request->provider_id;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->active = $request->active;
        $path = $request->photo;
        $product->photo = $path;
            try {
                $product->save();
                return response()->json($product, 201);
            }catch (QueryException $e){
                
                return response()->json([$e->getMessage()],400);

            }
        
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
        $product->provider_id = $request->provider_id;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->active = $request->active;
        $path = $request->photo;
        $product->photo = $path;
            
        try {
                $product->save();
        
                return response()->json($product);
            }catch (QueryException $e){
            
                return response()->json(['error'=>$e->getMessage()],400);
    
            }
    }

    //eliminamos el producto que pasamos como parametro
    public function destroy(product $product)
    {
       $product->delete();
       return response()->json(null,204);
    }
}
