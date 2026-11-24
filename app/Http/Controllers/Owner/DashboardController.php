<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    /**
     * Tampilkan executive dashboard pemilik bisnis (Owner).
     */
    public function index(): View
    {
        return view('owner.dashboard.index');
    }
}
