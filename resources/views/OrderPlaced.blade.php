<!DOCTYPE html>
<html lang="en">
<body>
    <h1> Order Placed </h1>
    <p>Your order is placed!!
    @foreach(session('test') as $y)
     {{ $y }} 
   @endforeach</p>
</body>
</html>