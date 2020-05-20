<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\I_Use;
use App\Iuse;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class IUseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.iuse');
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
            'i_name' => 'required',
            'i_percentage' => 'required|max:2'
        ]);

        //
        $new_iuse = new Iuse();
        $new_iuse->i_name = $request->i_name;
        $new_iuse->i_percentage = $request->i_percentage;
        $new_iuse->save();
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
        $iuse_show = Iuse::all();
        return view('admin.iuseShow' , ['iuse_show' => $iuse_show]);
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
        $iuse_edit = Iuse::where('id', $id)->get();
        return view('admin.iuseEdit' , ['iuse_edit' => $iuse_edit]);
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
        $old_iuse = Iuse::find($id);

        $request->validate([
            'i_name' => 'required',
            'i_percentage' => 'required|max:2'
        ]);

        $old_iuse->i_name = $request->i_name;
        $old_iuse->i_percentage = $request->i_percentage;
        $old_iuse->save();

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
        $old_iuse = Iuse::find($id);
        $old_iuse->delete();
        return redirect()->back()->with('message' , 'its deleted');

    }
}
