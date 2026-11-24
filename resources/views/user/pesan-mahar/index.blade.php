@extends('layouts.main')

@section('title', 'Formulir Pesanan Mahar Pernikahan - Cattaleya')

@section('content')
<div class="flex flex-col w-full">
    <!-- Subtle Ambient Glow Element -->
    <div class="relative w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 py-10">
        <div class="absolute top-12 left-1/4 w-96 h-96 bg-primary-fixed/30 rounded-full blur-3xl pointer-events-none -z-10"></div>
        <div class="absolute top-48 right-10 w-80 h-80 bg-secondary-container/40 rounded-full blur-3xl pointer-events-none -z-10"></div>

        {{-- 1. Editorial Header --}}
        @include('user.pesan-mahar.header')

        <!-- 2-Column Responsive Layout: Left Form, Right Live Summary -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            <!-- LEFT COLUMN: CUSTOMIZATION FORM (lg:col-span-7) -->
            <form class="lg:col-span-7 space-y-8" id="maharForm" onsubmit="event.preventDefault(); submitToMidtrans();">
                @csrf
                {{-- Section 1: Data Kontak Pemesan --}}
                @include('user.pesan-mahar.form-contact')

                {{-- Section 2: Detail Pernikahan & Mahar --}}
                @include('user.pesan-mahar.form-wedding')

                {{-- Section 3: Spesifikasi Desain Kustom --}}
                @include('user.pesan-mahar.form-customization')
            </form>

            {{-- RIGHT COLUMN: Live Order Summary & Midtrans --}}
            @include('user.pesan-mahar.live-summary')
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    let currentTotal = 2450000;

    const framePrices = {
        'Frame Akrilik Vitrine 3D Hexagon 40x50': 2450000,
        'Frame Kayu Ukir Jati Solid 40x60': 2100000,
        'Frame Brass & Linen Minimalis 30x40': 1450000,
        'Frame Minimalis Natural Pine 30x30': 1050000
    };

    function formatRupiah(number) {
        return 'Rp ' + number.toLocaleString('id-ID');
    }

    function updatePayAmount(scheme) {
        const btn = document.getElementById('btnPayLabel');
        const dp = Math.round(currentTotal / 2);
        if (scheme === 'dp') {
            btn.textContent = 'Lanjut ke Pembayaran Midtrans • ' + formatRupiah(dp);
        } else {
            btn.textContent = 'Lanjut ke Pembayaran Midtrans • ' + formatRupiah(currentTotal);
        }
    }

    function recalculatePrices() {
        const dp = Math.round(currentTotal / 2);
        document.getElementById('totalPriceDisplay').textContent = formatRupiah(currentTotal);
        document.getElementById('dpAmountText').textContent = formatRupiah(dp);
        document.getElementById('dpRemainderText').textContent = formatRupiah(dp);
        document.getElementById('fullAmountText').textContent = formatRupiah(currentTotal);
        
        const selectedScheme = document.querySelector('input[name="paymentScheme"]:checked')?.value || 'dp';
        updatePayAmount(selectedScheme);
    }

    // Dynamic Live Preview Bindings
    const coupleInput = document.getElementById('namaMempelai');
    const coupleSummary = document.getElementById('summaryCoupleName');
    if (coupleInput && coupleSummary) {
        coupleInput.addEventListener('input', (e) => {
            coupleSummary.textContent = e.target.value.trim() || 'Anindya & Raditya';
        });
    }

    const frameSelect = document.getElementById('jenisBingkai');
    const frameSummary = document.getElementById('summaryFrameTag');
    if (frameSelect && frameSummary) {
        frameSelect.addEventListener('change', (e) => {
            const val = e.target.value;
            frameSummary.textContent = val.replace('Frame ', '');
            if (framePrices[val]) {
                currentTotal = framePrices[val];
                recalculatePrices();
            }
        });
    }

    const bgSelect = document.getElementById('jenisBackground');
    const acrylicSelect = document.getElementById('warnaAcrylic');
    const summaryBg = document.getElementById('summaryBackgroundStyle');
    function updateBgSummary() {
        if (bgSelect && acrylicSelect && summaryBg) {
            summaryBg.textContent = bgSelect.value.split(' ')[0] + ' / ' + acrylicSelect.value.split(' ')[0];
        }
    }
    if (bgSelect && acrylicSelect) {
        bgSelect.addEventListener('change', updateBgSummary);
        acrylicSelect.addEventListener('change', updateBgSummary);
    }

    const dowryInput = document.getElementById('nominalBentukMahar');
    const dowrySummary = document.getElementById('summaryDowryContent');
    if (dowryInput && dowrySummary) {
        dowryInput.addEventListener('input', (e) => {
            dowrySummary.textContent = e.target.value.trim() || '10g LM Antam';
        });
    }

    // Theme Flower Radio Listener
    const themeRadios = document.querySelectorAll('input[name="temaBunga"]');
    const summaryThemeFlower = document.getElementById('summaryThemeFlower');
    themeRadios.forEach(radio => {
        radio.addEventListener('change', (e) => {
            if (e.target.checked && summaryThemeFlower) {
                summaryThemeFlower.textContent = e.target.value;
            }
        });
    });

    // Orientation toggle
    const orientasiBtns = document.querySelectorAll('.orientasi-btn');
    orientasiBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            orientasiBtns.forEach(b => {
                b.classList.remove('bg-secondary-container', 'text-on-secondary-container', 'shadow-sm');
                b.classList.add('bg-surface-container', 'text-on-surface-variant');
            });
            btn.classList.add('bg-secondary-container', 'text-on-secondary-container', 'shadow-sm');
            btn.classList.remove('bg-surface-container', 'text-on-surface-variant');
        });
    });

    function previewUpload(input) {
        const label = document.getElementById('uploadFilename');
        if (input.files && input.files[0] && label) {
            label.textContent = 'File terpilih: ' + input.files[0].name;
        }
    }

    function submitToMidtrans() {
        const nama = document.getElementById('namaLengkap').value;
        const wa = document.getElementById('nomorWhatsapp').value;
        const couple = document.getElementById('namaMempelai').value;

        if (!nama || !wa || !couple) {
            alert('Mohon lengkapi Nama Pelanggan, Nomor WhatsApp, dan Nama Calon Pengantin sebelum melanjutkan.');
            return;
        }

        const selectedScheme = document.querySelector('input[name="paymentScheme"]:checked')?.value || 'dp';
        const amount = selectedScheme === 'dp' ? formatRupiah(Math.round(currentTotal / 2)) : formatRupiah(currentTotal);
      
        const confirmProceed = confirm(
            'Menghubungkan ke Gerbang Pembayaran Midtrans Snap...\n\n' +
            '• Pemesan: ' + nama + '\n' +
            '• Tagihan: ' + amount + ' (' + (selectedScheme === 'dp' ? 'Uang Muka 50%' : 'Lunas 100%') + ')\n' +
            '• Notifikasi Resi: ' + wa + '\n\n' +
            'Lanjutkan untuk memilih metode pembayaran (BCA VA / Mandiri / QRIS)?'
        );

        if (confirmProceed) {
            window.location.href = "{{ route('pembayaran') }}";
        }
    }

    // Preselect based on query parameter ?item=
    document.addEventListener('DOMContentLoaded', () => {
        const urlParams = new URLSearchParams(window.location.search);
        const itemParam = urlParams.get('item');
        if (itemParam && frameSelect) {
            for (let i = 0; i < frameSelect.options.length; i++) {
                if (frameSelect.options[i].value.toLowerCase().includes(itemParam.toLowerCase())) {
                    frameSelect.selectedIndex = i;
                    frameSelect.dispatchEvent(new Event('change'));
                    break;
                }
            }
        }
    });
</script>
@endpush
