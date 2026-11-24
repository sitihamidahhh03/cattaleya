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
                            <rect fill="currentColor" height="50" rx="4" width="50" x="10" y="10"></rect>
                            <rect fill="#FAF7F2" height="34" rx="2" width="34" x="18" y="18"></rect>
                            <rect fill="currentColor" height="18" width="18" x="26" y="26"></rect>
                            <rect fill="currentColor" height="50" rx="4" width="50" x="140" y="10"></rect>
                            <rect fill="#FAF7F2" height="34" rx="2" width="34" x="148" y="18"></rect>
                            <rect fill="currentColor" height="18" width="18" x="156" y="26"></rect>
                            <rect fill="currentColor" height="50" rx="4" width="50" x="10" y="140"></rect>
                            <rect fill="#FAF7F2" height="34" rx="2" width="34" x="18" y="148"></rect>
                            <rect fill="currentColor" height="18" width="18" x="26" y="156"></rect>
                            <rect fill="currentColor" height="10" width="10" x="70" y="15"></rect>
                            <rect fill="currentColor" height="20" width="10" x="90" y="15"></rect>
                            <rect fill="currentColor" height="10" width="15" x="110" y="20"></rect>
                            <rect fill="currentColor" height="10" width="20" x="70" y="35"></rect>
                            <rect fill="currentColor" height="15" width="10" x="100" y="40"></rect>
                            <rect fill="currentColor" height="10" width="10" x="120" y="40"></rect>
                            <rect fill="currentColor" height="10" width="15" x="15" y="70"></rect>
                            <rect fill="currentColor" height="15" width="15" x="40" y="75"></rect>
                            <rect fill="currentColor" height="10" width="25" x="15" y="95"></rect>
                            <rect fill="currentColor" height="15" width="10" x="15" y="115"></rect>
                            <rect fill="currentColor" height="15" width="15" x="40" y="110"></rect>
                            <rect fill="#775625" fill-opacity="0.1" height="60" rx="6" width="70" x="65" y="70"></rect>
                            <circle cx="100" cy="100" fill="#775625" r="16"></circle>
                            <path d="M96 95L100 105L104 95" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
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
