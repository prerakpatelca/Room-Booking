<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class Products extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('index',['products' => $products]);
    }

    public function addToCart()
    {
        return "you clicked add to cart!!";
    }
}
