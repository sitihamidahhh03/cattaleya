<!-- Breadcrumbs & Status Banner -->
<div class="flex flex-wrap items-center justify-between gap-4 mb-8">
    <div class="flex items-center gap-2 font-label-md text-label-md text-on-surface-variant">
        <a href="{{ route('pesan-mahar') }}" class="hover:text-primary transition-colors">Pemesanan</a>
        <span class="material-symbols-outlined text-sm">chevron_right</span>
        <span class="hover:text-primary transition-colors">Konfirmasi Invoice</span>
        <span class="material-symbols-outlined text-sm">chevron_right</span>
        <span class="text-primary font-semibold">Gateway Pembayaran</span>
    </div>
    <div class="flex items-center gap-2 bg-surface-container px-3.5 py-1.5 rounded-full shadow-xs border border-outline-variant/30">
        <span class="w-2 h-2 rounded-full bg-primary animate-ping"></span>
        <span class="font-label-sm text-label-sm uppercase tracking-wider text-primary font-semibold">Midtrans Secured Gateway</span>
    </div>
</div>

<!-- Main Status Headline Card -->
<div class="bg-surface-container-low rounded-xl p-6 sm:p-8 mb-10 shadow-xs relative overflow-hidden border border-outline-variant/30">
    <div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-6">
        <div class="space-y-2">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-secondary-container text-on-secondary-fixed-variant font-label-sm text-label-sm uppercase tracking-wider">
                <span class="material-symbols-outlined text-base text-primary">hourglass_top</span>
                <span class="font-semibold">Menunggu Pembayaran (Pending Settlement)</span>
            </div>
            <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Selesaikan Uang Muka Pesanan Anda</h1>
            <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl leading-relaxed">
                Slot tanggal sewa kotak dan mahar Anda telah dikunci sementara. Mohon selesaikan pelunasan deposit sesuai batas waktu yang tertera di samping.
            </p>
        </div>

        <!-- Countdown Counter Capsule -->
        <div class="bg-surface-container-lowest p-5 rounded-xl shadow-md min-w-[260px] flex flex-col items-center sm:items-start border border-outline-variant/20">
            <span class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant flex items-center gap-1.5 font-semibold">
                <span class="material-symbols-outlined text-base text-primary">alarm</span>
                Batas Waktu Pembayaran
            </span>
            <div class="flex items-baseline gap-2 mt-2" id="countdown-timer">
                <span class="font-metric-display text-metric-display text-primary font-bold" id="timer-hours">23</span>
                <span class="font-label-md text-label-md text-on-surface-variant font-medium">Jam</span>
                <span class="font-metric-display text-metric-display text-primary font-bold" id="timer-minutes">57</span>
                <span class="font-label-md text-label-md text-on-surface-variant font-medium">Mnt</span>
                <span class="font-metric-display text-metric-display text-primary font-bold" id="timer-seconds">20</span>
                <span class="font-label-md text-label-md text-on-surface-variant font-medium">Dtk</span>
            </div>
            <span class="font-label-sm text-label-sm text-secondary mt-1">Jatuh Tempo: 23 Oktober 2025 • 15:45 WIB</span>
        </div>
    </div>
</div>
