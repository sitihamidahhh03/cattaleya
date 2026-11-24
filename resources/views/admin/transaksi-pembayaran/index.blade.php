@extends('layouts.admin')

@section('title', 'Monitoring Transaksi & Pembayaran Midtrans — Cattaleya Atelier')

@section('content')
<div class="flex flex-col w-full">
  @include('admin.transaksi-pembayaran.header')
  @include('admin.transaksi-pembayaran.stats')
  @include('admin.transaksi-pembayaran.filter')
  @include('admin.transaksi-pembayaran.table')
</div>

@include('admin.transaksi-pembayaran.modal-payload')
@endsection

@push('scripts')
<script>
    const searchInput = document.getElementById('searchKeyword');
    const filterType = document.getElementById('filterType');
    const filterMethod = document.getElementById('filterMethod');
    const filterStatus = document.getElementById('filterStatus');
    const filterDate = document.getElementById('filterDate');
    const resetBtn = document.getElementById('resetFilters');
    const tableBody = document.getElementById('transactionTableBody');
    const rows = tableBody.querySelectorAll('tr');
    const recordCountBadge = document.getElementById('recordCount');
    const noResultsDiv = document.getElementById('noResults');

    function applyFilters() {
      const keyword = (searchInput.value || '').toLowerCase().trim();
      const typeVal = filterType.value;
      const methodVal = filterMethod.value;
      const statusVal = filterStatus.value;
      const dateVal = filterDate.value;

      let visibleCount = 0;

      rows.forEach(row => {
        const trx = (row.getAttribute('data-trx') || '').toLowerCase();
        const ord = (row.getAttribute('data-order') || '').toLowerCase();
        const name = (row.getAttribute('data-name') || '').toLowerCase();
        const rowType = row.getAttribute('data-type');
        const rowMethod = row.getAttribute('data-method');
        const rowStatus = row.getAttribute('data-status');
        const rowDate = row.getAttribute('data-date');

        const matchesKeyword = !keyword || trx.includes(keyword) || ord.includes(keyword) || name.includes(keyword);
        const matchesType = typeVal === 'all' || rowType === typeVal;
        const matchesMethod = methodVal === 'all' || rowMethod === methodVal;
        const matchesStatus = statusVal === 'all' || rowStatus === statusVal;
        const matchesDate = !dateVal || rowDate === dateVal;

        if (matchesKeyword && matchesType && matchesMethod && matchesStatus && matchesDate) {
          row.style.display = '';
          visibleCount++;
        } else {
          row.style.display = 'none';
        }
      });

      recordCountBadge.textContent = visibleCount + ' Transaksi';

      if (visibleCount === 0) {
        noResultsDiv.classList.remove('hidden');
      } else {
        noResultsDiv.classList.add('hidden');
      }
    }

    searchInput.addEventListener('input', applyFilters);
    filterType.addEventListener('change', applyFilters);
    filterMethod.addEventListener('change', applyFilters);
    filterStatus.addEventListener('change', applyFilters);
    filterDate.addEventListener('change', applyFilters);

    resetBtn.addEventListener('click', () => {
      searchInput.value = '';
      filterType.value = 'all';
      filterMethod.value = 'all';
      filterStatus.value = 'all';
      filterDate.value = '';
      applyFilters();
      showToast('Filter telah direset ke bawaan.', 'refresh');
    });

    // Toast Notification Utility
    function showToast(message, icon = 'check_circle') {
      const toast = document.getElementById('toastNotification');
      const toastMessage = document.getElementById('toastMessage');
      const toastIcon = document.getElementById('toastIcon');

      toastMessage.textContent = message;
      toastIcon.textContent = icon;
      toast.classList.remove('translate-y-24', 'opacity-0', 'pointer-events-none');
      toast.classList.add('translate-y-0', 'opacity-100');

      setTimeout(() => {
        toast.classList.add('translate-y-24', 'opacity-0', 'pointer-events-none');
        toast.classList.remove('translate-y-0', 'opacity-100');
      }, 3500);
    }

    // Manual Sync Button Microinteraction
    const syncBtn = document.getElementById('btnManualSync');
    const syncIcon = document.getElementById('syncIcon');
    syncBtn.addEventListener('click', () => {
      syncIcon.classList.add('rotate-[720deg]');
      syncBtn.disabled = true;
      syncBtn.classList.add('opacity-75');

      setTimeout(() => {
        syncIcon.classList.remove('rotate-[720deg]');
        syncBtn.disabled = false;
        syncBtn.classList.remove('opacity-75');
        showToast('Sinkronisasi selesai: 6 status transaksi terverifikasi mutakhir.');
      }, 1200);
    });

    // Export Log Button
    document.getElementById('btnExportLog').addEventListener('click', () => {
      showToast('Mengunduh file Excel Log Transaksi Midtrans...', 'download');
    });

    // WhatsApp Dispatch Action Triggers
    window.triggerWhatsApp = function(name, phone, trx, ord, amount, type) {
      showToast(`Mengirim ulang invoice ${trx} ke WhatsApp ${name} (${phone})...`, 'send');
      setTimeout(() => {
        showToast(`Nota resmi ${ord} berhasil terkirim ke WhatsApp ${phone}!`, 'done_all');
      }, 1000);
    };

    window.triggerWhatsAppReminder = function(name, phone, ord, amount) {
      showToast(`Mengirim pesan tagihan & instruksi VA ke WhatsApp ${name}...`, 'schedule_send');
      setTimeout(() => {
        showToast(`Pengingat pembayaran ${ord} (${amount}) sukses dikirim via WhatsApp.`, 'done_all');
      }, 1000);
    };

    // Modal Details Logic
    const payloadModal = document.getElementById('payloadModal');
    let currentPayloadText = '';

    window.openPayloadModal = function(trx, ord, name, amount, channel, status, time, phone) {
      document.getElementById('modalTrxTitle').textContent = trx;
      document.getElementById('modalOrderSubtitle').textContent = `Ref Order: ${ord} • Pelanggan: ${name}`;
      document.getElementById('modalAmount').textContent = amount;
      document.getElementById('modalChannel').textContent = channel;
      document.getElementById('modalTime').textContent = time;
      document.getElementById('modalClientPhone').textContent = `WhatsApp: ${phone}`;

      const badge = document.getElementById('modalStatusBadge');
      badge.textContent = status;
      if (status === 'Settlement') {
        badge.className = 'px-2 py-0.5 rounded-full font-label-sm text-label-sm font-semibold bg-[#EFF3EE] text-[#344837]';
      } else if (status === 'Pending') {
        badge.className = 'px-2 py-0.5 rounded-full font-label-sm text-label-sm font-semibold bg-[#EFF4F7] text-[#455765]';
      } else {
        badge.className = 'px-2 py-0.5 rounded-full font-label-sm text-label-sm font-semibold bg-error-container text-on-error-container';
      }

      // Generate realistic Midtrans Webhook JSON mock
      const mockJson = {
        transaction_time: time,
        transaction_status: status.toLowerCase(),
        transaction_id: "midtrans-" + trx.toLowerCase(),
        status_message: "midtrans payment notification",
        status_code: status === 'Settlement' ? "200" : (status === 'Pending' ? "201" : "407"),
        signature_key: "e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855",
        payment_type: channel.toLowerCase().replace(/ /g, '_'),
        order_id: ord,
        gross_amount: amount.replace(/[^0-9]/g, '') + ".00",
        fraud_status: "accept",
        currency: "IDR",
        settlement_time: status === 'Settlement' ? time : null,
        cattaleya_meta: {
          customer_name: name,
          customer_whatsapp: phone,
          studio_branch: "Cattaleya Atelier Utama",
          notification_gateway: "WhatsApp Official Live"
        }
      };

      currentPayloadText = JSON.stringify(mockJson, null, 2);
      document.getElementById('jsonPayloadArea').textContent = currentPayloadText;

      const waBtn = document.getElementById('modalWaActionBtn');
      waBtn.onclick = function() {
        triggerWhatsApp(name, phone, trx, ord, amount, status);
      };

      payloadModal.classList.remove('hidden');
      payloadModal.classList.add('flex');
    };

    window.closePayloadModal = function() {
      payloadModal.classList.add('hidden');
      payloadModal.classList.remove('flex');
    };

    window.copyPayload = function() {
      if (currentPayloadText) {
        navigator.clipboard.writeText(currentPayloadText).then(() => {
          showToast('Payload JSON berhasil disalin ke clipboard!', 'content_copy');
        }).catch(() => {
          showToast('Gagal menyalin, periksa izin browser.', 'error');
        });
      }
    };

    // Close modal on click outside content
    payloadModal.addEventListener('click', (e) => {
      if (e.target === payloadModal) {
        closePayloadModal();
      }
    });
</script>
@endpush
