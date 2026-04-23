<nav class="navbar navbar-expand navbar-light bg-light">
  <!-- Tombol Burger -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="offcanvas" href="#sidebarMenu" role="button">
        <i class="fas fa-bars"></i>
      </a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="/dashboard" class="nav-link">Home</a>
    </li>
  </ul>

  <!-- Right Navbar -->
  <ul class="navbar-nav ms-auto">
    <!-- Notifikasi -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-bs-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge bg-warning">3</span>
      </a>
      <ul class="dropdown-menu dropdown-menu-end">
        <li><a class="dropdown-item" href="/orders"><i class="fas fa-shopping-cart me-2"></i>2 Pesanan baru</a></li>
        <li><a class="dropdown-item" href="/users"><i class="fas fa-user-plus me-2"></i>1 User baru</a></li>
      </ul>
    </li>

    <!-- User -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-bs-toggle="dropdown" href="#">
        <i class="fas fa-user-circle"></i>
      </a>
      <ul class="dropdown-menu dropdown-menu-end">
        <li><a class="dropdown-item" href="/profile">Profile</a></li>
        <li><a class="dropdown-item" href="/settings">Pengaturan</a></li>
        <li><a class="dropdown-item" href="/logout">Logout</a></li>
      </ul>
    </li>

    <li class="nav-item">
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="btn btn-link nav-link">Logout</button>
  </form>
</li>

  </ul>
</nav>
