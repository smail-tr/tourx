<?php

namespace App\Http\Controllers;

use App\Models\comments;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;


class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $comments=comments::join('blogs','blogs.id','=','comments.blog_id')
                        ->paginate(15, array('comments.id as comment_id','blogs.title as blog_name','FirstName','LastName','email','comment','status','comments.created_at'));
        
        // ->get(['comments.id as comment_id','blogs.title as blog_name','FirstName','LastName','email','comment','status','comments.created_at']);
        return view('admin.comments',compact('comments'));
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
         
         $comment=comments::join('blogs','blogs.id','=','comments.blog_id')
         ->where('comments.id',$id)
         ->first(['comments.id as comment_id','title as blog_name','FirstName','LastName','email','status','comment']);
        
      return view("admin.edit_comment",compact('comment'));
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
        
         $comment=comments::find($id);
        // $comment->FirstName=$request->FirstName;
        // $comment->LastName=$request->LastName;
        // $comment->email=$request->email;
        $comment->status=$request->status;
        // $comment->blog_id=$request->blog_id;

        $comment->update();
         FacadesAlert::success('Success','Status updated successflly'); 
       
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
