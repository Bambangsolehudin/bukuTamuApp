    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar  sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand align-items-center justify-content-center" href="{{ url('/') }}">
        <div class=" sidebar-brand-text mx-3 text-lowercase">buku<span class="text-primary "><span class="text-uppercase">Tamu</span>App</span></div>

        {{-- <div class="sidebar-brand-text mx-3">app<span class="text-primary">Laundry</span></div> --}}
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('tamu.index') }}">
          <i class="fas fa-fw fa-users"></i>
          <span>Data Tamu</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('laporan') }}">
          <i class="fas fa-fw fa-images"></i>
          <span>Laporan</span></a>
      </li>

      



      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->