@extends('layouts.owner')

@section('title', 'Laporan Pemesanan & Pembayaran — Cattaleya Atelier Owner')

@push('styles')
<style>
  @media print {
    aside, header, #exportDropdownBtn, button, #toastBox {
      display: none !important;
    }
    .pl-72 {
      padding-left: 0 !important;
    }
    main {
      padding: 0 !important;
      margin: 0 !important;
      background: white !important;
    }
    body {
      background: white !important;
      color: black !important;
    }
  }
</style>
@endpush

@section('content')
<div class="flex flex-col w-full gap-space-lg">
    {{-- 1. Top Header & Owner Document Actions --}}
    @include('owner.laporan.header')

    {{-- 2. Filter & Period Configuration Panel --}}
    @include('owner.laporan.filter')

    {{-- 3. Bento Grid of 8 Aggregated KPI Metrics --}}
    @include('owner.laporan.kpi-metrics')

    {{-- 4. Studio Craft Visual & Financial Proportion Bar --}}
    @include('owner.laporan.chart-summary')

    {{-- 5. Periodic Recap Data Table --}}
    @include('owner.laporan.table')
</div>
@endsection

@push('scripts')
<script>
  (function() {
    const chips = document.querySelectorAll('.period-chip');
    const startDateInput = document.getElementById('startDate');
    const endDateInput = document.getElementById('endDate');
    const activePeriodLabel = document.getElementById('activePeriodLabel');
    const tableAuditPeriod = document.getElementById('tableAuditPeriod');
    const applyFilterBtn = document.getElementById('applyFilterBtn');

    chips.forEach(chip => {
      chip.addEventListener('click', () => {
        chips.forEach(c => {
          c.classList.remove('bg-secondary-container', 'text-on-secondary-container', 'font-semibold');
          c.classList.add('bg-surface-container-high', 'text-on-surface-variant');
        });
        chip.classList.add('bg-secondary-container', 'text-on-secondary-container', 'font-semibold');
        chip.classList.remove('bg-surface-container-high', 'text-on-surface-variant');
        
        const period = chip.getAttribute('data-period');
        const start = chip.getAttribute('data-start');
        const end = chip.getAttribute('data-end');

        if (startDateInput && start) startDateInput.value = start;
        if (endDateInput && end) endDateInput.value = end;
        if (activePeriodLabel) activePeriodLabel.textContent = period;
        if (tableAuditPeriod) tableAuditPeriod.textContent = `Periode Audit: ${period}`;

        triggerToast(`Periode diganti ke: ${period}`);
      });
    });

    if (applyFilterBtn) {
      applyFilterBtn.addEventListener('click', () => {
        const start = startDateInput ? startDateInput.value : '';
        const end = endDateInput ? endDateInput.value : '';
        if (tableAuditPeriod) {
          tableAuditPeriod.textContent = `Periode Audit: ${start} s/d ${end}`;
        }
        triggerToast(`Memperbarui Rekapitulasi Data Periode ${start} s/d ${end}`);
      });
    }

    const exportBtn = document.getElementById('exportDropdownBtn');
    const exportMenu = document.getElementById('exportMenu');

    if (exportBtn && exportMenu) {
      exportBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        exportMenu.classList.toggle('hidden');
      });

      document.addEventListener('click', (e) => {
        if (!exportMenu.contains(e.target)) {
          exportMenu.classList.add('hidden');
        }
      });
    }

    window.triggerToast = function(message) {
      const toast = document.getElementById('toastBox');
      const toastMsg = document.getElementById('toastMsg');
      if (!toast || !toastMsg) return;

      if (exportMenu) exportMenu.classList.add('hidden');

      toastMsg.textContent = message;
      toast.classList.remove('translate-y-16', 'opacity-0');
      toast.classList.add('translate-y-0', 'opacity-100');

      setTimeout(() => {
        toast.classList.add('translate-y-16', 'opacity-0');
        toast.classList.remove('translate-y-0', 'opacity-100');
      }, 2800);
    };
  })();
</script>
@endpush
