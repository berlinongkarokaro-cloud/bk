<div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="sidebarMenu">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Bollen Bakery</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="list-unstyled">
      <li><a href="/dashboard" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
      <li><a href="/products" class="nav-link {{ request()->is('products*') ? 'active' : '' }}"><i class="fas fa-bread-slice"></i> Produk</a></li>
      <li><a href="/orders" class="nav-link {{ request()->is('orders*') ? 'active' : '' }}"><i class="fas fa-shopping-cart"></i> Pesanan</a></li>
      <li><a href="/users" class="nav-link {{ request()->is('users*') ? 'active' : '' }}"><i class="fas fa-users"></i> User</a></li>

      <!-- Collapsible Laporan -->
      <li>
        <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#laporanMenu" role="button" aria-expanded="{{ request()->is('reports*') ? 'true' : 'false' }}">
          <span><i class="fas fa-chart-line"></i> Laporan</span>
          <i class="fas fa-angle-down rotate-icon {{ request()->is('reports*') ? 'expanded' : 'collapsed' }}"></i>
        </a>
        <div class="collapse {{ request()->is('reports*') ? 'show' : '' }}" id="laporanMenu">
          <ul class="list-unstyled ms-3">
            <li><a href="/reports/daily" class="nav-link {{ request()->is('reports/daily') ? 'active' : '' }}">Penjualan Harian</a></li>
            <li><a href="/reports/monthly" class="nav-link {{ request()->is('reports/monthly') ? 'active' : '' }}">Penjualan Bulanan</a></li>
            <li><a href="/reports/top-products" class="nav-link {{ request()->is('reports/top-products') ? 'active' : '' }}">Produk Terlaris</a></li>
          </ul>
        </div>
      </li>

      <li><a href="/settings" class="nav-link {{ request()->is('settings*') ? 'active' : '' }}"><i class="fas fa-cogs"></i> Pengaturan</a></li>
    </ul>
  </div>
</div>
