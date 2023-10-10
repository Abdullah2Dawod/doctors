<?php

namespace App\Http\Controllers;

use App\Models\guidance;
use App\Models\VeiwInstr;
use Illuminate\Http\Request;

class VeiwInstrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guidance = guidance::paginate(8);
        return view('web-navbar.instruct', compact('guidance'));

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
     * @param  \App\Models\VeiwInstr  $veiwInstr
     * @return \Illuminate\Http\Response
     */
    public function show(VeiwInstr $veiwInstr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VeiwInstr  $veiwInstr
     * @return \Illuminate\Http\Response
     */
    public function edit(VeiwInstr $veiwInstr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VeiwInstr  $veiwInstr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VeiwInstr $veiwInstr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VeiwInstr  $veiwInstr
     * @return \Illuminate\Http\Response
     */
    public function destroy(VeiwInstr $veiwInstr)
    {
        //
    }
}
