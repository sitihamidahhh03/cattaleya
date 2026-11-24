<!-- SECTION 3 & 4: SPLIT GRID (MIDTRANS PAYMENT RECAP & QUICK WIDGET KOTAK) -->
<div class="grid grid-cols-1 xl:grid-cols-12 gap-space-lg">
    <!-- CARD RINGKASAN PEMBAYARAN MIDTRANS (7 COLS) -->
    <div class="xl:col-span-7 bg-surface-container-lowest rounded-xl p-space-lg shadow-xs flex flex-col justify-between border border-outline-variant/30">
        <div>
            <div class="flex flex-wrap items-center justify-between gap-2 mb-space-md">
                <div class="flex items-center gap-2">
                    <span class="p-2 rounded-lg bg-primary-container text-on-primary-container material-symbols-outlined text-[20px]">account_balance_wallet</span>
                    <div>
                        <h2 class="font-title-lg text-title-lg text-on-surface font-semibold">Ringkasan Pembayaran (Midtrans Gateway)</h2>
                        <p class="font-label-sm text-label-sm text-on-surface-variant">Rekapitulasi otomatis transaksi DP, Pelunasan, dan Piutang</p>
                    </div>
                </div>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container font-label-sm text-label-sm text-secondary font-medium">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#2d7a4d]"></span>
                    Midtrans Snap &amp; Core API Real-time
                </span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-lg">
                <div class="bg-surface-container-low rounded-xl p-space-md flex flex-col border border-outline-variant/20">
                    <span class="font-label-sm text-label-sm uppercase font-semibold text-secondary tracking-wider">Total Dana Masuk Terverifikasi</span>
                    <p class="font-headline-lg text-headline-lg text-primary font-bold mt-1">Rp 148.850.000</p>
                    <div class="flex items-center gap-1 mt-2 text-[#2d7a4d] font-label-sm text-label-sm font-semibold">
                        <span class="material-symbols-outlined text-[16px]">verified</span>
                        <span>Tersinkronisasi otomatis via Webhook</span>
                    </div>
                </div>
                <div class="bg-surface-container-low rounded-xl p-space-md flex flex-col border border-outline-variant/20">
                    <span class="font-label-sm text-label-sm uppercase font-semibold text-secondary tracking-wider">Menunggu Pelunasan (Piutang)</span>
                    <p class="font-headline-lg text-headline-lg text-on-surface font-bold mt-1">Rp 24.300.000</p>
                    <div class="flex items-center gap-1 mt-2 text-on-surface-variant font-label-sm text-label-sm">
                        <span class="material-symbols-outlined text-[16px] text-primary">schedule</span>
                        <span>Dari 28 pesanan aktif belum tuntas</span>
                    </div>
                </div>
            </div>

            <!-- Breakdown Grid -->
            <div class="space-y-3">
                <p class="font-label-sm text-label-sm text-secondary uppercase font-semibold tracking-wider">Breakdown Aliran Dana</p>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-space-sm">
                    <div class="p-3 rounded-lg bg-surface-container flex flex-col">
                        <span class="font-label-sm text-label-sm text-secondary">DP Masuk (Midtrans)</span>
                        <span class="font-title-md text-title-md text-on-surface font-bold mt-0.5">Rp 42.600.000</span>
                        <span class="font-label-sm text-label-sm text-on-surface-variant mt-1">Status DP Terbayar</span>
                    </div>
                    <div class="p-3 rounded-lg bg-surface-container flex flex-col">
                        <span class="font-label-sm text-label-sm text-secondary">Pelunasan Terbayar</span>
                        <span class="font-title-md text-title-md text-on-surface font-bold mt-0.5">Rp 38.250.000</span>
                        <span class="font-label-sm text-label-sm text-on-surface-variant mt-1">Tahap Penyelesaian</span>
                    </div>
                    <div class="p-3 rounded-lg bg-surface-container flex flex-col">
                        <span class="font-label-sm text-label-sm text-secondary">Pembayaran Penuh (Lunas)</span>
                        <span class="font-title-md text-title-md text-on-surface font-bold mt-0.5">Rp 68.000.000</span>
                        <span class="font-label-sm text-label-sm text-on-surface-variant mt-1">Langsung di Muka</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-space-md pt-3 flex items-center justify-between bg-surface-container-high/40 rounded-lg px-3 py-2">
            <div class="flex items-center gap-2 text-on-surface-variant font-label-sm text-label-sm">
                <span class="material-symbols-outlined text-[18px] text-primary">sync</span>
                <span>Update transaksi terakhir: 3 menit yang lalu</span>
            </div>
            <a class="font-title-md text-title-md text-primary font-semibold hover:underline flex items-center gap-1" href="{{ Route::has('admin.transaksi-pembayaran') ? route('admin.transaksi-pembayaran') : '#' }}">
                <span>Buka Mutasi Transaksi</span>
                <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
            </a>
        </div>
    </div>

    <!-- QUICK WIDGET KETERSEDIAAN KOTAK CEPAT (5 COLS) -->
    <div class="xl:col-span-5 bg-surface-container-lowest rounded-xl p-space-lg shadow-xs flex flex-col justify-between border border-outline-variant/30">
        <div>
            <div class="flex items-center justify-between mb-space-md">
                <div class="flex items-center gap-2">
                    <span class="p-2 rounded-lg bg-secondary-container text-on-secondary-container material-symbols-outlined text-[20px]">shelves</span>
                    <div>
                        <h2 class="font-title-lg text-title-lg text-on-surface font-semibold">Ketersediaan Kotak Cepat</h2>
                        <p class="font-label-sm text-label-sm text-on-surface-variant">Alert Slot Baki &amp; Kotak Hari Ini / Pekan Ini</p>
                    </div>
                </div>
                <a class="font-label-sm text-label-sm text-primary font-semibold hover:underline flex items-center gap-1" href="{{ Route::has('admin.ketersediaan-kotak') ? route('admin.ketersediaan-kotak') : '#' }}">
                    <span>Kelola Stok</span>
                    <span class="material-symbols-outlined text-[16px]">open_in_new</span>
                </a>
            </div>

            <div class="space-y-3.5">
                <!-- Item 1 -->
                <div class="p-3 rounded-lg bg-surface-container-low flex flex-col gap-2">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-primary"></span>
                            <span class="font-title-md text-title-md text-on-surface font-semibold">Luxury Crystal Series</span>
                        </div>
                        <div class="font-label-md text-label-md text-on-surface-variant">
                            <span class="text-[#2d7a4d] font-bold">4 Tersedia</span> / <span class="text-secondary">6 Disewa</span>
                        </div>
                    </div>
                    <div class="w-full bg-surface-container-high h-2 rounded-full overflow-hidden">
                        <div class="bg-primary h-full rounded-full" style="width: 60%"></div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="p-3 rounded-lg bg-surface-container-low flex flex-col gap-2">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-secondary"></span>
                            <span class="font-title-md text-title-md text-on-surface font-semibold">Luxury White Series</span>
                        </div>
                        <div class="font-label-md text-label-md text-on-surface-variant">
                            <span class="text-[#2d7a4d] font-bold">7 Tersedia</span> / <span class="text-secondary">3 Disewa</span>
                        </div>
                    </div>
                    <div class="w-full bg-surface-container-high h-2 rounded-full overflow-hidden">
                        <div class="bg-secondary h-full rounded-full" style="width: 30%"></div>
                    </div>
                </div>

                <!-- Item 3: Alert -->
                <div class="p-3 rounded-lg bg-error-container/40 flex flex-col gap-2 border border-error/20">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-error"></span>
                            <span class="font-title-md text-title-md text-on-surface font-semibold">Hidden Series (Koleksi Kayu Jati)</span>
                        </div>
                        <span class="px-2 py-0.5 rounded-full bg-error text-on-error font-label-sm text-label-sm font-bold animate-pulse">Hampir Penuh!</span>
                    </div>
                    <div class="flex items-center justify-between font-label-md text-label-md">
                        <span class="text-error font-bold">2 Tersedia</span>
                        <span class="text-secondary font-medium">8 Sedang Disewa</span>
                    </div>
                    <div class="w-full bg-surface-container-high h-2 rounded-full overflow-hidden">
                        <div class="bg-error h-full rounded-full" style="width: 80%"></div>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="p-3 rounded-lg bg-surface-container-low flex flex-col gap-2">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-tertiary"></span>
                            <span class="font-title-md text-title-md text-on-surface font-semibold">Rattan / Bohemian Series</span>
                        </div>
                        <div class="font-label-md text-label-md text-on-surface-variant">
                            <span class="text-[#2d7a4d] font-bold">8 Tersedia</span> / <span class="text-secondary">2 Disewa</span>
                        </div>
                    </div>
                    <div class="w-full bg-surface-container-high h-2 rounded-full overflow-hidden">
                        <div class="bg-tertiary h-full rounded-full" style="width: 20%"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-space-md pt-2 flex items-center justify-between">
            <p class="font-label-sm text-label-sm text-on-surface-variant">Total baki terdaftar: <span class="font-bold text-on-surface">40 unit</span></p>
            <a class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-surface-container font-title-md text-title-md text-primary font-semibold hover:bg-surface-container-high transition-colors" href="{{ Route::has('admin.ketersediaan-kotak') ? route('admin.ketersediaan-kotak') : '#' }}">
                <span>Lihat Kalender Slot Kotak</span>
                <span class="material-symbols-outlined text-[16px]">calendar_month</span>
            </a>
        </div>
    </div>
</div>
