<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: url('/images/login.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Adding a gradient overlay to the background */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.2)); /* Dark to light gradient */
            z-index: -1;
        }

        .login-container {
            padding: 50px 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            backdrop-filter: blur(15px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
            color: #fff;
            width: 100%;
            max-width: 550px;
            margin-top: 80px;
            animation: fadeIn 1s ease-out;
        }

        /* Keyframe animation for fade-in effect */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h3 {
            font-weight: 600;
            color: #fff;
            text-shadow: 2px 2px 5px rgba(255, 255, 255, 0.5);
        }

        label {
            font-weight: 500;
            color: #fff;
        }

        .form-control {
            border-radius: 8px;
            padding: 12px;
            font-size: 16px;
            background-color: rgba(255, 255, 255, 0.8);
            color: #333;
        }

        .form-control:focus {
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.7);
        }

        .btn-primary {
            border-radius: 8px;
            padding: 12px;
            font-size: 16px;
            background: linear-gradient(to right, #20c997, #0d9488); /* Gradient from teal-green */
            border: none;
        }

        .btn-primary:hover {
            background: linear-gradient(to right, #0d9488, #0f766e);
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
        }

        .register-link {
            font-size: 14px;
            color: #fff;
        }

        .register-link a {
            color: #ffc107;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        .alert {
            border-radius: 8px;
        }

    </style>
</head>
<body>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="login-container">
            <h3 class="text-center mb-4">Login</h3>

            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>

            <p class="text-center mt-3 register-link">
                Don't have an account? <a href="{{ route('register') }}">Register</a>
            </p>
        </div>
    </div>

</body>
</html>
