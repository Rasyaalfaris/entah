<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;


Route::get('/kontak', function () {
    return view('kontak', ['title' => 'kontak', 'judul'=> 'kontak']);
});

Route::get('/tentang', function () {
    return view('tentang', ['title' => 'tentang', 'nama'=> 'lazuli', 'judul'=> 'tentang kami']);
});
Route::get('/', function () {
    return view('home ', ['title' => 'halaman utama']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'blog','posts'=>  Post::all()]);
});
Route::get('/posts/{slug}', function ($slug) {
    
    $post = Post::find($slug);
    return view('post', ['title' => 'single blog', 'post' => $post]);
});