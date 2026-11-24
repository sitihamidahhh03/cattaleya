<!-- MODAL: EDIT DATA PESANAN (Ikon Pensil) -->
<div class="fixed inset-0 z-50 hidden bg-[#1e1915]/50 backdrop-blur-xs flex items-center justify-center p-4" id="editOrderModal">
    <div class="bg-surface-container-lowest rounded-xl max-w-2xl w-full p-space-lg shadow-xl space-y-space-md max-h-[90vh] overflow-y-auto border border-outline-variant/30 animate-in fade-in zoom-in-95 duration-150">
        <div class="flex items-center justify-between pb-2 border-b border-surface-container">
            <div class="flex items-center gap-2.5">
                <div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-[20px]">edit</span>
                </div>
                <div>
                    <span class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-wider">Perbarui Informasi Operasional</span>
                    <h4 class="font-headline-md text-headline-md text-on-surface font-semibold" id="editOrderModalTitle">Edit Data Pesanan #ORD-2025-090</h4>
                </div>
            </div>
            <button class="p-1.5 rounded-lg text-secondary hover:bg-surface-container transition-colors cursor-pointer" onclick="closeEditModal()" type="button">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        <form class="space-y-space-md" id="editOrderForm" onsubmit="handleEditOrderSubmit(event)">
            <input id="editOrderIdHidden" type="hidden" value="">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                <div>
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Nama Pasangan / Pelanggan *</label>
                    <input class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" id="editClientName" required="" type="text">
                </div>
                <div>
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Nomor WhatsApp *</label>
                    <input class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" id="editClientPhone" required="" type="tel">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                <div>
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Jenis Layanan / Produk</label>
                    <select class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" id="editOrderType">
                        <option value="mahar">Mahar Custom Pernikahan</option>
                        <option value="sewa">Sewa Kotak Seserahan</option>
                        <option value="bundling">Paket Bundling (Mahar + Kotak)</option>
                    </select>
                </div>
                <div>
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Tanggal Acara Pernikahan *</label>
                    <input class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" id="editEventDate" required="" type="date">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                <div>
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Total Nilai Pesanan (Rp) *</label>
                    <input class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" id="editTotalAmount" required="" type="number">
                </div>
                <div>
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Status Pembayaran</label>
                    <select class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" id="editPaymentStatus">
                        <option value="dp">DP Terbayar (50%)</option>
                        <option value="lunas">Lunas Penuh</option>
                        <option value="menunggu_dp">Menunggu Pembayaran DP</option>
                        <option value="refund">Refund Diproses</option>
                    </select>
                </div>
            </div>
            <div>
                <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Spesifikasi Model Mahar / Nomor Tray Baki</label>
                <input class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" id="editProductDetail" placeholder="Contoh: Ukiran Kayu Jati Rose Gold / Seri 8 Tray White Pearl" type="text">
            </div>
            <div>
                <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Catatan Khusus Operasional / Request Pasangan</label>
                <textarea class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" id="editNotes" placeholder="Catatan khusus warna pita, grafir nama, jam pengambilan..." rows="3"></textarea>
            </div>
            <div class="p-space-sm rounded-xl bg-surface-container-low flex items-start gap-2.5 text-on-surface-variant border border-outline-variant/20">
                <input checked="" class="mt-1 accent-primary rounded cursor-pointer" id="notifyClientOnEdit" type="checkbox">
                <label class="font-body-md text-body-md text-on-surface cursor-pointer select-none" for="notifyClientOnEdit">
                    Kirim konfirmasi pembaruan rincian pesanan ke WhatsApp pelanggan secara otomatis.
                </label>
            </div>
            <div class="flex items-center justify-end gap-space-sm pt-2 border-t border-surface-container-high/60">
                <button class="px-4 py-2 rounded-xl bg-surface-container text-secondary hover:bg-surface-container-high font-title-md text-title-md cursor-pointer" onclick="closeEditModal()" type="button">
                    Batal
                </button>
                <button class="px-5 py-2 rounded-xl bg-primary text-on-primary hover:bg-primary-container font-title-md text-title-md shadow-xs cursor-pointer flex items-center gap-1.5" type="submit">
                    <span class="material-symbols-outlined text-[18px]">save</span>
                    <span>Simpan Perubahan</span>
                </button>
            </div>
        </form>
    </div>
</div>

<!-- MODAL: UBAH STATUS OPERASIONAL -->
<div class="fixed inset-0 z-50 hidden bg-[#1e1915]/50 backdrop-blur-xs flex items-center justify-center p-4" id="statusModal">
    <div class="bg-surface-container-lowest rounded-xl max-w-lg w-full p-space-lg shadow-xl space-y-space-md border border-outline-variant/30 animate-in fade-in zoom-in-95 duration-150">
        <div class="flex items-center justify-between pb-2 border-b border-surface-container">
            <div>
                <span class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-wider">Perubahan Alur Operasional</span>
                <h4 class="font-headline-md text-headline-md text-on-surface font-semibold" id="statusModalOrderId">ORD-XXXX-XXX</h4>
            </div>
            <button class="p-1.5 rounded-lg text-secondary hover:bg-surface-container transition-colors cursor-pointer" onclick="closeStatusModal()" type="button">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        <div class="space-y-space-sm">
            <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold" for="modalNewStatusSelect">Pilih Tahap Status Baru</label>
            <select class="w-full px-3.5 py-2.5 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container cursor-pointer border border-outline-variant/20" id="modalNewStatusSelect">
                <option value="Menunggu Pembayaran">Menunggu Pembayaran</option>
                <option value="Dalam Antrean Desain">Dalam Antrean Desain</option>
                <option value="Pengerjaan Florist / Dekorasi">Pengerjaan Florist / Dekorasi</option>
                <option value="Siap Diambil / Kirim">Siap Diambil / Kirim</option>
                <option value="Sedang Disewa">Sedang Disewa (Klien Telah Mengambil)</option>
                <option value="Selesai">Selesai (Kotak Kembali &amp; Lunas)</option>
                <option value="Dibatalkan">Dibatalkan</option>
            </select>
        </div>
        <div class="space-y-space-sm">
            <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold" for="statusNoteInput">Catatan Pengerjaan / Artisan Penanggung Jawab</label>
            <input class="w-full px-3.5 py-2.5 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface placeholder:text-on-surface-variant/60 focus:outline-none focus:bg-surface-container border border-outline-variant/20" id="statusNoteInput" placeholder="Contoh: Bunga kering selesai dirangkai, siap masuk vitrine..." type="text">
        </div>
        <div class="p-space-sm rounded-xl bg-surface-container-low flex items-start gap-2.5 text-on-surface-variant border border-outline-variant/20">
            <input checked="" class="mt-1 accent-primary rounded cursor-pointer" id="autoNotifyWa" type="checkbox">
            <label class="font-body-md text-body-md text-on-surface cursor-pointer select-none" for="autoNotifyWa">
                Kirim notifikasi otomatis pembaruan progres pengerjaan ke nomor WhatsApp pengantin/pemesan secara instan.
            </label>
        </div>
        <div class="flex items-center justify-end gap-space-sm pt-2 border-t border-surface-container-high/60">
            <button class="px-4 py-2 rounded-xl bg-surface-container text-secondary hover:bg-surface-container-high font-title-md text-title-md cursor-pointer" onclick="closeStatusModal()" type="button">
                Batal
            </button>
            <button class="px-5 py-2 rounded-xl bg-primary text-on-primary hover:bg-primary-container font-title-md text-title-md shadow-xs cursor-pointer" onclick="saveStatusChange()" type="button">
                Simpan &amp; Perbarui Status
            </button>
        </div>
    </div>
</div>

<!-- MODAL: BUAT PESANAN MANUAL / OFFLINE -->
<div class="fixed inset-0 z-50 hidden bg-[#1e1915]/50 backdrop-blur-xs flex items-center justify-center p-4" id="manualOrderModal">
    <div class="bg-surface-container-lowest rounded-xl max-w-2xl w-full p-space-lg shadow-xl space-y-space-md max-h-[90vh] overflow-y-auto border border-outline-variant/30 animate-in fade-in zoom-in-95 duration-150">
        <div class="flex items-center justify-between pb-2 border-b border-surface-container">
            <div>
                <span class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-wider">Input Pesanan Studio Langsung</span>
                <h4 class="font-headline-md text-headline-md text-on-surface font-semibold">Buat Pesanan Manual / Offline (Walk-In)</h4>
            </div>
            <button class="p-1.5 rounded-lg text-secondary hover:bg-surface-container transition-colors cursor-pointer" onclick="closeManualOrderModal()" type="button">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        <form class="space-y-space-md" id="manualOrderForm" onsubmit="handleManualOrderSubmit(event)">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                <div>
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Nama Pasangan / Pemesan *</label>
                    <input class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" placeholder="Contoh: Rian &amp; Marissa" required="" type="text">
                </div>
                <div>
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Nomor WhatsApp Aktif *</label>
                    <input class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" placeholder="08xxxxxxxxxx" required="" type="tel">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                <div>
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Jenis Layanan / Produk *</label>
                    <select class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" required="">
                        <option value="mahar">Mahar Custom Pernikahan</option>
                        <option value="sewa">Sewa Kotak Seserahan Acrylic</option>
                        <option value="bundling">Paket Bundling (Mahar + Kotak)</option>
                    </select>
                </div>
                <div>
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Tanggal Acara Pernikahan *</label>
                    <input class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" required="" type="date">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                <div>
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Total Biaya (Rp) *</label>
                    <input class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" placeholder="1800000" required="" type="number">
                </div>
                <div>
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Uang Muka / DP (Rp) *</label>
                    <input class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" placeholder="900000" required="" type="number">
                </div>
                <div>
                    <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Metode Bayar DP</label>
                    <select class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20">
                        <option value="cash">Tunai / Cash Studio</option>
                        <option value="transfer">Transfer Bank Studio</option>
                        <option value="midtrans">Kirim Link Midtrans Snap</option>
                    </select>
                </div>
            </div>
            <div>
                <label class="block font-label-sm text-label-sm uppercase text-secondary font-semibold mb-1">Detail Request Mahar / Pilihan Tray</label>
                <textarea class="w-full px-3.5 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container border border-outline-variant/20" placeholder="Contoh: Frame Gold Leaf uk. 30x40 cm, tema blush peach, uang kuno 22 rupiah + replika antam 10gr..." rows="3"></textarea>
            </div>
            <div class="p-space-sm rounded-xl bg-surface-container-low flex items-center justify-between border border-outline-variant/20">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-[#2d7a4d] text-[20px]">mark_chat_read</span>
                    <span class="font-body-md text-body-md text-on-surface">Generate ID &amp; Kirim WhatsApp Invoice Resmi otomatis</span>
                </div>
                <span class="font-label-sm text-label-sm text-primary uppercase font-bold">Auto ID: ORD-2025-103</span>
            </div>
            <div class="flex items-center justify-end gap-space-sm pt-2 border-t border-surface-container-high/60">
                <button class="px-4 py-2 rounded-xl bg-surface-container text-secondary hover:bg-surface-container-high font-title-md text-title-md cursor-pointer" onclick="closeManualOrderModal()" type="button">
                    Batalkan
                </button>
                <button class="px-5 py-2 rounded-xl bg-primary text-on-primary hover:bg-primary-container font-title-md text-title-md shadow-xs cursor-pointer" type="submit">
                    Simpan Pesanan &amp; Terbitkan Invoice
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
            <p class="font-body-md text-body-md text-on-surface-variant" id="toastDesc">Pesan notifikasi WhatsApp berhasil dikirim ke gateway.</p>
        </div>
    </div>
</div>
