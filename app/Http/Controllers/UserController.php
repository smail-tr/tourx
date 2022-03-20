<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\categories;
use App\Models\cities;
use App\Models\contactInfo;
use App\Models\favicon;
use App\Models\footer;
use App\Models\homeMeta;
use App\Models\logo;
use App\Models\socialmedia;
use App\Models\tours;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $city=tours::join('cities','cities.id','=','tours.city_id')
         ->distinct()      
        ->get('city_name');
        $latest=tours::Paginate(6);
        $destination=tours::join('cities','cities.id','=','tours.city_id')        
        ->get(['tours.id as tour_id','tour_name','city_name','imageName','tour_description','start_place','duration','price']);
        $banner=tours::paginate(5);

        $blogs=blog::latest()->paginate(3);
        $category=categories::all();
        $city=cities::all();
        $footer=footer::first();
        $meta=homeMeta::first();
        $contact=contactInfo::first();
        $logo=logo::first();
        $favicon=favicon::first();
        $social=socialmedia::first();




        return view("front-end.home",compact(['banner','city','destination','latest','blogs','category','city','footer','meta','contact','contact','logo','favicon','social']));
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
