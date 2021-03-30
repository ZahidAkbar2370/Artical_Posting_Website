<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artical;
class ArticalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articals=Artical::all();

        return view('admin/artical/view_artical')->with('articals',$articals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/artical/add_artical');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert=Artical::create([
            'title'=>$request->title,
            'category'=>$request->category_name,
            'description'=>$request->description,
            'image'=>$request->image,
            'video_link'=>$request->video_link,
            'post_date'=>$request->post_date,
            'post_time'=>$request->post_time,
            'status'=>$request->status,
        ]);

        return redirect('view-artical');
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
        $artical=Artical::find($id);

        $artical->delete();

        return redirect('view-artical');
    }
}
