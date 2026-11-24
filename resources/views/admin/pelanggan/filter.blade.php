<!-- Interactive Filter & Search Bar -->
<div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm mb-space-md border border-outline-variant/20">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-space-sm items-center">
        <!-- Search Input -->
        <div class="md:col-span-5 relative">
            <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-secondary text-[20px]">search</span>
            <input class="w-full pl-10 pr-4 py-2.5 rounded-lg bg-surface-container text-on-surface placeholder:text-on-surface-variant font-body-md text-body-md focus:outline-none focus:bg-surface-container-high transition-all border border-outline-variant/20" id="searchInput" placeholder="Cari nama pengantin, nomor WhatsApp, atau kota domisili..." type="text">
        </div>

        <!-- Filter Status Aktivitas -->
        <div class="md:col-span-4 flex items-center gap-1.5 bg-surface-container-low p-1 rounded-lg overflow-x-auto border border-outline-variant/20">
            <button class="filter-tab px-3 py-1.5 rounded-md font-label-md text-label-md bg-surface-container-lowest text-primary shadow-xs whitespace-nowrap font-semibold cursor-pointer" onclick="setCustomerFilter('all', this)" type="button">Semua (148)</button>
            <button class="filter-tab px-3 py-1.5 rounded-md font-label-md text-label-md text-on-surface-variant hover:text-on-surface whitespace-nowrap cursor-pointer" onclick="setCustomerFilter('active', this)" type="button">Pesanan Aktif (36)</button>
            <button class="filter-tab px-3 py-1.5 rounded-md font-label-md text-label-md text-on-surface-variant hover:text-on-surface whitespace-nowrap cursor-pointer" onclick="setCustomerFilter('completed', this)" type="button">Selesai / Arsip (112)</button>
        </div>

        <!-- Sort Control -->
        <div class="md:col-span-3 flex items-center justify-end gap-2">
            <label class="font-label-sm text-label-sm text-secondary uppercase whitespace-nowrap font-semibold" for="sortSelect">Urutkan:</label>
            <div class="relative w-full max-w-[200px]">
                <select class="w-full appearance-none pl-3 pr-8 py-2 rounded-lg bg-surface-container font-body-md text-body-md text-on-surface focus:outline-none cursor-pointer border border-outline-variant/20" id="sortSelect" onchange="applySorting()">
                    <option value="recent">Pesanan Terbaru</option>
                    <option value="orders">Pesanan Terbanyak</option>
                    <option value="az">Abjad A - Z</option>
                    <option value="spending">Akumulasi Tertinggi</option>
                </select>
                <span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-secondary pointer-events-none text-[18px]">expand_more</span>
            </div>
        </div>
    </div>
</div>
