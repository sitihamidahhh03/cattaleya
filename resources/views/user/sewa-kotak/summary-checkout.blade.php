<!-- STEP 5: Ringkasan Sewa & Midtrans Gateway -->
<div class="bg-surface-container-lowest p-6 sm:p-7 rounded-2xl shadow-md border border-outline-variant/30 space-y-6">
    <h2 class="font-title-lg text-title-lg text-on-surface pb-3 border-b border-outline-variant/30 font-semibold">Ringkasan Biaya Reservasi</h2>
    <div class="space-y-3 font-body-md text-body-md">
        <div class="flex justify-between items-start">
            <div>
                <div class="text-on-surface font-medium" id="summary-package-title">Paket 4 Kotak Luxury Crystal</div>
                <div class="text-xs text-on-surface-variant" id="summary-unit-calc">4 Kotak × Rp 200.000</div>
            </div>
            <div class="font-title-md text-title-md text-on-surface font-semibold" id="summary-rental-subtotal">Rp 800.000</div>
        </div>
        <div class="flex justify-between items-start">
            <div>
                <div class="text-on-surface flex items-center gap-1.5 font-medium">
                    <span>Biaya Jaminan / Deposit Kotak</span>
                    <span class="material-symbols-outlined text-outline text-sm" title="Deposit akan dikembalikan 100% setelah baki dikembalikan dalam kondisi baik">help</span>
                </div>
                <div class="text-xs text-secondary font-medium">100% Dapat Dikembalikan (Refundable)</div>
            </div>
            <div class="font-title-md text-title-md text-on-surface font-semibold">Rp 500.000</div>
        </div>
        <div class="pt-3 border-t border-outline-variant/30 flex justify-between items-baseline">
            <span class="font-title-md text-title-md text-on-surface font-bold">Total Nilai Transaksi</span>
            <span class="font-headline-md text-headline-md text-primary font-bold" id="summary-total-all">Rp 1.300.000</span>
        </div>
    </div>

    <!-- Payment Mode Selector (Midtrans Rules) -->
    <div class="space-y-2.5 pt-2">
        <label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider block font-medium">Opsi Pembayaran Midtrans</label>
        <div class="grid grid-cols-2 gap-3" id="pay-mode-selector">
            <button class="pay-btn p-3.5 rounded-xl text-left transition-all bg-surface-container ring-2 ring-primary" data-pay="full" type="button">
                <div class="flex items-center justify-between mb-1">
                    <span class="font-title-md text-title-md text-on-surface font-bold">Bayar Penuh</span>
                    <span class="w-4 h-4 rounded-full bg-primary flex items-center justify-center text-on-primary">
                        <span class="material-symbols-outlined text-[10px]">check</span>
                    </span>
                </div>
                <div class="font-label-sm text-label-sm text-primary font-bold" id="pay-full-val">Rp 1.300.000</div>
                <div class="text-[11px] text-on-surface-variant mt-0.5">Sewa + Deposit Langsung</div>
            </button>
            <button class="pay-btn p-3.5 rounded-xl text-left transition-all bg-surface-container-low hover:bg-surface-container" data-pay="dp" type="button">
                <div class="flex items-center justify-between mb-1">
                    <span class="font-title-md text-title-md text-on-surface font-bold">Bayar DP (50%)</span>
                    <span class="w-4 h-4 rounded-full border border-outline-variant hidden check-indicator"></span>
                </div>
                <div class="font-label-sm text-label-sm text-primary font-bold" id="pay-dp-val">Rp 400.000</div>
                <div class="text-[11px] text-on-surface-variant mt-0.5">Pelunasan saat serah terima</div>
            </button>
        </div>
    </div>

    <!-- Payment Methods Supported Icons Preview -->
    <div class="flex items-center justify-between px-3 py-2 rounded-lg bg-surface-container-low text-xs text-on-surface-variant">
        <span>Metode: BCA, Mandiri, QRIS, Kartu Kredit</span>
        <span class="font-label-sm text-label-sm uppercase text-secondary font-bold">Midtrans Snap</span>
    </div>

    <!-- Action Button -->
    <button class="w-full py-4 px-6 rounded-xl bg-primary hover:bg-primary-container text-on-primary font-title-md text-title-md flex items-center justify-center gap-3 transition-colors shadow-lg shadow-primary/20 group cursor-pointer" id="btn-submit" type="button">
        <span class="material-symbols-outlined text-xl group-hover:scale-110 transition-transform">lock</span>
        <span>Konfirmasi &amp; Lanjut Pembayaran Midtrans</span>
    </button>
    <p class="font-label-sm text-label-sm text-center text-on-surface-variant leading-relaxed">
        Dengan mengonfirmasi, slot unit baki Anda akan diamankan secara eksklusif selama 15 menit melalui antrean pembayaran otomatis Midtrans.
    </p>
</div>
