@extends('layouts.admin')

@section('title', 'Ketersediaan & Jadwal Sewa Baki — Cattaleya Atelier')

@section('content')
<div class="flex flex-col w-full">
    <!-- Top Operational Banner & Visual Anchor -->
    <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-space-md mb-space-lg">
        <div>
            <div class="flex items-center gap-2 mb-1">
                <span class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-semibold">Logistik &amp; Atelier Studio</span>
                <span class="w-1 h-1 rounded-full bg-outline-variant"></span>
                <span class="font-label-sm text-label-sm text-secondary font-medium">Anti-Overlap Engine v3.2</span>
            </div>
            <h2 class="font-headline-lg text-headline-lg text-on-surface tracking-tight font-semibold">Ketersediaan &amp; Jadwal Sewa Baki</h2>
            <p class="font-body-md text-body-md text-on-surface-variant mt-1">Pantau ketersediaan baki mahar real-time, buffer pembersihan H-2 hingga H+2, dan pencegahan bentrok jadwal pengantin.</p>
        </div>

        <!-- Quick Action Admin Header -->
        <div class="flex flex-wrap items-center gap-space-sm">
            <button class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-surface-container text-on-surface hover:bg-surface-container-high transition-all shadow-sm font-label-md text-label-md font-semibold cursor-pointer border border-outline-variant/20" id="btn-open-maintenance" type="button">
                <span class="material-symbols-outlined text-[18px] text-primary">build_circle</span>
                <span>+ Blokir Perawatan (Maintenance)</span>
            </button>
            <button class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-primary text-on-primary hover:bg-surface-tint transition-all shadow-sm font-label-md text-label-md font-semibold cursor-pointer" id="btn-cek-fisik" type="button">
                <span class="material-symbols-outlined text-[18px]">fact_check</span>
                <span>Cek Stok Fisik Studio</span>
            </button>
        </div>
    </div>

    <!-- Operational Alert & Buffer Explanation Ribbon -->
    <div class="mb-space-lg grid grid-cols-1 xl:grid-cols-12 gap-space-md">
        <!-- Algoritma Proteksi Buffer -->
        <div class="xl:col-span-8 bg-surface-container-low rounded-xl p-space-md shadow-sm flex flex-col sm:flex-row sm:items-center justify-between gap-space-md relative overflow-hidden border border-outline-variant/20">
            <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-secondary-container/30 rounded-full blur-2xl pointer-events-none"></div>
            <div class="flex items-start gap-3.5 relative z-10">
                <div class="w-10 h-10 rounded-xl bg-surface-container flex items-center justify-center text-primary shrink-0 shadow-sm border border-outline-variant/20">
                    <span class="material-symbols-outlined text-[24px]">verified_user</span>
                </div>
                <div>
                    <div class="flex items-center gap-2">
                        <h3 class="font-title-md text-title-md text-on-surface font-semibold">Protokol Anti Double-Booking Aktif</h3>
                        <span class="px-2 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-semibold">Safe Lock</span>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant mt-1 leading-relaxed">
                        Sistem secara otomatis mengunci <strong class="text-on-surface font-semibold">H-2 (Inspeksi &amp; Penataan Bunga)</strong> hingga <strong class="text-on-surface font-semibold">H+2 (Pengembalian, Sterilisasi Akrilik &amp; Restorasi)</strong>. Mencegah bentrok jadwal antar pengantin dalam jendela 5 hari kalender.
                    </p>
                </div>
            </div>
            <div class="shrink-0 flex items-center gap-2 relative z-10">
                <div class="px-3 py-2 rounded-lg bg-surface-container text-center border border-outline-variant/20">
                    <span class="block font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Total Master</span>
                    <span class="font-headline-md text-headline-md text-on-surface font-bold">40</span>
                    <span class="block font-label-sm text-label-sm text-on-surface-variant">Unit Baki</span>
                </div>
            </div>
        </div>

        <!-- Alert Keterlambatan Pengembalian -->
        <div class="xl:col-span-4 bg-error-container/40 rounded-xl p-space-md shadow-sm flex items-start gap-3 relative border border-error/20">
            <div class="w-10 h-10 rounded-xl bg-error/10 text-error flex items-center justify-center shrink-0">
                <span class="material-symbols-outlined text-[22px]">notification_important</span>
            </div>
            <div class="min-w-0 flex-1">
                <div class="flex items-center justify-between">
                    <span class="font-title-md text-title-md text-on-error-container font-semibold">Perhatian Pengembalian</span>
                    <span class="px-2 py-0.5 rounded-full bg-error text-on-error font-label-sm text-label-sm font-semibold">1 Kotak Overdue</span>
                </div>
                <p class="font-body-md text-body-md text-on-surface mt-1">
                    <strong>ORD-2025-078</strong> (Anisa Rahma) terlambat 1 hari pengembalian 1 baki <em>Hidden Series</em>.
                </p>
                <div class="mt-2 flex items-center gap-2">
                    <a class="inline-flex items-center gap-1 font-label-sm text-label-sm text-error font-semibold hover:underline" href="https://wa.me/6281298442110?text=Halo%20Kak%20Anisa%2C%20pengingat%20pengembalian%20kotak%20seserahan%20Cattaleya..." target="_blank">
                        <span class="material-symbols-outlined text-[16px]">call</span>
                        <span>Hubungi WO via WA</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Interactive Date Range Filtering & Quick Presets -->
    <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm mb-space-lg border border-outline-variant/20">
        <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-space-md">
            <!-- Date Picker Range Form Group -->
            <div class="flex flex-wrap items-center gap-3">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary text-[22px]">date_range</span>
                    <span class="font-title-md text-title-md text-on-surface font-semibold">Periode Acara Disewa:</span>
                </div>
                <div class="flex items-center gap-2 bg-surface-container-low px-3 py-1.5 rounded-xl shadow-inner border border-outline-variant/20">
                    <div class="flex flex-col">
                        <span class="font-label-sm text-label-sm text-secondary font-semibold">Tanggal Pengambilan (H-2)</span>
                        <input class="bg-transparent font-title-md text-title-md text-on-surface focus:outline-none cursor-pointer" id="filter-start" type="date" value="2025-10-20">
                    </div>
                    <span class="text-secondary font-title-md px-1 font-semibold">s/d</span>
                    <div class="flex flex-col">
                        <span class="font-label-sm text-label-sm text-secondary font-semibold">Pengembalian Bersih (H+2)</span>
                        <input class="bg-transparent font-title-md text-title-md text-on-surface focus:outline-none cursor-pointer" id="filter-end" type="date" value="2025-10-24">
                    </div>
                </div>
            </div>

            <!-- Quick Preset Filter Chips -->
            <div class="flex items-center gap-2 overflow-x-auto pb-1 lg:pb-0">
                <span class="font-label-sm text-label-sm text-secondary shrink-0 uppercase tracking-wider font-semibold">Preset:</span>
                <button class="preset-btn px-3 py-1.5 rounded-full bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors font-label-sm text-label-sm font-semibold whitespace-nowrap active-preset cursor-pointer" type="button">
                    20 Okt – 24 Okt 2025
                </button>
                <button class="preset-btn px-3 py-1.5 rounded-full bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-colors font-label-sm text-label-sm font-medium whitespace-nowrap cursor-pointer" type="button">
                    Akhir Pekan Ini (25-26 Okt)
                </button>
                <button class="preset-btn px-3 py-1.5 rounded-full bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-colors font-label-sm text-label-sm font-medium whitespace-nowrap cursor-pointer" type="button">
                    Pekan Depan (27 Okt - 2 Nov)
                </button>
                <button class="preset-btn px-3 py-1.5 rounded-full bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-colors font-label-sm text-label-sm font-medium whitespace-nowrap cursor-pointer" type="button">
                    Bulan Ini (Okt 2025)
                </button>
            </div>
        </div>
    </div>

    <!-- 4 Main Box Series Cards (Stok Master 10 Unit Each) -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-space-md mb-space-xl">
        <!-- 1. Luxury Crystal Series -->
        <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between group border border-outline-variant/20">
            <div>
                <!-- Image & Tag -->
                <div class="relative w-full h-44 rounded-lg overflow-hidden mb-space-sm bg-surface-container">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Luxury Crystal Series Dowry Box" src="https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=700&q=80">
                    <div class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-full bg-surface/90 backdrop-blur-md shadow-sm">
                        <span class="font-label-sm text-label-sm font-semibold text-primary">Master: 10 Unit</span>
                    </div>
                    <div class="absolute top-2.5 right-2.5 px-2.5 py-1 rounded-full bg-surface-container-high/90 backdrop-blur-md">
                        <span class="font-label-sm text-label-sm font-semibold text-secondary">Seri 01</span>
                    </div>
                </div>

                <!-- Box Title & Specs -->
                <div class="flex items-start justify-between gap-2 mb-1">
                    <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Luxury Crystal</h3>
                    <span class="px-2.5 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-semibold">Tersedia</span>
                </div>
                <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2 mb-space-md">Akrilik bevel ultra-clear 4mm dengan lis brass keemasan dan bantalan beludru ivory.</p>

                <!-- Availability Metrics -->
                <div class="grid grid-cols-2 gap-2 p-2.5 rounded-xl bg-surface-container-low mb-space-sm border border-outline-variant/10">
                    <div>
                        <span class="font-label-sm text-label-sm text-secondary block font-semibold">Sudah Dibooking</span>
                        <span class="font-headline-md text-headline-md text-on-surface font-semibold">6 <span class="text-title-md font-normal text-on-surface-variant">Unit</span></span>
                    </div>
                    <div class="text-right">
                        <span class="font-label-sm text-label-sm text-primary block font-semibold">Sisa Tersedia</span>
                        <span class="font-headline-md text-headline-md text-primary font-bold">4 <span class="text-title-md font-normal text-primary">Unit</span></span>
                    </div>
                </div>

                <!-- Occupancy Progress Bar (60%) -->
                <div class="mb-space-md">
                    <div class="flex items-center justify-between font-label-sm text-label-sm text-on-surface-variant mb-1">
                        <span class="font-medium">Okupansi Slot</span>
                        <span class="font-semibold text-on-surface">60%</span>
                    </div>
                    <div class="w-full h-2 rounded-full bg-surface-container overflow-hidden">
                        <div class="h-full bg-primary-container rounded-full" style="width: 60%"></div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col gap-2 pt-space-xs">
                <button class="w-full py-2.5 rounded-xl bg-primary text-on-primary font-label-md text-label-md hover:bg-surface-tint transition-colors flex items-center justify-center gap-1.5 shadow-sm font-semibold cursor-pointer" onclick="quickBookSlot('Luxury Crystal', 4)" type="button">
                    <span class="material-symbols-outlined text-[18px]">add_shopping_cart</span>
                    <span>Booking Slot Kotak (4 Sisa)</span>
                </button>
                <button class="w-full py-2 rounded-xl bg-surface-container text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high font-label-md text-label-md transition-colors flex items-center justify-center gap-1 font-medium cursor-pointer" onclick="showScheduleModal('Luxury Crystal')" type="button">
                    <span class="material-symbols-outlined text-[18px]">event_note</span>
                    <span>Lihat Jadwal Penyewa</span>
                </button>
            </div>
        </div>

        <!-- 2. Luxury White Series -->
        <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between group border border-outline-variant/20">
            <div>
                <!-- Image & Tag -->
                <div class="relative w-full h-44 rounded-lg overflow-hidden mb-space-sm bg-surface-container">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Luxury White Series Dowry Box" src="https://images.unsplash.com/photo-1545232979-fbf68fe9b10d?auto=format&fit=crop&w=700&q=80">
                    <div class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-full bg-surface/90 backdrop-blur-md shadow-sm">
                        <span class="font-label-sm text-label-sm font-semibold text-primary">Master: 10 Unit</span>
                    </div>
                    <div class="absolute top-2.5 right-2.5 px-2.5 py-1 rounded-full bg-surface-container-high/90 backdrop-blur-md">
                        <span class="font-label-sm text-label-sm font-semibold text-secondary">Seri 02</span>
                    </div>
                </div>

                <!-- Box Title & Specs -->
                <div class="flex items-start justify-between gap-2 mb-1">
                    <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Luxury White</h3>
                    <span class="px-2.5 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-semibold">Tersedia</span>
                </div>
                <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2 mb-space-md">Kayu solid finishing duco putih mutiara semi-matte dengan ornamen logam champange satin.</p>

                <!-- Availability Metrics -->
                <div class="grid grid-cols-2 gap-2 p-2.5 rounded-xl bg-surface-container-low mb-space-sm border border-outline-variant/10">
                    <div>
                        <span class="font-label-sm text-label-sm text-secondary block font-semibold">Sudah Dibooking</span>
                        <span class="font-headline-md text-headline-md text-on-surface font-semibold">3 <span class="text-title-md font-normal text-on-surface-variant">Unit</span></span>
                    </div>
                    <div class="text-right">
                        <span class="font-label-sm text-label-sm text-primary block font-semibold">Sisa Tersedia</span>
                        <span class="font-headline-md text-headline-md text-primary font-bold">7 <span class="text-title-md font-normal text-primary">Unit</span></span>
                    </div>
                </div>

                <!-- Occupancy Progress Bar (30%) -->
                <div class="mb-space-md">
                    <div class="flex items-center justify-between font-label-sm text-label-sm text-on-surface-variant mb-1">
                        <span class="font-medium">Okupansi Slot</span>
                        <span class="font-semibold text-on-surface">30%</span>
                    </div>
                    <div class="w-full h-2 rounded-full bg-surface-container overflow-hidden">
                        <div class="h-full bg-primary-container rounded-full" style="width: 30%"></div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col gap-2 pt-space-xs">
                <button class="w-full py-2.5 rounded-xl bg-primary text-on-primary font-label-md text-label-md hover:bg-surface-tint transition-colors flex items-center justify-center gap-1.5 shadow-sm font-semibold cursor-pointer" onclick="quickBookSlot('Luxury White', 7)" type="button">
                    <span class="material-symbols-outlined text-[18px]">add_shopping_cart</span>
                    <span>Booking Slot Kotak (7 Sisa)</span>
                </button>
                <button class="w-full py-2 rounded-xl bg-surface-container text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high font-label-md text-label-md transition-colors flex items-center justify-center gap-1 font-medium cursor-pointer" onclick="showScheduleModal('Luxury White')" type="button">
                    <span class="material-symbols-outlined text-[18px]">event_note</span>
                    <span>Lihat Jadwal Penyewa</span>
                </button>
            </div>
        </div>

        <!-- 3. Hidden Series (FULL BOOKED) -->
        <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between group relative overflow-hidden border border-outline-variant/20">
            <!-- Full booked badge stripe -->
            <div class="absolute top-0 right-0 left-0 h-1 bg-error"></div>
            <div>
                <!-- Image & Tag -->
                <div class="relative w-full h-44 rounded-lg overflow-hidden mb-space-sm bg-surface-container">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 grayscale-[20%]" alt="Hidden Series Dowry Box" src="https://images.unsplash.com/photo-1549465220-1a8b9238cd48?auto=format&fit=crop&w=700&q=80">
                    <div class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-full bg-surface/90 backdrop-blur-md shadow-sm">
                        <span class="font-label-sm text-label-sm font-semibold text-primary">Master: 10 Unit</span>
                    </div>
                    <div class="absolute top-2.5 right-2.5 px-2.5 py-1 rounded-full bg-error-container text-on-error-container font-semibold">
                        <span class="font-label-sm text-label-sm">Terkunci</span>
                    </div>
                </div>

                <!-- Box Title & Specs -->
                <div class="flex items-start justify-between gap-2 mb-1">
                    <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Hidden Series</h3>
                    <span class="px-2.5 py-0.5 rounded-full bg-error-container text-on-error-container font-label-sm text-label-sm font-semibold">Full Booked</span>
                </div>
                <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2 mb-space-md">Konsep tutup intrik rahasia berukir mewah, privasi mahar premium dengan kunci brass kustom.</p>

                <!-- Availability Metrics -->
                <div class="grid grid-cols-2 gap-2 p-2.5 rounded-xl bg-error-container/20 mb-space-sm border border-error/20">
                    <div>
                        <span class="font-label-sm text-label-sm text-secondary block font-semibold">Sudah Dibooking</span>
                        <span class="font-headline-md text-headline-md text-error font-semibold">10 <span class="text-title-md font-normal text-error">Unit</span></span>
                    </div>
                    <div class="text-right">
                        <span class="font-label-sm text-label-sm text-on-surface-variant block font-semibold">Sisa Tersedia</span>
                        <span class="font-headline-md text-headline-md text-on-surface-variant font-bold">0 <span class="text-title-md font-normal text-on-surface-variant">Unit</span></span>
                    </div>
                </div>

                <!-- Occupancy Progress Bar (100%) -->
                <div class="mb-space-md">
                    <div class="flex items-center justify-between font-label-sm text-label-sm text-error font-semibold mb-1">
                        <span>Kapasitas Penuh (Safe Protected)</span>
                        <span>100%</span>
                    </div>
                    <div class="w-full h-2 rounded-full bg-surface-container overflow-hidden">
                        <div class="h-full bg-error rounded-full" style="width: 100%"></div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons (Disabled Booking) -->
            <div class="flex flex-col gap-2 pt-space-xs">
                <button class="w-full py-2.5 rounded-xl bg-surface-container-high text-on-surface-variant opacity-60 font-label-md text-label-md cursor-not-allowed flex items-center justify-center gap-1.5 font-semibold" disabled="" type="button">
                    <span class="material-symbols-outlined text-[18px]">lock</span>
                    <span>Slot Penuh untuk Periode Ini</span>
                </button>
                <button class="w-full py-2 rounded-xl bg-surface-container text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high font-label-md text-label-md transition-colors flex items-center justify-center gap-1 font-medium cursor-pointer" onclick="showScheduleModal('Hidden Series')" type="button">
                    <span class="material-symbols-outlined text-[18px]">event_note</span>
                    <span>Lihat Jadwal Penyewa</span>
                </button>
            </div>
        </div>

        <!-- 4. Rattan Series -->
        <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between group border border-outline-variant/20">
            <div>
                <!-- Image & Tag -->
                <div class="relative w-full h-44 rounded-lg overflow-hidden mb-space-sm bg-surface-container">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Rattan Series Dowry Box" src="https://images.unsplash.com/photo-1513519245088-0e12902e5a38?auto=format&fit=crop&w=700&q=80">
                    <div class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-full bg-surface/90 backdrop-blur-md shadow-sm">
                        <span class="font-label-sm text-label-sm font-semibold text-primary">Master: 10 Unit</span>
                    </div>
                    <div class="absolute top-2.5 right-2.5 px-2.5 py-1 rounded-full bg-surface-container-high/90 backdrop-blur-md">
                        <span class="font-label-sm text-label-sm font-semibold text-secondary">Seri 04</span>
                    </div>
                </div>

                <!-- Box Title & Specs -->
                <div class="flex items-start justify-between gap-2 mb-1">
                    <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Rattan Series</h3>
                    <span class="px-2.5 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-semibold">Tersedia</span>
                </div>
                <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2 mb-space-md">Anyaman rotan alami kelas ekspor dengan alas kain goni berpadu linen natural hangat.</p>

                <!-- Availability Metrics -->
                <div class="grid grid-cols-2 gap-2 p-2.5 rounded-xl bg-surface-container-low mb-space-sm border border-outline-variant/10">
                    <div>
                        <span class="font-label-sm text-label-sm text-secondary block font-semibold">Sudah Dibooking</span>
                        <span class="font-headline-md text-headline-md text-on-surface font-semibold">2 <span class="text-title-md font-normal text-on-surface-variant">Unit</span></span>
                    </div>
                    <div class="text-right">
                        <span class="font-label-sm text-label-sm text-primary block font-semibold">Sisa Tersedia</span>
                        <span class="font-headline-md text-headline-md text-primary font-bold">8 <span class="text-title-md font-normal text-primary">Unit</span></span>
                    </div>
                </div>

                <!-- Occupancy Progress Bar (20%) -->
                <div class="mb-space-md">
                    <div class="flex items-center justify-between font-label-sm text-label-sm text-on-surface-variant mb-1">
                        <span class="font-medium">Okupansi Slot</span>
                        <span class="font-semibold text-on-surface">20%</span>
                    </div>
                    <div class="w-full h-2 rounded-full bg-surface-container overflow-hidden">
                        <div class="h-full bg-primary-container rounded-full" style="width: 20%"></div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col gap-2 pt-space-xs">
                <button class="w-full py-2.5 rounded-xl bg-primary text-on-primary font-label-md text-label-md hover:bg-surface-tint transition-colors flex items-center justify-center gap-1.5 shadow-sm font-semibold cursor-pointer" onclick="quickBookSlot('Rattan Series', 8)" type="button">
                    <span class="material-symbols-outlined text-[18px]">add_shopping_cart</span>
                    <span>Booking Slot Kotak (8 Sisa)</span>
                </button>
                <button class="w-full py-2 rounded-xl bg-surface-container text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high font-label-md text-label-md transition-colors flex items-center justify-center gap-1 font-medium cursor-pointer" onclick="showScheduleModal('Rattan Series')" type="button">
                    <span class="material-symbols-outlined text-[18px]">event_note</span>
                    <span>Lihat Jadwal Penyewa</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Kalender & Gantt Visual Jadwal Pemakaian Kotak (Anti Double-Booking Visualizer) -->
    <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm mb-space-xl border border-outline-variant/20">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-space-md mb-space-md">
            <div>
                <div class="flex items-center gap-2 mb-1">
                    <span class="material-symbols-outlined text-primary text-[20px]">calendar_view_week</span>
                    <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Peta Timeline Alokasi Baki &amp; Buffer Perawatan</h3>
                </div>
                <p class="font-body-md text-body-md text-on-surface-variant">Visualisasi bentang sewa aktif per Pesanan. Bar strip biru/emas mengindikasikan masa sewa &amp; buffer sterilisasi.</p>
            </div>
            <div class="flex items-center gap-3">
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full bg-primary-container"></span>
                    <span class="font-label-sm text-label-sm text-secondary font-medium">Terpakai Acara</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full bg-secondary-fixed-dim"></span>
                    <span class="font-label-sm text-label-sm text-secondary font-medium">Buffer H-2/H+2</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full bg-tertiary-fixed"></span>
                    <span class="font-label-sm text-label-sm text-secondary font-medium">Maintenance</span>
                </div>
            </div>
        </div>

        <!-- Timeline Grid Header & Rows -->
        <div class="overflow-x-auto pb-space-sm">
            <div class="min-w-[900px]">
                <!-- Days Header -->
                <div class="grid grid-cols-12 gap-1 bg-surface-container-low rounded-lg p-2 mb-2 font-label-sm text-label-sm text-secondary text-center uppercase tracking-wider font-semibold border border-outline-variant/10">
                    <div class="col-span-3 text-left pl-2">Jenis Kotak / Seri</div>
                    <div>18 Okt</div>
                    <div>19 Okt</div>
                    <div class="bg-primary/10 rounded text-primary font-bold">20 Okt</div>
                    <div class="bg-primary/10 rounded text-primary font-bold">21 Okt</div>
                    <div class="bg-primary/10 rounded text-primary font-bold">22 Okt</div>
                    <div class="bg-primary/10 rounded text-primary font-bold">23 Okt</div>
                    <div class="bg-primary/10 rounded text-primary font-bold">24 Okt</div>
                    <div>25 Okt</div>
                    <div>26 Okt</div>
                </div>

                <!-- Row 1: Luxury Crystal Timeline -->
                <div class="grid grid-cols-12 gap-1 items-center py-3 border-b border-surface-container-high/40 hover:bg-surface-container-low/40 rounded-lg px-2 transition-colors">
                    <div class="col-span-3">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-primary"></span>
                            <span class="font-title-md text-title-md text-on-surface font-semibold">Luxury Crystal</span>
                            <span class="font-label-sm text-label-sm px-1.5 py-0.5 rounded bg-surface-container text-secondary font-semibold">6/10 Unit</span>
                        </div>
                    </div>
                    <!-- 9 Columns timeline span -->
                    <div class="col-span-9 grid grid-cols-9 gap-1 h-9 items-center relative">
                        <!-- ORD-2025-089 (Sarah & Dimas - 4 baki) -->
                        <div class="col-start-2 col-span-5 h-7 rounded-lg bg-primary-container text-on-primary-container shadow-sm flex items-center justify-between px-2 font-label-sm text-label-sm overflow-hidden z-10 cursor-pointer hover:opacity-95" onclick="showScheduleModal('Luxury Crystal')" title="Sarah & Dimas (4 Baki) | Resepsi 21-22 Okt">
                            <span class="truncate font-semibold">ORD-089 (Sarah D.) • 4 Baki</span>
                            <span class="font-label-sm text-[10px] bg-black/20 px-1.5 py-0.5 rounded">H-2 Buffering</span>
                        </div>
                        <!-- ORD-2025-091 (Rizky & Amanda - 2 baki) -->
                        <div class="col-start-4 col-span-4 h-6 rounded-lg bg-secondary text-on-secondary shadow-sm flex items-center justify-between px-2 font-label-sm text-[10px] overflow-hidden opacity-90 z-20 cursor-pointer mt-1" onclick="showScheduleModal('Luxury Crystal')" title="Rizky & Amanda (2 Baki)">
                            <span class="truncate font-medium">ORD-091 (Rizky) • 2 Baki</span>
                        </div>
                    </div>
                </div>

                <!-- Row 2: Luxury White Timeline -->
                <div class="grid grid-cols-12 gap-1 items-center py-3 border-b border-surface-container-high/40 hover:bg-surface-container-low/40 rounded-lg px-2 transition-colors">
                    <div class="col-span-3">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-secondary"></span>
                            <span class="font-title-md text-title-md text-on-surface font-semibold">Luxury White</span>
                            <span class="font-label-sm text-label-sm px-1.5 py-0.5 rounded bg-surface-container text-secondary font-semibold">3/10 Unit</span>
                        </div>
                    </div>
                    <div class="col-span-9 grid grid-cols-9 gap-1 h-9 items-center relative">
                        <!-- ORD-2025-094 (Farah & Adrian - 3 baki) -->
                        <div class="col-start-3 col-span-4 h-7 rounded-lg bg-surface-container-highest text-on-surface shadow-sm flex items-center justify-between px-2 font-label-sm text-label-sm overflow-hidden cursor-pointer" onclick="showScheduleModal('Luxury White')" title="Farah & Adrian (3 Baki)">
                            <span class="truncate font-semibold">ORD-094 (Farah A.) • 3 Baki</span>
                            <span class="font-label-sm text-[10px] text-secondary font-medium">Ready Slot</span>
                        </div>
                    </div>
                </div>

                <!-- Row 3: Hidden Series Timeline (Congested) -->
                <div class="grid grid-cols-12 gap-1 items-center py-3 border-b border-surface-container-high/40 hover:bg-surface-container-low/40 rounded-lg px-2 transition-colors bg-error-container/10">
                    <div class="col-span-3">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-error"></span>
                            <span class="font-title-md text-title-md text-on-surface font-semibold">Hidden Series</span>
                            <span class="font-label-sm text-label-sm px-1.5 py-0.5 rounded bg-error-container text-on-error-container font-semibold">10/10 FULL</span>
                        </div>
                    </div>
                    <div class="col-span-9 grid grid-cols-9 gap-1 h-9 items-center relative">
                        <!-- Multiple stacked bars simulating 10 full units -->
                        <div class="col-start-2 col-span-7 h-7 rounded-lg bg-error text-on-error shadow-sm flex items-center justify-between px-2 font-label-sm text-label-sm overflow-hidden cursor-pointer" onclick="showScheduleModal('Hidden Series')" title="10 Unit Terpakai Penuh: ORD-088 (5 Baki), ORD-090 (3 Baki), MTC-002 (2 Baki Restorasi)">
                            <span class="truncate font-semibold">KUNCI TOTAL: ORD-088 (5x), ORD-090 (3x), MTC Studio (2x)</span>
                            <span class="font-label-sm text-[10px] bg-black/30 px-1 rounded">No Overlap Safe</span>
                        </div>
                    </div>
                </div>

                <!-- Row 4: Rattan Series Timeline -->
                <div class="grid grid-cols-12 gap-1 items-center py-3 hover:bg-surface-container-low/40 rounded-lg px-2 transition-colors">
                    <div class="col-span-3">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-tertiary"></span>
                            <span class="font-title-md text-title-md text-on-surface font-semibold">Rattan Series</span>
                            <span class="font-label-sm text-label-sm px-1.5 py-0.5 rounded bg-surface-container text-secondary font-semibold">2/10 Unit</span>
                        </div>
                    </div>
                    <div class="col-span-9 grid grid-cols-9 gap-1 h-9 items-center relative">
                        <!-- ORD-2025-095 (Bella & Kevin - 2 baki) -->
                        <div class="col-start-4 col-span-3 h-7 rounded-lg bg-tertiary-container text-on-tertiary-container shadow-sm flex items-center justify-between px-2 font-label-sm text-label-sm overflow-hidden cursor-pointer" onclick="showScheduleModal('Rattan Series')" title="Bella & Kevin (2 Baki)">
                            <span class="truncate font-semibold">ORD-095 (Bella) • 2 Baki</span>
                            <span class="font-label-sm text-[10px]">Tersedia 8</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Timeline Footer Note -->
        <div class="mt-space-md pt-space-sm border-t border-surface-container-high/60 flex flex-col sm:flex-row items-center justify-between text-secondary font-label-sm text-label-sm gap-2">
            <div class="flex items-center gap-1.5">
                <span class="material-symbols-outlined text-[16px] text-primary">info</span>
                <span>Klik bar timeline untuk membuka dosir pesanan klien &amp; tanggal serah-terima WO.</span>
            </div>
            <div>
                <span>Sinkronisasi Otomatis Setiap 60 Detik</span>
            </div>
        </div>
    </div>
</div>

<!-- Modal: Jadwal Rinci Penyewa Kotak (Immutable Read-Only Dossier) -->
<div class="fixed inset-0 z-50 flex items-center justify-center bg-inverse-surface/40 backdrop-blur-xs hidden p-4" id="schedule-modal">
    <div class="bg-surface-container-lowest rounded-xl shadow-2xl max-w-2xl w-full overflow-hidden flex flex-col max-h-[870px] border border-outline-variant/30 animate-in fade-in zoom-in-95 duration-150">
        <!-- Modal Header -->
        <div class="p-space-lg bg-surface-container-low flex items-center justify-between border-b border-surface-container">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-primary-container text-on-primary-container flex items-center justify-center font-title-md">
                    <span class="material-symbols-outlined">inventory_2</span>
                </div>
                <div>
                    <h4 class="font-headline-md text-headline-md text-on-surface font-semibold" id="modal-box-title">Daftar Penyewa: Luxury Crystal</h4>
                    <p class="font-label-sm text-label-sm text-secondary">Periode Terpilih: 20 Okt s/d 24 Okt 2025</p>
                </div>
            </div>
            <button class="p-1.5 rounded-full text-secondary hover:bg-surface-container hover:text-on-surface transition-colors cursor-pointer" onclick="closeScheduleModal()" type="button">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>

        <!-- Modal Body / Table of Bookers -->
        <div class="p-space-lg overflow-y-auto flex-1">
            <table class="w-full text-left font-body-md text-body-md">
                <thead>
                    <tr class="text-secondary font-label-sm text-label-sm uppercase tracking-wider border-b border-surface-container-high font-semibold">
                        <th class="pb-2">ID Pesanan</th>
                        <th class="pb-2">Nama Pengantin</th>
                        <th class="pb-2 text-center">Jumlah Baki</th>
                        <th class="pb-2">Jadwal Acara</th>
                        <th class="pb-2 text-right">Status Baki</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-surface-container-high" id="scheduleModalTableBody">
                    <tr>
                        <td class="py-3 font-semibold text-primary">ORD-2025-089</td>
                        <td class="py-3">
                            <span class="font-title-md text-title-md text-on-surface block font-semibold">Sarah Nadia &amp; Dimas</span>
                            <span class="font-label-sm text-label-sm text-secondary">The Langham Jakarta</span>
                        </td>
                        <td class="py-3 text-center font-semibold">4 Unit</td>
                        <td class="py-3 text-secondary">21 - 22 Okt 2025</td>
                        <td class="py-3 text-right">
                            <span class="px-2.5 py-1 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-semibold">Dipersiapkan H-2</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 font-semibold text-primary">ORD-2025-091</td>
                        <td class="py-3">
                            <span class="font-title-md text-title-md text-on-surface block font-semibold">Rizky Maulana &amp; Amanda</span>
                            <span class="font-label-sm text-label-sm text-secondary">Plataran Dharmawangsa</span>
                        </td>
                        <td class="py-3 text-center font-semibold">2 Unit</td>
                        <td class="py-3 text-secondary">22 - 23 Okt 2025</td>
                        <td class="py-3 text-right">
                            <span class="px-2.5 py-1 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm font-semibold">Terkonfirmasi</span>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- Summary in modal -->
            <div class="mt-space-md p-3 rounded-lg bg-surface-container-low flex items-center justify-between border border-outline-variant/20">
                <span class="font-body-md text-body-md text-secondary" id="modalTotalUsed">Total Baki Terpakai: <strong class="text-on-surface">6 Unit</strong></span>
                <span class="font-body-md text-body-md text-primary font-semibold" id="modalRemainingSlot">Sisa Slot Bersih: 4 Unit</span>
            </div>
        </div>

        <!-- Modal Footer -->
        <div class="p-space-md bg-surface-container-low flex justify-end gap-2 border-t border-surface-container">
            <button class="px-4 py-2 rounded-xl bg-surface-container text-on-surface font-label-md text-label-md hover:bg-surface-container-high transition-colors cursor-pointer" onclick="closeScheduleModal()" type="button">
                Tutup
            </button>
        </div>
    </div>
</div>

<!-- Modal: Form Blokir Perawatan (Maintenance) -->
<div class="fixed inset-0 z-50 flex items-center justify-center bg-inverse-surface/40 backdrop-blur-xs hidden p-4" id="maintenance-modal">
    <div class="bg-surface-container-lowest rounded-xl shadow-2xl max-w-lg w-full overflow-hidden border border-outline-variant/30 animate-in fade-in zoom-in-95 duration-150">
        <div class="p-space-md bg-surface-container-low flex items-center justify-between border-b border-surface-container">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">build</span>
                <h4 class="font-headline-md text-headline-md text-on-surface font-semibold">Blokir Slot Perawatan Baki</h4>
            </div>
            <button class="p-1.5 rounded-full text-secondary hover:bg-surface-container cursor-pointer" id="btn-close-maintenance" type="button">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
        <form class="p-space-lg flex flex-col gap-space-md" id="form-maintenance" onsubmit="event.preventDefault(); submitMaintenance();">
            <div>
                <label class="font-label-sm text-label-sm uppercase tracking-wider text-secondary block mb-1 font-semibold">Pilih Jenis Kotak</label>
                <select class="w-full bg-surface-container-low rounded-xl px-3 py-2.5 font-body-md text-body-md text-on-surface focus:outline-none border border-outline-variant/20 cursor-pointer" id="mtc-box-type">
                    <option value="Luxury Crystal">Luxury Crystal (Tersedia 4)</option>
                    <option value="Luxury White">Luxury White (Tersedia 7)</option>
                    <option value="Hidden Series">Hidden Series (Slot Penuh)</option>
                    <option value="Rattan Series">Rattan Series (Tersedia 8)</option>
                </select>
            </div>
            <div class="grid grid-cols-2 gap-3">
                <div>
                    <label class="font-label-sm text-label-sm uppercase tracking-wider text-secondary block mb-1 font-semibold">Jumlah Unit</label>
                    <input class="w-full bg-surface-container-low rounded-xl px-3 py-2 font-body-md text-body-md text-on-surface focus:outline-none border border-outline-variant/20" id="mtc-unit-count" max="10" min="1" type="number" value="1">
                </div>
                <div>
                    <label class="font-label-sm text-label-sm uppercase tracking-wider text-secondary block mb-1 font-semibold">Tipe Kendala</label>
                    <select class="w-full bg-surface-container-low rounded-xl px-3 py-2 font-body-md text-body-md text-on-surface focus:outline-none border border-outline-variant/20 cursor-pointer" id="mtc-issue-type">
                        <option>Poles Akrilik Baret</option>
                        <option>Engsel / Kunci Longgar</option>
                        <option>Sterilisasi Mendalam</option>
                        <option>Penggantian Beludru</option>
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-3">
                <div>
                    <label class="font-label-sm text-label-sm uppercase tracking-wider text-secondary block mb-1 font-semibold">Mulai Perawatan</label>
                    <input class="w-full bg-surface-container-low rounded-xl px-3 py-2 font-body-md text-body-md text-on-surface focus:outline-none border border-outline-variant/20 cursor-pointer" id="mtc-start-date" type="date" value="2025-10-21">
                </div>
                <div>
                    <label class="font-label-sm text-label-sm uppercase tracking-wider text-secondary block mb-1 font-semibold">Selesai Estimasi</label>
                    <input class="w-full bg-surface-container-low rounded-xl px-3 py-2 font-body-md text-body-md text-on-surface focus:outline-none border border-outline-variant/20 cursor-pointer" id="mtc-end-date" type="date" value="2025-10-23">
                </div>
            </div>
            <div>
                <label class="font-label-sm text-label-sm uppercase tracking-wider text-secondary block mb-1 font-semibold">Catatan Artisan Studio</label>
                <textarea class="w-full bg-surface-container-low rounded-xl p-3 font-body-md text-body-md text-on-surface focus:outline-none border border-outline-variant/20" id="mtc-notes" placeholder="Contoh: Perlu penggantian rivet sudut kanan baki seri 03..." rows="2"></textarea>
            </div>
            <div class="flex items-center justify-end gap-2 pt-2 border-t border-surface-container">
                <button class="px-4 py-2 rounded-xl bg-surface-container text-on-surface font-label-md text-label-md cursor-pointer hover:bg-surface-container-high" id="btn-cancel-maintenance" type="button">Batal</button>
                <button class="px-4 py-2 rounded-xl bg-primary text-on-primary font-label-md text-label-md hover:bg-surface-tint shadow-sm font-semibold cursor-pointer" type="submit">Simpan Blokir</button>
            </div>
        </form>
    </div>
</div>

<!-- Notification Toast -->
<div class="fixed bottom-6 right-6 z-50 transform translate-y-20 opacity-0 transition-all duration-300 pointer-events-none" id="toast">
    <div class="bg-inverse-surface text-inverse-on-surface px-4 py-3 rounded-xl shadow-xl flex items-center gap-3 border border-outline-variant/20">
        <span class="material-symbols-outlined text-inverse-primary text-[20px]">check_circle</span>
        <span class="font-label-md text-label-md font-medium" id="toast-message">Aksi berhasil dilakukan.</span>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Data schedule per box type
    const scheduleDatabase = {
        'Luxury Crystal': {
            totalUsed: '6 Unit',
            remaining: '4 Unit',
            rows: [
                {
                    id: 'ORD-2025-089',
                    name: 'Sarah Nadia & Dimas',
                    venue: 'The Langham Jakarta',
                    units: '4 Unit',
                    date: '21 - 22 Okt 2025',
                    status: 'Dipersiapkan H-2',
                    statusClass: 'bg-secondary-fixed text-on-secondary-fixed'
                },
                {
                    id: 'ORD-2025-091',
                    name: 'Rizky Maulana & Amanda',
                    venue: 'Plataran Dharmawangsa',
                    units: '2 Unit',
                    date: '22 - 23 Okt 2025',
                    status: 'Terkonfirmasi',
                    statusClass: 'bg-surface-container text-on-surface'
                }
            ]
        },
        'Luxury White': {
            totalUsed: '3 Unit',
            remaining: '7 Unit',
            rows: [
                {
                    id: 'ORD-2025-094',
                    name: 'Farah & Adrian',
                    venue: 'InterContinental Pondok Indah',
                    units: '3 Unit',
                    date: '20 - 22 Okt 2025',
                    status: 'Dipersiapkan H-2',
                    statusClass: 'bg-secondary-fixed text-on-secondary-fixed'
                }
            ]
        },
        'Hidden Series': {
            totalUsed: '10 Unit',
            remaining: '0 Unit (Full Booked)',
            rows: [
                {
                    id: 'ORD-2025-088',
                    name: 'Anindya Larasati & Raditya',
                    venue: 'The Hermitage Menteng',
                    units: '5 Unit',
                    date: '20 - 23 Okt 2025',
                    status: 'Sedang Disewa (Active)',
                    statusClass: 'bg-error-container text-on-error-container'
                },
                {
                    id: 'ORD-2025-090',
                    name: 'Bramantyo & Nadia',
                    venue: 'Hotel Mulia Senayan',
                    units: '3 Unit',
                    date: '21 - 24 Okt 2025',
                    status: 'Terkunci Jadwal',
                    statusClass: 'bg-secondary-fixed text-on-secondary-fixed'
                },
                {
                    id: 'MTC-002',
                    name: 'Studio Maintenance',
                    venue: 'Bengkel Artisan Kayu',
                    units: '2 Unit',
                    date: '19 - 25 Okt 2025',
                    status: 'Restorasi Kunci',
                    statusClass: 'bg-surface-container text-secondary'
                }
            ]
        },
        'Rattan Series': {
            totalUsed: '2 Unit',
            remaining: '8 Unit',
            rows: [
                {
                    id: 'ORD-2025-095',
                    name: 'Bella & Kevin',
                    venue: 'Hutan Kota by Plataran',
                    units: '2 Unit',
                    date: '22 - 24 Okt 2025',
                    status: 'Terkonfirmasi',
                    statusClass: 'bg-surface-container text-on-surface'
                }
            ]
        }
    };

    // Schedule Modal Controller
    function showScheduleModal(boxType) {
        const modal = document.getElementById('schedule-modal');
        const title = document.getElementById('modal-box-title');
        const tableBody = document.getElementById('scheduleModalTableBody');
        const totalUsed = document.getElementById('modalTotalUsed');
        const remaining = document.getElementById('modalRemainingSlot');

        if (!modal) return;
        if (title) title.textContent = 'Daftar Penyewa: ' + boxType;

        const data = scheduleDatabase[boxType] || {
            totalUsed: '0 Unit',
            remaining: '10 Unit',
            rows: []
        };

        if (totalUsed) totalUsed.innerHTML = `Total Baki Terpakai: <strong class="text-on-surface">${data.totalUsed}</strong>`;
        if (remaining) remaining.innerText = `Sisa Slot Bersih: ${data.remaining}`;

        if (tableBody) {
            tableBody.innerHTML = '';
            if (data.rows.length === 0) {
                tableBody.innerHTML = '<tr><td colspan="5" class="py-4 text-center text-secondary">Belum ada booking aktif pada periode ini.</td></tr>';
            } else {
                data.rows.forEach(item => {
                    const tr = document.createElement('tr');
                    tr.innerHTML = `
                        <td class="py-3 font-semibold text-primary">${item.id}</td>
                        <td class="py-3">
                            <span class="font-title-md text-title-md text-on-surface block font-semibold">${item.name}</span>
                            <span class="font-label-sm text-label-sm text-secondary">${item.venue}</span>
                        </td>
                        <td class="py-3 text-center font-semibold">${item.units}</td>
                        <td class="py-3 text-secondary">${item.date}</td>
                        <td class="py-3 text-right">
                            <span class="px-2.5 py-1 rounded-full ${item.statusClass} font-label-sm text-label-sm font-semibold">${item.status}</span>
                        </td>
                    `;
                    tableBody.appendChild(tr);
                });
            }
        }

        modal.classList.remove('hidden');
    }

    function closeScheduleModal() {
        const modal = document.getElementById('schedule-modal');
        if (modal) modal.classList.add('hidden');
    }

    // Maintenance Modal Controller
    const maintenanceModal = document.getElementById('maintenance-modal');
    const btnOpenMtc = document.getElementById('btn-open-maintenance');
    const btnCloseMtc = document.getElementById('btn-close-maintenance');
    const btnCancelMtc = document.getElementById('btn-cancel-maintenance');

    if (btnOpenMtc) {
        btnOpenMtc.addEventListener('click', () => {
            if (maintenanceModal) maintenanceModal.classList.remove('hidden');
        });
    }

    function closeMtcModal() {
        if (maintenanceModal) maintenanceModal.classList.add('hidden');
    }

    if (btnCloseMtc) btnCloseMtc.addEventListener('click', closeMtcModal);
    if (btnCancelMtc) btnCancelMtc.addEventListener('click', closeMtcModal);

    function submitMaintenance() {
        const box = document.getElementById('mtc-box-type').value;
        const count = document.getElementById('mtc-unit-count').value;
        const issue = document.getElementById('mtc-issue-type').value;
        closeMtcModal();
        showToast(`Slot perawatan ${count} unit "${box}" (${issue}) berhasil dikunci pada kalender atelier.`);
    }

    // Cek Fisik Quick Trigger
    const btnCekFisik = document.getElementById('btn-cek-fisik');
    if (btnCekFisik) {
        btnCekFisik.addEventListener('click', () => {
            showToast('Sinkronisasi stok fisik studio selesai. 40 dari 40 unit terverifikasi aman.');
        });
    }

    // Quick Book Trigger
    function quickBookSlot(boxType, availableCount) {
        showToast(`Membuka form booking cepat untuk ${boxType}. Tersedia ${availableCount} unit slot aman.`);
        setTimeout(() => {
            window.location.href = "{{ route('admin.pesanan') }}";
        }, 1200);
    }

    // Preset Chips Handling
    const presets = document.querySelectorAll('.preset-btn');
    presets.forEach(btn => {
        btn.addEventListener('click', function() {
            presets.forEach(p => {
                p.classList.remove('bg-surface-container', 'text-on-surface', 'font-semibold');
                p.classList.add('bg-surface-container-low', 'text-on-surface-variant', 'font-medium');
            });
            this.classList.remove('bg-surface-container-low', 'text-on-surface-variant', 'font-medium');
            this.classList.add('bg-surface-container', 'text-on-surface', 'font-semibold');
            showToast('Periode diperbarui: ' + this.textContent.trim());
        });
    });

    // Toast Helper
    function showToast(msg) {
        const toast = document.getElementById('toast');
        const toastMsg = document.getElementById('toast-message');
        if (!toast || !toastMsg) return;
        toastMsg.textContent = msg;
        toast.classList.remove('translate-y-20', 'opacity-0');
        toast.classList.add('translate-y-0', 'opacity-100');
        setTimeout(() => {
            toast.classList.remove('translate-y-0', 'opacity-100');
            toast.classList.add('translate-y-20', 'opacity-0');
        }, 3200);
    }

    // Close modals on clicking outside
    window.addEventListener('click', (e) => {
        if (e.target === maintenanceModal) closeMtcModal();
        if (e.target === document.getElementById('schedule-modal')) closeScheduleModal();
    });
</script>
@endpush

