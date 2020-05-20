<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Skill_item;
use App\Skill_title;

use Illuminate\Http\Request;

class SkillItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $all_title = Skill_title::all();
        return view('admin.skildesc' , ['all_title' => $all_title]);
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
            'sk_img' => 'required|image',
            'sk_title_id' => 'required',
            'name'   => 'required'
        ]);

        //
        $new_skill_desc = new Skill_item();
        $imageName = time().'.'.$request->sk_img->extension();
        $new_skill_desc->sk_show_img = $request->sk_show_img = $imageName ;
        $new_skill_desc->sk_img = $request->sk_img->move(public_path('/admin/uploads') , $imageName);
        $new_skill_desc->sk_title_id = $request->sk_title_id;
        $new_skill_desc->name = $request->name;
        $new_skill_desc->save();
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
        $skill_desc_show = Skill_item::all();
        return view('admin.skilldescShow' , ['skill_desc_show' => $skill_desc_show]);
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
        $skill_desc_edit = Skill_item::where('id', $id)->get();
        return view('admin.skilldescEdit' , ['skill_desc_edit' => $skill_desc_edit]);


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
        $old_skill_desc = Skill_item::find($id);

        $request->validate([
            'sk_img' => 'required|image',
            'sk_title_id' => 'required',
            'name'   => 'required'
        ]);


        $imageName = time().'.'.$request->sk_img->extension();
        $old_skill_desc->sk_show_img = $request->sk_show_img = $imageName ;
        $old_skill_desc->sk_img = $request->sk_img->move(public_path('/admin/uploads') , $imageName);
        $old_skill_desc->sk_title_id = $request->sk_title_id;
        $old_skill_desc->name = $request->name;
        $old_skill_desc->save();
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
        $old_skill_desc = Skill_item::find($id);
        $old_skill_desc->delete();
        return redirect()->back()->with('message' , 'its deleted');

    }
}
