<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\orderline;
use Illuminate\Http\Request;

class orderlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\orderline  $orderline
     * @return \Illuminate\Http\Response
     */
    public function show(orderline $orderline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\orderline  $orderline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, orderline $orderline)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\orderline  $orderline
     * @return \Illuminate\Http\Response
     */
    public function destroy(orderline $orderline)
    {
        //
    }
}
