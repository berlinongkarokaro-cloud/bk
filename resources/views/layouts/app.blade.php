<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Admin Dashboard')</title>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/custom-navbar.css') }}">
  <link rel="stylesheet" href="{{ asset('css/custom-sidebar.css') }}">
  <link rel="stylesheet" href="{{ asset('css/custom-burger.css') }}">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- AdminLTE CSS (opsional, untuk konten card dll) -->
  <link rel="stylesheet" href="{{ asset('adminlte/css/adminlte.min.css') }}">

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="hold-transition layout-fixed">
<div class="wrapper">

  @include('partials.navbar')
  @include('partials.sidebar')

  <!-- Content Wrapper -->
  <div class="content-wrapper">
    @yield('content')
  </div>

  @include('partials.footer')

</div>

<!-- jQuery (opsional, kalau masih pakai AdminLTE) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE JS (opsional) -->
<script src="{{ asset('adminlte/js/adminlte.min.js') }}"></script>

<!-- Custom Burger Script -->
<script src="{{ asset('js/custom-burger.js') }}"></script>

@stack('scripts')
</body>
</html>
