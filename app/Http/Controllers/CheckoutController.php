<?php
// StAuth10065: I Prerak Patel, 000825410 certify that this material is my original work. 
// No other person's work has been used without due acknowledgement. I have not made my work available to anyone else.

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grandtotal = 0;
        $cart = session('test');

        foreach($cart as $eachProduct)
        {
            $grandtotal += $eachProduct->total;
        }
        session(['grandtotal' => $grandtotal]);
        return view('checkout',['carts' => $cart,'grandtotal' => session('grandtotal')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session(['firstname' => $request->input('firstname') ]);
        session(['lastname' => $request->input('lastname') ]);
        session(['creditcard' => $request->input('creditcard') ]);
        session(['expirydate' => $request->input('expirydate') ]);
        session(['emailaddress' => $request->input('emailaddress') ]);
        return redirect()->route('mail');
    }
}
