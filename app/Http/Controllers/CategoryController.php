<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=categories::paginate(5);
        return view("admin.category",compact('category'));
    
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
            'name'=>'required'
        ]
    );
    $category=new categories();
    $category->name=$request->input('name');

    $category->save();
    
FacadesAlert::success('Success', 'Category added successflly');

 return redirect('/category');
  
    
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
    // public function edit_category($id){
    //    //$table = categories::find($id);
    //     return view('admin.edit_category');
    // }
    public function edit($id)
    {
      $categories=categories::find($id);
      return view("admin.edit_category",compact('categories'));
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
        $categories=categories::find($id);
        $categories->name=$request->input('name');
        $categories->update();
        FacadesAlert::success('Success','Category updated successflly'); 
        if($categories->update()){
             
                return redirect()->route('category'); 
        }else{
            alert()->error('ErrorAlert','Something went wrong!');
        }
          
    }
     // delete
     public function delete($id)
     {
         $categories=categories::find($id);
         $categories->delete();
          FacadesAlert::success('Success','Category deleted successflly');
         return redirect()->route('category');
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
