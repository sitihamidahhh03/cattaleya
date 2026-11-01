<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="web_dashboard" name="shell-type">
    <title>@yield('title', 'Dashboard Operasional Admin') — Cattaleya Atelier</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('images/logo.jpg') }}">

    <!-- Google Fonts Preconnect -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">

    <style>
        @layer base {
            html, body { margin: 0; padding: 0; }
            body { overscroll-behavior: none; }
            main > :first-child { margin-top: 0 !important; }
            main > :last-child { margin-bottom: 0 !important; }
        }
        ::-webkit-scrollbar { display: none; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 350, 'GRAD' 0, 'opsz' 22;
        }
    </style>

    <!-- Tailwind CDN & Custom Atelier Admin Theme -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "secondary-fixed-dim": "#dbc2ad",
                        "on-tertiary": "#ffffff",
                        "primary-container": "#936e3b",
                        "surface-container-high": "#f1e6df",
                        "surface-variant": "#ebe0d9",
                        "inverse-primary": "#ecbf84",
                        "tertiary-fixed": "#f4e0c2",
                        "inverse-surface": "#352f2b",
                        "on-error": "#ffffff",
                        "surface-container": "#f7ece5",
                        "secondary": "#6e5b4a",
                        "surface-tint": "#7a5827",
                        "surface-container-highest": "#ebe0d9",
                        "on-primary": "#ffffff",
                        "surface-container-lowest": "#ffffff",
                        "outline-variant": "#d2c4b5",
                        "on-tertiary-container": "#fffbff",
                        "surface-dim": "#e3d8d1",
                        "on-secondary-fixed": "#26190c",
                        "tertiary-fixed-dim": "#d7c4a7",
                        "on-background": "#201b17",
                        "secondary-container": "#f9dec8",
                        "primary-fixed-dim": "#ecbf84",
                        "on-surface-variant": "#4f453a",
                        "surface-container-low": "#fdf1ea",
                        "error-container": "#ffdad6",
                        "on-secondary-container": "#74614f",
                        "background": "#fff8f5",
                        "on-secondary-fixed-variant": "#554334",
                        "outline": "#817568",
                        "on-primary-fixed": "#291800",
                        "error": "#ba1a1a",
                        "on-error-container": "#93000a",
                        "on-secondary": "#ffffff",
                        "on-primary-container": "#fffbff",
                        "tertiary": "#685a43",
                        "on-surface": "#201b17",
                        "on-tertiary-fixed": "#241a08",
                        "primary-fixed": "#ffddb4",
                        "surface": "#fff8f5",
                        "tertiary-container": "#827259",
                        "on-primary-fixed-variant": "#5f4112",
                        "inverse-on-surface": "#faefe8",
                        "primary": "#775625",
                        "secondary-fixed": "#f9dec8",
                        "on-tertiary-fixed-variant": "#52452f",
                        "surface-bright": "#fff8f5"
                    },
                    borderRadius: {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    spacing: {
                        "space-md": "1rem",
                        "gutter": "1.5rem",
                        "space-sm": "0.5rem",
                        "space-lg": "1.5rem",
                        "space-xs": "0.25rem",
                        "margin": "2rem",
                        "space-xl": "2.25rem"
                    },
                    fontFamily: {
                        "metric-display": [ "Playfair Display", "serif" ],
                        "headline-md": [ "Playfair Display", "serif" ],
                        "headline-lg-mobile": [ "Playfair Display", "serif" ],
                        "display-lg": [ "Playfair Display", "serif" ],
                        "title-md": [ "Plus Jakarta Sans", "sans-serif" ],
                        "body-md": [ "Plus Jakarta Sans", "sans-serif" ],
                        "headline-lg": [ "Playfair Display", "serif" ],
                        "label-sm": [ "Plus Jakarta Sans", "sans-serif" ],
                        "title-lg": [ "Plus Jakarta Sans", "sans-serif" ],
                        "display-lg-mobile": [ "Playfair Display", "serif" ],
                        "body-lg": [ "Plus Jakarta Sans", "sans-serif" ],
                        "label-md": [ "Plus Jakarta Sans", "sans-serif" ]
                    },
                    fontSize: {
                        "metric-display": [ "32px", { "lineHeight": "38px", "letterSpacing": "-0.01em", "fontWeight": "600" } ],
                        "headline-md": [ "20px", { "lineHeight": "28px", "letterSpacing": "0em", "fontWeight": "500" } ],
                        "headline-lg-mobile": [ "22px", { "lineHeight": "30px", "letterSpacing": "0em", "fontWeight": "500" } ],
                        "display-lg": [ "40px", { "lineHeight": "48px", "letterSpacing": "-0.02em", "fontWeight": "600" } ],
                        "title-md": [ "15px", { "lineHeight": "22px", "letterSpacing": "0em", "fontWeight": "600" } ],
                        "body-md": [ "13px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "400" } ],
                        "headline-lg": [ "28px", { "lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "500" } ],
                        "label-sm": [ "11px", { "lineHeight": "14px", "letterSpacing": "0.08em", "fontWeight": "600" } ],
                        "title-lg": [ "17px", { "lineHeight": "24px", "letterSpacing": "-0.01em", "fontWeight": "600" } ],
                        "display-lg-mobile": [ "30px", { "lineHeight": "38px", "letterSpacing": "-0.01em", "fontWeight": "600" } ],
                        "body-lg": [ "15px", { "lineHeight": "24px", "letterSpacing": "0em", "fontWeight": "400" } ],
                        "label-md": [ "12px", { "lineHeight": "16px", "letterSpacing": "0.03em", "fontWeight": "500" } ]
                    }
                }
            }
        };
    </script>
</head>
<body class="bg-surface font-body-md text-on-surface antialiased selection:bg-secondary-container selection:text-primary">
    <!-- Reusable Sidebar -->
    @include('admin.partials.sidebar')

    <!-- Main Admin Viewport -->
    <div class="pl-72">
        <!-- Reusable Header -->
        @include('admin.partials.header')

        <!-- Dynamic Content Body -->
        <main class="relative w-full pt-20 bg-surface min-h-screen px-space-lg pb-space-xl">
            @yield('content')
        </main>
    </div>

    <!-- Page Specific Scripts / Modals -->
    @stack('scripts')
</body>
</html>
