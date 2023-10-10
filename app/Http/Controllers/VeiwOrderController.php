<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\VeiwOrder;
use Illuminate\Http\Request;

class VeiwOrderController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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

        $request->validate([
            'name' => 'required|string|max:25',
            'mobaile' => 'required|digits_between:9,14|numeric',
            'history' => 'required|date|after:tomorrow',


        ]);

        $order = new order();
        $order->name = $request->name;
        $order->mobaile = $request->mobaile;
        $order->history = $request->history;

        $order->save();
        return redirect()->back()->with('order-doctor' , 'تم حجز موعد بنجاح , نتمنى السلامة لك')->with('type' , 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VeiwOrder  $veiwOrder
     * @return \Illuminate\Http\Response
     */
    public function show(VeiwOrder $veiwOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VeiwOrder  $veiwOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(VeiwOrder $veiwOrder , $id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VeiwOrder  $veiwOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VeiwOrder $veiwOrder)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VeiwOrder  $veiwOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(VeiwOrder $veiwOrder)
    {
        //
    }
}
