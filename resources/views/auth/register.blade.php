<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('/images/register_bg.png') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Light gradient overlay for a soft feel */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(135, 206, 235, 0.7), rgba(255, 250, 250, 0.7)); /* Soft blue to white */
            z-index: -1;
        }

        .register-container {
            padding: 50px 40px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            color: #333;
            width: 100%;
            max-width: 550px;
            animation: fadeIn 1s ease-out;
        }

        /* Fade-in animation */
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
            color: #3c3c3c;
            text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.6);
        }

        label {
            font-weight: 500;
            color: #4f4f4f;
        }

        .form-control {
            border-radius: 8px;
            padding: 12px;
            font-size: 16px;
            background-color: rgba(240, 248, 255, 0.9); /* Light blue background */
            color: #333;
        }

        .form-control:focus {
            box-shadow: 0 0 5px rgba(70, 130, 180, 0.7); /* Light blue glow on focus */
            border-color: #4682b4; /* Steel blue border */
        }

        .btn-primary {
            border-radius: 8px;
            padding: 12px;
            font-size: 16px;
            background: linear-gradient(to right, #66cc99, #00b3b3); /* Soft teal gradient */
            border: none;
        }

        .btn-primary:hover {
            background: linear-gradient(to right, #00b3b3, #66cc99); /* Reversed gradient on hover */
        }

        .alert {
            border-radius: 8px;
        }

        p {
            font-size: 14px;
            color: #555;
        }

        p a {
            color: #66cc99; /* Soft green for the link */
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="register-container">
            <h3 class="text-center mb-4">Register</h3>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>

            <p class="text-center mt-3">
                Already have an account? <a href="{{ route('login') }}">Login</a>
            </p>
        </div>
    </div>

</body>
</html>
