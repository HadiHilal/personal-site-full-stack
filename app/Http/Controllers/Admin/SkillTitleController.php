<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Skill_title;
use Illuminate\Http\Request;

class SkillTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.skilltitle');
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
            'title' => 'required'
        ]);

        //
        $new_skill_t = new Skill_title();
        $new_skill_t->title = $request->title;
        $new_skill_t->save();
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
        $skill_t_show = Skill_title::all();
        return view('admin.skilltitleShow' , ['skill_t_show' => $skill_t_show]);
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
        $skill_t_edit = Skill_title::where('id', $id)->get();
        return view('admin.skilltitleEdit' , ['skill_t_edit' => $skill_t_edit]);
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
        $old_skill_t = Skill_title::find($id);

        $request->validate([
            'title' => 'required',

        ]);

        $old_skill_t->title = $request->title;

        $old_skill_t->save();

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
        $old_skill_t = Skill_title::find($id);
        $old_skill_t->delete();
        return redirect()->back()->with('message' , 'its deleted');
    }
}
