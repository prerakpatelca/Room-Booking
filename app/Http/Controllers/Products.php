<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Products extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $emptyCart = [];
        session(['test' => $emptyCart ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('index',['products' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $products = Product::get();
        $productsCart = session('test');

        foreach($productsCart as $pos => $eachProduct)
        {
            if($eachProduct->id == $product->id )
            {
                $eachProduct->quantity += 1;
                $eachProduct->total = $eachProduct->quantity*$eachProduct->price;
                $productsCart[$pos] = $eachProduct;
                return redirect()->action('Products@index');
            }
        }
        $temp = $product;
        $temp['quantity'] = 1;
        $temp['total'] = $product->price;
        $updatedProduct = $temp;
        array_push($productsCart,$updatedProduct);
        
        session(['test' => $productsCart]);
        return redirect()->action('Products@index');
    }
}