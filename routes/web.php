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

Route::get('/pembayaran', function () {
    return view('pembayaran');
})->name('pembayaran');

Route::get('/preview/header', function () {
    return view('header-preview');
})->name('preview.header');

Route::get('/preview/footer', function () {
    return view('footer-preview');
})->name('preview.footer');

Route::get('/preview/admin-dashboard', function () {
    return view('admin.dashboard');
})->name('preview.admin-dashboard');

Route::get('/preview/admin-pesanan', function () {
    return view('admin.pesanan');
})->name('preview.admin-pesanan');

Route::get('/preview/admin-pesanan-detail', function () {
    return view('admin.pesanan-detail');
})->name('preview.admin-pesanan-detail');

Route::get('/preview/admin-pelanggan', function () {
    return view('admin.pelanggan');
})->name('preview.admin-pelanggan');

Route::get('/preview/admin-ketersediaan-kotak', function () {
    return view('admin.ketersediaan-kotak');
})->name('preview.admin-ketersediaan-kotak');

Route::get('/preview/admin-transaksi-pembayaran', function () {
    return view('admin.transaksi-pembayaran');
})->name('preview.admin-transaksi-pembayaran');

Route::get('/preview/owner-dashboard', function () {
    return view('owner.dashboard');
})->name('preview.owner-dashboard');

Route::get('/preview/owner-pesanan', function () {
    return view('owner.pesanan');
})->name('preview.owner-pesanan');

Route::get('/preview/owner-pesanan-detail', function () {
    return view('owner.pesanan-detail');
})->name('preview.owner-pesanan-detail');

Route::get('/preview/owner-transaksi-pembayaran', function () {
    return view('owner.transaksi-pembayaran');
})->name('preview.owner-transaksi-pembayaran');

Route::get('/preview/owner-laporan', function () {
    return view('owner.laporan');
})->name('preview.owner-laporan');

Route::get('/dashboard', function () {
    $role = auth()->user()->role ?? 'admin';
    if ($role === 'owner') {
        return redirect()->route('owner.dashboard');
    }
    return redirect()->route('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', function () {
    return redirect()->route('admin.dashboard');
});

Route::get('/owner', function () {
    return redirect()->route('owner.dashboard');
});

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/pesanan', function () {
        return view('admin.pesanan');
    })->name('pesanan');

    Route::get('/pesanan/detail/{id?}', function ($id = 'ORD-2025-0842') {
        return view('admin.pesanan-detail', compact('id'));
    })->name('pesanan.detail');

    Route::get('/pesanan/{id}', function ($id = 'ORD-2025-0842') {
        return view('admin.pesanan-detail', compact('id'));
    });

    Route::get('/pelanggan', function () {
        return view('admin.pelanggan');
    })->name('pelanggan');

    Route::get('/ketersediaan-kotak', function () {
        return view('admin.ketersediaan-kotak');
    })->name('ketersediaan-kotak');

    Route::get('/transaksi-pembayaran', function () {
        return view('admin.transaksi-pembayaran');
    })->name('transaksi-pembayaran');
});

Route::middleware(['auth', 'verified'])->prefix('owner')->name('owner.')->group(function () {
    Route::get('/dashboard', function () {
        return view('owner.dashboard');
    })->name('dashboard');

    Route::get('/pesanan', function () {
        return view('owner.pesanan');
    })->name('pesanan');

    Route::get('/pesanan/detail/{id?}', function ($id = 'ORD-2025-090') {
        return view('owner.pesanan-detail', compact('id'));
    })->name('pesanan.detail');

    Route::get('/pesanan/{id}', function ($id = 'ORD-2025-090') {
        return view('owner.pesanan-detail', compact('id'));
    });

    Route::get('/transaksi-pembayaran', function () {
        return view('owner.transaksi-pembayaran');
    })->name('transaksi-pembayaran');

    Route::get('/laporan', function () {
        return view('owner.laporan');
    })->name('laporan');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

