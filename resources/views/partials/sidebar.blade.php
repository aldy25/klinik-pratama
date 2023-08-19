  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon">
          <i class="fa fa-stethoscope" aria-hidden="true"></i>
      </div>
          <div class="sidebar-brand-text mx-3">Klinik Pratama</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      
      @can('dashboard')
          
      <!-- Nav Item - Dashboard -->
      <li class="nav-item {{ ($title==='Dashboard') ? 'active':'' }}">
          <a class="nav-link" href="/dashboard">

            <i class="fas fa-columns"></i>
              <span>Dashboard</span></a>
      </li>
      @endcan

      @can('admin')
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <div class="sidebar-heading mt-3">
        Klinik
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item {{ ($title==='Pengobatan') ? 'active':'' }}">
          <a class="nav-link  " href="/pengobatan">
            <i class="fa fa-bed" aria-hidden="true"></i>
              <span>Pengobatan</span>
          </a>
      </li>
      <hr class="sidebar-divider my-0">
      <li class="nav-item {{ ($title==='Pemeriksaan Lab') ? 'active':'' }}">
        <a class="nav-link  " href="/lab">
          <i class="fa fa-flask" aria-hidden="true"></i>
            <span>Pemeriksaan Lab</span>
        </a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <li class="nav-item  {{ ($title==='Transaksi Pengobatan' or $title==="Proses Transaksi Pengobatan") ? 'active':'' }}">
        <a class="nav-link " href="/transaksi">
          <i class="fa fa-credit-card" aria-hidden="true"></i>
            <span>Transaksi Pengobatan</span>
        </a>
    </li>
    <hr class="sidebar-divider my-0">
      <li class="nav-item  {{ ($title==='Riwayat Transaksi') ? 'active':'' }}">
        <a class="nav-link " href="/transaksi/riwayat">
          <i class="fa fa-history" aria-hidden="true"></i>
            <span>Riwayat Transaksi</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <div class="sidebar-heading mt-3">
        Data
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ ($title==='Pasien') ? 'active':'' }}">
      <a class="nav-link  " href="/pasien">
        <i class="fa fa-users" aria-hidden="true"></i>
          <span>Pasien</span>
      </a>
  </li>
  <hr class="sidebar-divider my-0">
  <li class="nav-item {{ ($title==='Dokter') ? 'active':'' }}">
    <a class="nav-link  " href="/dokter">
      <i class="fa fa-user-md" aria-hidden="true"></i>
        <span>Dokter</span>
    </a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  <li class="nav-item  {{ ($title==='Apoteker') ? 'active':'' }}">
    <a class="nav-link " href="/apoteker">
      <i class="fa fa-male" aria-hidden="true"></i>
        <span>Apoteker</span>
    </a>
</li>
<!-- Divider -->
<hr class="sidebar-divider my-0">
<li class="nav-item {{ ($title==='Tenaga Kesehatan') ? 'active':'' }}">
  <a class="nav-link  " href="/nakes">
    <i class="fa fa-female" aria-hidden="true"></i>
      <span>Tenaga Kesehatan</span>
  </a>
</li>
<hr class="sidebar-divider my-0">
<li class="nav-item {{ ($title==='Layanan') ? 'active':'' }}">
<a class="nav-link " href="/layanan">
  <i class="fa fa-map" aria-hidden="true"></i>
    <span>Layanan</span>
</a>
</li>
<!-- Divider -->
<hr class="sidebar-divider my-0">
<li class="nav-item  {{ ($title==='Inventaris') ? 'active':'' }}">
<a class="nav-link " href="/inventaris">
  <i class="fa fa-fax" aria-hidden="true"></i>
    <span>Inventaris</span>
</a>
</li>
<!-- Divider -->
<hr class="sidebar-divider my-0">
@endcan

    @can('apoteker')
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <div class="sidebar-heading mt-3">
        Apotik
      </div>

      
      <li class="nav-item {{ ($title==='Pengambilan Obat') ? 'active':'' }}">
        <a class="nav-link" href='/obat/pengambilan'>
          <i class="fa fa-users" aria-hidden="true"></i>
            <span>Pengambilan Obat</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <li class="nav-item {{ ($title==='Re-Stock Obat') ? 'active':'' }}">
        <a class="nav-link" href='/obat/restock'>
          <i class="fa fa-plus-circle" aria-hidden="true"></i>
            <span>Re-stock Obat</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <li class="nav-item {{ ($title==='Obat') ? 'active':'' }}">
        <a class="nav-link" href="/obat">
          <i class="fas fa-capsules"></i>
            <span>Obat</span></a>
      </li>
      
    @endcan

      @can('owner')
      
      <hr class="sidebar-divider my-0">
      <div class="sidebar-heading mt-3">
        Kelola Admin
      </div>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item {{ ($title==='Admin') ? 'active' : '' }}">
        <a class="nav-link" href="/admin">
          <i class="fa fa-user-circle" aria-hidden="true"></i>
            <span>Data Admin</span>
        </a>
    </li>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <div class="sidebar-heading mt-3">
        Report
      </div>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item {{ ($title==='Laporan') ? 'active' : '' }}">
        <a class="nav-link" href="/laporan">
            <i class="fas fa-book"></i>
            <span>Laporan</span>
        </a>
    </li>
    
    @endcan

    @can('dokter')
      
      <hr class="sidebar-divider my-0">
      <div class="sidebar-heading mt-3">
        Lihat Data
      </div>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item {{ ($title==='Data Pasien') ? 'active' : '' }}">
        <a class="nav-link" href="/data-pasien">
          <i class="fa fa-users" aria-hidden="true"></i>
            <span>Data Pasien</span>
        </a>
    </li>
    @endcan

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
  </ul>
  <!-- End of Sidebar -->
