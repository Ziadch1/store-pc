@extends('layouts.master')
@section('content')
    

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <!-- Add the following CSS style block -->
        <style>
            /* Custom CSS styles */
            body {
                background-color: #f5f5f5;
            }
    
            h2 {
                color: #007bff;
            }
    
            .list-group-item {
                border: none;
                background-color: #fff;
            }
    
            .form-label {
                font-weight: bold;
            }
    
            /* Add more custom styles as needed */
        </style>
        
        <!-- Link to Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
        <title>Document</title>
</head>
<body>
    <div class="container">
       
        @if (session('error1'))
        <div class="alert alert-success">
          {{ session('error1') }}
        </div>
        @endif
        <main>
            <div class="py-5 text-center">
                <h2>Checkout form</h2>
            </div>
            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Your cart</span>
        
                    </h4>
                    <ul class="list-group mb-3">
                        @foreach ($cart_products as $item)
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">{{$item->title}}</h6>
        
                            </div>
                            <p class="text-muted">{{$item->prix}}DH</p>
                        </li><br>
                        <input type="hidden" name="title" value="{{$item->prix}}">
                        @endforeach
                    </ul>
        
        
                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Billing address</h4>
                    <form class="needs-validation" method="post" action="{{route('orders.store')}}">
        
                        @csrf
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">First name</label>
                                <input type="text" class="form-control" name="firstName" id="firstName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
        
                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Last name</label>
                                <input type="text" class="form-control" name="lastName" id="lastName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
        
        
                            <div class="col-12">
                                <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>
        
                            <div class="col-12">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Plaza street" required>
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>
                        </div>
        
                        <hr class="my-4">
                        {{-- <hr class="my-4"> --}}
        
                        <h4 class="mb-3">Payment</h4>
        
        
        
                        <div class="row gy-3">
        
        
                            <div class="col-md-6">
                                <label for="cc-number" class="form-label">Credit card number</label>
                                <input type="text" class="form-control" name="cc_number" id="cc-number" placeholder="" required>
                                <div class="invalid-feedback">
                                    Credit card number is required
                                </div>
                            </div>
        
                            <div class="col-md-3">
                                <label for="cc-expiration" class="form-label">Expiration</label>
                                <input type="text" class="form-control"  id="cc-expiration" placeholder="" required>
                                <div class="invalid-feedback">
                                    Expiration date required
                                </div>
                            </div>
        
                            <div class="col-md-3">
                                <label for="cc-cvv" class="form-label">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                <div class="invalid-feedback">
                                    Security code required
                                </div>
                            </div>
                        </div>
        
                        <hr class="my-4">
        
                        <button class="w-100 btn btn-danger btn-lg" type="submit">Continue to checkout</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
    <br>
</body>
</html>
@endsection