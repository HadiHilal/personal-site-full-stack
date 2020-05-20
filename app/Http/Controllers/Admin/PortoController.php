<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Porto;
use Illuminate\Http\Request;

class PortoController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.porto');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


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
            'por_img' => 'required|image',
            'por_desc' => 'required' ,
            'por_title' => 'required'
        ]);

        $new_porto = new Porto();
        $imageName = time().'.'.$request->por_img->extension();
        $new_porto->por_img_show = $request->por_img_show = $imageName ;
        $new_porto->por_img = $request->por_img->move(public_path('/admin/uploads') , $imageName);
        $new_porto->por_title = $request->por_title;
        $new_porto->por_desc = $request->por_desc;
        $new_porto->por_link = $request->por_link;
        $new_porto->save();
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
        $porto_show = Porto::all();
        return view('admin.portoShow' , ['porto_show' => $porto_show]);
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
        $porto_edit = Porto::where('id', $id)->get();
        return view('admin.portoEdit' , ['porto_edit' => $porto_edit]);
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
        $old_porto = Porto::find($id);

        $request->validate([
            'por_desc' => 'required',
            'por_img'     => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'por_title'  => 'required'

        ]);



        $imageName = time().'.'.$request->por_img->extension();
        $old_porto->por_img_show = $request->por_img_show = $imageName ;
        $old_porto->por_img = $request->por_img->move(public_path('/admin/uploads') , $imageName);

            $old_porto->por_img='';
            $old_porto->por_title = $request->por_title;
            $old_porto->por_desc = $request->por_desc;
            $old_porto->por_link = $request->por_link;
            $old_porto->save();


        return redirect()->back()->with('message' , 'the record saved');

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
        $old_porto = Porto::find($id);
        $old_porto->delete();
        return redirect()->back()->with('message' , 'its deleted');

    }
}
