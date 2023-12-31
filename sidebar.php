  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
          <img src="img/uangin.svg" alt="logo">
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Overview</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'pendapatan.php') ? 'active' : ''; ?>">
        <a class="nav-link collapsed" href="pendapatan.php">
          <i class="fas fa-fw fa-arrow-up"></i>
          <span>Pendapatan</span>
        </a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'pengeluaran.php') ? 'active' : ''; ?>">
        <a class="nav-link collapsed" href="pengeluaran.php" >
          <i class="fas fa-fw fa-arrow-down"></i>
          <span>Pengeluaran</span>
        </a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'hutang.php') ? 'active' : ''; ?>">
        <a class="nav-link" href="hutang.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Tagihan</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'laporan.php') ? 'active' : ''; ?>">
        <a class="nav-link" href="laporan.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Laporan</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
