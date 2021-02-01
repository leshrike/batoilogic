<?php

namespace App\Http\Controllers;

use App\Models\order;

use Illuminate\Http\Request;

class orderController extends Controller
{
    public function index(){
        
        // $orders = order::paginate(5);

        // return view('order.index',compact('orders'));
    }

    public function create(){
        //
    }

    public function store(Request $request){
        //
    }

    public function show(order $order){
        //
    }

    public function edit(order $order){
        //
    }

    public function destroy(order $order){
        //
    }
}
