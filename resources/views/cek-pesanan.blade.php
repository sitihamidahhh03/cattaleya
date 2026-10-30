@extends('layouts.main')

@section('title', 'Lacak Status Pesanan - Cattaleya')

@section('content')
<div class="flex flex-col w-full pb-20">
    <!-- Subtle Ambient Glow & Header Clearance -->
    <div class="relative w-full overflow-hidden bg-surface py-10 sm:py-14 md:py-16">
        <div class="absolute -top-32 -right-32 w-96 h-96 rounded-full bg-secondary-container/40 blur-3xl pointer-events-none"></div>
        <div class="absolute top-1/2 -left-32 w-96 h-96 rounded-full bg-surface-container-high/60 blur-3xl pointer-events-none"></div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-12 relative z-10">
            <!-- Search Banner Section -->
            <div class="text-center max-w-3xl mx-auto space-y-3 sm:space-y-4">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-surface-container text-primary font-label-sm text-label-sm uppercase tracking-widest shadow-xs">
                    <span class="material-symbols-outlined text-sm">verified</span>
                    <span>Layanan Pelacakan Mandiri</span>
                </div>
                <h1 class="font-headline-lg text-2xl sm:text-3xl md:text-4xl text-on-surface font-medium tracking-tight">
                    Lacak Status Pesanan Anda
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto leading-relaxed">
                    Pantau proses pengerjaan mahar dan kesiapan kotak seserahan Anda secara real-time tanpa perlu mendaftar akun.
                </p>
            </div>

            <!-- Search Input Container -->
            <div class="mt-8 sm:mt-10 max-w-2xl mx-auto bg-surface-container-lowest p-6 sm:p-8 rounded-2xl shadow-md border border-outline-variant/30">
                <form class="space-y-4" id="trackingForm" onsubmit="event.preventDefault(); simulateSearch();">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-1.5">
                            <label class="font-label-sm text-label-sm uppercase tracking-wider text-secondary flex items-center gap-1.5 font-medium" for="orderCodeInput">
                                <span class="material-symbols-outlined text-base">receipt_long</span>
                                <span>Kode Pesanan</span>
                            </label>
                            <input class="w-full px-4 py-3 rounded-xl bg-surface-container-low font-title-md text-title-md text-on-surface placeholder:text-outline-variant focus:outline-none focus:ring-2 focus:ring-primary/40 focus:bg-surface-container-lowest transition-all" id="orderCodeInput" placeholder="Contoh: CTL-2025-090" required="" type="text" value="ORD-2025-090">
                        </div>
                        <div class="space-y-1.5">
                            <label class="font-label-sm text-label-sm uppercase tracking-wider text-secondary flex items-center gap-1.5 font-medium" for="whatsappInput">
                                <span class="material-symbols-outlined text-base">phone_android</span>
                                <span>Nomor WhatsApp</span>
                            </label>
                            <input class="w-full px-4 py-3 rounded-xl bg-surface-container-low font-title-md text-title-md text-on-surface placeholder:text-outline-variant focus:outline-none focus:ring-2 focus:ring-primary/40 focus:bg-surface-container-lowest transition-all" id="whatsappInput" placeholder="0812-xxxx-xxxx" required="" type="tel" value="081298421102">
                        </div>
                    </div>
                    <button class="w-full mt-2 py-3.5 px-6 rounded-xl bg-primary text-on-primary font-label-md text-label-md tracking-wider uppercase flex items-center justify-center gap-2 hover:bg-primary-container shadow-md transition-all cursor-pointer group" type="submit">
                        <span class="material-symbols-outlined text-lg group-hover:scale-110 transition-transform">search</span>
                        <span>Cek Status Pesanan</span>
                    </button>
                </form>
                <p class="mt-3 text-center font-label-sm text-label-sm text-on-surface-variant flex items-center justify-center gap-1.5">
                    <span class="material-symbols-outlined text-sm text-primary">lock</span>
                    <span>Data terenkripsi dan hanya dapat diakses dengan kombinasi Kode &amp; WA terdaftar.</span>
                </p>
            </div>

            <!-- Dossier / Tracking Results View -->
            <div class="mt-12 space-y-8 transition-all duration-300" id="resultDossier">
                <!-- Result Header Card -->
                <div class="bg-surface-container-lowest p-6 lg:p-8 rounded-2xl shadow-md border border-outline-variant/30">
                    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6 pb-6 bg-surface-container-low/40 -mx-6 -mt-6 p-6 rounded-t-2xl border-b border-outline-variant/30">
                        <div class="space-y-1">
                            <div class="flex items-center gap-3">
                                <span class="font-headline-md text-2xl text-primary font-bold tracking-tight" id="dispOrderCode">#ORD-2025-090</span>
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">
                                    <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                                    <span>Pengerjaan Florist</span>
                                </span>
                            </div>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                Tanggal Pemesanan: <span class="font-title-md text-on-surface font-semibold">10 Mei 2025, 14:22 WIB</span>
                            </p>
                        </div>
                        <div class="flex flex-wrap items-center gap-4">
                            <div class="text-left lg:text-right">
                                <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary block font-medium">Tanggal Acara Pernikahan</span>
                                <span class="font-title-lg text-title-lg text-primary font-bold flex items-center gap-1.5 lg:justify-end">
                                    <span class="material-symbols-outlined text-lg">event</span>
                                    <span>22 Oktober 2025</span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Client & Order Summary Strip -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-6">
                        <div class="space-y-1">
                            <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Nama Pemesan</span>
                            <p class="font-title-md text-title-md text-on-surface font-bold">Anindya Larasati</p>
                            <p class="font-body-md text-body-md text-on-surface-variant" id="dispWaNumber">WA: +62 812-9842-1102</p>
                        </div>
                        <div class="space-y-1">
                            <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Paket Pemesanan</span>
                            <p class="font-title-md text-title-md text-on-surface font-bold">Bespoke Bundling</p>
                            <p class="font-body-md text-body-md text-on-surface-variant">Mahar Vitrine &amp; Sewa 8 Baki Crystal</p>
                        </div>
                        <div class="space-y-1">
                            <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Atelier Studio</span>
                            <p class="font-title-md text-title-md text-on-surface font-bold">Studio Menteng, Jakarta Pusat</p>
                            <p class="font-body-md text-body-md text-on-surface-variant">Artisan In-Charge: Siti Aminah</p>
                        </div>
                    </div>
                </div>

                <!-- PROGRESS STEPPER SECTION (Horizontal Visual) -->
                <div class="bg-surface-container-lowest p-6 lg:p-8 rounded-2xl shadow-md border border-outline-variant/30">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-8">
                        <div>
                            <span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary block font-semibold">Milestone Tracking</span>
                            <h2 class="font-headline-md text-headline-md text-on-surface font-semibold mt-0.5">Progres Pengerjaan Atelier</h2>
                        </div>
                        <span class="font-label-md text-label-md px-3 py-1 bg-surface-container rounded-full text-secondary font-semibold self-start sm:self-auto">
                            Tahap 3 dari 4
                        </span>
                    </div>

                    <!-- Stepper Grid -->
                    <div class="relative">
                        <!-- Continuous track bar for desktop -->
                        <div class="hidden lg:block absolute top-7 left-12 right-12 h-1 bg-surface-container-high z-0">
                            <div class="h-full bg-primary transition-all duration-700" style="width: 66.6%;"></div>
                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 lg:gap-4 relative z-10">
                            <!-- Step 1: Complete -->
                            <div class="flex flex-row lg:flex-col items-start lg:items-center text-left lg:text-center gap-4 group">
                                <div class="w-14 h-14 rounded-full bg-primary text-on-primary flex items-center justify-center shadow-sm shrink-0">
                                    <span class="material-symbols-outlined text-2xl font-bold">check</span>
                                </div>
                                <div class="space-y-1">
                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-primary font-bold block">Selesai</span>
                                    <h3 class="font-title-md text-title-md text-on-surface font-semibold">Pesanan Diterima</h3>
                                    <p class="font-body-md text-xs sm:text-body-md text-on-surface-variant">10 Mei 2025 • Form &amp; konsep terkonfirmasi</p>
                                </div>
                            </div>

                            <!-- Step 2: Complete -->
                            <div class="flex flex-row lg:flex-col items-start lg:items-center text-left lg:text-center gap-4 group">
                                <div class="w-14 h-14 rounded-full bg-primary text-on-primary flex items-center justify-center shadow-sm shrink-0">
                                    <span class="material-symbols-outlined text-2xl font-bold">check</span>
                                </div>
                                <div class="space-y-1">
                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-primary font-bold block">Selesai</span>
                                    <h3 class="font-title-md text-title-md text-on-surface font-semibold">DP Terverifikasi</h3>
                                    <p class="font-body-md text-xs sm:text-body-md text-on-surface-variant">Midtrans Snap (BCA VA) terkonfirmasi lunas 50%</p>
                                </div>
                            </div>

                            <!-- Step 3: Active State -->
                            <div class="flex flex-row lg:flex-col items-start lg:items-center text-left lg:text-center gap-4">
                                <div class="relative w-14 h-14 rounded-full bg-primary-container text-on-primary flex items-center justify-center shadow-md shrink-0">
                                    <span class="material-symbols-outlined text-2xl">palette</span>
                                    <span class="absolute -top-1 -right-1 w-4 h-4 bg-primary rounded-full animate-ping"></span>
                                    <span class="absolute -top-1 -right-1 w-4 h-4 bg-primary rounded-full"></span>
                                </div>
                                <div class="space-y-1">
                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-primary-container font-bold block">Status Aktif</span>
                                    <h3 class="font-title-md text-title-md text-on-surface font-semibold">Proses Florist &amp; Baki</h3>
                                    <p class="font-body-md text-xs sm:text-body-md text-on-surface-variant font-medium">Merangkai preserved orchid &amp; sterilisasi akrilik UV-C</p>
                                </div>
                            </div>

                            <!-- Step 4: Upcoming -->
                            <div class="flex flex-row lg:flex-col items-start lg:items-center text-left lg:text-center gap-4 opacity-60">
                                <div class="w-14 h-14 rounded-full bg-surface-container-high text-outline flex items-center justify-center shrink-0">
                                    <span class="material-symbols-outlined text-2xl">storefront</span>
                                </div>
                                <div class="space-y-1">
                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline block font-medium">Estimasi Jadwal</span>
                                    <h3 class="font-title-md text-title-md text-on-surface font-semibold">Siap Diambil di Studio</h3>
                                    <p class="font-body-md text-xs sm:text-body-md text-on-surface-variant">20 Oktober 2025 (Pukul 10:00 - 15:00 WIB)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Highlight Live Status Callout -->
                    <div class="mt-8 p-4 rounded-xl bg-secondary-container/40 flex items-start gap-3 border border-outline-variant/20">
                        <span class="material-symbols-outlined text-primary text-xl mt-0.5 shrink-0">info</span>
                        <div>
                            <p class="font-title-md text-title-md text-on-surface font-semibold">Keterangan Pengerjaan Hari Ini:</p>
                            <p class="font-body-md text-body-md text-on-surface-variant mt-0.5 leading-relaxed">
                                Tim florist studio sedang menyelesaikan penataan bunga <em>Preserved Orchid &amp; Hydrangea</em> pada frame mahar akrilik 3D hexagon. 8 baki luxury crystal telah selesai diinspeksi kebersihan kaca serta sterilisasi UV-C sebelum dihias alas satin.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Order Breakdown & Financial Ledger -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                    <!-- Item Details (7 Cols) -->
                    <div class="lg:col-span-7 bg-surface-container-lowest p-6 lg:p-8 rounded-2xl shadow-md border border-outline-variant/30 space-y-6">
                        <div class="flex items-center justify-between pb-4 bg-surface-container-low/40 -mx-6 -mt-6 p-6 rounded-t-2xl border-b border-outline-variant/30">
                            <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Rincian Komposisi Pesanan</h3>
                            <span class="material-symbols-outlined text-secondary">inventory_2</span>
                        </div>

                        <!-- Item 1: Mahar -->
                        <div class="flex items-start gap-4 p-4 rounded-xl bg-surface-container-low/60 border border-outline-variant/20">
                            <div class="w-12 h-12 rounded-lg bg-surface-container-high flex items-center justify-center text-primary shrink-0">
                                <span class="material-symbols-outlined text-2xl">crop_original</span>
                            </div>
                            <div class="space-y-1 flex-1">
                                <div class="flex items-center justify-between">
                                    <h4 class="font-title-md text-title-md text-on-surface font-semibold">Mahar Vitrine Akrilik 3D Hexagon</h4>
                                    <span class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-wider">Karya Utama</span>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">Dimensi 40x50 cm, Logam Mulia Antam Certicard 10 Gram terpasang rapi, Preserved Floral Styling nuansa Champagne Gold &amp; Alabaster Silk.</p>
                                <div class="flex items-center gap-2 pt-1 font-label-sm text-label-sm text-secondary font-medium">
                                    <span class="material-symbols-outlined text-sm text-primary">done</span>
                                    <span>Ukiran Kaligrafi Nama: Anindya &amp; Dimas</span>
                                </div>
                            </div>
                        </div>

                        <!-- Item 2: Rental Trays -->
                        <div class="flex items-start gap-4 p-4 rounded-xl bg-surface-container-low/60 border border-outline-variant/20">
                            <div class="w-12 h-12 rounded-lg bg-surface-container-high flex items-center justify-center text-primary shrink-0">
                                <span class="material-symbols-outlined text-2xl">all_inbox</span>
                            </div>
                            <div class="space-y-1 flex-1">
                                <div class="flex items-center justify-between">
                                    <h4 class="font-title-md text-title-md text-on-surface font-semibold">8 Kotak Sewa Luxury Crystal Bevel</h4>
                                    <span class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-wider">Sewa Tray</span>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">Tray kaca beveled premium lis kuningan brass gold, alas velvet champagne, aksen pita organza, dan dekorasi bunga senada.</p>
                                <div class="flex items-center gap-2 pt-1 font-label-sm text-label-sm text-secondary font-medium">
                                    <span class="material-symbols-outlined text-sm text-primary">done</span>
                                    <span>Kelengkapan: 8 Tutup Akrilik Bening Tebal 3mm (Steril)</span>
                                </div>
                            </div>
                        </div>

                        <!-- Schedule Dates -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                            <div class="p-4 rounded-xl bg-surface-container border border-outline-variant/20">
                                <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary block font-semibold">Jadwal Pengambilan</span>
                                <p class="font-title-md text-title-md text-primary font-bold mt-1 flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-base">schedule</span>
                                    <span>20 Okt 2025, 10:00 - 15:00</span>
                                </p>
                                <p class="font-body-md text-body-md text-on-surface-variant mt-1 text-xs">Studio Cattaleya Menteng (H-2 Acara)</p>
                            </div>
                            <div class="p-4 rounded-xl bg-surface-container border border-outline-variant/20">
                                <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary block font-semibold">Batas Pengembalian Baki</span>
                                <p class="font-title-md text-title-md text-on-surface font-bold mt-1 flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-base">event_repeat</span>
                                    <span>24 Okt 2025 (Maks. 17:00)</span>
                                </p>
                                <p class="font-body-md text-body-md text-on-surface-variant mt-1 text-xs">Bebas denda keterlambatan s/d H+2</p>
                            </div>
                        </div>
                    </div>

                    <!-- Financial Ledger & Payment Card (5 Cols) -->
                    <div class="lg:col-span-5 bg-surface-container-lowest p-6 lg:p-8 rounded-2xl shadow-md border border-outline-variant/30 flex flex-col justify-between space-y-6">
                        <div>
                            <div class="flex items-center justify-between pb-4 bg-surface-container-low/40 -mx-6 -mt-6 p-6 rounded-t-2xl border-b border-outline-variant/30">
                                <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Rincian Pembayaran</h3>
                                <span class="material-symbols-outlined text-secondary">account_balance_wallet</span>
                            </div>

                            <!-- Midtrans Payment Badging -->
                            <div class="mt-6 p-4 rounded-xl bg-surface-container-low space-y-3 border border-outline-variant/20">
                                <div class="flex items-center justify-between">
                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Metode Transaksi</span>
                                    <span class="font-label-sm text-label-sm px-2.5 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-bold">Midtrans Snap BCA VA</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">ID Transaksi Gate</span>
                                    <span class="font-body-md text-body-md font-mono text-on-surface font-bold">MID-CTL-88492019</span>
                                </div>
                            </div>

                            <!-- Ledger Rows -->
                            <div class="mt-6 space-y-3 font-body-md text-body-md">
                                <div class="flex justify-between items-center text-on-surface-variant">
                                    <span>Total Nilai Pesanan</span>
                                    <span class="font-title-md text-title-md text-on-surface font-semibold">Rp 2.450.000</span>
                                </div>
                                <div class="flex justify-between items-center text-on-surface-variant">
                                    <div class="flex items-center gap-1.5">
                                        <span>DP 50% (Sudah Dibayar)</span>
                                        <span class="material-symbols-outlined text-base text-primary">check_circle</span>
                                    </div>
                                    <span class="font-title-md text-title-md text-primary font-semibold">- Rp 1.225.000</span>
                                </div>
                                <div class="pt-3 pb-1">
                                    <div class="w-full h-px bg-outline-variant/30"></div>
                                </div>
                                <div class="flex justify-between items-baseline pt-1">
                                    <div>
                                        <span class="font-title-lg text-title-lg text-on-surface font-bold block">Sisa Pelunasan</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Jatuh tempo saat serah terima H-2</span>
                                    </div>
                                    <span class="font-metric-display text-metric-display text-primary font-bold">Rp 1.225.000</span>
                                </div>
                            </div>
                        </div>

                        <!-- Payment Status Ribbon -->
                        <div class="pt-4 space-y-3">
                            <div class="p-3.5 rounded-xl bg-surface-container flex items-center gap-3 border border-outline-variant/20">
                                <span class="material-symbols-outlined text-primary text-xl shrink-0">payments</span>
                                <p class="font-label-md text-label-md text-on-surface leading-relaxed">
                                    Pelunasan sisa dan deposit sewa dilakukan saat serah terima fisik di studio atau transfer sebelum kurir berangkat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Documentation Showcase & Craft Photos -->
                <div class="bg-surface-container-lowest p-6 lg:p-8 rounded-2xl shadow-md border border-outline-variant/30 space-y-6">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                        <div>
                            <span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary block font-semibold">Atelier Live Update</span>
                            <h3 class="font-headline-md text-headline-md text-on-surface font-semibold mt-0.5">Dokumentasi Pengerjaan Studio</h3>
                        </div>
                        <div class="flex items-center gap-2 text-secondary font-label-sm text-label-sm">
                            <span class="material-symbols-outlined text-sm">photo_camera</span>
                            <span>Terakhir diperbarui: Hari ini, 11:30 WIB</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Documentation Photo 1 -->
                        <div class="space-y-2 group">
                            <div class="relative overflow-hidden rounded-xl h-56 bg-surface-container border border-outline-variant/20">
                                <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBdqCNuj-_bPmmO_7AFEt1lt1YjghQXDLUL7TJFptFYKgDH46FNBgj-A4CaWTWtR9qilKufCDROYQi9IqjURir0vgUgWt50yj_8yMfbHP6uUlnEi3N5yDp5AhlVAfuYSFx_oxZrqmWEkZv2aJlw0XZHSAVAU7YdR0amHPmHtDRl7hpqWhfTCozpQSKHsi4TlWSVeZV0DvL8G_5JsbLj2fcQ7yrICXmQvvrvRmWMnWr4kAztWmQo3qrM"
                                    alt="Rangkaian Mahar Akrilik">
                                <div class="absolute bottom-2 left-2 px-2.5 py-1 rounded bg-inverse-surface/80 backdrop-blur-sm text-inverse-on-surface font-label-sm text-label-sm">
                                    Rangkaian Mahar Akrilik
                                </div>
                            </div>
                            <p class="font-body-md text-body-md text-on-surface-variant">Penataan preserved floral dan dudukan logam mulia 10g.</p>
                        </div>

                        <!-- Documentation Photo 2 -->
                        <div class="space-y-2 group">
                            <div class="relative overflow-hidden rounded-xl h-56 bg-surface-container border border-outline-variant/20">
                                <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCD0ZqnrQMFh4Lp9oRRbKLN8VCcSDw7FptW8t45pUEgZJ6L3Ew4WoUIj7aNKKS97ejmdpB4chnAC1L6veHtt2On_ZwaNuemDz3S6BIqZ9AZLsYfxXR7rgGonKeFmj40QuE5hxmywUHlmg_Ef5mexL-55cJRV_qDYc7yCBG-tZqs1SJn3LiKU7Mw_7vafIYyaXR9gV0KBv6tmUJVkj3cxml-3pGF7UY6ODHguzAO4A2tOnUecEjUQC45"
                                    alt="8 Baki Beveled Crystal">
                                <div class="absolute bottom-2 left-2 px-2.5 py-1 rounded bg-inverse-surface/80 backdrop-blur-sm text-inverse-on-surface font-label-sm text-label-sm">
                                    8 Baki Beveled Crystal
                                </div>
                            </div>
                            <p class="font-body-md text-body-md text-on-surface-variant">Pembersihan mendalam dan sterilisasi UV-C baki kaca.</p>
                        </div>

                        <!-- Documentation Photo 3 -->
                        <div class="space-y-2 group">
                            <div class="relative overflow-hidden rounded-xl h-56 bg-surface-container border border-outline-variant/20">
                                <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDMIUIUP1L02KN1VgmZor3yJzdPWSRYoReAFLmPwyQeNQXwjwE8_ZCIVGn0GcDIEBnkTsAF06pku2Z6A0X7ZK9yCibbmjzG-vlV-to8zSLDBaSc8BM08ylx78GCzeQ-3xTBh0sMllg1XzQ90603_XAskmtA037-OdooxBXKP8d0XjMrQ2SaI6H8jAIqi2ylSTGK87fFoCKfQAVizELXQy2KjdI6-FBTK_yQtBX1ae5ZZ4O2NJRvKuLH"
                                    alt="Finishing Rangkaian">
                                <div class="absolute bottom-2 left-2 px-2.5 py-1 rounded bg-inverse-surface/80 backdrop-blur-sm text-inverse-on-surface font-label-sm text-label-sm">
                                    Finishing Rangkaian
                                </div>
                            </div>
                            <p class="font-body-md text-body-md text-on-surface-variant">Pemasangan ribbon tie dan tag kaligrafi nama pengantin.</p>
                        </div>
                    </div>
                </div>

                <!-- WhatsApp Concierge Support Banner -->
                <div class="p-8 rounded-2xl bg-gradient-to-r from-surface-container-high via-surface-container to-secondary-container/50 shadow-md border border-outline-variant/30 flex flex-col md:flex-row items-center justify-between gap-6">
                    <div class="space-y-2 text-center md:text-left">
                        <div class="flex items-center justify-center md:justify-start gap-2 text-primary font-label-sm text-label-sm uppercase tracking-wider font-semibold">
                            <span class="material-symbols-outlined text-base">support_agent</span>
                            <span>Butuh Penyesuaian atau Perubahan Jadwal?</span>
                        </div>
                        <h3 class="font-headline-md text-xl sm:text-2xl text-on-surface font-semibold" id="dispConciergeTitle">
                            Punya Pertanyaan Mengenai Pesanan #ORD-2025-090?
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant max-w-xl leading-relaxed">
                            Hubungi Client Concierge Cattaleya langsung melalui WhatsApp. Harap sebutkan kode pesanan Anda saat memulai percakapan.
                        </p>
                    </div>
                    <a id="conciergeWaBtn" class="px-6 py-3.5 rounded-xl bg-primary text-on-primary font-label-md text-label-md tracking-wider uppercase flex items-center gap-2 hover:bg-primary-container shadow-md transition-all shrink-0 cursor-pointer" href="https://wa.me/6282210008899?text=Halo%20Studio%20Cattaleya,%20saya%20ingin%20bertanya%20mengenai%20progres%20pesanan%20ORD-2025-090%20atas%20nama%20Anindya%20Larasati" rel="noopener noreferrer" target="_blank">
                        <span class="material-symbols-outlined text-xl">chat</span>
                        <span>Hubungi Concierge WA</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function simulateSearch() {
        const code = document.getElementById('orderCodeInput').value.trim();
        const wa = document.getElementById('whatsappInput').value.trim();
        const resultDiv = document.getElementById('resultDossier');
        const dispCode = document.getElementById('dispOrderCode');
        const dispWa = document.getElementById('dispWaNumber');
        const dispConciergeTitle = document.getElementById('dispConciergeTitle');
        const conciergeWaBtn = document.getElementById('conciergeWaBtn');

        if (code) {
            dispCode.textContent = '#' + code.replace('#', '');
            dispConciergeTitle.textContent = `Punya Pertanyaan Mengenai Pesanan #${code.replace('#', '')}?`;
            conciergeWaBtn.href = `https://wa.me/6282210008899?text=Halo%20Studio%20Cattaleya,%20saya%20ingin%20bertanya%20mengenai%20progres%20pesanan%20${encodeURIComponent(code)}%20atas%20nama%20Anindya%20Larasati`;
        }
        if (wa) {
            dispWa.textContent = 'WA: ' + wa;
        }

        // Quick micro-interaction animation
        resultDiv.style.opacity = '0.3';
        setTimeout(() => {
            resultDiv.style.opacity = '1';
            resultDiv.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }, 250);
    }
</script>
@endpush

