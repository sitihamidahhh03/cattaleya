<!-- Bento Grid of 8 Aggregated KPI Metrics -->
<div class="flex flex-col gap-space-md">
    <div class="flex items-center justify-between pt-space-xs">
        <div class="flex items-center gap-space-sm">
            <div class="w-1.5 h-4 bg-primary rounded-full"></div>
            <h2 class="font-title-lg text-title-lg text-on-surface">Akumulasi Kinerja &amp; Kas Periode Berjalan</h2>
        </div>
        <span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Status: Final Audited</span>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-md">
        <!-- 1. Total Pesanan -->
        <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col justify-between transition-transform duration-200 hover:-translate-y-0.5">
            <div class="flex items-start justify-between">
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline font-semibold">Total Pesanan</span>
                <div class="w-8 h-8 rounded-full bg-secondary-container flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-lg">shopping_bag</span>
                </div>
            </div>
            <div class="mt-space-sm">
                <div class="font-metric-display text-metric-display text-on-surface leading-tight">184 <span class="font-title-md text-title-md font-normal text-on-surface-variant">Pesanan</span></div>
                <div class="flex items-center gap-1 mt-1 text-on-surface-variant font-label-md text-label-md">
                    <span class="material-symbols-outlined text-xs text-primary">verified</span>
                    <span>Semua pesanan akad &amp; resepsi</span>
                </div>
            </div>
        </div>

        <!-- 2. Total Pesanan Mahar -->
        <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col justify-between transition-transform duration-200 hover:-translate-y-0.5">
            <div class="flex items-start justify-between">
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline font-semibold">Total Pesanan Mahar</span>
                <div class="w-8 h-8 rounded-full bg-surface-container-high flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-lg">auto_awesome</span>
                </div>
            </div>
            <div class="mt-space-sm">
                <div class="font-metric-display text-metric-display text-on-surface leading-tight">112 <span class="font-title-md text-title-md font-normal text-on-surface-variant">Paket</span></div>
                <div class="flex items-center gap-1 mt-1 text-on-surface-variant font-label-md text-label-md">
                    <span class="text-primary font-bold">60.9%</span>
                    <span>dari total volume pesanan</span>
                </div>
            </div>
        </div>

        <!-- 3. Total Penyewaan Kotak -->
        <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col justify-between transition-transform duration-200 hover:-translate-y-0.5">
            <div class="flex items-start justify-between">
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline font-semibold">Total Sewa Kotak</span>
                <div class="w-8 h-8 rounded-full bg-surface-container-high flex items-center justify-center text-secondary">
                    <span class="material-symbols-outlined text-lg">featured_seasonal_and_gifts</span>
                </div>
            </div>
            <div class="mt-space-sm">
                <div class="font-metric-display text-metric-display text-on-surface leading-tight">72 <span class="font-title-md text-title-md font-normal text-on-surface-variant">Set</span></div>
                <div class="flex items-center gap-1 mt-1 text-on-surface-variant font-label-md text-label-md">
                    <span>Rerata 6 - 9 baki per set</span>
                </div>
            </div>
        </div>

        <!-- 4. Total Transaksi -->
        <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col justify-between transition-transform duration-200 hover:-translate-y-0.5">
            <div class="flex items-start justify-between">
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline font-semibold">Total Transaksi</span>
                <div class="w-8 h-8 rounded-full bg-primary-fixed flex items-center justify-center text-on-primary-fixed">
                    <span class="material-symbols-outlined text-lg">receipt_long</span>
                </div>
            </div>
            <div class="mt-space-sm">
                <div class="font-metric-display text-metric-display text-on-surface leading-tight">216 <span class="font-title-md text-title-md font-normal text-on-surface-variant">Transaksi</span></div>
                <div class="flex items-center gap-1 mt-1 text-on-surface-variant font-label-md text-label-md">
                    <span>Termasuk termin pembayaran</span>
                </div>
            </div>
        </div>

        <!-- 5. Total Pembayaran Masuk (Highlighted) -->
        <div class="relative overflow-hidden bg-primary text-on-primary rounded-xl p-space-md shadow-md flex flex-col justify-between">
            <div class="absolute -right-4 -top-4 w-24 h-24 rounded-full bg-primary-container/40 pointer-events-none"></div>
            <div class="flex items-start justify-between relative z-10">
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-primary-fixed font-semibold">Total Pembayaran Masuk</span>
                <div class="w-8 h-8 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center">
                    <span class="material-symbols-outlined text-lg">account_balance_wallet</span>
                </div>
            </div>
            <div class="mt-space-sm relative z-10">
                <div class="font-metric-display text-metric-display text-on-primary leading-tight">Rp 148.850.000</div>
                <div class="flex items-center gap-1 mt-1 text-primary-fixed font-label-md text-label-md">
                    <span class="material-symbols-outlined text-xs">trending_up</span>
                    <span>Akumulasi kas bersih terverifikasi</span>
                </div>
            </div>
        </div>

        <!-- 6. Total DP (Down Payment) -->
        <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col justify-between transition-transform duration-200 hover:-translate-y-0.5">
            <div class="flex items-start justify-between">
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline font-semibold">Total Uang Muka (DP)</span>
                <div class="w-8 h-8 rounded-full bg-surface-container-high flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-lg">savings</span>
                </div>
            </div>
            <div class="mt-space-sm">
                <div class="font-headline-lg text-headline-lg text-on-surface leading-tight font-semibold">Rp 42.600.000</div>
                <div class="flex items-center gap-1 mt-1 text-on-surface-variant font-label-md text-label-md">
                    <span class="w-2 h-2 rounded-full bg-secondary"></span>
                    <span>Komitmen termin awal 30%-50%</span>
                </div>
            </div>
        </div>

        <!-- 7. Total Pelunasan -->
        <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col justify-between transition-transform duration-200 hover:-translate-y-0.5">
            <div class="flex items-start justify-between">
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline font-semibold">Total Pelunasan</span>
                <div class="w-8 h-8 rounded-full bg-surface-container-high flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-lg">task_alt</span>
                </div>
            </div>
            <div class="mt-space-sm">
                <div class="font-headline-lg text-headline-lg text-on-surface leading-tight font-semibold">Rp 38.250.000</div>
                <div class="flex items-center gap-1 mt-1 text-on-surface-variant font-label-md text-label-md">
                    <span class="w-2 h-2 rounded-full bg-outline"></span>
                    <span>Pelunasan H-7 serah terima</span>
                </div>
            </div>
        </div>

        <!-- 8. Total Pembayaran Penuh -->
        <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col justify-between transition-transform duration-200 hover:-translate-y-0.5">
            <div class="flex items-start justify-between">
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline font-semibold">Total Bayar Penuh (100%)</span>
                <div class="w-8 h-8 rounded-full bg-secondary-container flex items-center justify-center text-secondary">
                    <span class="material-symbols-outlined text-lg">price_check</span>
                </div>
            </div>
            <div class="mt-space-sm">
                <div class="font-headline-lg text-headline-lg text-on-surface leading-tight font-semibold">Rp 68.000.000</div>
                <div class="flex items-center gap-1 mt-1 text-on-surface-variant font-label-md text-label-md">
                    <span class="w-2 h-2 rounded-full bg-primary"></span>
                    <span>Transaksi lunas langsung saat akad</span>
                </div>
            </div>
        </div>
    </div>
</div>
