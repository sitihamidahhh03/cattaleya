@extends('layouts.owner')

@section('title', 'Monitoring Transaksi & Pembayaran — Cattaleya Atelier Owner')

@section('content')
<div class="flex flex-col w-full gap-space-lg">
<!-- Header Section with Brand Embellishment -->
<div class="relative overflow-hidden rounded-xl bg-surface-container-lowest p-space-lg shadow-sm">
<div class="absolute -right-12 -top-12 w-64 h-64 bg-secondary-container/30 rounded-full blur-3xl pointer-events-none"></div>
<div class="relative flex flex-col lg:flex-row lg:items-center justify-between gap-space-md">
<div class="flex flex-col gap-space-xs">
<div class="inline-flex items-center gap-space-xs text-primary">
<span class="font-label-sm text-label-sm tracking-wider uppercase text-primary font-semibold">Ledger Finansial Eksekutif</span>
<span class="text-outline text-xs">&bull;</span>
<span class="font-label-sm text-label-sm text-outline tracking-widest uppercase">Cattaleya Atelier</span>
</div>
<h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Monitoring Transaksi &amp; Pembayaran</h1>
<p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
          Arus kas masuk dari pembayaran DP, Pelunasan, dan Pembayaran Penuh yang tercatat otomatis melalui gateway perbankan real-time.
        </p>
</div>
<!-- Read-Only Status & Export Indicator -->
<div class="flex items-center gap-space-sm self-start lg:self-center">
<div class="flex items-center gap-space-xs px-space-md py-space-sm bg-surface-container-low rounded-lg text-on-surface-variant">
<span class="material-symbols-outlined text-lg text-primary">lock_clock</span>
<span class="font-label-sm text-label-sm uppercase tracking-wider font-semibold">Buku Kas Terkunci (Read-Only)</span>
</div>
<button class="flex items-center gap-space-xs px-space-md py-space-sm bg-primary text-on-primary rounded-lg shadow hover:bg-surface-tint transition-all" id="btn-export-recap">
<span class="material-symbols-outlined text-lg">download</span>
<span class="font-label-md text-label-md">Unduh Rekap</span>
</button>
</div>
</div>
</div>
<!-- 3 Executive KPI Indicators & Decorative Visual Progress -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
<!-- KPI 1: Total Nominal Masuk -->
<div class="relative overflow-hidden bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col justify-between">
<div class="flex items-start justify-between">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Total Nominal Masuk</span>
<div class="mt-space-xs font-metric-display text-metric-display text-on-surface tracking-tight">
            Rp 148.850.000
          </div>
</div>
<div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-xl">account_balance_wallet</span>
</div>
</div>
<div class="mt-space-md pt-space-sm flex items-center justify-between">
<div class="flex items-center gap-1 text-primary">
<span class="material-symbols-outlined text-base">trending_up</span>
<span class="font-label-md text-label-md font-semibold">+14.2%</span>
<span class="font-body-md text-body-md text-on-surface-variant ml-1">vs bulan lalu</span>
</div>
<span class="font-label-sm text-label-sm px-2 py-0.5 rounded-full bg-surface-container-high text-on-secondary-container font-semibold">68 Transaksi</span>
</div>
</div>
<!-- KPI 2: Menunggu Pelunasan -->
<div class="relative overflow-hidden bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col justify-between">
<div class="flex items-start justify-between">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Menunggu Pelunasan</span>
<div class="mt-space-xs font-metric-display text-metric-display text-on-surface tracking-tight">
            Rp 24.300.000
          </div>
</div>
<div class="w-10 h-10 rounded-full bg-surface-container-high flex items-center justify-center text-on-secondary-container">
<span class="material-symbols-outlined text-xl">pending_actions</span>
</div>
</div>
<div class="mt-space-md pt-space-sm flex items-center justify-between">
<div class="flex items-center gap-1 text-on-surface-variant">
<span class="material-symbols-outlined text-base text-primary">event_available</span>
<span class="font-body-md text-body-md">H-7 jelang pengiriman</span>
</div>
<span class="font-label-sm text-label-sm px-2 py-0.5 rounded-full bg-surface-container-low text-on-surface-variant font-semibold">12 Mahar Aktif</span>
</div>
</div>
<!-- KPI 3: Transaksi Terverifikasi Otomatis -->
<div class="relative overflow-hidden bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col justify-between">
<div class="flex items-start justify-between">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Sinkronisasi Gateway</span>
<div class="mt-space-xs font-metric-display text-metric-display text-on-surface tracking-tight flex items-baseline gap-2">
            100%
            <span class="font-title-md text-title-md text-primary font-normal">Tercatat</span>
</div>
</div>
<div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-xl">verified</span>
</div>
</div>
<div class="mt-space-md pt-space-sm flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="relative flex h-2 w-2">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
<span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
</span>
<span class="font-body-md text-body-md text-on-surface-variant">BCA &bull; Mandiri &bull; QRIS &bull; BSI</span>
</div>
<span class="font-label-sm text-label-sm text-outline">0 Delay</span>
</div>
</div>
</div>
<!-- Visual Cash Flow & Method Distribution Banner (Inline Bespoke SVG Graphic) -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-md">
<div class="lg:col-span-8 bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col justify-between">
<div class="flex items-center justify-between mb-space-sm">
<div class="flex flex-col">
<span class="font-title-md text-title-md text-on-surface">Distribusi Aliran Dana Masuk Periode Ini</span>
<span class="font-body-md text-body-md text-on-surface-variant">Komposisi pelunasan mahar pernikahan &amp; uang muka tray seserahan</span>
</div>
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Audit Visual</span>
</div>
<!-- Streamlined SVG Visual for Cash Allocation -->
<div class="relative py-space-sm">
<div class="h-3 w-full bg-surface-container-high rounded-full overflow-hidden flex">
<div class="bg-primary h-full transition-all duration-500" style="width: 58%;" title="Pembayaran Penuh: 58%"></div>
<div class="bg-secondary h-full transition-all duration-500" style="width: 26%;" title="DP / Uang Muka: 26%"></div>
<div class="bg-outline-variant h-full transition-all duration-500" style="width: 16%;" title="Pelunasan: 16%"></div>
</div>
<div class="grid grid-cols-3 gap-space-sm mt-space-md">
<div class="flex items-center gap-space-xs">
<div class="w-3 h-3 rounded-full bg-primary shrink-0"></div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-outline">Pembayaran Penuh</span>
<span class="font-title-md text-title-md text-on-surface">Rp 86.333.000 (58%)</span>
</div>
</div>
<div class="flex items-center gap-space-xs">
<div class="w-3 h-3 rounded-full bg-secondary shrink-0"></div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-outline">DP Masuk</span>
<span class="font-title-md text-title-md text-on-surface">Rp 38.701.000 (26%)</span>
</div>
</div>
<div class="flex items-center gap-space-xs">
<div class="w-3 h-3 rounded-full bg-outline-variant shrink-0"></div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-outline">Pelunasan Akhir</span>
<span class="font-title-md text-title-md text-on-surface">Rp 23.816.000 (16%)</span>
</div>
</div>
</div>
</div>
</div>
<!-- Atelier Mini Highlight Card with Floral Accent Placeholder -->
<div class="lg:col-span-4 bg-surface-container-low rounded-xl p-space-lg shadow-sm flex flex-col justify-between relative overflow-hidden">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-primary">verified_user</span>
<span class="font-title-md text-title-md text-on-surface">Jaminan Otentikasi</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant my-space-xs">
        Setiap rekaman mutasi terhubung dengan API Virtual Account Bank secara terenkripsi. Bukti transfer fisik digantikan nomor rujukan bank resmi.
      </p>
<div class="flex items-center justify-between pt-space-xs">
<div class="flex items-center gap-2">
<span class="font-label-sm text-label-sm text-on-surface-variant font-semibold">Integrasi:</span>
<span class="font-label-sm text-label-sm bg-surface-container-highest px-2 py-0.5 rounded text-on-surface">BCA SNAP</span>
<span class="font-label-sm text-label-sm bg-surface-container-highest px-2 py-0.5 rounded text-on-surface">QRIS Static/Dynamic</span>
</div>
</div>
</div>
</div>
<!-- Filter & Search Console -->
<div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col gap-space-md">
<div class="flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-space-md">
<!-- Search Input -->
<div class="relative flex-1 min-w-[280px]">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-xl">search</span>
<input class="w-full pl-10 pr-4 py-2.5 bg-surface-container-low text-on-surface placeholder:text-outline text-body-md rounded-lg focus:outline-none focus:bg-surface-container-high transition-colors" id="search-input" placeholder="Cari ID Transaksi, ID Pesanan, atau Nama Pelanggan..." type="text">
</div>
<!-- Filters Group -->
<div class="flex flex-wrap items-center gap-space-sm">
<!-- Filter: Jenis Pembayaran -->
<div class="flex items-center gap-1 bg-surface-container-low px-space-xs py-1 rounded-lg">
<span class="font-label-sm text-label-sm text-outline px-2">Jenis:</span>
<button class="filter-type-btn px-2.5 py-1 text-label-sm rounded-md bg-surface-container-lowest text-on-surface font-semibold shadow-xs transition-all" data-type="all">Semua</button>
<button class="filter-type-btn px-2.5 py-1 text-label-sm rounded-md text-on-surface-variant hover:text-on-surface transition-all" data-type="DP">DP</button>
<button class="filter-type-btn px-2.5 py-1 text-label-sm rounded-md text-on-surface-variant hover:text-on-surface transition-all" data-type="Pelunasan">Pelunasan</button>
<button class="filter-type-btn px-2.5 py-1 text-label-sm rounded-md text-on-surface-variant hover:text-on-surface transition-all" data-type="Pembayaran Penuh">Penuh</button>
</div>
<!-- Filter: Status Pembayaran -->
<div class="flex items-center gap-1 bg-surface-container-low px-space-xs py-1 rounded-lg">
<span class="font-label-sm text-label-sm text-outline px-2">Status:</span>
<select class="bg-transparent text-label-sm font-semibold text-on-surface py-1 pr-3 focus:outline-none cursor-pointer" id="filter-status">
<option value="all">Semua Status</option>
<option value="Berhasil">Berhasil / Lunas</option>
<option value="Menunggu">Menunggu Verifikasi</option>
<option value="Kadaluarsa">Kadaluarsa</option>
</select>
</div>
<!-- Filter: Rentang Tanggal Picker Representation -->
<div class="flex items-center gap-space-xs px-space-md py-2 bg-surface-container-low text-on-surface rounded-lg">
<span class="material-symbols-outlined text-outline text-base">date_range</span>
<span class="font-label-sm text-label-sm font-medium">01 Okt 2025 - 15 Okt 2025</span>
</div>
<!-- Reset Button -->
<button class="p-2 text-outline hover:text-on-surface hover:bg-surface-container-high rounded-lg transition-colors" id="btn-reset-filter" title="Reset Filter">
<span class="material-symbols-outlined text-xl">filter_alt_off</span>
</button>
</div>
</div>
</div>
<!-- Read-Only Transaction Table -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden flex flex-col">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low text-outline font-label-sm text-label-sm uppercase tracking-wider">
<th class="py-space-md px-space-lg">ID Transaksi</th>
<th class="py-space-md px-space-md">ID Pesanan</th>
<th class="py-space-md px-space-md">Nama Pelanggan</th>
<th class="py-space-md px-space-md">Jenis</th>
<th class="py-space-md px-space-md text-right">Total Harga</th>
<th class="py-space-md px-space-md text-right">Nominal Dibayar</th>
<th class="py-space-md px-space-md text-right">Sisa Pembayaran</th>
<th class="py-space-md px-space-md text-center">Status</th>
<th class="py-space-md px-space-lg text-right">Waktu &amp; Metode</th>
</tr>
</thead>
<tbody class="divide-y-0 font-body-md text-body-md" id="tx-tbody">
<!-- Row 1: Anisa Rahmawati -->
<tr class="tx-row hover:bg-surface-container-low/60 transition-colors" data-search="trx-2025-0142 ord-2025-089 anisa rahmawati bca va" data-status="Berhasil" data-type="Pembayaran Penuh">
<td class="py-space-md px-space-lg font-mono text-label-md text-primary font-semibold">TRX-2025-0142</td>
<td class="py-space-md px-space-md font-mono text-label-md text-outline">ORD-2025-089</td>
<td class="py-space-md px-space-md">
<div class="flex items-center gap-space-xs">
<span class="font-title-md text-title-md text-on-surface">Anisa Rahmawati</span>
</div>
</td>
<td class="py-space-md px-space-md">
<span class="inline-flex items-center px-2.5 py-1 rounded-full text-label-sm font-semibold bg-secondary-container text-on-secondary-container">
                Pembayaran Penuh
              </span>
</td>
<td class="py-space-md px-space-md text-right font-medium text-on-surface">Rp 2.450.000</td>
<td class="py-space-md px-space-md text-right font-semibold text-primary">Rp 2.450.000</td>
<td class="py-space-md px-space-md text-right text-outline">Rp 0</td>
<td class="py-space-md px-space-md text-center">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-label-sm font-semibold bg-surface-container-high text-on-surface">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                Berhasil (Lunas)
              </span>
</td>
<td class="py-space-md px-space-lg text-right">
<div class="flex flex-col items-end">
<span class="text-on-surface font-medium">02 Okt 2025 &bull; 09:14</span>
<span class="text-label-sm text-outline font-semibold">BCA Virtual Account</span>
</div>
</td>
</tr>
<!-- Row 2: Dinda Tri Permata -->
<tr class="tx-row hover:bg-surface-container-low/60 transition-colors bg-surface-container-lowest" data-search="trx-2025-0143 ord-2025-090 dinda tri permata mandiri va" data-status="Berhasil" data-type="DP">
<td class="py-space-md px-space-lg font-mono text-label-md text-primary font-semibold">TRX-2025-0143</td>
<td class="py-space-md px-space-md font-mono text-label-md text-outline">ORD-2025-090</td>
<td class="py-space-md px-space-md">
<div class="flex items-center gap-space-xs">
<span class="font-title-md text-title-md text-on-surface">Dinda Tri Permata</span>
</div>
</td>
<td class="py-space-md px-space-md">
<span class="inline-flex items-center px-2.5 py-1 rounded-full text-label-sm font-semibold bg-surface-container-high text-on-surface-variant">
                DP (Uang Muka)
              </span>
</td>
<td class="py-space-md px-space-md text-right font-medium text-on-surface">Rp 1.600.000</td>
<td class="py-space-md px-space-md text-right font-semibold text-primary">Rp 800.000</td>
<td class="py-space-md px-space-md text-right font-medium text-secondary">Rp 800.000</td>
<td class="py-space-md px-space-md text-center">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-label-sm font-semibold bg-surface-container-low text-on-surface">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                Berhasil
              </span>
</td>
<td class="py-space-md px-space-lg text-right">
<div class="flex flex-col items-end">
<span class="text-on-surface font-medium">04 Okt 2025 &bull; 11:20</span>
<span class="text-label-sm text-outline font-semibold">Mandiri VA</span>
</div>
</td>
</tr>
<!-- Row 3: Rizky Pratama -->
<tr class="tx-row hover:bg-surface-container-low/60 transition-colors" data-search="trx-2025-0144 ord-2025-091 rizky pratama qris" data-status="Berhasil" data-type="DP">
<td class="py-space-md px-space-lg font-mono text-label-md text-primary font-semibold">TRX-2025-0144</td>
<td class="py-space-md px-space-md font-mono text-label-md text-outline">ORD-2025-091</td>
<td class="py-space-md px-space-md">
<div class="flex items-center gap-space-xs">
<span class="font-title-md text-title-md text-on-surface">Rizky Pratama</span>
</div>
</td>
<td class="py-space-md px-space-md">
<span class="inline-flex items-center px-2.5 py-1 rounded-full text-label-sm font-semibold bg-surface-container-high text-on-surface-variant">
                DP (Uang Muka)
              </span>
</td>
<td class="py-space-md px-space-md text-right font-medium text-on-surface">Rp 3.200.000</td>
<td class="py-space-md px-space-md text-right font-semibold text-primary">Rp 1.600.000</td>
<td class="py-space-md px-space-md text-right font-medium text-secondary">Rp 1.600.000</td>
<td class="py-space-md px-space-md text-center">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-label-sm font-semibold bg-surface-container-low text-on-surface">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                Berhasil
              </span>
</td>
<td class="py-space-md px-space-lg text-right">
<div class="flex flex-col items-end">
<span class="text-on-surface font-medium">06 Okt 2025 &bull; 15:45</span>
<span class="text-label-sm text-outline font-semibold">QRIS Dinamis</span>
</div>
</td>
</tr>
<!-- Row 4: Dimas Setiawan -->
<tr class="tx-row hover:bg-surface-container-low/60 transition-colors bg-surface-container-lowest" data-search="trx-2025-0145 ord-2025-088 dimas setiawan bsi va" data-status="Berhasil" data-type="Pelunasan">
<td class="py-space-md px-space-lg font-mono text-label-md text-primary font-semibold">TRX-2025-0145</td>
<td class="py-space-md px-space-md font-mono text-label-md text-outline">ORD-2025-088</td>
<td class="py-space-md px-space-md">
<div class="flex items-center gap-space-xs">
<span class="font-title-md text-title-md text-on-surface">Dimas Setiawan</span>
</div>
</td>
<td class="py-space-md px-space-md">
<span class="inline-flex items-center px-2.5 py-1 rounded-full text-label-sm font-semibold bg-secondary-fixed text-on-secondary-fixed-variant">
                Pelunasan
              </span>
</td>
<td class="py-space-md px-space-md text-right font-medium text-on-surface">Rp 2.100.000</td>
<td class="py-space-md px-space-md text-right font-semibold text-primary">Rp 1.050.000</td>
<td class="py-space-md px-space-md text-right text-outline">Rp 0</td>
<td class="py-space-md px-space-md text-center">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-label-sm font-semibold bg-surface-container-high text-on-surface">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                Berhasil (Lunas)
              </span>
</td>
<td class="py-space-md px-space-lg text-right">
<div class="flex flex-col items-end">
<span class="text-on-surface font-medium">07 Okt 2025 &bull; 14:10</span>
<span class="text-label-sm text-outline font-semibold">BSI Virtual Account</span>
</div>
</td>
</tr>
<!-- Row 5: Maya Indah Sari -->
<tr class="tx-row hover:bg-surface-container-low/60 transition-colors" data-search="trx-2025-0146 ord-2025-092 maya indah sari bca va" data-status="Berhasil" data-type="Pembayaran Penuh">
<td class="py-space-md px-space-lg font-mono text-label-md text-primary font-semibold">TRX-2025-0146</td>
<td class="py-space-md px-space-md font-mono text-label-md text-outline">ORD-2025-092</td>
<td class="py-space-md px-space-md">
<div class="flex items-center gap-space-xs">
<span class="font-title-md text-title-md text-on-surface">Maya Indah Sari</span>
</div>
</td>
<td class="py-space-md px-space-md">
<span class="inline-flex items-center px-2.5 py-1 rounded-full text-label-sm font-semibold bg-secondary-container text-on-secondary-container">
                Pembayaran Penuh
              </span>
</td>
<td class="py-space-md px-space-md text-right font-medium text-on-surface">Rp 2.000.000</td>
<td class="py-space-md px-space-md text-right font-semibold text-primary">Rp 2.000.000</td>
<td class="py-space-md px-space-md text-right text-outline">Rp 0</td>
<td class="py-space-md px-space-md text-center">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-label-sm font-semibold bg-surface-container-high text-on-surface">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                Berhasil (Lunas)
              </span>
</td>
<td class="py-space-md px-space-lg text-right">
<div class="flex flex-col items-end">
<span class="text-on-surface font-medium">08 Okt 2025 &bull; 10:05</span>
<span class="text-label-sm text-outline font-semibold">BCA Virtual Account</span>
</div>
</td>
</tr>
<!-- Row 6: Bella Clarissa -->
<tr class="tx-row hover:bg-surface-container-low/60 transition-colors bg-surface-container-lowest" data-search="trx-2025-0147 ord-2025-094 bella clarissa bni va" data-status="Berhasil" data-type="DP">
<td class="py-space-md px-space-lg font-mono text-label-md text-primary font-semibold">TRX-2025-0147</td>
<td class="py-space-md px-space-md font-mono text-label-md text-outline">ORD-2025-094</td>
<td class="py-space-md px-space-md">
<div class="flex items-center gap-space-xs">
<span class="font-title-md text-title-md text-on-surface">Bella Clarissa</span>
</div>
</td>
<td class="py-space-md px-space-md">
<span class="inline-flex items-center px-2.5 py-1 rounded-full text-label-sm font-semibold bg-surface-container-high text-on-surface-variant">
                DP (Uang Muka)
              </span>
</td>
<td class="py-space-md px-space-md text-right font-medium text-on-surface">Rp 2.500.000</td>
<td class="py-space-md px-space-md text-right font-semibold text-primary">Rp 1.000.000</td>
<td class="py-space-md px-space-md text-right font-medium text-secondary">Rp 1.500.000</td>
<td class="py-space-md px-space-md text-center">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-label-sm font-semibold bg-surface-container-low text-on-surface">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                Berhasil
              </span>
</td>
<td class="py-space-md px-space-lg text-right">
<div class="flex flex-col items-end">
<span class="text-on-surface font-medium">09 Okt 2025 &bull; 16:32</span>
<span class="text-label-sm text-outline font-semibold">BNI Virtual Account</span>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Empty State Fallback -->
<div class="hidden py-12 flex flex-col items-center justify-center gap-space-xs text-center" id="no-records-msg">
<span class="material-symbols-outlined text-4xl text-outline">receipt_long</span>
<span class="font-title-md text-title-md text-on-surface">Tidak ada data transaksi yang sesuai</span>
<span class="font-body-md text-body-md text-on-surface-variant">Silakan sesuaikan kriteria pencarian atau filter status</span>
</div>
<!-- Table Ledger Footer -->
<div class="p-space-md bg-surface-container-low flex flex-col sm:flex-row items-center justify-between gap-space-sm text-on-surface-variant font-label-md text-label-md">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-primary text-base">info</span>
<span>Menampilkan 6 transaksi terbaru terverifikasi otomatis</span>
</div>
<div class="flex items-center gap-space-md">
<span>Total Terbayar dalam Tabel: <strong class="text-on-surface font-semibold">Rp 8.900.000</strong></span>
</div>
</div>
</div>
<!-- Financial Audit Information Banner -->
<div class="rounded-xl p-space-lg bg-surface-container-high/60 shadow-sm flex flex-col md:flex-row items-start md:items-center justify-between gap-space-md">
<div class="flex items-start gap-space-md">
<div class="w-10 h-10 rounded-full bg-surface-container-lowest flex items-center justify-center text-primary shrink-0 shadow-xs">
<span class="material-symbols-outlined text-xl">gavel</span>
</div>
<div class="flex flex-col gap-0.5">
<span class="font-title-md text-title-md text-on-surface">Catatan Integritas Audit Finansial</span>
<p class="font-body-md text-body-md text-on-surface-variant max-w-3xl">
          Integrasi Otomatis: Data transaksi disinkronisasi langsung melalui Payment Gateway &amp; Bank Partner Cattaleya. Tidak tersedia opsi modifikasi manual untuk menjamin integritas pembukuan dan mematuhi tata kelola kas atelier.
        </p>
</div>
</div>
<div class="flex items-center gap-2 text-outline shrink-0 font-mono text-label-sm">
<span class="material-symbols-outlined text-base">sync_saved_locally</span>
<span>SYNC_OK: 15-05-2025 09:42 WIB</span>
</div>
</div>
</div>
@endsection

@push('scripts')
<script>
(function initTransactionsTable() {
    const searchInput = document.getElementById('search-input');
    const typeButtons = document.querySelectorAll('.filter-type-btn');
    const statusSelect = document.getElementById('filter-status');
    const resetBtn = document.getElementById('btn-reset-filter');
    const rows = document.querySelectorAll('.tx-row');
    const emptyMsg = document.getElementById('no-records-msg');
    const exportBtn = document.getElementById('btn-export-recap');

    let currentType = 'all';
    let currentStatus = 'all';
    let currentSearch = '';

    function filterData() {
      let visibleCount = 0;

      rows.forEach(row => {
        const rowType = row.getAttribute('data-type') || '';
        const rowStatus = row.getAttribute('data-status') || '';
        const rowSearchData = row.getAttribute('data-search') || '';

        const matchesType = (currentType === 'all') || (rowType.toLowerCase() === currentType.toLowerCase());
        const matchesStatus = (currentStatus === 'all') || (rowStatus.toLowerCase() === currentStatus.toLowerCase());
        const matchesSearch = !currentSearch || rowSearchData.includes(currentSearch.toLowerCase());

        if (matchesType && matchesStatus && matchesSearch) {
          row.style.display = '';
          visibleCount++;
        } else {
          row.style.display = 'none';
        }
      });

      if (emptyMsg) {
        emptyMsg.style.display = visibleCount === 0 ? 'flex' : 'none';
      }
    }

    typeButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        typeButtons.forEach(b => {
          b.classList.remove('bg-surface-container-lowest', 'text-on-surface', 'font-semibold', 'shadow-xs');
          b.classList.add('text-on-surface-variant');
        });
        btn.classList.remove('text-on-surface-variant');
        btn.classList.add('bg-surface-container-lowest', 'text-on-surface', 'font-semibold', 'shadow-xs');
        currentType = btn.getAttribute('data-type');
        filterData();
      });
    });

    if (statusSelect) {
      statusSelect.addEventListener('change', (e) => {
        currentStatus = e.target.value;
        filterData();
      });
    }

    if (searchInput) {
      searchInput.addEventListener('input', (e) => {
        currentSearch = e.target.value.trim();
        filterData();
      });
    }

    if (resetBtn) {
      resetBtn.addEventListener('click', () => {
        currentType = 'all';
        currentStatus = 'all';
        currentSearch = '';
        if (searchInput) searchInput.value = '';
        if (statusSelect) statusSelect.value = 'all';
        typeButtons.forEach((b, idx) => {
          if (idx === 0) {
            b.classList.add('bg-surface-container-lowest', 'text-on-surface', 'font-semibold', 'shadow-xs');
            b.classList.remove('text-on-surface-variant');
          } else {
            b.classList.remove('bg-surface-container-lowest', 'text-on-surface', 'font-semibold', 'shadow-xs');
            b.classList.add('text-on-surface-variant');
          }
        });
        filterData();
      });
    }

    if (exportBtn) {
      exportBtn.addEventListener('click', () => {
        const originalHtml = exportBtn.innerHTML;
        exportBtn.innerHTML = '<span class="material-symbols-outlined text-lg animate-spin">refresh</span><span class="font-label-md text-label-md">Menyiapkan...</span>';
        setTimeout(() => {
          exportBtn.innerHTML = originalHtml;
          alert('Laporan Ledger Transaksi telah diunduh dalam format PDF Terenkripsi.');
        }, 800);
      });
    }
  })();
</script>
@endpush