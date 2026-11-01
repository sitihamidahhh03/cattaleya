<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cattaleya</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('images/logo.jpg') }}">

    <!-- Google Fonts & Material Symbols -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500;1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
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
                        "primary-fixed": "#ffddb4",
                        "primary": "#775625",
                        "surface": "#fff8f5",
                        "surface-container": "#f7ece5",
                        "secondary": "#6e5b4a",
                        "on-surface-variant": "#4f453a",
                        "on-primary": "#ffffff",
                        "surface-container-lowest": "#ffffff",
                        "primary-container": "#936e3b"
                    },
                    fontFamily: {
                        "headline-md": ["Playfair Display", "serif"],
                        "label-sm": ["Plus Jakarta Sans", "sans-serif"],
                        "label-md": ["Plus Jakarta Sans", "sans-serif"],
                        "body-md": ["Plus Jakarta Sans", "sans-serif"]
                    },
                    fontSize: {
                        "headline-md": ["20px", { "lineHeight": "28px", "fontWeight": "500" }],
                        "label-sm": ["11px", { "lineHeight": "14px", "letterSpacing": "0.08em", "fontWeight": "600" }],
                        "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.03em", "fontWeight": "500" }]
                    }
                }
            }
        };
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-surface font-body-md text-on-surface antialiased pt-28">
    <div class="max-w-7xl mx-auto px-6 mb-8 text-center">
        <span class="inline-block px-3 py-1 bg-surface-container rounded-full text-xs text-primary font-semibold uppercase tracking-wider mb-2">Halaman Terpisah: Header</span>
        <h1 class="text-2xl font-serif text-primary">Preview Komponen Header</h1>
        <p class="text-on-surface-variant text-sm mt-1">File sumber: <code>resources/views/partials/header.blade.php</code></p>
        <a href="{{ url('/') }}" class="inline-block mt-4 px-4 py-2 bg-primary text-white rounded-lg text-sm hover:bg-primary-container transition-colors">← Kembali ke Beranda Utama</a>
    </div>

    <!-- Header Component -->
    @include('partials.header')
</body>
</html>
