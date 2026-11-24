<!-- RIGHT COLUMN: LIVE ORDER SUMMARY & MIDTRANS GATEWAY (lg:col-span-5) -->
<div class="lg:col-span-5 space-y-6 lg:sticky lg:top-24">
    <!-- Summary Card -->
    <div class="bg-surface-container-lowest p-6 sm:p-8 rounded-xl shadow-[0_4px_16px_-4px_rgba(90,72,56,0.08),0_16px_32px_-8px_rgba(90,72,56,0.06)] relative overflow-hidden">
        <!-- Top Accent Ribbon -->
        <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-primary-fixed via-primary to-primary-container"></div>
        <div class="flex items-center justify-between pb-4">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary text-xl">receipt_long</span>
                <h3 class="font-title-lg text-title-lg text-on-surface">Ringkasan Pesanan Mahar</h3>
            </div>
            <span class="px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-fixed font-label-sm text-label-sm tracking-wide">Live Preview</span>
        </div>

        <!-- Product Visual Snippet -->
        <div class="relative rounded-xl overflow-hidden mb-5 aspect-[16/10] bg-surface-container shadow-sm group">
            <img id="summaryPreviewImg" alt="Preview Mahar Bespoke Cattaleya" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDQIgBgy9FZUmfx96ecq9LFY94VJvWgFzOUhb24DpodSkmb7yc-CejgA2UcMcZOj1OlqFCcHM-3TS-AzS1TR6bxM40ojGLcRSK8crwuTp1X5r92pPZfhM9RuX7vOGBTzEQFSa4UgAKHY6SdUX0QoQI9uqxbGqSmcVmsHlPVJSwFkBsZzrmxKd1HkLn2BpH4JnzHojHkz5ChDBPpNE-LoPeBTYQxth3sEOh7SW4k5clAajYljXyluq78">
            <div class="absolute inset-0 bg-gradient-to-t from-inverse-surface/80 via-inverse-surface/20 to-transparent flex flex-col justify-end p-4 text-inverse-on-surface">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-sm text-primary-fixed">verified</span>
                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-primary-fixed font-semibold" id="summaryFrameTag">Vitrine 3D Hexagon 40x50</span>
                </div>
                <p class="font-headline-md text-headline-md italic tracking-tight" id="summaryCoupleName">Anindya &amp; Raditya</p>
            </div>
        </div>

        <!-- Specifications Quick Readout -->
        <div class="space-y-3 pb-5 text-on-surface">
            <div class="flex items-center justify-between text-body-md font-body-md py-1">
                <span class="text-on-surface-variant flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-base text-outline">timer</span>
                    Estimasi Pengerjaan
                </span>
                <span class="font-title-md text-title-md text-on-surface font-semibold">14 Hari Kerja</span>
            </div>
            <div class="flex items-center justify-between text-body-md font-body-md py-1">
                <span class="text-on-surface-variant flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-base text-outline">palette</span>
                    Palet Bunga
                </span>
                <span class="font-title-md text-title-md text-on-surface text-right" id="summaryThemeFlower">Champagne Gold Orchid</span>
            </div>
            <div class="flex items-center justify-between text-body-md font-body-md py-1">
                <span class="text-on-surface-variant flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-base text-outline">layers</span>
                    Latar &amp; Akrilik
                </span>
                <span class="font-title-md text-title-md text-on-surface text-right" id="summaryBackgroundStyle">Linen Ivory / Frosted</span>
            </div>
            <div class="flex items-center justify-between text-body-md font-body-md py-1">
                <span class="text-on-surface-variant flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-base text-outline">inventory_2</span>
                    Isi Mahar
                </span>
                <span class="font-title-md text-title-md text-on-surface text-right truncate max-w-[210px]" id="summaryDowryContent">10g LM Antam + Uang Kuno</span>
            </div>
        </div>

        <!-- Total Biaya Display -->
        <div class="p-4 rounded-xl bg-surface-container-low mb-6">
            <div class="flex items-baseline justify-between">
                <span class="font-label-md text-label-md text-secondary uppercase tracking-wider font-semibold">Total Nilai Karya</span>
                <span class="font-metric-display text-metric-display text-primary tracking-tight" id="totalPriceDisplay">Rp 2.450.000</span>
            </div>
            <p class="font-label-sm text-label-sm text-on-surface-variant mt-1">Sudah mencakup preservasi bunga abadi, plat kaligrafi grafir nama, &amp; packing kayu garansi aman.</p>
        </div>

        <!-- Skema Pembayaran Radio Options -->
        <div class="space-y-3 mb-6">
            <span class="block font-label-md text-label-md text-on-surface uppercase tracking-wider font-semibold">Pilih Skema Pembayaran</span>
            <!-- DP 50% Option -->
            <label class="payment-option cursor-pointer block p-4 rounded-xl bg-secondary-container/40 hover:bg-secondary-container/70 transition-all relative">
                <div class="flex items-start gap-3">
                    <input checked="" class="accent-primary mt-1 w-4 h-4" name="paymentScheme" onchange="updatePayAmount('dp')" type="radio" value="dp">
                    <div class="flex-1">
                        <div class="flex items-center justify-between">
                            <span class="font-title-md text-title-md text-on-surface font-bold">Bayar DP (Uang Muka 50%)</span>
                            <span class="font-title-lg text-title-lg text-primary font-bold" id="dpAmountText">Rp 1.225.000</span>
                        </div>
                        <p class="font-label-sm text-label-sm text-on-surface-variant mt-1.5 leading-relaxed">
                            Pelunasan sisa <span class="font-bold text-on-surface" id="dpRemainderText">Rp 1.225.000</span> paling lambat H-3 sebelum jadwal pengambilan atau ekspedisi kurir aman studio.
                        </p>
                    </div>
                </div>
            </label>
            <!-- Full 100% Option -->
            <label class="payment-option cursor-pointer block p-4 rounded-xl bg-surface-container-low hover:bg-surface-container transition-all relative">
                <div class="flex items-start gap-3">
                    <input class="accent-primary mt-1 w-4 h-4" name="paymentScheme" onchange="updatePayAmount('full')" type="radio" value="full">
                    <div class="flex-1">
                        <div class="flex items-center justify-between">
                            <span class="font-title-md text-title-md text-on-surface font-bold">Bayar Penuh (100% Lunas)</span>
                            <span class="font-title-lg text-title-lg text-primary font-bold" id="fullAmountText">Rp 2.450.000</span>
                        </div>
                        <p class="font-label-sm text-label-sm text-on-surface-variant mt-1.5 leading-relaxed">
                            Bebas repot verifikasi ulang, langsung masuk antrean prioritas studio atelier.
                        </p>
                    </div>
                </div>
            </label>
        </div>

        <!-- Primary Midtrans Action Button -->
        <button class="w-full py-4 px-6 rounded-xl bg-primary text-on-primary hover:bg-primary-container transition-colors shadow-[0_4px_16px_rgba(119,86,37,0.25)] flex items-center justify-center gap-3 group cursor-pointer" onclick="submitToMidtrans()" type="button">
            <span class="material-symbols-outlined text-2xl group-hover:scale-110 transition-transform">lock_person</span>
            <div class="text-left">
                <span class="block font-label-sm text-label-sm uppercase tracking-widest text-primary-fixed opacity-90">Pembayaran Terenkripsi 256-bit</span>
                <span class="block font-title-lg text-title-lg leading-tight font-semibold" id="btnPayLabel">Lanjut ke Pembayaran Midtrans • Rp 1.225.000</span>
            </div>
            <span class="material-symbols-outlined text-xl ml-auto">arrow_forward</span>
        </button>

        <!-- Payment Gateways Logos & Trust Badges -->
        <div class="mt-6 pt-5 bg-surface-container-low/50 -mx-6 -mb-6 p-6 rounded-b-xl">
            <div class="flex items-center justify-between text-outline mb-3">
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary">Metode Pembayaran Resmi</span>
                <span class="font-label-sm text-label-sm text-secondary flex items-center gap-1">
                    <span class="material-symbols-outlined text-xs">verified_user</span> Instant Settlement
                </span>
            </div>
            <div class="flex items-center flex-wrap gap-2.5">
                <span class="px-2.5 py-1 rounded bg-surface-container-lowest text-on-surface font-label-sm text-label-sm font-bold shadow-xs">Midtrans Snap</span>
                <span class="px-2.5 py-1 rounded bg-surface-container-lowest text-on-surface font-label-sm text-label-sm font-bold shadow-xs">BCA VA</span>
                <span class="px-2.5 py-1 rounded bg-surface-container-lowest text-on-surface font-label-sm text-label-sm font-bold shadow-xs">Mandiri Livin</span>
                <span class="px-2.5 py-1 rounded bg-surface-container-lowest text-on-surface font-label-sm text-label-sm font-bold shadow-xs">QRIS Semua Bank</span>
                <span class="px-2.5 py-1 rounded bg-surface-container-lowest text-on-surface font-label-sm text-label-sm font-bold shadow-xs">GoPay / ShopeePay</span>
            </div>
        </div>
    </div>

    <!-- WhatsApp Automated Confirmation Banner -->
    <div class="p-5 rounded-xl bg-secondary-container/40 flex items-start gap-4">
        <div class="w-10 h-10 rounded-full bg-primary text-on-primary flex items-center justify-center shrink-0 shadow-sm">
            <span class="material-symbols-outlined text-xl">send_to_mobile</span>
        </div>
        <div>
            <h4 class="font-title-md text-title-md text-on-surface font-bold">WhatsApp Gateway Siaga Otomatis</h4>
            <p class="font-body-md text-body-md text-on-surface-variant mt-1 leading-relaxed">
                Setelah pembayaran berhasil diverifikasi melalui Midtrans, server Cattaleya akan seketika menerbitkan PDF Kuitansi Resmi, Nota Pemesanan, dan link lacak status progres mahar langsung ke nomor WhatsApp Anda.
            </p>
        </div>
    </div>

    <!-- Support Link -->
    <div class="text-center py-2">
        <p class="font-label-sm text-label-sm text-secondary">
            Ada permintaan mahar khusus seperti replika masjid, koin dinar, atau kaligrafi emas timbul?
            <a class="text-primary font-semibold hover:underline inline-flex items-center gap-0.5 ml-1" href="https://wa.me/6282210008899" target="_blank" rel="noopener noreferrer">
                Konsultasi Privat via WhatsApp <span class="material-symbols-outlined text-xs">north_east</span>
            </a>
        </p>
    </div>
</div>
