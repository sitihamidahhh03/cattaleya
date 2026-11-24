<!-- Salutation & Live Monitoring Header Banner -->
<section class="relative overflow-hidden rounded-xl bg-surface-container-low p-space-lg md:p-space-xl shadow-sm">
    <div class="absolute -right-12 -top-12 w-64 h-64 rounded-full bg-secondary-container/40 blur-3xl pointer-events-none"></div>
    <div class="absolute right-1/4 -bottom-10 w-44 h-44 rounded-full bg-primary-fixed/20 blur-2xl pointer-events-none"></div>
    <div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-space-md">
        <div class="flex flex-col gap-space-xs max-w-3xl">
            <h1 class="font-display-lg text-display-lg-mobile md:text-display-lg text-on-surface tracking-tight leading-tight">
                Selamat Datang, {{ Auth::user()->name ?? 'Owner Bisnis' }}
            </h1>
            <p class="font-body-lg text-body-lg text-on-surface-variant">
                Ringkasan operasional dan performa pemesanan mahar serta penyewaan kotak seserahan secara <span class="font-title-md text-on-surface">real-time</span>.
            </p>
        </div>
    </div>
</section>
