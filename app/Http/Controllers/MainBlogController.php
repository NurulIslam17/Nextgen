<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\ToastrServiceProvider;

class MainBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = DB::table('blogs')->orderBy('id','DESC')->get();
        return view('usersPanel.main_blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('usersPanel.main_blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function saveImage($request)
     {
        $file       = $request->file('image');
        $filename   = 'IMG'.time().'.'.$file->getClientOriginalExtension();
        $path       = 'myImage/main_blog/';
        $file->move($path,$filename);
        $url        = ($path.$filename);
        return $url;
     }

    public function store(Request $request)
    {
        // return $request;

        DB::table('blogs')->insert([
            'title' => $request->title,
            'desciption' => $request->desciption,
            'image' => $this->saveImage($request),
        ]);

        return redirect()->route('main_blog.index');

        // Toastr::success('Messages in here', 'Title', ["positionClass" => "toast-top-center"]);
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
        // return  DB::table('blogs')->where('id',$id)->get();
        return view('usersPanel.main_blog.edit');
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
