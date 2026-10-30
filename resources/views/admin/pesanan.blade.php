@extends('layouts.admin')

@section('title', 'Manajemen Data Pesanan — Cattaleya')

@section('content')
<div class="flex flex-col w-full">
    <div class="w-full max-w-[1536px] mx-auto py-space-md space-y-space-lg">

        <!-- WhatsApp Gateway Integration Live Ribbon -->
        <div class="relative overflow-hidden rounded-xl bg-surface-container-low p-space-md shadow-xs border border-outline-variant/30">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-space-sm">
                <div class="flex items-center gap-space-sm">
                    <div class="w-9 h-9 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container flex-shrink-0">
                        <span class="material-symbols-outlined text-[20px] text-primary">sms</span>
                    </div>
                    <div>
                        <div class="flex items-center gap-2">
                            <p class="font-title-md text-title-md text-on-surface font-semibold">Integrasi WhatsApp Gateway &amp; Midtrans Live</p>
                            <span class="w-2 h-2 rounded-full bg-[#2d7a4d] animate-pulse"></span>
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Pelanggan secara otomatis menerima invoice digital Midtrans, pengingat H-3 sisa pelunasan dowry, serta notifikasi siap ambil/kirim secara real-time.
                        </p>
                    </div>
                </div>
                <div class="flex items-center gap-space-sm flex-shrink-0">
                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary px-2.5 py-1 rounded-full bg-surface-container-high font-semibold">Engine v3.2 OK</span>
                    <button class="px-3 py-1.5 rounded-lg bg-surface-container-highest hover:bg-surface-container text-on-surface font-label-md text-label-md transition-all flex items-center gap-1.5 shadow-xs cursor-pointer border border-outline-variant/20" onclick="openWaTestModal()" type="button">
                        <span class="material-symbols-outlined text-[16px] text-primary">sensors</span>
                        <span>Uji Log Gateway</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Page Title & Operational Actions -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-space-md">
            <div class="space-y-1">
                <div class="flex items-center gap-2">
                    <span class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-widest">Atelier Craft &amp; Rental Control</span>
                    <span class="text-outline-variant font-label-sm">•</span>
                    <span class="font-label-sm text-label-sm text-secondary font-medium">Buku Pesanan Studio</span>
                </div>
                <h2 class="font-headline-lg text-headline-lg text-on-surface font-semibold tracking-tight">Manajemen Data Pesanan</h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl">
                    Kelola pemesanan kustom mahar, jadwal sewa kotak seserahan, status operasional produksi florist, dan alur konfirmasi otomatis pelanggan.
                </p>
            </div>
            <div class="flex flex-wrap items-center gap-space-sm flex-shrink-0">
                <button class="px-4 py-2.5 rounded-xl bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-title-md text-title-md transition-all flex items-center gap-2 shadow-xs cursor-pointer border border-outline-variant/30" onclick="exportCsvData()" type="button">
                    <span class="material-symbols-outlined text-[18px] text-secondary">file_download</span>
                    <span>Export Data Pesanan (CSV)</span>
                </button>
                <button class="px-5 py-2.5 rounded-xl bg-primary text-on-primary hover:bg-primary-container font-title-md text-title-md transition-all flex items-center gap-2 shadow-md cursor-pointer" onclick="openManualOrderModal()" type="button">
                    <span class="material-symbols-outlined text-[19px]">add</span>
                    <span>+ Buat Pesanan Manual / Offline</span>
                </button>
            </div>
        </div>

        <!-- KPI Mini Summary Bar -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md">
            <div class="p-space-md rounded-xl bg-surface-container-lowest shadow-xs flex items-center justify-between border border-outline-variant/30">
                <div>
                    <p class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Total Pesanan Aktif</p>
                    <p class="font-metric-display text-metric-display text-on-surface mt-0.5 font-bold">184</p>
                    <p class="font-label-sm text-label-sm text-[#2d7a4d] mt-1 font-semibold">+14 pesanan minggu ini</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-[24px]">inventory</span>
                </div>
            </div>
            <div class="p-space-md rounded-xl bg-surface-container-lowest shadow-xs flex items-center justify-between border border-outline-variant/30">
                <div>
                    <p class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Pengerjaan Florist</p>
                    <p class="font-metric-display text-metric-display text-on-surface mt-0.5 font-bold">38</p>
                    <p class="font-label-sm text-label-sm text-primary mt-1 font-medium">12 deadline pekan ini</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-[24px]">local_florist</span>
                </div>
            </div>
            <div class="p-space-md rounded-xl bg-surface-container-lowest shadow-xs flex items-center justify-between border border-outline-variant/30">
                <div>
                    <p class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Kotak Sedang Disewa</p>
                    <p class="font-metric-display text-metric-display text-on-surface mt-0.5 font-bold">64 <span class="font-title-md text-title-md text-secondary font-normal">set</span></p>
                    <p class="font-label-sm text-label-sm text-secondary-fixed-dim mt-1">9 set jadwal kembali besok</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-secondary">
                    <span class="material-symbols-outlined text-[24px]">package_2</span>
                </div>
            </div>
            <div class="p-space-md rounded-xl bg-surface-container-lowest shadow-xs flex items-center justify-between border border-outline-variant/30">
                <div>
                    <p class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Pelunasan Menunggu (H-3)</p>
                    <p class="font-metric-display text-metric-display text-error mt-0.5 font-bold">7</p>
                    <p class="font-label-sm text-label-sm text-on-surface-variant mt-1">Pengingat otomatis terkirim</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-error-container/40 flex items-center justify-center text-error">
                    <span class="material-symbols-outlined text-[24px]">notifications_active</span>
                </div>
            </div>
        </div>

        <!-- Filter & Search Console -->
        <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-xs space-y-space-md border border-outline-variant/30">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary text-[20px]">filter_alt</span>
                    <h3 class="font-title-lg text-title-lg text-on-surface font-semibold">Pencarian &amp; Parameter Filter Pesanan</h3>
                </div>
                <span class="font-label-sm text-label-sm text-secondary">Pembaruan otomatis tiap 60 detik</span>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-space-md">
                <!-- Search bar -->
                <div class="lg:col-span-4">
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1.5" for="searchInput">Cari ID Pesanan / Pelanggan</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-on-surface-variant text-[20px]">search</span>
                        <input class="w-full pl-10 pr-4 py-2.5 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface placeholder:text-on-surface-variant/60 focus:outline-none focus:bg-surface-container transition-all border border-outline-variant/20" id="searchInput" placeholder="Contoh: ORD-2025-090 atau Anindya..." type="text">
                    </div>
                </div>
                <!-- Filter Jenis Pesanan -->
                <div class="lg:col-span-2">
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1.5" for="typeFilter">Jenis Pesanan</label>
                    <select class="w-full px-3.5 py-2.5 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container transition-all cursor-pointer border border-outline-variant/20" id="typeFilter">
                        <option value="all">Semua Jenis</option>
                        <option value="mahar">Mahar Pernikahan</option>
                        <option value="sewa">Sewa Kotak Seserahan</option>
                        <option value="bundling">Paket Bundling (Mahar + Kotak)</option>
                    </select>
                </div>
                <!-- Filter Status Pembayaran -->
                <div class="lg:col-span-2">
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1.5" for="paymentFilter">Status Pembayaran</label>
                    <select class="w-full px-3.5 py-2.5 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container transition-all cursor-pointer border border-outline-variant/20" id="paymentFilter">
                        <option value="all">Semua Status</option>
                        <option value="menunggu_dp">Menunggu DP</option>
                        <option value="dp">DP Terbayar (50%)</option>
                        <option value="lunas">Lunas Penuh</option>
                    </select>
                </div>
                <!-- Filter Status Pesanan -->
                <div class="lg:col-span-2">
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1.5" for="statusFilter">Status Produksi / Sewa</label>
                    <select class="w-full px-3.5 py-2.5 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container transition-all cursor-pointer border border-outline-variant/20" id="statusFilter">
                        <option value="all">Semua Status Operasional</option>
                        <option value="menunggu_pembayaran">Menunggu Pembayaran</option>
                        <option value="antrean_desain">Dalam Antrean Desain</option>
                        <option value="pengerjaan_florist">Pengerjaan Florist / Dekorasi</option>
                        <option value="siap_ambil">Siap Diambil / Kirim</option>
                        <option value="sedang_disewa">Sedang Disewa</option>
                        <option value="selesai">Selesai</option>
                        <option value="dibatalkan">Dibatalkan</option>
                    </select>
                </div>
                <!-- Date Range Filter -->
                <div class="lg:col-span-2">
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1.5" for="dateRangeInput">Rentang Tanggal Acara</label>
                    <div class="relative">
                        <input class="w-full pl-3.5 pr-8 py-2.5 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container transition-all cursor-pointer border border-outline-variant/20" id="dateRangeInput" type="text" value="Mei 2025 - Nov 2025">
                        <span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-secondary text-[18px] pointer-events-none">calendar_month</span>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-between pt-2">
                <div class="flex items-center gap-2 text-on-surface-variant font-label-sm text-label-sm">
                    <span class="material-symbols-outlined text-[16px] text-primary">info</span>
                    <span>Daftar pesanan diurutkan prioritas berdasarkan tanggal acara terdekat.</span>
                </div>
                <div class="flex items-center gap-space-sm">
                    <button class="px-4 py-2 rounded-lg bg-surface-container text-secondary hover:text-on-surface hover:bg-surface-container-high font-title-md text-title-md transition-all cursor-pointer" onclick="resetFilter()" type="button">
                        Reset
                    </button>
                    <button class="px-5 py-2 rounded-lg bg-primary-container text-on-primary-container hover:bg-primary font-title-md text-title-md transition-all shadow-xs cursor-pointer" onclick="applyFilter()" type="button">
                        Terapkan Filter
                    </button>
                </div>
            </div>
        </div>

        <!-- Data Table Container -->
        <div class="bg-surface-container-lowest rounded-xl shadow-xs overflow-hidden border border-outline-variant/30">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse" id="pesananTable">
                    <thead>
                        <tr class="bg-surface-container-low text-secondary font-label-sm text-label-sm uppercase tracking-wider border-b border-surface-container-high/60">
                            <th class="py-3.5 px-4 font-semibold">ID Pesanan</th>
                            <th class="py-3.5 px-4 font-semibold">Pelanggan &amp; WhatsApp</th>
                            <th class="py-3.5 px-4 font-semibold">Jenis Pesanan</th>
                            <th class="py-3.5 px-4 font-semibold">Tgl Acara</th>
                            <th class="py-3.5 px-4 font-semibold text-right">Total Harga</th>
                            <th class="py-3.5 px-4 font-semibold">Status Pembayaran</th>
                            <th class="py-3.5 px-4 font-semibold">Status Pesanan</th>
                            <th class="py-3.5 px-4 font-semibold text-center">Aksi Admin</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-surface-container-high/40 font-body-md text-body-md text-on-surface">
                        <!-- Row 1: Pengerjaan Florist - Mahar -->
                        <tr class="hover:bg-surface-container-low/60 transition-colors order-row" data-type="mahar" data-payment="dp" data-status="pengerjaan_florist">
                            <td class="py-4 px-4 align-top">
                                <span class="font-title-md text-title-md text-primary font-semibold">ORD-2025-090</span>
                                <p class="font-label-sm text-label-sm text-on-surface-variant mt-0.5">Dibuat: 10 Mei 2025</p>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <div class="font-title-md text-title-md font-semibold text-on-surface">Anindya Larasati</div>
                                <div class="flex items-center gap-1.5 text-on-surface-variant mt-0.5">
                                    <span class="material-symbols-outlined text-[15px] text-[#2d7a4d]">chat</span>
                                    <a class="hover:text-primary hover:underline" href="https://wa.me/6281298442110" target="_blank">+62 812-9844-2110</a>
                                </div>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm font-medium">
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                                    Mahar Akrilik Vitrine
                                </span>
                                <p class="font-label-sm text-label-sm text-secondary mt-1">Ukiran Kayu Jati Rose Gold</p>
                            </td>
                            <td class="py-4 px-4 align-top whitespace-nowrap">
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-[16px] text-secondary">event</span>
                                    <span class="font-semibold text-on-surface">22 Okt 2025</span>
                                </div>
                                <span class="font-label-sm text-label-sm text-primary mt-0.5 block font-medium">H-160 Acara</span>
                            </td>
                            <td class="py-4 px-4 align-top text-right whitespace-nowrap">
                                <div class="font-title-md text-title-md font-semibold text-on-surface">Rp 1.600.000</div>
                                <div class="font-label-sm text-label-sm text-on-surface-variant mt-0.5">DP Rp 800rb / Sisa Rp 800rb</div>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#fdf8ee] text-[#7a5826] font-label-sm text-label-sm font-semibold border border-[#7a5826]/20">
                                    <span class="w-2 h-2 rounded-full bg-[#7a5826]"></span>
                                    DP Terbayar (50%)
                                </span>
                                <p class="font-label-sm text-label-sm text-on-surface-variant mt-1 font-mono text-[11px]">Midtrans #TRX-88219</p>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary animate-ping"></span>
                                    Pengerjaan Florist
                                </span>
                                <p class="font-label-sm text-label-sm text-secondary mt-1">Artisan: Mbak Ratna (Floral)</p>
                            </td>
                            <td class="py-4 px-4 align-top text-center">
                                <div class="flex items-center justify-center gap-1">
                                    <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openDetailModal('ORD-2025-090')" title="Lihat Detail Pesanan" type="button">
                                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                                    </button>
                                    <button class="p-2 rounded-lg bg-surface-container hover:bg-primary hover:text-on-primary text-secondary transition-colors cursor-pointer" onclick="openStatusChangeModal('ORD-2025-090', 'Pengerjaan Florist')" title="Ubah Status Operasional" type="button">
                                        <span class="material-symbols-outlined text-[18px]">published_with_changes</span>
                                    </button>
                                    <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openEditModal('ORD-2025-090')" title="Edit Data Pesanan" type="button">
                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                    </button>
                                    <button class="p-2 rounded-lg bg-[#eff5f1] hover:bg-[#2d7a4d] text-[#2d7a4d] hover:text-white transition-colors cursor-pointer" onclick="triggerWhatsApp('ORD-2025-090', '+6281298442110', 'Anindya Larasati', 'update_progres')" title="Kirim WA Notifikasi" type="button">
                                        <span class="material-symbols-outlined text-[18px]">send</span>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 2: Sedang Disewa - Kotak Seserahan Bundling -->
                        <tr class="hover:bg-surface-container-low/60 transition-colors order-row" data-type="sewa" data-payment="lunas" data-status="sedang_disewa">
                            <td class="py-4 px-4 align-top">
                                <span class="font-title-md text-title-md text-primary font-semibold">ORD-2025-084</span>
                                <p class="font-label-sm text-label-sm text-on-surface-variant mt-0.5">Dibuat: 02 Mei 2025</p>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <div class="font-title-md text-title-md font-semibold text-on-surface">Bramantyo &amp; Nadia</div>
                                <div class="flex items-center gap-1.5 text-on-surface-variant mt-0.5">
                                    <span class="material-symbols-outlined text-[15px] text-[#2d7a4d]">chat</span>
                                    <a class="hover:text-primary hover:underline" href="https://wa.me/6287739100234" target="_blank">+62 877-3910-0234</a>
                                </div>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm font-medium">
                                    <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                                    Sewa Kotak (8 Tray)
                                </span>
                                <p class="font-label-sm text-label-sm text-secondary mt-1">Series White Heritage Pearl</p>
                            </td>
                            <td class="py-4 px-4 align-top whitespace-nowrap">
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-[16px] text-secondary">event</span>
                                    <span class="font-semibold text-on-surface">17 Mei 2025</span>
                                </div>
                                <span class="font-label-sm text-label-sm text-error mt-0.5 block font-semibold">H-2 Acara (Sedang Sewa)</span>
                            </td>
                            <td class="py-4 px-4 align-top text-right whitespace-nowrap">
                                <div class="font-title-md text-title-md font-semibold text-on-surface">Rp 2.450.000</div>
                                <div class="font-label-sm text-label-sm text-[#2d7a4d] mt-0.5 font-medium">Lunas (Termasuk Jaminan)</div>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#eff3ee] text-[#344837] font-label-sm text-label-sm font-semibold border border-[#4f6a54]/20">
                                    <span class="w-2 h-2 rounded-full bg-[#4f6a54]"></span>
                                    Lunas Penuh
                                </span>
                                <p class="font-label-sm text-label-sm text-on-surface-variant mt-1 text-[11px]">Deposit Rp 500rb ditahan</p>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#eff4f7] text-[#455765] font-label-sm text-label-sm font-semibold border border-[#455765]/20">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#455765]"></span>
                                    Sedang Disewa
                                </span>
                                <p class="font-label-sm text-label-sm text-secondary mt-1">Jadwal Balik: 19 Mei 2025</p>
                            </td>
                            <td class="py-4 px-4 align-top text-center">
                                <div class="flex items-center justify-center gap-1">
                                    <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openDetailModal('ORD-2025-084')" title="Lihat Detail Pesanan" type="button">
                                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                                    </button>
                                    <button class="p-2 rounded-lg bg-surface-container hover:bg-primary hover:text-on-primary text-secondary transition-colors cursor-pointer" onclick="openStatusChangeModal('ORD-2025-084', 'Sedang Disewa')" title="Ubah Status Operasional" type="button">
                                        <span class="material-symbols-outlined text-[18px]">published_with_changes</span>
                                    </button>
                                    <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openEditModal('ORD-2025-084')" title="Edit Data Pesanan" type="button">
                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                    </button>
                                    <button class="p-2 rounded-lg bg-[#eff5f1] hover:bg-[#2d7a4d] text-[#2d7a4d] hover:text-white transition-colors cursor-pointer" onclick="triggerWhatsApp('ORD-2025-084', '+6287739100234', 'Bramantyo &amp; Nadia', 'reminder_pengembalian')" title="Kirim WA Notifikasi" type="button">
                                        <span class="material-symbols-outlined text-[18px]">send</span>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 3: Siap Diambil - Bundling -->
                        <tr class="hover:bg-surface-container-low/60 transition-colors order-row" data-type="bundling" data-payment="menunggu_dp" data-status="siap_ambil">
                            <td class="py-4 px-4 align-top">
                                <span class="font-title-md text-title-md text-primary font-semibold">ORD-2025-078</span>
                                <p class="font-label-sm text-label-sm text-on-surface-variant mt-0.5">Dibuat: 28 Apr 2025</p>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <div class="font-title-md text-title-md font-semibold text-on-surface">Clarissa Aurelia</div>
                                <div class="flex items-center gap-1.5 text-on-surface-variant mt-0.5">
                                    <span class="material-symbols-outlined text-[15px] text-[#2d7a4d]">chat</span>
                                    <a class="hover:text-primary hover:underline" href="https://wa.me/6281311099238" target="_blank">+62 813-1109-9238</a>
                                </div>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm font-medium">
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary-container"></span>
                                    Bundling Mahar + 6 Kotak
                                </span>
                                <p class="font-label-sm text-label-sm text-secondary mt-1">Tema: Champagne Bloom Terracotta</p>
                            </td>
                            <td class="py-4 px-4 align-top whitespace-nowrap">
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-[16px] text-secondary">event</span>
                                    <span class="font-semibold text-on-surface">18 Mei 2025</span>
                                </div>
                                <span class="font-label-sm text-label-sm text-primary mt-0.5 block font-semibold">H-3 Acara</span>
                            </td>
                            <td class="py-4 px-4 align-top text-right whitespace-nowrap">
                                <div class="font-title-md text-title-md font-semibold text-on-surface">Rp 3.850.000</div>
                                <div class="font-label-sm text-label-sm text-error font-medium mt-0.5">Kurang Rp 1.925.000</div>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-error-container/40 text-on-error-container font-label-sm text-label-sm font-semibold border border-error/20">
                                    <span class="w-2 h-2 rounded-full bg-error"></span>
                                    Menunggu Pelunasan H-3
                                </span>
                                <p class="font-label-sm text-label-sm text-on-surface-variant mt-1 text-[11px]">Invoice dikirim via WA</p>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#f4e0c2] text-on-primary-fixed-variant font-label-sm text-label-sm font-semibold border border-primary/20">
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                                    Siap Diambil / Kirim
                                </span>
                                <p class="font-label-sm text-label-sm text-secondary mt-1">Di Rak Studio Utama</p>
                            </td>
                            <td class="py-4 px-4 align-top text-center">
                                <div class="flex items-center justify-center gap-1">
                                    <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openDetailModal('ORD-2025-078')" title="Lihat Detail Pesanan" type="button">
                                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                                    </button>
                                    <button class="p-2 rounded-lg bg-surface-container hover:bg-primary hover:text-on-primary text-secondary transition-colors cursor-pointer" onclick="openStatusChangeModal('ORD-2025-078', 'Siap Diambil')" title="Ubah Status Operasional" type="button">
                                        <span class="material-symbols-outlined text-[18px]">published_with_changes</span>
                                    </button>
                                    <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openEditModal('ORD-2025-078')" title="Edit Data Pesanan" type="button">
                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                    </button>
                                    <button class="p-2 rounded-lg bg-error-container hover:bg-error text-error hover:text-white transition-colors cursor-pointer" onclick="triggerWhatsApp('ORD-2025-078', '+6281311099238', 'Clarissa Aurelia', 'tagihan_pelunasan')" title="Kirim Tagihan Pelunasan WA" type="button">
                                        <span class="material-symbols-outlined text-[18px]">price_change</span>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 4: Antrean Desain - Mahar Custom -->
                        <tr class="hover:bg-surface-container-low/60 transition-colors order-row" data-type="mahar" data-payment="dp" data-status="antrean_desain">
                            <td class="py-4 px-4 align-top">
                                <span class="font-title-md text-title-md text-primary font-semibold">ORD-2025-095</span>
                                <p class="font-label-sm text-label-sm text-on-surface-variant mt-0.5">Dibuat: 14 Mei 2025</p>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <div class="font-title-md text-title-md font-semibold text-on-surface">Dimas &amp; Farida</div>
                                <div class="flex items-center gap-1.5 text-on-surface-variant mt-0.5">
                                    <span class="material-symbols-outlined text-[15px] text-[#2d7a4d]">chat</span>
                                    <a class="hover:text-primary hover:underline" href="https://wa.me/6285220334811" target="_blank">+62 852-2033-4811</a>
                                </div>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm font-medium">
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                                    Mahar Kaligrafi Koin Emas
                                </span>
                                <p class="font-label-sm text-label-sm text-secondary mt-1">Ukuran 40x50 Frame Gold Leaf</p>
                            </td>
                            <td class="py-4 px-4 align-top whitespace-nowrap">
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-[16px] text-secondary">event</span>
                                    <span class="font-semibold text-on-surface">06 Jun 2025</span>
                                </div>
                                <span class="font-label-sm text-label-sm text-secondary mt-0.5 block">H-22 Acara</span>
                            </td>
                            <td class="py-4 px-4 align-top text-right whitespace-nowrap">
                                <div class="font-title-md text-title-md font-semibold text-on-surface">Rp 2.100.000</div>
                                <div class="font-label-sm text-label-sm text-on-surface-variant mt-0.5">DP Rp 1.050.000 masuk</div>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#fdf8ee] text-[#7a5826] font-label-sm text-label-sm font-semibold border border-[#7a5826]/20">
                                    <span class="w-2 h-2 rounded-full bg-[#7a5826]"></span>
                                    DP Terbayar (50%)
                                </span>
                                <p class="font-label-sm text-label-sm text-on-surface-variant mt-1 text-[11px]">BCA Transfer Offline</p>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container-high text-on-surface-variant font-label-sm text-label-sm font-semibold">
                                    <span class="w-1.5 h-1.5 rounded-full bg-outline"></span>
                                    Dalam Antrean Desain
                                </span>
                                <p class="font-label-sm text-label-sm text-secondary mt-1">Draft mockup kaligrafi V1</p>
                            </td>
                            <td class="py-4 px-4 align-top text-center">
                                <div class="flex items-center justify-center gap-1">
                                    <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openDetailModal('ORD-2025-095')" title="Lihat Detail Pesanan" type="button">
                                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                                    </button>
                                    <button class="p-2 rounded-lg bg-surface-container hover:bg-primary hover:text-on-primary text-secondary transition-colors cursor-pointer" onclick="openStatusChangeModal('ORD-2025-095', 'Antrean Desain')" title="Ubah Status Operasional" type="button">
                                        <span class="material-symbols-outlined text-[18px]">published_with_changes</span>
                                    </button>
                                    <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openEditModal('ORD-2025-095')" title="Edit Data Pesanan" type="button">
                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                    </button>
                                    <button class="p-2 rounded-lg bg-[#eff5f1] hover:bg-[#2d7a4d] text-[#2d7a4d] hover:text-white transition-colors cursor-pointer" onclick="triggerWhatsApp('ORD-2025-095', '+6285220334811', 'Dimas &amp; Farida', 'preview_desain')" title="Kirim WA Preview Mockup" type="button">
                                        <span class="material-symbols-outlined text-[18px]">send</span>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 5: Selesai - Arsip Pesanan -->
                        <tr class="hover:bg-surface-container-low/60 transition-colors opacity-90 order-row" data-type="sewa" data-payment="lunas" data-status="selesai">
                            <td class="py-4 px-4 align-top">
                                <span class="font-title-md text-title-md text-secondary font-semibold">ORD-2025-062</span>
                                <p class="font-label-sm text-label-sm text-on-surface-variant mt-0.5">Dibuat: 12 Apr 2025</p>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <div class="font-title-md text-title-md font-semibold text-on-surface">Rizky &amp; Amanda</div>
                                <div class="flex items-center gap-1.5 text-on-surface-variant mt-0.5">
                                    <span class="material-symbols-outlined text-[15px] text-[#2d7a4d]">chat</span>
                                    <a class="hover:text-primary hover:underline" href="https://wa.me/6281809228833" target="_blank">+62 818-0922-8833</a>
                                </div>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm font-medium">
                                    <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                                    Sewa Kotak (10 Tray)
                                </span>
                                <p class="font-label-sm text-label-sm text-secondary mt-1">Series Velvet Sage Emas</p>
                            </td>
                            <td class="py-4 px-4 align-top whitespace-nowrap">
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-[16px] text-secondary">event_available</span>
                                    <span class="font-semibold text-on-surface">04 Mei 2025</span>
                                </div>
                                <span class="font-label-sm text-label-sm text-[#2d7a4d] mt-0.5 block font-semibold">Acara Telah Berlangsung</span>
                            </td>
                            <td class="py-4 px-4 align-top text-right whitespace-nowrap">
                                <div class="font-title-md text-title-md font-semibold text-on-surface">Rp 3.200.000</div>
                                <div class="font-label-sm text-label-sm text-[#2d7a4d] mt-0.5">Deposit dikembalikan</div>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#eff3ee] text-[#344837] font-label-sm text-label-sm font-semibold border border-[#4f6a54]/20">
                                    <span class="w-2 h-2 rounded-full bg-[#4f6a54]"></span>
                                    Lunas Penuh
                                </span>
                                <p class="font-label-sm text-label-sm text-on-surface-variant mt-1 text-[11px]">Closed &amp; Reconciled</p>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#eff3ee] text-[#344837] font-label-sm text-label-sm font-semibold border border-[#4f6a54]/20">
                                    <span class="w-2 h-2 rounded-full bg-[#4f6a54]"></span>
                                    Selesai
                                </span>
                                <p class="font-label-sm text-label-sm text-secondary mt-1">Kotak kembali aman</p>
                            </td>
                            <td class="py-4 px-4 align-top text-center">
                                <div class="flex items-center justify-center gap-1">
                                    <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openDetailModal('ORD-2025-062')" title="Lihat Detail Pesanan" type="button">
                                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                                    </button>
                                    <button class="p-2 rounded-lg bg-surface-container text-secondary opacity-60 cursor-not-allowed" onclick="openStatusChangeModal('ORD-2025-062', 'Selesai')" title="Status Arsip" type="button">
                                        <span class="material-symbols-outlined text-[18px]">lock</span>
                                    </button>
                                    <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openEditModal('ORD-2025-062')" title="Edit Data" type="button">
                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                    </button>
                                    <button class="p-2 rounded-lg bg-[#eff5f1] hover:bg-[#2d7a4d] text-[#2d7a4d] hover:text-white transition-colors cursor-pointer" onclick="triggerWhatsApp('ORD-2025-062', '+6281809228833', 'Rizky &amp; Amanda', 'ucapan_terima_kasih')" title="Kirim WA Ucapan &amp; Ulasan" type="button">
                                        <span class="material-symbols-outlined text-[18px]">sentiment_satisfied</span>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 6: Menunggu Pembayaran Midtrans -->
                        <tr class="hover:bg-surface-container-low/60 transition-colors order-row" data-type="mahar" data-payment="menunggu_dp" data-status="menunggu_pembayaran">
                            <td class="py-4 px-4 align-top">
                                <span class="font-title-md text-title-md text-primary font-semibold">ORD-2025-102</span>
                                <p class="font-label-sm text-label-sm text-on-surface-variant mt-0.5 font-medium">Dibuat: 15 Mei 2025 (Baru)</p>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <div class="font-title-md text-title-md font-semibold text-on-surface">Taufik Hidayat</div>
                                <div class="flex items-center gap-1.5 text-on-surface-variant mt-0.5">
                                    <span class="material-symbols-outlined text-[15px] text-[#2d7a4d]">chat</span>
                                    <a class="hover:text-primary hover:underline" href="https://wa.me/6289655441029" target="_blank">+62 896-5544-1029</a>
                                </div>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm font-medium">
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                                    Mahar Geometris Logam Mulia
                                </span>
                                <p class="font-label-sm text-label-sm text-secondary mt-1">Tipe Hexagon Brass Series</p>
                            </td>
                            <td class="py-4 px-4 align-top whitespace-nowrap">
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-[16px] text-secondary">event</span>
                                    <span class="font-semibold text-on-surface">12 Jul 2025</span>
                                </div>
                                <span class="font-label-sm text-label-sm text-secondary mt-0.5 block">H-58 Acara</span>
                            </td>
                            <td class="py-4 px-4 align-top text-right whitespace-nowrap">
                                <div class="font-title-md text-title-md font-semibold text-on-surface">Rp 1.450.000</div>
                                <div class="font-label-sm text-label-sm text-error mt-0.5 font-medium">Belum ada pembayaran DP</div>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-error-container/50 text-on-error-container font-label-sm text-label-sm font-semibold border border-error/20">
                                    <span class="w-2 h-2 rounded-full bg-error animate-pulse"></span>
                                    Menunggu Pembayaran
                                </span>
                                <p class="font-label-sm text-label-sm text-on-surface-variant mt-1 text-[11px]">Midtrans Snap Expired 23:59</p>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm font-semibold border border-outline-variant/30">
                                    <span class="w-1.5 h-1.5 rounded-full bg-outline"></span>
                                    Menunggu Konfirmasi DP
                                </span>
                                <p class="font-label-sm text-label-sm text-secondary mt-1">Belum masuk antrean studio</p>
                            </td>
                            <td class="py-4 px-4 align-top text-center">
                                <div class="flex items-center justify-center gap-1">
                                    <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openDetailModal('ORD-2025-102')" title="Lihat Detail Pesanan" type="button">
                                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                                    </button>
                                    <button class="p-2 rounded-lg bg-surface-container hover:bg-primary hover:text-on-primary text-secondary transition-colors cursor-pointer" onclick="openStatusChangeModal('ORD-2025-102', 'Menunggu Pembayaran')" title="Ubah Status Operasional" type="button">
                                        <span class="material-symbols-outlined text-[18px]">published_with_changes</span>
                                    </button>
                                    <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openEditModal('ORD-2025-102')" title="Edit Data Pesanan" type="button">
                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                    </button>
                                    <button class="p-2 rounded-lg bg-[#eff5f1] hover:bg-[#2d7a4d] text-[#2d7a4d] hover:text-white transition-colors cursor-pointer" onclick="triggerWhatsApp('ORD-2025-102', '+6289655441029', 'Taufik Hidayat', 'reminder_snap_payment')" title="Kirim Ulang Link Midtrans" type="button">
                                        <span class="material-symbols-outlined text-[18px]">send</span>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 7: Pengerjaan Florist - Sewa Kotak 6 Tray -->
                        <tr class="hover:bg-surface-container-low/60 transition-colors order-row" data-type="sewa" data-payment="dp" data-status="pengerjaan_florist">
                            <td class="py-4 px-4 align-top">
                                <span class="font-title-md text-title-md text-primary font-semibold">ORD-2025-088</span>
                                <p class="font-label-sm text-label-sm text-on-surface-variant mt-0.5">Dibuat: 08 Mei 2025</p>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <div class="font-title-md text-title-md font-semibold text-on-surface">Vania Safitri</div>
                                <div class="flex items-center gap-1.5 text-on-surface-variant mt-0.5">
                                    <span class="material-symbols-outlined text-[15px] text-[#2d7a4d]">chat</span>
                                    <a class="hover:text-primary hover:underline" href="https://wa.me/6281229900412" target="_blank">+62 812-2990-0412</a>
                                </div>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm font-medium">
                                    <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                                    Sewa Kotak (6 Tray)
                                </span>
                                <p class="font-label-sm text-label-sm text-secondary mt-1">Series Rustic Terracotta Wood</p>
                            </td>
                            <td class="py-4 px-4 align-top whitespace-nowrap">
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-[16px] text-secondary">event</span>
                                    <span class="font-semibold text-on-surface">25 Mei 2025</span>
                                </div>
                                <span class="font-label-sm text-label-sm text-primary mt-0.5 block font-medium">H-10 Acara</span>
                            </td>
                            <td class="py-4 px-4 align-top text-right whitespace-nowrap">
                                <div class="font-title-md text-title-md font-semibold text-on-surface">Rp 1.800.000</div>
                                <div class="font-label-sm text-label-sm text-on-surface-variant mt-0.5">DP Rp 900rb / Sisa Rp 900rb</div>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#fdf8ee] text-[#7a5826] font-label-sm text-label-sm font-semibold border border-[#7a5826]/20">
                                    <span class="w-2 h-2 rounded-full bg-[#7a5826]"></span>
                                    DP Terbayar (50%)
                                </span>
                                <p class="font-label-sm text-label-sm text-on-surface-variant mt-1 text-[11px]">Midtrans #TRX-87992</p>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary animate-ping"></span>
                                    Pengerjaan Florist
                                </span>
                                <p class="font-label-sm text-label-sm text-secondary mt-1">Artisan: Mas Daffa (Arrangement)</p>
                            </td>
                            <td class="py-4 px-4 align-top text-center">
                                <div class="flex items-center justify-center gap-1">
                                    <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openDetailModal('ORD-2025-088')" title="Lihat Detail Pesanan" type="button">
                                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                                    </button>
                                    <button class="p-2 rounded-lg bg-surface-container hover:bg-primary hover:text-on-primary text-secondary transition-colors cursor-pointer" onclick="openStatusChangeModal('ORD-2025-088', 'Pengerjaan Florist')" title="Ubah Status Operasional" type="button">
                                        <span class="material-symbols-outlined text-[18px]">published_with_changes</span>
                                    </button>
                                    <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openEditModal('ORD-2025-088')" title="Edit Data Pesanan" type="button">
                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                    </button>
                                    <button class="p-2 rounded-lg bg-[#eff5f1] hover:bg-[#2d7a4d] text-[#2d7a4d] hover:text-white transition-colors cursor-pointer" onclick="triggerWhatsApp('ORD-2025-088', '+6281229900412', 'Vania Safitri', 'update_progres')" title="Kirim WA Notifikasi" type="button">
                                        <span class="material-symbols-outlined text-[18px]">send</span>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 8: Dibatalkan -->
                        <tr class="hover:bg-surface-container-low/60 transition-colors opacity-80 order-row" data-type="mahar" data-payment="all" data-status="dibatalkan">
                            <td class="py-4 px-4 align-top">
                                <span class="font-title-md text-title-md text-secondary line-through">ORD-2025-055</span>
                                <p class="font-label-sm text-label-sm text-on-surface-variant mt-0.5">Dibuat: 05 Apr 2025</p>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <div class="font-title-md text-title-md font-semibold text-on-surface">Arya Wiguna</div>
                                <div class="flex items-center gap-1.5 text-on-surface-variant mt-0.5">
                                    <span class="material-symbols-outlined text-[15px] text-[#2d7a4d]">chat</span>
                                    <a class="hover:text-primary hover:underline" href="https://wa.me/628177443109" target="_blank">+62 817-7443-109</a>
                                </div>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm font-medium">
                                    <span class="w-1.5 h-1.5 rounded-full bg-outline"></span>
                                    Mahar Koin Minimalis
                                </span>
                                <p class="font-label-sm text-label-sm text-secondary mt-1">Frame Natural Pine 30x30</p>
                            </td>
                            <td class="py-4 px-4 align-top whitespace-nowrap">
                                <div class="flex items-center gap-1.5 text-on-surface-variant">
                                    <span class="material-symbols-outlined text-[16px]">cancel</span>
                                    <span class="font-normal">Jadwal Acara Batal</span>
                                </div>
                                <span class="font-label-sm text-label-sm text-on-surface-variant mt-0.5 block">Permintaan Klien</span>
                            </td>
                            <td class="py-4 px-4 align-top text-right whitespace-nowrap">
                                <div class="font-title-md text-title-md font-semibold text-on-surface-variant">Rp 1.150.000</div>
                                <div class="font-label-sm text-label-sm text-secondary mt-0.5">DP Dikembalikan (Kebijakan)</div>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container-high text-on-surface-variant font-label-sm text-label-sm font-semibold border border-outline-variant/30">
                                    <span class="w-2 h-2 rounded-full bg-outline"></span>
                                    Refund Diproses
                                </span>
                                <p class="font-label-sm text-label-sm text-on-surface-variant mt-1 text-[11px]">Selesai 08 Apr 2025</p>
                            </td>
                            <td class="py-4 px-4 align-top">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-error-container/40 text-on-error-container font-label-sm text-label-sm font-semibold border border-error/20">
                                    <span class="w-2 h-2 rounded-full bg-error"></span>
                                    Dibatalkan
                                </span>
                                <p class="font-label-sm text-label-sm text-secondary mt-1">Slot kalender dirilis kembali</p>
                            </td>
                            <td class="py-4 px-4 align-top text-center">
                                <div class="flex items-center justify-center gap-1">
                                    <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openDetailModal('ORD-2025-055')" title="Lihat Detail Pesanan" type="button">
                                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                                    </button>
                                    <button class="p-2 rounded-lg bg-surface-container text-secondary opacity-50 cursor-not-allowed" onclick="openStatusChangeModal('ORD-2025-055', 'Dibatalkan')" title="Status Dibatalkan" type="button">
                                        <span class="material-symbols-outlined text-[18px]">lock</span>
                                    </button>
                                    <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openEditModal('ORD-2025-055')" title="Edit Data" type="button">
                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                    </button>
                                    <button class="p-2 rounded-lg bg-[#eff5f1] hover:bg-[#2d7a4d] text-[#2d7a4d] hover:text-white transition-colors cursor-pointer" onclick="triggerWhatsApp('ORD-2025-055', '+628177443109', 'Arya Wiguna', 'bukti_refund')" title="Kirim WA Bukti Refund" type="button">
                                        <span class="material-symbols-outlined text-[18px]">send</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination & Status Summary Footer -->
            <div class="p-space-md bg-surface-container-low flex flex-col sm:flex-row items-center justify-between gap-space-sm border-t border-surface-container-high/60">
                <div class="font-body-md text-body-md text-on-surface-variant">
                    Menampilkan <span class="font-semibold text-on-surface">1 - 8</span> dari <span class="font-semibold text-on-surface">184</span> data pesanan aktif studio
                </div>
                <div class="flex items-center gap-1.5">
                    <button class="p-2 rounded-lg bg-surface-container text-secondary hover:bg-surface-container-high disabled:opacity-40 transition-colors cursor-not-allowed" disabled="" type="button">
                        <span class="material-symbols-outlined text-[18px]">chevron_left</span>
                    </button>
                    <button class="w-8 h-8 rounded-lg bg-primary text-on-primary font-label-md text-label-md font-semibold flex items-center justify-center cursor-pointer shadow-xs" type="button">1</button>
                    <button class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md flex items-center justify-center transition-colors cursor-pointer" type="button">2</button>
                    <button class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md flex items-center justify-center transition-colors cursor-pointer" type="button">3</button>
                    <span class="px-1 text-secondary">...</span>
                    <button class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md flex items-center justify-center transition-colors cursor-pointer" type="button">23</button>
                    <button class="p-2 rounded-lg bg-surface-container text-secondary hover:bg-surface-container-high transition-colors cursor-pointer" type="button">
                        <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- MODAL: EDIT DATA PESANAN (Ikon Pensil) -->
<div class="fixed inset-0 z-50 hidden bg-[#1e1915]/50 backdrop-blur-xs flex items-center justify-center p-4" id="editOrderModal">
    <div class="bg-surface-container-lowest rounded-xl max-w-2xl w-full p-space-lg shadow-xl space-y-space-md max-h-[90vh] overflow-y-auto border border-outline-variant/30 animate-in fade-in zoom-in-95 duration-150">
        <div class="flex items-center justify-between pb-2 border-b border-surface-container">
            <div class="flex items-center gap-2.5">
                <div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-[20px]">edit</span>
                </div>
                <div>
                    <span class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-wider">Perbarui Informasi Operasional</span>
                    <h4 class="font-headline-md text-headline-md text-on-surface font-semibold" id="editOrderModalTitle">Edit Data Pesanan #ORD-2025-090</h4>
                </div>
            </div>
            <button class="p-1.5 rounded-lg text-secondary hover:bg-surface-container transition-colors cursor-pointer" onclick="closeEditModal()" type="button">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        <form class="space-y-space-md" id="editOrderForm" onsubmit="handleEditOrderSubmit(event)">
            <input id="editOrderIdHidden" type="hidden" value="">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                <div>
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Nama Pasangan / Pelanggan *</label>
                    <input class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" id="editClientName" required="" type="text">
                </div>
                <div>
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Nomor WhatsApp *</label>
                    <input class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" id="editClientPhone" required="" type="tel">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                <div>
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Jenis Layanan / Produk</label>
                    <select class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" id="editOrderType">
                        <option value="mahar">Mahar Custom Pernikahan</option>
                        <option value="sewa">Sewa Kotak Seserahan</option>
                        <option value="bundling">Paket Bundling (Mahar + Kotak)</option>
                    </select>
                </div>
                <div>
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Tanggal Acara Pernikahan *</label>
                    <input class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" id="editEventDate" required="" type="date">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                <div>
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Total Nilai Pesanan (Rp) *</label>
                    <input class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" id="editTotalAmount" required="" type="number">
                </div>
                <div>
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Status Pembayaran</label>
                    <select class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" id="editPaymentStatus">
                        <option value="dp">DP Terbayar (50%)</option>
                        <option value="lunas">Lunas Penuh</option>
                        <option value="menunggu_dp">Menunggu Pembayaran DP</option>
                        <option value="refund">Refund Diproses</option>
                    </select>
                </div>
            </div>
            <div>
                <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Spesifikasi Model Mahar / Nomor Tray Baki</label>
                <input class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" id="editProductDetail" placeholder="Contoh: Ukiran Kayu Jati Rose Gold / Seri 8 Tray White Pearl" type="text">
            </div>
            <div>
                <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Catatan Khusus Operasional / Request Pasangan</label>
                <textarea class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" id="editNotes" placeholder="Catatan khusus warna pita, grafir nama, jam pengambilan..." rows="3"></textarea>
            </div>
            <div class="p-space-sm rounded-xl bg-surface-container-low flex items-start gap-2.5 text-on-surface-variant border border-outline-variant/20">
                <input checked="" class="mt-1 accent-primary rounded cursor-pointer" id="notifyClientOnEdit" type="checkbox">
                <label class="font-body-md text-body-md text-on-surface cursor-pointer select-none" for="notifyClientOnEdit">
                    Kirim konfirmasi pembaruan rincian pesanan ke WhatsApp pelanggan secara otomatis.
                </label>
            </div>
            <div class="flex items-center justify-end gap-space-sm pt-2 border-t border-surface-container-high/60">
                <button class="px-4 py-2 rounded-xl bg-surface-container text-secondary hover:bg-surface-container-high font-title-md text-title-md cursor-pointer" onclick="closeEditModal()" type="button">
                    Batal
                </button>
                <button class="px-5 py-2 rounded-xl bg-primary text-on-primary hover:bg-primary-container font-title-md text-title-md shadow-xs cursor-pointer flex items-center gap-1.5" type="submit">
                    <span class="material-symbols-outlined text-[18px]">save</span>
                    <span>Simpan Perubahan</span>
                </button>
            </div>
        </form>
    </div>
</div>

<!-- MODAL: UBAH STATUS OPERASIONAL -->
<div class="fixed inset-0 z-50 hidden bg-[#1e1915]/50 backdrop-blur-xs flex items-center justify-center p-4" id="statusModal">
    <div class="bg-surface-container-lowest rounded-xl max-w-lg w-full p-space-lg shadow-xl space-y-space-md border border-outline-variant/30 animate-in fade-in zoom-in-95 duration-150">
        <div class="flex items-center justify-between pb-2 border-b border-surface-container">
            <div>
                <span class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-wider">Perubahan Alur Operasional</span>
                <h4 class="font-headline-md text-headline-md text-on-surface font-semibold" id="statusModalOrderId">ORD-XXXX-XXX</h4>
            </div>
            <button class="p-1.5 rounded-lg text-secondary hover:bg-surface-container transition-colors cursor-pointer" onclick="closeStatusModal()" type="button">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        <div class="space-y-space-sm">
            <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold" for="modalNewStatusSelect">Pilih Tahap Status Baru</label>
            <select class="w-full px-3.5 py-2.5 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container cursor-pointer border border-outline-variant/20" id="modalNewStatusSelect">
                <option value="Menunggu Pembayaran">Menunggu Pembayaran</option>
                <option value="Dalam Antrean Desain">Dalam Antrean Desain</option>
                <option value="Pengerjaan Florist / Dekorasi">Pengerjaan Florist / Dekorasi</option>
                <option value="Siap Diambil / Kirim">Siap Diambil / Kirim</option>
                <option value="Sedang Disewa">Sedang Disewa (Klien Telah Mengambil)</option>
                <option value="Selesai">Selesai (Kotak Kembali &amp; Lunas)</option>
                <option value="Dibatalkan">Dibatalkan</option>
            </select>
        </div>
        <div class="space-y-space-sm">
            <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold" for="statusNoteInput">Catatan Pengerjaan / Artisan Penanggung Jawab</label>
            <input class="w-full px-3.5 py-2.5 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface placeholder:text-on-surface-variant/60 focus:outline-none focus:bg-surface-container border border-outline-variant/20" id="statusNoteInput" placeholder="Contoh: Bunga kering selesai dirangkai, siap masuk vitrine..." type="text">
        </div>
        <div class="p-space-sm rounded-xl bg-surface-container-low flex items-start gap-2.5 text-on-surface-variant border border-outline-variant/20">
            <input checked="" class="mt-1 accent-primary rounded cursor-pointer" id="autoNotifyWa" type="checkbox">
            <label class="font-body-md text-body-md text-on-surface cursor-pointer select-none" for="autoNotifyWa">
                Kirim notifikasi otomatis pembaruan progres pengerjaan ke nomor WhatsApp pengantin/pemesan secara instan.
            </label>
        </div>
        <div class="flex items-center justify-end gap-space-sm pt-2 border-t border-surface-container-high/60">
            <button class="px-4 py-2 rounded-xl bg-surface-container text-secondary hover:bg-surface-container-high font-title-md text-title-md cursor-pointer" onclick="closeStatusModal()" type="button">
                Batal
            </button>
            <button class="px-5 py-2 rounded-xl bg-primary text-on-primary hover:bg-primary-container font-title-md text-title-md shadow-xs cursor-pointer" onclick="saveStatusChange()" type="button">
                Simpan &amp; Perbarui Status
            </button>
        </div>
    </div>
</div>

<!-- MODAL: BUAT PESANAN MANUAL / OFFLINE -->
<div class="fixed inset-0 z-50 hidden bg-[#1e1915]/50 backdrop-blur-xs flex items-center justify-center p-4" id="manualOrderModal">
    <div class="bg-surface-container-lowest rounded-xl max-w-2xl w-full p-space-lg shadow-xl space-y-space-md max-h-[90vh] overflow-y-auto border border-outline-variant/30 animate-in fade-in zoom-in-95 duration-150">
        <div class="flex items-center justify-between pb-2 border-b border-surface-container">
            <div>
                <span class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-wider">Input Pesanan Studio Langsung</span>
                <h4 class="font-headline-md text-headline-md text-on-surface font-semibold">Buat Pesanan Manual / Offline (Walk-In)</h4>
            </div>
            <button class="p-1.5 rounded-lg text-secondary hover:bg-surface-container transition-colors cursor-pointer" onclick="closeManualOrderModal()" type="button">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        <form class="space-y-space-md" id="manualOrderForm" onsubmit="handleManualOrderSubmit(event)">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                <div>
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Nama Pasangan / Pemesan *</label>
                    <input class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" placeholder="Contoh: Rian &amp; Marissa" required="" type="text">
                </div>
                <div>
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Nomor WhatsApp Aktif *</label>
                    <input class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" placeholder="08xxxxxxxxxx" required="" type="tel">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                <div>
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Jenis Layanan / Produk *</label>
                    <select class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" required="">
                        <option value="mahar">Mahar Custom Pernikahan</option>
                        <option value="sewa">Sewa Kotak Seserahan Acrylic</option>
                        <option value="bundling">Paket Bundling (Mahar + Kotak)</option>
                    </select>
                </div>
                <div>
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Tanggal Acara Pernikahan *</label>
                    <input class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" required="" type="date">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                <div>
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Total Biaya (Rp) *</label>
                    <input class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" placeholder="1800000" required="" type="number">
                </div>
                <div>
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Uang Muka / DP (Rp) *</label>
                    <input class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" placeholder="900000" required="" type="number">
                </div>
                <div>
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Metode Bayar DP</label>
                    <select class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20">
                        <option value="cash">Tunai / Cash Studio</option>
                        <option value="transfer">Transfer Bank Studio</option>
                        <option value="midtrans">Kirim Link Midtrans Snap</option>
                    </select>
                </div>
            </div>
            <div>
                <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Detail Request Mahar / Pilihan Tray</label>
                <textarea class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" placeholder="Contoh: Frame Gold Leaf uk. 30x40 cm, tema blush peach, uang kuno 22 rupiah + replika antam 10gr..." rows="3"></textarea>
            </div>
            <div class="p-space-sm rounded-xl bg-surface-container-low flex items-center justify-between border border-outline-variant/20">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-[#2d7a4d] text-[20px]">mark_chat_read</span>
                    <span class="font-body-md text-body-md text-on-surface">Generate ID &amp; Kirim WhatsApp Invoice Resmi otomatis</span>
                </div>
                <span class="font-label-sm text-label-sm text-primary uppercase font-bold">Auto ID: ORD-2025-103</span>
            </div>
            <div class="flex items-center justify-end gap-space-sm pt-2 border-t border-surface-container-high/60">
                <button class="px-4 py-2 rounded-xl bg-surface-container text-secondary hover:bg-surface-container-high font-title-md text-title-md cursor-pointer" onclick="closeManualOrderModal()" type="button">
                    Batalkan
                </button>
                <button class="px-5 py-2 rounded-xl bg-primary text-on-primary hover:bg-primary-container font-title-md text-title-md shadow-xs cursor-pointer" type="submit">
                    Simpan Pesanan &amp; Terbitkan Invoice
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
            <p class="font-body-md text-body-md text-on-surface-variant" id="toastDesc">Pesan notifikasi WhatsApp berhasil dikirim ke gateway.</p>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
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

    function triggerWhatsApp(orderId, phone, clientName, templateType) {
        let msg = '';
        if (templateType === 'tagihan_pelunasan') {
            msg = `Halo Kak ${clientName}, kami menginformasikan pesanan nomor ${orderId} siap diambil/kirim. Mohon melakukan pelunasan sisa tagihan dowry sebelum tanggal acara.`;
        } else if (templateType === 'update_progres') {
            msg = `Halo Kak ${clientName}, atelier Cattaleya telah memperbarui progres pengerjaan mahar/seserahan pesanan ${orderId}. Artisan kami sedang menata bunga vitrine.`;
        } else if (templateType === 'reminder_pengembalian') {
            msg = `Halo Kak ${clientName}, pengingat pengembalian kotak seserahan untuk pesanan ${orderId}. Batas pengembalian adalah H+2 acara. Terima kasih!`;
        } else {
            msg = `Halo Kak ${clientName}, sistem informasi pesanan ${orderId} telah terhubung dengan Cattaleya Atelier.`;
        }

        // Simulasi pengiriman via WhatsApp API Gateway
        showToast('WhatsApp Terkirim', `Gateway meneruskan template "${templateType}" ke ${phone} (${clientName}).`);
    }

    function openStatusChangeModal(orderId, currentStatus) {
        const modal = document.getElementById('statusModal');
        const title = document.getElementById('statusModalOrderId');
        const select = document.getElementById('modalNewStatusSelect');
        
        if (title) title.innerText = orderId + ' (' + currentStatus + ')';
        if (modal) modal.classList.remove('hidden');
    }

    function closeStatusModal() {
        const modal = document.getElementById('statusModal');
        if (modal) modal.classList.add('hidden');
    }

    function saveStatusChange() {
        const select = document.getElementById('modalNewStatusSelect');
        const note = document.getElementById('statusNoteInput').value;
        const notify = document.getElementById('autoNotifyWa').checked;
        
        closeStatusModal();
        showToast('Status Diperbarui', `Status operasional dialihkan ke "${select.value}". ${notify ? 'Notifikasi WA dikirim ke pelanggan.' : ''}`);
    }

    function openManualOrderModal() {
        const modal = document.getElementById('manualOrderModal');
        if (modal) modal.classList.remove('hidden');
    }

    function closeManualOrderModal() {
        const modal = document.getElementById('manualOrderModal');
        if (modal) modal.classList.add('hidden');
    }

    function handleManualOrderSubmit(e) {
        e.preventDefault();
        closeManualOrderModal();
        showToast('Pesanan Tersimpan', 'Data pesanan offline ORD-2025-103 sukses dibuat dan jadwal sewa diamankan di studio.');
    }

    function openDetailModal(orderId) {
        showToast('Membuka Berkas Pesanan', `Menampilkan rekam jejak lengkap, form kontrak, dan bukti Midtrans untuk ${orderId}`);
        setTimeout(() => {
            window.location.href = "{{ url('/admin/pesanan') }}/" + orderId;
        }, 500);
    }

    const ordersMockData = {
        'ORD-2025-090': {
            name: 'Anindya Larasati',
            phone: '+62 812-9844-2110',
            type: 'mahar',
            date: '2025-10-22',
            total: 1600000,
            payment: 'dp',
            detail: 'Mahar Akrilik Vitrine (Ukiran Kayu Jati Rose Gold)',
            notes: 'Mempelai meminta ornamen bunga kering preserved warna champagne gold dengan aksen koin mas murni.'
        },
        'ORD-2025-084': {
            name: 'Bramantyo & Nadia',
            phone: '+62 877-3910-0234',
            type: 'sewa',
            date: '2025-05-17',
            total: 2450000,
            payment: 'lunas',
            detail: 'Sewa Kotak (8 Tray) - Series White Heritage Pearl',
            notes: 'Jadwal pengambilan H-2 studio Menteng, baki steril UV-C.'
        },
        'ORD-2025-078': {
            name: 'Clarissa Aurelia',
            phone: '+62 813-1109-9238',
            type: 'bundling',
            date: '2025-05-18',
            total: 3850000,
            payment: 'menunggu_dp',
            detail: 'Bundling Mahar + 6 Kotak (Tema Champagne Bloom Terracotta)',
            notes: 'Pelunasan sisa H-3 saat ambil barang di studio.'
        },
        'ORD-2025-095': {
            name: 'Dimas & Farida',
            phone: '+62 852-2033-4811',
            type: 'mahar',
            date: '2025-06-06',
            total: 2100000,
            payment: 'dp',
            detail: 'Mahar Kaligrafi Koin Emas (Ukuran 40x50 Frame Gold Leaf)',
            notes: 'Menunggu persetujuan draft mockup kaligrafi V1.'
        },
        'ORD-2025-062': {
            name: 'Rizky & Amanda',
            phone: '+62 818-0922-8833',
            type: 'sewa',
            date: '2025-05-04',
            total: 3200000,
            payment: 'lunas',
            detail: 'Sewa Kotak (10 Tray) - Series Velvet Sage Emas',
            notes: 'Acara telah selesai, kotak kembali dalam kondisi aman & deposit dikembalikan.'
        },
        'ORD-2025-102': {
            name: 'Taufik Hidayat',
            phone: '+62 896-5544-1029',
            type: 'mahar',
            date: '2025-07-12',
            total: 1450000,
            payment: 'menunggu_dp',
            detail: 'Mahar Geometris Logam Mulia (Hexagon Brass Series)',
            notes: 'Menunggu transfer DP via Midtrans Snap.'
        },
        'ORD-2025-088': {
            name: 'Vania Safitri',
            phone: '+62 812-2990-0412',
            type: 'sewa',
            date: '2025-05-25',
            total: 1800000,
            payment: 'dp',
            detail: 'Sewa Kotak (6 Tray) - Series Rustic Terracotta Wood',
            notes: 'Artisan Mas Daffa sedang mengatur alas velvet dan bunga kering.'
        },
        'ORD-2025-055': {
            name: 'Arya Wiguna',
            phone: '+62 817-7443-109',
            type: 'mahar',
            date: '2025-04-08',
            total: 1150000,
            payment: 'refund',
            detail: 'Mahar Koin Minimalis (Frame Natural Pine 30x30)',
            notes: 'Pesanan dibatalkan karena perubahan jadwal akad, refund diproses.'
        }
    };

    function openEditModal(orderId) {
        const modal = document.getElementById('editOrderModal');
        const modalTitle = document.getElementById('editOrderModalTitle');
        const hiddenId = document.getElementById('editOrderIdHidden');
        const clientName = document.getElementById('editClientName');
        const clientPhone = document.getElementById('editClientPhone');
        const orderType = document.getElementById('editOrderType');
        const eventDate = document.getElementById('editEventDate');
        const totalAmount = document.getElementById('editTotalAmount');
        const paymentStatus = document.getElementById('editPaymentStatus');
        const productDetail = document.getElementById('editProductDetail');
        const notes = document.getElementById('editNotes');

        const data = ordersMockData[orderId] || {
            name: 'Nama Klien',
            phone: '+62 812-0000-0000',
            type: 'mahar',
            date: '2025-10-20',
            total: 1500000,
            payment: 'dp',
            detail: 'Spesifikasi Pesanan Studio',
            notes: 'Catatan pesanan'
        };

        if (hiddenId) hiddenId.value = orderId;
        if (modalTitle) modalTitle.innerText = `Edit Data Pesanan #${orderId}`;
        if (clientName) clientName.value = data.name;
        if (clientPhone) clientPhone.value = data.phone;
        if (orderType) orderType.value = data.type;
        if (eventDate) eventDate.value = data.date;
        if (totalAmount) totalAmount.value = data.total;
        if (paymentStatus) paymentStatus.value = data.payment;
        if (productDetail) productDetail.value = data.detail;
        if (notes) notes.value = data.notes;

        if (modal) {
            modal.classList.remove('hidden');
        }
    }

    function closeEditModal() {
        const modal = document.getElementById('editOrderModal');
        if (modal) modal.classList.add('hidden');
    }

    function handleEditOrderSubmit(e) {
        e.preventDefault();
        const orderId = document.getElementById('editOrderIdHidden').value || 'Pesanan';
        const clientName = document.getElementById('editClientName').value;
        const notify = document.getElementById('notifyClientOnEdit').checked;

        closeEditModal();
        showToast('Perubahan Disimpan', `Data pesanan ${orderId} (${clientName}) berhasil diperbarui.${notify ? ' Konfirmasi pembaruan telah dikirim ke WhatsApp klien.' : ''}`);
    }

    function openWaTestModal() {
        showToast('Status Gateway Normal', 'WhatsApp Webhook & Midtrans Payment Callback beroperasi tanpa kendala (Latensi: 142ms).');
    }

    function exportCsvData() {
        showToast('Export CSV Selesai', 'Data 184 pesanan studio sedang diunduh dalam format .csv terkompresi.');
    }

    function applyFilter() {
        const search = document.getElementById('searchInput').value.toLowerCase().trim();
        const type = document.getElementById('typeFilter').value;
        const payment = document.getElementById('paymentFilter').value;
        const status = document.getElementById('statusFilter').value;

        const rows = document.querySelectorAll('#pesananTable tbody tr.order-row');
        let visibleCount = 0;

        rows.forEach(row => {
            const rowText = row.innerText.toLowerCase();
            const rowType = row.dataset.type || '';
            const rowPayment = row.dataset.payment || '';
            const rowStatus = row.dataset.status || '';

            const matchSearch = !search || rowText.includes(search);
            const matchType = (type === 'all') || (rowType === type);
            const matchPayment = (payment === 'all') || (rowPayment === payment);
            const matchStatus = (status === 'all') || (rowStatus === status);

            if (matchSearch && matchType && matchPayment && matchStatus) {
                row.style.display = '';
                visibleCount++;
            } else {
                row.style.display = 'none';
            }
        });

        showToast('Filter Diterapkan', `Menampilkan ${visibleCount} pesanan sesuai parameter yang dipilih.`);
    }

    function resetFilter() {
        document.getElementById('searchInput').value = '';
        document.getElementById('typeFilter').value = 'all';
        document.getElementById('paymentFilter').value = 'all';
        document.getElementById('statusFilter').value = 'all';

        const rows = document.querySelectorAll('#pesananTable tbody tr.order-row');
        rows.forEach(row => {
            row.style.display = '';
        });

        showToast('Filter Direset', 'Menampilkan seluruh daftar pesanan atelier Cattaleya.');
    }
</script>
@endpush
