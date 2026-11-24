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
