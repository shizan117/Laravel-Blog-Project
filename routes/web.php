<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AboutController;




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
Route::get('/event',[HomeController::class,'event'])->name('event');
Route::get('/event/single/{id}',[HomeController::class,'eventSingle'])->name('event.single');
Route::get('/gallery',[HomeController::class,'gallery'])->name('gallery');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/blog/single/{id}',[HomeController::class,'blogSingle'])->name('blog.single');
Route::get('/donate',[HomeController::class,'donate'])->name('donate');
Route::get('/causes',[HomeController::class,'causes'])->name('causes');


Route::get('/upComing',[HomeController::class,'upComing'])->name('upComing');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::resources(['categories'=> CategoryController::class]);
    Route::resources(['blogs'=> BlogController::class]);
    Route::resources(['events'=> EventController::class]);
    Route::resources(['abouts'=> AboutController::class]);

});
