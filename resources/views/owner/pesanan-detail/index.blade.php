@extends('layouts.owner')

@section('title', 'Dossier Pesanan #ORD-2025-090 — Cattaleya Atelier Owner')

@section('content')
<div class="flex flex-col w-full">
  @include('owner.pesanan-detail.header')
  @include('owner.pesanan-detail.status-ribbon')

  <!-- Main Bento Grid Dossier Content -->
  <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter mb-space-xl">
    <!-- LEFT COLUMN (7 COLS): Customer Details & Order Composition -->
    <div class="lg:col-span-7 flex flex-col gap-gutter">
      @include('owner.pesanan-detail.customer-info')
      @include('owner.pesanan-detail.order-items')
    </div>

    <!-- RIGHT COLUMN (5 COLS): Payment Dossier & Event Timeline Tracker -->
    <div class="lg:col-span-5 flex flex-col gap-gutter">
      @include('owner.pesanan-detail.payment-info')
      @include('owner.pesanan-detail.timeline')
    </div>
  </div>

  @include('owner.pesanan-detail.footer-bar')
</div>
@endsection
