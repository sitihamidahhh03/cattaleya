<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class KetersediaanKotakController extends Controller
{
    /**
     * Manajemen inventaris baki dan jadwal ketersediaan kotak seserahan.
     */
    public function index(): View
    {
        return view('admin.ketersediaan-kotak.index');
    }
}
