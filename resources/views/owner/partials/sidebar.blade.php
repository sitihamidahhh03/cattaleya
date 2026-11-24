<aside class="fixed left-0 top-0 h-full w-72 bg-surface-container-lowest shadow-[0_1px_16px_rgba(90,72,56,0.06)] z-50 flex flex-col justify-between pt-gutter pb-gutter px-gutter">
    <div class="flex flex-col gap-space-lg">
        <!-- Logo & Brand Identity -->
        <div class="flex items-center gap-space-sm">
            <div class="relative flex items-center justify-center">
                <div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center overflow-hidden shadow-[0_2px_8px_rgba(90,72,56,0.08)] ring-1 ring-outline-variant/50">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Cattaleya Logo" class="w-full h-full object-cover">
                </div>
            </div>
            <div class="flex flex-col">
                <a href="{{ route('home') }}" class="font-headline-md text-headline-md tracking-tight text-on-surface hover:text-primary transition-colors">
                    Cattaleya
                </a>
                <span class="font-label-sm text-label-sm tracking-wider uppercase text-outline">Owner</span>
            </div>
        </div>

        <div class="h-[1px] w-full bg-surface-variant/60"></div>

        <!-- Navigation Menu -->
        <div class="flex flex-col gap-space-xs">
            <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline px-space-sm mb-space-xs">Navigasi Utama</span>
            <nav class="flex flex-col gap-space-xs" data-active-classes="bg-secondary-container text-on-secondary-container font-title-md">
                @php
                    $inPreview = request()->routeIs('preview.*');
                    $isDashboard = request()->routeIs('owner.dashboard*') || request()->routeIs('preview.owner-dashboard*');
                    $isPesanan = request()->routeIs('owner.pesanan*') || request()->routeIs('preview.owner-pesanan*');
                    $isTransaksi = request()->routeIs('owner.transaksi-pembayaran*') || request()->routeIs('preview.owner-transaksi-pembayaran*');
                    $isLaporan = request()->routeIs('owner.laporan*') || request()->routeIs('preview.owner-laporan*');

                    $dashboardUrl = $inPreview ? route('preview.owner-dashboard') : (Route::has('owner.dashboard') ? route('owner.dashboard') : '#');
                    $pesananUrl = $inPreview ? route('preview.owner-pesanan') : (Route::has('owner.pesanan') ? route('owner.pesanan') : '#');
                    $transaksiUrl = $inPreview ? route('preview.owner-transaksi-pembayaran') : (Route::has('owner.transaksi-pembayaran') ? route('owner.transaksi-pembayaran') : '#');
                    $laporanUrl = $inPreview ? route('preview.owner-laporan') : (Route::has('owner.laporan') ? route('owner.laporan') : '#');
                @endphp

                <!-- 1. Dashboard -->
                <a href="{{ $dashboardUrl }}" 
                   class="flex items-center gap-space-sm px-space-md py-space-sm rounded-xl transition-all {{ $isDashboard ? 'bg-secondary-container text-on-secondary-container font-title-md font-semibold shadow-xs' : 'font-title-md text-title-md text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface' }}"
                   {!! $isDashboard ? 'aria-current="page"' : '' !!}
                   data-path="dashboard">
                    <span class="material-symbols-outlined text-xl">dashboard</span>
                    <span>Dashboard</span>
                </a>

                <!-- 2. Pesanan -->
                <a href="{{ $pesananUrl }}" 
                   class="flex items-center gap-space-sm px-space-md py-space-sm rounded-xl font-title-md text-title-md transition-all {{ $isPesanan ? 'bg-secondary-container text-on-secondary-container font-semibold shadow-xs' : 'text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface' }}"
                   {!! $isPesanan ? 'aria-current="page"' : '' !!}
                   data-path="pesanan">
                    <span class="material-symbols-outlined text-xl">inventory_2</span>
                    <span>Pesanan</span>
                </a>

                <!-- 3. Transaksi & Pembayaran -->
                <a href="{{ $transaksiUrl }}" 
                   class="flex items-center gap-space-sm px-space-md py-space-sm rounded-xl font-title-md text-title-md transition-all {{ $isTransaksi ? 'bg-secondary-container text-on-secondary-container font-semibold shadow-xs' : 'text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface' }}"
                   {!! $isTransaksi ? 'aria-current="page"' : '' !!}
                   data-path="transaksi-dan-pembayaran">
                    <span class="material-symbols-outlined text-xl">payments</span>
                    <span>Transaksi &amp; Pembayaran</span>
                </a>

                <!-- 4. Laporan -->
                <a href="{{ $laporanUrl }}" 
                   class="flex items-center gap-space-sm px-space-md py-space-sm rounded-xl font-title-md text-title-md transition-all {{ $isLaporan ? 'bg-secondary-container text-on-secondary-container font-semibold shadow-xs' : 'text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface' }}"
                   {!! $isLaporan ? 'aria-current="page"' : '' !!}
                   data-path="laporan">
                    <span class="material-symbols-outlined text-xl">analytics</span>
                    <span>Laporan</span>
                </a>
            </nav>
        </div>
    </div>

    <!-- Owner Session & Identity Footer -->
    <div class="flex flex-col gap-space-sm pt-space-sm">
        <div class="flex items-center justify-between p-2.5 bg-surface-container-low rounded-xl gap-2">
            <div class="flex items-center gap-2.5 min-w-0 flex-1">
                <div class="relative shrink-0">
                    <div class="w-8 h-8 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center font-bold text-xs ring-1 ring-outline-variant/40 shadow-xs">
                        {{ strtoupper(substr(Auth::user()->name ?? 'O', 0, 1)) }}
                    </div>
                    <div class="absolute -bottom-0.5 -right-0.5 w-2.5 h-2.5 bg-primary rounded-full ring-2 ring-surface-container-lowest"></div>
                </div>
                <div class="flex flex-col min-w-0 flex-1 overflow-hidden">
                    <span class="text-xs sm:text-[13px] font-semibold text-on-surface leading-tight truncate whitespace-nowrap block" title="{{ Auth::user()->name ?? 'Owner Bisnis Cattaleya' }}">
                        {{ Auth::user()->name ?? 'Owner Bisnis Cattaleya' }}
                    </span>
                    <span class="text-[11px] text-outline truncate whitespace-nowrap block">Owner Cattaleya</span>
                </div>
            </div>
            @if(Route::has('logout'))
                <form method="POST" action="{{ route('logout') }}" class="inline shrink-0">
                    @csrf
                    <button type="submit" class="p-1.5 text-outline hover:text-error hover:bg-surface-container-highest rounded-lg transition-colors cursor-pointer flex items-center justify-center" title="Keluar Portal">
                        <span class="material-symbols-outlined text-lg">logout</span>
                    </button>
                </form>
            @else
                <a class="p-1.5 text-outline hover:text-error hover:bg-surface-container-highest rounded-lg transition-colors shrink-0 flex items-center justify-center" data-path="logout" href="#" title="Keluar Portal">
                    <span class="material-symbols-outlined text-lg">logout</span>
                </a>
            @endif
        </div>
    </div>
</aside>

