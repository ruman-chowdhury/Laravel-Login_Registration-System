<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

session_start();

class AdminController extends Controller
{

//===============read data=================
    public function readIndex(){
        $allData = Admin::all();

        return view('partial.indexContent',compact('allData'));
    }

    public function readHome(){
        $allData = Admin::all();

        $authData = Auth::user();

        return view('partial.homeContent',compact(['allData','authData']));
    }

//================create,insert==============
    public function formShow(){
        return view('pages.formData');
    }

    public function formData(Request $request){

        $request->validate([
            'name' => 'required|min:3|max:25',
            'email' => 'required|email',
            'phone' => 'required',
            'bdate' => 'required',
            'gender' => 'required',
            'address' => 'required'

        ]);

        if ($request->hasFile('image')){

            $img = uniqid().'.jpg';
            $request->image->move('user/images',$img);

            $ad = new Admin();
            $ad->name = $request->name;
            $ad->email = $request->email;
            $ad->phone = $request->phone;
            $ad->date = $request->bdate;
            $ad->gender = $request->gender;
            $ad->address = $request->address;
            $ad->image = $img;
          // dd($ad);
            $ad->save();

        }else{

            $ad = new Admin();
            $ad->name = $request->name;
            $ad->email = $request->email;
            $ad->phone = $request->phone;
            $ad->date = $request->bdate;
            $ad->gender = $request->gender;
            $ad->address = $request->address;
            $ad->save();

        }

       // Session::put('msg','Registration Successfull!');
        return redirect()->route('home.content');

    } //end registration

//=====================edit,update=====================
    public function edit($id){
        $row = Admin::find($id);
        return view('pages.edit',compact('row'));
    }

    public function update(Request $request, $id){

        $request->validate([
            'name' => 'required|min:3|max:25',
            'email' => 'required|email',
            'phone' => 'required',
            'bdate' => 'required',
            'gender' => 'required',
            'address' => 'required'

        ]);

        if ($request->hasFile('image')){

            $img = uniqid().'.jpg';
            $request->image->move('user/images',$img);

            $row = Admin::find($id);
            $row->name = $request->name;
            $row->email = $request->email;
            $row->phone = $request->phone;
            $row->date = $request->bdate;
            $row->gender = $request->gender;
            $row->address = $request->address;
            $row->image = $img;
            $row->save();

        }else{

            $row = Admin::find($id);
            $row->name = $request->name;
            $row->email = $request->email;
            $row->phone = $request->phone;
            $row->date = $request->bdate;
            $row->gender = $request->gender;
            $row->address = $request->address;
            $row->save();

        }

        Session::put('msg','Data updated now!');
        return redirect()->route('home.content');

        //return view('pages.edit',compact('row'));
    }

//=======================delete-======================
    public function delete($id){

        $row = Admin::find($id);
        $row->delete();

        return redirect()->route('home.content');
    }

//=======================view-======================
    public function view($id){
        $row = Admin::find($id);

//        if (Auth::check()){
//            dd('ache');
//        }else{
//            dd('nai');
//        }

        return view('pages.view')->with('row',$row);
    }


} //end AdminController class
