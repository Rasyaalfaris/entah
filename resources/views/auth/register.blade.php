<x-layout>
    <x-slot:title>{{ $judul }}</x-slot:title>
    <div class="max-w-md mx-auto mt-10 bg-white rounded-xl shadow-lg p-8 border border-gray-100">
        <h2 class="text-2xl font-bold text-center mb-6 text-indigo-700">Register Akun Baru</h2>
        <form action="{{ route('register') }}" method="post" class="space-y-5">
            @csrf
            <div>
                <label for="name" class="block text-gray-700 font-semibold mb-1">Nama</label>
                <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" value="{{ old('name') }}">
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="email" class="block text-gray-700 font-semibold mb-1">Email</label>
                <input type="text" name="email" id="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" value="{{ old('email') }}">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="password" class="block text-gray-700 font-semibold mb-1">Password</label>
                <input type="password" name="password" id="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" name="btn" class="w-full bg-indigo-600 text-white py-2 rounded-lg font-semibold hover:bg-indigo-700 transition-colors">Daftar</button>
        </form>
        <div class="mt-6 text-center">
            <a href="/login" class="text-indigo-600 font-semibold hover:underline ml-2">Login</a>
        </div>
    </div>
</x-layout>