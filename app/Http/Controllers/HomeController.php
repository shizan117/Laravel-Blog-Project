<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        return view('front-end.home.home');
    }
    public function about(){
        return view('front-end.about.about');
    }

    public function upComing(){
        return view('front-end.upComing.upComing');
    }
}
