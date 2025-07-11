<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RimaController;


Route::get('/kontak', function () {
    return view('kontak', ['title' => 'kontak', 'judul'=> 'kontak']);
});

Route::get('/tentang', function () {
    return view('tentang', ['title' => 'tentang', 'nama'=> 'lazuli', 'judul'=> 'tentang kami']);
});
Route::get('/', function () {
    return view('home ', ['title' => 'halaman utama']);
});
Route::get('/posts',[RimaController::class, 'index']);
Route::get('/posts/{rima:slug}',[RimaController::class, 'single']);