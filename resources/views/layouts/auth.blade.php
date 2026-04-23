<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Auth') — {{ config('app.name') }}</title>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/custom-auth.css') }}">
</head>
<body>

<div class="auth-wrap">

  <!-- LEFT: Photo Panel -->
  <div class="auth-photo d-none d-md-block">
    <img class="bg-img" src="{{ asset('images/login-bg.jpg') }}" alt="">
    <div class="photo-overlay"></div>

    <a href="/" class="logo">
      <div class="logo-icon">V</div>
      <span>{{ config('app.name', 'Voltrex') }}</span>
    </a>
  </div>

  <!-- RIGHT: Form Panel -->
  <div class="auth-panel">
    <div class="auth-form-box">
      @yield('content')
    </div>
  </div>

</div>
<script>
function togglePassword() {
  const input = document.getElementById('passwordInput');
  input.type = input.type === 'password' ? 'text' : 'password';
}

document.getElementById('loginForm').addEventListener('submit', function () {
  const btn = document.getElementById('loginBtn');
  btn.classList.add('loading');
});
</script>
</body>
</html>
