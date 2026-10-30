@extends('layouts.owner')

@section('title', 'Data Seluruh Pesanan — Cattaleya Atelier Owner')

@section('content')
<div class="flex flex-col w-full">
<!-- Subtle Architectural Glow & Branding Watermark Accent -->
<div class="relative w-full flex flex-col gap-space-lg mb-space-xl">
<!-- Top Header Banner (No duplicate main branding, focuses on Page Domain) -->
<div class="flex flex-col lg:flex-row lg:items-end justify-between gap-space-md p-space-lg bg-surface-container-lowest rounded-xl shadow-[0_4px_24px_rgba(90,72,56,0.04)] relative overflow-hidden">
<!-- Decorative floral subtle ambient flourish -->
<div class="absolute -right-8 -top-12 w-64 h-64 opacity-5 pointer-events-none text-primary">
<svg class="w-full h-full" fill="currentColor" viewBox="0 0 200 200">
<path d="M100 20 C110 50 140 60 170 65 C145 85 140 115 150 145 C125 130 95 145 75 165 C75 135 55 115 25 110 C50 95 60 65 65 35 C80 55 90 35 100 20 Z"></path>
</svg>
</div>
<div class="flex flex-col gap-space-xs z-10">
<div class="flex items-center gap-space-sm">
<span class="inline-flex items-center gap-1.5 px-space-sm py-0.5 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-sm">inventory_2</span>
            PORTAL OWNER
          </span>
<span class="inline-flex items-center gap-1.5 px-space-sm py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
            Total 184 Pesanan Tercatat
          </span>
</div>
<h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">
          Data Seluruh Pesanan
        </h1>
<p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
          Monitoring pesanan mahar dan jadwal sewa kotak seserahan pernikahan secara komprehensif dalam mode eksekutif.
        </p>
</div>
<!-- Quick Executive Metrics Ticker -->
<div class="flex items-center gap-space-md z-10 pt-space-xs lg:pt-0">
<div class="flex flex-col px-space-md py-space-xs bg-surface-container-low rounded-lg">
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Aktif Berjalan</span>
<span class="font-metric-display text-metric-display text-primary leading-tight">42</span>
</div>
<div class="flex flex-col px-space-md py-space-xs bg-surface-container-low rounded-lg">
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Sewa Berlangsung</span>
<span class="font-metric-display text-metric-display text-secondary leading-tight">18</span>
</div>
<div class="flex flex-col px-space-md py-space-xs bg-surface-container-low rounded-lg">
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Pelunasan Pending</span>
<span class="font-metric-display text-metric-display text-tertiary leading-tight">12</span>
</div>
</div>
</div>
<!-- Master Filter Panel (Tactile Luxury Canvas) -->
<div class="p-space-lg bg-surface-container-lowest rounded-xl shadow-[0_2px_12px_rgba(90,72,56,0.03)] flex flex-col gap-space-md">
<div class="flex items-center justify-between pb-space-xs">
<div class="flex items-center gap-space-xs text-on-surface">
<span class="material-symbols-outlined text-primary text-lg">tune</span>
<span class="font-title-md text-title-md font-semibold">Filter &amp; Kurasi Pesanan</span>
</div>
<span class="font-label-sm text-label-sm text-outline tracking-wider uppercase">Pencarian Cepat Berlaku Realtime</span>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-space-md items-end">
<!-- Search Box -->
<div class="flex flex-col gap-1.5 lg:col-span-1">
<label class="font-label-sm text-label-sm text-on-surface-variant font-medium" for="searchInput">Cari ID / Pelanggan</label>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute left-3 text-outline text-lg pointer-events-none">search</span>
<input class="w-full bg-surface-container-low text-on-surface font-body-md text-body-md pl-9 pr-3 py-2 rounded-lg outline-none focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#775625] transition-all placeholder:text-outline/70" id="searchInput" placeholder="Contoh: ORD-090 atau Maya..." type="text">
</div>
</div>
<!-- Filter 1: Jenis Pesanan -->
<div class="flex flex-col gap-1.5">
<label class="font-label-sm text-label-sm text-on-surface-variant font-medium" for="orderTypeFilter">Jenis Pesanan</label>
<div class="relative flex items-center">
<select class="w-full bg-surface-container-low text-on-surface font-body-md text-body-md px-3 py-2 rounded-lg appearance-none outline-none focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#775625] transition-all pr-8 cursor-pointer" id="orderTypeFilter">
<option value="all">Semua Jenis</option>
<option value="Mahar Pernikahan">Mahar Pernikahan</option>
<option value="Sewa Kotak Seserahan">Penyewaan Kotak Seserahan</option>
<option value="Paket Bundling">Paket Bundling</option>
</select>
<span class="material-symbols-outlined absolute right-2.5 text-outline text-base pointer-events-none">expand_more</span>
</div>
</div>
<!-- Filter 2: Status Pembayaran -->
<div class="flex flex-col gap-1.5">
<label class="font-label-sm text-label-sm text-on-surface-variant font-medium" for="paymentStatusFilter">Status Pembayaran</label>
<div class="relative flex items-center">
<select class="w-full bg-surface-container-low text-on-surface font-body-md text-body-md px-3 py-2 rounded-lg appearance-none outline-none focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#775625] transition-all pr-8 cursor-pointer" id="paymentStatusFilter">
<option value="all">Semua Status Pembayaran</option>
<option value="Lunas">Lunas</option>
<option value="DP">DP (Uang Muka)</option>
<option value="Belum Bayar">Belum Bayar</option>
</select>
<span class="material-symbols-outlined absolute right-2.5 text-outline text-base pointer-events-none">expand_more</span>
</div>
</div>
<!-- Filter 3: Status Pesanan -->
<div class="flex flex-col gap-1.5">
<label class="font-label-sm text-label-sm text-on-surface-variant font-medium" for="orderStatusFilter">Status Pesanan</label>
<div class="relative flex items-center">
<select class="w-full bg-surface-container-low text-on-surface font-body-md text-body-md px-3 py-2 rounded-lg appearance-none outline-none focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#775625] transition-all pr-8 cursor-pointer" id="orderStatusFilter">
<option value="all">Semua Status</option>
<option value="Diproses">Diproses</option>
<option value="Siap Diambil">Siap Diambil</option>
<option value="Sedang Disewa">Sedang Disewa</option>
<option value="Selesai">Selesai</option>
<option value="Menunggu Konfirmasi">Menunggu Konfirmasi</option>
<option value="Dibatalkan">Dibatalkan</option>
</select>
<span class="material-symbols-outlined absolute right-2.5 text-outline text-base pointer-events-none">expand_more</span>
</div>
</div>
<!-- Filter 4: Tanggal Acara / Periode -->
<div class="flex flex-col gap-1.5">
<label class="font-label-sm text-label-sm text-on-surface-variant font-medium" for="eventDateFilter">Tanggal Acara</label>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute left-3 text-outline text-base pointer-events-none">calendar_month</span>
<input class="w-full bg-surface-container-low text-on-surface font-body-md text-body-md pl-9 pr-2 py-2 rounded-lg outline-none focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#775625] transition-all text-sm cursor-pointer" id="eventDateFilter" type="date">
</div>
</div>
</div>
</div>
<!-- Main Table Card -->
<div class="w-full bg-surface-container-lowest rounded-xl shadow-[0_2px_16px_rgba(90,72,56,0.05)] overflow-hidden flex flex-col">
<!-- Table Responsive Wrapper -->
<div class="overflow-x-auto w-full">
<table class="w-full text-left border-collapse" id="ordersTable">
<thead>
<tr class="bg-surface-container-high/60 text-on-surface-variant">
<th class="py-3.5 px-space-md font-label-sm text-label-sm uppercase tracking-wider whitespace-nowrap" scope="col">ID Pesanan</th>
<th class="py-3.5 px-space-md font-label-sm text-label-sm uppercase tracking-wider whitespace-nowrap" scope="col">Nama Pelanggan</th>
<th class="py-3.5 px-space-md font-label-sm text-label-sm uppercase tracking-wider whitespace-nowrap" scope="col">Jenis Pesanan</th>
<th class="py-3.5 px-space-md font-label-sm text-label-sm uppercase tracking-wider whitespace-nowrap" scope="col">Tanggal Acara</th>
<th class="py-3.5 px-space-md font-label-sm text-label-sm uppercase tracking-wider whitespace-nowrap text-right" scope="col">Total Harga</th>
<th class="py-3.5 px-space-md font-label-sm text-label-sm uppercase tracking-wider whitespace-nowrap text-right" scope="col">Nominal Dibayar</th>
<th class="py-3.5 px-space-md font-label-sm text-label-sm uppercase tracking-wider whitespace-nowrap text-right" scope="col">Sisa Pembayaran</th>
<th class="py-3.5 px-space-md font-label-sm text-label-sm uppercase tracking-wider whitespace-nowrap text-center" scope="col">Status Pembayaran</th>
<th class="py-3.5 px-space-md font-label-sm text-label-sm uppercase tracking-wider whitespace-nowrap text-center" scope="col">Status Pesanan</th>
<th class="py-3.5 px-space-md font-label-sm text-label-sm uppercase tracking-wider whitespace-nowrap text-center" scope="col">Aksi</th>
</tr>
</thead>
<tbody class="text-on-surface divide-y-0" id="orderTableBody">
<!-- Row 1: ORD-089 -->
<tr class="hover:bg-surface-container-low/70 transition-colors duration-150 group">
<td class="py-4 px-space-md whitespace-nowrap">
<a href="{{ request()->routeIs('preview.*') ? route('preview.owner-pesanan-detail') : route('owner.pesanan.detail') }}" class="font-title-md text-title-md font-bold text-primary hover:underline">ORD-089</a>
</td>
<td class="py-4 px-space-md whitespace-nowrap">
<div class="flex items-center gap-space-xs">
<div class="w-7 h-7 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center font-label-sm text-label-sm font-semibold">AR</div>
<span class="font-title-md text-title-md font-medium text-on-surface">Anisa Rahmawati</span>
</div>
</td>
<td class="py-4 px-space-md whitespace-nowrap">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-xs">auto_awesome</span>
                  Mahar Pernikahan
                </span>
</td>
<td class="py-4 px-space-md whitespace-nowrap">
<span class="font-body-md text-body-md text-on-surface font-medium">15 Okt 2025</span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-right">
<span class="font-body-md text-body-md font-semibold text-on-surface">Rp 2.450.000</span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-right">
<span class="font-body-md text-body-md text-primary font-semibold">Rp 2.450.000</span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-right">
<span class="font-body-md text-body-md text-outline">Rp 0</span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-center">
<!-- Hijau untuk Lunas -->
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#EBF4EC] text-[#2F613A] font-label-sm text-label-sm font-medium">
<span class="w-1.5 h-1.5 rounded-full bg-[#2F613A]"></span>
                  Lunas
                </span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-center">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container-low text-on-surface font-label-sm text-label-sm">
<span class="material-symbols-outlined text-xs text-[#2F613A]">check_circle</span>
                  Selesai
                </span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-center">
<button type="button" onclick="openOrderModal('ORD-089', 'Anisa Rahmawati', 'Mahar Pernikahan', '15 Okt 2025', 'Rp 2.450.000', 'Rp 2.450.000', 'Rp 0', 'Lunas', 'Selesai', 'Pigura 3D Gold Leaf Motif Cattaleya 40x50 cm, Logam Mulia 10gr Replicas, Kaligrafi Kufi Timbul')" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-surface hover:bg-surface-container-high text-primary font-label-md text-label-md font-medium transition-all shadow-sm hover:shadow cursor-pointer"><span class="material-symbols-outlined text-base">visibility</span><span>Lihat Detail</span></button>
</td>
</tr>
<!-- Row 2: ORD-090 -->
<tr class="hover:bg-surface-container-low/70 transition-colors duration-150 group">
<td class="py-4 px-space-md whitespace-nowrap">
<a href="{{ request()->routeIs('preview.*') ? route('preview.owner-pesanan-detail') : route('owner.pesanan.detail') }}" class="font-title-md text-title-md font-bold text-primary hover:underline">ORD-090</a>
</td>
<td class="py-4 px-space-md whitespace-nowrap">
<div class="flex items-center gap-space-xs">
<div class="w-7 h-7 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center font-label-sm text-label-sm font-semibold">DP</div>
<span class="font-title-md text-title-md font-medium text-on-surface">Dinda Tri Permata</span>
</div>
</td>
<td class="py-4 px-space-md whitespace-nowrap">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm">
<span class="material-symbols-outlined text-xs">all_inbox</span>
                  Sewa Kotak Seserahan
                </span>
</td>
<td class="py-4 px-space-md whitespace-nowrap">
<span class="font-body-md text-body-md text-on-surface font-medium">22 Okt 2025</span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-right">
<span class="font-body-md text-body-md font-semibold text-on-surface">Rp 1.600.000</span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-right">
<span class="font-body-md text-body-md text-primary font-semibold">Rp 800.000</span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-right">
<span class="font-body-md text-body-md text-error font-semibold">Rp 800.000</span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-center">
<!-- Kuning Emas untuk DP -->
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#FCF5E5] text-[#8C6212] font-label-sm text-label-sm font-medium">
<span class="w-1.5 h-1.5 rounded-full bg-[#8C6212]"></span>
                  DP (50%)
                </span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-center">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container-high text-secondary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-xs">handshake</span>
                  Sedang Disewa
                </span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-center">
<button type="button" onclick="openOrderModal('ORD-090', 'Dinda Tri Permata', 'Sewa Kotak Seserahan', '22 Okt 2025', 'Rp 1.600.000', 'Rp 800.000', 'Rp 800.000', 'DP (50%)', 'Sedang Disewa', '8 Kotak Akrilik Eksklusif Champagne Gold, Bunga Sutra Premium Cattaleya Series, Nampan Kayu Ukir Jati')" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-surface hover:bg-surface-container-high text-primary font-label-md text-label-md font-medium transition-all shadow-sm hover:shadow cursor-pointer"><span class="material-symbols-outlined text-base">visibility</span><span>Lihat Detail</span></button>
</td>
</tr>
<!-- Row 3: ORD-091 -->
<tr class="hover:bg-surface-container-low/70 transition-colors duration-150 group">
<td class="py-4 px-space-md whitespace-nowrap">
<a href="{{ request()->routeIs('preview.*') ? route('preview.owner-pesanan-detail') : route('owner.pesanan.detail') }}" class="font-title-md text-title-md font-bold text-primary hover:underline">ORD-091</a>
</td>
<td class="py-4 px-space-md whitespace-nowrap">
<div class="flex items-center gap-space-xs">
<div class="w-7 h-7 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center font-label-sm text-label-sm font-semibold">RP</div>
<span class="font-title-md text-title-md font-medium text-on-surface">Rizky Pratama</span>
</div>
</td>
<td class="py-4 px-space-md whitespace-nowrap">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-xs">auto_awesome</span>
                  Mahar Pernikahan
                </span>
</td>
<td class="py-4 px-space-md whitespace-nowrap">
<span class="font-body-md text-body-md text-on-surface font-medium">28 Okt 2025</span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-right">
<span class="font-body-md text-body-md font-semibold text-on-surface">Rp 3.200.000</span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-right">
<span class="font-body-md text-body-md text-primary font-semibold">Rp 1.600.000</span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-right">
<span class="font-body-md text-body-md text-error font-semibold">Rp 1.600.000</span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-center">
<!-- Kuning Emas untuk DP -->
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#FCF5E5] text-[#8C6212] font-label-sm text-label-sm font-medium">
<span class="w-1.5 h-1.5 rounded-full bg-[#8C6212]"></span>
                  DP (50%)
                </span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-center">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-container/60 text-secondary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-xs animate-spin">refresh</span>
                  Diproses
                </span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-center">
<button type="button" onclick="openOrderModal('ORD-091', 'Rizky Pratama', 'Mahar Pernikahan', '28 Okt 2025', 'Rp 3.200.000', 'Rp 1.600.000', 'Rp 1.600.000', 'DP (50%)', 'Diproses', 'Terrarium Dome Kaca Hexagon, Dried Preserved Blossom Botanicals, Rangkaian Cincin &amp; Dinar Emas Murni')" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-surface hover:bg-surface-container-high text-primary font-label-md text-label-md font-medium transition-all shadow-sm hover:shadow cursor-pointer"><span class="material-symbols-outlined text-base">visibility</span><span>Lihat Detail</span></button>
</td>
</tr>
<!-- Row 4: ORD-092 -->
<tr class="hover:bg-surface-container-low/70 transition-colors duration-150 group">
<td class="py-4 px-space-md whitespace-nowrap">
<a href="{{ request()->routeIs('preview.*') ? route('preview.owner-pesanan-detail') : route('owner.pesanan.detail') }}" class="font-title-md text-title-md font-bold text-primary hover:underline">ORD-092</a>
</td>
<td class="py-4 px-space-md whitespace-nowrap">
<div class="flex items-center gap-space-xs">
<div class="w-7 h-7 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center font-label-sm text-label-sm font-semibold">MI</div>
<span class="font-title-md text-title-md font-medium text-on-surface">Maya Indah Sari</span>
</div>
</td>
<td class="py-4 px-space-md whitespace-nowrap">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm">
<span class="material-symbols-outlined text-xs">all_inbox</span>
                  Sewa Kotak Seserahan
                </span>
</td>
<td class="py-4 px-space-md whitespace-nowrap">
<span class="font-body-md text-body-md text-on-surface font-medium">02 Nov 2025</span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-right">
<span class="font-body-md text-body-md font-semibold text-on-surface">Rp 2.000.000</span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-right">
<span class="font-body-md text-body-md text-primary font-semibold">Rp 2.000.000</span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-right">
<span class="font-body-md text-body-md text-outline">Rp 0</span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-center">
<!-- Hijau untuk Lunas -->
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#EBF4EC] text-[#2F613A] font-label-sm text-label-sm font-medium">
<span class="w-1.5 h-1.5 rounded-full bg-[#2F613A]"></span>
                  Lunas
                </span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-center">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-primary-fixed text-on-primary-fixed font-label-sm text-label-sm font-medium">
<span class="material-symbols-outlined text-xs">inventory</span>
                  Siap Diambil
                </span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-center">
<button type="button" onclick="openOrderModal('ORD-092', 'Maya Indah Sari', 'Sewa Kotak Seserahan', '02 Nov 2025', 'Rp 2.000.000', 'Rp 2.000.000', 'Rp 0', 'Lunas', 'Siap Diambil', '10 Kotak Seserahan Akrilik Velvet Emerald, Hiasan Pita Satin Dusty Pink, Nampan Ukir Antik')" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-surface hover:bg-surface-container-high text-primary font-label-md text-label-md font-medium transition-all shadow-sm hover:shadow cursor-pointer"><span class="material-symbols-outlined text-base">visibility</span><span>Lihat Detail</span></button>
</td>
</tr>
<!-- Row 5: ORD-093 -->
<tr class="hover:bg-surface-container-low/70 transition-colors duration-150 group">
<td class="py-4 px-space-md whitespace-nowrap">
<a href="{{ request()->routeIs('preview.*') ? route('preview.owner-pesanan-detail') : route('owner.pesanan.detail') }}" class="font-title-md text-title-md font-bold text-primary hover:underline">ORD-093</a>
</td>
<td class="py-4 px-space-md whitespace-nowrap">
<div class="flex items-center gap-space-xs">
<div class="w-7 h-7 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center font-label-sm text-label-sm font-semibold">SW</div>
<span class="font-title-md text-title-md font-medium text-on-surface">Satria Wicaksana</span>
</div>
</td>
<td class="py-4 px-space-md whitespace-nowrap">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-xs">auto_awesome</span>
                  Mahar Pernikahan
                </span>
</td>
<td class="py-4 px-space-md whitespace-nowrap">
<span class="font-body-md text-body-md text-on-surface font-medium">05 Nov 2025</span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-right">
<span class="font-body-md text-body-md font-semibold text-on-surface">Rp 1.850.000</span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-right">
<span class="font-body-md text-body-md text-primary font-semibold">Rp 1.850.000</span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-right">
<span class="font-body-md text-body-md text-outline">Rp 0</span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-center">
<!-- Hijau untuk Lunas -->
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#EBF4EC] text-[#2F613A] font-label-sm text-label-sm font-medium">
<span class="w-1.5 h-1.5 rounded-full bg-[#2F613A]"></span>
                  Lunas
                </span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-center">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container-low text-on-surface font-label-sm text-label-sm">
<span class="material-symbols-outlined text-xs text-[#2F613A]">check_circle</span>
                  Selesai
                </span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-center">
<button type="button" onclick="openOrderModal('ORD-093', 'Satria Wicaksana', 'Mahar Pernikahan', '05 Nov 2025', 'Rp 1.850.000', 'Rp 1.850.000', 'Rp 0', 'Lunas', 'Selesai', 'Pigura Kayu Minimalis Warm Alabaster 30x40 cm, Hiasan Daun Emas Kering, Replika Cek Mahar Custom')" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-surface hover:bg-surface-container-high text-primary font-label-md text-label-md font-medium transition-all shadow-sm hover:shadow cursor-pointer"><span class="material-symbols-outlined text-base">visibility</span><span>Lihat Detail</span></button>
</td>
</tr>
<!-- Row 6: ORD-094 -->
<tr class="hover:bg-surface-container-low/70 transition-colors duration-150 group">
<td class="py-4 px-space-md whitespace-nowrap">
<a href="{{ request()->routeIs('preview.*') ? route('preview.owner-pesanan-detail') : route('owner.pesanan.detail') }}" class="font-title-md text-title-md font-bold text-primary hover:underline">ORD-094</a>
</td>
<td class="py-4 px-space-md whitespace-nowrap">
<div class="flex items-center gap-space-xs">
<div class="w-7 h-7 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center font-label-sm text-label-sm font-semibold">BC</div>
<span class="font-title-md text-title-md font-medium text-on-surface">Bella Clarissa</span>
</div>
</td>
<td class="py-4 px-space-md whitespace-nowrap">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm">
<span class="material-symbols-outlined text-xs">all_inbox</span>
                  Sewa Kotak Seserahan
                </span>
</td>
<td class="py-4 px-space-md whitespace-nowrap">
<span class="font-body-md text-body-md text-on-surface font-medium">12 Nov 2025</span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-right">
<span class="font-body-md text-body-md font-semibold text-on-surface">Rp 2.500.000</span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-right">
<span class="font-body-md text-body-md text-primary font-semibold">Rp 1.000.000</span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-right">
<span class="font-body-md text-body-md text-error font-semibold">Rp 1.500.000</span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-center">
<!-- Oranye/Kuning Emas untuk DP Sebagian -->
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#FFF1E5] text-[#9D4C13] font-label-sm text-label-sm font-medium">
<span class="w-1.5 h-1.5 rounded-full bg-[#9D4C13]"></span>
                  DP Sebagian
                </span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-center">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-container/60 text-secondary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-xs animate-spin">refresh</span>
                  Diproses
                </span>
</td>
<td class="py-4 px-space-md whitespace-nowrap text-center">
<button type="button" onclick="openOrderModal('ORD-094', 'Bella Clarissa', 'Sewa Kotak Seserahan', '12 Nov 2025', 'Rp 2.500.000', 'Rp 1.000.000', 'Rp 1.500.000', 'DP Sebagian', 'Diproses', '12 Kotak Deluxe Seserahan Sangjit Edisi Rose Gold, Tatakan Akrilik Mirror, Bunga Peony &amp; Orchid Handmade')" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-surface hover:bg-surface-container-high text-primary font-label-md text-label-md font-medium transition-all shadow-sm hover:shadow cursor-pointer"><span class="material-symbols-outlined text-base">visibility</span><span>Lihat Detail</span></button>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Table Ledger Footer & Pagination (Read-Only Luxury Paging) -->
<div class="p-space-md bg-surface-container-low/50 flex flex-col sm:flex-row items-center justify-between gap-space-md">
<div class="flex items-center gap-space-xs text-on-surface-variant font-body-md text-body-md">
<span>Menampilkan</span>
<span class="font-semibold text-on-surface">1 - 6</span>
<span>dari</span>
<span class="font-semibold text-on-surface">184</span>
<span>pesanan terdaftar</span>
</div>
<!-- Read-Only Page Navigation Controls -->
<div class="flex items-center gap-1.5">
<button class="w-8 h-8 rounded-lg bg-surface-container-low text-outline/50 flex items-center justify-center cursor-not-allowed" disabled="" type="button">
<span class="material-symbols-outlined text-base">chevron_left</span>
</button>
<button class="w-8 h-8 rounded-lg bg-primary text-on-primary font-label-sm text-label-sm font-semibold shadow-sm flex items-center justify-center" type="button">
            1
          </button>
<button class="w-8 h-8 rounded-lg bg-surface-container-lowest hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm font-semibold transition-colors flex items-center justify-center" type="button">
            2
          </button>
<button class="w-8 h-8 rounded-lg bg-surface-container-lowest hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm font-semibold transition-colors flex items-center justify-center" type="button">
            3
          </button>
<span class="px-1 text-outline font-label-sm text-label-sm">...</span>
<button class="w-8 h-8 rounded-lg bg-surface-container-lowest hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm font-semibold transition-colors flex items-center justify-center" type="button">
            31
          </button>
<button class="w-8 h-8 rounded-lg bg-surface-container-lowest hover:bg-surface-container-high text-on-surface flex items-center justify-center transition-colors" type="button">
<span class="material-symbols-outlined text-base">chevron_right</span>
</button>
</div>
</div>
</div>
</div>
<!-- Immutable Read-Only Dossier Modal Overlay -->
<div class="fixed inset-0 z-50 hidden items-center justify-center p-4 bg-on-background/40 backdrop-blur-sm transition-all duration-300" id="orderDetailModal">
<div class="bg-surface-container-lowest rounded-xl max-w-xl w-full p-space-lg shadow-[0_24px_48px_-12px_rgba(45,34,25,0.24)] flex flex-col gap-space-md relative max-h-[921px] overflow-y-auto">
<!-- Modal Top Header -->
<div class="flex items-center justify-between pb-space-xs">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Berkas Resmi Studio Cattaleya</span>
<h2 class="font-headline-md text-headline-md text-on-surface" id="modalOrderId">ORD-000</h2>
</div>
<button class="w-8 h-8 rounded-full bg-surface-container-low hover:bg-surface-container-high text-on-surface flex items-center justify-center transition-colors" onclick="closeOrderModal()" type="button">
<span class="material-symbols-outlined text-xl">close</span>
</button>
</div>
<!-- Ornamental Brand Hairline Motif -->
<div class="flex items-center justify-center gap-space-sm text-primary/40">
<div class="h-[1px] flex-1 bg-surface-variant"></div>
<span class="text-xs">&diams;</span>
<div class="h-[1px] flex-1 bg-surface-variant"></div>
</div>
<!-- Customer Overview Cards -->
<div class="grid grid-cols-2 gap-space-sm">
<div class="p-space-sm bg-surface-container-low rounded-lg flex flex-col">
<span class="font-label-sm text-label-sm text-outline">Pelanggan</span>
<span class="font-title-md text-title-md font-semibold text-on-surface" id="modalCustomerName">-</span>
</div>
<div class="p-space-sm bg-surface-container-low rounded-lg flex flex-col">
<span class="font-label-sm text-label-sm text-outline">Tanggal Pelaksanaan</span>
<span class="font-title-md text-title-md font-semibold text-on-surface" id="modalEventDate">-</span>
</div>
</div>
<!-- Craft Specifications & Dossier Notes -->
<div class="flex flex-col gap-1 p-space-sm bg-surface rounded-lg">
<span class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-wider">Spesifikasi Karya &amp; Komposisi</span>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed" id="modalCraftSpec">-</p>
</div>
<!-- Financial Status Breakdown (Owner View) -->
<div class="flex flex-col gap-space-xs pt-space-xs">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Rincian Finansial &amp; Pembayaran</span>
<div class="flex flex-col gap-2 p-space-sm bg-surface-container-low rounded-lg">
<div class="flex justify-between font-body-md text-body-md">
<span class="text-on-surface-variant">Nilai Pesanan:</span>
<span class="font-bold text-on-surface" id="modalTotalPrice">-</span>
</div>
<div class="flex justify-between font-body-md text-body-md">
<span class="text-on-surface-variant">Nominal Masuk (Paid):</span>
<span class="font-bold text-primary" id="modalPaidPrice">-</span>
</div>
<div class="flex justify-between font-body-md text-body-md">
<span class="text-on-surface-variant">Sisa Pelunasan:</span>
<span class="font-bold text-error" id="modalRemainingPrice">-</span>
</div>
<div class="flex justify-between font-body-md text-body-md pt-2">
<span class="text-on-surface-variant">Status Finansial:</span>
<span class="font-semibold text-on-surface" id="modalPaymentBadge">-</span>
</div>
<div class="flex justify-between font-body-md text-body-md">
<span class="text-on-surface-variant">Status Pengerjaan:</span>
<span class="font-semibold text-secondary" id="modalOrderStatus">-</span>
</div>
</div>
</div>
<!-- Actions: Tutup & Buka Dossier Penuh -->
<div class="pt-space-sm flex items-center justify-end gap-space-sm">
<button class="px-space-md py-2 rounded-lg bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-label-md text-label-md font-semibold transition-all cursor-pointer" onclick="closeOrderModal()" type="button">
          Tutup Rincian
</button>
<a id="modalDetailLink" href="{{ request()->routeIs('preview.*') ? route('preview.owner-pesanan-detail') : route('owner.pesanan.detail') }}" class="inline-flex items-center gap-1.5 px-space-md py-2 rounded-lg bg-primary hover:bg-primary-container text-on-primary font-label-md text-label-md font-semibold transition-all shadow-sm">
    <span class="material-symbols-outlined text-sm">open_in_new</span>
    <span>Buka Dossier Lengkap</span>
</a>
</div>
</div>
</div>
</div>
@endsection

@push('scripts')
<script>
    window.openOrderModal = function(id, customer, type, date, total, paid, remaining, payStatus, orderStatus, spec) {
      document.getElementById('modalOrderId').innerText = id + ' — ' + type;
      document.getElementById('modalCustomerName').innerText = customer;
      document.getElementById('modalEventDate').innerText = date;
      document.getElementById('modalTotalPrice').innerText = total;
      document.getElementById('modalPaidPrice').innerText = paid;
      document.getElementById('modalRemainingPrice').innerText = remaining;
      document.getElementById('modalPaymentBadge').innerText = payStatus;
      document.getElementById('modalOrderStatus').innerText = orderStatus;
      document.getElementById('modalCraftSpec').innerText = spec;

      // Update link to full dossier page
      const detailLink = document.getElementById('modalDetailLink');
      if (detailLink) {
        const isPreview = window.location.pathname.includes('/preview');
        if (isPreview) {
          detailLink.href = "{{ route('preview.owner-pesanan-detail') }}?id=" + encodeURIComponent(id);
        } else {
          detailLink.href = "{{ url('/owner/pesanan/detail') }}/" + encodeURIComponent(id);
        }
      }

      var modal = document.getElementById('orderDetailModal');
      if (modal) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
      }
    };

    window.closeOrderModal = function() {
      var modal = document.getElementById('orderDetailModal');
      if (modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
      }
    };

    document.addEventListener('DOMContentLoaded', function() {
      // Close modal on backdrop click
      const modal = document.getElementById('orderDetailModal');
      if (modal) {
        modal.addEventListener('click', function(e) {
          if (e.target === this) {
            window.closeOrderModal();
          }
        });
      }

      // Close modal on escape key
      document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
          window.closeOrderModal();
        }
      });

      // Quick filter logic
      const searchInput = document.getElementById('searchInput');
      const orderTypeFilter = document.getElementById('orderTypeFilter');
      const paymentStatusFilter = document.getElementById('paymentStatusFilter');
      const orderStatusFilter = document.getElementById('orderStatusFilter');
      const tableRows = document.querySelectorAll('#orderTableBody tr');

      function filterTable() {
        const query = (searchInput ? searchInput.value : '').toLowerCase().trim();
        const selectedType = orderTypeFilter ? orderTypeFilter.value : 'all';
        const selectedPay = paymentStatusFilter ? paymentStatusFilter.value : 'all';
        const selectedOrder = orderStatusFilter ? orderStatusFilter.value : 'all';

        tableRows.forEach(function(row) {
          const rowText = row.innerText.toLowerCase();
          const matchesSearch = !query || rowText.includes(query);
          
          let matchesType = true;
          if (selectedType !== 'all') {
            matchesType = rowText.includes(selectedType.toLowerCase());
          }

          let matchesPay = true;
          if (selectedPay !== 'all') {
            matchesPay = rowText.includes(selectedPay.toLowerCase());
          }

          let matchesOrder = true;
          if (selectedOrder !== 'all') {
            matchesOrder = rowText.includes(selectedOrder.toLowerCase());
          }

          if (matchesSearch && matchesType && matchesPay && matchesOrder) {
            row.style.display = '';
          } else {
            row.style.display = 'none';
          }
        });
      }

      if (searchInput) searchInput.addEventListener('input', filterTable);
      if (orderTypeFilter) orderTypeFilter.addEventListener('change', filterTable);
      if (paymentStatusFilter) paymentStatusFilter.addEventListener('change', filterTable);
      if (orderStatusFilter) orderStatusFilter.addEventListener('change', filterTable);
    });
</script>
@endpush