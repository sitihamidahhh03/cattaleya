<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class InformasiController extends Controller
{
    /**
     * Profil dan filosofi atelier Cattaleya.
     */
    public function tentang(): View
    {
        return view('user.tentang.index');
    }

    /**
     * Layanan bantuan langsung via WhatsApp.
     */
    public function bantuanWhatsapp(): View
    {
        return view('user.bantuan.index');
    }
}
