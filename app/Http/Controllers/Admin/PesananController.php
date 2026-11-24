<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class PesananController extends Controller
{
    /**
     * Daftar seluruh pesanan di panel admin.
     */
    public function index(): View
    {
        return view('admin.pesanan.index');
    }

    /**
     * Rincian spesifik pesanan berdasarkan ID.
     */
    public function detail(string $id = 'ORD-2025-0842'): View
    {
        return view('admin.pesanan-detail.index', compact('id'));
    }
}
