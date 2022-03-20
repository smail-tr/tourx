<?php

namespace App\Http\Controllers;

use App\Models\bookings;
use App\Models\footer;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book=bookings::join('tours','tours.id','=','bookings.tour_id')  
        ->paginate(3, array('bookings.id as booking_id','tour_name','name','email','phone','no_of_person','request','bookings.created_at'));    
        // ->get(['bookings.id as booking_id','tour_name','name','email','phone','no_of_person','request','bookings.created_at']);
        return view("admin.all_bookings",compact('book'));
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
    public function details($id)
    {
         $details=bookings::join('tours','tours.id','=','bookings.tour_id') 
             
        ->get(['bookings.id as booking_id','tour_name','name','email','phone','no_of_person','request','bookings.created_at'])
        
        ->where('booking_id',$id);
       
       
        
      return view("admin.booking_details",compact('details'));
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
    public function delete($id)
    {
         $order=bookings::find($id);
         $order->delete();
          FacadesAlert::success('Success','Order deleted successflly');
         return redirect()->back();
    }
}
