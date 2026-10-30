<!-- Header / Navbar Cattaleya -->
<header class="fixed top-0 left-0 right-0 z-50 bg-surface/90 backdrop-blur-xl shadow-[0_1px_8px_rgba(90,72,56,0.04)]" x-data="{ mobileMenuOpen: false }">
    <div class="h-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 flex items-center justify-between gap-3 sm:gap-4">
        <!-- Brand Logo & Atelier Monogram -->
        <a href="{{ route('home') }}" class="flex items-center gap-2.5 sm:gap-3 group shrink-0">
            <img alt="Cattaleya Atelier" class="w-8 h-8 rounded-full object-cover shadow-sm ring-1 ring-outline-variant/60 group-hover:scale-105 transition-transform" src="https://lh3.googleusercontent.com/aida/AEtjO1UGcZm4X8zMfBUj21YAZFUgZgOp3l8W8dIxOP0TbhjPF6kk1kkISDTy1CyA8CSa8zOO-eTnCJtJmzfaPbZHIYzN5Q68sb_6tr0Cf3xZc4RUL_0POh5mGXB2oFiXmSA5qx0yMjaqoDIEci0U5QZeJ6Q7gsU556iMSup6-Ni1Otg_5ds_xxjvDx6dHnaxb1KE7orQ061rMTFfChbCon5fndr99-vHHTCOqh_7iZO0GrphDKFsc3LR159ZWrOnII7uWPF8TA0fXDkpuQ">
            <div class="flex flex-col">
                <span class="font-headline-md text-headline-md tracking-tight text-primary leading-none">Cattaleya</span>
                <span class="font-label-sm text-[10px] sm:text-label-sm uppercase tracking-widest text-secondary mt-0.5 sm:mt-1">Seserahan &amp; Mahar</span>
            </div>
        </a>

        <!-- Desktop & Tablet Navigation (Visible from md / 768px upwards) -->
        <nav class="hidden md:flex items-center gap-2.5 lg:gap-4 xl:gap-6 h-full whitespace-nowrap">
            <a href="{{ route('home') }}" class="font-label-md text-[11px] lg:text-[12px] xl:text-label-md uppercase tracking-wider transition-colors py-2 {{ request()->routeIs('home') ? 'text-primary font-semibold border-b-2 border-primary' : 'text-on-surface-variant hover:text-on-surface' }}" data-path="beranda">Beranda</a>
            <a href="{{ route('katalog') }}" class="font-label-md text-[11px] lg:text-[12px] xl:text-label-md uppercase tracking-wider transition-colors py-2 {{ request()->routeIs('katalog') ? 'text-primary font-semibold border-b-2 border-primary' : 'text-on-surface-variant hover:text-on-surface' }}" data-path="katalog">Katalog</a>
            <a href="{{ route('pesan-mahar') }}" class="font-label-md text-[11px] lg:text-[12px] xl:text-label-md uppercase tracking-wider transition-colors py-2 {{ request()->routeIs('pesan-mahar') ? 'text-primary font-semibold border-b-2 border-primary' : 'text-on-surface-variant hover:text-on-surface' }}" data-path="pesan-mahar">Pesan Mahar</a>
            <a href="{{ route('sewa-kotak-seserahan') }}" class="font-label-md text-[11px] lg:text-[12px] xl:text-label-md uppercase tracking-wider transition-colors py-2 {{ request()->routeIs('sewa-kotak-seserahan') ? 'text-primary font-semibold border-b-2 border-primary' : 'text-on-surface-variant hover:text-on-surface' }}" data-path="sewa-kotak-seserahan">Sewa Kotak Seserahan</a>
            <a href="{{ route('cek-pesanan') }}" class="font-label-md text-[11px] lg:text-[12px] xl:text-label-md uppercase tracking-wider transition-colors py-2 {{ request()->routeIs('cek-pesanan') ? 'text-primary font-semibold border-b-2 border-primary' : 'text-on-surface-variant hover:text-on-surface' }}" data-path="cek-pesanan">Cek Pesanan</a>
            <a href="{{ route('tentang-cattaleya') }}" class="hidden lg:inline-block font-label-md text-[11px] lg:text-[12px] xl:text-label-md uppercase tracking-wider transition-colors py-2 {{ request()->routeIs('tentang-cattaleya') ? 'text-primary font-semibold border-b-2 border-primary' : 'text-on-surface-variant hover:text-on-surface' }}" data-path="tentang-cattaleya">Tentang Cattaleya</a>
            <a href="{{ route('bantuan-whatsapp') }}" class="hidden xl:inline-block font-label-md text-label-md uppercase tracking-wider transition-colors py-2 {{ request()->routeIs('bantuan-whatsapp') ? 'text-primary font-semibold border-b-2 border-primary' : 'text-on-surface-variant hover:text-on-surface' }}" data-path="bantuan-whatsapp">Bantuan / WA</a>
        </nav>

        <!-- Action CTAs & Auth Links -->
        <div class="flex items-center gap-2 sm:gap-3 shrink-0">
            <a class="inline-flex items-center gap-1.5 sm:gap-2 px-3 sm:px-4 py-2 rounded-xl bg-primary text-on-primary font-label-md text-xs sm:text-label-md hover:bg-primary-container transition-colors shadow-[0_2px_8px_-2px_rgba(90,72,56,0.08)]" href="https://wa.me/6282210008899" rel="noopener noreferrer" target="_blank">
                <span class="material-symbols-outlined text-base sm:text-lg leading-none">chat</span>
                <span class="hidden sm:inline">Konsultasi WA</span>
            </a>

            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="inline-flex items-center gap-1.5 px-3 sm:px-3.5 py-2 rounded-xl bg-surface text-secondary border border-outline-variant font-label-md text-xs sm:text-label-md hover:bg-surface-container-high hover:text-on-surface transition-all">
                        <span class="material-symbols-outlined text-base sm:text-lg leading-none">dashboard</span>
                        <span class="hidden sm:inline">Dashboard</span>
                    </a>
                @else
                    <a href="{{ route('login') }}" class="inline-flex items-center gap-1.5 px-3 sm:px-3.5 py-2 rounded-xl bg-surface text-secondary border border-outline-variant font-label-md text-xs sm:text-label-md hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="login-internal">
                        <span class="material-symbols-outlined text-base sm:text-lg leading-none">lock</span>
                        <span class="hidden sm:inline">Login Internal</span>
                    </a>
                @endauth
            @else
                <a class="inline-flex items-center gap-1.5 px-3 sm:px-3.5 py-2 rounded-xl bg-surface text-secondary border border-outline-variant font-label-md text-xs sm:text-label-md hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="login-internal" href="#">
                    <span class="material-symbols-outlined text-base sm:text-lg leading-none">lock</span>
                    <span class="hidden sm:inline">Login Internal</span>
                </a>
            @endif

            <!-- Mobile Menu Toggle Button (Visible only on screens smaller than md / 768px) -->
            <button id="headerMobileMenuBtn" @click="mobileMenuOpen = !mobileMenuOpen" onclick="toggleMobileNavFallback()" type="button" class="md:hidden inline-flex items-center justify-center p-2 rounded-xl text-on-surface-variant hover:text-on-surface hover:bg-surface-container focus:outline-none transition-colors" aria-label="Toggle navigation menu">
                <span class="material-symbols-outlined text-2xl" id="headerMobileMenuIcon">menu</span>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div id="mobileNavDrawer" x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2" class="hidden md:hidden border-t border-outline-variant/50 bg-surface/98 backdrop-blur-2xl px-6 py-4 shadow-lg">
        <nav class="flex flex-col space-y-3 font-label-md text-label-md uppercase tracking-wider">
            <a @click="mobileMenuOpen = false" href="{{ route('home') }}" class="py-2.5 {{ request()->routeIs('home') ? 'text-primary font-semibold' : 'text-on-surface-variant hover:text-on-surface' }} border-b border-outline-variant/30 flex items-center justify-between">
                <span>Beranda</span>
                <span class="material-symbols-outlined text-sm">chevron_right</span>
            </a>
            <a @click="mobileMenuOpen = false" href="{{ route('katalog') }}" class="py-2.5 {{ request()->routeIs('katalog') ? 'text-primary font-semibold' : 'text-on-surface-variant hover:text-on-surface' }} border-b border-outline-variant/30 flex items-center justify-between">
                <span>Katalog Mahar &amp; Kotak</span>
                <span class="material-symbols-outlined text-sm">chevron_right</span>
            </a>
            <a @click="mobileMenuOpen = false" href="{{ route('pesan-mahar') }}" class="py-2.5 {{ request()->routeIs('pesan-mahar') ? 'text-primary font-semibold' : 'text-on-surface-variant hover:text-on-surface' }} border-b border-outline-variant/30 flex items-center justify-between">
                <span>Pesan Mahar Bespoke</span>
                <span class="material-symbols-outlined text-sm">chevron_right</span>
            </a>
            <a @click="mobileMenuOpen = false" href="{{ route('sewa-kotak-seserahan') }}" class="py-2.5 {{ request()->routeIs('sewa-kotak-seserahan') ? 'text-primary font-semibold' : 'text-on-surface-variant hover:text-on-surface' }} border-b border-outline-variant/30 flex items-center justify-between">
                <span>Sewa Kotak Seserahan</span>
                <span class="material-symbols-outlined text-sm">chevron_right</span>
            </a>
            <a @click="mobileMenuOpen = false" href="{{ route('cek-pesanan') }}" class="py-2.5 {{ request()->routeIs('cek-pesanan') ? 'text-primary font-semibold' : 'text-on-surface-variant hover:text-on-surface' }} border-b border-outline-variant/30 flex items-center justify-between">
                <span>Cek Status Pesanan</span>
                <span class="material-symbols-outlined text-sm">chevron_right</span>
            </a>
            <a @click="mobileMenuOpen = false" href="{{ route('tentang-cattaleya') }}" class="py-2.5 {{ request()->routeIs('tentang-cattaleya') ? 'text-primary font-semibold' : 'text-on-surface-variant hover:text-on-surface' }} border-b border-outline-variant/30 flex items-center justify-between">
                <span>Tentang Cattaleya</span>
                <span class="material-symbols-outlined text-sm">chevron_right</span>
            </a>
            <a @click="mobileMenuOpen = false" href="{{ route('bantuan-whatsapp') }}" class="py-2.5 {{ request()->routeIs('bantuan-whatsapp') ? 'text-primary font-semibold' : 'text-on-surface-variant hover:text-on-surface' }} flex items-center justify-between">
                <span class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-lg text-primary">chat</span>
                    <span>Bantuan &amp; WhatsApp Resmi</span>
                </span>
                <span class="material-symbols-outlined text-sm">chevron_right</span>
            </a>
        </nav>
    </div>

    <script>
        function toggleMobileNavFallback() {
            const drawer = document.getElementById('mobileNavDrawer');
            const icon = document.getElementById('headerMobileMenuIcon');
            if (drawer) {
                const isHidden = drawer.classList.contains('hidden');
                if (isHidden) {
                    drawer.classList.remove('hidden');
                    if (icon) icon.textContent = 'close';
                } else {
                    drawer.classList.add('hidden');
                    if (icon) icon.textContent = 'menu';
                }
            }
        }
    </script>
</header>
