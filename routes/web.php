<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//Register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register-store', [RegisterController::class, 'store'])->name('register.store');

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login');

//Home page
Route::get('/', [HomeController::class, 'index'])->name('home.index');

//About page
Route::get('/about', [AboutController::class, 'index'])->name('home.about');

//Products page
Route::get('/products', [ProductsController::class, 'index'])->name('home.products');
Route::get('/product-details', [ProductsController::class, 'showProductDetails'])->name('product.details');
Route::get('/show-cart', [ProductsController::class, 'showCart'])->name('show.cart');
Route::get('/show-checkout', [ProductsController::class, 'showCheckout'])->name('show.checkout');

//Gallery page
Route::get('/gallery', [GalleryController::class, 'index'])->name('home.gallery');

//Contact page
Route::get('/contact', [ContactController::class, 'index'])->name('home.contact');

//User Dashboard
Route::middleware('auth')->group(function () {
    Route::get('/user-dashboard', [UserController::class, 'index'])->name('user.dashboard');
});
