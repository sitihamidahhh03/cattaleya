<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="web_dashboard" name="shell-type">
    <title>@yield('title', 'Portal Pemilik Bisnis (Owner) — Cattaleya Atelier')</title>

    <!-- Google Fonts Preconnect -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..700;1,400..700&amp;family=Plus+Jakarta+Sans:ital,wght@0,300..800;1,300..800&amp;display=swap" rel="stylesheet">
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

    <!-- Tailwind CDN & Custom Atelier Theme -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-tertiary-container": "#fffbff",
                        "on-background": "#201b17",
                        "on-primary-container": "#fffbff",
                        "on-secondary-container": "#74614f",
                        "surface-container": "#f7ece5",
                        "primary-container": "#936e3b",
                        "primary-fixed": "#ffddb4",
                        "tertiary-fixed-dim": "#d7c4a7",
                        "error": "#ba1a1a",
                        "on-primary": "#ffffff",
                        "on-surface": "#201b17",
                        "on-primary-fixed": "#291800",
                        "surface-variant": "#ebe0d9",
                        "on-secondary": "#ffffff",
                        "secondary": "#6e5b4a",
                        "tertiary-container": "#827259",
                        "secondary-container": "#f9dec8",
                        "surface-container-lowest": "#ffffff",
                        "outline-variant": "#d2c4b5",
                        "on-tertiary-fixed": "#241a08",
                        "inverse-surface": "#352f2b",
                        "on-tertiary": "#ffffff",
                        "surface-container-high": "#f1e6df",
                        "on-tertiary-fixed-variant": "#52452f",
                        "tertiary-fixed": "#f4e0c2",
                        "surface": "#fff8f5",
                        "on-secondary-fixed": "#26190c",
                        "surface-tint": "#7a5827",
                        "on-primary-fixed-variant": "#5f4112",
                        "on-error": "#ffffff",
                        "primary": "#775625",
                        "surface-bright": "#fff8f5",
                        "on-error-container": "#93000a",
                        "inverse-on-surface": "#faefe8",
                        "secondary-fixed": "#f9dec8",
                        "surface-container-highest": "#ebe0d9",
                        "background": "#fff8f5",
                        "on-secondary-fixed-variant": "#554334",
                        "surface-dim": "#e3d8d1",
                        "tertiary": "#685a43",
                        "error-container": "#ffdad6",
                        "inverse-primary": "#ecbf84",
                        "secondary-fixed-dim": "#dbc2ad",
                        "on-surface-variant": "#4f453a",
                        "surface-container-low": "#fdf1ea",
                        "outline": "#817568",
                        "primary-fixed-dim": "#ecbf84"
                    },
                    borderRadius: {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    spacing: {
                        "space-md": "1rem",
                        "space-sm": "0.5rem",
                        "gutter": "1.5rem",
                        "space-xs": "0.25rem",
                        "space-lg": "1.5rem",
                        "space-xl": "2.25rem",
                        "margin": "2rem"
                    },
                    fontFamily: {
                        "headline-lg-mobile": [ "Playfair Display", "serif" ],
                        "body-md": [ "Plus Jakarta Sans", "sans-serif" ],
                        "metric-display": [ "Playfair Display", "serif" ],
                        "label-sm": [ "Plus Jakarta Sans", "sans-serif" ],
                        "display-lg": [ "Playfair Display", "serif" ],
                        "headline-md": [ "Playfair Display", "serif" ],
                        "title-md": [ "Plus Jakarta Sans", "sans-serif" ],
                        "display-lg-mobile": [ "Playfair Display", "serif" ],
                        "title-lg": [ "Plus Jakarta Sans", "sans-serif" ],
                        "label-md": [ "Plus Jakarta Sans", "sans-serif" ],
                        "headline-lg": [ "Playfair Display", "serif" ],
                        "body-lg": [ "Plus Jakarta Sans", "sans-serif" ]
                    },
                    fontSize: {
                        "headline-lg-mobile": [ "22px", { "lineHeight": "30px", "letterSpacing": "0em", "fontWeight": "500" } ],
                        "body-md": [ "13px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "400" } ],
                        "metric-display": [ "32px", { "lineHeight": "38px", "letterSpacing": "-0.01em", "fontWeight": "600" } ],
                        "label-sm": [ "11px", { "lineHeight": "14px", "letterSpacing": "0.08em", "fontWeight": "600" } ],
                        "display-lg": [ "40px", { "lineHeight": "48px", "letterSpacing": "-0.02em", "fontWeight": "600" } ],
                        "headline-md": [ "20px", { "lineHeight": "28px", "letterSpacing": "0em", "fontWeight": "500" } ],
                        "title-md": [ "15px", { "lineHeight": "22px", "letterSpacing": "0em", "fontWeight": "600" } ],
                        "display-lg-mobile": [ "30px", { "lineHeight": "38px", "letterSpacing": "-0.01em", "fontWeight": "600" } ],
                        "title-lg": [ "17px", { "lineHeight": "24px", "letterSpacing": "-0.01em", "fontWeight": "600" } ],
                        "label-md": [ "12px", { "lineHeight": "16px", "letterSpacing": "0.03em", "fontWeight": "500" } ],
                        "headline-lg": [ "28px", { "lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "500" } ],
                        "body-lg": [ "15px", { "lineHeight": "24px", "letterSpacing": "0em", "fontWeight": "400" } ]
                    }
                }
            }
        };
    </script>
</head>
<body class="bg-surface font-body-md text-on-surface antialiased min-h-screen">
    <!-- Reusable Owner Sidebar -->
    @include('owner.partials.sidebar')

    <!-- Main Owner Viewport -->
    <div class="pl-72">
        <!-- Reusable Owner Header -->
        @include('owner.partials.header')

        <!-- Dynamic Content Body -->
        <main class="relative pt-16 bg-surface min-h-screen w-full px-margin py-margin">
            @yield('content')
        </main>
    </div>

    @stack('scripts')
</body>
</html>

