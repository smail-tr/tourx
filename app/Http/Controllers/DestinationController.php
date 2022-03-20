<?php

namespace App\Http\Controllers;

use App\Models\cities;
use App\Models\contactInfo;
use App\Models\favicon;
use App\Models\footer;
use App\Models\logo;
use App\Models\socialmedia;
use App\Models\tour_plans;
use App\Models\tours;
use Illuminate\Http\Request;

class DestinationController extends Controller
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
        
        $destination=tours::join('cities','cities.id','=','tours.city_id') 
                
        ->get(['tours.id as tour_id','tour_name','city_name','imageName','tour_description','start_place','duration','price']);

        $footer=footer::first();
        $contact=contactInfo::first();
        $logo=logo::first();
        $favicon=favicon::first();
        $social=socialmedia::first();





       return view("front-end.Destinations.destination",compact(['city','destination','footer','contact','logo','favicon','social']));
    }
     public function view_details($id)
    {
        $details=tours::join('cities','cities.id','=','tours.city_id')
        ->where('tours.id',$id)
        ->first(['tours.id as tour_id','tour_name','city_name','imageName','tour_description','start_place','duration','price']);
        $plan=tour_plans::join('tours','tours.id','=','tour_plans.tour_id')
        ->where('tour_id',$id)
        ->get();
       
        $footer=footer::first();
        $contact=contactInfo::first();
        $logo=logo::first();
        $favicon=favicon::first();
        $social=socialmedia::first();

       
        //   $city_id=tours::select('city_id')->where($id)->get();
        // $city=cities::select('id','city_name')->get();
      return view("front-end.Tour.package-details",compact(['details','plan','footer','contact','logo','favicon','social']));
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
