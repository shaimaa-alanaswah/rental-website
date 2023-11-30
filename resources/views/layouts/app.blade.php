<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App Name</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Add your other stylesheets, scripts, or head elements here -->
</head>
<body class="font-sans bg-gray-100">

    <!-- Header -->
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-2xl font-semibold">Your App Name</h1>
            <!-- Add navigation links or other header content here -->
        </div>
    </header>

    <!-- Navigation -->
    <nav class="bg-gray-800 text-white p-4">
        <div class="container mx-auto">
            <a href="{{ route('properties.index') }}" class="hover:text-gray-300">Properties</a>
            <!-- Add other navigation links as needed -->
        </div>
    </nav>

    <!-- Content -->
    <div class="container mx-auto mt-8">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white p-4">
        <div class="container mx-auto">
            <!-- Add footer content, copyright, or other information here -->
            <p>&copy; {{ date('Y') }} Your App. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
