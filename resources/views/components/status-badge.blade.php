@props([
    'status' => 'pending',
    'type' => 'status', // 'status', 'payment', 'stock'
])

@php
    $statusKey = strtolower(trim($status));
    
    // Status badges mapping
    $styles = [
        // Payment Statuses
        'lunas' => 'bg-[#ecfdf3] text-[#027a48] border-[#a6f4c5] dot-[#12b76a]',
        'terbayar' => 'bg-[#ecfdf3] text-[#027a48] border-[#a6f4c5] dot-[#12b76a]',
        'dp terbayar' => 'bg-[#fdf8ee] text-[#7a5826] border-[#7a5826]/30 dot-[#7a5826]',
        'dp diterima' => 'bg-[#fdf8ee] text-[#7a5826] border-[#7a5826]/30 dot-[#7a5826]',
        'pending' => 'bg-[#fff8f0] text-[#b54708] border-[#fedf89] dot-[#f79009]',
        'menunggu pembayaran' => 'bg-[#fff8f0] text-[#b54708] border-[#fedf89] dot-[#f79009]',
        'dibatalkan' => 'bg-[#fef3f2] text-[#b42318] border-[#fecdca] dot-[#f04438]',
        'gagal' => 'bg-[#fef3f2] text-[#b42318] border-[#fecdca] dot-[#f04438]',

        // Order Progress Statuses
        'pesanan baru' => 'bg-secondary-container text-on-secondary-container border-outline-variant/40 dot-primary',
        'menunggu konfirmasi' => 'bg-[#fff8f0] text-[#b54708] border-[#fedf89] dot-[#f79009]',
        'sedang dikerjakan' => 'bg-secondary-container text-on-secondary-container border-outline-variant/40 dot-primary ping',
        'pengerjaan florist' => 'bg-secondary-container text-on-secondary-container border-outline-variant/40 dot-primary ping',
        'siap diambil' => 'bg-[#eff8ff] text-[#175cd3] border-[#b2ddff] dot-[#2e90fa]',
        'selesai' => 'bg-[#ecfdf3] text-[#027a48] border-[#a6f4c5] dot-[#12b76a]',

        // Box Stock Statuses
        'tersedia' => 'bg-[#ecfdf3] text-[#027a48] border-[#a6f4c5] dot-[#12b76a]',
        'terbooking' => 'bg-[#fdf8ee] text-[#7a5826] border-[#7a5826]/30 dot-[#7a5826]',
        'disewa' => 'bg-[#eff8ff] text-[#175cd3] border-[#b2ddff] dot-[#2e90fa]',
        'maintenance' => 'bg-[#fef3f2] text-[#b42318] border-[#fecdca] dot-[#f04438]',
    ];

    // Default fallback style
    $matchedStyle = $styles[$statusKey] ?? 'bg-surface-container-high text-on-surface-variant border-outline-variant dot-outline';
    $isPing = str_contains($matchedStyle, 'ping');
    $cleanStyle = str_replace(' ping', '', $matchedStyle);
@endphp

<span {{ $attributes->merge(['class' => 'inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full font-label-sm text-xs font-semibold border ' . $cleanStyle]) }}>
    <span class="w-1.5 h-1.5 rounded-full bg-current {{ $isPing ? 'animate-ping' : '' }}"></span>
    <span>{{ $slot->isEmpty() ? $status : $slot }}</span>
</span>
