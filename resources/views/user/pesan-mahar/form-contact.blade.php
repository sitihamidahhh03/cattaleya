<!-- Section 1: Data Kontak Pemesan -->
<div class="bg-surface-container-lowest p-6 sm:p-8 rounded-xl shadow-[0_2px_8px_-2px_rgba(90,72,56,0.04),0_12px_24px_-6px_rgba(90,72,56,0.05)] space-y-6">
    <div class="flex items-center gap-3">
        <span class="w-8 h-8 rounded-full bg-primary-fixed text-primary font-label-md text-label-md flex items-center justify-center font-bold">1</span>
        <div>
            <h2 class="font-title-lg text-title-lg text-on-surface">Data Kontak Pemesan</h2>
            <p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Identitas pemesan &amp; koordinasi kuitansi</p>
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
        <div class="sm:col-span-2">
            <label class="block font-label-md text-label-md text-on-surface mb-2 font-medium" for="namaLengkap">Nama Pelanggan / Pemesan *</label>
            <div class="relative">
                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-lg">person</span>
                <input class="w-full bg-surface-container-low text-on-surface pl-10 pr-4 py-3 rounded-xl font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary/40 transition-all placeholder:text-outline-variant" id="namaLengkap" placeholder="Nama lengkap pemesan" required="" type="text" value="Anindya Larasati">
            </div>
        </div>
        <div class="sm:col-span-2">
            <label class="block font-label-md text-label-md text-on-surface mb-2 font-medium" for="nomorWhatsapp">Nomor WhatsApp Aktif *</label>
            <div class="relative">
                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-lg">chat</span>
                <input class="w-full bg-surface-container-low text-on-surface pl-10 pr-4 py-3 rounded-xl font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary/40 transition-all placeholder:text-outline-variant" id="nomorWhatsapp" placeholder="0812-xxxx-xxxx" required="" type="tel" value="0812-9842-1102">
            </div>
            <p class="font-label-sm text-label-sm text-primary mt-1.5 flex items-center gap-1.5">
                <span class="material-symbols-outlined text-sm">info</span>
                Notifikasi tagihan dan resi Midtrans dikirim otomatis ke nomor ini
            </p>
        </div>
        <div class="sm:col-span-2">
            <label class="block font-label-md text-label-md text-on-surface mb-2 font-medium" for="akunInstagram">Akun Instagram <span class="text-on-surface-variant font-normal">(Opsional)</span></label>
            <div class="relative">
                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-lg">tag</span>
                <input class="w-full bg-surface-container-low text-on-surface pl-10 pr-4 py-3 rounded-xl font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary/40 transition-all placeholder:text-outline-variant" id="akunInstagram" placeholder="@username (untuk penyesuaian moodboard / referensi visual)" type="text" value="@anindyalrs">
            </div>
        </div>
    </div>
</div>
