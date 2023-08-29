<!DOCTYPE html>
<html>
<head>
  <title>Cool Card Products</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .card {
      background-color: #f5f5f5;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      padding: 20px;
      margin-bottom: 20px;
      width: 300px;
      transition: all 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    .image-container img {
      width: 100%;
      height: auto;
      border-radius: 8px;
    }

    .title {
      margin-top: 10px;
      font-size: 18px;
      font-weight: bold;
      color: #333;
    }

    .price-container {
      margin-top: 10px;
      font-size: 16px;
      color: #333;
    }

    .last-price {
      color: #999;
      font-size: 14px;
    }

    .increased-price {
      color: #f00;
      font-weight: bold;
    }

    .button-container {
      margin-top: 15px;
    }

    .add-to-cart {
      background-color: #ff7f00;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      font-size: 14px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .add-to-cart:hover {
      background-color: #ff5e00;
    }

    /* Pop-up Styling */
    .pop-up {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #fff;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      z-index: 9999;
      display: none;
    }

    .pop-up.show {
      display: block;
    }

    .pop-up-message {
      margin-bottom: 20px;
      font-size: 18px;
      text-align: center;
    }

    .pop-up-close {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 20px;
      color: #999;
      cursor: pointer;
    }

    .pop-up-icon {
      font-size: 36px;
      text-align: center;
      margin-bottom: 20px;
    }

    .pop-up-icon.success {
      color: #00c853;
    }

    .pop-up-icon.error {
      color: #f44336;
    }

    /* Blur Background */
    .blur {
      filter: blur(4px);
    }
  </style>
</head>
<body>
  @extends('layouts.master')
  {{-- @extends('pages.test') --}}
  @section('content')
  <div class="container">
    @foreach ($monitors as $monitor)
    <div class="card">
      <div class="image-container">
        <a href="#" onclick="refreshPageAndGo('{{ route('detailsP', ['id' => $monitor->id]) }}');">
          <img src="{{ asset($monitor->img) }}" alt="Product Image">
        </a>
      </div>
      <h2 class="title">{{ $monitor->title }}</h2>
      <div class="price-container">
        <span class="price">{{ $monitor->prix }} DH</span>
        @php
        $lastPrice = $monitor->prix * 1.15;
        @endphp
        <span class="last-price">Last Price: <span class="increased-price">${{ number_format($lastPrice, 2) }}</span></span>
      </div>
      <div class="button-container">
        @if (Route::has('login'))
            @auth
            <form action="{{ route('panier', $monitor->id) }}" method="get">
              @csrf
              <button class="add-to-cart" type="submit">Add to Cart</button>
          </form>
            @else
            <form action="{{ route('login') }}" method="get">
              <button class="add-to-cart" type="submit">Add to Cart</button>
          </form>
            @endauth
        @endif
      </div>
    </div>
    @endforeach
  </div>

  {{-- Pop-up Success Message --}}
  @if (session('success'))
  <div class="pop-up show">
    <span class="pop-up-close" onclick="closePopUp()">&times;</span>
    <div class="pop-up-icon success">&#10004;</div>
    <div class="pop-up-message">{{ session('success') }}</div>
  </div>
  @endif

  {{-- Pop-up Error Message --}}
  @if (session('error'))
  <div class="pop-up show">
    <span class="pop-up-close" onclick="closePopUp()">&times;</span>
    <div class="pop-up-icon error">&#10006;</div>
    <div class="pop-up-message">{{ session('error') }}</div>
  </div>
  @endif

  <script>
    function refreshPageAndGo(url) {
      location.reload(); // Refresh the page
      setTimeout(function() {
        window.location.href = url; // Go to the specified URL after a short delay
      }, 100);
    }

    // Close the pop-up
    function closePopUp() {
      var popUp = document.querySelector('.pop-up');
      popUp.classList.remove('show');
      sessionStorage.setItem('popUpShown', 'true');
    }

    // Show the pop-up
    function showPopUp() {
      var popUp = document.querySelector('.pop-up');
      popUp.classList.add('show');
      document.body.classList.remove('blur');
    }

    // Auto-dismiss the pop-up after a certain time
    setTimeout(function() {
      closePopUp();
    }, 5000);

    // Show the pop-up when success/error message exists and it hasn't been shown before
    if (document.querySelector('.pop-up') && sessionStorage.getItem('popUpShown') !== 'true') {
      showPopUp();
    }

    // Prevent the pop-up from closing when clicking inside the pop-up
    var popUp = document.querySelector('.pop-up');
    popUp.addEventListener('click', function(event) {
      event.stopPropagation();
    });

    // Close the pop-up when clicking outside the pop-up
    document.addEventListener('click', function(event) {
      if (!popUp.contains(event.target)) {
        closePopUp();
      }
    });
  </script>


  @endsection
</body>
</html>
