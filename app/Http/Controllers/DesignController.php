<?php

namespace App\Http\Controllers;
use DB;
use App\About;
use App\Contact;
use App\Skill_item;
use App\Skill_title;
use Illuminate\Http\Request;

class DesignController extends Controller
{

    public function index(){

        return view('home');
    }

     public function showporto(){
        return view('portofolio');
    }
    public function showskills(){

        return view('skills');
    }

    public function showcontact(){
        return view('contact');
    }
    public function addcontact(Request $request){

        $request->validate([
            'name'    => 'required',
            'email'   => 'required',
            'message' => 'required'
        ]);
        $new_contact = new Contact();
        $new_contact->name = $request->name;
        $new_contact->email = $request->email;
        $new_contact->message = $request->message;
        $new_contact->save();
        return redirect()->back()->with('message' , 'the message sent');


    }
}
