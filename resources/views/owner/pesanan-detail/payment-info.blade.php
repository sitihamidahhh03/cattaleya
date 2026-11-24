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
