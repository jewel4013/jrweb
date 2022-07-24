<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    public function index(){
        return view('site.index');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function extra(){
        return view('extra');
    }



}
