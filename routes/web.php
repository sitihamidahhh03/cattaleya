<?php

use App\Http\Controllers\Admin as AdminController;
use App\Http\Controllers\Owner as OwnerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User as UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes — Cattaleya Atelier
|--------------------------------------------------------------------------
|
| Routing aplikasi Cattaleya Atelier dikelompokkan secara terstruktur per role:
| 1. Free User / Publik  (App\Http\Controllers\User)
| 2. Administrator       (App\Http\Controllers\Admin)
| 3. Pemilik Bisnis      (App\Http\Controllers\Owner)
|
*/

// ==========================================
// 1. ROLE: FREE USER / PELANGGAN (PUBLIK)
// ==========================================
Route::name('user.')->group(function () {
    Route::get('/', [UserController\HomeController::class, 'index'])->name('home');
    Route::get('/katalog', [UserController\KatalogController::class, 'index'])->name('katalog');
    Route::get('/pesan-mahar', [UserController\PesananController::class, 'pesanMahar'])->name('pesan-mahar');
    Route::get('/sewa-kotak-seserahan', [UserController\PesananController::class, 'sewaKotak'])->name('sewa-kotak-seserahan');
    Route::get('/cek-pesanan', [UserController\PesananController::class, 'cekPesanan'])->name('cek-pesanan');
    Route::get('/pembayaran', [UserController\PesananController::class, 'pembayaran'])->name('pembayaran');
    Route::get('/tentang-cattaleya', [UserController\InformasiController::class, 'tentang'])->name('tentang-cattaleya');
    Route::get('/bantuan-whatsapp', [UserController\InformasiController::class, 'bantuanWhatsapp'])->name('bantuan-whatsapp');
});

// Alias rute publik tanpa prefix 'user.' demi kompatibilitas penuh
Route::get('/', [UserController\HomeController::class, 'index'])->name('home');
Route::get('/katalog', [UserController\KatalogController::class, 'index'])->name('katalog');
Route::get('/pesan-mahar', [UserController\PesananController::class, 'pesanMahar'])->name('pesan-mahar');
Route::get('/sewa-kotak-seserahan', [UserController\PesananController::class, 'sewaKotak'])->name('sewa-kotak-seserahan');
Route::get('/cek-pesanan', [UserController\PesananController::class, 'cekPesanan'])->name('cek-pesanan');
Route::get('/pembayaran', [UserController\PesananController::class, 'pembayaran'])->name('pembayaran');
Route::get('/tentang-cattaleya', [UserController\InformasiController::class, 'tentang'])->name('tentang-cattaleya');
Route::get('/bantuan-whatsapp', [UserController\InformasiController::class, 'bantuanWhatsapp'])->name('bantuan-whatsapp');

// ==========================================
// 2. DASHBOARD DISPATCHER & ROLE REDIRECTION
// ==========================================
Route::get('/dashboard', function () {
    $role = auth()->user()->role ?? 'admin';
    if ($role === 'owner') {
        return redirect()->route('owner.dashboard');
    }

    return redirect()->route('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', fn () => redirect()->route('admin.dashboard'));
Route::get('/owner', fn () => redirect()->route('owner.dashboard'));

// ==========================================
// 3. ROLE: ADMINISTRATOR (ADMIN OPERASIONAL)
// ==========================================
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/pesanan', [AdminController\PesananController::class, 'index'])->name('pesanan');
    Route::get('/pesanan/detail/{id?}', [AdminController\PesananController::class, 'detail'])->name('pesanan.detail');
    Route::get('/pesanan/{id}', [AdminController\PesananController::class, 'detail']);
    Route::get('/pelanggan', [AdminController\PelangganController::class, 'index'])->name('pelanggan');
    Route::get('/ketersediaan-kotak', [AdminController\KetersediaanKotakController::class, 'index'])->name('ketersediaan-kotak');
    Route::get('/transaksi-pembayaran', [AdminController\TransaksiPembayaranController::class, 'index'])->name('transaksi-pembayaran');
});

// ==========================================
// 4. ROLE: OWNER (PEMILIK BISNIS)
// ==========================================
Route::middleware(['auth', 'verified'])->prefix('owner')->name('owner.')->group(function () {
    Route::get('/dashboard', [OwnerController\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/pesanan', [OwnerController\PesananController::class, 'index'])->name('pesanan');
    Route::get('/pesanan/detail/{id?}', [OwnerController\PesananController::class, 'detail'])->name('pesanan.detail');
    Route::get('/pesanan/{id}', [OwnerController\PesananController::class, 'detail']);
    Route::get('/transaksi-pembayaran', [OwnerController\TransaksiPembayaranController::class, 'index'])->name('transaksi-pembayaran');
    Route::get('/laporan', [OwnerController\LaporanController::class, 'index'])->name('laporan');
});

// ==========================================
// 5. PROTOTIPE / UI PREVIEWS (DEV & DEMO)
// ==========================================
Route::prefix('preview')->name('preview.')->group(function () {
    Route::get('/header', fn () => view('user.partials.header'))->name('header');
    Route::get('/footer', fn () => view('user.partials.footer'))->name('footer');

    // Admin UI Preview
    Route::get('/admin-dashboard', [AdminController\DashboardController::class, 'index'])->name('admin-dashboard');
    Route::get('/admin-pesanan', [AdminController\PesananController::class, 'index'])->name('admin-pesanan');
    Route::get('/admin-pesanan-detail', [AdminController\PesananController::class, 'detail'])->name('admin-pesanan-detail');
    Route::get('/admin-pelanggan', [AdminController\PelangganController::class, 'index'])->name('admin-pelanggan');
    Route::get('/admin-ketersediaan-kotak', [AdminController\KetersediaanKotakController::class, 'index'])->name('admin-ketersediaan-kotak');
    Route::get('/admin-transaksi-pembayaran', [AdminController\TransaksiPembayaranController::class, 'index'])->name('admin-transaksi-pembayaran');

    // Owner UI Preview
    Route::get('/owner-dashboard', [OwnerController\DashboardController::class, 'index'])->name('owner-dashboard');
    Route::get('/owner-pesanan', [OwnerController\PesananController::class, 'index'])->name('owner-pesanan');
    Route::get('/owner-pesanan-detail', [OwnerController\PesananController::class, 'detail'])->name('owner-pesanan-detail');
    Route::get('/owner-transaksi-pembayaran', [OwnerController\TransaksiPembayaranController::class, 'index'])->name('owner-transaksi-pembayaran');
    Route::get('/owner-laporan', [OwnerController\LaporanController::class, 'index'])->name('owner-laporan');
});

// ==========================================
// 6. MANAJEMEN PROFIL AKUN & AUTENTIKASI
// ==========================================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
