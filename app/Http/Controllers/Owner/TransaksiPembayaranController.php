<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class TransaksiPembayaranController extends Controller
{
    /**
     * Monitoring arus kas dan transaksi pembayaran masuk.
     */
    public function index(): View
    {
        return view('owner.transaksi-pembayaran.index');
    }
}
