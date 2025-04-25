<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Sharing Platform</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Background Style -->
    <style>
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background: linear-gradient(rgba(255,255,255,0.9), rgba(255,255,255,0.9)), url('https://images.unsplash.com/photo-1600891964599-f61ba0e24092');
            background-size: cover;
            background-position: center;
            z-index: -1;
        }
    </style>
</head>
<body class="min-h-screen font-sans">

    @include("navbar")

    <div class="container mx-auto px-4 py-14">
        <h1 class="text-5xl font-bold text-center text-purple-800 drop-shadow mb-4">🍲 Discover New Recipes</h1>
        <p class="text-center text-lg text-gray-700 mb-12 max-w-2xl mx-auto">Share your kitchen stories and explore a collection of tasty creations from fellow food lovers across the globe.</p>

        <div class="bg-white bg-opacity-90 backdrop-blur-sm p-8 rounded-3xl shadow-2xl">
            <h2 class="text-3xl font-semibold text-center text-teal-800 mb-8">✨ Featured Recipes</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach($recipes as $recipe)
                <div class="bg-white shadow-lg rounded-2xl overflow-hidden border border-gray-100 transform hover:scale-[1.02] hover:shadow-2xl transition-all duration-300 ease-in-out">
                    <div class="relative">
                        <img src="{{ asset('storage/' . $recipe->image) }}" alt="{{ $recipe->title }}"
                             class="w-full h-56 object-cover">
                        <div class="absolute top-2 right-2 bg-white/70 text-xs text-gray-700 px-2 py-1 rounded">
                            {{ $recipe->difficulty ?? 'Medium' }}
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl font-bold text-gray-800">{{ $recipe->title }}</h3>
                        <p class="mt-2 text-gray-600 text-sm">{{ \Str::limit($recipe->description, 100) }}</p>
                        <div class="mt-4 text-right">
                            <a href="{{ route('recipes.show', $recipe) }}"
                               class="inline-block bg-gradient-to-r from-pink-500 to-red-500 text-white text-sm px-4 py-2 rounded-full shadow-md hover:from-pink-600 hover:to-red-600 transition">
                                View Recipe
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</body>
</html>
