@extends('layouts.admin')

@section('title', 'Dossier Operasional #ORD-2025-0842 — Cattaleya')

@section('content')
<div class="flex flex-col w-full">
    <div class="w-full max-w-[1536px] mx-auto py-space-md space-y-space-lg">

        <!-- Top Breadcrumb & Executive Title Banner -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md mb-space-sm">
            <div>
                <div class="flex items-center gap-space-xs text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider mb-1.5">
                    <a class="hover:text-primary transition-colors flex items-center gap-1" href="{{ route('admin.pesanan') }}">
                        <span class="material-symbols-outlined text-[14px]">arrow_back</span>
                        <span>Pesanan</span>
                    </a>
                    <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                    <span class="text-secondary font-semibold">Dossier Operasional</span>
                    <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                    <span class="text-primary font-bold">#ORD-2025-0842</span>
                </div>
                <div class="flex flex-wrap items-baseline gap-space-sm">
                    <h2 class="font-headline-lg text-headline-lg text-on-surface font-semibold tracking-tight">Pesanan: Anindya &amp; Raditya</h2>
                    <span class="font-label-sm text-label-sm px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-container font-semibold">
                        Paket Royal Wedding Atelier
                    </span>
                </div>
                <p class="font-body-md text-body-md text-on-surface-variant mt-1">
                    ID Internal: <span class="font-title-md text-title-md text-on-surface font-mono font-medium">CTL-JKT-88219</span> • Terdaftar sejak 18 April 2025 oleh Siti Sarah
                </p>
            </div>

            <!-- Live Status Pill & Quick SLA Marker -->
            <div class="flex items-center gap-space-sm self-start md:self-auto">
                <div class="bg-surface-container px-space-md py-2.5 rounded-xl shadow-xs flex items-center gap-space-sm border border-outline-variant/30">
                    <span class="relative flex h-3 w-3">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-primary"></span>
                    </span>
                    <div class="flex flex-col">
                        <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Status Operasional Aktif</span>
                        <span class="font-title-md text-title-md text-primary font-bold">Sedang Disewa (Active Rental)</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ADMIN COMMAND BAR (Prominent Action Bar) -->
        <div class="bg-surface-container-low rounded-xl p-space-md shadow-xs flex flex-wrap items-center justify-between gap-space-md border border-outline-variant/30">
            <div class="flex items-center gap-space-sm">
                <span class="material-symbols-outlined text-primary text-[24px]">verified_user</span>
                <span class="font-title-md text-title-md text-on-surface font-semibold">Tindakan Khusus Admin</span>
                <span class="text-on-surface-variant font-label-sm text-label-sm hidden sm:inline">— Kontrol inventaris dan integrasi gateway</span>
            </div>
            <div class="flex flex-wrap items-center gap-space-sm">
                <!-- 1. Tombol Ubah Pesanan -->
                <button class="inline-flex items-center gap-2 px-3.5 py-2.5 rounded-lg bg-surface-container-lowest text-on-surface font-title-md text-title-md hover:bg-surface-container-high transition-all shadow-xs cursor-pointer border border-outline-variant/30" id="btn-edit-order" type="button">
                    <span class="material-symbols-outlined text-[18px] text-secondary">edit_calendar</span>
                    <span>Ubah Pesanan</span>
                </button>

                <!-- 2. Tombol Ubah Status Pesanan -->
                <div class="relative">
                    <button class="inline-flex items-center gap-2 px-3.5 py-2.5 rounded-lg bg-primary-container text-on-primary-container font-title-md text-title-md hover:opacity-95 transition-all shadow-xs cursor-pointer" id="btn-status-dropdown" type="button">
                        <span class="material-symbols-outlined text-[18px]">published_with_changes</span>
                        <span>Ubah Status Pesanan</span>
                        <span class="material-symbols-outlined text-[18px]">arrow_drop_down</span>
                    </button>
                    <!-- Dropdown Modal State -->
                    <div class="hidden absolute right-0 mt-2 w-72 bg-surface-container-lowest rounded-xl shadow-xl z-30 p-2 text-on-surface border border-outline-variant/30" id="status-dropdown-menu">
                        <div class="px-3 py-2 font-label-sm text-label-sm text-secondary uppercase tracking-wider font-semibold">Pilih Tahapan Produksi</div>
                        <button class="w-full text-left px-3 py-2 rounded-lg font-title-md text-title-md text-on-surface hover:bg-surface-container flex items-center justify-between cursor-pointer" onclick="updateStatusQuick('Pengerjaan Florist')" type="button">
                            <span>Pengerjaan Florist</span>
                            <span class="material-symbols-outlined text-[16px] text-secondary">brush</span>
                        </button>
                        <button class="w-full text-left px-3 py-2 rounded-lg font-title-md text-title-md text-on-surface hover:bg-surface-container flex items-center justify-between cursor-pointer" onclick="updateStatusQuick('Siap Diambil')" type="button">
                            <span>Siap Diambil</span>
                            <span class="material-symbols-outlined text-[16px] text-secondary">inventory</span>
                        </button>
                        <button class="w-full text-left px-3 py-2 rounded-lg font-title-md text-title-md text-primary font-semibold bg-surface-container flex items-center justify-between cursor-pointer" onclick="updateStatusQuick('Sedang Disewa (Aktif)')" type="button">
                            <span>Sedang Disewa (Aktif)</span>
                            <span class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
                        </button>
                        <button class="w-full text-left px-3 py-2 rounded-lg font-title-md text-title-md text-on-surface hover:bg-surface-container flex items-center justify-between cursor-pointer" onclick="updateStatusQuick('Pengembalian & Pengecekan')" type="button">
                            <span>Pengembalian &amp; Pengecekan</span>
                            <span class="material-symbols-outlined text-[16px] text-secondary">fact_check</span>
                        </button>
                        <button class="w-full text-left px-3 py-2 rounded-lg font-title-md text-title-md text-on-surface hover:bg-surface-container flex items-center justify-between cursor-pointer" onclick="updateStatusQuick('Selesai')" type="button">
                            <span>Selesai</span>
                            <span class="material-symbols-outlined text-[16px] text-secondary">task_alt</span>
                        </button>
                    </div>
                </div>

                <!-- 3. Tombol Kirim WhatsApp -->
                <button class="inline-flex items-center gap-2 px-3.5 py-2.5 rounded-lg bg-surface-container text-on-surface font-title-md text-title-md hover:bg-surface-container-high transition-all shadow-xs cursor-pointer border border-outline-variant/30" id="btn-wa-modal" type="button">
                    <span class="material-symbols-outlined text-[18px] text-[#2d7a4d]">chat</span>
                    <span>Kirim Notifikasi WA</span>
                </button>

                <!-- 4. Tombol Cetak Dokumen -->
                <button class="inline-flex items-center gap-2 px-3.5 py-2.5 rounded-lg bg-primary text-on-primary font-title-md text-title-md hover:opacity-90 transition-all shadow-xs cursor-pointer" onclick="window.print()" type="button">
                    <span class="material-symbols-outlined text-[18px]">print</span>
                    <span>Cetak Surat Jalan &amp; Tanda Terima</span>
                </button>
            </div>
        </div>

        <!-- MAIN 2-COLUMN DOSSIER GRID -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg">

            <!-- LEFT COLUMN (7 Cols): Pelanggan, Spesifikasi Seserahan, Seri Kotak, Timeline Acara -->
            <div class="lg:col-span-7 flex flex-col gap-space-lg">

                <!-- CARD 1: Data Pelanggan & Alamat Serah Terima -->
                <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-xs border border-outline-variant/30">
                    <div class="flex items-center justify-between pb-space-sm mb-space-md border-b border-surface-container-high/60">
                        <div class="flex items-center gap-space-sm">
                            <div class="w-8 h-8 rounded-lg bg-secondary-container text-on-secondary-container flex items-center justify-center">
                                <span class="material-symbols-outlined text-[18px] text-primary">person_pin</span>
                            </div>
                            <div>
                                <p class="font-label-sm text-label-sm text-secondary uppercase tracking-widest font-semibold">Identitas Klien</p>
                                <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Data Pelanggan</h3>
                            </div>
                        </div>
                        <span class="font-label-sm text-label-sm bg-surface-container px-3 py-1 rounded-full text-on-surface-variant font-medium border border-outline-variant/30">Verified Client</span>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="bg-surface-container-low p-space-md rounded-lg border border-outline-variant/20">
                            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider block mb-1 font-semibold">Nama Pemesan</span>
                            <p class="font-title-lg text-title-lg text-on-surface font-bold">Anindya Larasati, S.Sn.</p>
                            <p class="font-body-md text-body-md text-secondary mt-0.5">Mempelai Pria: Raditya Pratama, B.Eng.</p>
                        </div>
                        <div class="bg-surface-container-low p-space-md rounded-lg border border-outline-variant/20">
                            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider block mb-1 font-semibold">Kontak Resmi (WhatsApp)</span>
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-[16px] text-[#2d7a4d]">chat</span>
                                <p class="font-title-md text-title-md text-on-surface font-semibold">+62 812-9842-1102</p>
                            </div>
                            <p class="font-body-md text-body-md text-on-surface-variant mt-0.5">anindya.larasati@gmail.com</p>
                        </div>
                        <div class="md:col-span-2 bg-surface-container-low p-space-md rounded-lg flex items-start gap-space-sm border border-outline-variant/20">
                            <span class="material-symbols-outlined text-secondary text-[20px] mt-0.5">local_shipping</span>
                            <div class="flex-1">
                                <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider block mb-0.5 font-semibold">Alamat Pengantaran / Serah Terima</span>
                                <p class="font-title-md text-title-md text-on-surface font-semibold">Rumah Kediaman Mempelai Wanita</p>
                                <p class="font-body-md text-body-md text-on-surface-variant mt-0.5 leading-relaxed">
                                    Jl. Cempaka Putih Timur Raya No. 42A, RT 07 / RW 03, Jakarta Pusat 10510 (Patokan: Seberang Taman Segitiga, Pagar Bronze).
                                </p>
                                <p class="font-label-md text-label-md text-secondary mt-1.5 font-medium">Catatan Kurir: Diterima langsung oleh Ny. Sulastri (Ibu Kandung) atau Pengantin Wanita.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 2: Spesifikasi Mahar & Kotak Seserahan (Dengan Visual Foto Desain) -->
                <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-xs border border-outline-variant/30">
                    <div class="flex items-center justify-between pb-space-sm mb-space-md border-b border-surface-container-high/60">
                        <div class="flex items-center gap-space-sm">
                            <div class="w-8 h-8 rounded-lg bg-tertiary-fixed text-on-tertiary-fixed flex items-center justify-center">
                                <span class="material-symbols-outlined text-[18px]">inventory_2</span>
                            </div>
                            <div>
                                <p class="font-label-sm text-label-sm text-secondary uppercase tracking-widest font-semibold">Detail Komposisi</p>
                                <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Paket &amp; Spesifikasi Baki</h3>
                            </div>
                        </div>
                        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-semibold">
                            <span>8 Baki Total (7 Seserahan + 1 Mahar)</span>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                        <div class="bg-surface-container-low p-space-md rounded-lg border border-outline-variant/20">
                            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider block font-semibold">Tema Palet &amp; Bunga</span>
                            <p class="font-title-md text-title-md text-primary font-semibold mt-1">Champagne Gold &amp; Preserved Orchid</p>
                            <p class="font-body-md text-body-md text-secondary mt-0.5">Sentuhan Ivory Rose, Dried Pampas, &amp; Gold Ruscus</p>
                        </div>
                        <div class="bg-surface-container-low p-space-md rounded-lg border border-outline-variant/20">
                            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider block font-semibold">Model Mahar Utama</span>
                            <p class="font-title-md text-title-md text-on-surface font-semibold mt-1">Acrylic Vitrine Hexagon 3D</p>
                            <p class="font-body-md text-body-md text-secondary mt-0.5">Pecahan Logam Mulia 25gr &amp; Dinar Dirham Custom</p>
                        </div>
                        <div class="bg-surface-container-low p-space-md rounded-lg border border-outline-variant/20">
                            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider block font-semibold">Tipe Box Eksekutif</span>
                            <p class="font-title-md text-title-md text-on-surface font-semibold mt-1">Luxury Crystal Vitrine Series</p>
                            <p class="font-body-md text-body-md text-secondary mt-0.5">Alas Kayu Mahoni Finishing Satin Walnut</p>
                        </div>
                    </div>

                    <!-- Rincian Item Baki & Daftar Inventaris Unit Disewa -->
                    <div class="bg-surface-container-high/60 rounded-xl p-space-md mb-space-md border border-outline-variant/30">
                        <p class="font-title-md text-title-md text-on-surface font-bold mb-space-sm flex items-center justify-between">
                            <span>Rincian Baki Sewa &amp; Nomor Seri Inventaris (Studio Inventory)</span>
                            <span class="font-label-sm text-label-sm text-[#2d7a4d] font-semibold">Kondisi Awal: Pristine (Grade A)</span>
                        </p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm">
                            <div class="flex items-center justify-between p-2.5 bg-surface-container-lowest rounded-lg border border-outline-variant/20">
                                <div>
                                    <span class="font-label-sm text-label-sm font-semibold text-primary">BAKI #01 (Mahar)</span>
                                    <p class="font-title-md text-title-md text-on-surface font-medium">LM Antam 25g + Kaligrafi Akrilik</p>
                                </div>
                                <span class="font-label-sm text-label-sm px-2 py-1 rounded bg-surface-container font-mono text-on-surface-variant font-semibold">SERI: MHR-HEX-042</span>
                            </div>
                            <div class="flex items-center justify-between p-2.5 bg-surface-container-lowest rounded-lg border border-outline-variant/20">
                                <div>
                                    <span class="font-label-sm text-label-sm font-semibold text-primary">BAKI #02</span>
                                    <p class="font-title-md text-title-md text-on-surface font-medium">Perlengkapan Ibadah (Mukena Sutra &amp; Al-Qur'an)</p>
                                </div>
                                <span class="font-label-sm text-label-sm px-2 py-1 rounded bg-surface-container font-mono text-on-surface-variant font-semibold">SERI: CRY-L-018</span>
                            </div>
                            <div class="flex items-center justify-between p-2.5 bg-surface-container-lowest rounded-lg border border-outline-variant/20">
                                <div>
                                    <span class="font-label-sm text-label-sm font-semibold text-primary">BAKI #03</span>
                                    <p class="font-title-md text-title-md text-on-surface font-medium">Tas Kulit &amp; Sepatu Hak Pengantin (Chanel)</p>
                                </div>
                                <span class="font-label-sm text-label-sm px-2 py-1 rounded bg-surface-container font-mono text-on-surface-variant font-semibold">SERI: CRY-XL-009</span>
                            </div>
                            <div class="flex items-center justify-between p-2.5 bg-surface-container-lowest rounded-lg border border-outline-variant/20">
                                <div>
                                    <span class="font-label-sm text-label-sm font-semibold text-primary">BAKI #04</span>
                                    <p class="font-title-md text-title-md text-on-surface font-medium">Skincare &amp; Parfumerie Prestige (Dior set)</p>
                                </div>
                                <span class="font-label-sm text-label-sm px-2 py-1 rounded bg-surface-container font-mono text-on-surface-variant font-semibold">SERI: CRY-M-112</span>
                            </div>
                            <div class="flex items-center justify-between p-2.5 bg-surface-container-lowest rounded-lg border border-outline-variant/20">
                                <div>
                                    <span class="font-label-sm text-label-sm font-semibold text-primary">BAKI #05</span>
                                    <p class="font-title-md text-title-md text-on-surface font-medium">Perhiasan &amp; Berlian Cincin Kawin</p>
                                </div>
                                <span class="font-label-sm text-label-sm px-2 py-1 rounded bg-surface-container font-mono text-on-surface-variant font-semibold">SERI: CRY-RING-003</span>
                            </div>
                            <div class="flex items-center justify-between p-2.5 bg-surface-container-lowest rounded-lg border border-outline-variant/20">
                                <div>
                                    <span class="font-label-sm text-label-sm font-semibold text-primary">BAKI #06</span>
                                    <p class="font-title-md text-title-md text-on-surface font-medium">Kain Batik Tulis Sutra Solo &amp; Kebaya Brokat</p>
                                </div>
                                <span class="font-label-sm text-label-sm px-2 py-1 rounded bg-surface-container font-mono text-on-surface-variant font-semibold">SERI: CRY-L-024</span>
                            </div>
                            <div class="flex items-center justify-between p-2.5 bg-surface-container-lowest rounded-lg border border-outline-variant/20">
                                <div>
                                    <span class="font-label-sm text-label-sm font-semibold text-primary">BAKI #07</span>
                                    <p class="font-title-md text-title-md text-on-surface font-medium">Pakaian Dalam &amp; Silk Robe Set</p>
                                </div>
                                <span class="font-label-sm text-label-sm px-2 py-1 rounded bg-surface-container font-mono text-on-surface-variant font-semibold">SERI: CRY-M-089</span>
                            </div>
                            <div class="flex items-center justify-between p-2.5 bg-surface-container-lowest rounded-lg border border-outline-variant/20">
                                <div>
                                    <span class="font-label-sm text-label-sm font-semibold text-primary">BAKI #08</span>
                                    <p class="font-title-md text-title-md text-on-surface font-medium">Bespoke Macarons &amp; Buah Tin Delima</p>
                                </div>
                                <span class="font-label-sm text-label-sm px-2 py-1 rounded bg-surface-container font-mono text-on-surface-variant font-semibold">SERI: CRY-M-047</span>
                            </div>
                        </div>
                    </div>

                    <!-- Foto Referensi Desain Final Hasil Florist -->
                    <div>
                        <p class="font-label-sm text-label-sm text-secondary uppercase tracking-widest mb-space-xs font-semibold">Foto Dokumentasi Desain (QC Studio Approved)</p>
                        <div class="grid grid-cols-3 gap-space-sm">
                            <div class="relative group rounded-lg overflow-hidden bg-surface-container border border-outline-variant/20">
                                <img class="w-full h-32 object-cover transition-transform duration-300 group-hover:scale-105" alt="Baki Mukena & Kitab" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAt7j9u_wkQq7fcp_NzTQomnPYXURrMpF4JInw1pwoveHIUKyyNsaHjew0hVH_oCetSwt7sPadkCSgIZI4ONJn1wzoB94KUBQvaUcDQlqdpZouw3256D5oUfXgzTd6AKPXTtC8mKeZrTsHUQEjD3Esw367MENZyiDPxp5L8xvrNP53-Ce8ktvTi2yjZX8Lts8GEqjcKdMO_PlQzN1kHjWay9PJgH3NzIOrskGOYoqMfp0GfhcoTQyTh">
                                <div class="absolute bottom-1 left-1 bg-surface-container-lowest/90 px-1.5 py-0.5 rounded text-[10px] font-title-md text-on-surface font-medium">Baki Mukena &amp; Kitab</div>
                            </div>
                            <div class="relative group rounded-lg overflow-hidden bg-surface-container border border-outline-variant/20">
                                <img class="w-full h-32 object-cover transition-transform duration-300 group-hover:scale-105" alt="Mahar Akrilik Hexagon" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB1JOxFWerYque0aZ3iiPNfKjVHkAmmNnwzbc5z1edFpTelt61I60fsFQ4XTmJuBV31JdILv5DV3LMdvRhLKIgvSWRzt1OerRJXpR3Ctx2UHqOh_7kQRheNY2cP0-N1l37xKpbdouFYI3K2cHVJmwnurtDh36FUQ1SF-8tGoDWvSpjNSAuChEzcWjvRtf8B5cf-ap_KjHgEaA94MINGCseejfcK15zeeAYf3o-udLeiDFcBWp-4UPph">
                                <div class="absolute bottom-1 left-1 bg-surface-container-lowest/90 px-1.5 py-0.5 rounded text-[10px] font-title-md text-on-surface font-medium">Mahar Akrilik Hexagon</div>
                            </div>
                            <div class="relative group rounded-lg overflow-hidden bg-surface-container border border-outline-variant/20">
                                <img class="w-full h-32 object-cover transition-transform duration-300 group-hover:scale-105" alt="Baki Parfumerie & Heels" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAf5dXF7f6F2yooJ-9g7Cbspk0pRV9IUxjBpaHLuLp-5WANyC_rnxWOoKgM5sYdDE3DMrnkcht7AkQOoP9I--zJ8Wu3GYePvyH9h4EEoGLtu7lOHyTGw9v7cYdsxeQghuH_1MWS2TwXYye4HzTFHebaF9N3AxwEcU-5XCbNkJgvjC8z08msxZBaqTeyUNdnCibN971MTsVenSUjKnx4vU66OMYR_lMMyRFGBG2gogpFMK_oQKBbibBI">
                                <div class="absolute bottom-1 left-1 bg-surface-container-lowest/90 px-1.5 py-0.5 rounded text-[10px] font-title-md text-on-surface font-medium">Baki Parfumerie &amp; Heels</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 3: Timeline Perjalanan Tanggal Acara & Sewa -->
                <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-xs border border-outline-variant/30">
                    <div class="flex items-center gap-space-sm pb-space-sm mb-space-md border-b border-surface-container-high/60">
                        <div class="w-8 h-8 rounded-lg bg-surface-container-high text-primary flex items-center justify-center">
                            <span class="material-symbols-outlined text-[18px]">calendar_month</span>
                        </div>
                        <div>
                            <p class="font-label-sm text-label-sm text-secondary uppercase tracking-widest font-semibold">Manajemen Waktu</p>
                            <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Jadwal Serah Terima &amp; Pengembalian</h3>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md">
                        <div class="bg-surface-container-low p-space-md rounded-lg border border-outline-variant/20">
                            <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider block mb-1 font-semibold">Tanggal Booking</span>
                            <p class="font-title-md text-title-md text-on-surface font-bold">18 Apr 2025</p>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">Lock Down Kuota</span>
                        </div>
                        <div class="bg-surface-container-low p-space-md rounded-lg border border-outline-variant/20">
                            <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider block mb-1 font-semibold">Pengambilan / Antar</span>
                            <p class="font-title-md text-title-md text-on-surface font-bold">14 Mei 2025</p>
                            <span class="font-label-sm text-label-sm text-primary font-medium">10:30 WIB (Selesai)</span>
                        </div>
                        <div class="bg-surface-container-low p-space-md rounded-lg border border-outline-variant/20">
                            <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider block mb-1 font-semibold">Hari Acara Akad &amp; Resepsi</span>
                            <p class="font-title-md text-title-md text-on-surface font-bold">16 Mei 2025</p>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">The Hermitage Menteng</span>
                        </div>
                        <div class="bg-surface-container-low p-space-md rounded-lg border border-outline-variant/20">
                            <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider block mb-1 font-semibold">Batas Pengembalian</span>
                            <p class="font-title-md text-title-md text-error font-bold">19 Mei 2025</p>
                            <span class="font-label-sm text-label-sm text-error font-medium">Maks. Pukul 18:00 WIB</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- RIGHT COLUMN (5 Cols): Midtrans Financials, WhatsApp Log, Audit Trail -->
            <div class="lg:col-span-5 flex flex-col gap-space-lg">

                <!-- CARD 4: Informasi Pembayaran Midtrans Gateway -->
                <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-xs border border-outline-variant/30">
                    <div class="flex items-center justify-between pb-space-sm mb-space-md border-b border-surface-container-high/60">
                        <div class="flex items-center gap-space-sm">
                            <div class="w-8 h-8 rounded-lg bg-primary-container text-on-primary-container flex items-center justify-center">
                                <span class="material-symbols-outlined text-[18px]">account_balance_wallet</span>
                            </div>
                            <div>
                                <p class="font-label-sm text-label-sm text-secondary uppercase tracking-widest font-semibold">Midtrans Webhook</p>
                                <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Detail Pembayaran</h3>
                            </div>
                        </div>
                        <span class="font-label-sm text-label-sm px-2.5 py-1 rounded-full bg-surface-container text-[#2d7a4d] font-bold flex items-center gap-1 border border-[#2d7a4d]/20">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#2d7a4d]"></span> LUNAS DI MUKA
                        </span>
                    </div>

                    <div class="bg-surface-container-low rounded-xl p-space-md mb-space-md border border-outline-variant/20">
                        <div class="flex items-center justify-between mb-2">
                            <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider font-semibold">Total Nilai Kontrak</span>
                            <span class="font-metric-display text-2xl text-on-surface font-bold">Rp 5.850.000</span>
                        </div>
                        <div class="flex items-center justify-between text-on-surface-variant font-body-md text-body-md py-1">
                            <span>Uang Muka (DP 50% Midtrans)</span>
                            <span class="font-title-md text-title-md text-on-surface font-semibold">Rp 2.925.000</span>
                        </div>
                        <div class="flex items-center justify-between text-on-surface-variant font-body-md text-body-md py-1">
                            <span>Pelunasan Final (Midtrans BCA VA)</span>
                            <span class="font-title-md text-title-md text-on-surface font-semibold">Rp 2.925.000</span>
                        </div>
                        <div class="flex items-center justify-between text-on-surface-variant font-body-md text-body-md py-1">
                            <span>Deposit Jaminan Baki (Tunai/Refundable)</span>
                            <span class="font-title-md text-title-md text-on-surface font-semibold">Rp 1.000.000</span>
                        </div>
                        <div class="mt-2 pt-2 border-t border-surface-container-high/60 flex items-center justify-between">
                            <span class="font-title-md text-title-md text-on-surface font-bold">Sisa Tagihan Klien</span>
                            <span class="font-title-lg text-title-lg text-[#2d7a4d] font-bold">Rp 0 (Lunas)</span>
                        </div>
                    </div>

                    <!-- Metadata Midtrans Transaksi -->
                    <div class="bg-surface-container rounded-lg p-space-md flex flex-col gap-2 font-body-md text-body-md border border-outline-variant/20">
                        <div class="flex items-center justify-between">
                            <span class="text-on-surface-variant font-label-md text-label-md">Metode Pembayaran:</span>
                            <span class="font-title-md text-title-md text-on-surface font-semibold flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[16px] text-primary">credit_card</span>
                                Midtrans BCA Virtual Account
                            </span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-on-surface-variant font-label-md text-label-md">Transaction ID Midtrans:</span>
                            <span class="font-title-md text-title-md font-mono text-primary font-medium text-xs sm:text-sm">MTR-9821-BCVA-20250508-01</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-on-surface-variant font-label-md text-label-md">Waktu Settlement:</span>
                            <span class="font-title-md text-title-md text-on-surface">08 Mei 2025 • 14:18:22 WIB</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-on-surface-variant font-label-md text-label-md">Status Fraud:</span>
                            <span class="font-title-md text-title-md text-[#2d7a4d] font-semibold">Accept / Verified</span>
                        </div>
                    </div>
                </div>

                <!-- CARD 5: Riwayat Notifikasi WhatsApp Gateway (FITUR WA LOG) -->
                <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-xs border border-outline-variant/30">
                    <div class="flex items-center justify-between pb-space-sm mb-space-md border-b border-surface-container-high/60">
                        <div class="flex items-center gap-space-sm">
                            <div class="w-8 h-8 rounded-lg bg-surface-container text-[#2d7a4d] flex items-center justify-center">
                                <span class="material-symbols-outlined text-[18px]">cell_tower</span>
                            </div>
                            <div>
                                <p class="font-label-sm text-label-sm text-secondary uppercase tracking-widest font-semibold">Gateway Log</p>
                                <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Riwayat Notifikasi WhatsApp</h3>
                            </div>
                        </div>
                        <span class="font-label-sm text-label-sm text-on-surface-variant font-mono">+62 812-9842-1102</span>
                    </div>

                    <div class="flex flex-col gap-space-sm">
                        <!-- Log 1: DP Berhasil -->
                        <div class="p-space-sm rounded-lg bg-surface-container-low flex items-start gap-space-sm border border-outline-variant/20">
                            <span class="material-symbols-outlined text-[#2d7a4d] text-[18px] mt-0.5">done_all</span>
                            <div class="flex-1">
                                <div class="flex items-center justify-between mb-0.5">
                                    <span class="font-title-md text-title-md text-on-surface font-semibold">Kuitansi Pembayaran DP Terkirim</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">18 Apr 16:30</span>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant">
                                    Template: <span class="font-mono text-primary font-medium">dp_confirmation_v2</span>. Menampilkan tautan invoice PDF &amp; ringkasan akad sewa 8 baki.
                                </p>
                            </div>
                        </div>
                        <!-- Log 2: Update Florist -->
                        <div class="p-space-sm rounded-lg bg-surface-container-low flex items-start gap-space-sm border border-outline-variant/20">
                            <span class="material-symbols-outlined text-[#2d7a4d] text-[18px] mt-0.5">done_all</span>
                            <div class="flex-1">
                                <div class="flex items-center justify-between mb-0.5">
                                    <span class="font-title-md text-title-md text-on-surface font-semibold">Pratinjau Hasil Rangkaian Florist</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">12 Mei 11:15</span>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant">
                                    Template: <span class="font-mono text-primary font-medium">florist_preview_link</span>. Mengirim 3 foto baki &amp; konfirmasi warna bunga Champagne.
                                </p>
                            </div>
                        </div>
                        <!-- Log 3: Pelunasan & Siap Ambil -->
                        <div class="p-space-sm rounded-lg bg-surface-container-low flex items-start gap-space-sm border border-outline-variant/20">
                            <span class="material-symbols-outlined text-[#2d7a4d] text-[18px] mt-0.5">done_all</span>
                            <div class="flex-1">
                                <div class="flex items-center justify-between mb-0.5">
                                    <span class="font-title-md text-title-md text-on-surface font-semibold">Konfirmasi Lunas &amp; Pengambilan</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">14 Mei 09:05</span>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant">
                                    Template: <span class="font-mono text-primary font-medium">pickup_ready_with_pin</span>. Kode serah terima PIN: <strong class="text-on-surface">#4491</strong>.
                                </p>
                            </div>
                        </div>
                    </div>

                    <button class="w-full mt-space-md py-2.5 px-3 rounded-lg bg-surface-container-high hover:bg-surface-container text-on-surface font-title-md text-title-md text-center transition-colors flex items-center justify-center gap-2 cursor-pointer border border-outline-variant/20" id="btn-quick-wa" type="button">
                        <span class="material-symbols-outlined text-[16px] text-[#2d7a4d]">send</span>
                        <span>Kirim Notifikasi Kustom via Gateway</span>
                    </button>
                </div>

                <!-- CARD 6: Riwayat Perubahan Status (Timeline Audit Trail) -->
                <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-xs border border-outline-variant/30">
                    <div class="flex items-center gap-space-sm pb-space-sm mb-space-md border-b border-surface-container-high/60">
                        <div class="w-8 h-8 rounded-lg bg-surface-container-high text-secondary flex items-center justify-center">
                            <span class="material-symbols-outlined text-[18px]">history</span>
                        </div>
                        <div>
                            <p class="font-label-sm text-label-sm text-secondary uppercase tracking-widest font-semibold">Audit Trail Log</p>
                            <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Riwayat Perubahan Status</h3>
                        </div>
                    </div>

                    <div class="relative pl-6 flex flex-col gap-space-md border-l border-surface-container-high ml-3">
                        <!-- Timeline Item 1 -->
                        <div class="relative">
                            <span class="absolute -left-[31px] top-1 w-3 h-3 rounded-full bg-primary ring-4 ring-surface"></span>
                            <div>
                                <div class="flex flex-wrap items-center justify-between gap-1">
                                    <span class="font-title-md text-title-md text-primary font-bold">Sedang Disewa (Active Rental)</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">14 Mei 2025, 10:45 WIB</span>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface mt-0.5">Barang telah diserahterimakan ke pengemudi kurir atelier.</p>
                                <p class="font-label-sm text-label-sm text-secondary mt-0.5">Oleh: <strong class="text-on-surface">Siti Sarah (Admin)</strong> • Verifikasi PIN #4491 Cocok</p>
                            </div>
                        </div>

                        <!-- Timeline Item 2 -->
                        <div class="relative">
                            <span class="absolute -left-[30px] top-1 w-2.5 h-2.5 rounded-full bg-secondary ring-4 ring-surface"></span>
                            <div>
                                <div class="flex flex-wrap items-center justify-between gap-1">
                                    <span class="font-title-md text-title-md text-on-surface font-semibold">Siap Diambil / Quality Check Pass</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">13 Mei 2025, 18:20 WIB</span>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant mt-0.5">Pemeriksaan akrilik kristal mulus dan rangkaian bunga preserved kokoh.</p>
                                <p class="font-label-sm text-label-sm text-secondary mt-0.5">Oleh: <strong class="text-on-surface">Maya Florist (Lead Artisan)</strong></p>
                            </div>
                        </div>

                        <!-- Timeline Item 3 -->
                        <div class="relative">
                            <span class="absolute -left-[30px] top-1 w-2.5 h-2.5 rounded-full bg-secondary ring-4 ring-surface"></span>
                            <div>
                                <div class="flex flex-wrap items-center justify-between gap-1">
                                    <span class="font-title-md text-title-md text-on-surface font-semibold">Pengerjaan Florist &amp; Tata Baki</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">10 Mei 2025, 09:00 WIB</span>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant mt-0.5">Barang seserahan masuk studio lengkap (8 item diperiksa).</p>
                                <p class="font-label-sm text-label-sm text-secondary mt-0.5">Oleh: <strong class="text-on-surface">Siti Sarah (Admin)</strong></p>
                            </div>
                        </div>

                        <!-- Timeline Item 4 -->
                        <div class="relative">
                            <span class="absolute -left-[30px] top-1 w-2.5 h-2.5 rounded-full bg-[#2d7a4d] ring-4 ring-surface"></span>
                            <div>
                                <div class="flex flex-wrap items-center justify-between gap-1">
                                    <span class="font-title-md text-title-md text-on-surface font-semibold">Pembayaran Lunas Otomatis</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">08 Mei 2025, 14:18 WIB</span>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant mt-0.5">Sinkronisasi Midtrans HTTP Notification API berhasil (Status: 200 OK).</p>
                                <p class="font-label-sm text-label-sm text-secondary mt-0.5">Oleh: <strong class="text-[#2d7a4d]">Sistem Gateway Midtrans</strong></p>
                            </div>
                        </div>

                        <!-- Timeline Item 5 -->
                        <div class="relative">
                            <span class="absolute -left-[30px] top-1 w-2.5 h-2.5 rounded-full bg-outline ring-4 ring-surface"></span>
                            <div>
                                <div class="flex flex-wrap items-center justify-between gap-1">
                                    <span class="font-title-md text-title-md text-on-surface font-semibold">Pesanan Dibuat &amp; DP Diterima</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">18 Apr 2025, 16:15 WIB</span>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant mt-0.5">Klien mengonfirmasi paket Luxury 8 baki via formulir studio.</p>
                                <p class="font-label-sm text-label-sm text-secondary mt-0.5">Oleh: <strong class="text-on-surface">Siti Sarah (Admin)</strong></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<!-- INTERACTIVE MODAL 1: UBAH PESANAN (Admin Edit Modal) -->
<div class="hidden fixed inset-0 bg-inverse-surface/40 backdrop-blur-xs z-50 flex items-center justify-center p-4" id="modal-edit-order">
    <div class="bg-surface-container-lowest rounded-xl max-w-2xl w-full p-space-lg shadow-2xl overflow-y-auto max-h-[90vh] border border-outline-variant/30 animate-in fade-in zoom-in-95 duration-150">
        <div class="flex items-center justify-between pb-space-sm mb-space-md border-b border-surface-container-high/60">
            <div class="flex items-center gap-space-sm">
                <span class="material-symbols-outlined text-primary text-[24px]">edit_note</span>
                <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Ubah Informasi Pesanan #ORD-2025-0842</h3>
            </div>
            <button class="text-secondary hover:text-on-surface cursor-pointer p-1" id="close-modal-edit" type="button">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        <form class="flex flex-col gap-space-md" onsubmit="event.preventDefault(); document.getElementById('modal-edit-order').classList.add('hidden'); alert('Perubahan tanggal dan catatan pesanan #ORD-2025-0842 berhasil disimpan.');">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                <div>
                    <label class="block font-label-sm text-label-sm text-secondary uppercase mb-1 font-semibold">Tanggal Pengambilan</label>
                    <input class="w-full p-2.5 rounded-lg bg-surface-container-low text-on-surface font-title-md text-title-md outline-none focus:bg-surface-container border border-outline-variant/20" type="date" value="2025-05-14">
                </div>
                <div>
                    <label class="block font-label-sm text-label-sm text-secondary uppercase mb-1 font-semibold">Batas Akhir Pengembalian</label>
                    <input class="w-full p-2.5 rounded-lg bg-surface-container-low text-on-surface font-title-md text-title-md outline-none focus:bg-surface-container border border-outline-variant/20" type="date" value="2025-05-19">
                </div>
            </div>
            <div>
                <label class="block font-label-sm text-label-sm text-secondary uppercase mb-1 font-semibold">Penyesuaian Jumlah Baki Sewa</label>
                <div class="flex items-center gap-space-sm">
                    <input class="w-32 p-2.5 rounded-lg bg-surface-container-low text-on-surface font-title-md text-title-md outline-none focus:bg-surface-container border border-outline-variant/20" max="20" min="1" type="number" value="8">
                    <span class="font-body-md text-body-md text-secondary">Unit Box Vitrine (Perubahan akan mengubah kalkulasi deposit)</span>
                </div>
            </div>
            <div>
                <label class="block font-label-sm text-label-sm text-secondary uppercase mb-1 font-semibold">Catatan Khusus Operasional / Permintaan Klien</label>
                <textarea class="w-full p-2.5 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md outline-none focus:bg-surface-container border border-outline-variant/20" rows="3">Pastikan ornamen pita satin champagne diikat simpul Prancis ganda. Tambahan kartu ucapan beraksen foil emas dari keluarga Raditya.</textarea>
            </div>
            <div class="flex items-center justify-end gap-space-sm pt-space-sm border-t border-surface-container-high/60">
                <button class="px-4 py-2 rounded-lg bg-surface-container text-on-surface font-title-md text-title-md hover:bg-surface-container-high cursor-pointer" id="cancel-edit" type="button">Batal</button>
                <button class="px-4 py-2 rounded-lg bg-primary text-on-primary font-title-md text-title-md hover:bg-primary-container cursor-pointer shadow-xs" type="submit">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>

<!-- INTERACTIVE MODAL 2: KIRIM WHATSAPP GATEWAY -->
<div class="hidden fixed inset-0 bg-inverse-surface/40 backdrop-blur-xs z-50 flex items-center justify-center p-4" id="modal-wa">
    <div class="bg-surface-container-lowest rounded-xl max-w-lg w-full p-space-lg shadow-2xl border border-outline-variant/30 animate-in fade-in zoom-in-95 duration-150">
        <div class="flex items-center justify-between pb-space-sm mb-space-md border-b border-surface-container-high/60">
            <div class="flex items-center gap-space-sm">
                <span class="material-symbols-outlined text-[#2d7a4d] text-[24px]">send_and_archive</span>
                <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Kirim Notifikasi WhatsApp Gateway</h3>
            </div>
            <button class="text-secondary hover:text-on-surface cursor-pointer p-1" id="close-modal-wa" type="button">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        <div class="space-y-space-md">
            <div class="p-3 bg-surface-container-low rounded-lg border border-outline-variant/20">
                <span class="font-label-sm text-label-sm text-secondary uppercase block mb-0.5 font-semibold">Nomor Tujuan Pengantin</span>
                <p class="font-title-md text-title-md text-on-surface font-semibold">+62 812-9842-1102 (Anindya Larasati)</p>
            </div>
            <div>
                <label class="font-label-sm text-label-sm text-secondary uppercase block mb-1 font-semibold" for="wa-template-select">Pilih Templat Pesan Resmi</label>
                <select class="w-full p-2.5 rounded-lg bg-surface-container-low text-on-surface font-title-md text-title-md outline-none border border-outline-variant/20 cursor-pointer" id="wa-template-select" onchange="updateWaPreview(this.value)">
                    <option value="reminder">Pengingat Jadwal Pengembalian Baki (H-1)</option>
                    <option value="ready">Konfirmasi Mahar Siap Ambil / Antar</option>
                    <option value="deposit">Konfirmasi Refund Deposit Jaminan</option>
                    <option value="custom">Pesan Kustom Bebas</option>
                </select>
            </div>
            <div>
                <span class="font-label-sm text-label-sm text-secondary uppercase block mb-1 font-semibold">Pratinjau Pesan yang Akan Dikirim</span>
                <div class="p-space-sm rounded-lg bg-surface-container font-body-md text-body-md text-on-surface border border-outline-variant/20" id="wa-preview-text">
                    Halo Kak *Anindya*, kami dari Cattaleya Atelier ingin mengingatkan batas pengembalian 8 baki sewa adalah besok *Senin, 19 Mei 2025 pukul 18:00 WIB*. Tim inspeksi studio siap menerima di atelier. Terima kasih.
                </div>
            </div>
            <div class="flex items-center justify-end gap-space-sm pt-space-xs border-t border-surface-container-high/60">
                <button class="px-4 py-2 rounded-lg bg-surface-container text-on-surface font-title-md text-title-md hover:bg-surface-container-high cursor-pointer" id="cancel-wa" type="button">Tutup</button>
                <button class="px-4 py-2 rounded-lg bg-[#2d7a4d] text-white font-title-md text-title-md hover:opacity-90 flex items-center gap-1.5 cursor-pointer shadow-xs" id="trigger-send-wa" type="button">
                    <span class="material-symbols-outlined text-[16px]">send</span>
                    <span>Kirim Pesan Sekarang</span>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Status Dropdown Trigger
    const btnStatus = document.getElementById('btn-status-dropdown');
    const menuStatus = document.getElementById('status-dropdown-menu');
    if (btnStatus && menuStatus) {
        btnStatus.addEventListener('click', (e) => {
            e.stopPropagation();
            menuStatus.classList.toggle('hidden');
        });
        document.addEventListener('click', () => {
            menuStatus.classList.add('hidden');
        });
    }

    function updateStatusQuick(newStatus) {
        alert('Status pesanan #ORD-2025-0842 dialihkan ke: ' + newStatus);
        if (menuStatus) menuStatus.classList.add('hidden');
    }

    // Modal Edit Order
    const btnEdit = document.getElementById('btn-edit-order');
    const modalEdit = document.getElementById('modal-edit-order');
    const closeEdit = document.getElementById('close-modal-edit');
    const cancelEdit = document.getElementById('cancel-edit');
    if (btnEdit && modalEdit) {
        btnEdit.addEventListener('click', () => modalEdit.classList.remove('hidden'));
        if (closeEdit) closeEdit.addEventListener('click', () => modalEdit.classList.add('hidden'));
        if (cancelEdit) cancelEdit.addEventListener('click', () => modalEdit.classList.add('hidden'));
    }

    // Modal WhatsApp Gateway
    const btnWaModal = document.getElementById('btn-wa-modal');
    const btnQuickWa = document.getElementById('btn-quick-wa');
    const modalWa = document.getElementById('modal-wa');
    const closeWa = document.getElementById('close-modal-wa');
    const cancelWa = document.getElementById('cancel-wa');
    const triggerSendWa = document.getElementById('trigger-send-wa');
    const waPreviewText = document.getElementById('wa-preview-text');

    function openWaModal() {
        if (modalWa) modalWa.classList.remove('hidden');
    }
    if (btnWaModal) btnWaModal.addEventListener('click', openWaModal);
    if (btnQuickWa) btnQuickWa.addEventListener('click', openWaModal);
    if (closeWa) closeWa.addEventListener('click', () => modalWa.classList.add('hidden'));
    if (cancelWa) cancelWa.addEventListener('click', () => modalWa.classList.add('hidden'));

    if (triggerSendWa) {
        triggerSendWa.addEventListener('click', () => {
            alert('Notifikasi WhatsApp Gateway berhasil diteruskan ke antrian server (+62 812-9842-1102).');
            modalWa.classList.add('hidden');
        });
    }

    function updateWaPreview(type) {
        if (!waPreviewText) return;
        if (type === 'reminder') {
            waPreviewText.innerHTML = 'Halo Kak *Anindya*, kami dari Cattaleya Atelier ingin mengingatkan batas pengembalian 8 baki sewa adalah besok *Senin, 19 Mei 2025 pukul 18:00 WIB*. Tim inspeksi studio siap menerima di atelier. Terima kasih.';
        } else if (type === 'ready') {
            waPreviewText.innerHTML = 'Halo Kak *Anindya*, paket mahar dan 8 baki seserahan pesanan Anda telah selesai diinspeksi (QC Pass) dan siap diambil di studio Menteng dengan kode PIN *#4491*.';
        } else if (type === 'deposit') {
            waPreviewText.innerHTML = 'Halo Kak *Anindya*, baki seserahan telah kami terima kembali dalam kondisi lengkap. Deposit jaminan sebesar *Rp 1.000.000* telah dikembalikan ke rekening Anda.';
        } else {
            waPreviewText.innerHTML = 'Halo Kak *Anindya*, tim konsultan Cattaleya Atelier ingin mengonfirmasi detail khusus pengerjaan seserahan Anda.';
        }
    }
</script>
@endpush
