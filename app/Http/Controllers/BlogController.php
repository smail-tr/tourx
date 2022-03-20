<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\categories;
use App\Models\footer;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //-----add blog page--------
    public function add_view(){
      $category=categories::select('id','name')->get();
        return view('admin.add_blog',compact('category'));
    }

    public function index()
    {
        $blog=blog::join('categories','categories.id','=','blogs.category_id')
                        ->paginate(15, array('blogs.id','categories.name','blogs.title','blogs.description','blogs.image','blogs.slug'));

                        // ->get(['blogs.id','categories.name','blogs.title','blogs.description','blogs.image','blogs.slug']);
        
        
        return view('admin.view_blogs',compact('blog'));
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
            'title'=>'required',
            'category'=>'required',
            'imageName'=>'required',
            'description'=>'required',     
            'slug'=>['unique:blogs',
                    'required'
                ],
            'meta_title'=>'required'
        ]
    );
    $blog=new blog();
     
    $blog->category_id=$request->category;
    $blog->title=$request->title;
    
   if ($request->hasFile('imageName')) {

           $file=$request->file('imageName');
           $extension=$file->getClientOriginalExtension();
           $filename=time().'.'.$extension;
           $file->move('uploads/blog/',$filename);
           $blog->image=$filename;
        }
    $blog->description=$request->description;
     $blog->slug = Str::slug($request->title);
    $blog->meta_title=$request->meta_title;
    $blog->meta_tags=$request->meta_tags;
    $blog->meta_description=$request->meta_description;
  
    
    $blog->save();
    FacadesAlert::success('Success', 'Blog saved successflly');
    return redirect()->back();
    }

    public function checkSlug(Request $request){
        $slug=SlugService::createSlug(blog::class,'slug',$request->title);
        return response()->json(['slug'=>$slug]);
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
         $blog=blog::find($id);
         $category=categories::select('id','name')->get();

      return view("admin.edit_blog",compact('blog','category'));
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
            // 'title'=>'required',
            // 'category'=>'required',
            // 'imageName'=>'required',
            'description'=>'required',     
            // 'slug'=>'required',
            // 'meta_title'=>'required'
        ]
    );
         $blog=blog::find($id);
        $blog->category_id=$request->category;
        $blog->title=$request->title;
    
   if ($request->hasFile('imageName')) {

           $file=$request->file('imageName');
           $extension=$file->getClientOriginalExtension();
           $filename=time().'.'.$extension;
           $file->move('uploads/blog/',$filename);
           $blog->image=$filename;
        }
    $blog->description=$request->description;
    $blog->slug=$request->slug;
    $blog->meta_title=$request->meta_title;
    $blog->meta_tags=$request->meta_tags;
    $blog->meta_description=$request->meta_description;
    if(count($request->all()) > 0) {
       $blog->update();
      FacadesAlert::success('Success','Blog updated successflly'); 
      return redirect('all_blogs');
    } else {
        return redirect()->back();
         FacadesAlert::success('Success','require fields'); 
    }
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
         $blog=blog::find($id);
         $blog->delete();
          FacadesAlert::success('Success','Blog deleted successflly');
         return redirect()->back();
    }
}
