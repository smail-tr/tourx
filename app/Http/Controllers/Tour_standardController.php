<?php

namespace App\Http\Controllers;

use App\Models\bookings;
use App\Models\cities;
use App\Models\contactInfo;
use App\Models\favicon;
use App\Models\footer;
use App\Models\Gallery;
use App\Models\logo;
use App\Models\socialmedia;
use App\Models\tour_plans;
use App\Models\tours;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;





class Tour_standardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->search){
            $standard=tours::where('tour_name','LIKE','%'.$request->search.'%')
            ->orWhere('tour_description','LIKE','%'.$request->search.'%')
                        ->paginate(20, array('tours.id','tours.tour_name','tours.tour_description','tours.imageName','tours.start_place','tours.duration','tours.price'));

            // ->get(['tours.id','tours.tour_name','tours.tour_description','tours.imageName','tours.start_place','tours.duration','tours.price']);

        }
        
        else{
            $standard=tours::paginate(20);
        }

        $footer=footer::first();
       $contact=contactInfo::first();
        $logo=logo::first();
        $social=socialmedia::first();
        $favicon=favicon::first();




        
        return view('front-end.Tour.package-standard',compact(['standard','footer','contact','logo','social','favicon']));
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
    // navigate to package details-----
    public function view_details($id)
    {
        $details=tours::join('cities','cities.id','=','tours.city_id')
        ->where('tours.id',$id)
        ->first(['tours.id as tour_id','tour_name','city_name','imageName','tour_description','start_place','duration','price']);
        $plan=tour_plans::join('tours','tours.id','=','tour_plans.tour_id')
        ->where('tour_id',$id)
        ->get();

        // $gallery=Gallery::join('tours','tours.id','=','galleries.tour_id')
        // ->where('tour_id',$id)
        // ->get();
        $gal=Gallery::all();
        // -------popular packages----------------------------------------
       $popular=tours::orderBy('id', 'desc')->paginate(4);
       $contact=contactInfo::first();
        $footer=footer::first();
        $logo=logo::first();
        $favicon=favicon::first();
        $social=socialmedia::first();

  
       
      return view("front-end.Tour.package-details",compact(['details','plan','popular','gal','contact','footer','logo','favicon','social']));
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
    //         'name'=>'required',
    //         'email'=>'required',
    //         'phone'=>'required',
    //         'no_of_person'=>'required'
    //     ]
    // );
  
    $book=new bookings();
    $book->tour_id=$request->input('tour_id');
    $book->name=$request->input('fullName');
    $book->email=$request->input('email');
    $book->phone=$request->input('tel');
    $book->no_of_person=$request->input('nbrPerson');
    $book->request=$request->input('message');

    $book->save();
//   Toastr::success('Post added successfully :)','Success');

  FacadesAlert::success('Booking', 'book ordred successfully! ,Wait for our call!');

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
