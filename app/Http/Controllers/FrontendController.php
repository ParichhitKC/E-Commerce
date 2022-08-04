<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('frontend.index')->with(compact('products'));

    }
    public function shop(){
        $products = Product::all();
        return view('frontend.shop')->with (compact('products'));
    }
    public function about(){
        $products = Product::all();
        return view('frontend.about')->with (compact('products'));
    }
    public function contact(){
        $products = Product::all();
        return view('frontend.contact')->with (compact('products'));
    }
    public function account(){
        $products = Product::all();
        return view('frontend.account')->with (compact('products'));
    }
    public function cart(){
        $products = Product::all();
        return view('frontend.cart')->with (compact('products'));
    }
}
