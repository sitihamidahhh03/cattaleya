<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="web_standard" name="shell-type">

    <title>@yield('title', 'Cattaleya')</title>

    <!-- Brand Favicon -->
    <link rel="icon" type="image/jpeg" href="{{ asset('images/logo.jpg') }}">

    <!-- Google Fonts & Material Symbols -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500;1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@100..900&family=Plus+Jakarta+Sans:wght@100..900&display=swap" rel="stylesheet">

    <!-- Base Styles -->
    <style>
        @layer base {
            html, body {
                margin: 0;
                padding: 0;
            }
            body {
                overscroll-behavior: none;
            }
            main > :first-child {
                margin-top: 0 !important;
            }
            main > :last-child {
                margin-bottom: 0 !important;
            }
        }
        ::-webkit-scrollbar {
            display: none;
        }
    </style>

    <!-- Tailwind CSS CDN -->
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
                        "title-lg": ["17px", { "lineHeight": "24px", "letterSpacing": "0.01em", "fontWeight": "600" }],
                        "headline-lg-mobile": ["22px", { "lineHeight": "30px", "letterSpacing": "0em", "fontWeight": "500" }],
                        "display-lg": ["40px", { "lineHeight": "48px", "letterSpacing": "-0.02em", "fontWeight": "600" }],
                        "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.03em", "fontWeight": "500" }],
                        "title-md": ["15px", { "lineHeight": "22px", "letterSpacing": "0em", "fontWeight": "600" }]
                    }
                }
            }
        };
    </script>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @stack('styles')
</head>
<body class="bg-surface font-body-md text-on-surface antialiased selection:bg-secondary-fixed selection:text-primary">

    <!-- Header Partial / Halaman Terpisah -->
    @include('partials.header')

    <!-- Main Content Slot -->
    <main class="w-full pt-20 bg-surface">
        @yield('content')
    </main>

    <!-- Footer Partial / Halaman Terpisah -->
    @include('partials.footer')

    @stack('scripts')
</body>
</html>
