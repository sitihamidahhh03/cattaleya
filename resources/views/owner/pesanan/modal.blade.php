<!-- Immutable Read-Only Dossier Modal Overlay -->
<div class="fixed inset-0 z-50 hidden items-center justify-center p-4 bg-on-background/40 backdrop-blur-sm transition-all duration-300" id="orderDetailModal">
    <div class="bg-surface-container-lowest rounded-xl max-w-xl w-full p-space-lg shadow-[0_24px_48px_-12px_rgba(45,34,25,0.24)] flex flex-col gap-space-md relative max-h-[921px] overflow-y-auto">
        <!-- Modal Top Header -->
        <div class="flex items-center justify-between pb-space-xs">
            <div class="flex flex-col">
                <span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Berkas Resmi Studio Cattaleya</span>
                <h2 class="font-headline-md text-headline-md text-on-surface" id="modalOrderId">ORD-000</h2>
            </div>
            <button class="w-8 h-8 rounded-full bg-surface-container-low hover:bg-surface-container-high text-on-surface flex items-center justify-center transition-colors" onclick="closeOrderModal()" type="button">
                <span class="material-symbols-outlined text-xl">close</span>
            </button>
        </div>
        <!-- Ornamental Brand Hairline Motif -->
        <div class="flex items-center justify-center gap-space-sm text-primary/40">
            <div class="h-[1px] flex-1 bg-surface-variant"></div>
            <span class="text-xs">&diams;</span>
            <div class="h-[1px] flex-1 bg-surface-variant"></div>
        </div>
        <!-- Customer Overview Cards -->
        <div class="grid grid-cols-2 gap-space-sm">
            <div class="p-space-sm bg-surface-container-low rounded-lg flex flex-col">
                <span class="font-label-sm text-label-sm text-outline">Pelanggan</span>
                <span class="font-title-md text-title-md font-semibold text-on-surface" id="modalCustomerName">-</span>
            </div>
            <div class="p-space-sm bg-surface-container-low rounded-lg flex flex-col">
                <span class="font-label-sm text-label-sm text-outline">Tanggal Pelaksanaan</span>
                <span class="font-title-md text-title-md font-semibold text-on-surface" id="modalEventDate">-</span>
            </div>
        </div>
        <!-- Craft Specifications & Dossier Notes -->
        <div class="flex flex-col gap-1 p-space-sm bg-surface rounded-lg">
            <span class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-wider">Spesifikasi Karya &amp; Komposisi</span>
            <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed" id="modalCraftSpec">-</p>
        </div>
        <!-- Financial Status Breakdown (Owner View) -->
        <div class="flex flex-col gap-space-xs pt-space-xs">
            <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Rincian Finansial &amp; Pembayaran</span>
            <div class="flex flex-col gap-2 p-space-sm bg-surface-container-low rounded-lg">
                <div class="flex justify-between font-body-md text-body-md">
                    <span class="text-on-surface-variant">Nilai Pesanan:</span>
                    <span class="font-bold text-on-surface" id="modalTotalPrice">-</span>
                </div>
                <div class="flex justify-between font-body-md text-body-md">
                    <span class="text-on-surface-variant">Nominal Masuk (Paid):</span>
                    <span class="font-bold text-primary" id="modalPaidPrice">-</span>
                </div>
                <div class="flex justify-between font-body-md text-body-md">
                    <span class="text-on-surface-variant">Sisa Pelunasan:</span>
                    <span class="font-bold text-error" id="modalRemainingPrice">-</span>
                </div>
                <div class="flex justify-between font-body-md text-body-md pt-2">
                    <span class="text-on-surface-variant">Status Finansial:</span>
                    <span class="font-semibold text-on-surface" id="modalPaymentBadge">-</span>
                </div>
                <div class="flex justify-between font-body-md text-body-md">
                    <span class="text-on-surface-variant">Status Pengerjaan:</span>
                    <span class="font-semibold text-secondary" id="modalOrderStatus">-</span>
                </div>
            </div>
        </div>
        <!-- Actions: Tutup & Buka Dossier Penuh -->
        <div class="pt-space-sm flex items-center justify-end gap-space-sm">
            <button class="px-space-md py-2 rounded-lg bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-label-md text-label-md font-semibold transition-all cursor-pointer" onclick="closeOrderModal()" type="button">
                Tutup Rincian
            </button>
            <a id="modalDetailLink" href="{{ request()->routeIs('preview.*') ? route('preview.owner-pesanan-detail') : route('owner.pesanan.detail') }}" class="inline-flex items-center gap-1.5 px-space-md py-2 rounded-lg bg-primary hover:bg-primary-container text-on-primary font-label-md text-label-md font-semibold transition-all shadow-sm">
                <span class="material-symbols-outlined text-sm">open_in_new</span>
                <span>Buka Dossier Lengkap</span>
            </a>
        </div>
    </div>
</div>

@push('scripts')
<script>
    window.openOrderModal = function(id, customer, type, date, total, paid, remaining, payStatus, orderStatus, spec) {
        document.getElementById('modalOrderId').innerText = id + ' — ' + type;
        document.getElementById('modalCustomerName').innerText = customer;
        document.getElementById('modalEventDate').innerText = date;
        document.getElementById('modalTotalPrice').innerText = total;
        document.getElementById('modalPaidPrice').innerText = paid;
        document.getElementById('modalRemainingPrice').innerText = remaining;
        document.getElementById('modalPaymentBadge').innerText = payStatus;
        document.getElementById('modalOrderStatus').innerText = orderStatus;
        document.getElementById('modalCraftSpec').innerText = spec;

        const detailLink = document.getElementById('modalDetailLink');
        if (detailLink) {
            const isPreview = window.location.pathname.includes('/preview');
            if (isPreview) {
                detailLink.href = "{{ route('preview.owner-pesanan-detail') }}?id=" + encodeURIComponent(id);
            } else {
                detailLink.href = "{{ url('/owner/pesanan/detail') }}/" + encodeURIComponent(id);
            }
        }

        var modal = document.getElementById('orderDetailModal');
        if (modal) {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
    };

    window.closeOrderModal = function() {
        var modal = document.getElementById('orderDetailModal');
        if (modal) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
    };

    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('orderDetailModal');
        if (modal) {
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    window.closeOrderModal();
                }
            });
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                window.closeOrderModal();
            }
        });

        const searchInput = document.getElementById('searchInput');
        const orderTypeFilter = document.getElementById('orderTypeFilter');
        const paymentStatusFilter = document.getElementById('paymentStatusFilter');
        const orderStatusFilter = document.getElementById('orderStatusFilter');
        const tableRows = document.querySelectorAll('#orderTableBody tr');

        function filterTable() {
            const query = (searchInput ? searchInput.value : '').toLowerCase().trim();
            const selectedType = orderTypeFilter ? orderTypeFilter.value : 'all';
            const selectedPay = paymentStatusFilter ? paymentStatusFilter.value : 'all';
            const selectedOrder = orderStatusFilter ? orderStatusFilter.value : 'all';

            tableRows.forEach(function(row) {
                const rowText = row.innerText.toLowerCase();
                const matchesSearch = !query || rowText.includes(query);
                
                let matchesType = true;
                if (selectedType !== 'all') {
                    matchesType = rowText.includes(selectedType.toLowerCase());
                }

                let matchesPay = true;
                if (selectedPay !== 'all') {
                    matchesPay = rowText.includes(selectedPay.toLowerCase());
                }

                let matchesOrder = true;
                if (selectedOrder !== 'all') {
                    matchesOrder = rowText.includes(selectedOrder.toLowerCase());
                }

                if (matchesSearch && matchesType && matchesPay && matchesOrder) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        if (searchInput) searchInput.addEventListener('input', filterTable);
        if (orderTypeFilter) orderTypeFilter.addEventListener('change', filterTable);
        if (paymentStatusFilter) paymentStatusFilter.addEventListener('change', filterTable);
        if (orderStatusFilter) orderStatusFilter.addEventListener('change', filterTable);
    });
</script>
@endpush
