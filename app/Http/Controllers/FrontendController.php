<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\game;
use App\Models\Register;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
   public function about(){
    return view('about');
   }

   public function home(){
    return view('home');
   }

   public function blog(){
    return view('blog');
   }

   public function contactus(){
    return view('contactus');
   }

   public function game(){
    return view('game');
   }

   public function register(){
    return view('register');
   }

   public function table(){
    $datas = Register::get();
    // dd($datas);
    return view('table',compact('datas'));
   }

   public function submit(request $request){
    $request->validate([
        'name'=>'required|min:8',
        'email'=>'required|email',
        'subject'=>'required|min:10|max:20',
        'message'=>'nullable|min:1'
    ]);
    contact::create($request->all());
    return redirect()->back()->with('success', 'Student registered successfully!');

   }
   public function swikrity(request $request){
    game::create($request->all());
    return redirect()->back()->with('success');
   }

   


    public function reg(request $request){
        $request->validate([
        'full_name'=>'required|min:8',
        'email'=>'required|email',
        'phone'=>'required|min:10|max:20',
        'college'=>'nullable|min:1'
    ]);
        Register::create($request->all());
        return redirect()->back()->with('success', 'Student registered successfully!');
    }
    public function edit(string $id){
        $userdata = Register::find($id);
        return view ('edit', compact('userdata'));
    }

    public function update (Request $request, Register $register){
        $register->update($request->all());
        return redirect()->to('/table');
        
    }
}
