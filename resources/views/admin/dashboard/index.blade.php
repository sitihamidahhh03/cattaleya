@extends('layouts.admin')

@section('title', 'Dashboard Operasional Admin')

@section('content')
<div class="flex flex-col w-full">
    <div class="flex flex-col gap-space-lg w-full max-w-[1536px] mx-auto py-space-md">
        {{-- SECTION 1: HEADER & OPERATIONAL STATUS --}}
        @include('admin.dashboard.header-status')

        {{-- SECTION 2: 6 KARTU STATISTIK RINGKASAN OPERASIONAL --}}
        @include('admin.dashboard.stat-cards')

        {{-- SECTION 3 & 4: SPLIT GRID (MIDTRANS PAYMENT RECAP & QUICK WIDGET KOTAK) --}}
        @include('admin.dashboard.payment-and-box-widgets')

        {{-- SECTION 5: TABEL DAFTAR PESANAN TERBARU (OPERASIONAL ADMIN) --}}
        @include('admin.dashboard.active-orders-table')
    </div>
</div>

{{-- SECTION 6: MODAL, DRAWER & INTERACTIVE SCRIPTS --}}
@include('admin.dashboard.modals')
@endsection
