<?php

namespace App\Http\Controllers;
use App\Models\doctor;
use App\Models\catogre;
use App\Models\VeiwCatogre;
use Illuminate\Http\Request;

class VeiwCatogreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $catogre = catogre::all();
        return view('web-navbar.doctor', compact('catogre'));


    }

    public function Teeth($id){
        $catogre = catogre::all();
        if($id == 1){
            $Teeth = doctor::where('catogre_id' , $id)->orderBy('id' , 'desc')->paginate(6);
            return view('web-doctors.teeth', compact('Teeth', 'catogre'));
         }

         if($id == 2){
            $Leather = doctor::where('catogre_id' , $id)->orderBy('id' , 'desc')->paginate(6);
            return view('web-doctors.leather', compact('Leather',  'catogre'));
         }
         if($id == 3){
            $Audio = doctor::where('catogre_id' , $id)->orderBy('id' , 'desc')->paginate(6);
            return view('web-doctors.audio', compact('Audio', 'catogre'));
         }
         if($id == 4){
            $Birth = doctor::where('catogre_id' , $id)->orderBy('id' , 'desc')->paginate(6);
            return view('web-doctors.birth', compact('Birth', 'catogre'));
         }
         if($id == 5){
            $Blood = doctor::where('catogre_id' , $id)->orderBy('id' , 'desc')->paginate(6);
            return view('web-doctors.blood', compact('Blood', 'catogre'));
         }
         if($id == 6){
            $Bones = doctor::where('catogre_id' , $id)->orderBy('id' , 'desc')->paginate(6);
            return view('web-doctors.bones', compact('Bones', 'catogre'));
         }
         if($id == 7){
            $Children = doctor::where('catogre_id' , $id)->orderBy('id' , 'desc')->paginate(6);
            return view('web-doctors.children', compact('Children', 'catogre'));
         }
         if($id == 8){
            $Digestive = doctor::where('catogre_id' , $id)->orderBy('id' , 'desc')->paginate(6);
            return view('web-doctors.digestive', compact('Digestive', 'catogre'));
         }
         if($id == 9){
            $Ear = doctor::where('catogre_id' , $id)->orderBy('id' , 'desc')->paginate(6);
            return view('web-doctors.ear', compact('Ear', 'catogre'));
         }
         if($id == 10){
            $Eyes = doctor::where('catogre_id' , $id)->orderBy('id' , 'desc')->paginate(6);
            return view('web-doctors.eyes', compact('Eyes', 'catogre'));
         }
         if($id == 11){
            $General = doctor::where('catogre_id' , $id)->orderBy('id' , 'desc')->paginate(6);
            return view('web-doctors.general', compact('General', 'catogre'));
         }
         if($id == 12){
            $Heart = doctor::where('catogre_id' , $id)->orderBy('id' , 'desc')->paginate(6);
            return view('web-doctors.heart', compact('Heart', 'catogre'));
         }
         if($id == 13){
            $Internally = doctor::where('catogre_id' , $id)->orderBy('id' , 'desc')->paginate(6);
            return view('web-doctors.internally', compact('Internally', 'catogre'));
         }
         if($id == 14){
            $Nerves = doctor::where('catogre_id' , $id)->orderBy('id' , 'desc')->paginate(6);
            return view('web-doctors.nerves', compact('Nerves', 'catogre'));
         }
         if($id == 15){
            $Paths = doctor::where('catogre_id' , $id)->orderBy('id' , 'desc')->paginate(6);
            return view('web-doctors.paths', compact('Paths', 'catogre'));
         }
         if($id == 16){
            $Physical = doctor::where('catogre_id' , $id)->orderBy('id' , 'desc')->paginate(6);
            return view('web-doctors.physical', compact('Physical', 'catogre'));
         }
         if($id == 17){
            $Psychological = doctor::where('catogre_id' , $id)->orderBy('id' , 'desc')->paginate(6);
            return view('web-doctors.psychological', compact('Psychological', 'catogre'));
         }
         if($id == 18){
            $Surgery = doctor::where('catogre_id' , $id)->orderBy('id' , 'desc')->paginate(6);
            return view('web-doctors.surgery', compact('Surgery', 'catogre'));
         }


    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $doctors = doctor::where('name' , 'LIKE' , "%{$search}%")->get();


        // return redirect()->back()->compact('query');

        return view('web-doctors.teeth', compact('doctors'));



    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexhome()
    {
        $catogre = catogre::all();
        return view('web-navbar.homepage' , compact('catogre'));
    }

    public function indexinstr()
    {
        $catogre = catogre::all();
        return view('web-navbar.instruct', compact('catogre'));
    }

    public function indexdoct()
    {
        $catogre = catogre::all();
        return view('web-navbar.doctor', compact('catogre'));
    }

    public function indexreport()
    {
        $catogre = catogre::all();
        return view('web-navbar.report_doctor', compact('catogre'));
    }

    // public function indexdoct()
    // {
    //     return view('web-navbar.doctor');
    // }

    public function indexcont()
    {
        $catogre = catogre::all();
        return view('web-navbar.contact' , compact('catogre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VeiwCatogre  $veiwCatogre
     * @return \Illuminate\Http\Response
     */
    public function show(VeiwCatogre $veiwCatogre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VeiwCatogre  $veiwCatogre
     * @return \Illuminate\Http\Response
     */
    public function edit(VeiwCatogre $veiwCatogre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VeiwCatogre  $veiwCatogre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VeiwCatogre $veiwCatogre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VeiwCatogre  $veiwCatogre
     * @return \Illuminate\Http\Response
     */
    public function destroy(VeiwCatogre $veiwCatogre)
    {
        //
    }
}
