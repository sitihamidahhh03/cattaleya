<!-- SECTION 5: TABEL DAFTAR PESANAN TERBARU (OPERASIONAL ADMIN) -->
<div class="bg-surface-container-lowest rounded-xl shadow-xs overflow-hidden flex flex-col border border-outline-variant/30">
    <div class="p-space-lg flex flex-col sm:flex-row sm:items-center justify-between gap-space-md bg-surface-container-low/50 border-b border-surface-container-high/60">
        <div>
            <div class="flex items-center gap-2">
                <span class="p-2 rounded-lg bg-primary-container text-on-primary-container material-symbols-outlined text-[20px]">task</span>
                <h2 class="font-headline-md text-headline-md text-on-surface font-semibold">Antrean Pesanan Operasional Terkini</h2>
            </div>
            <p class="font-body-md text-body-md text-on-surface-variant mt-0.5">
                Daftar 6 pesanan terkini yang memerlukan tindakan kurasi florist, konfirmasi pembayaran, atau koordinasi pengiriman.
            </p>
        </div>

        <!-- Filter Quick Tabs -->
        <div class="flex items-center gap-1 bg-surface-container p-1 rounded-lg self-start sm:self-auto overflow-x-auto" id="orderFilterTabs">
            <button class="px-3 py-1.5 rounded bg-surface-container-lowest text-primary font-title-md text-title-md font-semibold shadow-xs cursor-pointer filter-tab active" data-filter="all" type="button">Semua (6)</button>
            <button class="px-3 py-1.5 rounded hover:bg-surface-container-lowest/60 text-secondary font-title-md text-title-md transition-colors cursor-pointer filter-tab" data-filter="process" type="button">Perlu Diproses (3)</button>
            <button class="px-3 py-1.5 rounded hover:bg-surface-container-lowest/60 text-secondary font-title-md text-title-md transition-colors cursor-pointer filter-tab" data-filter="ready" type="button">Siap Kirim / Ambil (2)</button>
        </div>
    </div>

    <!-- Table Container -->
    <div class="overflow-x-auto w-full">
        <table class="w-full text-left font-body-md text-body-md" id="ordersTable">
            <thead class="bg-surface-container-low text-secondary font-label-sm text-label-sm uppercase tracking-wider font-semibold border-b border-surface-container-high/60">
                <tr>
                    <th class="py-3.5 px-space-lg">ID Pesanan</th>
                    <th class="py-3.5 px-4">Nama Pelanggan</th>
                    <th class="py-3.5 px-4">Jenis Pesanan</th>
                    <th class="py-3.5 px-4">Tanggal Acara</th>
                    <th class="py-3.5 px-4 text-right">Total Harga</th>
                    <th class="py-3.5 px-4 text-center">Status Pembayaran</th>
                    <th class="py-3.5 px-4 text-center">Status Pesanan</th>
                    <th class="py-3.5 px-space-lg text-center">Aksi Operasional</th>
                </tr>
            </thead>
            <tbody class="text-on-surface divide-y divide-surface-container-high/40">
                <!-- Row 1 -->
                <tr class="hover:bg-surface-container-low/40 transition-colors order-row" data-status-category="process">
                    <td class="py-4 px-space-lg font-title-md text-title-md font-bold text-primary">
                        #ORD-2025-089
                        <span class="block font-label-sm text-label-sm text-secondary font-normal">Dibuat 15 Mei 2025</span>
                    </td>
                    <td class="py-4 px-4">
                        <div class="font-title-md text-title-md font-semibold text-on-surface">Anindya Putri &amp; Dimas</div>
                        <div class="font-label-sm text-label-sm text-secondary">+62 812-4455-8890</div>
                    </td>
                    <td class="py-4 px-4">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm font-semibold">
                            <span class="material-symbols-outlined text-[14px]">workspace_premium</span> Mahar Frame Akrilik
                        </span>
                    </td>
                    <td class="py-4 px-4 whitespace-nowrap">
                        <div class="font-title-md text-title-md font-medium">24 Mei 2025</div>
                        <span class="font-label-sm text-label-sm text-error font-medium">9 hari lagi</span>
                    </td>
                    <td class="py-4 px-4 text-right font-title-md text-title-md font-bold text-on-surface">
                        Rp 2.450.000
                        <span class="block font-label-sm text-label-sm text-[#2d7a4d]">DP Rp 1.500.000</span>
                    </td>
                    <td class="py-4 px-4 text-center whitespace-nowrap">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">
                            <span class="w-1.5 h-1.5 rounded-full bg-primary"></span> DP Terbayar
                        </span>
                    </td>
                    <td class="py-4 px-4 text-center whitespace-nowrap">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container font-label-sm text-label-sm font-semibold text-primary">
                            <span class="relative flex h-2 w-2">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                            </span>
                            Sedang Diproses
                        </span>
                    </td>
                    <td class="py-4 px-space-lg text-center whitespace-nowrap">
                        <div class="flex items-center justify-center gap-1.5">
                            <button class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-primary text-on-primary font-title-md text-title-md hover:bg-primary-container transition-colors shadow-xs cursor-pointer" onclick="openStatusModal('#ORD-2025-089', 'Anindya Putri &amp; Dimas', 'Sedang Diproses')" title="Kelola / Ubah Status Operasional" type="button">
                                <span class="material-symbols-outlined text-[16px]">tune</span>
                                <span>Kelola</span>
                            </button>
                            <button class="p-1.5 rounded-lg bg-surface-container text-secondary hover:text-on-surface hover:bg-surface-container-high transition-colors cursor-pointer" onclick="openDetailDrawer('#ORD-2025-089', 'Anindya Putri &amp; Dimas', 'Mahar Frame Akrilik + Preserved Flora', 'Rp 2.450.000', '24 Mei 2025', 'Sedang Diproses Florist')" title="Lihat Detail Pesanan" type="button">
                                <span class="material-symbols-outlined text-[18px]">visibility</span>
                            </button>
                            <button class="p-1.5 rounded-lg bg-[#2d7a4d]/10 text-[#2d7a4d] hover:bg-[#2d7a4d] hover:text-white transition-colors cursor-pointer" onclick="kirimWhatsAppUpdate('Anindya Putri', '+6281244558890', '#ORD-2025-089', 'Sedang Diproses')" title="Kirim Update WA Gateway" type="button">
                                <span class="material-symbols-outlined text-[18px]">chat</span>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Row 2 -->
                <tr class="hover:bg-surface-container-low/40 transition-colors order-row" data-status-category="ready">
                    <td class="py-4 px-space-lg font-title-md text-title-md font-bold text-primary">
                        #ORD-2025-088
                        <span class="block font-label-sm text-label-sm text-secondary font-normal">Dibuat 14 Mei 2025</span>
                    </td>
                    <td class="py-4 px-4">
                        <div class="font-title-md text-title-md font-semibold text-on-surface">Raka Pradipta &amp; Sarah</div>
                        <div class="font-label-sm text-label-sm text-secondary">+62 878-1122-3344</div>
                    </td>
                    <td class="py-4 px-4">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">
                            <span class="material-symbols-outlined text-[14px]">inventory_2</span> Sewa 8 Baki (Crystal)
                        </span>
                    </td>
                    <td class="py-4 px-4 whitespace-nowrap">
                        <div class="font-title-md text-title-md font-medium">17 Mei 2025</div>
                        <span class="font-label-sm text-label-sm text-error font-bold">2 hari lagi!</span>
                    </td>
                    <td class="py-4 px-4 text-right font-title-md text-title-md font-bold text-on-surface">
                        Rp 3.200.000
                        <span class="block font-label-sm text-label-sm text-[#2d7a4d]">Lunas (Midtrans)</span>
                    </td>
                    <td class="py-4 px-4 text-center whitespace-nowrap">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#2d7a4d]/10 text-[#2d7a4d] font-label-sm text-label-sm font-semibold">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#2d7a4d]"></span> Lunas
                        </span>
                    </td>
                    <td class="py-4 px-4 text-center whitespace-nowrap">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#2d7a4d]/15 text-[#2d7a4d] font-label-sm text-label-sm font-semibold">
                            <span class="material-symbols-outlined text-[14px]">check_circle</span> Siap Diambil
                        </span>
                    </td>
                    <td class="py-4 px-space-lg text-center whitespace-nowrap">
                        <div class="flex items-center justify-center gap-1.5">
                            <button class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-primary text-on-primary font-title-md text-title-md hover:bg-primary-container transition-colors shadow-xs cursor-pointer" onclick="openStatusModal('#ORD-2025-088', 'Raka Pradipta &amp; Sarah', 'Siap Diambil')" title="Kelola / Ubah Status Operasional" type="button">
                                <span class="material-symbols-outlined text-[16px]">tune</span>
                                <span>Kelola</span>
                            </button>
                            <button class="p-1.5 rounded-lg bg-surface-container text-secondary hover:text-on-surface hover:bg-surface-container-high transition-colors cursor-pointer" onclick="openDetailDrawer('#ORD-2025-088', 'Raka Pradipta &amp; Sarah', 'Sewa 8 Kotak Luxury Crystal Series + Dekorasi Fresh Rose', 'Rp 3.200.000', '17 Mei 2025', 'Siap Diambil Pengantin')" title="Lihat Detail Pesanan" type="button">
                                <span class="material-symbols-outlined text-[18px]">visibility</span>
                            </button>
                            <button class="p-1.5 rounded-lg bg-[#2d7a4d]/10 text-[#2d7a4d] hover:bg-[#2d7a4d] hover:text-white transition-colors cursor-pointer" onclick="kirimWhatsAppUpdate('Raka Pradipta', '+6287811223344', '#ORD-2025-088', 'Siap Diambil')" title="Kirim Update WA Gateway" type="button">
                                <span class="material-symbols-outlined text-[18px]">chat</span>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Row 3 -->
                <tr class="hover:bg-surface-container-low/40 transition-colors order-row" data-status-category="process">
                    <td class="py-4 px-space-lg font-title-md text-title-md font-bold text-primary">
                        #ORD-2025-087
                        <span class="block font-label-sm text-label-sm text-secondary font-normal">Dibuat 14 Mei 2025</span>
                    </td>
                    <td class="py-4 px-4">
                        <div class="font-title-md text-title-md font-semibold text-on-surface">Nadira Zahra &amp; Farhan</div>
                        <div class="font-label-sm text-label-sm text-secondary">+62 821-9988-7711</div>
                    </td>
                    <td class="py-4 px-4">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm font-semibold">
                            <span class="material-symbols-outlined text-[14px]">auto_awesome</span> Paket Bundling Seserahan + Mahar
                        </span>
                    </td>
                    <td class="py-4 px-4 whitespace-nowrap">
                        <div class="font-title-md text-title-md font-medium">31 Mei 2025</div>
                        <span class="font-label-sm text-label-sm text-secondary">16 hari lagi</span>
                    </td>
                    <td class="py-4 px-4 text-right font-title-md text-title-md font-bold text-on-surface">
                        Rp 4.750.000
                        <span class="block font-label-sm text-label-sm text-error">Belum Bayar DP</span>
                    </td>
                    <td class="py-4 px-4 text-center whitespace-nowrap">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-error-container text-error font-label-sm text-label-sm font-semibold">
                            <span class="w-1.5 h-1.5 rounded-full bg-error"></span> Menunggu DP
                        </span>
                    </td>
                    <td class="py-4 px-4 text-center whitespace-nowrap">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-error-container/40 text-error font-label-sm text-label-sm font-semibold">
                            <span class="material-symbols-outlined text-[14px]">hourglass_empty</span> Menunggu Pembayaran
                        </span>
                    </td>
                    <td class="py-4 px-space-lg text-center whitespace-nowrap">
                        <div class="flex items-center justify-center gap-1.5">
                            <button class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-primary text-on-primary font-title-md text-title-md hover:bg-primary-container transition-colors shadow-xs cursor-pointer" onclick="openStatusModal('#ORD-2025-087', 'Nadira Zahra &amp; Farhan', 'Menunggu Pembayaran')" title="Kelola / Ubah Status Operasional" type="button">
                                <span class="material-symbols-outlined text-[16px]">tune</span>
                                <span>Kelola</span>
                            </button>
                            <button class="p-1.5 rounded-lg bg-surface-container text-secondary hover:text-on-surface hover:bg-surface-container-high transition-colors cursor-pointer" onclick="openDetailDrawer('#ORD-2025-087', 'Nadira Zahra &amp; Farhan', 'Bundling 10 Baki White Series + Mahar Koin Emas Logam Mulia', 'Rp 4.750.000', '31 Mei 2025', 'Menunggu Pembayaran Tagihan Midtrans')" title="Lihat Detail Pesanan" type="button">
                                <span class="material-symbols-outlined text-[18px]">visibility</span>
                            </button>
                            <button class="p-1.5 rounded-lg bg-[#2d7a4d]/10 text-[#2d7a4d] hover:bg-[#2d7a4d] hover:text-white transition-colors cursor-pointer" onclick="kirimWhatsAppUpdate('Nadira Zahra', '+6282199887711', '#ORD-2025-087', 'Menunggu DP')" title="Kirim Pengingat Tagihan WA" type="button">
                                <span class="material-symbols-outlined text-[18px]">send</span>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Row 4 -->
                <tr class="hover:bg-surface-container-low/40 transition-colors order-row" data-status-category="process">
                    <td class="py-4 px-space-lg font-title-md text-title-md font-bold text-primary">
                        #ORD-2025-086
                        <span class="block font-label-sm text-label-sm text-secondary font-normal">Dibuat 12 Mei 2025</span>
                    </td>
                    <td class="py-4 px-4">
                        <div class="font-title-md text-title-md font-semibold text-on-surface">Bima Arya &amp; Clarissa</div>
                        <div class="font-label-sm text-label-sm text-secondary">+62 856-7788-9900</div>
                    </td>
                    <td class="py-4 px-4">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">
                            <span class="material-symbols-outlined text-[14px]">inventory_2</span> Sewa 6 Baki (Hidden Wooden)
                        </span>
                    </td>
                    <td class="py-4 px-4 whitespace-nowrap">
                        <div class="font-title-md text-title-md font-medium">15 Mei 2025</div>
                        <span class="font-label-sm text-label-sm text-primary font-bold">Hari Ini!</span>
                    </td>
                    <td class="py-4 px-4 text-right font-title-md text-title-md font-bold text-on-surface">
                        Rp 2.800.000
                        <span class="block font-label-sm text-label-sm text-[#2d7a4d]">Lunas</span>
                    </td>
                    <td class="py-4 px-4 text-center whitespace-nowrap">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#2d7a4d]/10 text-[#2d7a4d] font-label-sm text-label-sm font-semibold">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#2d7a4d]"></span> Lunas
                        </span>
                    </td>
                    <td class="py-4 px-4 text-center whitespace-nowrap">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-primary-container text-on-primary-container font-label-sm text-label-sm font-semibold">
                            <span class="material-symbols-outlined text-[14px]">output</span> Sedang Disewa
                        </span>
                    </td>
                    <td class="py-4 px-space-lg text-center whitespace-nowrap">
                        <div class="flex items-center justify-center gap-1.5">
                            <button class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-primary text-on-primary font-title-md text-title-md hover:bg-primary-container transition-colors shadow-xs cursor-pointer" onclick="openStatusModal('#ORD-2025-086', 'Bima Arya &amp; Clarissa', 'Sedang Disewa')" title="Kelola / Ubah Status Operasional" type="button">
                                <span class="material-symbols-outlined text-[16px]">tune</span>
                                <span>Kelola</span>
                            </button>
                            <button class="p-1.5 rounded-lg bg-surface-container text-secondary hover:text-on-surface hover:bg-surface-container-high transition-colors cursor-pointer" onclick="openDetailDrawer('#ORD-2025-086', 'Bima Arya &amp; Clarissa', 'Sewa 6 Baki Hidden Box Jati Terukir + Bunga Rustic', 'Rp 2.800.000', '15 Mei 2025', 'Baki dibawa pengantin - Jadwal kembali 17 Mei 2025')" title="Lihat Detail Pesanan" type="button">
                                <span class="material-symbols-outlined text-[18px]">visibility</span>
                            </button>
                            <button class="p-1.5 rounded-lg bg-[#2d7a4d]/10 text-[#2d7a4d] hover:bg-[#2d7a4d] hover:text-white transition-colors cursor-pointer" onclick="kirimWhatsAppUpdate('Bima Arya', '+6285677889900', '#ORD-2025-086', 'Sedang Disewa')" title="Kirim Update WA Gateway" type="button">
                                <span class="material-symbols-outlined text-[18px]">chat</span>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Row 5 -->
                <tr class="hover:bg-surface-container-low/40 transition-colors order-row" data-status-category="process">
                    <td class="py-4 px-space-lg font-title-md text-title-md font-bold text-primary">
                        #ORD-2025-085
                        <span class="block font-label-sm text-label-sm text-secondary font-normal">Dibuat 11 Mei 2025</span>
                    </td>
                    <td class="py-4 px-4">
                        <div class="font-title-md text-title-md font-semibold text-on-surface">Kezia Amanda &amp; Reza</div>
                        <div class="font-label-sm text-label-sm text-secondary">+62 813-2233-4455</div>
                    </td>
                    <td class="py-4 px-4">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm font-semibold">
                            <span class="material-symbols-outlined text-[14px]">workspace_premium</span> Mahar Koin Siluet 3D
                        </span>
                    </td>
                    <td class="py-4 px-4 whitespace-nowrap">
                        <div class="font-title-md text-title-md font-medium">21 Mei 2025</div>
                        <span class="font-label-sm text-label-sm text-secondary">6 hari lagi</span>
                    </td>
                    <td class="py-4 px-4 text-right font-title-md text-title-md font-bold text-on-surface">
                        Rp 1.950.000
                        <span class="block font-label-sm text-label-sm text-[#2d7a4d]">DP Rp 1.000.000</span>
                    </td>
                    <td class="py-4 px-4 text-center whitespace-nowrap">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">
                            <span class="w-1.5 h-1.5 rounded-full bg-primary"></span> DP Terbayar
                        </span>
                    </td>
                    <td class="py-4 px-4 text-center whitespace-nowrap">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container font-label-sm text-label-sm font-semibold text-primary">
                            <span class="relative flex h-2 w-2">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                            </span>
                            Sedang Diproses
                        </span>
                    </td>
                    <td class="py-4 px-space-lg text-center whitespace-nowrap">
                        <div class="flex items-center justify-center gap-1.5">
                            <button class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-primary text-on-primary font-title-md text-title-md hover:bg-primary-container transition-colors shadow-xs cursor-pointer" onclick="openStatusModal('#ORD-2025-085', 'Kezia Amanda &amp; Reza', 'Sedang Diproses')" title="Kelola / Ubah Status Operasional" type="button">
                                <span class="material-symbols-outlined text-[16px]">tune</span>
                                <span>Kelola</span>
                            </button>
                            <button class="p-1.5 rounded-lg bg-surface-container text-secondary hover:text-on-surface hover:bg-surface-container-high transition-colors cursor-pointer" onclick="openDetailDrawer('#ORD-2025-085', 'Kezia Amanda &amp; Reza', 'Mahar Koin 10 Gram Siluet Kayu Tematik Terrarium', 'Rp 1.950.000', '21 Mei 2025', 'Proses grafir akrilik siluet nama')" title="Lihat Detail Pesanan" type="button">
                                <span class="material-symbols-outlined text-[18px]">visibility</span>
                            </button>
                            <button class="p-1.5 rounded-lg bg-[#2d7a4d]/10 text-[#2d7a4d] hover:bg-[#2d7a4d] hover:text-white transition-colors cursor-pointer" onclick="kirimWhatsAppUpdate('Kezia Amanda', '+6281322334455', '#ORD-2025-085', 'Sedang Diproses')" title="Kirim Update WA Gateway" type="button">
                                <span class="material-symbols-outlined text-[18px]">chat</span>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Row 6 -->
                <tr class="hover:bg-surface-container-low/40 transition-colors order-row" data-status-category="ready">
                    <td class="py-4 px-space-lg font-title-md text-title-md font-bold text-primary">
                        #ORD-2025-084
                        <span class="block font-label-sm text-label-sm text-secondary font-normal">Dibuat 10 Mei 2025</span>
                    </td>
                    <td class="py-4 px-4">
                        <div class="font-title-md text-title-md font-semibold text-on-surface">Taufik Hidayat &amp; Nabila</div>
                        <div class="font-label-sm text-label-sm text-secondary">+62 895-3344-5566</div>
                    </td>
                    <td class="py-4 px-4">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">
                            <span class="material-symbols-outlined text-[14px]">inventory_2</span> Sewa 7 Baki (Rattan Bohemian)
                        </span>
                    </td>
                    <td class="py-4 px-4 whitespace-nowrap">
                        <div class="font-title-md text-title-md font-medium">11 Mei 2025</div>
                        <span class="font-label-sm text-label-sm text-[#2d7a4d] font-semibold">Kemarin Selesai</span>
                    </td>
                    <td class="py-4 px-4 text-right font-title-md text-title-md font-bold text-on-surface">
                        Rp 2.100.000
                        <span class="block font-label-sm text-label-sm text-[#2d7a4d]">Lunas</span>
                    </td>
                    <td class="py-4 px-4 text-center whitespace-nowrap">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#2d7a4d]/10 text-[#2d7a4d] font-label-sm text-label-sm font-semibold">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#2d7a4d]"></span> Lunas
                        </span>
                    </td>
                    <td class="py-4 px-4 text-center whitespace-nowrap">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container-high text-secondary font-label-sm text-label-sm font-semibold">
                            <span class="material-symbols-outlined text-[14px] text-[#2d7a4d]">task_alt</span> Selesai
                        </span>
                    </td>
                    <td class="py-4 px-space-lg text-center whitespace-nowrap">
                        <div class="flex items-center justify-center gap-1.5">
                            <button class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-surface-container text-on-surface font-title-md text-title-md hover:bg-surface-container-high transition-colors cursor-pointer" onclick="openStatusModal('#ORD-2025-084', 'Taufik Hidayat &amp; Nabila', 'Selesai')" title="Arsip Selesai" type="button">
                                <span class="material-symbols-outlined text-[16px]">history</span>
                                <span>Arsip</span>
                            </button>
                            <button class="p-1.5 rounded-lg bg-surface-container text-secondary hover:text-on-surface hover:bg-surface-container-high transition-colors cursor-pointer" onclick="openDetailDrawer('#ORD-2025-084', 'Taufik Hidayat &amp; Nabila', 'Sewa 7 Baki Rattan Natural + Bunga Kering Pampas', 'Rp 2.100.000', '11 Mei 2025', 'Baki telah dikembalikan lengkap tanpa denda/kerusakan')" title="Lihat Detail Pesanan" type="button">
                                <span class="material-symbols-outlined text-[18px]">visibility</span>
                            </button>
                            <button class="p-1.5 rounded-lg bg-[#2d7a4d]/10 text-[#2d7a4d] hover:bg-[#2d7a4d] hover:text-white transition-colors cursor-pointer" onclick="kirimWhatsAppUpdate('Taufik Hidayat', '+6289533445566', '#ORD-2025-084', 'Selesai')" title="Kirim Ucapan Terima Kasih WA" type="button">
                                <span class="material-symbols-outlined text-[18px]">thumb_up</span>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Table Footer / Quick Paging info -->
    <div class="p-space-md bg-surface-container-low/30 flex flex-col sm:flex-row items-center justify-between gap-2 border-t border-surface-container-high/60">
        <p class="font-label-sm text-label-sm text-on-surface-variant">Menampilkan 6 pesanan prioritas operasional dari total 184 pesanan aktif</p>
        <a class="font-title-md text-title-md text-primary font-semibold hover:underline inline-flex items-center gap-1" href="{{ Route::has('admin.pesanan') ? route('admin.pesanan') : '#' }}">
            <span>Lihat Semua Pesanan di Menu Pesanan</span>
            <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
        </a>
    </div>
</div>
