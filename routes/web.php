<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/produk', function () {
    return view('produk');
});
Route::view('/', 'beranda');
Route::view('/produk', 'produk');
Route::view('/checkout', 'checkout');
Route::view('/testimoni', 'testimoni');
Route::get('/galeri', fn() => view('galeri'));
Route::get('/faq', fn() => view('faq'));
Route::get('/blog', fn() => view('blog'));
