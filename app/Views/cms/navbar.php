
<!-- <link href=".../../public/css/sidebars.css" rel="stylesheet"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<style>
@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css");
</style>  
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
    <div class="position-sticky pt-3 bg-dark">

      <?php
          $request = service('request');
          $uri = $request->uri;
          $something = $uri->getSegment(1); 
          // echo $something;
      ?>

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>MENU UTAMA</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
      </h6>

      <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark">
        <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="<?= base_url('/public/index.php/Dashboard'); ?>" class="nav-link text-white <?php if ($something=='Dashboard') { echo 'active';} ?>" aria-current="page">
              <i class="bi-house-heart-fill"></i>&nbsp;
              <small>Beranda</small>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('/public/index.php/master_pegawai'); ?>" class="nav-link text-white <?php if ($something=='master_pegawai' or $something=='tambah_pegawai' or $something=='simpan_pegawai') { echo 'active';} ?>" aria-current="page">
              <i class="bi-boxes"></i>&nbsp;
              <small>Data Pegawai</small>
            </a>
          </li>
          <li>
          <a href="<?= base_url('/public/index.php/master_gaji'); ?>" class="nav-link text-white <?php if ($something=='master_gaji' or $something=='tambah_gaji' or $something=='simpan_gaji') { echo 'active';} ?>" aria-current="page">
              <i class="bi-person-badge"></i>&nbsp;
              <small>Data Gaji</small>
            </a>
          </li>
          <li>
            <a href="<?= base_url('/public/index.php/master_absen'); ?>" class="nav-link text-white <?php if ($something=='master_absen' or $something=='tambah_absen' or $something=='simpan_absen') { echo 'active';} ?>" aria-current="page">
              <i class="bi-bag-heart"></i>&nbsp;
              <small>Data Absensi</small>
            </a>
          </li>
          <li>
          <a href="<?= base_url('/public/index.php/master_potongan'); ?>" class="nav-link text-white <?php if ($something=='master_potongan' or $something=='tambah_potongan' or $something=='simpan_potongan') { echo 'active';} ?>" aria-current="page">
              <i class="bi-scissors"></i>&nbsp;
              <small>Data Potongan</small>
            </a>
          </li>
          <!-- <li>
          <a href="<?= base_url('/public/index.php/master_pinjaman'); ?>" class="nav-link text-white <?php if ($something=='master_pinjaman' or $something=='tambah_pinjaman' or $something=='simpan_pinjaman') { echo 'active';} ?>" aria-current="page">
              <i class="bi-reply"></i>&nbsp;
              <small>Data Pinjaman</small>
            </a>
          </li>
          <li>
          <a href="<?= base_url('/public/index.php/master_koperasi'); ?>" class="nav-link text-white <?php if ($something=='master_koperasi' or $something=='tambah_koperasi' or $something=='simpan_koperasi') { echo 'active';} ?>" aria-current="page">
               <i class="bi-clipboard-check"></i>&nbsp;
              <small>Data Koperasi</small>
            </a>
          </li> -->
          <li>
          <a href="<?= base_url('/public/index.php/master_slip_gaji'); ?>" class="nav-link text-white <?php if ($something=='master_slip_gaji' or $something=='tambah_slip_gaji' or $something=='simpan_slip_gaji') { echo 'active';} ?>" aria-current="page">
              <i class="bi-card-list"></i>&nbsp;
              <small>Slip Gaji dan Upah</small>
            </a>
          </li>
          <li>
          <a href="<?= base_url('/public/index.php/master_rekap_gaji'); ?>" class="nav-link text-white <?php if ($something=='master_rekap_gaji') { echo 'active';} ?>" aria-current="page">
              <i class="bi-clipboard2-data"></i>&nbsp;
              <small>Laporan Rekap</small>
            </a>
          </li>
          
        </ul>
      </div>

      




        <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Master Data</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>

        <ul class="nav flex-column">
        
          <li class="nav-item">
            <a class="nav-link <?php if ($something=='master_barang') { echo 'active';} ?>" href="<?= base_url('/master_barang'); ?>">
              <span data-feather="file"></span>
              Data Barang
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($something=='users') { echo 'active';} ?>" href="/users">
              <span data-feather="shopping-cart"></span>
              Data Pemilik
            </a>
          </li>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Input Transaksi</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Transaksi Penjualan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Transaksi Pembelian
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Transaksi Retur Pembelian
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Laporan</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Kartu Persediaan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Kartu Gudang
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Laporan Penjualan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Laporan Pembelian
            </a>
          </li>
        </ul> -->
      </div>
    </nav>