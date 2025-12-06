<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//Home page
Route::get('/',[HomeController::class,'index'])->name('home.index');

//About page
Route::get('/about',[AboutController::class,'index'])->name('home.about');