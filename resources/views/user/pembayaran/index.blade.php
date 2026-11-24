@extends('layouts.main')

@section('title', 'Gateway Pembayaran Midtrans Snap — Cattaleya Atelier')

@section('content')
<div class="flex flex-col w-full">
    <!-- Subtle decorative ambient background glow -->
    <div class="relative w-full overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-primary-fixed/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute top-96 -left-20 w-80 h-80 bg-secondary-container/30 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 py-10">
            {{-- 1. Breadcrumbs & Status Banner --}}
            @include('user.pembayaran.header-status')

            <!-- Grid: Left (Invoice Dossier) & Right (Midtrans Snap Simulator) -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                {{-- 2. Left Column: Order Summary --}}
                @include('user.pembayaran.order-summary')

                {{-- 3. Right Column: Payment Methods --}}
                @include('user.pembayaran.payment-methods')
            </div>

            {{-- 4. Assistance Banner --}}
            @include('user.pembayaran.assistance')
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Simple Countdown Timer Simulation
    (function initTimer() {
        let totalSeconds = 23 * 3600 + 57 * 60 + 20;
        const hoursEl = document.getElementById('timer-hours');
        const minsEl = document.getElementById('timer-minutes');
        const secsEl = document.getElementById('timer-seconds');

        if (!hoursEl || !minsEl || !secsEl) return;

        setInterval(() => {
            if (totalSeconds <= 0) return;
            totalSeconds--;
            const h = Math.floor(totalSeconds / 3600);
            const m = Math.floor((totalSeconds % 3600) / 60);
            const s = totalSeconds % 60;

            hoursEl.textContent = String(h).padStart(2, '0');
            minsEl.textContent = String(m).padStart(2, '0');
            secsEl.textContent = String(s).padStart(2, '0');
        }, 1000);
    })();

    // Payment Method Tab Switcher
    function switchMethod(method) {
        const panels = {
            bca: document.getElementById('panel-bca'),
            qris: document.getElementById('panel-qris'),
            mandiri: document.getElementById('panel-mandiri')
        };

        const tabs = {
            bca: document.getElementById('btn-tab-bca'),
            qris: document.getElementById('btn-tab-qris'),
            mandiri: document.getElementById('btn-tab-mandiri')
        };

        Object.keys(panels).forEach(key => {
            if (panels[key]) panels[key].classList.add('hidden');
            if (tabs[key]) {
                tabs[key].classList.remove('bg-surface-container-low', 'shadow-xs', 'ring-2', 'ring-primary', 'border-outline-variant/40');
                tabs[key].classList.add('bg-surface-container', 'border-transparent');
                const icon = tabs[key].querySelector('.check-icon');
                if (icon) {
                    icon.textContent = 'radio_button_unchecked';
                    icon.classList.remove('text-primary');
                    icon.classList.add('text-on-surface-variant/40');
                }
            }
        });

        if (panels[method]) panels[method].classList.remove('hidden');
        if (tabs[method]) {
            tabs[method].classList.add('bg-surface-container-low', 'shadow-xs', 'ring-2', 'ring-primary', 'border-outline-variant/40');
            tabs[method].classList.remove('bg-surface-container', 'border-transparent');
            const icon = tabs[method].querySelector('.check-icon');
            if (icon) {
                icon.textContent = 'check_circle';
                icon.classList.add('text-primary');
                icon.classList.remove('text-on-surface-variant/40');
            }
        }
    }

    // Copy VA to Clipboard
    function copyVA() {
        const va = "80777081298421102";
        navigator.clipboard.writeText(va).then(() => {
            const copyText = document.getElementById('copy-text');
            const copyIcon = document.getElementById('copy-icon');
            if (copyText && copyIcon) {
                copyText.textContent = "Tersalin!";
                copyIcon.textContent = "done";
                setTimeout(() => {
                    copyText.textContent = "Salin Nomor VA";
                    copyIcon.textContent = "content_copy";
                }, 2500);
            }
        }).catch(() => {
            alert("Nomor VA: " + va);
        });
    }

    // Check Status Simulation
    function checkStatusSimulation() {
        const icon = document.getElementById('status-icon');
        const text = document.getElementById('status-text');
        const toast = document.getElementById('status-toast');
        const toastMsg = document.getElementById('toast-message');

        if (!icon || !text || !toast) return;

        icon.classList.add('animate-spin');
        text.textContent = "Memeriksa ke Midtrans...";

        setTimeout(() => {
            icon.classList.remove('animate-spin');
            text.textContent = "Cek Status Pembayaran Sekarang";
            toast.classList.remove('hidden');
            toastMsg.textContent = "Status: Menunggu Pembayaran (Pending). Virtual Account aktif, silakan selesaikan pembayaran melalui kanal yang Anda pilih.";
        }, 1200);
    }

    // Mock Invoice Download
    function downloadInvoiceMock() {
        const toast = document.getElementById('status-toast');
        const toastMsg = document.getElementById('toast-message');
        if (toast && toastMsg) {
            toast.classList.remove('hidden');
            toastMsg.textContent = "Mengunduh berkas invoice resmi 'Invoice-Cattaleya-CTL-2025-090.pdf'...";
        }
    }
</script>
@endpush
