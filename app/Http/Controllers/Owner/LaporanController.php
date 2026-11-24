<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class LaporanController extends Controller
{
    /**
     * Laporan omzet, utilisasi baki, dan performa pesanan tahunan.
     */
    public function index(): View
    {
        return view('owner.laporan.index');
    }
}
