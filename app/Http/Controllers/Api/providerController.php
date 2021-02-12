<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\provider;
use Illuminate\Http\Request;

class providerController extends Controller
{
    
    public function index()
    {
        $providers = provider::get();
        return $providers;
    }

    public function store(Request $request)
    {
        $provider = new provider();

        $provider->name = $request->name;
        $path = $request->logo->storeAs('images',$request->logo->getClientOriginalName(),'public');
        $provider->logo = $path;
        $provider->email = $request->email;
        $provider->phone = $request->phone;

        $provider()->save();
        return response()->json($provider,201);
    }

    public function show(provider $provider)
    {
        return response()->json($provider,200);
    }

    public function update(Request $request, provider $provider)
    {
        $provider->name = $request->name;
        $path = $request->logo->storeAs('images',$request->logo->getClientOriginalName(),'public');
        $provider->logo = $path;
        $provider->email = $request->email;
        $provider->phone = $request->phone;
        $provider->save();
        return response()->json($provider,200);
    }

    public function destroy(provider $provider)
    {
        $provider->delete();

        return response()->json(null,204);
    }
}
