<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){

        return view('home.products');
    }

    public function showProductDetails(){

        return view('home.product-details');
    }

    public function showCart(){

        return view('home.cart');
    }

    public function showCheckout(){

        return view('home.checkout');
    }
}
