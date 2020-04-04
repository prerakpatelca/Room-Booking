<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vegefoods - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <link href="/css/app.css" rel="stylesheet">

    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/ionicons.min.css"> 
    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body class="goto-here">

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.html">Mohawk Cart</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- END nav -->
    
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
                                        
                                        <td class="price">{{ $cart->price }}</td>
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
                
                <p class="d-flex total-price">
                    <span>Expiry Date</span>
                    <span>${{ session('expirydate') }}</span>
                </p>

                <p class="d-flex total-price">
                    <span>Email Address</span>
                    <span>${{ session('emailaddress') }}</span>
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
        </div>
    </section>
  
        <section class="ftco-section">
      <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-xl-12 ftco-animate">
				
		    </div>
      </div>
    </section>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="/js/jquery.min.js"></script>
  <script src="/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/js/jquery.waypoints.min.js"></script>
  <script src="/js/jquery.stellar.min.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/aos.js"></script>
  <script src="/js/scrollax.min.js"></script>
  <script src="/js/main.js"></script>
  <script src="/js/app.js" defer></script>
  </body>
</html>
