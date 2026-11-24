<!-- Bottom Executive Summary Bar -->
<div class="rounded-xl bg-surface-container-low p-space-lg flex flex-col sm:flex-row items-center justify-between gap-space-md shadow-sm">
  <div class="flex items-center gap-space-sm text-outline font-label-md text-label-md">
    <span class="material-symbols-outlined text-primary">spa</span>
    <span>Cattaleya Seserahan &amp; Mahar Studio &bull; Jakarta Pusat &bull; Sistem Monitoring Pesanan v3.4</span>
  </div>
  <div class="flex items-center gap-space-md">
    <a class="font-title-md text-title-md text-primary hover:underline inline-flex items-center gap-1" data-path="pesanan" href="{{ request()->routeIs('preview.*') ? route('preview.owner-pesanan') : route('owner.pesanan') }}">
      <span>&larr; Kembali ke Daftar Pesanan</span>
    </a>
  </div>
</div>
