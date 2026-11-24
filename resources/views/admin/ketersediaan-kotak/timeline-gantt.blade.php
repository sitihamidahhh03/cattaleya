<!-- Kalender & Gantt Visual Jadwal Pemakaian Kotak (Anti Double-Booking Visualizer) -->
<div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm mb-space-xl border border-outline-variant/20">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-space-md mb-space-md">
        <div>
            <div class="flex items-center gap-2 mb-1">
                <span class="material-symbols-outlined text-primary text-[20px]">calendar_view_week</span>
                <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Peta Timeline Alokasi Baki &amp; Buffer Perawatan</h3>
            </div>
            <p class="font-body-md text-body-md text-on-surface-variant">Visualisasi bentang sewa aktif per Pesanan. Bar strip biru/emas mengindikasikan masa sewa &amp; buffer sterilisasi.</p>
        </div>
        <div class="flex items-center gap-3">
            <div class="flex items-center gap-2">
                <span class="w-3 h-3 rounded-full bg-primary-container"></span>
                <span class="font-label-sm text-label-sm text-secondary font-medium">Terpakai Acara</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="w-3 h-3 rounded-full bg-secondary-fixed-dim"></span>
                <span class="font-label-sm text-label-sm text-secondary font-medium">Buffer H-2/H+2</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="w-3 h-3 rounded-full bg-tertiary-fixed"></span>
                <span class="font-label-sm text-label-sm text-secondary font-medium">Maintenance</span>
            </div>
        </div>
    </div>

    <!-- Timeline Grid Header & Rows -->
    <div class="overflow-x-auto pb-space-sm">
        <div class="min-w-[900px]">
            <!-- Days Header -->
            <div class="grid grid-cols-12 gap-1 bg-surface-container-low rounded-lg p-2 mb-2 font-label-sm text-label-sm text-secondary text-center uppercase tracking-wider font-semibold border border-outline-variant/10">
                <div class="col-span-3 text-left pl-2">Jenis Kotak / Seri</div>
                <div>18 Okt</div>
                <div>19 Okt</div>
                <div class="bg-primary/10 rounded text-primary font-bold">20 Okt</div>
                <div class="bg-primary/10 rounded text-primary font-bold">21 Okt</div>
                <div class="bg-primary/10 rounded text-primary font-bold">22 Okt</div>
                <div class="bg-primary/10 rounded text-primary font-bold">23 Okt</div>
                <div class="bg-primary/10 rounded text-primary font-bold">24 Okt</div>
                <div>25 Okt</div>
                <div>26 Okt</div>
            </div>

            <!-- Row 1: Luxury Crystal Timeline -->
            <div class="grid grid-cols-12 gap-1 items-center py-3 border-b border-surface-container-high/40 hover:bg-surface-container-low/40 rounded-lg px-2 transition-colors">
                <div class="col-span-3">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-primary"></span>
                        <span class="font-title-md text-title-md text-on-surface font-semibold">Luxury Crystal</span>
                        <span class="font-label-sm text-label-sm px-1.5 py-0.5 rounded bg-surface-container text-secondary font-semibold">6/10 Unit</span>
                    </div>
                </div>
                <!-- 9 Columns timeline span -->
                <div class="col-span-9 grid grid-cols-9 gap-1 h-9 items-center relative">
                    <!-- ORD-2025-089 (Sarah & Dimas - 4 baki) -->
                    <div class="col-start-2 col-span-5 h-7 rounded-lg bg-primary-container text-on-primary-container shadow-sm flex items-center justify-between px-2 font-label-sm text-label-sm overflow-hidden z-10 cursor-pointer hover:opacity-95" onclick="showScheduleModal('Luxury Crystal')" title="Sarah & Dimas (4 Baki) | Resepsi 21-22 Okt">
                        <span class="truncate font-semibold">ORD-089 (Sarah D.) • 4 Baki</span>
                        <span class="font-label-sm text-[10px] bg-black/20 px-1.5 py-0.5 rounded">H-2 Buffering</span>
                    </div>
                    <!-- ORD-2025-091 (Rizky & Amanda - 2 baki) -->
                    <div class="col-start-4 col-span-4 h-6 rounded-lg bg-secondary text-on-secondary shadow-sm flex items-center justify-between px-2 font-label-sm text-[10px] overflow-hidden opacity-90 z-20 cursor-pointer mt-1" onclick="showScheduleModal('Luxury Crystal')" title="Rizky & Amanda (2 Baki)">
                        <span class="truncate font-medium">ORD-091 (Rizky) • 2 Baki</span>
                    </div>
                </div>
            </div>

            <!-- Row 2: Luxury White Timeline -->
            <div class="grid grid-cols-12 gap-1 items-center py-3 border-b border-surface-container-high/40 hover:bg-surface-container-low/40 rounded-lg px-2 transition-colors">
                <div class="col-span-3">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-secondary"></span>
                        <span class="font-title-md text-title-md text-on-surface font-semibold">Luxury White</span>
                        <span class="font-label-sm text-label-sm px-1.5 py-0.5 rounded bg-surface-container text-secondary font-semibold">3/10 Unit</span>
                    </div>
                </div>
                <div class="col-span-9 grid grid-cols-9 gap-1 h-9 items-center relative">
                    <!-- ORD-2025-094 (Farah & Adrian - 3 baki) -->
                    <div class="col-start-3 col-span-4 h-7 rounded-lg bg-surface-container-highest text-on-surface shadow-sm flex items-center justify-between px-2 font-label-sm text-label-sm overflow-hidden cursor-pointer" onclick="showScheduleModal('Luxury White')" title="Farah & Adrian (3 Baki)">
                        <span class="truncate font-semibold">ORD-094 (Farah A.) • 3 Baki</span>
                        <span class="font-label-sm text-[10px] text-secondary font-medium">Ready Slot</span>
                    </div>
                </div>
            </div>

            <!-- Row 3: Hidden Series Timeline (Congested) -->
            <div class="grid grid-cols-12 gap-1 items-center py-3 border-b border-surface-container-high/40 hover:bg-surface-container-low/40 rounded-lg px-2 transition-colors bg-error-container/10">
                <div class="col-span-3">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-error"></span>
                        <span class="font-title-md text-title-md text-on-surface font-semibold">Hidden Series</span>
                        <span class="font-label-sm text-label-sm px-1.5 py-0.5 rounded bg-error-container text-on-error-container font-semibold">10/10 FULL</span>
                    </div>
                </div>
                <div class="col-span-9 grid grid-cols-9 gap-1 h-9 items-center relative">
                    <!-- Multiple stacked bars simulating 10 full units -->
                    <div class="col-start-2 col-span-7 h-7 rounded-lg bg-error text-on-error shadow-sm flex items-center justify-between px-2 font-label-sm text-label-sm overflow-hidden cursor-pointer" onclick="showScheduleModal('Hidden Series')" title="10 Unit Terpakai Penuh: ORD-088 (5 Baki), ORD-090 (3 Baki), MTC-002 (2 Baki Restorasi)">
                        <span class="truncate font-semibold">KUNCI TOTAL: ORD-088 (5x), ORD-090 (3x), MTC Studio (2x)</span>
                        <span class="font-label-sm text-[10px] bg-black/30 px-1 rounded">No Overlap Safe</span>
                    </div>
                </div>
            </div>

            <!-- Row 4: Rattan Series Timeline -->
            <div class="grid grid-cols-12 gap-1 items-center py-3 hover:bg-surface-container-low/40 rounded-lg px-2 transition-colors">
                <div class="col-span-3">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-tertiary"></span>
                        <span class="font-title-md text-title-md text-on-surface font-semibold">Rattan Series</span>
                        <span class="font-label-sm text-label-sm px-1.5 py-0.5 rounded bg-surface-container text-secondary font-semibold">2/10 Unit</span>
                    </div>
                </div>
                <div class="col-span-9 grid grid-cols-9 gap-1 h-9 items-center relative">
                    <!-- ORD-2025-095 (Bella & Kevin - 2 baki) -->
                    <div class="col-start-4 col-span-3 h-7 rounded-lg bg-tertiary-container text-on-tertiary-container shadow-sm flex items-center justify-between px-2 font-label-sm text-label-sm overflow-hidden cursor-pointer" onclick="showScheduleModal('Rattan Series')" title="Bella & Kevin (2 Baki)">
                        <span class="truncate font-semibold">ORD-095 (Bella) • 2 Baki</span>
                        <span class="font-label-sm text-[10px]">Tersedia 8</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Timeline Footer Note -->
    <div class="mt-space-md pt-space-sm border-t border-surface-container-high/60 flex flex-col sm:flex-row items-center justify-between text-secondary font-label-sm text-label-sm gap-2">
        <div class="flex items-center gap-1.5">
            <span class="material-symbols-outlined text-[16px] text-primary">info</span>
            <span>Klik bar timeline untuk membuka dosir pesanan klien &amp; tanggal serah-terima WO.</span>
        </div>
        <div>
            <span>Sinkronisasi Otomatis Setiap 60 Detik</span>
        </div>
    </div>
</div>
