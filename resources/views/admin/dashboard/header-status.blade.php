<!-- SECTION 1: HEADER & OPERATIONAL STATUS -->
<div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-xs flex flex-col xl:flex-row xl:items-center justify-between gap-space-md border border-outline-variant/30">
    <div class="flex flex-col gap-1 min-w-0">
        <div class="flex flex-wrap items-center gap-space-xs">
            <span class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-wider">Pusat Kendali Sistem</span>
            <span class="text-outline-variant">•</span>
            <span class="font-label-sm text-label-sm text-on-surface-variant font-medium">Atelier Operasional Cattaleya</span>
        </div>
        <h1 class="font-headline-lg text-headline-lg text-on-surface font-semibold tracking-tight">Dashboard Operasional Admin</h1>
        <p class="font-body-md text-body-md text-on-surface-variant max-w-3xl">
            Ringkasan aktivitas harian, pemrosesan pesanan mahar &amp; penjadwalan sewa kotak seserahan untuk tim operasional studio.
        </p>
        <div class="flex flex-wrap items-center gap-2 mt-2">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface">
                <span class="w-2 h-2 rounded-full bg-[#2d7a4d]"></span>
                <span class="font-semibold text-secondary">Midtrans Webhook:</span>
                <span class="text-on-surface font-medium">Sinkron (Aktif)</span>
            </div>
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                </span>
                <span class="font-semibold text-secondary">WA Gateway:</span>
                <span class="text-on-surface font-medium">Terhubung (Otomatis Aktif)</span>
            </div>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="flex flex-wrap items-center gap-2.5 flex-shrink-0">
        <button class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-primary text-on-primary font-title-md text-title-md hover:bg-primary-container shadow-xs transition-colors cursor-pointer" onclick="document.getElementById('modalTambahPesanan').classList.remove('hidden')" type="button">
            <span class="material-symbols-outlined text-[20px]">add_circle</span>
            <span>+ Tambah Pesanan Baru</span>
        </button>
        <button class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-surface-container-high text-on-surface font-title-md text-title-md hover:bg-surface-variant transition-colors cursor-pointer" onclick="document.getElementById('modalJadwalKembali').classList.remove('hidden')" type="button">
            <span class="material-symbols-outlined text-[20px] text-primary">event_available</span>
            <span>Cek Jadwal Pengembalian Hari Ini</span>
        </button>
    </div>
</div>
