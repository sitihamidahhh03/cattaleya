<!-- Top Breadcrumb & Executive Title Banner -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md mb-space-sm">
    <div>
        <div class="flex items-center gap-space-xs text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider mb-1.5">
            <a class="hover:text-primary transition-colors flex items-center gap-1" href="{{ route('admin.pesanan') }}">
                <span class="material-symbols-outlined text-[14px]">arrow_back</span>
                <span>Pesanan</span>
            </a>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-secondary font-semibold">Dossier Operasional</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-primary font-bold">#ORD-2025-0842</span>
        </div>
        <div class="flex flex-wrap items-baseline gap-space-sm">
            <h2 class="font-headline-lg text-headline-lg text-on-surface font-semibold tracking-tight">Pesanan: Anindya &amp; Raditya</h2>
            <span class="font-label-sm text-label-sm px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-container font-semibold">
                Paket Royal Wedding Atelier
            </span>
        </div>
        <p class="font-body-md text-body-md text-on-surface-variant mt-1">
            ID Internal: <span class="font-title-md text-title-md text-on-surface font-mono font-medium">CTL-JKT-88219</span> • Terdaftar sejak 18 April 2025 oleh Siti Sarah
        </p>
    </div>

    <!-- Live Status Pill & Quick SLA Marker -->
    <div class="flex items-center gap-space-sm self-start md:self-auto">
        <div class="bg-surface-container px-space-md py-2.5 rounded-xl shadow-xs flex items-center gap-space-sm border border-outline-variant/30">
            <span class="relative flex h-3 w-3">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                <span class="relative inline-flex rounded-full h-3 w-3 bg-primary"></span>
            </span>
            <div class="flex flex-col">
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Status Operasional Aktif</span>
                <span class="font-title-md text-title-md text-primary font-bold">Sedang Disewa (Active Rental)</span>
            </div>
        </div>
    </div>
</div>

<!-- ADMIN COMMAND BAR (Prominent Action Bar) -->
<div class="bg-surface-container-low rounded-xl p-space-md shadow-xs flex flex-wrap items-center justify-between gap-space-md border border-outline-variant/30">
    <div class="flex items-center gap-space-sm">
        <span class="material-symbols-outlined text-primary text-[24px]">verified_user</span>
        <span class="font-title-md text-title-md text-on-surface font-semibold">Tindakan Khusus Admin</span>
        <span class="text-on-surface-variant font-label-sm text-label-sm hidden sm:inline">— Kontrol inventaris dan integrasi gateway</span>
    </div>
    <div class="flex flex-wrap items-center gap-space-sm">
        <!-- 1. Tombol Ubah Pesanan -->
        <button class="inline-flex items-center gap-2 px-3.5 py-2.5 rounded-lg bg-surface-container-lowest text-on-surface font-title-md text-title-md hover:bg-surface-container-high transition-all shadow-xs cursor-pointer border border-outline-variant/30" id="btn-edit-order" type="button">
            <span class="material-symbols-outlined text-[18px] text-secondary">edit_calendar</span>
            <span>Ubah Pesanan</span>
        </button>

        <!-- 2. Tombol Ubah Status Pesanan -->
        <div class="relative">
            <button class="inline-flex items-center gap-2 px-3.5 py-2.5 rounded-lg bg-primary-container text-on-primary-container font-title-md text-title-md hover:opacity-95 transition-all shadow-xs cursor-pointer" id="btn-status-dropdown" type="button">
                <span class="material-symbols-outlined text-[18px]">published_with_changes</span>
                <span>Ubah Status Pesanan</span>
                <span class="material-symbols-outlined text-[18px]">arrow_drop_down</span>
            </button>
            <!-- Dropdown Modal State -->
            <div class="hidden absolute right-0 mt-2 w-72 bg-surface-container-lowest rounded-xl shadow-xl z-30 p-2 text-on-surface border border-outline-variant/30" id="status-dropdown-menu">
                <div class="px-3 py-2 font-label-sm text-label-sm text-secondary uppercase tracking-wider font-semibold">Pilih Tahapan Produksi</div>
                <button class="w-full text-left px-3 py-2 rounded-lg font-title-md text-title-md text-on-surface hover:bg-surface-container flex items-center justify-between cursor-pointer" onclick="updateStatusQuick('Pengerjaan Florist')" type="button">
                    <span>Pengerjaan Florist</span>
                    <span class="material-symbols-outlined text-[16px] text-secondary">brush</span>
                </button>
                <button class="w-full text-left px-3 py-2 rounded-lg font-title-md text-title-md text-on-surface hover:bg-surface-container flex items-center justify-between cursor-pointer" onclick="updateStatusQuick('Siap Diambil')" type="button">
                    <span>Siap Diambil</span>
                    <span class="material-symbols-outlined text-[16px] text-secondary">inventory</span>
                </button>
                <button class="w-full text-left px-3 py-2 rounded-lg font-title-md text-title-md text-primary font-semibold bg-surface-container flex items-center justify-between cursor-pointer" onclick="updateStatusQuick('Sedang Disewa (Aktif)')" type="button">
                    <span>Sedang Disewa (Aktif)</span>
                    <span class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
                </button>
                <button class="w-full text-left px-3 py-2 rounded-lg font-title-md text-title-md text-on-surface hover:bg-surface-container flex items-center justify-between cursor-pointer" onclick="updateStatusQuick('Pengembalian & Pengecekan')" type="button">
                    <span>Pengembalian &amp; Pengecekan</span>
                    <span class="material-symbols-outlined text-[16px] text-secondary">fact_check</span>
                </button>
                <button class="w-full text-left px-3 py-2 rounded-lg font-title-md text-title-md text-on-surface hover:bg-surface-container flex items-center justify-between cursor-pointer" onclick="updateStatusQuick('Selesai')" type="button">
                    <span>Selesai</span>
                    <span class="material-symbols-outlined text-[16px] text-secondary">task_alt</span>
                </button>
            </div>
        </div>

        <!-- 3. Tombol Kirim WhatsApp -->
        <button class="inline-flex items-center gap-2 px-3.5 py-2.5 rounded-lg bg-surface-container text-on-surface font-title-md text-title-md hover:bg-surface-container-high transition-all shadow-xs cursor-pointer border border-outline-variant/30" id="btn-wa-modal" type="button">
            <span class="material-symbols-outlined text-[18px] text-[#2d7a4d]">chat</span>
            <span>Kirim Notifikasi WA</span>
        </button>

        <!-- 4. Tombol Cetak Dokumen -->
        <button class="inline-flex items-center gap-2 px-3.5 py-2.5 rounded-lg bg-primary text-on-primary font-title-md text-title-md hover:opacity-90 transition-all shadow-xs cursor-pointer" onclick="window.print()" type="button">
            <span class="material-symbols-outlined text-[18px]">print</span>
            <span>Cetak Surat Jalan &amp; Tanda Terima</span>
        </button>
    </div>
</div>
