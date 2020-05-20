<?php

namespace App\Http\Controllers\Admin;

use App\Averge;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AvergeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.averge');
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
            'av_name' => 'required',
            'av_percentage' => 'required|max:2'
        ]);

        //
        $new_averge = new Averge();
        $new_averge->av_name = $request->av_name;
        $new_averge->av_percentage = $request->av_percentage;
        $new_averge->save();
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
        $averge_show = Averge::all();
        return view('admin.avergeShow' , ['averge_show' => $averge_show]);
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
        $averge_edit = Averge::where('id', $id)->get();
        return view('admin.avergeEdit' , ['averge_edit' => $averge_edit]);
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
        $old_averge = Averge::find($id);

        $request->validate([
            'av_name' => 'required',
            'av_percentage' => 'required|max:2'
        ]);

        $old_averge->av_name = $request->av_name;
        $old_averge->av_percentage = $request->av_percentage;
        $old_averge->save();

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
        $old_averge = Averge::find($id);
        $old_averge->delete();
        return redirect()->back()->with('message' , 'its deleted');

    }

}
