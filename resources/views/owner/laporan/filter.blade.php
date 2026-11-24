<!-- Filter & Period Configuration Panel -->
<div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-space-sm">
        <div class="flex items-center gap-space-sm">
            <span class="material-symbols-outlined text-primary text-xl">tune</span>
            <span class="font-title-lg text-title-lg text-on-surface">Filter Rentang Waktu &amp; Periode</span>
        </div>
        <div class="flex items-center gap-space-xs text-outline font-label-sm text-label-sm">
            <span class="material-symbols-outlined text-sm">lock</span>
            <span>Akses Baca Rekapitulasi Studio Owner</span>
        </div>
    </div>

    <!-- Filter Controls Flow -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-md items-end">
        <!-- Preset Buttons (5 cols) -->
        <div class="lg:col-span-5 flex flex-col gap-space-xs">
            <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Pilihan Periode Cepat</span>
            <div class="flex flex-wrap gap-space-xs">
                <button class="period-chip px-space-md py-space-xs rounded-full font-label-md text-label-md bg-secondary-container text-on-secondary-container font-semibold transition-all" data-period="Bulan Ini" data-start="2025-10-01" data-end="2025-10-31" type="button">
                    Bulan Ini
                </button>
                <button class="period-chip px-space-md py-space-xs rounded-full font-label-md text-label-md bg-surface-container-high text-on-surface-variant hover:text-on-surface transition-all" data-period="Bulan Lalu" data-start="2025-09-01" data-end="2025-09-30" type="button">
                    Bulan Lalu
                </button>
                <button class="period-chip px-space-md py-space-xs rounded-full font-label-md text-label-md bg-surface-container-high text-on-surface-variant hover:text-on-surface transition-all" data-period="Kuartal Ini" data-start="2025-07-01" data-end="2025-09-30" type="button">
                    Kuartal Ini
                </button>
                <button class="period-chip px-space-md py-space-xs rounded-full font-label-md text-label-md bg-surface-container-high text-on-surface-variant hover:text-on-surface transition-all" data-period="Tahun Berjalan 2025" data-start="2025-01-01" data-end="2025-12-31" type="button">
                    Tahun Berjalan 2025
                </button>
            </div>
        </div>

        <!-- Date Range (5 cols) -->
        <div class="lg:col-span-5 grid grid-cols-1 sm:grid-cols-2 gap-space-sm">
            <div class="flex flex-col gap-space-xs">
                <label class="font-label-sm text-label-sm uppercase tracking-wider text-outline flex items-center gap-1" for="startDate">
                    <span class="material-symbols-outlined text-xs">calendar_month</span>
                    <span>Tanggal Mulai</span>
                </label>
                <div class="relative bg-surface-container-low rounded-xl px-space-md py-space-sm flex items-center justify-between">
                    <input class="w-full bg-transparent font-title-md text-title-md text-on-surface focus:outline-none cursor-pointer" id="startDate" type="date" value="2025-10-01">
                </div>
            </div>
            <div class="flex flex-col gap-space-xs">
                <label class="font-label-sm text-label-sm uppercase tracking-wider text-outline flex items-center gap-1" for="endDate">
                    <span class="material-symbols-outlined text-xs">event_available</span>
                    <span>Tanggal Selesai</span>
                </label>
                <div class="relative bg-surface-container-low rounded-xl px-space-md py-space-sm flex items-center justify-between">
                    <input class="w-full bg-transparent font-title-md text-title-md text-on-surface focus:outline-none cursor-pointer" id="endDate" type="date" value="2025-10-31">
                </div>
            </div>
        </div>

        <!-- Action Button (2 cols) -->
        <div class="lg:col-span-2">
            <button class="w-full h-11 inline-flex items-center justify-center gap-space-xs px-space-md bg-secondary text-on-secondary hover:bg-on-secondary-fixed-variant rounded-xl font-title-md text-title-md shadow-sm hover:shadow transition-all" id="applyFilterBtn" type="button">
                <span class="material-symbols-outlined text-lg">filter_list</span>
                <span>Terapkan Filter</span>
            </button>
        </div>
    </div>
</div>
