@extends('layouts.owner')

@section('title', 'Dashboard Pemilik Bisnis (Owner) — Cattaleya Atelier')

@section('content')
<div class="flex flex-col w-full gap-space-xl">
    {{-- 1. Salutation & Live Monitoring Header Banner --}}
    @include('owner.dashboard.banner')

    {{-- 2. 5 Executive Metric Summary Cards --}}
    @include('owner.dashboard.metrics')

    {{-- 3. Two Analytics Cards (Side-by-Side: 7 cols & 5 cols) --}}
    <section class="grid grid-cols-1 lg:grid-cols-12 gap-space-md">
        {{-- Chart 1: Order Trend Line Chart (7 Cols) --}}
        @include('owner.dashboard.chart-trend')

        {{-- Chart 2: Mahar vs Seserahan Donut & Value Comparison (5 Cols) --}}
        @include('owner.dashboard.chart-donut')
    </section>
</div>
@endsection
