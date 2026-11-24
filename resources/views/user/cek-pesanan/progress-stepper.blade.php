<!-- PROGRESS STEPPER SECTION (Horizontal Visual) -->
<div class="bg-surface-container-lowest p-6 lg:p-8 rounded-2xl shadow-md border border-outline-variant/30">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-8">
        <div>
            <span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary block font-semibold">Milestone Tracking</span>
            <h2 class="font-headline-md text-headline-md text-on-surface font-semibold mt-0.5">Progres Pengerjaan Atelier</h2>
        </div>
        <span class="font-label-md text-label-md px-3 py-1 bg-surface-container rounded-full text-secondary font-semibold self-start sm:self-auto">
            Tahap 3 dari 4
        </span>
    </div>

    <!-- Stepper Grid -->
    <div class="relative">
        <!-- Continuous track bar for desktop -->
        <div class="hidden lg:block absolute top-7 left-12 right-12 h-1 bg-surface-container-high z-0">
            <div class="h-full bg-primary transition-all duration-700" style="width: 66.6%;"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 lg:gap-4 relative z-10">
            <!-- Step 1: Complete -->
            <div class="flex flex-row lg:flex-col items-start lg:items-center text-left lg:text-center gap-4 group">
                <div class="w-14 h-14 rounded-full bg-primary text-on-primary flex items-center justify-center shadow-sm shrink-0">
                    <span class="material-symbols-outlined text-2xl font-bold">check</span>
                </div>
                <div class="space-y-1">
                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-primary font-bold block">Selesai</span>
                    <h3 class="font-title-md text-title-md text-on-surface font-semibold">Pesanan Diterima</h3>
                    <p class="font-body-md text-xs sm:text-body-md text-on-surface-variant">10 Mei 2025 • Form &amp; konsep terkonfirmasi</p>
                </div>
            </div>

            <!-- Step 2: Complete -->
            <div class="flex flex-row lg:flex-col items-start lg:items-center text-left lg:text-center gap-4 group">
                <div class="w-14 h-14 rounded-full bg-primary text-on-primary flex items-center justify-center shadow-sm shrink-0">
                    <span class="material-symbols-outlined text-2xl font-bold">check</span>
                </div>
                <div class="space-y-1">
                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-primary font-bold block">Selesai</span>
                    <h3 class="font-title-md text-title-md text-on-surface font-semibold">DP Terverifikasi</h3>
                    <p class="font-body-md text-xs sm:text-body-md text-on-surface-variant">Midtrans Snap (BCA VA) terkonfirmasi lunas 50%</p>
                </div>
            </div>

            <!-- Step 3: Active State -->
            <div class="flex flex-row lg:flex-col items-start lg:items-center text-left lg:text-center gap-4">
                <div class="relative w-14 h-14 rounded-full bg-primary-container text-on-primary flex items-center justify-center shadow-md shrink-0">
                    <span class="material-symbols-outlined text-2xl">palette</span>
                    <span class="absolute -top-1 -right-1 w-4 h-4 bg-primary rounded-full animate-ping"></span>
                    <span class="absolute -top-1 -right-1 w-4 h-4 bg-primary rounded-full"></span>
                </div>
                <div class="space-y-1">
                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-primary-container font-bold block">Status Aktif</span>
                    <h3 class="font-title-md text-title-md text-on-surface font-semibold">Proses Florist &amp; Baki</h3>
                    <p class="font-body-md text-xs sm:text-body-md text-on-surface-variant font-medium">Merangkai preserved orchid &amp; sterilisasi akrilik UV-C</p>
                </div>
            </div>

            <!-- Step 4: Upcoming -->
            <div class="flex flex-row lg:flex-col items-start lg:items-center text-left lg:text-center gap-4 opacity-60">
                <div class="w-14 h-14 rounded-full bg-surface-container-high text-outline flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-2xl">storefront</span>
                </div>
                <div class="space-y-1">
                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline block font-medium">Estimasi Jadwal</span>
                    <h3 class="font-title-md text-title-md text-on-surface font-semibold">Siap Diambil di Studio</h3>
                    <p class="font-body-md text-xs sm:text-body-md text-on-surface-variant">20 Oktober 2025 (Pukul 10:00 - 15:00 WIB)</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Highlight Live Status Callout -->
    <div class="mt-8 p-4 rounded-xl bg-secondary-container/40 flex items-start gap-3 border border-outline-variant/20">
        <span class="material-symbols-outlined text-primary text-xl mt-0.5 shrink-0">info</span>
        <div>
            <p class="font-title-md text-title-md text-on-surface font-semibold">Keterangan Pengerjaan Hari Ini:</p>
            <p class="font-body-md text-body-md text-on-surface-variant mt-0.5 leading-relaxed">
                Tim florist studio sedang menyelesaikan penataan bunga <em>Preserved Orchid &amp; Hydrangea</em> pada frame mahar akrilik 3D hexagon. 8 baki luxury crystal telah selesai diinspeksi kebersihan kaca serta sterilisasi UV-C sebelum dihias alas satin.
            </p>
        </div>
    </div>
</div>
