<!-- Interactive Date Range Filtering & Quick Presets -->
<div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm mb-space-lg border border-outline-variant/20">
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-space-md">
        <!-- Date Picker Range Form Group -->
        <div class="flex flex-wrap items-center gap-3">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary text-[22px]">date_range</span>
                <span class="font-title-md text-title-md text-on-surface font-semibold">Periode Acara Disewa:</span>
            </div>
            <div class="flex items-center gap-2 bg-surface-container-low px-3 py-1.5 rounded-xl shadow-inner border border-outline-variant/20">
                <div class="flex flex-col">
                    <span class="font-label-sm text-label-sm text-secondary font-semibold">Tanggal Pengambilan (H-2)</span>
                    <input class="bg-transparent font-title-md text-title-md text-on-surface focus:outline-none cursor-pointer" id="filter-start" type="date" value="2025-10-20">
                </div>
                <span class="text-secondary font-title-md px-1 font-semibold">s/d</span>
                <div class="flex flex-col">
                    <span class="font-label-sm text-label-sm text-secondary font-semibold">Pengembalian Bersih (H+2)</span>
                    <input class="bg-transparent font-title-md text-title-md text-on-surface focus:outline-none cursor-pointer" id="filter-end" type="date" value="2025-10-24">
                </div>
            </div>
        </div>

        <!-- Quick Preset Filter Chips -->
        <div class="flex items-center gap-2 overflow-x-auto pb-1 lg:pb-0">
            <span class="font-label-sm text-label-sm text-secondary shrink-0 uppercase tracking-wider font-semibold">Preset:</span>
            <button class="preset-btn px-3 py-1.5 rounded-full bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors font-label-sm text-label-sm font-semibold whitespace-nowrap active-preset cursor-pointer" type="button">
                20 Okt – 24 Okt 2025
            </button>
            <button class="preset-btn px-3 py-1.5 rounded-full bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-colors font-label-sm text-label-sm font-medium whitespace-nowrap cursor-pointer" type="button">
                Akhir Pekan Ini (25-26 Okt)
            </button>
            <button class="preset-btn px-3 py-1.5 rounded-full bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-colors font-label-sm text-label-sm font-medium whitespace-nowrap cursor-pointer" type="button">
                Pekan Depan (27 Okt - 2 Nov)
            </button>
            <button class="preset-btn px-3 py-1.5 rounded-full bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-colors font-label-sm text-label-sm font-medium whitespace-nowrap cursor-pointer" type="button">
                Bulan Ini (Okt 2025)
            </button>
        </div>
    </div>
</div>
