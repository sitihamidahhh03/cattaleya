@extends('layouts.owner')

@section('title', 'Monitoring Transaksi & Pembayaran — Cattaleya Atelier Owner')

@section('content')
<div class="flex flex-col w-full gap-space-lg">
  @include('owner.transaksi-pembayaran.header')
  @include('owner.transaksi-pembayaran.kpi-cards')
  @include('owner.transaksi-pembayaran.cashflow-distribution')
  @include('owner.transaksi-pembayaran.filter')
  @include('owner.transaksi-pembayaran.table')
  @include('owner.transaksi-pembayaran.audit-notice')
</div>
@endsection

@push('scripts')
<script>
(function initTransactionsTable() {
    const searchInput = document.getElementById('search-input');
    const typeButtons = document.querySelectorAll('.filter-type-btn');
    const statusSelect = document.getElementById('filter-status');
    const resetBtn = document.getElementById('btn-reset-filter');
    const rows = document.querySelectorAll('.tx-row');
    const emptyMsg = document.getElementById('no-records-msg');
    const exportBtn = document.getElementById('btn-export-recap');

    let currentType = 'all';
    let currentStatus = 'all';
    let currentSearch = '';

    function filterData() {
      let visibleCount = 0;

      rows.forEach(row => {
        const rowType = row.getAttribute('data-type') || '';
        const rowStatus = row.getAttribute('data-status') || '';
        const rowSearchData = row.getAttribute('data-search') || '';

        const matchesType = (currentType === 'all') || (rowType.toLowerCase() === currentType.toLowerCase());
        const matchesStatus = (currentStatus === 'all') || (rowStatus.toLowerCase() === currentStatus.toLowerCase());
        const matchesSearch = !currentSearch || rowSearchData.includes(currentSearch.toLowerCase());

        if (matchesType && matchesStatus && matchesSearch) {
          row.style.display = '';
          visibleCount++;
        } else {
          row.style.display = 'none';
        }
      });

      if (emptyMsg) {
        emptyMsg.style.display = visibleCount === 0 ? 'flex' : 'none';
      }
    }

    typeButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        typeButtons.forEach(b => {
          b.classList.remove('bg-surface-container-lowest', 'text-on-surface', 'font-semibold', 'shadow-xs');
          b.classList.add('text-on-surface-variant');
        });
        btn.classList.remove('text-on-surface-variant');
        btn.classList.add('bg-surface-container-lowest', 'text-on-surface', 'font-semibold', 'shadow-xs');
        currentType = btn.getAttribute('data-type');
        filterData();
      });
    });

    if (statusSelect) {
      statusSelect.addEventListener('change', (e) => {
        currentStatus = e.target.value;
        filterData();
      });
    }

    if (searchInput) {
      searchInput.addEventListener('input', (e) => {
        currentSearch = e.target.value.trim();
        filterData();
      });
    }

    if (resetBtn) {
      resetBtn.addEventListener('click', () => {
        currentType = 'all';
        currentStatus = 'all';
        currentSearch = '';
        if (searchInput) searchInput.value = '';
        if (statusSelect) statusSelect.value = 'all';
        typeButtons.forEach((b, idx) => {
          if (idx === 0) {
            b.classList.add('bg-surface-container-lowest', 'text-on-surface', 'font-semibold', 'shadow-xs');
            b.classList.remove('text-on-surface-variant');
          } else {
            b.classList.remove('bg-surface-container-lowest', 'text-on-surface', 'font-semibold', 'shadow-xs');
            b.classList.add('text-on-surface-variant');
          }
        });
        filterData();
      });
    }

    if (exportBtn) {
      exportBtn.addEventListener('click', () => {
        const originalHtml = exportBtn.innerHTML;
        exportBtn.innerHTML = '<span class="material-symbols-outlined text-lg animate-spin">refresh</span><span class="font-label-md text-label-md">Menyiapkan...</span>';
        setTimeout(() => {
          exportBtn.innerHTML = originalHtml;
          alert('Laporan Ledger Transaksi telah diunduh dalam format PDF Terenkripsi.');
        }, 800);
      });
    }
})();
</script>
@endpush
