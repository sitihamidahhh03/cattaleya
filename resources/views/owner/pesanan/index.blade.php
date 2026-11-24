@extends('layouts.owner')

@section('title', 'Data Seluruh Pesanan — Cattaleya Atelier Owner')

@section('content')
<div class="flex flex-col w-full">
    <div class="relative w-full flex flex-col gap-space-lg mb-space-xl">
        {{-- 1. Header Banner & Key Metrics Ticker --}}
        @include('owner.pesanan.header')

        {{-- 2. Master Filter Panel --}}
        @include('owner.pesanan.filter')

        {{-- 3. Orders Table Ledger & Paging --}}
        @include('owner.pesanan.table')
    </div>
</div>

{{-- 4. Detail Modal & Interactive Script --}}
@include('owner.pesanan.modal')
@endsection
