<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\RimaController;


Route::get('/kontak', function () {
    return view('kontak', ['title' => 'kontak', 'judul'=> 'kontak']);
});

Route::get('/tentang', function () {
    return view('tentang', ['title' => 'tentang', 'nama'=> 'lazuli', 'judul'=> 'tentang kami']);
});
Route::get('/', function () {
    return view('home ', ['title' => 'halaman utama']);
})->middleware('auth');
Route::get('/category', function () {
    return view('category ', ['title' => 'halaman utama']);
});
Route::get('/posts',[RimaController::class, 'index']);
Route::get('/posts/{rima:slug}',[RimaController::class, 'single']);
Route::get('/register',[authController::class, 'viewreg'])->name('register')->middleware('guest');
Route::post('/register',[authController::class, 'store' ]);
Route::get('/login',[loginController::class,'login'])->name('login')->middleware('guest');
Route::post('/login',[loginController::class,'store' ])->middleware('guest')->name('login');
Route::post('/logout',[authController::class, 'logout'])->middleware('auth')->name('logout');