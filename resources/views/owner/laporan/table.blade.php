<!-- Periodic Recap Data Table (Spesifikasi Tabel Rekapitulasi) -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden flex flex-col">
    <!-- Table Header Info -->
    <div class="p-space-lg pb-space-sm flex flex-col md:flex-row md:items-center justify-between gap-space-sm">
        <div class="flex flex-col">
            <h3 class="font-headline-md text-headline-md text-on-surface">Tabel Rekapitulasi Berkala Pemesanan</h3>
            <p class="font-body-md text-body-md text-on-surface-variant">Rincian pendapatan mahar kustom dan penyewaan baki seserahan per pekan.</p>
        </div>
        <div class="flex items-center gap-space-xs bg-surface-container-high px-space-md py-space-xs rounded-full">
            <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
            <span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant font-semibold" id="tableAuditPeriod">Periode Audit: 01 - 31 Oktober 2025</span>
        </div>
    </div>

    <!-- Responsive Table Wrapper -->
    <div class="overflow-x-auto w-full">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider">
                    <th class="py-space-md px-space-lg font-semibold">Periode (Bulan / Pekan)</th>
                    <th class="py-space-md px-space-md font-semibold text-center">Jumlah Pesanan</th>
                    <th class="py-space-md px-space-md font-semibold">Mahar (Paket &amp; Omset)</th>
                    <th class="py-space-md px-space-md font-semibold">Penyewaan Kotak (Set &amp; Omset)</th>
                    <th class="py-space-md px-space-md font-semibold text-center">Total Transaksi</th>
                    <th class="py-space-md px-space-lg font-semibold text-right">Total Pembayaran (Kas Masuk)</th>
                </tr>
            </thead>
            <tbody class="font-body-md text-body-md text-on-surface divide-y divide-surface-variant/30">
                <!-- Row 1: Pekan 1 -->
                <tr class="hover:bg-surface-container-low/60 transition-colors">
                    <td class="py-space-md px-space-lg">
                        <div class="flex flex-col">
                            <span class="font-title-md text-title-md text-on-surface font-semibold">Pekan 1</span>
                            <span class="font-label-sm text-label-sm text-outline">01 - 07 Okt 2025</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full bg-surface-container-high text-on-surface-variant font-title-md text-title-md">
                            42 Pesanan
                        </span>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <span class="font-title-md text-title-md text-on-surface">26 Paket</span>
                            <span class="font-body-md text-body-md text-primary font-medium">Rp 28.600.000</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <span class="font-title-md text-title-md text-on-surface">16 Set</span>
                            <span class="font-body-md text-body-md text-secondary font-medium">Rp 9.800.000</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <span class="font-body-md text-body-md text-on-surface">48 Transaksi</span>
                    </td>
                    <td class="py-space-md px-space-lg text-right">
                        <span class="font-title-lg text-title-lg text-on-surface font-semibold tracking-tight">Rp 38.400.000</span>
                    </td>
                </tr>

                <!-- Row 2: Pekan 2 -->
                <tr class="hover:bg-surface-container-low/60 transition-colors bg-surface-container-lowest">
                    <td class="py-space-md px-space-lg">
                        <div class="flex flex-col">
                            <span class="font-title-md text-title-md text-on-surface font-semibold">Pekan 2</span>
                            <span class="font-label-sm text-label-sm text-outline">08 - 14 Okt 2025</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full bg-surface-container-high text-on-surface-variant font-title-md text-title-md">
                            48 Pesanan
                        </span>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <span class="font-title-md text-title-md text-on-surface">30 Paket</span>
                            <span class="font-body-md text-body-md text-primary font-medium">Rp 33.200.000</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <span class="font-title-md text-title-md text-on-surface">18 Set</span>
                            <span class="font-body-md text-body-md text-secondary font-medium">Rp 11.200.000</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <span class="font-body-md text-body-md text-on-surface">56 Transaksi</span>
                    </td>
                    <td class="py-space-md px-space-lg text-right">
                        <span class="font-title-lg text-title-lg text-on-surface font-semibold tracking-tight">Rp 44.400.000</span>
                    </td>
                </tr>

                <!-- Row 3: Pekan 3 -->
                <tr class="hover:bg-surface-container-low/60 transition-colors">
                    <td class="py-space-md px-space-lg">
                        <div class="flex flex-col">
                            <span class="font-title-md text-title-md text-on-surface font-semibold">Pekan 3</span>
                            <span class="font-label-sm text-label-sm text-outline">15 - 21 Okt 2025</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-title-md text-title-md font-semibold">
                            51 Pesanan
                        </span>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <span class="font-title-md text-title-md text-on-surface">32 Paket</span>
                            <span class="font-body-md text-body-md text-primary font-medium">Rp 35.800.000</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <span class="font-title-md text-title-md text-on-surface">19 Set</span>
                            <span class="font-body-md text-body-md text-secondary font-medium">Rp 12.100.000</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <span class="font-body-md text-body-md text-on-surface">60 Transaksi</span>
                    </td>
                    <td class="py-space-md px-space-lg text-right">
                        <span class="font-title-lg text-title-lg text-on-surface font-semibold tracking-tight">Rp 47.900.000</span>
                    </td>
                </tr>

                <!-- Row 4: Pekan 4 -->
                <tr class="hover:bg-surface-container-low/60 transition-colors bg-surface-container-lowest">
                    <td class="py-space-md px-space-lg">
                        <div class="flex flex-col">
                            <span class="font-title-md text-title-md text-on-surface font-semibold">Pekan 4</span>
                            <span class="font-label-sm text-label-sm text-outline">22 - 31 Okt 2025</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full bg-surface-container-high text-on-surface-variant font-title-md text-title-md">
                            43 Pesanan
                        </span>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <span class="font-title-md text-title-md text-on-surface">24 Paket</span>
                            <span class="font-body-md text-body-md text-primary font-medium">Rp 26.500.000</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <span class="font-title-md text-title-md text-on-surface">19 Set</span>
                            <span class="font-body-md text-body-md text-secondary font-medium">Rp 11.650.000</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <span class="font-body-md text-body-md text-on-surface">52 Transaksi</span>
                    </td>
                    <td class="py-space-md px-space-lg text-right">
                        <span class="font-title-lg text-title-lg text-on-surface font-semibold tracking-tight">Rp 38.150.000</span>
                    </td>
                </tr>

                <!-- TOTAL SUMMARY ROW -->
                <tr class="bg-surface-container-high text-on-surface font-semibold">
                    <td class="py-space-lg px-space-lg">
                        <div class="flex items-center gap-space-xs">
                            <span class="material-symbols-outlined text-primary text-xl">functions</span>
                            <span class="font-title-lg text-title-lg uppercase tracking-wider text-on-surface font-bold">Baris Total</span>
                        </div>
                    </td>
                    <td class="py-space-lg px-space-md text-center">
                        <span class="font-title-lg text-title-lg text-on-surface font-bold">184 Pesanan</span>
                    </td>
                    <td class="py-space-lg px-space-md">
                        <div class="flex flex-col">
                            <span class="font-title-md text-title-md text-on-surface font-bold">112 Paket</span>
                            <span class="font-label-sm text-label-sm text-outline font-normal">Kustom Mahar Akrilik &amp; Koin</span>
                        </div>
                    </td>
                    <td class="py-space-lg px-space-md">
                        <div class="flex flex-col">
                            <span class="font-title-md text-title-md text-on-surface font-bold">72 Set</span>
                            <span class="font-label-sm text-label-sm text-outline font-normal">Sewa Baki &amp; Vitrine Kaca</span>
                        </div>
                    </td>
                    <td class="py-space-lg px-space-md text-center">
                        <span class="font-title-lg text-title-lg text-on-surface font-bold">216 Transaksi</span>
                    </td>
                    <td class="py-space-lg px-space-lg text-right">
                        <div class="flex flex-col items-end">
                            <span class="font-metric-display text-metric-display text-primary leading-tight font-bold">Rp 168.850.000</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant font-medium">Total Akrual Keseluruhan</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Digital Signature & Document Validity Verification Section -->
    <div class="p-space-lg bg-surface-container-low flex flex-col md:flex-row md:items-center justify-between gap-space-md border-t border-surface-variant/40">
        <div class="flex items-start gap-space-sm">
            <div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center shrink-0 text-primary">
                <span class="material-symbols-outlined text-xl">verified</span>
            </div>
            <div class="flex flex-col">
                <div class="flex items-center gap-space-xs">
                    <span class="font-title-md text-title-md text-on-surface font-semibold">Keabsahan Dokumen Terjamin</span>
                    <span class="px-2 py-0.5 rounded-full bg-primary/10 text-primary font-label-sm text-label-sm font-semibold uppercase">Status: Terverifikasi Sistem</span>
                </div>
                <p class="font-body-md text-body-md text-on-surface-variant mt-0.5">
                    Laporan dihasilkan secara otomatis oleh Sistem Informasi Cattaleya untuk Owner.
                </p>
            </div>
        </div>
        <div class="flex flex-col items-start md:items-end gap-0.5 shrink-0 pl-12 md:pl-0">
            <div class="flex items-center gap-1 text-on-surface font-title-md text-title-md">
                <span class="material-symbols-outlined text-sm text-outline">history</span>
                <span>Dicetak: 24 Oktober 2025, 17:30 WIB</span>
            </div>
            <span class="font-label-sm text-label-sm text-outline uppercase tracking-wider font-mono">ID Hash: CTL-OCT25-89410-OWN</span>
        </div>
    </div>
</div>

<!-- Editorial Note / Owner Guidance -->
<div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm flex items-center justify-between text-outline font-label-md text-label-md">
    <div class="flex items-center gap-space-sm">
        <span class="material-symbols-outlined text-primary text-base">info</span>
        <span>Halaman ini beroperasi dalam mode Read-Only. Perubahan status pesanan dilakukan di meja operasional admin.</span>
    </div>
    <span class="hidden sm:inline-block font-label-sm text-label-sm uppercase tracking-wider">Cattaleya • Seserahan &amp; Mahar</span>
</div>
