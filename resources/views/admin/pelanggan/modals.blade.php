<!-- MODAL TAMBAH PELANGGAN BARU -->
<div class="fixed inset-0 z-50 hidden items-center justify-center p-4 overflow-y-auto" id="addCustomerModal">
    <!-- Backdrop Scrim -->
    <div class="fixed inset-0 bg-[#201b17]/50 backdrop-blur-xs" onclick="closeAddCustomerModal()"></div>
    <div class="relative w-full max-w-xl rounded-2xl bg-surface-container-lowest shadow-2xl p-space-lg overflow-hidden my-8 z-10 border border-outline-variant/30 animate-in fade-in zoom-in-95 duration-150">
        <div class="flex items-start justify-between pb-space-sm mb-space-sm border-b border-surface-container">
            <div>
                <span class="font-label-sm text-label-sm text-secondary uppercase tracking-widest font-semibold">Registrasi Atelier</span>
                <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Tambah Pelanggan Baru</h3>
                <p class="font-body-md text-body-md text-on-surface-variant">Daftarkan data calon pengantin untuk pencatatan pesanan mahar &amp; seserahan.</p>
            </div>
            <button class="p-1.5 rounded-full text-secondary hover:bg-surface-container hover:text-on-surface cursor-pointer" onclick="closeAddCustomerModal()" type="button">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        <form class="space-y-4" id="addCustomerForm" onsubmit="handleCustomerSubmit(event)">
            <div>
                <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Nama Lengkap Calon Pengantin *</label>
                <input class="w-full px-3.5 py-2.5 rounded-lg bg-surface-container text-on-surface placeholder:text-on-surface-variant font-body-md text-body-md focus:outline-none focus:bg-surface-container-high border border-outline-variant/20" id="newCustomerName" placeholder="Contoh: Anindya Larasati" required="" type="text">
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm">
                <div>
                    <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Nomor WhatsApp *</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-secondary text-[18px]">chat</span>
                        <input class="w-full pl-9 pr-3.5 py-2.5 rounded-lg bg-surface-container text-on-surface placeholder:text-on-surface-variant font-body-md text-body-md focus:outline-none focus:bg-surface-container-high border border-outline-variant/20" id="newCustomerPhone" placeholder="Contoh: 081234567890" required="" type="tel">
                    </div>
                </div>
                <div>
                    <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Akun Instagram (Opsional)</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-secondary text-[18px]">alternate_email</span>
                        <input class="w-full pl-9 pr-3.5 py-2.5 rounded-lg bg-surface-container text-on-surface placeholder:text-on-surface-variant font-body-md text-body-md focus:outline-none focus:bg-surface-container-high border border-outline-variant/20" id="newCustomerIg" placeholder="username_tanpa_at" type="text">
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm">
                <div>
                    <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Alamat Email</label>
                    <input class="w-full px-3.5 py-2.5 rounded-lg bg-surface-container text-on-surface placeholder:text-on-surface-variant font-body-md text-body-md focus:outline-none focus:bg-surface-container-high border border-outline-variant/20" id="newCustomerEmail" placeholder="nama@email.com" type="email">
                </div>
                <div>
                    <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Kota Domisili</label>
                    <input class="w-full px-3.5 py-2.5 rounded-lg bg-surface-container text-on-surface placeholder:text-on-surface-variant font-body-md text-body-md focus:outline-none focus:bg-surface-container-high border border-outline-variant/20" id="newCustomerCity" placeholder="Contoh: Jakarta Selatan" type="text">
                </div>
            </div>
            <div>
                <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Alamat Lengkap (Untuk Penjemputan / Pengantaran Box)</label>
                <textarea class="w-full px-3.5 py-2.5 rounded-lg bg-surface-container text-on-surface placeholder:text-on-surface-variant font-body-md text-body-md focus:outline-none focus:bg-surface-container-high resize-none border border-outline-variant/20" id="newCustomerAddress" placeholder="Nama jalan, nomor rumah, RT/RW, kelurahan, kecamatan..." rows="2"></textarea>
            </div>
            <div>
                <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Catatan Tambahan &amp; Preferensi Gaya Mahar</label>
                <input class="w-full px-3.5 py-2.5 rounded-lg bg-surface-container text-on-surface placeholder:text-on-surface-variant font-body-md text-body-md focus:outline-none focus:bg-surface-container-high border border-outline-variant/20" id="newCustomerNote" placeholder="Contoh: Suka warna sage green, bunga edelweis &amp; mawar putih" type="text">
            </div>
            <div class="pt-space-sm flex items-center justify-end gap-2 border-t border-surface-container">
                <button class="px-4 py-2.5 rounded-xl bg-surface-container text-secondary font-title-md text-title-md hover:bg-surface-container-high transition-colors cursor-pointer" onclick="closeAddCustomerModal()" type="button">
                    Batalkan
                </button>
                <button class="px-5 py-2.5 rounded-xl bg-primary text-on-primary font-title-md text-title-md hover:bg-surface-tint shadow-sm transition-all flex items-center gap-1.5 cursor-pointer" type="submit">
                    <span class="material-symbols-outlined text-[19px]">save</span>
                    <span>Simpan Pelanggan</span>
                </button>
            </div>
        </form>
    </div>
</div>

<!-- MODAL EDIT DATA KONTAK PELANGGAN -->
<div class="fixed inset-0 z-50 hidden items-center justify-center p-4 overflow-y-auto" id="editCustomerModal">
    <!-- Backdrop Scrim -->
    <div class="fixed inset-0 bg-[#201b17]/50 backdrop-blur-xs" onclick="closeEditCustomerModal()"></div>
    <div class="relative w-full max-w-lg rounded-2xl bg-surface-container-lowest shadow-2xl p-space-lg overflow-hidden my-8 z-10 border border-outline-variant/30 animate-in fade-in zoom-in-95 duration-150">
        <div class="flex items-start justify-between pb-space-sm mb-space-sm border-b border-surface-container">
            <div class="flex items-center gap-2">
                <div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-[20px]">edit</span>
                </div>
                <div>
                    <h3 class="font-headline-md text-headline-md text-on-surface font-semibold" id="editCustomerModalTitle">Edit Kontak Pelanggan</h3>
                    <p class="font-label-sm text-label-sm text-secondary">Perbarui nomor WhatsApp, alamat penjemputan, atau email.</p>
                </div>
            </div>
            <button class="p-1.5 rounded-full text-secondary hover:bg-surface-container hover:text-on-surface cursor-pointer" onclick="closeEditCustomerModal()" type="button">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        <form class="space-y-4" id="editCustomerForm" onsubmit="handleEditCustomerSubmit(event)">
            <input id="editCustomerIdHidden" type="hidden" value="">
            <div>
                <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Nama Pelanggan *</label>
                <input class="w-full px-3.5 py-2.5 rounded-lg bg-surface-container text-on-surface font-body-md text-body-md focus:outline-none focus:bg-surface-container-high border border-outline-variant/20" id="editCustomerNameInput" required="" type="text">
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm">
                <div>
                    <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Nomor WhatsApp *</label>
                    <input class="w-full px-3.5 py-2.5 rounded-lg bg-surface-container text-on-surface font-body-md text-body-md focus:outline-none focus:bg-surface-container-high border border-outline-variant/20" id="editCustomerPhoneInput" required="" type="tel">
                </div>
                <div>
                    <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Instagram</label>
                    <input class="w-full px-3.5 py-2.5 rounded-lg bg-surface-container text-on-surface font-body-md text-body-md focus:outline-none focus:bg-surface-container-high border border-outline-variant/20" id="editCustomerIgInput" type="text">
                </div>
            </div>
            <div>
                <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Email Aktif</label>
                <input class="w-full px-3.5 py-2.5 rounded-lg bg-surface-container text-on-surface font-body-md text-body-md focus:outline-none focus:bg-surface-container-high border border-outline-variant/20" id="editCustomerEmailInput" type="email">
            </div>
            <div>
                <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Alamat Penjemputan / Pengantaran</label>
                <textarea class="w-full px-3.5 py-2.5 rounded-lg bg-surface-container text-on-surface font-body-md text-body-md focus:outline-none focus:bg-surface-container-high resize-none border border-outline-variant/20" id="editCustomerAddressInput" rows="3"></textarea>
            </div>
            <div class="pt-space-sm flex items-center justify-end gap-2 border-t border-surface-container">
                <button class="px-4 py-2.5 rounded-xl bg-surface-container text-secondary font-title-md text-title-md hover:bg-surface-container-high transition-colors cursor-pointer" onclick="closeEditCustomerModal()" type="button">
                    Batalkan
                </button>
                <button class="px-5 py-2.5 rounded-xl bg-primary text-on-primary font-title-md text-title-md hover:bg-surface-tint shadow-sm transition-all flex items-center gap-1.5 cursor-pointer" type="submit">
                    <span class="material-symbols-outlined text-[19px]">save</span>
                    <span>Simpan Perubahan</span>
                </button>
            </div>
        </form>
    </div>
</div>

<!-- TOAST NOTIFICATION CONTAINER -->
<div class="fixed bottom-6 right-6 z-50 transform translate-y-24 opacity-0 transition-all duration-300 pointer-events-none" id="toastNotification">
    <div class="bg-surface-container-highest px-4 py-3 rounded-xl shadow-lg flex items-center gap-3 border border-outline-variant/30">
        <div class="w-8 h-8 rounded-full bg-[#2d7a4d] text-white flex items-center justify-center flex-shrink-0" id="toastIconBg">
            <span class="material-symbols-outlined text-[18px]">check</span>
        </div>
        <div>
            <p class="font-title-md text-title-md text-on-surface font-semibold" id="toastTitle">Berhasil</p>
            <p class="font-body-md text-body-md text-on-surface-variant" id="toastDesc">Data berhasil disimpan.</p>
        </div>
    </div>
</div>
