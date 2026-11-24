<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class PesananController extends Controller
{
    /**
     * Tinjauan daftar pesanan bisnis (Owner view).
     */
    public function index(): View
    {
        return view('owner.pesanan.index');
    }

    /**
     * Detail pesanan pada view owner.
     */
    public function detail(string $id = 'ORD-2025-090'): View
    {
        return view('owner.pesanan-detail.index', compact('id'));
    }
}
