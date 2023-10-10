<?php

namespace App\Http\Controllers;

use App\Models\catogre;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Models\ContactDoctor;
use App\Models\ContactComplant;
use App\Models\ContactUsController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FormContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        $catogre = catogre::all();
        return view('web-navbar.contact-doctor', compact('catogre'));

    }
    public function index2()
    {
        $catogre = catogre::all();
        return view('web-navbar.contact-us', compact('catogre'));

    }
    public function index3()
    {
        $catogre = catogre::all();
        return view('web-navbar.contact-complaints', compact('catogre'));

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
    public function store1(Request $request)
    {

        $request->validate([
            'username' => 'required|string|max:25',
            'address' => 'required|max:30',
            'phone' => 'required|numeric|digits_between:9,14',
            'email' => 'required|string|max:25|email',
        ]);

        $contactus = new ContactUs();
        $contactus->username = $request->username;
        $contactus->address = $request->address;
        $contactus->phone = $request->phone;
        $contactus->email = $request->email;

        $contactus->save();
        return redirect()->back()->with('msg-cotus-doctor' , 'تم تواصلك معنا بنجاح , شكرا لك')->with('type' , 'success');

    }



    public function store2(Request $request)
    {

        $request->validate([
            'usernamedoctor' => 'required|string|max:25',
            'specialty' => 'required|string|max:25',
            'graduation' => 'required|string|max:25',
            'adressdoctor' => 'required|string|max:30',
            'phonedoctor' => 'required|digits_between:9,14|numeric',
            'emaildoctor' => 'required|string|max:25|email',
            'work' => 'required|max:30|string',
            'price' => 'required|digits_between:1,3|numeric',
        ]);


        $contactus = new ContactDoctor();
        $contactus->usernamedoctor = $request->usernamedoctor;
        $contactus->specialty = $request->specialty;
        $contactus->graduation = $request->graduation;
        $contactus->adressdoctor = $request->adressdoctor;
        $contactus->phonedoctor = $request->phonedoctor;
        $contactus->emaildoctor = $request->emaildoctor;
        $contactus->work = $request->work;
        $contactus->price = $request->price;

        $contactus->save();
        return redirect()->back()->with('msg-contact-doctor' , 'تم إرسال طلبك بنجاح , سيتم التواصل معك .')->with('type' , 'success');
    }


    public function store3(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:25',
            'email' => 'required|string|max:25|email',
            'discrption' => 'required|string|max:120'
            ]);

        $contactus = new ContactComplant();
        $contactus->username = $request->username;
        $contactus->email = $request->email;
        $contactus->discrption = $request->discrption;


        $contactus->save();
        return redirect()->back()->with('msg-comp-doctor' , 'تم إرسال الشكاوي والإقتراحات , شكرا لتعاملك معنا')->with('type' , 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
