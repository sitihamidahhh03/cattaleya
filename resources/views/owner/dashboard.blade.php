@extends('layouts.owner')

@section('title', 'Dashboard Pemilik Bisnis (Owner) — Cattaleya Atelier')

@section('content')
<div class="flex flex-col w-full gap-space-xl">
<!-- Salutation & Live Monitoring Header Banner -->
<section class="relative overflow-hidden rounded-xl bg-surface-container-low p-space-lg md:p-space-xl shadow-sm">
<div class="absolute -right-12 -top-12 w-64 h-64 rounded-full bg-secondary-container/40 blur-3xl pointer-events-none"></div>
<div class="absolute right-1/4 -bottom-10 w-44 h-44 rounded-full bg-primary-fixed/20 blur-2xl pointer-events-none"></div>
<div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-space-md">
<div class="flex flex-col gap-space-xs max-w-3xl">
<div class="flex items-center gap-space-xs mb-1">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container-lowest text-primary text-label-sm font-label-sm uppercase tracking-widest shadow-xs">
<span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
            Cattaleya Atelier &bull; Owner Portal
          </span>
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-surface-container-high text-on-surface-variant text-label-sm font-label-sm">
<span class="material-symbols-outlined text-sm">visibility</span>
            Mode Pemantauan Sistem Aktif
          </span>
</div>
<h1 class="font-display-lg text-display-lg-mobile md:text-display-lg text-on-surface tracking-tight leading-tight">
          Selamat Datang, Bapak Hendra
        </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant">
          Ringkasan operasional dan performa pemesanan mahar serta penyewaan kotak seserahan secara <span class="font-title-md text-on-surface">real-time</span>.
        </p>
</div>
<div class="flex flex-col sm:flex-row items-start sm:items-center gap-space-sm">
<div class="flex items-center gap-3 bg-surface-container-lowest px-4 py-2.5 rounded-xl shadow-xs">
<div class="w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-lg">calendar_month</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Periode Berjalan</span>
<span class="font-title-md text-title-md text-on-surface">Semester I - 2025</span>
</div>
</div>
<div class="flex items-center gap-2 bg-secondary-container/40 px-3.5 py-2.5 rounded-xl text-on-secondary-container">
<span class="material-symbols-outlined text-base">lock</span>
<span class="font-label-md text-label-md">Read-Only</span>
</div>
</div>
</div>
</section>
<!-- 5 Executive Metric Summary Cards -->
<section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-space-md">
<!-- Card 1: Total Pesanan -->
<div class="flex flex-col justify-between bg-surface-container-lowest p-space-md rounded-xl shadow-sm hover:shadow-md transition-shadow">
<div class="flex items-center justify-between pb-space-xs">
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Total Pesanan</span>
<div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-lg">inventory_2</span>
</div>
</div>
<div class="my-space-xs">
<span class="font-metric-display text-metric-display text-on-surface">184</span>
<span class="font-body-md text-body-md text-outline ml-1">Pesanan</span>
</div>
<div class="flex items-center gap-1.5 pt-space-xs">
<span class="inline-flex items-center text-label-sm font-label-sm text-primary bg-secondary-container/50 px-1.5 py-0.5 rounded">
<span class="material-symbols-outlined text-xs mr-0.5">trending_up</span>+12%
        </span>
<span class="font-label-sm text-label-sm text-outline">dibanding bulan lalu</span>
</div>
</div>
<!-- Card 2: Pesanan Mahar -->
<div class="flex flex-col justify-between bg-surface-container-lowest p-space-md rounded-xl shadow-sm hover:shadow-md transition-shadow">
<div class="flex items-center justify-between pb-space-xs">
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Pesanan Mahar</span>
<div class="w-8 h-8 rounded-lg bg-secondary-fixed/50 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-lg">filter_vintage</span>
</div>
</div>
<div class="my-space-xs">
<span class="font-metric-display text-metric-display text-on-surface">112</span>
<span class="font-body-md text-body-md text-outline ml-1">Paket</span>
</div>
<div class="pt-space-xs">
<p class="font-label-sm text-label-sm text-on-surface-variant truncate" title="Mahar Frame, Akrilik 3D, Logam Mulia">
          Mahar Frame, Akrilik 3D, Logam Mulia
        </p>
</div>
</div>
<!-- Card 3: Penyewaan Kotak -->
<div class="flex flex-col justify-between bg-surface-container-lowest p-space-md rounded-xl shadow-sm hover:shadow-md transition-shadow">
<div class="flex items-center justify-between pb-space-xs">
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Penyewaan Kotak</span>
<div class="w-8 h-8 rounded-lg bg-surface-container-high flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-lg">deployed_code</span>
</div>
</div>
<div class="my-space-xs">
<span class="font-metric-display text-metric-display text-on-surface">72</span>
<span class="font-body-md text-body-md text-outline ml-1">Set</span>
</div>
<div class="pt-space-xs">
<p class="font-label-sm text-label-sm text-on-surface-variant truncate" title="Kotak Mika Premium, Kayu Jati, Velvet">
          Kotak Mika, Kayu Jati, Velvet
        </p>
</div>
</div>
<!-- Card 4: Belum Lunas -->
<div class="flex flex-col justify-between bg-surface-container-lowest p-space-md rounded-xl shadow-sm hover:shadow-md transition-shadow">
<div class="flex items-center justify-between pb-space-xs">
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Belum Lunas</span>
<div class="w-8 h-8 rounded-lg bg-error-container/40 flex items-center justify-center text-error">
<span class="material-symbols-outlined text-lg">pending_actions</span>
</div>
</div>
<div class="my-space-xs">
<span class="font-metric-display text-metric-display text-error">28</span>
<span class="font-body-md text-body-md text-error ml-1">Pesanan</span>
</div>
<div class="pt-space-xs">
<span class="font-label-sm text-label-sm text-on-surface-variant">Menunggu pelunasan H-7 acara</span>
</div>
</div>
<!-- Card 5: Pesanan Selesai -->
<div class="flex flex-col justify-between bg-surface-container-lowest p-space-md rounded-xl shadow-sm hover:shadow-md transition-shadow">
<div class="flex items-center justify-between pb-space-xs">
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Pesanan Selesai</span>
<div class="w-8 h-8 rounded-lg bg-surface-container-low flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-lg">task_alt</span>
</div>
</div>
<div class="my-space-xs">
<span class="font-metric-display text-metric-display text-on-surface">142</span>
<span class="font-body-md text-body-md text-outline ml-1">Pesanan</span>
</div>
<div class="pt-space-xs">
<span class="font-label-sm text-label-sm text-on-surface-variant">Produksi tuntas &amp; dikembalikan</span>
</div>
</div>
</section>
<!-- Two Analytics Cards (Modern, Clean & Bespoke) -->
<section class="grid grid-cols-1 lg:grid-cols-12 gap-space-md">
<!-- Chart 1: Order Trend (7 Cols) -->
<div class="lg:col-span-7 flex flex-col justify-between bg-surface-container-lowest p-space-lg rounded-xl shadow-sm">
<div class="flex flex-col sm:flex-row sm:items-center justify-between pb-space-md gap-space-xs">
<div class="flex flex-col">
<div class="flex items-center gap-2">
<span class="w-2.5 h-2.5 rounded-full bg-primary"></span>
<h2 class="font-headline-md text-headline-md text-on-surface">Tren Jumlah Pesanan</h2>
</div>
<span class="font-label-sm text-label-sm text-outline">Monitoring ritme reservasi bulanan (Januari &ndash; Juni 2025)</span>
</div>
<div class="inline-flex items-center gap-1.5 px-3 py-1 bg-surface-container-low rounded-lg text-on-surface-variant font-label-sm text-label-sm self-start sm:self-auto">
<span class="material-symbols-outlined text-xs text-primary">analytics</span>
<span>Rerata 30.6 pesanan/bulan</span>
</div>
</div>
<!-- Trend Chart Graphic (SVG Responsive) -->
<div class="relative w-full pt-space-xs pb-space-xs">
<div class="h-56 w-full flex flex-col justify-end">
<svg class="w-full h-full overflow-visible" preserveAspectRatio="none" viewBox="0 0 540 180">
<defs>
<linearGradient id="cattaleyaTrendGrad" x1="0%" x2="0%" y1="0%" y2="100%">
<stop offset="0%" stop-color="#775625" stop-opacity="0.22"></stop>
<stop offset="100%" stop-color="#775625" stop-opacity="0.0"></stop>
</linearGradient>
</defs>
<!-- Horizontal guidelines -->
<line stroke="#f1e6df" stroke-dasharray="4 4" stroke-width="1" x1="0" x2="540" y1="20" y2="20"></line>
<line stroke="#f1e6df" stroke-dasharray="4 4" stroke-width="1" x1="0" x2="540" y1="65" y2="65"></line>
<line stroke="#f1e6df" stroke-dasharray="4 4" stroke-width="1" x1="0" x2="540" y1="110" y2="110"></line>
<line stroke="#f1e6df" stroke-width="1" x1="0" x2="540" y1="155" y2="155"></line>
<!-- Area Fill -->
<polygon fill="url(#cattaleyaTrendGrad)" points="20,135 120,115 220,80 320,55 420,38 520,24 520,155 20,155"></polygon>
<!-- Smooth Trend Line -->
<path d="M 20 135 C 70 128, 75 118, 120 115 C 170 110, 180 88, 220 80 C 270 70, 280 60, 320 55 C 370 50, 380 42, 420 38 C 470 32, 485 26, 520 24" fill="none" stroke="#775625" stroke-linecap="round" stroke-width="3"></path>
<!-- Node Points with interactive tooltips simulated -->
<g class="cursor-pointer group">
<circle cx="20" cy="135" fill="#ffffff" r="4.5" stroke="#775625" stroke-width="2.5"></circle>
<text fill="#4f453a" font-family="Plus Jakarta Sans" font-size="10" text-anchor="middle" x="20" y="125">18</text>
</g>
<g class="cursor-pointer group">
<circle cx="120" cy="115" fill="#ffffff" r="4.5" stroke="#775625" stroke-width="2.5"></circle>
<text fill="#4f453a" font-family="Plus Jakarta Sans" font-size="10" text-anchor="middle" x="120" y="105">24</text>
</g>
<g class="cursor-pointer group">
<circle cx="220" cy="80" fill="#ffffff" r="4.5" stroke="#775625" stroke-width="2.5"></circle>
<text fill="#4f453a" font-family="Plus Jakarta Sans" font-size="10" text-anchor="middle" x="220" y="70">31</text>
</g>
<g class="cursor-pointer group">
<circle cx="320" cy="55" fill="#ffffff" r="4.5" stroke="#775625" stroke-width="2.5"></circle>
<text fill="#4f453a" font-family="Plus Jakarta Sans" font-size="10" text-anchor="middle" x="320" y="45">35</text>
</g>
<g class="cursor-pointer group">
<circle cx="420" cy="38" fill="#ffffff" r="4.5" stroke="#775625" stroke-width="2.5"></circle>
<text fill="#4f453a" font-family="Plus Jakarta Sans" font-size="10" text-anchor="middle" x="420" y="28">38</text>
</g>
<g class="cursor-pointer group">
<circle cx="520" cy="24" fill="#775625" r="5.5" stroke="#ffffff" stroke-width="2.5"></circle>
<text fill="#775625" font-family="Plus Jakarta Sans" font-size="11" font-weight="600" text-anchor="middle" x="520" y="14">42</text>
</g>
</svg>
</div>
<!-- Month Labels -->
<div class="grid grid-cols-6 text-center pt-space-xs">
<span class="font-label-sm text-label-sm text-outline">Jan</span>
<span class="font-label-sm text-label-sm text-outline">Feb</span>
<span class="font-label-sm text-label-sm text-outline">Mar</span>
<span class="font-label-sm text-label-sm text-outline">Apr</span>
<span class="font-label-sm text-label-sm text-outline">Mei</span>
<span class="font-label-sm text-label-sm font-title-md text-primary">Jun (Proj)</span>
</div>
</div>
<div class="mt-space-md pt-space-sm bg-surface-container-low/70 px-4 py-3 rounded-lg flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-sm text-primary">info</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Musim pernikahan tinggi terpantau mulai April hingga puncaknya pada Juni 2025.</span>
</div>
<span class="font-label-sm text-label-sm text-outline font-title-md whitespace-nowrap hidden sm:inline">Kapasitas Aman 91%</span>
</div>
</div>
<!-- Chart 2: Mahar vs Seserahan Donut & Value Comparison (5 Cols) -->
<div class="lg:col-span-5 flex flex-col justify-between bg-surface-container-lowest p-space-lg rounded-xl shadow-sm">
<div class="flex items-center justify-between pb-space-sm">
<div class="flex flex-col">
<div class="flex items-center gap-2">
<span class="w-2.5 h-2.5 rounded-full bg-secondary-container"></span>
<h2 class="font-headline-md text-headline-md text-on-surface">Komposisi Pesanan</h2>
</div>
<span class="font-label-sm text-label-sm text-outline">Perbandingan Mahar vs Penyewaan Kotak</span>
</div>
</div>
<div class="flex flex-col sm:flex-row items-center justify-around gap-space-md py-space-sm">
<!-- SVG Donut Chart with Golden Palette -->
<div class="relative w-40 h-40 flex-shrink-0 flex items-center justify-center">
<svg class="w-full h-full transform -rotate-90" viewBox="0 0 120 120">
<!-- Background Ring -->
<circle cx="60" cy="60" fill="transparent" r="46" stroke="#f1e6df" stroke-width="14"></circle>
<!-- Mahar Ring (61% = stroke-dasharray 176.4 289.0) -->
<circle cx="60" cy="60" fill="transparent" r="46" stroke="#775625" stroke-dasharray="176.4 289" stroke-linecap="round" stroke-width="14"></circle>
<!-- Kotak Ring (39% = stroke-dasharray 112.7 289.0 offset -176.4) -->
<circle cx="60" cy="60" fill="transparent" r="46" stroke="#d7c4a7" stroke-dasharray="112.7 289" stroke-dashoffset="-176.4" stroke-linecap="round" stroke-width="14"></circle>
</svg>
<div class="absolute inset-0 flex flex-col items-center justify-center pointer-events-none">
<span class="font-title-lg text-title-lg text-on-surface">184</span>
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Item Total</span>
</div>
</div>
<!-- Legend and Revenue Figures -->
<div class="flex flex-col gap-space-sm w-full sm:w-auto">
<!-- Mahar Stat -->
<div class="flex flex-col p-2.5 rounded-lg bg-surface-container-low">
<div class="flex items-center justify-between gap-4">
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-primary"></span>
<span class="font-title-md text-title-md text-on-surface">Paket Mahar</span>
</div>
<span class="font-title-md text-title-md text-primary">61% (112)</span>
</div>
<div class="flex items-center justify-between mt-1 pt-1 text-on-surface-variant font-label-sm text-label-sm">
<span>Akumulasi Nilai:</span>
<span class="font-title-md text-on-surface">Rp 268.800.000</span>
</div>
</div>
<!-- Kotak Seserahan Stat -->
<div class="flex flex-col p-2.5 rounded-lg bg-surface-container-low">
<div class="flex items-center justify-between gap-4">
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-tertiary-fixed-dim"></span>
<span class="font-title-md text-title-md text-on-surface">Sewa Kotak</span>
</div>
<span class="font-title-md text-title-md text-secondary">39% (72)</span>
</div>
<div class="flex items-center justify-between mt-1 pt-1 text-on-surface-variant font-label-sm text-label-sm">
<span>Akumulasi Nilai:</span>
<span class="font-title-md text-on-surface">Rp 115.200.000</span>
</div>
</div>
</div>
</div>
<div class="pt-space-xs text-center sm:text-left">
<span class="font-label-sm text-label-sm text-outline">Total Estimasi Perputaran: <strong class="text-on-surface font-title-md">Rp 384.000.000</strong></span>
</div>
</div>
</section>
<!-- Live Orders Monitoring Table (Read-Only) -->
<section class="flex flex-col bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden">
<!-- Table Header Toolbar (No modification buttons) -->
<div class="p-space-lg flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm bg-surface-container-lowest">
<div class="flex flex-col">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-xl">dvr</span>
<h2 class="font-headline-md text-headline-md text-on-surface">Pesanan Terbaru</h2>
</div>
<p class="font-body-md text-body-md text-on-surface-variant">Menampilkan 5 aktivitas pesanan terkini dalam sistem pengerjaan dan reservasi.</p>
</div>
<div class="flex items-center gap-space-xs">
<span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm">
<span class="material-symbols-outlined text-sm text-outline">history</span>
          Pembaruan Otomatis: Aktif
        </span>
</div>
</div>
<!-- Responsive Table Wrapper -->
<div class="overflow-x-auto w-full">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider">
<th class="py-3.5 px-space-lg">ID Pesanan</th>
<th class="py-3.5 px-space-md">Nama Pelanggan</th>
<th class="py-3.5 px-space-md">Jenis &amp; Rincian Pesanan</th>
<th class="py-3.5 px-space-md text-right">Total Harga</th>
<th class="py-3.5 px-space-md text-center">Status Pembayaran</th>
<th class="py-3.5 px-space-lg text-center">Status Pesanan</th>
</tr>
</thead>
<tbody class="divide-y divide-surface-container">
<!-- Row 1 -->
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="py-4 px-space-lg font-title-md text-title-md text-primary font-mono whitespace-nowrap">
              ORD-2025-089
            </td>
<td class="py-4 px-space-md">
<div class="flex flex-col">
<span class="font-title-md text-title-md text-on-surface">Anisa Rahma &amp; Fajar</span>
<span class="font-label-sm text-label-sm text-outline">Acara: 24 Mei 2025</span>
</div>
</td>
<td class="py-4 px-space-md">
<div class="flex items-center gap-2">
<span class="inline-flex items-center px-2 py-0.5 rounded-full text-label-sm font-label-sm bg-primary/10 text-primary">
                  Mahar
                </span>
<span class="font-body-md text-body-md text-on-surface">Paket Mahar Akrilik Rustic</span>
</div>
</td>
<td class="py-4 px-space-md text-right font-title-md text-title-md text-on-surface tabular-nums whitespace-nowrap">
              Rp 2.450.000
            </td>
<td class="py-4 px-space-md text-center whitespace-nowrap">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                Lunas
              </span>
</td>
<td class="py-4 px-space-lg text-center whitespace-nowrap">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container-high text-secondary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-xs">done_all</span>
                Selesai
              </span>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="py-4 px-space-lg font-title-md text-title-md text-primary font-mono whitespace-nowrap">
              ORD-2025-090
            </td>
<td class="py-4 px-space-md">
<div class="flex flex-col">
<span class="font-title-md text-title-md text-on-surface">Dinda Permata</span>
<span class="font-label-sm text-label-sm text-outline">Acara: 31 Mei 2025</span>
</div>
</td>
<td class="py-4 px-space-md">
<div class="flex items-center gap-2">
<span class="inline-flex items-center px-2 py-0.5 rounded-full text-label-sm font-label-sm bg-secondary-container text-on-secondary-container">
                  Kotak Seserahan
                </span>
<span class="font-body-md text-body-md text-on-surface">Sewa 8 Kotak Velvet Gold</span>
</div>
</td>
<td class="py-4 px-space-md text-right font-title-md text-title-md text-on-surface tabular-nums whitespace-nowrap">
              Rp 1.600.000
            </td>
<td class="py-4 px-space-md text-center whitespace-nowrap">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-secondary-fixed/50 text-on-secondary-fixed-variant font-label-sm text-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                DP Terbayar (50%)
              </span>
</td>
<td class="py-4 px-space-lg text-center whitespace-nowrap">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-secondary-container/40 text-on-secondary-container font-label-sm text-label-sm">
<span class="material-symbols-outlined text-xs">handshake</span>
                Disewa
              </span>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="py-4 px-space-lg font-title-md text-title-md text-primary font-mono whitespace-nowrap">
              ORD-2025-091
            </td>
<td class="py-4 px-space-md">
<div class="flex flex-col">
<span class="font-title-md text-title-md text-on-surface">Rizky Pratama</span>
<span class="font-label-sm text-label-sm text-outline">Acara: 7 Juni 2025</span>
</div>
</td>
<td class="py-4 px-space-md">
<div class="flex items-center gap-2">
<span class="inline-flex items-center px-2 py-0.5 rounded-full text-label-sm font-label-sm bg-primary/10 text-primary">
                  Mahar
                </span>
<span class="font-body-md text-body-md text-on-surface">Mahar Kaligrafi Koin</span>
</div>
</td>
<td class="py-4 px-space-md text-right font-title-md text-title-md text-on-surface tabular-nums whitespace-nowrap">
              Rp 3.200.000
            </td>
<td class="py-4 px-space-md text-center whitespace-nowrap">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-error-container/40 text-error font-label-sm text-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-error"></span>
                Menunggu Pelunasan
              </span>
</td>
<td class="py-4 px-space-lg text-center whitespace-nowrap">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container-high text-on-surface-variant font-label-sm text-label-sm">
<span class="material-symbols-outlined text-xs text-primary animate-spin">autorenew</span>
                Diproses
              </span>
</td>
</tr>
<!-- Row 4 -->
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="py-4 px-space-lg font-title-md text-title-md text-primary font-mono whitespace-nowrap">
              ORD-2025-092
            </td>
<td class="py-4 px-space-md">
<div class="flex flex-col">
<span class="font-title-md text-title-md text-on-surface">Maya Indah</span>
<span class="font-label-sm text-label-sm text-outline">Acara: 14 Juni 2025</span>
</div>
</td>
<td class="py-4 px-space-md">
<div class="flex items-center gap-2">
<span class="inline-flex items-center px-2 py-0.5 rounded-full text-label-sm font-label-sm bg-secondary-container text-on-secondary-container">
                  Kotak Seserahan
                </span>
<span class="font-body-md text-body-md text-on-surface">Sewa 10 Kotak Mika Rosegold</span>
</div>
</td>
<td class="py-4 px-space-md text-right font-title-md text-title-md text-on-surface tabular-nums whitespace-nowrap">
              Rp 2.000.000
            </td>
<td class="py-4 px-space-md text-center whitespace-nowrap">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                Lunas
              </span>
</td>
<td class="py-4 px-space-lg text-center whitespace-nowrap">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary-fixed/40 text-on-primary-fixed font-label-sm text-label-sm">
<span class="material-symbols-outlined text-xs">store</span>
                Siap Diambil
              </span>
</td>
</tr>
<!-- Row 5 -->
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="py-4 px-space-lg font-title-md text-title-md text-primary font-mono whitespace-nowrap">
              ORD-2025-093
            </td>
<td class="py-4 px-space-md">
<div class="flex flex-col">
<span class="font-title-md text-title-md text-on-surface">Satria Wicaksono</span>
<span class="font-label-sm text-label-sm text-outline">Acara: 18 Juni 2025</span>
</div>
</td>
<td class="py-4 px-space-md">
<div class="flex items-center gap-2">
<span class="inline-flex items-center px-2 py-0.5 rounded-full text-label-sm font-label-sm bg-primary/10 text-primary">
                  Mahar
                </span>
<span class="font-body-md text-body-md text-on-surface">Mahar Logam Mulia Minimalis</span>
</div>
</td>
<td class="py-4 px-space-md text-right font-title-md text-title-md text-on-surface tabular-nums whitespace-nowrap">
              Rp 1.850.000
            </td>
<td class="py-4 px-space-md text-center whitespace-nowrap">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                Lunas
              </span>
</td>
<td class="py-4 px-space-lg text-center whitespace-nowrap">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container-high text-secondary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-xs">done_all</span>
                Selesai
              </span>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Table Footer with Explicit Read-Only Notice -->
<div class="p-space-md bg-surface-container-low/50 flex flex-col sm:flex-row items-center justify-between gap-space-xs">
<div class="flex items-center gap-2 text-on-surface-variant">
<span class="material-symbols-outlined text-base text-primary">shield</span>
<span class="font-body-md text-body-md">
<strong class="font-title-md text-on-surface">Akses Owner:</strong> Hanya membaca dan memantau status sistem. Perubahan status diproses oleh staf operasional.
        </span>
</div>
<div class="flex items-center gap-1 text-outline font-label-sm text-label-sm">
<span>Menampilkan 5 dari 184 Pesanan</span>
</div>
</div>
</section>
<!-- Showcase Gallery: Mahar & Seserahan Craftsmanship Preview -->
<section class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
<div class="relative rounded-xl overflow-hidden shadow-sm h-48 bg-surface-container group">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Exquisite wedding mahar dowry inside modern clear acrylic frame decorated with dried blush pampas grass, white cattleya orchid blossoms, gold leaf calligraphy, warm morning studio sunlight with soft beige silk fabric base" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA92nQMe6pmIWDv2HVB8rICVNhYSFX0WvTStaEPloPLBwrXmTGjOS-BzPtsnoHc1ukiEKwYfmL2dTNZg8o2DrGYbxPpLUayzqN2d4I4o5GLqA4erqo_dW4SEZ-z5RUjmMjXim3IvojDvUZwN3vWhXLLO3EIR2kqwHJOjoANLnfGbeaOea8tuY4wy11U3Ez-CJUP0Esx1tHTv1O_4KutHacNq-3gXYaJYSNinFQmdMY1nU9yq59RozsR">
<div class="absolute inset-0 bg-gradient-to-t from-on-surface/80 via-transparent to-transparent flex flex-col justify-end p-space-md">
<span class="font-label-sm text-label-sm text-primary-fixed uppercase tracking-wider">Atelier Signature</span>
<span class="font-title-md text-title-md text-on-primary">Mahar Akrilik Preserved Orchids</span>
</div>
</div>
<div class="relative rounded-xl overflow-hidden shadow-sm h-48 bg-surface-container group">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Luxury Indonesian wedding seserahan trays set made of carved teak wood and champagne velvet lining, adorned with white hydrangeas, gold satin ribbons, and premium perfume gifts under golden hour ambient illumination" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBq40Bg9belmyEI0Odp2Y2q7YR3_K-dSa2lw0uKpQx0SzPaL-ZbKgvurmUj2uToJNa3-TmYHH_3_exoZlXCKZufWHFwZ75qnGG0RyN5NwKHF5hVOJkVtdLBEKtrzkcg80nyroJs9gQDQxOaYof9hTEgJyL_E4-10cOLaMvsfefXqBCN10nv-xheyLw1wnqBdLkAIRoK9Sw4_zb88hVgY4v1VPiGChZKlyozsRUSIfQtnyOTZgzQBauo">
<div class="absolute inset-0 bg-gradient-to-t from-on-surface/80 via-transparent to-transparent flex flex-col justify-end p-space-md">
<span class="font-label-sm text-label-sm text-secondary-fixed uppercase tracking-wider">Koleksi Kotak Sewa</span>
<span class="font-title-md text-title-md text-on-primary">Velvet Gold &amp; Teak Vitrine</span>
</div>
</div>
<div class="relative rounded-xl overflow-hidden shadow-sm h-48 bg-surface-container group">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Master craftsman hands precisely placing 24k fine gold bars into a bespoke custom calligraphy wedding dowry board with rose gold metallic accents and ivory orchid petals" src="https://lh3.googleusercontent.com/aida-public/AB6AXuByjO3CTqB_FfnFH-9rxHVztZjrE6cKGDV82ydz0_Cc_T4sJCdw6NohZ9eo3AOc-v8MJshF4UnMwQslUqe9Q4K7ip_kWqfwggL61nTpcv4lDrvDcXueIlhep7wIdtju2AZhb73_QoPQ1LMua7_be5WF7YQufGABEN3hzytNfnKtjNhrDZvMkKKfWFM7HvcWaw7Wb-uOo3rPRZw47tknZW7xjuDyKN_5Hltq-T_17kex6nLgfUhHypkj">
<div class="absolute inset-0 bg-gradient-to-t from-on-surface/80 via-transparent to-transparent flex flex-col justify-end p-space-md">
<span class="font-label-sm text-label-sm text-tertiary-fixed uppercase tracking-wider">Presisi Pengerjaan</span>
<span class="font-title-md text-title-md text-on-primary">Logam Mulia &amp; Koin Antam</span>
</div>
</div>
</section>
</div>
@endsection