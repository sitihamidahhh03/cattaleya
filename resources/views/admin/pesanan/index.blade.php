@extends('layouts.admin')

@section('title', 'Manajemen Data Pesanan — Cattaleya')

@section('content')
<div class="flex flex-col w-full">
    <div class="w-full max-w-[1536px] mx-auto py-space-md space-y-space-lg">
        @include('admin.pesanan.header')
        @include('admin.pesanan.filter')
        @include('admin.pesanan.table')
    </div>
</div>

@include('admin.pesanan.modals')
@endsection

@push('scripts')
<script>
    function showToast(title, desc, isSuccess = true) {
        const toast = document.getElementById('toastNotification');
        const toastTitle = document.getElementById('toastTitle');
        const toastDesc = document.getElementById('toastDesc');
        const toastIconBg = document.getElementById('toastIconBg');

        if (!toast || !toastTitle || !toastDesc || !toastIconBg) return;

        toastTitle.innerText = title;
        toastDesc.innerText = desc;
        
        if (isSuccess) {
            toastIconBg.className = 'w-8 h-8 rounded-full bg-[#2d7a4d] text-white flex items-center justify-center flex-shrink-0';
            toastIconBg.innerHTML = '<span class="material-symbols-outlined text-[18px]">check</span>';
        } else {
            toastIconBg.className = 'w-8 h-8 rounded-full bg-error text-white flex items-center justify-center flex-shrink-0';
            toastIconBg.innerHTML = '<span class="material-symbols-outlined text-[18px]">error</span>';
        }

        toast.classList.remove('translate-y-24', 'opacity-0', 'pointer-events-none');
        setTimeout(() => {
            toast.classList.add('translate-y-24', 'opacity-0', 'pointer-events-none');
        }, 3800);
    }

    function triggerWhatsApp(orderId, phone, clientName, templateType) {
        let msg = '';
        if (templateType === 'tagihan_pelunasan') {
            msg = `Halo Kak ${clientName}, kami menginformasikan pesanan nomor ${orderId} siap diambil/kirim. Mohon melakukan pelunasan sisa tagihan dowry sebelum tanggal acara.`;
        } else if (templateType === 'update_progres') {
            msg = `Halo Kak ${clientName}, atelier Cattaleya telah memperbarui progres pengerjaan mahar/seserahan pesanan ${orderId}. Artisan kami sedang menata bunga vitrine.`;
        } else if (templateType === 'reminder_pengembalian') {
            msg = `Halo Kak ${clientName}, pengingat pengembalian kotak seserahan untuk pesanan ${orderId}. Batas pengembalian adalah H+2 acara. Terima kasih!`;
        } else {
            msg = `Halo Kak ${clientName}, sistem informasi pesanan ${orderId} telah terhubung dengan Cattaleya Atelier.`;
        }

        showToast('WhatsApp Terkirim', `Gateway meneruskan template "${templateType}" ke ${phone} (${clientName}).`);
    }

    function openStatusChangeModal(orderId, currentStatus) {
        const modal = document.getElementById('statusModal');
        const title = document.getElementById('statusModalOrderId');
        const select = document.getElementById('modalNewStatusSelect');
        
        if (title) title.innerText = orderId + ' (' + currentStatus + ')';
        if (modal) modal.classList.remove('hidden');
    }

    function closeStatusModal() {
        const modal = document.getElementById('statusModal');
        if (modal) modal.classList.add('hidden');
    }

    function saveStatusChange() {
        const select = document.getElementById('modalNewStatusSelect');
        const note = document.getElementById('statusNoteInput').value;
        const notify = document.getElementById('autoNotifyWa').checked;
        
        closeStatusModal();
        showToast('Status Diperbarui', `Status operasional dialihkan ke "${select.value}". ${notify ? 'Notifikasi WA dikirim ke pelanggan.' : ''}`);
    }

    function openManualOrderModal() {
        const modal = document.getElementById('manualOrderModal');
        if (modal) modal.classList.remove('hidden');
    }

    function closeManualOrderModal() {
        const modal = document.getElementById('manualOrderModal');
        if (modal) modal.classList.add('hidden');
    }

    function handleManualOrderSubmit(e) {
        e.preventDefault();
        closeManualOrderModal();
        showToast('Pesanan Tersimpan', 'Data pesanan offline ORD-2025-103 sukses dibuat dan jadwal sewa diamankan di studio.');
    }

    function openDetailModal(orderId) {
        showToast('Membuka Berkas Pesanan', `Menampilkan rekam jejak lengkap, form kontrak, dan bukti Midtrans untuk ${orderId}`);
        setTimeout(() => {
            window.location.href = "{{ url('/admin/pesanan') }}/" + orderId;
        }, 500);
    }

    const ordersMockData = {
        'ORD-2025-090': {
            name: 'Anindya Larasati',
            phone: '+62 812-9844-2110',
            type: 'mahar',
            date: '2025-10-22',
            total: 1600000,
            payment: 'dp',
            detail: 'Mahar Akrilik Vitrine (Ukiran Kayu Jati Rose Gold)',
            notes: 'Mempelai meminta ornamen bunga kering preserved warna champagne gold dengan aksen koin mas murni.'
        },
        'ORD-2025-084': {
            name: 'Bramantyo & Nadia',
            phone: '+62 877-3910-0234',
            type: 'sewa',
            date: '2025-05-17',
            total: 2450000,
            payment: 'lunas',
            detail: 'Sewa Kotak (8 Tray) - Series White Heritage Pearl',
            notes: 'Jadwal pengambilan H-2 studio Menteng, baki steril UV-C.'
        },
        'ORD-2025-078': {
            name: 'Clarissa Aurelia',
            phone: '+62 813-1109-9238',
            type: 'bundling',
            date: '2025-05-18',
            total: 3850000,
            payment: 'menunggu_dp',
            detail: 'Bundling Mahar + 6 Kotak (Tema Champagne Bloom Terracotta)',
            notes: 'Pelunasan sisa H-3 saat ambil barang di studio.'
        },
        'ORD-2025-095': {
            name: 'Dimas & Farida',
            phone: '+62 852-2033-4811',
            type: 'mahar',
            date: '2025-06-06',
            total: 2100000,
            payment: 'dp',
            detail: 'Mahar Kaligrafi Koin Emas (Ukuran 40x50 Frame Gold Leaf)',
            notes: 'Menunggu persetujuan draft mockup kaligrafi V1.'
        },
        'ORD-2025-062': {
            name: 'Rizky & Amanda',
            phone: '+62 818-0922-8833',
            type: 'sewa',
            date: '2025-05-04',
            total: 3200000,
            payment: 'lunas',
            detail: 'Sewa Kotak (10 Tray) - Series Velvet Sage Emas',
            notes: 'Acara telah selesai, kotak kembali dalam kondisi aman & deposit dikembalikan.'
        },
        'ORD-2025-102': {
            name: 'Taufik Hidayat',
            phone: '+62 896-5544-1029',
            type: 'mahar',
            date: '2025-07-12',
            total: 1450000,
            payment: 'menunggu_dp',
            detail: 'Mahar Geometris Logam Mulia (Hexagon Brass Series)',
            notes: 'Menunggu transfer DP via Midtrans Snap.'
        },
        'ORD-2025-088': {
            name: 'Vania Safitri',
            phone: '+62 812-2990-0412',
            type: 'sewa',
            date: '2025-05-25',
            total: 1800000,
            payment: 'dp',
            detail: 'Sewa Kotak (6 Tray) - Series Rustic Terracotta Wood',
            notes: 'Artisan Mas Daffa sedang mengatur alas velvet dan bunga kering.'
        },
        'ORD-2025-055': {
            name: 'Arya Wiguna',
            phone: '+62 817-7443-109',
            type: 'mahar',
            date: '2025-04-08',
            total: 1150000,
            payment: 'refund',
            detail: 'Mahar Koin Minimalis (Frame Natural Pine 30x30)',
            notes: 'Pesanan dibatalkan karena perubahan jadwal akad, refund diproses.'
        }
    };

    function openEditModal(orderId) {
        const modal = document.getElementById('editOrderModal');
        const modalTitle = document.getElementById('editOrderModalTitle');
        const hiddenId = document.getElementById('editOrderIdHidden');
        const clientName = document.getElementById('editClientName');
        const clientPhone = document.getElementById('editClientPhone');
        const orderType = document.getElementById('editOrderType');
        const eventDate = document.getElementById('editEventDate');
        const totalAmount = document.getElementById('editTotalAmount');
        const paymentStatus = document.getElementById('editPaymentStatus');
        const productDetail = document.getElementById('editProductDetail');
        const notes = document.getElementById('editNotes');

        const data = ordersMockData[orderId] || {
            name: 'Nama Klien',
            phone: '+62 812-0000-0000',
            type: 'mahar',
            date: '2025-10-20',
            total: 1500000,
            payment: 'dp',
            detail: 'Spesifikasi Pesanan Studio',
            notes: 'Catatan pesanan'
        };

        if (hiddenId) hiddenId.value = orderId;
        if (modalTitle) modalTitle.innerText = `Edit Data Pesanan #${orderId}`;
        if (clientName) clientName.value = data.name;
        if (clientPhone) clientPhone.value = data.phone;
        if (orderType) orderType.value = data.type;
        if (eventDate) eventDate.value = data.date;
        if (totalAmount) totalAmount.value = data.total;
        if (paymentStatus) paymentStatus.value = data.payment;
        if (productDetail) productDetail.value = data.detail;
        if (notes) notes.value = data.notes;

        if (modal) {
            modal.classList.remove('hidden');
        }
    }

    function closeEditModal() {
        const modal = document.getElementById('editOrderModal');
        if (modal) modal.classList.add('hidden');
    }

    function handleEditOrderSubmit(e) {
        e.preventDefault();
        const orderId = document.getElementById('editOrderIdHidden').value || 'Pesanan';
        const clientName = document.getElementById('editClientName').value;
        const notify = document.getElementById('notifyClientOnEdit').checked;

        closeEditModal();
        showToast('Perubahan Disimpan', `Data pesanan ${orderId} (${clientName}) berhasil diperbarui.${notify ? ' Konfirmasi pembaruan telah dikirim ke WhatsApp klien.' : ''}`);
    }

    function openWaTestModal() {
        showToast('Status Gateway Normal', 'WhatsApp Webhook & Midtrans Payment Callback beroperasi tanpa kendala (Latensi: 142ms).');
    }

    function exportCsvData() {
        showToast('Export CSV Selesai', 'Data 184 pesanan studio sedang diunduh dalam format .csv terkompresi.');
    }

    function applyFilter() {
        const search = document.getElementById('searchInput').value.toLowerCase().trim();
        const type = document.getElementById('typeFilter').value;
        const payment = document.getElementById('paymentFilter').value;
        const status = document.getElementById('statusFilter').value;

        const rows = document.querySelectorAll('#pesananTable tbody tr.order-row');
        let visibleCount = 0;

        rows.forEach(row => {
            const rowText = row.innerText.toLowerCase();
            const rowType = row.dataset.type || '';
            const rowPayment = row.dataset.payment || '';
            const rowStatus = row.dataset.status || '';

            const matchSearch = !search || rowText.includes(search);
            const matchType = (type === 'all') || (rowType === type);
            const matchPayment = (payment === 'all') || (rowPayment === payment);
            const matchStatus = (status === 'all') || (rowStatus === status);

            if (matchSearch && matchType && matchPayment && matchStatus) {
                row.style.display = '';
                visibleCount++;
            } else {
                row.style.display = 'none';
            }
        });

        showToast('Filter Diterapkan', `Menampilkan ${visibleCount} pesanan sesuai parameter yang dipilih.`);
    }

    function resetFilter() {
        document.getElementById('searchInput').value = '';
        document.getElementById('typeFilter').value = 'all';
        document.getElementById('paymentFilter').value = 'all';
        document.getElementById('statusFilter').value = 'all';

        const rows = document.querySelectorAll('#pesananTable tbody tr.order-row');
        rows.forEach(row => {
            row.style.display = '';
        });

        showToast('Filter Direset', 'Menampilkan seluruh daftar pesanan atelier Cattaleya.');
    }
</script>
@endpush
