<!-- DETAIL DOSSIER DRAWER (Right Side Modal Inspection) -->
<div class="fixed inset-0 z-50 overflow-hidden pointer-events-none transition-all duration-300 opacity-0" id="customerDrawer">
    <!-- Backdrop Scrim -->
    <div class="absolute inset-0 bg-[#201b17]/40 backdrop-blur-xs transition-opacity duration-300" id="drawerScrim" onclick="closeCustomerDrawer()"></div>
    <div class="absolute inset-y-0 right-0 max-w-full flex pl-10">
        <div class="w-screen max-w-lg bg-surface-container-lowest shadow-2xl flex flex-col transform translate-x-full transition-transform duration-300 ease-out border-l border-outline-variant/30" id="drawerPanel">
            <!-- Drawer Header -->
            <div class="p-space-lg bg-surface-container-low flex items-start justify-between border-b border-surface-container-high/60">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-metric-display text-[20px] font-bold" id="drawerAvatar">
                        DT
                    </div>
                    <div>
                        <div class="flex items-center gap-2">
                            <h3 class="font-headline-md text-headline-md text-on-surface font-semibold" id="drawerName">Dinda Tri Permata</h3>
                            <span class="w-2 h-2 rounded-full bg-primary"></span>
                        </div>
                        <p class="font-label-sm text-label-sm text-secondary uppercase tracking-wider font-semibold" id="drawerRole">Calon Mempelai Wanita</p>
                    </div>
                </div>
                <button class="p-1.5 rounded-full text-secondary hover:bg-surface-container hover:text-on-surface transition-colors cursor-pointer" onclick="closeCustomerDrawer()" type="button">
                    <span class="material-symbols-outlined text-[22px]">close</span>
                </button>
            </div>

            <!-- Central Diamond Ornament Divider -->
            <div class="px-space-lg py-1 flex items-center justify-center text-primary/40 bg-surface-container-low/40">
                <span class="h-px bg-surface-container-high flex-1"></span>
                <span class="px-2 text-xs">◆</span>
                <span class="h-px bg-surface-container-high flex-1"></span>
            </div>

            <!-- Drawer Body (Scrollable) -->
            <div class="flex-1 overflow-y-auto p-space-lg space-y-space-md">
                <!-- Profile Quick Info Card -->
                <div class="p-space-md rounded-xl bg-surface-container-low space-y-3 border border-outline-variant/20">
                    <div class="flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-secondary font-semibold">Data Kontak Lengkap</span>
                        <span class="inline-flex items-center gap-1 text-[11px] px-2 py-0.5 rounded-full bg-[#e8f5ec] text-[#2d7a4d] font-bold">
                            <span class="material-symbols-outlined text-[13px]">verified</span> WhatsApp Terhubung
                        </span>
                    </div>
                    <div class="grid grid-cols-2 gap-2 text-on-surface font-body-md text-body-md pt-1">
                        <div>
                            <span class="block text-secondary font-label-sm text-label-sm font-semibold">Nomor Telepon / WA</span>
                            <span class="font-semibold text-primary font-title-md text-title-md" id="drawerPhone">0812-8934-2201</span>
                        </div>
                        <div>
                            <span class="block text-secondary font-label-sm text-label-sm font-semibold">Instagram Handle</span>
                            <span class="font-semibold text-on-surface" id="drawerInstagram">@dindaprmt</span>
                        </div>
                        <div class="col-span-2">
                            <span class="block text-secondary font-label-sm text-label-sm font-semibold">Email Aktif</span>
                            <span class="font-semibold text-on-surface" id="drawerEmail">dinda.permata@gmail.com</span>
                        </div>
                        <div class="col-span-2">
                            <span class="block text-secondary font-label-sm text-label-sm font-semibold">Alamat Lengkap Pengiriman / Penjemputan</span>
                            <span class="font-normal text-on-surface-variant text-body-md" id="drawerAddress">Jl. Wijaya Timur II No. 14, Melawai, Kebayoran Baru, Jakarta Selatan 12160</span>
                        </div>
                    </div>
                    <div class="pt-2 flex items-center gap-2">
                        <a class="flex-1 inline-flex items-center justify-center gap-2 py-2 rounded-lg bg-[#2d7a4d] text-white font-title-md text-title-md hover:bg-[#23633e] transition-colors shadow-xs" href="#" id="drawerWaBtn" target="_blank">
                            <span class="material-symbols-outlined text-[18px]">chat</span>
                            <span>Chat WhatsApp Sekarang</span>
                        </a>
                        <button class="p-2 rounded-lg bg-surface-container text-secondary hover:bg-surface-container-high transition-colors cursor-pointer" onclick="openEditCustomerFromDrawer()" title="Edit Data Kontak" type="button">
                            <span class="material-symbols-outlined text-[20px]">edit</span>
                        </button>
                    </div>
                </div>

                <!-- Order Summary Cards -->
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <h4 class="font-title-lg text-title-lg text-on-surface font-semibold">Riwayat Pesanan Seserahan &amp; Mahar</h4>
                        <span class="font-label-sm text-label-sm px-2.5 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-semibold" id="drawerOrderCount">2 Pesanan</span>
                    </div>

                    <!-- Dynamic Orders Container -->
                    <div class="space-y-3" id="drawerOrdersContainer">
                        <!-- List Item 1 -->
                        <div class="p-space-md rounded-xl bg-surface-container-low space-y-2 border border-outline-variant/20">
                            <div class="flex items-center justify-between">
                                <span class="font-title-md text-title-md font-semibold text-primary" id="drawerOrder1Id">#ORD-2025-089</span>
                                <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-[#fdf8ee] text-[#7a5826] font-label-sm text-label-sm font-semibold border border-[#7a5826]/20" id="drawerOrder1Status">
                                    Proses Dekorasi
                                </span>
                            </div>
                            <p class="font-body-md text-body-md text-on-surface font-medium" id="drawerOrder1Desc">Sewa 8 Kotak Velvet Gold &amp; Mahar Rustic Glass Geometric</p>
                            <div class="flex items-center justify-between text-secondary font-label-sm text-label-sm pt-1">
                                <span id="drawerOrder1Date">Tanggal Acara: 24 Mei 2025</span>
                                <span class="font-title-md text-title-md text-on-surface font-semibold" id="drawerOrder1Amount">Rp 3.500.000</span>
                            </div>
                            <div class="text-on-surface-variant font-label-sm text-label-sm bg-surface-container p-2 rounded-lg" id="drawerOrder1Note">
                                Catatan: Barang hantaran parfum, tas, skincare sudah diterima di studio. Tinggal perhiasan diserahkan H-2.
                            </div>
                        </div>

                        <!-- List Item 2 -->
                        <div class="p-space-md rounded-xl bg-surface-container-low space-y-2 border border-outline-variant/20" id="drawerOrder2Box">
                            <div class="flex items-center justify-between">
                                <span class="font-title-md text-title-md font-semibold text-secondary" id="drawerOrder2Id">#ORD-2024-118</span>
                                <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-[#eff3ee] text-[#344837] font-label-sm text-label-sm font-semibold border border-[#4f6a54]/20" id="drawerOrder2Status">
                                    Selesai
                                </span>
                            </div>
                            <p class="font-body-md text-body-md text-on-surface font-medium" id="drawerOrder2Desc">Paket Sangjit / Lamaran 4 Tray Akrilik Transparan</p>
                            <div class="flex items-center justify-between text-secondary font-label-sm text-label-sm pt-1">
                                <span id="drawerOrder2Date">Tanggal Acara: 15 Des 2024</span>
                                <span class="font-title-md text-title-md text-on-surface font-semibold" id="drawerOrder2Amount">Rp 750.000</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Spent Callout -->
                <div class="p-space-md rounded-xl bg-surface-container flex items-center justify-between border border-outline-variant/20">
                    <span class="font-title-md text-title-md text-secondary font-medium">Akumulasi Belanja Pelanggan</span>
                    <span class="font-headline-md text-headline-md text-primary font-bold" id="drawerTotal">Rp 4.250.000</span>
                </div>
            </div>

            <!-- Drawer Footer -->
            <div class="p-space-md bg-surface-container-low flex items-center justify-end gap-2 border-t border-surface-container-high/60">
                <button class="px-4 py-2 rounded-lg bg-surface-container text-secondary font-title-md text-title-md hover:bg-surface-container-high transition-colors cursor-pointer" onclick="closeCustomerDrawer()" type="button">
                    Tutup
                </button>
                <button class="px-4 py-2 rounded-lg bg-primary text-on-primary font-title-md text-title-md hover:bg-surface-tint transition-colors flex items-center gap-1.5 cursor-pointer shadow-xs" onclick="printCustomerDossier()" type="button">
                    <span class="material-symbols-outlined text-[18px]">picture_as_pdf</span>
                    <span>Cetak Dossier Klien</span>
                </button>
            </div>
        </div>
    </div>
</div>
