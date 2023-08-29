<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />

  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- Custom CSS -->
  <style>
    @media (min-width: 1025px) {
      .h-custom {
        height: 100vh !important;
      }
    }

    .card-registration .select-input.form-control[readonly]:not([disabled]) {
      font-size: 1rem;
      line-height: 2.15;
      padding-left: .75em;
      padding-right: .75em;
    }

    .card-registration .select-arrow {
      top: 13px;
    }

    .bg-grey {
      background-color: #eae8e8;
    }

    @media (min-width: 992px) {
      .card-registration-2 .bg-grey {
        border-top-right-radius: 16px;
        border-bottom-right-radius: 16px;
      }
    }
    @media (max-width: 991px) {
      .card-registration-2 .bg-grey {
        border-bottom-left-radius: 16px;
        border-bottom-right-radius: 16px;
      }
    }
  </style>
</head>

<body>
  @extends('layouts.master')
  @section('content')
  <br>
  <div class="container">
    @if (count($cart_products) > 0)
    <table class="table">
      <thead>
        <tr>
          <th>Image</th>
          <th>Title</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>En stock</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($cart_products as $index => $cart_product)
        <tr>
          <td><img src="{{ asset($cart_product->img) }}" alt="" width="100" height="100"></td>
          <td>{{ $cart_product->title }}</td>
          <td class="price">{{ $cart_product->prix}}DH</td>
          <td>
            <div class="input-group">
              <div class="input-group-prepend">
                <button class="btn btn-link quantity-button" data-change="-1" data-index="{{ $index }}"><i class="fas fa-minus"></i></button>
              </div>
              <input type="number" class="form-control quantity-input" value="1" min="1" max="{{ $cart_product->quantity }}" readonly>
              <div class="input-group-append">
                <button class="btn btn-link quantity-button" data-change="1" data-index="{{ $index }}"><i class="fas fa-plus"></i></button>
              </div>
            </div>
          </td>
          <td>
            {{
              $cart_product->quantity
            }}
          </td>
          <td>
            <form action="{{ route('paniers.destroy', $cart_product->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="row">
      <div class="col-md-6 offset-md-6">
        <h4>Total Price: <span id="total-price"><span style="color:rgb(2, 36, 141);font-weight :800">{{ $total_price }}DH</span></h4>
        <h4>Number of Products in Cart: <span style="color:red;font-weight :800">{{ count($cart_products) }}</span></h4>
        <button class="btn btn-warning"><a href="/checkout">Continue to ChekOut</a></button>
      </div>
    </div>
    
    @else
    <div class="alert alert-info">Your cart is empty.</div>
    @endif
  </div>
  @endsection

  {{-- <h1 style="color:red;">{{ count($cart_products) }}</h1> --}}
  
  

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-f5m5sF84Twe1xrKr2n2vEVyYYbHMOBxxlNf5WCkmSzq5Jt0/dP9oEZj+gJg21Dkt" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $('.quantity-button').click(function() {
        var change = parseInt($(this).attr('data-change'));
        var index = $(this).attr('data-index');
        var input = $('.quantity-input').eq(index);
        var currentValue = parseInt(input.val());
        var price = $('.price').eq(index);
        var initialPrice = parseInt(price.text().replace("DH", "")) / currentValue;
        var totalPrice = parseInt($('#total-price').text().replace("DH", ""));

        if (currentValue + change >= 1 && currentValue + change <= parseInt(input.attr('max'))) {
          input.val(currentValue + change);
          price.text((initialPrice * (currentValue + change)) + "DH");
          totalPrice += (initialPrice * change);
          $('#total-price').text(totalPrice + "DH");
        }
      });
    });
  </script>
</body>

</html>
