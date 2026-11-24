<!-- MODAL: KELOLA / UBAH STATUS OPERASIONAL -->
<div class="fixed inset-0 z-50 bg-inverse-surface/40 backdrop-blur-xs flex items-center justify-center p-4 hidden" id="modalStatusOperasional">
    <div class="bg-surface-container-lowest rounded-xl max-w-lg w-full p-space-lg shadow-xl relative animate-in fade-in zoom-in-95 duration-150 border border-outline-variant/30">
        <div class="flex items-center justify-between pb-3 border-b border-surface-container-high">
            <div class="flex items-center gap-2">
                <span class="p-1.5 rounded-lg bg-primary text-on-primary material-symbols-outlined text-[20px]">tune</span>
                <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Kelola Status Operasional</h3>
            </div>
            <button class="text-secondary hover:text-on-surface p-1 rounded-lg cursor-pointer" onclick="closeStatusModal()" type="button">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        <div class="mt-space-sm space-y-4">
            <div class="p-3 bg-surface-container-low rounded-lg border border-outline-variant/20">
                <p class="font-label-sm text-label-sm text-secondary uppercase font-semibold">Pesanan yang dipilih</p>
                <p class="font-title-lg text-title-lg font-bold text-primary" id="modalOrderId">#ORD-2025-089</p>
                <p class="font-body-md text-body-md text-on-surface font-medium" id="modalClientName">Anindya Putri &amp; Dimas</p>
            </div>
            <div>
                <label class="block font-label-md text-label-md font-semibold text-secondary mb-1">Pilih Status Operasional Baru</label>
                <select class="w-full bg-surface-container-high rounded-lg px-3 py-2 text-on-surface font-body-md text-body-md focus:outline-hidden" id="selectStatusPesanan">
                    <option value="Menunggu Pembayaran">Menunggu Pembayaran (Menunggu DP)</option>
                    <option value="Sedang Diproses">Sedang Diproses (Florist &amp; Kurasi)</option>
                    <option value="Siap Diambil">Siap Diambil / Siap Dikirim ke Pemesan</option>
                    <option value="Sedang Disewa">Sedang Disewa (Baki dibawa pengantin)</option>
                    <option value="Selesai">Selesai (Baki dikembalikan utuh / Mahar diserahterimakan)</option>
                </select>
            </div>
            <div>
                <label class="block font-label-md text-label-md font-semibold text-secondary mb-1">Catatan Operasional / Log Admin</label>
                <textarea class="w-full bg-surface-container-high rounded-lg p-2.5 text-on-surface font-body-md text-body-md focus:outline-hidden" placeholder="Contoh: Rangkaian bunga peach selesai, baki crystal nomor 04-11 disiapkan..." rows="2"></textarea>
            </div>
            <div class="p-3 bg-surface-container rounded-lg flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-[20px] text-[#2d7a4d]">chat</span>
                    <div>
                        <p class="font-title-md text-title-md text-on-surface font-semibold">Kirim Notifikasi WhatsApp Otomatis</p>
                        <p class="font-label-sm text-label-sm text-on-surface-variant">Update status langsung dikirim ke WhatsApp pengantin</p>
                    </div>
                </div>
                <input checked="" class="w-4 h-4 text-primary rounded accent-primary cursor-pointer" type="checkbox">
            </div>
            <div class="flex items-center justify-end gap-2 pt-2">
                <button class="px-4 py-2 rounded-lg bg-surface-container text-on-surface font-title-md text-title-md hover:bg-surface-container-high cursor-pointer" onclick="closeStatusModal()" type="button">Batal</button>
                <button class="px-4 py-2 rounded-lg bg-primary text-on-primary font-title-md text-title-md font-semibold hover:bg-primary-container shadow-xs cursor-pointer" onclick="simpanStatusOperasional()" type="button">Simpan Perubahan Status</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL: + TAMBAH PESANAN BARU -->
<div class="fixed inset-0 z-50 bg-inverse-surface/40 backdrop-blur-xs flex items-center justify-center p-4 hidden" id="modalTambahPesanan">
    <div class="bg-surface-container-lowest rounded-xl max-w-xl w-full p-space-lg shadow-xl relative max-h-[90vh] overflow-y-auto border border-outline-variant/30">
        <div class="flex items-center justify-between pb-3 border-b border-surface-container-high">
            <div class="flex items-center gap-2">
                <span class="p-1.5 rounded-lg bg-primary text-on-primary material-symbols-outlined text-[20px]">add_task</span>
                <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Formulir Pesanan Baru (Admin)</h3>
            </div>
            <button class="text-secondary hover:text-on-surface p-1 rounded-lg cursor-pointer" onclick="document.getElementById('modalTambahPesanan').classList.add('hidden')" type="button">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        <form class="mt-space-sm space-y-4" onsubmit="event.preventDefault(); alert('Pesanan baru berhasil dibuat dan invoice Midtrans telah di-generate.'); document.getElementById('modalTambahPesanan').classList.add('hidden');">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-sm">
                <div>
                    <label class="block font-label-md text-label-md font-semibold text-secondary mb-1">Nama Pasangan Pengantin</label>
                    <input class="w-full bg-surface-container-high rounded-lg px-3 py-2 text-on-surface font-body-md text-body-md focus:outline-hidden" placeholder="Contoh: Rian &amp; Safira" required="" type="text">
                </div>
                <div>
                    <label class="block font-label-md text-label-md font-semibold text-secondary mb-1">Nomor WhatsApp Aktif</label>
                    <input class="w-full bg-surface-container-high rounded-lg px-3 py-2 text-on-surface font-body-md text-body-md focus:outline-hidden" placeholder="08xxxxxxxxxx" required="" type="tel">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-sm">
                <div>
                    <label class="block font-label-md text-label-md font-semibold text-secondary mb-1">Kategori Pesanan</label>
                    <select class="w-full bg-surface-container-high rounded-lg px-3 py-2 text-on-surface font-body-md text-body-md focus:outline-hidden">
                        <option>Mahar Frame Custom</option>
                        <option>Mahar Koin / Logam Mulia</option>
                        <option>Sewa Kotak Seserahan (Baki)</option>
                        <option>Paket Lengkap Seserahan + Mahar</option>
                    </select>
                </div>
                <div>
                    <label class="block font-label-md text-label-md font-semibold text-secondary mb-1">Tanggal Acara Pernikahan</label>
                    <input class="w-full bg-surface-container-high rounded-lg px-3 py-2 text-on-surface font-body-md text-body-md focus:outline-hidden" required="" type="date">
                </div>
            </div>
            <div>
                <label class="block font-label-md text-label-md font-semibold text-secondary mb-1">Pilihan Seri Kotak (Bila Sewa)</label>
                <select class="w-full bg-surface-container-high rounded-lg px-3 py-2 text-on-surface font-body-md text-body-md focus:outline-hidden">
                    <option>Luxury Crystal Series (Tersedia: 4 baki)</option>
                    <option>Luxury White Series (Tersedia: 7 baki)</option>
                    <option>Hidden Wooden Series (Tersedia: 2 baki - Terbatas!)</option>
                    <option>Rattan Bohemian Series (Tersedia: 8 baki)</option>
                    <option>Tidak menggunakan kotak sewa (Hanya Mahar)</option>
                </select>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-sm">
                <div>
                    <label class="block font-label-md text-label-md font-semibold text-secondary mb-1">Total Biaya Pesanan (Rp)</label>
                    <input class="w-full bg-surface-container-high rounded-lg px-3 py-2 text-on-surface font-body-md text-body-md focus:outline-hidden" placeholder="Contoh: 2500000" required="" type="number">
                </div>
                <div>
                    <label class="block font-label-md text-label-md font-semibold text-secondary mb-1">Metode Tagihan Awal</label>
                    <select class="w-full bg-surface-container-high rounded-lg px-3 py-2 text-on-surface font-body-md text-body-md focus:outline-hidden">
                        <option>Generate Midtrans Payment Link (DP 50%)</option>
                        <option>Generate Midtrans Full Payment (100%)</option>
                        <option>Tunai / Cash Studio (Verifikasi Manual)</option>
                    </select>
                </div>
            </div>
            <div class="flex items-center justify-end gap-2 pt-3 border-t border-surface-container-high">
                <button class="px-4 py-2 rounded-lg bg-surface-container text-on-surface font-title-md text-title-md hover:bg-surface-container-high cursor-pointer" onclick="document.getElementById('modalTambahPesanan').classList.add('hidden')" type="button">Batal</button>
                <button class="px-5 py-2 rounded-lg bg-primary text-on-primary font-title-md text-title-md font-semibold hover:bg-primary-container shadow-xs cursor-pointer" type="submit">Simpan &amp; Buat Tagihan</button>
            </div>
        </form>
    </div>
</div>

<!-- MODAL: CEK JADWAL PENGEMBALIAN KOTAK HARI INI -->
<div class="fixed inset-0 z-50 bg-inverse-surface/40 backdrop-blur-xs flex items-center justify-center p-4 hidden" id="modalJadwalKembali">
    <div class="bg-surface-container-lowest rounded-xl max-w-xl w-full p-space-lg shadow-xl relative max-h-[90vh] overflow-y-auto border border-outline-variant/30">
        <div class="flex items-center justify-between pb-3 border-b border-surface-container-high">
            <div class="flex items-center gap-2">
                <span class="p-1.5 rounded-lg bg-primary text-on-primary material-symbols-outlined text-[20px]">calendar_month</span>
                <div>
                    <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Jadwal Pengembalian Kotak Hari Ini</h3>
                    <p class="font-label-sm text-label-sm text-secondary">{{ \Carbon\Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y') }}</p>
                </div>
            </div>
            <button class="text-secondary hover:text-on-surface p-1 rounded-lg cursor-pointer" onclick="document.getElementById('modalJadwalKembali').classList.add('hidden')" type="button">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        <div class="mt-space-sm space-y-3">
            <div class="p-3 bg-surface-container-low rounded-lg flex items-center justify-between border border-outline-variant/20">
                <div>
                    <p class="font-title-md text-title-md font-semibold text-on-surface">Bima Arya &amp; Clarissa (#ORD-2025-086)</p>
                    <p class="font-label-sm text-label-sm text-secondary">6 Baki Hidden Box Jati • Janji Kembali: 16.00 WIB</p>
                </div>
                <span class="px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">Sore Ini</span>
            </div>
            <div class="p-3 bg-surface-container-low rounded-lg flex items-center justify-between border border-outline-variant/20">
                <div>
                    <p class="font-title-md text-title-md font-semibold text-on-surface">Dian Permata &amp; Fajar (#ORD-2025-081)</p>
                    <p class="font-label-sm text-label-sm text-secondary">8 Baki Luxury White • Janji Kembali: 19.30 WIB</p>
                </div>
                <span class="px-2.5 py-1 rounded-full bg-surface-container text-primary font-label-sm text-label-sm font-semibold">Malam Ini</span>
            </div>
            <div class="p-3 bg-surface-container rounded-lg flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary text-[18px]">verified_user</span>
                    <span class="font-label-sm text-label-sm text-on-surface">Prosedur: Periksa kelengkapan akrilik dan pita satin saat baki diterima.</span>
                </div>
            </div>
            <div class="flex items-center justify-end gap-2 pt-2 border-t border-surface-container-high">
                <button class="px-4 py-2 rounded-lg bg-surface-container text-on-surface font-title-md text-title-md hover:bg-surface-container-high cursor-pointer" onclick="document.getElementById('modalJadwalKembali').classList.add('hidden')" type="button">Tutup</button>
                <a class="px-4 py-2 rounded-lg bg-primary text-on-primary font-title-md text-title-md font-semibold hover:bg-primary-container" href="{{ Route::has('admin.ketersediaan-kotak') ? route('admin.ketersediaan-kotak') : '#' }}">Buka Modul Ketersediaan Kotak</a>
            </div>
        </div>
    </div>
</div>

<!-- INSPECTION DRAWER: DETAIL PESANAN -->
<div class="fixed inset-y-0 right-0 w-full max-w-md bg-surface-container-lowest shadow-2xl z-50 p-space-lg flex flex-col justify-between transform translate-x-full transition-transform duration-200 ease-in-out border-l border-outline-variant/30" id="drawerDetailPesanan">
    <div>
        <div class="flex items-center justify-between pb-3 border-b border-surface-container-high">
            <div class="flex items-center gap-2">
                <span class="p-1.5 rounded-lg bg-primary text-on-primary material-symbols-outlined text-[18px]">info</span>
                <span class="font-title-lg text-title-lg font-semibold text-on-surface">Detail Pesanan Operasional</span>
            </div>
            <button class="p-1 rounded-lg text-secondary hover:text-on-surface cursor-pointer" onclick="closeDetailDrawer()" type="button">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        <div class="mt-4 space-y-4">
            <div class="p-3 bg-surface-container-low rounded-lg border border-outline-variant/20">
                <span class="font-label-sm text-label-sm uppercase font-semibold text-secondary">Nomor ID Registrasi</span>
                <p class="font-headline-md text-headline-md font-bold text-primary" id="drawerId">#ORD-2025-089</p>
                <p class="font-title-md text-title-md text-on-surface font-semibold mt-1" id="drawerClient">Anindya Putri &amp; Dimas</p>
            </div>
            <div class="space-y-2.5">
                <div>
                    <span class="font-label-sm text-label-sm text-secondary">Spesifikasi Item / Dekorasi</span>
                    <p class="font-body-md text-body-md text-on-surface font-medium" id="drawerSpec">Mahar Frame Akrilik + Preserved Flora</p>
                </div>
                <div>
                    <span class="font-label-sm text-label-sm text-secondary">Tanggal Acara Pelaksanaan</span>
                    <p class="font-body-md text-body-md text-on-surface font-medium" id="drawerEventDate">24 Mei 2025</p>
                </div>
                <div>
                    <span class="font-label-sm text-label-sm text-secondary">Total Nilai Pesanan</span>
                    <p class="font-title-lg text-title-lg text-primary font-bold" id="drawerPrice">Rp 2.450.000</p>
                </div>
                <div>
                    <span class="font-label-sm text-label-sm text-secondary">Log Progres Terakhir</span>
                    <p class="font-body-md text-body-md text-on-surface-variant bg-surface-container p-2.5 rounded-lg border border-outline-variant/20" id="drawerStatusLog">Sedang dipersiapkan florist atelier</p>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-4 flex flex-col gap-2 border-t border-surface-container-high">
        <button class="w-full py-2.5 rounded-lg bg-surface-container-high text-on-surface font-title-md text-title-md font-semibold hover:bg-surface-variant flex items-center justify-center gap-2 cursor-pointer" onclick="alert('Membuka file cetak invoice &amp; surat jalan...');" type="button">
            <span class="material-symbols-outlined text-[18px]">print</span>
            <span>Cetak Invoice &amp; Tanda Terima Baki</span>
        </button>
        <button class="w-full py-2 rounded-lg bg-surface-container text-secondary font-title-md text-title-md hover:bg-surface-container-high cursor-pointer" onclick="closeDetailDrawer()" type="button">
            Tutup Panel
        </button>
    </div>
</div>

<!-- TOAST NOTIFIKASI INTERAKTIF -->
<div class="fixed bottom-6 right-6 z-50 bg-inverse-surface text-inverse-on-surface px-4 py-3 rounded-lg shadow-xl flex items-center gap-2 hidden animate-in slide-in-from-bottom duration-150" id="toastOperasional">
    <span class="material-symbols-outlined text-[#2d7a4d] text-[20px]">check_circle</span>
    <span class="font-body-md text-body-md" id="toastMsg">Status berhasil diperbarui!</span>
</div>

@push('scripts')
<script>
    function openStatusModal(orderId, clientName, currentStatus) {
        document.getElementById('modalOrderId').innerText = orderId;
        document.getElementById('modalClientName').innerText = clientName;
        document.getElementById('selectStatusPesanan').value = currentStatus;
        document.getElementById('modalStatusOperasional').classList.remove('hidden');
    }

    function closeStatusModal() {
        document.getElementById('modalStatusOperasional').classList.add('hidden');
    }

    function simpanStatusOperasional() {
        const orderId = document.getElementById('modalOrderId').innerText;
        const newStatus = document.getElementById('selectStatusPesanan').value;
        closeStatusModal();
        showToast('Status ' + orderId + ' berhasil diubah menjadi: ' + newStatus + ' & notifikasi WA terkirim otomatis.');
    }

    function openDetailDrawer(orderId, client, spec, price, eventDate, log) {
        document.getElementById('drawerId').innerText = orderId;
        document.getElementById('drawerClient').innerText = client;
        document.getElementById('drawerSpec').innerText = spec;
        document.getElementById('drawerPrice').innerText = price;
        document.getElementById('drawerEventDate').innerText = eventDate;
        document.getElementById('drawerStatusLog').innerText = log;
        document.getElementById('drawerDetailPesanan').classList.remove('translate-x-full');
    }

    function closeDetailDrawer() {
        document.getElementById('drawerDetailPesanan').classList.add('translate-x-full');
    }

    function kirimWhatsAppUpdate(clientName, phone, orderId, status) {
        showToast('Pesan WhatsApp Gateway berhasil dikirimkan ke ' + clientName + ' (' + phone + ') untuk pesanan ' + orderId);
    }

    function showToast(message) {
        const toast = document.getElementById('toastOperasional');
        document.getElementById('toastMsg').innerText = message;
        toast.classList.remove('hidden');
        setTimeout(() => {
            toast.classList.add('hidden');
        }, 4000);
    }

    // Filter Tabs Handler
    document.addEventListener('DOMContentLoaded', function() {
        const filterTabs = document.querySelectorAll('.filter-tab');
        const rows = document.querySelectorAll('.order-row');

        filterTabs.forEach(tab => {
            tab.addEventListener('click', function() {
                filterTabs.forEach(t => {
                    t.classList.remove('bg-surface-container-lowest', 'text-primary', 'shadow-xs', 'font-semibold');
                    t.classList.add('text-secondary');
                });
                this.classList.add('bg-surface-container-lowest', 'text-primary', 'shadow-xs', 'font-semibold');
                this.classList.remove('text-secondary');

                const filter = this.dataset.filter;
                rows.forEach(row => {
                    if (filter === 'all' || row.dataset.statusCategory === filter) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
@endpush
