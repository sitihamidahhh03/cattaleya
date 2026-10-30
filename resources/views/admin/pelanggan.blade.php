@extends('layouts.admin')

@section('title', 'Data & Manajemen Pelanggan — Cattaleya Atelier')

@section('content')
<div class="flex flex-col w-full">
    <!-- Top Ambient Glow Decorator -->
    <div class="relative w-full overflow-hidden">
        <div class="absolute -top-24 -right-16 w-96 h-96 rounded-full bg-secondary-fixed opacity-40 blur-3xl pointer-events-none"></div>
        <div class="absolute top-12 left-1/3 w-80 h-80 rounded-full bg-tertiary-fixed opacity-30 blur-2xl pointer-events-none"></div>

        <!-- Page Header Section -->
        <div class="relative pt-space-xs pb-space-lg flex flex-col lg:flex-row lg:items-end justify-between gap-space-md">
            <div class="space-y-1">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-surface-container font-label-sm text-label-sm text-secondary tracking-widest uppercase mb-1">
                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                    DIREKTORI KLIEN ATELIER
                </div>
                <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight font-semibold">Data &amp; Manajemen Pelanggan</h1>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
                    Direktori calon pengantin, riwayat pemesanan seserahan, kontak WhatsApp, dan preferensi layanan atelier.
                </p>
            </div>
            <div class="flex flex-wrap items-center gap-space-sm">
                <button class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-surface-container text-secondary font-title-md text-title-md hover:bg-surface-container-high transition-all shadow-sm cursor-pointer" onclick="exportCustomerData()" type="button">
                    <span class="material-symbols-outlined text-[19px]">download</span>
                    <span>Export Data Pelanggan</span>
                </button>
                <button class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-primary text-on-primary font-title-md text-title-md hover:bg-surface-tint shadow-md transition-all cursor-pointer" onclick="openAddCustomerModal()" type="button">
                    <span class="material-symbols-outlined text-[20px]">person_add</span>
                    <span>+ Tambah Pelanggan Baru</span>
                </button>
            </div>
        </div>

        <!-- Metrics Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-space-md mb-space-lg">
            <!-- Metric 1: Total Pelanggan -->
            <div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between relative overflow-hidden border border-outline-variant/20">
                <div class="flex items-center justify-between">
                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Total Terdaftar</span>
                    <div class="w-9 h-9 rounded-full bg-surface-container flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-[20px]">groups</span>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="font-metric-display text-metric-display text-on-surface font-semibold">148</div>
                    <div class="font-title-md text-title-md text-secondary mt-0.5">Calon Pengantin</div>
                </div>
                <div class="mt-3 pt-3 flex items-center gap-2 text-on-surface-variant font-body-md text-body-md bg-surface-container-low px-2.5 py-1.5 rounded-lg border border-outline-variant/10">
                    <span class="material-symbols-outlined text-[16px] text-primary">verified</span>
                    <span>Akun studio terarsip &amp; aktif</span>
                </div>
            </div>

            <!-- Metric 2: Pesanan Aktif -->
            <div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between relative overflow-hidden border border-outline-variant/20">
                <div class="flex items-center justify-between">
                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Pesanan Aktif</span>
                    <div class="w-9 h-9 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container">
                        <span class="material-symbols-outlined text-[20px]">shopping_basket</span>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="font-metric-display text-metric-display text-on-surface font-semibold">36</div>
                    <div class="font-title-md text-title-md text-on-secondary-container mt-0.5 font-semibold">Sedang Berjalan</div>
                </div>
                <div class="mt-3 pt-3 flex items-center gap-2 text-on-surface-variant font-body-md text-body-md bg-surface-container-low px-2.5 py-1.5 rounded-lg border border-outline-variant/10">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                    </span>
                    <span>Tahap dekor &amp; booking tray</span>
                </div>
            </div>

            <!-- Metric 3: WhatsApp Valid -->
            <div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between relative overflow-hidden border border-outline-variant/20">
                <div class="flex items-center justify-between">
                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">WhatsApp Gateway</span>
                    <div class="w-9 h-9 rounded-full bg-[#e8f5ec] flex items-center justify-center text-[#2d7a4d]">
                        <span class="material-symbols-outlined text-[20px]">chat</span>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="font-metric-display text-metric-display text-on-surface font-semibold">100%</div>
                    <div class="font-title-md text-title-md text-secondary mt-0.5">Kontak Terverifikasi</div>
                </div>
                <div class="mt-3 pt-3 flex items-center gap-2 font-body-md text-body-md bg-surface-container-low px-2.5 py-1.5 rounded-lg text-secondary border border-outline-variant/10">
                    <span class="material-symbols-outlined text-[16px] text-[#2d7a4d]">phonelink_ring</span>
                    <span>Terhubung ke notifikasi otomatis</span>
                </div>
            </div>

            <!-- Metric 4: Rata-rata Belanja -->
            <div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between relative overflow-hidden border border-outline-variant/20">
                <div class="flex items-center justify-between">
                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Rata-rata Order</span>
                    <div class="w-9 h-9 rounded-full bg-surface-container flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-[20px]">payments</span>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="font-metric-display text-metric-display text-on-surface font-semibold">Rp 2,45 jt</div>
                    <div class="font-title-md text-title-md text-secondary mt-0.5">Nilai per Pengantin</div>
                </div>
                <div class="mt-3 pt-3 flex items-center gap-2 text-on-surface-variant font-body-md text-body-md bg-surface-container-low px-2.5 py-1.5 rounded-lg border border-outline-variant/10">
                    <span class="material-symbols-outlined text-[16px] text-primary">trending_up</span>
                    <span>+14.2% vs periode Q1 2025</span>
                </div>
            </div>
        </div>

        <!-- Interactive Filter & Search Bar -->
        <div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm mb-space-md border border-outline-variant/20">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-space-sm items-center">
                <!-- Search Input -->
                <div class="md:col-span-5 relative">
                    <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-secondary text-[20px]">search</span>
                    <input class="w-full pl-10 pr-4 py-2.5 rounded-lg bg-surface-container text-on-surface placeholder:text-on-surface-variant font-body-md text-body-md focus:outline-none focus:bg-surface-container-high transition-all border border-outline-variant/20" id="searchInput" placeholder="Cari nama pengantin, nomor WhatsApp, atau kota domisili..." type="text">
                </div>

                <!-- Filter Status Aktivitas -->
                <div class="md:col-span-4 flex items-center gap-1.5 bg-surface-container-low p-1 rounded-lg overflow-x-auto border border-outline-variant/20">
                    <button class="filter-tab px-3 py-1.5 rounded-md font-label-md text-label-md bg-surface-container-lowest text-primary shadow-xs whitespace-nowrap font-semibold cursor-pointer" onclick="setCustomerFilter('all', this)" type="button">Semua (148)</button>
                    <button class="filter-tab px-3 py-1.5 rounded-md font-label-md text-label-md text-on-surface-variant hover:text-on-surface whitespace-nowrap cursor-pointer" onclick="setCustomerFilter('active', this)" type="button">Pesanan Aktif (36)</button>
                    <button class="filter-tab px-3 py-1.5 rounded-md font-label-md text-label-md text-on-surface-variant hover:text-on-surface whitespace-nowrap cursor-pointer" onclick="setCustomerFilter('completed', this)" type="button">Selesai / Arsip (112)</button>
                </div>

                <!-- Sort Control -->
                <div class="md:col-span-3 flex items-center justify-end gap-2">
                    <label class="font-label-sm text-label-sm text-secondary uppercase whitespace-nowrap font-semibold" for="sortSelect">Urutkan:</label>
                    <div class="relative w-full max-w-[200px]">
                        <select class="w-full appearance-none pl-3 pr-8 py-2 rounded-lg bg-surface-container font-body-md text-body-md text-on-surface focus:outline-none cursor-pointer border border-outline-variant/20" id="sortSelect" onchange="applySorting()">
                            <option value="recent">Pesanan Terbaru</option>
                            <option value="orders">Pesanan Terbanyak</option>
                            <option value="az">Abjad A - Z</option>
                            <option value="spending">Akumulasi Tertinggi</option>
                        </select>
                        <span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-secondary pointer-events-none text-[18px]">expand_more</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Customer Table Container -->
        <div class="rounded-xl bg-surface-container-lowest shadow-sm overflow-hidden mb-space-xl border border-outline-variant/20">
            <div class="overflow-x-auto">
                <table class="w-full text-left" id="customerTable">
                    <thead>
                        <tr class="bg-surface-container-low text-secondary font-label-sm text-label-sm uppercase tracking-wider font-semibold border-b border-surface-container-high/60">
                            <th class="py-3.5 px-space-md">Pelanggan</th>
                            <th class="py-3.5 px-space-md">Kontak WhatsApp &amp; Email</th>
                            <th class="py-3.5 px-space-md">Alamat / Wilayah</th>
                            <th class="py-3.5 px-space-md text-center">Jml Order</th>
                            <th class="py-3.5 px-space-md">Riwayat Pesanan Terakhir</th>
                            <th class="py-3.5 px-space-md text-right">Total Transaksi</th>
                            <th class="py-3.5 px-space-md text-center">Status</th>
                            <th class="py-3.5 px-space-md text-center">Aksi Cepat</th>
                        </tr>
                    </thead>
                    <tbody class="text-on-surface font-body-md text-body-md divide-y divide-surface-container">
                        <!-- Row 1: Dinda Tri Permata -->
                        <tr class="hover:bg-surface-container-low/60 transition-colors customer-row" data-city="Kebayoran Baru, Jakarta Selatan" data-name="Dinda Tri Permata" data-orders="2" data-phone="081289342201" data-status="active" data-total="4250000">
                            <td class="py-4 px-space-md">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center font-title-md text-title-md font-semibold flex-shrink-0">
                                        DT
                                    </div>
                                    <div>
                                        <div class="font-title-md text-title-md text-on-surface font-medium flex items-center gap-1.5">
                                            <span>Dinda Tri Permata</span>
                                            <span class="w-2 h-2 rounded-full bg-primary" title="Mempelai Wanita"></span>
                                        </div>
                                        <div class="flex items-center gap-1 text-secondary font-label-sm text-label-sm mt-0.5">
                                            <span class="material-symbols-outlined text-[14px]">alternate_email</span>
                                            <span>@dindaprmt</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-space-md">
                                <div class="flex flex-col gap-1">
                                    <div class="flex items-center gap-2">
                                        <span class="font-title-md text-title-md text-on-surface font-semibold">0812-8934-2201</span>
                                        <span class="inline-flex items-center gap-0.5 px-1.5 py-0.5 rounded-full bg-[#e8f5ec] text-[#2d7a4d] font-label-sm text-[10px] font-bold">
                                            <span class="material-symbols-outlined text-[12px]">verified</span> WA
                                        </span>
                                    </div>
                                    <span class="text-on-surface-variant font-label-sm text-label-sm">dinda.permata@gmail.com</span>
                                </div>
                            </td>
                            <td class="py-4 px-space-md">
                                <div class="text-on-surface font-medium">Jakarta Selatan</div>
                                <div class="text-on-surface-variant font-label-sm text-label-sm truncate max-w-[160px]" title="Jl. Wijaya Timur II No. 14, Melawai, Kebayoran Baru">Jl. Wijaya Timur II No. 14</div>
                            </td>
                            <td class="py-4 px-space-md text-center">
                                <span class="inline-flex items-center justify-center px-2.5 py-1 rounded-full bg-surface-container font-title-md text-title-md font-semibold text-primary">
                                    2 Pesanan
                                </span>
                            </td>
                            <td class="py-4 px-space-md">
                                <div>
                                    <div class="font-title-md text-title-md text-on-surface font-semibold flex items-center gap-1.5">
                                        <span class="text-primary">#ORD-2025-089</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">• 24 Mei 2025</span>
                                    </div>
                                    <div class="text-secondary font-label-sm text-label-sm mt-0.5">Paket 8 Kotak Velvet Gold &amp; Mahar Rustic Glass</div>
                                </div>
                            </td>
                            <td class="py-4 px-space-md text-right font-title-md text-title-md font-semibold text-on-surface">
                                Rp 4.250.000
                            </td>
                            <td class="py-4 px-space-md text-center">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#fdf8ee] text-[#7a5826] font-label-sm text-label-sm font-semibold tracking-wide border border-[#7a5826]/20">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#7a5826] animate-pulse"></span>
                                    Pesanan Aktif
                                </span>
                            </td>
                            <td class="py-4 px-space-md text-center">
                                <div class="flex items-center justify-center gap-1.5">
                                    <a class="p-2 rounded-lg bg-[#e8f5ec] text-[#2d7a4d] hover:bg-[#d5ebd9] transition-colors" href="https://wa.me/6281289342201?text=Halo%20Kak%20Dinda%2C%20kami%20dari%20Cattaleya%20Seserahan..." target="_blank" title="Kirim WhatsApp Langsung">
                                        <span class="material-symbols-outlined text-[18px]">chat</span>
                                    </a>
                                    <button class="px-2.5 py-1.5 rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors font-title-md text-title-md flex items-center gap-1 cursor-pointer" onclick="openCustomerDrawer('dinda')" title="Buka Profil Lengkap" type="button">
                                        <span>Detail</span>
                                        <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 2: Muhammad Fahmi & Adis -->
                        <tr class="hover:bg-surface-container-low/60 transition-colors customer-row" data-city="Tangerang Selatan" data-name="Muhammad Fahmi" data-orders="1" data-phone="085718229940" data-status="active" data-total="2850000">
                            <td class="py-4 px-space-md">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-title-md text-title-md font-semibold flex-shrink-0">
                                        MF
                                    </div>
                                    <div>
                                        <div class="font-title-md text-title-md text-on-surface font-medium flex items-center gap-1.5">
                                            <span>Muhammad Fahmi</span>
                                            <span class="w-2 h-2 rounded-full bg-secondary" title="Mempelai Pria"></span>
                                        </div>
                                        <div class="flex items-center gap-1 text-secondary font-label-sm text-label-sm mt-0.5">
                                            <span class="material-symbols-outlined text-[14px]">alternate_email</span>
                                            <span>@fahmi_alatas</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-space-md">
                                <div class="flex flex-col gap-1">
                                    <div class="flex items-center gap-2">
                                        <span class="font-title-md text-title-md text-on-surface font-semibold">0857-1822-9940</span>
                                        <span class="inline-flex items-center gap-0.5 px-1.5 py-0.5 rounded-full bg-[#e8f5ec] text-[#2d7a4d] font-label-sm text-[10px] font-bold">
                                            <span class="material-symbols-outlined text-[12px]">verified</span> WA
                                        </span>
                                    </div>
                                    <span class="text-on-surface-variant font-label-sm text-label-sm">m.fahmi94@yahoo.co.id</span>
                                </div>
                            </td>
                            <td class="py-4 px-space-md">
                                <div class="text-on-surface font-medium">Tangerang Selatan</div>
                                <div class="text-on-surface-variant font-label-sm text-label-sm truncate max-w-[160px]" title="Cluster Foresta Woodlake Blok B3 No. 8, BSD City">Foresta Woodlake B3/8 BSD</div>
                            </td>
                            <td class="py-4 px-space-md text-center">
                                <span class="inline-flex items-center justify-center px-2.5 py-1 rounded-full bg-surface-container font-title-md text-title-md font-semibold text-primary">
                                    1 Pesanan
                                </span>
                            </td>
                            <td class="py-4 px-space-md">
                                <div>
                                    <div class="font-title-md text-title-md text-on-surface font-semibold flex items-center gap-1.5">
                                        <span class="text-primary">#ORD-2025-095</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">• 07 Jun 2025</span>
                                    </div>
                                    <div class="text-secondary font-label-sm text-label-sm mt-0.5">Sewa 6 Kotak Akrilik White Champagne</div>
                                </div>
                            </td>
                            <td class="py-4 px-space-md text-right font-title-md text-title-md font-semibold text-on-surface">
                                Rp 2.850.000
                            </td>
                            <td class="py-4 px-space-md text-center">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#fdf8ee] text-[#7a5826] font-label-sm text-label-sm font-semibold tracking-wide border border-[#7a5826]/20">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#7a5826] animate-pulse"></span>
                                    Pesanan Aktif
                                </span>
                            </td>
                            <td class="py-4 px-space-md text-center">
                                <div class="flex items-center justify-center gap-1.5">
                                    <a class="p-2 rounded-lg bg-[#e8f5ec] text-[#2d7a4d] hover:bg-[#d5ebd9] transition-colors" href="https://wa.me/6285718229940?text=Halo%20Mas%20Fahmi%2C%20tim%20Cattaleya%20ingin%20konfirmasi..." target="_blank" title="Kirim WhatsApp Langsung">
                                        <span class="material-symbols-outlined text-[18px]">chat</span>
                                    </a>
                                    <button class="px-2.5 py-1.5 rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors font-title-md text-title-md flex items-center gap-1 cursor-pointer" onclick="openCustomerDrawer('fahmi')" title="Buka Profil Lengkap" type="button">
                                        <span>Detail</span>
                                        <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 3: Raisa Shafira -->
                        <tr class="hover:bg-surface-container-low/60 transition-colors customer-row" data-city="Bandung Kota" data-name="Raisa Shafira" data-orders="3" data-phone="081390445672" data-status="completed" data-total="6800000">
                            <td class="py-4 px-space-md">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-secondary-fixed text-on-secondary-fixed flex items-center justify-center font-title-md text-title-md font-semibold flex-shrink-0">
                                        RS
                                    </div>
                                    <div>
                                        <div class="font-title-md text-title-md text-on-surface font-medium flex items-center gap-1.5">
                                            <span>Raisa Shafira</span>
                                        </div>
                                        <div class="flex items-center gap-1 text-secondary font-label-sm text-label-sm mt-0.5">
                                            <span class="material-symbols-outlined text-[14px]">alternate_email</span>
                                            <span>@shafiraraisa</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-space-md">
                                <div class="flex flex-col gap-1">
                                    <div class="flex items-center gap-2">
                                        <span class="font-title-md text-title-md text-on-surface font-semibold">0813-9044-5672</span>
                                        <span class="inline-flex items-center gap-0.5 px-1.5 py-0.5 rounded-full bg-[#e8f5ec] text-[#2d7a4d] font-label-sm text-[10px] font-bold">
                                            <span class="material-symbols-outlined text-[12px]">verified</span> WA
                                        </span>
                                    </div>
                                    <span class="text-on-surface-variant font-label-sm text-label-sm">raisa.shafira@outlook.com</span>
                                </div>
                            </td>
                            <td class="py-4 px-space-md">
                                <div class="text-on-surface font-medium">Bandung</div>
                                <div class="text-on-surface-variant font-label-sm text-label-sm truncate max-w-[160px]" title="Jl. Dago Asri No. 22, Coblong, Kota Bandung">Jl. Dago Asri No. 22</div>
                            </td>
                            <td class="py-4 px-space-md text-center">
                                <span class="inline-flex items-center justify-center px-2.5 py-1 rounded-full bg-surface-container font-title-md text-title-md font-semibold text-primary">
                                    3 Pesanan
                                </span>
                            </td>
                            <td class="py-4 px-space-md">
                                <div>
                                    <div class="font-title-md text-title-md text-on-surface font-semibold flex items-center gap-1.5">
                                        <span class="text-secondary font-semibold">#ORD-2025-042</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">• 18 Apr 2025</span>
                                    </div>
                                    <div class="text-secondary font-label-sm text-label-sm mt-0.5">Custom Mahar Frame Terrarium &amp; 10 Tray Hantaran</div>
                                </div>
                            </td>
                            <td class="py-4 px-space-md text-right font-title-md text-title-md font-semibold text-on-surface">
                                Rp 6.800.000
                            </td>
                            <td class="py-4 px-space-md text-center">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#eff3ee] text-[#344837] font-label-sm text-label-sm font-semibold tracking-wide border border-[#4f6a54]/20">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#4f6a54]"></span>
                                    Selesai
                                </span>
                            </td>
                            <td class="py-4 px-space-md text-center">
                                <div class="flex items-center justify-center gap-1.5">
                                    <a class="p-2 rounded-lg bg-[#e8f5ec] text-[#2d7a4d] hover:bg-[#d5ebd9] transition-colors" href="https://wa.me/6281390445672?text=Halo%20Kak%20Raisa%2C%20terima%20kasih%20telah%20mempercayakan..." target="_blank" title="Kirim WhatsApp Langsung">
                                        <span class="material-symbols-outlined text-[18px]">chat</span>
                                    </a>
                                    <button class="px-2.5 py-1.5 rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors font-title-md text-title-md flex items-center gap-1 cursor-pointer" onclick="openCustomerDrawer('raisa')" title="Buka Profil Lengkap" type="button">
                                        <span>Detail</span>
                                        <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 4: Belinda Clara -->
                        <tr class="hover:bg-surface-container-low/60 transition-colors customer-row" data-city="Jakarta Barat" data-name="Belinda Clara" data-orders="1" data-phone="082144771098" data-status="active" data-total="1950000">
                            <td class="py-4 px-space-md">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-tertiary-fixed text-on-tertiary-fixed flex items-center justify-center font-title-md text-title-md font-semibold flex-shrink-0">
                                        BC
                                    </div>
                                    <div>
                                        <div class="font-title-md text-title-md text-on-surface font-medium flex items-center gap-1.5">
                                            <span>Belinda Clara</span>
                                        </div>
                                        <div class="flex items-center gap-1 text-secondary font-label-sm text-label-sm mt-0.5">
                                            <span class="material-symbols-outlined text-[14px]">alternate_email</span>
                                            <span>@belindaclara_</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-space-md">
                                <div class="flex flex-col gap-1">
                                    <div class="flex items-center gap-2">
                                        <span class="font-title-md text-title-md text-on-surface font-semibold">0821-4477-1098</span>
                                        <span class="inline-flex items-center gap-0.5 px-1.5 py-0.5 rounded-full bg-[#e8f5ec] text-[#2d7a4d] font-label-sm text-[10px] font-bold">
                                            <span class="material-symbols-outlined text-[12px]">verified</span> WA
                                        </span>
                                    </div>
                                    <span class="text-on-surface-variant font-label-sm text-label-sm">belinda.clara@gmail.com</span>
                                </div>
                            </td>
                            <td class="py-4 px-space-md">
                                <div class="text-on-surface font-medium">Jakarta Barat</div>
                                <div class="text-on-surface-variant font-label-sm text-label-sm truncate max-w-[160px]" title="Puri Indah Residence Blok C8, Kembangan">Puri Indah Residence C8</div>
                            </td>
                            <td class="py-4 px-space-md text-center">
                                <span class="inline-flex items-center justify-center px-2.5 py-1 rounded-full bg-surface-container font-title-md text-title-md font-semibold text-primary">
                                    1 Pesanan
                                </span>
                            </td>
                            <td class="py-4 px-space-md">
                                <div>
                                    <div class="font-title-md text-title-md text-on-surface font-semibold flex items-center gap-1.5">
                                        <span class="text-primary">#ORD-2025-104</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">• 14 Jun 2025</span>
                                    </div>
                                    <div class="text-secondary font-label-sm text-label-sm mt-0.5">Sewa 6 Kotak Wood Vintage &amp; Bunga Segar White Lily</div>
                                </div>
                            </td>
                            <td class="py-4 px-space-md text-right font-title-md text-title-md font-semibold text-on-surface">
                                Rp 1.950.000
                            </td>
                            <td class="py-4 px-space-md text-center">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#fdf8ee] text-[#7a5826] font-label-sm text-label-sm font-semibold tracking-wide border border-[#7a5826]/20">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#7a5826] animate-pulse"></span>
                                    Pesanan Aktif
                                </span>
                            </td>
                            <td class="py-4 px-space-md text-center">
                                <div class="flex items-center justify-center gap-1.5">
                                    <a class="p-2 rounded-lg bg-[#e8f5ec] text-[#2d7a4d] hover:bg-[#d5ebd9] transition-colors" href="https://wa.me/6282144771098?text=Halo%20Kak%20Belinda%2C%20terkait%20pesanan%20kotak%20seserahan..." target="_blank" title="Kirim WhatsApp Langsung">
                                        <span class="material-symbols-outlined text-[18px]">chat</span>
                                    </a>
                                    <button class="px-2.5 py-1.5 rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors font-title-md text-title-md flex items-center gap-1 cursor-pointer" onclick="openCustomerDrawer('belinda')" title="Buka Profil Lengkap" type="button">
                                        <span>Detail</span>
                                        <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 5: Arya Dananjaya -->
                        <tr class="hover:bg-surface-container-low/60 transition-colors customer-row" data-city="Bekasi Selatan" data-name="Arya Dananjaya" data-orders="2" data-phone="081122883391" data-status="completed" data-total="3600000">
                            <td class="py-4 px-space-md">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-surface-container-high text-primary flex items-center justify-center font-title-md text-title-md font-semibold flex-shrink-0">
                                        AD
                                    </div>
                                    <div>
                                        <div class="font-title-md text-title-md text-on-surface font-medium flex items-center gap-1.5">
                                            <span>Arya Dananjaya</span>
                                        </div>
                                        <div class="flex items-center gap-1 text-secondary font-label-sm text-label-sm mt-0.5">
                                            <span class="material-symbols-outlined text-[14px]">alternate_email</span>
                                            <span>@aryadnan</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-space-md">
                                <div class="flex flex-col gap-1">
                                    <div class="flex items-center gap-2">
                                        <span class="font-title-md text-title-md text-on-surface font-semibold">0811-2288-3391</span>
                                        <span class="inline-flex items-center gap-0.5 px-1.5 py-0.5 rounded-full bg-[#e8f5ec] text-[#2d7a4d] font-label-sm text-[10px] font-bold">
                                            <span class="material-symbols-outlined text-[12px]">verified</span> WA
                                        </span>
                                    </div>
                                    <span class="text-on-surface-variant font-label-sm text-label-sm">arya.danan@corporate.co.id</span>
                                </div>
                            </td>
                            <td class="py-4 px-space-md">
                                <div class="text-on-surface font-medium">Kota Bekasi</div>
                                <div class="text-on-surface-variant font-label-sm text-label-sm truncate max-w-[160px]" title="Grand Galaxy City, Rukan Boulevard Selatan">Grand Galaxy City Blok RG</div>
                            </td>
                            <td class="py-4 px-space-md text-center">
                                <span class="inline-flex items-center justify-center px-2.5 py-1 rounded-full bg-surface-container font-title-md text-title-md font-semibold text-primary">
                                    2 Pesanan
                                </span>
                            </td>
                            <td class="py-4 px-space-md">
                                <div>
                                    <div class="font-title-md text-title-md text-on-surface font-semibold flex items-center gap-1.5">
                                        <span class="text-secondary font-semibold">#ORD-2025-019</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">• 02 Feb 2025</span>
                                    </div>
                                    <div class="text-secondary font-label-sm text-label-sm mt-0.5">Paket Mahar Emas Antam &amp; 7 Kotak Hantaran Kayu</div>
                                </div>
                            </td>
                            <td class="py-4 px-space-md text-right font-title-md text-title-md font-semibold text-on-surface">
                                Rp 3.600.000
                            </td>
                            <td class="py-4 px-space-md text-center">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#eff3ee] text-[#344837] font-label-sm text-label-sm font-semibold tracking-wide border border-[#4f6a54]/20">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#4f6a54]"></span>
                                    Selesai
                                </span>
                            </td>
                            <td class="py-4 px-space-md text-center">
                                <div class="flex items-center justify-center gap-1.5">
                                    <a class="p-2 rounded-lg bg-[#e8f5ec] text-[#2d7a4d] hover:bg-[#d5ebd9] transition-colors" href="https://wa.me/6281122883391?text=Halo%20Pak%20Arya%2C%20salam%20hangat%20dari%20Cattaleya..." target="_blank" title="Kirim WhatsApp Langsung">
                                        <span class="material-symbols-outlined text-[18px]">chat</span>
                                    </a>
                                    <button class="px-2.5 py-1.5 rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors font-title-md text-title-md flex items-center gap-1 cursor-pointer" onclick="openCustomerDrawer('arya')" title="Buka Profil Lengkap" type="button">
                                        <span>Detail</span>
                                        <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Table Footer / Pagination -->
            <div class="px-space-md py-3.5 bg-surface-container-low flex flex-col sm:flex-row items-center justify-between gap-3 font-body-md text-body-md text-on-surface-variant border-t border-surface-container-high/60">
                <div>
                    Menampilkan <span class="font-semibold text-on-surface font-title-md">1 - 5</span> dari <span class="font-semibold text-on-surface font-title-md">148</span> calon pengantin
                </div>
                <div class="flex items-center gap-1">
                    <button class="p-1.5 rounded-lg bg-surface-container text-secondary hover:bg-surface-container-high transition-colors disabled:opacity-40 cursor-pointer" disabled="" type="button">
                        <span class="material-symbols-outlined text-[18px]">chevron_left</span>
                    </button>
                    <button class="px-3 py-1 rounded-lg bg-primary text-on-primary font-semibold font-title-md text-title-md shadow-xs cursor-pointer" type="button">1</button>
                    <button class="px-3 py-1 rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors font-title-md text-title-md cursor-pointer" type="button">2</button>
                    <button class="px-3 py-1 rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors font-title-md text-title-md cursor-pointer" type="button">3</button>
                    <span class="px-1 text-secondary">...</span>
                    <button class="px-3 py-1 rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors font-title-md text-title-md cursor-pointer" type="button">30</button>
                    <button class="p-1.5 rounded-lg bg-surface-container text-secondary hover:bg-surface-container-high transition-colors cursor-pointer" type="button">
                        <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Curated Atelier Insight Mosaic Banner -->
        <div class="p-space-lg rounded-xl bg-gradient-to-r from-surface-container to-surface-container-low shadow-sm flex flex-col md:flex-row items-center justify-between gap-space-md border border-outline-variant/30">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 rounded-2xl bg-primary text-on-primary flex items-center justify-center flex-shrink-0 shadow-md">
                    <span class="material-symbols-outlined text-[28px]">mark_chat_unread</span>
                </div>
                <div>
                    <h4 class="font-headline-md text-headline-md text-on-surface font-semibold">Otomatisasi Pengingat Fitting &amp; Pengembalian Kotak</h4>
                    <p class="font-body-md text-body-md text-on-surface-variant mt-0.5">
                        Sistem otomatis mengirim pengingat H-3 jadwal drop-off barang seserahan dan H+2 pengembalian kotak via WhatsApp resmi.
                    </p>
                </div>
            </div>
            <div class="flex items-center gap-3 flex-shrink-0">
                <button class="px-4 py-2 rounded-xl bg-surface-container-lowest text-primary font-title-md text-title-md hover:bg-surface-container-high transition-all shadow-xs cursor-pointer border border-outline-variant/20" onclick="showToast('Konfigurasi WhatsApp', 'Membuka pengaturan template pengingat otomatis drop-off & pengembalian kotak.')" type="button">
                    Kelola Pesan Otomatis
                </button>
            </div>
        </div>
    </div>
</div>

<!-- DETAIL DOSSIER DRAWER (Right Side Modal Inspection) -->
<div class="fixed inset-0 z-50 overflow-hidden pointer-events-none transition-all duration-300 opacity-0" id="customerDrawer">
    <!-- Backdrop Scrim -->
    <div class="absolute inset-0 bg-[#201b17]/40 backdrop-blur-xs transition-opacity duration-300" id="drawerScrim" onclick="closeCustomerDrawer()"></div>
    <div class="absolute inset-y-0 right-0 max-w-full flex pl-10">
        <div class="w-screen max-w-lg bg-surface-container-lowest shadow-2xl flex flex-col transform translate-x-full transition-transform duration-300 ease-out border-l border-outline-variant/30" id="drawerPanel">
            <!-- Drawer Header -->
            <div class="p-space-lg bg-surface-container-low flex items-start justify-between border-b border-surface-container-high/60">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-metric-display text-[20px] font-bold" id="drawerAvatar">
                        DT
                    </div>
                    <div>
                        <div class="flex items-center gap-2">
                            <h3 class="font-headline-md text-headline-md text-on-surface font-semibold" id="drawerName">Dinda Tri Permata</h3>
                            <span class="w-2 h-2 rounded-full bg-primary"></span>
                        </div>
                        <p class="font-label-sm text-label-sm text-secondary uppercase tracking-wider font-semibold" id="drawerRole">Calon Mempelai Wanita</p>
                    </div>
                </div>
                <button class="p-1.5 rounded-full text-secondary hover:bg-surface-container hover:text-on-surface transition-colors cursor-pointer" onclick="closeCustomerDrawer()" type="button">
                    <span class="material-symbols-outlined text-[22px]">close</span>
                </button>
            </div>

            <!-- Central Diamond Ornament Divider -->
            <div class="px-space-lg py-1 flex items-center justify-center text-primary/40 bg-surface-container-low/40">
                <span class="h-px bg-surface-container-high flex-1"></span>
                <span class="px-2 text-xs">◆</span>
                <span class="h-px bg-surface-container-high flex-1"></span>
            </div>

            <!-- Drawer Body (Scrollable) -->
            <div class="flex-1 overflow-y-auto p-space-lg space-y-space-md">
                <!-- Profile Quick Info Card -->
                <div class="p-space-md rounded-xl bg-surface-container-low space-y-3 border border-outline-variant/20">
                    <div class="flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-secondary font-semibold">Data Kontak Lengkap</span>
                        <span class="inline-flex items-center gap-1 text-[11px] px-2 py-0.5 rounded-full bg-[#e8f5ec] text-[#2d7a4d] font-bold">
                            <span class="material-symbols-outlined text-[13px]">verified</span> WhatsApp Terhubung
                        </span>
                    </div>
                    <div class="grid grid-cols-2 gap-2 text-on-surface font-body-md text-body-md pt-1">
                        <div>
                            <span class="block text-secondary font-label-sm text-label-sm font-semibold">Nomor Telepon / WA</span>
                            <span class="font-semibold text-primary font-title-md text-title-md" id="drawerPhone">0812-8934-2201</span>
                        </div>
                        <div>
                            <span class="block text-secondary font-label-sm text-label-sm font-semibold">Instagram Handle</span>
                            <span class="font-semibold text-on-surface" id="drawerInstagram">@dindaprmt</span>
                        </div>
                        <div class="col-span-2">
                            <span class="block text-secondary font-label-sm text-label-sm font-semibold">Email Aktif</span>
                            <span class="font-semibold text-on-surface" id="drawerEmail">dinda.permata@gmail.com</span>
                        </div>
                        <div class="col-span-2">
                            <span class="block text-secondary font-label-sm text-label-sm font-semibold">Alamat Lengkap Pengiriman / Penjemputan</span>
                            <span class="font-normal text-on-surface-variant text-body-md" id="drawerAddress">Jl. Wijaya Timur II No. 14, Melawai, Kebayoran Baru, Jakarta Selatan 12160</span>
                        </div>
                    </div>
                    <div class="pt-2 flex items-center gap-2">
                        <a class="flex-1 inline-flex items-center justify-center gap-2 py-2 rounded-lg bg-[#2d7a4d] text-white font-title-md text-title-md hover:bg-[#23633e] transition-colors shadow-xs" href="#" id="drawerWaBtn" target="_blank">
                            <span class="material-symbols-outlined text-[18px]">chat</span>
                            <span>Chat WhatsApp Sekarang</span>
                        </a>
                        <button class="p-2 rounded-lg bg-surface-container text-secondary hover:bg-surface-container-high transition-colors cursor-pointer" onclick="openEditCustomerFromDrawer()" title="Edit Data Kontak" type="button">
                            <span class="material-symbols-outlined text-[20px]">edit</span>
                        </button>
                    </div>
                </div>

                <!-- Order Summary Cards -->
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <h4 class="font-title-lg text-title-lg text-on-surface font-semibold">Riwayat Pesanan Seserahan &amp; Mahar</h4>
                        <span class="font-label-sm text-label-sm px-2.5 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-semibold" id="drawerOrderCount">2 Pesanan</span>
                    </div>

                    <!-- Dynamic Orders Container -->
                    <div class="space-y-3" id="drawerOrdersContainer">
                        <!-- List Item 1 -->
                        <div class="p-space-md rounded-xl bg-surface-container-low space-y-2 border border-outline-variant/20">
                            <div class="flex items-center justify-between">
                                <span class="font-title-md text-title-md font-semibold text-primary" id="drawerOrder1Id">#ORD-2025-089</span>
                                <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-[#fdf8ee] text-[#7a5826] font-label-sm text-label-sm font-semibold border border-[#7a5826]/20" id="drawerOrder1Status">
                                    Proses Dekorasi
                                </span>
                            </div>
                            <p class="font-body-md text-body-md text-on-surface font-medium" id="drawerOrder1Desc">Sewa 8 Kotak Velvet Gold &amp; Mahar Rustic Glass Geometric</p>
                            <div class="flex items-center justify-between text-secondary font-label-sm text-label-sm pt-1">
                                <span id="drawerOrder1Date">Tanggal Acara: 24 Mei 2025</span>
                                <span class="font-title-md text-title-md text-on-surface font-semibold" id="drawerOrder1Amount">Rp 3.500.000</span>
                            </div>
                            <div class="text-on-surface-variant font-label-sm text-label-sm bg-surface-container p-2 rounded-lg" id="drawerOrder1Note">
                                Catatan: Barang hantaran parfum, tas, skincare sudah diterima di studio. Tinggal perhiasan diserahkan H-2.
                            </div>
                        </div>

                        <!-- List Item 2 -->
                        <div class="p-space-md rounded-xl bg-surface-container-low space-y-2 border border-outline-variant/20" id="drawerOrder2Box">
                            <div class="flex items-center justify-between">
                                <span class="font-title-md text-title-md font-semibold text-secondary" id="drawerOrder2Id">#ORD-2024-118</span>
                                <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-[#eff3ee] text-[#344837] font-label-sm text-label-sm font-semibold border border-[#4f6a54]/20" id="drawerOrder2Status">
                                    Selesai
                                </span>
                            </div>
                            <p class="font-body-md text-body-md text-on-surface font-medium" id="drawerOrder2Desc">Paket Sangjit / Lamaran 4 Tray Akrilik Transparan</p>
                            <div class="flex items-center justify-between text-secondary font-label-sm text-label-sm pt-1">
                                <span id="drawerOrder2Date">Tanggal Acara: 15 Des 2024</span>
                                <span class="font-title-md text-title-md text-on-surface font-semibold" id="drawerOrder2Amount">Rp 750.000</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Spent Callout -->
                <div class="p-space-md rounded-xl bg-surface-container flex items-center justify-between border border-outline-variant/20">
                    <span class="font-title-md text-title-md text-secondary font-medium">Akumulasi Belanja Pelanggan</span>
                    <span class="font-headline-md text-headline-md text-primary font-bold" id="drawerTotal">Rp 4.250.000</span>
                </div>
            </div>

            <!-- Drawer Footer -->
            <div class="p-space-md bg-surface-container-low flex items-center justify-end gap-2 border-t border-surface-container-high/60">
                <button class="px-4 py-2 rounded-lg bg-surface-container text-secondary font-title-md text-title-md hover:bg-surface-container-high transition-colors cursor-pointer" onclick="closeCustomerDrawer()" type="button">
                    Tutup
                </button>
                <button class="px-4 py-2 rounded-lg bg-primary text-on-primary font-title-md text-title-md hover:bg-surface-tint transition-colors flex items-center gap-1.5 cursor-pointer shadow-xs" onclick="printCustomerDossier()" type="button">
                    <span class="material-symbols-outlined text-[18px]">picture_as_pdf</span>
                    <span>Cetak Dossier Klien</span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL TAMBAH PELANGGAN BARU -->
<div class="fixed inset-0 z-50 hidden items-center justify-center p-4 overflow-y-auto" id="addCustomerModal">
    <!-- Backdrop Scrim -->
    <div class="fixed inset-0 bg-[#201b17]/50 backdrop-blur-xs" onclick="closeAddCustomerModal()"></div>
    <div class="relative w-full max-w-xl rounded-2xl bg-surface-container-lowest shadow-2xl p-space-lg overflow-hidden my-8 z-10 border border-outline-variant/30 animate-in fade-in zoom-in-95 duration-150">
        <div class="flex items-start justify-between pb-space-sm mb-space-sm border-b border-surface-container">
            <div>
                <span class="font-label-sm text-label-sm text-secondary uppercase tracking-widest font-semibold">Registrasi Atelier</span>
                <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Tambah Pelanggan Baru</h3>
                <p class="font-body-md text-body-md text-on-surface-variant">Daftarkan data calon pengantin untuk pencatatan pesanan mahar &amp; seserahan.</p>
            </div>
            <button class="p-1.5 rounded-full text-secondary hover:bg-surface-container hover:text-on-surface cursor-pointer" onclick="closeAddCustomerModal()" type="button">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        <form class="space-y-4" id="addCustomerForm" onsubmit="handleCustomerSubmit(event)">
            <div>
                <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Nama Lengkap Calon Pengantin *</label>
                <input class="w-full px-3.5 py-2.5 rounded-lg bg-surface-container text-on-surface placeholder:text-on-surface-variant font-body-md text-body-md focus:outline-none focus:bg-surface-container-high border border-outline-variant/20" id="newCustomerName" placeholder="Contoh: Anindya Larasati" required="" type="text">
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm">
                <div>
                    <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Nomor WhatsApp *</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-secondary text-[18px]">chat</span>
                        <input class="w-full pl-9 pr-3.5 py-2.5 rounded-lg bg-surface-container text-on-surface placeholder:text-on-surface-variant font-body-md text-body-md focus:outline-none focus:bg-surface-container-high border border-outline-variant/20" id="newCustomerPhone" placeholder="Contoh: 081234567890" required="" type="tel">
                    </div>
                </div>
                <div>
                    <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Akun Instagram (Opsional)</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-secondary text-[18px]">alternate_email</span>
                        <input class="w-full pl-9 pr-3.5 py-2.5 rounded-lg bg-surface-container text-on-surface placeholder:text-on-surface-variant font-body-md text-body-md focus:outline-none focus:bg-surface-container-high border border-outline-variant/20" id="newCustomerIg" placeholder="username_tanpa_at" type="text">
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm">
                <div>
                    <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Alamat Email</label>
                    <input class="w-full px-3.5 py-2.5 rounded-lg bg-surface-container text-on-surface placeholder:text-on-surface-variant font-body-md text-body-md focus:outline-none focus:bg-surface-container-high border border-outline-variant/20" id="newCustomerEmail" placeholder="nama@email.com" type="email">
                </div>
                <div>
                    <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Kota Domisili</label>
                    <input class="w-full px-3.5 py-2.5 rounded-lg bg-surface-container text-on-surface placeholder:text-on-surface-variant font-body-md text-body-md focus:outline-none focus:bg-surface-container-high border border-outline-variant/20" id="newCustomerCity" placeholder="Contoh: Jakarta Selatan" type="text">
                </div>
            </div>
            <div>
                <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Alamat Lengkap (Untuk Penjemputan / Pengantaran Box)</label>
                <textarea class="w-full px-3.5 py-2.5 rounded-lg bg-surface-container text-on-surface placeholder:text-on-surface-variant font-body-md text-body-md focus:outline-none focus:bg-surface-container-high resize-none border border-outline-variant/20" id="newCustomerAddress" placeholder="Nama jalan, nomor rumah, RT/RW, kelurahan, kecamatan..." rows="2"></textarea>
            </div>
            <div>
                <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Catatan Tambahan &amp; Preferensi Gaya Mahar</label>
                <input class="w-full px-3.5 py-2.5 rounded-lg bg-surface-container text-on-surface placeholder:text-on-surface-variant font-body-md text-body-md focus:outline-none focus:bg-surface-container-high border border-outline-variant/20" id="newCustomerNote" placeholder="Contoh: Suka warna sage green, bunga edelweis &amp; mawar putih" type="text">
            </div>
            <div class="pt-space-sm flex items-center justify-end gap-2 border-t border-surface-container">
                <button class="px-4 py-2.5 rounded-xl bg-surface-container text-secondary font-title-md text-title-md hover:bg-surface-container-high transition-colors cursor-pointer" onclick="closeAddCustomerModal()" type="button">
                    Batalkan
                </button>
                <button class="px-5 py-2.5 rounded-xl bg-primary text-on-primary font-title-md text-title-md hover:bg-surface-tint shadow-sm transition-all flex items-center gap-1.5 cursor-pointer" type="submit">
                    <span class="material-symbols-outlined text-[19px]">save</span>
                    <span>Simpan Pelanggan</span>
                </button>
            </div>
        </form>
    </div>
</div>

<!-- MODAL EDIT DATA KONTAK PELANGGAN -->
<div class="fixed inset-0 z-50 hidden items-center justify-center p-4 overflow-y-auto" id="editCustomerModal">
    <!-- Backdrop Scrim -->
    <div class="fixed inset-0 bg-[#201b17]/50 backdrop-blur-xs" onclick="closeEditCustomerModal()"></div>
    <div class="relative w-full max-w-lg rounded-2xl bg-surface-container-lowest shadow-2xl p-space-lg overflow-hidden my-8 z-10 border border-outline-variant/30 animate-in fade-in zoom-in-95 duration-150">
        <div class="flex items-start justify-between pb-space-sm mb-space-sm border-b border-surface-container">
            <div class="flex items-center gap-2">
                <div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-[20px]">edit</span>
                </div>
                <div>
                    <h3 class="font-headline-md text-headline-md text-on-surface font-semibold" id="editCustomerModalTitle">Edit Kontak Pelanggan</h3>
                    <p class="font-label-sm text-label-sm text-secondary">Perbarui nomor WhatsApp, alamat penjemputan, atau email.</p>
                </div>
            </div>
            <button class="p-1.5 rounded-full text-secondary hover:bg-surface-container hover:text-on-surface cursor-pointer" onclick="closeEditCustomerModal()" type="button">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        <form class="space-y-4" id="editCustomerForm" onsubmit="handleEditCustomerSubmit(event)">
            <input id="editCustomerIdHidden" type="hidden" value="">
            <div>
                <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Nama Pelanggan *</label>
                <input class="w-full px-3.5 py-2.5 rounded-lg bg-surface-container text-on-surface font-body-md text-body-md focus:outline-none focus:bg-surface-container-high border border-outline-variant/20" id="editCustomerNameInput" required="" type="text">
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm">
                <div>
                    <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Nomor WhatsApp *</label>
                    <input class="w-full px-3.5 py-2.5 rounded-lg bg-surface-container text-on-surface font-body-md text-body-md focus:outline-none focus:bg-surface-container-high border border-outline-variant/20" id="editCustomerPhoneInput" required="" type="tel">
                </div>
                <div>
                    <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Instagram</label>
                    <input class="w-full px-3.5 py-2.5 rounded-lg bg-surface-container text-on-surface font-body-md text-body-md focus:outline-none focus:bg-surface-container-high border border-outline-variant/20" id="editCustomerIgInput" type="text">
                </div>
            </div>
            <div>
                <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Email Aktif</label>
                <input class="w-full px-3.5 py-2.5 rounded-lg bg-surface-container text-on-surface font-body-md text-body-md focus:outline-none focus:bg-surface-container-high border border-outline-variant/20" id="editCustomerEmailInput" type="email">
            </div>
            <div>
                <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Alamat Penjemputan / Pengantaran</label>
                <textarea class="w-full px-3.5 py-2.5 rounded-lg bg-surface-container text-on-surface font-body-md text-body-md focus:outline-none focus:bg-surface-container-high resize-none border border-outline-variant/20" id="editCustomerAddressInput" rows="3"></textarea>
            </div>
            <div class="pt-space-sm flex items-center justify-end gap-2 border-t border-surface-container">
                <button class="px-4 py-2.5 rounded-xl bg-surface-container text-secondary font-title-md text-title-md hover:bg-surface-container-high transition-colors cursor-pointer" onclick="closeEditCustomerModal()" type="button">
                    Batalkan
                </button>
                <button class="px-5 py-2.5 rounded-xl bg-primary text-on-primary font-title-md text-title-md hover:bg-surface-tint shadow-sm transition-all flex items-center gap-1.5 cursor-pointer" type="submit">
                    <span class="material-symbols-outlined text-[19px]">save</span>
                    <span>Simpan Perubahan</span>
                </button>
            </div>
        </form>
    </div>
</div>

<!-- TOAST NOTIFICATION CONTAINER -->
<div class="fixed bottom-6 right-6 z-50 transform translate-y-24 opacity-0 transition-all duration-300 pointer-events-none" id="toastNotification">
    <div class="bg-surface-container-highest px-4 py-3 rounded-xl shadow-lg flex items-center gap-3 border border-outline-variant/30">
        <div class="w-8 h-8 rounded-full bg-[#2d7a4d] text-white flex items-center justify-center flex-shrink-0" id="toastIconBg">
            <span class="material-symbols-outlined text-[18px]">check</span>
        </div>
        <div>
            <p class="font-title-md text-title-md text-on-surface font-semibold" id="toastTitle">Berhasil</p>
            <p class="font-body-md text-body-md text-on-surface-variant" id="toastDesc">Data berhasil disimpan.</p>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Customer data store for drawer previews
    const customerDatabase = {
        dinda: {
            initials: 'DT',
            name: 'Dinda Tri Permata',
            role: 'Calon Mempelai Wanita',
            phone: '0812-8934-2201',
            cleanPhone: '6281289342201',
            instagram: '@dindaprmt',
            email: 'dinda.permata@gmail.com',
            address: 'Jl. Wijaya Timur II No. 14, Melawai, Kebayoran Baru, Jakarta Selatan 12160',
            orderCount: '2 Pesanan',
            totalSpent: 'Rp 4.250.000',
            activeOrder: {
                id: '#ORD-2025-089',
                status: 'Proses Dekorasi',
                desc: 'Sewa 8 Kotak Velvet Gold & Mahar Rustic Glass Geometric',
                date: 'Tanggal Acara: 24 Mei 2025',
                amount: 'Rp 3.500.000',
                note: 'Catatan: Barang hantaran parfum, tas, skincare sudah diterima di studio. Tinggal perhiasan diserahkan H-2.'
            },
            prevOrder: {
                id: '#ORD-2024-118',
                status: 'Selesai',
                desc: 'Paket Sangjit / Lamaran 4 Tray Akrilik Transparan',
                date: 'Tanggal Acara: 15 Des 2024',
                amount: 'Rp 750.000'
            }
        },
        fahmi: {
            initials: 'MF',
            name: 'Muhammad Fahmi',
            role: 'Calon Mempelai Pria',
            phone: '0857-1822-9940',
            cleanPhone: '6285718229940',
            instagram: '@fahmi_alatas',
            email: 'm.fahmi94@yahoo.co.id',
            address: 'Cluster Foresta Woodlake Blok B3 No. 8, BSD City, Tangerang Selatan',
            orderCount: '1 Pesanan',
            totalSpent: 'Rp 2.850.000',
            activeOrder: {
                id: '#ORD-2025-095',
                status: 'Proses Dekorasi',
                desc: 'Sewa 6 Kotak Akrilik White Champagne',
                date: 'Tanggal Acara: 07 Jun 2025',
                amount: 'Rp 2.850.000',
                note: 'Paket box premium mika tebal, bunga warna ivory rose & baby breath.'
            },
            prevOrder: null
        },
        raisa: {
            initials: 'RS',
            name: 'Raisa Shafira',
            role: 'Alumni Klien Atelier',
            phone: '0813-9044-5672',
            cleanPhone: '6281390445672',
            instagram: '@shafiraraisa',
            email: 'raisa.shafira@outlook.com',
            address: 'Jl. Dago Asri No. 22, Coblong, Kota Bandung 40135',
            orderCount: '3 Pesanan',
            totalSpent: 'Rp 6.800.000',
            activeOrder: {
                id: '#ORD-2025-042',
                status: 'Selesai',
                desc: 'Custom Mahar Frame Terrarium & 10 Tray Hantaran',
                date: 'Tanggal Acara: 18 Apr 2025',
                amount: 'Rp 4.200.000',
                note: 'Acara di Hotel Papandayan Bandung sukses terlaksana. Box dikembalikan lengkap.'
            },
            prevOrder: {
                id: '#ORD-2024-080',
                status: 'Selesai',
                desc: 'Sewa 8 Kotak Wood Vintage & Bunga Segar',
                date: 'Tanggal Acara: 10 Nov 2024',
                amount: 'Rp 2.600.000'
            }
        },
        belinda: {
            initials: 'BC',
            name: 'Belinda Clara',
            role: 'Calon Mempelai Wanita',
            phone: '0821-4477-1098',
            cleanPhone: '6282144771098',
            instagram: '@belindaclara_',
            email: 'belinda.clara@gmail.com',
            address: 'Puri Indah Residence Blok C8, Kembangan, Jakarta Barat',
            orderCount: '1 Pesanan',
            totalSpent: 'Rp 1.950.000',
            activeOrder: {
                id: '#ORD-2025-104',
                status: 'Menunggu Drop-off',
                desc: 'Sewa 6 Kotak Wood Vintage & Bunga Segar White Lily',
                date: 'Tanggal Acara: 14 Jun 2025',
                amount: 'Rp 1.950.000',
                note: 'Jadwal serah terima barang mahar ke studio direncanakan 10 Juni 2025.'
            },
            prevOrder: null
        },
        arya: {
            initials: 'AD',
            name: 'Arya Dananjaya',
            role: 'Alumni Klien Atelier',
            phone: '0811-2288-3391',
            cleanPhone: '6281122883391',
            instagram: '@aryadnan',
            email: 'arya.danan@corporate.co.id',
            address: 'Grand Galaxy City, Rukan Boulevard Selatan Blok RG No. 2, Bekasi',
            orderCount: '2 Pesanan',
            totalSpent: 'Rp 3.600.000',
            activeOrder: {
                id: '#ORD-2025-019',
                status: 'Selesai',
                desc: 'Paket Mahar Emas Antam & 7 Kotak Hantaran Kayu',
                date: 'Tanggal Acara: 02 Feb 2025',
                amount: 'Rp 2.400.000',
                note: 'Pelanggan puas, memberikan ulasan bintang 5 pada Google Review.'
            },
            prevOrder: {
                id: '#ORD-2024-055',
                status: 'Selesai',
                desc: 'Sewa 4 Kotak Akrilik Lamaran Minimalis',
                date: 'Tanggal Acara: 15 Agu 2024',
                amount: 'Rp 1.200.000'
            }
        }
    };

    let currentSelectedCustomerId = 'dinda';

    function showToast(title, desc, isSuccess = true) {
        const toast = document.getElementById('toastNotification');
        const toastTitle = document.getElementById('toastTitle');
        const toastDesc = document.getElementById('toastDesc');
        const toastIconBg = document.getElementById('toastIconBg');

        if (!toast || !toastTitle || !toastDesc || !toastIconBg) return;

        toastTitle.innerText = title;
        toastDesc.innerText = desc;
        
        if (isSuccess) {
            toastIconBg.className = 'w-8 h-8 rounded-full bg-[#2d7a4d] text-white flex items-center justify-center flex-shrink-0';
            toastIconBg.innerHTML = '<span class="material-symbols-outlined text-[18px]">check</span>';
        } else {
            toastIconBg.className = 'w-8 h-8 rounded-full bg-error text-white flex items-center justify-center flex-shrink-0';
            toastIconBg.innerHTML = '<span class="material-symbols-outlined text-[18px]">error</span>';
        }

        toast.classList.remove('translate-y-24', 'opacity-0', 'pointer-events-none');
        setTimeout(() => {
            toast.classList.add('translate-y-24', 'opacity-0', 'pointer-events-none');
        }, 3800);
    }

    // Open Drawer Function
    function openCustomerDrawer(id) {
        currentSelectedCustomerId = id;
        const data = customerDatabase[id];
        if (!data) return;

        document.getElementById('drawerAvatar').innerText = data.initials;
        document.getElementById('drawerName').innerText = data.name;
        document.getElementById('drawerRole').innerText = data.role;
        document.getElementById('drawerPhone').innerText = data.phone;
        document.getElementById('drawerInstagram').innerText = data.instagram;
        document.getElementById('drawerEmail').innerText = data.email;
        document.getElementById('drawerAddress').innerText = data.address;
        document.getElementById('drawerOrderCount').innerText = data.orderCount;
        document.getElementById('drawerTotal').innerText = data.totalSpent;
        document.getElementById('drawerWaBtn').href = `https://wa.me/${data.cleanPhone}?text=Halo%20Kak%20${encodeURIComponent(data.name)}%2C%20kami%20dari%20Cattaleya%20Seserahan...`;

        // Update active order item
        if (data.activeOrder) {
            document.getElementById('drawerOrder1Id').innerText = data.activeOrder.id;
            document.getElementById('drawerOrder1Status').innerText = data.activeOrder.status;
            document.getElementById('drawerOrder1Desc').innerText = data.activeOrder.desc;
            document.getElementById('drawerOrder1Date').innerText = data.activeOrder.date;
            document.getElementById('drawerOrder1Amount').innerText = data.activeOrder.amount;
            document.getElementById('drawerOrder1Note').innerText = data.activeOrder.note;
            document.getElementById('drawerOrder1Note').style.display = data.activeOrder.note ? 'block' : 'none';
        }

        // Update previous order item
        const order2Box = document.getElementById('drawerOrder2Box');
        if (data.prevOrder && order2Box) {
            order2Box.style.display = 'block';
            document.getElementById('drawerOrder2Id').innerText = data.prevOrder.id;
            document.getElementById('drawerOrder2Status').innerText = data.prevOrder.status;
            document.getElementById('drawerOrder2Desc').innerText = data.prevOrder.desc;
            document.getElementById('drawerOrder2Date').innerText = data.prevOrder.date;
            document.getElementById('drawerOrder2Amount').innerText = data.prevOrder.amount;
        } else if (order2Box) {
            order2Box.style.display = 'none';
        }

        const drawer = document.getElementById('customerDrawer');
        const panel = document.getElementById('drawerPanel');
        
        drawer.classList.remove('pointer-events-none', 'opacity-0');
        drawer.classList.add('pointer-events-auto', 'opacity-100');
        panel.classList.remove('translate-x-full');
        panel.classList.add('translate-x-0');
    }

    // Close Drawer Function
    function closeCustomerDrawer() {
        const drawer = document.getElementById('customerDrawer');
        const panel = document.getElementById('drawerPanel');
        
        panel.classList.remove('translate-x-0');
        panel.classList.add('translate-x-full');
        drawer.classList.remove('pointer-events-auto', 'opacity-100');
        drawer.classList.add('pointer-events-none', 'opacity-0');
    }

    // Modal Add Customer Controls
    function openAddCustomerModal() {
        const modal = document.getElementById('addCustomerModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    function closeAddCustomerModal() {
        const modal = document.getElementById('addCustomerModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

    function handleCustomerSubmit(e) {
        e.preventDefault();
        const name = document.getElementById('newCustomerName').value;
        const phone = document.getElementById('newCustomerPhone').value;
        closeAddCustomerModal();
        showToast('Pelanggan Ditambahkan', `Calon pengantin "${name}" (${phone}) berhasil didaftarkan ke direktori atelier.`);
    }

    // Modal Edit Customer
    function openEditCustomerFromDrawer() {
        const data = customerDatabase[currentSelectedCustomerId];
        if (!data) return;

        document.getElementById('editCustomerIdHidden').value = currentSelectedCustomerId;
        document.getElementById('editCustomerModalTitle').innerText = `Edit Kontak: ${data.name}`;
        document.getElementById('editCustomerNameInput').value = data.name;
        document.getElementById('editCustomerPhoneInput').value = data.phone;
        document.getElementById('editCustomerIgInput').value = data.instagram;
        document.getElementById('editCustomerEmailInput').value = data.email;
        document.getElementById('editCustomerAddressInput').value = data.address;

        const modal = document.getElementById('editCustomerModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    function closeEditCustomerModal() {
        const modal = document.getElementById('editCustomerModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

    function handleEditCustomerSubmit(e) {
        e.preventDefault();
        const id = document.getElementById('editCustomerIdHidden').value;
        const newName = document.getElementById('editCustomerNameInput').value;
        const newPhone = document.getElementById('editCustomerPhoneInput').value;
        const newIg = document.getElementById('editCustomerIgInput').value;
        const newEmail = document.getElementById('editCustomerEmailInput').value;
        const newAddress = document.getElementById('editCustomerAddressInput').value;

        if (customerDatabase[id]) {
            customerDatabase[id].name = newName;
            customerDatabase[id].phone = newPhone;
            customerDatabase[id].instagram = newIg;
            customerDatabase[id].email = newEmail;
            customerDatabase[id].address = newAddress;
            // update drawer if open
            document.getElementById('drawerName').innerText = newName;
            document.getElementById('drawerPhone').innerText = newPhone;
            document.getElementById('drawerInstagram').innerText = newIg;
            document.getElementById('drawerEmail').innerText = newEmail;
            document.getElementById('drawerAddress').innerText = newAddress;
        }

        closeEditCustomerModal();
        showToast('Kontak Diperbarui', `Informasi kontak "${newName}" berhasil disimpan.`);
    }

    function exportCustomerData() {
        showToast('Ekspor Data Dimulai', 'Mengekspor 148 Data Calon Pengantin ke format Excel (.xlsx) dengan kontak terenkripsi.');
    }

    function printCustomerDossier() {
        showToast('Cetak Dossier Klien', 'Dossier profil pengantin dan spesifikasi baki sedang disiapkan dalam format cetak PDF.');
    }

    // Filter Tabs
    function setCustomerFilter(status, btn) {
        document.querySelectorAll('.filter-tab').forEach(b => {
            b.classList.remove('bg-surface-container-lowest', 'text-primary', 'shadow-xs', 'font-semibold');
            b.classList.add('text-on-surface-variant');
        });
        btn.classList.add('bg-surface-container-lowest', 'text-primary', 'shadow-xs', 'font-semibold');
        btn.classList.remove('text-on-surface-variant');

        const rows = document.querySelectorAll('.customer-row');
        let count = 0;
        rows.forEach(row => {
            const rowStatus = row.getAttribute('data-status');
            if (status === 'all' || rowStatus === status) {
                row.style.display = '';
                count++;
            } else {
                row.style.display = 'none';
            }
        });
        showToast('Filter Aktivitas', `Menampilkan ${count} pengantin dengan filter status yang dipilih.`);
    }

    // Search Bar Filter
    document.getElementById('searchInput').addEventListener('input', function(e) {
        const val = e.target.value.toLowerCase().trim();
        const rows = document.querySelectorAll('.customer-row');
        rows.forEach(row => {
            const name = (row.getAttribute('data-name') || '').toLowerCase();
            const phone = (row.getAttribute('data-phone') || '').toLowerCase();
            const city = (row.getAttribute('data-city') || '').toLowerCase();
            if (name.includes(val) || phone.includes(val) || city.includes(val)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });

    // Sorting Handler
    function applySorting() {
        const sortBy = document.getElementById('sortSelect').value;
        const tableBody = document.querySelector('#customerTable tbody');
        const rows = Array.from(tableBody.querySelectorAll('.customer-row'));

        rows.sort((a, b) => {
            if (sortBy === 'az') {
                return a.getAttribute('data-name').localeCompare(b.getAttribute('data-name'));
            } else if (sortBy === 'orders') {
                return parseInt(b.getAttribute('data-orders')) - parseInt(a.getAttribute('data-orders'));
            } else if (sortBy === 'spending') {
                return parseInt(b.getAttribute('data-total')) - parseInt(a.getAttribute('data-total'));
            }
            return 0; // Default/recent
        });

        rows.forEach(row => tableBody.appendChild(row));
        showToast('Urutan Data Diubah', `Tabel pelanggan diurutkan berdasarkan "${document.getElementById('sortSelect').selectedOptions[0].text}".`);
    }
</script>
@endpush

