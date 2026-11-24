@extends('layouts.main')

@section('title', 'Formulir Sewa Kotak Seserahan - Cattaleya')

@section('content')
<div class="flex flex-col w-full pb-20">
    <!-- Subtle Ambient Glow Ornaments -->
    <div class="relative w-full overflow-hidden">
        <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[850px] h-[340px] bg-gradient-to-b from-primary-fixed/20 via-secondary-fixed/15 to-transparent blur-3xl pointer-events-none rounded-full"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 py-10">
            {{-- Header --}}
            @include('user.sewa-kotak.header')

            <!-- Main Layout: 2-Column Asymmetric Ledger Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 pt-10">
                <!-- Left / Core Input Panel (7 Cols) -->
                <div class="lg:col-span-7 space-y-8">
                    {{-- STEP 1: Pelanggan --}}
                    @include('user.sewa-kotak.step-customer')

                    {{-- STEP 2: Jadwal & Periode Sewa --}}
                    @include('user.sewa-kotak.step-schedule')

                    {{-- STEP 3: Pilihan Seri Kotak & Paket --}}
                    @include('user.sewa-kotak.step-series')
                </div>

                <!-- Right / Verification Engine & Checkout Panel (5 Cols) -->
                <div class="lg:col-span-5 space-y-6 lg:sticky lg:top-24">
                    {{-- STEP 4: Engine Verifikasi Real-time Anti Double-Booking --}}
                    @include('user.sewa-kotak.verification-matrix')

                    {{-- STEP 5: Ringkasan Sewa & Midtrans Gateway --}}
                    @include('user.sewa-kotak.summary-checkout')
                </div>
            </div>

            {{-- Atelier Guarantee Badges --}}
            @include('user.sewa-kotak.atelier-guarantee')
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
  (function() {
    // State
    const state = {
      seriesName: "Luxury Crystal",
      ratePerBox: 200000,
      totalStock: 10,
      bookedStock: 6,
      qty: 4,
      deposit: 500000,
      paymentMode: "full",
      weddingDate: "2025-10-22"
    };

    // DOM Elements
    const weddingDateInput = document.getElementById("wedding-date");
    const calcPickupDate = document.getElementById("calc-pickup-date");
    const calcReturnDate = document.getElementById("calc-return-date");
    const dispBufferRange = document.getElementById("disp-buffer-range");

    const seriesButtons = document.querySelectorAll(".series-card");
    const qtyButtons = document.querySelectorAll(".qty-btn");
    const payButtons = document.querySelectorAll(".pay-btn");

    const dispSeriesName = document.getElementById("disp-series-name");
    const dispMasterStock = document.getElementById("disp-master-stock");
    const dispBookedInfo = document.getElementById("disp-booked-info");
    const dispAvailInfo = document.getElementById("disp-avail-info");
    const bookedBar = document.getElementById("booked-bar");
    const availBar = document.getElementById("avail-bar");

    const availBox = document.getElementById("availability-status-box");
    const statusTitle = document.getElementById("status-title");
    const statusDesc = document.getElementById("status-desc");
    const statusIcon = document.getElementById("status-icon");
    const conflictAlert = document.getElementById("conflict-alert");
    const alertQty = document.getElementById("alert-qty");
    const alertAvail = document.getElementById("alert-avail");

    const summaryPackageTitle = document.getElementById("summary-package-title");
    const summaryUnitCalc = document.getElementById("summary-unit-calc");
    const summaryRentalSubtotal = document.getElementById("summary-rental-subtotal");
    const summaryTotalAll = document.getElementById("summary-total-all");
    const payFullVal = document.getElementById("pay-full-val");
    const payDpVal = document.getElementById("pay-dp-val");
    const btnSubmit = document.getElementById("btn-submit");

    // Format Rupiah
    function formatRp(val) {
      return "Rp " + val.toLocaleString("id-ID");
    }

    // Date formatting helper
    function formatDateIndo(dateStr) {
      if (!dateStr) return "-";
      const parts = dateStr.split("-");
      const d = new Date(parts[0], parts[1] - 1, parts[2]);
      const months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
      const shortMonths = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"];
      return {
        full: `${d.getDate()} ${months[d.getMonth()]} ${d.getFullYear()}`,
        short: `${d.getDate()} ${shortMonths[d.getMonth()]}`
      };
    }

    function addDays(dateStr, days) {
      const parts = dateStr.split("-");
      const d = new Date(parts[0], parts[1] - 1, parts[2]);
      d.setDate(d.getDate() + days);
      const y = d.getFullYear();
      const m = String(d.getMonth() + 1).padStart(2, "0");
      const day = String(d.getDate()).padStart(2, "0");
      return `${y}-${m}-${day}`;
    }

    // Refresh Dates & Buffers
    function updateDateTimeline() {
      const val = weddingDateInput.value;
      if (!val) return;
      state.weddingDate = val;

      const pickupStr = addDays(val, -2);
      const returnStr = addDays(val, 2);

      const pickupFmt = formatDateIndo(pickupStr);
      const returnFmt = formatDateIndo(returnStr);

      calcPickupDate.textContent = pickupFmt.full;
      calcReturnDate.textContent = returnFmt.full;

      dispBufferRange.textContent = `${pickupFmt.short} - ${returnFmt.short} ${val.split("-")[0]}`;
    }

    // Calculate Availability & Price
    function recalculate() {
      const availableUnits = state.totalStock - state.bookedStock;
      const isAvailable = state.qty <= availableUnits;

      // Update Engine Visuals
      dispSeriesName.textContent = state.seriesName;
      dispMasterStock.textContent = state.totalStock + " Unit";
      dispBookedInfo.textContent = "Terbooking: " + state.bookedStock + " Unit";
      dispAvailInfo.textContent = "Sisa Slot Tersedia: " + availableUnits + " Unit";

      const bookedPct = Math.round((state.bookedStock / state.totalStock) * 100);
      const availPct = 100 - bookedPct;
      bookedBar.style.width = bookedPct + "%";
      availBar.style.width = availPct + "%";

      if (isAvailable) {
        availBox.className = "p-4 rounded-xl transition-all duration-200 bg-[#EFF3EE] text-[#344837]";
        statusIcon.textContent = "check_circle";
        statusTitle.textContent = `Tersedia (Sisa ${availableUnits} Unit)`;
        statusDesc.textContent = `Slot tanggal aman terkunci untuk Anda. Seri ${state.seriesName} (${state.qty} kotak) siap dirangkai oleh tim atelier Cattaleya.`;
        conflictAlert.classList.add("hidden");
        btnSubmit.disabled = false;
        btnSubmit.classList.remove("opacity-50", "cursor-not-allowed");
      } else {
        availBox.className = "p-4 rounded-xl transition-all duration-200 bg-[#FDF2F1] text-[#8E3B37]";
        statusIcon.textContent = "error";
        statusTitle.textContent = `Slot Tidak Mencukupi (Sisa ${availableUnits} Unit)`;
        statusDesc.textContent = `Anda memilih ${state.qty} kotak, namun hanya tersisa ${availableUnits} unit untuk seri ini pada periode tanggal tersebut.`;
        
        alertQty.textContent = state.qty + " unit";
        alertAvail.textContent = availableUnits + " unit";
        conflictAlert.classList.remove("hidden");
        btnSubmit.disabled = true;
        btnSubmit.classList.add("opacity-50", "cursor-not-allowed");
      }

      // Financial Calculation
      const rentalCost = state.qty * state.ratePerBox;
      const totalCost = rentalCost + state.deposit;
      const dpCost = (rentalCost * 0.5);

      summaryPackageTitle.textContent = `Paket ${state.qty} Kotak ${state.seriesName}`;
      summaryUnitCalc.textContent = `${state.qty} Kotak × ${formatRp(state.ratePerBox)}`;
      summaryRentalSubtotal.textContent = formatRp(rentalCost);
      summaryTotalAll.textContent = formatRp(totalCost);

      payFullVal.textContent = formatRp(totalCost);
      payDpVal.textContent = formatRp(dpCost);
    }

    function selectSeries(btn) {
      seriesButtons.forEach(b => {
        b.classList.remove("ring-2", "ring-primary", "active-series");
        const check = b.querySelector(".absolute");
        if (check) check.remove();
      });

      btn.classList.add("ring-2", "ring-primary", "active-series");
      
      // Add check icon
      const imgWrap = btn.querySelector(".relative");
      if (imgWrap && !imgWrap.querySelector(".material-symbols-outlined")) {
        const badge = document.createElement("span");
        badge.className = "absolute top-1.5 right-1.5 w-5 h-5 rounded-full bg-primary text-on-primary flex items-center justify-center";
        badge.innerHTML = '<span class="material-symbols-outlined text-xs">check</span>';
        imgWrap.appendChild(badge);
      }

      state.seriesName = btn.dataset.series;
      state.ratePerBox = parseInt(btn.dataset.rate, 10);
      state.totalStock = parseInt(btn.dataset.stock, 10);
      state.bookedStock = parseInt(btn.dataset.booked, 10);

      recalculate();
    }

    // Series Card Click
    seriesButtons.forEach(btn => {
      btn.addEventListener("click", () => selectSeries(btn));
    });

    // Qty Selector
    qtyButtons.forEach(btn => {
      btn.addEventListener("click", () => {
        qtyButtons.forEach(b => {
          b.className = "qty-btn py-3 px-2 rounded-xl text-center font-title-md text-title-md transition-all bg-surface-container-low text-on-surface hover:bg-surface-container";
        });
        btn.className = "qty-btn py-3 px-2 rounded-xl text-center font-title-md text-title-md transition-all bg-primary text-on-primary shadow-sm ring-2 ring-primary";

        state.qty = parseInt(btn.dataset.qty, 10);
        recalculate();
      });
    });

    // Payment Mode Selector
    payButtons.forEach(btn => {
      btn.addEventListener("click", () => {
        payButtons.forEach(b => {
          b.className = "pay-btn p-3.5 rounded-xl text-left transition-all bg-surface-container-low hover:bg-surface-container";
          const iconSpan = b.querySelector(".w-4.h-4");
          if (iconSpan) {
            iconSpan.className = "w-4 h-4 rounded-full border border-outline-variant hidden check-indicator";
            iconSpan.innerHTML = "";
          }
        });

        btn.className = "pay-btn p-3.5 rounded-xl text-left transition-all bg-surface-container ring-2 ring-primary";
        const targetIcon = btn.querySelector(".w-4.h-4");
        if (targetIcon) {
          targetIcon.className = "w-4 h-4 rounded-full bg-primary flex items-center justify-center text-on-primary";
          targetIcon.innerHTML = '<span class="material-symbols-outlined text-[10px]">check</span>';
        }

        state.paymentMode = btn.dataset.pay;
      });
    });

    // Date Change
    weddingDateInput.addEventListener("change", () => {
      updateDateTimeline();
      recalculate();
    });

    // Submit Simulation
    btnSubmit.addEventListener("click", () => {
      const custName = document.getElementById("cust-name").value;
      const custWa = document.getElementById("cust-wa").value;

      if (!custName || !custWa) {
        alert("Mohon lengkapi Nama Lengkap Pemesan dan Nomor WhatsApp terlebih dahulu.");
        return;
      }

      const amountToPay = state.paymentMode === "full" 
        ? (state.qty * state.ratePerBox) + state.deposit 
        : (state.qty * state.ratePerBox * 0.5);

      btnSubmit.innerHTML = '<span class="material-symbols-outlined animate-spin text-xl">progress_activity</span> Menghubungkan Midtrans...';
      btnSubmit.disabled = true;

      setTimeout(() => {
        window.location.href = "{{ route('pembayaran') }}";
      }, 600);
    });

    // Pre-selection based on query string: ?series=...
    const urlParams = new URLSearchParams(window.location.search);
    const seriesParam = urlParams.get('series');
    if (seriesParam) {
      seriesButtons.forEach(btn => {
        if (btn.dataset.series.toLowerCase().includes(seriesParam.toLowerCase())) {
          selectSeries(btn);
        }
      });
    }

    // Initial setup
    updateDateTimeline();
    recalculate();
  })();
</script>
@endpush
