@extends('layouts.app')

@section('title', 'Laporan Bulanan')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <h1>Laporan Penjualan Bulanan</h1>
  </div>
</section>

<section class="content">
  <div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Grafik Penjualan Bulanan</h3>
      </div>
      <div class="card-body">
        <canvas id="salesChart" style="min-height: 250px; height: 250px; max-height: 300px; width: 100%;"></canvas>
      </div>
    </div>
  </div>
</section>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('salesChart').getContext('2d');
  const salesChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
      datasets: [{
        label: 'Penjualan (Rp Juta)',
        data: [12, 19, 15, 22, 30, 25, 28, 35, 40, 38, 45, 50],
        backgroundColor: 'rgba(60,141,188,0.9)',
        borderColor: 'rgba(60,141,188,0.8)',
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        y: {
          beginAtZero: true,
          ticks: {
            stepSize: 5
          }
        }
      }
    }
  });
</script>
@endpush
