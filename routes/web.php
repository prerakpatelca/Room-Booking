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

Route::get('set/{value}', function($value){
    session(["key" => $value]);
    echo "Setting session key to ". $value;
});

Route::get('get',function(){
    echo session("key");
});