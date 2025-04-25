<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Recipe Sharing Platform</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Quicksand:wght@400;600&display=swap" rel="stylesheet"/>

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        heading: ['Dancing Script', 'cursive'],
                        body: ['Quicksand', 'sans-serif'],
                    },
                    colors: {
                        caramel: '#f7d9b9',
                        rose: '#fcd5ce',
                        cocoa: '#402218',
                        cream: '#fff7f0',
                        coffee: '#5e503f'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-cream font-body text-coffee">

<!-- Navbar -->
<nav class="bg-gradient-to-br from-rose to-caramel shadow-md p-4 sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center px-4">
        <!-- Logo -->
        <a href="{{ route('recipes.index') }}" class="text-cocoa text-3xl font-heading tracking-wider hover:scale-105 transition-transform duration-200">
            🧁 RecipeBuffer
        </a>

        <!-- Desktop Links -->
        <div class="hidden md:flex items-center space-x-6 text-lg font-semibold">
            <a href="{{ route('recipes.index') }}" class="text-coffee hover:text-cocoa transition">Home</a>

            @auth
                <!-- Dashboard Link -->
                <a href="{{ route('dashboard') }}" class="text-coffee hover:text-cocoa transition">Dashboard</a>

                <a href="{{ route('recipes.create') }}" class="text-coffee hover:text-cocoa transition">+ Add</a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-coffee hover:text-cocoa transition">Logout</button>
                </form>
            @endauth

            @guest
                <a href="{{ route('login') }}" class="text-coffee hover:text-cocoa transition">Login</a>
                <a href="{{ route('register') }}" class="text-coffee hover:text-cocoa transition">Register</a>
            @endguest
        </div>

        <!-- Mobile Toggle -->
        <div class="md:hidden">
            <button id="menu-toggle" class="text-coffee focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Dropdown -->
    <div id="menu-dropdown" class="hidden md:hidden px-4 py-4 space-y-2 bg-rose text-coffee font-semibold">
        <a href="{{ route('recipes.index') }}" class="block hover:text-cocoa">Home</a>

        @auth
            <!-- Mobile Dashboard Link -->
            <a href="{{ route('dashboard') }}" class="block hover:text-cocoa">Dashboard</a>

            <a href="{{ route('recipes.create') }}" class="block hover:text-cocoa">+ Create</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="block hover:text-cocoa">Logout</button>
            </form>
        @endauth

        @guest
            <a href="{{ route('login') }}" class="block hover:text-cocoa">Login</a>
            <a href="{{ route('register') }}" class="block hover:text-cocoa">Register</a>
        @endguest
    </div>
</nav>

<!-- Content -->
<div class="container mx-auto p-6">
    <!-- Page-specific content will go here -->
</div>

<!-- Script for Mobile Menu -->
<script>
    document.getElementById('menu-toggle').addEventListener('click', () => {
        document.getElementById('menu-dropdown').classList.toggle('hidden');
    });
</script>

</body>
</html>
