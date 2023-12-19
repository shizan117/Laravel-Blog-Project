<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Event;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function dashboard(){
       return view('admin.dashboard.dashboard',[
           'blogs' => Blog::where('status',1)->orderBy('id','desc')->get(),
            'events'=>Event::where('status',1)->orderBy('id','desc')->get()
       ]);
   }
}
