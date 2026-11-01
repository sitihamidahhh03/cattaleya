<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Portal Pengguna Internal - Cattaleya</title>

    <!-- Google Fonts & Material Symbols -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;1,500;1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "outline": "#817568",
                        "surface-container-high": "#f1e6df",
                        "surface-container-highest": "#ebe0d9",
                        "secondary-container": "#f9dec8",
                        "outline-variant": "#d2c4b5",
                        "surface-container-low": "#fdf1ea",
                        "secondary-fixed": "#f9dec8",
                        "on-surface": "#201b17",
                        "on-primary-container": "#fffbff",
                        "error": "#ba1a1a",
                        "primary-fixed": "#ffddb4",
                        "on-tertiary-fixed": "#241a08",
                        "on-secondary-fixed": "#26190c",
                        "inverse-surface": "#352f2b",
                        "primary-fixed-dim": "#ecbf84",
                        "inverse-on-surface": "#faefe8",
                        "on-tertiary-fixed-variant": "#52452f",
                        "tertiary-container": "#827259",
                        "on-secondary-fixed-variant": "#554334",
                        "primary": "#775625",
                        "surface": "#fff8f5",
                        "inverse-primary": "#ecbf84",
                        "surface-container": "#f7ece5",
                        "on-tertiary": "#ffffff",
                        "background": "#fff8f5",
                        "surface-variant": "#ebe0d9",
                        "surface-tint": "#7a5827",
                        "surface-dim": "#e3d8d1",
                        "on-primary-fixed": "#291800",
                        "primary-container": "#936e3b",
                        "on-primary-fixed-variant": "#5f4112",
                        "tertiary": "#685a43",
                        "on-error-container": "#93000a",
                        "on-secondary": "#ffffff",
                        "on-tertiary-container": "#fffbff",
                        "tertiary-fixed": "#f4e0c2",
                        "secondary": "#6e5b4a",
                        "on-surface-variant": "#4f453a",
                        "surface-bright": "#fff8f5",
                        "on-error": "#ffffff",
                        "tertiary-fixed-dim": "#d7c4a7",
                        "on-primary": "#ffffff",
                        "surface-container-lowest": "#ffffff",
                        "secondary-fixed-dim": "#dbc2ad",
                        "error-container": "#ffdad6",
                        "on-secondary-container": "#74614f",
                        "on-background": "#201b17"
                    },
                    fontFamily: {
                        "headline-lg": ["Playfair Display", "serif"],
                        "headline-md": ["Playfair Display", "serif"],
                        "label-sm": ["Plus Jakarta Sans", "sans-serif"],
                        "body-lg": ["Plus Jakarta Sans", "sans-serif"],
                        "body-md": ["Plus Jakarta Sans", "sans-serif"],
                        "title-lg": ["Plus Jakarta Sans", "sans-serif"],
                        "title-md": ["Plus Jakarta Sans", "sans-serif"],
                        "label-md": ["Plus Jakarta Sans", "sans-serif"]
                    }
                }
            }
        };
    </script>
</head>
<body class="bg-surface font-body-md text-on-surface antialiased min-h-screen flex flex-col justify-center items-center">
    <main class="w-full bg-surface">
        <div class="relative w-full min-h-screen flex items-center justify-center p-4 sm:p-6 lg:p-12 overflow-hidden">
            <!-- Background Artwork with Atelier Lighting -->
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAQf8hAQkNsTOI1CMvqHDthrD7jhgEVqKmZqGKln9qU5s8eZgeb0UHT6HsrYyNIQyw0W36IRqbSZqXCgQ79a1WCiup8VuVdhvwy0l7VaW4KA8t6pu2sP6WMqVPl6clIMGE5OlUvSFDESURDeaPmdC-QnD8QCwS54Ph7fjK539iTncInJTVtjISaQmqStBJwmXopGeDhp6efM4bFwvmAJINfm7xuQUvHI6BzPBXvVtCKX6gfYV9sTQ25');">
            </div>
            <div class="absolute inset-0 bg-gradient-to-tr from-inverse-surface/85 via-inverse-surface/50 to-surface-container/60 backdrop-blur-sm"></div>

            <!-- Login Modal Card -->
            <div class="relative z-10 w-full max-w-4xl grid grid-cols-1 lg:grid-cols-12 rounded-2xl shadow-2xl overflow-hidden bg-surface-container-lowest border border-outline-variant/30">
                <!-- Left Column: Atelier Showcase (Visible on lg) -->
                <div class="lg:col-span-5 relative hidden lg:flex flex-col justify-between p-8 bg-surface-container text-on-surface overflow-hidden">
                    <div class="absolute -top-24 -left-24 w-64 h-64 rounded-full bg-secondary-container/40 blur-3xl pointer-events-none"></div>
                    <div class="absolute -bottom-24 -right-24 w-64 h-64 rounded-full bg-primary-fixed/30 blur-3xl pointer-events-none"></div>
                    
                    <div class="relative z-10 space-y-6">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-surface text-primary shadow-xs">
                            <span class="material-symbols-outlined text-base">verified_user</span>
                            <span class="font-label-sm text-label-sm tracking-wider uppercase font-semibold">Enkripsi Berlapis</span>
                        </div>
                        <div class="space-y-3">
                            <span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-semibold">Private Atelier Salon</span>
                            <h2 class="font-headline-lg text-2xl text-on-surface font-medium leading-tight">Presisi &amp; Keanggunan</h2>
                            <p class="font-body-md text-[13px] text-on-surface-variant leading-relaxed">
                                Selamat datang di konsol pengawasan terpadu Cattaleya. Kelola rangkaian mahar pusaka, penjadwalan hantaran akrilik, serta visibilitas eksekutif tanpa hambatan.
                            </p>
                        </div>
                    </div>

                    <div class="relative z-10 mt-8 space-y-4">
                        <div class="p-4 rounded-xl bg-surface/80 shadow-xs space-y-2 border border-outline-variant/20">
                            <div class="flex items-center justify-between text-secondary">
                                <span class="font-label-sm text-[11px] tracking-wider uppercase font-semibold">Status Studio Hari Ini</span>
                                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                            </div>
                            <p class="font-headline-md text-xl text-on-surface font-semibold">18 Kotak Dalam Antrean</p>
                            <p class="font-body-md text-xs text-on-surface-variant">4 batch pengiriman siap inspeksi mutu akhir sore ini.</p>
                        </div>
                        <div class="pt-2 flex items-center justify-between text-on-surface-variant font-label-md text-xs">
                            <span>Audit Trail Terverifikasi</span>
                            <span class="font-medium text-primary font-mono">v2.4.8 SECURE</span>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Login Form -->
                <div class="lg:col-span-7 p-6 sm:p-8 md:p-10 flex flex-col justify-between bg-surface-container-lowest">
                    <div>
                        <!-- Header with Atelier Monogram -->
                        <div class="flex items-center justify-between mb-6">
                            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                                <img src="{{ asset('images/logo.jpg') }}" alt="Cattaleya" class="w-11 h-11 rounded-xl object-cover shadow-xs ring-1 ring-outline-variant/50 group-hover:scale-105 transition-transform">
                                <div>
                                    <p class="font-headline-md text-xl text-on-surface tracking-tight leading-tight font-medium">Cattaleya</p>
                                    <p class="font-label-sm text-[10px] text-secondary tracking-widest uppercase">Seserahan &amp; Mahar</p>
                                </div>
                            </a>
                            <span class="px-2.5 py-1 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-[11px] font-semibold tracking-wide">
                                Internal Only
                            </span>
                        </div>

                        <div class="mb-6 space-y-1">
                            <h1 class="font-headline-lg text-2xl text-on-surface font-medium">Portal Pengguna Internal</h1>
                            <p class="font-body-md text-[13px] text-on-surface-variant">Akses khusus staf operasional studio dan manajemen bisnis.</p>
                        </div>

                        <!-- Session Status Display -->
                        @if (session('status'))
                            <div class="mb-4 p-3 rounded-xl bg-secondary-container/50 text-primary text-xs font-medium">
                                {{ session('status') }}
                            </div>
                        @endif

                        <!-- General Errors Display -->
                        @if (isset($errors) && $errors->any())
                            <div class="mb-4 p-3 rounded-xl bg-error-container text-on-error-container text-xs font-medium flex items-center gap-2">
                                <span class="material-symbols-outlined text-sm text-error">error</span>
                                <span>{{ $errors->first() }}</span>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}" class="space-y-4 sm:space-y-5" id="internalLoginForm">
                            @csrf

                            <!-- Role Selector Cards -->
                            <div class="space-y-2">
                                <label class="block font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold">
                                    Pilih Peran Masuk (Role)
                                </label>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3" id="roleSelectorGroup">
                                    <label class="role-option relative flex flex-col p-3 rounded-xl bg-surface-container cursor-pointer transition-all duration-200 select-none shadow-xs border border-transparent ring-2 ring-primary" data-role="admin">
                                        <input checked class="sr-only" name="userRole" type="radio" value="admin">
                                        <div class="flex items-center justify-between mb-1.5">
                                            <span class="material-symbols-outlined text-primary text-xl">palette</span>
                                            <span class="role-indicator w-4 h-4 rounded-full bg-primary flex items-center justify-center text-on-primary text-[10px]">
                                                <span class="material-symbols-outlined text-xs">check</span>
                                            </span>
                                        </div>
                                        <span class="font-title-md text-[13px] text-on-surface font-semibold">Admin Operasional</span>
                                        <span class="font-body-md text-on-surface-variant mt-0.5 text-[11px] leading-tight">
                                            Pemrosesan pesanan, kotak seserahan, &amp; data pelanggan.
                                        </span>
                                    </label>

                                    <label class="role-option relative flex flex-col p-3 rounded-xl bg-surface-container cursor-pointer transition-all duration-200 select-none shadow-xs border border-transparent" data-role="owner">
                                        <input class="sr-only" name="userRole" type="radio" value="owner">
                                        <div class="flex items-center justify-between mb-1.5">
                                            <span class="material-symbols-outlined text-tertiary text-xl">analytics</span>
                                            <span class="role-indicator w-4 h-4 rounded-full bg-surface-container-highest flex items-center justify-center text-on-surface text-[10px]"></span>
                                        </div>
                                        <span class="font-title-md text-[13px] text-on-surface font-semibold">Owner Bisnis</span>
                                        <span class="font-body-md text-on-surface-variant mt-0.5 text-[11px] leading-tight">
                                            Monitoring studio, ringkasan transaksi, &amp; laporan audit.
                                        </span>
                                    </label>
                                </div>

                                <!-- Quick Fill Demo Badge -->
                                <div class="p-2.5 rounded-xl bg-surface-container-low border border-outline-variant/30 flex flex-wrap items-center justify-between gap-2">
                                    <div class="flex items-center gap-1.5 text-[11px] text-on-surface-variant">
                                        <span class="material-symbols-outlined text-sm text-primary">key</span>
                                        <span><strong>Akun Demo:</strong> Isi cepat untuk pengujian</span>
                                    </div>
                                    <div class="flex items-center gap-1.5">
                                        <button type="button" id="btnFillAdmin" class="px-2.5 py-1 rounded-lg text-[11px] font-semibold bg-surface-container hover:bg-primary hover:text-on-primary text-on-surface transition-colors cursor-pointer border border-outline-variant/30 flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[13px]">palette</span> Admin
                                        </button>
                                        <button type="button" id="btnFillOwner" class="px-2.5 py-1 rounded-lg text-[11px] font-semibold bg-surface-container hover:bg-secondary hover:text-on-secondary text-on-surface transition-colors cursor-pointer border border-outline-variant/30 flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[13px]">analytics</span> Owner
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Email / Username Input -->
                            <div class="space-y-1.5">
                                <label class="block font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold" for="usernameInput">
                                    Username / Alamat Email Internal
                                </label>
                                <div class="relative">
                                    <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-lg">mail</span>
                                    <input class="w-full pl-11 pr-4 py-2.5 rounded-xl bg-surface-container text-on-surface font-body-md text-body-md placeholder:text-outline-variant focus:outline-none focus:ring-2 focus:ring-primary/40 focus:bg-surface-container-lowest transition-all"
                                        id="usernameInput" name="email" value="{{ old('email') }}" placeholder="nama.staf@cattaleya.id" required autofocus autocomplete="username" type="email">
                                </div>
                            </div>

                            <!-- Password Input -->
                            <div class="space-y-1.5">
                                <div class="flex items-center justify-between">
                                    <label class="block font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold" for="passwordInput">
                                        Kata Sandi Internal
                                    </label>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="font-label-sm text-xs text-primary hover:underline transition-all font-medium">
                                            Lupa Sandi?
                                        </a>
                                    @endif
                                </div>
                                <div class="relative">
                                    <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-lg">lock</span>
                                    <input class="w-full pl-11 pr-11 py-2.5 rounded-xl bg-surface-container text-on-surface font-body-md text-body-md placeholder:text-outline-variant focus:outline-none focus:ring-2 focus:ring-primary/40 focus:bg-surface-container-lowest transition-all"
                                        id="passwordInput" name="password" placeholder="••••••••••••" required autocomplete="current-password" type="password">
                                    <button aria-label="Tampilkan sandi" class="absolute right-3 top-1/2 -translate-y-1/2 text-outline hover:text-on-surface p-1 transition-colors" id="togglePasswordBtn" type="button">
                                        <span class="material-symbols-outlined text-lg" id="passwordToggleIcon">visibility</span>
                                    </button>
                                </div>
                            </div>

                            <!-- Remember Me Checkbox -->
                            <div class="flex items-center justify-between pt-1">
                                <label class="flex items-center gap-2 cursor-pointer select-none">
                                    <input class="rounded text-primary focus:ring-primary/40 bg-surface-container border-outline-variant" id="rememberSession" name="remember" type="checkbox">
                                    <span class="font-body-md text-xs sm:text-[13px] text-on-surface-variant">Simpan sesi perangkat studio</span>
                                </label>
                            </div>

                            <!-- Submit Button -->
                            <button class="w-full mt-2 py-3 px-6 rounded-xl bg-primary text-on-primary font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 shadow-md hover:bg-primary-container active:scale-[0.99] transition-all duration-150 cursor-pointer" id="submitButton" type="submit">
                                <span class="material-symbols-outlined text-base">login</span>
                                <span>Masuk ke Sistem</span>
                            </button>
                        </form>
                    </div>

                    <!-- Footer Back Navigation & Security Assurance -->
                    <div class="mt-8 pt-5 space-y-4 border-t border-outline-variant/30">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 text-center sm:text-left">
                            <a class="inline-flex items-center justify-center gap-1.5 font-label-md text-xs text-secondary hover:text-primary transition-colors font-medium" href="{{ route('home') }}">
                                <span class="material-symbols-outlined text-base">arrow_back</span>
                                <span>Kembali ke Beranda Publik (Pelanggan / Free User)</span>
                            </a>
                        </div>
                        <div class="p-3 rounded-xl bg-surface-container-low flex items-start gap-2.5 text-on-surface-variant border border-outline-variant/20">
                            <span class="material-symbols-outlined text-tertiary text-lg shrink-0 mt-0.5">lock_clock</span>
                            <p class="font-body-md text-[11px] leading-relaxed">
                                Sistem dilindungi enkripsi SSL 256-bit dan audit trail internal. Seluruh percobaan akses tanpa otoritas akan terekam ke log keamanan studio.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        (function() {
            const roleOptions = document.querySelectorAll('.role-option');
            const togglePasswordBtn = document.getElementById('togglePasswordBtn');
            const usernameInput = document.getElementById('usernameInput');
            const passwordInput = document.getElementById('passwordInput');
            const passwordToggleIcon = document.getElementById('passwordToggleIcon');
            const loginForm = document.getElementById('internalLoginForm');
            const submitBtn = document.getElementById('submitButton');
            const btnFillAdmin = document.getElementById('btnFillAdmin');
            const btnFillOwner = document.getElementById('btnFillOwner');

            function selectRole(role) {
                roleOptions.forEach(o => {
                    const matches = o.dataset.role === role;
                    o.classList.toggle('bg-surface-container-high', matches);
                    o.classList.toggle('ring-2', matches);
                    o.classList.toggle('ring-primary', matches);
                    o.classList.toggle('bg-surface-container', !matches);

                    const indicator = o.querySelector('.role-indicator');
                    if (indicator) {
                        if (matches) {
                            indicator.className = 'role-indicator w-4 h-4 rounded-full bg-primary flex items-center justify-center text-on-primary text-[10px]';
                            indicator.innerHTML = '<span class="material-symbols-outlined text-xs">check</span>';
                        } else {
                            indicator.className = 'role-indicator w-4 h-4 rounded-full bg-surface-container-highest flex items-center justify-center text-on-surface text-[10px]';
                            indicator.innerHTML = '';
                        }
                    }
                    const radio = o.querySelector('input[type="radio"]');
                    if (radio) radio.checked = matches;
                });
            }

            roleOptions.forEach(opt => {
                opt.addEventListener('click', () => {
                    const role = opt.dataset.role;
                    selectRole(role);
                });
            });

            if (btnFillAdmin) {
                btnFillAdmin.addEventListener('click', () => {
                    selectRole('admin');
                    if (usernameInput) usernameInput.value = 'admin@cattaleya.id';
                    if (passwordInput) passwordInput.value = 'password123';
                });
            }

            if (btnFillOwner) {
                btnFillOwner.addEventListener('click', () => {
                    selectRole('owner');
                    if (usernameInput) usernameInput.value = 'owner@cattaleya.id';
                    if (passwordInput) passwordInput.value = 'password123';
                });
            }

            if (togglePasswordBtn && passwordInput && passwordToggleIcon) {
                togglePasswordBtn.addEventListener('click', () => {
                    const isPassword = passwordInput.getAttribute('type') === 'password';
                    passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
                    passwordToggleIcon.textContent = isPassword ? 'visibility_off' : 'visibility';
                });
            }

            if (loginForm && submitBtn) {
                loginForm.addEventListener('submit', () => {
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<span class="material-symbols-outlined text-base animate-spin">progress_activity</span><span>Memverifikasi Akses...</span>';
                });
            }
        })();
    </script>
</body>
</html>
