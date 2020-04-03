<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Products extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('index',['products' => $products]);
    }

    public function addToCart(Product $product)
    {
        $products = DB::table('products')->where('id',$product->id)->first();
        return "j";
    }
}
