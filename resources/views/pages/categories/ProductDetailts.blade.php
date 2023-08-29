<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>{{ $product->title }}</title>
    <style>
        /* Reset some default styles */
        body,
        h1,
        h2,
        h3,
        p,
        ul,
        li {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
        }

        /* Navbar styles */
        .navbar {
            background-color: #ffffff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 555;
        }

        .navbar ul.main-menu {
            list-style-type: none;
            display: flex;
            align-items: center;
        }

        .navbar li {
            margin-right: 10px;
            list-style-type: none; /* Remove list item markers from the navbar */
        }

        .navbar li a {
            display: block;
            color: #333;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar li a:hover {
            background-color: #ddd;
        }

        /* Cart icon and login/register button */
        .navbar .right-items {
            display: flex;
            align-items: center;
        }

        .navbar .cart-icon {
            margin-right: 20px;
        }

        .navbar .login-register-btn {
            margin-right: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .navbar .login-register-btn:hover {
            background-color: #45a049;
        }

        /* Dropdown menu */
        .navbar .dropdown {
            position: relative;
        }

        .navbar .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .navbar .icon {
            cursor: pointer;
            height: ;
        }

        .navbar .dropdown:hover .dropdown-content {
            display: block;
        }

        .navbar .dropdown-content a {
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .navbar .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .logo {
            height: 60px;
            margin: 10px;
        }

        /* Sidebar styles */
        .sidebar {
            width: 250px;
            background-color: #f8f8f8;
            height: 100%;
            position: fixed;
            top: 60px;
            /* Adjust this value to accommodate the height of the fixed navbar */
            right: -250px;
            transition: right 0.3s ease-in-out;
            z-index: 999;
            /* Make sure the sidebar appears above the navbar */
        }

        .sidebar.open {
            right: 0;
        }

        .sidebar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .sidebar li a {
            display: block;
            color: #333;
            padding: 10px 16px;
            text-decoration: none;
        }

        .sidebar li a:hover {
            background-color: #ddd;
        }

        .sidebar .close-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        /* Main content styles */
        .container {
            padding: 20px;
            margin-top: 60px;
            /* Add margin to the top of the container to prevent content overlap with the fixed navbar */
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }

        .image-container {
            flex-basis: 100%;
            max-width: 100%;
            text-align: center;
        }

        img.card-img-top {
            max-width: 100%;
            height: auto;
            max-height: 600px;
        }

        .content-container {
            flex-basis: 100%;
            max-width: 100%;
            padding: 20px;
        }

        h1 {
            margin-bottom: 10px;
        }

        .discount {
            text-decoration: line-through;
            color: red;
            margin-bottom: 10px;
        }

        .price {
            color: green;
            font-weight: 700;
            font-size: 24px;
        }

        #desc {
            border: 1px solid black;
            border-radius: 20px;
            padding: 10px;
            margin-top: 20px;
        }

        p {
            font-size: 18px;
            font-family: serif;
            text-align: justify;
            margin-bottom: 10px;
        }

        #desc-h {
            font-family: Arial, Helvetica, sans-serif;
            margin: 5px;
            font-size: 20px;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Footer styles */
        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        /* Table styles */
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table th,
        .table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #f2f2f2;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .table tbody tr:hover {
            background-color: #f5f5f5;
        }

        /* Add some responsive styles */
        @media screen and (max-width: 768px) {
            .navbar ul.main-menu {
                display: none;
            }

            .navbar .right-items {
                position: absolute;
                right: 10px;
                top: 10px;
            }

            .navbar .right-items>li {
                display: inline-block;
            }

            .navbar .icon {
                margin-left: 10px;
            }

            .navbar .dropdown-content {
                right: 0;
            }

            .sidebar {
                top: 60px;
            }

            .container {
                padding-top: 60px;
            }
        }

        /* Hover effects */
        .navbar li a:hover,
        .navbar .dropdown-content a:hover {
            background-color: #ddd;
            color: #000;
        }

        .add-to-cart:hover {
            background-color: #45a049;
        }

        /* Animation */
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-100%);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .alert-danger {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }

        .alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }
    </style>
</head>

<body>

    <header>
        <!-- Navbar -->
        <nav class="navbar">
            <ul class="main-menu">
                <li><a href="/">
                        <h4 style="font-family: sans-serif; margin: 0; font-weight: 800;">
                            <span style="color: #312EBD">GAMER</span><br>
                            <small style="color: #B903A3">PARADISE</small>
                        </h4>
                    </a>
                </li>
                <li><a href="/">Home</a></li>
                <li><a href="/shope">Shope</a></li>
                <li class="dropdown">
                    <a href="#">Categories</a>
                    <div class="dropdown-content">
                        <a class="dropdown-item" href="/pcgamer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pc-display-horizontal" viewBox="0 0 16 16">
                                <!-- SVG path for PC Gamer icon -->
                            </svg>
                            Pc gamer
                        </a>

                        <a class="dropdown-item" href="/pcportable">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-laptop" viewBox="0 0 16 16">
                                <!-- SVG path for Laptop icon -->
                            </svg>
                            Pc Portable
                        </a>

                        <a class="dropdown-item" href="/monitors">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-display" viewBox="0 0 16 16">
                                <!-- SVG path for Monitor icon -->
                            </svg>
                            Monitors
                        </a>

                        <a class="dropdown-item" href="/accessoire">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-controller" viewBox="0 0 16 16">
                                <!-- SVG path for Controller icon -->
                            </svg>
                            Accessoire
                        </a>
                    </div>
                </li>
                <li><a href="/contact">Contact</a></li>
            </ul>
            <ul class="right-items">
                <li><a href="{{ url('/paniers') }}" class="cart-icon"><i class="fa fa-shopping-cart"></i></a></li>
                @if (Route::has('login'))
                    @auth
                        <li class="dropdown">
                            <a href="#" class="login-register-btn">{{ Auth::user()->name }}</a>
                            <div class="dropdown-content">
                                <a class="dropdown-item" href="{{ url('/profile') }}"><i class="fa fa-user"></i> Profile</a>
                                <a class="dropdown-item" href="{{ url('/paniers') }}"><i class="fa fa-shopping-cart"></i> My
                                    Cart</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="fa fa-sign-out-alt"></i> Logout
                                    </button>
                                </form>
                            </div>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}" class="login-register-btn">Login</a></li>
                        <li><a href="{{ route('register') }}" class="login-register-btn">Register</a></li>
                    @endauth
                @endif
                <li>
                    <i class="fas fa-bars icon" onclick="toggleSidebar()"></i>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <br><br><br>
            <i class="fas fa-times close-icon" onclick="toggleSidebar()"></i>
            <ul class="ul_sk">
                <br><br><br>
                <li><a href="/">Home</a></li>
                <li><a href="/shope">Category</a></li>
                <li><a href="/profile">My Account</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="container">
            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
            <div class="product-container">
                <div class="image-container">
                    <img src="{{ asset($product->img) }}" class="card-img-top" alt="Product Image">
                </div>
                <div class="content-container">
                    <h1>{{ $product->title }}</h1>
                    <p class="discount">-15% <span>{{ $product->prix + (15 * $product->prix) / 100 }} DH</span></p>
                    <p class="price">Prix: {{ $product->prix }} DH</p>
                    <div id="desc">
                        <span id="desc-h">Description</span>
                        <p>{{ $product->description }}</p>
                    </div>
                    <br>
                    <div class="button-container">
                        @if (Route::has('login'))
                            @auth
                                <form action="{{ route('panier', $product->id) }}" method="get">
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
            </div>
        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("open");
        }
    
        // Close the sidebar when clicking on something else
        document.addEventListener("click", function(event) {
            var sidebar = document.getElementById("sidebar");
            if (!event.target.closest(".sidebar") && !event.target.closest(".icon")) {
                sidebar.classList.remove("open");
            }
        });
    </script>
</body>

</html>
