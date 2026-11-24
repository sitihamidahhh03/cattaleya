<!-- Filter & Search Controls -->
<div class="rounded-xl bg-surface-container-lowest p-4 sm:p-5 shadow-sm mb-6 flex flex-col gap-4">
  <div class="flex items-center justify-between">
    <div class="flex items-center gap-2">
      <span class="material-symbols-outlined text-secondary text-[20px]">filter_alt</span>
      <span class="font-title-md text-title-md text-on-surface font-semibold">Pencarian &amp; Filter Transaksi</span>
    </div>
    <button class="font-label-md text-label-md text-primary hover:text-primary-container font-semibold transition-colors cursor-pointer" id="resetFilters">
      Reset Filter
    </button>
  </div>
  <!-- Filter Inputs Grid -->
  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-12 gap-3.5">
    <!-- Search Input -->
    <div class="xl:col-span-4 relative flex items-center">
      <span class="material-symbols-outlined text-on-surface-variant text-[20px] absolute left-3.5 pointer-events-none">search</span>
      <input class="w-full pl-10 pr-4 py-2.5 bg-surface-container-low focus:bg-surface-container-lowest rounded-lg font-body-md text-body-md text-on-surface placeholder:text-on-surface-variant/70 outline-none transition-all" id="searchKeyword" placeholder="Cari TRX-..., ORD-..., atau nama pelanggan..." type="text">
    </div>
    <!-- Payment Type Filter -->
    <div class="xl:col-span-2 relative">
      <select class="w-full py-2.5 px-3 bg-surface-container-low rounded-lg font-body-md text-body-md text-on-surface outline-none cursor-pointer appearance-none" id="filterType">
        <option value="all">Semua Jenis Pembayaran</option>
        <option value="DP">DP (Uang Muka)</option>
        <option value="Pelunasan">Pelunasan</option>
        <option value="Penuh">Pembayaran Penuh (100%)</option>
      </select>
      <span class="material-symbols-outlined text-on-surface-variant text-[18px] absolute right-3 top-3 pointer-events-none">expand_more</span>
    </div>
    <!-- Payment Method Filter -->
    <div class="xl:col-span-2 relative">
      <select class="w-full py-2.5 px-3 bg-surface-container-low rounded-lg font-body-md text-body-md text-on-surface outline-none cursor-pointer appearance-none" id="filterMethod">
        <option value="all">Semua Metode Midtrans</option>
        <option value="BCA">BCA Virtual Account</option>
        <option value="Mandiri">Mandiri Bill Payment</option>
        <option value="BSI">BSI Virtual Account</option>
        <option value="QRIS">QRIS (Gopay / ShopeePay)</option>
      </select>
      <span class="material-symbols-outlined text-on-surface-variant text-[18px] absolute right-3 top-3 pointer-events-none">expand_more</span>
    </div>
    <!-- Payment Status Filter -->
    <div class="xl:col-span-2 relative">
      <select class="w-full py-2.5 px-3 bg-surface-container-low rounded-lg font-body-md text-body-md text-on-surface outline-none cursor-pointer appearance-none" id="filterStatus">
        <option value="all">Semua Status</option>
        <option value="Settlement">Berhasil (Settlement)</option>
        <option value="Pending">Menunggu Pembayaran</option>
        <option value="Expired">Kedaluwarsa (Expired)</option>
      </select>
      <span class="material-symbols-outlined text-on-surface-variant text-[18px] absolute right-3 top-3 pointer-events-none">expand_more</span>
    </div>
    <!-- Date Range Filter -->
    <div class="xl:col-span-2 relative flex items-center">
      <span class="material-symbols-outlined text-on-surface-variant text-[18px] absolute left-3 pointer-events-none">calendar_month</span>
      <input class="w-full pl-9 pr-3 py-2.5 bg-surface-container-low rounded-lg font-body-md text-body-md text-on-surface outline-none cursor-pointer" id="filterDate" type="date" value="2025-05-15">
    </div>
  </div>
</div>
