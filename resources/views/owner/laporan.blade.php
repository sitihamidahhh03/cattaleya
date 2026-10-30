@extends('layouts.owner')

@section('title', 'Laporan Pemesanan & Pembayaran — Cattaleya Atelier Owner')

@push('styles')
<style>
  @media print {
    aside, header, #exportDropdownBtn, button, #toastBox {
      display: none !important;
    }
    .pl-72 {
      padding-left: 0 !important;
    }
    main {
      padding: 0 !important;
      margin: 0 !important;
      background: white !important;
    }
    body {
      background: white !important;
      color: black !important;
    }
  }
</style>
@endpush

@section('content')
<div class="flex flex-col w-full gap-space-lg">
  <!-- Top Ornamental Header & Owner Document Actions -->
  <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-space-md pb-space-xs">
    <div class="flex flex-col gap-space-xs max-w-2xl">
      <div class="inline-flex items-center gap-space-xs">
        <span class="text-primary font-headline-md leading-none">❖</span>
        <span class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-semibold">Dokumen Eksekutif Bisnis</span>
        <span class="text-outline-variant">•</span>
        <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline" id="activePeriodLabel">Bulan Oktober 2025</span>
      </div>
      <h1 class="font-display-lg text-display-lg text-on-surface tracking-tight leading-tight">
        Laporan Pemesanan &amp; Pembayaran
      </h1>
      <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
        Rekapitulasi berkala pendapatan usaha mahar dan sewa kotak seserahan Cattaleya. Hak akses mutlak pemilik bisnis (read-only).
      </p>
    </div>

    <!-- Quick Owner Report Triggers (Print Preview / Export) -->
    <div class="flex items-center gap-space-sm shrink-0 self-start lg:self-center">
      <!-- Print Report Button -->
      <button class="inline-flex items-center gap-space-sm px-space-md py-space-sm bg-surface-container-lowest hover:bg-surface-container-high text-primary font-title-md text-title-md rounded-xl shadow-sm hover:shadow-md transition-all duration-200" onclick="window.print()" title="Buka Pratinjau Cetak Lembar Eksekutif" type="button">
        <span class="material-symbols-outlined text-xl text-primary">print</span>
        <span>Cetak Laporan</span>
      </button>

      <!-- Export Dropdown / Action -->
      <div class="relative inline-block">
        <button class="inline-flex items-center gap-space-sm px-space-lg py-space-sm bg-primary hover:bg-primary-container text-on-primary font-title-md text-title-md rounded-xl shadow-md hover:shadow-xl transition-all duration-200" id="exportDropdownBtn" title="Ekspor Dokumen Laporan" type="button">
          <span class="material-symbols-outlined text-xl">file_download</span>
          <span>Export Laporan</span>
          <span class="material-symbols-outlined text-base">expand_more</span>
        </button>

        <!-- Dropdown Menu -->
        <div class="hidden absolute right-0 mt-space-xs w-56 bg-surface-container-lowest rounded-xl shadow-xl z-30 p-space-xs flex flex-col gap-1 border border-surface-variant/40" id="exportMenu">
          <button class="w-full text-left flex items-center gap-space-sm px-space-md py-space-sm text-on-surface hover:bg-surface-container-high rounded-lg text-body-md font-body-md transition-colors" onclick="triggerToast('Mengunduh Laporan Format PDF (A4 Ledger)...')" type="button">
            <span class="material-symbols-outlined text-primary text-lg">picture_as_pdf</span>
            <div class="flex flex-col">
              <span class="font-title-md text-title-md">Laporan Resmi (PDF)</span>
              <span class="font-label-sm text-label-sm text-outline">Format Cetak A4 Berkop</span>
            </div>
          </button>
          <button class="w-full text-left flex items-center gap-space-sm px-space-md py-space-sm text-on-surface hover:bg-surface-container-high rounded-lg text-body-md font-body-md transition-colors" onclick="triggerToast('Menyiapkan Berkas Excel XLSX Spreadsheet...')" type="button">
            <span class="material-symbols-outlined text-primary text-lg">table_chart</span>
            <div class="flex flex-col">
              <span class="font-title-md text-title-md">Lembar Kerja (Excel)</span>
              <span class="font-label-sm text-label-sm text-outline">Format XLSX Tabular</span>
            </div>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Toast Notification element -->
  <div class="fixed bottom-6 right-6 z-50 transform translate-y-16 opacity-0 transition-all duration-300 pointer-events-none" id="toastBox">
    <div class="bg-inverse-surface text-inverse-on-surface px-space-lg py-space-sm rounded-xl shadow-xl flex items-center gap-space-sm">
      <span class="material-symbols-outlined text-primary-fixed">info</span>
      <span class="font-body-md text-body-md" id="toastMsg"></span>
    </div>
  </div>

  <!-- Filter & Period Configuration Panel -->
  <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-space-sm">
      <div class="flex items-center gap-space-sm">
        <span class="material-symbols-outlined text-primary text-xl">tune</span>
        <span class="font-title-lg text-title-lg text-on-surface">Filter Rentang Waktu &amp; Periode</span>
      </div>
      <div class="flex items-center gap-space-xs text-outline font-label-sm text-label-sm">
        <span class="material-symbols-outlined text-sm">lock</span>
        <span>Akses Baca Rekapitulasi Studio Owner</span>
      </div>
    </div>

    <!-- Filter Controls Flow -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-md items-end">
      <!-- Preset Buttons (5 cols) -->
      <div class="lg:col-span-5 flex flex-col gap-space-xs">
        <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Pilihan Periode Cepat</span>
        <div class="flex flex-wrap gap-space-xs">
          <button class="period-chip px-space-md py-space-xs rounded-full font-label-md text-label-md bg-secondary-container text-on-secondary-container font-semibold transition-all" data-period="Bulan Ini" data-start="2025-10-01" data-end="2025-10-31" type="button">
            Bulan Ini
          </button>
          <button class="period-chip px-space-md py-space-xs rounded-full font-label-md text-label-md bg-surface-container-high text-on-surface-variant hover:text-on-surface transition-all" data-period="Bulan Lalu" data-start="2025-09-01" data-end="2025-09-30" type="button">
            Bulan Lalu
          </button>
          <button class="period-chip px-space-md py-space-xs rounded-full font-label-md text-label-md bg-surface-container-high text-on-surface-variant hover:text-on-surface transition-all" data-period="Kuartal Ini" data-start="2025-07-01" data-end="2025-09-30" type="button">
            Kuartal Ini
          </button>
          <button class="period-chip px-space-md py-space-xs rounded-full font-label-md text-label-md bg-surface-container-high text-on-surface-variant hover:text-on-surface transition-all" data-period="Tahun Berjalan 2025" data-start="2025-01-01" data-end="2025-12-31" type="button">
            Tahun Berjalan 2025
          </button>
        </div>
      </div>

      <!-- Date Range (5 cols) -->
      <div class="lg:col-span-5 grid grid-cols-1 sm:grid-cols-2 gap-space-sm">
        <div class="flex flex-col gap-space-xs">
          <label class="font-label-sm text-label-sm uppercase tracking-wider text-outline flex items-center gap-1" for="startDate">
            <span class="material-symbols-outlined text-xs">calendar_month</span>
            <span>Tanggal Mulai</span>
          </label>
          <div class="relative bg-surface-container-low rounded-xl px-space-md py-space-sm flex items-center justify-between">
            <input class="w-full bg-transparent font-title-md text-title-md text-on-surface focus:outline-none cursor-pointer" id="startDate" type="date" value="2025-10-01">
          </div>
        </div>
        <div class="flex flex-col gap-space-xs">
          <label class="font-label-sm text-label-sm uppercase tracking-wider text-outline flex items-center gap-1" for="endDate">
            <span class="material-symbols-outlined text-xs">event_available</span>
            <span>Tanggal Selesai</span>
          </label>
          <div class="relative bg-surface-container-low rounded-xl px-space-md py-space-sm flex items-center justify-between">
            <input class="w-full bg-transparent font-title-md text-title-md text-on-surface focus:outline-none cursor-pointer" id="endDate" type="date" value="2025-10-31">
          </div>
        </div>
      </div>

      <!-- Action Button (2 cols) -->
      <div class="lg:col-span-2">
        <button class="w-full h-11 inline-flex items-center justify-center gap-space-xs px-space-md bg-secondary text-on-secondary hover:bg-on-secondary-fixed-variant rounded-xl font-title-md text-title-md shadow-sm hover:shadow transition-all" id="applyFilterBtn" type="button">
          <span class="material-symbols-outlined text-lg">filter_list</span>
          <span>Terapkan Filter</span>
        </button>
      </div>
    </div>
  </div>

  <!-- Section Title: Key Metrics -->
  <div class="flex items-center justify-between pt-space-xs">
    <div class="flex items-center gap-space-sm">
      <div class="w-1.5 h-4 bg-primary rounded-full"></div>
      <h2 class="font-title-lg text-title-lg text-on-surface">Akumulasi Kinerja &amp; Kas Periode Berjalan</h2>
    </div>
    <span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Status: Final Audited</span>
  </div>

  <!-- Bento Grid of 8 Aggregated KPI Metrics -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-md">
    <!-- 1. Total Pesanan -->
    <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col justify-between transition-transform duration-200 hover:-translate-y-0.5">
      <div class="flex items-start justify-between">
        <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline font-semibold">Total Pesanan</span>
        <div class="w-8 h-8 rounded-full bg-secondary-container flex items-center justify-center text-primary">
          <span class="material-symbols-outlined text-lg">shopping_bag</span>
        </div>
      </div>
      <div class="mt-space-sm">
        <div class="font-metric-display text-metric-display text-on-surface leading-tight">184 <span class="font-title-md text-title-md font-normal text-on-surface-variant">Pesanan</span></div>
        <div class="flex items-center gap-1 mt-1 text-on-surface-variant font-label-md text-label-md">
          <span class="material-symbols-outlined text-xs text-primary">verified</span>
          <span>Semua pesanan akad &amp; resepsi</span>
        </div>
      </div>
    </div>

    <!-- 2. Total Pesanan Mahar -->
    <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col justify-between transition-transform duration-200 hover:-translate-y-0.5">
      <div class="flex items-start justify-between">
        <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline font-semibold">Total Pesanan Mahar</span>
        <div class="w-8 h-8 rounded-full bg-surface-container-high flex items-center justify-center text-primary">
          <span class="material-symbols-outlined text-lg">auto_awesome</span>
        </div>
      </div>
      <div class="mt-space-sm">
        <div class="font-metric-display text-metric-display text-on-surface leading-tight">112 <span class="font-title-md text-title-md font-normal text-on-surface-variant">Paket</span></div>
        <div class="flex items-center gap-1 mt-1 text-on-surface-variant font-label-md text-label-md">
          <span class="text-primary font-bold">60.9%</span>
          <span>dari total volume pesanan</span>
        </div>
      </div>
    </div>

    <!-- 3. Total Penyewaan Kotak -->
    <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col justify-between transition-transform duration-200 hover:-translate-y-0.5">
      <div class="flex items-start justify-between">
        <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline font-semibold">Total Sewa Kotak</span>
        <div class="w-8 h-8 rounded-full bg-surface-container-high flex items-center justify-center text-secondary">
          <span class="material-symbols-outlined text-lg">featured_seasonal_and_gifts</span>
        </div>
      </div>
      <div class="mt-space-sm">
        <div class="font-metric-display text-metric-display text-on-surface leading-tight">72 <span class="font-title-md text-title-md font-normal text-on-surface-variant">Set</span></div>
        <div class="flex items-center gap-1 mt-1 text-on-surface-variant font-label-md text-label-md">
          <span>Rerata 6 - 9 baki per set</span>
        </div>
      </div>
    </div>

    <!-- 4. Total Transaksi -->
    <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col justify-between transition-transform duration-200 hover:-translate-y-0.5">
      <div class="flex items-start justify-between">
        <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline font-semibold">Total Transaksi</span>
        <div class="w-8 h-8 rounded-full bg-primary-fixed flex items-center justify-center text-on-primary-fixed">
          <span class="material-symbols-outlined text-lg">receipt_long</span>
        </div>
      </div>
      <div class="mt-space-sm">
        <div class="font-metric-display text-metric-display text-on-surface leading-tight">216 <span class="font-title-md text-title-md font-normal text-on-surface-variant">Transaksi</span></div>
        <div class="flex items-center gap-1 mt-1 text-on-surface-variant font-label-md text-label-md">
          <span>Termasuk termin pembayaran</span>
        </div>
      </div>
    </div>

    <!-- 5. Total Pembayaran Masuk (Highlighted) -->
    <div class="relative overflow-hidden bg-primary text-on-primary rounded-xl p-space-md shadow-md flex flex-col justify-between">
      <div class="absolute -right-4 -top-4 w-24 h-24 rounded-full bg-primary-container/40 pointer-events-none"></div>
      <div class="flex items-start justify-between relative z-10">
        <span class="font-label-sm text-label-sm uppercase tracking-wider text-primary-fixed font-semibold">Total Pembayaran Masuk</span>
        <div class="w-8 h-8 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center">
          <span class="material-symbols-outlined text-lg">account_balance_wallet</span>
        </div>
      </div>
      <div class="mt-space-sm relative z-10">
        <div class="font-metric-display text-metric-display text-on-primary leading-tight">Rp 148.850.000</div>
        <div class="flex items-center gap-1 mt-1 text-primary-fixed font-label-md text-label-md">
          <span class="material-symbols-outlined text-xs">trending_up</span>
          <span>Akumulasi kas bersih terverifikasi</span>
        </div>
      </div>
    </div>

    <!-- 6. Total DP (Down Payment) -->
    <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col justify-between transition-transform duration-200 hover:-translate-y-0.5">
      <div class="flex items-start justify-between">
        <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline font-semibold">Total Uang Muka (DP)</span>
        <div class="w-8 h-8 rounded-full bg-surface-container-high flex items-center justify-center text-primary">
          <span class="material-symbols-outlined text-lg">savings</span>
        </div>
      </div>
      <div class="mt-space-sm">
        <div class="font-headline-lg text-headline-lg text-on-surface leading-tight font-semibold">Rp 42.600.000</div>
        <div class="flex items-center gap-1 mt-1 text-on-surface-variant font-label-md text-label-md">
          <span class="w-2 h-2 rounded-full bg-secondary"></span>
          <span>Komitmen termin awal 30%-50%</span>
        </div>
      </div>
    </div>

    <!-- 7. Total Pelunasan -->
    <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col justify-between transition-transform duration-200 hover:-translate-y-0.5">
      <div class="flex items-start justify-between">
        <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline font-semibold">Total Pelunasan</span>
        <div class="w-8 h-8 rounded-full bg-surface-container-high flex items-center justify-center text-primary">
          <span class="material-symbols-outlined text-lg">task_alt</span>
        </div>
      </div>
      <div class="mt-space-sm">
        <div class="font-headline-lg text-headline-lg text-on-surface leading-tight font-semibold">Rp 38.250.000</div>
        <div class="flex items-center gap-1 mt-1 text-on-surface-variant font-label-md text-label-md">
          <span class="w-2 h-2 rounded-full bg-outline"></span>
          <span>Pelunasan H-7 serah terima</span>
        </div>
      </div>
    </div>

    <!-- 8. Total Pembayaran Penuh -->
    <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col justify-between transition-transform duration-200 hover:-translate-y-0.5">
      <div class="flex items-start justify-between">
        <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline font-semibold">Total Bayar Penuh (100%)</span>
        <div class="w-8 h-8 rounded-full bg-secondary-container flex items-center justify-center text-secondary">
          <span class="material-symbols-outlined text-lg">price_check</span>
        </div>
      </div>
      <div class="mt-space-sm">
        <div class="font-headline-lg text-headline-lg text-on-surface leading-tight font-semibold">Rp 68.000.000</div>
        <div class="flex items-center gap-1 mt-1 text-on-surface-variant font-label-md text-label-md">
          <span class="w-2 h-2 rounded-full bg-primary"></span>
          <span>Transaksi lunas langsung saat akad</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Studio Craft Visual & Financial Proportion Bar (Editorial Accent) -->
  <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col lg:flex-row items-center justify-between gap-space-lg">
    <!-- Visual Proportion representation -->
    <div class="flex-1 w-full flex flex-col gap-space-xs">
      <div class="flex items-center justify-between">
        <div class="flex items-center gap-space-xs">
          <span class="font-title-md text-title-md text-on-surface">Komposisi Kas Masuk (Terminologis)</span>
          <span class="font-label-sm text-label-sm text-outline">| Total Pembayaran Rp 148,85 Juta</span>
        </div>
        <span class="font-label-sm text-label-sm text-primary font-bold">100% Tercatat</span>
      </div>
      <!-- Segmented Bar -->
      <div class="w-full h-3 rounded-full bg-surface-container-high overflow-hidden flex">
        <div class="h-full bg-secondary" style="width: 28.6%;" title="Total DP: Rp 42.600.000 (28.6%)"></div>
        <div class="h-full bg-outline" style="width: 25.7%;" title="Total Pelunasan: Rp 38.250.000 (25.7%)"></div>
        <div class="h-full bg-primary" style="width: 45.7%;" title="Total Bayar Penuh: Rp 68.000.000 (45.7%)"></div>
      </div>
      <!-- Legends -->
      <div class="flex flex-wrap items-center gap-space-md pt-1">
        <div class="flex items-center gap-space-xs">
          <span class="w-3 h-3 rounded-sm bg-secondary"></span>
          <span class="font-body-md text-body-md text-on-surface-variant">Uang Muka / DP (28.6%)</span>
        </div>
        <div class="flex items-center gap-space-xs">
          <span class="w-3 h-3 rounded-sm bg-outline"></span>
          <span class="font-body-md text-body-md text-on-surface-variant">Pelunasan (25.7%)</span>
        </div>
        <div class="flex items-center gap-space-xs">
          <span class="w-3 h-3 rounded-sm bg-primary"></span>
          <span class="font-body-md text-body-md text-on-surface-variant">Pembayaran Penuh 100% (45.7%)</span>
        </div>
      </div>
    </div>

    <!-- Mini Studio Brand Note -->
    <div class="w-full lg:w-80 shrink-0 bg-surface-container-low rounded-xl p-space-md flex items-center gap-space-sm">
      <div class="w-12 h-12 rounded-lg bg-surface-container-lowest flex items-center justify-center shrink-0 shadow-sm">
        <span class="material-symbols-outlined text-primary text-2xl">workspace_premium</span>
      </div>
      <div class="flex flex-col">
        <span class="font-title-md text-title-md text-on-surface">Atelier Cattaleya</span>
        <span class="font-body-md text-body-md text-on-surface-variant">Kapasitas produksi studio berjalan 94% optimal bulan ini.</span>
      </div>
    </div>
  </div>

  <!-- Periodic Recap Data Table (Spesifikasi Tabel Rekapitulasi) -->
  <div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden flex flex-col">
    <!-- Table Header Info -->
    <div class="p-space-lg pb-space-sm flex flex-col md:flex-row md:items-center justify-between gap-space-sm">
      <div class="flex flex-col">
        <h3 class="font-headline-md text-headline-md text-on-surface">Tabel Rekapitulasi Berkala Pemesanan</h3>
        <p class="font-body-md text-body-md text-on-surface-variant">Rincian pendapatan mahar kustom dan penyewaan baki seserahan per pekan.</p>
      </div>
      <div class="flex items-center gap-space-xs bg-surface-container-high px-space-md py-space-xs rounded-full">
        <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
        <span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant font-semibold" id="tableAuditPeriod">Periode Audit: 01 - 31 Oktober 2025</span>
      </div>
    </div>

    <!-- Responsive Table Wrapper -->
    <div class="overflow-x-auto w-full">
      <table class="w-full text-left border-collapse">
        <thead>
          <tr class="bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider">
            <th class="py-space-md px-space-lg font-semibold">Periode (Bulan / Pekan)</th>
            <th class="py-space-md px-space-md font-semibold text-center">Jumlah Pesanan</th>
            <th class="py-space-md px-space-md font-semibold">Mahar (Paket &amp; Omset)</th>
            <th class="py-space-md px-space-md font-semibold">Penyewaan Kotak (Set &amp; Omset)</th>
            <th class="py-space-md px-space-md font-semibold text-center">Total Transaksi</th>
            <th class="py-space-md px-space-lg font-semibold text-right">Total Pembayaran (Kas Masuk)</th>
          </tr>
        </thead>
        <tbody class="font-body-md text-body-md text-on-surface divide-y divide-surface-variant/30">
          <!-- Row 1: Pekan 1 -->
          <tr class="hover:bg-surface-container-low/60 transition-colors">
            <td class="py-space-md px-space-lg">
              <div class="flex flex-col">
                <span class="font-title-md text-title-md text-on-surface font-semibold">Pekan 1</span>
                <span class="font-label-sm text-label-sm text-outline">01 - 07 Okt 2025</span>
              </div>
            </td>
            <td class="py-space-md px-space-md text-center">
              <span class="inline-flex items-center px-2.5 py-0.5 rounded-full bg-surface-container-high text-on-surface-variant font-title-md text-title-md">
                42 Pesanan
              </span>
            </td>
            <td class="py-space-md px-space-md">
              <div class="flex flex-col">
                <span class="font-title-md text-title-md text-on-surface">26 Paket</span>
                <span class="font-body-md text-body-md text-primary font-medium">Rp 28.600.000</span>
              </div>
            </td>
            <td class="py-space-md px-space-md">
              <div class="flex flex-col">
                <span class="font-title-md text-title-md text-on-surface">16 Set</span>
                <span class="font-body-md text-body-md text-secondary font-medium">Rp 9.800.000</span>
              </div>
            </td>
            <td class="py-space-md px-space-md text-center">
              <span class="font-body-md text-body-md text-on-surface">48 Transaksi</span>
            </td>
            <td class="py-space-md px-space-lg text-right">
              <span class="font-title-lg text-title-lg text-on-surface font-semibold tracking-tight">Rp 38.400.000</span>
            </td>
          </tr>

          <!-- Row 2: Pekan 2 -->
          <tr class="hover:bg-surface-container-low/60 transition-colors bg-surface-container-lowest">
            <td class="py-space-md px-space-lg">
              <div class="flex flex-col">
                <span class="font-title-md text-title-md text-on-surface font-semibold">Pekan 2</span>
                <span class="font-label-sm text-label-sm text-outline">08 - 14 Okt 2025</span>
              </div>
            </td>
            <td class="py-space-md px-space-md text-center">
              <span class="inline-flex items-center px-2.5 py-0.5 rounded-full bg-surface-container-high text-on-surface-variant font-title-md text-title-md">
                48 Pesanan
              </span>
            </td>
            <td class="py-space-md px-space-md">
              <div class="flex flex-col">
                <span class="font-title-md text-title-md text-on-surface">30 Paket</span>
                <span class="font-body-md text-body-md text-primary font-medium">Rp 33.200.000</span>
              </div>
            </td>
            <td class="py-space-md px-space-md">
              <div class="flex flex-col">
                <span class="font-title-md text-title-md text-on-surface">18 Set</span>
                <span class="font-body-md text-body-md text-secondary font-medium">Rp 11.200.000</span>
              </div>
            </td>
            <td class="py-space-md px-space-md text-center">
              <span class="font-body-md text-body-md text-on-surface">56 Transaksi</span>
            </td>
            <td class="py-space-md px-space-lg text-right">
              <span class="font-title-lg text-title-lg text-on-surface font-semibold tracking-tight">Rp 44.400.000</span>
            </td>
          </tr>

          <!-- Row 3: Pekan 3 -->
          <tr class="hover:bg-surface-container-low/60 transition-colors">
            <td class="py-space-md px-space-lg">
              <div class="flex flex-col">
                <span class="font-title-md text-title-md text-on-surface font-semibold">Pekan 3</span>
                <span class="font-label-sm text-label-sm text-outline">15 - 21 Okt 2025</span>
              </div>
            </td>
            <td class="py-space-md px-space-md text-center">
              <span class="inline-flex items-center px-2.5 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-title-md text-title-md font-semibold">
                51 Pesanan
              </span>
            </td>
            <td class="py-space-md px-space-md">
              <div class="flex flex-col">
                <span class="font-title-md text-title-md text-on-surface">32 Paket</span>
                <span class="font-body-md text-body-md text-primary font-medium">Rp 35.800.000</span>
              </div>
            </td>
            <td class="py-space-md px-space-md">
              <div class="flex flex-col">
                <span class="font-title-md text-title-md text-on-surface">19 Set</span>
                <span class="font-body-md text-body-md text-secondary font-medium">Rp 12.100.000</span>
              </div>
            </td>
            <td class="py-space-md px-space-md text-center">
              <span class="font-body-md text-body-md text-on-surface">60 Transaksi</span>
            </td>
            <td class="py-space-md px-space-lg text-right">
              <span class="font-title-lg text-title-lg text-on-surface font-semibold tracking-tight">Rp 47.900.000</span>
            </td>
          </tr>

          <!-- Row 4: Pekan 4 -->
          <tr class="hover:bg-surface-container-low/60 transition-colors bg-surface-container-lowest">
            <td class="py-space-md px-space-lg">
              <div class="flex flex-col">
                <span class="font-title-md text-title-md text-on-surface font-semibold">Pekan 4</span>
                <span class="font-label-sm text-label-sm text-outline">22 - 31 Okt 2025</span>
              </div>
            </td>
            <td class="py-space-md px-space-md text-center">
              <span class="inline-flex items-center px-2.5 py-0.5 rounded-full bg-surface-container-high text-on-surface-variant font-title-md text-title-md">
                43 Pesanan
              </span>
            </td>
            <td class="py-space-md px-space-md">
              <div class="flex flex-col">
                <span class="font-title-md text-title-md text-on-surface">24 Paket</span>
                <span class="font-body-md text-body-md text-primary font-medium">Rp 26.500.000</span>
              </div>
            </td>
            <td class="py-space-md px-space-md">
              <div class="flex flex-col">
                <span class="font-title-md text-title-md text-on-surface">19 Set</span>
                <span class="font-body-md text-body-md text-secondary font-medium">Rp 11.650.000</span>
              </div>
            </td>
            <td class="py-space-md px-space-md text-center">
              <span class="font-body-md text-body-md text-on-surface">52 Transaksi</span>
            </td>
            <td class="py-space-md px-space-lg text-right">
              <span class="font-title-lg text-title-lg text-on-surface font-semibold tracking-tight">Rp 38.150.000</span>
            </td>
          </tr>

          <!-- TOTAL SUMMARY ROW -->
          <tr class="bg-surface-container-high text-on-surface font-semibold">
            <td class="py-space-lg px-space-lg">
              <div class="flex items-center gap-space-xs">
                <span class="material-symbols-outlined text-primary text-xl">functions</span>
                <span class="font-title-lg text-title-lg uppercase tracking-wider text-on-surface font-bold">Baris Total</span>
              </div>
            </td>
            <td class="py-space-lg px-space-md text-center">
              <span class="font-title-lg text-title-lg text-on-surface font-bold">184 Pesanan</span>
            </td>
            <td class="py-space-lg px-space-md">
              <div class="flex flex-col">
                <span class="font-title-lg text-title-lg text-on-surface font-bold">112 Paket</span>
                <span class="font-label-sm text-label-sm text-outline font-normal">Kustom Mahar Akrilik &amp; Koin</span>
              </div>
            </td>
            <td class="py-space-lg px-space-md">
              <div class="flex flex-col">
                <span class="font-title-lg text-title-lg text-on-surface font-bold">72 Set</span>
                <span class="font-label-sm text-label-sm text-outline font-normal">Sewa Baki &amp; Vitrine Kaca</span>
              </div>
            </td>
            <td class="py-space-lg px-space-md text-center">
              <span class="font-title-lg text-title-lg text-on-surface font-bold">216 Transaksi</span>
            </td>
            <td class="py-space-lg px-space-lg text-right">
              <div class="flex flex-col items-end">
                <span class="font-metric-display text-metric-display text-primary leading-tight font-bold">Rp 168.850.000</span>
                <span class="font-label-sm text-label-sm text-on-surface-variant font-medium">Total Akrual Keseluruhan</span>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Digital Signature & Document Validity Verification Section -->
    <div class="p-space-lg bg-surface-container-low flex flex-col md:flex-row md:items-center justify-between gap-space-md border-t border-surface-variant/40">
      <div class="flex items-start gap-space-sm">
        <div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center shrink-0 text-primary">
          <span class="material-symbols-outlined text-xl">verified</span>
        </div>
        <div class="flex flex-col">
          <div class="flex items-center gap-space-xs">
            <span class="font-title-md text-title-md text-on-surface font-semibold">Keabsahan Dokumen Terjamin</span>
            <span class="px-2 py-0.5 rounded-full bg-primary/10 text-primary font-label-sm text-label-sm font-semibold uppercase">Status: Terverifikasi Sistem</span>
          </div>
          <p class="font-body-md text-body-md text-on-surface-variant mt-0.5">
            Laporan dihasilkan secara otomatis oleh Sistem Informasi Cattaleya untuk Owner (Bpk. Hendra).
          </p>
        </div>
      </div>
      <div class="flex flex-col items-start md:items-end gap-0.5 shrink-0 pl-12 md:pl-0">
        <div class="flex items-center gap-1 text-on-surface font-title-md text-title-md">
          <span class="material-symbols-outlined text-sm text-outline">history</span>
          <span>Dicetak: 24 Oktober 2025, 17:30 WIB</span>
        </div>
        <span class="font-label-sm text-label-sm text-outline uppercase tracking-wider font-mono">ID Hash: CTL-OCT25-89410-OWN</span>
      </div>
    </div>
  </div>

  <!-- Editorial Note / Owner Guidance -->
  <div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm flex items-center justify-between text-outline font-label-md text-label-md">
    <div class="flex items-center gap-space-sm">
      <span class="material-symbols-outlined text-primary text-base">info</span>
      <span>Halaman ini beroperasi dalam mode Read-Only. Perubahan status pesanan dilakukan di meja operasional artisan.</span>
    </div>
    <span class="hidden sm:inline-block font-label-sm text-label-sm uppercase tracking-wider">Cattaleya • Seserahan &amp; Mahar</span>
  </div>
</div>
@endsection

@push('scripts')
<script>
  (function() {
    // Quick Preset Chips Interaction
    const chips = document.querySelectorAll('.period-chip');
    const startDateInput = document.getElementById('startDate');
    const endDateInput = document.getElementById('endDate');
    const activePeriodLabel = document.getElementById('activePeriodLabel');
    const tableAuditPeriod = document.getElementById('tableAuditPeriod');
    const applyFilterBtn = document.getElementById('applyFilterBtn');

    chips.forEach(chip => {
      chip.addEventListener('click', () => {
        chips.forEach(c => {
          c.classList.remove('bg-secondary-container', 'text-on-secondary-container', 'font-semibold');
          c.classList.add('bg-surface-container-high', 'text-on-surface-variant');
        });
        chip.classList.add('bg-secondary-container', 'text-on-secondary-container', 'font-semibold');
        chip.classList.remove('bg-surface-container-high', 'text-on-surface-variant');
        
        const period = chip.getAttribute('data-period');
        const start = chip.getAttribute('data-start');
        const end = chip.getAttribute('data-end');

        if (startDateInput && start) startDateInput.value = start;
        if (endDateInput && end) endDateInput.value = end;
        if (activePeriodLabel) activePeriodLabel.textContent = period;
        if (tableAuditPeriod) tableAuditPeriod.textContent = `Periode Audit: ${period}`;

        triggerToast(`Periode diganti ke: ${period}`);
      });
    });

    if (applyFilterBtn) {
      applyFilterBtn.addEventListener('click', () => {
        const start = startDateInput ? startDateInput.value : '';
        const end = endDateInput ? endDateInput.value : '';
        if (tableAuditPeriod) {
          tableAuditPeriod.textContent = `Periode Audit: ${start} s/d ${end}`;
        }
        triggerToast(`Memperbarui Rekapitulasi Data Periode ${start} s/d ${end}`);
      });
    }

    // Export dropdown toggling
    const exportBtn = document.getElementById('exportDropdownBtn');
    const exportMenu = document.getElementById('exportMenu');

    if (exportBtn && exportMenu) {
      exportBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        exportMenu.classList.toggle('hidden');
      });

      document.addEventListener('click', (e) => {
        if (!exportMenu.contains(e.target)) {
          exportMenu.classList.add('hidden');
        }
      });
    }

    // Toast Trigger Helper
    window.triggerToast = function(message) {
      const toast = document.getElementById('toastBox');
      const toastMsg = document.getElementById('toastMsg');
      if (!toast || !toastMsg) return;

      if (exportMenu) exportMenu.classList.add('hidden');

      toastMsg.textContent = message;
      toast.classList.remove('translate-y-16', 'opacity-0');
      toast.classList.add('translate-y-0', 'opacity-100');

      setTimeout(() => {
        toast.classList.add('translate-y-16', 'opacity-0');
        toast.classList.remove('translate-y-0', 'opacity-100');
      }, 2800);
    };
  })();
</script>
@endpush

