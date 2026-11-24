@extends('layouts.main')

@section('title', 'Katalog Mahar Agung & Kotak Seserahan Bernilai Abadi - Cattaleya')

@section('content')
<div class="flex flex-col w-full pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 pt-8 sm:pt-10">
        {{-- 1. Editorial Atelier Banner Card --}}
        @include('user.katalog.banner')

        {{-- 2. Sub-Navigation / Filter Toggle Bar --}}
        @include('user.katalog.nav')

        {{-- 3. Section Mahar Pernikahan Bespoke --}}
        @include('user.katalog.mahar')

        {{-- 4. Section Sewa Kotak Seserahan Eksklusif --}}
        @include('user.katalog.seserahan')

        {{-- 5. Bottom Consultation Banner --}}
        @include('user.katalog.consultation')
    </div>
</div>
@endsection
