<?php

namespace App\Http\Controllers;

class PageController extends Controller
{

   public function index(){

    return view('index');

   }
   public function about(){

    return view('about');

   }
   public function service(){

    return view('service');

   }
   public function contact(){

    return view('contact');
   }
   public function appointment(){

    return view('appointment');
   }

   public function features(){

    return view('feature');
   }

   public function blog(){

    return view('blog');
   }
   
   public function team(){

    return view('team');
   }
   public function testimonial(){

    return view('testimonial');
   }

   public function error(){

    return view('404');
   }

 }
