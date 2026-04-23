@extends('layouts.app')

@section('title', 'Laporan Harian')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <h1>Laporan Penjualan Harian</h1>
  </div>
</section>

<section class="content">
  <div class="container-fluid">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Grafik Penjualan Harian</h3>
      </div>
      <div class="card-body">
        <canvas id="dailyChart" style="height:250px;"></canvas>
      </div>
    </div>
  </div>
</section>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctxDaily = document.getElementById('dailyChart').getContext('2d');
  new Chart(ctxDaily, {
    type: 'line',
    data: {
      labels: ['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'],
      datasets: [{
        label: 'Penjualan (Rp Juta)',
        data: [5, 7, 6, 8, 10, 12, 9],
        borderColor: 'rgba(60,141,188,0.8)',
        backgroundColor: 'rgba(60,141,188,0.4)',
        fill: true
      }]
    },
    options: { responsive: true, maintainAspectRatio: false }
  });
</script>
@endpush
