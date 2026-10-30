<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="web_standard" name="shell-type">
    <title>Gateway Pembayaran Midtrans Snap — Cattaleya Atelier</title>

    <!-- Google Fonts Preconnect -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;1,500;1,600&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@100..900&amp;family=Plus+Jakarta+Sans:wght@100..900&amp;display=swap" rel="stylesheet">

    <style>
        @layer base {
            html, body { margin: 0; padding: 0; }
            body { overscroll-behavior: none; }
            main > :first-child { margin-top: 0 !important; }
            main > :last-child { margin-bottom: 0 !important; }
        }
        ::-webkit-scrollbar { display: none; }
    </style>

    <!-- Tailwind CDN & Theme Config -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "outline": "#817568",
                        "surface-container-high": "#f1e6df",
                        "surface-container-highest": "#ebe0d9",
                        "secondary-container": "#f9dec8",
                        "outline-variant": "#d2c4b5",
                        "surface-container-low": "#fdf1ea",
                        "secondary-fixed": "#f9dec8",
                        "on-surface": "#201b17",
                        "on-primary-container": "#fffbff",
                        "error": "#ba1a1a",
                        "primary-fixed": "#ffddb4",
                        "on-tertiary-fixed": "#241a08",
                        "on-secondary-fixed": "#26190c",
                        "inverse-surface": "#352f2b",
                        "primary-fixed-dim": "#ecbf84",
                        "inverse-on-surface": "#faefe8",
                        "on-tertiary-fixed-variant": "#52452f",
                        "tertiary-container": "#827259",
                        "on-secondary-fixed-variant": "#554334",
                        "primary": "#775625",
                        "surface": "#fff8f5",
                        "inverse-primary": "#ecbf84",
                        "surface-container": "#f7ece5",
                        "on-tertiary": "#ffffff",
                        "background": "#fff8f5",
                        "surface-variant": "#ebe0d9",
                        "surface-tint": "#7a5827",
                        "surface-dim": "#e3d8d1",
                        "on-primary-fixed": "#291800",
                        "primary-container": "#936e3b",
                        "on-primary-fixed-variant": "#5f4112",
                        "tertiary": "#685a43",
                        "on-error-container": "#93000a",
                        "on-secondary": "#ffffff",
                        "on-tertiary-container": "#fffbff",
                        "tertiary-fixed": "#f4e0c2",
                        "secondary": "#6e5b4a",
                        "on-surface-variant": "#4f453a",
                        "surface-bright": "#fff8f5",
                        "on-error": "#ffffff",
                        "tertiary-fixed-dim": "#d7c4a7",
                        "on-primary": "#ffffff",
                        "surface-container-lowest": "#ffffff",
                        "secondary-fixed-dim": "#dbc2ad",
                        "error-container": "#ffdad6",
                        "on-secondary-container": "#74614f",
                        "on-background": "#201b17"
                    },
                    borderRadius: {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    spacing: {
                        "margin": "2rem",
                        "space-lg": "1.5rem",
                        "space-sm": "0.5rem",
                        "gutter": "1.5rem",
                        "space-md": "1rem",
                        "space-xs": "0.25rem",
                        "space-xl": "2.25rem"
                    },
                    fontFamily: {
                        "headline-lg": ["Playfair Display", "serif"],
                        "headline-md": ["Playfair Display", "serif"],
                        "label-sm": ["Plus Jakarta Sans", "sans-serif"],
                        "body-lg": ["Plus Jakarta Sans", "sans-serif"],
                        "display-lg-mobile": ["Playfair Display", "serif"],
                        "body-md": ["Plus Jakarta Sans", "sans-serif"],
                        "metric-display": ["Playfair Display", "serif"],
                        "title-lg": ["Plus Jakarta Sans", "sans-serif"],
                        "headline-lg-mobile": ["Playfair Display", "serif"],
                        "display-lg": ["Playfair Display", "serif"],
                        "label-md": ["Plus Jakarta Sans", "sans-serif"],
                        "title-md": ["Plus Jakarta Sans", "sans-serif"]
                    },
                    fontSize: {
                        "headline-lg": ["28px", { "lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "500" }],
                        "headline-md": ["20px", { "lineHeight": "28px", "letterSpacing": "0em", "fontWeight": "500" }],
                        "label-sm": ["11px", { "lineHeight": "14px", "letterSpacing": "0.08em", "fontWeight": "600" }],
                        "body-lg": ["15px", { "lineHeight": "24px", "letterSpacing": "0em", "fontWeight": "400" }],
                        "display-lg-mobile": ["30px", { "lineHeight": "38px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "body-md": ["13px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "400" }],
                        "metric-display": ["32px", { "lineHeight": "38px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "title-lg": ["17px", { "lineHeight": "24px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "headline-lg-mobile": ["22px", { "lineHeight": "30px", "letterSpacing": "0em", "fontWeight": "500" }],
                        "display-lg": ["40px", { "lineHeight": "48px", "letterSpacing": "-0.02em", "fontWeight": "600" }],
                        "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.03em", "fontWeight": "500" }],
                        "title-md": ["15px", { "lineHeight": "22px", "letterSpacing": "0em", "fontWeight": "600" }]
                    }
                }
            }
        };
    </script>
</head>
<body class="bg-surface font-body-md text-on-surface antialiased selection:bg-secondary-container selection:text-primary">

    <!-- Reusable Customer Header -->
    @include('partials.header')

    <main class="w-full pt-20 bg-surface min-h-screen">
        <div class="flex flex-col w-full">
            <!-- Subtle decorative ambient background glow -->
            <div class="relative w-full overflow-hidden">
                <div class="absolute -top-32 -right-32 w-96 h-96 bg-primary-fixed/20 rounded-full blur-3xl pointer-events-none"></div>
                <div class="absolute top-96 -left-20 w-80 h-80 bg-secondary-container/30 rounded-full blur-3xl pointer-events-none"></div>

                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 py-10">

                    <!-- Breadcrumbs & Status Banner -->
                    <div class="flex flex-wrap items-center justify-between gap-4 mb-8">
                        <div class="flex items-center gap-2 font-label-md text-label-md text-on-surface-variant">
                            <a href="{{ route('pesan-mahar') }}" class="hover:text-primary transition-colors">Pemesanan</a>
                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                            <span class="hover:text-primary transition-colors">Konfirmasi Invoice</span>
                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                            <span class="text-primary font-semibold">Gateway Pembayaran</span>
                        </div>
                        <div class="flex items-center gap-2 bg-surface-container px-3.5 py-1.5 rounded-full shadow-xs border border-outline-variant/30">
                            <span class="w-2 h-2 rounded-full bg-primary animate-ping"></span>
                            <span class="font-label-sm text-label-sm uppercase tracking-wider text-primary font-semibold">Midtrans Secured Gateway</span>
                        </div>
                    </div>

                    <!-- Main Status Headline Card -->
                    <div class="bg-surface-container-low rounded-xl p-6 sm:p-8 mb-10 shadow-xs relative overflow-hidden border border-outline-variant/30">
                        <div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-6">
                            <div class="space-y-2">
                                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-secondary-container text-on-secondary-fixed-variant font-label-sm text-label-sm uppercase tracking-wider">
                                    <span class="material-symbols-outlined text-base text-primary">hourglass_top</span>
                                    <span class="font-semibold">Menunggu Pembayaran (Pending Settlement)</span>
                                </div>
                                <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Selesaikan Uang Muka Pesanan Anda</h1>
                                <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl leading-relaxed">
                                    Slot tanggal sewa kotak dan mahar Anda telah dikunci sementara. Mohon selesaikan pelunasan deposit sesuai batas waktu yang tertera di samping.
                                </p>
                            </div>

                            <!-- Countdown Counter Capsule -->
                            <div class="bg-surface-container-lowest p-5 rounded-xl shadow-md min-w-[260px] flex flex-col items-center sm:items-start border border-outline-variant/20">
                                <span class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant flex items-center gap-1.5 font-semibold">
                                    <span class="material-symbols-outlined text-base text-primary">alarm</span>
                                    Batas Waktu Pembayaran
                                </span>
                                <div class="flex items-baseline gap-2 mt-2" id="countdown-timer">
                                    <span class="font-metric-display text-metric-display text-primary font-bold" id="timer-hours">23</span>
                                    <span class="font-label-md text-label-md text-on-surface-variant font-medium">Jam</span>
                                    <span class="font-metric-display text-metric-display text-primary font-bold" id="timer-minutes">57</span>
                                    <span class="font-label-md text-label-md text-on-surface-variant font-medium">Mnt</span>
                                    <span class="font-metric-display text-metric-display text-primary font-bold" id="timer-seconds">20</span>
                                    <span class="font-label-md text-label-md text-on-surface-variant font-medium">Dtk</span>
                                </div>
                                <span class="font-label-sm text-label-sm text-secondary mt-1">Jatuh Tempo: 23 Oktober 2025 • 15:45 WIB</span>
                            </div>
                        </div>
                    </div>

                    <!-- Grid: Left (Invoice Dossier) & Right (Midtrans Snap Simulator) -->
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

                        <!-- LEFT COLUMN: Complete Order Summary (5 cols) -->
                        <div class="lg:col-span-5 space-y-6">
                            <!-- Order Summary Card -->
                            <div class="bg-surface-container-lowest rounded-xl p-6 sm:p-8 shadow-xs border border-outline-variant/30">
                                <div class="flex items-center justify-between pb-5 border-b border-surface-container-high/60">
                                    <div class="flex flex-col">
                                        <span class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant font-semibold">Nomor Invoice</span>
                                        <span class="font-headline-md text-headline-md text-primary tracking-tight font-semibold mt-0.5">CTL-2025-090</span>
                                    </div>
                                    <div class="text-right">
                                        <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Tanggal Terbit</span>
                                        <p class="font-body-md text-body-md text-on-surface font-medium">22 Okt 2025</p>
                                    </div>
                                </div>

                                <!-- Customer Details Block -->
                                <div class="py-5 space-y-4">
                                    <div class="flex items-start gap-3">
                                        <span class="material-symbols-outlined text-primary text-xl mt-0.5">person</span>
                                        <div class="min-w-0">
                                            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider block font-semibold">Pelanggan</span>
                                            <p class="font-title-md text-title-md text-on-surface truncate font-medium">Anindya Larasati</p>
                                            <p class="font-body-md text-body-md text-secondary">+62 812-9842-1102</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <span class="material-symbols-outlined text-primary text-xl mt-0.5">event</span>
                                        <div>
                                            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider block font-semibold">Hari Bahagia (Acara)</span>
                                            <p class="font-title-md text-title-md text-on-surface font-medium">Rabu, 22 Oktober 2025</p>
                                            <span class="font-label-sm text-label-sm text-secondary">Pengambilan H-2 (20 Okt 2025)</span>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <span class="material-symbols-outlined text-primary text-xl mt-0.5">inventory_2</span>
                                        <div>
                                            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider block font-semibold">Rincian Paket Terpilih</span>
                                            <p class="font-title-md text-title-md text-on-surface leading-snug font-medium">Paket Sewa 8 Kotak Luxury Crystal &amp; Mahar Vitrine Hexagon</p>
                                            <p class="font-body-md text-body-md text-on-surface-variant mt-1 leading-relaxed">Termasuk hias bunga mawar satin champagne, bantalan beludru nude, dan vitrine kaca tempered grafir nama.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Visual Snapshot of Selected Dowry Item -->
                                <div class="relative rounded-xl overflow-hidden my-4 shadow-inner">
                                    <img class="w-full h-44 object-cover" alt="Seserahan Luxury Crystal & Mahar Bespoke Hexagon" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD6n1RSiUq2iOtwGt216c14Dx1_C6IFpofLSCeD2XngwyRkmIu7CXu2OmeLWLzlV6bx4ix_auOVyHWMrihLVKpYCZgOOTk76XN9XTl-ARS-9WbGmEq5XEqzRTHlHDHeabTh-qGAdTnYzrKDgyDI1KYBSGLJe4BHTOic3Y25_MV9N52TVSucp-xOPRzfHntAkJe4kzIZrP4HG5MJbgvmFrB05_0z-RJMXSRsLUjlnS7CAhaHYlYGCQnb">
                                    <div class="absolute bottom-0 inset-x-0 bg-gradient-to-t from-on-surface/85 via-on-surface/40 to-transparent p-3 text-on-primary">
                                        <span class="font-label-sm text-label-sm uppercase tracking-widest text-primary-fixed block font-semibold">Koleksi Royal Alabaster</span>
                                        <span class="font-body-md text-body-md text-surface font-medium">8 Trays + 1 Bespoke Hexagon Vitrine</span>
                                    </div>
                                </div>

                                <!-- Price Breakdown Ledger -->
                                <div class="pt-4 border-t border-surface-container-high/60 space-y-3 font-body-md text-body-md">
                                    <div class="flex justify-between text-on-surface-variant">
                                        <span>Total Nilai Pesanan</span>
                                        <span class="font-medium text-on-surface">Rp 2.450.000</span>
                                    </div>
                                    <div class="flex justify-between text-on-surface-variant">
                                        <span>Skema Pembayaran</span>
                                        <span class="text-primary font-medium">Uang Muka 50% (DP)</span>
                                    </div>
                                    <div class="flex justify-between items-center py-2.5 px-3.5 rounded-xl bg-surface-container-low border border-outline-variant/30">
                                        <div>
                                            <span class="font-title-md text-title-md text-on-surface block font-semibold">Nominal DP Harus Dibayar</span>
                                            <span class="font-label-sm text-label-sm text-secondary">Jatuh tempo saat checkout</span>
                                        </div>
                                        <span class="font-title-lg text-title-lg text-primary font-bold">Rp 1.225.000</span>
                                    </div>
                                    <div class="flex justify-between text-on-surface-variant text-body-md pt-1">
                                        <span>Pelunasan Sisa 50% (H-3 Acara)</span>
                                        <span class="text-secondary font-medium">Rp 1.225.000</span>
                                    </div>
                                </div>

                                <!-- Security Badge -->
                                <div class="mt-6 pt-4 border-t border-surface-container-high/40 flex items-center justify-between text-on-surface-variant">
                                    <div class="flex items-center gap-1.5 font-label-sm text-label-sm">
                                        <span class="material-symbols-outlined text-primary text-base">lock</span>
                                        <span>Enkripsi 256-bit SSL Terjamin</span>
                                    </div>
                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Midtrans Verified</span>
                                </div>
                            </div>

                            <!-- WhatsApp Gateway Automated Notice Card -->
                            <div class="bg-surface-container-low rounded-xl p-5 shadow-xs space-y-3 border border-outline-variant/30">
                                <div class="flex items-center gap-2.5 text-primary">
                                    <span class="material-symbols-outlined text-2xl text-primary">mark_chat_unread</span>
                                    <h2 class="font-title-md text-title-md font-semibold text-on-surface">Integrasi WhatsApp Otomatis</h2>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                    Setelah pembayaran terverifikasi otomatis oleh Midtrans, sistem kami akan langsung mengirimkan resi pembayaran digital, bukti kunci slot baki, dan tautan cek pesanan ke WhatsApp Anda (<span class="font-semibold text-on-surface">+62 812-9842-1102</span>).
                                </p>
                                <div class="flex items-center gap-2 pt-1 font-label-sm text-label-sm text-secondary font-medium">
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                                    <span>Konfirmasi real-time tanpa upload manual</span>
                                </div>
                            </div>
                        </div>

                        <!-- RIGHT COLUMN: Midtrans Snap Interactive Simulator (7 cols) -->
                        <div class="lg:col-span-7 space-y-6">
                            <div class="bg-surface-container-lowest rounded-xl shadow-xs overflow-hidden border border-outline-variant/30">
                                <!-- Midtrans Header Bar -->
                                <div class="bg-surface-container px-6 py-4 flex items-center justify-between flex-wrap gap-4 border-b border-surface-container-high/60">
                                    <div class="flex items-center gap-3">
                                        <div class="w-9 h-9 rounded-xl bg-primary flex items-center justify-center text-on-primary shadow-xs">
                                            <span class="material-symbols-outlined text-xl">payments</span>
                                        </div>
                                        <div>
                                            <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Gerbang Pembayaran Resmi</span>
                                            <div class="flex items-center gap-2">
                                                <span class="font-title-md text-title-md text-on-surface font-semibold">Midtrans Snap Checkout</span>
                                                <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-surface-container-lowest font-label-sm text-label-sm text-primary shadow-xs">
                                                    <span class="material-symbols-outlined text-xs">verified</span> Live Gateway
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Pill Indicator for DP -->
                                    <div class="text-right">
                                        <span class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant block font-semibold">Tagihan Saat Ini</span>
                                        <span class="font-headline-md text-headline-md text-primary font-bold">Rp 1.225.000</span>
                                    </div>
                                </div>

                                <!-- Tab Selection for Payment Methods -->
                                <div class="p-6 sm:p-8">
                                    <span class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant block mb-3 font-semibold">Pilih Kanal Pembayaran</span>
                                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-6">
                                        <!-- Method 1: BCA VA -->
                                        <button class="payment-tab text-left p-3.5 rounded-xl bg-surface-container-low transition-all duration-200 shadow-xs flex flex-col justify-between h-24 border border-outline-variant/40 ring-2 ring-primary cursor-pointer" id="btn-tab-bca" onclick="switchMethod('bca')" type="button">
                                            <div class="flex items-center justify-between w-full">
                                                <span class="font-title-md text-title-md font-semibold text-on-surface">BCA VA</span>
                                                <span class="material-symbols-outlined text-primary text-xl check-icon">check_circle</span>
                                            </div>
                                            <span class="font-label-sm text-label-sm text-on-surface-variant">Virtual Account Otomatis</span>
                                        </button>

                                        <!-- Method 2: QRIS Instant -->
                                        <button class="payment-tab text-left p-3.5 rounded-xl bg-surface-container transition-all duration-200 hover:bg-surface-container-low flex flex-col justify-between h-24 border border-transparent cursor-pointer" id="btn-tab-qris" onclick="switchMethod('qris')" type="button">
                                            <div class="flex items-center justify-between w-full">
                                                <span class="font-title-md text-title-md font-semibold text-on-surface">QRIS Instant</span>
                                                <span class="material-symbols-outlined text-on-surface-variant/40 text-xl check-icon">radio_button_unchecked</span>
                                            </div>
                                            <span class="font-label-sm text-label-sm text-on-surface-variant">GoPay, OVO, Shopee, BCA</span>
                                        </button>

                                        <!-- Method 3: Mandiri Bill -->
                                        <button class="payment-tab text-left p-3.5 rounded-xl bg-surface-container transition-all duration-200 hover:bg-surface-container-low flex flex-col justify-between h-24 border border-transparent cursor-pointer" id="btn-tab-mandiri" onclick="switchMethod('mandiri')" type="button">
                                            <div class="flex items-center justify-between w-full">
                                                <span class="font-title-md text-title-md font-semibold text-on-surface">Mandiri Bill</span>
                                                <span class="material-symbols-outlined text-on-surface-variant/40 text-xl check-icon">radio_button_unchecked</span>
                                            </div>
                                            <span class="font-label-sm text-label-sm text-on-surface-variant">Livin' &amp; ATM Mandiri</span>
                                        </button>
                                    </div>

                                    <!-- VIEW 1: BCA VIRTUAL ACCOUNT -->
                                    <div class="payment-panel space-y-6" id="panel-bca">
                                        <div class="bg-surface-container-low p-5 rounded-xl space-y-4 border border-outline-variant/30">
                                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                                                <div>
                                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Nomor Virtual Account BCA</span>
                                                    <div class="font-metric-display text-2xl sm:text-headline-lg tracking-wider text-on-surface mt-1 select-all font-semibold" id="va-number">
                                                        80777 081298421102
                                                    </div>
                                                </div>
                                                <button class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-primary text-on-primary font-label-md text-label-md shadow-xs hover:bg-primary-container transition-all self-start sm:self-center active:scale-95 cursor-pointer" onclick="copyVA()" type="button">
                                                    <span class="material-symbols-outlined text-lg" id="copy-icon">content_copy</span>
                                                    <span id="copy-text">Salin Nomor VA</span>
                                                </button>
                                            </div>
                                            <div class="pt-3 border-t border-surface-container-high/60 grid grid-cols-2 gap-4 text-body-md font-body-md">
                                                <div>
                                                    <span class="text-on-surface-variant text-label-sm block">Nama Akun VA:</span>
                                                    <span class="font-medium text-on-surface">Cattaleya / Anindya L.</span>
                                                </div>
                                                <div>
                                                    <span class="text-on-surface-variant text-label-sm block">Total Tagihan:</span>
                                                    <span class="font-medium text-primary font-bold">Rp 1.225.000</span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Accordion Instructions BCA -->
                                        <div class="space-y-3">
                                            <h3 class="font-title-md text-title-md text-on-surface font-semibold">Panduan Transfer BCA Virtual Account:</h3>
                                            <div class="space-y-2">
                                                <details class="group bg-surface-container rounded-lg p-3.5 cursor-pointer border border-outline-variant/20" open>
                                                    <summary class="flex justify-between items-center font-label-md text-label-md text-on-surface font-semibold select-none list-none">
                                                        <span>1. Pembayaran via BCA Mobile (m-BCA)</span>
                                                        <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                                                    </summary>
                                                    <div class="pt-3 font-body-md text-body-md text-on-surface-variant space-y-1.5 pl-2 leading-relaxed">
                                                        <p>1. Buka aplikasi m-BCA dan masukkan Kode Akses.</p>
                                                        <p>2. Pilih menu <strong>m-Transfer</strong> &gt; <strong>BCA Virtual Account</strong>.</p>
                                                        <p>3. Masukkan nomor VA: <span class="text-primary font-semibold">80777081298421102</span> lalu klik Send.</p>
                                                        <p>4. Pastikan nama penerima adalah <strong>Cattaleya - Anindya</strong> dan nominal adalah <strong>Rp 1.225.000</strong>.</p>
                                                        <p>5. Masukkan PIN m-BCA Anda. Transaksi selesai.</p>
                                                    </div>
                                                </details>

                                                <details class="group bg-surface-container rounded-lg p-3.5 cursor-pointer border border-outline-variant/20">
                                                    <summary class="flex justify-between items-center font-label-md text-label-md text-on-surface font-semibold select-none list-none">
                                                        <span>2. Pembayaran via myBCA / KlikBCA</span>
                                                        <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                                                    </summary>
                                                    <div class="pt-3 font-body-md text-body-md text-on-surface-variant space-y-1.5 pl-2 leading-relaxed">
                                                        <p>1. Login ke myBCA atau KlikBCA Individu.</p>
                                                        <p>2. Pilih <strong>Transfer Dana</strong> &gt; <strong>Transfer ke BCA Virtual Account</strong>.</p>
                                                        <p>3. Masukkan nomor <strong>80777081298421102</strong> lalu konfirmasi dengan KeyBCA token.</p>
                                                    </div>
                                                </details>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- VIEW 2: QRIS INSTANT (Hidden by default) -->
                                    <div class="payment-panel hidden space-y-6" id="panel-qris">
                                        <div class="bg-surface-container-low p-6 rounded-xl flex flex-col items-center text-center space-y-4 border border-outline-variant/30">
                                            <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Pindai Kode QR Melalui Aplikasi Pembayaran Apapun</span>
                                            <!-- Interactive QR Code Visual Component -->
                                            <div class="p-4 bg-surface-container-lowest rounded-xl shadow-md flex flex-col items-center border border-outline-variant/30">
                                                <svg class="w-56 h-56 text-on-surface" fill="none" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                                    <!-- Corner Square Top-Left -->
                                                    <rect fill="currentColor" height="50" rx="4" width="50" x="10" y="10"></rect>
                                                    <rect fill="#FAF7F2" height="34" rx="2" width="34" x="18" y="18"></rect>
                                                    <rect fill="currentColor" height="18" width="18" x="26" y="26"></rect>
                                                    <!-- Corner Square Top-Right -->
                                                    <rect fill="currentColor" height="50" rx="4" width="50" x="140" y="10"></rect>
                                                    <rect fill="#FAF7F2" height="34" rx="2" width="34" x="148" y="18"></rect>
                                                    <rect fill="currentColor" height="18" width="18" x="156" y="26"></rect>
                                                    <!-- Corner Square Bottom-Left -->
                                                    <rect fill="currentColor" height="50" rx="4" width="50" x="10" y="140"></rect>
                                                    <rect fill="#FAF7F2" height="34" rx="2" width="34" x="18" y="148"></rect>
                                                    <rect fill="currentColor" height="18" width="18" x="26" y="156"></rect>
                                                    <!-- Data Pattern Mockup -->
                                                    <rect fill="currentColor" height="10" width="10" x="70" y="15"></rect>
                                                    <rect fill="currentColor" height="20" width="10" x="90" y="15"></rect>
                                                    <rect fill="currentColor" height="10" width="15" x="110" y="20"></rect>
                                                    <rect fill="currentColor" height="10" width="20" x="70" y="35"></rect>
                                                    <rect fill="currentColor" height="15" width="10" x="100" y="40"></rect>
                                                    <rect fill="currentColor" height="10" width="10" x="120" y="40"></rect>
                                                    <!-- Mid region -->
                                                    <rect fill="currentColor" height="10" width="15" x="15" y="70"></rect>
                                                    <rect fill="currentColor" height="15" width="15" x="40" y="75"></rect>
                                                    <rect fill="currentColor" height="10" width="25" x="15" y="95"></rect>
                                                    <rect fill="currentColor" height="15" width="10" x="15" y="115"></rect>
                                                    <rect fill="currentColor" height="15" width="15" x="40" y="110"></rect>
                                                    <rect fill="#775625" fill-opacity="0.1" height="60" rx="6" width="70" x="65" y="70"></rect>
                                                    <!-- Center Logo Badge -->
                                                    <circle cx="100" cy="100" fill="#775625" r="16"></circle>
                                                    <path d="M96 95L100 105L104 95" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                    <!-- Bottom Right Grid Data -->
                                                    <rect fill="currentColor" height="15" width="15" x="70" y="140"></rect>
                                                    <rect fill="currentColor" height="25" width="15" x="95" y="145"></rect>
                                                    <rect fill="currentColor" height="10" width="25" x="120" y="140"></rect>
                                                    <rect fill="currentColor" height="15" width="15" x="155" y="140"></rect>
                                                    <rect fill="currentColor" height="10" width="20" x="150" y="165"></rect>
                                                    <rect fill="currentColor" height="20" width="10" x="180" y="160"></rect>
                                                    <rect fill="currentColor" height="15" width="15" x="70" y="175"></rect>
                                                    <rect fill="currentColor" height="20" width="20" x="120" y="165"></rect>
                                                </svg>
                                                <span class="font-label-sm text-label-sm text-on-surface font-semibold mt-2">NMID: ID102938472910</span>
                                            </div>
                                            <div class="space-y-1">
                                                <p class="font-title-md text-title-md text-on-surface">Nominal QRIS: <span class="text-primary font-bold">Rp 1.225.000</span></p>
                                                <p class="font-body-md text-body-md text-on-surface-variant max-w-sm">Mendukung GoPay, OVO, ShopeePay, DANA, BCA Mobile, Livin Mandiri, dan seluruh aplikasi perbankan berlisensi QRIS.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- VIEW 3: MANDIRI BILL PAYMENT (Hidden by default) -->
                                    <div class="payment-panel hidden space-y-6" id="panel-mandiri">
                                        <div class="bg-surface-container-low p-5 rounded-xl space-y-4 border border-outline-variant/30">
                                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                                <div class="bg-surface-container-lowest p-3.5 rounded-lg shadow-xs border border-outline-variant/20">
                                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Kode Perusahaan / Biller</span>
                                                    <p class="font-headline-md text-headline-md font-bold text-on-surface mt-1">70012</p>
                                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Midtrans Cattaleya</span>
                                                </div>
                                                <div class="bg-surface-container-lowest p-3.5 rounded-lg shadow-xs border border-outline-variant/20">
                                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Nomor Pelanggan / Virtual Code</span>
                                                    <p class="font-headline-md text-headline-md font-bold text-on-surface mt-1">081298421102</p>
                                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Nomor Registrasi Akun</span>
                                                </div>
                                            </div>
                                            <div class="pt-3 border-t border-surface-container-high/60">
                                                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                                    Pada Livin' by Mandiri: Pilih menu <strong>Bayar</strong> &gt; cari penyedia jasa <strong>Midtrans</strong> (70012), lalu input nomor tagihan <strong>081298421102</strong>.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Action Buttons Row -->
                                    <div class="pt-8 border-t border-surface-container-high/60 flex flex-col sm:flex-row items-center gap-4">
                                        <button class="w-full sm:flex-1 py-3 px-6 rounded-xl bg-primary text-on-primary font-title-md text-title-md font-semibold hover:bg-primary-container transition-all shadow-md flex items-center justify-center gap-2 cursor-pointer" id="btn-check-status" onclick="checkStatusSimulation()" type="button">
                                            <span class="material-symbols-outlined text-xl" id="status-icon">sync</span>
                                            <span id="status-text">Cek Status Pembayaran Sekarang</span>
                                        </button>
                                        <button class="w-full sm:w-auto py-3 px-6 rounded-xl bg-surface text-secondary hover:bg-surface-container-high hover:text-on-surface transition-all font-title-md text-title-md font-semibold shadow-xs border border-outline-variant/40 flex items-center justify-center gap-2 cursor-pointer" onclick="downloadInvoiceMock()" type="button">
                                            <span class="material-symbols-outlined text-xl">download</span>
                                            <span>Simpan Bukti Invoice (PDF)</span>
                                        </button>
                                    </div>

                                    <!-- Interactive Feedback Toast (Hidden by default) -->
                                    <div class="hidden mt-4 p-4 rounded-xl bg-secondary-container text-on-secondary-fixed font-body-md text-body-md flex items-center justify-between transition-all" id="status-toast">
                                        <div class="flex items-center gap-2">
                                            <span class="material-symbols-outlined text-primary">info</span>
                                            <span id="toast-message">Menghubungkan ke server Midtrans... Pembayaran belum terdeteksi. Silakan lakukan transfer sebelum batas waktu.</span>
                                        </div>
                                        <button class="text-on-secondary-fixed hover:opacity-75 cursor-pointer" onclick="document.getElementById('status-toast').classList.add('hidden')" type="button">
                                            <span class="material-symbols-outlined text-lg">close</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Studio Trust & Guarantee Banner -->
                            <div class="bg-surface-container-low rounded-xl p-6 shadow-xs flex flex-col sm:flex-row items-center gap-5 border border-outline-variant/30">
                                <div class="w-14 h-14 rounded-full bg-surface-container-highest flex-shrink-0 flex items-center justify-center text-primary shadow-xs">
                                    <span class="material-symbols-outlined text-2xl">verified_user</span>
                                </div>
                                <div class="space-y-1 text-center sm:text-left">
                                    <h4 class="font-title-md text-title-md text-on-surface font-semibold">Garansi Slot &amp; Baki Bebas Cacat</h4>
                                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                        Setiap kotak dan tray akrilik disterilisasi dan dipoles sebelum diserahkan. Dana Anda terlindungi penuh dengan polis garansi pemesanan Cattaleya Atelier.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Additional Bottom Quick Help Assistance -->
                    <div class="mt-14 pt-8 border-t border-surface-container-high/60 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary text-2xl">help_outline</span>
                            <div>
                                <p class="font-title-md text-title-md text-on-surface font-semibold">Mengalami kendala pada pembayaran?</p>
                                <p class="font-body-md text-body-md text-on-surface-variant">Tim Customer Concierge kami siap memverifikasi bukti transfer Anda secara langsung.</p>
                            </div>
                        </div>
                        <a class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-surface-container-highest text-primary font-label-md text-label-md hover:bg-secondary-container transition-colors shadow-xs border border-outline-variant/30" href="https://wa.me/6282210008899?text=Halo%20Cattaleya,%20saya%20ingin%20konfirmasi%20pembayaran%20untuk%20invoice%20CTL-2025-090" rel="noopener noreferrer" target="_blank">
                            <span class="material-symbols-outlined text-lg">chat</span>
                            <span>Bantuan WhatsApp Admin (+62 822-1000-8899)</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <!-- Reusable Customer Footer -->
    @include('partials.footer')

    <script>
        // Simple Countdown Timer Simulation
        (function initTimer() {
            let totalSeconds = 23 * 3600 + 57 * 60 + 20;
            const hoursEl = document.getElementById('timer-hours');
            const minsEl = document.getElementById('timer-minutes');
            const secsEl = document.getElementById('timer-seconds');

            if (!hoursEl || !minsEl || !secsEl) return;

            setInterval(() => {
                if (totalSeconds <= 0) return;
                totalSeconds--;
                const h = Math.floor(totalSeconds / 3600);
                const m = Math.floor((totalSeconds % 3600) / 60);
                const s = totalSeconds % 60;

                hoursEl.textContent = String(h).padStart(2, '0');
                minsEl.textContent = String(m).padStart(2, '0');
                secsEl.textContent = String(s).padStart(2, '0');
            }, 1000);
        })();

        // Payment Method Tab Switcher
        function switchMethod(method) {
            const panels = {
                bca: document.getElementById('panel-bca'),
                qris: document.getElementById('panel-qris'),
                mandiri: document.getElementById('panel-mandiri')
            };

            const tabs = {
                bca: document.getElementById('btn-tab-bca'),
                qris: document.getElementById('btn-tab-qris'),
                mandiri: document.getElementById('btn-tab-mandiri')
            };

            Object.keys(panels).forEach(key => {
                if (panels[key]) panels[key].classList.add('hidden');
                if (tabs[key]) {
                    tabs[key].classList.remove('bg-surface-container-low', 'shadow-xs', 'ring-2', 'ring-primary', 'border-outline-variant/40');
                    tabs[key].classList.add('bg-surface-container', 'border-transparent');
                    const icon = tabs[key].querySelector('.check-icon');
                    if (icon) {
                        icon.textContent = 'radio_button_unchecked';
                        icon.classList.remove('text-primary');
                        icon.classList.add('text-on-surface-variant/40');
                    }
                }
            });

            if (panels[method]) panels[method].classList.remove('hidden');
            if (tabs[method]) {
                tabs[method].classList.add('bg-surface-container-low', 'shadow-xs', 'ring-2', 'ring-primary', 'border-outline-variant/40');
                tabs[method].classList.remove('bg-surface-container', 'border-transparent');
                const icon = tabs[method].querySelector('.check-icon');
                if (icon) {
                    icon.textContent = 'check_circle';
                    icon.classList.add('text-primary');
                    icon.classList.remove('text-on-surface-variant/40');
                }
            }
        }

        // Copy VA to Clipboard
        function copyVA() {
            const va = "80777081298421102";
            navigator.clipboard.writeText(va).then(() => {
                const copyText = document.getElementById('copy-text');
                const copyIcon = document.getElementById('copy-icon');
                if (copyText && copyIcon) {
                    copyText.textContent = "Tersalin!";
                    copyIcon.textContent = "done";
                    setTimeout(() => {
                        copyText.textContent = "Salin Nomor VA";
                        copyIcon.textContent = "content_copy";
                    }, 2500);
                }
            }).catch(() => {
                alert("Nomor VA: " + va);
            });
        }

        // Check Status Simulation
        function checkStatusSimulation() {
            const icon = document.getElementById('status-icon');
            const text = document.getElementById('status-text');
            const toast = document.getElementById('status-toast');
            const toastMsg = document.getElementById('toast-message');

            if (!icon || !text || !toast) return;

            icon.classList.add('animate-spin');
            text.textContent = "Memeriksa ke Midtrans...";

            setTimeout(() => {
                icon.classList.remove('animate-spin');
                text.textContent = "Cek Status Pembayaran Sekarang";
                toast.classList.remove('hidden');
                toastMsg.textContent = "Status: Menunggu Pembayaran (Pending). Virtual Account aktif, silakan selesaikan pembayaran melalui kanal yang Anda pilih.";
            }, 1200);
        }

        // Mock Invoice Download
        function downloadInvoiceMock() {
            const toast = document.getElementById('status-toast');
            const toastMsg = document.getElementById('toast-message');
            if (toast && toastMsg) {
                toast.classList.remove('hidden');
                toastMsg.textContent = "Mengunduh berkas invoice resmi 'Invoice-Cattaleya-CTL-2025-090.pdf'...";
            }
        }
    </script>
</body>
</html>
