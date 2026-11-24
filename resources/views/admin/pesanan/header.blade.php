<!-- WhatsApp Gateway Integration Live Ribbon -->
<div class="relative overflow-hidden rounded-xl bg-surface-container-low p-space-md shadow-xs border border-outline-variant/30">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-space-sm">
        <div class="flex items-center gap-space-sm">
            <div class="w-9 h-9 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container flex-shrink-0">
                <span class="material-symbols-outlined text-[20px] text-primary">sms</span>
            </div>
            <div>
                <div class="flex items-center gap-2">
                    <p class="font-title-md text-title-md text-on-surface font-semibold">Integrasi WhatsApp Gateway &amp; Midtrans Live</p>
                    <span class="w-2 h-2 rounded-full bg-[#2d7a4d] animate-pulse"></span>
                </div>
                <p class="font-body-md text-body-md text-on-surface-variant">
                    Pelanggan secara otomatis menerima invoice digital Midtrans, pengingat H-3 sisa pelunasan dowry, serta notifikasi siap ambil/kirim secara real-time.
                </p>
            </div>
        </div>
        <div class="flex items-center gap-space-sm flex-shrink-0">
            <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary px-2.5 py-1 rounded-full bg-surface-container-high font-semibold">Engine v3.2 OK</span>
            <button class="px-3 py-1.5 rounded-lg bg-surface-container-highest hover:bg-surface-container text-on-surface font-label-md text-label-md transition-all flex items-center gap-1.5 shadow-xs cursor-pointer border border-outline-variant/20" onclick="openWaTestModal()" type="button">
                <span class="material-symbols-outlined text-[16px] text-primary">sensors</span>
                <span>Uji Log Gateway</span>
            </button>
        </div>
    </div>
</div>

<!-- Page Title & Operational Actions -->
<div class="flex flex-col lg:flex-row lg:items-end justify-between gap-space-md">
    <div class="space-y-1">
        <div class="flex items-center gap-2">
            <span class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-widest">Atelier Craft &amp; Rental Control</span>
            <span class="text-outline-variant font-label-sm">•</span>
            <span class="font-label-sm text-label-sm text-secondary font-medium">Buku Pesanan Studio</span>
        </div>
        <h2 class="font-headline-lg text-headline-lg text-on-surface font-semibold tracking-tight">Manajemen Data Pesanan</h2>
        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl">
            Kelola pemesanan kustom mahar, jadwal sewa kotak seserahan, status operasional produksi florist, dan alur konfirmasi otomatis pelanggan.
        </p>
    </div>
    <div class="flex flex-wrap items-center gap-space-sm flex-shrink-0">
        <button class="px-4 py-2.5 rounded-xl bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-title-md text-title-md transition-all flex items-center gap-2 shadow-xs cursor-pointer border border-outline-variant/30" onclick="exportCsvData()" type="button">
            <span class="material-symbols-outlined text-[18px] text-secondary">file_download</span>
            <span>Export Data Pesanan (CSV)</span>
        </button>
        <button class="px-5 py-2.5 rounded-xl bg-primary text-on-primary hover:bg-primary-container font-title-md text-title-md transition-all flex items-center gap-2 shadow-md cursor-pointer" onclick="openManualOrderModal()" type="button">
            <span class="material-symbols-outlined text-[19px]">add</span>
            <span>+ Buat Pesanan Manual / Offline</span>
        </button>
    </div>
</div>

<!-- KPI Mini Summary Bar -->
<div class="grid grid-cols-2 md:grid-cols-4 gap-space-md">
    <div class="p-space-md rounded-xl bg-surface-container-lowest shadow-xs flex items-center justify-between border border-outline-variant/30">
        <div>
            <p class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Total Pesanan Aktif</p>
            <p class="font-metric-display text-metric-display text-on-surface mt-0.5 font-bold">184</p>
            <p class="font-label-sm text-label-sm text-[#2d7a4d] mt-1 font-semibold">+14 pesanan minggu ini</p>
        </div>
        <div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary">
            <span class="material-symbols-outlined text-[24px]">inventory</span>
        </div>
    </div>
    <div class="p-space-md rounded-xl bg-surface-container-lowest shadow-xs flex items-center justify-between border border-outline-variant/30">
        <div>
            <p class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Pengerjaan Florist</p>
            <p class="font-metric-display text-metric-display text-on-surface mt-0.5 font-bold">38</p>
            <p class="font-label-sm text-label-sm text-primary mt-1 font-medium">12 deadline pekan ini</p>
        </div>
        <div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary">
            <span class="material-symbols-outlined text-[24px]">local_florist</span>
        </div>
    </div>
    <div class="p-space-md rounded-xl bg-surface-container-lowest shadow-xs flex items-center justify-between border border-outline-variant/30">
        <div>
            <p class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Kotak Sedang Disewa</p>
            <p class="font-metric-display text-metric-display text-on-surface mt-0.5 font-bold">64 <span class="font-title-md text-title-md text-secondary font-normal">set</span></p>
            <p class="font-label-sm text-label-sm text-secondary-fixed-dim mt-1">9 set jadwal kembali besok</p>
        </div>
        <div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-secondary">
            <span class="material-symbols-outlined text-[24px]">package_2</span>
        </div>
    </div>
    <div class="p-space-md rounded-xl bg-surface-container-lowest shadow-xs flex items-center justify-between border border-outline-variant/30">
        <div>
            <p class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Pelunasan Menunggu (H-3)</p>
            <p class="font-metric-display text-metric-display text-error mt-0.5 font-bold">7</p>
            <p class="font-label-sm text-label-sm text-on-surface-variant mt-1">Pengingat otomatis terkirim</p>
        </div>
        <div class="w-12 h-12 rounded-xl bg-error-container/40 flex items-center justify-center text-error">
            <span class="material-symbols-outlined text-[24px]">notifications_active</span>
        </div>
    </div>
</div>
