<!-- Section 2: Detail Pernikahan & Mahar -->
<div class="bg-surface-container-lowest p-6 sm:p-8 rounded-xl shadow-[0_2px_8px_-2px_rgba(90,72,56,0.04),0_12px_24px_-6px_rgba(90,72,56,0.05)] space-y-6">
    <div class="flex items-center gap-3">
        <span class="w-8 h-8 rounded-full bg-primary-fixed text-primary font-label-md text-label-md flex items-center justify-center font-bold">2</span>
        <div>
            <h2 class="font-title-lg text-title-lg text-on-surface">Detail Pernikahan &amp; Komposisi Mahar</h2>
            <p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Mempelai, waktu akad, &amp; isi rincian fisik mahar</p>
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
        <div class="sm:col-span-2">
            <label class="block font-label-md text-label-md text-on-surface mb-2 font-medium" for="namaMempelai">Nama Calon Pengantin (Grafir / Kaligrafi) *</label>
            <div class="relative">
                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-lg">favorite</span>
                <input class="w-full bg-surface-container-low text-on-surface pl-10 pr-4 py-3 rounded-xl font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary/40 transition-all placeholder:text-outline-variant" id="namaMempelai" placeholder="Mempelai Wanita &amp; Pria (cth: Anindya &amp; Raditya)" required="" type="text" value="Anindya &amp; Raditya">
            </div>
        </div>
        <div class="sm:col-span-2">
            <label class="block font-label-md text-label-md text-on-surface mb-2 font-medium" for="tanggalAkad">Tanggal Acara Akad / Resepsi *</label>
            <div class="relative">
                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-lg">calendar_month</span>
                <input class="w-full bg-surface-container-low text-on-surface pl-10 pr-4 py-3 rounded-xl font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary/40 transition-all" id="tanggalAkad" required="" type="date" value="2025-06-21">
            </div>
            <p class="font-label-sm text-label-sm text-on-surface-variant mt-1.5">Kami menyarankan pemesanan minimal H-30 agar proses kurasi bunga &amp; pengerjaan maksimal.</p>
        </div>
        <div class="sm:col-span-2">
            <label class="block font-label-md text-label-md text-on-surface mb-2 font-medium" for="nominalBentukMahar">Nominal / Komponen Fisik Mahar *</label>
            <textarea class="w-full bg-surface-container-low text-on-surface p-4 rounded-xl font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary/40 transition-all placeholder:text-outline-variant leading-relaxed" id="nominalBentukMahar" placeholder="Tuliskan komponen mahar yang akan ditata, misal: 10 Gram Logam Mulia Antam + Uang Tunai Kuno Rp 250.000 + Cincin Berlian" required="" rows="3">10 Gram Logam Mulia Antam + Uang Tunai Kuno Rp 250.000</textarea>
        </div>
    </div>
</div>
