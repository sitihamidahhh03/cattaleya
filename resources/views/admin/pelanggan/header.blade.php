<!-- Top Ambient Glow Decorator & Page Header Section -->
<div class="relative pt-space-xs pb-space-lg flex flex-col lg:flex-row lg:items-end justify-between gap-space-md">
    <div class="space-y-1">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-surface-container font-label-sm text-label-sm text-secondary tracking-widest uppercase mb-1">
            <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
            DIREKTORI KLIEN ATELIER
        </div>
        <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight font-semibold">Data &amp; Manajemen Pelanggan</h1>
        <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
            Direktori calon pengantin, riwayat pemesanan seserahan, kontak WhatsApp, dan preferensi layanan atelier.
        </p>
    </div>
    <div class="flex flex-wrap items-center gap-space-sm">
        <button class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-surface-container text-secondary font-title-md text-title-md hover:bg-surface-container-high transition-all shadow-sm cursor-pointer" onclick="exportCustomerData()" type="button">
            <span class="material-symbols-outlined text-[19px]">download</span>
            <span>Export Data Pelanggan</span>
        </button>
        <button class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-primary text-on-primary font-title-md text-title-md hover:bg-surface-tint shadow-md transition-all cursor-pointer" onclick="openAddCustomerModal()" type="button">
            <span class="material-symbols-outlined text-[20px]">person_add</span>
            <span>+ Tambah Pelanggan Baru</span>
        </button>
    </div>
</div>
