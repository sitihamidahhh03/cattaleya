<!-- Transaksi Midtrans Data Table -->
<div class="rounded-xl bg-surface-container-lowest shadow-sm overflow-hidden mb-8">
  <div class="p-4 sm:px-6 py-4 flex flex-col sm:flex-row sm:items-center justify-between gap-2 bg-surface-container-low/50">
    <div class="flex items-center gap-2">
      <span class="font-title-lg text-title-lg text-on-surface font-semibold">Daftar Transaksi Masuk</span>
      <span class="font-label-sm text-label-sm px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-semibold" id="recordCount">6 Transaksi</span>
    </div>
    <div class="flex items-center gap-2 font-label-md text-label-md text-on-surface-variant">
      <span class="material-symbols-outlined text-[16px] text-[#2d7a4d]">sensors</span>
      <span>Polling Webhook Interval: 10s</span>
    </div>
  </div>
  <!-- Table Container -->
  <div class="overflow-x-auto">
    <table class="w-full text-left border-collapse">
      <thead>
        <tr class="bg-surface-container-low text-secondary font-label-sm text-label-sm uppercase tracking-wider">
          <th class="py-3 px-4 sm:px-5 font-semibold">ID Transaksi / Pesanan</th>
          <th class="py-3 px-4 font-semibold">Pelanggan</th>
          <th class="py-3 px-4 font-semibold">Jenis Pembayaran</th>
          <th class="py-3 px-4 font-semibold text-right">Total Order</th>
          <th class="py-3 px-4 font-semibold text-right">Nominal Masuk</th>
          <th class="py-3 px-4 font-semibold text-right">Sisa Tagihan</th>
          <th class="py-3 px-4 font-semibold text-center">Status</th>
          <th class="py-3 px-4 font-semibold">Waktu &amp; Metode Midtrans</th>
          <th class="py-3 px-4 sm:px-5 font-semibold text-center">Aksi Operasional</th>
        </tr>
      </thead>
      <tbody class="divide-y-0 text-on-surface font-body-md text-body-md" id="transactionTableBody">
        <!-- Row 1 -->
        <tr class="hover:bg-surface-container-low/60 transition-colors group" data-date="2025-05-15" data-method="BCA" data-name="Anisa Rahmawati" data-order="ORD-2025-089" data-status="Settlement" data-trx="TRX-2025-0142" data-type="Penuh">
          <td class="py-4 px-4 sm:px-5">
            <span class="font-semibold text-primary block">TRX-2025-0142</span>
            <span class="font-label-sm text-label-sm text-on-surface-variant">Ref: ORD-2025-089</span>
          </td>
          <td class="py-4 px-4">
            <p class="font-semibold text-on-surface">Anisa Rahmawati</p>
            <p class="font-label-sm text-label-sm text-on-surface-variant">0812-9988-2101</p>
          </td>
          <td class="py-4 px-4">
            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">
              <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
              Pembayaran Penuh
            </span>
          </td>
          <td class="py-4 px-4 text-right font-medium">Rp 2.450.000</td>
          <td class="py-4 px-4 text-right font-semibold text-[#2d7a4d]">Rp 2.450.000</td>
          <td class="py-4 px-4 text-right font-medium text-secondary">Rp 0</td>
          <td class="py-4 px-4 text-center">
            <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#EFF3EE] text-[#344837] font-label-sm text-label-sm font-semibold">
              <span class="w-1.5 h-1.5 rounded-full bg-[#4F6A54]"></span>
              Berhasil / Settlement
            </span>
          </td>
          <td class="py-4 px-4">
            <p class="font-medium text-on-surface">15 Mei 2025, 09:14 WIB</p>
            <div class="flex items-center gap-1 mt-0.5 text-on-surface-variant font-label-sm text-label-sm">
              <span class="material-symbols-outlined text-[14px] text-secondary">account_balance</span>
              <span>Midtrans BCA VA</span>
            </div>
          </td>
          <td class="py-4 px-4 sm:px-5 text-center">
            <div class="flex items-center justify-center gap-1.5">
              <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-secondary hover:text-on-surface transition-colors cursor-pointer" onclick="openPayloadModal('TRX-2025-0142', 'ORD-2025-089', 'Anisa Rahmawati', 'Rp 2.450.000', 'BCA Virtual Account', 'Settlement', '2025-05-15 09:14:22', '0812-9988-2101')" title="Lihat Payload Midtrans &amp; Resi">
                <span class="material-symbols-outlined text-[18px]">receipt_long</span>
              </button>
              <button class="p-2 rounded-lg bg-[#EFF3EE] hover:bg-[#dce6db] text-[#344837] transition-colors cursor-pointer" onclick="triggerWhatsApp('Anisa Rahmawati', '0812-9988-2101', 'TRX-2025-0142', 'ORD-2025-089', 'Rp 2.450.000', 'Pembayaran Penuh')" title="Kirim Ulang Bukti Pembayaran ke WhatsApp Pelanggan">
                <span class="material-symbols-outlined text-[18px]">send</span>
              </button>
            </div>
          </td>
        </tr>
        <!-- Row 2 -->
        <tr class="hover:bg-surface-container-low/60 transition-colors group" data-date="2025-05-15" data-method="Mandiri" data-name="Dimas Arya &amp; Sarah" data-order="ORD-2025-088" data-status="Settlement" data-trx="TRX-2025-0141" data-type="DP">
          <td class="py-4 px-4 sm:px-5">
            <span class="font-semibold text-primary block">TRX-2025-0141</span>
            <span class="font-label-sm text-label-sm text-on-surface-variant">Ref: ORD-2025-088</span>
          </td>
          <td class="py-4 px-4">
            <p class="font-semibold text-on-surface">Dimas Arya &amp; Sarah</p>
            <p class="font-label-sm text-label-sm text-on-surface-variant">0813-4411-9022</p>
          </td>
          <td class="py-4 px-4">
            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-surface-container text-secondary font-label-sm text-label-sm font-semibold">
              <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
              DP (Uang Muka 50%)
            </span>
          </td>
          <td class="py-4 px-4 text-right font-medium">Rp 4.500.000</td>
          <td class="py-4 px-4 text-right font-semibold text-[#2d7a4d]">Rp 2.250.000</td>
          <td class="py-4 px-4 text-right font-medium text-error">Rp 2.250.000</td>
          <td class="py-4 px-4 text-center">
            <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#EFF3EE] text-[#344837] font-label-sm text-label-sm font-semibold">
              <span class="w-1.5 h-1.5 rounded-full bg-[#4F6A54]"></span>
              Berhasil / Settlement
            </span>
          </td>
          <td class="py-4 px-4">
            <p class="font-medium text-on-surface">15 Mei 2025, 08:30 WIB</p>
            <div class="flex items-center gap-1 mt-0.5 text-on-surface-variant font-label-sm text-label-sm">
              <span class="material-symbols-outlined text-[14px] text-secondary">account_balance_wallet</span>
              <span>Mandiri Bill Payment</span>
            </div>
          </td>
          <td class="py-4 px-4 sm:px-5 text-center">
            <div class="flex items-center justify-center gap-1.5">
              <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-secondary hover:text-on-surface transition-colors cursor-pointer" onclick="openPayloadModal('TRX-2025-0141', 'ORD-2025-088', 'Dimas Arya &amp; Sarah', 'Rp 2.250.000', 'Mandiri Bill', 'Settlement', '2025-05-15 08:30:10', '0813-4411-9022')" title="Lihat Payload Midtrans &amp; Resi">
                <span class="material-symbols-outlined text-[18px]">receipt_long</span>
              </button>
              <button class="p-2 rounded-lg bg-[#EFF3EE] hover:bg-[#dce6db] text-[#344837] transition-colors cursor-pointer" onclick="triggerWhatsApp('Dimas Arya &amp; Sarah', '0813-4411-9022', 'TRX-2025-0141', 'ORD-2025-088', 'Rp 2.250.000', 'DP (Uang Muka 50%)')" title="Kirim Ulang Bukti Pembayaran ke WhatsApp Pelanggan">
                <span class="material-symbols-outlined text-[18px]">send</span>
              </button>
            </div>
          </td>
        </tr>
        <!-- Row 3 -->
        <tr class="hover:bg-surface-container-low/60 transition-colors group" data-date="2025-05-15" data-method="QRIS" data-name="Farah Diba Laksmana" data-order="ORD-2025-072" data-status="Settlement" data-trx="TRX-2025-0140" data-type="Pelunasan">
          <td class="py-4 px-4 sm:px-5">
            <span class="font-semibold text-primary block">TRX-2025-0140</span>
            <span class="font-label-sm text-label-sm text-on-surface-variant">Ref: ORD-2025-072</span>
          </td>
          <td class="py-4 px-4">
            <p class="font-semibold text-on-surface">Farah Diba Laksmana</p>
            <p class="font-label-sm text-label-sm text-on-surface-variant">0821-7765-8890</p>
          </td>
          <td class="py-4 px-4">
            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm font-semibold">
              <span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
              Pelunasan Akhir
            </span>
          </td>
          <td class="py-4 px-4 text-right font-medium">Rp 3.800.000</td>
          <td class="py-4 px-4 text-right font-semibold text-[#2d7a4d]">Rp 1.900.000</td>
          <td class="py-4 px-4 text-right font-medium text-secondary">Rp 0</td>
          <td class="py-4 px-4 text-center">
            <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#EFF3EE] text-[#344837] font-label-sm text-label-sm font-semibold">
              <span class="w-1.5 h-1.5 rounded-full bg-[#4F6A54]"></span>
              Berhasil / Settlement
            </span>
          </td>
          <td class="py-4 px-4">
            <p class="font-medium text-on-surface">15 Mei 2025, 07:45 WIB</p>
            <div class="flex items-center gap-1 mt-0.5 text-on-surface-variant font-label-sm text-label-sm">
              <span class="material-symbols-outlined text-[14px] text-secondary">qr_code_scanner</span>
              <span>QRIS Instant (GoPay)</span>
            </div>
          </td>
          <td class="py-4 px-4 sm:px-5 text-center">
            <div class="flex items-center justify-center gap-1.5">
              <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-secondary hover:text-on-surface transition-colors cursor-pointer" onclick="openPayloadModal('TRX-2025-0140', 'ORD-2025-072', 'Farah Diba Laksmana', 'Rp 1.900.000', 'QRIS GoPay', 'Settlement', '2025-05-15 07:45:00', '0821-7765-8890')" title="Lihat Payload Midtrans &amp; Resi">
                <span class="material-symbols-outlined text-[18px]">receipt_long</span>
              </button>
              <button class="p-2 rounded-lg bg-[#EFF3EE] hover:bg-[#dce6db] text-[#344837] transition-colors cursor-pointer" onclick="triggerWhatsApp('Farah Diba Laksmana', '0821-7765-8890', 'TRX-2025-0140', 'ORD-2025-072', 'Rp 1.900.000', 'Pelunasan Akhir')" title="Kirim Ulang Bukti Pembayaran ke WhatsApp Pelanggan">
                <span class="material-symbols-outlined text-[18px]">send</span>
              </button>
            </div>
          </td>
        </tr>
        <!-- Row 4 -->
        <tr class="hover:bg-surface-container-low/60 transition-colors group" data-date="2025-05-15" data-method="BSI" data-name="Bagas Wicaksono" data-order="ORD-2025-092" data-status="Settlement" data-trx="TRX-2025-0139" data-type="Penuh">
          <td class="py-4 px-4 sm:px-5">
            <span class="font-semibold text-primary block">TRX-2025-0139</span>
            <span class="font-label-sm text-label-sm text-on-surface-variant">Ref: ORD-2025-092</span>
          </td>
          <td class="py-4 px-4">
            <p class="font-semibold text-on-surface">Bagas Wicaksono</p>
            <p class="font-label-sm text-label-sm text-on-surface-variant">0857-1122-3450</p>
          </td>
          <td class="py-4 px-4">
            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">
              <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
              Pembayaran Penuh
            </span>
          </td>
          <td class="py-4 px-4 text-right font-medium">Rp 2.300.000</td>
          <td class="py-4 px-4 text-right font-semibold text-[#2d7a4d]">Rp 2.300.000</td>
          <td class="py-4 px-4 text-right font-medium text-secondary">Rp 0</td>
          <td class="py-4 px-4 text-center">
            <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#EFF3EE] text-[#344837] font-label-sm text-label-sm font-semibold">
              <span class="w-1.5 h-1.5 rounded-full bg-[#4F6A54]"></span>
              Berhasil / Settlement
            </span>
          </td>
          <td class="py-4 px-4">
            <p class="font-medium text-on-surface">15 Mei 2025, 06:10 WIB</p>
            <div class="flex items-center gap-1 mt-0.5 text-on-surface-variant font-label-sm text-label-sm">
              <span class="material-symbols-outlined text-[14px] text-secondary">account_balance</span>
              <span>Midtrans BSI VA</span>
            </div>
          </td>
          <td class="py-4 px-4 sm:px-5 text-center">
            <div class="flex items-center justify-center gap-1.5">
              <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-secondary hover:text-on-surface transition-colors cursor-pointer" onclick="openPayloadModal('TRX-2025-0139', 'ORD-2025-092', 'Bagas Wicaksono', 'Rp 2.300.000', 'BSI Virtual Account', 'Settlement', '2025-05-15 06:10:45', '0857-1122-3450')" title="Lihat Payload Midtrans &amp; Resi">
                <span class="material-symbols-outlined text-[18px]">receipt_long</span>
              </button>
              <button class="p-2 rounded-lg bg-[#EFF3EE] hover:bg-[#dce6db] text-[#344837] transition-colors cursor-pointer" onclick="triggerWhatsApp('Bagas Wicaksono', '0857-1122-3450', 'TRX-2025-0139', 'ORD-2025-092', 'Rp 2.300.000', 'Pembayaran Penuh')" title="Kirim Ulang Bukti Pembayaran ke WhatsApp Pelanggan">
                <span class="material-symbols-outlined text-[18px]">send</span>
              </button>
            </div>
          </td>
        </tr>
        <!-- Row 5 -->
        <tr class="hover:bg-surface-container-low/60 transition-colors group" data-date="2025-05-14" data-method="BCA" data-name="Jessica Pricilla" data-order="ORD-2025-095" data-status="Pending" data-trx="TRX-2025-0138" data-type="DP">
          <td class="py-4 px-4 sm:px-5">
            <span class="font-semibold text-primary block">TRX-2025-0138</span>
            <span class="font-label-sm text-label-sm text-on-surface-variant">Ref: ORD-2025-095</span>
          </td>
          <td class="py-4 px-4">
            <p class="font-semibold text-on-surface">Jessica Pricilla</p>
            <p class="font-label-sm text-label-sm text-on-surface-variant">0819-3321-7600</p>
          </td>
          <td class="py-4 px-4">
            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-surface-container text-secondary font-label-sm text-label-sm font-semibold">
              <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
              DP (Uang Muka 50%)
            </span>
          </td>
          <td class="py-4 px-4 text-right font-medium">Rp 5.200.000</td>
          <td class="py-4 px-4 text-right font-semibold text-on-surface-variant">Rp 0</td>
          <td class="py-4 px-4 text-right font-medium text-error">Rp 2.600.000</td>
          <td class="py-4 px-4 text-center">
            <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#EFF4F7] text-[#455765] font-label-sm text-label-sm font-semibold">
              <span class="w-1.5 h-1.5 rounded-full bg-[#455765] animate-pulse"></span>
              Menunggu Pembayaran
            </span>
          </td>
          <td class="py-4 px-4">
            <p class="font-medium text-on-surface">14 Mei 2025, 23:05 WIB</p>
            <div class="flex items-center gap-1 mt-0.5 text-on-surface-variant font-label-sm text-label-sm">
              <span class="material-symbols-outlined text-[14px] text-secondary">account_balance</span>
              <span>BCA VA (Batas: 23 Jam)</span>
            </div>
          </td>
          <td class="py-4 px-4 sm:px-5 text-center">
            <div class="flex items-center justify-center gap-1.5">
              <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-secondary hover:text-on-surface transition-colors cursor-pointer" onclick="openPayloadModal('TRX-2025-0138', 'ORD-2025-095', 'Jessica Pricilla', 'Rp 2.600.000 (Tagihan DP)', 'BCA Virtual Account', 'Pending', '2025-05-14 23:05:12', '0819-3321-7600')" title="Lihat Payload Midtrans &amp; Resi">
                <span class="material-symbols-outlined text-[18px]">receipt_long</span>
              </button>
              <button class="p-2 rounded-lg bg-surface-container hover:bg-secondary-container text-secondary transition-colors cursor-pointer" onclick="triggerWhatsAppReminder('Jessica Pricilla', '0819-3321-7600', 'ORD-2025-095', 'Rp 2.600.000')" title="Kirim Pengingat Pembayaran via WhatsApp">
                <span class="material-symbols-outlined text-[18px]">notifications_active</span>
              </button>
            </div>
          </td>
        </tr>
        <!-- Row 6 -->
        <tr class="hover:bg-surface-container-low/60 transition-colors group" data-date="2025-05-13" data-method="QRIS" data-name="Reza Hendrawan" data-order="ORD-2025-081" data-status="Expired" data-trx="TRX-2025-0137" data-type="Penuh">
          <td class="py-4 px-4 sm:px-5">
            <span class="font-semibold text-primary block">TRX-2025-0137</span>
            <span class="font-label-sm text-label-sm text-on-surface-variant">Ref: ORD-2025-081</span>
          </td>
          <td class="py-4 px-4">
            <p class="font-semibold text-on-surface">Reza Hendrawan</p>
            <p class="font-label-sm text-label-sm text-on-surface-variant">0811-2090-4433</p>
          </td>
          <td class="py-4 px-4">
            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm font-semibold">
              <span class="w-1.5 h-1.5 rounded-full bg-outline"></span>
              Pembayaran Penuh
            </span>
          </td>
          <td class="py-4 px-4 text-right font-medium">Rp 1.750.000</td>
          <td class="py-4 px-4 text-right font-semibold text-on-surface-variant">Rp 0</td>
          <td class="py-4 px-4 text-right font-medium text-error">Rp 1.750.000</td>
          <td class="py-4 px-4 text-center">
            <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-error-container text-on-error-container font-label-sm text-label-sm font-semibold">
              <span class="w-1.5 h-1.5 rounded-full bg-error"></span>
              Kedaluwarsa (Expired)
            </span>
          </td>
          <td class="py-4 px-4">
            <p class="font-medium text-on-surface">13 Mei 2025, 14:00 WIB</p>
            <div class="flex items-center gap-1 mt-0.5 text-on-surface-variant font-label-sm text-label-sm">
              <span class="material-symbols-outlined text-[14px] text-secondary">cancel</span>
              <span>QRIS (Timeout 15 Menit)</span>
            </div>
          </td>
          <td class="py-4 px-4 sm:px-5 text-center">
            <div class="flex items-center justify-center gap-1.5">
              <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-secondary hover:text-on-surface transition-colors cursor-pointer" onclick="openPayloadModal('TRX-2025-0137', 'ORD-2025-081', 'Reza Hendrawan', 'Rp 1.750.000', 'QRIS Instant', 'Expired', '2025-05-13 14:15:00', '0811-2090-4433')" title="Lihat Payload Midtrans &amp; Resi">
                <span class="material-symbols-outlined text-[18px]">receipt_long</span>
              </button>
              <button class="p-2 rounded-lg bg-surface-container/40 text-outline-variant cursor-not-allowed" disabled="" title="Transaksi Expired">
                <span class="material-symbols-outlined text-[18px]">block</span>
              </button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- Empty State (hidden by default) -->
  <div class="hidden py-12 px-4 text-center" id="noResults">
    <div class="w-14 h-14 mx-auto rounded-full bg-surface-container flex items-center justify-center text-secondary mb-3">
      <span class="material-symbols-outlined text-[28px]">search_off</span>
    </div>
    <p class="font-title-md text-title-md text-on-surface font-semibold">Tidak Ada Transaksi yang Cocok</p>
    <p class="font-body-md text-body-md text-on-surface-variant mt-1 max-w-sm mx-auto">
      Silakan periksa kembali kata kunci pencarian, filter status, atau rentang tanggal transaksi yang Anda pilih.
    </p>
  </div>
  <!-- Footer of Table -->
  <div class="p-4 sm:px-6 bg-surface-container-low/30 flex flex-col sm:flex-row items-center justify-between gap-3 text-secondary font-label-md text-label-md">
    <div class="flex items-center gap-1.5">
      <span class="material-symbols-outlined text-[18px] text-primary">info</span>
      <span>Data tersinkron otomatis secara real-time dari Midtrans Core API Callback</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="text-on-surface-variant">Menampilkan 1-6 dari 6 entri transaksi</span>
    </div>
  </div>
</div>

<!-- Bottom Section: Recent WhatsApp Dispatch Logs & Operational Vitrine Showcase -->
<div class="grid grid-cols-1 xl:grid-cols-3 gap-6 mb-8">
  <!-- Log Notifikasi WhatsApp Gateway -->
  <div class="xl:col-span-2 rounded-xl bg-surface-container-lowest p-5 shadow-sm flex flex-col justify-between">
    <div>
      <div class="flex items-center justify-between mb-4">
        <div class="flex items-center gap-2">
          <span class="w-2 h-2 rounded-full bg-[#2d7a4d]"></span>
          <h2 class="font-title-lg text-title-lg text-on-surface font-semibold">Log Notifikasi WhatsApp Gateway Otomatis</h2>
        </div>
        <span class="font-label-sm text-label-sm px-2.5 py-1 rounded-full bg-[#EFF3EE] text-[#344837] font-semibold">
          Gateway Online
        </span>
      </div>
      <p class="font-body-md text-body-md text-on-surface-variant mb-4">
        Pesan konfirmasi pembayaran otomatis terkirim via WhatsApp resmi Cattaleya dalam hitungan detik setelah webhook Midtrans diterima:
      </p>
      <!-- Message Log List -->
      <div class="space-y-3 font-body-md text-body-md">
        <div class="p-3.5 rounded-lg bg-surface-container-low flex items-start justify-between gap-3">
          <div class="flex items-start gap-3">
            <div class="w-8 h-8 rounded-full bg-[#EFF3EE] text-[#344837] flex items-center justify-center flex-shrink-0 mt-0.5">
              <span class="material-symbols-outlined text-[16px]">done_all</span>
            </div>
            <div class="min-w-0">
              <div class="flex items-center gap-2">
                <span class="font-semibold text-on-surface">Anisa Rahmawati</span>
                <span class="text-on-surface-variant text-label-sm font-label-sm">(0812-9988-2101)</span>
              </div>
              <p class="text-on-surface-variant text-label-md font-label-md mt-0.5 truncate">
                "Halo Kak Anisa, pembayaran penuh untuk ORD-2025-089 (Rp 2.450.000) telah kami terima. Tim atelier mulai memproses pesanan..."
              </p>
            </div>
          </div>
          <div class="flex flex-col items-end flex-shrink-0">
            <span class="font-label-sm text-label-sm text-[#2d7a4d] font-semibold">Terkirim (0.8s)</span>
            <span class="font-label-sm text-label-sm text-on-surface-variant">09:14 WIB</span>
          </div>
        </div>
        <div class="p-3.5 rounded-lg bg-surface-container-low flex items-start justify-between gap-3">
          <div class="flex items-start gap-3">
            <div class="w-8 h-8 rounded-full bg-[#EFF3EE] text-[#344837] flex items-center justify-center flex-shrink-0 mt-0.5">
              <span class="material-symbols-outlined text-[16px]">done_all</span>
            </div>
            <div class="min-w-0">
              <div class="flex items-center gap-2">
                <span class="font-semibold text-on-surface">Dimas Arya &amp; Sarah</span>
                <span class="text-on-surface-variant text-label-sm font-label-sm">(0813-4411-9022)</span>
              </div>
              <p class="text-on-surface-variant text-label-md font-label-md mt-0.5 truncate">
                "Halo Kak Dimas &amp; Sarah, uang muka DP 50% sebesar Rp 2.250.000 telah terverifikasi. Jadwal pengerjaan mahar vitrine telah dikonfirmasi..."
              </p>
            </div>
          </div>
          <div class="flex flex-col items-end flex-shrink-0">
            <span class="font-label-sm text-label-sm text-[#2d7a4d] font-semibold">Terkirim (1.1s)</span>
            <span class="font-label-sm text-label-sm text-on-surface-variant">08:30 WIB</span>
          </div>
        </div>
        <div class="p-3.5 rounded-lg bg-surface-container-low flex items-start justify-between gap-3">
          <div class="flex items-start gap-3">
            <div class="w-8 h-8 rounded-full bg-[#EFF3EE] text-[#344837] flex items-center justify-center flex-shrink-0 mt-0.5">
              <span class="material-symbols-outlined text-[16px]">done_all</span>
            </div>
            <div class="min-w-0">
              <div class="flex items-center gap-2">
                <span class="font-semibold text-on-surface">Farah Diba Laksmana</span>
                <span class="text-on-surface-variant text-label-sm font-label-sm">(0821-7765-8890)</span>
              </div>
              <p class="text-on-surface-variant text-label-md font-label-md mt-0.5 truncate">
                "Nota Pelunasan Seserahan: Pembayaran sisa Rp 1.900.000 berhasil via QRIS. Seluruh 7 boks seserahan siap diambil sesuai jadwal..."
              </p>
            </div>
          </div>
          <div class="flex flex-col items-end flex-shrink-0">
            <span class="font-label-sm text-label-sm text-[#2d7a4d] font-semibold">Terkirim (0.9s)</span>
            <span class="font-label-sm text-label-sm text-on-surface-variant">07:45 WIB</span>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-4 pt-3 flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm border-t-0">
      <span>Pengirim: Cattaleya Official (+62 822-1000-8899)</span>
      <span class="font-semibold text-primary">Status API: 100% Delivery Rate</span>
    </div>
  </div>
  <!-- Atelier Craft Context Card -->
  <div class="rounded-xl bg-surface-container-lowest p-5 shadow-sm flex flex-col justify-between">
    <div>
      <div class="flex items-center justify-between mb-3">
        <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Pesanan Terbaru Terbayar</span>
        <span class="material-symbols-outlined text-primary text-[20px]">diamond</span>
      </div>
      <h3 class="font-headline-md text-headline-md text-on-surface">Koleksi Vitrine &amp; Akrilik</h3>
      <p class="font-body-md text-body-md text-on-surface-variant mt-1 mb-4">
        Setiap transaksi sukses langsung mengunci stok kotak akrilik dan slot pengerjaan master artisan.
      </p>
      <!-- Preview Image of Atelier Seserahan -->
      <div class="relative w-full h-44 rounded-lg overflow-hidden mb-3 bg-surface-container">
        <img class="w-full h-full object-cover" data-alt="Close up luxurious Indonesian wedding dowry seserahan tray with gold trimming, elegant calligraphy, preserved white orchids and jasmine, nestled inside a clear glass vitrine on fine linen fabric, illuminated by soft golden warm studio lighting in champagne and muted gold tones." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFLMQOQomPuEYoT7GWLbh7EP71KcMDsQMvpSnzk-dKajl58Zdli00rcZc3TdXm9TGqX8LTKFQ5Y8KwiHId4y_m0kVqdwa6G7CGYIfssyTSoa79aa0-FDoqTK84LgvUPhCeaHgWHLKfNEAqFZl1Ezg0aWts5KLAtmzmAOlFOO9zLHEymZj6qSYRsFNcONyPZmM-vu55A5FW5kTYKUbMQd4r_VL3WLJAP9fjrNldXmcruwzvrAtnNeqL">
        <div class="absolute bottom-2 left-2 right-2 p-2 rounded bg-surface/90 backdrop-blur-md flex items-center justify-between">
          <span class="font-label-sm text-label-sm font-semibold text-on-surface">ORD-2025-089 (Anisa)</span>
          <span class="font-label-sm text-label-sm text-[#2d7a4d] font-semibold">Lunas &amp; Dikunci</span>
        </div>
      </div>
    </div>
    <div class="p-3 rounded-lg bg-surface-container-low flex items-center gap-3">
      <span class="material-symbols-outlined text-primary text-[20px]">verified</span>
      <div class="min-w-0">
        <p class="font-title-md text-title-md text-on-surface font-semibold truncate">Garansi Kunci Inventaris</p>
        <p class="font-label-sm text-label-sm text-on-surface-variant truncate">Stok 8 kotak akrilik diproteksi otomatis</p>
      </div>
    </div>
  </div>
</div>
