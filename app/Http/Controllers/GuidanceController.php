<?php

namespace App\Http\Controllers;

use App\Models\guidance;
use Illuminate\Http\Request;

class GuidanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $test = guidance::paginate(8);
        return view('guidance.create', compact('test'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'name' => 'required|string|max:30',
            'description1' => 'required|string|max:50',
            'description2' => 'required|string|max:50',
            'description3' => 'required|string|max:50',
            'description4' => 'required|string|max:50',
            'description5' => 'required|string|max:50',
            'description6' => 'required|string|max:50',
        ]);


        $guidance = new guidance;
        $guidance->name = $request->name;
        $guidance->description1 = $request->description1;
        $guidance->description2 = $request->description2;
        $guidance->description3 = $request->description3;
        $guidance->description4 = $request->description4;
        $guidance->description5 = $request->description5;
        $guidance->description6 = $request->description6;

        if($request->image ) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('guidance_imge'), $imageName);
            $guidance->image = $imageName;
        }

        $guidance->save();

        return redirect()->back()->with('create-ints' , 'تم إضافة الإرشادات بنجاح')->with('type' , 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\guidance  $guidance
     * @return \Illuminate\Http\Response
     */
    public function show(guidance $guidance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\guidance  $guidance
     * @return \Illuminate\Http\Response
     */
    public function edit(guidance $guidance , $id)
    {
        $guidancee = guidance::find($id);
        return view('guidance.edit', compact('guidancee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\guidance  $guidance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, guidance $guidance ,$id)
    {

        $request->validate([
        'name' => 'required|string|max:30',
        'description1' => 'required|string|max:50',
        'description2' => 'required|string|max:50',
        'description3' => 'required|string|max:50',
        'description4' => 'required|string|max:50',
        'description5' => 'required|string|max:50',
        'description6' => 'required|string|max:50',
    ]);


        $guidance = guidance::find($id);
        $guidance->name = $request->name;
        $guidance->description1 = $request->description1;
        $guidance->description2 = $request->description2;
        $guidance->description3 = $request->description3;
        $guidance->description4 = $request->description4;
        $guidance->description5 = $request->description5;
        $guidance->description6 = $request->description6;

        if($request->image ) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('guidance_imge'), $imageName);
            $guidance->image = $imageName;
        }

        $guidance->save();
        return redirect()->Route('create.guidance')->with('create-update' , 'تم تحديث الإرشادات بنجاح')->with('type' , 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\guidance  $guidance
     * @return \Illuminate\Http\Response
     */
    public function destroy(guidance $guidance , $id)
    {
        guidance::destroy($id);
        return redirect()->back();
    }
}
