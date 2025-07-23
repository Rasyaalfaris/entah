<title>{{ $title }}</title>
<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="text-center mb-8">
        <h3 class="text-3xl font-extrabold mb-2 text-indigo-700">Selamat Datang di Halaman Blog!</h3>
        <p class="text-gray-600 text-lg">Ini adalah halaman blog yang berisi berbagai artikel menarik.</p>
    </div>
    <div class="max-w-2xl mx-auto">
        <article class="bg-white rounded-xl shadow-lg p-8 border border-gray-100">
            <div class="flex items-center mb-4">
                <img src="https://ui-avatars.com/api/?name={{ urlencode($post->author->name) }}&background=4f46e5&color=fff&size=40" alt="avatar" class="rounded-full w-10 h-10 mr-3 border">
                <div>
                    <a href="/category" class="text-indigo-600 font-semibold hover:underline">{{ $post->author->name }}</a>
                    <span class="mx-2 text-gray-400">•</span>
                    <span class="text-gray-500 text-sm">{{ $post->created_at->diffForHumans() }}</span>
                </div>
            </div>
            <h4 class="text-2xl font-bold mb-2 text-indigo-800">{{ $post['title'] }}</h4>
            <span class="inline-block bg-indigo-100 text-indigo-700 text-xs px-3 py-1 rounded-full mb-4 font-semibold">
                {{ $post->cate->nama }}
            </span>
            <p class="text-gray-700 text-lg leading-relaxed mb-6">{{ $post['content']}}</p>
            <div class="mt-4 text-right">
                <a href="/posts" class="inline-block bg-indigo-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-indigo-700 transition-colors">Kembali</a>
            </div>
        </article>
    </div>
</x-layout>