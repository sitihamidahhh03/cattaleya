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
