<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Boutique LADS</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-pink-100 text-gray-900">

    <h1 class="text-center text-3xl font-bold py-6">🌌 Zone de Test 🌌</h1>

    <main class="max-w-7xl mx-auto py-8">
        @yield('content')
    </main>

</body>
</html>