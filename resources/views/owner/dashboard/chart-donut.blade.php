<!-- Chart 2: Mahar vs Seserahan Donut & Value Comparison (5 Cols) -->
<div class="lg:col-span-5 flex flex-col justify-between bg-surface-container-lowest p-space-lg rounded-xl shadow-sm">
    <div class="flex items-center justify-between pb-space-sm gap-2">
        <div class="flex flex-col">
            <div class="flex items-center gap-2">
                <span class="w-2.5 h-2.5 rounded-full bg-secondary-container"></span>
                <h2 class="font-headline-md text-headline-md text-on-surface">Komposisi Pesanan</h2>
            </div>
            <span class="font-label-sm text-label-sm text-outline">Perbandingan Mahar vs Sewa Kotak (Tahun 2025)</span>
        </div>
        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container-high text-on-surface-variant font-label-sm text-label-sm font-semibold shrink-0">
            <span class="material-symbols-outlined text-xs text-primary">event</span>
            Tahun 2025
        </span>
    </div>

    <div class="my-auto flex flex-col sm:flex-row items-center justify-center gap-5 sm:gap-6 py-3">
        <!-- SVG Donut Chart with Golden Palette -->
        <div class="relative w-32 h-32 flex-shrink-0 flex items-center justify-center">
            <svg class="w-full h-full transform -rotate-90" viewBox="0 0 120 120">
                <!-- Background Ring -->
                <circle cx="60" cy="60" fill="transparent" r="46" stroke="#f1e6df" stroke-width="14"></circle>
                <!-- Mahar Ring (61% = stroke-dasharray 176.4 289.0) -->
                <circle cx="60" cy="60" fill="transparent" r="46" stroke="#775625" stroke-dasharray="176.4 289" stroke-linecap="round" stroke-width="14"></circle>
                <!-- Kotak Ring (39% = stroke-dasharray 112.7 289.0 offset -176.4) -->
                <circle cx="60" cy="60" fill="transparent" r="46" stroke="#d7c4a7" stroke-dasharray="112.7 289" stroke-dashoffset="-176.4" stroke-linecap="round" stroke-width="14"></circle>
            </svg>
            <div class="absolute inset-0 flex flex-col items-center justify-center pointer-events-none">
                <span class="font-bold text-base text-on-surface leading-tight">184</span>
                <span class="text-[9px] text-outline uppercase tracking-wider font-semibold">Total / Tahun</span>
            </div>
        </div>

        <!-- Legend and Revenue Figures -->
        <div class="flex flex-col gap-2.5 w-full sm:w-auto flex-1 min-w-0 max-w-[260px]">
            <!-- Mahar Stat -->
            <div class="flex flex-col p-2.5 rounded-lg bg-surface-container-low w-full">
                <div class="flex items-center justify-between gap-1.5 whitespace-nowrap">
                    <div class="flex items-center gap-1.5 min-w-0">
                        <span class="w-2 h-2 rounded-full bg-primary shrink-0"></span>
                        <span class="font-semibold text-xs text-on-surface whitespace-nowrap">Paket Mahar</span>
                    </div>
                    <span class="font-semibold text-xs text-primary whitespace-nowrap shrink-0">61% (112)</span>
                </div>
                <div class="mt-1 text-[11px] text-on-surface-variant whitespace-nowrap">
                    <span>Akumulasi Nilai:</span> <span class="font-semibold text-on-surface">Rp 268.800.000</span>
                </div>
            </div>

            <!-- Kotak Seserahan Stat -->
            <div class="flex flex-col p-2.5 rounded-lg bg-surface-container-low w-full">
                <div class="flex items-center justify-between gap-1.5 whitespace-nowrap">
                    <div class="flex items-center gap-1.5 min-w-0">
                        <span class="w-2 h-2 rounded-full bg-tertiary-fixed-dim shrink-0"></span>
                        <span class="font-semibold text-xs text-on-surface whitespace-nowrap">Sewa Kotak</span>
                    </div>
                    <span class="font-semibold text-xs text-secondary whitespace-nowrap shrink-0">39% (72)</span>
                </div>
                <div class="mt-1 text-[11px] text-on-surface-variant whitespace-nowrap">
                    <span>Akumulasi Nilai:</span> <span class="font-semibold text-on-surface">Rp 115.200.000</span>
                </div>
            </div>
        </div>     
    </div>

    <!-- Matching Bottom Summary Text -->
    <div class="mt-space-md text-xs sm:text-[13px] text-on-surface-variant">
        <span>Total Estimasi Perputaran 2025:</span> <span class="font-bold text-on-surface">Rp 384.000.000</span>
    </div>
</div>
