<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class KatalogController extends Controller
{
    /**
     * Tampilkan halaman katalog mahar dan kotak seserahan.
     */
    public function index(): View
    {
        return view('user.katalog.index');
    }
}
