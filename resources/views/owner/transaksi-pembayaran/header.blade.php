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
      <button class="flex items-center gap-space-xs px-space-md py-space-sm bg-primary text-on-primary rounded-lg shadow hover:bg-surface-tint transition-all cursor-pointer" id="btn-export-recap">
        <span class="material-symbols-outlined text-lg">download</span>
        <span class="font-label-md text-label-md">Unduh Rekap</span>
      </button>
    </div>
  </div>
</div>
