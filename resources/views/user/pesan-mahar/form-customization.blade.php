<!-- Section 3: Spesifikasi Desain Kustom -->
<div class="bg-surface-container-lowest p-6 sm:p-8 rounded-xl shadow-[0_2px_8px_-2px_rgba(90,72,56,0.04),0_12px_24px_-6px_rgba(90,72,56,0.05)] space-y-6">
    <div class="flex items-center gap-3">
        <span class="w-8 h-8 rounded-full bg-primary-fixed text-primary font-label-md text-label-md flex items-center justify-center font-bold">3</span>
        <div>
            <h2 class="font-title-lg text-title-lg text-on-surface">Spesifikasi Desain Kustom</h2>
            <p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Format bingkai, palet flora, &amp; material latar</p>
        </div>
    </div>
    <div class="space-y-5">
        <!-- Jenis & Ukuran Bingkai Dropdown -->
        <div>
            <label class="block font-label-md text-label-md text-on-surface mb-2 font-medium" for="jenisBingkai">Jenis &amp; Ukuran Bingkai *</label>
            <div class="relative">
                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-lg">crop_original</span>
                <select class="w-full bg-surface-container-low text-on-surface pl-10 pr-10 py-3 rounded-xl font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary/40 appearance-none transition-all cursor-pointer" id="jenisBingkai">
                    <option value="Frame Akrilik Vitrine 3D Hexagon 40x50" selected>Frame Akrilik Vitrine 3D Hexagon 40x50 (Paling Diminati)</option>
                    <option value="Frame Kayu Ukir Jati Solid 40x60">Frame Kayu Ukir Jati Solid 40x60 (Klasik Elegan)</option>
                    <option value="Frame Brass & Linen Minimalis 30x40">Frame Brass & Linen Minimalis 30x40 (Modern Minimalist)</option>
                    <option value="Frame Minimalis Natural Pine 30x30">Frame Minimalis Natural Pine 30x30 (Karya Siluet)</option>
                </select>
                <span class="material-symbols-outlined absolute right-3.5 top-1/2 -translate-y-1/2 text-outline pointer-events-none text-xl">expand_more</span>
            </div>
        </div>

        <!-- Posisi Bingkai -->
        <div>
            <label class="block font-label-md text-label-md text-on-surface mb-2 font-medium">Posisi / Orientasi Bingkai</label>
            <div class="grid grid-cols-2 gap-3" id="orientasiContainer">
                <button class="orientasi-btn active flex items-center justify-center gap-2.5 py-3 px-4 rounded-xl bg-secondary-container text-on-secondary-container font-label-md text-label-md transition-all shadow-sm" data-val="Landscape" type="button">
                    <span class="material-symbols-outlined text-lg">crop_landscape</span>
                    <span>Landscape (Mendatar)</span>
                </button>
                <button class="orientasi-btn flex items-center justify-center gap-2.5 py-3 px-4 rounded-xl bg-surface-container text-on-surface-variant font-label-md text-label-md transition-all" data-val="Portrait" type="button">
                    <span class="material-symbols-outlined text-lg">crop_portrait</span>
                    <span>Portrait (Tegak)</span>
                </button>
            </div>
        </div>

        <!-- Warna & Tema Bunga -->
        <div>
            <label class="block font-label-md text-label-md text-on-surface mb-2 font-medium">Warna &amp; Tema Bunga Preserved</label>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3" id="temaBungaContainer">
                <label class="tema-bunga-card cursor-pointer flex items-center justify-between p-3.5 rounded-xl bg-surface-container-low hover:bg-surface-container transition-all">
                    <div class="flex items-center gap-3">
                        <span class="w-6 h-6 rounded-full bg-primary flex items-center justify-center text-on-primary">
                            <span class="material-symbols-outlined text-xs">local_florist</span>
                        </span>
                        <div>
                            <p class="font-title-md text-title-md text-on-surface leading-tight">Champagne Gold &amp; Orchid</p>
                            <p class="font-label-sm text-label-sm text-secondary">Cattaleya Orchid signature</p>
                        </div>
                    </div>
                    <input checked="" class="accent-primary w-4 h-4" name="temaBunga" type="radio" value="Champagne Gold Orchid">
                </label>
                <label class="tema-bunga-card cursor-pointer flex items-center justify-between p-3.5 rounded-xl bg-surface-container-low hover:bg-surface-container transition-all">
                    <div class="flex items-center gap-3">
                        <span class="w-6 h-6 rounded-full bg-secondary-container flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined text-xs">filter_vintage</span>
                        </span>
                        <div>
                            <p class="font-title-md text-title-md text-on-surface leading-tight">Rustic Terracotta</p>
                            <p class="font-label-sm text-label-sm text-secondary">Warm earth tone &amp; dried wheat</p>
                        </div>
                    </div>
                    <input class="accent-primary w-4 h-4" name="temaBunga" type="radio" value="Rustic Terracotta">
                </label>
                <label class="tema-bunga-card cursor-pointer flex items-center justify-between p-3.5 rounded-xl bg-surface-container-low hover:bg-surface-container transition-all">
                    <div class="flex items-center gap-3">
                        <span class="w-6 h-6 rounded-full bg-surface-container-highest flex items-center justify-center text-secondary">
                            <span class="material-symbols-outlined text-xs">spa</span>
                        </span>
                        <div>
                            <p class="font-title-md text-title-md text-on-surface leading-tight">Pure White Lily</p>
                            <p class="font-label-sm text-label-sm text-secondary">Purity, white hydrangeas, calla</p>
                        </div>
                    </div>
                    <input class="accent-primary w-4 h-4" name="temaBunga" type="radio" value="Pure White Lily">
                </label>
                <label class="tema-bunga-card cursor-pointer flex items-center justify-between p-3.5 rounded-xl bg-surface-container-low hover:bg-surface-container transition-all">
                    <div class="flex items-center gap-3">
                        <span class="w-6 h-6 rounded-full bg-tertiary-container flex items-center justify-center text-on-tertiary-container">
                            <span class="material-symbols-outlined text-xs">eco</span>
                        </span>
                        <div>
                            <p class="font-title-md text-title-md text-on-surface leading-tight">Sage Green Botanical</p>
                            <p class="font-label-sm text-label-sm text-secondary">Preserved eucalyptus &amp; moss</p>
                        </div>
                    </div>
                    <input class="accent-primary w-4 h-4" name="temaBunga" type="radio" value="Sage Green Botanical">
                </label>
            </div>
        </div>

        <!-- Jenis Background & Warna Acrylic Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block font-label-md text-label-md text-on-surface mb-2 font-medium" for="jenisBackground">Jenis &amp; Bahan Background</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-lg">wallpaper</span>
                    <select class="w-full bg-surface-container-low text-on-surface pl-10 pr-9 py-3 rounded-xl font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary/40 appearance-none transition-all cursor-pointer" id="jenisBackground">
                        <option selected="" value="Linen Tekstur Ivory">Linen Tekstur Ivory</option>
                        <option value="Kayu Mahoni Veneer">Kayu Mahoni Veneer</option>
                        <option value="Transparan Clear Akrilik">Transparan Clear Akrilik</option>
                    </select>
                    <span class="material-symbols-outlined absolute right-3.5 top-1/2 -translate-y-1/2 text-outline pointer-events-none text-xl">expand_more</span>
                </div>
            </div>
            <div>
                <label class="block font-label-md text-label-md text-on-surface mb-2 font-medium" for="warnaAcrylic">Warna Acrylic Background</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-lg">palette</span>
                    <select class="w-full bg-surface-container-low text-on-surface pl-10 pr-9 py-3 rounded-xl font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary/40 appearance-none transition-all cursor-pointer" id="warnaAcrylic">
                        <option selected="" value="Frosted White">Frosted White (Satin Halus)</option>
                        <option value="Mirror Gold">Mirror Gold (Kilau Mewah)</option>
                        <option value="Clear Transparent">Clear Transparent (Bening)</option>
                    </select>
                    <span class="material-symbols-outlined absolute right-3.5 top-1/2 -translate-y-1/2 text-outline pointer-events-none text-xl">expand_more</span>
                </div>
            </div>
        </div>

        <!-- Catatan Tambahan / Link Referensi & Upload -->
        <div>
            <label class="block font-label-md text-label-md text-on-surface mb-2 font-medium" for="catatanReferensi">Catatan Tambahan &amp; Link Moodboard Desain</label>
            <textarea class="w-full bg-surface-container-low text-on-surface p-4 rounded-xl font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary/40 transition-all placeholder:text-outline-variant" id="catatanReferensi" placeholder="Cantumkan link Pinterest / Google Drive / catatan grafir tanggal hijriyah atau doa khusus..." rows="3"></textarea>
        </div>

        <!-- Upload Reference Box -->
        <div>
            <span class="block font-label-md text-label-md text-on-surface mb-2 font-medium">Lampirkan Foto Referensi / Inspirasi (Opsional)</span>
            <div class="p-6 rounded-xl bg-surface-container-low hover:bg-surface-container-high transition-all text-center cursor-pointer group">
                <input accept="image/*" class="hidden" id="fileInspirasi" onchange="previewUpload(this)" type="file">
                <label class="cursor-pointer flex flex-col items-center" for="fileInspirasi">
                    <span class="material-symbols-outlined text-3xl text-primary group-hover:scale-110 transition-transform">cloud_upload</span>
                    <span class="font-title-md text-title-md text-on-surface mt-2 font-medium" id="uploadFilename">Klik untuk unggah screenshot atau desain mahar</span>
                    <span class="font-label-sm text-label-sm text-on-surface-variant mt-1">PNG, JPG, HEIC hingga 10MB</span>
                </label>
            </div>
        </div>
    </div>
</div>
