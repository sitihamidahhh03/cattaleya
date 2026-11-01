@extends('layouts.main')

@section('title', 'Tentang Cattaleya - Atelier Seserahan & Mahar Pernikahan')

@section('content')
<div class="flex flex-col w-full pb-20">
    <!-- Subtle Ambient Glow Ornaments -->
    <div class="relative w-full overflow-hidden bg-surface py-12 md:py-16">
        <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[850px] h-[340px] bg-gradient-to-b from-primary-fixed/20 via-secondary-fixed/15 to-transparent blur-3xl pointer-events-none rounded-full"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 relative z-10">
            <!-- Hero Section -->
            <div class="text-center max-w-3xl mx-auto space-y-4">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-secondary-container/70 text-on-secondary-fixed shadow-xs">
                    <span class="material-symbols-outlined text-sm text-primary">auto_awesome</span>
                    <span class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-semibold">Atelier Seserahan &amp; Mahar Sejak 2018</span>
                </div>
                <h1 class="font-headline-lg text-2xl sm:text-3xl md:text-5xl text-on-surface font-medium tracking-tight leading-tight">
                    Menghidupkan Keagungan Tradisi dengan Presisi Modern
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto leading-relaxed">
                    Cattaleya lahir dari penghormatan mendalam terhadap kesakralan ikrar pernikahan Indonesia. Kami memadukan seni kriya tangan adiluhung, vitrine akrilik kristal, dan bunga preserved abadi untuk menciptakan pusaka yang bertahan puluhan tahun.
                </p>
            </div>

            <!-- Visual Atelier Mosaic Gallery -->
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6 mt-12 items-center">
                <div class="md:col-span-7 rounded-2xl overflow-hidden aspect-[16/10] bg-surface-container shadow-md border border-outline-variant/30 group">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBvQIf4ii622Sq_SE72DATqzy32F1LU0FYGTY78__tQToAEVQCsahSSfBDn5UWVH6jPBMFhqPGHIoQ435VXdPiLzKmlAvw5P8k5Wbeu2zXTovQCB60InBw8yqk0F0j5PFkpD_dy-JgQZ7faJAnbKUJu_suhYqAbyd9SXRol0VyE0xDXLhDFgVddLzt4M7G1zgNjXjrunIKR3de05UUpuvErMkXB9haLWlqtT_cu8eX76JJHI23pfWgy"
                        alt="Atelier Cattaleya Studio Interior">
                </div>
                <div class="md:col-span-5 space-y-6">
                    <div class="p-6 sm:p-8 rounded-2xl bg-surface-container-low border border-outline-variant/30 shadow-sm space-y-3">
                        <span class="material-symbols-outlined text-primary text-3xl">verified</span>
                        <h3 class="font-title-lg text-title-lg text-on-surface font-bold">Filosofi Bunga Abadi Cattaleya</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                            Kami percaya mahar bukan sekadar formalitas serah-terima, melainkan monumen ikrar cinta pertama yang layak dipajang megah di ruang keluarga Anda selamanya tanpa layu.
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="p-5 rounded-2xl bg-surface-container-lowest border border-outline-variant/30 shadow-xs">
                            <span class="block font-headline-md text-2xl text-primary font-bold">2.500+</span>
                            <span class="block font-label-sm text-label-sm text-secondary uppercase tracking-wider mt-1">Karya Mahar Terwujud</span>
                        </div>
                        <div class="p-5 rounded-2xl bg-surface-container-lowest border border-outline-variant/30 shadow-xs">
                            <span class="block font-headline-md text-2xl text-primary font-bold">100%</span>
                            <span class="block font-label-sm text-label-sm text-secondary uppercase tracking-wider mt-1">Preserved Flowers Asli</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4 Nilai Utama Atelier -->
            <div class="mt-20">
                <div class="text-center max-w-2xl mx-auto mb-12">
                    <span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-semibold">Pilar Keunggulan Studio</span>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface font-semibold mt-1">Standar Kualitas Mahakarya Kami</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Pillar 1 -->
                    <div class="p-6 rounded-2xl bg-surface-container-lowest border border-outline-variant/30 shadow-sm space-y-3">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                            <span class="material-symbols-outlined text-2xl">architecture</span>
                        </div>
                        <h3 class="font-title-lg text-title-lg text-on-surface font-bold">Presisi Kriya &amp; Grafir Laser</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                            Potongan akrilik 3D bevel dan plat kaligrafi logam diukir menggunakan teknologi CNC laser Jerman dengan ketelitian sub-milimeter.
                        </p>
                    </div>

                    <!-- Pillar 2 -->
                    <div class="p-6 rounded-2xl bg-surface-container-lowest border border-outline-variant/30 shadow-sm space-y-3">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                            <span class="material-symbols-outlined text-2xl">spa</span>
                        </div>
                        <h3 class="font-title-lg text-title-lg text-on-surface font-bold">Preserved Flowers Grade A</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                            Bunga anggrek Cattaleya, mawar, dan hydrangea alami diawetkan secara botani di Jepang agar kelembutan dan warnanya abadi puluhan tahun.
                        </p>
                    </div>

                    <!-- Pillar 3 -->
                    <div class="p-6 rounded-2xl bg-surface-container-lowest border border-outline-variant/30 shadow-sm space-y-3">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                            <span class="material-symbols-outlined text-2xl">sanitizer</span>
                        </div>
                        <h3 class="font-title-lg text-title-lg text-on-surface font-bold">Protokol Sterilisasi UV-C</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                            Semua baki dan tray seserahan melewati proses sterilisasi kabin UV-C serta pembersihan velvet anti-debu 48 jam sebelum jadwal serah terima.
                        </p>
                    </div>

                    <!-- Pillar 4 -->
                    <div class="p-6 rounded-2xl bg-surface-container-lowest border border-outline-variant/30 shadow-sm space-y-3">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                            <span class="material-symbols-outlined text-2xl">verified_user</span>
                        </div>
                        <h3 class="font-title-lg text-title-lg text-on-surface font-bold">Garansi Midtrans Terpercaya</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                            Integrasi resmi dengan Midtrans Snap untuk pembayaran aman 256-bit dan garansi deposit sewa kembali 100% utuh dalam 1x24 jam.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

