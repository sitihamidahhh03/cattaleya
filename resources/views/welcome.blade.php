@extends('layouts.main')

@section('title', 'Cattaleya')

@section('content')
<div class="flex flex-col w-full">
  <!-- Hero Section with Visual Warmth and Negative Margin Overlap -->
  <section class="relative w-full overflow-hidden bg-surface-container-low min-h-[calc(100vh-5rem)] flex items-center py-6 sm:py-8 lg:py-10">
    <div class="absolute -right-24 -top-24 w-96 h-96 rounded-full bg-secondary-container/40 blur-3xl pointer-events-none"></div>
    <div class="absolute -left-20 bottom-10 w-80 h-80 rounded-full bg-primary-fixed/30 blur-3xl pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-6 lg:px-12 relative z-10 w-full">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center">
        <!-- Text Column -->
        <div class="lg:col-span-7 flex flex-col items-start space-y-5">
          <h1 class="font-display-lg text-3xl sm:text-4xl lg:text-[44px] lg:leading-[52px] text-on-surface tracking-tight leading-tight">
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
        </div>

        <!-- Visual Mosaic Column -->
        <div class="lg:col-span-5 relative">
          <div class="relative w-full max-w-md lg:max-w-none mx-auto h-[320px] sm:h-[360px] lg:h-[400px] rounded-2xl overflow-hidden shadow-xl bg-surface-container">
            <img class="w-full h-full object-cover" data-alt="An opulent bespoke Indonesian wedding dowry showcase inside a warm taupe atelier. A clear bevel-edged acrylic vitrine houses layered gold calligraphy, pressed cream orchids, and silk ribbon details under soft dramatic spotlighting. Luxurious champagne tones, fine wood craft, and velvet textures creating an heirloom ambiance." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBvQIf4ii622Sq_SE72DATqzy32F1LU0FYGTY78__tQToAEVQCsahSSfBDn5UWVH6jPBMFhqPGHIoQ435VXdPiLzKmlAvw5P8k5Wbeu2zXTovQCB60InBw8yqk0F0j5PFkpD_dy-JgQZ7faJAnbKUJu_suhYqAbyd9SXRol0VyE0xDXLhDFgVddLzt4M7G1zgNjXjrunIKR3de05UUpuvErMkXB9haLWlqtT_cu8eX76JJHI23pfWgy">
            <div class="absolute inset-0 bg-gradient-to-t from-on-surface/85 via-transparent to-transparent"></div>
            <div class="absolute bottom-5 left-5 right-5 text-on-primary">
              <span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary-fixed">Koleksi Royal Signature</span>
              <p class="font-headline-md text-headline-md text-surface-bright mt-0.5">Vitrine Akrilik Kemilau Emas 24K</p>
              <p class="font-body-md text-body-md text-surface-container-high text-xs mt-0.5">Dikerjakan tangan oleh artisan senior Cattaleya Studio.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Curated Series Spotlight (Cuplikan Seri Pilihan) -->
  <section id="katalog" class="w-full min-h-[calc(100vh-5rem)] flex flex-col justify-center py-6 sm:py-8 lg:py-10 bg-surface">
    <div class="max-w-7xl mx-auto px-6 lg:px-12 w-full">
      <div class="flex flex-col md:flex-row md:items-end justify-between mb-5 lg:mb-6 gap-3">
        <div>
          <span class="font-label-sm text-xs uppercase tracking-widest text-primary font-semibold">Karya Unggulan Studio</span>
          <h2 class="font-headline-lg text-2xl lg:text-3xl text-on-surface mt-1 font-medium">Cuplikan Seri Pilihan</h2>
          <p class="font-body-md text-xs sm:text-sm text-on-surface-variant max-w-lg mt-1">
            Setiap seri dirakit dengan material kualitas galeri, memadukan tradisi hantaran ningrat dengan estetika kontemporer.
          </p>
        </div>
        <a class="inline-flex items-center gap-1.5 font-label-md text-xs sm:text-sm uppercase tracking-wider text-primary hover:text-primary-container transition-colors pb-1 shrink-0" data-path="katalog" href="{{ route('katalog') }}">
          <span>Lihat Semua Seri</span>
          <span class="material-symbols-outlined text-base">arrow_forward</span>
        </a>
      </div>

      <!-- 3-Column Bento Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-5 lg:gap-6">
        <!-- Card 1: Mahar Vitrine Akrilik 3D -->
        <div class="group flex flex-col rounded-xl bg-surface-container-lowest overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
          <div class="relative w-full h-44 sm:h-48 overflow-hidden bg-surface-container-high">
            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Exquisite 3D acrylic vitrine wedding mahar dowry frame on champagne silk cushion. Floating 3D metallic gold calligraphy with real preserved white hydrangeas and dried lunaria lunaria seed pods. Elegant soft lighting highlights bevelled acrylic box transparency in a luxury wedding salon." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDiUHlbfrzN3pdlcJyQpZ5Ro5vUuMmVYMhZSi19PhTjSU5KOmHtnXZtjpb2QZKILAL33864nPeblWVtzh186sPIO6at6hlSH1ao1EPmFM2rcyUvi2nwyllkxt1qgYONlDkJLFBkcEUFU3zZYKezpzKcuJRm_KLcaY0cgMYnYYBbRkXM4HFaYp9fQs1noNRKqqbQZ8uR3Tvd7N68bPjUnO8cxGd3zrpXgT2nAkEmwK1czewvHdUlCe9Z">
            <div class="absolute top-3.5 left-3.5 bg-surface/90 backdrop-blur-md px-3 py-1 rounded-full">
              <span class="font-label-sm text-[11px] text-primary uppercase font-medium">Mahar Kustom Bespoke</span>
            </div>
          </div>
          <div class="p-4 sm:p-5 flex flex-col flex-1 justify-between">
            <div>
              <h3 class="font-headline-md text-base sm:text-lg text-on-surface font-semibold group-hover:text-primary transition-colors">Mahar Vitrine Akrilik 3D</h3>
              <p class="font-body-md text-xs sm:text-sm text-on-surface-variant mt-1.5 line-clamp-2 leading-relaxed">
                Struktur vitrine akrilik kristal dengan kaligrafi monogram timbul, dried floral grade A, dan tata letak logam mulia bersertifikat.
              </p>
            </div>
            <div class="mt-4 bg-surface-container-low rounded-xl p-3 flex items-center justify-between">
              <div>
                <span class="font-label-sm text-[10px] sm:text-xs uppercase tracking-wider text-secondary font-medium">Mulai Dari</span>
                <p class="font-title-md text-sm sm:text-base font-bold text-on-surface">Rp 1.450.000</p>
              </div>
              <a class="inline-flex items-center justify-center w-9 h-9 rounded-lg bg-primary text-on-primary hover:bg-primary-container transition-colors shadow-sm" data-path="pesan-mahar" href="https://wa.me/6282210008899?text=Halo%20Cattaleya,%20saya%20tertarik%20dengan%20Mahar%20Vitrine%20Akrilik%203D" target="_blank" rel="noopener noreferrer">
                <span class="material-symbols-outlined text-lg">arrow_outward</span>
              </a>
            </div>
          </div>
        </div>

        <!-- Card 2: Kotak Hantaran Luxury Crystal Lis Emas -->
        <div class="group flex flex-col rounded-xl bg-surface-container-lowest overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
          <div class="relative w-full h-44 sm:h-48 overflow-hidden bg-surface-container-high">
            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Luxury glass and gold brass trimmed wedding seserahan gift tray box. Inside rests designer perfume, silk lace prayer gown, and bespoke velvet jewelry box lined with dried blush roses and gold leaf accents. Warm soft ambient lighting in a high end bridal suite." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC7SrzOY3CVNBvdJP8S_DAckzvnGy-8n3qmCY6iEP9h06T3RS9k485LLteBo9Zur9kC3yPnq_5v3lm58I0TLN6t3Mi4EbXJhDfUbtINm0RSIB9sjf4XD-Qfsa1Mv7GvNCMqZT4IsVeuFMOsZPSUnDLplnc7fnthUdykgjvW5GsGy77BN1guu5t7Ieu7Cyg67OcUxDFBqCHzTjEkcA3vqhSp8WAwPvePtgy147P78i9wc1k1n4cZ9m0P">
            <div class="absolute top-3.5 left-3.5 bg-surface/90 backdrop-blur-md px-3 py-1 rounded-full">
              <span class="font-label-sm text-[11px] text-primary uppercase font-medium">Sewa Baki Eksklusif</span>
            </div>
          </div>
          <div class="p-4 sm:p-5 flex flex-col flex-1 justify-between">
            <div>
              <h3 class="font-headline-md text-base sm:text-lg text-on-surface font-semibold group-hover:text-primary transition-colors">Luxury Crystal Lis Emas</h3>
              <p class="font-body-md text-xs sm:text-sm text-on-surface-variant mt-1.5 line-clamp-2 leading-relaxed">
                Tray kaca prismatik dengan aksen lis kuningan emas antique. Menciptakan pantulan kemewahan saat prosesi serah-terima hantaran.
              </p>
            </div>
            <div class="mt-4 bg-surface-container-low rounded-xl p-3 flex items-center justify-between">
              <div>
                <span class="font-label-sm text-[10px] sm:text-xs uppercase tracking-wider text-secondary font-medium">Paket Sewa (7 Box)</span>
                <p class="font-title-md text-sm sm:text-base font-bold text-on-surface">Rp 850.000 / event</p>
              </div>
              <a class="inline-flex items-center justify-center w-9 h-9 rounded-lg bg-primary text-on-primary hover:bg-primary-container transition-colors shadow-sm" data-path="sewa-kotak-seserahan" href="https://wa.me/6282210008899?text=Halo%20Cattaleya,%20saya%20tertarik%20dengan%20Sewa%20Baki%20Luxury%20Crystal%20Lis%20Emas" target="_blank" rel="noopener noreferrer">
                <span class="material-symbols-outlined text-lg">arrow_outward</span>
              </a>
            </div>
          </div>
        </div>

        <!-- Card 3: Kotak Kayu Jati Hidden Series -->
        <div class="group flex flex-col rounded-xl bg-surface-container-lowest overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
          <div class="relative w-full h-44 sm:h-48 overflow-hidden bg-surface-container-high">
            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Artisanal solid teak wood dowry chest with delicate traditional Indonesian hand carved floral filigree. Rich matte walnut and honey teak finish with a hidden sliding compartment showing a velvet bed for heirloom jewelry. Dramatic chiaroscuro warm lighting highlighting the wood grain." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB7S084omFVxvYQYD54ims8BbC3xPxgK2baMd3UKmTw7Q6RH1csuGBRxEboLZrwLTsfEpeZ6UQLAvjjEVZMW6IB_Br1XdndaDu3MenISbSCY7r4UZFIs-jtksGVXDTyu2Hsjip2g1Fj4RAJKgngAl_zt_cUPvk-gwTz_HICJpGDKLd0Lhq21xCDKVWG7EjRu0YXa_TIjrghpWwJxFYhUM2PdRtT-oPAW9EPWeojeI-e2HwSI65Ta_xF">
            <div class="absolute top-3.5 left-3.5 bg-surface/90 backdrop-blur-md px-3 py-1 rounded-full">
              <span class="font-label-sm text-[11px] text-primary uppercase font-medium">Koleksi Kayu Warisan</span>
            </div>
          </div>
          <div class="p-4 sm:p-5 flex flex-col flex-1 justify-between">
            <div>
              <h3 class="font-headline-md text-base sm:text-lg text-on-surface font-semibold group-hover:text-primary transition-colors">Kayu Jati Hidden Series</h3>
              <p class="font-body-md text-xs sm:text-sm text-on-surface-variant mt-1.5 line-clamp-2 leading-relaxed">
                Peti kayu jati solid Jepara berukir sulur khas dengan kompartemen rahasia berlapis beludru kasmir untuk pusaka dan cincin kawin.
              </p>
            </div>
            <div class="mt-4 bg-surface-container-low rounded-xl p-3 flex items-center justify-between">
              <div>
                <span class="font-label-sm text-[10px] sm:text-xs uppercase tracking-wider text-secondary font-medium">Mulai Dari</span>
                <p class="font-title-md text-sm sm:text-base font-bold text-on-surface">Rp 1.150.000</p>
              </div>
              <a class="inline-flex items-center justify-center w-9 h-9 rounded-lg bg-primary text-on-primary hover:bg-primary-container transition-colors shadow-sm" data-path="katalog" href="https://wa.me/6282210008899?text=Halo%20Cattaleya,%20saya%20tertarik%20dengan%20Kayu%20Jati%20Hidden%20Series" target="_blank" rel="noopener noreferrer">
                <span class="material-symbols-outlined text-lg">arrow_outward</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4 Langkah Mudah Pemesanan untuk Pengantin -->
  <section class="w-full min-h-[calc(100vh-5rem)] flex flex-col justify-center py-6 sm:py-8 lg:py-10 bg-surface-container-low relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-12 w-full">
      <div class="text-center max-w-2xl mx-auto mb-6 lg:mb-8">
        <span class="font-label-sm text-xs uppercase tracking-widest text-primary font-semibold">Pengalaman Tanpa Kendala</span>
        <h2 class="font-headline-lg text-2xl lg:text-3xl text-on-surface mt-1 font-medium">4 Langkah Mudah Pemesanan</h2>
        <p class="font-body-md text-xs sm:text-sm text-on-surface-variant mt-1.5 leading-relaxed">
          Kami menyederhanakan persiapan mahar dan hantaran agar Anda dapat berfokus menyambut hari bahagia dengan tenang.
        </p>
      </div>

      <!-- Step Cards Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 lg:gap-6 relative">
        <!-- Step 1 -->
        <div class="bg-surface-container-lowest rounded-2xl p-5 sm:p-6 flex flex-col justify-between shadow-sm relative overflow-hidden group hover:shadow-md transition-shadow">
          <div class="absolute -right-3 -top-3 w-14 h-14 rounded-full bg-surface-container-high/60 flex items-center justify-center">
            <span class="font-metric-display text-xl text-primary/30">01</span>
          </div>
          <div>
            <div class="w-11 h-11 rounded-xl bg-secondary-fixed text-primary flex items-center justify-center mb-4">
              <span class="material-symbols-outlined text-2xl">style</span>
            </div>
            <h3 class="font-title-lg text-base sm:text-lg font-semibold text-on-surface leading-snug">Pilih Desain Mahar atau Seri Kotak</h3>
            <p class="font-body-md text-xs sm:text-sm text-on-surface-variant mt-2 leading-relaxed">
              Jelajahi portofolio mahar atau tentukan jumlah baki seserahan akrilik/kayu sesuai kebutuhan adat maupun personal Anda.
            </p>
          </div>
          <div class="pt-3.5 mt-4 border-t border-outline-variant/20">
            <span class="font-label-sm text-xs text-secondary uppercase tracking-wider font-medium">Kurasi Koleksi • Fleksibel</span>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="bg-surface-container-lowest rounded-2xl p-5 sm:p-6 flex flex-col justify-between shadow-sm relative overflow-hidden group hover:shadow-md transition-shadow">
          <div class="absolute -right-3 -top-3 w-14 h-14 rounded-full bg-surface-container-high/60 flex items-center justify-center">
            <span class="font-metric-display text-xl text-primary/30">02</span>
          </div>
          <div>
            <div class="w-11 h-11 rounded-xl bg-secondary-fixed text-primary flex items-center justify-center mb-4">
              <span class="material-symbols-outlined text-2xl">calendar_month</span>
            </div>
            <h3 class="font-title-lg text-base sm:text-lg font-semibold text-on-surface leading-snug">Masukkan Tanggal Acara</h3>
            <p class="font-body-md text-xs sm:text-sm text-on-surface-variant mt-2 leading-relaxed">
              Sistem kalender cerdas otomatis memeriksa ketersediaan baki dan mengunci slot pengerjaan artisan agar terhindar dari bentrok jadwal.
            </p>
          </div>
          <div class="pt-3.5 mt-4 border-t border-outline-variant/20">
            <span class="font-label-sm text-xs text-secondary uppercase tracking-wider font-medium">Real-time Slot Lock</span>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="bg-surface-container-lowest rounded-2xl p-5 sm:p-6 flex flex-col justify-between shadow-sm relative overflow-hidden group hover:shadow-md transition-shadow">
          <div class="absolute -right-3 -top-3 w-14 h-14 rounded-full bg-surface-container-high/60 flex items-center justify-center">
            <span class="font-metric-display text-xl text-primary/30">03</span>
          </div>
          <div>
            <div class="w-11 h-11 rounded-xl bg-secondary-fixed text-primary flex items-center justify-center mb-4">
              <span class="material-symbols-outlined text-2xl">payments</span>
            </div>
            <h3 class="font-title-lg text-base sm:text-lg font-semibold text-on-surface leading-snug">Bayar DP atau Lunas via Midtrans</h3>
            <p class="font-body-md text-xs sm:text-sm text-on-surface-variant mt-2 leading-relaxed">
              Pilihan pembayaran fleksibel mulai dari Down Payment (DP 50%) hingga pelunasan instan menggunakan QRIS, Virtual Account, atau Kartu Kredit.
            </p>
          </div>
          <div class="pt-3.5 mt-4 border-t border-outline-variant/20">
            <span class="font-label-sm text-xs text-secondary uppercase tracking-wider font-medium">Secure Payment Gateway</span>
          </div>
        </div>

        <!-- Step 4 -->
        <div class="bg-surface-container-lowest rounded-2xl p-5 sm:p-6 flex flex-col justify-between shadow-sm relative overflow-hidden group hover:shadow-md transition-shadow">
          <div class="absolute -right-3 -top-3 w-14 h-14 rounded-full bg-surface-container-high/60 flex items-center justify-center">
            <span class="font-metric-display text-xl text-primary/30">04</span>
          </div>
          <div>
            <div class="w-11 h-11 rounded-xl bg-secondary-fixed text-primary flex items-center justify-center mb-4">
              <span class="material-symbols-outlined text-2xl">track_changes</span>
            </div>
            <h3 class="font-title-lg text-base sm:text-lg font-semibold text-on-surface leading-snug">Lacak Status di Cek Pesanan</h3>
            <p class="font-body-md text-xs sm:text-sm text-on-surface-variant mt-2 leading-relaxed">
              Pantau progres dekorasi, dokumentasi foto pra-kirim, hingga nomor resi pengiriman melalui menu pelacak pesanan Cattaleya.
            </p>
          </div>
          <div class="pt-3.5 mt-4 border-t border-outline-variant/20">
            <span class="font-label-sm text-xs text-secondary uppercase tracking-wider font-medium">Live Milestone Tracking</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Studio Cattaleya Menteng Section -->
  <section class="w-full min-h-[calc(100vh-5rem-4.5rem)] flex flex-col justify-center py-4 sm:py-6 lg:py-8" id="studio">
    <div class="max-w-7xl mx-auto px-6 lg:px-12 w-full">
      <div class="p-6 sm:p-8 rounded-2xl bg-surface-container-low border border-outline-variant/30 shadow-sm grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-center">
        <div class="lg:col-span-7 space-y-3 sm:space-y-3.5">
          <div class="inline-flex items-center gap-2 text-primary font-label-sm text-xs uppercase tracking-wider font-semibold">
            <span class="material-symbols-outlined text-base">storefront</span>
            <span>Lokasi Studio Atelier</span>
          </div>
          <h2 class="font-headline-md text-xl sm:text-2xl text-on-surface font-medium leading-tight">
            Studio Cattaleya Menteng, Jakarta Pusat
          </h2>
          <p class="font-body-md text-xs sm:text-sm text-on-surface-variant leading-relaxed">
            Kami mengundang Anda dan keluarga untuk berkunjung langsung ke studio kami, menyentuh material mahar, mencocokkan palet warna busana pernikahan dengan pilihan bunga preserved, dan menikmati sesi konsultasi privat yang menenangkan.
          </p>
          <div class="space-y-2 pt-1 font-body-md text-xs sm:text-sm text-on-surface">
            <div class="flex items-center gap-2.5">
              <span class="material-symbols-outlined text-primary text-lg shrink-0">location_on</span>
              <span>Jl. Teuku Cik Ditiro No. 42, Menteng, Jakarta Pusat 10310</span>
            </div>
            <div class="flex items-center gap-2.5">
              <span class="material-symbols-outlined text-primary text-lg shrink-0">schedule</span>
              <span>Senin - Sabtu: 09:00 - 18:00 WIB (Konsultasi dengan Janji Temu)</span>
            </div>
            <div class="flex items-center gap-2.5">
              <span class="material-symbols-outlined text-primary text-lg shrink-0">phone_in_talk</span>
              <span>+62 822-1000-8899</span>
            </div>
          </div>
          <div class="pt-2 sm:pt-3 flex flex-wrap gap-3">
            <a href="https://wa.me/6282210008899?text=Halo%20Studio%20Cattaleya,%20saya%20ingin%20membuat%20janji%20temu%20konsultasi%20di%20Studio%20Menteng" target="_blank" rel="noopener noreferrer"
              class="inline-flex items-center gap-2 px-5 py-2.5 sm:px-6 sm:py-3 rounded-xl bg-primary text-on-primary font-title-md text-xs sm:text-sm hover:bg-primary-container transition-colors shadow-sm">
              <span class="material-symbols-outlined text-base">chat</span>
              <span>Buat Janji Temu Studio</span>
            </a>
            <a href="{{ route('katalog') }}"
              class="inline-flex items-center gap-2 px-5 py-2.5 sm:px-6 sm:py-3 rounded-xl bg-surface text-secondary border border-outline-variant font-title-md text-xs sm:text-sm hover:bg-surface-container transition-colors shadow-xs">
              <span class="material-symbols-outlined text-base">auto_awesome</span>
              <span>Lihat Katalog Karya</span>
            </a>
          </div>
        </div>
        <div class="lg:col-span-5 rounded-xl overflow-hidden aspect-[4/3] max-h-[250px] sm:max-h-[270px] bg-surface-container shadow-md border border-outline-variant/30">
          <img class="w-full h-full object-cover"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuB7S084omFVxvYQYD54ims8BbC3xPxgK2baMd3UKmTw7Q6RH1csuGBRxEboLZrwLTsfEpeZ6UQLAvjjEVZMW6IB_Br1XdndaDu3MenISbSCY7r4UZFIs-jtksGVXDTyu2Hsjip2g1Fj4RAJKgngAl_zt_cUPvk-gwTz_HICJpGDKLd0Lhq21xCDKVWG7EjRu0YXa_TIjrghpWwJxFYhUM2PdRtT-oPAW9EPWeojeI-e2HwSI65Ta_xF"
            alt="Atelier Wooden Chest Craftsmanship">
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
