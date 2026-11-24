<!-- INTERACTIVE MODAL 1: UBAH PESANAN (Admin Edit Modal) -->
<div class="hidden fixed inset-0 bg-inverse-surface/40 backdrop-blur-xs z-50 flex items-center justify-center p-4" id="modal-edit-order">
    <div class="bg-surface-container-lowest rounded-xl max-w-2xl w-full p-space-lg shadow-2xl overflow-y-auto max-h-[90vh] border border-outline-variant/30 animate-in fade-in zoom-in-95 duration-150">
        <div class="flex items-center justify-between pb-space-sm mb-space-md border-b border-surface-container-high/60">
            <div class="flex items-center gap-space-sm">
                <span class="material-symbols-outlined text-primary text-[24px]">edit_note</span>
                <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Ubah Informasi Pesanan #ORD-2025-0842</h3>
            </div>
            <button class="text-secondary hover:text-on-surface cursor-pointer p-1" id="close-modal-edit" type="button">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        <form class="flex flex-col gap-space-md" onsubmit="event.preventDefault(); document.getElementById('modal-edit-order').classList.add('hidden'); alert('Perubahan tanggal dan catatan pesanan #ORD-2025-0842 berhasil disimpan.');">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                <div>
                    <label class="block font-label-sm text-label-sm text-secondary uppercase mb-1 font-semibold">Tanggal Pengambilan</label>
                    <input class="w-full p-2.5 rounded-lg bg-surface-container-low text-on-surface font-title-md text-title-md outline-none focus:bg-surface-container border border-outline-variant/20" type="date" value="2025-05-14">
                </div>
                <div>
                    <label class="block font-label-sm text-label-sm text-secondary uppercase mb-1 font-semibold">Batas Akhir Pengembalian</label>
                    <input class="w-full p-2.5 rounded-lg bg-surface-container-low text-on-surface font-title-md text-title-md outline-none focus:bg-surface-container border border-outline-variant/20" type="date" value="2025-05-19">
                </div>
            </div>
            <div>
                <label class="block font-label-sm text-label-sm text-secondary uppercase mb-1 font-semibold">Penyesuaian Jumlah Baki Sewa</label>
                <div class="flex items-center gap-space-sm">
                    <input class="w-32 p-2.5 rounded-lg bg-surface-container-low text-on-surface font-title-md text-title-md outline-none focus:bg-surface-container border border-outline-variant/20" max="20" min="1" type="number" value="8">
                    <span class="font-body-md text-body-md text-secondary">Unit Box Vitrine (Perubahan akan mengubah kalkulasi deposit)</span>
                </div>
            </div>
            <div>
                <label class="block font-label-sm text-label-sm text-secondary uppercase mb-1 font-semibold">Catatan Khusus Operasional / Permintaan Klien</label>
                <textarea class="w-full p-2.5 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md outline-none focus:bg-surface-container border border-outline-variant/20" rows="3">Pastikan ornamen pita satin champagne diikat simpul Prancis ganda. Tambahan kartu ucapan beraksen foil emas dari keluarga Raditya.</textarea>
            </div>
            <div class="flex items-center justify-end gap-space-sm pt-space-sm border-t border-surface-container-high/60">
                <button class="px-4 py-2 rounded-lg bg-surface-container text-on-surface font-title-md text-title-md hover:bg-surface-container-high cursor-pointer" id="cancel-edit" type="button">Batal</button>
                <button class="px-4 py-2 rounded-lg bg-primary text-on-primary font-title-md text-title-md hover:bg-primary-container cursor-pointer shadow-xs" type="submit">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>

<!-- INTERACTIVE MODAL 2: KIRIM WHATSAPP GATEWAY -->
<div class="hidden fixed inset-0 bg-inverse-surface/40 backdrop-blur-xs z-50 flex items-center justify-center p-4" id="modal-wa">
    <div class="bg-surface-container-lowest rounded-xl max-w-lg w-full p-space-lg shadow-2xl border border-outline-variant/30 animate-in fade-in zoom-in-95 duration-150">
        <div class="flex items-center justify-between pb-space-sm mb-space-md border-b border-surface-container-high/60">
            <div class="flex items-center gap-space-sm">
                <span class="material-symbols-outlined text-[#2d7a4d] text-[24px]">send_and_archive</span>
                <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Kirim Notifikasi WhatsApp Gateway</h3>
            </div>
            <button class="text-secondary hover:text-on-surface cursor-pointer p-1" id="close-modal-wa" type="button">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        <div class="space-y-space-md">
            <div class="p-3 bg-surface-container-low rounded-lg border border-outline-variant/20">
                <span class="font-label-sm text-label-sm text-secondary uppercase block mb-0.5 font-semibold">Nomor Tujuan Pengantin</span>
                <p class="font-title-md text-title-md text-on-surface font-semibold">+62 812-9842-1102 (Anindya Larasati)</p>
            </div>
            <div>
                <label class="font-label-sm text-label-sm text-secondary uppercase block mb-1 font-semibold" for="wa-template-select">Pilih Templat Pesan Resmi</label>
                <select class="w-full p-2.5 rounded-lg bg-surface-container-low text-on-surface font-title-md text-title-md outline-none border border-outline-variant/20 cursor-pointer" id="wa-template-select" onchange="updateWaPreview(this.value)">
                    <option value="reminder">Pengingat Jadwal Pengembalian Baki (H-1)</option>
                    <option value="ready">Konfirmasi Mahar Siap Ambil / Antar</option>
                    <option value="deposit">Konfirmasi Refund Deposit Jaminan</option>
                    <option value="custom">Pesan Kustom Bebas</option>
                </select>
            </div>
            <div>
                <span class="font-label-sm text-label-sm text-secondary uppercase block mb-1 font-semibold">Pratinjau Pesan yang Akan Dikirim</span>
                <div class="p-space-sm rounded-lg bg-surface-container font-body-md text-body-md text-on-surface border border-outline-variant/20" id="wa-preview-text">
                    Halo Kak *Anindya*, kami dari Cattaleya Atelier ingin mengingatkan batas pengembalian 8 baki sewa adalah besok *Senin, 19 Mei 2025 pukul 18:00 WIB*. Tim inspeksi studio siap menerima di atelier. Terima kasih.
                </div>
            </div>
            <div class="flex items-center justify-end gap-space-sm pt-space-xs border-t border-surface-container-high/60">
                <button class="px-4 py-2 rounded-lg bg-surface-container text-on-surface font-title-md text-title-md hover:bg-surface-container-high cursor-pointer" id="cancel-wa" type="button">Tutup</button>
                <button class="px-4 py-2 rounded-lg bg-[#2d7a4d] text-white font-title-md text-title-md hover:opacity-90 flex items-center gap-1.5 cursor-pointer shadow-xs" id="trigger-send-wa" type="button">
                    <span class="material-symbols-outlined text-[16px]">send</span>
                    <span>Kirim Pesan Sekarang</span>
                </button>
            </div>
        </div>
    </div>
</div>
