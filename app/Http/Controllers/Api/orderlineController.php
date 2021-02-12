<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\orderline;
use Illuminate\Http\Request;

class orderlineController extends Controller
{
    public function index()
    {
        $orderlines = orderline::get();
        return $orderlines;
    }

    public function store(Request $request)
    {
        $orderline = new orderline();

        $orderline->order_id = $request->order_id;
        $orderline->product_id = $request->product_id;
        $orderline->quantity = $request->quantity;

        $orderline->save();
        return response()->json($orderline,201);
    }

    public function show(orderline $orderline)
    {
        return response()->json($orderline,200);
    }

    public function update(Request $request, orderline $orderline)
    {
        $orderline->order_id = $request->order_id;
        $orderline->order_id = $request->order_id;
        $orderline->order_id = $request->order_id;

        $orderline->save();
        return response()->json($orderline,200);
    }

    public function destroy(orderline $orderline)
    {
        $orderline->destroy();
        return response()->json(null,204);
    }
}
