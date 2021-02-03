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
        $pedido = order::find($product->order_id);
        $orderline = orderline::all();
        $user = User::all();
        $address= User::all();
        $productos= product::all();
        return view('order.create',compact('pedido','orderline','user','address','productos'));
    }

    public function store(Request $request){
        
        $order = new order();

        $order->dealer_id = User::inRandomOrder()->where('role','dealer')->value('id');
        $order->client_id = $request->client_id;
        $order->order = $request->order;
        $order->state_id = 0;
        
        $order()->save();
        return redirect('/pedidos');
    }

    public function show($id){
        $order = order::findOrFail($id);
        $cliente = User::find($id);
        $orderlines = orderline::where('order_id',$id);
        return view('order.show',compact('order','cliente','orderlines'));
    }

    public function edit($id){
        $order = order::findOrFail($id);
        $cliente = User::all();
        $productos = product::all();
        return view('products.edit',compact('order','cliente','productos'));
    }

    public function update(Request $request,$id){
        $order = order::findOrFail($id);
        
        $order($id)->dealer_id = $request->dealer_id;
        $order($id)->client_id = $request->client_id;
        $order($id)->order = $request->order;
        $order($id)->state_id = $request->state_id;
        $order()->save();
        
        $proveedor = provider::find($product->provider_id);
        return redirect('/pedidos/{id}',compact('order'));

    }

    public function destroy(id $id){
       order::where('id',$id)->delete();
       return redirect('/productos');
    }
}
