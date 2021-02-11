<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\User;
use App\Models\state;
use App\Models\orderline;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function index(){
        
        $orders = order::all();
        $users = User::all();
        $states = state::all();

        return view('order.index',compact('orders','users','states'));
    }

    public function create(){
       //
    }

    public function store(Request $request){
        //
    }

    public function show($id){
        $order = order::findOrFail($id);
        $orderlines = orderline::find($order->id,'order_id');
        return view('order.show',compact('order','orderlines'));
    }

    public function edit($id){
        //
    }

    public function update(Request $request,$id){
        //
    }

    public function destroy($id){
       order::where('id',$id)->delete();
       return redirect('/pedidos');
    }
}
