<!-- STEP 4: Engine Verifikasi Real-time Anti Double-Booking -->
<div class="bg-surface-container-lowest p-6 sm:p-7 rounded-2xl shadow-md border border-outline-variant/30 space-y-5 relative overflow-hidden">
    <div class="flex items-center justify-between pb-3 border-b border-outline-variant/30">
        <div class="flex items-center gap-2 text-primary font-title-lg text-title-lg font-semibold">
            <span class="material-symbols-outlined text-2xl">verified_user</span>
            <span>Mesin Verifikasi Stok</span>
        </div>
        <span class="px-2.5 py-1 rounded-full text-label-sm font-label-sm bg-surface-container text-on-surface-variant uppercase tracking-wider font-semibold">Live Check</span>
    </div>

    <!-- Inventory Matrix Breakdown -->
    <div class="space-y-3 font-body-md text-body-md">
        <div class="flex justify-between items-center py-1">
            <span class="text-on-surface-variant">Seri Kotak Terpilih</span>
            <span class="font-title-md text-title-md text-on-surface font-semibold" id="disp-series-name">Luxury Crystal</span>
        </div>
        <div class="flex justify-between items-center py-1">
            <span class="text-on-surface-variant">Kapasitas Master Studio</span>
            <span class="font-title-md text-title-md text-on-surface font-semibold" id="disp-master-stock">10 Unit</span>
        </div>
        <div class="flex justify-between items-start py-1">
            <span class="text-on-surface-variant">Periode Sterilisasi Buffer</span>
            <div class="text-right">
                <div class="font-title-md text-title-md text-on-surface font-semibold" id="disp-buffer-range">20 Okt - 24 Okt 2025</div>
                <div class="font-label-sm text-label-sm text-secondary">H-2 s/d H+2 (Termasuk kurasi)</div>
            </div>
        </div>

        <!-- Stock Bar Indicator -->
        <div class="pt-2 space-y-1.5">
            <div class="flex justify-between text-xs">
                <span class="text-on-surface-variant" id="disp-booked-info">Terbooking: 6 Unit</span>
                <span class="font-semibold text-primary" id="disp-avail-info">Sisa Slot Tersedia: 4 Unit</span>
            </div>
            <!-- Visual Segmented Bar -->
            <div class="w-full h-3 rounded-full bg-surface-container-high overflow-hidden flex" id="stock-progress-bar">
                <div class="bg-outline/50 h-full transition-all duration-300" id="booked-bar" style="width: 60%;"></div>
                <div class="bg-primary h-full transition-all duration-300" id="avail-bar" style="width: 40%;"></div>
            </div>
        </div>
    </div>

    <!-- Dynamic Availability Status Card -->
    <div class="p-4 rounded-xl transition-all duration-200 bg-[#EFF3EE] text-[#344837]" id="availability-status-box">
        <div class="flex items-start gap-3">
            <span class="material-symbols-outlined text-xl mt-0.5 text-primary" id="status-icon">check_circle</span>
            <div class="space-y-1">
                <div class="font-title-md text-title-md leading-tight font-bold" id="status-title">Tersedia (Sisa 4 Unit)</div>
                <p class="font-body-md text-body-md leading-relaxed text-opacity-90" id="status-desc">
                    Slot tanggal aman terkunci untuk Anda. Seri Luxury Crystal siap dirangkai oleh tim atelier Cattaleya.
                </p>
            </div>
        </div>
    </div>

    <!-- Warning Notice (Hidden by default, shown if chosen qty > available) -->
    <div class="hidden p-4 rounded-xl bg-error-container text-on-error-container space-y-2" id="conflict-alert">
        <div class="flex items-start gap-3">
            <span class="material-symbols-outlined text-error text-2xl mt-0.5">warning</span>
            <div class="space-y-1">
                <div class="font-title-md text-title-md font-bold text-error">Perhatian: Ketersediaan Tidak Cukup</div>
                <p class="font-body-md text-body-md leading-relaxed text-on-surface">
                    Jumlah kotak yang dipilih (<span class="font-bold" id="alert-qty">6 unit</span>) melebihi batas slot untuk periode ini (Sisa slot tersedia: <span class="font-bold" id="alert-avail">4 unit</span>).
                </p>
                <p class="font-label-sm text-label-sm text-on-surface-variant pt-1">
                    Silakan sesuaikan jumlah paket, ubah ke seri kotak lain yang masih tersedia, atau pilih tanggal berbeda. Sesuai kebijakan ketersediaan, sistem tidak mengalihkan seri secara otomatis demi kenyamanan pilihan Anda.
                </p>
            </div>
        </div>
    </div>
</div>
