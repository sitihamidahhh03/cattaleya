<!-- 2. Sub-Navigation / Filter Toggle Bar -->
<div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 py-8 border-b border-outline-variant/30" x-data="{ activeTab: 'mahar' }">
    <div class="flex items-center gap-3 flex-wrap">
        <button type="button" @click="activeTab = 'mahar'; document.getElementById('mahar-section').scrollIntoView({behavior: 'smooth'})"
            :class="activeTab === 'mahar' ? 'bg-primary text-on-primary shadow-sm' : 'bg-surface-container-high text-on-surface-variant hover:text-on-surface'"
            class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full font-label-md text-label-md transition-all">
            <span class="material-symbols-outlined text-lg">inventory_2</span>
            <span>Katalog Mahar Pernikahan</span>
        </button>
        <button type="button" @click="activeTab = 'seserahan'; document.getElementById('sewa-kotak-seserahan').scrollIntoView({behavior: 'smooth'})"
            :class="activeTab === 'seserahan' ? 'bg-primary text-on-primary shadow-sm' : 'bg-surface-container-high text-on-surface-variant hover:text-on-surface'"
            class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full font-label-md text-label-md transition-all">
            <span class="material-symbols-outlined text-lg">redeem</span>
            <span>Kotak Seserahan (Baki Hantaran)</span>
        </button>
    </div>
    <div class="flex items-center gap-2 font-label-sm text-label-sm text-secondary uppercase tracking-widest">
        <span>4 Desain Pilihan Tersedia</span>
        <span class="text-outline-variant">•</span>
        <span>Akses Pesanan Mudah</span>
    </div>
</div>
