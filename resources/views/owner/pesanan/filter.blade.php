<!-- Master Filter Panel (Tactile Luxury Canvas) -->
<div class="p-space-lg bg-surface-container-lowest rounded-xl shadow-[0_2px_12px_rgba(90,72,56,0.03)] flex flex-col gap-space-md">
    <div class="flex items-center justify-between pb-space-xs">
        <div class="flex items-center gap-space-xs text-on-surface">
            <span class="material-symbols-outlined text-primary text-lg">tune</span>
            <span class="font-title-md text-title-md font-semibold">Filter &amp; Kurasi Pesanan</span>
        </div>
        <span class="font-label-sm text-label-sm text-outline tracking-wider uppercase">Pencarian Cepat Berlaku Realtime</span>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-space-md items-end">
        <!-- Search Box -->
        <div class="flex flex-col gap-1.5 lg:col-span-1">
            <label class="font-label-sm text-label-sm text-on-surface-variant font-medium" for="searchInput">Cari ID / Pelanggan</label>
            <div class="relative flex items-center">
                <span class="material-symbols-outlined absolute left-3 text-outline text-lg pointer-events-none">search</span>
                <input class="w-full bg-surface-container-low text-on-surface font-body-md text-body-md pl-9 pr-3 py-2 rounded-lg outline-none focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#775625] transition-all placeholder:text-outline/70" id="searchInput" placeholder="Contoh: ORD-090 atau Maya..." type="text">
            </div>
        </div>

        <!-- Filter 1: Jenis Pesanan -->
        <div class="flex flex-col gap-1.5">
            <label class="font-label-sm text-label-sm text-on-surface-variant font-medium" for="orderTypeFilter">Jenis Pesanan</label>
            <div class="relative flex items-center">
                <select class="w-full bg-surface-container-low text-on-surface font-body-md text-body-md px-3 py-2 rounded-lg appearance-none outline-none focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#775625] transition-all pr-8 cursor-pointer" id="orderTypeFilter">
                    <option value="all">Semua Jenis</option>
                    <option value="Mahar Pernikahan">Mahar Pernikahan</option>
                    <option value="Sewa Kotak Seserahan">Penyewaan Kotak Seserahan</option>
                    <option value="Paket Bundling">Paket Bundling</option>
                </select>
                <span class="material-symbols-outlined absolute right-2.5 text-outline text-base pointer-events-none">expand_more</span>
            </div>
        </div>

        <!-- Filter 2: Status Pembayaran -->
        <div class="flex flex-col gap-1.5">
            <label class="font-label-sm text-label-sm text-on-surface-variant font-medium" for="paymentStatusFilter">Status Pembayaran</label>
            <div class="relative flex items-center">
                <select class="w-full bg-surface-container-low text-on-surface font-body-md text-body-md px-3 py-2 rounded-lg appearance-none outline-none focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#775625] transition-all pr-8 cursor-pointer" id="paymentStatusFilter">
                    <option value="all">Semua Status Pembayaran</option>
                    <option value="Lunas">Lunas</option>
                    <option value="DP">DP (Uang Muka)</option>
                    <option value="Belum Bayar">Belum Bayar</option>
                </select>
                <span class="material-symbols-outlined absolute right-2.5 text-outline text-base pointer-events-none">expand_more</span>
            </div>
        </div>

        <!-- Filter 3: Status Pesanan -->
        <div class="flex flex-col gap-1.5">
            <label class="font-label-sm text-label-sm text-on-surface-variant font-medium" for="orderStatusFilter">Status Pesanan</label>
            <div class="relative flex items-center">
                <select class="w-full bg-surface-container-low text-on-surface font-body-md text-body-md px-3 py-2 rounded-lg appearance-none outline-none focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#775625] transition-all pr-8 cursor-pointer" id="orderStatusFilter">
                    <option value="all">Semua Status</option>
                    <option value="Diproses">Diproses</option>
                    <option value="Siap Diambil">Siap Diambil</option>
                    <option value="Sedang Disewa">Sedang Disewa</option>
                    <option value="Selesai">Selesai</option>
                    <option value="Menunggu Konfirmasi">Menunggu Konfirmasi</option>
                    <option value="Dibatalkan">Dibatalkan</option>
                </select>
                <span class="material-symbols-outlined absolute right-2.5 text-outline text-base pointer-events-none">expand_more</span>
            </div>
        </div>

        <!-- Filter 4: Tanggal Acara / Periode -->
        <div class="flex flex-col gap-1.5">
            <label class="font-label-sm text-label-sm text-on-surface-variant font-medium" for="eventDateFilter">Tanggal Acara</label>
            <div class="relative flex items-center">
                <span class="material-symbols-outlined absolute left-3 text-outline text-base pointer-events-none">calendar_month</span>
                <input class="w-full bg-surface-container-low text-on-surface font-body-md text-body-md pl-9 pr-2 py-2 rounded-lg outline-none focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#775625] transition-all text-sm cursor-pointer" id="eventDateFilter" type="date">
            </div>
        </div>
    </div>
</div>
