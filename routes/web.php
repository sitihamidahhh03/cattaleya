<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/katalog', function () {
    return view('katalog');
})->name('katalog');

Route::get('/pesan-mahar', function () {
    return view('pesan-mahar');
})->name('pesan-mahar');

Route::get('/sewa-kotak-seserahan', function () {
    return view('sewa-kotak-seserahan');
})->name('sewa-kotak-seserahan');

Route::get('/cek-pesanan', function () {
    return view('cek-pesanan');
})->name('cek-pesanan');

Route::get('/tentang-cattaleya', function () {
    return view('tentang-cattaleya');
})->name('tentang-cattaleya');

Route::get('/bantuan-whatsapp', function () {
    return view('bantuan-whatsapp');
})->name('bantuan-whatsapp');

Route::get('/preview/header', function () {
    return view('header-preview');
})->name('preview.header');

Route::get('/preview/footer', function () {
    return view('footer-preview');
})->name('preview.footer');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

