<!-- Search Banner Section & Input Container -->
<div class="text-center max-w-3xl mx-auto space-y-3 sm:space-y-4">
    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-surface-container text-primary font-label-sm text-label-sm uppercase tracking-widest shadow-xs">
        <span class="material-symbols-outlined text-sm">verified</span>
        <span>Layanan Pelacakan Mandiri</span>
    </div>
    <h1 class="font-headline-lg text-2xl sm:text-3xl md:text-4xl text-on-surface font-medium tracking-tight">
        Lacak Status Pesanan Anda
    </h1>
    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto leading-relaxed">
        Pantau proses pengerjaan mahar dan kesiapan kotak seserahan Anda secara real-time tanpa perlu mendaftar akun.
    </p>
</div>

<!-- Search Input Container -->
<div class="mt-8 sm:mt-10 max-w-2xl mx-auto bg-surface-container-lowest p-6 sm:p-8 rounded-2xl shadow-md border border-outline-variant/30">
    <form class="space-y-4" id="trackingForm" onsubmit="event.preventDefault(); simulateSearch();">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="space-y-1.5">
                <label class="font-label-sm text-label-sm uppercase tracking-wider text-secondary flex items-center gap-1.5 font-medium" for="orderCodeInput">
                    <span class="material-symbols-outlined text-base">receipt_long</span>
                    <span>Kode Pesanan</span>
                </label>
                <input class="w-full px-4 py-3 rounded-xl bg-surface-container-low font-title-md text-title-md text-on-surface placeholder:text-outline-variant focus:outline-none focus:ring-2 focus:ring-primary/40 focus:bg-surface-container-lowest transition-all" id="orderCodeInput" placeholder="Contoh: CTL-2025-090" required="" type="text" value="ORD-2025-090">
            </div>
            <div class="space-y-1.5">
                <label class="font-label-sm text-label-sm uppercase tracking-wider text-secondary flex items-center gap-1.5 font-medium" for="whatsappInput">
                    <span class="material-symbols-outlined text-base">phone_android</span>
                    <span>Nomor WhatsApp</span>
                </label>
                <input class="w-full px-4 py-3 rounded-xl bg-surface-container-low font-title-md text-title-md text-on-surface placeholder:text-outline-variant focus:outline-none focus:ring-2 focus:ring-primary/40 focus:bg-surface-container-lowest transition-all" id="whatsappInput" placeholder="0812-xxxx-xxxx" required="" type="tel" value="081298421102">
            </div>
        </div>
        <button class="w-full mt-2 py-3.5 px-6 rounded-xl bg-primary text-on-primary font-label-md text-label-md tracking-wider uppercase flex items-center justify-center gap-2 hover:bg-primary-container shadow-md transition-all cursor-pointer group" type="submit">
            <span class="material-symbols-outlined text-lg group-hover:scale-110 transition-transform">search</span>
            <span>Cek Status Pesanan</span>
        </button>
    </form>
    <p class="mt-3 text-center font-label-sm text-label-sm text-on-surface-variant flex items-center justify-center gap-1.5">
        <span class="material-symbols-outlined text-sm text-primary">lock</span>
        <span>Data terenkripsi dan hanya dapat diakses dengan kombinasi Kode &amp; WA terdaftar.</span>
    </p>
</div>
