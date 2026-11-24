<!-- Filter & Search Console -->
<div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-xs space-y-space-md border border-outline-variant/30">
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-2">
            <span class="material-symbols-outlined text-primary text-[20px]">filter_alt</span>
            <h3 class="font-title-lg text-title-lg text-on-surface font-semibold">Pencarian &amp; Parameter Filter Pesanan</h3>
        </div>
        <span class="font-label-sm text-label-sm text-secondary">Pembaruan otomatis tiap 60 detik</span>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-space-md">
        <!-- Search bar -->
        <div class="lg:col-span-4">
            <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1.5" for="searchInput">Cari ID Pesanan / Pelanggan</label>
            <div class="relative">
                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-on-surface-variant text-[20px]">search</span>
                <input class="w-full pl-10 pr-4 py-2.5 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface placeholder:text-on-surface-variant/60 focus:outline-none focus:bg-surface-container transition-all border border-outline-variant/20" id="searchInput" placeholder="Contoh: ORD-2025-090 atau Anindya..." type="text">
            </div>
        </div>
        <!-- Filter Jenis Pesanan -->
        <div class="lg:col-span-2">
            <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1.5" for="typeFilter">Jenis Pesanan</label>
            <select class="w-full px-3.5 py-2.5 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container transition-all cursor-pointer border border-outline-variant/20" id="typeFilter">
                <option value="all">Semua Jenis</option>
                <option value="mahar">Mahar Pernikahan</option>
                <option value="sewa">Sewa Kotak Seserahan</option>
                <option value="bundling">Paket Bundling (Mahar + Kotak)</option>
            </select>
        </div>
        <!-- Filter Status Pembayaran -->
        <div class="lg:col-span-2">
            <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1.5" for="paymentFilter">Status Pembayaran</label>
            <select class="w-full px-3.5 py-2.5 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container transition-all cursor-pointer border border-outline-variant/20" id="paymentFilter">
                <option value="all">Semua Status</option>
                <option value="menunggu_dp">Menunggu DP</option>
                <option value="dp">DP Terbayar (50%)</option>
                <option value="lunas">Lunas Penuh</option>
            </select>
        </div>
        <!-- Filter Status Pesanan -->
        <div class="lg:col-span-2">
            <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1.5" for="statusFilter">Status Produksi / Sewa</label>
            <select class="w-full px-3.5 py-2.5 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container transition-all cursor-pointer border border-outline-variant/20" id="statusFilter">
                <option value="all">Semua Status Operasional</option>
                <option value="menunggu_pembayaran">Menunggu Pembayaran</option>
                <option value="antrean_desain">Dalam Antrean Desain</option>
                <option value="pengerjaan_florist">Pengerjaan Florist / Dekorasi</option>
                <option value="siap_ambil">Siap Diambil / Kirim</option>
                <option value="sedang_disewa">Sedang Disewa</option>
                <option value="selesai">Selesai</option>
                <option value="dibatalkan">Dibatalkan</option>
            </select>
        </div>
        <!-- Date Range Filter -->
        <div class="lg:col-span-2">
            <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1.5" for="dateRangeInput">Rentang Tanggal Acara</label>
            <div class="relative">
                <input class="w-full pl-3.5 pr-8 py-2.5 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container transition-all cursor-pointer border border-outline-variant/20" id="dateRangeInput" type="text" value="Mei 2025 - Nov 2025">
                <span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-secondary text-[18px] pointer-events-none">calendar_month</span>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-between pt-2">
        <div class="flex items-center gap-2 text-on-surface-variant font-label-sm text-label-sm">
            <span class="material-symbols-outlined text-[16px] text-primary">info</span>
            <span>Daftar pesanan diurutkan prioritas berdasarkan tanggal acara terdekat.</span>
        </div>
        <div class="flex items-center gap-space-sm">
            <button class="px-4 py-2 rounded-lg bg-surface-container text-secondary hover:text-on-surface hover:bg-surface-container-high font-title-md text-title-md transition-all cursor-pointer" onclick="resetFilter()" type="button">
                Reset
            </button>
            <button class="px-5 py-2 rounded-lg bg-primary-container text-on-primary-container hover:bg-primary font-title-md text-title-md transition-all shadow-xs cursor-pointer" onclick="applyFilter()" type="button">
                Terapkan Filter
            </button>
        </div>
    </div>
</div>
