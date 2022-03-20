<?php

namespace App\Http\Controllers;

use App\Models\contactInfo;
use App\Models\contactUs;
use App\Models\favicon;
use App\Models\footer;
use App\Models\logo;
use App\Models\socialmedia;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;


class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer=footer::first();
        $contact=contactInfo::first();
        $logo=logo::first();
        $favicon=favicon::first();
        $social=socialmedia::first();



        return view("front-end.contact us.contactUs",compact(['footer','contact','logo','favicon','social']));
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
    //      $this->validate($request,[
    //         'FullName'=>'required',
    //         'email'=>'required',
    //         'subject'=>'required',
    //         'message'=>'required',
    //     ]
    // );
    $contact=new contactUs();
    $contact->FullName=$request->input('fullname');
    $contact->email=$request->input('email');
    $contact->phone=$request->input('phone');
    $contact->subject=$request->input('subject');
    $contact->message=$request->input('message');

    $contact->save();
    
FacadesAlert::success('Success', 'Message submitted successflly!,Wait for our reply');

 return redirect()->back();
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
