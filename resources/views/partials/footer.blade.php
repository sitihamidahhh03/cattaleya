<!-- Footer Cattaleya -->
<footer class="w-full bg-surface-container-low text-on-surface mt-20 shadow-[0_-1px_12px_rgba(90,72,56,0.03)]">
    <div class="max-w-7xl mx-auto px-6 lg:px-12 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
            <!-- Brand & Atelier Intro -->
            <div class="space-y-4">
                <div class="flex flex-col">
                    <span class="font-headline-md text-headline-md text-primary tracking-tight">Cattaleya</span>
                    <span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary mt-0.5">Atelier Seserahan &amp; Mahar</span>
                </div>
                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                    Karya mahar pernikahan bespoke dan rangkaian kotak hantaran eksklusif. Menghidupkan keagungan tradisi pernikahan Indonesia dengan sentuhan kemewahan modern kontemporer.
                </p>
                <div class="flex items-center gap-2 text-primary font-title-md text-title-md">
                    <span class="material-symbols-outlined text-xl">verified</span>
                    <span class="font-label-md text-label-md tracking-wider uppercase text-secondary">Bespoke Wedding Dowry</span>
                </div>
            </div>

            <!-- Col 2: Layanan & Katalog -->
            <div class="space-y-4">
                <h4 class="font-title-lg text-title-lg text-on-surface border-b border-outline-variant/40 pb-2">Layanan &amp; Katalog</h4>
                <ul class="space-y-2.5 font-body-md text-body-md text-on-surface-variant">
                    <li class="hover:text-primary transition-colors"><a data-path="katalog" href="{{ route('katalog') }}#sewa-kotak-seserahan">Koleksi Kotak Seserahan</a></li>
                    <li class="hover:text-primary transition-colors"><a data-path="pesan-mahar" href="{{ route('pesan-mahar') }}">Desain Mahar Eksklusif</a></li>
                    <li class="hover:text-primary transition-colors"><a data-path="sewa-kotak-seserahan" href="{{ route('sewa-kotak-seserahan') }}">Sewa Baki &amp; Tray Akrilik</a></li>
                    <li class="hover:text-primary transition-colors"><a data-path="cek-pesanan" href="{{ route('cek-pesanan') }}">Cek Status Pemesanan</a></li>
                </ul>
            </div>

            <!-- Col 3: Informasi & Syarat -->
            <div class="space-y-4">
                <h4 class="font-title-lg text-title-lg text-on-surface border-b border-outline-variant/40 pb-2">Informasi &amp; Syarat</h4>
                <ul class="space-y-2.5 font-body-md text-body-md text-on-surface-variant">
                    <li class="hover:text-primary transition-colors"><a data-path="kebijakan-sewa" href="{{ route('katalog') }}#sewa-kotak-seserahan">Kebijakan &amp; Deposit Sewa</a></li>
                    <li class="hover:text-primary transition-colors"><a data-path="syarat-pembayaran-midtrans" href="{{ route('pesan-mahar') }}">Pembayaran &amp; Midtrans</a></li>
                    <li class="hover:text-primary transition-colors"><a data-path="tentang-cattaleya" href="{{ route('tentang-cattaleya') }}">Tentang Studio Kami</a></li>
                    <li class="hover:text-primary transition-colors"><a data-path="bantuan-whatsapp" href="{{ route('bantuan-whatsapp') }}">FAQ &amp; Bantuan Konsultasi</a></li>
                </ul>
            </div>

            <!-- Col 4: Studio Cattaleya -->
            <div class="space-y-4">
                <h4 class="font-title-lg text-title-lg text-on-surface border-b border-outline-variant/40 pb-2">Studio Cattaleya</h4>
                <div class="space-y-3 font-body-md text-body-md text-on-surface-variant">
                    <div class="flex items-start gap-2.5">
                        <span class="material-symbols-outlined text-primary text-xl mt-0.5">location_on</span>
                        <span>Jl. Teuku Cik Ditiro No. 42, Menteng, Jakarta Pusat 10310</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <span class="material-symbols-outlined text-primary text-xl">phone_in_talk</span>
                        <a href="tel:+6282210008899" class="hover:text-primary transition-colors">+62 822-1000-8899</a>
                    </div>
                    <div class="flex items-start gap-2.5">
                        <span class="material-symbols-outlined text-primary text-xl mt-0.5">schedule</span>
                        <span>Senin - Sabtu: 09:00 - 18:00 WIB<br>Konsultasi Privat dengan Janji Temu</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright & Studio Footnote -->
        <div class="mt-16 pt-8 border-t border-outline-variant/50 flex flex-col md:flex-row items-center justify-between gap-4">
            <p class="font-label-md text-label-md text-on-surface-variant text-center md:text-left">
                © {{ date('Y') }} Cattaleya - Seserahan &amp; Mahar Pernikahan. Hak Cipta Terlindungi.
            </p>
            <div class="flex items-center gap-6 font-label-sm text-label-sm text-on-surface-variant">
                <span class="uppercase tracking-wider">Curated Craftsmanship</span>
                <span class="text-outline-variant">•</span>
                <span class="uppercase tracking-wider">Jakarta Studio</span>
            </div>
        </div>
    </div>
</footer>
