<title>{{ $title }}</title>
<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3 class="text-2xl font-bold mb-4">Selamat Datang di Halaman Blog!</h3>
    <p class="text-gray-600">Ini adalah halaman blog yang berisi berbagai artikel menarik.</p>
        
    <article class="py-8 max-w-screen-md  border-b border-gray-300 ">
        <a href="/posts/{{$post['slug'] }}" class="hover:text-blue-500">
        <h4 class="text-xl font-semibold mb-2"> {{ $post['title'] }}</h4>
        </a>
        <a href="#" class="text-blue-500 hover:underline">{{ $post['author'] }}</a> | 22 february 2025
        <p class="text-gray-700">{{ $post['content']}} </p>
        <div class="mt-4">
            <a href="/posts" class="text-blue-500 hover:underline">kembali</a>
        </div>
    </article>
        
    </article>
</x-layout>