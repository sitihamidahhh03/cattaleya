<!-- CARD 5: Riwayat Notifikasi WhatsApp Gateway (FITUR WA LOG) -->
<div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-xs border border-outline-variant/30">
    <div class="flex items-center justify-between pb-space-sm mb-space-md border-b border-surface-container-high/60">
        <div class="flex items-center gap-space-sm">
            <div class="w-8 h-8 rounded-lg bg-surface-container text-[#2d7a4d] flex items-center justify-center">
                <span class="material-symbols-outlined text-[18px]">cell_tower</span>
            </div>
            <div>
                <p class="font-label-sm text-label-sm text-secondary uppercase tracking-widest font-semibold">Gateway Log</p>
                <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Riwayat Notifikasi WhatsApp</h3>
            </div>
        </div>
        <span class="font-label-sm text-label-sm text-on-surface-variant font-mono">+62 812-9842-1102</span>
    </div>

    <div class="flex flex-col gap-space-sm">
        <!-- Log 1: DP Berhasil -->
        <div class="p-space-sm rounded-lg bg-surface-container-low flex items-start gap-space-sm border border-outline-variant/20">
            <span class="material-symbols-outlined text-[#2d7a4d] text-[18px] mt-0.5">done_all</span>
            <div class="flex-1">
                <div class="flex items-center justify-between mb-0.5">
                    <span class="font-title-md text-title-md text-on-surface font-semibold">Kuitansi Pembayaran DP Terkirim</span>
                    <span class="font-label-sm text-label-sm text-on-surface-variant">18 Apr 16:30</span>
                </div>
                <p class="font-body-md text-body-md text-on-surface-variant">
                    Template: <span class="font-mono text-primary font-medium">dp_confirmation_v2</span>. Menampilkan tautan invoice PDF &amp; ringkasan akad sewa 8 baki.
                </p>
            </div>
        </div>
        <!-- Log 2: Update Florist -->
        <div class="p-space-sm rounded-lg bg-surface-container-low flex items-start gap-space-sm border border-outline-variant/20">
            <span class="material-symbols-outlined text-[#2d7a4d] text-[18px] mt-0.5">done_all</span>
            <div class="flex-1">
                <div class="flex items-center justify-between mb-0.5">
                    <span class="font-title-md text-title-md text-on-surface font-semibold">Pratinjau Hasil Rangkaian Florist</span>
                    <span class="font-label-sm text-label-sm text-on-surface-variant">12 Mei 11:15</span>
                </div>
                <p class="font-body-md text-body-md text-on-surface-variant">
                    Template: <span class="font-mono text-primary font-medium">florist_preview_link</span>. Mengirim 3 foto baki &amp; konfirmasi warna bunga Champagne.
                </p>
            </div>
        </div>
        <!-- Log 3: Pelunasan & Siap Ambil -->
        <div class="p-space-sm rounded-lg bg-surface-container-low flex items-start gap-space-sm border border-outline-variant/20">
            <span class="material-symbols-outlined text-[#2d7a4d] text-[18px] mt-0.5">done_all</span>
            <div class="flex-1">
                <div class="flex items-center justify-between mb-0.5">
                    <span class="font-title-md text-title-md text-on-surface font-semibold">Konfirmasi Lunas &amp; Pengambilan</span>
                    <span class="font-label-sm text-label-sm text-on-surface-variant">14 Mei 09:05</span>
                </div>
                <p class="font-body-md text-body-md text-on-surface-variant">
                    Template: <span class="font-mono text-primary font-medium">pickup_ready_with_pin</span>. Kode serah terima PIN: <strong class="text-on-surface">#4491</strong>.
                </p>
            </div>
        </div>
    </div>

    <button class="w-full mt-space-md py-2.5 px-3 rounded-lg bg-surface-container-high hover:bg-surface-container text-on-surface font-title-md text-title-md text-center transition-colors flex items-center justify-center gap-2 cursor-pointer border border-outline-variant/20" id="btn-quick-wa" type="button">
        <span class="material-symbols-outlined text-[16px] text-[#2d7a4d]">send</span>
        <span>Kirim Notifikasi Kustom via Gateway</span>
    </button>
</div>
