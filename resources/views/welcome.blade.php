@extends('layouts.main')

@section('title', 'Cattaleya - Atelier Mahar & Penyewaan Kotak Seserahan')

@section('content')
<div class="flex flex-col w-full">
<!-- Hero Section with Visual Warmth and Negative Margin Overlap -->
<section class="relative w-full overflow-hidden bg-surface-container-low pb-20 pt-8 lg:pt-16">
<div class="absolute -right-24 -top-24 w-96 h-96 rounded-full bg-secondary-container/40 blur-3xl pointer-events-none"></div>
<div class="absolute -left-20 bottom-10 w-80 h-80 rounded-full bg-primary-fixed/30 blur-3xl pointer-events-none"></div>
<div class="max-w-7xl mx-auto px-6 lg:px-12 relative z-10">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
<!-- Text Column -->
<div class="lg:col-span-7 flex flex-col items-start space-y-6">
<div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-surface shadow-sm">
<span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
<span class="font-label-sm text-label-sm uppercase tracking-widest text-primary">Atelier Seserahan &amp; Pembuatan Mahar</span>
</div>
<h1 class="font-display-lg text-display-lg-mobile md:text-display-lg text-on-surface tracking-tight leading-tight">
            Mahar &amp; Penyewaan <br class="hidden sm:inline">
<span class="italic font-normal text-primary">Kotak Seserahan</span>
</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl leading-relaxed">
            Wujudkan hantaran pernikahan impian dengan kotak akrilik bevel mewah, kayu jati berukir, dan mahar custom bernilai abadi yang dirancang presisi untuk momen sakral Anda.
          </p>
<!-- CTAs -->
<div class="flex flex-wrap items-center gap-4 pt-2">
<a class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl bg-primary text-on-primary font-title-md text-title-md hover:bg-primary-container shadow-md transition-all" data-path="pesan-mahar" href="{{ route('pesan-mahar') }}">
<span>Pesan Sekarang</span>
<span class="material-symbols-outlined text-lg">arrow_forward</span>
</a>
<a class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-surface text-secondary font-title-md text-title-md hover:bg-surface-container transition-all shadow-sm" data-path="katalog" href="{{ route('katalog') }}">
<span class="material-symbols-outlined text-lg">auto_awesome</span>
<span>Eksplorasi Katalog</span>
</a>
</div>
<!-- Trust Badges -->
<div class="pt-6 w-full">
<div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-6 bg-surface/70 backdrop-blur-md rounded-xl p-4 shadow-sm">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-secondary-container flex items-center justify-center text-primary shrink-0">
<span class="material-symbols-outlined text-lg">verified_user</span>
</div>
<div class="flex flex-col">
<span class="font-label-md text-label-md text-on-surface">Midtrans Terverifikasi</span>
<span class="font-body-md text-body-md text-on-surface-variant text-[11px] leading-tight">Pembayaran instan &amp; aman</span>
</div>
</div>
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-secondary-container flex items-center justify-center text-primary shrink-0">
<span class="material-symbols-outlined text-lg">event_available</span>
</div>
<div class="flex flex-col">
<span class="font-label-md text-label-md text-on-surface">Bebas Double-Booking</span>
<span class="font-body-md text-body-md text-on-surface-variant text-[11px] leading-tight">Jadwal slot baki terkunci</span>
</div>
</div>
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-secondary-container flex items-center justify-center text-primary shrink-0">
<span class="material-symbols-outlined text-lg">notifications_active</span>
</div>
<div class="flex flex-col">
<span class="font-label-md text-label-md text-on-surface">Notifikasi WhatsApp</span>
<span class="font-body-md text-body-md text-on-surface-variant text-[11px] leading-tight">Update progres otomatis</span>
</div>
</div>
</div>
</div>
</div>
<!-- Visual Mosaic Column -->
<div class="lg:col-span-5 relative">
<div class="relative w-full aspect-[4/5] rounded-xl overflow-hidden shadow-xl bg-surface-container">
<img class="w-full h-full object-cover" data-alt="An opulent bespoke Indonesian wedding dowry showcase inside a warm taupe atelier. A clear bevel-edged acrylic vitrine houses layered gold calligraphy, pressed cream orchids, and silk ribbon details under soft dramatic spotlighting. Luxurious champagne tones, fine wood craft, and velvet textures creating an heirloom ambiance." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBvQIf4ii622Sq_SE72DATqzy32F1LU0FYGTY78__tQToAEVQCsahSSfBDn5UWVH6jPBMFhqPGHIoQ435VXdPiLzKmlAvw5P8k5Wbeu2zXTovQCB60InBw8yqk0F0j5PFkpD_dy-JgQZ7faJAnbKUJu_suhYqAbyd9SXRol0VyE0xDXLhDFgVddLzt4M7G1zgNjXjrunIKR3de05UUpuvErMkXB9haLWlqtT_cu8eX76JJHI23pfWgy">
<div class="absolute inset-0 bg-gradient-to-t from-on-surface/80 via-transparent to-transparent"></div>
<div class="absolute bottom-6 left-6 right-6 text-on-primary">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary-fixed">Koleksi Royal Signature</span>
<p class="font-headline-md text-headline-md text-surface-bright mt-1">Vitrine Akrilik Kemilau Emas 24K</p>
<p class="font-body-md text-body-md text-surface-container-high text-xs mt-1">Dikerjakan tangan oleh artisan senior Cattaleya Studio.</p>
</div>
</div>
<!-- Floating Micro Card -->
<div class="hidden sm:flex absolute -bottom-6 -left-8 bg-surface-container-lowest p-4 rounded-xl shadow-xl items-center gap-3.5 max-w-xs">
<div class="w-12 h-12 rounded-xl bg-secondary-fixed flex items-center justify-center text-primary shrink-0">
<span class="material-symbols-outlined text-2xl">workspace_premium</span>
</div>
<div>
<p class="font-title-md text-title-md text-on-surface">500+ Pasangan Bahagia</p>
<p class="font-body-md text-body-md text-on-surface-variant text-xs">Akurasi waktu pengiriman 99.8% di Jabodetabek</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Curated Series Spotlight (Cuplikan Seri Pilihan) -->
<section id="katalog" class="w-full py-20 bg-surface">
<div class="max-w-7xl mx-auto px-6 lg:px-12">
<div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
<div>
<span class="font-label-sm text-label-sm uppercase tracking-widest text-primary">Karya Unggulan Studio</span>
<h2 class="font-headline-lg text-headline-lg text-on-surface mt-1">Cuplikan Seri Pilihan</h2>
<p class="font-body-md text-body-md text-on-surface-variant max-w-lg mt-2">
            Setiap seri dirakit dengan material kualitas galeri, memadukan tradisi hantaran ningrat dengan estetika kontemporer.
          </p>
</div>
<a class="inline-flex items-center gap-1.5 font-label-md text-label-md uppercase tracking-wider text-primary hover:text-primary-container transition-colors pb-1" data-path="katalog" href="{{ route('katalog') }}">
<span>Lihat Semua Seri</span>
<span class="material-symbols-outlined text-base">arrow_forward</span>
</a>
</div>
<!-- 3-Column Bento Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<!-- Card 1: Mahar Vitrine Akrilik 3D -->
<div class="group flex flex-col rounded-xl bg-surface-container-lowest overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
<div class="relative w-full h-80 overflow-hidden bg-surface-container-high">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Exquisite 3D acrylic vitrine wedding mahar dowry frame on champagne silk cushion. Floating 3D metallic gold calligraphy with real preserved white hydrangeas and dried lunaria lunaria seed pods. Elegant soft lighting highlights bevelled acrylic box transparency in a luxury wedding salon." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDiUHlbfrzN3pdlcJyQpZ5Ro5vUuMmVYMhZSi19PhTjSU5KOmHtnXZtjpb2QZKILAL33864nPeblWVtzh186sPIO6at6hlSH1ao1EPmFM2rcyUvi2nwyllkxt1qgYONlDkJLFBkcEUFU3zZYKezpzKcuJRm_KLcaY0cgMYnYYBbRkXM4HFaYp9fQs1noNRKqqbQZ8uR3Tvd7N68bPjUnO8cxGd3zrpXgT2nAkEmwK1czewvHdUlCe9Z">
<div class="absolute top-4 left-4 bg-surface/90 backdrop-blur-md px-3 py-1 rounded-full">
<span class="font-label-sm text-label-sm text-primary uppercase">Mahar Kustom Bespoke</span>
</div>
</div>
<div class="p-6 flex flex-col flex-1 justify-between">
<div>
<h3 class="font-headline-md text-headline-md text-on-surface group-hover:text-primary transition-colors">Mahar Vitrine Akrilik 3D</h3>
<p class="font-body-md text-body-md text-on-surface-variant mt-2.5 leading-relaxed">
                Struktur vitrine akrilik kristal dengan kaligrafi monogram timbul, dried floral grade A, dan tata letak logam mulia bersertifikat.
              </p>
</div>
<div class="mt-6 pt-4 bg-surface-container-low rounded-xl p-3 flex items-center justify-between">
<div>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary">Mulai Dari</span>
<p class="font-title-md text-title-md text-on-surface">Rp 1.450.000</p>
</div>
<a class="inline-flex items-center justify-center w-10 h-10 rounded-lg bg-primary text-on-primary hover:bg-primary-container transition-colors shadow-sm" data-path="pesan-mahar" href="https://wa.me/6282210008899?text=Halo%20Cattaleya,%20saya%20tertarik%20dengan%20Mahar%20Vitrine%20Akrilik%203D" target="_blank" rel="noopener noreferrer">
<span class="material-symbols-outlined text-xl">arrow_outward</span>
</a>
</div>
</div>
</div>
<!-- Card 2: Kotak Hantaran Luxury Crystal Lis Emas -->
<div class="group flex flex-col rounded-xl bg-surface-container-lowest overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
<div class="relative w-full h-80 overflow-hidden bg-surface-container-high">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Luxury glass and gold brass trimmed wedding seserahan gift tray box. Inside rests designer perfume, silk lace prayer gown, and bespoke velvet jewelry box lined with dried blush roses and gold leaf accents. Warm soft ambient lighting in a high end bridal suite." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC7SrzOY3CVNBvdJP8S_DAckzvnGy-8n3qmCY6iEP9h06T3RS9k485LLteBo9Zur9kC3yPnq_5v3lm58I0TLN6t3Mi4EbXJhDfUbtINm0RSIB9sjf4XD-Qfsa1Mv7GvNCMqZT4IsVeuFMOsZPSUnDLplnc7fnthUdykgjvW5GsGy77BN1guu5t7Ieu7Cyg67OcUxDFBqCHzTjEkcA3vqhSp8WAwPvePtgy147P78i9wc1k1n4cZ9m0P">
<div class="absolute top-4 left-4 bg-surface/90 backdrop-blur-md px-3 py-1 rounded-full">
<span class="font-label-sm text-label-sm text-primary uppercase">Sewa Baki Eksklusif</span>
</div>
</div>
<div class="p-6 flex flex-col flex-1 justify-between">
<div>
<h3 class="font-headline-md text-headline-md text-on-surface group-hover:text-primary transition-colors">Luxury Crystal Lis Emas</h3>
<p class="font-body-md text-body-md text-on-surface-variant mt-2.5 leading-relaxed">
                Tray kaca prismatik dengan aksen lis kuningan emas antique. Menciptakan pantulan kemewahan saat prosesi serah-terima hantaran.
              </p>
</div>
<div class="mt-6 pt-4 bg-surface-container-low rounded-xl p-3 flex items-center justify-between">
<div>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary">Paket Sewa (7 Box)</span>
<p class="font-title-md text-title-md text-on-surface">Rp 850.000 / event</p>
</div>
<a class="inline-flex items-center justify-center w-10 h-10 rounded-lg bg-primary text-on-primary hover:bg-primary-container transition-colors shadow-sm" data-path="sewa-kotak-seserahan" href="https://wa.me/6282210008899?text=Halo%20Cattaleya,%20saya%20tertarik%20dengan%20Sewa%20Baki%20Luxury%20Crystal%20Lis%20Emas" target="_blank" rel="noopener noreferrer">
<span class="material-symbols-outlined text-xl">arrow_outward</span>
</a>
</div>
</div>
</div>
<!-- Card 3: Kotak Kayu Jati Hidden Series -->
<div class="group flex flex-col rounded-xl bg-surface-container-lowest overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
<div class="relative w-full h-80 overflow-hidden bg-surface-container-high">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Artisanal solid teak wood dowry chest with delicate traditional Indonesian hand carved floral filigree. Rich matte walnut and honey teak finish with a hidden sliding compartment showing a velvet bed for heirloom jewelry. Dramatic chiaroscuro warm lighting highlighting the wood grain." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB7S084omFVxvYQYD54ims8BbC3xPxgK2baMd3UKmTw7Q6RH1csuGBRxEboLZrwLTsfEpeZ6UQLAvjjEVZMW6IB_Br1XdndaDu3MenISbSCY7r4UZFIs-jtksGVXDTyu2Hsjip2g1Fj4RAJKgngAl_zt_cUPvk-gwTz_HICJpGDKLd0Lhq21xCDKVWG7EjRu0YXa_TIjrghpWwJxFYhUM2PdRtT-oPAW9EPWeojeI-e2HwSI65Ta_xF">
<div class="absolute top-4 left-4 bg-surface/90 backdrop-blur-md px-3 py-1 rounded-full">
<span class="font-label-sm text-label-sm text-primary uppercase">Koleksi Kayu Warisan</span>
</div>
</div>
<div class="p-6 flex flex-col flex-1 justify-between">
<div>
<h3 class="font-headline-md text-headline-md text-on-surface group-hover:text-primary transition-colors">Kayu Jati Hidden Series</h3>
<p class="font-body-md text-body-md text-on-surface-variant mt-2.5 leading-relaxed">
                Peti kayu jati solid Jepara berukir sulur khas dengan kompartemen rahasia berlapis beludru kasmir untuk pusaka dan cincin kawin.
              </p>
</div>
<div class="mt-6 pt-4 bg-surface-container-low rounded-xl p-3 flex items-center justify-between">
<div>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary">Mulai Dari</span>
<p class="font-title-md text-title-md text-on-surface">Rp 1.150.000</p>
</div>
<a class="inline-flex items-center justify-center w-10 h-10 rounded-lg bg-primary text-on-primary hover:bg-primary-container transition-colors shadow-sm" data-path="katalog" href="https://wa.me/6282210008899?text=Halo%20Cattaleya,%20saya%20tertarik%20dengan%20Kayu%20Jati%20Hidden%20Series" target="_blank" rel="noopener noreferrer">
<span class="material-symbols-outlined text-xl">arrow_outward</span>
</a>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- 4 Langkah Mudah Pemesanan untuk Pengantin -->
<section class="w-full py-20 bg-surface-container-low relative">
<div class="max-w-7xl mx-auto px-6 lg:px-12">
<div class="text-center max-w-2xl mx-auto mb-16">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-primary">Pengalaman Tanpa Kendala</span>
<h2 class="font-headline-lg text-headline-lg text-on-surface mt-2">4 Langkah Mudah Pemesanan</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-2">
          Kami menyederhanakan persiapan mahar dan hantaran agar Anda dapat berfokus menyambut hari bahagia dengan tenang.
        </p>
</div>
<!-- Step Cards Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 relative">
<!-- Step 1 -->
<div class="bg-surface-container-lowest rounded-xl p-7 flex flex-col justify-between shadow-sm relative overflow-hidden group hover:shadow-md transition-shadow">
<div class="absolute -right-3 -top-3 w-16 h-16 rounded-full bg-surface-container-high/60 flex items-center justify-center">
<span class="font-metric-display text-metric-display text-primary/20">01</span>
</div>
<div>
<div class="w-12 h-12 rounded-xl bg-secondary-fixed text-primary flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-2xl">style</span>
</div>
<h3 class="font-title-lg text-title-lg text-on-surface">Pilih Desain Mahar atau Seri Kotak</h3>
<p class="font-body-md text-body-md text-on-surface-variant mt-3 leading-relaxed">
              Jelajahi portofolio mahar atau tentukan jumlah baki seserahan akrilik/kayu sesuai kebutuhan adat maupun personal Anda.
            </p>
</div>
<div class="pt-6 mt-6">
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Kurasi Koleksi • Fleksibel</span>
</div>
</div>
<!-- Step 2 -->
<div class="bg-surface-container-lowest rounded-xl p-7 flex flex-col justify-between shadow-sm relative overflow-hidden group hover:shadow-md transition-shadow">
<div class="absolute -right-3 -top-3 w-16 h-16 rounded-full bg-surface-container-high/60 flex items-center justify-center">
<span class="font-metric-display text-metric-display text-primary/20">02</span>
</div>
<div>
<div class="w-12 h-12 rounded-xl bg-secondary-fixed text-primary flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-2xl">calendar_month</span>
</div>
<h3 class="font-title-lg text-title-lg text-on-surface">Masukkan Tanggal Acara</h3>
<p class="font-body-md text-body-md text-on-surface-variant mt-3 leading-relaxed">
              Sistem kalender cerdas otomatis memeriksa ketersediaan baki dan mengunci slot pengerjaan artisan agar terhindar dari bentrok jadwal.
            </p>
</div>
<div class="pt-6 mt-6">
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Real-time Slot Lock</span>
</div>
</div>
<!-- Step 3 -->
<div class="bg-surface-container-lowest rounded-xl p-7 flex flex-col justify-between shadow-sm relative overflow-hidden group hover:shadow-md transition-shadow">
<div class="absolute -right-3 -top-3 w-16 h-16 rounded-full bg-surface-container-high/60 flex items-center justify-center">
<span class="font-metric-display text-metric-display text-primary/20">03</span>
</div>
<div>
<div class="w-12 h-12 rounded-xl bg-secondary-fixed text-primary flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-2xl">payments</span>
</div>
<h3 class="font-title-lg text-title-lg text-on-surface">Bayar DP atau Lunas via Midtrans</h3>
<p class="font-body-md text-body-md text-on-surface-variant mt-3 leading-relaxed">
              Pilihan pembayaran fleksibel mulai dari Down Payment (DP 50%) hingga pelunasan instan menggunakan QRIS, Virtual Account, atau Kartu Kredit.
            </p>
</div>
<div class="pt-6 mt-6">
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Secure Payment Gateway</span>
</div>
</div>
<!-- Step 4 -->
<div class="bg-surface-container-lowest rounded-xl p-7 flex flex-col justify-between shadow-sm relative overflow-hidden group hover:shadow-md transition-shadow">
<div class="absolute -right-3 -top-3 w-16 h-16 rounded-full bg-surface-container-high/60 flex items-center justify-center">
<span class="font-metric-display text-metric-display text-primary/20">04</span>
</div>
<div>
<div class="w-12 h-12 rounded-xl bg-secondary-fixed text-primary flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-2xl">track_changes</span>
</div>
<h3 class="font-title-lg text-title-lg text-on-surface">Lacak Status di Cek Pesanan</h3>
<p class="font-body-md text-body-md text-on-surface-variant mt-3 leading-relaxed">
              Pantau progres dekorasi, dokumentasi foto pra-kirim, hingga nomor resi pengiriman melalui menu pelacak pesanan Cattaleya.
            </p>
</div>
<div class="pt-6 mt-6">
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Live Milestone Tracking</span>
</div>
</div>
</div>
</div>
</section>
<!-- Seksi Lacak Cepat Pesanan (Quick Tracking Form & Preview) -->
<section id="cek-pesanan" class="w-full py-20 bg-surface">
<div class="max-w-5xl mx-auto px-6 lg:px-12">
<div class="bg-surface-container-lowest rounded-2xl p-8 md:p-12 shadow-xl relative overflow-hidden">
<div class="absolute top-0 right-0 w-64 h-64 bg-primary-fixed/20 rounded-full blur-3xl pointer-events-none"></div>
<div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-8">
<div>
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-surface-container mb-2">
<span class="material-symbols-outlined text-primary text-sm">search_check</span>
<span class="font-label-sm text-label-sm text-primary uppercase">Self-Service Pengantin</span>
</div>
<h2 class="font-headline-lg text-headline-lg text-on-surface">Lacak Cepat Pesanan Anda</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-1">
              Sudah memesan mahar atau menyewa baki? Masukkan ID Pesanan atau Nomor WhatsApp untuk memantau status pengerjaan atelier kami.
            </p>
</div>
<div class="shrink-0 flex items-center gap-2 bg-surface-container-low px-4 py-2 rounded-xl">
<span class="material-symbols-outlined text-primary">support_agent</span>
<span class="font-label-sm text-label-sm text-secondary">Live Update 24/7</span>
</div>
</div>
<!-- Input Bar -->
<form class="flex flex-col sm:flex-row gap-3 items-stretch" id="trackForm" onsubmit="event.preventDefault(); document.getElementById('trackingDemoResult').classList.remove('hidden');">
<div class="relative flex-1">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant">receipt_long</span>
<input class="w-full pl-12 pr-4 py-3.5 rounded-xl bg-surface-container text-on-surface font-body-md text-body-md placeholder:text-outline focus:outline-none focus:ring-2 focus:ring-primary shadow-inner" id="orderInput" placeholder="Contoh: CTL-2025-0899 atau 0812XXXXXXXX" type="text" value="CTL-2025-0899">
</div>
<button class="px-8 py-3.5 rounded-xl bg-primary text-on-primary font-title-md text-title-md hover:bg-primary-container shadow-md transition-all flex items-center justify-center gap-2" type="submit">
<span class="material-symbols-outlined text-lg">search</span>
<span>Cek Status</span>
</button>
</form>
<!-- Dynamic Tracking Result Mockup (Interactive Read-Only View) -->
<div class="mt-8 pt-8 bg-surface-container-low rounded-xl p-6 transition-all" id="trackingDemoResult">
<div class="flex flex-col sm:flex-row sm:items-center justify-between pb-6 gap-3">
<div>
<div class="flex items-center gap-2">
<span class="font-title-lg text-title-lg text-on-surface">Pesanan #CTL-2025-0899</span>
<span class="inline-flex items-center gap-1.5 px-3 py-0.5 rounded-full bg-surface-container-highest text-primary font-label-sm text-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-primary animate-ping"></span>
                  Dalam Pengerjaan
                </span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant mt-1">Atas Nama: <strong class="text-on-surface">Adinda &amp; Rizky</strong> • Akad Nikah: 18 Mei 2025</p>
</div>
<div class="text-right">
<span class="font-label-sm text-label-sm uppercase text-secondary">Midtrans Status</span>
<p class="font-title-md text-title-md text-primary font-semibold">DP 50% Terverifikasi</p>
</div>
</div>
<!-- Timeline Stepper Visual -->
<div class="grid grid-cols-1 sm:grid-cols-4 gap-4 pt-4">
<div class="flex items-center sm:flex-col sm:items-start gap-3">
<div class="w-8 h-8 rounded-full bg-primary text-on-primary flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-sm">check</span>
</div>
<div>
<p class="font-label-md text-label-md text-on-surface">Booking Diterima</p>
<p class="font-body-md text-body-md text-on-surface-variant text-[11px]">02 Mei 2025</p>
</div>
</div>
<div class="flex items-center sm:flex-col sm:items-start gap-3">
<div class="w-8 h-8 rounded-full bg-primary text-on-primary flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-sm">check</span>
</div>
<div>
<p class="font-label-md text-label-md text-on-surface">Kurasi &amp; Bahan Siap</p>
<p class="font-body-md text-body-md text-on-surface-variant text-[11px]">05 Mei 2025</p>
</div>
</div>
<div class="flex items-center sm:flex-col sm:items-start gap-3">
<div class="w-8 h-8 rounded-full bg-primary-fixed text-primary flex items-center justify-center shrink-0 ring-4 ring-primary/20">
<span class="material-symbols-outlined text-sm">palette</span>
</div>
<div>
<p class="font-label-md text-label-md text-primary font-bold">Rangkai &amp; Floral Styling</p>
<p class="font-body-md text-body-md text-on-surface-variant text-[11px]">Sedang Berlangsung</p>
</div>
</div>
<div class="flex items-center sm:flex-col sm:items-start gap-3 opacity-50">
<div class="w-8 h-8 rounded-full bg-surface-variant text-on-surface-variant flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-sm">local_shipping</span>
</div>
<div>
<p class="font-label-md text-label-md text-on-surface">Pengiriman / Siap Ambil</p>
<p class="font-body-md text-body-md text-on-surface-variant text-[11px]">Est. 15 Mei 2025</p>
</div>
</div>
</div>
<div class="mt-6 pt-4 flex flex-col sm:flex-row items-center justify-between gap-3 text-center sm:text-left">
<span class="font-body-md text-body-md text-on-surface-variant text-xs">
              Item: 1x Mahar Vitrine 3D Gold + 8x Baki Luxury Crystal Akrilik Lis Emas
            </span>
<a class="inline-flex items-center gap-1 font-label-md text-label-md text-primary hover:underline" href="https://wa.me/6282210008899?text=Halo%20Cattaleya,%20saya%20ingin%20tanya%20pesanan%20CTL-2025-0899" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-sm">chat</span>
<span>Hubungi Artisan Pendamping</span>
</a>
</div>
</div>
</div>
</div>
</section>
<!-- Bespoke Atelier Consultation Strip -->
<section id="pesan-mahar" class="w-full py-16 bg-surface-container-high">
<div id="tentang-cattaleya" class="max-w-7xl mx-auto px-6 lg:px-12 flex flex-col lg:flex-row items-center justify-between gap-8">
<div class="space-y-2 max-w-xl text-center lg:text-left">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-primary">Private Consultation</span>
<h3 class="font-headline-md text-headline-md text-on-surface">Ingin Konsep Mahar Adat atau Nuansa Khusus?</h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
          Tim desainer Cattaleya siap mendampingi sesi konsultasi privat untuk memadukan palet warna busana pernikahan dan makna filosofis keluarga Anda.
        </p>
</div>
<div class="flex flex-wrap items-center justify-center gap-4">
<a class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-primary text-on-primary font-title-md text-title-md hover:bg-primary-container shadow-md transition-all" href="https://wa.me/6282210008899" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-lg">forum</span>
<span>Jadwalkan Konsultasi Gratis</span>
</a>
<a class="inline-flex items-center gap-2 px-5 py-3.5 rounded-xl bg-surface-container-lowest text-secondary font-title-md text-title-md hover:bg-surface-container transition-all" data-path="tentang-cattaleya" href="#tentang-cattaleya">
<span class="material-symbols-outlined text-lg">storefront</span>
<span>Kunjungi Studio Menteng</span>
</a>
</div>
</div>
</section>
</div>
@endsection
