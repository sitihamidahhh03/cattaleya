<!-- Operational Alert & Buffer Explanation Ribbon -->
<div class="mb-space-lg grid grid-cols-1 xl:grid-cols-12 gap-space-md">
    <!-- Algoritma Proteksi Buffer -->
    <div class="xl:col-span-8 bg-surface-container-low rounded-xl p-space-md shadow-sm flex flex-col sm:flex-row sm:items-center justify-between gap-space-md relative overflow-hidden border border-outline-variant/20">
        <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-secondary-container/30 rounded-full blur-2xl pointer-events-none"></div>
        <div class="flex items-start gap-3.5 relative z-10">
            <div class="w-10 h-10 rounded-xl bg-surface-container flex items-center justify-center text-primary shrink-0 shadow-sm border border-outline-variant/20">
                <span class="material-symbols-outlined text-[24px]">verified_user</span>
            </div>
            <div>
                <div class="flex items-center gap-2">
                    <h3 class="font-title-md text-title-md text-on-surface font-semibold">Protokol Anti Double-Booking Aktif</h3>
                    <span class="px-2 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-semibold">Safe Lock</span>
                </div>
                <p class="font-body-md text-body-md text-on-surface-variant mt-1 leading-relaxed">
                    Sistem secara otomatis mengunci <strong class="text-on-surface font-semibold">H-2 (Inspeksi &amp; Penataan Bunga)</strong> hingga <strong class="text-on-surface font-semibold">H+2 (Pengembalian, Sterilisasi Akrilik &amp; Restorasi)</strong>. Mencegah bentrok jadwal antar pengantin dalam jendela 5 hari kalender.
                </p>
            </div>
        </div>
        <div class="shrink-0 flex items-center gap-2 relative z-10">
            <div class="px-3 py-2 rounded-lg bg-surface-container text-center border border-outline-variant/20">
                <span class="block font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Total Master</span>
                <span class="font-headline-md text-headline-md text-on-surface font-bold">40</span>
                <span class="block font-label-sm text-label-sm text-on-surface-variant">Unit Baki</span>
            </div>
        </div>
    </div>

    <!-- Alert Keterlambatan Pengembalian -->
    <div class="xl:col-span-4 bg-error-container/40 rounded-xl p-space-md shadow-sm flex items-start gap-3 relative border border-error/20">
        <div class="w-10 h-10 rounded-xl bg-error/10 text-error flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined text-[22px]">notification_important</span>
        </div>
        <div class="min-w-0 flex-1">
            <div class="flex items-center justify-between">
                <span class="font-title-md text-title-md text-on-error-container font-semibold">Perhatian Pengembalian</span>
                <span class="px-2 py-0.5 rounded-full bg-error text-on-error font-label-sm text-label-sm font-semibold">1 Kotak Overdue</span>
            </div>
            <p class="font-body-md text-body-md text-on-surface mt-1">
                <strong>ORD-2025-078</strong> (Anisa Rahma) terlambat 1 hari pengembalian 1 baki <em>Hidden Series</em>.
            </p>
            <div class="mt-2 flex items-center gap-2">
                <a class="inline-flex items-center gap-1 font-label-sm text-label-sm text-error font-semibold hover:underline" href="https://wa.me/6281298442110?text=Halo%20Kak%20Anisa%2C%20pengingat%20pengembalian%20kotak%20seserahan%20Cattaleya..." target="_blank">
                    <span class="material-symbols-outlined text-[16px]">call</span>
                    <span>Hubungi WO via WA</span>
                </a>
            </div>
        </div>
    </div>
</div>
