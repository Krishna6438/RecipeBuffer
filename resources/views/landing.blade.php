<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to RecipeBuffer</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/forms@0.3.3"></script>
</head>
<body class="bg-cream font-body text-coffee">

    <!-- Header -->
    <header class="bg-gradient-to-br from-rose to-caramel text-center py-20">
        <h1 class="text-5xl font-bold text-cream mb-4 animate__animated animate__fadeIn">Welcome to RecipeBuffer</h1>
        <p class="text-2xl text-cream mb-6 animate__animated animate__fadeIn">Your go-to place for sharing recipes!</p>
        <a href="{{ route('recipes.index') }}" class="bg-cocoa text-cream py-3 px-6 rounded-full font-bold text-lg hover:bg-caramel transition-all duration-300 transform hover:scale-105 animate__animated animate__fadeIn">
            Start Exploring Recipes
        </a>
    </header>

    <!-- Main Section -->
    <section class="container mx-auto py-12">
        <div class="text-center">
            <h2 class="text-4xl font-semibold text-cocoa mb-8">Join the Recipe Community</h2>
            <p class="text-lg text-coffee mb-6">Share your favorite recipes with others or discover new dishes to try at home. It's simple to get started, and the community is growing every day!</p>
            <div class="flex justify-center">
                <a href="{{ route('register') }}" class="bg-rose text-cream py-3 px-8 rounded-full font-bold text-lg hover:bg-caramel transition-all duration-300 transform hover:scale-105">
                    Join Us
                </a>
                <a href="{{ route('login') }}" class="bg-cocoa text-cream py-3 px-8 rounded-full font-bold text-lg hover:bg-rose transition-all duration-300 transform hover:scale-105 ml-4">
                    Login
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-cocoa text-cream py-4 text-center">
        <p>&copy; {{ date('Y') }} RecipeBuffer. All rights reserved.</p>
    </footer>

</body>
</html>
