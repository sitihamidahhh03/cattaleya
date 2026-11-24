<!-- Filter & Search Console -->
<div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col gap-space-md">
  <div class="flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-space-md">
    <!-- Search Input -->
    <div class="relative flex-1 min-w-[280px]">
      <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-xl">search</span>
      <input class="w-full pl-10 pr-4 py-2.5 bg-surface-container-low text-on-surface placeholder:text-outline text-body-md rounded-lg focus:outline-none focus:bg-surface-container-high transition-colors" id="search-input" placeholder="Cari ID Transaksi, ID Pesanan, atau Nama Pelanggan..." type="text">
    </div>

    <!-- Filters Group -->
    <div class="flex flex-wrap items-center gap-space-sm">
      <!-- Filter: Jenis Pembayaran -->
      <div class="flex items-center gap-1 bg-surface-container-low px-space-xs py-1 rounded-lg">
        <span class="font-label-sm text-label-sm text-outline px-2">Jenis:</span>
        <button class="filter-type-btn px-2.5 py-1 text-label-sm rounded-md bg-surface-container-lowest text-on-surface font-semibold shadow-xs transition-all cursor-pointer" data-type="all">Semua</button>
        <button class="filter-type-btn px-2.5 py-1 text-label-sm rounded-md text-on-surface-variant hover:text-on-surface transition-all cursor-pointer" data-type="DP">DP</button>
        <button class="filter-type-btn px-2.5 py-1 text-label-sm rounded-md text-on-surface-variant hover:text-on-surface transition-all cursor-pointer" data-type="Pelunasan">Pelunasan</button>
        <button class="filter-type-btn px-2.5 py-1 text-label-sm rounded-md text-on-surface-variant hover:text-on-surface transition-all cursor-pointer" data-type="Pembayaran Penuh">Penuh</button>
      </div>

      <!-- Filter: Status Pembayaran -->
      <div class="flex items-center gap-1 bg-surface-container-low px-space-xs py-1 rounded-lg">
        <span class="font-label-sm text-label-sm text-outline px-2">Status:</span>
        <select class="bg-transparent text-label-sm font-semibold text-on-surface py-1 pr-3 focus:outline-none cursor-pointer" id="filter-status">
          <option value="all">Semua Status</option>
          <option value="Berhasil">Berhasil / Lunas</option>
          <option value="Menunggu">Menunggu Verifikasi</option>
          <option value="Kadaluarsa">Kadaluarsa</option>
        </select>
      </div>

      <!-- Filter: Rentang Tanggal Picker Representation -->
      <div class="flex items-center gap-space-xs px-space-md py-2 bg-surface-container-low text-on-surface rounded-lg">
        <span class="material-symbols-outlined text-outline text-base">date_range</span>
        <span class="font-label-sm text-label-sm font-medium">01 Okt 2025 - 15 Okt 2025</span>
      </div>

      <!-- Reset Button -->
      <button class="p-2 text-outline hover:text-on-surface hover:bg-surface-container-high rounded-lg transition-colors cursor-pointer" id="btn-reset-filter" title="Reset Filter">
        <span class="material-symbols-outlined text-xl">filter_alt_off</span>
      </button>
    </div>
  </div>
</div>
