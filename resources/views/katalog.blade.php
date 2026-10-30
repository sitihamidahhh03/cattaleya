@extends('layouts.main')

@section('title', 'Katalog Mahar Agung & Kotak Seserahan Bernilai Abadi - Cattaleya')

@section('content')
<div class="flex flex-col w-full pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 pt-8 sm:pt-10">

        <!-- 1. Editorial Atelier Banner Card -->
        <div class="relative bg-surface-container-low rounded-2xl p-6 sm:p-10 lg:p-12 border border-outline-variant/30 shadow-sm overflow-hidden">
            <!-- Background Decorative Watermark -->
            <div class="absolute -right-8 -top-8 w-64 h-64 sm:w-80 sm:h-80 rounded-full border-[28px] border-secondary-container/30 pointer-events-none -z-0"></div>
            <div class="absolute right-12 top-10 w-40 h-40 rounded-full bg-primary-fixed/20 blur-2xl pointer-events-none -z-0"></div>

            <div class="relative z-10">
                <!-- Tag / Breadcrumb Badge -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-secondary-container/60 text-primary mb-4 sm:mb-5">
                    <span class="material-symbols-outlined text-sm">diamond</span>
                    <span class="font-label-sm text-label-sm uppercase tracking-widest font-semibold">Koleksi Mahakarya Atelier</span>
                </div>

                <!-- Main Title & Intro -->
                <h1 class="font-headline-lg text-2xl sm:text-3xl md:text-4xl text-on-surface tracking-tight font-medium max-w-3xl leading-snug">
                    Katalog Mahar Agung &amp; Kotak Seserahan Bernilai Abadi
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl leading-relaxed mt-3 sm:mt-4">
                    Eksplorasi karya tangan istimewa yang terinspirasi kemegahan pusaka pernikahan Indonesia dengan presisi estetika modern. Dibuat dengan material pilihan, akrilik vitrine kristal, dan aksen emas berkilau.
                </p>

                <!-- 4 Trust Features Row -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6 pt-6 sm:pt-8 mt-6 sm:mt-8 border-t border-outline-variant/40">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-surface flex items-center justify-center text-primary shadow-xs shrink-0">
                            <span class="material-symbols-outlined text-xl">verified</span>
                        </div>
                        <div>
                            <span class="block font-title-md text-title-md text-on-surface font-semibold leading-tight">100% Presisi</span>
                            <span class="block font-label-sm text-label-sm text-on-surface-variant mt-0.5">Garis Potong &amp; Grafir</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-surface flex items-center justify-center text-primary shadow-xs shrink-0">
                            <span class="material-symbols-outlined text-xl">spa</span>
                        </div>
                        <div>
                            <span class="block font-title-md text-title-md text-on-surface font-semibold leading-tight">Steril &amp; Higienis</span>
                            <span class="block font-label-sm text-label-sm text-on-surface-variant mt-0.5">Bebas Biaya Perawatan</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-surface flex items-center justify-center text-primary shadow-xs shrink-0">
                            <span class="material-symbols-outlined text-xl">payments</span>
                        </div>
                        <div>
                            <span class="block font-title-md text-title-md text-on-surface font-semibold leading-tight">Opsi DP 50%</span>
                            <span class="block font-label-sm text-label-sm text-on-surface-variant mt-0.5">Pemesanan Mahar</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-surface flex items-center justify-center text-primary shadow-xs shrink-0">
                            <span class="material-symbols-outlined text-xl">inventory_2</span>
                        </div>
                        <div>
                            <span class="block font-title-md text-title-md text-on-surface font-semibold leading-tight">10 Baki Master</span>
                            <span class="block font-label-sm text-label-sm text-on-surface-variant mt-0.5">Siap Bagi Seri Kotak</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. Sub-Navigation / Filter Toggle Bar -->
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 py-8 border-b border-outline-variant/30" x-data="{ activeTab: 'mahar' }">
            <div class="flex items-center gap-3 flex-wrap">
                <button type="button" @click="activeTab = 'mahar'; document.getElementById('mahar-section').scrollIntoView({behavior: 'smooth'})"
                    :class="activeTab === 'mahar' ? 'bg-primary text-on-primary shadow-sm' : 'bg-surface-container-high text-on-surface-variant hover:text-on-surface'"
                    class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full font-label-md text-label-md transition-all">
                    <span class="material-symbols-outlined text-lg">inventory_2</span>
                    <span>Katalog Mahar Pernikahan</span>
                </button>
                <button type="button" @click="activeTab = 'seserahan'; document.getElementById('sewa-kotak-seserahan').scrollIntoView({behavior: 'smooth'})"
                    :class="activeTab === 'seserahan' ? 'bg-primary text-on-primary shadow-sm' : 'bg-surface-container-high text-on-surface-variant hover:text-on-surface'"
                    class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full font-label-md text-label-md transition-all">
                    <span class="material-symbols-outlined text-lg">redeem</span>
                    <span>Kotak Seserahan (Baki Hantaran)</span>
                </button>
            </div>
            <div class="flex items-center gap-2 font-label-sm text-label-sm text-secondary uppercase tracking-widest">
                <span>4 Desain Pilihan Tersedia</span>
                <span class="text-outline-variant">•</span>
                <span>Akses Pesanan Mudah</span>
            </div>
        </div>

        <!-- 3. Section Mahar Pernikahan Bespoke -->
        <section id="mahar-section" class="pt-10 scroll-mt-24">
            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-4 mb-8">
                <div>
                    <span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-medium">Mahakarya Simbolik</span>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface mt-1">Koleksi Mahar Pernikahan Bespoke</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mt-1.5 leading-relaxed">
                        Tiap mahar dirancang seimbang harmonis artistik tinggi, memadukan logam mulia/dinar/koin/grafir suci, dan bingkai asli bersiap bertahan puluhan tahun.
                    </p>
                </div>
                <div class="shrink-0">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-surface-container-low border border-outline-variant/30 text-on-surface font-label-md text-label-md shadow-xs">
                        <span class="material-symbols-outlined text-primary text-base">schedule</span>
                        <span>Estimasi Pengerjaan: 10 - 14 Hari Kerja</span>
                    </div>
                </div>
            </div>

            <!-- 4 Mahar Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Mahar Card 1: Hexagon Vitrine 3D -->
                <div class="group flex flex-col rounded-2xl bg-surface-container-lowest overflow-hidden border border-outline-variant/30 shadow-sm hover:shadow-xl transition-all duration-300">
                    <div class="relative w-full aspect-[4/3] overflow-hidden bg-surface-container-high">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDQIgBgy9FZUmfx96ecq9LFY94VJvWgFzOUhb24DpodSkmb7yc-CejgA2UcMcZOj1OlqFCcHM-3TS-AzS1TR6bxM40ojGLcRSK8crwuTp1X5r92pPZfhM9RuX7vOGBTzEQFSa4UgAKHY6SdUX0QoQI9uqxbGqSmcVmsHlPVJSwFkBsZzrmxKd1HkLn2BpH4JnzHojHkz5ChDBPpNE-LoPeBTYQxth3sEOh7SW4k5clAajYljXyluq78"
                            alt="Mahar Akrilik Vitrine Hexagon 3D">
                        <div class="absolute top-3 left-3 bg-inverse-surface/80 backdrop-blur-md px-2.5 py-0.5 rounded-full">
                            <span class="font-label-sm text-[10px] text-inverse-on-surface uppercase tracking-widest font-semibold">Bestseller</span>
                        </div>
                    </div>
                    <div class="p-5 flex flex-col flex-1 justify-between">
                        <div>
                            <div class="flex items-center gap-1.5 text-secondary font-label-sm text-[11px] uppercase tracking-wider mb-1.5">
                                <span class="material-symbols-outlined text-sm text-primary">crop_free</span>
                                <span>Hexagon Vitrine 3D</span>
                            </div>
                            <h3 class="font-title-lg text-title-lg text-on-surface font-semibold group-hover:text-primary transition-colors leading-snug">
                                Mahar Akrilik Vitrine Hexagon 3D
                            </h3>
                            <p class="font-body-md text-[13px] text-on-surface-variant mt-2 leading-relaxed">
                                Satu bervolume transparan dengan aksen kayu jati dan taburan bunga anggrek abadi, menopang dudukan logam mulia/emas.
                            </p>
                        </div>
                        <div class="mt-5 pt-4 border-t border-outline-variant/20">
                            <span class="block font-label-sm text-[10px] uppercase tracking-wider text-secondary">Nilai Investasi</span>
                            <div class="flex items-baseline justify-between mt-0.5">
                                <span class="font-title-lg text-title-lg text-primary font-bold">Rp 2.450.000</span>
                            </div>
                            <span class="block font-label-sm text-[11px] text-on-surface-variant mt-0.5">Opsi DP 50%: Rp 1.225.000</span>
                            <a href="{{ route('pesan-mahar') }}?item=Hexagon" class="mt-4 w-full py-2.5 px-4 rounded-xl bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-colors flex items-center justify-center gap-1.5 shadow-sm">
                                <span>Pesan Mahar Ini</span>
                                <span class="material-symbols-outlined text-base">north_east</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Mahar Card 2: Kaligrafi Koin Emas Antam -->
                <div class="group flex flex-col rounded-2xl bg-surface-container-lowest overflow-hidden border border-outline-variant/30 shadow-sm hover:shadow-xl transition-all duration-300">
                    <div class="relative w-full aspect-[4/3] overflow-hidden bg-surface-container-high">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBvQIf4ii622Sq_SE72DATqzy32F1LU0FYGTY78__tQToAEVQCsahSSfBDn5UWVH6jPBMFhqPGHIoQ435VXdPiLzKmlAvw5P8k5Wbeu2zXTovQCB60InBw8yqk0F0j5PFkpD_dy-JgQZ7faJAnbKUJu_suhYqAbyd9SXRol0VyE0xDXLhDFgVddLzt4M7G1zgNjXjrunIKR3de05UUpuvErMkXB9haLWlqtT_cu8eX76JJHI23pfWgy"
                            alt="Mahar Kaligrafi Koin Emas Antam">
                        <div class="absolute top-3 left-3 bg-secondary-container/90 backdrop-blur-md px-2.5 py-0.5 rounded-full">
                            <span class="font-label-sm text-[10px] text-on-secondary-fixed uppercase tracking-widest font-semibold">Klasik Elegan</span>
                        </div>
                    </div>
                    <div class="p-5 flex flex-col flex-1 justify-between">
                        <div>
                            <div class="flex items-center gap-1.5 text-secondary font-label-sm text-[11px] uppercase tracking-wider mb-1.5">
                                <span class="material-symbols-outlined text-sm text-primary">filter_frames</span>
                                <span>Bingkai Ukir Gold Leaf</span>
                            </div>
                            <h3 class="font-title-lg text-title-lg text-on-surface font-semibold group-hover:text-primary transition-colors leading-snug">
                                Mahar Kaligrafi Koin Emas Antam
                            </h3>
                            <p class="font-body-md text-[13px] text-on-surface-variant mt-2 leading-relaxed">
                                Sentuhan grafir timbul kembali emas murni dengan bingkai klasik elegan berkilau kompartemen sertifikat koin Antam.
                            </p>
                        </div>
                        <div class="mt-5 pt-4 border-t border-outline-variant/20">
                            <span class="block font-label-sm text-[10px] uppercase tracking-wider text-secondary">Nilai Investasi</span>
                            <div class="flex items-baseline justify-between mt-0.5">
                                <span class="font-title-lg text-title-lg text-primary font-bold">Rp 2.100.000</span>
                            </div>
                            <span class="block font-label-sm text-[11px] text-on-surface-variant mt-0.5">Opsi DP 50%: Rp 1.050.000</span>
                            <a href="{{ route('pesan-mahar') }}?item=Ukir" class="mt-4 w-full py-2.5 px-4 rounded-xl bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-colors flex items-center justify-center gap-1.5 shadow-sm">
                                <span>Pesan Mahar Ini</span>
                                <span class="material-symbols-outlined text-base">north_east</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Mahar Card 3: Geometris Logam Mulia Minimalis -->
                <div class="group flex flex-col rounded-2xl bg-surface-container-lowest overflow-hidden border border-outline-variant/30 shadow-sm hover:shadow-xl transition-all duration-300">
                    <div class="relative w-full aspect-[4/3] overflow-hidden bg-surface-container-high">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDiUHlbfrzN3pdlcJyQpZ5Ro5vUuMmVYMhZSi19PhTjSU5KOmHtnXZtjpb2QZKILAL33864nPeblWVtzh186sPIO6at6hlSH1ao1EPmFM2rcyUvi2nwyllkxt1qgYONlDkJLFBkcEUFU3zZYKezpzKcuJRm_KLcaY0cgMYnYYBbRkXM4HFaYp9fQs1noNRKqqbQZ8uR3Tvd7N68bPjUnO8cxGd3zrpXgT2nAkEmwK1czewvHdUlCe9Z"
                            alt="Mahar Geometris Logam Mulia Minimalis">
                        <div class="absolute top-3 left-3 bg-surface/90 backdrop-blur-md px-2.5 py-0.5 rounded-full">
                            <span class="font-label-sm text-[10px] text-primary uppercase tracking-widest font-semibold">Modern Minimalist</span>
                        </div>
                    </div>
                    <div class="p-5 flex flex-col flex-1 justify-between">
                        <div>
                            <div class="flex items-center gap-1.5 text-secondary font-label-sm text-[11px] uppercase tracking-wider mb-1.5">
                                <span class="material-symbols-outlined text-sm text-primary">crop_square</span>
                                <span>Brass Frame &amp; Linen</span>
                            </div>
                            <h3 class="font-title-lg text-title-lg text-on-surface font-semibold group-hover:text-primary transition-colors leading-snug">
                                Mahar Geometris Logam Mulia Minimalis
                            </h3>
                            <p class="font-body-md text-[13px] text-on-surface-variant mt-2 leading-relaxed">
                                Garis estetika minimalis dengan aksen kuningan mewah, fine audit velvet, dan dudukan koin presisi bebas pantulan.
                            </p>
                        </div>
                        <div class="mt-5 pt-4 border-t border-outline-variant/20">
                            <span class="block font-label-sm text-[10px] uppercase tracking-wider text-secondary">Nilai Investasi</span>
                            <div class="flex items-baseline justify-between mt-0.5">
                                <span class="font-title-lg text-title-lg text-primary font-bold">Rp 1.450.000</span>
                            </div>
                            <span class="block font-label-sm text-[11px] text-on-surface-variant mt-0.5">Opsi DP 50%: Rp 725.000</span>
                            <a href="{{ route('pesan-mahar') }}?item=Brass" class="mt-4 w-full py-2.5 px-4 rounded-xl bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-colors flex items-center justify-center gap-1.5 shadow-sm">
                                <span>Pesan Mahar Ini</span>
                                <span class="material-symbols-outlined text-base">north_east</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Mahar Card 4: Mahar Koin Siluet 3D Pasangan -->
                <div class="group flex flex-col rounded-2xl bg-surface-container-lowest overflow-hidden border border-outline-variant/30 shadow-sm hover:shadow-xl transition-all duration-300">
                    <div class="relative w-full aspect-[4/3] overflow-hidden bg-surface-container-high">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuB7S084omFVxvYQYD54ims8BbC3xPxgK2baMd3UKmTw7Q6RH1csuGBRxEboLZrwLTsfEpeZ6UQLAvjjEVZMW6IB_Br1XdndaDu3MenISbSCY7r4UZFIs-jtksGVXDTyu2Hsjip2g1Fj4RAJKgngAl_zt_cUPvk-gwTz_HICJpGDKLd0Lhq21xCDKVWG7EjRu0YXa_TIjrghpWwJxFYhUM2PdRtT-oPAW9EPWeojeI-e2HwSI65Ta_xF"
                            alt="Mahar Koin Siluet 3D Pasangan">
                        <div class="absolute top-3 left-3 bg-secondary-container/90 backdrop-blur-md px-2.5 py-0.5 rounded-full">
                            <span class="font-label-sm text-[10px] text-on-secondary-fixed uppercase tracking-widest font-semibold">Karya Siluet</span>
                        </div>
                    </div>
                    <div class="p-5 flex flex-col flex-1 justify-between">
                        <div>
                            <div class="flex items-center gap-1.5 text-secondary font-label-sm text-[11px] uppercase tracking-wider mb-1.5">
                                <span class="material-symbols-outlined text-sm text-primary">image</span>
                                <span>Natural Pine Showcase</span>
                            </div>
                            <h3 class="font-title-lg text-title-lg text-on-surface font-semibold group-hover:text-primary transition-colors leading-snug">
                                Mahar Koin Siluet 3D Pasangan
                            </h3>
                            <p class="font-body-md text-[13px] text-on-surface-variant mt-2 leading-relaxed">
                                Siluet artistik wajah mempelai dengan susunan nominal koin mahar unik berlatar tekstur wood bark Jepang.
                            </p>
                        </div>
                        <div class="mt-5 pt-4 border-t border-outline-variant/20">
                            <span class="block font-label-sm text-[10px] uppercase tracking-wider text-secondary">Nilai Investasi</span>
                            <div class="flex items-baseline justify-between mt-0.5">
                                <span class="font-title-lg text-title-lg text-primary font-bold">Rp 1.050.000</span>
                            </div>
                            <span class="block font-label-sm text-[11px] text-primary mt-0.5 font-medium">Status: Antrean Siap Mulai</span>
                            <a href="{{ route('pesan-mahar') }}?item=Pine" class="mt-4 w-full py-2.5 px-4 rounded-xl bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-colors flex items-center justify-center gap-1.5 shadow-sm">
                                <span>Pesan Mahar Ini</span>
                                <span class="material-symbols-outlined text-base">north_east</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. Section Sewa Kotak Seserahan Eksklusif -->
        <section id="sewa-kotak-seserahan" class="pt-20 scroll-mt-24">
            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-4 mb-8">
                <div>
                    <div class="flex items-center gap-2">
                        <span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-medium">Koleksi Baki Hantaran</span>
                        <span class="px-2 py-0.5 rounded-full bg-secondary-container/60 text-on-secondary-fixed font-label-sm text-[10px] tracking-wide font-medium">Tersedia 4 Seri Resmi Cattaleya</span>
                    </div>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface mt-1">Sewa Kotak Seserahan Eksklusif</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mt-1.5 leading-relaxed">
                        Tiap seri baki disiapkan khusus dalam kondisi higienis, bebas gores, steril, dan siap rangkai dengan seserahan pengantin sesuai facultative.
                    </p>
                </div>
                <div class="shrink-0">
                    <div class="p-3.5 sm:p-4 rounded-xl bg-surface-container-low border border-outline-variant/30 flex items-center gap-3 shadow-xs">
                        <div class="w-9 h-9 rounded-full bg-primary flex items-center justify-center text-on-primary shrink-0">
                            <span class="material-symbols-outlined text-lg">cleaning_services</span>
                        </div>
                        <div>
                            <span class="block font-title-md text-title-md text-on-surface font-semibold leading-tight">Bebas Biaya Perawatan</span>
                            <span class="block font-label-sm text-label-sm text-on-surface-variant mt-0.5">Sterilisasi Akrilik UV &amp; velvet debu sesudah sewa</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4 Baki Cards in 2x2 Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Baki Card 1: Luxury Crystal Series -->
                <div class="flex flex-col sm:flex-row rounded-2xl bg-surface-container-lowest border border-outline-variant/30 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
                    <div class="relative sm:w-2/5 aspect-[4/3] sm:aspect-auto overflow-hidden bg-surface-container-high shrink-0">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC7SrzOY3CVNBvdJP8S_DAckzvnGy-8n3qmCY6iEP9h06T3RS9k485LLteBo9Zur9kC3yPnq_5v3lm58I0TLN6t3Mi4EbXJhDfUbtINm0RSIB9sjf4XD-Qfsa1Mv7GvNCMqZT4IsVeuFMOsZPSUnDLplnc7fnthUdykgjvW5GsGy77BN1guu5t7Ieu7Cyg67OcUxDFBqCHzTjEkcA3vqhSp8WAwPvePtgy147P78i9wc1k1n4cZ9m0P"
                            alt="Luxury Crystal Series">
                        <div class="absolute top-3 left-3 bg-inverse-surface/80 backdrop-blur-md px-2.5 py-0.5 rounded-full">
                            <span class="font-label-sm text-[10px] text-inverse-on-surface uppercase tracking-wider font-semibold">Seri Unggulan</span>
                        </div>
                        <div class="absolute bottom-3 left-3 bg-surface/90 backdrop-blur-md px-2.5 py-0.5 rounded-full flex items-center gap-1 shadow-xs">
                            <span class="material-symbols-outlined text-xs text-primary">lock</span>
                            <span class="font-label-sm text-[10px] text-secondary font-semibold">10 Seri Master</span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div>
                            <div class="flex items-center justify-between">
                                <h3 class="font-title-lg text-title-lg text-on-surface font-semibold">Luxury Crystal Series</h3>
                                <span class="font-label-sm text-[11px] uppercase tracking-wider text-secondary font-bold">SERI 01</span>
                            </div>
                            <p class="font-body-md text-[13px] text-on-surface-variant mt-2 leading-relaxed">
                                Baki akrilik ultra-clear 5mm tebal dengan aksen list gold, alas bantal velvet champagne mewah, memberikan tampilan transparan kemewahan berkelas istana.
                            </p>

                            <!-- Paket Sewa Box -->
                            <div class="mt-4 p-3 rounded-xl bg-secondary-container/25 border border-outline-variant/20">
                                <span class="block font-label-sm text-[10px] uppercase tracking-wider text-secondary font-semibold mb-2">Paket Sewa Termasuk Dekorasi :</span>
                                <div class="grid grid-cols-3 gap-2 text-center">
                                    <div class="p-1.5 bg-surface rounded-lg shadow-xs">
                                        <span class="block font-label-sm text-[10px] text-on-surface-variant">4 Kotak</span>
                                        <span class="block font-label-md text-[11px] font-bold text-on-surface">Rp 1.000.000</span>
                                    </div>
                                    <div class="p-1.5 bg-surface rounded-lg shadow-xs">
                                        <span class="block font-label-sm text-[10px] text-on-surface-variant">6 Kotak</span>
                                        <span class="block font-label-md text-[11px] font-bold text-on-surface">Rp 1.450.000</span>
                                    </div>
                                    <div class="p-1.5 bg-surface rounded-lg shadow-xs">
                                        <span class="block font-label-sm text-[10px] text-on-surface-variant">8 Kotak</span>
                                        <span class="block font-label-md text-[11px] font-bold text-on-surface">Rp 2.000.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Price & CTA -->
                        <div class="mt-5 pt-4 border-t border-outline-variant/20 flex items-center justify-between">
                            <div>
                                <span class="block font-label-sm text-[10px] uppercase tracking-wider text-secondary">Mulai Dari</span>
                                <span class="font-title-md text-title-md text-on-surface font-bold">Rp 250.000 <span class="text-xs font-normal text-on-surface-variant">/ kotak</span></span>
                            </div>
                            <a href="{{ route('sewa-kotak-seserahan') }}?series=Luxury+Crystal"
                                class="inline-flex items-center gap-1.5 px-4 py-2.5 rounded-xl bg-tertiary text-on-tertiary font-label-md text-label-md hover:bg-primary transition-colors shadow-xs">
                                <span>Cek Ketersediaan &amp; Sewa</span>
                                <span class="material-symbols-outlined text-base">calendar_month</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Baki Card 2: Luxury White Series -->
                <div class="flex flex-col sm:flex-row rounded-2xl bg-surface-container-lowest border border-outline-variant/30 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
                    <div class="relative sm:w-2/5 aspect-[4/3] sm:aspect-auto overflow-hidden bg-surface-container-high shrink-0">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBvQIf4ii622Sq_SE72DATqzy32F1LU0FYGTY78__tQToAEVQCsahSSfBDn5UWVH6jPBMFhqPGHIoQ435VXdPiLzKmlAvw5P8k5Wbeu2zXTovQCB60InBw8yqk0F0j5PFkpD_dy-JgQZ7faJAnbKUJu_suhYqAbyd9SXRol0VyE0xDXLhDFgVddLzt4M7G1zgNjXjrunIKR3de05UUpuvErMkXB9haLWlqtT_cu8eX76JJHI23pfWgy"
                            alt="Luxury White Series">
                        <div class="absolute top-3 left-3 bg-secondary-container/90 backdrop-blur-md px-2.5 py-0.5 rounded-full">
                            <span class="font-label-sm text-[10px] text-on-secondary-fixed uppercase tracking-wider font-semibold">Seri Klasik Putih</span>
                        </div>
                        <div class="absolute bottom-3 left-3 bg-surface/90 backdrop-blur-md px-2.5 py-0.5 rounded-full flex items-center gap-1 shadow-xs">
                            <span class="material-symbols-outlined text-xs text-primary">lock</span>
                            <span class="font-label-sm text-[10px] text-secondary font-semibold">10 Seri Master</span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div>
                            <div class="flex items-center justify-between">
                                <h3 class="font-title-lg text-title-lg text-on-surface font-semibold">Luxury White Series</h3>
                                <span class="font-label-sm text-[11px] uppercase tracking-wider text-secondary font-bold">SERI 02</span>
                            </div>
                            <p class="font-body-md text-[13px] text-on-surface-variant mt-2 leading-relaxed">
                                Kayu solid dengan finishing duco pearl white semi-matte dan aksen emas champagne. Memberikan kesan suci, agung, dan netral untuk busana apapun.
                            </p>

                            <!-- Paket Sewa Box -->
                            <div class="mt-4 p-3 rounded-xl bg-secondary-container/25 border border-outline-variant/20">
                                <span class="block font-label-sm text-[10px] uppercase tracking-wider text-secondary font-semibold mb-2">Paket Sewa Termasuk Dekorasi :</span>
                                <div class="grid grid-cols-2 gap-2 text-center">
                                    <div class="p-1.5 bg-surface rounded-lg shadow-xs">
                                        <span class="block font-label-sm text-[10px] text-on-surface-variant">Paket 4 Kotak</span>
                                        <span class="block font-label-md text-[11px] font-bold text-on-surface">Rp 1.050.000</span>
                                    </div>
                                    <div class="p-1.5 bg-surface rounded-lg shadow-xs">
                                        <span class="block font-label-sm text-[10px] text-on-surface-variant">Paket 6 Kotak</span>
                                        <span class="block font-label-md text-[11px] font-bold text-on-surface">Rp 1.550.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Price & CTA -->
                        <div class="mt-5 pt-4 border-t border-outline-variant/20 flex items-center justify-between">
                            <div>
                                <span class="block font-label-sm text-[10px] uppercase tracking-wider text-secondary">Mulai Dari</span>
                                <span class="font-title-md text-title-md text-on-surface font-bold">Rp 260.000 <span class="text-xs font-normal text-on-surface-variant">/ kotak</span></span>
                            </div>
                            <a href="{{ route('sewa-kotak-seserahan') }}?series=Luxury+White"
                                class="inline-flex items-center gap-1.5 px-4 py-2.5 rounded-xl bg-tertiary text-on-tertiary font-label-md text-label-md hover:bg-primary transition-colors shadow-xs">
                                <span>Cek Ketersediaan &amp; Sewa</span>
                                <span class="material-symbols-outlined text-base">calendar_month</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Baki Card 3: Hidden Series -->
                <div class="flex flex-col sm:flex-row rounded-2xl bg-surface-container-lowest border border-outline-variant/30 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
                    <div class="relative sm:w-2/5 aspect-[4/3] sm:aspect-auto overflow-hidden bg-surface-container-high shrink-0">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuB7S084omFVxvYQYD54ims8BbC3xPxgK2baMd3UKmTw7Q6RH1csuGBRxEboLZrwLTsfEpeZ6UQLAvjjEVZMW6IB_Br1XdndaDu3MenISbSCY7r4UZFIs-jtksGVXDTyu2Hsjip2g1Fj4RAJKgngAl_zt_cUPvk-gwTz_HICJpGDKLd0Lhq21xCDKVWG7EjRu0YXa_TIjrghpWwJxFYhUM2PdRtT-oPAW9EPWeojeI-e2HwSI65Ta_xF"
                            alt="Hidden Series">
                        <div class="absolute top-3 left-3 bg-secondary-container/90 backdrop-blur-md px-2.5 py-0.5 rounded-full">
                            <span class="font-label-sm text-[10px] text-on-secondary-fixed uppercase tracking-wider font-semibold">Eksklusif &amp; Mewah</span>
                        </div>
                        <div class="absolute bottom-3 left-3 bg-surface/90 backdrop-blur-md px-2.5 py-0.5 rounded-full flex items-center gap-1 shadow-xs">
                            <span class="material-symbols-outlined text-xs text-primary">lock</span>
                            <span class="font-label-sm text-[10px] text-secondary font-semibold">10 Seri Master</span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div>
                            <div class="flex items-center justify-between">
                                <h3 class="font-title-lg text-title-lg text-on-surface font-semibold">Hidden Series</h3>
                                <span class="font-label-sm text-[11px] uppercase tracking-wider text-secondary font-bold">SERI 03</span>
                            </div>
                            <p class="font-body-md text-[13px] text-on-surface-variant mt-2 leading-relaxed">
                                Koleksi semi-privat berkarakter ukir mewah khas atelier Cattaleya. Dirancang khusus untuk menjaga privasi mahar berharga, seri perhiasan, atau busana sakral.
                            </p>

                            <!-- Keunggulan Box -->
                            <div class="mt-4 p-3 rounded-xl bg-surface-container-low border border-outline-variant/20 space-y-1.5">
                                <span class="block font-label-sm text-[10px] uppercase tracking-wider text-secondary font-semibold">Keunggulan Seri :</span>
                                <div class="flex items-center gap-2 text-on-surface text-[12px]">
                                    <span class="material-symbols-outlined text-sm text-primary">check_circle</span>
                                    <span>Kayu Jati Solid Ukir &amp; Box Jepara</span>
                                </div>
                                <div class="flex items-center gap-2 text-on-surface text-[12px]">
                                    <span class="material-symbols-outlined text-sm text-primary">check_circle</span>
                                    <span>Privasi Mahakarya untuk Hantaran Bernilai Tinggi</span>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Price & CTA -->
                        <div class="mt-5 pt-4 border-t border-outline-variant/20 flex items-center justify-between">
                            <div>
                                <span class="block font-label-sm text-[10px] uppercase tracking-wider text-secondary">Mulai Dari</span>
                                <span class="font-title-md text-title-md text-on-surface font-bold">Rp 220.000 <span class="text-xs font-normal text-on-surface-variant">/ kotak</span></span>
                            </div>
                            <a href="{{ route('sewa-kotak-seserahan') }}?series=Hidden+Series"
                                class="inline-flex items-center gap-1.5 px-4 py-2.5 rounded-xl bg-tertiary text-on-tertiary font-label-md text-label-md hover:bg-primary transition-colors shadow-xs">
                                <span>Cek Ketersediaan &amp; Sewa</span>
                                <span class="material-symbols-outlined text-base">calendar_month</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Baki Card 4: Rattan Series / Bohemian -->
                <div class="flex flex-col sm:flex-row rounded-2xl bg-surface-container-lowest border border-outline-variant/30 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
                    <div class="relative sm:w-2/5 aspect-[4/3] sm:aspect-auto overflow-hidden bg-surface-container-high shrink-0">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDiUHlbfrzN3pdlcJyQpZ5Ro5vUuMmVYMhZSi19PhTjSU5KOmHtnXZtjpb2QZKILAL33864nPeblWVtzh186sPIO6at6hlSH1ao1EPmFM2rcyUvi2nwyllkxt1qgYONlDkJLFBkcEUFU3zZYKezpzKcuJRm_KLcaY0cgMYnYYBbRkXM4HFaYp9fQs1noNRKqqbQZ8uR3Tvd7N68bPjUnO8cxGd3zrpXgT2nAkEmwK1czewvHdUlCe9Z"
                            alt="Rattan Series / Bohemian">
                        <div class="absolute top-3 left-3 bg-secondary-container/90 backdrop-blur-md px-2.5 py-0.5 rounded-full">
                            <span class="font-label-sm text-[10px] text-on-secondary-fixed uppercase tracking-wider font-semibold">Rustic &amp; Natural</span>
                        </div>
                        <div class="absolute bottom-3 left-3 bg-surface/90 backdrop-blur-md px-2.5 py-0.5 rounded-full flex items-center gap-1 shadow-xs">
                            <span class="material-symbols-outlined text-xs text-primary">lock</span>
                            <span class="font-label-sm text-[10px] text-secondary font-semibold">10 Seri Master</span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div>
                            <div class="flex items-center justify-between">
                                <h3 class="font-title-lg text-title-lg text-on-surface font-semibold">Rattan Series / Bohemian</h3>
                                <span class="font-label-sm text-[11px] uppercase tracking-wider text-secondary font-bold">SERI 04</span>
                            </div>
                            <p class="font-body-md text-[13px] text-on-surface-variant mt-2 leading-relaxed">
                                Anyaman rotan alami berpadu harmonis dengan aksen kain goni premium dan bunga kering rustic. Sempurna untuk konsep pernikahan outdoor, garden party, maupun adat kontemporer.
                            </p>

                            <!-- Keunggulan Box -->
                            <div class="mt-4 p-3 rounded-xl bg-surface-container-low border border-outline-variant/20 space-y-1.5">
                                <span class="block font-label-sm text-[10px] uppercase tracking-wider text-secondary font-semibold">Keunggulan Seri :</span>
                                <div class="flex items-center gap-2 text-on-surface text-[12px]">
                                    <span class="material-symbols-outlined text-sm text-primary">check_circle</span>
                                    <span>Material Rotan Alami Terpilih</span>
                                </div>
                                <div class="flex items-center gap-2 text-on-surface text-[12px]">
                                    <span class="material-symbols-outlined text-sm text-primary">check_circle</span>
                                    <span>Aksen Bunga Kering Serat Guava &amp; Dried Pampas</span>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Price & CTA -->
                        <div class="mt-5 pt-4 border-t border-outline-variant/20 flex items-center justify-between">
                            <div>
                                <span class="block font-label-sm text-[10px] uppercase tracking-wider text-secondary">Mulai Dari</span>
                                <span class="font-title-md text-title-md text-on-surface font-bold">Rp 210.000 <span class="text-xs font-normal text-on-surface-variant">/ kotak</span></span>
                            </div>
                            <a href="{{ route('sewa-kotak-seserahan') }}?series=Rattan+Series"
                                class="inline-flex items-center gap-1.5 px-4 py-2.5 rounded-xl bg-tertiary text-on-tertiary font-label-md text-label-md hover:bg-primary transition-colors shadow-xs">
                                <span>Cek Ketersediaan &amp; Sewa</span>
                                <span class="material-symbols-outlined text-base">calendar_month</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. Bottom Consultation Banner -->
        <div class="mt-20 p-8 sm:p-10 lg:p-12 rounded-2xl bg-surface-container-low border border-outline-variant/30 flex flex-col lg:flex-row items-center justify-between gap-8 shadow-sm">
            <div class="flex-1">
                <div class="inline-flex items-center gap-2 font-label-sm text-label-sm uppercase tracking-widest text-primary mb-2">
                    <span class="material-symbols-outlined text-base">support_agent</span>
                    <span>Layanan Konsultasi Privat</span>
                </div>
                <h3 class="font-headline-md text-xl sm:text-2xl text-on-surface font-medium">
                    Bingung Menentukan Seri Baki atau Konsep Mahar Anda?
                </h3>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mt-2 leading-relaxed">
                    Konsultan pernikahan Cattaleya siap membantu menghitung kebutuhan baki, menyelaraskan palet warna bunga dengan konsep dekorasi, hingga penataan barang hantaran berharga secara langsung.
                </p>
            </div>
            <div class="flex flex-col sm:flex-row lg:flex-col gap-3 w-full lg:w-auto shrink-0">
                <a href="https://wa.me/6282210008899?text=Halo%20Cattaleya,%20saya%20ingin%20konsultasi%20mengenai%20mahar%20dan%20kotak%20seserahan" target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center justify-center gap-2.5 px-6 py-3.5 rounded-xl bg-primary text-on-primary font-title-md text-title-md hover:bg-primary-container transition-colors shadow-sm">
                    <span class="material-symbols-outlined text-xl">chat</span>
                    <span>Konsultasi Gratis via WhatsApp</span>
                </a>
                <a href="{{ route('cek-pesanan') }}"
                    class="inline-flex items-center justify-center gap-2.5 px-6 py-3.5 rounded-xl bg-surface text-on-surface border border-outline-variant font-title-md text-title-md hover:bg-surface-container transition-colors shadow-xs">
                    <span class="material-symbols-outlined text-xl">receipt_long</span>
                    <span>Lacak Status Pesanan Aktif</span>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection

