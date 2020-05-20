<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.social');
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

    public function store(Request $request)
    {
        //
        $request->validate([
            's_icon' => 'required',
            's_link' => 'required'
        ]);

        //
        $new_social = new Social();
        $new_social->s_icon = $request->s_icon;
        $new_social->s_link = $request->s_link;
        $new_social->save();
        return redirect()->back()->with('message' , 'the record saved');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $social_show = Social::all();
        return view('admin.socialShow' , ['social_show' => $social_show]);
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
        $social_edit = Social::where('id', $id)->get();
        return view('admin.socialEdit' , ['social_edit' => $social_edit]);
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
        $old_social = Social::find($id);

        $request->validate([
            's_icon' => 'required',
            's_link' => 'required'
        ]);

        $old_social->s_icon = $request->s_icon;
        $old_social->s_link = $request->s_link;
        $old_social->save();

        return redirect()->back()->with('message' , 'its updated');

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
        $old_social = Social::find($id);
        $old_social->delete();
        return redirect()->back()->with('message' , 'its deleted');

    }
}
