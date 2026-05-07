<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\game;
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

   public function submit(request $request){
    $request->validate([
        'name'=>'required|min:8',
        'email'=>'required|email',
        'subject'=>'required|min:10|max:20',
        'message'=>'nullable|min:1'
    ]);
    contact::create($request->all());
    return view('sucess');

   }
   public function swikrity(request $request){
    game::create($request->all());
    return view('sucess');

    public function 


   
}
}