@extends('layouts.admin')

@section('title', 'Monitoring Transaksi & Pembayaran Midtrans — Cattaleya Atelier')

@section('content')
<div class="flex flex-col w-full">
<!-- Toast Notification -->
<div class="fixed bottom-6 right-6 z-50 transform translate-y-24 opacity-0 transition-all duration-300 pointer-events-none flex items-center gap-3 px-4 py-3 rounded-lg shadow-xl bg-inverse-surface text-inverse-on-surface font-title-md text-title-md" id="toastNotification">
<span class="material-symbols-outlined text-[20px] text-primary-fixed" id="toastIcon">check_circle</span>
<span id="toastMessage">Aksi berhasil dilakukan</span>
</div>
<!-- Top Hero / Operational Header -->
<div class="flex flex-col gap-6 mb-8">
<div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
<div class="flex flex-col min-w-0">
<div class="flex items-center gap-2 mb-1.5">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary">Studio Atelier Seserahan &amp; Mahar</span>
<span class="text-outline-variant">&bull;</span>
<span class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-secondary">
<span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
            Operasional Webhook Monitoring
          </span>
</div>
<h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight font-medium">Monitoring Transaksi &amp; Pembayaran Midtrans</h1>
<p class="font-body-md text-body-md text-on-surface-variant mt-1">
          Arus dana pemesanan mahar &amp; penyewaan kotak seserahan terverifikasi otomatis via Midtrans Payment Gateway
        </p>
</div>
<!-- Action Buttons & Quick Gateways -->
<div class="flex flex-wrap items-center gap-2.5 flex-shrink-0">
<button class="inline-flex items-center gap-2 px-3.5 py-2.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface font-title-md text-title-md shadow-sm transition-all active:scale-95" id="btnManualSync">
<span class="material-symbols-outlined text-[18px] text-primary transition-transform duration-700" id="syncIcon">sync</span>
<span>Sinkronisasi Midtrans Manual</span>
</button>
<button class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-primary hover:bg-primary-container text-on-primary font-title-md text-title-md shadow-md hover:shadow-lg transition-all active:scale-95" id="btnExportLog">
<span class="material-symbols-outlined text-[18px]">file_download</span>
<span>Export Log Transaksi</span>
</button>
</div>
</div>
<!-- Integrations Status Pill Bar -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-3">
<div class="flex items-center gap-3 p-3.5 rounded-xl bg-surface-container-lowest shadow-sm">
<div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center flex-shrink-0 text-primary">
<span class="material-symbols-outlined text-[20px]">account_balance</span>
</div>
<div class="min-w-0">
<p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Gateway Utama</p>
<div class="flex items-center gap-1.5 mt-0.5">
<span class="w-2 h-2 rounded-full bg-[#2d7a4d]"></span>
<p class="font-title-md text-title-md text-on-surface font-semibold truncate">Midtrans Production API</p>
</div>
</div>
</div>
<div class="flex items-center gap-3 p-3.5 rounded-xl bg-surface-container-lowest shadow-sm">
<div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center flex-shrink-0 text-primary">
<span class="material-symbols-outlined text-[20px]">mark_chat_read</span>
</div>
<div class="min-w-0">
<p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Layanan Notifikasi</p>
<div class="flex items-center gap-1.5 mt-0.5">
<span class="relative flex h-2 w-2">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#348b58] opacity-75"></span>
<span class="relative inline-flex rounded-full h-2 w-2 bg-[#2d7a4d]"></span>
</span>
<p class="font-title-md text-title-md text-on-surface font-semibold truncate">WhatsApp Gateway: Live</p>
</div>
</div>
</div>
<div class="flex items-center gap-3 p-3.5 rounded-xl bg-surface-container-lowest shadow-sm">
<div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center flex-shrink-0 text-secondary">
<span class="material-symbols-outlined text-[20px]">webhook</span>
</div>
<div class="min-w-0">
<p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Auto-Settlement Webhook</p>
<p class="font-title-md text-title-md text-on-surface font-semibold truncate">HTTP 200 OK &bull; Latensi 128ms</p>
</div>
</div>
<div class="flex items-center gap-3 p-3.5 rounded-xl bg-surface-container-lowest shadow-sm">
<div class="w-9 h-9 rounded-lg bg-secondary-container/40 flex items-center justify-center flex-shrink-0 text-primary">
<span class="material-symbols-outlined text-[20px]">verified_user</span>
</div>
<div class="min-w-0">
<p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Validasi Keamanan</p>
<p class="font-title-md text-title-md text-on-surface font-semibold truncate">SHA512 Signature Matched</p>
</div>
</div>
</div>
</div>
<!-- Financial Summary KPI Bento -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
<!-- Card 1 -->
<div class="relative overflow-hidden rounded-xl bg-surface-container-lowest p-5 shadow-sm transition-all hover:shadow-md flex flex-col justify-between">
<div class="flex items-start justify-between">
<span class="font-label-sm text-label-sm uppercase font-semibold tracking-wider text-secondary">Total Terbayar Masuk</span>
<span class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[18px]">payments</span>
</span>
</div>
<div class="mt-4 mb-2">
<span class="font-metric-display text-metric-display text-on-surface font-semibold">Rp 148.850.000</span>
</div>
<div class="flex items-center gap-1.5 font-label-md text-label-md text-[#2d7a4d]">
<span class="material-symbols-outlined text-[16px]">trending_up</span>
<span>Dana masuk bersih terverifikasi</span>
</div>
</div>
<!-- Card 2 -->
<div class="relative overflow-hidden rounded-xl bg-surface-container-lowest p-5 shadow-sm transition-all hover:shadow-md flex flex-col justify-between">
<div class="flex items-start justify-between">
<span class="font-label-sm text-label-sm uppercase font-semibold tracking-wider text-secondary">Menunggu Pelunasan</span>
<span class="w-8 h-8 rounded-lg bg-secondary-container/50 flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-[18px]">pending_actions</span>
</span>
</div>
<div class="mt-4 mb-2">
<span class="font-metric-display text-metric-display text-on-surface font-semibold">Rp 24.300.000</span>
</div>
<div class="flex items-center gap-1.5 font-label-md text-label-md text-secondary">
<span class="material-symbols-outlined text-[16px]">hourglass_top</span>
<span>11 pesanan status DP aktif</span>
</div>
</div>
<!-- Card 3 -->
<div class="relative overflow-hidden rounded-xl bg-surface-container-lowest p-5 shadow-sm transition-all hover:shadow-md flex flex-col justify-between">
<div class="flex items-start justify-between">
<span class="font-label-sm text-label-sm uppercase font-semibold tracking-wider text-secondary">Berhasil Hari Ini</span>
<span class="w-8 h-8 rounded-lg bg-primary-container/20 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[18px]">today</span>
</span>
</div>
<div class="mt-4 mb-2">
<span class="font-metric-display text-metric-display text-on-surface font-semibold">Rp 8.900.000</span>
</div>
<div class="flex items-center gap-1.5 font-label-md text-label-md text-on-surface-variant">
<span class="inline-block w-2 h-2 rounded-full bg-primary"></span>
<span>4 transaksi otomatis terselesaikan</span>
</div>
</div>
<!-- Card 4 -->
<div class="relative overflow-hidden rounded-xl bg-surface-container-lowest p-5 shadow-sm transition-all hover:shadow-md flex flex-col justify-between">
<div class="flex items-start justify-between">
<span class="font-label-sm text-label-sm uppercase font-semibold tracking-wider text-secondary">Keberhasilan Gateway</span>
<span class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[18px]">bolt</span>
</span>
</div>
<div class="mt-4 mb-2 flex items-baseline gap-2">
<span class="font-metric-display text-metric-display text-on-surface font-semibold">99.8%</span>
<span class="font-label-sm text-label-sm text-on-surface-variant font-medium">Otomatis</span>
</div>
<div class="flex items-center gap-1.5 font-label-md text-label-md text-[#2d7a4d]">
<span class="material-symbols-outlined text-[16px]">check_circle</span>
<span>Zero delayed reconciliation</span>
</div>
</div>
</div>
<!-- Operational Flow & WhatsApp Dispatch Banner -->
<div class="rounded-xl bg-surface-container-low p-4 sm:p-5 mb-8 shadow-sm flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
<div class="flex items-start gap-3.5">
<div class="w-10 h-10 rounded-xl bg-surface-container-lowest text-primary shadow-sm flex items-center justify-center flex-shrink-0 mt-0.5">
<span class="material-symbols-outlined text-[22px]">smart_toy</span>
</div>
<div class="flex flex-col">
<div class="flex items-center gap-2">
<span class="font-title-md text-title-md text-on-surface font-semibold">Otomasi Alur Pembayaran Cattaleya</span>
<span class="px-2 py-0.5 rounded-full bg-[#EFF3EE] text-[#344837] font-label-sm text-label-sm font-semibold">Aktif</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant mt-0.5">
          Admin hanya memantau data otomatis. Saat klien melunasi via Virtual Account/QRIS, webhook Midtrans memicu pengesahan status kas dan mengirimkan nota resmi WhatsApp Cattaleya dalam &plusmn;3 detik.
        </p>
</div>
</div>
<div class="flex items-center gap-2 flex-shrink-0 self-end md:self-center">
<span class="font-label-sm text-label-sm text-secondary bg-surface-container px-2.5 py-1 rounded-lg">Pesan Terakhir: 15 Mei, 09:14 WIB</span>
</div>
</div>
<!-- Filter & Search Controls -->
<div class="rounded-xl bg-surface-container-lowest p-4 sm:p-5 shadow-sm mb-6 flex flex-col gap-4">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-secondary text-[20px]">filter_alt</span>
<span class="font-title-md text-title-md text-on-surface font-semibold">Pencarian &amp; Filter Transaksi</span>
</div>
<button class="font-label-md text-label-md text-primary hover:text-primary-container font-semibold transition-colors" id="resetFilters">
        Reset Filter
      </button>
</div>
<!-- Filter Inputs Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-12 gap-3.5">
<!-- Search Input -->
<div class="xl:col-span-4 relative flex items-center">
<span class="material-symbols-outlined text-on-surface-variant text-[20px] absolute left-3.5 pointer-events-none">search</span>
<input class="w-full pl-10 pr-4 py-2.5 bg-surface-container-low focus:bg-surface-container-lowest rounded-lg font-body-md text-body-md text-on-surface placeholder:text-on-surface-variant/70 outline-none transition-all" id="searchKeyword" placeholder="Cari TRX-..., ORD-..., atau nama pelanggan..." type="text">
</div>
<!-- Payment Type Filter -->
<div class="xl:col-span-2 relative">
<select class="w-full py-2.5 px-3 bg-surface-container-low rounded-lg font-body-md text-body-md text-on-surface outline-none cursor-pointer appearance-none" id="filterType">
<option value="all">Semua Jenis Pembayaran</option>
<option value="DP">DP (Uang Muka)</option>
<option value="Pelunasan">Pelunasan</option>
<option value="Penuh">Pembayaran Penuh (100%)</option>
</select>
<span class="material-symbols-outlined text-on-surface-variant text-[18px] absolute right-3 top-3 pointer-events-none">expand_more</span>
</div>
<!-- Payment Method Filter -->
<div class="xl:col-span-2 relative">
<select class="w-full py-2.5 px-3 bg-surface-container-low rounded-lg font-body-md text-body-md text-on-surface outline-none cursor-pointer appearance-none" id="filterMethod">
<option value="all">Semua Metode Midtrans</option>
<option value="BCA">BCA Virtual Account</option>
<option value="Mandiri">Mandiri Bill Payment</option>
<option value="BSI">BSI Virtual Account</option>
<option value="QRIS">QRIS (Gopay / ShopeePay)</option>
</select>
<span class="material-symbols-outlined text-on-surface-variant text-[18px] absolute right-3 top-3 pointer-events-none">expand_more</span>
</div>
<!-- Payment Status Filter -->
<div class="xl:col-span-2 relative">
<select class="w-full py-2.5 px-3 bg-surface-container-low rounded-lg font-body-md text-body-md text-on-surface outline-none cursor-pointer appearance-none" id="filterStatus">
<option value="all">Semua Status</option>
<option value="Settlement">Berhasil (Settlement)</option>
<option value="Pending">Menunggu Pembayaran</option>
<option value="Expired">Kedaluwarsa (Expired)</option>
</select>
<span class="material-symbols-outlined text-on-surface-variant text-[18px] absolute right-3 top-3 pointer-events-none">expand_more</span>
</div>
<!-- Date Range Filter -->
<div class="xl:col-span-2 relative flex items-center">
<span class="material-symbols-outlined text-on-surface-variant text-[18px] absolute left-3 pointer-events-none">calendar_month</span>
<input class="w-full pl-9 pr-3 py-2.5 bg-surface-container-low rounded-lg font-body-md text-body-md text-on-surface outline-none cursor-pointer" id="filterDate" type="date" value="2025-05-15">
</div>
</div>
</div>
<!-- Transaksi Midtrans Data Table -->
<div class="rounded-xl bg-surface-container-lowest shadow-sm overflow-hidden mb-8">
<div class="p-4 sm:px-6 py-4 flex flex-col sm:flex-row sm:items-center justify-between gap-2 bg-surface-container-low/50">
<div class="flex items-center gap-2">
<span class="font-title-lg text-title-lg text-on-surface font-semibold">Daftar Transaksi Masuk</span>
<span class="font-label-sm text-label-sm px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-semibold" id="recordCount">6 Transaksi</span>
</div>
<div class="flex items-center gap-2 font-label-md text-label-md text-on-surface-variant">
<span class="material-symbols-outlined text-[16px] text-[#2d7a4d]">sensors</span>
<span>Polling Webhook Interval: 10s</span>
</div>
</div>
<!-- Table Container -->
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low text-secondary font-label-sm text-label-sm uppercase tracking-wider">
<th class="py-3 px-4 sm:px-5 font-semibold">ID Transaksi / Pesanan</th>
<th class="py-3 px-4 font-semibold">Pelanggan</th>
<th class="py-3 px-4 font-semibold">Jenis Pembayaran</th>
<th class="py-3 px-4 font-semibold text-right">Total Order</th>
<th class="py-3 px-4 font-semibold text-right">Nominal Masuk</th>
<th class="py-3 px-4 font-semibold text-right">Sisa Tagihan</th>
<th class="py-3 px-4 font-semibold text-center">Status</th>
<th class="py-3 px-4 font-semibold">Waktu &amp; Metode Midtrans</th>
<th class="py-3 px-4 sm:px-5 font-semibold text-center">Aksi Operasional</th>
</tr>
</thead>
<tbody class="divide-y-0 text-on-surface font-body-md text-body-md" id="transactionTableBody">
<!-- Row 1 -->
<tr class="hover:bg-surface-container-low/60 transition-colors group" data-date="2025-05-15" data-method="BCA" data-name="Anisa Rahmawati" data-order="ORD-2025-089" data-status="Settlement" data-trx="TRX-2025-0142" data-type="Penuh">
<td class="py-4 px-4 sm:px-5">
<span class="font-semibold text-primary block">TRX-2025-0142</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Ref: ORD-2025-089</span>
</td>
<td class="py-4 px-4">
<p class="font-semibold text-on-surface">Anisa Rahmawati</p>
<p class="font-label-sm text-label-sm text-on-surface-variant">0812-9988-2101</p>
</td>
<td class="py-4 px-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                Pembayaran Penuh
              </span>
</td>
<td class="py-4 px-4 text-right font-medium">Rp 2.450.000</td>
<td class="py-4 px-4 text-right font-semibold text-[#2d7a4d]">Rp 2.450.000</td>
<td class="py-4 px-4 text-right font-medium text-secondary">Rp 0</td>
<td class="py-4 px-4 text-center">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#EFF3EE] text-[#344837] font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-[#4F6A54]"></span>
                Berhasil / Settlement
              </span>
</td>
<td class="py-4 px-4">
<p class="font-medium text-on-surface">15 Mei 2025, 09:14 WIB</p>
<div class="flex items-center gap-1 mt-0.5 text-on-surface-variant font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[14px] text-secondary">account_balance</span>
<span>Midtrans BCA VA</span>
</div>
</td>
<td class="py-4 px-4 sm:px-5 text-center">
<div class="flex items-center justify-center gap-1.5">
<button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-secondary hover:text-on-surface transition-colors" onclick="openPayloadModal('TRX-2025-0142', 'ORD-2025-089', 'Anisa Rahmawati', 'Rp 2.450.000', 'BCA Virtual Account', 'Settlement', '2025-05-15 09:14:22', '0812-9988-2101')" title="Lihat Payload Midtrans &amp; Resi">
<span class="material-symbols-outlined text-[18px]">receipt_long</span>
</button>
<button class="p-2 rounded-lg bg-[#EFF3EE] hover:bg-[#dce6db] text-[#344837] transition-colors" onclick="triggerWhatsApp('Anisa Rahmawati', '0812-9988-2101', 'TRX-2025-0142', 'ORD-2025-089', 'Rp 2.450.000', 'Pembayaran Penuh')" title="Kirim Ulang Bukti Pembayaran ke WhatsApp Pelanggan">
<span class="material-symbols-outlined text-[18px]">send</span>
</button>
</div>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-surface-container-low/60 transition-colors group" data-date="2025-05-15" data-method="Mandiri" data-name="Dimas Arya &amp; Sarah" data-order="ORD-2025-088" data-status="Settlement" data-trx="TRX-2025-0141" data-type="DP">
<td class="py-4 px-4 sm:px-5">
<span class="font-semibold text-primary block">TRX-2025-0141</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Ref: ORD-2025-088</span>
</td>
<td class="py-4 px-4">
<p class="font-semibold text-on-surface">Dimas Arya &amp; Sarah</p>
<p class="font-label-sm text-label-sm text-on-surface-variant">0813-4411-9022</p>
</td>
<td class="py-4 px-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-surface-container text-secondary font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                DP (Uang Muka 50%)
              </span>
</td>
<td class="py-4 px-4 text-right font-medium">Rp 4.500.000</td>
<td class="py-4 px-4 text-right font-semibold text-[#2d7a4d]">Rp 2.250.000</td>
<td class="py-4 px-4 text-right font-medium text-error">Rp 2.250.000</td>
<td class="py-4 px-4 text-center">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#EFF3EE] text-[#344837] font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-[#4F6A54]"></span>
                Berhasil / Settlement
              </span>
</td>
<td class="py-4 px-4">
<p class="font-medium text-on-surface">15 Mei 2025, 08:30 WIB</p>
<div class="flex items-center gap-1 mt-0.5 text-on-surface-variant font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[14px] text-secondary">account_balance_wallet</span>
<span>Mandiri Bill Payment</span>
</div>
</td>
<td class="py-4 px-4 sm:px-5 text-center">
<div class="flex items-center justify-center gap-1.5">
<button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-secondary hover:text-on-surface transition-colors" onclick="openPayloadModal('TRX-2025-0141', 'ORD-2025-088', 'Dimas Arya &amp; Sarah', 'Rp 2.250.000', 'Mandiri Bill', 'Settlement', '2025-05-15 08:30:10', '0813-4411-9022')" title="Lihat Payload Midtrans &amp; Resi">
<span class="material-symbols-outlined text-[18px]">receipt_long</span>
</button>
<button class="p-2 rounded-lg bg-[#EFF3EE] hover:bg-[#dce6db] text-[#344837] transition-colors" onclick="triggerWhatsApp('Dimas Arya &amp; Sarah', '0813-4411-9022', 'TRX-2025-0141', 'ORD-2025-088', 'Rp 2.250.000', 'DP (Uang Muka 50%)')" title="Kirim Ulang Bukti Pembayaran ke WhatsApp Pelanggan">
<span class="material-symbols-outlined text-[18px]">send</span>
</button>
</div>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-surface-container-low/60 transition-colors group" data-date="2025-05-15" data-method="QRIS" data-name="Farah Diba Laksmana" data-order="ORD-2025-072" data-status="Settlement" data-trx="TRX-2025-0140" data-type="Pelunasan">
<td class="py-4 px-4 sm:px-5">
<span class="font-semibold text-primary block">TRX-2025-0140</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Ref: ORD-2025-072</span>
</td>
<td class="py-4 px-4">
<p class="font-semibold text-on-surface">Farah Diba Laksmana</p>
<p class="font-label-sm text-label-sm text-on-surface-variant">0821-7765-8890</p>
</td>
<td class="py-4 px-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                Pelunasan Akhir
              </span>
</td>
<td class="py-4 px-4 text-right font-medium">Rp 3.800.000</td>
<td class="py-4 px-4 text-right font-semibold text-[#2d7a4d]">Rp 1.900.000</td>
<td class="py-4 px-4 text-right font-medium text-secondary">Rp 0</td>
<td class="py-4 px-4 text-center">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#EFF3EE] text-[#344837] font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-[#4F6A54]"></span>
                Berhasil / Settlement
              </span>
</td>
<td class="py-4 px-4">
<p class="font-medium text-on-surface">15 Mei 2025, 07:45 WIB</p>
<div class="flex items-center gap-1 mt-0.5 text-on-surface-variant font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[14px] text-secondary">qr_code_scanner</span>
<span>QRIS Instant (GoPay)</span>
</div>
</td>
<td class="py-4 px-4 sm:px-5 text-center">
<div class="flex items-center justify-center gap-1.5">
<button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-secondary hover:text-on-surface transition-colors" onclick="openPayloadModal('TRX-2025-0140', 'ORD-2025-072', 'Farah Diba Laksmana', 'Rp 1.900.000', 'QRIS GoPay', 'Settlement', '2025-05-15 07:45:00', '0821-7765-8890')" title="Lihat Payload Midtrans &amp; Resi">
<span class="material-symbols-outlined text-[18px]">receipt_long</span>
</button>
<button class="p-2 rounded-lg bg-[#EFF3EE] hover:bg-[#dce6db] text-[#344837] transition-colors" onclick="triggerWhatsApp('Farah Diba Laksmana', '0821-7765-8890', 'TRX-2025-0140', 'ORD-2025-072', 'Rp 1.900.000', 'Pelunasan Akhir')" title="Kirim Ulang Bukti Pembayaran ke WhatsApp Pelanggan">
<span class="material-symbols-outlined text-[18px]">send</span>
</button>
</div>
</td>
</tr>
<!-- Row 4 -->
<tr class="hover:bg-surface-container-low/60 transition-colors group" data-date="2025-05-15" data-method="BSI" data-name="Bagas Wicaksono" data-order="ORD-2025-092" data-status="Settlement" data-trx="TRX-2025-0139" data-type="Penuh">
<td class="py-4 px-4 sm:px-5">
<span class="font-semibold text-primary block">TRX-2025-0139</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Ref: ORD-2025-092</span>
</td>
<td class="py-4 px-4">
<p class="font-semibold text-on-surface">Bagas Wicaksono</p>
<p class="font-label-sm text-label-sm text-on-surface-variant">0857-1122-3450</p>
</td>
<td class="py-4 px-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                Pembayaran Penuh
              </span>
</td>
<td class="py-4 px-4 text-right font-medium">Rp 2.300.000</td>
<td class="py-4 px-4 text-right font-semibold text-[#2d7a4d]">Rp 2.300.000</td>
<td class="py-4 px-4 text-right font-medium text-secondary">Rp 0</td>
<td class="py-4 px-4 text-center">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#EFF3EE] text-[#344837] font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-[#4F6A54]"></span>
                Berhasil / Settlement
              </span>
</td>
<td class="py-4 px-4">
<p class="font-medium text-on-surface">15 Mei 2025, 06:10 WIB</p>
<div class="flex items-center gap-1 mt-0.5 text-on-surface-variant font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[14px] text-secondary">account_balance</span>
<span>Midtrans BSI VA</span>
</div>
</td>
<td class="py-4 px-4 sm:px-5 text-center">
<div class="flex items-center justify-center gap-1.5">
<button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-secondary hover:text-on-surface transition-colors" onclick="openPayloadModal('TRX-2025-0139', 'ORD-2025-092', 'Bagas Wicaksono', 'Rp 2.300.000', 'BSI Virtual Account', 'Settlement', '2025-05-15 06:10:45', '0857-1122-3450')" title="Lihat Payload Midtrans &amp; Resi">
<span class="material-symbols-outlined text-[18px]">receipt_long</span>
</button>
<button class="p-2 rounded-lg bg-[#EFF3EE] hover:bg-[#dce6db] text-[#344837] transition-colors" onclick="triggerWhatsApp('Bagas Wicaksono', '0857-1122-3450', 'TRX-2025-0139', 'ORD-2025-092', 'Rp 2.300.000', 'Pembayaran Penuh')" title="Kirim Ulang Bukti Pembayaran ke WhatsApp Pelanggan">
<span class="material-symbols-outlined text-[18px]">send</span>
</button>
</div>
</td>
</tr>
<!-- Row 5 -->
<tr class="hover:bg-surface-container-low/60 transition-colors group" data-date="2025-05-14" data-method="BCA" data-name="Jessica Pricilla" data-order="ORD-2025-095" data-status="Pending" data-trx="TRX-2025-0138" data-type="DP">
<td class="py-4 px-4 sm:px-5">
<span class="font-semibold text-primary block">TRX-2025-0138</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Ref: ORD-2025-095</span>
</td>
<td class="py-4 px-4">
<p class="font-semibold text-on-surface">Jessica Pricilla</p>
<p class="font-label-sm text-label-sm text-on-surface-variant">0819-3321-7600</p>
</td>
<td class="py-4 px-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-surface-container text-secondary font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                DP (Uang Muka 50%)
              </span>
</td>
<td class="py-4 px-4 text-right font-medium">Rp 5.200.000</td>
<td class="py-4 px-4 text-right font-semibold text-on-surface-variant">Rp 0</td>
<td class="py-4 px-4 text-right font-medium text-error">Rp 2.600.000</td>
<td class="py-4 px-4 text-center">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#EFF4F7] text-[#455765] font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-[#455765] animate-pulse"></span>
                Menunggu Pembayaran
              </span>
</td>
<td class="py-4 px-4">
<p class="font-medium text-on-surface">14 Mei 2025, 23:05 WIB</p>
<div class="flex items-center gap-1 mt-0.5 text-on-surface-variant font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[14px] text-secondary">account_balance</span>
<span>BCA VA (Batas: 23 Jam)</span>
</div>
</td>
<td class="py-4 px-4 sm:px-5 text-center">
<div class="flex items-center justify-center gap-1.5">
<button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-secondary hover:text-on-surface transition-colors" onclick="openPayloadModal('TRX-2025-0138', 'ORD-2025-095', 'Jessica Pricilla', 'Rp 2.600.000 (Tagihan DP)', 'BCA Virtual Account', 'Pending', '2025-05-14 23:05:12', '0819-3321-7600')" title="Lihat Payload Midtrans &amp; Resi">
<span class="material-symbols-outlined text-[18px]">receipt_long</span>
</button>
<button class="p-2 rounded-lg bg-surface-container hover:bg-secondary-container text-secondary transition-colors" onclick="triggerWhatsAppReminder('Jessica Pricilla', '0819-3321-7600', 'ORD-2025-095', 'Rp 2.600.000')" title="Kirim Pengingat Pembayaran via WhatsApp">
<span class="material-symbols-outlined text-[18px]">notifications_active</span>
</button>
</div>
</td>
</tr>
<!-- Row 6 -->
<tr class="hover:bg-surface-container-low/60 transition-colors group" data-date="2025-05-13" data-method="QRIS" data-name="Reza Hendrawan" data-order="ORD-2025-081" data-status="Expired" data-trx="TRX-2025-0137" data-type="Penuh">
<td class="py-4 px-4 sm:px-5">
<span class="font-semibold text-primary block">TRX-2025-0137</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Ref: ORD-2025-081</span>
</td>
<td class="py-4 px-4">
<p class="font-semibold text-on-surface">Reza Hendrawan</p>
<p class="font-label-sm text-label-sm text-on-surface-variant">0811-2090-4433</p>
</td>
<td class="py-4 px-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-outline"></span>
                Pembayaran Penuh
              </span>
</td>
<td class="py-4 px-4 text-right font-medium">Rp 1.750.000</td>
<td class="py-4 px-4 text-right font-semibold text-on-surface-variant">Rp 0</td>
<td class="py-4 px-4 text-right font-medium text-error">Rp 1.750.000</td>
<td class="py-4 px-4 text-center">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-error-container text-on-error-container font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-error"></span>
                Kedaluwarsa (Expired)
              </span>
</td>
<td class="py-4 px-4">
<p class="font-medium text-on-surface">13 Mei 2025, 14:00 WIB</p>
<div class="flex items-center gap-1 mt-0.5 text-on-surface-variant font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[14px] text-secondary">cancel</span>
<span>QRIS (Timeout 15 Menit)</span>
</div>
</td>
<td class="py-4 px-4 sm:px-5 text-center">
<div class="flex items-center justify-center gap-1.5">
<button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-secondary hover:text-on-surface transition-colors" onclick="openPayloadModal('TRX-2025-0137', 'ORD-2025-081', 'Reza Hendrawan', 'Rp 1.750.000', 'QRIS Instant', 'Expired', '2025-05-13 14:15:00', '0811-2090-4433')" title="Lihat Payload Midtrans &amp; Resi">
<span class="material-symbols-outlined text-[18px]">receipt_long</span>
</button>
<button class="p-2 rounded-lg bg-surface-container/40 text-outline-variant cursor-not-allowed" disabled="" title="Transaksi Expired">
<span class="material-symbols-outlined text-[18px]">block</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Empty State (hidden by default) -->
<div class="hidden py-12 px-4 text-center" id="noResults">
<div class="w-14 h-14 mx-auto rounded-full bg-surface-container flex items-center justify-center text-secondary mb-3">
<span class="material-symbols-outlined text-[28px]">search_off</span>
</div>
<p class="font-title-md text-title-md text-on-surface font-semibold">Tidak Ada Transaksi yang Cocok</p>
<p class="font-body-md text-body-md text-on-surface-variant mt-1 max-w-sm mx-auto">
        Silakan periksa kembali kata kunci pencarian, filter status, atau rentang tanggal transaksi yang Anda pilih.
      </p>
</div>
<!-- Footer of Table -->
<div class="p-4 sm:px-6 bg-surface-container-low/30 flex flex-col sm:flex-row items-center justify-between gap-3 text-secondary font-label-md text-label-md">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[18px] text-primary">info</span>
<span>Data tersinkron otomatis secara real-time dari Midtrans Core API Callback</span>
</div>
<div class="flex items-center gap-2">
<span class="text-on-surface-variant">Menampilkan 1-6 dari 6 entri transaksi</span>
</div>
</div>
</div>
<!-- Bottom Section: Recent WhatsApp Dispatch Logs & Operational Vitrine Showcase -->
<div class="grid grid-cols-1 xl:grid-cols-3 gap-6 mb-8">
<!-- Log Notifikasi WhatsApp Gateway -->
<div class="xl:col-span-2 rounded-xl bg-surface-container-lowest p-5 shadow-sm flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-4">
<div class="flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-[#2d7a4d]"></span>
<h2 class="font-title-lg text-title-lg text-on-surface font-semibold">Log Notifikasi WhatsApp Gateway Otomatis</h2>
</div>
<span class="font-label-sm text-label-sm px-2.5 py-1 rounded-full bg-[#EFF3EE] text-[#344837] font-semibold">
            Gateway Online
          </span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant mb-4">
          Pesan konfirmasi pembayaran otomatis terkirim via WhatsApp resmi Cattaleya dalam hitungan detik setelah webhook Midtrans diterima:
        </p>
<!-- Message Log List -->
<div class="space-y-3 font-body-md text-body-md">
<div class="p-3.5 rounded-lg bg-surface-container-low flex items-start justify-between gap-3">
<div class="flex items-start gap-3">
<div class="w-8 h-8 rounded-full bg-[#EFF3EE] text-[#344837] flex items-center justify-center flex-shrink-0 mt-0.5">
<span class="material-symbols-outlined text-[16px]">done_all</span>
</div>
<div class="min-w-0">
<div class="flex items-center gap-2">
<span class="font-semibold text-on-surface">Anisa Rahmawati</span>
<span class="text-on-surface-variant text-label-sm font-label-sm">(0812-9988-2101)</span>
</div>
<p class="text-on-surface-variant text-label-md font-label-md mt-0.5 truncate">
                  "Halo Kak Anisa, pembayaran penuh untuk ORD-2025-089 (Rp 2.450.000) telah kami terima. Tim atelier mulai memproses pesanan..."
                </p>
</div>
</div>
<div class="flex flex-col items-end flex-shrink-0">
<span class="font-label-sm text-label-sm text-[#2d7a4d] font-semibold">Terkirim (0.8s)</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">09:14 WIB</span>
</div>
</div>
<div class="p-3.5 rounded-lg bg-surface-container-low flex items-start justify-between gap-3">
<div class="flex items-start gap-3">
<div class="w-8 h-8 rounded-full bg-[#EFF3EE] text-[#344837] flex items-center justify-center flex-shrink-0 mt-0.5">
<span class="material-symbols-outlined text-[16px]">done_all</span>
</div>
<div class="min-w-0">
<div class="flex items-center gap-2">
<span class="font-semibold text-on-surface">Dimas Arya &amp; Sarah</span>
<span class="text-on-surface-variant text-label-sm font-label-sm">(0813-4411-9022)</span>
</div>
<p class="text-on-surface-variant text-label-md font-label-md mt-0.5 truncate">
                  "Halo Kak Dimas &amp; Sarah, uang muka DP 50% sebesar Rp 2.250.000 telah terverifikasi. Jadwal pengerjaan mahar vitrine telah dikonfirmasi..."
                </p>
</div>
</div>
<div class="flex flex-col items-end flex-shrink-0">
<span class="font-label-sm text-label-sm text-[#2d7a4d] font-semibold">Terkirim (1.1s)</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">08:30 WIB</span>
</div>
</div>
<div class="p-3.5 rounded-lg bg-surface-container-low flex items-start justify-between gap-3">
<div class="flex items-start gap-3">
<div class="w-8 h-8 rounded-full bg-[#EFF3EE] text-[#344837] flex items-center justify-center flex-shrink-0 mt-0.5">
<span class="material-symbols-outlined text-[16px]">done_all</span>
</div>
<div class="min-w-0">
<div class="flex items-center gap-2">
<span class="font-semibold text-on-surface">Farah Diba Laksmana</span>
<span class="text-on-surface-variant text-label-sm font-label-sm">(0821-7765-8890)</span>
</div>
<p class="text-on-surface-variant text-label-md font-label-md mt-0.5 truncate">
                  "Nota Pelunasan Seserahan: Pembayaran sisa Rp 1.900.000 berhasil via QRIS. Seluruh 7 boks seserahan siap diambil sesuai jadwal..."
                </p>
</div>
</div>
<div class="flex flex-col items-end flex-shrink-0">
<span class="font-label-sm text-label-sm text-[#2d7a4d] font-semibold">Terkirim (0.9s)</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">07:45 WIB</span>
</div>
</div>
</div>
</div>
<div class="mt-4 pt-3 flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm border-t-0">
<span>Pengirim: Cattaleya Official (+62 822-1000-8899)</span>
<span class="font-semibold text-primary">Status API: 100% Delivery Rate</span>
</div>
</div>
<!-- Atelier Craft Context Card -->
<div class="rounded-xl bg-surface-container-lowest p-5 shadow-sm flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-3">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Pesanan Terbaru Terbayar</span>
<span class="material-symbols-outlined text-primary text-[20px]">diamond</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface">Koleksi Vitrine &amp; Akrilik</h3>
<p class="font-body-md text-body-md text-on-surface-variant mt-1 mb-4">
          Setiap transaksi sukses langsung mengunci stok kotak akrilik dan slot pengerjaan master artisan.
        </p>
<!-- Preview Image of Atelier Seserahan -->
<div class="relative w-full h-44 rounded-lg overflow-hidden mb-3 bg-surface-container">
<img class="w-full h-full object-cover" data-alt="Close up luxurious Indonesian wedding dowry seserahan tray with gold trimming, elegant calligraphy, preserved white orchids and jasmine, nestled inside a clear glass vitrine on fine linen fabric, illuminated by soft golden warm studio lighting in champagne and muted gold tones." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFLMQOQomPuEYoT7GWLbh7EP71KcMDsQMvpSnzk-dKajl58Zdli00rcZc3TdXm9TGqX8LTKFQ5Y8KwiHId4y_m0kVqdwa6G7CGYIfssyTSoa79aa0-FDoqTK84LgvUPhCeaHgWHLKfNEAqFZl1Ezg0aWts5KLAtmzmAOlFOO9zLHEymZj6qSYRsFNcONyPZmM-vu55A5FW5kTYKUbMQd4r_VL3WLJAP9fjrNldXmcruwzvrAtnNeqL">
<div class="absolute bottom-2 left-2 right-2 p-2 rounded bg-surface/90 backdrop-blur-md flex items-center justify-between">
<span class="font-label-sm text-label-sm font-semibold text-on-surface">ORD-2025-089 (Anisa)</span>
<span class="font-label-sm text-label-sm text-[#2d7a4d] font-semibold">Lunas &amp; Dikunci</span>
</div>
</div>
</div>
<div class="p-3 rounded-lg bg-surface-container-low flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-[20px]">verified</span>
<div class="min-w-0">
<p class="font-title-md text-title-md text-on-surface font-semibold truncate">Garansi Kunci Inventaris</p>
<p class="font-label-sm text-label-sm text-on-surface-variant truncate">Stok 8 kotak akrilik diproteksi otomatis</p>
</div>
</div>
</div>
</div>
<!-- Modal: Midtrans Payload & Resi Inspection -->
<div class="fixed inset-0 z-50 hidden items-center justify-center p-4 bg-inverse-surface/40 backdrop-blur-sm" id="payloadModal">
<div class="relative w-full max-w-2xl rounded-2xl bg-surface-container-lowest p-6 shadow-2xl max-h-[921px] flex flex-col justify-between overflow-hidden">
<!-- Modal Header -->
<div class="flex items-start justify-between pb-4 border-b-0">
<div>
<div class="flex items-center gap-2 mb-1">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-semibold">Midtrans Callback Payload</span>
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
<span class="px-2 py-0.5 rounded-full font-label-sm text-label-sm font-semibold bg-[#EFF3EE] text-[#344837]" id="modalStatusBadge">Settlement</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface font-semibold" id="modalTrxTitle">TRX-2025-0142</h3>
<p class="font-body-md text-body-md text-on-surface-variant" id="modalOrderSubtitle">Ref Order: ORD-2025-089 &bull; Pelanggan: Anisa Rahmawati</p>
</div>
<button class="p-1.5 rounded-lg text-secondary hover:bg-surface-container transition-colors" onclick="closePayloadModal()">
<span class="material-symbols-outlined text-[22px]">close</span>
</button>
</div>
<!-- Modal Body (JSON & Resi Details) -->
<div class="flex-1 overflow-y-auto space-y-4 py-3">
<!-- Overview Grid -->
<div class="grid grid-cols-2 sm:grid-cols-3 gap-3 p-3.5 rounded-xl bg-surface-container-low font-body-md text-body-md">
<div>
<p class="font-label-sm text-label-sm text-on-surface-variant uppercase">Nominal</p>
<p class="font-semibold text-on-surface text-title-md font-title-md mt-0.5" id="modalAmount">Rp 2.450.000</p>
</div>
<div>
<p class="font-label-sm text-label-sm text-on-surface-variant uppercase">Kanal Bayar</p>
<p class="font-semibold text-on-surface text-title-md font-title-md mt-0.5" id="modalChannel">BCA Virtual Account</p>
</div>
<div>
<p class="font-label-sm text-label-sm text-on-surface-variant uppercase">Waktu Settlement</p>
<p class="font-semibold text-on-surface text-title-md font-title-md mt-0.5" id="modalTime">2025-05-15 09:14:22</p>
</div>
</div>
<!-- Raw Webhook JSON payload display -->
<div>
<div class="flex items-center justify-between mb-1.5">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Raw Midtrans Webhook (JSON)</span>
<button class="font-label-sm text-label-sm text-primary hover:underline flex items-center gap-1 font-semibold" onclick="copyPayload()">
<span class="material-symbols-outlined text-[14px]">content_copy</span>
              Salin Payload
            </button>
</div>
<pre class="p-3.5 rounded-xl bg-surface-container text-on-surface font-mono text-[12px] overflow-x-auto leading-relaxed max-h-48" id="jsonPayloadArea"></pre>
</div>
<!-- Client WhatsApp Dispatch Info -->
<div class="p-3.5 rounded-xl bg-secondary-container/30 flex items-center justify-between gap-3">
<div class="flex items-center gap-3 min-w-0">
<span class="material-symbols-outlined text-primary text-[22px]">contact_phone</span>
<div class="min-w-0">
<p class="font-title-md text-title-md text-on-surface font-semibold truncate" id="modalClientPhone">WhatsApp: 0812-9988-2101</p>
<p class="font-label-sm text-label-sm text-on-surface-variant truncate">Nota digital &amp; bukti bayar tersimpan di database Cattaleya</p>
</div>
</div>
<button class="flex-shrink-0 px-3 py-1.5 rounded-lg bg-primary hover:bg-primary-container text-on-primary font-label-md text-label-md font-semibold transition-all" id="modalWaActionBtn">
            Kirim WhatsApp
          </button>
</div>
</div>
<!-- Modal Footer -->
<div class="pt-4 flex items-center justify-end gap-2.5">
<button class="px-4 py-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface font-title-md text-title-md transition-all" onclick="closePayloadModal()">
          Tutup
        </button>
</div>
</div>
</div>
<!-- Inline Script for Interactive Filtering, Search, Modal, and WhatsApp Triggers -->
@endsection

@push('scripts')
<script>
// Search & Filter Execution
    const searchInput = document.getElementById('searchKeyword');
    const filterType = document.getElementById('filterType');
    const filterMethod = document.getElementById('filterMethod');
    const filterStatus = document.getElementById('filterStatus');
    const filterDate = document.getElementById('filterDate');
    const resetBtn = document.getElementById('resetFilters');
    const tableBody = document.getElementById('transactionTableBody');
    const rows = tableBody.querySelectorAll('tr');
    const recordCountBadge = document.getElementById('recordCount');
    const noResultsDiv = document.getElementById('noResults');

    function applyFilters() {
      const keyword = (searchInput.value || '').toLowerCase().trim();
      const typeVal = filterType.value;
      const methodVal = filterMethod.value;
      const statusVal = filterStatus.value;
      const dateVal = filterDate.value;

      let visibleCount = 0;

      rows.forEach(row => {
        const trx = (row.getAttribute('data-trx') || '').toLowerCase();
        const ord = (row.getAttribute('data-order') || '').toLowerCase();
        const name = (row.getAttribute('data-name') || '').toLowerCase();
        const rowType = row.getAttribute('data-type');
        const rowMethod = row.getAttribute('data-method');
        const rowStatus = row.getAttribute('data-status');
        const rowDate = row.getAttribute('data-date');

        const matchesKeyword = !keyword || trx.includes(keyword) || ord.includes(keyword) || name.includes(keyword);
        const matchesType = typeVal === 'all' || rowType === typeVal;
        const matchesMethod = methodVal === 'all' || rowMethod === methodVal;
        const matchesStatus = statusVal === 'all' || rowStatus === statusVal;
        const matchesDate = !dateVal || rowDate === dateVal;

        if (matchesKeyword && matchesType && matchesMethod && matchesStatus && matchesDate) {
          row.style.display = '';
          visibleCount++;
        } else {
          row.style.display = 'none';
        }
      });

      recordCountBadge.textContent = visibleCount + ' Transaksi';

      if (visibleCount === 0) {
        noResultsDiv.classList.remove('hidden');
      } else {
        noResultsDiv.classList.add('hidden');
      }
    }

    searchInput.addEventListener('input', applyFilters);
    filterType.addEventListener('change', applyFilters);
    filterMethod.addEventListener('change', applyFilters);
    filterStatus.addEventListener('change', applyFilters);
    filterDate.addEventListener('change', applyFilters);

    resetBtn.addEventListener('click', () => {
      searchInput.value = '';
      filterType.value = 'all';
      filterMethod.value = 'all';
      filterStatus.value = 'all';
      filterDate.value = '';
      applyFilters();
      showToast('Filter telah direset ke bawaan.', 'refresh');
    });

    // Toast Notification Utility
    function showToast(message, icon = 'check_circle') {
      const toast = document.getElementById('toastNotification');
      const toastMessage = document.getElementById('toastMessage');
      const toastIcon = document.getElementById('toastIcon');

      toastMessage.textContent = message;
      toastIcon.textContent = icon;
      toast.classList.remove('translate-y-24', 'opacity-0', 'pointer-events-none');
      toast.classList.add('translate-y-0', 'opacity-100');

      setTimeout(() => {
        toast.classList.add('translate-y-24', 'opacity-0', 'pointer-events-none');
        toast.classList.remove('translate-y-0', 'opacity-100');
      }, 3500);
    }

    // Manual Sync Button Microinteraction
    const syncBtn = document.getElementById('btnManualSync');
    const syncIcon = document.getElementById('syncIcon');
    syncBtn.addEventListener('click', () => {
      syncIcon.classList.add('rotate-[720deg]');
      syncBtn.disabled = true;
      syncBtn.classList.add('opacity-75');

      setTimeout(() => {
        syncIcon.classList.remove('rotate-[720deg]');
        syncBtn.disabled = false;
        syncBtn.classList.remove('opacity-75');
        showToast('Sinkronisasi selesai: 6 status transaksi terverifikasi mutakhir.');
      }, 1200);
    });

    // Export Log Button
    document.getElementById('btnExportLog').addEventListener('click', () => {
      showToast('Mengunduh file Excel Log Transaksi Midtrans...', 'download');
    });

    // WhatsApp Dispatch Action Triggers
    window.triggerWhatsApp = function(name, phone, trx, ord, amount, type) {
      showToast(`Mengirim ulang invoice ${trx} ke WhatsApp ${name} (${phone})...`, 'send');
      setTimeout(() => {
        showToast(`Nota resmi ${ord} berhasil terkirim ke WhatsApp ${phone}!`, 'done_all');
      }, 1000);
    };

    window.triggerWhatsAppReminder = function(name, phone, ord, amount) {
      showToast(`Mengirim pesan tagihan & instruksi VA ke WhatsApp ${name}...`, 'schedule_send');
      setTimeout(() => {
        showToast(`Pengingat pembayaran ${ord} (${amount}) sukses dikirim via WhatsApp.`, 'done_all');
      }, 1000);
    };

    // Modal Details Logic
    const payloadModal = document.getElementById('payloadModal');
    let currentPayloadText = '';

    window.openPayloadModal = function(trx, ord, name, amount, channel, status, time, phone) {
      document.getElementById('modalTrxTitle').textContent = trx;
      document.getElementById('modalOrderSubtitle').textContent = `Ref Order: ${ord} • Pelanggan: ${name}`;
      document.getElementById('modalAmount').textContent = amount;
      document.getElementById('modalChannel').textContent = channel;
      document.getElementById('modalTime').textContent = time;
      document.getElementById('modalClientPhone').textContent = `WhatsApp: ${phone}`;

      const badge = document.getElementById('modalStatusBadge');
      badge.textContent = status;
      if (status === 'Settlement') {
        badge.className = 'px-2 py-0.5 rounded-full font-label-sm text-label-sm font-semibold bg-[#EFF3EE] text-[#344837]';
      } else if (status === 'Pending') {
        badge.className = 'px-2 py-0.5 rounded-full font-label-sm text-label-sm font-semibold bg-[#EFF4F7] text-[#455765]';
      } else {
        badge.className = 'px-2 py-0.5 rounded-full font-label-sm text-label-sm font-semibold bg-error-container text-on-error-container';
      }

      // Generate realistic Midtrans Webhook JSON mock
      const mockJson = {
        transaction_time: time,
        transaction_status: status.toLowerCase(),
        transaction_id: "midtrans-" + trx.toLowerCase(),
        status_message: "midtrans payment notification",
        status_code: status === 'Settlement' ? "200" : (status === 'Pending' ? "201" : "407"),
        signature_key: "e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855",
        payment_type: channel.toLowerCase().replace(/ /g, '_'),
        order_id: ord,
        gross_amount: amount.replace(/[^0-9]/g, '') + ".00",
        fraud_status: "accept",
        currency: "IDR",
        settlement_time: status === 'Settlement' ? time : null,
        cattaleya_meta: {
          customer_name: name,
          customer_whatsapp: phone,
          studio_branch: "Cattaleya Atelier Utama",
          notification_gateway: "WhatsApp Official Live"
        }
      };

      currentPayloadText = JSON.stringify(mockJson, null, 2);
      document.getElementById('jsonPayloadArea').textContent = currentPayloadText;

      const waBtn = document.getElementById('modalWaActionBtn');
      waBtn.onclick = function() {
        triggerWhatsApp(name, phone, trx, ord, amount, status);
      };

      payloadModal.classList.remove('hidden');
      payloadModal.classList.add('flex');
    };

    window.closePayloadModal = function() {
      payloadModal.classList.add('hidden');
      payloadModal.classList.remove('flex');
    };

    window.copyPayload = function() {
      if (currentPayloadText) {
        navigator.clipboard.writeText(currentPayloadText).then(() => {
          showToast('Payload JSON berhasil disalin ke clipboard!', 'content_copy');
        }).catch(() => {
          showToast('Gagal menyalin, periksa izin browser.', 'error');
        });
      }
    };

    // Close modal on click outside content
    payloadModal.addEventListener('click', (e) => {
      if (e.target === payloadModal) {
        closePayloadModal();
      }
    });
</script>
@endpush