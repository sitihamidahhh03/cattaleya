<!-- Modal: Midtrans Payload & Resi Inspection -->
<div class="fixed inset-0 z-50 hidden items-center justify-center p-4 bg-inverse-surface/40 backdrop-blur-sm" id="payloadModal">
  <div class="relative w-full max-w-2xl rounded-2xl bg-surface-container-lowest p-6 shadow-2xl max-h-[921px] flex flex-col justify-between overflow-hidden">
    <!-- Modal Header -->
    <div class="flex items-start justify-between pb-4 border-b-0">
      <div>
        <div class="flex items-center gap-2 mb-1">
          <span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-semibold">Midtrans Callback Payload</span>
          <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
          <span class="px-2 py-0.5 rounded-full font-label-sm text-label-sm font-semibold bg-[#EFF3EE] text-[#344837]" id="modalStatusBadge">Settlement</span>
        </div>
        <h3 class="font-headline-md text-headline-md text-on-surface font-semibold" id="modalTrxTitle">TRX-2025-0142</h3>
        <p class="font-body-md text-body-md text-on-surface-variant" id="modalOrderSubtitle">Ref Order: ORD-2025-089 &bull; Pelanggan: Anisa Rahmawati</p>
      </div>
      <button class="p-1.5 rounded-lg text-secondary hover:bg-surface-container transition-colors cursor-pointer" onclick="closePayloadModal()">
        <span class="material-symbols-outlined text-[22px]">close</span>
      </button>
    </div>
    <!-- Modal Body (JSON & Resi Details) -->
    <div class="flex-1 overflow-y-auto space-y-4 py-3">
      <!-- Overview Grid -->
      <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 p-3.5 rounded-xl bg-surface-container-low font-body-md text-body-md">
        <div>
          <p class="font-label-sm text-label-sm text-on-surface-variant uppercase">Nominal</p>
          <p class="font-semibold text-on-surface text-title-md font-title-md mt-0.5" id="modalAmount">Rp 2.450.000</p>
        </div>
        <div>
          <p class="font-label-sm text-label-sm text-on-surface-variant uppercase">Kanal Bayar</p>
          <p class="font-semibold text-on-surface text-title-md font-title-md mt-0.5" id="modalChannel">BCA Virtual Account</p>
        </div>
        <div>
          <p class="font-label-sm text-label-sm text-on-surface-variant uppercase">Waktu Settlement</p>
          <p class="font-semibold text-on-surface text-title-md font-title-md mt-0.5" id="modalTime">2025-05-15 09:14:22</p>
        </div>
      </div>
      <!-- Raw Webhook JSON payload display -->
      <div>
        <div class="flex items-center justify-between mb-1.5">
          <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Raw Midtrans Webhook (JSON)</span>
          <button class="font-label-sm text-label-sm text-primary hover:underline flex items-center gap-1 font-semibold cursor-pointer" onclick="copyPayload()">
            <span class="material-symbols-outlined text-[14px]">content_copy</span>
            Salin Payload
          </button>
        </div>
        <pre class="p-3.5 rounded-xl bg-surface-container text-on-surface font-mono text-[12px] overflow-x-auto leading-relaxed max-h-48" id="jsonPayloadArea"></pre>
      </div>
      <!-- Client WhatsApp Dispatch Info -->
      <div class="p-3.5 rounded-xl bg-secondary-container/30 flex items-center justify-between gap-3">
        <div class="flex items-center gap-3 min-w-0">
          <span class="material-symbols-outlined text-primary text-[22px]">contact_phone</span>
          <div class="min-w-0">
            <p class="font-title-md text-title-md text-on-surface font-semibold truncate" id="modalClientPhone">WhatsApp: 0812-9988-2101</p>
            <p class="font-label-sm text-label-sm text-on-surface-variant truncate">Nota digital &amp; bukti bayar tersimpan di database Cattaleya</p>
          </div>
        </div>
        <button class="flex-shrink-0 px-3 py-1.5 rounded-lg bg-primary hover:bg-primary-container text-on-primary font-label-md text-label-md font-semibold transition-all cursor-pointer" id="modalWaActionBtn">
          Kirim WhatsApp
        </button>
      </div>
    </div>
    <!-- Modal Footer -->
    <div class="pt-4 flex items-center justify-end gap-2.5">
      <button class="px-4 py-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface font-title-md text-title-md transition-all cursor-pointer" onclick="closePayloadModal()">
        Tutup
      </button>
    </div>
  </div>
</div>
