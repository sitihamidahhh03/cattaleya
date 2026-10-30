@extends('layouts.main')

@section('title', 'Formulir Pesanan Mahar Pernikahan - Cattaleya')

@section('content')
<div class="flex flex-col w-full">
    <!-- Subtle Ambient Glow Element -->
    <div class="relative w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 py-10">
        <div class="absolute top-12 left-1/4 w-96 h-96 bg-primary-fixed/30 rounded-full blur-3xl pointer-events-none -z-10"></div>
        <div class="absolute top-48 right-10 w-80 h-80 bg-secondary-container/40 rounded-full blur-3xl pointer-events-none -z-10"></div>

        <!-- Editorial Header Section -->
        <div class="mb-10 text-center max-w-3xl mx-auto">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-secondary-container/70 text-on-secondary-fixed mb-4">
                <span class="material-symbols-outlined text-sm text-primary">auto_awesome</span>
                <span class="font-label-sm text-label-sm uppercase tracking-widest text-primary">Atelier Mahakarya Bespoke</span>
            </div>
            <h1 class="font-headline-lg text-headline-lg text-on-surface mb-3 tracking-tight">Formulir Pesanan Mahar Pernikahan</h1>
            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">
                Rancang representasi ikrar suci Anda dalam bingkai akrilik vitrine &amp; floral preserved abadi. Tanpa perlu login, lengkapi preferensi mahar di bawah ini.
            </p>
        </div>

        <!-- 2-Column Responsive Layout: Left Form, Right Live Summary -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            <!-- LEFT COLUMN: CUSTOMIZATION FORM (lg:col-span-7) -->
            <form class="lg:col-span-7 space-y-8" id="maharForm" onsubmit="event.preventDefault(); submitToMidtrans();">
                @csrf
                <!-- Section 1: Data Kontak Pemesan -->
                <div class="bg-surface-container-lowest p-6 sm:p-8 rounded-xl shadow-[0_2px_8px_-2px_rgba(90,72,56,0.04),0_12px_24px_-6px_rgba(90,72,56,0.05)] space-y-6">
                    <div class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-full bg-primary-fixed text-primary font-label-md text-label-md flex items-center justify-center font-bold">1</span>
                        <div>
                            <h2 class="font-title-lg text-title-lg text-on-surface">Data Kontak Pemesan</h2>
                            <p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Identitas pemesan &amp; koordinasi kuitansi</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="sm:col-span-2">
                            <label class="block font-label-md text-label-md text-on-surface mb-2 font-medium" for="namaLengkap">Nama Pelanggan / Pemesan *</label>
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-lg">person</span>
                                <input class="w-full bg-surface-container-low text-on-surface pl-10 pr-4 py-3 rounded-xl font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary/40 transition-all placeholder:text-outline-variant" id="namaLengkap" placeholder="Nama lengkap pemesan" required="" type="text" value="Anindya Larasati">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label class="block font-label-md text-label-md text-on-surface mb-2 font-medium" for="nomorWhatsapp">Nomor WhatsApp Aktif *</label>
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-lg">chat</span>
                                <input class="w-full bg-surface-container-low text-on-surface pl-10 pr-4 py-3 rounded-xl font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary/40 transition-all placeholder:text-outline-variant" id="nomorWhatsapp" placeholder="0812-xxxx-xxxx" required="" type="tel" value="0812-9842-1102">
                            </div>
                            <p class="font-label-sm text-label-sm text-primary mt-1.5 flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-sm">info</span>
                                Notifikasi tagihan dan resi Midtrans dikirim otomatis ke nomor ini
                            </p>
                        </div>
                        <div class="sm:col-span-2">
                            <label class="block font-label-md text-label-md text-on-surface mb-2 font-medium" for="akunInstagram">Akun Instagram <span class="text-on-surface-variant font-normal">(Opsional)</span></label>
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-lg">tag</span>
                                <input class="w-full bg-surface-container-low text-on-surface pl-10 pr-4 py-3 rounded-xl font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary/40 transition-all placeholder:text-outline-variant" id="akunInstagram" placeholder="@username (untuk penyesuaian moodboard / referensi visual)" type="text" value="@anindyalrs">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 2: Detail Pernikahan & Mahar -->
                <div class="bg-surface-container-lowest p-6 sm:p-8 rounded-xl shadow-[0_2px_8px_-2px_rgba(90,72,56,0.04),0_12px_24px_-6px_rgba(90,72,56,0.05)] space-y-6">
                    <div class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-full bg-primary-fixed text-primary font-label-md text-label-md flex items-center justify-center font-bold">2</span>
                        <div>
                            <h2 class="font-title-lg text-title-lg text-on-surface">Detail Pernikahan &amp; Komposisi Mahar</h2>
                            <p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Mempelai, waktu akad, &amp; isi rincian fisik mahar</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="sm:col-span-2">
                            <label class="block font-label-md text-label-md text-on-surface mb-2 font-medium" for="namaMempelai">Nama Calon Pengantin (Grafir / Kaligrafi) *</label>
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-lg">favorite</span>
                                <input class="w-full bg-surface-container-low text-on-surface pl-10 pr-4 py-3 rounded-xl font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary/40 transition-all placeholder:text-outline-variant" id="namaMempelai" placeholder="Mempelai Wanita &amp; Pria (cth: Anindya &amp; Raditya)" required="" type="text" value="Anindya &amp; Raditya">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label class="block font-label-md text-label-md text-on-surface mb-2 font-medium" for="tanggalAkad">Tanggal Acara Akad / Resepsi *</label>
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-lg">calendar_month</span>
                                <input class="w-full bg-surface-container-low text-on-surface pl-10 pr-4 py-3 rounded-xl font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary/40 transition-all" id="tanggalAkad" required="" type="date" value="2025-06-21">
                            </div>
                            <p class="font-label-sm text-label-sm text-on-surface-variant mt-1.5">Kami menyarankan pemesanan minimal H-30 agar proses kurasi bunga &amp; pengerjaan maksimal.</p>
                        </div>
                        <div class="sm:col-span-2">
                            <label class="block font-label-md text-label-md text-on-surface mb-2 font-medium" for="nominalBentukMahar">Nominal / Komponen Fisik Mahar *</label>
                            <textarea class="w-full bg-surface-container-low text-on-surface p-4 rounded-xl font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary/40 transition-all placeholder:text-outline-variant leading-relaxed" id="nominalBentukMahar" placeholder="Tuliskan komponen mahar yang akan ditata, misal: 10 Gram Logam Mulia Antam + Uang Tunai Kuno Rp 250.000 + Cincin Berlian" required="" rows="3">10 Gram Logam Mulia Antam + Uang Tunai Kuno Rp 250.000</textarea>
                        </div>
                    </div>
                </div>

                <!-- Section 3: Spesifikasi Desain Kustom -->
                <div class="bg-surface-container-lowest p-6 sm:p-8 rounded-xl shadow-[0_2px_8px_-2px_rgba(90,72,56,0.04),0_12px_24px_-6px_rgba(90,72,56,0.05)] space-y-6">
                    <div class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-full bg-primary-fixed text-primary font-label-md text-label-md flex items-center justify-center font-bold">3</span>
                        <div>
                            <h2 class="font-title-lg text-title-lg text-on-surface">Spesifikasi Desain Kustom</h2>
                            <p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Format bingkai, palet flora, &amp; material latar</p>
                        </div>
                    </div>
                    <div class="space-y-5">
                        <!-- Jenis & Ukuran Bingkai Dropdown -->
                        <div>
                            <label class="block font-label-md text-label-md text-on-surface mb-2 font-medium" for="jenisBingkai">Jenis &amp; Ukuran Bingkai *</label>
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-lg">crop_original</span>
                                <select class="w-full bg-surface-container-low text-on-surface pl-10 pr-10 py-3 rounded-xl font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary/40 appearance-none transition-all cursor-pointer" id="jenisBingkai">
                                    <option value="Frame Akrilik Vitrine 3D Hexagon 40x50" selected>Frame Akrilik Vitrine 3D Hexagon 40x50 (Paling Diminati)</option>
                                    <option value="Frame Kayu Ukir Jati Solid 40x60">Frame Kayu Ukir Jati Solid 40x60 (Klasik Elegan)</option>
                                    <option value="Frame Brass & Linen Minimalis 30x40">Frame Brass & Linen Minimalis 30x40 (Modern Minimalist)</option>
                                    <option value="Frame Minimalis Natural Pine 30x30">Frame Minimalis Natural Pine 30x30 (Karya Siluet)</option>
                                </select>
                                <span class="material-symbols-outlined absolute right-3.5 top-1/2 -translate-y-1/2 text-outline pointer-events-none text-xl">expand_more</span>
                            </div>
                        </div>

                        <!-- Posisi Bingkai -->
                        <div>
                            <label class="block font-label-md text-label-md text-on-surface mb-2 font-medium">Posisi / Orientasi Bingkai</label>
                            <div class="grid grid-cols-2 gap-3" id="orientasiContainer">
                                <button class="orientasi-btn active flex items-center justify-center gap-2.5 py-3 px-4 rounded-xl bg-secondary-container text-on-secondary-container font-label-md text-label-md transition-all shadow-sm" data-val="Landscape" type="button">
                                    <span class="material-symbols-outlined text-lg">crop_landscape</span>
                                    <span>Landscape (Mendatar)</span>
                                </button>
                                <button class="orientasi-btn flex items-center justify-center gap-2.5 py-3 px-4 rounded-xl bg-surface-container text-on-surface-variant font-label-md text-label-md transition-all" data-val="Portrait" type="button">
                                    <span class="material-symbols-outlined text-lg">crop_portrait</span>
                                    <span>Portrait (Tegak)</span>
                                </button>
                            </div>
                        </div>

                        <!-- Warna & Tema Bunga -->
                        <div>
                            <label class="block font-label-md text-label-md text-on-surface mb-2 font-medium">Warna &amp; Tema Bunga Preserved</label>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3" id="temaBungaContainer">
                                <label class="tema-bunga-card cursor-pointer flex items-center justify-between p-3.5 rounded-xl bg-surface-container-low hover:bg-surface-container transition-all">
                                    <div class="flex items-center gap-3">
                                        <span class="w-6 h-6 rounded-full bg-primary flex items-center justify-center text-on-primary">
                                            <span class="material-symbols-outlined text-xs">local_florist</span>
                                        </span>
                                        <div>
                                            <p class="font-title-md text-title-md text-on-surface leading-tight">Champagne Gold &amp; Orchid</p>
                                            <p class="font-label-sm text-label-sm text-secondary">Cattaleya Orchid signature</p>
                                        </div>
                                    </div>
                                    <input checked="" class="accent-primary w-4 h-4" name="temaBunga" type="radio" value="Champagne Gold Orchid">
                                </label>
                                <label class="tema-bunga-card cursor-pointer flex items-center justify-between p-3.5 rounded-xl bg-surface-container-low hover:bg-surface-container transition-all">
                                    <div class="flex items-center gap-3">
                                        <span class="w-6 h-6 rounded-full bg-secondary-container flex items-center justify-center text-primary">
                                            <span class="material-symbols-outlined text-xs">filter_vintage</span>
                                        </span>
                                        <div>
                                            <p class="font-title-md text-title-md text-on-surface leading-tight">Rustic Terracotta</p>
                                            <p class="font-label-sm text-label-sm text-secondary">Warm earth tone &amp; dried wheat</p>
                                        </div>
                                    </div>
                                    <input class="accent-primary w-4 h-4" name="temaBunga" type="radio" value="Rustic Terracotta">
                                </label>
                                <label class="tema-bunga-card cursor-pointer flex items-center justify-between p-3.5 rounded-xl bg-surface-container-low hover:bg-surface-container transition-all">
                                    <div class="flex items-center gap-3">
                                        <span class="w-6 h-6 rounded-full bg-surface-container-highest flex items-center justify-center text-secondary">
                                            <span class="material-symbols-outlined text-xs">spa</span>
                                        </span>
                                        <div>
                                            <p class="font-title-md text-title-md text-on-surface leading-tight">Pure White Lily</p>
                                            <p class="font-label-sm text-label-sm text-secondary">Purity, white hydrangeas, calla</p>
                                        </div>
                                    </div>
                                    <input class="accent-primary w-4 h-4" name="temaBunga" type="radio" value="Pure White Lily">
                                </label>
                                <label class="tema-bunga-card cursor-pointer flex items-center justify-between p-3.5 rounded-xl bg-surface-container-low hover:bg-surface-container transition-all">
                                    <div class="flex items-center gap-3">
                                        <span class="w-6 h-6 rounded-full bg-tertiary-container flex items-center justify-center text-on-tertiary-container">
                                            <span class="material-symbols-outlined text-xs">eco</span>
                                        </span>
                                        <div>
                                            <p class="font-title-md text-title-md text-on-surface leading-tight">Sage Green Botanical</p>
                                            <p class="font-label-sm text-label-sm text-secondary">Preserved eucalyptus &amp; moss</p>
                                        </div>
                                    </div>
                                    <input class="accent-primary w-4 h-4" name="temaBunga" type="radio" value="Sage Green Botanical">
                                </label>
                            </div>
                        </div>

                        <!-- Jenis Background & Warna Acrylic Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block font-label-md text-label-md text-on-surface mb-2 font-medium" for="jenisBackground">Jenis &amp; Bahan Background</label>
                                <div class="relative">
                                    <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-lg">wallpaper</span>
                                    <select class="w-full bg-surface-container-low text-on-surface pl-10 pr-9 py-3 rounded-xl font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary/40 appearance-none transition-all cursor-pointer" id="jenisBackground">
                                        <option selected="" value="Linen Tekstur Ivory">Linen Tekstur Ivory</option>
                                        <option value="Kayu Mahoni Veneer">Kayu Mahoni Veneer</option>
                                        <option value="Transparan Clear Akrilik">Transparan Clear Akrilik</option>
                                    </select>
                                    <span class="material-symbols-outlined absolute right-3.5 top-1/2 -translate-y-1/2 text-outline pointer-events-none text-xl">expand_more</span>
                                </div>
                            </div>
                            <div>
                                <label class="block font-label-md text-label-md text-on-surface mb-2 font-medium" for="warnaAcrylic">Warna Acrylic Background</label>
                                <div class="relative">
                                    <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-lg">palette</span>
                                    <select class="w-full bg-surface-container-low text-on-surface pl-10 pr-9 py-3 rounded-xl font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary/40 appearance-none transition-all cursor-pointer" id="warnaAcrylic">
                                        <option selected="" value="Frosted White">Frosted White (Satin Halus)</option>
                                        <option value="Mirror Gold">Mirror Gold (Kilau Mewah)</option>
                                        <option value="Clear Transparent">Clear Transparent (Bening)</option>
                                    </select>
                                    <span class="material-symbols-outlined absolute right-3.5 top-1/2 -translate-y-1/2 text-outline pointer-events-none text-xl">expand_more</span>
                                </div>
                            </div>
                        </div>

                        <!-- Catatan Tambahan / Link Referensi & Upload -->
                        <div>
                            <label class="block font-label-md text-label-md text-on-surface mb-2 font-medium" for="catatanReferensi">Catatan Tambahan &amp; Link Moodboard Desain</label>
                            <textarea class="w-full bg-surface-container-low text-on-surface p-4 rounded-xl font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary/40 transition-all placeholder:text-outline-variant" id="catatanReferensi" placeholder="Cantumkan link Pinterest / Google Drive / catatan grafir tanggal hijriyah atau doa khusus..." rows="3"></textarea>
                        </div>

                        <!-- Upload Reference Box -->
                        <div>
                            <span class="block font-label-md text-label-md text-on-surface mb-2 font-medium">Lampirkan Foto Referensi / Inspirasi (Opsional)</span>
                            <div class="p-6 rounded-xl bg-surface-container-low hover:bg-surface-container-high transition-all text-center cursor-pointer group">
                                <input accept="image/*" class="hidden" id="fileInspirasi" onchange="previewUpload(this)" type="file">
                                <label class="cursor-pointer flex flex-col items-center" for="fileInspirasi">
                                    <span class="material-symbols-outlined text-3xl text-primary group-hover:scale-110 transition-transform">cloud_upload</span>
                                    <span class="font-title-md text-title-md text-on-surface mt-2 font-medium" id="uploadFilename">Klik untuk unggah screenshot atau desain mahar</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant mt-1">PNG, JPG, HEIC hingga 10MB</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <!-- RIGHT COLUMN: LIVE ORDER SUMMARY & MIDTRANS GATEWAY (lg:col-span-5) -->
            <div class="lg:col-span-5 space-y-6 lg:sticky lg:top-24">
                <!-- Summary Card -->
                <div class="bg-surface-container-lowest p-6 sm:p-8 rounded-xl shadow-[0_4px_16px_-4px_rgba(90,72,56,0.08),0_16px_32px_-8px_rgba(90,72,56,0.06)] relative overflow-hidden">
                    <!-- Top Accent Ribbon -->
                    <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-primary-fixed via-primary to-primary-container"></div>
                    <div class="flex items-center justify-between pb-4">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary text-xl">receipt_long</span>
                            <h3 class="font-title-lg text-title-lg text-on-surface">Ringkasan Pesanan Mahar</h3>
                        </div>
                        <span class="px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-fixed font-label-sm text-label-sm tracking-wide">Live Preview</span>
                    </div>

                    <!-- Product Visual Snippet -->
                    <div class="relative rounded-xl overflow-hidden mb-5 aspect-[16/10] bg-surface-container shadow-sm group">
                        <img id="summaryPreviewImg" alt="Preview Mahar Bespoke Cattaleya" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDQIgBgy9FZUmfx96ecq9LFY94VJvWgFzOUhb24DpodSkmb7yc-CejgA2UcMcZOj1OlqFCcHM-3TS-AzS1TR6bxM40ojGLcRSK8crwuTp1X5r92pPZfhM9RuX7vOGBTzEQFSa4UgAKHY6SdUX0QoQI9uqxbGqSmcVmsHlPVJSwFkBsZzrmxKd1HkLn2BpH4JnzHojHkz5ChDBPpNE-LoPeBTYQxth3sEOh7SW4k5clAajYljXyluq78">
                        <div class="absolute inset-0 bg-gradient-to-t from-inverse-surface/80 via-inverse-surface/20 to-transparent flex flex-col justify-end p-4 text-inverse-on-surface">
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-sm text-primary-fixed">verified</span>
                                <span class="font-label-sm text-label-sm uppercase tracking-wider text-primary-fixed font-semibold" id="summaryFrameTag">Vitrine 3D Hexagon 40x50</span>
                            </div>
                            <p class="font-headline-md text-headline-md italic tracking-tight" id="summaryCoupleName">Anindya &amp; Raditya</p>
                        </div>
                    </div>

                    <!-- Specifications Quick Readout -->
                    <div class="space-y-3 pb-5 text-on-surface">
                        <div class="flex items-center justify-between text-body-md font-body-md py-1">
                            <span class="text-on-surface-variant flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-base text-outline">timer</span>
                                Estimasi Pengerjaan
                            </span>
                            <span class="font-title-md text-title-md text-on-surface font-semibold">14 Hari Kerja</span>
                        </div>
                        <div class="flex items-center justify-between text-body-md font-body-md py-1">
                            <span class="text-on-surface-variant flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-base text-outline">palette</span>
                                Palet Bunga
                            </span>
                            <span class="font-title-md text-title-md text-on-surface text-right" id="summaryThemeFlower">Champagne Gold Orchid</span>
                        </div>
                        <div class="flex items-center justify-between text-body-md font-body-md py-1">
                            <span class="text-on-surface-variant flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-base text-outline">layers</span>
                                Latar &amp; Akrilik
                            </span>
                            <span class="font-title-md text-title-md text-on-surface text-right" id="summaryBackgroundStyle">Linen Ivory / Frosted</span>
                        </div>
                        <div class="flex items-center justify-between text-body-md font-body-md py-1">
                            <span class="text-on-surface-variant flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-base text-outline">inventory_2</span>
                                Isi Mahar
                            </span>
                            <span class="font-title-md text-title-md text-on-surface text-right truncate max-w-[210px]" id="summaryDowryContent">10g LM Antam + Uang Kuno</span>
                        </div>
                    </div>

                    <!-- Total Biaya Display -->
                    <div class="p-4 rounded-xl bg-surface-container-low mb-6">
                        <div class="flex items-baseline justify-between">
                            <span class="font-label-md text-label-md text-secondary uppercase tracking-wider font-semibold">Total Nilai Karya</span>
                            <span class="font-metric-display text-metric-display text-primary tracking-tight" id="totalPriceDisplay">Rp 2.450.000</span>
                        </div>
                        <p class="font-label-sm text-label-sm text-on-surface-variant mt-1">Sudah mencakup preservasi bunga abadi, plat kaligrafi grafir nama, &amp; packing kayu garansi aman.</p>
                    </div>

                    <!-- Skema Pembayaran Radio Options -->
                    <div class="space-y-3 mb-6">
                        <span class="block font-label-md text-label-md text-on-surface uppercase tracking-wider font-semibold">Pilih Skema Pembayaran</span>
                        <!-- DP 50% Option -->
                        <label class="payment-option cursor-pointer block p-4 rounded-xl bg-secondary-container/40 hover:bg-secondary-container/70 transition-all relative">
                            <div class="flex items-start gap-3">
                                <input checked="" class="accent-primary mt-1 w-4 h-4" name="paymentScheme" onchange="updatePayAmount('dp')" type="radio" value="dp">
                                <div class="flex-1">
                                    <div class="flex items-center justify-between">
                                        <span class="font-title-md text-title-md text-on-surface font-bold">Bayar DP (Uang Muka 50%)</span>
                                        <span class="font-title-lg text-title-lg text-primary font-bold" id="dpAmountText">Rp 1.225.000</span>
                                    </div>
                                    <p class="font-label-sm text-label-sm text-on-surface-variant mt-1.5 leading-relaxed">
                                        Pelunasan sisa <span class="font-bold text-on-surface" id="dpRemainderText">Rp 1.225.000</span> paling lambat H-3 sebelum jadwal pengambilan atau ekspedisi kurir aman studio.
                                    </p>
                                </div>
                            </div>
                        </label>
                        <!-- Full 100% Option -->
                        <label class="payment-option cursor-pointer block p-4 rounded-xl bg-surface-container-low hover:bg-surface-container transition-all relative">
                            <div class="flex items-start gap-3">
                                <input class="accent-primary mt-1 w-4 h-4" name="paymentScheme" onchange="updatePayAmount('full')" type="radio" value="full">
                                <div class="flex-1">
                                    <div class="flex items-center justify-between">
                                        <span class="font-title-md text-title-md text-on-surface font-bold">Bayar Penuh (100% Lunas)</span>
                                        <span class="font-title-lg text-title-lg text-primary font-bold" id="fullAmountText">Rp 2.450.000</span>
                                    </div>
                                    <p class="font-label-sm text-label-sm text-on-surface-variant mt-1.5 leading-relaxed">
                                        Bebas repot verifikasi ulang, langsung masuk antrean prioritas studio atelier.
                                    </p>
                                </div>
                            </div>
                        </label>
                    </div>

                    <!-- Primary Midtrans Action Button -->
                    <button class="w-full py-4 px-6 rounded-xl bg-primary text-on-primary hover:bg-primary-container transition-colors shadow-[0_4px_16px_rgba(119,86,37,0.25)] flex items-center justify-center gap-3 group" onclick="submitToMidtrans()" type="button">
                        <span class="material-symbols-outlined text-2xl group-hover:scale-110 transition-transform">lock_person</span>
                        <div class="text-left">
                            <span class="block font-label-sm text-label-sm uppercase tracking-widest text-primary-fixed opacity-90">Pembayaran Terenkripsi 256-bit</span>
                            <span class="block font-title-lg text-title-lg leading-tight font-semibold" id="btnPayLabel">Lanjut ke Pembayaran Midtrans • Rp 1.225.000</span>
                        </div>
                        <span class="material-symbols-outlined text-xl ml-auto">arrow_forward</span>
                    </button>

                    <!-- Payment Gateways Logos & Trust Badges -->
                    <div class="mt-6 pt-5 bg-surface-container-low/50 -mx-6 -mb-6 p-6 rounded-b-xl">
                        <div class="flex items-center justify-between text-outline mb-3">
                            <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary">Metode Pembayaran Resmi</span>
                            <span class="font-label-sm text-label-sm text-secondary flex items-center gap-1">
                                <span class="material-symbols-outlined text-xs">verified_user</span> Instant Settlement
                            </span>
                        </div>
                        <div class="flex items-center flex-wrap gap-2.5">
                            <span class="px-2.5 py-1 rounded bg-surface-container-lowest text-on-surface font-label-sm text-label-sm font-bold shadow-xs">Midtrans Snap</span>
                            <span class="px-2.5 py-1 rounded bg-surface-container-lowest text-on-surface font-label-sm text-label-sm font-bold shadow-xs">BCA VA</span>
                            <span class="px-2.5 py-1 rounded bg-surface-container-lowest text-on-surface font-label-sm text-label-sm font-bold shadow-xs">Mandiri Livin</span>
                            <span class="px-2.5 py-1 rounded bg-surface-container-lowest text-on-surface font-label-sm text-label-sm font-bold shadow-xs">QRIS Semua Bank</span>
                            <span class="px-2.5 py-1 rounded bg-surface-container-lowest text-on-surface font-label-sm text-label-sm font-bold shadow-xs">GoPay / ShopeePay</span>
                        </div>
                    </div>
                </div>

                <!-- WhatsApp Automated Confirmation Banner -->
                <div class="p-5 rounded-xl bg-secondary-container/40 flex items-start gap-4">
                    <div class="w-10 h-10 rounded-full bg-primary text-on-primary flex items-center justify-center shrink-0 shadow-sm">
                        <span class="material-symbols-outlined text-xl">send_to_mobile</span>
                    </div>
                    <div>
                        <h4 class="font-title-md text-title-md text-on-surface font-bold">WhatsApp Gateway Siaga Otomatis</h4>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-1 leading-relaxed">
                            Setelah pembayaran berhasil diverifikasi melalui Midtrans, server Cattaleya akan seketika menerbitkan PDF Kuitansi Resmi, Nota Pemesanan, dan link lacak status progres mahar langsung ke nomor WhatsApp Anda.
                        </p>
                    </div>
                </div>

                <!-- Support Link -->
                <div class="text-center py-2">
                    <p class="font-label-sm text-label-sm text-secondary">
                        Ada permintaan mahar khusus seperti replika masjid, koin dinar, atau kaligrafi emas timbul?
                        <a class="text-primary font-semibold hover:underline inline-flex items-center gap-0.5 ml-1" href="https://wa.me/6282210008899" target="_blank" rel="noopener noreferrer">
                            Konsultasi Privat via WhatsApp <span class="material-symbols-outlined text-xs">north_east</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    let currentTotal = 2450000;

    const framePrices = {
        'Frame Akrilik Vitrine 3D Hexagon 40x50': 2450000,
        'Frame Kayu Ukir Jati Solid 40x60': 2100000,
        'Frame Brass & Linen Minimalis 30x40': 1450000,
        'Frame Minimalis Natural Pine 30x30': 1050000
    };

    function formatRupiah(number) {
        return 'Rp ' + number.toLocaleString('id-ID');
    }

    function updatePayAmount(scheme) {
        const btn = document.getElementById('btnPayLabel');
        const dp = Math.round(currentTotal / 2);
        if (scheme === 'dp') {
            btn.textContent = 'Lanjut ke Pembayaran Midtrans • ' + formatRupiah(dp);
        } else {
            btn.textContent = 'Lanjut ke Pembayaran Midtrans • ' + formatRupiah(currentTotal);
        }
    }

    function recalculatePrices() {
        const dp = Math.round(currentTotal / 2);
        document.getElementById('totalPriceDisplay').textContent = formatRupiah(currentTotal);
        document.getElementById('dpAmountText').textContent = formatRupiah(dp);
        document.getElementById('dpRemainderText').textContent = formatRupiah(dp);
        document.getElementById('fullAmountText').textContent = formatRupiah(currentTotal);
        
        const selectedScheme = document.querySelector('input[name="paymentScheme"]:checked')?.value || 'dp';
        updatePayAmount(selectedScheme);
    }

    // Dynamic Live Preview Bindings
    const coupleInput = document.getElementById('namaMempelai');
    const coupleSummary = document.getElementById('summaryCoupleName');
    coupleInput.addEventListener('input', (e) => {
        coupleSummary.textContent = e.target.value.trim() || 'Anindya & Raditya';
    });

    const frameSelect = document.getElementById('jenisBingkai');
    const frameSummary = document.getElementById('summaryFrameTag');
    frameSelect.addEventListener('change', (e) => {
        const val = e.target.value;
        frameSummary.textContent = val.replace('Frame ', '');
        if (framePrices[val]) {
            currentTotal = framePrices[val];
            recalculatePrices();
        }
    });

    const bgSelect = document.getElementById('jenisBackground');
    const acrylicSelect = document.getElementById('warnaAcrylic');
    const summaryBg = document.getElementById('summaryBackgroundStyle');
    function updateBgSummary() {
        summaryBg.textContent = bgSelect.value.split(' ')[0] + ' / ' + acrylicSelect.value.split(' ')[0];
    }
    bgSelect.addEventListener('change', updateBgSummary);
    acrylicSelect.addEventListener('change', updateBgSummary);

    const dowryInput = document.getElementById('nominalBentukMahar');
    const dowrySummary = document.getElementById('summaryDowryContent');
    dowryInput.addEventListener('input', (e) => {
        dowrySummary.textContent = e.target.value.trim() || '10g LM Antam';
    });

    // Theme Flower Radio Listener
    const themeRadios = document.querySelectorAll('input[name="temaBunga"]');
    const summaryThemeFlower = document.getElementById('summaryThemeFlower');
    themeRadios.forEach(radio => {
        radio.addEventListener('change', (e) => {
            if (e.target.checked) {
                summaryThemeFlower.textContent = e.target.value;
            }
        });
    });

    // Orientation toggle
    const orientasiBtns = document.querySelectorAll('.orientasi-btn');
    orientasiBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            orientasiBtns.forEach(b => {
                b.classList.remove('bg-secondary-container', 'text-on-secondary-container', 'shadow-sm');
                b.classList.add('bg-surface-container', 'text-on-surface-variant');
            });
            btn.classList.add('bg-secondary-container', 'text-on-secondary-container', 'shadow-sm');
            btn.classList.remove('bg-surface-container', 'text-on-surface-variant');
        });
    });

    function previewUpload(input) {
        const label = document.getElementById('uploadFilename');
        if (input.files && input.files[0]) {
            label.textContent = 'File terpilih: ' + input.files[0].name;
        }
    }

    function submitToMidtrans() {
        const nama = document.getElementById('namaLengkap').value;
        const wa = document.getElementById('nomorWhatsapp').value;
        const couple = document.getElementById('namaMempelai').value;

        if (!nama || !wa || !couple) {
            alert('Mohon lengkapi Nama Pelanggan, Nomor WhatsApp, dan Nama Calon Pengantin sebelum melanjutkan.');
            return;
        }

        const selectedScheme = document.querySelector('input[name="paymentScheme"]:checked').value;
        const amount = selectedScheme === 'dp' ? formatRupiah(Math.round(currentTotal / 2)) : formatRupiah(currentTotal);
      
        const confirmProceed = confirm(
            'Menghubungkan ke Gerbang Pembayaran Midtrans Snap...\n\n' +
            '• Pemesan: ' + nama + '\n' +
            '• Tagihan: ' + amount + ' (' + (selectedScheme === 'dp' ? 'Uang Muka 50%' : 'Lunas 100%') + ')\n' +
            '• Notifikasi Resi: ' + wa + '\n\n' +
            'Lanjutkan untuk memilih metode pembayaran (BCA VA / Mandiri / QRIS)?'
        );

        if (confirmProceed) {
            window.location.href = "{{ route('pembayaran') }}";
        }
    }

    // Preselect based on query parameter ?item=
    document.addEventListener('DOMContentLoaded', () => {
        const urlParams = new URLSearchParams(window.location.search);
        const itemParam = urlParams.get('item');
        if (itemParam) {
            for (let i = 0; i < frameSelect.options.length; i++) {
                if (frameSelect.options[i].value.toLowerCase().includes(itemParam.toLowerCase())) {
                    frameSelect.selectedIndex = i;
                    frameSelect.dispatchEvent(new Event('change'));
                    break;
                }
            }
        }
    });
</script>
@endpush

