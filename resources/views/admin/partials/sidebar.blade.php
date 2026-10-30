<aside class="fixed left-0 top-0 h-screen w-72 bg-surface-container-low z-50 flex flex-col justify-between shadow-[0_1px_8px_rgba(0,0,0,0.04)] select-none">
    <div class="flex flex-col flex-1 overflow-y-auto">
        <!-- Logo & Studio Identity -->
        <div class="px-space-lg pt-space-lg pb-space-md">
            <div class="flex items-center gap-space-sm mb-space-xs">
                <span class="w-2.5 h-2.5 rounded-full bg-primary inline-block"></span>
                <span class="font-label-sm text-label-sm uppercase text-secondary tracking-widest">Atelier Seserahan</span>
            </div>
            <a href="{{ route('home') }}" class="inline-block group">
                <h1 class="font-headline-md text-headline-md text-primary tracking-tight group-hover:opacity-90 transition-opacity">Cattaleya</h1>
            </a>
            <p class="font-label-sm text-label-sm text-on-surface-variant mt-0.5 tracking-wider uppercase">Operasional &amp; Studio</p>
        </div>

        <div class="px-space-lg my-space-xs">
            <div class="h-px w-full bg-surface-container-high"></div>
        </div>

        <!-- Navigation Menu -->
        <div class="px-space-lg py-space-xs">
            <p class="font-label-sm text-label-sm text-secondary uppercase font-semibold tracking-wider mb-space-sm">Menu Utama</p>
            <nav class="flex flex-col gap-1">
                @php
                    $isDashboard = request()->routeIs('dashboard*') || request()->routeIs('admin.dashboard*') || request()->routeIs('preview.admin-dashboard*');
                    $isPesanan = request()->routeIs('admin.pesanan*') || request()->routeIs('preview.admin-pesanan*') || request()->routeIs('preview.admin-pesanan-detail*');
                    $isPelanggan = request()->routeIs('admin.pelanggan*') || request()->routeIs('preview.admin-pelanggan*');
                    $isKotak = request()->routeIs('admin.ketersediaan-kotak*') || request()->routeIs('preview.admin-ketersediaan-kotak*');
                    $isTransaksi = request()->routeIs('admin.transaksi-pembayaran*') || request()->routeIs('preview.admin-transaksi-pembayaran*');
                    $isProfil = request()->routeIs('profile.edit*');
                @endphp

                <!-- 1. Dashboard -->
                <a href="{{ Route::has('dashboard') ? route('dashboard') : '#' }}" 
                   class="flex items-center gap-space-sm px-3.5 py-2.5 transition-all {{ $isDashboard ? 'bg-primary-container text-on-primary-container font-semibold rounded-lg shadow-[0_2px_8px_-2px_rgba(90,72,56,0.08)]' : 'rounded-lg text-on-surface-variant font-title-md text-title-md hover:bg-surface-container-high hover:text-on-surface' }}"
                   {!! $isDashboard ? 'aria-current="page"' : '' !!}>
                    <span class="material-symbols-outlined text-[20px]">dashboard</span>
                    <span>Dashboard</span>
                </a>

                <!-- 2. Pesanan -->
                <a href="{{ Route::has('admin.pesanan') ? route('admin.pesanan') : '#' }}" 
                   class="flex items-center gap-space-sm px-3.5 py-2.5 transition-all {{ $isPesanan ? 'bg-primary-container text-on-primary-container font-semibold rounded-lg shadow-[0_2px_8px_-2px_rgba(90,72,56,0.08)]' : 'rounded-lg text-on-surface-variant font-title-md text-title-md hover:bg-surface-container-high hover:text-on-surface' }}"
                   {!! $isPesanan ? 'aria-current="page"' : '' !!}>
                    <span class="material-symbols-outlined text-[20px]">shopping_bag</span>
                    <span>Pesanan</span>
                </a>

                <!-- 3. Pelanggan -->
                <a href="{{ Route::has('admin.pelanggan') ? route('admin.pelanggan') : '#' }}" 
                   class="flex items-center gap-space-sm px-3.5 py-2.5 transition-all {{ $isPelanggan ? 'bg-primary-container text-on-primary-container font-semibold rounded-lg shadow-[0_2px_8px_-2px_rgba(90,72,56,0.08)]' : 'rounded-lg text-on-surface-variant font-title-md text-title-md hover:bg-surface-container-high hover:text-on-surface' }}"
                   {!! $isPelanggan ? 'aria-current="page"' : '' !!}>
                    <span class="material-symbols-outlined text-[20px]">group</span>
                    <span>Pelanggan</span>
                </a>

                <!-- 4. Ketersediaan Kotak -->
                <a href="{{ Route::has('admin.ketersediaan-kotak') ? route('admin.ketersediaan-kotak') : '#' }}" 
                   class="flex items-center gap-space-sm px-3.5 py-2.5 transition-all {{ $isKotak ? 'bg-primary-container text-on-primary-container font-semibold rounded-lg shadow-[0_2px_8px_-2px_rgba(90,72,56,0.08)]' : 'rounded-lg text-on-surface-variant font-title-md text-title-md hover:bg-surface-container-high hover:text-on-surface' }}"
                   {!! $isKotak ? 'aria-current="page"' : '' !!}>
                    <span class="material-symbols-outlined text-[20px]">inventory_2</span>
                    <span>Ketersediaan Kotak</span>
                </a>

                <!-- 5. Transaksi & Pembayaran -->
                <a href="{{ Route::has('admin.transaksi-pembayaran') ? route('admin.transaksi-pembayaran') : '#' }}" 
                   class="flex items-center gap-space-sm px-3.5 py-2.5 transition-all {{ $isTransaksi ? 'bg-primary-container text-on-primary-container font-semibold rounded-lg shadow-[0_2px_8px_-2px_rgba(90,72,56,0.08)]' : 'rounded-lg text-on-surface-variant font-title-md text-title-md hover:bg-surface-container-high hover:text-on-surface' }}"
                   {!! $isTransaksi ? 'aria-current="page"' : '' !!}>
                    <span class="material-symbols-outlined text-[20px]">credit_card</span>
                    <span>Transaksi &amp; Pembayaran</span>
                </a>

                <!-- 6. Profil -->
                <a href="{{ Route::has('profile.edit') ? route('profile.edit') : '#' }}" 
                   class="flex items-center gap-space-sm px-3.5 py-2.5 transition-all {{ $isProfil ? 'bg-primary-container text-on-primary-container font-semibold rounded-lg shadow-[0_2px_8px_-2px_rgba(90,72,56,0.08)]' : 'rounded-lg text-on-surface-variant font-title-md text-title-md hover:bg-surface-container-high hover:text-on-surface' }}"
                   {!! $isProfil ? 'aria-current="page"' : '' !!}>
                    <span class="material-symbols-outlined text-[20px]">manage_accounts</span>
                    <span>Profil</span>
                </a>
            </nav>
        </div>
    </div>

    <!-- User Profile & Session Footer -->
    <div class="p-space-md bg-surface-container-low border-t border-surface-container-high/60">
        <div class="mb-space-sm flex items-center justify-between">
            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm uppercase font-semibold tracking-wider">
                <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                PORTAL ADMIN (OPERASIONAL)
            </span>
        </div>
        <div class="p-space-sm rounded-xl bg-surface-container shadow-[0_2px_8px_-2px_rgba(90,72,56,0.04)] flex items-center justify-between gap-space-sm">
            <div class="flex items-center gap-space-sm min-w-0">
                <div class="w-9 h-9 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-title-md text-title-md flex-shrink-0 font-bold">
                    {{ strtoupper(substr(Auth::user()->name ?? 'Siti Sarah', 0, 2)) }}
                </div>
                <div class="min-w-0">
                    <p class="font-title-md text-title-md text-on-surface truncate font-semibold leading-tight">
                        {{ Auth::user()->name ?? 'Siti Sarah' }}
                    </p>
                    <p class="font-label-sm text-label-sm text-on-surface-variant truncate">
                        {{ (Auth::user()->role ?? 'admin') === 'owner' ? 'Owner Bisnis Cattaleya' : 'Admin Operasional Studio' }}
                    </p>
                </div>
            </div>
            @if (Route::has('logout'))
                <form method="POST" action="{{ route('logout') }}" class="inline m-0">
                    @csrf
                    <button type="submit" class="p-1.5 rounded-lg text-secondary hover:bg-surface-container-high hover:text-error transition-colors flex-shrink-0 cursor-pointer" title="Keluar Portal">
                        <span class="material-symbols-outlined text-[20px]">logout</span>
                    </button>
                </form>
            @else
                <a class="p-1.5 rounded-lg text-secondary hover:bg-surface-container-high hover:text-error transition-colors flex-shrink-0" href="{{ route('home') }}" title="Keluar Portal">
                    <span class="material-symbols-outlined text-[20px]">logout</span>
                </a>
            @endif
        </div>
    </div>
</aside>
