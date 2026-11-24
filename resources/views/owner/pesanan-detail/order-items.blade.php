<!-- CARD 2: INFORMASI PESANAN & RINCIAN ITEM -->
<section class="rounded-xl bg-surface-container-lowest p-space-xl shadow-sm flex flex-col gap-space-lg">
  <div class="flex items-center justify-between pb-space-sm">
    <div class="flex items-center gap-space-sm">
      <span class="material-symbols-outlined text-primary text-xl">inventory_2</span>
      <h2 class="font-title-lg text-title-lg text-on-surface">Informasi &amp; Spesifikasi Pesanan</h2>
    </div>
    <span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-outline uppercase tracking-wider">
      <span class="material-symbols-outlined text-xs">lock</span> Read-Only
    </span>
  </div>
  <!-- Schedule Matrix -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-space-sm p-space-md rounded-xl bg-surface-container-low">
    <div class="flex flex-col gap-1 p-space-sm bg-surface-container-lowest rounded-lg shadow-sm">
      <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline flex items-center gap-1">
        <span class="material-symbols-outlined text-xs text-primary">event_upcoming</span>
        Mulai Sewa
      </span>
      <span class="font-title-md text-title-md text-on-surface font-semibold">20 Okt 2025</span>
      <span class="font-label-sm text-label-sm text-secondary">Pukul 10:00 WIB</span>
    </div>
    <div class="flex flex-col gap-1 p-space-sm bg-secondary-container/50 rounded-lg shadow-sm">
      <span class="font-label-sm text-label-sm uppercase tracking-wider text-on-secondary-container flex items-center gap-1">
        <span class="material-symbols-outlined text-xs text-primary">favorite</span>
        Hari H Acara
      </span>
      <span class="font-title-md text-title-md text-on-secondary-container font-semibold">22 Okt 2025</span>
      <span class="font-label-sm text-label-sm text-on-secondary-variant">Akad &amp; Resepsi</span>
    </div>
    <div class="flex flex-col gap-1 p-space-sm bg-surface-container-lowest rounded-lg shadow-sm">
      <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline flex items-center gap-1">
        <span class="material-symbols-outlined text-xs text-error">assignment_return</span>
        Batas Kembali
      </span>
      <span class="font-title-md text-title-md text-on-surface font-semibold">24 Okt 2025</span>
      <span class="font-label-sm text-label-sm text-outline">Maks. 18:00 WIB</span>
    </div>
  </div>
  <!-- Detail Item Sewa Table / Ledger -->
  <div class="flex flex-col gap-space-sm">
    <div class="flex items-center justify-between">
      <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Rincian Paket &amp; Vitrine Terdaftar</span>
      <span class="font-label-sm text-label-sm text-secondary">Total: 10 Item Seserahan</span>
    </div>
    <div class="overflow-x-auto">
      <table class="w-full text-left">
        <thead>
          <tr class="bg-surface-container-low text-outline font-label-sm text-label-sm uppercase tracking-wider">
            <th class="py-space-sm px-space-md rounded-l-lg">Deskripsi Item &amp; Komposisi</th>
            <th class="py-space-sm px-space-md text-center">Jml</th>
            <th class="py-space-sm px-space-md text-right">Tarif Sewa</th>
            <th class="py-space-sm px-space-md text-right rounded-r-lg">Subtotal</th>
          </tr>
        </thead>
        <tbody class="divide-y-0 text-on-surface">
          <!-- Item 1 -->
          <tr class="hover:bg-surface-container-low/40 transition-colors">
            <td class="py-space-md px-space-md">
              <div class="flex items-start gap-space-sm">
                <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-primary shrink-0 mt-0.5">
                  <span class="material-symbols-outlined text-base">crop_square</span>
                </div>
                <div class="flex flex-col">
                  <span class="font-title-md text-title-md text-on-surface font-medium">Kotak Mika Akrilik Premium (L)</span>
                  <span class="font-body-md text-body-md text-outline">Alas Kayu Jati Ukir &bull; Perhiasan, Skincare, Tas Mewah, Sepatu Pengantin</span>
                </div>
              </div>
            </td>
            <td class="py-space-md px-space-md text-center font-title-md text-title-md text-on-surface">4</td>
            <td class="py-space-md px-space-md text-right font-body-md text-body-md text-outline">Rp 180.000</td>
            <td class="py-space-md px-space-md text-right font-title-md text-title-md text-on-surface font-semibold">Rp 720.000</td>
          </tr>
          <!-- Item 2 -->
          <tr class="hover:bg-surface-container-low/40 transition-colors">
            <td class="py-space-md px-space-md">
              <div class="flex items-start gap-space-sm">
                <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-primary shrink-0 mt-0.5">
                  <span class="material-symbols-outlined text-base">crop_free</span>
                </div>
                <div class="flex flex-col">
                  <span class="font-title-md text-title-md text-on-surface font-medium">Kotak Mika Akrilik Premium (M)</span>
                  <span class="font-body-md text-body-md text-outline">Alas Kayu Jati Ukir &bull; Alat Ibadah, Kain Songket Tenun, Perlengkapan Pria</span>
                </div>
              </div>
            </td>
            <td class="py-space-md px-space-md text-center font-title-md text-title-md text-on-surface">4</td>
            <td class="py-space-md px-space-md text-right font-body-md text-body-md text-outline">Rp 150.000</td>
            <td class="py-space-md px-space-md text-right font-title-md text-title-md text-on-surface font-semibold">Rp 600.000</td>
          </tr>
          <!-- Item 3 -->
          <tr class="hover:bg-surface-container-low/40 transition-colors">
            <td class="py-space-md px-space-md">
              <div class="flex items-start gap-space-sm">
                <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-primary shrink-0 mt-0.5">
                  <span class="material-symbols-outlined text-base">bed</span>
                </div>
                <div class="flex flex-col">
                  <span class="font-title-md text-title-md text-on-surface font-medium">Kotak Seserahan Spesial Bedcover</span>
                  <span class="font-body-md text-body-md text-outline">Dimensi Jumbo Extra Clear Vitrine dengan penguat rotan halus</span>
                </div>
              </div>
            </td>
            <td class="py-space-md px-space-md text-center font-title-md text-title-md text-on-surface">2</td>
            <td class="py-space-md px-space-md text-right font-body-md text-body-md text-outline">Rp 140.000</td>
            <td class="py-space-md px-space-md text-right font-title-md text-title-md text-on-surface font-semibold">Rp 280.000</td>
          </tr>
          <!-- Item 4 (Include) -->
          <tr class="hover:bg-surface-container-low/40 transition-colors bg-surface-container-low/20">
            <td class="py-space-md px-space-md">
              <div class="flex items-start gap-space-sm">
                <div class="w-8 h-8 rounded-lg bg-secondary-container flex items-center justify-center text-primary shrink-0 mt-0.5">
                  <span class="material-symbols-outlined text-base">local_florist</span>
                </div>
                <div class="flex flex-col">
                  <span class="font-title-md text-title-md text-on-surface font-medium">Dekorasi Bunga Orkid Cattaleya &amp; Pita Satin</span>
                  <span class="font-body-md text-body-md text-outline">Kombinasi Preserved Orchid &amp; Double Silk Satin Ribbon (Champagne Gold)</span>
                </div>
              </div>
            </td>
            <td class="py-space-md px-space-md text-center font-title-md text-title-md text-on-surface">10 Set</td>
            <td class="py-space-md px-space-md text-right font-body-md text-body-md text-outline">-</td>
            <td class="py-space-md px-space-md text-right font-title-md text-title-md text-primary font-semibold">Include Paket</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- Artisanal Craft Visual Preview Mockups -->
  <div class="flex flex-col gap-space-xs pt-space-xs">
    <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Dokumentasi Finishing Sebelum Serah Terima</span>
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-space-sm">
      <div class="relative rounded-lg overflow-hidden group shadow-sm">
        <img class="w-full h-24 object-cover group-hover:scale-105 transition-transform duration-300" data-alt="Close up photography of Indonesian wedding dowry seserahan tray with polished teak wood base, crystal clear acrylic glass vitrine, champagne gold ribbon, and preserved cream phalaenopsis orchids on soft warm silk fabric" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCWFNRdG4F_HbrO8GlgRnoI4geZ3lay11-MVEr_Stk0s63oCOJFhVa6a_ttYZBlU4LwenZavEAOVED6ZhRCz7tHruqTsLxFp-FLv9yfeq31bnmzsnJJKnR3-6gsnWpNZufq9Hy7UiLCJgJ-t410RJCaZrOUo8Yq-RudAhxdSQUJUy16fOxhb6QqAjPNd56QABxsq6JNJlfg51VSYBNiUnPEi3I6U8F1kYUUCxn8mGPFOQFddAqgKsmn">
        <span class="absolute bottom-1 left-1 px-1.5 py-0.5 rounded bg-surface/90 text-[10px] font-medium text-on-surface">Tray L - Perhiasan</span>
      </div>
      <div class="relative rounded-lg overflow-hidden group shadow-sm">
        <img class="w-full h-24 object-cover group-hover:scale-105 transition-transform duration-300" data-alt="High angle shot of bespoke wedding gift arrangement in modern acrylic vitrine displaying bridal skincare cosmetics on champagne satin ribbon surrounded by delicate white cattleya flowers and warm gold accents" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD4kHrsJh5ODQP6rHjBb98RSqI7J6Qtv-Qc75To3EVHuRHjWCaI32W49Q6ndde-rxtLg-G_dIbGMX2qhqmFPKczo7AfvnViEi5QDR1YAHunmHzaMpdydz8x2nS-YznXjVv5cq5f2RxmcaLVRn0txfipw_cFIs5O6lxVykn7ZjcmPVoZdLylGILAevNKj1oOcOg3OANvqoi3YgPixoklWjA3lJWMk3K0AcSh4fxWDb-mA_V9dE2t9EVH">
        <span class="absolute bottom-1 left-1 px-1.5 py-0.5 rounded bg-surface/90 text-[10px] font-medium text-on-surface">Tray L - Skincare</span>
      </div>
      <div class="relative rounded-lg overflow-hidden group shadow-sm">
        <img class="w-full h-24 object-cover group-hover:scale-105 transition-transform duration-300" data-alt="Artisanal Indonesian traditional songket fabric folded elegantly inside acrylic dowry seserahan box with hand-carved wood trim and subtle warm bronze light reflections" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA2CiGDju_a3kfbStWYslOQQpRZ519bqUm-DqEQuHZ5df7_ReIBTfoWS5DtO9AT08AcGOkq6KZkq0wxM9j4P-P38aOr4wsP7OeYngfcpXxlFUoERgHcMM2i_YGSTDM2oOZGetiEin54v0MoVOTSDctF32cA4A-ircxeCQg9aEKxcdnlkpuGbKB-nFWAo5I8e2C4F1yqzi1VmfepXHhwmu0SieUrSejDdZucnmB1qaQ6Rp_-AWiu6LqQ">
        <span class="absolute bottom-1 left-1 px-1.5 py-0.5 rounded bg-surface/90 text-[10px] font-medium text-on-surface">Tray M - Songket</span>
      </div>
      <div class="relative rounded-lg overflow-hidden group shadow-sm">
        <img class="w-full h-24 object-cover group-hover:scale-105 transition-transform duration-300" data-alt="Bespoke luxury bedcover seserahan arrangement packed inside oversized transparent vitrine tied with lustrous champagne gold silk ribbon in an upscale Jakarta wedding salon" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgx8akOrE1eRNhc1yea8hkDBBjzDmk8L7HWxVyclc_OhRXZMj2GEAfprTg9YARInYe3cMX4v2ftGi9Pel5B_6xnNri62chtKHHYyMVGn-ReM4n7xUplDf7YQ5PeTv3y6bbA3GaoysUu02NsZCEdFpyR-va51sejvYIDg482AlcZMzODKyEIVM_koFS17HgWcBAjD2dUpBTtcczrTNaLs2AlSXw8_XzTNHpNgxRYb_3tp4tqVu4IBal">
        <span class="absolute bottom-1 left-1 px-1.5 py-0.5 rounded bg-surface/90 text-[10px] font-medium text-on-surface">Tray Jumbo - Bedcover</span>
      </div>
    </div>
  </div>
</section>
