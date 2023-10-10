<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = order::paginate(8);
        return view('order.create', compact('order'));

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order , $id)
    {
        $order = order::find($id);
        return view('order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order , $id)
    {
        $request->validate([
            'name' => 'required|string|max:25',
            'mobaile' => 'required|digits_between:9,14|numeric',
            'history' => 'required|date|after:tomorrow',


        ]);

        $order = order::find($id);
        $order->name = $request->name;
        $order->mobaile = $request->mobaile;
        $order->history = $request->history;

        $order->save();
        return redirect()->route('create.order')->with('update-order' , 'تم التحديث على الحجوزات بنجاح')->with('type' , 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order, $id)
    {
        order ::destroy($id);
       return redirect()->back();
    }
}

