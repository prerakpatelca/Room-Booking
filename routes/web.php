<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Mail\OrderPlaced;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Products@index');

Route::resource('products', 'Products');
Route::resource('checkout', 'CheckoutController');

Route::get('mail',function(){
    try{
        Mail::to("patelprerak14@gmail.com")->send(new OrderPlaced());
    }
    catch (Exception $e)
    {
        echo $e->getMessage();
    }
    return view('OrderPlaced');

})->name('mail');

Route::get('goback',function(){

    $emptyCart = [];
    session(['test' => $emptyCart ]);
    return App::make('App\Http\Controllers\Products')->index();
    
})->name('goback');