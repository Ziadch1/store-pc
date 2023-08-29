@extends('layouts.master')
@section('contents')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .login-container {
            max-width: 400px;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            max-width: 380px; /* Adjust the max-width to your desired value */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .error-message {
            color: red;
            margin-top: 5px;
        }

        .form-group.remember-me {
            display: flex;
            align-items: center;
        }

        .form-group.remember-me input[type="checkbox"] {
            margin-right: 5px;
        }

        .form-group.submit-button button {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-group.submit-button button:hover {
            background-color: #45a049;
        }

        .form-group.forgot-password,
        .form-group.register-link {
            text-align: center;
        }

        .form-group.forgot-password a,
        .form-group.register-link a {
            color: #007bff;
            text-decoration: none;
        }

        .form-group.forgot-password a:hover,
        .form-group.register-link a:hover {
            text-decoration: underline;
        }

        /* Add any animations or icon styles here */

    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group remember-me">
                <input type="checkbox" id="remember_me" name="remember">
                <label for="remember_me">Remember me</label>
            </div>

            <div class="form-group submit-button">
                <button type="submit">Log in</button>
            </div>
        </form>

        <div class="form-group forgot-password">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">Forgot your password?</a>
            @endif
        </div>

        <div class="form-group register-link">
            <span>Don't have an account? <a href="{{ route('register') }}">Register</a></span>
        </div>
    </div>
</body>
</html>
@endsection