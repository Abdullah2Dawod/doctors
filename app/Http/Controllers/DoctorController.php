<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use App\Models\catogre;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexTeeth()
    {
        $Teeth = doctor::where('catogre_id' , 1)->orderBy('id' , 'desc')->paginate(8);
        return view('doctor.ShowDoctor.ShowTeeth' , compact('Teeth'));
    }

    public function indexLeather()
    {
        $Leather = doctor::where('catogre_id' , 2)->orderBy('id' , 'desc')->paginate(8);
        return view('doctor.ShowDoctor.ShowLeather' , compact('Leather'));
    }

    public function indexAudio()
    {
        $Audio = doctor::where('catogre_id' , 3)->orderBy('id' , 'desc')->paginate(8);
        return view('doctor.ShowDoctor.ShowAudio' , compact('Audio'));
    }

    public function indexBirth()
    {
        $Birth = doctor::where('catogre_id' , 4)->orderBy('id' , 'desc')->paginate(8);
        return view('doctor.ShowDoctor.showBirth' , compact('Birth'));
    }

    public function indexBlood()
    {
        $Blood = doctor::where('catogre_id' , 5)->orderBy('id' , 'desc')->paginate(8);
        return view('doctor.ShowDoctor.showBlood' , compact('Blood'));
    }

    public function indexBones()
    {
        $Bones = doctor::where('catogre_id' , 6)->orderBy('id' , 'desc')->paginate(8);
        return view('doctor.ShowDoctor.showBones' , compact('Bones'));
    }

    public function indexChildren()
    {
        $Children = doctor::where('catogre_id' , 7)->orderBy('id' , 'desc')->paginate(8);
        return view('doctor.ShowDoctor.showChildren', compact('Children'));
    }

    public function indexDigestive()
    {
        $Digestive = doctor::where('catogre_id' , 8)->orderBy('id' , 'desc')->paginate(8);
        return view('doctor.ShowDoctor.showDigestive', compact('Digestive'));
    }

    public function indexEar()
    {
        $Ear = doctor::where('catogre_id' , 9)->orderBy('id' , 'desc')->paginate(8);
        return view('doctor.ShowDoctor.showEar', compact('Ear'));
    }

    public function indexEyes()
    {
        $Eyes = doctor::where('catogre_id' , 10)->orderBy('id' , 'desc')->paginate(8);
        return view('doctor.ShowDoctor.showEyes', compact('Eyes'));
    }

    public function indexGeneral()
    {
        $General = doctor::where('catogre_id' , 11)->orderBy('id' , 'desc')->paginate(8);
        return view('doctor.ShowDoctor.showGeneral', compact('General'));
    }

    public function indexHeart()
    {
        $Heart = doctor::where('catogre_id' , 12)->orderBy('id' , 'desc')->paginate(8);
        return view('doctor.ShowDoctor.showHeart', compact('Heart'));
    }

    public function indexInternally()
    {
        $Internally = doctor::where('catogre_id' , 13)->orderBy('id' , 'desc')->paginate(8);
        return view('doctor.ShowDoctor.showInternally', compact('Internally'));
    }

    public function indexNerves()
    {
        $Nerves = doctor::where('catogre_id' , 14)->orderBy('id' , 'desc')->paginate(8);
        return view('doctor.ShowDoctor.showNerves', compact('Nerves'));
    }

    public function indexPaths()
    {
        $Paths = doctor::where('catogre_id' , 15)->orderBy('id' , 'desc')->paginate(8);
        return view('doctor.ShowDoctor.showPaths', compact('Paths'));
    }

    public function indexPhysical()
    {
        $Physical = doctor::where('catogre_id' , 16)->orderBy('id' , 'desc')->paginate(8);
        return view('doctor.ShowDoctor.showPhysical', compact('Physical'));
    }

    public function indexPsychological()
    {
        $Psychological = doctor::where('catogre_id' , 17)->orderBy('id' , 'desc')->paginate(8);
        return view('doctor.ShowDoctor.showPsychological', compact('Psychological'));
    }

    public function indexSurgery()
    {
        $Surgery = doctor::where('catogre_id' , 18)->orderBy('id' , 'desc')->paginate(8);
        return view('doctor.ShowDoctor.showSurgery', compact('Surgery'));
    }

    public function create()
    {

        $catogre= catogre::all();
        return view('doctor.create' , compact('catogre'));
    }


    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:25',
            'price' => 'required|numeric|digits_between:1,3',
            'addres' => 'required|string|max:30',
            'mobaile' => 'required|digits_between:9,14|numeric',
            'work' => 'required|max:30|string',
            'university' => 'required|string|max:30',
        ]);

        // Insert Data To Database
        $doctor = new doctor();
        $doctor->name =$request->name;
        $doctor->catogre_id=$request->catogre_id;
        $doctor->price=$request->price;
        $doctor->mobaile=$request->mobaile;
        $doctor->addres=$request->addres;
        $doctor->work=$request->work;
        $doctor->university=$request->university;

        if($request->image ) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('imagedoctor'), $imageName);
            $doctor->image = $imageName;
        }

        $doctor->save();
        return redirect()->route('home')->with('msg-create' , 'تم إضافة طبيب بنجاح , أذهب الى تخصصه لمشاهدة الأطباء')->with('type' , 'success');
        //with('msg,'The Doctor Added Successfully)->with('type','success')
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(doctor $doctor , $id)
    {
        $catogre = catogre::all();
        $doctoor = doctor::find($id);
        return view('doctor.edit' , compact('doctoor' , 'catogre'));

    }


    public function update(Request $request, doctor $doctor , $id)
    {

        $request->validate([
            'name' => 'required|string|max:25',
            'price' => 'required|numeric|digits_between:1,3',
            'addres' => 'required|string|max:30',
            'mobaile' => 'required|digits_between:9,14|numeric',
            'work' => 'required|max:30|string',
            'university' => 'required|string|max:30',
        ]);

        $doctor = doctor::find($id);
        $doctor->name =$request->name;
        $doctor->price=$request->price;
        $doctor->mobaile=$request->mobaile;
        $doctor->addres=$request->addres;
        $doctor->work=$request->work;
        $doctor->university=$request->university;
        if($request->image ) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('imagedoctor'), $imageName);
            $doctor->image = $imageName;
        }

        $doctor->save();
        return redirect()->back()->with('msg-update' , 'تم تحديث بيانات الطبيب بنجاح')->with('type' , 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(doctor $doctor , $id)
    {
        doctor::destroy($id);
        return redirect()->back()->with('msg-delete' , 'تم حذف الطبيب بنجاح')->with('type' , 'danger');
    }
}
