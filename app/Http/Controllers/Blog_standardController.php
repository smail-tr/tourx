<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\categories;
use App\Models\comments;
use App\Models\contactInfo;
use App\Models\favicon;
use App\Models\footer;
use App\Models\logo;
use App\Models\socialmedia;
use Illuminate\Http\Request;

class Blog_standardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $pop=blog::latest()->paginate(4);
        if($request->search){ 
            $blog=blog::where('title','like','%'.$request->search.'%')
            ->orWhere('description','like','%'.$request->search.'%')->paginate(4);
        }
               
        // if($request->category){
        //     $blog=blog::join('categories','categories.id','=','blogs.category_id')
        // ->where('categories.name',$request->category)
        // ->get();
        //  }
        
         else{
              $blog=blog::paginate(4);
             
         }
         

         $category=categories::all();
        $footer=footer::first();

        $contact=contactInfo::first();
        $logo=logo::first();
        $favicon=favicon::first();
        $social=socialmedia::first();




        return view('front-end.blog.blog-standard',compact(['blog','category','pop','footer','contact','logo','favicon','social']));
    }

    public function view_details($id)
    {
        
        $blog_details=blog::join('categories','categories.id','=','blogs.category_id')
        ->where('blogs.id',$id)
        ->first(['blogs.id as blog_id','categories.id','categories.name','title','image','description','meta_title','meta_tags','meta_description','blogs.created_at as date_post','blogs.updated_at']);
       
        // -------popular packages----------------------------------------
       $popular=blog::latest()->paginate(4);
        $contact=contactInfo::first();
        $logo=logo::first();

        $footer=footer::first();
        $favicon=favicon::first();
        $social=socialmedia::first();


       
  $comment=comments::join('blogs','blogs.id','=','comments.blog_id')
        ->where('blog_id',$id)
        ->where('status','=','enabled')
        ->get(['comments.id','FirstName','LastName','email','comment','comments.created_at']);
      return view("front-end.blog.blog-details",compact(['blog_details','popular','comment','contact','logo','footer','favicon','social']));
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
          $comment=new comments();
    $comment->blog_id=$request->input('blog_id');
    $comment->FirstName=$request->input('first_name');
    $comment->LastName=$request->input('last_name');
    $comment->email=$request->input('user_email');
    $comment->comment=$request->input('comment');
 
    $comment->save();
//   Toastr::success('Post added successfully :)','Success');

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
