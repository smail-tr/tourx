<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\contactInfo;
use App\Models\contactUs;
use App\Models\favicon;
use App\Models\footer;
use App\Models\homeMeta;
use App\Models\logo;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;


class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about=about::first();
        $footer=footer::first();
        $meta=homeMeta::first();
        $contact=contactInfo::first();
        $logo=logo::first();
        $favicon=favicon::first();

        return view('admin.setting',compact(['about','footer','meta','contact','logo','favicon']));
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
    public function update(Request $request)
    {
        
          $about=about::find(1);
        $about->title=$request->input('title');
        $about->description=$request->input('description');
         if ($request->hasFile('image')) {

                    $file=$request->file('image');
                    $extension=$file->getClientOriginalExtension();
                    $filename=time().'.'.$extension;
                    $file->move('uploads/about_us/',$filename);
                    $about->image=$filename;       
                    }
         $about->save();
        FacadesAlert::success('Success','About us updated successflly'); 
        return redirect()->back();
    }

    public function update_footer(Request $request){
          $footer=footer::find(1);
        $footer->about=$request->input('about-us');
        $footer->copyright=$request->input('footer_copyright');
         $footer->save();
        FacadesAlert::success('Success',' Footer updated successflly'); 
        return redirect()->back();
    }
     public function update_meta(Request $request){
          $meta=homeMeta::find(1);
        $meta->meta_title=$request->input('meta_title');
        $meta->meta_tags=$request->input('meta_tags');
        $meta->meta_description=$request->input('meta_description');
         $meta->save();
        FacadesAlert::success('Success','Meta updated successflly'); 
        return redirect()->back();
    }
      public function update_contact(Request $request){
          $contact=contactInfo::find(1);
        $contact->email=$request->input('email');
        $contact->phone=$request->input('phone');
        $contact->fax=$request->input('fax');
        $contact->adresse=$request->input('adresse');
         $contact->save();
        FacadesAlert::success('Success','Contact info updated successflly'); 
        return redirect()->back();
    }
     public function update_logo(Request $request){
          $logo=logo::find(1);
        if ($request->hasFile('logo')) {

                    $file=$request->file('logo');
                    $extension=$file->getClientOriginalExtension();
                    $filename=time().'.'.$extension;
                    $file->move('uploads/logo/',$filename);
                    $logo->logo=$filename;       
                    }
        
         $logo->save();
        FacadesAlert::success('Success','Logo updated successflly'); 
        return redirect()->back();
    }
     public function update_favicon(Request $request){
          $favicon=favicon::find(1);
        if ($request->hasFile('favicon')) {

                    $file=$request->file('favicon');
                    $extension=$file->getClientOriginalExtension();
                    $filename=time().'.'.$extension;
                    $file->move('uploads/favicon/',$filename);
                    $favicon->favicon=$filename;       
                    }
        
         $favicon->save();
        FacadesAlert::success('Success','favicon updated successflly'); 
        return redirect()->back();
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
