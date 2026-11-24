<!-- Data Table Container -->
<div class="bg-surface-container-lowest rounded-xl shadow-xs overflow-hidden border border-outline-variant/30">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse" id="pesananTable">
            <thead>
                <tr class="bg-surface-container-low text-secondary font-label-sm text-label-sm uppercase tracking-wider border-b border-surface-container-high/60">
                    <th class="py-3.5 px-4 font-semibold">ID Pesanan</th>
                    <th class="py-3.5 px-4 font-semibold">Pelanggan &amp; WhatsApp</th>
                    <th class="py-3.5 px-4 font-semibold">Jenis Pesanan</th>
                    <th class="py-3.5 px-4 font-semibold">Tgl Acara</th>
                    <th class="py-3.5 px-4 font-semibold text-right">Total Harga</th>
                    <th class="py-3.5 px-4 font-semibold">Status Pembayaran</th>
                    <th class="py-3.5 px-4 font-semibold">Status Pesanan</th>
                    <th class="py-3.5 px-4 font-semibold text-center">Aksi Admin</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-surface-container-high/40 font-body-md text-body-md text-on-surface">
                <!-- Row 1: Pengerjaan Florist - Mahar -->
                <tr class="hover:bg-surface-container-low/60 transition-colors order-row" data-type="mahar" data-payment="dp" data-status="pengerjaan_florist">
                    <td class="py-4 px-4 align-top">
                        <span class="font-title-md text-title-md text-primary font-semibold">ORD-2025-090</span>
                        <p class="font-label-sm text-label-sm text-on-surface-variant mt-0.5">Dibuat: 10 Mei 2025</p>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <div class="font-title-md text-title-md font-semibold text-on-surface">Anindya Larasati</div>
                        <div class="flex items-center gap-1.5 text-on-surface-variant mt-0.5">
                            <span class="material-symbols-outlined text-[15px] text-[#2d7a4d]">chat</span>
                            <a class="hover:text-primary hover:underline" href="https://wa.me/6281298442110" target="_blank">+62 812-9844-2110</a>
                        </div>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                            Mahar Akrilik Vitrine
                        </span>
                        <p class="font-label-sm text-label-sm text-secondary mt-1">Ukiran Kayu Jati Rose Gold</p>
                    </td>
                    <td class="py-4 px-4 align-top whitespace-nowrap">
                        <div class="flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-[16px] text-secondary">event</span>
                            <span class="font-semibold text-on-surface">22 Okt 2025</span>
                        </div>
                        <span class="font-label-sm text-label-sm text-primary mt-0.5 block font-medium">H-160 Acara</span>
                    </td>
                    <td class="py-4 px-4 align-top text-right whitespace-nowrap">
                        <div class="font-title-md text-title-md font-semibold text-on-surface">Rp 1.600.000</div>
                        <div class="font-label-sm text-label-sm text-on-surface-variant mt-0.5">DP Rp 800rb / Sisa Rp 800rb</div>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#fdf8ee] text-[#7a5826] font-label-sm text-label-sm font-semibold border border-[#7a5826]/20">
                            <span class="w-2 h-2 rounded-full bg-[#7a5826]"></span>
                            DP Terbayar (50%)
                        </span>
                        <p class="font-label-sm text-label-sm text-on-surface-variant mt-1 font-mono text-[11px]">Midtrans #TRX-88219</p>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">
                            <span class="w-1.5 h-1.5 rounded-full bg-primary animate-ping"></span>
                            Pengerjaan Florist
                        </span>
                        <p class="font-label-sm text-label-sm text-secondary mt-1">Artisan: Mbak Ratna (Floral)</p>
                    </td>
                    <td class="py-4 px-4 align-top text-center">
                        <div class="flex items-center justify-center gap-1">
                            <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openDetailModal('ORD-2025-090')" title="Lihat Detail Pesanan" type="button">
                                <span class="material-symbols-outlined text-[18px]">visibility</span>
                            </button>
                            <button class="p-2 rounded-lg bg-surface-container hover:bg-primary hover:text-on-primary text-secondary transition-colors cursor-pointer" onclick="openStatusChangeModal('ORD-2025-090', 'Pengerjaan Florist')" title="Ubah Status Operasional" type="button">
                                <span class="material-symbols-outlined text-[18px]">published_with_changes</span>
                            </button>
                            <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openEditModal('ORD-2025-090')" title="Edit Data Pesanan" type="button">
                                <span class="material-symbols-outlined text-[18px]">edit</span>
                            </button>
                            <button class="p-2 rounded-lg bg-[#eff5f1] hover:bg-[#2d7a4d] text-[#2d7a4d] hover:text-white transition-colors cursor-pointer" onclick="triggerWhatsApp('ORD-2025-090', '+6281298442110', 'Anindya Larasati', 'update_progres')" title="Kirim WA Notifikasi" type="button">
                                <span class="material-symbols-outlined text-[18px]">send</span>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Row 2: Sedang Disewa - Kotak Seserahan Bundling -->
                <tr class="hover:bg-surface-container-low/60 transition-colors order-row" data-type="sewa" data-payment="lunas" data-status="sedang_disewa">
                    <td class="py-4 px-4 align-top">
                        <span class="font-title-md text-title-md text-primary font-semibold">ORD-2025-084</span>
                        <p class="font-label-sm text-label-sm text-on-surface-variant mt-0.5">Dibuat: 02 Mei 2025</p>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <div class="font-title-md text-title-md font-semibold text-on-surface">Bramantyo &amp; Nadia</div>
                        <div class="flex items-center gap-1.5 text-on-surface-variant mt-0.5">
                            <span class="material-symbols-outlined text-[15px] text-[#2d7a4d]">chat</span>
                            <a class="hover:text-primary hover:underline" href="https://wa.me/6287739100234" target="_blank">+62 877-3910-0234</a>
                        </div>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                            Sewa Kotak (8 Tray)
                        </span>
                        <p class="font-label-sm text-label-sm text-secondary mt-1">Series White Heritage Pearl</p>
                    </td>
                    <td class="py-4 px-4 align-top whitespace-nowrap">
                        <div class="flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-[16px] text-secondary">event</span>
                            <span class="font-semibold text-on-surface">17 Mei 2025</span>
                        </div>
                        <span class="font-label-sm text-label-sm text-error mt-0.5 block font-semibold">H-2 Acara (Sedang Sewa)</span>
                    </td>
                    <td class="py-4 px-4 align-top text-right whitespace-nowrap">
                        <div class="font-title-md text-title-md font-semibold text-on-surface">Rp 2.450.000</div>
                        <div class="font-label-sm text-label-sm text-[#2d7a4d] mt-0.5 font-medium">Lunas (Termasuk Jaminan)</div>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#eff3ee] text-[#344837] font-label-sm text-label-sm font-semibold border border-[#4f6a54]/20">
                            <span class="w-2 h-2 rounded-full bg-[#4f6a54]"></span>
                            Lunas Penuh
                        </span>
                        <p class="font-label-sm text-label-sm text-on-surface-variant mt-1 text-[11px]">Deposit Rp 500rb ditahan</p>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#eff4f7] text-[#455765] font-label-sm text-label-sm font-semibold border border-[#455765]/20">
                            <span class="w-2 h-2 rounded-full bg-[#455765]"></span>
                            Sedang Disewa
                        </span>
                        <p class="font-label-sm text-label-sm text-secondary mt-1">Jadwal Balik: 19 Mei 2025</p>
                    </td>
                    <td class="py-4 px-4 align-top text-center">
                        <div class="flex items-center justify-center gap-1">
                            <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openDetailModal('ORD-2025-084')" title="Lihat Detail Pesanan" type="button">
                                <span class="material-symbols-outlined text-[18px]">visibility</span>
                            </button>
                            <button class="p-2 rounded-lg bg-surface-container hover:bg-primary hover:text-on-primary text-secondary transition-colors cursor-pointer" onclick="openStatusChangeModal('ORD-2025-084', 'Sedang Disewa')" title="Ubah Status Operasional" type="button">
                                <span class="material-symbols-outlined text-[18px]">published_with_changes</span>
                            </button>
                            <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openEditModal('ORD-2025-084')" title="Edit Data Pesanan" type="button">
                                <span class="material-symbols-outlined text-[18px]">edit</span>
                            </button>
                            <button class="p-2 rounded-lg bg-[#eff5f1] hover:bg-[#2d7a4d] text-[#2d7a4d] hover:text-white transition-colors cursor-pointer" onclick="triggerWhatsApp('ORD-2025-084', '+6287739100234', 'Bramantyo &amp; Nadia', 'reminder_pengembalian')" title="Kirim WA Notifikasi" type="button">
                                <span class="material-symbols-outlined text-[18px]">send</span>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Row 3: Siap Diambil - Bundling -->
                <tr class="hover:bg-surface-container-low/60 transition-colors order-row" data-type="bundling" data-payment="menunggu_dp" data-status="siap_ambil">
                    <td class="py-4 px-4 align-top">
                        <span class="font-title-md text-title-md text-primary font-semibold">ORD-2025-078</span>
                        <p class="font-label-sm text-label-sm text-on-surface-variant mt-0.5">Dibuat: 28 Apr 2025</p>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <div class="font-title-md text-title-md font-semibold text-on-surface">Clarissa Aurelia</div>
                        <div class="flex items-center gap-1.5 text-on-surface-variant mt-0.5">
                            <span class="material-symbols-outlined text-[15px] text-[#2d7a4d]">chat</span>
                            <a class="hover:text-primary hover:underline" href="https://wa.me/6281311099238" target="_blank">+62 813-1109-9238</a>
                        </div>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-primary-container"></span>
                            Bundling Mahar + 6 Kotak
                        </span>
                        <p class="font-label-sm text-label-sm text-secondary mt-1">Tema: Champagne Bloom Terracotta</p>
                    </td>
                    <td class="py-4 px-4 align-top whitespace-nowrap">
                        <div class="flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-[16px] text-secondary">event</span>
                            <span class="font-semibold text-on-surface">18 Mei 2025</span>
                        </div>
                        <span class="font-label-sm text-label-sm text-primary mt-0.5 block font-semibold">H-3 Acara</span>
                    </td>
                    <td class="py-4 px-4 align-top text-right whitespace-nowrap">
                        <div class="font-title-md text-title-md font-semibold text-on-surface">Rp 3.850.000</div>
                        <div class="font-label-sm text-label-sm text-error font-medium mt-0.5">Kurang Rp 1.925.000</div>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-error-container/40 text-on-error-container font-label-sm text-label-sm font-semibold border border-error/20">
                            <span class="w-2 h-2 rounded-full bg-error"></span>
                            Menunggu Pelunasan H-3
                        </span>
                        <p class="font-label-sm text-label-sm text-on-surface-variant mt-1 text-[11px]">Invoice dikirim via WA</p>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#f4e0c2] text-on-primary-fixed-variant font-label-sm text-label-sm font-semibold border border-primary/20">
                            <span class="w-2 h-2 rounded-full bg-primary"></span>
                            Siap Diambil / Kirim
                        </span>
                        <p class="font-label-sm text-label-sm text-secondary mt-1">Di Rak Studio Utama</p>
                    </td>
                    <td class="py-4 px-4 align-top text-center">
                        <div class="flex items-center justify-center gap-1">
                            <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openDetailModal('ORD-2025-078')" title="Lihat Detail Pesanan" type="button">
                                <span class="material-symbols-outlined text-[18px]">visibility</span>
                            </button>
                            <button class="p-2 rounded-lg bg-surface-container hover:bg-primary hover:text-on-primary text-secondary transition-colors cursor-pointer" onclick="openStatusChangeModal('ORD-2025-078', 'Siap Diambil')" title="Ubah Status Operasional" type="button">
                                <span class="material-symbols-outlined text-[18px]">published_with_changes</span>
                            </button>
                            <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openEditModal('ORD-2025-078')" title="Edit Data Pesanan" type="button">
                                <span class="material-symbols-outlined text-[18px]">edit</span>
                            </button>
                            <button class="p-2 rounded-lg bg-error-container hover:bg-error text-error hover:text-white transition-colors cursor-pointer" onclick="triggerWhatsApp('ORD-2025-078', '+6281311099238', 'Clarissa Aurelia', 'tagihan_pelunasan')" title="Kirim Tagihan Pelunasan WA" type="button">
                                <span class="material-symbols-outlined text-[18px]">price_change</span>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Row 4: Antrean Desain - Mahar Custom -->
                <tr class="hover:bg-surface-container-low/60 transition-colors order-row" data-type="mahar" data-payment="dp" data-status="antrean_desain">
                    <td class="py-4 px-4 align-top">
                        <span class="font-title-md text-title-md text-primary font-semibold">ORD-2025-095</span>
                        <p class="font-label-sm text-label-sm text-on-surface-variant mt-0.5">Dibuat: 14 Mei 2025</p>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <div class="font-title-md text-title-md font-semibold text-on-surface">Dimas &amp; Farida</div>
                        <div class="flex items-center gap-1.5 text-on-surface-variant mt-0.5">
                            <span class="material-symbols-outlined text-[15px] text-[#2d7a4d]">chat</span>
                            <a class="hover:text-primary hover:underline" href="https://wa.me/6285220334811" target="_blank">+62 852-2033-4811</a>
                        </div>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                            Mahar Kaligrafi Koin Emas
                        </span>
                        <p class="font-label-sm text-label-sm text-secondary mt-1">Ukuran 40x50 Frame Gold Leaf</p>
                    </td>
                    <td class="py-4 px-4 align-top whitespace-nowrap">
                        <div class="flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-[16px] text-secondary">event</span>
                            <span class="font-semibold text-on-surface">06 Jun 2025</span>
                        </div>
                        <span class="font-label-sm text-label-sm text-secondary mt-0.5 block">H-22 Acara</span>
                    </td>
                    <td class="py-4 px-4 align-top text-right whitespace-nowrap">
                        <div class="font-title-md text-title-md font-semibold text-on-surface">Rp 2.100.000</div>
                        <div class="font-label-sm text-label-sm text-on-surface-variant mt-0.5">DP Rp 1.050.000 masuk</div>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#fdf8ee] text-[#7a5826] font-label-sm text-label-sm font-semibold border border-[#7a5826]/20">
                            <span class="w-2 h-2 rounded-full bg-[#7a5826]"></span>
                            DP Terbayar (50%)
                        </span>
                        <p class="font-label-sm text-label-sm text-on-surface-variant mt-1 text-[11px]">BCA Transfer Offline</p>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container-high text-on-surface-variant font-label-sm text-label-sm font-semibold">
                            <span class="w-1.5 h-1.5 rounded-full bg-outline"></span>
                            Dalam Antrean Desain
                        </span>
                        <p class="font-label-sm text-label-sm text-secondary mt-1">Draft mockup kaligrafi V1</p>
                    </td>
                    <td class="py-4 px-4 align-top text-center">
                        <div class="flex items-center justify-center gap-1">
                            <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openDetailModal('ORD-2025-095')" title="Lihat Detail Pesanan" type="button">
                                <span class="material-symbols-outlined text-[18px]">visibility</span>
                            </button>
                            <button class="p-2 rounded-lg bg-surface-container hover:bg-primary hover:text-on-primary text-secondary transition-colors cursor-pointer" onclick="openStatusChangeModal('ORD-2025-095', 'Antrean Desain')" title="Ubah Status Operasional" type="button">
                                <span class="material-symbols-outlined text-[18px]">published_with_changes</span>
                            </button>
                            <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openEditModal('ORD-2025-095')" title="Edit Data Pesanan" type="button">
                                <span class="material-symbols-outlined text-[18px]">edit</span>
                            </button>
                            <button class="p-2 rounded-lg bg-[#eff5f1] hover:bg-[#2d7a4d] text-[#2d7a4d] hover:text-white transition-colors cursor-pointer" onclick="triggerWhatsApp('ORD-2025-095', '+6285220334811', 'Dimas &amp; Farida', 'preview_desain')" title="Kirim WA Preview Mockup" type="button">
                                <span class="material-symbols-outlined text-[18px]">send</span>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Row 5: Selesai - Arsip Pesanan -->
                <tr class="hover:bg-surface-container-low/60 transition-colors opacity-90 order-row" data-type="sewa" data-payment="lunas" data-status="selesai">
                    <td class="py-4 px-4 align-top">
                        <span class="font-title-md text-title-md text-secondary font-semibold">ORD-2025-062</span>
                        <p class="font-label-sm text-label-sm text-on-surface-variant mt-0.5">Dibuat: 12 Apr 2025</p>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <div class="font-title-md text-title-md font-semibold text-on-surface">Rizky &amp; Amanda</div>
                        <div class="flex items-center gap-1.5 text-on-surface-variant mt-0.5">
                            <span class="material-symbols-outlined text-[15px] text-[#2d7a4d]">chat</span>
                            <a class="hover:text-primary hover:underline" href="https://wa.me/6281809228833" target="_blank">+62 818-0922-8833</a>
                        </div>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                            Sewa Kotak (10 Tray)
                        </span>
                        <p class="font-label-sm text-label-sm text-secondary mt-1">Series Velvet Sage Emas</p>
                    </td>
                    <td class="py-4 px-4 align-top whitespace-nowrap">
                        <div class="flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-[16px] text-secondary">event_available</span>
                            <span class="font-semibold text-on-surface">04 Mei 2025</span>
                        </div>
                        <span class="font-label-sm text-label-sm text-[#2d7a4d] mt-0.5 block font-semibold">Acara Telah Berlangsung</span>
                    </td>
                    <td class="py-4 px-4 align-top text-right whitespace-nowrap">
                        <div class="font-title-md text-title-md font-semibold text-on-surface">Rp 3.200.000</div>
                        <div class="font-label-sm text-label-sm text-[#2d7a4d] mt-0.5">Deposit dikembalikan</div>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#eff3ee] text-[#344837] font-label-sm text-label-sm font-semibold border border-[#4f6a54]/20">
                            <span class="w-2 h-2 rounded-full bg-[#4f6a54]"></span>
                            Lunas Penuh
                        </span>
                        <p class="font-label-sm text-label-sm text-on-surface-variant mt-1 text-[11px]">Closed &amp; Reconciled</p>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#eff3ee] text-[#344837] font-label-sm text-label-sm font-semibold border border-[#4f6a54]/20">
                            <span class="w-2 h-2 rounded-full bg-[#4f6a54]"></span>
                            Selesai
                        </span>
                        <p class="font-label-sm text-label-sm text-secondary mt-1">Kotak kembali aman</p>
                    </td>
                    <td class="py-4 px-4 align-top text-center">
                        <div class="flex items-center justify-center gap-1">
                            <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openDetailModal('ORD-2025-062')" title="Lihat Detail Pesanan" type="button">
                                <span class="material-symbols-outlined text-[18px]">visibility</span>
                            </button>
                            <button class="p-2 rounded-lg bg-surface-container text-secondary opacity-60 cursor-not-allowed" onclick="openStatusChangeModal('ORD-2025-062', 'Selesai')" title="Status Arsip" type="button">
                                <span class="material-symbols-outlined text-[18px]">lock</span>
                            </button>
                            <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openEditModal('ORD-2025-062')" title="Edit Data" type="button">
                                <span class="material-symbols-outlined text-[18px]">edit</span>
                            </button>
                            <button class="p-2 rounded-lg bg-[#eff5f1] hover:bg-[#2d7a4d] text-[#2d7a4d] hover:text-white transition-colors cursor-pointer" onclick="triggerWhatsApp('ORD-2025-062', '+6281809228833', 'Rizky &amp; Amanda', 'ucapan_terima_kasih')" title="Kirim WA Ucapan &amp; Ulasan" type="button">
                                <span class="material-symbols-outlined text-[18px]">sentiment_satisfied</span>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Row 6: Menunggu Pembayaran Midtrans -->
                <tr class="hover:bg-surface-container-low/60 transition-colors order-row" data-type="mahar" data-payment="menunggu_dp" data-status="menunggu_pembayaran">
                    <td class="py-4 px-4 align-top">
                        <span class="font-title-md text-title-md text-primary font-semibold">ORD-2025-102</span>
                        <p class="font-label-sm text-label-sm text-on-surface-variant mt-0.5 font-medium">Dibuat: 15 Mei 2025 (Baru)</p>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <div class="font-title-md text-title-md font-semibold text-on-surface">Taufik Hidayat</div>
                        <div class="flex items-center gap-1.5 text-on-surface-variant mt-0.5">
                            <span class="material-symbols-outlined text-[15px] text-[#2d7a4d]">chat</span>
                            <a class="hover:text-primary hover:underline" href="https://wa.me/6289655441029" target="_blank">+62 896-5544-1029</a>
                        </div>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                            Mahar Geometris Logam Mulia
                        </span>
                        <p class="font-label-sm text-label-sm text-secondary mt-1">Tipe Hexagon Brass Series</p>
                    </td>
                    <td class="py-4 px-4 align-top whitespace-nowrap">
                        <div class="flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-[16px] text-secondary">event</span>
                            <span class="font-semibold text-on-surface">12 Jul 2025</span>
                        </div>
                        <span class="font-label-sm text-label-sm text-secondary mt-0.5 block">H-58 Acara</span>
                    </td>
                    <td class="py-4 px-4 align-top text-right whitespace-nowrap">
                        <div class="font-title-md text-title-md font-semibold text-on-surface">Rp 1.450.000</div>
                        <div class="font-label-sm text-label-sm text-error mt-0.5 font-medium">Belum ada pembayaran DP</div>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-error-container/50 text-on-error-container font-label-sm text-label-sm font-semibold border border-error/20">
                            <span class="w-2 h-2 rounded-full bg-error animate-pulse"></span>
                            Menunggu Pembayaran
                        </span>
                        <p class="font-label-sm text-label-sm text-on-surface-variant mt-1 text-[11px]">Midtrans Snap Expired 23:59</p>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm font-semibold border border-outline-variant/30">
                            <span class="w-1.5 h-1.5 rounded-full bg-outline"></span>
                            Menunggu Konfirmasi DP
                        </span>
                        <p class="font-label-sm text-label-sm text-secondary mt-1">Belum masuk antrean studio</p>
                    </td>
                    <td class="py-4 px-4 align-top text-center">
                        <div class="flex items-center justify-center gap-1">
                            <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openDetailModal('ORD-2025-102')" title="Lihat Detail Pesanan" type="button">
                                <span class="material-symbols-outlined text-[18px]">visibility</span>
                            </button>
                            <button class="p-2 rounded-lg bg-surface-container hover:bg-primary hover:text-on-primary text-secondary transition-colors cursor-pointer" onclick="openStatusChangeModal('ORD-2025-102', 'Menunggu Pembayaran')" title="Ubah Status Operasional" type="button">
                                <span class="material-symbols-outlined text-[18px]">published_with_changes</span>
                            </button>
                            <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openEditModal('ORD-2025-102')" title="Edit Data Pesanan" type="button">
                                <span class="material-symbols-outlined text-[18px]">edit</span>
                            </button>
                            <button class="p-2 rounded-lg bg-[#eff5f1] hover:bg-[#2d7a4d] text-[#2d7a4d] hover:text-white transition-colors cursor-pointer" onclick="triggerWhatsApp('ORD-2025-102', '+6289655441029', 'Taufik Hidayat', 'reminder_snap_payment')" title="Kirim Ulang Link Midtrans" type="button">
                                <span class="material-symbols-outlined text-[18px]">send</span>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Row 7: Pengerjaan Florist - Sewa Kotak 6 Tray -->
                <tr class="hover:bg-surface-container-low/60 transition-colors order-row" data-type="sewa" data-payment="dp" data-status="pengerjaan_florist">
                    <td class="py-4 px-4 align-top">
                        <span class="font-title-md text-title-md text-primary font-semibold">ORD-2025-088</span>
                        <p class="font-label-sm text-label-sm text-on-surface-variant mt-0.5">Dibuat: 08 Mei 2025</p>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <div class="font-title-md text-title-md font-semibold text-on-surface">Vania Safitri</div>
                        <div class="flex items-center gap-1.5 text-on-surface-variant mt-0.5">
                            <span class="material-symbols-outlined text-[15px] text-[#2d7a4d]">chat</span>
                            <a class="hover:text-primary hover:underline" href="https://wa.me/6281229900412" target="_blank">+62 812-2990-0412</a>
                        </div>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                            Sewa Kotak (6 Tray)
                        </span>
                        <p class="font-label-sm text-label-sm text-secondary mt-1">Series Rustic Terracotta Wood</p>
                    </td>
                    <td class="py-4 px-4 align-top whitespace-nowrap">
                        <div class="flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-[16px] text-secondary">event</span>
                            <span class="font-semibold text-on-surface">25 Mei 2025</span>
                        </div>
                        <span class="font-label-sm text-label-sm text-primary mt-0.5 block font-medium">H-10 Acara</span>
                    </td>
                    <td class="py-4 px-4 align-top text-right whitespace-nowrap">
                        <div class="font-title-md text-title-md font-semibold text-on-surface">Rp 1.800.000</div>
                        <div class="font-label-sm text-label-sm text-on-surface-variant mt-0.5">DP Rp 900rb / Sisa Rp 900rb</div>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#fdf8ee] text-[#7a5826] font-label-sm text-label-sm font-semibold border border-[#7a5826]/20">
                            <span class="w-2 h-2 rounded-full bg-[#7a5826]"></span>
                            DP Terbayar (50%)
                        </span>
                        <p class="font-label-sm text-label-sm text-on-surface-variant mt-1 text-[11px]">Midtrans #TRX-87992</p>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">
                            <span class="w-1.5 h-1.5 rounded-full bg-primary animate-ping"></span>
                            Pengerjaan Florist
                        </span>
                        <p class="font-label-sm text-label-sm text-secondary mt-1">Artisan: Mas Daffa (Arrangement)</p>
                    </td>
                    <td class="py-4 px-4 align-top text-center">
                        <div class="flex items-center justify-center gap-1">
                            <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openDetailModal('ORD-2025-088')" title="Lihat Detail Pesanan" type="button">
                                <span class="material-symbols-outlined text-[18px]">visibility</span>
                            </button>
                            <button class="p-2 rounded-lg bg-surface-container hover:bg-primary hover:text-on-primary text-secondary transition-colors cursor-pointer" onclick="openStatusChangeModal('ORD-2025-088', 'Pengerjaan Florist')" title="Ubah Status Operasional" type="button">
                                <span class="material-symbols-outlined text-[18px]">published_with_changes</span>
                            </button>
                            <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openEditModal('ORD-2025-088')" title="Edit Data Pesanan" type="button">
                                <span class="material-symbols-outlined text-[18px]">edit</span>
                            </button>
                            <button class="p-2 rounded-lg bg-[#eff5f1] hover:bg-[#2d7a4d] text-[#2d7a4d] hover:text-white transition-colors cursor-pointer" onclick="triggerWhatsApp('ORD-2025-088', '+6281229900412', 'Vania Safitri', 'update_progres')" title="Kirim WA Notifikasi" type="button">
                                <span class="material-symbols-outlined text-[18px]">send</span>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Row 8: Dibatalkan -->
                <tr class="hover:bg-surface-container-low/60 transition-colors opacity-80 order-row" data-type="mahar" data-payment="all" data-status="dibatalkan">
                    <td class="py-4 px-4 align-top">
                        <span class="font-title-md text-title-md text-secondary line-through">ORD-2025-055</span>
                        <p class="font-label-sm text-label-sm text-on-surface-variant mt-0.5">Dibuat: 05 Apr 2025</p>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <div class="font-title-md text-title-md font-semibold text-on-surface">Arya Wiguna</div>
                        <div class="flex items-center gap-1.5 text-on-surface-variant mt-0.5">
                            <span class="material-symbols-outlined text-[15px] text-[#2d7a4d]">chat</span>
                            <a class="hover:text-primary hover:underline" href="https://wa.me/628177443109" target="_blank">+62 817-7443-109</a>
                        </div>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-outline"></span>
                            Mahar Koin Minimalis
                        </span>
                        <p class="font-label-sm text-label-sm text-secondary mt-1">Frame Natural Pine 30x30</p>
                    </td>
                    <td class="py-4 px-4 align-top whitespace-nowrap">
                        <div class="flex items-center gap-1.5 text-on-surface-variant">
                            <span class="material-symbols-outlined text-[16px]">cancel</span>
                            <span class="font-normal">Jadwal Acara Batal</span>
                        </div>
                        <span class="font-label-sm text-label-sm text-on-surface-variant mt-0.5 block">Permintaan Klien</span>
                    </td>
                    <td class="py-4 px-4 align-top text-right whitespace-nowrap">
                        <div class="font-title-md text-title-md font-semibold text-on-surface-variant">Rp 1.150.000</div>
                        <div class="font-label-sm text-label-sm text-secondary mt-0.5">DP Dikembalikan (Kebijakan)</div>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container-high text-on-surface-variant font-label-sm text-label-sm font-semibold border border-outline-variant/30">
                            <span class="w-2 h-2 rounded-full bg-outline"></span>
                            Refund Diproses
                        </span>
                        <p class="font-label-sm text-label-sm text-on-surface-variant mt-1 text-[11px]">Selesai 08 Apr 2025</p>
                    </td>
                    <td class="py-4 px-4 align-top">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-error-container/40 text-on-error-container font-label-sm text-label-sm font-semibold border border-error/20">
                            <span class="w-2 h-2 rounded-full bg-error"></span>
                            Dibatalkan
                        </span>
                        <p class="font-label-sm text-label-sm text-secondary mt-1">Slot kalender dirilis kembali</p>
                    </td>
                    <td class="py-4 px-4 align-top text-center">
                        <div class="flex items-center justify-center gap-1">
                            <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openDetailModal('ORD-2025-055')" title="Lihat Detail Pesanan" type="button">
                                <span class="material-symbols-outlined text-[18px]">visibility</span>
                            </button>
                            <button class="p-2 rounded-lg bg-surface-container text-secondary opacity-50 cursor-not-allowed" onclick="openStatusChangeModal('ORD-2025-055', 'Dibatalkan')" title="Status Dibatalkan" type="button">
                                <span class="material-symbols-outlined text-[18px]">lock</span>
                            </button>
                            <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors cursor-pointer" onclick="openEditModal('ORD-2025-055')" title="Edit Data" type="button">
                                <span class="material-symbols-outlined text-[18px]">edit</span>
                            </button>
                            <button class="p-2 rounded-lg bg-[#eff5f1] hover:bg-[#2d7a4d] text-[#2d7a4d] hover:text-white transition-colors cursor-pointer" onclick="triggerWhatsApp('ORD-2025-055', '+628177443109', 'Arya Wiguna', 'bukti_refund')" title="Kirim WA Bukti Refund" type="button">
                                <span class="material-symbols-outlined text-[18px]">send</span>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Pagination & Status Summary Footer -->
    <div class="p-space-md bg-surface-container-low flex flex-col sm:flex-row items-center justify-between gap-space-sm border-t border-surface-container-high/60">
        <div class="font-body-md text-body-md text-on-surface-variant">
            Menampilkan <span class="font-semibold text-on-surface">1 - 8</span> dari <span class="font-semibold text-on-surface">184</span> data pesanan aktif studio
        </div>
        <div class="flex items-center gap-1.5">
            <button class="p-2 rounded-lg bg-surface-container text-secondary hover:bg-surface-container-high disabled:opacity-40 transition-colors cursor-not-allowed" disabled="" type="button">
                <span class="material-symbols-outlined text-[18px]">chevron_left</span>
            </button>
            <button class="w-8 h-8 rounded-lg bg-primary text-on-primary font-label-md text-label-md font-semibold flex items-center justify-center cursor-pointer shadow-xs" type="button">1</button>
            <button class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md flex items-center justify-center transition-colors cursor-pointer" type="button">2</button>
            <button class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md flex items-center justify-center transition-colors cursor-pointer" type="button">3</button>
            <span class="px-1 text-secondary">...</span>
            <button class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md flex items-center justify-center transition-colors cursor-pointer" type="button">23</button>
            <button class="p-2 rounded-lg bg-surface-container text-secondary hover:bg-surface-container-high transition-colors cursor-pointer" type="button">
                <span class="material-symbols-outlined text-[18px]">chevron_right</span>
            </button>
        </div>
    </div>
</div>
