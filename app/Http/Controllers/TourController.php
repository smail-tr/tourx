<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\cities;
use App\Models\tours;
use Illuminate\Http\Request;
use PharIo\Manifest\Extension;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get a dropdown values
        $category=categories::select('id','name')->get();
        $city=cities::select('id','city_name')->get();
        return view('admin.add_tour',compact(['category','city']));
    }
   
    public function viewTours(){
        $tours=tours::join('categories','categories.id','=','tours.category_id')
                        ->join('cities','cities.id','=','tours.city_id')                      
                        ->get(['tours.id','categories.name','cities.city_name','tours.tour_name','tours.tour_description','tours.imageName','tours.start_place','tours.duration','tours.price']);
        return view('admin.view_tours',compact('tours'));
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
        $this->validate($request,[
            'name'=>'required',
            'category'=>'required',
            'description'=>'required',
            'imageName'=>'required',
            'start_place'=>'required',
            'duration'=>'required',
            'price'=>'required'
        ]
    );
    $tour=new tours();
    
    $tour->category_id=$request->category;
    $tour->city_id=$request->city;
    $tour->tour_name=$request->name;
    $tour->tour_description=$request->description;

  if ($request->hasFile('imageName')) {

           $file=$request->file('imageName');
           $extension=$file->getClientOriginalExtension();
           $filename=time().'.'.$extension;
           $file->move('uploads/tour/',$filename);
           $tour->imageName=$filename;
        }
    
    
    $tour->start_place=$request->start_place;
    $tour->duration=$request->duration;
    $tour->price=$request->price;
    
    $tour->save();
    FacadesAlert::success('Success', 'Tour saved successflly');
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
         $tour=tours::find($id);
         $category=categories::select('id','name')->get();
        $city=cities::select('id','city_name')->get();
        

      return view("admin.edit_tour",compact('tour','category','city'));
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
        

           $this->validate($request,[
            // 'name'=>'required',
            // 'category'=>'required',
            // 'city'=>'required',
            'description'=>'required',
            // 'imageName'=>'required',
            // 'start_place'=>'required',
            // 'duration'=>'required',
            // 'price'=>'required'
        ]
    );
         $tour=tours::find($id);
        $tour->category_id=$request->category;
        $tour->city_id=$request->city;
        $tour->tour_name=$request->name;
        $tour->tour_description=$request->description;

            if ($request->hasFile('imageName')) {

                    $file=$request->file('imageName');
                    $extension=$file->getClientOriginalExtension();
                    $filename=time().'.'.$extension;
                    $file->move('uploads/tour/',$filename);
                    $tour->imageName=$filename;       
                    }

        $tour->start_place=$request->start_place;
        $tour->duration=$request->duration;
        $tour->price=$request->price;
        $tour->update();
        FacadesAlert::success('Success','tour updated successflly'); 
       
                return redirect()->route('all_tours'); 
    }
    // delete
     public function delete($id)
     {
         $tour=tours::find($id);
         $tour->delete();
          FacadesAlert::success('Success','Tour deleted successflly');
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
