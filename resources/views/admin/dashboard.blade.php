@extends('layouts.admin')

@section('title', 'Dashboard Operasional Admin')

@section('content')
<div class="flex flex-col w-full">
    <div class="flex flex-col gap-space-lg w-full max-w-[1536px] mx-auto py-space-md">

        <!-- SECTION 1: HEADER & OPERATIONAL STATUS -->
        <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-xs flex flex-col xl:flex-row xl:items-center justify-between gap-space-md border border-outline-variant/30">
            <div class="flex flex-col gap-1 min-w-0">
                <div class="flex flex-wrap items-center gap-space-xs">
                    <span class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-wider">Pusat Kendali Sistem</span>
                    <span class="text-outline-variant">•</span>
                    <span class="font-label-sm text-label-sm text-on-surface-variant font-medium">Atelier Operasional Cattaleya</span>
                </div>
                <h1 class="font-headline-lg text-headline-lg text-on-surface font-semibold tracking-tight">Dashboard Operasional Admin</h1>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-3xl">
                    Ringkasan aktivitas harian, pemrosesan pesanan mahar &amp; penjadwalan sewa kotak seserahan untuk tim operasional studio.
                </p>
                <div class="flex flex-wrap items-center gap-2 mt-2">
                    <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface">
                        <span class="w-2 h-2 rounded-full bg-[#2d7a4d]"></span>
                        <span class="font-semibold text-secondary">Midtrans Webhook:</span>
                        <span class="text-on-surface font-medium">Sinkron (Aktif)</span>
                    </div>
                    <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                        </span>
                        <span class="font-semibold text-secondary">WA Gateway:</span>
                        <span class="text-on-surface font-medium">Terhubung (Otomatis Aktif)</span>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-wrap items-center gap-2.5 flex-shrink-0">
                <button class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-primary text-on-primary font-title-md text-title-md hover:bg-primary-container shadow-xs transition-colors cursor-pointer" onclick="document.getElementById('modalTambahPesanan').classList.remove('hidden')" type="button">
                    <span class="material-symbols-outlined text-[20px]">add_circle</span>
                    <span>+ Tambah Pesanan Baru</span>
                </button>
                <button class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-surface-container-high text-on-surface font-title-md text-title-md hover:bg-surface-variant transition-colors cursor-pointer" onclick="document.getElementById('modalJadwalKembali').classList.remove('hidden')" type="button">
                    <span class="material-symbols-outlined text-[20px] text-primary">event_available</span>
                    <span>Cek Jadwal Pengembalian Hari Ini</span>
                </button>
            </div>
        </div>

        <!-- SECTION 2: 6 KARTU STATISTIK RINGKASAN OPERASIONAL -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-space-md">
            <!-- Card 1 -->
            <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-xs flex flex-col justify-between hover:shadow-md transition-shadow border border-outline-variant/30">
                <div class="flex items-center justify-between gap-1 mb-2">
                    <span class="font-label-sm text-label-sm text-secondary uppercase font-semibold">Total Pesanan</span>
                    <span class="p-1.5 rounded-lg bg-surface-container text-primary material-symbols-outlined text-[18px]">receipt_long</span>
                </div>
                <div>
                    <span class="font-metric-display text-metric-display text-on-surface font-semibold tracking-tight">184</span>
                    <span class="font-label-md text-label-md text-secondary ml-1">Pesanan</span>
                </div>
                <div class="mt-2 pt-2 bg-surface-container-low rounded p-1.5 flex items-center gap-1 font-label-sm text-label-sm text-[#2d7a4d] font-semibold">
                    <span class="material-symbols-outlined text-[16px]">trending_up</span>
                    <span>+12 pesanan bulan ini</span>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-xs flex flex-col justify-between hover:shadow-md transition-shadow border border-outline-variant/30">
                <div class="flex items-center justify-between gap-1 mb-2">
                    <span class="font-label-sm text-label-sm text-secondary uppercase font-semibold">Pesanan Mahar</span>
                    <span class="p-1.5 rounded-lg bg-surface-container text-primary material-symbols-outlined text-[18px]">workspace_premium</span>
                </div>
                <div>
                    <span class="font-metric-display text-metric-display text-on-surface font-semibold tracking-tight">112</span>
                    <span class="font-label-md text-label-md text-secondary ml-1">Paket</span>
                </div>
                <p class="mt-2 font-label-sm text-label-sm text-on-surface-variant">Mahar frame, akrilik &amp; koin</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-xs flex flex-col justify-between hover:shadow-md transition-shadow border border-outline-variant/30">
                <div class="flex items-center justify-between gap-1 mb-2">
                    <span class="font-label-sm text-label-sm text-secondary uppercase font-semibold">Penyewaan Kotak</span>
                    <span class="p-1.5 rounded-lg bg-surface-container text-primary material-symbols-outlined text-[18px]">inventory_2</span>
                </div>
                <div>
                    <span class="font-metric-display text-metric-display text-on-surface font-semibold tracking-tight">72</span>
                    <span class="font-label-md text-label-md text-secondary ml-1">Reservasi</span>
                </div>
                <p class="mt-2 font-label-sm text-label-sm text-on-surface-variant font-medium text-primary">102 baki/kotak aktif</p>
            </div>

            <!-- Card 4 -->
            <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-xs flex flex-col justify-between hover:shadow-md transition-shadow border border-outline-variant/30">
                <div class="flex items-center justify-between gap-1 mb-2">
                    <span class="font-label-sm text-label-sm text-secondary uppercase font-semibold">Menunggu Bayar</span>
                    <span class="p-1.5 rounded-lg bg-error-container text-error material-symbols-outlined text-[18px]">pending_actions</span>
                </div>
                <div>
                    <span class="font-metric-display text-metric-display text-error font-semibold tracking-tight">14</span>
                    <span class="font-label-md text-label-md text-secondary ml-1">Pesanan</span>
                </div>
                <p class="mt-2 font-label-sm text-label-sm text-on-surface-variant">Verifikasi Midtrans / DP</p>
            </div>

            <!-- Card 5 -->
            <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-xs flex flex-col justify-between hover:shadow-md transition-shadow border border-outline-variant/30">
                <div class="flex items-center justify-between gap-1 mb-2">
                    <span class="font-label-sm text-label-sm text-secondary uppercase font-semibold">Sedang Diproses</span>
                    <span class="p-1.5 rounded-lg bg-secondary-container text-on-secondary-container material-symbols-outlined text-[18px]">brush</span>
                </div>
                <div>
                    <span class="font-metric-display text-metric-display text-primary font-semibold tracking-tight">28</span>
                    <span class="font-label-md text-label-md text-secondary ml-1">Pesanan</span>
                </div>
                <p class="mt-2 font-label-sm text-label-sm text-on-surface-variant">Antrean florist &amp; kurasi</p>
            </div>

            <!-- Card 6 -->
            <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-xs flex flex-col justify-between hover:shadow-md transition-shadow border border-outline-variant/30">
                <div class="flex items-center justify-between gap-1 mb-2">
                    <span class="font-label-sm text-label-sm text-secondary uppercase font-semibold">Pesanan Selesai</span>
                    <span class="p-1.5 rounded-lg bg-surface-container text-[#2d7a4d] material-symbols-outlined text-[18px]">task_alt</span>
                </div>
                <div>
                    <span class="font-metric-display text-metric-display text-on-surface font-semibold tracking-tight">142</span>
                    <span class="font-label-md text-label-md text-secondary ml-1">Pesanan</span>
                </div>
                <p class="mt-2 font-label-sm text-label-sm text-[#2d7a4d] font-semibold">Tuntas &amp; dikembalikan</p>
            </div>
        </div>

        <!-- SECTION 3 & 4: SPLIT GRID (MIDTRANS PAYMENT RECAP & QUICK WIDGET KOTAK) -->
        <div class="grid grid-cols-1 xl:grid-cols-12 gap-space-lg">
            <!-- CARD RINGKASAN PEMBAYARAN MIDTRANS (7 COLS) -->
            <div class="xl:col-span-7 bg-surface-container-lowest rounded-xl p-space-lg shadow-xs flex flex-col justify-between border border-outline-variant/30">
                <div>
                    <div class="flex flex-wrap items-center justify-between gap-2 mb-space-md">
                        <div class="flex items-center gap-2">
                            <span class="p-2 rounded-lg bg-primary-container text-on-primary-container material-symbols-outlined text-[20px]">account_balance_wallet</span>
                            <div>
                                <h2 class="font-title-lg text-title-lg text-on-surface font-semibold">Ringkasan Pembayaran (Midtrans Gateway)</h2>
                                <p class="font-label-sm text-label-sm text-on-surface-variant">Rekapitulasi otomatis transaksi DP, Pelunasan, dan Piutang</p>
                            </div>
                        </div>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container font-label-sm text-label-sm text-secondary font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#2d7a4d]"></span>
                            Midtrans Snap &amp; Core API Real-time
                        </span>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-lg">
                        <div class="bg-surface-container-low rounded-xl p-space-md flex flex-col border border-outline-variant/20">
                            <span class="font-label-sm text-label-sm uppercase font-semibold text-secondary tracking-wider">Total Dana Masuk Terverifikasi</span>
                            <p class="font-headline-lg text-headline-lg text-primary font-bold mt-1">Rp 148.850.000</p>
                            <div class="flex items-center gap-1 mt-2 text-[#2d7a4d] font-label-sm text-label-sm font-semibold">
                                <span class="material-symbols-outlined text-[16px]">verified</span>
                                <span>Tersinkronisasi otomatis via Webhook</span>
                            </div>
                        </div>
                        <div class="bg-surface-container-low rounded-xl p-space-md flex flex-col border border-outline-variant/20">
                            <span class="font-label-sm text-label-sm uppercase font-semibold text-secondary tracking-wider">Menunggu Pelunasan (Piutang)</span>
                            <p class="font-headline-lg text-headline-lg text-on-surface font-bold mt-1">Rp 24.300.000</p>
                            <div class="flex items-center gap-1 mt-2 text-on-surface-variant font-label-sm text-label-sm">
                                <span class="material-symbols-outlined text-[16px] text-primary">schedule</span>
                                <span>Dari 28 pesanan aktif belum tuntas</span>
                            </div>
                        </div>
                    </div>

                    <!-- Breakdown Grid -->
                    <div class="space-y-3">
                        <p class="font-label-sm text-label-sm text-secondary uppercase font-semibold tracking-wider">Breakdown Aliran Dana</p>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-space-sm">
                            <div class="p-3 rounded-lg bg-surface-container flex flex-col">
                                <span class="font-label-sm text-label-sm text-secondary">DP Masuk (Midtrans)</span>
                                <span class="font-title-md text-title-md text-on-surface font-bold mt-0.5">Rp 42.600.000</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant mt-1">Status DP Terbayar</span>
                            </div>
                            <div class="p-3 rounded-lg bg-surface-container flex flex-col">
                                <span class="font-label-sm text-label-sm text-secondary">Pelunasan Terbayar</span>
                                <span class="font-title-md text-title-md text-on-surface font-bold mt-0.5">Rp 38.250.000</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant mt-1">Tahap Penyelesaian</span>
                            </div>
                            <div class="p-3 rounded-lg bg-surface-container flex flex-col">
                                <span class="font-label-sm text-label-sm text-secondary">Pembayaran Penuh (Lunas)</span>
                                <span class="font-title-md text-title-md text-on-surface font-bold mt-0.5">Rp 68.000.000</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant mt-1">Langsung di Muka</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-space-md pt-3 flex items-center justify-between bg-surface-container-high/40 rounded-lg px-3 py-2">
                    <div class="flex items-center gap-2 text-on-surface-variant font-label-sm text-label-sm">
                        <span class="material-symbols-outlined text-[18px] text-primary">sync</span>
                        <span>Update transaksi terakhir: 3 menit yang lalu</span>
                    </div>
                    <a class="font-title-md text-title-md text-primary font-semibold hover:underline flex items-center gap-1" href="{{ Route::has('admin.transaksi-pembayaran') ? route('admin.transaksi-pembayaran') : '#' }}">
                        <span>Buka Mutasi Transaksi</span>
                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </a>
                </div>
            </div>

            <!-- QUICK WIDGET KETERSEDIAAN KOTAK CEPAT (5 COLS) -->
            <div class="xl:col-span-5 bg-surface-container-lowest rounded-xl p-space-lg shadow-xs flex flex-col justify-between border border-outline-variant/30">
                <div>
                    <div class="flex items-center justify-between mb-space-md">
                        <div class="flex items-center gap-2">
                            <span class="p-2 rounded-lg bg-secondary-container text-on-secondary-container material-symbols-outlined text-[20px]">shelves</span>
                            <div>
                                <h2 class="font-title-lg text-title-lg text-on-surface font-semibold">Ketersediaan Kotak Cepat</h2>
                                <p class="font-label-sm text-label-sm text-on-surface-variant">Alert Slot Baki &amp; Kotak Hari Ini / Pekan Ini</p>
                            </div>
                        </div>
                        <a class="font-label-sm text-label-sm text-primary font-semibold hover:underline flex items-center gap-1" href="{{ Route::has('admin.ketersediaan-kotak') ? route('admin.ketersediaan-kotak') : '#' }}">
                            <span>Kelola Stok</span>
                            <span class="material-symbols-outlined text-[16px]">open_in_new</span>
                        </a>
                    </div>

                    <div class="space-y-3.5">
                        <!-- Item 1 -->
                        <div class="p-3 rounded-lg bg-surface-container-low flex flex-col gap-2">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <span class="w-2.5 h-2.5 rounded-full bg-primary"></span>
                                    <span class="font-title-md text-title-md text-on-surface font-semibold">Luxury Crystal Series</span>
                                </div>
                                <div class="font-label-md text-label-md text-on-surface-variant">
                                    <span class="text-[#2d7a4d] font-bold">4 Tersedia</span> / <span class="text-secondary">6 Disewa</span>
                                </div>
                            </div>
                            <div class="w-full bg-surface-container-high h-2 rounded-full overflow-hidden">
                                <div class="bg-primary h-full rounded-full" style="width: 60%"></div>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="p-3 rounded-lg bg-surface-container-low flex flex-col gap-2">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <span class="w-2.5 h-2.5 rounded-full bg-secondary"></span>
                                    <span class="font-title-md text-title-md text-on-surface font-semibold">Luxury White Series</span>
                                </div>
                                <div class="font-label-md text-label-md text-on-surface-variant">
                                    <span class="text-[#2d7a4d] font-bold">7 Tersedia</span> / <span class="text-secondary">3 Disewa</span>
                                </div>
                            </div>
                            <div class="w-full bg-surface-container-high h-2 rounded-full overflow-hidden">
                                <div class="bg-secondary h-full rounded-full" style="width: 30%"></div>
                            </div>
                        </div>

                        <!-- Item 3: Alert -->
                        <div class="p-3 rounded-lg bg-error-container/40 flex flex-col gap-2 border border-error/20">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <span class="w-2.5 h-2.5 rounded-full bg-error"></span>
                                    <span class="font-title-md text-title-md text-on-surface font-semibold">Hidden Series (Koleksi Kayu Jati)</span>
                                </div>
                                <span class="px-2 py-0.5 rounded-full bg-error text-on-error font-label-sm text-label-sm font-bold animate-pulse">Hampir Penuh!</span>
                            </div>
                            <div class="flex items-center justify-between font-label-md text-label-md">
                                <span class="text-error font-bold">2 Tersedia</span>
                                <span class="text-secondary font-medium">8 Sedang Disewa</span>
                            </div>
                            <div class="w-full bg-surface-container-high h-2 rounded-full overflow-hidden">
                                <div class="bg-error h-full rounded-full" style="width: 80%"></div>
                            </div>
                        </div>

                        <!-- Item 4 -->
                        <div class="p-3 rounded-lg bg-surface-container-low flex flex-col gap-2">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <span class="w-2.5 h-2.5 rounded-full bg-tertiary"></span>
                                    <span class="font-title-md text-title-md text-on-surface font-semibold">Rattan / Bohemian Series</span>
                                </div>
                                <div class="font-label-md text-label-md text-on-surface-variant">
                                    <span class="text-[#2d7a4d] font-bold">8 Tersedia</span> / <span class="text-secondary">2 Disewa</span>
                                </div>
                            </div>
                            <div class="w-full bg-surface-container-high h-2 rounded-full overflow-hidden">
                                <div class="bg-tertiary h-full rounded-full" style="width: 20%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-space-md pt-2 flex items-center justify-between">
                    <p class="font-label-sm text-label-sm text-on-surface-variant">Total baki terdaftar: <span class="font-bold text-on-surface">40 unit</span></p>
                    <a class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-surface-container font-title-md text-title-md text-primary font-semibold hover:bg-surface-container-high transition-colors" href="{{ Route::has('admin.ketersediaan-kotak') ? route('admin.ketersediaan-kotak') : '#' }}">
                        <span>Lihat Kalender Slot Kotak</span>
                        <span class="material-symbols-outlined text-[16px]">calendar_month</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- SECTION 5: TABEL DAFTAR PESANAN TERBARU (OPERASIONAL ADMIN) -->
        <div class="bg-surface-container-lowest rounded-xl shadow-xs overflow-hidden flex flex-col border border-outline-variant/30">
            <div class="p-space-lg flex flex-col sm:flex-row sm:items-center justify-between gap-space-md bg-surface-container-low/50 border-b border-surface-container-high/60">
                <div>
                    <div class="flex items-center gap-2">
                        <span class="p-2 rounded-lg bg-primary-container text-on-primary-container material-symbols-outlined text-[20px]">task</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-semibold">Antrean Pesanan Operasional Terkini</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant mt-0.5">
                        Daftar 6 pesanan terkini yang memerlukan tindakan kurasi florist, konfirmasi pembayaran, atau koordinasi pengiriman.
                    </p>
                </div>

                <!-- Filter Quick Tabs -->
                <div class="flex items-center gap-1 bg-surface-container p-1 rounded-lg self-start sm:self-auto overflow-x-auto" id="orderFilterTabs">
                    <button class="px-3 py-1.5 rounded bg-surface-container-lowest text-primary font-title-md text-title-md font-semibold shadow-xs cursor-pointer filter-tab active" data-filter="all" type="button">Semua (6)</button>
                    <button class="px-3 py-1.5 rounded hover:bg-surface-container-lowest/60 text-secondary font-title-md text-title-md transition-colors cursor-pointer filter-tab" data-filter="process" type="button">Perlu Diproses (3)</button>
                    <button class="px-3 py-1.5 rounded hover:bg-surface-container-lowest/60 text-secondary font-title-md text-title-md transition-colors cursor-pointer filter-tab" data-filter="ready" type="button">Siap Kirim / Ambil (2)</button>
                </div>
            </div>

            <!-- Table Container -->
            <div class="overflow-x-auto w-full">
                <table class="w-full text-left font-body-md text-body-md" id="ordersTable">
                    <thead class="bg-surface-container-low text-secondary font-label-sm text-label-sm uppercase tracking-wider font-semibold border-b border-surface-container-high/60">
                        <tr>
                            <th class="py-3.5 px-space-lg">ID Pesanan</th>
                            <th class="py-3.5 px-4">Nama Pelanggan</th>
                            <th class="py-3.5 px-4">Jenis Pesanan</th>
                            <th class="py-3.5 px-4">Tanggal Acara</th>
                            <th class="py-3.5 px-4 text-right">Total Harga</th>
                            <th class="py-3.5 px-4 text-center">Status Pembayaran</th>
                            <th class="py-3.5 px-4 text-center">Status Pesanan</th>
                            <th class="py-3.5 px-space-lg text-center">Aksi Operasional</th>
                        </tr>
                    </thead>
                    <tbody class="text-on-surface divide-y divide-surface-container-high/40">
                        <!-- Row 1 -->
                        <tr class="hover:bg-surface-container-low/40 transition-colors order-row" data-status-category="process">
                            <td class="py-4 px-space-lg font-title-md text-title-md font-bold text-primary">
                                #ORD-2025-089
                                <span class="block font-label-sm text-label-sm text-secondary font-normal">Dibuat 15 Mei 2025</span>
                            </td>
                            <td class="py-4 px-4">
                                <div class="font-title-md text-title-md font-semibold text-on-surface">Anindya Putri &amp; Dimas</div>
                                <div class="font-label-sm text-label-sm text-secondary">+62 812-4455-8890</div>
                            </td>
                            <td class="py-4 px-4">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm font-semibold">
                                    <span class="material-symbols-outlined text-[14px]">workspace_premium</span> Mahar Frame Akrilik
                                </span>
                            </td>
                            <td class="py-4 px-4 whitespace-nowrap">
                                <div class="font-title-md text-title-md font-medium">24 Mei 2025</div>
                                <span class="font-label-sm text-label-sm text-error font-medium">9 hari lagi</span>
                            </td>
                            <td class="py-4 px-4 text-right font-title-md text-title-md font-bold text-on-surface">
                                Rp 2.450.000
                                <span class="block font-label-sm text-label-sm text-[#2d7a4d]">DP Rp 1.500.000</span>
                            </td>
                            <td class="py-4 px-4 text-center whitespace-nowrap">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span> DP Terbayar
                                </span>
                            </td>
                            <td class="py-4 px-4 text-center whitespace-nowrap">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container font-label-sm text-label-sm font-semibold text-primary">
                                    <span class="relative flex h-2 w-2">
                                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                                        <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                                    </span>
                                    Sedang Diproses
                                </span>
                            </td>
                            <td class="py-4 px-space-lg text-center whitespace-nowrap">
                                <div class="flex items-center justify-center gap-1.5">
                                    <button class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-primary text-on-primary font-title-md text-title-md hover:bg-primary-container transition-colors shadow-xs cursor-pointer" onclick="openStatusModal('#ORD-2025-089', 'Anindya Putri &amp; Dimas', 'Sedang Diproses')" title="Kelola / Ubah Status Operasional" type="button">
                                        <span class="material-symbols-outlined text-[16px]">tune</span>
                                        <span>Kelola</span>
                                    </button>
                                    <button class="p-1.5 rounded-lg bg-surface-container text-secondary hover:text-on-surface hover:bg-surface-container-high transition-colors cursor-pointer" onclick="openDetailDrawer('#ORD-2025-089', 'Anindya Putri &amp; Dimas', 'Mahar Frame Akrilik + Preserved Flora', 'Rp 2.450.000', '24 Mei 2025', 'Sedang Diproses Florist')" title="Lihat Detail Pesanan" type="button">
                                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                                    </button>
                                    <button class="p-1.5 rounded-lg bg-[#2d7a4d]/10 text-[#2d7a4d] hover:bg-[#2d7a4d] hover:text-white transition-colors cursor-pointer" onclick="kirimWhatsAppUpdate('Anindya Putri', '+6281244558890', '#ORD-2025-089', 'Sedang Diproses')" title="Kirim Update WA Gateway" type="button">
                                        <span class="material-symbols-outlined text-[18px]">chat</span>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr class="hover:bg-surface-container-low/40 transition-colors order-row" data-status-category="ready">
                            <td class="py-4 px-space-lg font-title-md text-title-md font-bold text-primary">
                                #ORD-2025-088
                                <span class="block font-label-sm text-label-sm text-secondary font-normal">Dibuat 14 Mei 2025</span>
                            </td>
                            <td class="py-4 px-4">
                                <div class="font-title-md text-title-md font-semibold text-on-surface">Raka Pradipta &amp; Sarah</div>
                                <div class="font-label-sm text-label-sm text-secondary">+62 878-1122-3344</div>
                            </td>
                            <td class="py-4 px-4">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">
                                    <span class="material-symbols-outlined text-[14px]">inventory_2</span> Sewa 8 Baki (Crystal)
                                </span>
                            </td>
                            <td class="py-4 px-4 whitespace-nowrap">
                                <div class="font-title-md text-title-md font-medium">17 Mei 2025</div>
                                <span class="font-label-sm text-label-sm text-error font-bold">2 hari lagi!</span>
                            </td>
                            <td class="py-4 px-4 text-right font-title-md text-title-md font-bold text-on-surface">
                                Rp 3.200.000
                                <span class="block font-label-sm text-label-sm text-[#2d7a4d]">Lunas (Midtrans)</span>
                            </td>
                            <td class="py-4 px-4 text-center whitespace-nowrap">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#2d7a4d]/10 text-[#2d7a4d] font-label-sm text-label-sm font-semibold">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#2d7a4d]"></span> Lunas
                                </span>
                            </td>
                            <td class="py-4 px-4 text-center whitespace-nowrap">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#2d7a4d]/15 text-[#2d7a4d] font-label-sm text-label-sm font-semibold">
                                    <span class="material-symbols-outlined text-[14px]">check_circle</span> Siap Diambil
                                </span>
                            </td>
                            <td class="py-4 px-space-lg text-center whitespace-nowrap">
                                <div class="flex items-center justify-center gap-1.5">
                                    <button class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-primary text-on-primary font-title-md text-title-md hover:bg-primary-container transition-colors shadow-xs cursor-pointer" onclick="openStatusModal('#ORD-2025-088', 'Raka Pradipta &amp; Sarah', 'Siap Diambil')" title="Kelola / Ubah Status Operasional" type="button">
                                        <span class="material-symbols-outlined text-[16px]">tune</span>
                                        <span>Kelola</span>
                                    </button>
                                    <button class="p-1.5 rounded-lg bg-surface-container text-secondary hover:text-on-surface hover:bg-surface-container-high transition-colors cursor-pointer" onclick="openDetailDrawer('#ORD-2025-088', 'Raka Pradipta &amp; Sarah', 'Sewa 8 Kotak Luxury Crystal Series + Dekorasi Fresh Rose', 'Rp 3.200.000', '17 Mei 2025', 'Siap Diambil Pengantin')" title="Lihat Detail Pesanan" type="button">
                                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                                    </button>
                                    <button class="p-1.5 rounded-lg bg-[#2d7a4d]/10 text-[#2d7a4d] hover:bg-[#2d7a4d] hover:text-white transition-colors cursor-pointer" onclick="kirimWhatsAppUpdate('Raka Pradipta', '+6287811223344', '#ORD-2025-088', 'Siap Diambil')" title="Kirim Update WA Gateway" type="button">
                                        <span class="material-symbols-outlined text-[18px]">chat</span>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr class="hover:bg-surface-container-low/40 transition-colors order-row" data-status-category="process">
                            <td class="py-4 px-space-lg font-title-md text-title-md font-bold text-primary">
                                #ORD-2025-087
                                <span class="block font-label-sm text-label-sm text-secondary font-normal">Dibuat 14 Mei 2025</span>
                            </td>
                            <td class="py-4 px-4">
                                <div class="font-title-md text-title-md font-semibold text-on-surface">Nadira Zahra &amp; Farhan</div>
                                <div class="font-label-sm text-label-sm text-secondary">+62 821-9988-7711</div>
                            </td>
                            <td class="py-4 px-4">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm font-semibold">
                                    <span class="material-symbols-outlined text-[14px]">auto_awesome</span> Paket Bundling Seserahan + Mahar
                                </span>
                            </td>
                            <td class="py-4 px-4 whitespace-nowrap">
                                <div class="font-title-md text-title-md font-medium">31 Mei 2025</div>
                                <span class="font-label-sm text-label-sm text-secondary">16 hari lagi</span>
                            </td>
                            <td class="py-4 px-4 text-right font-title-md text-title-md font-bold text-on-surface">
                                Rp 4.750.000
                                <span class="block font-label-sm text-label-sm text-error">Belum Bayar DP</span>
                            </td>
                            <td class="py-4 px-4 text-center whitespace-nowrap">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-error-container text-error font-label-sm text-label-sm font-semibold">
                                    <span class="w-1.5 h-1.5 rounded-full bg-error"></span> Menunggu DP
                                </span>
                            </td>
                            <td class="py-4 px-4 text-center whitespace-nowrap">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-error-container/40 text-error font-label-sm text-label-sm font-semibold">
                                    <span class="material-symbols-outlined text-[14px]">hourglass_empty</span> Menunggu Pembayaran
                                </span>
                            </td>
                            <td class="py-4 px-space-lg text-center whitespace-nowrap">
                                <div class="flex items-center justify-center gap-1.5">
                                    <button class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-primary text-on-primary font-title-md text-title-md hover:bg-primary-container transition-colors shadow-xs cursor-pointer" onclick="openStatusModal('#ORD-2025-087', 'Nadira Zahra &amp; Farhan', 'Menunggu Pembayaran')" title="Kelola / Ubah Status Operasional" type="button">
                                        <span class="material-symbols-outlined text-[16px]">tune</span>
                                        <span>Kelola</span>
                                    </button>
                                    <button class="p-1.5 rounded-lg bg-surface-container text-secondary hover:text-on-surface hover:bg-surface-container-high transition-colors cursor-pointer" onclick="openDetailDrawer('#ORD-2025-087', 'Nadira Zahra &amp; Farhan', 'Bundling 10 Baki White Series + Mahar Koin Emas Logam Mulia', 'Rp 4.750.000', '31 Mei 2025', 'Menunggu Pembayaran Tagihan Midtrans')" title="Lihat Detail Pesanan" type="button">
                                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                                    </button>
                                    <button class="p-1.5 rounded-lg bg-[#2d7a4d]/10 text-[#2d7a4d] hover:bg-[#2d7a4d] hover:text-white transition-colors cursor-pointer" onclick="kirimWhatsAppUpdate('Nadira Zahra', '+6282199887711', '#ORD-2025-087', 'Menunggu DP')" title="Kirim Pengingat Tagihan WA" type="button">
                                        <span class="material-symbols-outlined text-[18px]">send</span>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 4 -->
                        <tr class="hover:bg-surface-container-low/40 transition-colors order-row" data-status-category="process">
                            <td class="py-4 px-space-lg font-title-md text-title-md font-bold text-primary">
                                #ORD-2025-086
                                <span class="block font-label-sm text-label-sm text-secondary font-normal">Dibuat 12 Mei 2025</span>
                            </td>
                            <td class="py-4 px-4">
                                <div class="font-title-md text-title-md font-semibold text-on-surface">Bima Arya &amp; Clarissa</div>
                                <div class="font-label-sm text-label-sm text-secondary">+62 856-7788-9900</div>
                            </td>
                            <td class="py-4 px-4">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">
                                    <span class="material-symbols-outlined text-[14px]">inventory_2</span> Sewa 6 Baki (Hidden Wooden)
                                </span>
                            </td>
                            <td class="py-4 px-4 whitespace-nowrap">
                                <div class="font-title-md text-title-md font-medium">15 Mei 2025</div>
                                <span class="font-label-sm text-label-sm text-primary font-bold">Hari Ini!</span>
                            </td>
                            <td class="py-4 px-4 text-right font-title-md text-title-md font-bold text-on-surface">
                                Rp 2.800.000
                                <span class="block font-label-sm text-label-sm text-[#2d7a4d]">Lunas</span>
                            </td>
                            <td class="py-4 px-4 text-center whitespace-nowrap">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#2d7a4d]/10 text-[#2d7a4d] font-label-sm text-label-sm font-semibold">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#2d7a4d]"></span> Lunas
                                </span>
                            </td>
                            <td class="py-4 px-4 text-center whitespace-nowrap">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-primary-container text-on-primary-container font-label-sm text-label-sm font-semibold">
                                    <span class="material-symbols-outlined text-[14px]">output</span> Sedang Disewa
                                </span>
                            </td>
                            <td class="py-4 px-space-lg text-center whitespace-nowrap">
                                <div class="flex items-center justify-center gap-1.5">
                                    <button class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-primary text-on-primary font-title-md text-title-md hover:bg-primary-container transition-colors shadow-xs cursor-pointer" onclick="openStatusModal('#ORD-2025-086', 'Bima Arya &amp; Clarissa', 'Sedang Disewa')" title="Kelola / Ubah Status Operasional" type="button">
                                        <span class="material-symbols-outlined text-[16px]">tune</span>
                                        <span>Kelola</span>
                                    </button>
                                    <button class="p-1.5 rounded-lg bg-surface-container text-secondary hover:text-on-surface hover:bg-surface-container-high transition-colors cursor-pointer" onclick="openDetailDrawer('#ORD-2025-086', 'Bima Arya &amp; Clarissa', 'Sewa 6 Baki Hidden Box Jati Terukir + Bunga Rustic', 'Rp 2.800.000', '15 Mei 2025', 'Baki dibawa pengantin - Jadwal kembali 17 Mei 2025')" title="Lihat Detail Pesanan" type="button">
                                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                                    </button>
                                    <button class="p-1.5 rounded-lg bg-[#2d7a4d]/10 text-[#2d7a4d] hover:bg-[#2d7a4d] hover:text-white transition-colors cursor-pointer" onclick="kirimWhatsAppUpdate('Bima Arya', '+6285677889900', '#ORD-2025-086', 'Sedang Disewa')" title="Kirim Update WA Gateway" type="button">
                                        <span class="material-symbols-outlined text-[18px]">chat</span>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 5 -->
                        <tr class="hover:bg-surface-container-low/40 transition-colors order-row" data-status-category="process">
                            <td class="py-4 px-space-lg font-title-md text-title-md font-bold text-primary">
                                #ORD-2025-085
                                <span class="block font-label-sm text-label-sm text-secondary font-normal">Dibuat 11 Mei 2025</span>
                            </td>
                            <td class="py-4 px-4">
                                <div class="font-title-md text-title-md font-semibold text-on-surface">Kezia Amanda &amp; Reza</div>
                                <div class="font-label-sm text-label-sm text-secondary">+62 813-2233-4455</div>
                            </td>
                            <td class="py-4 px-4">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm font-semibold">
                                    <span class="material-symbols-outlined text-[14px]">workspace_premium</span> Mahar Koin Siluet 3D
                                </span>
                            </td>
                            <td class="py-4 px-4 whitespace-nowrap">
                                <div class="font-title-md text-title-md font-medium">21 Mei 2025</div>
                                <span class="font-label-sm text-label-sm text-secondary">6 hari lagi</span>
                            </td>
                            <td class="py-4 px-4 text-right font-title-md text-title-md font-bold text-on-surface">
                                Rp 1.950.000
                                <span class="block font-label-sm text-label-sm text-[#2d7a4d]">DP Rp 1.000.000</span>
                            </td>
                            <td class="py-4 px-4 text-center whitespace-nowrap">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span> DP Terbayar
                                </span>
                            </td>
                            <td class="py-4 px-4 text-center whitespace-nowrap">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container font-label-sm text-label-sm font-semibold text-primary">
                                    <span class="relative flex h-2 w-2">
                                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                                        <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                                    </span>
                                    Sedang Diproses
                                </span>
                            </td>
                            <td class="py-4 px-space-lg text-center whitespace-nowrap">
                                <div class="flex items-center justify-center gap-1.5">
                                    <button class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-primary text-on-primary font-title-md text-title-md hover:bg-primary-container transition-colors shadow-xs cursor-pointer" onclick="openStatusModal('#ORD-2025-085', 'Kezia Amanda &amp; Reza', 'Sedang Diproses')" title="Kelola / Ubah Status Operasional" type="button">
                                        <span class="material-symbols-outlined text-[16px]">tune</span>
                                        <span>Kelola</span>
                                    </button>
                                    <button class="p-1.5 rounded-lg bg-surface-container text-secondary hover:text-on-surface hover:bg-surface-container-high transition-colors cursor-pointer" onclick="openDetailDrawer('#ORD-2025-085', 'Kezia Amanda &amp; Reza', 'Mahar Koin 10 Gram Siluet Kayu Tematik Terrarium', 'Rp 1.950.000', '21 Mei 2025', 'Proses grafir akrilik siluet nama')" title="Lihat Detail Pesanan" type="button">
                                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                                    </button>
                                    <button class="p-1.5 rounded-lg bg-[#2d7a4d]/10 text-[#2d7a4d] hover:bg-[#2d7a4d] hover:text-white transition-colors cursor-pointer" onclick="kirimWhatsAppUpdate('Kezia Amanda', '+6281322334455', '#ORD-2025-085', 'Sedang Diproses')" title="Kirim Update WA Gateway" type="button">
                                        <span class="material-symbols-outlined text-[18px]">chat</span>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 6 -->
                        <tr class="hover:bg-surface-container-low/40 transition-colors order-row" data-status-category="ready">
                            <td class="py-4 px-space-lg font-title-md text-title-md font-bold text-primary">
                                #ORD-2025-084
                                <span class="block font-label-sm text-label-sm text-secondary font-normal">Dibuat 10 Mei 2025</span>
                            </td>
                            <td class="py-4 px-4">
                                <div class="font-title-md text-title-md font-semibold text-on-surface">Taufik Hidayat &amp; Nabila</div>
                                <div class="font-label-sm text-label-sm text-secondary">+62 895-3344-5566</div>
                            </td>
                            <td class="py-4 px-4">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">
                                    <span class="material-symbols-outlined text-[14px]">inventory_2</span> Sewa 7 Baki (Rattan Bohemian)
                                </span>
                            </td>
                            <td class="py-4 px-4 whitespace-nowrap">
                                <div class="font-title-md text-title-md font-medium">11 Mei 2025</div>
                                <span class="font-label-sm text-label-sm text-[#2d7a4d] font-semibold">Kemarin Selesai</span>
                            </td>
                            <td class="py-4 px-4 text-right font-title-md text-title-md font-bold text-on-surface">
                                Rp 2.100.000
                                <span class="block font-label-sm text-label-sm text-[#2d7a4d]">Lunas</span>
                            </td>
                            <td class="py-4 px-4 text-center whitespace-nowrap">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#2d7a4d]/10 text-[#2d7a4d] font-label-sm text-label-sm font-semibold">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#2d7a4d]"></span> Lunas
                                </span>
                            </td>
                            <td class="py-4 px-4 text-center whitespace-nowrap">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container-high text-secondary font-label-sm text-label-sm font-semibold">
                                    <span class="material-symbols-outlined text-[14px] text-[#2d7a4d]">task_alt</span> Selesai
                                </span>
                            </td>
                            <td class="py-4 px-space-lg text-center whitespace-nowrap">
                                <div class="flex items-center justify-center gap-1.5">
                                    <button class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-surface-container text-on-surface font-title-md text-title-md hover:bg-surface-container-high transition-colors cursor-pointer" onclick="openStatusModal('#ORD-2025-084', 'Taufik Hidayat &amp; Nabila', 'Selesai')" title="Arsip Selesai" type="button">
                                        <span class="material-symbols-outlined text-[16px]">history</span>
                                        <span>Arsip</span>
                                    </button>
                                    <button class="p-1.5 rounded-lg bg-surface-container text-secondary hover:text-on-surface hover:bg-surface-container-high transition-colors cursor-pointer" onclick="openDetailDrawer('#ORD-2025-084', 'Taufik Hidayat &amp; Nabila', 'Sewa 7 Baki Rattan Natural + Bunga Kering Pampas', 'Rp 2.100.000', '11 Mei 2025', 'Baki telah dikembalikan lengkap tanpa denda/kerusakan')" title="Lihat Detail Pesanan" type="button">
                                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                                    </button>
                                    <button class="p-1.5 rounded-lg bg-[#2d7a4d]/10 text-[#2d7a4d] hover:bg-[#2d7a4d] hover:text-white transition-colors cursor-pointer" onclick="kirimWhatsAppUpdate('Taufik Hidayat', '+6289533445566', '#ORD-2025-084', 'Selesai')" title="Kirim Ucapan Terima Kasih WA" type="button">
                                        <span class="material-symbols-outlined text-[18px]">thumb_up</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Table Footer / Quick Paging info -->
            <div class="p-space-md bg-surface-container-low/30 flex flex-col sm:flex-row items-center justify-between gap-2 border-t border-surface-container-high/60">
                <p class="font-label-sm text-label-sm text-on-surface-variant">Menampilkan 6 pesanan prioritas operasional dari total 184 pesanan aktif</p>
                <a class="font-title-md text-title-md text-primary font-semibold hover:underline inline-flex items-center gap-1" href="{{ Route::has('admin.pesanan') ? route('admin.pesanan') : '#' }}">
                    <span>Lihat Semua Pesanan di Menu Pesanan</span>
                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- MODAL: KELOLA / UBAH STATUS OPERASIONAL -->
<div class="fixed inset-0 z-50 bg-inverse-surface/40 backdrop-blur-xs flex items-center justify-center p-4 hidden" id="modalStatusOperasional">
    <div class="bg-surface-container-lowest rounded-xl max-w-lg w-full p-space-lg shadow-xl relative animate-in fade-in zoom-in-95 duration-150 border border-outline-variant/30">
        <div class="flex items-center justify-between pb-3 border-b border-surface-container-high">
            <div class="flex items-center gap-2">
                <span class="p-1.5 rounded-lg bg-primary text-on-primary material-symbols-outlined text-[20px]">tune</span>
                <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Kelola Status Operasional</h3>
            </div>
            <button class="text-secondary hover:text-on-surface p-1 rounded-lg cursor-pointer" onclick="closeStatusModal()" type="button">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        <div class="mt-space-sm space-y-4">
            <div class="p-3 bg-surface-container-low rounded-lg border border-outline-variant/20">
                <p class="font-label-sm text-label-sm text-secondary uppercase font-semibold">Pesanan yang dipilih</p>
                <p class="font-title-lg text-title-lg font-bold text-primary" id="modalOrderId">#ORD-2025-089</p>
                <p class="font-body-md text-body-md text-on-surface font-medium" id="modalClientName">Anindya Putri &amp; Dimas</p>
            </div>
            <div>
                <label class="block font-label-md text-label-md font-semibold text-secondary mb-1">Pilih Status Operasional Baru</label>
                <select class="w-full bg-surface-container-high rounded-lg px-3 py-2 text-on-surface font-body-md text-body-md focus:outline-hidden" id="selectStatusPesanan">
                    <option value="Menunggu Pembayaran">Menunggu Pembayaran (Menunggu DP)</option>
                    <option value="Sedang Diproses">Sedang Diproses (Florist &amp; Kurasi)</option>
                    <option value="Siap Diambil">Siap Diambil / Siap Dikirim ke Pemesan</option>
                    <option value="Sedang Disewa">Sedang Disewa (Baki dibawa pengantin)</option>
                    <option value="Selesai">Selesai (Baki dikembalikan utuh / Mahar diserahterimakan)</option>
                </select>
            </div>
            <div>
                <label class="block font-label-md text-label-md font-semibold text-secondary mb-1">Catatan Operasional / Log Admin</label>
                <textarea class="w-full bg-surface-container-high rounded-lg p-2.5 text-on-surface font-body-md text-body-md focus:outline-hidden" placeholder="Contoh: Rangkaian bunga peach selesai, baki crystal nomor 04-11 disiapkan..." rows="2"></textarea>
            </div>
            <div class="p-3 bg-surface-container rounded-lg flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-[20px] text-[#2d7a4d]">chat</span>
                    <div>
                        <p class="font-title-md text-title-md text-on-surface font-semibold">Kirim Notifikasi WhatsApp Otomatis</p>
                        <p class="font-label-sm text-label-sm text-on-surface-variant">Update status langsung dikirim ke WhatsApp pengantin</p>
                    </div>
                </div>
                <input checked="" class="w-4 h-4 text-primary rounded accent-primary cursor-pointer" type="checkbox">
            </div>
            <div class="flex items-center justify-end gap-2 pt-2">
                <button class="px-4 py-2 rounded-lg bg-surface-container text-on-surface font-title-md text-title-md hover:bg-surface-container-high cursor-pointer" onclick="closeStatusModal()" type="button">Batal</button>
                <button class="px-4 py-2 rounded-lg bg-primary text-on-primary font-title-md text-title-md font-semibold hover:bg-primary-container shadow-xs cursor-pointer" onclick="simpanStatusOperasional()" type="button">Simpan Perubahan Status</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL: + TAMBAH PESANAN BARU -->
<div class="fixed inset-0 z-50 bg-inverse-surface/40 backdrop-blur-xs flex items-center justify-center p-4 hidden" id="modalTambahPesanan">
    <div class="bg-surface-container-lowest rounded-xl max-w-xl w-full p-space-lg shadow-xl relative max-h-[90vh] overflow-y-auto border border-outline-variant/30">
        <div class="flex items-center justify-between pb-3 border-b border-surface-container-high">
            <div class="flex items-center gap-2">
                <span class="p-1.5 rounded-lg bg-primary text-on-primary material-symbols-outlined text-[20px]">add_task</span>
                <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Formulir Pesanan Baru (Admin)</h3>
            </div>
            <button class="text-secondary hover:text-on-surface p-1 rounded-lg cursor-pointer" onclick="document.getElementById('modalTambahPesanan').classList.add('hidden')" type="button">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        <form class="mt-space-sm space-y-4" onsubmit="event.preventDefault(); alert('Pesanan baru berhasil dibuat dan invoice Midtrans telah di-generate.'); document.getElementById('modalTambahPesanan').classList.add('hidden');">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-sm">
                <div>
                    <label class="block font-label-md text-label-md font-semibold text-secondary mb-1">Nama Pasangan Pengantin</label>
                    <input class="w-full bg-surface-container-high rounded-lg px-3 py-2 text-on-surface font-body-md text-body-md focus:outline-hidden" placeholder="Contoh: Rian &amp; Safira" required="" type="text">
                </div>
                <div>
                    <label class="block font-label-md text-label-md font-semibold text-secondary mb-1">Nomor WhatsApp Aktif</label>
                    <input class="w-full bg-surface-container-high rounded-lg px-3 py-2 text-on-surface font-body-md text-body-md focus:outline-hidden" placeholder="08xxxxxxxxxx" required="" type="tel">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-sm">
                <div>
                    <label class="block font-label-md text-label-md font-semibold text-secondary mb-1">Kategori Pesanan</label>
                    <select class="w-full bg-surface-container-high rounded-lg px-3 py-2 text-on-surface font-body-md text-body-md focus:outline-hidden">
                        <option>Mahar Frame Custom</option>
                        <option>Mahar Koin / Logam Mulia</option>
                        <option>Sewa Kotak Seserahan (Baki)</option>
                        <option>Paket Lengkap Seserahan + Mahar</option>
                    </select>
                </div>
                <div>
                    <label class="block font-label-md text-label-md font-semibold text-secondary mb-1">Tanggal Acara Pernikahan</label>
                    <input class="w-full bg-surface-container-high rounded-lg px-3 py-2 text-on-surface font-body-md text-body-md focus:outline-hidden" required="" type="date">
                </div>
            </div>
            <div>
                <label class="block font-label-md text-label-md font-semibold text-secondary mb-1">Pilihan Seri Kotak (Bila Sewa)</label>
                <select class="w-full bg-surface-container-high rounded-lg px-3 py-2 text-on-surface font-body-md text-body-md focus:outline-hidden">
                    <option>Luxury Crystal Series (Tersedia: 4 baki)</option>
                    <option>Luxury White Series (Tersedia: 7 baki)</option>
                    <option>Hidden Wooden Series (Tersedia: 2 baki - Terbatas!)</option>
                    <option>Rattan Bohemian Series (Tersedia: 8 baki)</option>
                    <option>Tidak menggunakan kotak sewa (Hanya Mahar)</option>
                </select>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-sm">
                <div>
                    <label class="block font-label-md text-label-md font-semibold text-secondary mb-1">Total Biaya Pesanan (Rp)</label>
                    <input class="w-full bg-surface-container-high rounded-lg px-3 py-2 text-on-surface font-body-md text-body-md focus:outline-hidden" placeholder="Contoh: 2500000" required="" type="number">
                </div>
                <div>
                    <label class="block font-label-md text-label-md font-semibold text-secondary mb-1">Metode Tagihan Awal</label>
                    <select class="w-full bg-surface-container-high rounded-lg px-3 py-2 text-on-surface font-body-md text-body-md focus:outline-hidden">
                        <option>Generate Midtrans Payment Link (DP 50%)</option>
                        <option>Generate Midtrans Full Payment (100%)</option>
                        <option>Tunai / Cash Studio (Verifikasi Manual)</option>
                    </select>
                </div>
            </div>
            <div class="flex items-center justify-end gap-2 pt-3 border-t border-surface-container-high">
                <button class="px-4 py-2 rounded-lg bg-surface-container text-on-surface font-title-md text-title-md hover:bg-surface-container-high cursor-pointer" onclick="document.getElementById('modalTambahPesanan').classList.add('hidden')" type="button">Batal</button>
                <button class="px-5 py-2 rounded-lg bg-primary text-on-primary font-title-md text-title-md font-semibold hover:bg-primary-container shadow-xs cursor-pointer" type="submit">Simpan &amp; Buat Tagihan</button>
            </div>
        </form>
    </div>
</div>

<!-- MODAL: CEK JADWAL PENGEMBALIAN KOTAK HARI INI -->
<div class="fixed inset-0 z-50 bg-inverse-surface/40 backdrop-blur-xs flex items-center justify-center p-4 hidden" id="modalJadwalKembali">
    <div class="bg-surface-container-lowest rounded-xl max-w-xl w-full p-space-lg shadow-xl relative max-h-[90vh] overflow-y-auto border border-outline-variant/30">
        <div class="flex items-center justify-between pb-3 border-b border-surface-container-high">
            <div class="flex items-center gap-2">
                <span class="p-1.5 rounded-lg bg-primary text-on-primary material-symbols-outlined text-[20px]">calendar_month</span>
                <div>
                    <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Jadwal Pengembalian Kotak Hari Ini</h3>
                    <p class="font-label-sm text-label-sm text-secondary">{{ \Carbon\Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y') }}</p>
                </div>
            </div>
            <button class="text-secondary hover:text-on-surface p-1 rounded-lg cursor-pointer" onclick="document.getElementById('modalJadwalKembali').classList.add('hidden')" type="button">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        <div class="mt-space-sm space-y-3">
            <div class="p-3 bg-surface-container-low rounded-lg flex items-center justify-between border border-outline-variant/20">
                <div>
                    <p class="font-title-md text-title-md font-semibold text-on-surface">Bima Arya &amp; Clarissa (#ORD-2025-086)</p>
                    <p class="font-label-sm text-label-sm text-secondary">6 Baki Hidden Box Jati • Janji Kembali: 16.00 WIB</p>
                </div>
                <span class="px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">Sore Ini</span>
            </div>
            <div class="p-3 bg-surface-container-low rounded-lg flex items-center justify-between border border-outline-variant/20">
                <div>
                    <p class="font-title-md text-title-md font-semibold text-on-surface">Dian Permata &amp; Fajar (#ORD-2025-081)</p>
                    <p class="font-label-sm text-label-sm text-secondary">8 Baki Luxury White • Janji Kembali: 19.30 WIB</p>
                </div>
                <span class="px-2.5 py-1 rounded-full bg-surface-container text-primary font-label-sm text-label-sm font-semibold">Malam Ini</span>
            </div>
            <div class="p-3 bg-surface-container rounded-lg flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary text-[18px]">verified_user</span>
                    <span class="font-label-sm text-label-sm text-on-surface">Prosedur: Periksa kelengkapan akrilik dan pita satin saat baki diterima.</span>
                </div>
            </div>
            <div class="flex items-center justify-end gap-2 pt-2 border-t border-surface-container-high">
                <button class="px-4 py-2 rounded-lg bg-surface-container text-on-surface font-title-md text-title-md hover:bg-surface-container-high cursor-pointer" onclick="document.getElementById('modalJadwalKembali').classList.add('hidden')" type="button">Tutup</button>
                <a class="px-4 py-2 rounded-lg bg-primary text-on-primary font-title-md text-title-md font-semibold hover:bg-primary-container" href="{{ Route::has('admin.ketersediaan-kotak') ? route('admin.ketersediaan-kotak') : '#' }}">Buka Modul Ketersediaan Kotak</a>
            </div>
        </div>
    </div>
</div>

<!-- INSPECTION DRAWER: DETAIL PESANAN -->
<div class="fixed inset-y-0 right-0 w-full max-w-md bg-surface-container-lowest shadow-2xl z-50 p-space-lg flex flex-col justify-between transform translate-x-full transition-transform duration-200 ease-in-out border-l border-outline-variant/30" id="drawerDetailPesanan">
    <div>
        <div class="flex items-center justify-between pb-3 border-b border-surface-container-high">
            <div class="flex items-center gap-2">
                <span class="p-1.5 rounded-lg bg-primary text-on-primary material-symbols-outlined text-[18px]">info</span>
                <span class="font-title-lg text-title-lg font-semibold text-on-surface">Detail Pesanan Operasional</span>
            </div>
            <button class="p-1 rounded-lg text-secondary hover:text-on-surface cursor-pointer" onclick="closeDetailDrawer()" type="button">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        <div class="mt-4 space-y-4">
            <div class="p-3 bg-surface-container-low rounded-lg border border-outline-variant/20">
                <span class="font-label-sm text-label-sm uppercase font-semibold text-secondary">Nomor ID Registrasi</span>
                <p class="font-headline-md text-headline-md font-bold text-primary" id="drawerId">#ORD-2025-089</p>
                <p class="font-title-md text-title-md text-on-surface font-semibold mt-1" id="drawerClient">Anindya Putri &amp; Dimas</p>
            </div>
            <div class="space-y-2.5">
                <div>
                    <span class="font-label-sm text-label-sm text-secondary">Spesifikasi Item / Dekorasi</span>
                    <p class="font-body-md text-body-md text-on-surface font-medium" id="drawerSpec">Mahar Frame Akrilik + Preserved Flora</p>
                </div>
                <div>
                    <span class="font-label-sm text-label-sm text-secondary">Tanggal Acara Pelaksanaan</span>
                    <p class="font-body-md text-body-md text-on-surface font-medium" id="drawerEventDate">24 Mei 2025</p>
                </div>
                <div>
                    <span class="font-label-sm text-label-sm text-secondary">Total Nilai Pesanan</span>
                    <p class="font-title-lg text-title-lg text-primary font-bold" id="drawerPrice">Rp 2.450.000</p>
                </div>
                <div>
                    <span class="font-label-sm text-label-sm text-secondary">Log Progres Terakhir</span>
                    <p class="font-body-md text-body-md text-on-surface-variant bg-surface-container p-2.5 rounded-lg border border-outline-variant/20" id="drawerStatusLog">Sedang dipersiapkan florist atelier</p>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-4 flex flex-col gap-2 border-t border-surface-container-high">
        <button class="w-full py-2.5 rounded-lg bg-surface-container-high text-on-surface font-title-md text-title-md font-semibold hover:bg-surface-variant flex items-center justify-center gap-2 cursor-pointer" onclick="alert('Membuka file cetak invoice &amp; surat jalan...');" type="button">
            <span class="material-symbols-outlined text-[18px]">print</span>
            <span>Cetak Invoice &amp; Tanda Terima Baki</span>
        </button>
        <button class="w-full py-2 rounded-lg bg-surface-container text-secondary font-title-md text-title-md hover:bg-surface-container-high cursor-pointer" onclick="closeDetailDrawer()" type="button">
            Tutup Panel
        </button>
    </div>
</div>

<!-- TOAST NOTIFIKASI INTERAKTIF -->
<div class="fixed bottom-6 right-6 z-50 bg-inverse-surface text-inverse-on-surface px-4 py-3 rounded-lg shadow-xl flex items-center gap-2 hidden animate-in slide-in-from-bottom duration-150" id="toastOperasional">
    <span class="material-symbols-outlined text-[#2d7a4d] text-[20px]">check_circle</span>
    <span class="font-body-md text-body-md" id="toastMsg">Status berhasil diperbarui!</span>
</div>
@endsection

@push('scripts')
<script>
    function openStatusModal(orderId, clientName, currentStatus) {
        document.getElementById('modalOrderId').innerText = orderId;
        document.getElementById('modalClientName').innerText = clientName;
        document.getElementById('selectStatusPesanan').value = currentStatus;
        document.getElementById('modalStatusOperasional').classList.remove('hidden');
    }

    function closeStatusModal() {
        document.getElementById('modalStatusOperasional').classList.add('hidden');
    }

    function simpanStatusOperasional() {
        const orderId = document.getElementById('modalOrderId').innerText;
        const newStatus = document.getElementById('selectStatusPesanan').value;
        closeStatusModal();
        showToast('Status ' + orderId + ' berhasil diubah menjadi: ' + newStatus + ' & notifikasi WA terkirim otomatis.');
    }

    function openDetailDrawer(orderId, client, spec, price, eventDate, log) {
        document.getElementById('drawerId').innerText = orderId;
        document.getElementById('drawerClient').innerText = client;
        document.getElementById('drawerSpec').innerText = spec;
        document.getElementById('drawerPrice').innerText = price;
        document.getElementById('drawerEventDate').innerText = eventDate;
        document.getElementById('drawerStatusLog').innerText = log;
        document.getElementById('drawerDetailPesanan').classList.remove('translate-x-full');
    }

    function closeDetailDrawer() {
        document.getElementById('drawerDetailPesanan').classList.add('translate-x-full');
    }

    function kirimWhatsAppUpdate(clientName, phone, orderId, status) {
        showToast('Pesan WhatsApp Gateway berhasil dikirimkan ke ' + clientName + ' (' + phone + ') untuk pesanan ' + orderId);
    }

    function showToast(message) {
        const toast = document.getElementById('toastOperasional');
        document.getElementById('toastMsg').innerText = message;
        toast.classList.remove('hidden');
        setTimeout(() => {
            toast.classList.add('hidden');
        }, 4000);
    }

    // Filter Tabs Handler
    document.addEventListener('DOMContentLoaded', function() {
        const filterTabs = document.querySelectorAll('.filter-tab');
        const rows = document.querySelectorAll('.order-row');

        filterTabs.forEach(tab => {
            tab.addEventListener('click', function() {
                filterTabs.forEach(t => {
                    t.classList.remove('bg-surface-container-lowest', 'text-primary', 'shadow-xs', 'font-semibold');
                    t.classList.add('text-secondary');
                });
                this.classList.add('bg-surface-container-lowest', 'text-primary', 'shadow-xs', 'font-semibold');
                this.classList.remove('text-secondary');

                const filter = this.dataset.filter;
                rows.forEach(row => {
                    if (filter === 'all' || row.dataset.statusCategory === filter) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
@endpush
