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
      <button class="inline-flex items-center gap-2 px-3.5 py-2.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface font-title-md text-title-md shadow-sm transition-all active:scale-95 cursor-pointer" id="btnManualSync">
        <span class="material-symbols-outlined text-[18px] text-primary transition-transform duration-700" id="syncIcon">sync</span>
        <span>Sinkronisasi Midtrans Manual</span>
      </button>
      <button class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-primary hover:bg-primary-container text-on-primary font-title-md text-title-md shadow-md hover:shadow-lg transition-all active:scale-95 cursor-pointer" id="btnExportLog">
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
