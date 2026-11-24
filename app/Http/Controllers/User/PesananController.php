<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class PesananController extends Controller
{
    /**
     * Formulir pemesanan mahar custom.
     */
    public function pesanMahar(): View
    {
        return view('user.pesan-mahar.index');
    }

    /**
     * Formulir penyewaan kotak seserahan.
     */
    public function sewaKotak(): View
    {
        return view('user.sewa-kotak.index');
    }

    /**
     * Pelacakan status pesanan pelanggan.
     */
    public function cekPesanan(): View
    {
        return view('user.cek-pesanan.index');
    }

    /**
     * Halaman instruksi dan status pembayaran.
     */
    public function pembayaran(): View
    {
        return view('user.pembayaran.index');
    }
}
