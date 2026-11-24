<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class TransaksiPembayaranController extends Controller
{
    /**
     * Mutasi pembayaran dan sinkronisasi status Midtrans.
     */
    public function index(): View
    {
        return view('admin.transaksi-pembayaran.index');
    }
}
