<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @vite('resources/css/app.css') --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #e0e7ff 0%, #f0fdfa 100%);
            min-height: 100vh;
        }
        .main-card {
            backdrop-filter: blur(2px);
        }
    </style>
    <title>home page</title>
</head>
<body>
    <x-navbar></x-navbar>
    <x-header class="text-3xl font-bold text-indigo-700 mb-6 block text-center"> {{ $title }}</x-header>
    <main class="container mx-auto mt-8 p-8 bg-white rounded-xl shadow-2xl main-card">
        <p class="text-gray-700 text-lg leading-relaxed">{{ $slot }}</p>
    </main>
</body>
</html>