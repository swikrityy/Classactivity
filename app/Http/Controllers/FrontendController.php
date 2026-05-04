<?php

namespace App\Http\Controllers;

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
   
}
