@extends('layouts.owner')

@section('title', 'Dossier Pesanan #ORD-2025-090 — Cattaleya Atelier Owner')

@section('content')
<div class="flex flex-col w-full">
<!-- Top Navigation & Dossier Action Header -->
<div class="flex flex-col lg:flex-row lg:items-center justify-between gap-space-md mb-space-xl">
<div class="flex flex-col gap-space-xs">
<div class="flex items-center gap-space-sm mb-space-xs">
<a class="group inline-flex items-center gap-space-xs px-space-md py-space-xs rounded-full bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all duration-200" data-path="pesanan" href="{{ request()->routeIs('preview.*') ? route('preview.owner-pesanan') : route('owner.pesanan') }}">
<span class="material-symbols-outlined text-base transition-transform group-hover:-translate-x-0.5">arrow_back</span>
<span class="font-label-md text-label-md">Kembali ke Daftar Pesanan</span>
</a>
<span class="inline-flex items-center gap-1.5 px-space-sm py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm tracking-wider uppercase">
<span class="material-symbols-outlined text-xs text-primary">visibility</span>
          Owner Inspection View
        </span>
</div>
<div class="flex flex-wrap items-baseline gap-x-space-md gap-y-1">
<h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">
          Dossier Pesanan <span class="font-metric-display text-metric-display text-primary">#ORD-2025-090</span>
</h1>
<span class="font-body-md text-body-md text-outline">
          Tercatat pada 04 Oktober 2025 &bull; Pukul 11:20 WIB
        </span>
</div>
</div>
<!-- Read-Only Action: Cetak / Export Only -->
<div class="flex items-center gap-space-sm self-start lg:self-center">
<button class="inline-flex items-center gap-space-xs px-space-lg py-space-sm rounded-xl bg-primary text-on-primary hover:bg-primary-container shadow-sm transition-all duration-150" onclick="window.print()">
<span class="material-symbols-outlined text-lg">print</span>
<span class="font-label-md text-label-md">Cetak Rincian Pesanan</span>
</button>
<div class="w-10 h-10 rounded-xl bg-surface-container-low flex items-center justify-center text-outline hover:text-on-surface transition-colors" title="Arsip Terenkripsi">
<span class="material-symbols-outlined text-xl">verified</span>
</div>
</div>
</div>
<!-- Primary Status Ribbon -->
<div class="relative overflow-hidden rounded-xl bg-gradient-to-r from-surface-container-low via-surface-container to-surface-container-low p-space-lg shadow-sm mb-space-xl">
<div class="flex flex-col md:flex-row md:items-center justify-between gap-space-md relative z-10">
<div class="flex items-center gap-space-md">
<div class="w-12 h-12 rounded-xl bg-primary-fixed flex items-center justify-center text-on-primary-fixed shadow-sm">
<span class="material-symbols-outlined text-2xl">auto_stories</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Status Operasional Berjalan</span>
<div class="flex items-center gap-space-sm mt-0.5">
<span class="inline-flex items-center gap-1.5 px-space-md py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-md text-label-md">
<span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
              Sedang Disewa (Active Rental)
            </span>
<span class="inline-flex items-center gap-1.5 px-space-md py-1 rounded-full bg-surface-container-lowest text-on-surface-variant font-label-md text-label-md shadow-sm">
<span class="material-symbols-outlined text-sm text-primary">account_balance_wallet</span>
              DP Terbayar 50%
            </span>
</div>
</div>
</div>
<!-- Quick Inspection Milestone Tracker -->
<div class="hidden xl:flex items-center gap-space-lg">
<div class="flex flex-col items-end">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Jadwal Pengembalian</span>
<span class="font-title-md text-title-md text-on-surface mt-0.5">Jumat, 24 Okt 2025</span>
<span class="font-label-sm text-label-sm text-primary">Sisa 3 Hari Masa Sewa</span>
</div>
<div class="h-10 w-[1px] bg-outline-variant/50"></div>
<div class="flex flex-col items-end">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Kurasi Koleksi</span>
<span class="font-title-md text-title-md text-on-surface mt-0.5">10 Set Vitrine Akrilik</span>
<span class="font-label-sm text-label-sm text-outline">Orkid Cattaleya Signature</span>
</div>
</div>
</div>
<div class="absolute -right-12 -bottom-12 w-48 h-48 rounded-full bg-primary/5 blur-2xl pointer-events-none"></div>
</div>
<!-- Main Bento Grid Dossier Content -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter mb-space-xl">
<!-- LEFT COLUMN (7 COLS): Customer Details & Order Composition -->
<div class="lg:col-span-7 flex flex-col gap-gutter">
<!-- CARD 1: INFORMASI PELANGGAN -->
<section class="rounded-xl bg-surface-container-lowest p-space-xl shadow-sm flex flex-col gap-space-lg">
<div class="flex items-center justify-between pb-space-sm border-b-0">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-primary text-xl">person_pin</span>
<h2 class="font-title-lg text-title-lg text-on-surface">Informasi Pelanggan</h2>
</div>
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Client Dossier</span>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-space-lg">
<div class="flex flex-col gap-1">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Nama Pemesan</span>
<span class="font-headline-md text-headline-md text-on-surface">Dinda Tri Permata</span>
<span class="font-label-md text-label-md text-secondary">Calon Mempelai Wanita</span>
</div>
<div class="flex flex-col gap-1">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Kontak WhatsApp</span>
<div class="flex items-center gap-space-xs mt-0.5">
<span class="font-title-md text-title-md text-on-surface">+62 812-9842-1102</span>
<span class="inline-flex items-center gap-0.5 px-space-xs py-0.5 rounded-full bg-surface-container-high text-on-secondary-container font-label-sm text-label-sm">
<span class="material-symbols-outlined text-xs text-primary">verified</span>
                Terverifikasi
              </span>
</div>
<span class="font-body-md text-body-md text-outline">Komunikasi resmi via Wedding Concierge</span>
</div>
</div>
<!-- Alamat Pengiriman/Pengambilan -->
<div class="flex flex-col gap-space-xs p-space-md rounded-xl bg-surface-container-low">
<div class="flex items-center gap-space-xs text-secondary">
<span class="material-symbols-outlined text-sm">location_on</span>
<span class="font-label-sm text-label-sm uppercase tracking-wider font-semibold">Alamat Pengiriman / Serah Terima</span>
</div>
<p class="font-body-lg text-body-lg text-on-surface">
            Jl. Cempaka Putih Raya No. 42, Cempaka Putih Timur, Jakarta Pusat, DKI Jakarta 10510
          </p>
<span class="font-label-sm text-label-sm text-outline">Titik drop-off tim kurir internal Cattaleya Wedding Fleet</span>
</div>
<!-- Catatan Khusus Pelanggan -->
<div class="flex flex-col gap-space-xs p-space-md rounded-xl bg-secondary-container/40">
<div class="flex items-center gap-space-xs text-on-secondary-container">
<span class="material-symbols-outlined text-sm">edit_note</span>
<span class="font-label-sm text-label-sm uppercase tracking-wider font-semibold">Catatan Khusus Pelanggan</span>
</div>
<blockquote class="font-headline-md italic text-headline-md text-on-secondary-container">
            Ã¢â‚¬Å“&ldquo;Penyewaan untuk akad nikah hari Sabtu pagi, kotak mohon pita warna Champagne Gold sesuai tema.&rdquo;Ã¢â‚¬Â
          </blockquote>
<div class="flex items-center gap-2 mt-1">
<span class="w-3 h-3 rounded-full bg-[#E5D3B3] shadow-inner inline-block"></span>
<span class="font-label-sm text-label-sm text-secondary font-medium">Palette: Champagne Gold Ribbon + Alabaster Preserved Orchid</span>
</div>
</div>
</section>
<!-- CARD 2: INFORMASI PESANAN & RINCIAN ITEM -->
<section class="rounded-xl bg-surface-container-lowest p-space-xl shadow-sm flex flex-col gap-space-lg">
<div class="flex items-center justify-between pb-space-sm">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-primary text-xl">inventory_2</span>
<h2 class="font-title-lg text-title-lg text-on-surface">Informasi &amp; Spesifikasi Pesanan</h2>
</div>
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-outline uppercase tracking-wider">
<span class="material-symbols-outlined text-xs">lock</span> Read-Only
          </span>
</div>
<!-- Schedule Matrix -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-sm p-space-md rounded-xl bg-surface-container-low">
<div class="flex flex-col gap-1 p-space-sm bg-surface-container-lowest rounded-lg shadow-sm">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-outline flex items-center gap-1">
<span class="material-symbols-outlined text-xs text-primary">event_upcoming</span>
              Mulai Sewa
            </span>
<span class="font-title-md text-title-md text-on-surface font-semibold">20 Okt 2025</span>
<span class="font-label-sm text-label-sm text-secondary">Pukul 10:00 WIB</span>
</div>
<div class="flex flex-col gap-1 p-space-sm bg-secondary-container/50 rounded-lg shadow-sm">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-on-secondary-container flex items-center gap-1">
<span class="material-symbols-outlined text-xs text-primary">favorite</span>
              Hari H Acara
            </span>
<span class="font-title-md text-title-md text-on-secondary-container font-semibold">22 Okt 2025</span>
<span class="font-label-sm text-label-sm text-on-secondary-variant">Akad &amp; Resepsi</span>
</div>
<div class="flex flex-col gap-1 p-space-sm bg-surface-container-lowest rounded-lg shadow-sm">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-outline flex items-center gap-1">
<span class="material-symbols-outlined text-xs text-error">assignment_return</span>
              Batas Kembali
            </span>
<span class="font-title-md text-title-md text-on-surface font-semibold">24 Okt 2025</span>
<span class="font-label-sm text-label-sm text-outline">Maks. 18:00 WIB</span>
</div>
</div>
<!-- Detail Item Sewa Table / Ledger -->
<div class="flex flex-col gap-space-sm">
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Rincian Paket &amp; Vitrine Terdaftar</span>
<span class="font-label-sm text-label-sm text-secondary">Total: 10 Item Seserahan</span>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead>
<tr class="bg-surface-container-low text-outline font-label-sm text-label-sm uppercase tracking-wider">
<th class="py-space-sm px-space-md rounded-l-lg">Deskripsi Item &amp; Komposisi</th>
<th class="py-space-sm px-space-md text-center">Jml</th>
<th class="py-space-sm px-space-md text-right">Tarif Sewa</th>
<th class="py-space-sm px-space-md text-right rounded-r-lg">Subtotal</th>
</tr>
</thead>
<tbody class="divide-y-0 text-on-surface">
<!-- Item 1 -->
<tr class="hover:bg-surface-container-low/40 transition-colors">
<td class="py-space-md px-space-md">
<div class="flex items-start gap-space-sm">
<div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-primary shrink-0 mt-0.5">
<span class="material-symbols-outlined text-base">crop_square</span>
</div>
<div class="flex flex-col">
<span class="font-title-md text-title-md text-on-surface font-medium">Kotak Mika Akrilik Premium (L)</span>
<span class="font-body-md text-body-md text-outline">Alas Kayu Jati Ukir &bull; Perhiasan, Skincare, Tas Mewah, Sepatu Pengantin</span>
</div>
</div>
</td>
<td class="py-space-md px-space-md text-center font-title-md text-title-md text-on-surface">4</td>
<td class="py-space-md px-space-md text-right font-body-md text-body-md text-outline">Rp 180.000</td>
<td class="py-space-md px-space-md text-right font-title-md text-title-md text-on-surface font-semibold">Rp 720.000</td>
</tr>
<!-- Item 2 -->
<tr class="hover:bg-surface-container-low/40 transition-colors">
<td class="py-space-md px-space-md">
<div class="flex items-start gap-space-sm">
<div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-primary shrink-0 mt-0.5">
<span class="material-symbols-outlined text-base">crop_free</span>
</div>
<div class="flex flex-col">
<span class="font-title-md text-title-md text-on-surface font-medium">Kotak Mika Akrilik Premium (M)</span>
<span class="font-body-md text-body-md text-outline">Alas Kayu Jati Ukir &bull; Alat Ibadah, Kain Songket Tenun, Perlengkapan Pria</span>
</div>
</div>
</td>
<td class="py-space-md px-space-md text-center font-title-md text-title-md text-on-surface">4</td>
<td class="py-space-md px-space-md text-right font-body-md text-body-md text-outline">Rp 150.000</td>
<td class="py-space-md px-space-md text-right font-title-md text-title-md text-on-surface font-semibold">Rp 600.000</td>
</tr>
<!-- Item 3 -->
<tr class="hover:bg-surface-container-low/40 transition-colors">
<td class="py-space-md px-space-md">
<div class="flex items-start gap-space-sm">
<div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-primary shrink-0 mt-0.5">
<span class="material-symbols-outlined text-base">bed</span>
</div>
<div class="flex flex-col">
<span class="font-title-md text-title-md text-on-surface font-medium">Kotak Seserahan Spesial Bedcover</span>
<span class="font-body-md text-body-md text-outline">Dimensi Jumbo Extra Clear Vitrine dengan penguat rotan halus</span>
</div>
</div>
</td>
<td class="py-space-md px-space-md text-center font-title-md text-title-md text-on-surface">2</td>
<td class="py-space-md px-space-md text-right font-body-md text-body-md text-outline">Rp 140.000</td>
<td class="py-space-md px-space-md text-right font-title-md text-title-md text-on-surface font-semibold">Rp 280.000</td>
</tr>
<!-- Item 4 (Include) -->
<tr class="hover:bg-surface-container-low/40 transition-colors bg-surface-container-low/20">
<td class="py-space-md px-space-md">
<div class="flex items-start gap-space-sm">
<div class="w-8 h-8 rounded-lg bg-secondary-container flex items-center justify-center text-primary shrink-0 mt-0.5">
<span class="material-symbols-outlined text-base">local_florist</span>
</div>
<div class="flex flex-col">
<span class="font-title-md text-title-md text-on-surface font-medium">Dekorasi Bunga Orkid Cattaleya &amp; Pita Satin</span>
<span class="font-body-md text-body-md text-outline">Kombinasi Preserved Orchid &amp; Double Silk Satin Ribbon (Champagne Gold)</span>
</div>
</div>
</td>
<td class="py-space-md px-space-md text-center font-title-md text-title-md text-on-surface">10 Set</td>
<td class="py-space-md px-space-md text-right font-body-md text-body-md text-outline">-</td>
<td class="py-space-md px-space-md text-right font-title-md text-title-md text-primary font-semibold">Include Paket</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Artisanal Craft Visual Preview Mockups -->
<div class="flex flex-col gap-space-xs pt-space-xs">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Dokumentasi Finishing Sebelum Serah Terima</span>
<div class="grid grid-cols-2 sm:grid-cols-4 gap-space-sm">
<div class="relative rounded-lg overflow-hidden group shadow-sm">
<img class="w-full h-24 object-cover group-hover:scale-105 transition-transform duration-300" data-alt="Close up photography of Indonesian wedding dowry seserahan tray with polished teak wood base, crystal clear acrylic glass vitrine, champagne gold ribbon, and preserved cream phalaenopsis orchids on soft warm silk fabric" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCWFNRdG4F_HbrO8GlgRnoI4geZ3lay11-MVEr_Stk0s63oCOJFhVa6a_ttYZBlU4LwenZavEAOVED6ZhRCz7tHruqTsLxFp-FLv9yfeq31bnmzsnJJKnR3-6gsnWpNZufq9Hy7UiLCJgJ-t410RJCaZrOUo8Yq-RudAhxdSQUJUy16fOxhb6QqAjPNd56QABxsq6JNJlfg51VSYBNiUnPEi3I6U8F1kYUUCxn8mGPFOQFddAqgKsmn">
<span class="absolute bottom-1 left-1 px-1.5 py-0.5 rounded bg-surface/90 text-[10px] font-medium text-on-surface">Tray L - Perhiasan</span>
</div>
<div class="relative rounded-lg overflow-hidden group shadow-sm">
<img class="w-full h-24 object-cover group-hover:scale-105 transition-transform duration-300" data-alt="High angle shot of bespoke wedding gift arrangement in modern acrylic vitrine displaying bridal skincare cosmetics on champagne satin ribbon surrounded by delicate white cattleya flowers and warm gold accents" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD4kHrsJh5ODQP6rHjBb98RSqI7J6Qtv-Qc75To3EVHuRHjWCaI32W49Q6ndde-rxtLg-G_dIbGMX2qhqmFPKczo7AfvnViEi5QDR1YAHunmHzaMpdydz8x2nS-YznXjVv5cq5f2RxmcaLVRn0txfipw_cFIs5O6lxVykn7ZjcmPVoZdLylGILAevNKj1oOcOg3OANvqoi3YgPixoklWjA3lJWMk3K0AcSh4fxWDb-mA_V9dE2t9EVH">
<span class="absolute bottom-1 left-1 px-1.5 py-0.5 rounded bg-surface/90 text-[10px] font-medium text-on-surface">Tray L - Skincare</span>
</div>
<div class="relative rounded-lg overflow-hidden group shadow-sm">
<img class="w-full h-24 object-cover group-hover:scale-105 transition-transform duration-300" data-alt="Artisanal Indonesian traditional songket fabric folded elegantly inside acrylic dowry seserahan box with hand-carved wood trim and subtle warm bronze light reflections" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA2CiGDju_a3kfbStWYslOQQpRZ519bqUm-DqEQuHZ5df7_ReIBTfoWS5DtO9AT08AcGOkq6KZkq0wxM9j4P-P38aOr4wsP7OeYngfcpXxlFUoERgHcMM2i_YGSTDM2oOZGetiEin54v0MoVOTSDctF32cA4A-ircxeCQg9aEKxcdnlkpuGbKB-nFWAo5I8e2C4F1yqzi1VmfepXHhwmu0SieUrSejDdZucnmB1qaQ6Rp_-AWiu6LqQ">
<span class="absolute bottom-1 left-1 px-1.5 py-0.5 rounded bg-surface/90 text-[10px] font-medium text-on-surface">Tray M - Songket</span>
</div>
<div class="relative rounded-lg overflow-hidden group shadow-sm">
<img class="w-full h-24 object-cover group-hover:scale-105 transition-transform duration-300" data-alt="Bespoke luxury bedcover seserahan arrangement packed inside oversized transparent vitrine tied with lustrous champagne gold silk ribbon in an upscale Jakarta wedding salon" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgx8akOrE1eRNhc1yea8hkDBBjzDmk8L7HWxVyclc_OhRXZMj2GEAfprTg9YARInYe3cMX4v2ftGi9Pel5B_6xnNri62chtKHHYyMVGn-ReM4n7xUplDf7YQ5PeTv3y6bbA3GaoysUu02NsZCEdFpyR-va51sejvYIDg482AlcZMzODKyEIVM_koFS17HgWcBAjD2dUpBTtcczrTNaLs2AlSXw8_XzTNHpNgxRYb_3tp4tqVu4IBal">
<span class="absolute bottom-1 left-1 px-1.5 py-0.5 rounded bg-surface/90 text-[10px] font-medium text-on-surface">Tray Jumbo - Bedcover</span>
</div>
</div>
</div>
</section>
</div>
<!-- RIGHT COLUMN (5 COLS): Payment Dossier & Event Timeline Tracker -->
<div class="lg:col-span-5 flex flex-col gap-gutter">
<!-- CARD 3: INFORMASI PEMBAYARAN -->
<section class="rounded-xl bg-surface-container-lowest p-space-xl shadow-sm flex flex-col gap-space-lg">
<div class="flex items-center justify-between pb-space-sm">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-primary text-xl">payments</span>
<h2 class="font-title-lg text-title-lg text-on-surface">Audit Keuangan &amp; Pembayaran</h2>
</div>
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Settlement Ledger</span>
</div>
<!-- Financial Summary Banner -->
<div class="p-space-lg rounded-xl bg-surface-container-low flex flex-col gap-space-md">
<div class="flex justify-between items-baseline">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Total Tagihan Pesanan</span>
<span class="font-metric-display text-metric-display text-on-surface">Rp 1.600.000</span>
</div>
<!-- Payment Meter Gauge -->
<div class="flex flex-col gap-1.5">
<div class="flex justify-between text-label-sm font-label-sm">
<span class="text-on-surface-variant">Realisasi Penerimaan: 50%</span>
<span class="text-primary font-semibold">Rp 800.000 / Rp 1.600.000</span>
</div>
<div class="w-full h-2.5 rounded-full bg-surface-container-highest overflow-hidden">
<div class="h-full bg-primary rounded-full transition-all duration-500" style="width: 50%"></div>
</div>
</div>
</div>
<!-- Breakdown Details -->
<div class="flex flex-col gap-space-sm divide-y-0 text-body-md font-body-md">
<div class="flex items-center justify-between py-1">
<span class="text-on-surface-variant">Skema Pembayaran</span>
<span class="font-title-md text-title-md text-on-surface">DP 50% &amp; Pelunasan H-2</span>
</div>
<div class="flex items-center justify-between py-1">
<span class="text-on-surface-variant">Nominal Uang Muka (DP)</span>
<div class="flex items-center gap-space-xs">
<span class="font-title-md text-title-md text-primary font-bold">Rp 800.000</span>
<span class="material-symbols-outlined text-sm text-primary">check_circle</span>
</div>
</div>
<div class="flex items-center justify-between py-1">
<span class="text-on-surface-variant">Status Settlement DP</span>
<span class="inline-flex items-center gap-1 px-space-sm py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
              DP Terbayar (50%)
            </span>
</div>
<div class="flex items-center justify-between py-1">
<span class="text-on-surface-variant">Sisa Pembayaran / Balance</span>
<span class="font-title-md text-title-md text-error font-semibold">Rp 800.000</span>
</div>
<div class="flex items-center justify-between py-1">
<span class="text-on-surface-variant">Jatuh Tempo Pelunasan</span>
<span class="font-label-md text-label-md text-outline">Saat Pengambilan (H-2 Acara)</span>
</div>
<div class="flex items-center justify-between py-1">
<span class="text-on-surface-variant">Kode Referensi Transaksi</span>
<span class="font-mono text-xs px-2 py-1 rounded bg-surface-container text-on-surface font-semibold">TRX-BCA-883921</span>
</div>
<div class="flex items-center justify-between py-1">
<span class="text-on-surface-variant">Kanal Pembayaran</span>
<span class="font-label-md text-label-md text-on-surface">Bank BCA Virtual Account (Auto Check)</span>
</div>
</div>
<div class="flex items-center gap-space-xs p-space-sm rounded-lg bg-surface-container text-outline text-label-sm font-label-sm">
<span class="material-symbols-outlined text-sm">shield</span>
<span>Transaksi teraudit otomatis oleh Payment Gateway Cattaleya Treasury.</span>
</div>
</section>
<!-- CARD 4: TIMELINE & RIWAYAT PERUBAHAN STATUS -->
<section class="rounded-xl bg-surface-container-lowest p-space-xl shadow-sm flex flex-col gap-space-lg">
<div class="flex items-center justify-between pb-space-sm">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-primary text-xl">timeline</span>
<h2 class="font-title-lg text-title-lg text-on-surface">Riwayat &amp; Log Status Pesanan</h2>
</div>
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Live Tracking</span>
</div>
<!-- Vertical Milestones Tracker -->
<div class="relative flex flex-col gap-space-lg pl-6 before:absolute before:left-[11px] before:top-2 before:bottom-2 before:w-[2px] before:bg-surface-variant">
<!-- Node 1: Latest (Active) -->
<div class="relative flex flex-col gap-1">
<div class="absolute -left-[30px] top-1 w-4 h-4 rounded-full bg-primary ring-4 ring-secondary-container"></div>
<div class="flex items-baseline justify-between">
<span class="font-title-md text-title-md text-primary font-bold">Sedang Disewa</span>
<span class="font-label-sm text-label-sm text-outline">20 Okt 2025 &bull; 10:15 WIB</span>
</div>
<p class="font-body-md text-body-md text-on-surface">
              Kotak diserahterimakan langsung kepada perwakilan pengantin di Galeri Utama Cattaleya. Kondisi 10 mika akrilik terverifikasi prima &amp; mulus.
            </p>
<span class="font-label-sm text-label-sm text-outline">PIC: Staf Operasional - Rian H.</span>
</div>
<!-- Node 2: Completed -->
<div class="relative flex flex-col gap-1">
<div class="absolute -left-[30px] top-1 w-4 h-4 rounded-full bg-secondary"></div>
<div class="flex items-baseline justify-between">
<span class="font-title-md text-title-md text-on-surface font-semibold">Siap Diambil di Galeri Cattaleya</span>
<span class="font-label-sm text-label-sm text-outline">18 Okt 2025 &bull; 14:00 WIB</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant">
              Finishing hias pita Champagne Gold selesai. Kotak telah diproteksi bubble wrap &amp; ditempatkan pada Rak VIP Dispatch #04.
            </p>
</div>
<!-- Node 3: Completed -->
<div class="relative flex flex-col gap-1">
<div class="absolute -left-[30px] top-1 w-4 h-4 rounded-full bg-secondary"></div>
<div class="flex items-baseline justify-between">
<span class="font-title-md text-title-md text-on-surface font-semibold">Dalam Persiapan / Dekorasi Florist</span>
<span class="font-label-sm text-label-sm text-outline">12 Okt 2025 &bull; 16:30 WIB</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant">
              Master Florist menyusun preserved floral orchid sesuai palet pesanan pasangan Dinda &amp; Rian.
            </p>
</div>
<!-- Node 4: Initial Order Received -->
<div class="relative flex flex-col gap-1">
<div class="absolute -left-[30px] top-1 w-4 h-4 rounded-full bg-outline-variant"></div>
<div class="flex items-baseline justify-between">
<span class="font-title-md text-title-md text-on-surface font-semibold">Pesanan Dikonfirmasi</span>
<span class="font-label-sm text-label-sm text-outline">04 Okt 2025 &bull; 11:20 WIB</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant">
              Down Payment (DP) 50% sebesar Rp 800.000 diterima otomatis sistem via BCA VA. Slot jadwal sewa dikunci.
            </p>
</div>
</div>
<!-- Read-Only Policy Notice / Banner -->
<div class="mt-space-sm p-space-md rounded-xl bg-surface-container-high/60 flex items-start gap-space-sm">
<span class="material-symbols-outlined text-primary text-lg mt-0.5">policy</span>
<div class="flex flex-col">
<span class="font-label-md text-label-md font-bold text-on-surface">Catatan Kebijakan Portal Pemilik</span>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
              Hak akses akun Owner diformulasikan khusus untuk audit &amp; pemantauan eksekutif. Seluruh perubahan inventaris, check-in pengembalian kotak, serta pencatatan pelunasan ditangani langsung oleh Admin Operasional.
            </p>
</div>
</div>
</section>
</div>
</div>
<!-- Bottom Executive Summary Bar -->
<div class="rounded-xl bg-surface-container-low p-space-lg flex flex-col sm:flex-row items-center justify-between gap-space-md shadow-sm">
<div class="flex items-center gap-space-sm text-outline font-label-md text-label-md">
<span class="material-symbols-outlined text-primary">spa</span>
<span>Cattaleya Seserahan &amp; Mahar Studio &bull; Jakarta Pusat &bull; Sistem Monitoring Pesanan v3.4</span>
</div>
<div class="flex items-center gap-space-md">
<a class="font-title-md text-title-md text-primary hover:underline inline-flex items-center gap-1" data-path="pesanan" href="{{ request()->routeIs('preview.*') ? route('preview.owner-pesanan') : route('owner.pesanan') }}">
<span>&larr; Kembali ke Daftar Pesanan</span>
</a>
</div>
</div>
</div>
@endsection