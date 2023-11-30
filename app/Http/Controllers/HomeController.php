<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use function Livewire\get;

class HomeController extends Controller
{

    public function index(){
        return view('front-end.home.home');
    }
    public function about(){
        return view('front-end.about.about');
    }
    public function contact(){
        return view('front-end.contact.contact');
    }
    public function events(){
        return view('front-end.events.events');
    }
  public function gallery(){
        return view('front-end.gallery.gallery');
    }
    public function blog(){
        return view('front-end.blog.blog',[
          'blogs' => Blog::where('status',1)->orderBy('id','desc')->get()
            ]);
    }
    public function donate(){
        return view('front-end.donate.donate');
    }
    public function causes(){
        return view('front-end.causes.causes');
    }

    public function upComing(){
        return view('front-end.upComing.upComing');
    }
    public function blogSingle(){
        return view('front-end.blog.blog-single');
    }
}
