<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @vite('resources/css/app.css') --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>home page</title>
</head>
<body>
    <x-navbar></x-navbar>
    <x-header> {{ $title }}</x-header>
    <main class="container mx-auto mt-8 p-4 bg-white rounded-lg shadow-md">
        <p class="text-gray-600">{{ $slot }}</p>
    </main>
</body>
</html>