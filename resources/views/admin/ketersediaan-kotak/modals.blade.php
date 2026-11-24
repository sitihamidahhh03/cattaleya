<!-- Modal: Jadwal Rinci Penyewa Kotak (Immutable Read-Only Dossier) -->
<div class="fixed inset-0 z-50 flex items-center justify-center bg-inverse-surface/40 backdrop-blur-xs hidden p-4" id="schedule-modal">
    <div class="bg-surface-container-lowest rounded-xl shadow-2xl max-w-2xl w-full overflow-hidden flex flex-col max-h-[870px] border border-outline-variant/30 animate-in fade-in zoom-in-95 duration-150">
        <!-- Modal Header -->
        <div class="p-space-lg bg-surface-container-low flex items-center justify-between border-b border-surface-container">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-primary-container text-on-primary-container flex items-center justify-center font-title-md">
                    <span class="material-symbols-outlined">inventory_2</span>
                </div>
                <div>
                    <h4 class="font-headline-md text-headline-md text-on-surface font-semibold" id="modal-box-title">Daftar Penyewa: Luxury Crystal</h4>
                    <p class="font-label-sm text-label-sm text-secondary">Periode Terpilih: 20 Okt s/d 24 Okt 2025</p>
                </div>
            </div>
            <button class="p-1.5 rounded-full text-secondary hover:bg-surface-container hover:text-on-surface transition-colors cursor-pointer" onclick="closeScheduleModal()" type="button">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>

        <!-- Modal Body / Table of Bookers -->
        <div class="p-space-lg overflow-y-auto flex-1">
            <table class="w-full text-left font-body-md text-body-md">
                <thead>
                    <tr class="text-secondary font-label-sm text-label-sm uppercase tracking-wider border-b border-surface-container-high font-semibold">
                        <th class="pb-2">ID Pesanan</th>
                        <th class="pb-2">Nama Pengantin</th>
                        <th class="pb-2 text-center">Jumlah Baki</th>
                        <th class="pb-2">Jadwal Acara</th>
                        <th class="pb-2 text-right">Status Baki</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-surface-container-high" id="scheduleModalTableBody">
                    <tr>
                        <td class="py-3 font-semibold text-primary">ORD-2025-089</td>
                        <td class="py-3">
                            <span class="font-title-md text-title-md text-on-surface block font-semibold">Sarah Nadia &amp; Dimas</span>
                            <span class="font-label-sm text-label-sm text-secondary">The Langham Jakarta</span>
                        </td>
                        <td class="py-3 text-center font-semibold">4 Unit</td>
                        <td class="py-3 text-secondary">21 - 22 Okt 2025</td>
                        <td class="py-3 text-right">
                            <span class="px-2.5 py-1 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-semibold">Dipersiapkan H-2</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 font-semibold text-primary">ORD-2025-091</td>
                        <td class="py-3">
                            <span class="font-title-md text-title-md text-on-surface block font-semibold">Rizky Maulana &amp; Amanda</span>
                            <span class="font-label-sm text-label-sm text-secondary">Plataran Dharmawangsa</span>
                        </td>
                        <td class="py-3 text-center font-semibold">2 Unit</td>
                        <td class="py-3 text-secondary">22 - 23 Okt 2025</td>
                        <td class="py-3 text-right">
                            <span class="px-2.5 py-1 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm font-semibold">Terkonfirmasi</span>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- Summary in modal -->
            <div class="mt-space-md p-3 rounded-lg bg-surface-container-low flex items-center justify-between border border-outline-variant/20">
                <span class="font-body-md text-body-md text-secondary" id="modalTotalUsed">Total Baki Terpakai: <strong class="text-on-surface">6 Unit</strong></span>
                <span class="font-body-md text-body-md text-primary font-semibold" id="modalRemainingSlot">Sisa Slot Bersih: 4 Unit</span>
            </div>
        </div>

        <!-- Modal Footer -->
        <div class="p-space-md bg-surface-container-low flex justify-end gap-2 border-t border-surface-container">
            <button class="px-4 py-2 rounded-xl bg-surface-container text-on-surface font-label-md text-label-md hover:bg-surface-container-high transition-colors cursor-pointer" onclick="closeScheduleModal()" type="button">
                Tutup
            </button>
        </div>
    </div>
</div>

<!-- Modal: Form Blokir Perawatan (Maintenance) -->
<div class="fixed inset-0 z-50 flex items-center justify-center bg-inverse-surface/40 backdrop-blur-xs hidden p-4" id="maintenance-modal">
    <div class="bg-surface-container-lowest rounded-xl shadow-2xl max-w-lg w-full overflow-hidden border border-outline-variant/30 animate-in fade-in zoom-in-95 duration-150">
        <div class="p-space-md bg-surface-container-low flex items-center justify-between border-b border-surface-container">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">build</span>
                <h4 class="font-headline-md text-headline-md text-on-surface font-semibold">Blokir Slot Perawatan Baki</h4>
            </div>
            <button class="p-1.5 rounded-full text-secondary hover:bg-surface-container cursor-pointer" id="btn-close-maintenance" type="button">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
        <form class="p-space-lg flex flex-col gap-space-md" id="form-maintenance" onsubmit="event.preventDefault(); submitMaintenance();">
            <div>
                <label class="font-label-sm text-label-sm uppercase tracking-wider text-secondary block mb-1 font-semibold">Pilih Jenis Kotak</label>
                <select class="w-full bg-surface-container-low rounded-xl px-3 py-2.5 font-body-md text-body-md text-on-surface focus:outline-none border border-outline-variant/20 cursor-pointer" id="mtc-box-type">
                    <option value="Luxury Crystal">Luxury Crystal (Tersedia 4)</option>
                    <option value="Luxury White">Luxury White (Tersedia 7)</option>
                    <option value="Hidden Series">Hidden Series (Slot Penuh)</option>
                    <option value="Rattan Series">Rattan Series (Tersedia 8)</option>
                </select>
            </div>
            <div class="grid grid-cols-2 gap-3">
                <div>
                    <label class="font-label-sm text-label-sm uppercase tracking-wider text-secondary block mb-1 font-semibold">Jumlah Unit</label>
                    <input class="w-full bg-surface-container-low rounded-xl px-3 py-2 font-body-md text-body-md text-on-surface focus:outline-none border border-outline-variant/20" id="mtc-unit-count" max="10" min="1" type="number" value="1">
                </div>
                <div>
                    <label class="font-label-sm text-label-sm uppercase tracking-wider text-secondary block mb-1 font-semibold">Tipe Kendala</label>
                    <select class="w-full bg-surface-container-low rounded-xl px-3 py-2 font-body-md text-body-md text-on-surface focus:outline-none border border-outline-variant/20 cursor-pointer" id="mtc-issue-type">
                        <option>Poles Akrilik Baret</option>
                        <option>Engsel / Kunci Longgar</option>
                        <option>Sterilisasi Mendalam</option>
                        <option>Penggantian Beludru</option>
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-3">
                <div>
                    <label class="font-label-sm text-label-sm uppercase tracking-wider text-secondary block mb-1 font-semibold">Mulai Perawatan</label>
                    <input class="w-full bg-surface-container-low rounded-xl px-3 py-2 font-body-md text-body-md text-on-surface focus:outline-none border border-outline-variant/20 cursor-pointer" id="mtc-start-date" type="date" value="2025-10-21">
                </div>
                <div>
                    <label class="font-label-sm text-label-sm uppercase tracking-wider text-secondary block mb-1 font-semibold">Selesai Estimasi</label>
                    <input class="w-full bg-surface-container-low rounded-xl px-3 py-2 font-body-md text-body-md text-on-surface focus:outline-none border border-outline-variant/20 cursor-pointer" id="mtc-end-date" type="date" value="2025-10-23">
                </div>
            </div>
            <div>
                <label class="font-label-sm text-label-sm uppercase tracking-wider text-secondary block mb-1 font-semibold">Catatan Artisan Studio</label>
                <textarea class="w-full bg-surface-container-low rounded-xl p-3 font-body-md text-body-md text-on-surface focus:outline-none border border-outline-variant/20" id="mtc-notes" placeholder="Contoh: Perlu penggantian rivet sudut kanan baki seri 03..." rows="2"></textarea>
            </div>
            <div class="flex items-center justify-end gap-2 pt-2 border-t border-surface-container">
                <button class="px-4 py-2 rounded-xl bg-surface-container text-on-surface font-label-md text-label-md cursor-pointer hover:bg-surface-container-high" id="btn-cancel-maintenance" type="button">Batal</button>
                <button class="px-4 py-2 rounded-xl bg-primary text-on-primary font-label-md text-label-md hover:bg-surface-tint shadow-sm font-semibold cursor-pointer" type="submit">Simpan Blokir</button>
            </div>
        </form>
    </div>
</div>

<!-- Notification Toast -->
<div class="fixed bottom-6 right-6 z-50 transform translate-y-20 opacity-0 transition-all duration-300 pointer-events-none" id="toast">
    <div class="bg-inverse-surface text-inverse-on-surface px-4 py-3 rounded-xl shadow-xl flex items-center gap-3 border border-outline-variant/20">
        <span class="material-symbols-outlined text-inverse-primary text-[20px]">check_circle</span>
        <span class="font-label-md text-label-md font-medium" id="toast-message">Aksi berhasil dilakukan.</span>
    </div>
</div>
