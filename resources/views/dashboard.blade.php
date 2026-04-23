@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<!-- Content Header -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Dashboard</h1>
      </div>
    </div>
  </div>
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">

      <!-- Card Produk -->
      <div class="col-lg-4 col-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Produk</h3>
          </div>
          <div class="card-body">
            <p>Total Produk: 120</p>
          </div>
        </div>
      </div>

      <!-- Card Pesanan -->
      <div class="col-lg-4 col-6">
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Pesanan</h3>
          </div>
          <div class="card-body">
            <p>Pesanan Hari Ini: 35</p>
          </div>
        </div>
      </div>

      <!-- Card User -->
      <div class="col-lg-4 col-6">
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">User</h3>
          </div>
          <div class="card-body">
            <p>Total Customer: 80</p>
          </div>
        </div>
      </div>

    </div>

    <!-- Produk Terbaru -->
    <div class="row">
      <div class="col-12">
        <div class="card card-warning">
          <div class="card-header">
            <h3 class="card-title">Produk Terbaru</h3>
          </div>
          <div class="card-body">
            <p>Daftar produk roti dan kue terbaru akan tampil di sini.</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
@endsection
