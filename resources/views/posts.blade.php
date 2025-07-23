<title>{{ $title }}</title>
<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="text-center mb-8">
        <h3 class="text-3xl font-extrabold mb-2 text-indigo-700">Selamat Datang di Halaman Blog!</h3>
        <p class="text-gray-600 text-lg">Ini adalah halaman blog yang berisi berbagai artikel menarik.</p>
    </div>
    <div class="grid gap-8 md:grid-cols-2">
    @foreach ( $posts as $post)
        <article class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-shadow duration-300 p-6 flex flex-col justify-between border border-gray-100">
            <div>
                <a href="/posts/{{$post['slug'] }}" class="hover:text-indigo-600 transition-colors">
                    <h4 class="text-2xl font-bold mb-2">{{ $post->title }}</h4>
                </a>
                <div class="flex items-center mb-2">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode($post->author->name) }}&background=4f46e5&color=fff&size=32" alt="avatar" class="rounded-full w-8 h-8 mr-2 border">
                    <a href="/category" class="text-indigo-600 font-semibold hover:underline">{{ $post->author->name }}</a>
                    <span class="mx-2 text-gray-400">•</span>
                    <span class="text-gray-500 text-sm">{{ $post->created_at->diffForHumans() }}</span>
                </div>
                <span class="inline-block bg-indigo-100 text-indigo-700 text-xs px-3 py-1 rounded-full mb-2 font-semibold">
                    {{ $post->cate->nama }}
                </span>
                <p class="text-gray-700 mt-2">{{ Str::limit($post['content'],100 )}} </p>
            </div>
            <div class="mt-4 text-right">
                <a href="/posts/{{$post['slug']  }}" class="inline-block bg-indigo-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-indigo-700 transition-colors">Baca selengkapnya</a>
            </div>
        </article>
    @endforeach
    </div>
</x-layout>