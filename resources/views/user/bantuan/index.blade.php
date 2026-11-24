@extends('layouts.main')

@section('title', 'Pusat Bantuan & WhatsApp Concierge - Cattaleya')

@section('content')
<div class="flex flex-col w-full pb-20">
    <!-- Subtle Ambient Glow -->
    <div class="relative w-full overflow-hidden bg-surface py-12 md:py-16">
        <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[850px] h-[340px] bg-gradient-to-b from-primary-fixed/20 via-secondary-fixed/15 to-transparent blur-3xl pointer-events-none rounded-full"></div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-12 relative z-10">
            <!-- Header Section -->
            <div class="text-center max-w-3xl mx-auto space-y-4">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-secondary-container/70 text-on-secondary-fixed shadow-xs">
                    <span class="material-symbols-outlined text-sm text-primary">support_agent</span>
                    <span class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-semibold">Pusat Layanan Klien &amp; FAQ</span>
                </div>
                <h1 class="font-headline-lg text-2xl sm:text-3xl md:text-5xl text-on-surface font-medium tracking-tight leading-tight">
                    Ada yang Bisa Kami Bantu?
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto leading-relaxed">
                    Pilih kanal bantuan WhatsApp langsung sesuai kebutuhan Anda atau temukan jawaban cepat melalui pertanyaan umum seputar mahar dan kotak seserahan di bawah ini.
                </p>
            </div>

            <!-- 3 WhatsApp Concierge Channel Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
                <!-- Channel 1: Mahar -->
                <div class="p-6 rounded-2xl bg-surface-container-lowest border border-outline-variant/30 shadow-sm flex flex-col justify-between hover:shadow-md transition-all">
                    <div class="space-y-3">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                            <span class="material-symbols-outlined text-2xl">crop_original</span>
                        </div>
                        <h3 class="font-title-lg text-title-lg text-on-surface font-bold">Konsultasi Desain Mahar</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                            Konsultasikan ukuran bingkai, tata letak logam mulia, koin dinar, dan penyesuaian palet bunga preserved dengan konsep pernikahan Anda.
                        </p>
                    </div>
                    <a href="https://wa.me/6282210008899?text=Halo%20Studio%20Cattaleya,%20saya%20ingin%20konsultasi%20desain%20mahar%20pernikahan%20kustom" target="_blank" rel="noopener noreferrer"
                        class="mt-6 w-full py-3 px-4 rounded-xl bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-colors flex items-center justify-center gap-2 shadow-xs">
                        <span class="material-symbols-outlined text-lg">chat</span>
                        <span>Chat Spesialis Mahar</span>
                    </a>
                </div>

                <!-- Channel 2: Baki Seserahan -->
                <div class="p-6 rounded-2xl bg-surface-container-lowest border border-outline-variant/30 shadow-sm flex flex-col justify-between hover:shadow-md transition-all">
                    <div class="space-y-3">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                            <span class="material-symbols-outlined text-2xl">redeem</span>
                        </div>
                        <h3 class="font-title-lg text-title-lg text-on-surface font-bold">Reservasi Kotak Seserahan</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                            Cek ketersediaan seri baki (Luxury Crystal, White, Hidden, Rattan), konsultasi jumlah paket hantaran, dan penataan barang berharga.
                        </p>
                    </div>
                    <a href="https://wa.me/6282210008899?text=Halo%20Studio%20Cattaleya,%20saya%20ingin%20cek%20ketersediaan%20dan%20sewa%20kotak%20seserahan" target="_blank" rel="noopener noreferrer"
                        class="mt-6 w-full py-3 px-4 rounded-xl bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-colors flex items-center justify-center gap-2 shadow-xs">
                        <span class="material-symbols-outlined text-lg">calendar_month</span>
                        <span>Chat Reservasi Baki</span>
                    </a>
                </div>

                <!-- Channel 3: Payment & Deposit -->
                <div class="p-6 rounded-2xl bg-surface-container-lowest border border-outline-variant/30 shadow-sm flex flex-col justify-between hover:shadow-md transition-all">
                    <div class="space-y-3">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                            <span class="material-symbols-outlined text-2xl">receipt_long</span>
                        </div>
                        <h3 class="font-title-lg text-title-lg text-on-surface font-bold">Pembayaran &amp; Deposit</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                            Bantuan kendala verifikasi Midtrans Snap, nota kuitansi resmi bertanda tangan studio, dan informasi pencairan jaminan deposit sewa.
                        </p>
                    </div>
                    <a href="https://wa.me/6282210008899?text=Halo%20Finance%20Cattaleya,%20saya%20ingin%20konfirmasi%20pembayaran%20atau%20klaim%20deposit%20sewa" target="_blank" rel="noopener noreferrer"
                        class="mt-6 w-full py-3 px-4 rounded-xl bg-surface text-secondary border border-outline-variant font-label-md text-label-md hover:bg-surface-container transition-colors flex items-center justify-center gap-2 shadow-xs">
                        <span class="material-symbols-outlined text-lg">paid</span>
                        <span>Hubungi Finance Studio</span>
                    </a>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="mt-20 max-w-4xl mx-auto" x-data="{ activeAccordion: 1 }">
                <div class="text-center mb-10 space-y-2">
                    <span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-semibold">Tanya Jawab Populer</span>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface font-semibold">Pertanyaan yang Sering Diajukan (FAQ)</h2>
                </div>

                <div class="space-y-4">
                    <!-- Q1 -->
                    <div class="rounded-2xl bg-surface-container-lowest border border-outline-variant/30 overflow-hidden shadow-xs">
                        <button type="button" @click="activeAccordion = activeAccordion === 1 ? null : 1"
                            class="w-full p-5 sm:p-6 text-left flex items-center justify-between gap-4 focus:outline-none">
                            <span class="font-title-lg text-title-lg text-on-surface font-semibold">Berapa lama estimasi pengerjaan mahar kustom?</span>
                            <span class="material-symbols-outlined text-primary text-xl transition-transform" :class="activeAccordion === 1 ? 'rotate-180' : ''">expand_more</span>
                        </button>
                        <div x-show="activeAccordion === 1" x-collapse class="px-5 sm:px-6 pb-6 text-on-surface-variant font-body-md text-body-md border-t border-outline-variant/20 pt-4 leading-relaxed">
                            Waktu pengerjaan standar berkisar antara <strong>10 hingga 14 hari kerja</strong> terhitung sejak konsep, nama grafir, dan uang muka (DP) diverifikasi. Kami sangat menyarankan pemesanan minimal H-30 sebelum hari acara pernikahan agar kurasi bunga dan detail kaligrafi dapat diselesaikan dengan sempurna.
                        </div>
                    </div>

                    <!-- Q2 -->
                    <div class="rounded-2xl bg-surface-container-lowest border border-outline-variant/30 overflow-hidden shadow-xs">
                        <button type="button" @click="activeAccordion = activeAccordion === 2 ? null : 2"
                            class="w-full p-5 sm:p-6 text-left flex items-center justify-between gap-4 focus:outline-none">
                            <span class="font-title-lg text-title-lg text-on-surface font-semibold">Bagaimana siklus sewa kotak seserahan dan garansi deposit?</span>
                            <span class="material-symbols-outlined text-primary text-xl transition-transform" :class="activeAccordion === 2 ? 'rotate-180' : ''">expand_more</span>
                        </button>
                        <div x-show="activeAccordion === 2" x-collapse class="px-5 sm:px-6 pb-6 text-on-surface-variant font-body-md text-body-md border-t border-outline-variant/20 pt-4 leading-relaxed">
                            Periode sewa menggunakan <strong>Siklus 5 Hari</strong>: pengambilan kotak dilakukan pada H-2 acara di studio kami, dan pengembalian maksimal pada H+2 pukul 17:00 WIB. Biaya jaminan/deposit kotak sebesar Rp 500.000 akan <strong>dikembalikan 100%</strong> utuh ke rekening atau e-wallet Anda maksimal dalam 1x24 jam setelah pengecekan fisik baki selesai.
                        </div>
                    </div>

                    <!-- Q3 -->
                    <div class="rounded-2xl bg-surface-container-lowest border border-outline-variant/30 overflow-hidden shadow-xs">
                        <button type="button" @click="activeAccordion = activeAccordion === 3 ? null : 3"
                            class="w-full p-5 sm:p-6 text-left flex items-center justify-between gap-4 focus:outline-none">
                            <span class="font-title-lg text-title-lg text-on-surface font-semibold">Apakah saya bisa menyediakan logam mulia / koin kuno sendiri?</span>
                            <span class="material-symbols-outlined text-primary text-xl transition-transform" :class="activeAccordion === 3 ? 'rotate-180' : ''">expand_more</span>
                        </button>
                        <div x-show="activeAccordion === 3" x-collapse class="px-5 sm:px-6 pb-6 text-on-surface-variant font-body-md text-body-md border-t border-outline-variant/20 pt-4 leading-relaxed">
                            Tentu bisa! Anda dapat membawa fisik Logam Mulia (Antam/UBS), koin kuno, dinar, cincin, atau perhiasan langsung ke Studio Menteng, atau mengirimkannya melalui kurir berasuransi. Kami akan menerbitkan tanda terima fisik berstempel resmi saat barang diserahkan ke studio.
                        </div>
                    </div>

                    <!-- Q4 -->
                    <div class="rounded-2xl bg-surface-container-lowest border border-outline-variant/30 overflow-hidden shadow-xs">
                        <button type="button" @click="activeAccordion = activeAccordion === 4 ? null : 4"
                            class="w-full p-5 sm:p-6 text-left flex items-center justify-between gap-4 focus:outline-none">
                            <span class="font-title-lg text-title-lg text-on-surface font-semibold">Apakah pengiriman mahar aman ke luar kota atau luar pulau?</span>
                            <span class="material-symbols-outlined text-primary text-xl transition-transform" :class="activeAccordion === 4 ? 'rotate-180' : ''">expand_more</span>
                        </button>
                        <div x-show="activeAccordion === 4" x-collapse class="px-5 sm:px-6 pb-6 text-on-surface-variant font-body-md text-body-md border-t border-outline-variant/20 pt-4 leading-relaxed">
                            Sangat aman. Untuk pengiriman ke luar kota dan luar pulau Jawa, setiap karya mahar vitrine diproteksi menggunakan <em>triple-layer bubble wrap</em> tebal dan <strong>peti kayu solid bergaransi</strong> yang dikerjakan khusus oleh tim ekspedisi studio kami.
                        </div>
                    </div>

                    <!-- Q5 -->
                    <div class="rounded-2xl bg-surface-container-lowest border border-outline-variant/30 overflow-hidden shadow-xs">
                        <button type="button" @click="activeAccordion = activeAccordion === 5 ? null : 5"
                            class="w-full p-5 sm:p-6 text-left flex items-center justify-between gap-4 focus:outline-none">
                            <span class="font-title-lg text-title-lg text-on-surface font-semibold">Metode pembayaran apa saja yang didukung?</span>
                            <span class="material-symbols-outlined text-primary text-xl transition-transform" :class="activeAccordion === 5 ? 'rotate-180' : ''">expand_more</span>
                        </button>
                        <div x-show="activeAccordion === 5" x-collapse class="px-5 sm:px-6 pb-6 text-on-surface-variant font-body-md text-body-md border-t border-outline-variant/20 pt-4 leading-relaxed">
                            Cattaleya menggunakan payment gateway resmi <strong>Midtrans Snap</strong> yang mendukung Transfer Virtual Account (BCA, Mandiri Livin, BNI, BRI, Permata), QRIS Semua Bank &amp; E-Wallet (GoPay, ShopeePay, OVO, Dana), serta Kartu Kredit Visa/Mastercard dengan enkripsi keamanan perbankan 256-bit.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Direct Support Banner -->
            <div class="mt-16 p-8 sm:p-10 rounded-2xl bg-gradient-to-r from-surface-container-high via-surface-container to-secondary-container/50 border border-outline-variant/30 shadow-md flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="space-y-1 text-center md:text-left">
                    <h3 class="font-headline-md text-xl sm:text-2xl text-on-surface font-semibold">
                        Masih Memiliki Pertanyaan Lain?
                    </h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        Tim konsultan Cattaleya siaga setiap hari Senin s/d Sabtu pukul 09:00 - 18:00 WIB untuk membantu Anda.
                    </p>
                </div>
                <a href="https://wa.me/6282210008899" target="_blank" rel="noopener noreferrer"
                    class="px-7 py-3.5 rounded-xl bg-primary text-on-primary font-title-md text-title-md hover:bg-primary-container transition-colors shadow-md flex items-center gap-2 shrink-0">
                    <span class="material-symbols-outlined text-xl">chat</span>
                    <span>Chat WhatsApp +62 822-1000-8899</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

