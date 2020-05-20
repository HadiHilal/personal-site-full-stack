<?php

namespace App\Http\Controllers\Admin;

use App\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $count = About::all()->count();
        $about_all = About::all();
        return view('admin.about' , ['about_all' => $about_all , 'count' => $count]);
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
        $request->validate([
            'img'     => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'name'    => 'required',
            'career'  => 'required',
            'ab_desc' => 'required|max:250',

        ]);
        $new_about =  new About();
        $imageName = time().'.'.$request->img->extension();
        $new_about->show_img = $request->show_img = $imageName ;
        $new_about->img = $request->img->move(public_path('/admin/uploads') , $imageName);
        $new_about->name = $request->name;
        $new_about->career = $request->career;
        $new_about->ab_desc = $request->ab_desc;
        $new_about->resume = $request->resume;
        $new_about->save();
        return redirect()->back()->with('message', 'the records updated!');
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
        $about = About::find($id)->get();
        return view('admin.aboutEdit' , ['about' => $about]);
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
        $request->validate([
            'img'     => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'name'    => 'required',
            'career'  => 'required',
            'ab_desc' => 'required|max:250',

        ]);
        $old_about = About::find($id);
        $imageName = time().'.'.$request->img->extension();
        $old_about->show_img = $request->show_img = $imageName ;
        $old_about->img = $request->img->move(public_path('/admin/uploads') , $imageName);
        $old_about->name = $request->name;
        $old_about->career = $request->career;
        $old_about->ab_desc = $request->ab_desc;
        $old_about->resume = $request->resume;
        $old_about->save();
        return redirect()->back()->with('message', 'the records updated!');
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
