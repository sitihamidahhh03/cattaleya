<header class="fixed top-0 left-72 right-0 h-20 bg-surface/90 backdrop-blur-xl z-40 shadow-[0_1px_8px_rgba(0,0,0,0.04)] border-b border-surface-container-high/60">
    <div class="h-20 w-full px-space-lg flex items-center justify-between gap-space-md">
        <!-- Title & Subtitle -->
        <div class="flex flex-col justify-center min-w-0">
            <div class="flex items-center gap-space-xs">
                <span class="font-headline-md text-headline-md text-on-surface tracking-tight font-medium">Cattaleya</span>
                <span class="font-title-md text-title-md text-secondary font-normal">— Sistem Operasional Admin</span>
            </div>
            <p class="font-label-md text-label-md text-on-surface-variant truncate">Pengelolaan Pesanan, Ketersediaan &amp; Pelanggan</p>
        </div>

        <!-- Right Tools & Profile -->
        <div class="flex items-center gap-space-md flex-shrink-0">
            <!-- Integration Status Badges -->
            <div class="hidden xl:flex items-center gap-space-sm">
                <div class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface shadow-[0_1px_4px_rgba(0,0,0,0.02)]">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#348b58] opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-[#2d7a4d]"></span>
                    </span>
                    <span class="font-medium">WhatsApp Gateway Active</span>
                </div>
                <div class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface shadow-[0_1px_4px_rgba(0,0,0,0.02)]">
                    <span class="w-2 h-2 rounded-full bg-[#2d7a4d]"></span>
                    <span class="font-medium">Midtrans Webhook Active</span>
                </div>
            </div>

            <!-- Date Display -->
            <div class="hidden lg:flex items-center gap-1.5 text-on-surface-variant font-label-md text-label-md px-3 py-1.5 rounded-lg bg-surface-container-low border border-outline-variant/20">
                <span class="material-symbols-outlined text-[18px] text-secondary">calendar_today</span>
                <span>{{ \Carbon\Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y') }} WIB</span>
            </div>

            <!-- Notification Bell -->
            <div class="relative flex items-center">
                <button aria-label="Notifikasi Operasional" class="p-2 rounded-full text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors relative cursor-pointer" type="button" onclick="alert('Tidak ada notifikasi mendesak baru hari ini.');">
                    <span class="material-symbols-outlined text-[22px]">notifications</span>
                    <span class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-error ring-2 ring-surface"></span>
                </button>
            </div>

            <div class="h-6 w-px bg-surface-container-high hidden sm:block"></div>

            <!-- User Avatar & Identity -->
            <div class="flex items-center gap-2.5 pl-1">
                <img alt="Profile" class="w-8 h-8 rounded-full object-cover ring-1 ring-outline-variant/30" src="https://lh3.googleusercontent.com/aida/AEtjO1UGcZm4X8zMfBUj21YAZFUgZgOp3l8W8dIxOP0TbhjPF6kk1kkISDTy1CyA8CSa8zOO-eTnCJtJmzfaPbZHIYzN5Q68sb_6tr0Cf3xZc4RUL_0POh5mGXB2oFiXmSA5qx0yMjaqoDIEci0U5QZeJ6Q7gsU556iMSup6-Ni1Otg_5ds_xxjvDx6dHnaxb1KE7orQ061rMTFfChbCon5fndr99-vHHTCOqh_7iZO0GrphDKFsc3LR159ZWrOnII7uWPF8TA0fXDkpuQ">
                <div class="hidden md:flex flex-col text-left">
                    <span class="font-title-md text-title-md text-on-surface leading-tight font-medium">{{ Auth::user()->name ?? 'Siti Sarah' }}</span>
                    <span class="font-label-sm text-label-sm text-secondary">
                        {{ (Auth::user()->role ?? 'admin') === 'owner' ? 'Owner Bisnis' : 'Operasional' }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>
