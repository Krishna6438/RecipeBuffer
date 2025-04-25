<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }

        .container {
            margin-top: 50px;
        }

        .btn-primary {
            background: #007bff;
            border-color: #007bff;
            font-size: 1.2rem;
        }

        .btn-primary:hover {
            background: #0056b3;
            border-color: #0056b3;
        }

        .list-group-item {
            border-radius: 10px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .list-group-item:hover {
            background-color: #f1f1f1;
            transform: scale(1.05);
        }

        h2 {
            font-size: 40px; /* Increased font size */
            font-weight: bold;
            color: #333;
        }

        h4 {
            font-size: 2rem;
            font-weight: 600;
            color: #333;
        }

        p {
            font-size: 1.2rem;
        }

        /* Animated entrance for list items */
        .list-group-item {
            opacity: 0;
            animation: fadeInUp 0.6s forwards;
        }

        .list-group-item:nth-child(odd) {
            animation-delay: 0.2s;
        }

        .list-group-item:nth-child(even) {
            animation-delay: 0.4s;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <!-- Include your navbar here -->
    @include('navbar')

    <div class="container mt-4">
    <h2 class="mb-4 animate__animated animate__fadeIn" style="font-size: 4rem;">👋 Heyy, {{ Auth::user()->name }}!</h2>


        @if(session('success'))
            <div class="alert alert-success mb-4 p-4 bg-green-100 text-green-800 border-l-4 border-green-500 rounded-lg animate__animated animate__fadeInUp">
                {{ session('success') }}
            </div>
        @endif

        <div class="mb-4">
            <a href="{{ route('recipes.create') }}" class="btn btn-primary py-3 px-5 rounded-full font-bold text-lg hover:bg-caramel transition-all duration-300 transform hover:scale-110">
                + Add New Recipe
            </a>
        </div>

        <h4 class="mt-6 mb-3 animate__animated animate__fadeInUp">📋 Your Recipes</h4>

        @if($recipes->count())
            <div class="list-group mt-2">
                @foreach($recipes as $recipe)
                    <a href="{{ route('recipes.show', $recipe->id) }}" class="list-group-item list-group-item-action animate__animated animate__fadeInUp">
                        <div class="d-flex justify-content-between">
                            <div>
                                <strong class="text-xl text-dark">{{ $recipe->title }}</strong> <br>
                                <small class="text-sm text-muted">{{ $recipe->cuisine_type }} | {{ $recipe->difficulty_level }}</small>
                            </div>
                            <span class="text-muted">{{ $recipe->created_at->diffForHumans() }}</span>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="mt-3">
                {{ $recipes->links() }} {{-- Pagination links --}}
            </div>
        @else
            <p class="text-muted mt-3 text-lg">You haven't added any recipes yet.</p>
        @endif
    </div>

    <!-- Bootstrap JS (optional for better interaction) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
