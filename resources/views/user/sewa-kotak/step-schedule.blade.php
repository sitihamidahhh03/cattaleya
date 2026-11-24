<!-- STEP 2: Jadwal & Periode Sewa -->
<div class="bg-surface-container-lowest p-6 sm:p-8 rounded-2xl shadow-sm border border-outline-variant/30 space-y-6">
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-3">
            <span class="w-7 h-7 rounded-full bg-primary/10 text-primary font-label-md text-label-md flex items-center justify-center font-bold">02</span>
            <h2 class="font-title-lg text-title-lg text-on-surface font-semibold">Jadwal Acara &amp; Alokasi Waktu</h2>
        </div>
        <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Siklus 5 Hari</span>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
        <div class="space-y-1.5 sm:col-span-2">
            <label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider flex items-center justify-between" for="wedding-date">
                <span>Tanggal Acara Pernikahan (H) *</span>
                <span class="text-primary font-normal text-label-sm capitalize">Rekomendasi booking minimal H-14</span>
            </label>
            <div class="relative">
                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-primary text-xl">event</span>
                <input class="w-full bg-surface-container-low text-on-surface font-title-md text-title-md pl-11 pr-4 py-3 rounded-xl focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary/40 transition-all shadow-inner cursor-pointer" id="wedding-date" type="date" value="2025-10-22">
            </div>
        </div>

        <!-- Automated Timeline Cards -->
        <div class="p-4 rounded-xl bg-surface-container-low space-y-2 border border-outline-variant/20">
            <div class="flex items-center justify-between">
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Pengambilan (H-2)</span>
                <span class="material-symbols-outlined text-secondary text-base">storefront</span>
            </div>
            <div class="font-title-md text-title-md text-on-surface font-bold" id="calc-pickup-date">20 Oktober 2025</div>
            <div class="text-xs text-on-surface-variant">Studio Menteng: 10:00 - 15:00 WIB</div>
        </div>
        <div class="p-4 rounded-xl bg-surface-container-low space-y-2 border border-outline-variant/20">
            <div class="flex items-center justify-between">
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Pengembalian (H+2)</span>
                <span class="material-symbols-outlined text-secondary text-base">assignment_return</span>
            </div>
            <div class="font-title-md text-title-md text-on-surface font-bold" id="calc-return-date">24 Oktober 2025</div>
            <div class="text-xs text-on-surface-variant">Maksimal pukul 17:00 WIB</div>
        </div>
    </div>

    <!-- Jam Pengambilan Dropdown -->
    <div class="space-y-1.5">
        <label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider block" for="pickup-time-slot">Slot Waktu Pengambilan di Studio *</label>
        <div class="relative">
            <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-lg">schedule</span>
            <select class="w-full bg-surface-container-low text-on-surface font-body-md text-body-md pl-11 pr-10 py-3 rounded-xl appearance-none focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary/40 transition-all cursor-pointer" id="pickup-time-slot">
                <option selected="">Sesi 1: 10:00 - 12:00 WIB (Studio Cattaleya Menteng)</option>
                <option>Sesi 2: 13:00 - 15:00 WIB (Studio Cattaleya Menteng)</option>
                <option>Sesi 3: 15:30 - 17:30 WIB (Studio Cattaleya Menteng)</option>
            </select>
            <span class="material-symbols-outlined absolute right-3.5 top-1/2 -translate-y-1/2 text-outline pointer-events-none text-xl">expand_more</span>
        </div>
    </div>
</div>
