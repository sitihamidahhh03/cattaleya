@extends('layouts.admin')

@section('title', 'Ketersediaan & Jadwal Sewa Baki — Cattaleya Atelier')

@section('content')
<div class="flex flex-col w-full">
    {{-- 1. Header & Actions --}}
    @include('admin.ketersediaan-kotak.header')

    {{-- 2. Buffer Alert & Warning Ribbon --}}
    @include('admin.ketersediaan-kotak.ribbon-alert')

    {{-- 3. Filter Calendar & Range --}}
    @include('admin.ketersediaan-kotak.filter-calendar')

    {{-- 4. 4 Main Box Series Cards --}}
    @include('admin.ketersediaan-kotak.box-series-cards')

    {{-- 5. Timeline Gantt Visualizer --}}
    @include('admin.ketersediaan-kotak.timeline-gantt')
</div>

{{-- Modals & Toasts --}}
@include('admin.ketersediaan-kotak.modals')
@endsection

@push('scripts')
<script>
    // Data schedule per box type
    const scheduleDatabase = {
        'Luxury Crystal': {
            totalUsed: '6 Unit',
            remaining: '4 Unit',
            rows: [
                {
                    id: 'ORD-2025-089',
                    name: 'Sarah Nadia & Dimas',
                    venue: 'The Langham Jakarta',
                    units: '4 Unit',
                    date: '21 - 22 Okt 2025',
                    status: 'Dipersiapkan H-2',
                    statusClass: 'bg-secondary-fixed text-on-secondary-fixed'
                },
                {
                    id: 'ORD-2025-091',
                    name: 'Rizky Maulana & Amanda',
                    venue: 'Plataran Dharmawangsa',
                    units: '2 Unit',
                    date: '22 - 23 Okt 2025',
                    status: 'Terkonfirmasi',
                    statusClass: 'bg-surface-container text-on-surface'
                }
            ]
        },
        'Luxury White': {
            totalUsed: '3 Unit',
            remaining: '7 Unit',
            rows: [
                {
                    id: 'ORD-2025-094',
                    name: 'Farah & Adrian',
                    venue: 'InterContinental Pondok Indah',
                    units: '3 Unit',
                    date: '20 - 22 Okt 2025',
                    status: 'Dipersiapkan H-2',
                    statusClass: 'bg-secondary-fixed text-on-secondary-fixed'
                }
            ]
        },
        'Hidden Series': {
            totalUsed: '10 Unit',
            remaining: '0 Unit (Full Booked)',
            rows: [
                {
                    id: 'ORD-2025-088',
                    name: 'Anindya Larasati & Raditya',
                    venue: 'The Hermitage Menteng',
                    units: '5 Unit',
                    date: '20 - 23 Okt 2025',
                    status: 'Sedang Disewa (Active)',
                    statusClass: 'bg-error-container text-on-error-container'
                },
                {
                    id: 'ORD-2025-090',
                    name: 'Bramantyo & Nadia',
                    venue: 'Hotel Mulia Senayan',
                    units: '3 Unit',
                    date: '21 - 24 Okt 2025',
                    status: 'Terkunci Jadwal',
                    statusClass: 'bg-secondary-fixed text-on-secondary-fixed'
                },
                {
                    id: 'MTC-002',
                    name: 'Studio Maintenance',
                    venue: 'Bengkel Artisan Kayu',
                    units: '2 Unit',
                    date: '19 - 25 Okt 2025',
                    status: 'Restorasi Kunci',
                    statusClass: 'bg-surface-container text-secondary'
                }
            ]
        },
        'Rattan Series': {
            totalUsed: '2 Unit',
            remaining: '8 Unit',
            rows: [
                {
                    id: 'ORD-2025-095',
                    name: 'Bella & Kevin',
                    venue: 'Hutan Kota by Plataran',
                    units: '2 Unit',
                    date: '22 - 24 Okt 2025',
                    status: 'Terkonfirmasi',
                    statusClass: 'bg-surface-container text-on-surface'
                }
            ]
        }
    };

    // Schedule Modal Controller
    function showScheduleModal(boxType) {
        const modal = document.getElementById('schedule-modal');
        const title = document.getElementById('modal-box-title');
        const tableBody = document.getElementById('scheduleModalTableBody');
        const totalUsed = document.getElementById('modalTotalUsed');
        const remaining = document.getElementById('modalRemainingSlot');

        if (!modal) return;
        if (title) title.textContent = 'Daftar Penyewa: ' + boxType;

        const data = scheduleDatabase[boxType] || {
            totalUsed: '0 Unit',
            remaining: '10 Unit',
            rows: []
        };

        if (totalUsed) totalUsed.innerHTML = `Total Baki Terpakai: <strong class="text-on-surface">${data.totalUsed}</strong>`;
        if (remaining) remaining.innerText = `Sisa Slot Bersih: ${data.remaining}`;

        if (tableBody) {
            tableBody.innerHTML = '';
            if (data.rows.length === 0) {
                tableBody.innerHTML = '<tr><td colspan="5" class="py-4 text-center text-secondary">Belum ada booking aktif pada periode ini.</td></tr>';
            } else {
                data.rows.forEach(item => {
                    const tr = document.createElement('tr');
                    tr.innerHTML = `
                        <td class="py-3 font-semibold text-primary">${item.id}</td>
                        <td class="py-3">
                            <span class="font-title-md text-title-md text-on-surface block font-semibold">${item.name}</span>
                            <span class="font-label-sm text-label-sm text-secondary">${item.venue}</span>
                        </td>
                        <td class="py-3 text-center font-semibold">${item.units}</td>
                        <td class="py-3 text-secondary">${item.date}</td>
                        <td class="py-3 text-right">
                            <span class="px-2.5 py-1 rounded-full ${item.statusClass} font-label-sm text-label-sm font-semibold">${item.status}</span>
                        </td>
                    `;
                    tableBody.appendChild(tr);
                });
            }
        }

        modal.classList.remove('hidden');
    }

    function closeScheduleModal() {
        const modal = document.getElementById('schedule-modal');
        if (modal) modal.classList.add('hidden');
    }

    // Maintenance Modal Controller
    const maintenanceModal = document.getElementById('maintenance-modal');
    const btnOpenMtc = document.getElementById('btn-open-maintenance');
    const btnCloseMtc = document.getElementById('btn-close-maintenance');
    const btnCancelMtc = document.getElementById('btn-cancel-maintenance');

    if (btnOpenMtc) {
        btnOpenMtc.addEventListener('click', () => {
            if (maintenanceModal) maintenanceModal.classList.remove('hidden');
        });
    }

    function closeMtcModal() {
        if (maintenanceModal) maintenanceModal.classList.add('hidden');
    }

    if (btnCloseMtc) btnCloseMtc.addEventListener('click', closeMtcModal);
    if (btnCancelMtc) btnCancelMtc.addEventListener('click', closeMtcModal);

    function submitMaintenance() {
        const box = document.getElementById('mtc-box-type').value;
        const count = document.getElementById('mtc-unit-count').value;
        const issue = document.getElementById('mtc-issue-type').value;
        closeMtcModal();
        showToast(`Slot perawatan ${count} unit "${box}" (${issue}) berhasil dikunci pada kalender atelier.`);
    }

    // Cek Fisik Quick Trigger
    const btnCekFisik = document.getElementById('btn-cek-fisik');
    if (btnCekFisik) {
        btnCekFisik.addEventListener('click', () => {
            showToast('Sinkronisasi stok fisik studio selesai. 40 dari 40 unit terverifikasi aman.');
        });
    }

    // Quick Book Trigger
    function quickBookSlot(boxType, availableCount) {
        showToast(`Membuka form booking cepat untuk ${boxType}. Tersedia ${availableCount} unit slot aman.`);
        setTimeout(() => {
            window.location.href = "{{ route('admin.pesanan') }}";
        }, 1200);
    }

    // Preset Chips Handling
    const presets = document.querySelectorAll('.preset-btn');
    presets.forEach(btn => {
        btn.addEventListener('click', function() {
            presets.forEach(p => {
                p.classList.remove('bg-surface-container', 'text-on-surface', 'font-semibold');
                p.classList.add('bg-surface-container-low', 'text-on-surface-variant', 'font-medium');
            });
            this.classList.remove('bg-surface-container-low', 'text-on-surface-variant', 'font-medium');
            this.classList.add('bg-surface-container', 'text-on-surface', 'font-semibold');
            showToast('Periode diperbarui: ' + this.textContent.trim());
        });
    });

    // Toast Helper
    function showToast(msg) {
        const toast = document.getElementById('toast');
        const toastMsg = document.getElementById('toast-message');
        if (!toast || !toastMsg) return;
        toastMsg.textContent = msg;
        toast.classList.remove('translate-y-20', 'opacity-0');
        toast.classList.add('translate-y-0', 'opacity-100');
        setTimeout(() => {
            toast.classList.remove('translate-y-0', 'opacity-100');
            toast.classList.add('translate-y-20', 'opacity-0');
        }, 3200);
    }

    // Close modals on clicking outside
    window.addEventListener('click', (e) => {
        if (e.target === maintenanceModal) closeMtcModal();
        if (e.target === document.getElementById('schedule-modal')) closeScheduleModal();
    });
</script>
@endpush
