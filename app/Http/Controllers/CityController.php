<?php

namespace App\Http\Controllers;

use App\Models\cities;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $city=cities::paginate(7);
        return view("admin.city",compact('city'));
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
        
        $this->validate($request,[
            'name'=>'required',
            'other_details'=>'required'
        ]
    );
    $city=new cities();
    $city->city_name=$request->input('name');
    $city->other_details=$request->input('other_details');

    $city->save();
    
    FacadesAlert::success('Success', 'City added successflly');

    return redirect('/city');
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
        $city=cities::find($id);
      return view("admin.edit_city",compact('city'));
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
            'name'=>'required',
            'other_details'=>'required'
        ]
    );
         $city=cities::find($id); 
        $city->city_name=$request->input('name');
        $city->other_details=$request->input('other_details');
        $city->update();
        FacadesAlert::success('Success','City updated successflly'); 
       
                return redirect()->route('city'); 
            
        
    }
 // delete
     public function delete($id)
     {
         $city=cities::find($id);
         $city->delete();
          FacadesAlert::success('Success','Category deleted successflly');
         return redirect()->route('city');
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
