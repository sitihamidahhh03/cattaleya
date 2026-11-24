@extends('layouts.admin')

@section('title', 'Data & Manajemen Pelanggan — Cattaleya Atelier')

@section('content')
<div class="flex flex-col w-full">
    <!-- Top Ambient Glow Decorator -->
    <div class="relative w-full overflow-hidden">
        <div class="absolute -top-24 -right-16 w-96 h-96 rounded-full bg-secondary-fixed opacity-40 blur-3xl pointer-events-none"></div>
        <div class="absolute top-12 left-1/3 w-80 h-80 rounded-full bg-tertiary-fixed opacity-30 blur-2xl pointer-events-none"></div>

        @include('admin.pelanggan.header')
        @include('admin.pelanggan.stats')
        @include('admin.pelanggan.filter')
        @include('admin.pelanggan.table')
    </div>
</div>

@include('admin.pelanggan.drawer')
@include('admin.pelanggan.modals')
@endsection

@push('scripts')
<script>
    // Customer data store for drawer previews
    const customerDatabase = {
        dinda: {
            initials: 'DT',
            name: 'Dinda Tri Permata',
            role: 'Calon Mempelai Wanita',
            phone: '0812-8934-2201',
            cleanPhone: '6281289342201',
            instagram: '@dindaprmt',
            email: 'dinda.permata@gmail.com',
            address: 'Jl. Wijaya Timur II No. 14, Melawai, Kebayoran Baru, Jakarta Selatan 12160',
            orderCount: '2 Pesanan',
            totalSpent: 'Rp 4.250.000',
            activeOrder: {
                id: '#ORD-2025-089',
                status: 'Proses Dekorasi',
                desc: 'Sewa 8 Kotak Velvet Gold & Mahar Rustic Glass Geometric',
                date: 'Tanggal Acara: 24 Mei 2025',
                amount: 'Rp 3.500.000',
                note: 'Catatan: Barang hantaran parfum, tas, skincare sudah diterima di studio. Tinggal perhiasan diserahkan H-2.'
            },
            prevOrder: {
                id: '#ORD-2024-118',
                status: 'Selesai',
                desc: 'Paket Sangjit / Lamaran 4 Tray Akrilik Transparan',
                date: 'Tanggal Acara: 15 Des 2024',
                amount: 'Rp 750.000'
            }
        },
        fahmi: {
            initials: 'MF',
            name: 'Muhammad Fahmi',
            role: 'Calon Mempelai Pria',
            phone: '0857-1822-9940',
            cleanPhone: '6285718229940',
            instagram: '@fahmi_alatas',
            email: 'm.fahmi94@yahoo.co.id',
            address: 'Cluster Foresta Woodlake Blok B3 No. 8, BSD City, Tangerang Selatan',
            orderCount: '1 Pesanan',
            totalSpent: 'Rp 2.850.000',
            activeOrder: {
                id: '#ORD-2025-095',
                status: 'Proses Dekorasi',
                desc: 'Sewa 6 Kotak Akrilik White Champagne',
                date: 'Tanggal Acara: 07 Jun 2025',
                amount: 'Rp 2.850.000',
                note: 'Paket box premium mika tebal, bunga warna ivory rose & baby breath.'
            },
            prevOrder: null
        },
        raisa: {
            initials: 'RS',
            name: 'Raisa Shafira',
            role: 'Alumni Klien Atelier',
            phone: '0813-9044-5672',
            cleanPhone: '6281390445672',
            instagram: '@shafiraraisa',
            email: 'raisa.shafira@outlook.com',
            address: 'Jl. Dago Asri No. 22, Coblong, Kota Bandung 40135',
            orderCount: '3 Pesanan',
            totalSpent: 'Rp 6.800.000',
            activeOrder: {
                id: '#ORD-2025-042',
                status: 'Selesai',
                desc: 'Custom Mahar Frame Terrarium & 10 Tray Hantaran',
                date: 'Tanggal Acara: 18 Apr 2025',
                amount: 'Rp 4.200.000',
                note: 'Acara di Hotel Papandayan Bandung sukses terlaksana. Box dikembalikan lengkap.'
            },
            prevOrder: {
                id: '#ORD-2024-080',
                status: 'Selesai',
                desc: 'Sewa 8 Kotak Wood Vintage & Bunga Segar',
                date: 'Tanggal Acara: 10 Nov 2024',
                amount: 'Rp 2.600.000'
            }
        },
        belinda: {
            initials: 'BC',
            name: 'Belinda Clara',
            role: 'Calon Mempelai Wanita',
            phone: '0821-4477-1098',
            cleanPhone: '6282144771098',
            instagram: '@belindaclara_',
            email: 'belinda.clara@gmail.com',
            address: 'Puri Indah Residence Blok C8, Kembangan, Jakarta Barat',
            orderCount: '1 Pesanan',
            totalSpent: 'Rp 1.950.000',
            activeOrder: {
                id: '#ORD-2025-104',
                status: 'Menunggu Drop-off',
                desc: 'Sewa 6 Kotak Wood Vintage & Bunga Segar White Lily',
                date: 'Tanggal Acara: 14 Jun 2025',
                amount: 'Rp 1.950.000',
                note: 'Jadwal serah terima barang mahar ke studio direncanakan 10 Juni 2025.'
            },
            prevOrder: null
        },
        arya: {
            initials: 'AD',
            name: 'Arya Dananjaya',
            role: 'Alumni Klien Atelier',
            phone: '0811-2288-3391',
            cleanPhone: '6281122883391',
            instagram: '@aryadnan',
            email: 'arya.danan@corporate.co.id',
            address: 'Grand Galaxy City, Rukan Boulevard Selatan Blok RG No. 2, Bekasi',
            orderCount: '2 Pesanan',
            totalSpent: 'Rp 3.600.000',
            activeOrder: {
                id: '#ORD-2025-019',
                status: 'Selesai',
                desc: 'Paket Mahar Emas Antam & 7 Kotak Hantaran Kayu',
                date: 'Tanggal Acara: 02 Feb 2025',
                amount: 'Rp 2.400.000',
                note: 'Pelanggan puas, memberikan ulasan bintang 5 pada Google Review.'
            },
            prevOrder: {
                id: '#ORD-2024-055',
                status: 'Selesai',
                desc: 'Sewa 4 Kotak Akrilik Lamaran Minimalis',
                date: 'Tanggal Acara: 15 Agu 2024',
                amount: 'Rp 1.200.000'
            }
        }
    };

    let currentSelectedCustomerId = 'dinda';

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

    // Open Drawer Function
    function openCustomerDrawer(id) {
        currentSelectedCustomerId = id;
        const data = customerDatabase[id];
        if (!data) return;

        document.getElementById('drawerAvatar').innerText = data.initials;
        document.getElementById('drawerName').innerText = data.name;
        document.getElementById('drawerRole').innerText = data.role;
        document.getElementById('drawerPhone').innerText = data.phone;
        document.getElementById('drawerInstagram').innerText = data.instagram;
        document.getElementById('drawerEmail').innerText = data.email;
        document.getElementById('drawerAddress').innerText = data.address;
        document.getElementById('drawerOrderCount').innerText = data.orderCount;
        document.getElementById('drawerTotal').innerText = data.totalSpent;
        document.getElementById('drawerWaBtn').href = `https://wa.me/${data.cleanPhone}?text=Halo%20Kak%20${encodeURIComponent(data.name)}%2C%20kami%20dari%20Cattaleya%20Seserahan...`;

        // Update active order item
        if (data.activeOrder) {
            document.getElementById('drawerOrder1Id').innerText = data.activeOrder.id;
            document.getElementById('drawerOrder1Status').innerText = data.activeOrder.status;
            document.getElementById('drawerOrder1Desc').innerText = data.activeOrder.desc;
            document.getElementById('drawerOrder1Date').innerText = data.activeOrder.date;
            document.getElementById('drawerOrder1Amount').innerText = data.activeOrder.amount;
            document.getElementById('drawerOrder1Note').innerText = data.activeOrder.note;
            document.getElementById('drawerOrder1Note').style.display = data.activeOrder.note ? 'block' : 'none';
        }

        // Update previous order item
        const order2Box = document.getElementById('drawerOrder2Box');
        if (data.prevOrder && order2Box) {
            order2Box.style.display = 'block';
            document.getElementById('drawerOrder2Id').innerText = data.prevOrder.id;
            document.getElementById('drawerOrder2Status').innerText = data.prevOrder.status;
            document.getElementById('drawerOrder2Desc').innerText = data.prevOrder.desc;
            document.getElementById('drawerOrder2Date').innerText = data.prevOrder.date;
            document.getElementById('drawerOrder2Amount').innerText = data.prevOrder.amount;
        } else if (order2Box) {
            order2Box.style.display = 'none';
        }

        const drawer = document.getElementById('customerDrawer');
        const panel = document.getElementById('drawerPanel');
        
        drawer.classList.remove('pointer-events-none', 'opacity-0');
        drawer.classList.add('pointer-events-auto', 'opacity-100');
        panel.classList.remove('translate-x-full');
        panel.classList.add('translate-x-0');
    }

    // Close Drawer Function
    function closeCustomerDrawer() {
        const drawer = document.getElementById('customerDrawer');
        const panel = document.getElementById('drawerPanel');
        
        panel.classList.remove('translate-x-0');
        panel.classList.add('translate-x-full');
        drawer.classList.remove('pointer-events-auto', 'opacity-100');
        drawer.classList.add('pointer-events-none', 'opacity-0');
    }

    // Modal Add Customer Controls
    function openAddCustomerModal() {
        const modal = document.getElementById('addCustomerModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    function closeAddCustomerModal() {
        const modal = document.getElementById('addCustomerModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

    function handleCustomerSubmit(e) {
        e.preventDefault();
        const name = document.getElementById('newCustomerName').value;
        const phone = document.getElementById('newCustomerPhone').value;
        closeAddCustomerModal();
        showToast('Pelanggan Ditambahkan', `Calon pengantin "${name}" (${phone}) berhasil didaftarkan ke direktori atelier.`);
    }

    // Modal Edit Customer
    function openEditCustomerFromDrawer() {
        const data = customerDatabase[currentSelectedCustomerId];
        if (!data) return;

        document.getElementById('editCustomerIdHidden').value = currentSelectedCustomerId;
        document.getElementById('editCustomerModalTitle').innerText = `Edit Kontak: ${data.name}`;
        document.getElementById('editCustomerNameInput').value = data.name;
        document.getElementById('editCustomerPhoneInput').value = data.phone;
        document.getElementById('editCustomerIgInput').value = data.instagram;
        document.getElementById('editCustomerEmailInput').value = data.email;
        document.getElementById('editCustomerAddressInput').value = data.address;

        const modal = document.getElementById('editCustomerModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    function closeEditCustomerModal() {
        const modal = document.getElementById('editCustomerModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

    function handleEditCustomerSubmit(e) {
        e.preventDefault();
        const id = document.getElementById('editCustomerIdHidden').value;
        const newName = document.getElementById('editCustomerNameInput').value;
        const newPhone = document.getElementById('editCustomerPhoneInput').value;
        const newIg = document.getElementById('editCustomerIgInput').value;
        const newEmail = document.getElementById('editCustomerEmailInput').value;
        const newAddress = document.getElementById('editCustomerAddressInput').value;

        if (customerDatabase[id]) {
            customerDatabase[id].name = newName;
            customerDatabase[id].phone = newPhone;
            customerDatabase[id].instagram = newIg;
            customerDatabase[id].email = newEmail;
            customerDatabase[id].address = newAddress;
            // update drawer if open
            document.getElementById('drawerName').innerText = newName;
            document.getElementById('drawerPhone').innerText = newPhone;
            document.getElementById('drawerInstagram').innerText = newIg;
            document.getElementById('drawerEmail').innerText = newEmail;
            document.getElementById('drawerAddress').innerText = newAddress;
        }

        closeEditCustomerModal();
        showToast('Kontak Diperbarui', `Informasi kontak "${newName}" berhasil disimpan.`);
    }

    function exportCustomerData() {
        showToast('Ekspor Data Dimulai', 'Mengekspor 148 Data Calon Pengantin ke format Excel (.xlsx) dengan kontak terenkripsi.');
    }

    function printCustomerDossier() {
        showToast('Cetak Dossier Klien', 'Dossier profil pengantin dan spesifikasi baki sedang disiapkan dalam format cetak PDF.');
    }

    // Filter Tabs
    function setCustomerFilter(status, btn) {
        document.querySelectorAll('.filter-tab').forEach(b => {
            b.classList.remove('bg-surface-container-lowest', 'text-primary', 'shadow-xs', 'font-semibold');
            b.classList.add('text-on-surface-variant');
        });
        btn.classList.add('bg-surface-container-lowest', 'text-primary', 'shadow-xs', 'font-semibold');
        btn.classList.remove('text-on-surface-variant');

        const rows = document.querySelectorAll('.customer-row');
        let count = 0;
        rows.forEach(row => {
            const rowStatus = row.getAttribute('data-status');
            if (status === 'all' || rowStatus === status) {
                row.style.display = '';
                count++;
            } else {
                row.style.display = 'none';
            }
        });
        showToast('Filter Aktivitas', `Menampilkan ${count} pengantin dengan filter status yang dipilih.`);
    }

    // Search Bar Filter
    document.getElementById('searchInput').addEventListener('input', function(e) {
        const val = e.target.value.toLowerCase().trim();
        const rows = document.querySelectorAll('.customer-row');
        rows.forEach(row => {
            const name = (row.getAttribute('data-name') || '').toLowerCase();
            const phone = (row.getAttribute('data-phone') || '').toLowerCase();
            const city = (row.getAttribute('data-city') || '').toLowerCase();
            if (name.includes(val) || phone.includes(val) || city.includes(val)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });

    // Sorting Handler
    function applySorting() {
        const sortBy = document.getElementById('sortSelect').value;
        const tableBody = document.querySelector('#customerTable tbody');
        const rows = Array.from(tableBody.querySelectorAll('.customer-row'));

        rows.sort((a, b) => {
            if (sortBy === 'az') {
                return a.getAttribute('data-name').localeCompare(b.getAttribute('data-name'));
            } else if (sortBy === 'orders') {
                return parseInt(b.getAttribute('data-orders')) - parseInt(a.getAttribute('data-orders'));
            } else if (sortBy === 'spending') {
                return parseInt(b.getAttribute('data-total')) - parseInt(a.getAttribute('data-total'));
            }
            return 0; // Default/recent
        });

        rows.forEach(row => tableBody.appendChild(row));
        showToast('Urutan Data Diubah', `Tabel pelanggan diurutkan berdasarkan "${document.getElementById('sortSelect').selectedOptions[0].text}".`);
    }
</script>
@endpush
