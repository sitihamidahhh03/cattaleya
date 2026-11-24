<!-- Main Table Card -->
<div class="w-full bg-surface-container-lowest rounded-xl shadow-[0_2px_16px_rgba(90,72,56,0.05)] overflow-hidden flex flex-col">
    <!-- Table Responsive Wrapper -->
    <div class="overflow-x-auto w-full">
        <table class="w-full text-left border-collapse" id="ordersTable">
            <thead>
                <tr class="bg-surface-container-high/60 text-on-surface-variant">
                    <th class="py-3.5 px-space-md font-label-sm text-label-sm uppercase tracking-wider whitespace-nowrap" scope="col">ID Pesanan</th>
                    <th class="py-3.5 px-space-md font-label-sm text-label-sm uppercase tracking-wider whitespace-nowrap" scope="col">Nama Pelanggan</th>
                    <th class="py-3.5 px-space-md font-label-sm text-label-sm uppercase tracking-wider whitespace-nowrap" scope="col">Jenis Pesanan</th>
                    <th class="py-3.5 px-space-md font-label-sm text-label-sm uppercase tracking-wider whitespace-nowrap" scope="col">Tanggal Acara</th>
                    <th class="py-3.5 px-space-md font-label-sm text-label-sm uppercase tracking-wider whitespace-nowrap text-right" scope="col">Total Harga</th>
                    <th class="py-3.5 px-space-md font-label-sm text-label-sm uppercase tracking-wider whitespace-nowrap text-right" scope="col">Nominal Dibayar</th>
                    <th class="py-3.5 px-space-md font-label-sm text-label-sm uppercase tracking-wider whitespace-nowrap text-right" scope="col">Sisa Pembayaran</th>
                    <th class="py-3.5 px-space-md font-label-sm text-label-sm uppercase tracking-wider whitespace-nowrap text-center" scope="col">Status Pembayaran</th>
                    <th class="py-3.5 px-space-md font-label-sm text-label-sm uppercase tracking-wider whitespace-nowrap text-center" scope="col">Status Pesanan</th>
                    <th class="py-3.5 px-space-md font-label-sm text-label-sm uppercase tracking-wider whitespace-nowrap text-center" scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-on-surface divide-y-0" id="orderTableBody">
                <!-- Row 1: ORD-089 -->
                <tr class="hover:bg-surface-container-low/70 transition-colors duration-150 group">
                    <td class="py-4 px-space-md whitespace-nowrap">
                        <a href="{{ request()->routeIs('preview.*') ? route('preview.owner-pesanan-detail') : route('owner.pesanan.detail') }}" class="font-title-md text-title-md font-bold text-primary hover:underline">ORD-089</a>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap">
                        <div class="flex items-center gap-space-xs">
                            <div class="w-7 h-7 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center font-label-sm text-label-sm font-semibold">AR</div>
                            <span class="font-title-md text-title-md font-medium text-on-surface">Anisa Rahmawati</span>
                        </div>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm">
                            <span class="material-symbols-outlined text-xs">auto_awesome</span>
                            Mahar Pernikahan
                        </span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap">
                        <span class="font-body-md text-body-md text-on-surface font-medium">15 Okt 2025</span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-right">
                        <span class="font-body-md text-body-md font-semibold text-on-surface">Rp 2.450.000</span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-right">
                        <span class="font-body-md text-body-md text-primary font-semibold">Rp 2.450.000</span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-right">
                        <span class="font-body-md text-body-md text-outline">Rp 0</span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-center">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#EBF4EC] text-[#2F613A] font-label-sm text-label-sm font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#2F613A]"></span>
                            Lunas
                        </span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-center">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container-low text-on-surface font-label-sm text-label-sm">
                            <span class="material-symbols-outlined text-xs text-[#2F613A]">check_circle</span>
                            Selesai
                        </span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-center">
                        <button type="button" onclick="openOrderModal('ORD-089', 'Anisa Rahmawati', 'Mahar Pernikahan', '15 Okt 2025', 'Rp 2.450.000', 'Rp 2.450.000', 'Rp 0', 'Lunas', 'Selesai', 'Pigura 3D Gold Leaf Motif Cattaleya 40x50 cm, Logam Mulia 10gr Replicas, Kaligrafi Kufi Timbul')" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-surface hover:bg-surface-container-high text-primary font-label-md text-label-md font-medium transition-all shadow-sm hover:shadow cursor-pointer"><span class="material-symbols-outlined text-base">visibility</span><span>Lihat Detail</span></button>
                    </td>
                </tr>

                <!-- Row 2: ORD-090 -->
                <tr class="hover:bg-surface-container-low/70 transition-colors duration-150 group">
                    <td class="py-4 px-space-md whitespace-nowrap">
                        <a href="{{ request()->routeIs('preview.*') ? route('preview.owner-pesanan-detail') : route('owner.pesanan.detail') }}" class="font-title-md text-title-md font-bold text-primary hover:underline">ORD-090</a>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap">
                        <div class="flex items-center gap-space-xs">
                            <div class="w-7 h-7 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center font-label-sm text-label-sm font-semibold">DP</div>
                            <span class="font-title-md text-title-md font-medium text-on-surface">Dinda Tri Permata</span>
                        </div>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm">
                            <span class="material-symbols-outlined text-xs">all_inbox</span>
                            Sewa Kotak Seserahan
                        </span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap">
                        <span class="font-body-md text-body-md text-on-surface font-medium">22 Okt 2025</span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-right">
                        <span class="font-body-md text-body-md font-semibold text-on-surface">Rp 1.600.000</span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-right">
                        <span class="font-body-md text-body-md text-primary font-semibold">Rp 800.000</span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-right">
                        <span class="font-body-md text-body-md text-error font-semibold">Rp 800.000</span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-center">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#FCF5E5] text-[#8C6212] font-label-sm text-label-sm font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#8C6212]"></span>
                            DP (50%)
                        </span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-center">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container-high text-secondary font-label-sm text-label-sm">
                            <span class="material-symbols-outlined text-xs">handshake</span>
                            Sedang Disewa
                        </span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-center">
                        <button type="button" onclick="openOrderModal('ORD-090', 'Dinda Tri Permata', 'Sewa Kotak Seserahan', '22 Okt 2025', 'Rp 1.600.000', 'Rp 800.000', 'Rp 800.000', 'DP (50%)', 'Sedang Disewa', '8 Kotak Akrilik Eksklusif Champagne Gold, Bunga Sutra Premium Cattaleya Series, Nampan Kayu Ukir Jati')" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-surface hover:bg-surface-container-high text-primary font-label-md text-label-md font-medium transition-all shadow-sm hover:shadow cursor-pointer"><span class="material-symbols-outlined text-base">visibility</span><span>Lihat Detail</span></button>
                    </td>
                </tr>

                <!-- Row 3: ORD-091 -->
                <tr class="hover:bg-surface-container-low/70 transition-colors duration-150 group">
                    <td class="py-4 px-space-md whitespace-nowrap">
                        <a href="{{ request()->routeIs('preview.*') ? route('preview.owner-pesanan-detail') : route('owner.pesanan.detail') }}" class="font-title-md text-title-md font-bold text-primary hover:underline">ORD-091</a>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap">
                        <div class="flex items-center gap-space-xs">
                            <div class="w-7 h-7 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center font-label-sm text-label-sm font-semibold">RP</div>
                            <span class="font-title-md text-title-md font-medium text-on-surface">Rizky Pratama</span>
                        </div>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm">
                            <span class="material-symbols-outlined text-xs">auto_awesome</span>
                            Mahar Pernikahan
                        </span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap">
                        <span class="font-body-md text-body-md text-on-surface font-medium">28 Okt 2025</span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-right">
                        <span class="font-body-md text-body-md font-semibold text-on-surface">Rp 3.200.000</span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-right">
                        <span class="font-body-md text-body-md text-primary font-semibold">Rp 1.600.000</span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-right">
                        <span class="font-body-md text-body-md text-error font-semibold">Rp 1.600.000</span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-center">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#FCF5E5] text-[#8C6212] font-label-sm text-label-sm font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#8C6212]"></span>
                            DP (50%)
                        </span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-center">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-container/60 text-secondary font-label-sm text-label-sm">
                            <span class="material-symbols-outlined text-xs animate-spin">refresh</span>
                            Diproses
                        </span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-center">
                        <button type="button" onclick="openOrderModal('ORD-091', 'Rizky Pratama', 'Mahar Pernikahan', '28 Okt 2025', 'Rp 3.200.000', 'Rp 1.600.000', 'Rp 1.600.000', 'DP (50%)', 'Diproses', 'Terrarium Dome Kaca Hexagon, Dried Preserved Blossom Botanicals, Rangkaian Cincin &amp; Dinar Emas Murni')" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-surface hover:bg-surface-container-high text-primary font-label-md text-label-md font-medium transition-all shadow-sm hover:shadow cursor-pointer"><span class="material-symbols-outlined text-base">visibility</span><span>Lihat Detail</span></button>
                    </td>
                </tr>

                <!-- Row 4: ORD-092 -->
                <tr class="hover:bg-surface-container-low/70 transition-colors duration-150 group">
                    <td class="py-4 px-space-md whitespace-nowrap">
                        <a href="{{ request()->routeIs('preview.*') ? route('preview.owner-pesanan-detail') : route('owner.pesanan.detail') }}" class="font-title-md text-title-md font-bold text-primary hover:underline">ORD-092</a>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap">
                        <div class="flex items-center gap-space-xs">
                            <div class="w-7 h-7 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center font-label-sm text-label-sm font-semibold">MI</div>
                            <span class="font-title-md text-title-md font-medium text-on-surface">Maya Indah Sari</span>
                        </div>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm">
                            <span class="material-symbols-outlined text-xs">all_inbox</span>
                            Sewa Kotak Seserahan
                        </span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap">
                        <span class="font-body-md text-body-md text-on-surface font-medium">02 Nov 2025</span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-right">
                        <span class="font-body-md text-body-md font-semibold text-on-surface">Rp 2.000.000</span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-right">
                        <span class="font-body-md text-body-md text-primary font-semibold">Rp 2.000.000</span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-right">
                        <span class="font-body-md text-body-md text-outline">Rp 0</span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-center">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#EBF4EC] text-[#2F613A] font-label-sm text-label-sm font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#2F613A]"></span>
                            Lunas
                        </span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-center">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-primary-fixed text-on-primary-fixed font-label-sm text-label-sm font-medium">
                            <span class="material-symbols-outlined text-xs">inventory</span>
                            Siap Diambil
                        </span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-center">
                        <button type="button" onclick="openOrderModal('ORD-092', 'Maya Indah Sari', 'Sewa Kotak Seserahan', '02 Nov 2025', 'Rp 2.000.000', 'Rp 2.000.000', 'Rp 0', 'Lunas', 'Siap Diambil', '10 Kotak Seserahan Akrilik Velvet Emerald, Hiasan Pita Satin Dusty Pink, Nampan Ukir Antik')" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-surface hover:bg-surface-container-high text-primary font-label-md text-label-md font-medium transition-all shadow-sm hover:shadow cursor-pointer"><span class="material-symbols-outlined text-base">visibility</span><span>Lihat Detail</span></button>
                    </td>
                </tr>

                <!-- Row 5: ORD-093 -->
                <tr class="hover:bg-surface-container-low/70 transition-colors duration-150 group">
                    <td class="py-4 px-space-md whitespace-nowrap">
                        <a href="{{ request()->routeIs('preview.*') ? route('preview.owner-pesanan-detail') : route('owner.pesanan.detail') }}" class="font-title-md text-title-md font-bold text-primary hover:underline">ORD-093</a>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap">
                        <div class="flex items-center gap-space-xs">
                            <div class="w-7 h-7 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center font-label-sm text-label-sm font-semibold">SW</div>
                            <span class="font-title-md text-title-md font-medium text-on-surface">Satria Wicaksana</span>
                        </div>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm">
                            <span class="material-symbols-outlined text-xs">auto_awesome</span>
                            Mahar Pernikahan
                        </span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap">
                        <span class="font-body-md text-body-md text-on-surface font-medium">05 Nov 2025</span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-right">
                        <span class="font-body-md text-body-md font-semibold text-on-surface">Rp 1.850.000</span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-right">
                        <span class="font-body-md text-body-md text-primary font-semibold">Rp 1.850.000</span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-right">
                        <span class="font-body-md text-body-md text-outline">Rp 0</span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-center">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#EBF4EC] text-[#2F613A] font-label-sm text-label-sm font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#2F613A]"></span>
                            Lunas
                        </span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-center">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container-low text-on-surface font-label-sm text-label-sm">
                            <span class="material-symbols-outlined text-xs text-[#2F613A]">check_circle</span>
                            Selesai
                        </span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-center">
                        <button type="button" onclick="openOrderModal('ORD-093', 'Satria Wicaksana', 'Mahar Pernikahan', '05 Nov 2025', 'Rp 1.850.000', 'Rp 1.850.000', 'Rp 0', 'Lunas', 'Selesai', 'Pigura Kayu Minimalis Warm Alabaster 30x40 cm, Hiasan Daun Emas Kering, Replika Cek Mahar Custom')" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-surface hover:bg-surface-container-high text-primary font-label-md text-label-md font-medium transition-all shadow-sm hover:shadow cursor-pointer"><span class="material-symbols-outlined text-base">visibility</span><span>Lihat Detail</span></button>
                    </td>
                </tr>

                <!-- Row 6: ORD-094 -->
                <tr class="hover:bg-surface-container-low/70 transition-colors duration-150 group">
                    <td class="py-4 px-space-md whitespace-nowrap">
                        <a href="{{ request()->routeIs('preview.*') ? route('preview.owner-pesanan-detail') : route('owner.pesanan.detail') }}" class="font-title-md text-title-md font-bold text-primary hover:underline">ORD-094</a>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap">
                        <div class="flex items-center gap-space-xs">
                            <div class="w-7 h-7 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center font-label-sm text-label-sm font-semibold">BC</div>
                            <span class="font-title-md text-title-md font-medium text-on-surface">Bella Clarissa</span>
                        </div>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm">
                            <span class="material-symbols-outlined text-xs">all_inbox</span>
                            Sewa Kotak Seserahan
                        </span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap">
                        <span class="font-body-md text-body-md text-on-surface font-medium">12 Nov 2025</span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-right">
                        <span class="font-body-md text-body-md font-semibold text-on-surface">Rp 2.500.000</span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-right">
                        <span class="font-body-md text-body-md text-primary font-semibold">Rp 1.000.000</span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-right">
                        <span class="font-body-md text-body-md text-error font-semibold">Rp 1.500.000</span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-center">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#FFF1E5] text-[#9D4C13] font-label-sm text-label-sm font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#9D4C13]"></span>
                            DP Sebagian
                        </span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-center">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-container/60 text-secondary font-label-sm text-label-sm">
                            <span class="material-symbols-outlined text-xs animate-spin">refresh</span>
                            Diproses
                        </span>
                    </td>
                    <td class="py-4 px-space-md whitespace-nowrap text-center">
                        <button type="button" onclick="openOrderModal('ORD-094', 'Bella Clarissa', 'Sewa Kotak Seserahan', '12 Nov 2025', 'Rp 2.500.000', 'Rp 1.000.000', 'Rp 1.500.000', 'DP Sebagian', 'Diproses', '12 Kotak Deluxe Seserahan Sangjit Edisi Rose Gold, Tatakan Akrilik Mirror, Bunga Peony &amp; Orchid Handmade')" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-surface hover:bg-surface-container-high text-primary font-label-md text-label-md font-medium transition-all shadow-sm hover:shadow cursor-pointer"><span class="material-symbols-outlined text-base">visibility</span><span>Lihat Detail</span></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Table Ledger Footer & Pagination (Read-Only Luxury Paging) -->
    <div class="p-space-md bg-surface-container-low/50 flex flex-col sm:flex-row items-center justify-between gap-space-md">
        <div class="flex items-center gap-space-xs text-on-surface-variant font-body-md text-body-md">
            <span>Menampilkan</span>
            <span class="font-semibold text-on-surface">1 - 6</span>
            <span>dari</span>
            <span class="font-semibold text-on-surface">184</span>
            <span>pesanan terdaftar</span>
        </div>
        <!-- Read-Only Page Navigation Controls -->
        <div class="flex items-center gap-1.5">
            <button class="w-8 h-8 rounded-lg bg-surface-container-low text-outline/50 flex items-center justify-center cursor-not-allowed" disabled="" type="button">
                <span class="material-symbols-outlined text-base">chevron_left</span>
            </button>
            <button class="w-8 h-8 rounded-lg bg-primary text-on-primary font-label-sm text-label-sm font-semibold shadow-sm flex items-center justify-center" type="button">1</button>
            <button class="w-8 h-8 rounded-lg bg-surface-container-lowest hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm font-semibold transition-colors flex items-center justify-center" type="button">2</button>
            <button class="w-8 h-8 rounded-lg bg-surface-container-lowest hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm font-semibold transition-colors flex items-center justify-center" type="button">3</button>
            <span class="px-1 text-outline font-label-sm text-label-sm">...</span>
            <button class="w-8 h-8 rounded-lg bg-surface-container-lowest hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm font-semibold transition-colors flex items-center justify-center" type="button">31</button>
            <button class="w-8 h-8 rounded-lg bg-surface-container-lowest hover:bg-surface-container-high text-on-surface flex items-center justify-center transition-colors" type="button">
                <span class="material-symbols-outlined text-base">chevron_right</span>
            </button>
        </div>
    </div>
</div>
