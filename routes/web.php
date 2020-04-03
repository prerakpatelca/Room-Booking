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

Route::get('set/{value}/{value2}', function($value,$value2){
    session(["key" => $value,"anotherkey" => $value2]);
    echo "Setting session key to ". $value . " and " . $value2;
    echo session("key") . session("anotherkey");
});

Route::get('get',function(){
    echo session("key") . session("anotherkey");
});

Route::resource('products', 'Products');
Route::resource('checkout', 'CheckoutController');

Route::get('email',function(){
    try{
        Mail::raw("Body of the email", function($message){
            $message->from("test@example.com","Laravel");
            $message->to("patelprerak14@gmail.com");
        });
    }
    catch (Exception $e)
    {
        echo $e->getMessage();
    }
    echo "Email being sent";
});

Route::get('mail',function(){
    try{
        Mail::to("patelprerak14@gmail.com")->send(new OrderPlaced());
    }
    catch (Exception $e)
    {
        echo $e->getMessage();
    }
    return view('OrderPlaced');
});