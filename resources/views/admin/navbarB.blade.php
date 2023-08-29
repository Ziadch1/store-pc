<!DOCTYPE html>
<html>

<head>
    <title>Contact Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @include('admin.style')
    <style>
        .navbar {
            position: fixed;
            width: 100%;
            z-index: 555;
        }
    </style>
</head>
<body>
<header>
    <!-- Navbar -->
    <nav class="navbar">
        <ul>
            <li>
                <a href="/">
                    <h5 style="font-family: sans-serif; font-weight: 800;">
                        <span style="color: #312EBD">GAMER</span><br>
                        <small style="color: #B903A3">PARADISE</small>
                    </h5>
                </a>
            </li>
            <li><a href="/">Home</a></li>
            <li><a href="/admin/create">Create Product</a></li>
            <li><a href="/admin/messages">Messages</a></li>
            <li><a href="/admin/orders">Orders</a></li>
        </ul>
        <ul style="list-style-type: none; padding: 0; margin: 0;">
            <li class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user"></i> {{ Auth::user()->name }}
                </a>
                <div class="dropdown-content">
                    <a class="dropdown-item" href="{{ url('/profile') }}">
                        <i class="fa fa-user"></i> Profile
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="fa fa-sign-out-alt"></i> Logout
                        </a>
                    </form>
                </div>
            </li>
            <li style="margin-left: 40px;width:30px" > <!-- Add margin-left for spacing -->
                <i class="fas fa-bars icon"  onclick="toggleSidebar()"></i>
            </li>
        </ul>

    </nav>
</header>
<main>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <br><br><br>
        <i class="fas fa-times close-icon" onclick="toggleSidebar()"></i>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/admin/messages">Messages</a></li>
            <li><a href="/admin/orders">Orders</a></li>
        </ul>
    </div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
<script>
    function toggleSidebar() {
        var sidebar = document.getElementById("sidebar");
        sidebar.classList.toggle("open");
    }
</script>
</body>
</html>
