<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Event;
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
    public function event(){
        return view('front-end.event.event',[
            'events'=>Event::where('status',1)->orderBy('id','desc')->get()
        ]);
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
    public function blogSingle($id){
//        self::$blog =; Blog::where('id',$id)->first();
       return view('front-end.blog.blog-single',[
         'blogs' => Blog::where('id',$id)->first(),
           'category'=>Category::all()
       ]);
    }

    public static function eventSingle($id){
        return view('front-end.event.event-single',[
            'events'=>Event::where('id',$id)->first()
        ]);
    }
}
