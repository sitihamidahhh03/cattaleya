@extends('layouts.main')

@section('title', 'Cattaleya — Mahar & Penyewaan Kotak Seserahan')

@section('content')
<div class="flex flex-col w-full">
    {{-- 1. Hero Banner --}}
    @include('user.home.hero')

    {{-- 2. Cuplikan Seri Pilihan --}}
    @include('user.home.curated-series')

    {{-- 3. 4 Langkah Mudah Pemesanan --}}
    @include('user.home.order-steps')

    {{-- 4. Lokasi Studio & Kontak --}}
    @include('user.home.studio-location')
</div>
@endsection
