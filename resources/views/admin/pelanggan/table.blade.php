<!-- Main Customer Table Container -->
<div class="rounded-xl bg-surface-container-lowest shadow-sm overflow-hidden mb-space-xl border border-outline-variant/20">
    <div class="overflow-x-auto">
        <table class="w-full text-left" id="customerTable">
            <thead>
                <tr class="bg-surface-container-low text-secondary font-label-sm text-label-sm uppercase tracking-wider font-semibold border-b border-surface-container-high/60">
                    <th class="py-3.5 px-space-md">Pelanggan</th>
                    <th class="py-3.5 px-space-md">Kontak WhatsApp &amp; Email</th>
                    <th class="py-3.5 px-space-md">Alamat / Wilayah</th>
                    <th class="py-3.5 px-space-md text-center">Jml Order</th>
                    <th class="py-3.5 px-space-md">Riwayat Pesanan Terakhir</th>
                    <th class="py-3.5 px-space-md text-right">Total Transaksi</th>
                    <th class="py-3.5 px-space-md text-center">Status</th>
                    <th class="py-3.5 px-space-md text-center">Aksi Cepat</th>
                </tr>
            </thead>
            <tbody class="text-on-surface font-body-md text-body-md divide-y divide-surface-container">
                <!-- Row 1: Dinda Tri Permata -->
                <tr class="hover:bg-surface-container-low/60 transition-colors customer-row" data-city="Kebayoran Baru, Jakarta Selatan" data-name="Dinda Tri Permata" data-orders="2" data-phone="081289342201" data-status="active" data-total="4250000">
                    <td class="py-4 px-space-md">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center font-title-md text-title-md font-semibold flex-shrink-0">
                                DT
                            </div>
                            <div>
                                <div class="font-title-md text-title-md text-on-surface font-medium flex items-center gap-1.5">
                                    <span>Dinda Tri Permata</span>
                                    <span class="w-2 h-2 rounded-full bg-primary" title="Mempelai Wanita"></span>
                                </div>
                                <div class="flex items-center gap-1 text-secondary font-label-sm text-label-sm mt-0.5">
                                    <span class="material-symbols-outlined text-[14px]">alternate_email</span>
                                    <span>@dindaprmt</span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="py-4 px-space-md">
                        <div class="flex flex-col gap-1">
                            <div class="flex items-center gap-2">
                                <span class="font-title-md text-title-md text-on-surface font-semibold">0812-8934-2201</span>
                                <span class="inline-flex items-center gap-0.5 px-1.5 py-0.5 rounded-full bg-[#e8f5ec] text-[#2d7a4d] font-label-sm text-[10px] font-bold">
                                    <span class="material-symbols-outlined text-[12px]">verified</span> WA
                                </span>
                            </div>
                            <span class="text-on-surface-variant font-label-sm text-label-sm">dinda.permata@gmail.com</span>
                        </div>
                    </td>
                    <td class="py-4 px-space-md">
                        <div class="text-on-surface font-medium">Jakarta Selatan</div>
                        <div class="text-on-surface-variant font-label-sm text-label-sm truncate max-w-[160px]" title="Jl. Wijaya Timur II No. 14, Melawai, Kebayoran Baru">Jl. Wijaya Timur II No. 14</div>
                    </td>
                    <td class="py-4 px-space-md text-center">
                        <span class="inline-flex items-center justify-center px-2.5 py-1 rounded-full bg-surface-container font-title-md text-title-md font-semibold text-primary">
                            2 Pesanan
                        </span>
                    </td>
                    <td class="py-4 px-space-md">
                        <div>
                            <div class="font-title-md text-title-md text-on-surface font-semibold flex items-center gap-1.5">
                                <span class="text-primary">#ORD-2025-089</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">• 24 Mei 2025</span>
                            </div>
                            <div class="text-secondary font-label-sm text-label-sm mt-0.5">Paket 8 Kotak Velvet Gold &amp; Mahar Rustic Glass</div>
                        </div>
                    </td>
                    <td class="py-4 px-space-md text-right font-title-md text-title-md font-semibold text-on-surface">
                        Rp 4.250.000
                    </td>
                    <td class="py-4 px-space-md text-center">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#fdf8ee] text-[#7a5826] font-label-sm text-label-sm font-semibold tracking-wide border border-[#7a5826]/20">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#7a5826] animate-pulse"></span>
                            Pesanan Aktif
                        </span>
                    </td>
                    <td class="py-4 px-space-md text-center">
                        <div class="flex items-center justify-center gap-1.5">
                            <a class="p-2 rounded-lg bg-[#e8f5ec] text-[#2d7a4d] hover:bg-[#d5ebd9] transition-colors" href="https://wa.me/6281289342201?text=Halo%20Kak%20Dinda%2C%20kami%20dari%20Cattaleya%20Seserahan..." target="_blank" title="Kirim WhatsApp Langsung">
                                <span class="material-symbols-outlined text-[18px]">chat</span>
                            </a>
                            <button class="px-2.5 py-1.5 rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors font-title-md text-title-md flex items-center gap-1 cursor-pointer" onclick="openCustomerDrawer('dinda')" title="Buka Profil Lengkap" type="button">
                                <span>Detail</span>
                                <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Row 2: Muhammad Fahmi & Adis -->
                <tr class="hover:bg-surface-container-low/60 transition-colors customer-row" data-city="Tangerang Selatan" data-name="Muhammad Fahmi" data-orders="1" data-phone="085718229940" data-status="active" data-total="2850000">
                    <td class="py-4 px-space-md">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-title-md text-title-md font-semibold flex-shrink-0">
                                MF
                            </div>
                            <div>
                                <div class="font-title-md text-title-md text-on-surface font-medium flex items-center gap-1.5">
                                    <span>Muhammad Fahmi</span>
                                    <span class="w-2 h-2 rounded-full bg-secondary" title="Mempelai Pria"></span>
                                </div>
                                <div class="flex items-center gap-1 text-secondary font-label-sm text-label-sm mt-0.5">
                                    <span class="material-symbols-outlined text-[14px]">alternate_email</span>
                                    <span>@fahmi_alatas</span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="py-4 px-space-md">
                        <div class="flex flex-col gap-1">
                            <div class="flex items-center gap-2">
                                <span class="font-title-md text-title-md text-on-surface font-semibold">0857-1822-9940</span>
                                <span class="inline-flex items-center gap-0.5 px-1.5 py-0.5 rounded-full bg-[#e8f5ec] text-[#2d7a4d] font-label-sm text-[10px] font-bold">
                                    <span class="material-symbols-outlined text-[12px]">verified</span> WA
                                </span>
                            </div>
                            <span class="text-on-surface-variant font-label-sm text-label-sm">m.fahmi94@yahoo.co.id</span>
                        </div>
                    </td>
                    <td class="py-4 px-space-md">
                        <div class="text-on-surface font-medium">Tangerang Selatan</div>
                        <div class="text-on-surface-variant font-label-sm text-label-sm truncate max-w-[160px]" title="Cluster Foresta Woodlake Blok B3 No. 8, BSD City">Foresta Woodlake B3/8 BSD</div>
                    </td>
                    <td class="py-4 px-space-md text-center">
                        <span class="inline-flex items-center justify-center px-2.5 py-1 rounded-full bg-surface-container font-title-md text-title-md font-semibold text-primary">
                            1 Pesanan
                        </span>
                    </td>
                    <td class="py-4 px-space-md">
                        <div>
                            <div class="font-title-md text-title-md text-on-surface font-semibold flex items-center gap-1.5">
                                <span class="text-primary">#ORD-2025-095</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">• 07 Jun 2025</span>
                            </div>
                            <div class="text-secondary font-label-sm text-label-sm mt-0.5">Sewa 6 Kotak Akrilik White Champagne</div>
                        </div>
                    </td>
                    <td class="py-4 px-space-md text-right font-title-md text-title-md font-semibold text-on-surface">
                        Rp 2.850.000
                    </td>
                    <td class="py-4 px-space-md text-center">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#fdf8ee] text-[#7a5826] font-label-sm text-label-sm font-semibold tracking-wide border border-[#7a5826]/20">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#7a5826] animate-pulse"></span>
                            Pesanan Aktif
                        </span>
                    </td>
                    <td class="py-4 px-space-md text-center">
                        <div class="flex items-center justify-center gap-1.5">
                            <a class="p-2 rounded-lg bg-[#e8f5ec] text-[#2d7a4d] hover:bg-[#d5ebd9] transition-colors" href="https://wa.me/6285718229940?text=Halo%20Mas%20Fahmi%2C%20tim%20Cattaleya%20ingin%20konfirmasi..." target="_blank" title="Kirim WhatsApp Langsung">
                                <span class="material-symbols-outlined text-[18px]">chat</span>
                            </a>
                            <button class="px-2.5 py-1.5 rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors font-title-md text-title-md flex items-center gap-1 cursor-pointer" onclick="openCustomerDrawer('fahmi')" title="Buka Profil Lengkap" type="button">
                                <span>Detail</span>
                                <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Row 3: Raisa Shafira -->
                <tr class="hover:bg-surface-container-low/60 transition-colors customer-row" data-city="Bandung Kota" data-name="Raisa Shafira" data-orders="3" data-phone="081390445672" data-status="completed" data-total="6800000">
                    <td class="py-4 px-space-md">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-secondary-fixed text-on-secondary-fixed flex items-center justify-center font-title-md text-title-md font-semibold flex-shrink-0">
                                RS
                            </div>
                            <div>
                                <div class="font-title-md text-title-md text-on-surface font-medium flex items-center gap-1.5">
                                    <span>Raisa Shafira</span>
                                </div>
                                <div class="flex items-center gap-1 text-secondary font-label-sm text-label-sm mt-0.5">
                                    <span class="material-symbols-outlined text-[14px]">alternate_email</span>
                                    <span>@shafiraraisa</span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="py-4 px-space-md">
                        <div class="flex flex-col gap-1">
                            <div class="flex items-center gap-2">
                                <span class="font-title-md text-title-md text-on-surface font-semibold">0813-9044-5672</span>
                                <span class="inline-flex items-center gap-0.5 px-1.5 py-0.5 rounded-full bg-[#e8f5ec] text-[#2d7a4d] font-label-sm text-[10px] font-bold">
                                    <span class="material-symbols-outlined text-[12px]">verified</span> WA
                                </span>
                            </div>
                            <span class="text-on-surface-variant font-label-sm text-label-sm">raisa.shafira@outlook.com</span>
                        </div>
                    </td>
                    <td class="py-4 px-space-md">
                        <div class="text-on-surface font-medium">Bandung</div>
                        <div class="text-on-surface-variant font-label-sm text-label-sm truncate max-w-[160px]" title="Jl. Dago Asri No. 22, Coblong, Kota Bandung">Jl. Dago Asri No. 22</div>
                    </td>
                    <td class="py-4 px-space-md text-center">
                        <span class="inline-flex items-center justify-center px-2.5 py-1 rounded-full bg-surface-container font-title-md text-title-md font-semibold text-primary">
                            3 Pesanan
                        </span>
                    </td>
                    <td class="py-4 px-space-md">
                        <div>
                            <div class="font-title-md text-title-md text-on-surface font-semibold flex items-center gap-1.5">
                                <span class="text-secondary font-semibold">#ORD-2025-042</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">• 18 Apr 2025</span>
                            </div>
                            <div class="text-secondary font-label-sm text-label-sm mt-0.5">Custom Mahar Frame Terrarium &amp; 10 Tray Hantaran</div>
                        </div>
                    </td>
                    <td class="py-4 px-space-md text-right font-title-md text-title-md font-semibold text-on-surface">
                        Rp 6.800.000
                    </td>
                    <td class="py-4 px-space-md text-center">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#eff3ee] text-[#344837] font-label-sm text-label-sm font-semibold tracking-wide border border-[#4f6a54]/20">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#4f6a54]"></span>
                            Selesai
                        </span>
                    </td>
                    <td class="py-4 px-space-md text-center">
                        <div class="flex items-center justify-center gap-1.5">
                            <a class="p-2 rounded-lg bg-[#e8f5ec] text-[#2d7a4d] hover:bg-[#d5ebd9] transition-colors" href="https://wa.me/6281390445672?text=Halo%20Kak%20Raisa%2C%20terima%20kasih%20telah%20mempercayakan..." target="_blank" title="Kirim WhatsApp Langsung">
                                <span class="material-symbols-outlined text-[18px]">chat</span>
                            </a>
                            <button class="px-2.5 py-1.5 rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors font-title-md text-title-md flex items-center gap-1 cursor-pointer" onclick="openCustomerDrawer('raisa')" title="Buka Profil Lengkap" type="button">
                                <span>Detail</span>
                                <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Row 4: Belinda Clara -->
                <tr class="hover:bg-surface-container-low/60 transition-colors customer-row" data-city="Jakarta Barat" data-name="Belinda Clara" data-orders="1" data-phone="082144771098" data-status="active" data-total="1950000">
                    <td class="py-4 px-space-md">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-tertiary-fixed text-on-tertiary-fixed flex items-center justify-center font-title-md text-title-md font-semibold flex-shrink-0">
                                BC
                            </div>
                            <div>
                                <div class="font-title-md text-title-md text-on-surface font-medium flex items-center gap-1.5">
                                    <span>Belinda Clara</span>
                                </div>
                                <div class="flex items-center gap-1 text-secondary font-label-sm text-label-sm mt-0.5">
                                    <span class="material-symbols-outlined text-[14px]">alternate_email</span>
                                    <span>@belindaclara_</span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="py-4 px-space-md">
                        <div class="flex flex-col gap-1">
                            <div class="flex items-center gap-2">
                                <span class="font-title-md text-title-md text-on-surface font-semibold">0821-4477-1098</span>
                                <span class="inline-flex items-center gap-0.5 px-1.5 py-0.5 rounded-full bg-[#e8f5ec] text-[#2d7a4d] font-label-sm text-[10px] font-bold">
                                    <span class="material-symbols-outlined text-[12px]">verified</span> WA
                                </span>
                            </div>
                            <span class="text-on-surface-variant font-label-sm text-label-sm">belinda.clara@gmail.com</span>
                        </div>
                    </td>
                    <td class="py-4 px-space-md">
                        <div class="text-on-surface font-medium">Jakarta Barat</div>
                        <div class="text-on-surface-variant font-label-sm text-label-sm truncate max-w-[160px]" title="Puri Indah Residence Blok C8, Kembangan">Puri Indah Residence C8</div>
                    </td>
                    <td class="py-4 px-space-md text-center">
                        <span class="inline-flex items-center justify-center px-2.5 py-1 rounded-full bg-surface-container font-title-md text-title-md font-semibold text-primary">
                            1 Pesanan
                        </span>
                    </td>
                    <td class="py-4 px-space-md">
                        <div>
                            <div class="font-title-md text-title-md text-on-surface font-semibold flex items-center gap-1.5">
                                <span class="text-primary">#ORD-2025-104</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">• 14 Jun 2025</span>
                            </div>
                            <div class="text-secondary font-label-sm text-label-sm mt-0.5">Sewa 6 Kotak Wood Vintage &amp; Bunga Segar White Lily</div>
                        </div>
                    </td>
                    <td class="py-4 px-space-md text-right font-title-md text-title-md font-semibold text-on-surface">
                        Rp 1.950.000
                    </td>
                    <td class="py-4 px-space-md text-center">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#fdf8ee] text-[#7a5826] font-label-sm text-label-sm font-semibold tracking-wide border border-[#7a5826]/20">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#7a5826] animate-pulse"></span>
                            Pesanan Aktif
                        </span>
                    </td>
                    <td class="py-4 px-space-md text-center">
                        <div class="flex items-center justify-center gap-1.5">
                            <a class="p-2 rounded-lg bg-[#e8f5ec] text-[#2d7a4d] hover:bg-[#d5ebd9] transition-colors" href="https://wa.me/6282144771098?text=Halo%20Kak%20Belinda%2C%20terkait%20pesanan%20kotak%20seserahan..." target="_blank" title="Kirim WhatsApp Langsung">
                                <span class="material-symbols-outlined text-[18px]">chat</span>
                            </a>
                            <button class="px-2.5 py-1.5 rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors font-title-md text-title-md flex items-center gap-1 cursor-pointer" onclick="openCustomerDrawer('belinda')" title="Buka Profil Lengkap" type="button">
                                <span>Detail</span>
                                <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Row 5: Arya Dananjaya -->
                <tr class="hover:bg-surface-container-low/60 transition-colors customer-row" data-city="Bekasi Selatan" data-name="Arya Dananjaya" data-orders="2" data-phone="081122883391" data-status="completed" data-total="3600000">
                    <td class="py-4 px-space-md">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-surface-container-high text-primary flex items-center justify-center font-title-md text-title-md font-semibold flex-shrink-0">
                                AD
                            </div>
                            <div>
                                <div class="font-title-md text-title-md text-on-surface font-medium flex items-center gap-1.5">
                                    <span>Arya Dananjaya</span>
                                </div>
                                <div class="flex items-center gap-1 text-secondary font-label-sm text-label-sm mt-0.5">
                                    <span class="material-symbols-outlined text-[14px]">alternate_email</span>
                                    <span>@aryadnan</span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="py-4 px-space-md">
                        <div class="flex flex-col gap-1">
                            <div class="flex items-center gap-2">
                                <span class="font-title-md text-title-md text-on-surface font-semibold">0811-2288-3391</span>
                                <span class="inline-flex items-center gap-0.5 px-1.5 py-0.5 rounded-full bg-[#e8f5ec] text-[#2d7a4d] font-label-sm text-[10px] font-bold">
                                    <span class="material-symbols-outlined text-[12px]">verified</span> WA
                                </span>
                            </div>
                            <span class="text-on-surface-variant font-label-sm text-label-sm">arya.danan@corporate.co.id</span>
                        </div>
                    </td>
                    <td class="py-4 px-space-md">
                        <div class="text-on-surface font-medium">Kota Bekasi</div>
                        <div class="text-on-surface-variant font-label-sm text-label-sm truncate max-w-[160px]" title="Grand Galaxy City, Rukan Boulevard Selatan">Grand Galaxy City Blok RG</div>
                    </td>
                    <td class="py-4 px-space-md text-center">
                        <span class="inline-flex items-center justify-center px-2.5 py-1 rounded-full bg-surface-container font-title-md text-title-md font-semibold text-primary">
                            2 Pesanan
                        </span>
                    </td>
                    <td class="py-4 px-space-md">
                        <div>
                            <div class="font-title-md text-title-md text-on-surface font-semibold flex items-center gap-1.5">
                                <span class="text-secondary font-semibold">#ORD-2025-019</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">• 02 Feb 2025</span>
                            </div>
                            <div class="text-secondary font-label-sm text-label-sm mt-0.5">Paket Mahar Emas Antam &amp; 7 Kotak Hantaran Kayu</div>
                        </div>
                    </td>
                    <td class="py-4 px-space-md text-right font-title-md text-title-md font-semibold text-on-surface">
                        Rp 3.600.000
                    </td>
                    <td class="py-4 px-space-md text-center">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#eff3ee] text-[#344837] font-label-sm text-label-sm font-semibold tracking-wide border border-[#4f6a54]/20">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#4f6a54]"></span>
                            Selesai
                        </span>
                    </td>
                    <td class="py-4 px-space-md text-center">
                        <div class="flex items-center justify-center gap-1.5">
                            <a class="p-2 rounded-lg bg-[#e8f5ec] text-[#2d7a4d] hover:bg-[#d5ebd9] transition-colors" href="https://wa.me/6281122883391?text=Halo%20Pak%20Arya%2C%20salam%20hangat%20dari%20Cattaleya..." target="_blank" title="Kirim WhatsApp Langsung">
                                <span class="material-symbols-outlined text-[18px]">chat</span>
                            </a>
                            <button class="px-2.5 py-1.5 rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors font-title-md text-title-md flex items-center gap-1 cursor-pointer" onclick="openCustomerDrawer('arya')" title="Buka Profil Lengkap" type="button">
                                <span>Detail</span>
                                <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Table Footer / Pagination -->
    <div class="px-space-md py-3.5 bg-surface-container-low flex flex-col sm:flex-row items-center justify-between gap-3 font-body-md text-body-md text-on-surface-variant border-t border-surface-container-high/60">
        <div>
            Menampilkan <span class="font-semibold text-on-surface font-title-md">1 - 5</span> dari <span class="font-semibold text-on-surface font-title-md">148</span> calon pengantin
        </div>
        <div class="flex items-center gap-1">
            <button class="p-1.5 rounded-lg bg-surface-container text-secondary hover:bg-surface-container-high transition-colors disabled:opacity-40 cursor-pointer" disabled="" type="button">
                <span class="material-symbols-outlined text-[18px]">chevron_left</span>
            </button>
            <button class="px-3 py-1 rounded-lg bg-primary text-on-primary font-semibold font-title-md text-title-md shadow-xs cursor-pointer" type="button">1</button>
            <button class="px-3 py-1 rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors font-title-md text-title-md cursor-pointer" type="button">2</button>
            <button class="px-3 py-1 rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors font-title-md text-title-md cursor-pointer" type="button">3</button>
            <span class="px-1 text-secondary">...</span>
            <button class="px-3 py-1 rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors font-title-md text-title-md cursor-pointer" type="button">30</button>
            <button class="p-1.5 rounded-lg bg-surface-container text-secondary hover:bg-surface-container-high transition-colors cursor-pointer" type="button">
                <span class="material-symbols-outlined text-[18px]">chevron_right</span>
            </button>
        </div>
    </div>
</div>

<!-- Curated Atelier Insight Mosaic Banner -->
<div class="p-space-lg rounded-xl bg-gradient-to-r from-surface-container to-surface-container-low shadow-sm flex flex-col md:flex-row items-center justify-between gap-space-md border border-outline-variant/30">
    <div class="flex items-center gap-4">
        <div class="w-14 h-14 rounded-2xl bg-primary text-on-primary flex items-center justify-center flex-shrink-0 shadow-md">
            <span class="material-symbols-outlined text-[28px]">mark_chat_unread</span>
        </div>
        <div>
            <h4 class="font-headline-md text-headline-md text-on-surface font-semibold">Otomatisasi Pengingat Fitting &amp; Pengembalian Kotak</h4>
            <p class="font-body-md text-body-md text-on-surface-variant mt-0.5">
                Sistem otomatis mengirim pengingat H-3 jadwal drop-off barang seserahan dan H+2 pengembalian kotak via WhatsApp resmi.
            </p>
        </div>
    </div>
    <div class="flex items-center gap-3 flex-shrink-0">
        <button class="px-4 py-2 rounded-xl bg-surface-container-lowest text-primary font-title-md text-title-md hover:bg-surface-container-high transition-all shadow-xs cursor-pointer border border-outline-variant/20" onclick="showToast('Konfigurasi WhatsApp', 'Membuka pengaturan template pengingat otomatis drop-off & pengembalian kotak.')" type="button">
            Kelola Pesan Otomatis
        </button>
    </div>
</div>
