<!-- StAuth10065: I Prerak Patel, 000825410 certify that this material is my original work. 
  No other person's work has been used without due acknowledgement. I have not made my work available to anyone else.-->
@extends('app')
@section('content')

    <section class="ftco-section ftco-cart">
        <div class="container">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4">My Cart</h2>
                    <p></p>
                </div>
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table">
                            <thead class="thead-primary">
                              <tr class="text-center">
                                <th>&nbsp;</th>
                                <th>Product name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach(session('test') as $cart)
                                    <tr class="text-center">
                                        
                                        <td class="image-prod"><div class="img" style="background-image:url(img/{{ $cart->image }});"></div></td>
                                        <td class="product-name">
                                            <h3>{{ $cart->name }}</h3>
                                        </td>
                                        <td class="price">${{ $cart->price }}</td>
                                        <td class="price">{{ $cart->quantity }}</td>       
                                        <td class="total">${{ $cart->total }}</td>
                                    </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="cart-detail cart-total p-3 p-md-4">
	            <h3 class="billing-heading mb-4">Cart Total</h3>
	          	<p class="d-flex">
                    <span>Subtotal</span>
                    <span>${{ session('grandtotal') }}</span>
		    	</p>
                <p class="d-flex">
                    <span>Delivery</span>
                    <span>$0.00</span>
                </p>
                <p class="d-flex">
                    <span>Taxes</span>
                    <span>$0.00</span>
                </p>
                <hr>
                <p class="d-flex total-price">
                    <span>Total</span>
                    <span>${{ session('grandtotal') }}</span>
                </p>
		    </div>
            <form action="{{ route('checkout.store') }}" class="billing-form" method="POST">
                <br>
				<h3 class="mb-4 billing-heading">Billing Details</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">First Name</label>
                        <input name="firstname" type="text" class="form-control" required>
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Last Name</label>
	                  <input name="lastname" type="text" class="form-control" required>
	                </div>
                </div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="creditcard">Credit Card Number</label>
	                    <input name="creditcard" type="number" class="form-control" required>
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
                        <label for="expirydate">Expiry Date</label>
	                    <input name="expirydate" type="text" class="form-control" required>
	                </div>
		            </div>
	                <div class="col-md-6">
	                    <div class="form-group">
                            <label for="emailaddress">Email Address</label>
                            <input name="emailaddress" type="email" class="form-control" required>
	                    </div>
                    </div>
                    @csrf
                    <div class="w-100">
                        <button type="submit" class="btn btn-primary py-3 px-4" style="color:white;">Place Order</button>
                    </div>
            </form>
        </div>
    </section>

@endsection
