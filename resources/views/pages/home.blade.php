@extends('layouts.master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .swiper-container {
            width: 100%;
            max-height: 400px;
            margin-bottom: 20px;
        }

        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
            font-weight: bold;
        }

        #categories {
            text-align: center;
            margin-top: 20px;
        }

        .categories-title {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            justify-items: center;
        }

        .card {
            width: 200px;
            background-color: #f1f1f1;
            box-shadow: 0 0 5px rgba(0, 0, 0, .2);
            border-radius: 5px;
            overflow: hidden;
            transition: transform .3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-img-top {
            width: 100%;
            height: auto;
        }

        .card-button {
            padding: 10px;
        }

        .card-button button {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            transition-duration: .4s;
            cursor: pointer;
            border-radius: 5px;
        }

        .card-button button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('images/slider/slider-1.png') }}" alt="Image 1">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/slider/slider-2.jpg') }}" alt="Image 2">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/slider/slider-3.jpg') }}" alt="Image 3">
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <div id="categories">
            <h1 class="categories-title">Categories</h1>
            <div class="cards">
                <div class="card">
                    <a href="/pcportable">
                        <img class="card-img-top" src="{{ asset('images/categories/laptop (2).png') }}" alt="Card image">
                    </a>
                    <div class="card-button">
                        <a href="/pcportable"><button>Acheter</button></a>
                    </div>
                </div>
                <div class="card">
                    <a href="/pcgamer">
                        <img class="card-img-top" src="{{ asset('images/categories/pc.png') }}" alt="Card image">
                    </a>
                    <div class="card-button">
                        <a href="/pcgamer"><button>Acheter</button></a>
                    </div>
                </div>
                <div class="card">
                    <a href="/accessoire">
                        <img class="card-img-top" src="{{ asset('images/categories/acse.png') }}" alt="Card image">
                    </a>
                    <div class="card-button">
                        <a href="/accessoire"><button>Acheter</button></a>
                    </div>
                </div>
                <div class="card">
                    <a href="/monitors">
                        <img class="card-img-top" src="{{ asset('images/categories/bureau (2).png') }}" alt="Card image">
                    </a>
                    <div class="card-button">
                        <a href="/monitors"><button>Acheter</button></a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection