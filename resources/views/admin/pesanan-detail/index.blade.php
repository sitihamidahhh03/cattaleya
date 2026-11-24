@extends('layouts.admin')

@section('title', 'Dossier Operasional #ORD-2025-0842 — Cattaleya')

@section('content')
<div class="flex flex-col w-full">
    <div class="w-full max-w-[1536px] mx-auto py-space-md space-y-space-lg">

        {{-- 1. Top Breadcrumb & Executive Command Bar --}}
        @include('admin.pesanan-detail.header')

        <!-- MAIN 2-COLUMN DOSSIER GRID -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg">

            <!-- LEFT COLUMN (7 Cols): Pelanggan, Spesifikasi Seserahan, Seri Kotak, Timeline Acara -->
            <div class="lg:col-span-7 flex flex-col gap-space-lg">
                {{-- CARD 1: Data Pelanggan & Alamat Serah Terima --}}
                @include('admin.pesanan-detail.customer-card')

                {{-- CARD 2: Spesifikasi Mahar & Kotak Seserahan --}}
                @include('admin.pesanan-detail.order-specs')

                {{-- CARD 3: Timeline Perjalanan Tanggal Acara & Sewa --}}
                @include('admin.pesanan-detail.timeline-schedule')
            </div>

            <!-- RIGHT COLUMN (5 Cols): Midtrans Financials, WhatsApp Log, Audit Trail -->
            <div class="lg:col-span-5 flex flex-col gap-space-lg">
                {{-- CARD 4: Informasi Pembayaran Midtrans Gateway --}}
                @include('admin.pesanan-detail.payment-info')

                {{-- CARD 5: Riwayat Notifikasi WhatsApp Gateway --}}
                @include('admin.pesanan-detail.whatsapp-log')

                {{-- CARD 6: Riwayat Perubahan Status (Timeline Audit Trail) --}}
                @include('admin.pesanan-detail.audit-trail')
            </div>
        </div>

    </div>
</div>

{{-- Interactive Modals --}}
@include('admin.pesanan-detail.modals')
@endsection

@push('scripts')
<script>
    // Status Dropdown Trigger
    const btnStatus = document.getElementById('btn-status-dropdown');
    const menuStatus = document.getElementById('status-dropdown-menu');
    if (btnStatus && menuStatus) {
        btnStatus.addEventListener('click', (e) => {
            e.stopPropagation();
            menuStatus.classList.toggle('hidden');
        });
        document.addEventListener('click', () => {
            menuStatus.classList.add('hidden');
        });
    }

    function updateStatusQuick(newStatus) {
        alert('Status pesanan #ORD-2025-0842 dialihkan ke: ' + newStatus);
        if (menuStatus) menuStatus.classList.add('hidden');
    }

    // Modal Edit Order
    const btnEdit = document.getElementById('btn-edit-order');
    const modalEdit = document.getElementById('modal-edit-order');
    const closeEdit = document.getElementById('close-modal-edit');
    const cancelEdit = document.getElementById('cancel-edit');
    if (btnEdit && modalEdit) {
        btnEdit.addEventListener('click', () => modalEdit.classList.remove('hidden'));
        if (closeEdit) closeEdit.addEventListener('click', () => modalEdit.classList.add('hidden'));
        if (cancelEdit) cancelEdit.addEventListener('click', () => modalEdit.classList.add('hidden'));
    }

    // Modal WhatsApp Gateway
    const btnWaModal = document.getElementById('btn-wa-modal');
    const btnQuickWa = document.getElementById('btn-quick-wa');
    const modalWa = document.getElementById('modal-wa');
    const closeWa = document.getElementById('close-modal-wa');
    const cancelWa = document.getElementById('cancel-wa');
    const triggerSendWa = document.getElementById('trigger-send-wa');
    const waPreviewText = document.getElementById('wa-preview-text');

    function openWaModal() {
        if (modalWa) modalWa.classList.remove('hidden');
    }
    if (btnWaModal) btnWaModal.addEventListener('click', openWaModal);
    if (btnQuickWa) btnQuickWa.addEventListener('click', openWaModal);
    if (closeWa) closeWa.addEventListener('click', () => modalWa.classList.add('hidden'));
    if (cancelWa) cancelWa.addEventListener('click', () => modalWa.classList.add('hidden'));

    if (triggerSendWa) {
        triggerSendWa.addEventListener('click', () => {
            alert('Notifikasi WhatsApp Gateway berhasil diteruskan ke antrian server (+62 812-9842-1102).');
            modalWa.classList.add('hidden');
        });
    }

    function updateWaPreview(type) {
        if (!waPreviewText) return;
        if (type === 'reminder') {
            waPreviewText.innerHTML = 'Halo Kak *Anindya*, kami dari Cattaleya Atelier ingin mengingatkan batas pengembalian 8 baki sewa adalah besok *Senin, 19 Mei 2025 pukul 18:00 WIB*. Tim inspeksi studio siap menerima di atelier. Terima kasih.';
        } else if (type === 'ready') {
            waPreviewText.innerHTML = 'Halo Kak *Anindya*, paket mahar dan 8 baki seserahan pesanan Anda telah selesai diinspeksi (QC Pass) dan siap diambil di studio Menteng dengan kode PIN *#4491*.';
        } else if (type === 'deposit') {
            waPreviewText.innerHTML = 'Halo Kak *Anindya*, baki seserahan telah kami terima kembali dalam kondisi lengkap. Deposit jaminan sebesar *Rp 1.000.000* telah dikembalikan ke rekening Anda.';
        } else {
            waPreviewText.innerHTML = 'Halo Kak *Anindya*, tim konsultan Cattaleya Atelier ingin mengonfirmasi detail khusus pengerjaan seserahan Anda.';
        }
    }
</script>
@endpush
