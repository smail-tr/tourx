<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\cities;
use App\Models\contactInfo;
use App\Models\favicon;
use App\Models\footer;
use App\Models\logo;
use App\Models\socialmedia;
use App\Models\tours;
use Illuminate\Http\Request;

class TourSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $category=categories::all();
        $city=cities::all();
        $tours=tours::all('tours.id as tour_id','tours.tour_name','tours.tour_description','tours.imageName','tours.start_place','tours.duration','tours.price');

        if($request->keyword){
            $tours=tours::where('tour_name','LIKE','%'.$request->keyword.'%')
            ->orWhere('tour_description','LIKE','%'.$request->keyword.'%')
            ->get(['tours.id as tour_id','tours.tour_name','tours.tour_description','tours.imageName','tours.start_place','tours.duration','tours.price']);

        }
        if($request->destination){
            $tours=tours::join('cities','cities.id','=','tours.city_id')
        ->where('city_id','LIKE','%'.$request->destination.'%')
        ->get(['tours.id as tour_id','cities.city_name','tours.tour_name','tours.tour_description','tours.imageName','tours.start_place','tours.duration','tours.price']);
        }
        if($request->category){
            $tours=tours::join('categories','categories.id','=','tours.category_id')
        ->where('category_id','LIKE','%'.$request->category.'%')
        ->get(['tours.id as tour_id','categories.name','tours.tour_name','tours.tour_description','tours.imageName','tours.start_place','tours.duration','tours.price']);
        }
        if($request->keyword && $request->destination && $request->category){
            $tours=tours::join('categories','categories.id','=','tours.category_id')
                        ->join('cities','cities.id','=','tours.city_id')
                        ->where('tour_name','LIKE','%'.$request->keyword.'%')
                        ->orWhere('tour_description','LIKE','%'.$request->keyword.'%')
                        ->orWhere('cities.city_name','LIKE','%'.$request->destination.'%')
                        ->orWhere('categories.name','LIKE','%'.$request->category.'%')
                        ->get(['tours.id as tour_id','categories.name','cities.city_name','tours.tour_name','tours.tour_description','tours.imageName','tours.start_place','tours.duration','tours.price']);
        }
        
      
        //   $tours=tours::all();
       
       
       
        $footer=footer::first();
         $contact=contactInfo::first();
        $logo=logo::first();
        $favicon=favicon::first();

        $social=socialmedia::first();


        return view("front-end.Tour.Tour_search",compact(['category','city','tours','footer','contact','logo','favicon','social']));
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
