<!-- Top Navigation & Dossier Action Header -->
<div class="flex flex-col lg:flex-row lg:items-center justify-between gap-space-md mb-space-xl">
  <div class="flex flex-col gap-space-xs">
    <div class="flex items-center gap-space-sm mb-space-xs">
      <a class="group inline-flex items-center gap-space-xs px-space-md py-space-xs rounded-full bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all duration-200" data-path="pesanan" href="{{ request()->routeIs('preview.*') ? route('preview.owner-pesanan') : route('owner.pesanan') }}">
        <span class="material-symbols-outlined text-base transition-transform group-hover:-translate-x-0.5">arrow_back</span>
        <span class="font-label-md text-label-md">Kembali ke Daftar Pesanan</span>
      </a>
      <span class="inline-flex items-center gap-1.5 px-space-sm py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm tracking-wider uppercase">
        <span class="material-symbols-outlined text-xs text-primary">visibility</span>
        Owner Inspection View
      </span>
    </div>
    <div class="flex flex-wrap items-baseline gap-x-space-md gap-y-1">
      <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">
        Dossier Pesanan <span class="font-metric-display text-metric-display text-primary">#ORD-2025-090</span>
      </h1>
      <span class="font-body-md text-body-md text-outline">
        Tercatat pada 04 Oktober 2025 &bull; Pukul 11:20 WIB
      </span>
    </div>
  </div>

  <!-- Read-Only Action: Cetak / Export Only -->
  <div class="flex items-center gap-space-sm self-start lg:self-center">
    <button class="inline-flex items-center gap-space-xs px-space-lg py-space-sm rounded-xl bg-primary text-on-primary hover:bg-primary-container shadow-sm transition-all duration-150 cursor-pointer" onclick="window.print()">
      <span class="material-symbols-outlined text-lg">print</span>
      <span class="font-label-md text-label-md">Cetak Rincian Pesanan</span>
    </button>
    <div class="w-10 h-10 rounded-xl bg-surface-container-low flex items-center justify-center text-outline hover:text-on-surface transition-colors" title="Arsip Terenkripsi">
      <span class="material-symbols-outlined text-xl">verified</span>
    </div>
  </div>
</div>
