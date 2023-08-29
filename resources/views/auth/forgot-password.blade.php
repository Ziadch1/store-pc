@include('layouts.navbar2')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
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

        input[type="email"] {
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

        .submit-button {
            text-align: center;
        }

        .submit-button button {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-button button:hover {
            background-color: #45a049;
        }

        .alert-message {
            text-align: center;
            color: red;
            font-size: 14px;
            margin-top: 20px;
            display: none;
        }
        
        .return-button {
            text-align: center;
            margin-top: 20px;
        }

        .return-button button {
            background-color: #3f51b5;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .return-button button:hover {
            background-color: #2f3f92;
        }
    </style>

    <script>
        function showAlert() {
            var emailInput = document.getElementById("email");
            var email = emailInput.value;
            var alertMessage = document.getElementById("alertMessage");
            var errorMessage = document.getElementById("errorMessage");
            var returnButton = document.getElementById("returnButton");

            // Email validation regular expression
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (email.match(emailRegex)) {
                errorMessage.style.display = "none";
                alertMessage.style.display = "block";
                returnButton.style.display = "block";
            } else {
                errorMessage.style.display = "block";
                alertMessage.style.display = "none";
                returnButton.style.display = "none";
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Forgot Password</h2>
        <div class="mb-4 text-sm text-gray-600">
            <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
        </div>

        <form>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required autofocus>
            </div>

            <div class="submit-button">
                <button type="button" onclick="showAlert()">Email Password Reset Link</button>
            </div>
        </form>

        <div id="errorMessage" class="alert-message">
            <p>Please enter a valid email address.</p>
        </div>

        <div id="alertMessage" class="alert-message">
            <p>Apologies, but we are currently unable to process your request. Please try again later.</p>
        </div>

        <div id="returnButton" class="return-button">
            <button onclick="location.href='{{ route('login') }}'">Return Back</button>
        </div>
    </div>
    <footer style="text-align: center; padding: 20px; background-color: #f0f0f0;">
        <p>© 2023 Your Website. All rights reserved.</p>
    </footer>
</body>
</html>

