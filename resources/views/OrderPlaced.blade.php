@extends('app')
@section('content')

    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="alert alert-success" role="alert">
                Reciept successfully sent to {{ session('emailaddress') }}
            </div>
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Order Placed</h2>
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
                                        
                                        <td class="price">{{ $cart->price }}</td>
                                        <td class="price">{{ $cart->quantity }}</td>       
                                        <td class="total">{{ $cart->total }}</td>
                                    </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="cart-detail cart-total p-3 p-md-4">
                <h3 class="billing-heading mb-4">Billing Detials</h3>
	          	<p class="d-flex">
                    <span>First Name</span>
                    <span>{{ session('firstname') }}</span>
		    	</p>
                <p class="d-flex">
                    <span>Last Name</span>
                    <span>{{ session('lastname') }}</span>
                </p>
                <p class="d-flex">
                    <span>Credit Card</span>
                    <span>{{ session('creditcard') }}</span>
                </p>
                
                <p class="d-flex">
                    <span>Expiry Date</span>
                    <span>{{ session('expirydate') }}</span>
                </p>

                <p class="d-flex total-price">
                    <span>Email Address</span>
                    <span>{{ session('emailaddress') }}</span>
                </p>
                <hr>
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
            <a href="{{ route('goback') }}" class="btn btn-primary py-3 px-4">Go Back to Shopping Page</a>
        </div>
    </section>

@endsection