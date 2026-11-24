<!-- Chart 1: Order Trend Line Chart (7 Cols) -->
<div class="lg:col-span-7 flex flex-col justify-between bg-surface-container-lowest p-space-lg rounded-xl shadow-sm">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between pb-space-md gap-space-xs">
        <div class="flex flex-col">
            <div class="flex items-center gap-2">
                <span class="w-2.5 h-2.5 rounded-full bg-primary"></span>
                <h2 class="font-headline-md text-headline-md text-on-surface">Tren Jumlah Pesanan</h2>
            </div>
            <span class="font-label-sm text-label-sm text-outline">Monitoring ritme reservasi bulanan (Januari &ndash; Desember 2025)</span>
        </div>
    </div>

    <!-- Trend Chart Graphic (SVG Responsive) -->
    <div class="relative w-full pt-space-xs pb-space-xs">
        <div class="h-56 w-full flex flex-col justify-end">
            <svg class="w-full h-full overflow-visible" preserveAspectRatio="none" viewBox="0 0 540 180">
                <defs>
                    <linearGradient id="cattaleyaTrendGrad" x1="0%" x2="0%" y1="0%" y2="100%">
                        <stop offset="0%" stop-color="#775625" stop-opacity="0.22"></stop>
                        <stop offset="100%" stop-color="#775625" stop-opacity="0.0"></stop>
                    </linearGradient>
                </defs>

                <!-- Horizontal guidelines -->
                <line stroke="#f1e6df" stroke-dasharray="4 4" stroke-width="1" x1="0" x2="540" y1="20" y2="20"></line>
                <line stroke="#f1e6df" stroke-dasharray="4 4" stroke-width="1" x1="0" x2="540" y1="65" y2="65"></line>
                <line stroke="#f1e6df" stroke-dasharray="4 4" stroke-width="1" x1="0" x2="540" y1="110" y2="110"></line>
                <line stroke="#f1e6df" stroke-width="1" x1="0" x2="540" y1="155" y2="155"></line>

                <!-- Area Fill -->
                <polygon fill="url(#cattaleyaTrendGrad)" points="20,115 65,106 111,92 156,78 202,70 247,60 293,74 338,83 384,65 429,56 475,47 520,38 520,155 20,155"></polygon>

                <!-- Smooth Trend Line -->
                <path d="M 20 115 C 42 110, 43 108, 65 106 C 88 104, 88 95, 111 92 C 133 89, 134 81, 156 78 C 179 75, 179 72, 202 70 C 224 68, 225 63, 247 60 C 270 57, 270 70, 293 74 C 315 78, 316 83, 338 83 C 361 83, 361 68, 384 65 C 406 62, 407 58, 429 56 C 452 54, 452 49, 475 47 C 497 45, 498 40, 520 38" fill="none" stroke="#775625" stroke-linecap="round" stroke-width="2.5"></path>

                <!-- 12 Month Data Nodes with Values -->
                <g class="cursor-pointer group">
                    <circle cx="20" cy="115" fill="#ffffff" r="4" stroke="#775625" stroke-width="2"></circle>
                    <text fill="#4f453a" font-family="Arial, Helvetica, sans-serif" font-size="9" text-anchor="middle" x="20" y="105">18</text>
                </g>
                <g class="cursor-pointer group">
                    <circle cx="65" cy="106" fill="#ffffff" r="4" stroke="#775625" stroke-width="2"></circle>
                    <text fill="#4f453a" font-family="Arial, Helvetica, sans-serif" font-size="9" text-anchor="middle" x="65" y="96">22</text>
                </g>
                <g class="cursor-pointer group">
                    <circle cx="111" cy="92" fill="#ffffff" r="4" stroke="#775625" stroke-width="2"></circle>
                    <text fill="#4f453a" font-family="Arial, Helvetica, sans-serif" font-size="9" text-anchor="middle" x="111" y="82">28</text>
                </g>
                <g class="cursor-pointer group">
                    <circle cx="156" cy="78" fill="#ffffff" r="4" stroke="#775625" stroke-width="2"></circle>
                    <text fill="#4f453a" font-family="Arial, Helvetica, sans-serif" font-size="9" text-anchor="middle" x="156" y="68">34</text>
                </g>
                <g class="cursor-pointer group">
                    <circle cx="202" cy="70" fill="#ffffff" r="4" stroke="#775625" stroke-width="2"></circle>
                    <text fill="#4f453a" font-family="Arial, Helvetica, sans-serif" font-size="9" text-anchor="middle" x="202" y="60">38</text>
                </g>
                <g class="cursor-pointer group">
                    <circle cx="247" cy="60" fill="#ffffff" r="4" stroke="#775625" stroke-width="2"></circle>
                    <text fill="#4f453a" font-family="Arial, Helvetica, sans-serif" font-size="9" text-anchor="middle" x="247" y="50">42</text>
                </g>
                <g class="cursor-pointer group">
                    <circle cx="293" cy="74" fill="#ffffff" r="4" stroke="#775625" stroke-width="2"></circle>
                    <text fill="#4f453a" font-family="Arial, Helvetica, sans-serif" font-size="9" text-anchor="middle" x="293" y="64">36</text>
                </g>
                <g class="cursor-pointer group">
                    <circle cx="338" cy="83" fill="#ffffff" r="4" stroke="#775625" stroke-width="2"></circle>
                    <text fill="#4f453a" font-family="Arial, Helvetica, sans-serif" font-size="9" text-anchor="middle" x="338" y="73">32</text>
                </g>
                <g class="cursor-pointer group">
                    <circle cx="384" cy="65" fill="#ffffff" r="4" stroke="#775625" stroke-width="2"></circle>
                    <text fill="#4f453a" font-family="Arial, Helvetica, sans-serif" font-size="9" text-anchor="middle" x="384" y="55">40</text>
                </g>
                <g class="cursor-pointer group">
                    <circle cx="429" cy="56" fill="#ffffff" r="4" stroke="#775625" stroke-width="2"></circle>
                    <text fill="#4f453a" font-family="Arial, Helvetica, sans-serif" font-size="9" text-anchor="middle" x="429" y="46">44</text>
                </g>
                <g class="cursor-pointer group">
                    <circle cx="475" cy="47" fill="#ffffff" r="4" stroke="#775625" stroke-width="2"></circle>
                    <text fill="#4f453a" font-family="Arial, Helvetica, sans-serif" font-size="9" text-anchor="middle" x="475" y="37">48</text>
                </g>
                <g class="cursor-pointer group">
                    <circle cx="520" cy="38" fill="#775625" r="5" stroke="#ffffff" stroke-width="2"></circle>
                    <text fill="#775625" font-family="Arial, Helvetica, sans-serif" font-size="10" font-weight="bold" text-anchor="middle" x="520" y="27">52</text>
                </g>
            </svg>
        </div>

        <!-- Month Labels (12 Months) -->
        <div class="grid grid-cols-12 text-center pt-space-xs text-[10px] sm:text-xs">
            <span class="text-outline">Jan</span>
            <span class="text-outline">Feb</span>
            <span class="text-outline">Mar</span>
            <span class="text-outline">Apr</span>
            <span class="text-outline">Mei</span>
            <span class="text-outline">Jun</span>
            <span class="text-outline">Jul</span>
            <span class="text-outline">Agu</span>
            <span class="text-outline">Sep</span>
            <span class="text-outline">Okt</span>
            <span class="text-outline">Nov</span>
            <span class="font-semibold text-primary">Des</span>
        </div>
    </div>
</div>
