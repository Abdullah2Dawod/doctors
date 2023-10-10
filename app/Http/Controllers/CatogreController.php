<?php

namespace App\Http\Controllers;

use App\Models\catogre;
use Illuminate\Http\Request;

class CatogreController extends Controller
{

    public function index()
    {
        $catogre = catogre::paginate(10);
       return view('catogre.create', compact('catogre'));


    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:25',
            ]);

        $catogre = new catogre;
        $catogre->name = $request->name;

        if($request->image ) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('image'), $imageName);
            $catogre->image = $imageName;
        }

        $catogre->save();
        return redirect()->back()->with('create-catog' , 'تم إضافة تخصص بنجاح')->with('type' , 'success');;
    }


    public function edit(catogre $catogre , $id)
    {
        $catogreer = catogre::find($id);
        return view('catogre.edit', compact('catogreer'));

    }


    public function update(Request $request, catogre $catogre , $id)
    {

        $request->validate([
            'name' => 'required|string|max:25',
            ]);


        $catogre = catogre::find($id);
        $catogre->name = $request->name;

        if($request->image ) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('image'), $imageName);
            $catogre->image = $imageName;
        }

        $catogre->save();
        return redirect()->Route('create.catogre')->with('create-catog' , 'تم تحديث البيانات بنجاح .')->with('type' , 'success');;
    }


    public function destroy(catogre $catogre , $id)
    {
        catogre ::destroy($id);
       return redirect()->back();
    }
}
