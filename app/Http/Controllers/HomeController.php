<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\bookings;
use App\Models\tour_plans;
use App\Models\tours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class HomeController extends Controller
{
    public function index(){

       

    }
    public function redirects(){
        $usertype=Auth::user()->usertype;
        if($usertype=='1'){
             $tours=tours::all();
        $blogs=blog::all();
        $plans=tour_plans::all();
        $booking=bookings::all();
        return view('admin.adminhome',compact(['tours','blogs','plans','booking']));
                FacadesAlert::success('Success', 'Welcome back!');

        }
        else
        {
            return view("front-end.home");
        }
        
    }
    
}
