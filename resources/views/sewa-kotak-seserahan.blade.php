@extends('layouts.main')

@section('title', 'Formulir Sewa Kotak Seserahan - Cattaleya')

@section('content')
<div class="flex flex-col w-full pb-20">
    <!-- Subtle Ambient Glow Ornaments -->
    <div class="relative w-full overflow-hidden">
        <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[850px] h-[340px] bg-gradient-to-b from-primary-fixed/20 via-secondary-fixed/15 to-transparent blur-3xl pointer-events-none rounded-full"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 py-10">
            <!-- Section Header with Heirloom Warmth -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-10 border-b border-outline-variant/30">
                <div class="space-y-2">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm uppercase tracking-widest">
                        <span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
                        Layanan Reservasi Resmi Studio
                    </div>
                    <h1 class="font-headline-lg text-2xl sm:text-3xl md:text-4xl text-on-surface tracking-tight font-medium">
                        Formulir Sewa Kotak Seserahan
                    </h1>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl leading-relaxed">
                        Sistem ketersediaan real-time terintegrasi buffer sterilisasi higienis H-2 s/d H+2. Menjamin kemurnian kotak vitrine dan keagungan hari bahagia Anda tanpa risiko <em class="italic">double booking</em>.
                    </p>
                </div>

                <!-- Trust Badges -->
                <div class="flex items-center gap-4 bg-surface-container-lowest p-3.5 rounded-xl shadow-sm self-start md:self-auto border border-outline-variant/30">
                    <div class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center text-primary shrink-0">
                        <span class="material-symbols-outlined text-2xl">security</span>
                    </div>
                    <div>
                        <div class="font-title-md text-title-md text-on-surface font-semibold leading-tight">Midtrans Verified</div>
                        <div class="font-label-sm text-label-sm text-on-surface-variant">Garansi Deposit 100% Kembali</div>
                    </div>
                </div>
            </div>

            <!-- Main Layout: 2-Column Asymmetric Ledger Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 pt-10">
                <!-- Left / Core Input Panel (7 Cols) -->
                <div class="lg:col-span-7 space-y-8">
                    <!-- STEP 1: Pelanggan -->
                    <div class="bg-surface-container-lowest p-6 sm:p-8 rounded-2xl shadow-sm border border-outline-variant/30 relative overflow-hidden">
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center gap-3">
                                <span class="w-7 h-7 rounded-full bg-primary/10 text-primary font-label-md text-label-md flex items-center justify-center font-bold">01</span>
                                <h2 class="font-title-lg text-title-lg text-on-surface font-semibold">Data Pelanggan &amp; Pengantin</h2>
                            </div>
                            <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Identitas Kontak</span>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div class="space-y-1.5">
                                <label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider block" for="cust-name">Nama Lengkap Pemesan *</label>
                                <div class="relative">
                                    <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-lg">person</span>
                                    <input class="w-full bg-surface-container-low text-on-surface font-body-md text-body-md pl-11 pr-4 py-3 rounded-xl focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary/40 transition-all shadow-inner" id="cust-name" placeholder="Nama lengkap sesuai KTP" type="text" value="Nabila Maharani Putri">
                                </div>
                            </div>
                            <div class="space-y-1.5">
                                <label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider block" for="cust-wa">Nomor WhatsApp Aktif *</label>
                                <div class="relative">
                                    <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-lg">chat</span>
                                    <input class="w-full bg-surface-container-low text-on-surface font-body-md text-body-md pl-11 pr-4 py-3 rounded-xl focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary/40 transition-all shadow-inner" id="cust-wa" placeholder="08xxxxxxxxxx" type="tel" value="081298457721">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- STEP 2: Jadwal & Periode Sewa -->
                    <div class="bg-surface-container-lowest p-6 sm:p-8 rounded-2xl shadow-sm border border-outline-variant/30 space-y-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <span class="w-7 h-7 rounded-full bg-primary/10 text-primary font-label-md text-label-md flex items-center justify-center font-bold">02</span>
                                <h2 class="font-title-lg text-title-lg text-on-surface font-semibold">Jadwal Acara &amp; Alokasi Waktu</h2>
                            </div>
                            <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Siklus 5 Hari</span>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div class="space-y-1.5 sm:col-span-2">
                                <label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider flex items-center justify-between" for="wedding-date">
                                    <span>Tanggal Acara Pernikahan (H) *</span>
                                    <span class="text-primary font-normal text-label-sm capitalize">Rekomendasi booking minimal H-14</span>
                                </label>
                                <div class="relative">
                                    <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-primary text-xl">event</span>
                                    <input class="w-full bg-surface-container-low text-on-surface font-title-md text-title-md pl-11 pr-4 py-3 rounded-xl focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary/40 transition-all shadow-inner cursor-pointer" id="wedding-date" type="date" value="2025-10-22">
                                </div>
                            </div>

                            <!-- Automated Timeline Cards -->
                            <div class="p-4 rounded-xl bg-surface-container-low space-y-2 border border-outline-variant/20">
                                <div class="flex items-center justify-between">
                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Pengambilan (H-2)</span>
                                    <span class="material-symbols-outlined text-secondary text-base">storefront</span>
                                </div>
                                <div class="font-title-md text-title-md text-on-surface font-bold" id="calc-pickup-date">20 Oktober 2025</div>
                                <div class="text-xs text-on-surface-variant">Studio Menteng: 10:00 - 15:00 WIB</div>
                            </div>
                            <div class="p-4 rounded-xl bg-surface-container-low space-y-2 border border-outline-variant/20">
                                <div class="flex items-center justify-between">
                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Pengembalian (H+2)</span>
                                    <span class="material-symbols-outlined text-secondary text-base">assignment_return</span>
                                </div>
                                <div class="font-title-md text-title-md text-on-surface font-bold" id="calc-return-date">24 Oktober 2025</div>
                                <div class="text-xs text-on-surface-variant">Maksimal pukul 17:00 WIB</div>
                            </div>
                        </div>

                        <!-- Jam Pengambilan Dropdown -->
                        <div class="space-y-1.5">
                            <label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider block" for="pickup-time-slot">Slot Waktu Pengambilan di Studio *</label>
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-lg">schedule</span>
                                <select class="w-full bg-surface-container-low text-on-surface font-body-md text-body-md pl-11 pr-10 py-3 rounded-xl appearance-none focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary/40 transition-all cursor-pointer" id="pickup-time-slot">
                                    <option selected="">Sesi 1: 10:00 - 12:00 WIB (Studio Cattaleya Menteng)</option>
                                    <option>Sesi 2: 13:00 - 15:00 WIB (Studio Cattaleya Menteng)</option>
                                    <option>Sesi 3: 15:30 - 17:30 WIB (Studio Cattaleya Menteng)</option>
                                </select>
                                <span class="material-symbols-outlined absolute right-3.5 top-1/2 -translate-y-1/2 text-outline pointer-events-none text-xl">expand_more</span>
                            </div>
                        </div>
                    </div>

                    <!-- STEP 3: Pilihan Seri Kotak & Paket -->
                    <div class="bg-surface-container-lowest p-6 sm:p-8 rounded-2xl shadow-sm border border-outline-variant/30 space-y-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <span class="w-7 h-7 rounded-full bg-primary/10 text-primary font-label-md text-label-md flex items-center justify-center font-bold">03</span>
                                <h2 class="font-title-lg text-title-lg text-on-surface font-semibold">Pilihan Seri Kotak &amp; Dekorasi</h2>
                            </div>
                            <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Koleksi Atelier</span>
                        </div>

                        <!-- Series Selection (Visual Grid) -->
                        <div class="space-y-2.5">
                            <label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider block">Pilih Seri Kotak Eksklusif</label>
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3" id="series-selector">
                                <!-- Option 1: Luxury Crystal (Active) -->
                                <button class="series-card group text-left p-3 rounded-xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col justify-between active-series ring-2 ring-primary" data-booked="6" data-rate="200000" data-series="Luxury Crystal" data-stock="10" type="button">
                                    <div class="w-full aspect-square rounded-lg overflow-hidden mb-2 relative bg-surface-container">
                                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB_9vZd8-vJovtgwNSxBeUheql_73hbrBWXGuPc6dlxy2Z4oTWCeAKfQQgKo1SOH1b3qCh3wpIJ6xi_ACyCQhV1OqanmiQ7k5x_870aX5jtPFIACHttRu1lCx9Ok6Z7hFH0LsJHEAKewak4vOcVZRN68EoqpXpbrL1RyJNhkPh_1vLe8QXBe4cNK6rn5oyeR0vSRaHwKhRwK3m4CeJCMys_MoM1sdhBWLdWulNEF4JdAe6kHCJOwKUr" alt="Luxury Crystal Series">
                                        <span class="absolute top-1.5 right-1.5 w-5 h-5 rounded-full bg-primary text-on-primary flex items-center justify-center">
                                            <span class="material-symbols-outlined text-xs">check</span>
                                        </span>
                                    </div>
                                    <div>
                                        <h3 class="font-title-md text-[13px] sm:text-title-md text-on-surface font-semibold leading-tight">Luxury Crystal</h3>
                                        <p class="font-label-sm text-label-sm text-primary mt-0.5 font-bold">Rp 200rb<span class="text-on-surface-variant font-normal text-[11px]">/box</span></p>
                                    </div>
                                </button>

                                <!-- Option 2: Luxury White -->
                                <button class="series-card group text-left p-3 rounded-xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col justify-between" data-booked="2" data-rate="185000" data-series="Luxury White" data-stock="12" type="button">
                                    <div class="w-full aspect-square rounded-lg overflow-hidden mb-2 relative bg-surface-container">
                                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCByYm9SIns8m6MtaFvBMATKZ66kIsBJkjz-xgaFt94dDHnVxJDIvTLXus2Vz7V_hisyRwPYLT1bC2fe3onw1X1OwbLzKpRmwdE3AxwdvYcp04uR5rLjaTP59stD8iDAkdaH3VIpAMos_P5M_9_u6wyjeCZEyn_ZXRLGgQ8DE2Th0S1QGZU0pe4utz_QSOIM253_xG5p6x9WtDM0d3vGK5-QV8Gt-3CoDvJsRrzFajbTveUxKE_x1yl" alt="Luxury White Series">
                                    </div>
                                    <div>
                                        <h3 class="font-title-md text-[13px] sm:text-title-md text-on-surface font-semibold leading-tight">Luxury White</h3>
                                        <p class="font-label-sm text-label-sm text-primary mt-0.5 font-bold">Rp 185rb<span class="text-on-surface-variant font-normal text-[11px]">/box</span></p>
                                    </div>
                                </button>

                                <!-- Option 3: Hidden Series -->
                                <button class="series-card group text-left p-3 rounded-xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col justify-between" data-booked="7" data-rate="225000" data-series="Hidden Series" data-stock="8" type="button">
                                    <div class="w-full aspect-square rounded-lg overflow-hidden mb-2 relative bg-surface-container">
                                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-LRMr4gYRJ_W3pkuLmwmJ0aQCrs8WGLDDKFMH-0QtOa8nkuosqYYSHsWJQHmVScF-_ruIw6kfhXfFAJggkzQJ_7dw0CkHWi5LLi-odlJFDv2hwPJlGTHtU5e8gkmHctSvQRYWnai1mAZZ0vxIV5P8VJ3-rtc8hkrpMUdgtiGhtdjWyxjUODY4m1NrjnK_vjAeRA4kRgz-GtNWdFhlRBc3xFlPuiKTKWHqEyo9GsgPX3AYLzrQe53C" alt="Hidden Series">
                                    </div>
                                    <div>
                                        <h3 class="font-title-md text-[13px] sm:text-title-md text-on-surface font-semibold leading-tight">Hidden Series</h3>
                                        <p class="font-label-sm text-label-sm text-primary mt-0.5 font-bold">Rp 225rb<span class="text-on-surface-variant font-normal text-[11px]">/box</span></p>
                                    </div>
                                </button>

                                <!-- Option 4: Rattan Series -->
                                <button class="series-card group text-left p-3 rounded-xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col justify-between" data-booked="3" data-rate="165000" data-series="Rattan Series" data-stock="10" type="button">
                                    <div class="w-full aspect-square rounded-lg overflow-hidden mb-2 relative bg-surface-container">
                                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBhrXEdZAJ4csMXDCyfzvVvFWBTV2-ZxYIrPdi7Kj9-B9jmBdb_LXECKrQS2-KxD73E3tZG4NbJRbCamxciydUO1xzSpfcbLks8bA-QAUPQHb1n-tnod63ctgsWPLL8xYdPL2I7B1A5L8YErMgaIM2SNvcJr4vU3LMSScuc_H1KfGYz1a9Tv3Qewqc5jzCWSbBSG5oHK1_8Gg7uJejthJK-Z3MlX-u9mjWU_-uPljAKUhDfsy2XpEhE" alt="Rattan Series">
                                    </div>
                                    <div>
                                        <h3 class="font-title-md text-[13px] sm:text-title-md text-on-surface font-semibold leading-tight">Rattan Series</h3>
                                        <p class="font-label-sm text-label-sm text-primary mt-0.5 font-bold">Rp 165rb<span class="text-on-surface-variant font-normal text-[11px]">/box</span></p>
                                    </div>
                                </button>
                            </div>
                        </div>

                        <!-- Unit Count Buttons (4, 6, 8, 10 Kotak) -->
                        <div class="space-y-2.5">
                            <div class="flex items-center justify-between">
                                <label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider block">Jumlah Kotak Seserahan (Paket)</label>
                                <span class="font-label-sm text-label-sm text-secondary">Ganjil / Genap diperbolehkan</span>
                            </div>
                            <div class="grid grid-cols-4 gap-3" id="qty-selector">
                                <button class="qty-btn py-3 px-2 rounded-xl text-center font-title-md text-title-md transition-all bg-primary text-on-primary shadow-sm ring-2 ring-primary" data-qty="4" type="button">
                                    4 Kotak
                                </button>
                                <button class="qty-btn py-3 px-2 rounded-xl text-center font-title-md text-title-md transition-all bg-surface-container-low text-on-surface hover:bg-surface-container" data-qty="6" type="button">
                                    6 Kotak
                                </button>
                                <button class="qty-btn py-3 px-2 rounded-xl text-center font-title-md text-title-md transition-all bg-surface-container-low text-on-surface hover:bg-surface-container" data-qty="8" type="button">
                                    8 Kotak
                                </button>
                                <button class="qty-btn py-3 px-2 rounded-xl text-center font-title-md text-title-md transition-all bg-surface-container-low text-on-surface hover:bg-surface-container" data-qty="10" type="button">
                                    10 Kotak
                                </button>
                            </div>
                        </div>

                        <!-- Floral Theme Selector -->
                        <div class="space-y-2.5">
                            <label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider block" for="floral-theme">Tema Rangkaian Bunga &amp; Pita</label>
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-lg">local_florist</span>
                                <select class="w-full bg-surface-container-low text-on-surface font-body-md text-body-md pl-11 pr-10 py-3 rounded-xl appearance-none focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary/40 transition-all cursor-pointer" id="floral-theme">
                                    <option selected="">Champagne Gold &amp; Preserved Orchid (Signature Cattaleya)</option>
                                    <option>Velvet Rose &amp; Dusty Mauve Romance</option>
                                    <option>Earthy Rustic &amp; Bleached Pampas Grass</option>
                                    <option>Emerald Green &amp; Botanical White Eucalyptus</option>
                                </select>
                                <span class="material-symbols-outlined absolute right-3.5 top-1/2 -translate-y-1/2 text-outline pointer-events-none text-xl">expand_more</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right / Verification Engine & Checkout Panel (5 Cols) -->
                <div class="lg:col-span-5 space-y-6 lg:sticky lg:top-24">
                    <!-- STEP 4: Engine Verifikasi Real-time Anti Double-Booking -->
                    <div class="bg-surface-container-lowest p-6 sm:p-7 rounded-2xl shadow-md border border-outline-variant/30 space-y-5 relative overflow-hidden">
                        <div class="flex items-center justify-between pb-3 border-b border-outline-variant/30">
                            <div class="flex items-center gap-2 text-primary font-title-lg text-title-lg font-semibold">
                                <span class="material-symbols-outlined text-2xl">verified_user</span>
                                <span>Mesin Verifikasi Stok</span>
                            </div>
                            <span class="px-2.5 py-1 rounded-full text-label-sm font-label-sm bg-surface-container text-on-surface-variant uppercase tracking-wider font-semibold">Live Check</span>
                        </div>

                        <!-- Inventory Matrix Breakdown -->
                        <div class="space-y-3 font-body-md text-body-md">
                            <div class="flex justify-between items-center py-1">
                                <span class="text-on-surface-variant">Seri Kotak Terpilih</span>
                                <span class="font-title-md text-title-md text-on-surface font-semibold" id="disp-series-name">Luxury Crystal</span>
                            </div>
                            <div class="flex justify-between items-center py-1">
                                <span class="text-on-surface-variant">Kapasitas Master Studio</span>
                                <span class="font-title-md text-title-md text-on-surface font-semibold" id="disp-master-stock">10 Unit</span>
                            </div>
                            <div class="flex justify-between items-start py-1">
                                <span class="text-on-surface-variant">Periode Sterilisasi Buffer</span>
                                <div class="text-right">
                                    <div class="font-title-md text-title-md text-on-surface font-semibold" id="disp-buffer-range">20 Okt - 24 Okt 2025</div>
                                    <div class="font-label-sm text-label-sm text-secondary">H-2 s/d H+2 (Termasuk kurasi)</div>
                                </div>
                            </div>

                            <!-- Stock Bar Indicator -->
                            <div class="pt-2 space-y-1.5">
                                <div class="flex justify-between text-xs">
                                    <span class="text-on-surface-variant" id="disp-booked-info">Terbooking: 6 Unit</span>
                                    <span class="font-semibold text-primary" id="disp-avail-info">Sisa Slot Tersedia: 4 Unit</span>
                                </div>
                                <!-- Visual Segmented Bar -->
                                <div class="w-full h-3 rounded-full bg-surface-container-high overflow-hidden flex" id="stock-progress-bar">
                                    <div class="bg-outline/50 h-full transition-all duration-300" id="booked-bar" style="width: 60%;"></div>
                                    <div class="bg-primary h-full transition-all duration-300" id="avail-bar" style="width: 40%;"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Dynamic Availability Status Card -->
                        <div class="p-4 rounded-xl transition-all duration-200 bg-[#EFF3EE] text-[#344837]" id="availability-status-box">
                            <div class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-xl mt-0.5 text-primary" id="status-icon">check_circle</span>
                                <div class="space-y-1">
                                    <div class="font-title-md text-title-md leading-tight font-bold" id="status-title">Tersedia (Sisa 4 Unit)</div>
                                    <p class="font-body-md text-body-md leading-relaxed text-opacity-90" id="status-desc">
                                        Slot tanggal aman terkunci untuk Anda. Seri Luxury Crystal siap dirangkai oleh tim atelier Cattaleya.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Warning Notice (Hidden by default, shown if chosen qty > available) -->
                        <div class="hidden p-4 rounded-xl bg-error-container text-on-error-container space-y-2" id="conflict-alert">
                            <div class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-error text-2xl mt-0.5">warning</span>
                                <div class="space-y-1">
                                    <div class="font-title-md text-title-md font-bold text-error">Perhatian: Ketersediaan Tidak Cukup</div>
                                    <p class="font-body-md text-body-md leading-relaxed text-on-surface">
                                        Jumlah kotak yang dipilih (<span class="font-bold" id="alert-qty">6 unit</span>) melebihi batas slot untuk periode ini (Sisa slot tersedia: <span class="font-bold" id="alert-avail">4 unit</span>).
                                    </p>
                                    <p class="font-label-sm text-label-sm text-on-surface-variant pt-1">
                                        Silakan sesuaikan jumlah paket, ubah ke seri kotak lain yang masih tersedia, atau pilih tanggal berbeda. Sesuai kebijakan ketersediaan, sistem tidak mengalihkan seri secara otomatis demi kenyamanan pilihan Anda.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- STEP 5: Ringkasan Sewa & Midtrans Gateway -->
                    <div class="bg-surface-container-lowest p-6 sm:p-7 rounded-2xl shadow-md border border-outline-variant/30 space-y-6">
                        <h2 class="font-title-lg text-title-lg text-on-surface pb-3 border-b border-outline-variant/30 font-semibold">Ringkasan Biaya Reservasi</h2>
                        <div class="space-y-3 font-body-md text-body-md">
                            <div class="flex justify-between items-start">
                                <div>
                                    <div class="text-on-surface font-medium" id="summary-package-title">Paket 4 Kotak Luxury Crystal</div>
                                    <div class="text-xs text-on-surface-variant" id="summary-unit-calc">4 Kotak × Rp 200.000</div>
                                </div>
                                <div class="font-title-md text-title-md text-on-surface font-semibold" id="summary-rental-subtotal">Rp 800.000</div>
                            </div>
                            <div class="flex justify-between items-start">
                                <div>
                                    <div class="text-on-surface flex items-center gap-1.5 font-medium">
                                        <span>Biaya Jaminan / Deposit Kotak</span>
                                        <span class="material-symbols-outlined text-outline text-sm" title="Deposit akan dikembalikan 100% setelah baki dikembalikan dalam kondisi baik">help</span>
                                    </div>
                                    <div class="text-xs text-secondary font-medium">100% Dapat Dikembalikan (Refundable)</div>
                                </div>
                                <div class="font-title-md text-title-md text-on-surface font-semibold">Rp 500.000</div>
                            </div>
                            <div class="pt-3 border-t border-outline-variant/30 flex justify-between items-baseline">
                                <span class="font-title-md text-title-md text-on-surface font-bold">Total Nilai Transaksi</span>
                                <span class="font-headline-md text-headline-md text-primary font-bold" id="summary-total-all">Rp 1.300.000</span>
                            </div>
                        </div>

                        <!-- Payment Mode Selector (Midtrans Rules) -->
                        <div class="space-y-2.5 pt-2">
                            <label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider block font-medium">Opsi Pembayaran Midtrans</label>
                            <div class="grid grid-cols-2 gap-3" id="pay-mode-selector">
                                <button class="pay-btn p-3.5 rounded-xl text-left transition-all bg-surface-container ring-2 ring-primary" data-pay="full" type="button">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="font-title-md text-title-md text-on-surface font-bold">Bayar Penuh</span>
                                        <span class="w-4 h-4 rounded-full bg-primary flex items-center justify-center text-on-primary">
                                            <span class="material-symbols-outlined text-[10px]">check</span>
                                        </span>
                                    </div>
                                    <div class="font-label-sm text-label-sm text-primary font-bold" id="pay-full-val">Rp 1.300.000</div>
                                    <div class="text-[11px] text-on-surface-variant mt-0.5">Sewa + Deposit Langsung</div>
                                </button>
                                <button class="pay-btn p-3.5 rounded-xl text-left transition-all bg-surface-container-low hover:bg-surface-container" data-pay="dp" type="button">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="font-title-md text-title-md text-on-surface font-bold">Bayar DP (50%)</span>
                                        <span class="w-4 h-4 rounded-full border border-outline-variant hidden check-indicator"></span>
                                    </div>
                                    <div class="font-label-sm text-label-sm text-primary font-bold" id="pay-dp-val">Rp 400.000</div>
                                    <div class="text-[11px] text-on-surface-variant mt-0.5">Pelunasan saat serah terima</div>
                                </button>
                            </div>
                        </div>

                        <!-- Payment Methods Supported Icons Preview -->
                        <div class="flex items-center justify-between px-3 py-2 rounded-lg bg-surface-container-low text-xs text-on-surface-variant">
                            <span>Metode: BCA, Mandiri, QRIS, Kartu Kredit</span>
                            <span class="font-label-sm text-label-sm uppercase text-secondary font-bold">Midtrans Snap</span>
                        </div>

                        <!-- Action Button -->
                        <button class="w-full py-4 px-6 rounded-xl bg-primary hover:bg-primary-container text-on-primary font-title-md text-title-md flex items-center justify-center gap-3 transition-colors shadow-lg shadow-primary/20 group" id="btn-submit" type="button">
                            <span class="material-symbols-outlined text-xl group-hover:scale-110 transition-transform">lock</span>
                            <span>Konfirmasi &amp; Lanjut Pembayaran Midtrans</span>
                        </button>
                        <p class="font-label-sm text-label-sm text-center text-on-surface-variant leading-relaxed">
                            Dengan mengonfirmasi, slot unit baki Anda akan diamankan secara eksklusif selama 15 menit melalui antrean pembayaran otomatis Midtrans.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Atelier Security & Rental Protocol (Below Form) -->
            <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm border border-outline-variant/30 space-y-2">
                    <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-3">
                        <span class="material-symbols-outlined text-lg">sanitizer</span>
                    </div>
                    <h3 class="font-title-md text-title-md text-on-surface font-bold">Sterilisasi &amp; Buffering H-2</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        Setiap tray akrilik dan baki velvet melalui proses dekontaminasi dan pemolesan anti-debu 48 jam sebelum jadwal pengambilan Anda.
                    </p>
                </div>
                <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm border border-outline-variant/30 space-y-2">
                    <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-3">
                        <span class="material-symbols-outlined text-lg">assignment_turned_in</span>
                    </div>
                    <h3 class="font-title-md text-title-md text-on-surface font-bold">Klaim Pengembalian Deposit</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        Deposit jaminan Rp 500.000 dikembalikan otomatis ke rekening/e-wallet Anda dalam 1x24 jam setelah pengecekan fisik kotak di studio.
                    </p>
                </div>
                <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm border border-outline-variant/30 space-y-2">
                    <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-3">
                        <span class="material-symbols-outlined text-lg">support_agent</span>
                    </div>
                    <h3 class="font-title-md text-title-md text-on-surface font-bold">Pendampingan Stylist</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        Butuh penyesuaian khusus atau barang seserahan berdimensi besar? Konsultan atelier kami siap membantu via WhatsApp Dedicated Concierge.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
  (function() {
    // State
    const state = {
      seriesName: "Luxury Crystal",
      ratePerBox: 200000,
      totalStock: 10,
      bookedStock: 6,
      qty: 4,
      deposit: 500000,
      paymentMode: "full",
      weddingDate: "2025-10-22"
    };

    // DOM Elements
    const weddingDateInput = document.getElementById("wedding-date");
    const calcPickupDate = document.getElementById("calc-pickup-date");
    const calcReturnDate = document.getElementById("calc-return-date");
    const dispBufferRange = document.getElementById("disp-buffer-range");

    const seriesButtons = document.querySelectorAll(".series-card");
    const qtyButtons = document.querySelectorAll(".qty-btn");
    const payButtons = document.querySelectorAll(".pay-btn");

    const dispSeriesName = document.getElementById("disp-series-name");
    const dispMasterStock = document.getElementById("disp-master-stock");
    const dispBookedInfo = document.getElementById("disp-booked-info");
    const dispAvailInfo = document.getElementById("disp-avail-info");
    const bookedBar = document.getElementById("booked-bar");
    const availBar = document.getElementById("avail-bar");

    const availBox = document.getElementById("availability-status-box");
    const statusTitle = document.getElementById("status-title");
    const statusDesc = document.getElementById("status-desc");
    const statusIcon = document.getElementById("status-icon");
    const conflictAlert = document.getElementById("conflict-alert");
    const alertQty = document.getElementById("alert-qty");
    const alertAvail = document.getElementById("alert-avail");

    const summaryPackageTitle = document.getElementById("summary-package-title");
    const summaryUnitCalc = document.getElementById("summary-unit-calc");
    const summaryRentalSubtotal = document.getElementById("summary-rental-subtotal");
    const summaryTotalAll = document.getElementById("summary-total-all");
    const payFullVal = document.getElementById("pay-full-val");
    const payDpVal = document.getElementById("pay-dp-val");
    const btnSubmit = document.getElementById("btn-submit");

    // Format Rupiah
    function formatRp(val) {
      return "Rp " + val.toLocaleString("id-ID");
    }

    // Date formatting helper
    function formatDateIndo(dateStr) {
      if (!dateStr) return "-";
      const parts = dateStr.split("-");
      const d = new Date(parts[0], parts[1] - 1, parts[2]);
      const months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
      const shortMonths = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"];
      return {
        full: `${d.getDate()} ${months[d.getMonth()]} ${d.getFullYear()}`,
        short: `${d.getDate()} ${shortMonths[d.getMonth()]}`
      };
    }

    function addDays(dateStr, days) {
      const parts = dateStr.split("-");
      const d = new Date(parts[0], parts[1] - 1, parts[2]);
      d.setDate(d.getDate() + days);
      const y = d.getFullYear();
      const m = String(d.getMonth() + 1).padStart(2, "0");
      const day = String(d.getDate()).padStart(2, "0");
      return `${y}-${m}-${day}`;
    }

    // Refresh Dates & Buffers
    function updateDateTimeline() {
      const val = weddingDateInput.value;
      if (!val) return;
      state.weddingDate = val;

      const pickupStr = addDays(val, -2);
      const returnStr = addDays(val, 2);

      const pickupFmt = formatDateIndo(pickupStr);
      const returnFmt = formatDateIndo(returnStr);

      calcPickupDate.textContent = pickupFmt.full;
      calcReturnDate.textContent = returnFmt.full;

      dispBufferRange.textContent = `${pickupFmt.short} - ${returnFmt.short} ${val.split("-")[0]}`;
    }

    // Calculate Availability & Price
    function recalculate() {
      const availableUnits = state.totalStock - state.bookedStock;
      const isAvailable = state.qty <= availableUnits;

      // Update Engine Visuals
      dispSeriesName.textContent = state.seriesName;
      dispMasterStock.textContent = state.totalStock + " Unit";
      dispBookedInfo.textContent = "Terbooking: " + state.bookedStock + " Unit";
      dispAvailInfo.textContent = "Sisa Slot Tersedia: " + availableUnits + " Unit";

      const bookedPct = Math.round((state.bookedStock / state.totalStock) * 100);
      const availPct = 100 - bookedPct;
      bookedBar.style.width = bookedPct + "%";
      availBar.style.width = availPct + "%";

      if (isAvailable) {
        availBox.className = "p-4 rounded-xl transition-all duration-200 bg-[#EFF3EE] text-[#344837]";
        statusIcon.textContent = "check_circle";
        statusTitle.textContent = `Tersedia (Sisa ${availableUnits} Unit)`;
        statusDesc.textContent = `Slot tanggal aman terkunci untuk Anda. Seri ${state.seriesName} (${state.qty} kotak) siap dirangkai oleh tim atelier Cattaleya.`;
        conflictAlert.classList.add("hidden");
        btnSubmit.disabled = false;
        btnSubmit.classList.remove("opacity-50", "cursor-not-allowed");
      } else {
        availBox.className = "p-4 rounded-xl transition-all duration-200 bg-[#FDF2F1] text-[#8E3B37]";
        statusIcon.textContent = "error";
        statusTitle.textContent = `Slot Tidak Mencukupi (Sisa ${availableUnits} Unit)`;
        statusDesc.textContent = `Anda memilih ${state.qty} kotak, namun hanya tersisa ${availableUnits} unit untuk seri ini pada periode tanggal tersebut.`;
        
        alertQty.textContent = state.qty + " unit";
        alertAvail.textContent = availableUnits + " unit";
        conflictAlert.classList.remove("hidden");
        btnSubmit.disabled = true;
        btnSubmit.classList.add("opacity-50", "cursor-not-allowed");
      }

      // Financial Calculation
      const rentalCost = state.qty * state.ratePerBox;
      const totalCost = rentalCost + state.deposit;
      const dpCost = (rentalCost * 0.5);

      summaryPackageTitle.textContent = `Paket ${state.qty} Kotak ${state.seriesName}`;
      summaryUnitCalc.textContent = `${state.qty} Kotak × ${formatRp(state.ratePerBox)}`;
      summaryRentalSubtotal.textContent = formatRp(rentalCost);
      summaryTotalAll.textContent = formatRp(totalCost);

      payFullVal.textContent = formatRp(totalCost);
      payDpVal.textContent = formatRp(dpCost);
    }

    function selectSeries(btn) {
      seriesButtons.forEach(b => {
        b.classList.remove("ring-2", "ring-primary", "active-series");
        const check = b.querySelector(".absolute");
        if (check) check.remove();
      });

      btn.classList.add("ring-2", "ring-primary", "active-series");
      
      // Add check icon
      const imgWrap = btn.querySelector(".relative");
      if (imgWrap && !imgWrap.querySelector(".material-symbols-outlined")) {
        const badge = document.createElement("span");
        badge.className = "absolute top-1.5 right-1.5 w-5 h-5 rounded-full bg-primary text-on-primary flex items-center justify-center";
        badge.innerHTML = '<span class="material-symbols-outlined text-xs">check</span>';
        imgWrap.appendChild(badge);
      }

      state.seriesName = btn.dataset.series;
      state.ratePerBox = parseInt(btn.dataset.rate, 10);
      state.totalStock = parseInt(btn.dataset.stock, 10);
      state.bookedStock = parseInt(btn.dataset.booked, 10);

      recalculate();
    }

    // Series Card Click
    seriesButtons.forEach(btn => {
      btn.addEventListener("click", () => selectSeries(btn));
    });

    // Qty Selector
    qtyButtons.forEach(btn => {
      btn.addEventListener("click", () => {
        qtyButtons.forEach(b => {
          b.className = "qty-btn py-3 px-2 rounded-xl text-center font-title-md text-title-md transition-all bg-surface-container-low text-on-surface hover:bg-surface-container";
        });
        btn.className = "qty-btn py-3 px-2 rounded-xl text-center font-title-md text-title-md transition-all bg-primary text-on-primary shadow-sm ring-2 ring-primary";

        state.qty = parseInt(btn.dataset.qty, 10);
        recalculate();
      });
    });

    // Payment Mode Selector
    payButtons.forEach(btn => {
      btn.addEventListener("click", () => {
        payButtons.forEach(b => {
          b.className = "pay-btn p-3.5 rounded-xl text-left transition-all bg-surface-container-low hover:bg-surface-container";
          const iconSpan = b.querySelector(".w-4.h-4");
          if (iconSpan) {
            iconSpan.className = "w-4 h-4 rounded-full border border-outline-variant hidden check-indicator";
            iconSpan.innerHTML = "";
          }
        });

        btn.className = "pay-btn p-3.5 rounded-xl text-left transition-all bg-surface-container ring-2 ring-primary";
        const targetIcon = btn.querySelector(".w-4.h-4");
        if (targetIcon) {
          targetIcon.className = "w-4 h-4 rounded-full bg-primary flex items-center justify-center text-on-primary";
          targetIcon.innerHTML = '<span class="material-symbols-outlined text-[10px]">check</span>';
        }

        state.paymentMode = btn.dataset.pay;
      });
    });

    // Date Change
    weddingDateInput.addEventListener("change", () => {
      updateDateTimeline();
      recalculate();
    });

    // Submit Simulation
    btnSubmit.addEventListener("click", () => {
      const custName = document.getElementById("cust-name").value;
      const custWa = document.getElementById("cust-wa").value;

      if (!custName || !custWa) {
        alert("Mohon lengkapi Nama Lengkap Pemesan dan Nomor WhatsApp terlebih dahulu.");
        return;
      }

      const amountToPay = state.paymentMode === "full" 
        ? (state.qty * state.ratePerBox) + state.deposit 
        : (state.qty * state.ratePerBox * 0.5);

      btnSubmit.innerHTML = '<span class="material-symbols-outlined animate-spin text-xl">progress_activity</span> Menghubungkan Midtrans...';
      btnSubmit.disabled = true;

      setTimeout(() => {
        window.location.href = "{{ route('pembayaran') }}";
      }, 600);
    });

    // Pre-selection based on query string: ?series=...
    const urlParams = new URLSearchParams(window.location.search);
    const seriesParam = urlParams.get('series');
    if (seriesParam) {
      seriesButtons.forEach(btn => {
        if (btn.dataset.series.toLowerCase().includes(seriesParam.toLowerCase())) {
          selectSeries(btn);
        }
      });
    }

    // Initial setup
    updateDateTimeline();
    recalculate();
  })();
</script>
@endpush

