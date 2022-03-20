<?php

namespace App\Http\Controllers;

use App\Models\tour_plans;
use App\Models\tours;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;


class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tour=tours::select('id','tour_name')->get();
        return view('admin.add_tour_plan',compact('tour'));
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
    public function viewPlans(){
        $plans=tour_plans::join('tours','tours.id','=','tour_plans.tour_id')
                        ->paginate(10, array('tour_plans.id','tours.tour_name','tour_plans.plan_title','tour_plans.description','tour_plans.others_details'));
                        // ->get(['tour_plans.id','tours.tour_name','tour_plans.plan_title','tour_plans.description','tour_plans.others_details']);
                        
        return view('admin.view_plans',compact('plans'));
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
           'tour'=>'required',
           'plan_title'=>'required',
           'description'=>'required',
           'details'=>'required'
           
       ]);
    $plan=new tour_plans();
    $plan->tour_id=$request->tour;
    $plan->plan_title=$request->plan_title;
    $plan->description=$request->description;
    $plan->others_details=$request->details;
    
    $plan->save();
    FacadesAlert::success('Success', 'Plan saved successflly');
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
         $plan=tour_plans::find($id);
        
         $tour=tours::select('id','tour_name')->get();
        
      return view("admin.edit_plan",compact('plan','tour'));
    }

    // delete
     public function delete($id)
     {
         $plan=tour_plans::find($id);
         $plan->delete();
          FacadesAlert::success('Success','Plan deleted successflly');
         return redirect()->back();
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
        
        $plan=tour_plans::find($id);

        $plan->tour_id=$request->tour_id;
        $plan->plan_title=$request->plan_title;
        $plan->description=$request->description;
        $plan->others_details=$request->others_details;
        $plan->update();
        FacadesAlert::success('Success','plan updated successflly'); 
       
                return redirect()->route('all_plans'); 
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
