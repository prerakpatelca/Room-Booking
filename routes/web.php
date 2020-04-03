<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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

Route::get('set/{value}/{value2}', function($value,$value2){
    session(["key" => $value,"anotherkey" => $value2]);
    echo "Setting session key to ". $value . " and " . $value2;
    echo session("key") . session("anotherkey");
});

Route::get('get',function(){
    echo session("key") . session("anotherkey");
});

Route::get('/product/{product}',['uses' => 'Products@addToCart']);
