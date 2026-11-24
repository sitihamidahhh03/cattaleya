<!-- STEP 1: Pelanggan -->
<div class="bg-surface-container-lowest p-6 sm:p-8 rounded-2xl shadow-sm border border-outline-variant/30 relative overflow-hidden">
    <div class="flex items-center justify-between mb-6">
        <div class="flex items-center gap-3">
            <span class="w-7 h-7 rounded-full bg-primary/10 text-primary font-label-md text-label-md flex items-center justify-center font-bold">01</span>
            <h2 class="font-title-lg text-title-lg text-on-surface font-semibold">Data Pelanggan &amp; Pengantin</h2>
        </div>
        <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Identitas Kontak</span>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
        <div class="space-y-1.5">
            <label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider block" for="cust-name">Nama Lengkap Pemesan *</label>
            <div class="relative">
                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-lg">person</span>
                <input class="w-full bg-surface-container-low text-on-surface font-body-md text-body-md pl-11 pr-4 py-3 rounded-xl focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary/40 transition-all shadow-inner" id="cust-name" placeholder="Nama lengkap sesuai KTP" type="text" value="Nabila Maharani Putri">
            </div>
        </div>
        <div class="space-y-1.5">
            <label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider block" for="cust-wa">Nomor WhatsApp Aktif *</label>
            <div class="relative">
                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-lg">chat</span>
                <input class="w-full bg-surface-container-low text-on-surface font-body-md text-body-md pl-11 pr-4 py-3 rounded-xl focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary/40 transition-all shadow-inner" id="cust-wa" placeholder="08xxxxxxxxxx" type="tel" value="081298457721">
            </div>
        </div>
    </div>
</div>
