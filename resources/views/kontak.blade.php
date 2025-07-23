<title>{{ $title }}</title>
<x-layout>
    <x-slot:title>{{ $title}}</x-slot:title>
    <div class="flex justify-center items-center min-h-[60vh]">
        <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-100 max-w-md w-full text-center">
            <div class="mb-4">
                <span class="inline-block bg-indigo-100 p-3 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12v1m0 4v1m-8-5v1m0 4v1m-2-8a9 9 0 0118 0c0 4.418-3.582 8-8 8s-8-3.582-8-8z" />
                    </svg>
                </span>
            </div>
            <h3 class="text-3xl font-extrabold mb-2 text-indigo-700">Kontak Kami</h3>
            <p class="text-gray-700 text-lg mb-4">Kami siap membantu Anda. Silakan hubungi kami melalui:</p>
            <div class="space-y-2 mb-4">
                <div>
                    <span class="font-semibold text-indigo-600">Email:</span>
                    <a href="mailto:info@example.com" class="text-gray-700 hover:underline ml-2">info@example.com</a>
                </div>
                <div>
                    <span class="font-semibold text-indigo-600">Telepon:</span>
                    <a href="tel:+628123456789" class="text-gray-700 hover:underline ml-2">+62 812-3456-789</a>
                </div>
                <div>
                    <span class="font-semibold text-indigo-600">Alamat:</span>
                    <span class="text-gray-700 ml-2">Jl. Inspirasi No. 123, Jakarta</span>
                </div>
            </div>
            <a href="/" class="bg-indigo-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-indigo-700 transition-colors">Kembali ke Beranda</a>
        </div>
    </div>
</x-layout>