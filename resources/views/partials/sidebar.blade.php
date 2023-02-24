  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    {{-- <aside class="main-sidebar elevation-4" style="background-color: green;"> --}}
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/dist/img/SMP MA.gif" alt="SMP MA Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="fw-bold brand-text text-light">MATLA`UL ANWAR</span>
    </a>

    {{-- @role('admin') --}}
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard" class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">MANAJEMEN DATA</li>
          <li class="nav-item">
            <a href="/class" class="nav-link {{ Request::is('class*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-school"></i>
              <p>
                Kelas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/students" class="nav-link {{ Request::is('students*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Siswa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/officer" class="nav-link {{ Request::is('officer*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Petugas
              </p>
            </a>
          </li>
          <li class="nav-header">PEMBAYARAN</li>

          <li class="nav-item">
            <a href="/spp" class="nav-link {{ Request::is('spp*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-money-bill"></i>
              <p>
                SPP
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/transactions" class="nav-link {{ Request::is('transaction*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-money-bill"></i>
              <p>
                Pembayaran
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/history" class="nav-link {{ Request::is('history*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-history"></i>
              <p>
                History Pembayaran
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Laporan Pembayaran
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    {{-- @endrole  --}}

    {{-- @role('admin') --}}
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Petugas</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard" class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/history" class="nav-link {{ Request::is('history*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-history"></i>
              <p>
                History Pembayaran
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    {{-- @endrole --}}

  </aside>
