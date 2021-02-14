<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\provider;
use Illuminate\Http\Request;

class providerController extends Controller
{
    public function __construct(){
        
        $this->middleware('auth:sanctum',['except' => ['index', 'show']]);
    }
    
    public function index(){

        $providers = provider::get();
        return $providers;
    }

    public function store(Request $request)
    {
        $provider = new provider();
        $provider->name = $request->name;
        $path = $request->logo;
        $provider->logo = $path;
        $provider->email = $request->email;
        $provider->phone = $request->phone;
        
        try{
            $provider->save();
            return response()->json($provider,201);
        }catch (QueryException $e){
            
            return response()->json(['error'=>$e->getMessage()],400);
        }
    }

    public function show(provider $provider)
    {
        return response()->json($provider,200);
    }

    public function update(Request $request, provider $provider)
    {
        $provider->name = $request->name;
        $path = $request->logo;
        $provider->logo = $path;
        $provider->email = $request->email;
        $provider->phone = $request->phone;
        
            try {
              
                $provider->save();
                return response()->json($provider, 200);

            }catch (QueryException $e){
                
                return response()->json(['error'=>$e->getMessage()],400);
            }

        }

    public function destroy(provider $provider)
    {
        $provider->delete();

        return response()->json(null,204);
    }
}
