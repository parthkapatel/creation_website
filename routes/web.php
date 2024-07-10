<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'index'])->name("main");
Route::get('projects',[HomeController::class,'projects'])->name("projects");
Route::get('about-us',[HomeController::class,'about_us'])->name("about_us");
Route::get('contacts',[HomeController::class,'contacts'])->name("contacts");


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin routes
Route::middleware(['auth'])->prefix("admin")->as("admin.")->group(function (){
    Route::get("/",function (){
        dd("here");
    });
});
