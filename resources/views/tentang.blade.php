<title>{{ $title }}</title>
<x-layout>
    <x-slot:title>{{ $title}}</x-slot:title>
    <div class="flex justify-center items-center min-h-[60vh]">
        <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-100 max-w-md w-full text-center">
            <img src="https://ui-avatars.com/api/?name={{ urlencode($nama) }}&background=6366f1&color=fff&size=96" alt="avatar" class="mx-auto rounded-full w-24 h-24 mb-4 border-4 border-indigo-200 shadow">
            <h3 class="text-3xl font-extrabold mb-2 text-indigo-700">Tentang Kita</h3>
            <p class="text-gray-700 text-xl font-semibold mb-2">Nama: {{ $nama }}</p>
            <p class="text-gray-500 mb-4">Selamat datang di halaman profil. Kami adalah tim yang berkomitmen untuk memberikan konten terbaik dan inspiratif untuk Anda.</p>
            <div class="flex justify-center gap-4 mt-4">
                <a href="/kontak" class="bg-indigo-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-indigo-700 transition-colors">Hubungi Kami</a>
                <a href="/" class="bg-gray-100 text-indigo-700 px-4 py-2 rounded-lg font-semibold hover:bg-indigo-200 transition-colors">Beranda</a>
            </div>
        </div>
    </div>
</x-layout>