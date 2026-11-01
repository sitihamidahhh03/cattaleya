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
                <span class="font-label-sm text-label-sm tracking-wider uppercase text-outline">Owner Portal</span>
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
    <div class="flex flex-col gap-space-md pt-space-md">
        <div class="inline-flex items-center gap-space-xs px-space-md py-space-xs bg-surface-container-high rounded-full w-fit">
            <span class="w-2 h-2 rounded-full bg-primary"></span>
            <span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Owner (Read-Only)</span>
        </div>
        <div class="flex items-center justify-between p-space-sm bg-surface-container-low rounded-xl">
            <div class="flex items-center gap-space-sm">
                <div class="relative">
                    <img alt="Profile" class="w-8 h-8 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida/AEtjO1UGcZm4X8zMfBUj21YAZFUgZgOp3l8W8dIxOP0TbhjPF6kk1kkISDTy1CyA8CSa8zOO-eTnCJtJmzfaPbZHIYzN5Q68sb_6tr0Cf3xZc4RUL_0POh5mGXB2oFiXmSA5qx0yMjaqoDIEci0U5QZeJ6Q7gsU556iMSup6-Ni1Otg_5ds_xxjvDx6dHnaxb1KE7orQ061rMTFfChbCon5fndr99-vHHTCOqh_7iZO0GrphDKFsc3LR159ZWrOnII7uWPF8TA0fXDkpuQ">
                    <div class="absolute -bottom-0.5 -right-0.5 w-2.5 h-2.5 bg-primary rounded-full ring-2 ring-surface-container-lowest"></div>
                </div>
                <div class="flex flex-col">
                    <span class="font-title-md text-title-md text-on-surface leading-tight">{{ Auth::user()->name ?? 'Bpk. Hendra' }}</span>
                    <span class="font-label-sm text-label-sm text-outline">Owner Cattaleya</span>
                </div>
            </div>
            @if(Route::has('logout'))
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="p-space-xs text-outline hover:text-error hover:bg-surface-container-highest rounded-lg transition-colors cursor-pointer" title="Keluar Portal">
                        <span class="material-symbols-outlined text-xl">logout</span>
                    </button>
                </form>
            @else
                <a class="p-space-xs text-outline hover:text-error hover:bg-surface-container-highest rounded-lg transition-colors" data-path="logout" href="#" title="Keluar Portal">
                    <span class="material-symbols-outlined text-xl">logout</span>
                </a>
            @endif
        </div>
    </div>
</aside>

