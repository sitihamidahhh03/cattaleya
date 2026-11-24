@extends('layouts.main')

@section('title', 'Lacak Status Pesanan - Cattaleya')

@section('content')
<div class="flex flex-col w-full pb-20">
    <!-- Subtle Ambient Glow & Header Clearance -->
    <div class="relative w-full overflow-hidden bg-surface py-10 sm:py-14 md:py-16">
        <div class="absolute -top-32 -right-32 w-96 h-96 rounded-full bg-secondary-container/40 blur-3xl pointer-events-none"></div>
        <div class="absolute top-1/2 -left-32 w-96 h-96 rounded-full bg-surface-container-high/60 blur-3xl pointer-events-none"></div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-12 relative z-10">
            {{-- 1. Search Banner & Form --}}
            @include('user.cek-pesanan.search-card')

            <!-- Dossier / Tracking Results View -->
            <div class="mt-12 space-y-8 transition-all duration-300" id="resultDossier">
                {{-- 2. Result Header & Client Summary Strip --}}
                @include('user.cek-pesanan.result-dossier')

                {{-- 3. Milestone Progress Stepper --}}
                @include('user.cek-pesanan.progress-stepper')

                {{-- 4. Order Details & Financial Ledger --}}
                @include('user.cek-pesanan.details-grid')

                {{-- 5. Documentation Showcase --}}
                @include('user.cek-pesanan.documentation-showcase')

                {{-- 6. WhatsApp Concierge Support Banner --}}
                @include('user.cek-pesanan.concierge-banner')
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function simulateSearch() {
        const code = document.getElementById('orderCodeInput').value.trim();
        const wa = document.getElementById('whatsappInput').value.trim();
        const resultDiv = document.getElementById('resultDossier');
        const dispCode = document.getElementById('dispOrderCode');
        const dispWa = document.getElementById('dispWaNumber');
        const dispConciergeTitle = document.getElementById('dispConciergeTitle');
        const conciergeWaBtn = document.getElementById('conciergeWaBtn');

        if (code) {
            dispCode.textContent = '#' + code.replace('#', '');
            dispConciergeTitle.textContent = `Punya Pertanyaan Mengenai Pesanan #${code.replace('#', '')}?`;
            conciergeWaBtn.href = `https://wa.me/6282210008899?text=Halo%20Studio%20Cattaleya,%20saya%20ingin%20bertanya%20mengenai%20progres%20pesanan%20${encodeURIComponent(code)}%20atas%20nama%20Anindya%20Larasati`;
        }
        if (wa) {
            dispWa.textContent = 'WA: ' + wa;
        }

        // Quick micro-interaction animation
        resultDiv.style.opacity = '0.3';
        setTimeout(() => {
            resultDiv.style.opacity = '1';
            resultDiv.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }, 250);
    }
</script>
@endpush
