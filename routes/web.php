<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/events',[HomeController::class,'events'])->name('events');
Route::get('/gallery',[HomeController::class,'gallery'])->name('gallery');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/blog/single',[HomeController::class,'blogSingle'])->name('blog.single');
Route::get('/donate',[HomeController::class,'donate'])->name('donate');
Route::get('/causes',[HomeController::class,'causes'])->name('causes');


Route::get('/upComing',[HomeController::class,'upComing'])->name('upComing');
