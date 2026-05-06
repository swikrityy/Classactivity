<?php

namespace App\Http\Controllers;

use App\Models\contact;
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

   public function submit(request $request){
    contact::create($request->all());

    return view('sucess');

   }

   
}
