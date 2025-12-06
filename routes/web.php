<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//Home page
Route::get('/',[HomeController::class,'index'])->name('home.index');

//About page
Route::get('/about',[AboutController::class,'index'])->name('home.about');

//Products page
Route::get('/products',[ProductsController::class,'index'])->name('home.products');
Route::get('/product-details',[ProductsController::class,'showProductDetails'])->name('product.details');

//Gallery page
Route::get('/gallery',[GalleryController::class,'index'])->name('home.gallery');

//Contact page
Route::get('/contact',[ContactController::class,'index'])->name('home.contact');