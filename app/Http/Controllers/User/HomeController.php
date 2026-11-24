<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * Tampilkan landing page utama (Free User / Publik).
     */
    public function index(): View
    {
        return view('user.home.index');
    }
}
