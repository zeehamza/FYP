<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
     public function about()
    {
      return view('about');
    }

    public function blog()
    {
      return view('blog');
    }

    public function dashboard()
    {
      return view('dashboard');
    }

    public function home()
    {
      return view('home');
    }


    public function properti()
    {
      return view('property_single');
    }
}
