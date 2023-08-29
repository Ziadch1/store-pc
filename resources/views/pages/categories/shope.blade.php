<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/png" href="../../images/icons/favicon.png" />
    <link rel="stylesheet" type="text/css" href="../../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="../../fonts/linearicons-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="../../vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../../vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="../../vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="../../vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../../vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="../../vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="../../vendor/MagnificPopup/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="../../vendor/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../../css/util.css">
    <link rel="stylesheet" type="text/css" href="../../css/main.css">
    <style>
        .button-container{margin-top:20px}.button-container button{padding:10px 20px;margin:5px;font-size:16px;background-color:#4caf50;color:#fff;border:none;cursor:pointer;transition:background-color .3s ease}.button-container button:hover{background-color:#45a049}
    </style>
</head>

<body class="animsition">
    @extends('layouts.master')
    @section('content')
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="bg0 m-t-23 p-b-140">
            <div class="container">
                <div class="flex-w flex-sb-m p-b-52">
                    <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">All Products</button>
                        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".pcgamer">Pc Gamer</button>
                        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".pcportable">Pc Portable</button>
                        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".Monitors">Monitors</button>
                        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".accessoires">accessoires</button>
                    </div>
                </div>
                @php
                    $productTypes = ['pcgamer', 'Monitors', 'pcportable', 'accessoires'];
                    $productsByType = array_fill_keys($productTypes, []);
                    foreach ($productTypes as $type) {
                        $productsByType[$type] = \App\Models\Product::where('type', strtolower($type))->get();
                    }
                @endphp
                <div class="row isotope-grid">
                    @foreach ($productsByType as $type => $products)
                        @foreach ($products as $product)
                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{ $type }}">
                                <div class="block2">
                                    <div class="block2-pic hov-img0">
                                        <img src="{{ asset($product->img) }}" alt="IMG-PRODUCT">
                                    </div>
                                    <div class="block2-txt flex-w flex-t p-t-14">
                                        <div class="block2-txt-child1 flex-col-l">
                                            <a href="{{ route('detailsP', ['id' => $product->id]) }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">{{ $product->title }}</a>
                                            <span class="stext-105 cl3">{{ $product->prix }}DH</span>
                                        </div>
                                    </div>
                                    <div class="button-container">
                                        @if (Route::has('login'))
                                            @auth
                                                <form action="{{ route('panier', $product->id) }}" method="get">@csrf<button class="add-to-cart" type="submit">Add to Cart</button></form>
                                            @else
                                                <form action="{{ route('login') }}" method="get"><button class="add-to-cart" type="submit">Add to Cart</button></form>
                                            @endauth
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
                <div class="btn-back-to-top" id="myBtn"><span class="symbol-btn-back-to-top"><i class="zmdi zmdi-chevron-up"></i></span></div>
            </div>
        </div>
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="vendor/animsition/js/animsition.min.js"></script>
        <script src="vendor/isotope/isotope.pkgd.min.js"></script>
        <script src="js/main.js"></script>
    @endsection
</body>

</html>
