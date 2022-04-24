<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard Payroll</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/"> -->
    <!-- <link rel="icon" href="/assets/images/favicon.ico" type="image/gif"> -->
    

    <!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.1/examples/dashboard/dashboard.css" rel="stylesheet">
    <!-- <link href="css/sidebars.css" rel="stylesheet"> -->
  </head>
  <body>
    
  <header class="sticky-top bg-dark">
    <div class="px-3 py-2 bg-dark text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
          Aplikasi Payroll
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small text-white">
            <li>
                  <div class="flex-shrink-0 dropdown">
                <a href="#" class="d-block link-dark text-white text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="../../public/images/bg_penjualan.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small text-white shadow" aria-labelledby="dropdownUser2">
                  <!-- <li><a class="dropdown-item" href="#">New project...</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li> -->
                  <!-- <li><a class="dropdown-item" href="#"><small>Profile</small></a></li>
                  <li><hr class="dropdown-divider text-black"></li> -->
                  <li><a class="dropdown-item" href="login/logout"><small>Sign out</small></a></li>
                </ul>
              </div>
            </li>
          </ul>

        </div>
      </div>
    </div>
    
  </header>


  

  
  
  
  

<div class="container-fluid" class="bg-image d-flex justify-content-center align-items-center" style="background-image: url('../../public/images/bg_payroll.jpg');height: 100vh;background-size: cover;">
  <div class="row">
    


    <?= $this->include('cms/navbar'); ?>



    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"> 
        
      
     
      
      <h1 class="h2 col-md-12">
      <div class="card col-md-12" style="background-color:#d63384;">
  <div class="card-body">
        <span class="h2 text-white">Dashboard</span>
  </div>
</div>
    </h1>
      
        <!-- <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div> -->
      </div>

      <div class="container">
  <div class="row">
    <div class="col">
      
    <div class="card text-black bg-warning mb-3" style="max-width: 18rem;">
  <div class="card-header"><strong>MENU</strong></div>
  <div class="card-body">
    <!-- <h5 class="card-title">Primary card title</h5> -->
    <p class="card-text">
    <a href="<?= base_url('/public/index.php/master_pegawai'); ?>" class="btn btn-primary btn-sm  w-100" tabindex="-1" role="button" aria-disabled="false">Data Pegawai</a></p>
    </p>
  </div>
</div>

    </div>
    <!-- <div class="col">
      
    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
  <div class="card-header">MENU 2</div>
  <div class="card-body">
    <p class="card-text">
    <a href="<?= base_url('/public/index.php/master_pinjaman'); ?>" class="btn btn-primary btn-sm  w-100" tabindex="-1" role="button" aria-disabled="false">Data Pinjaman</a></p>
    </p>
  </div>
</div>

    </div> -->
    <!-- <div class="col">
      
    <div class="card text-dark bg-warning mb-3" style="max-width: 18rem;">
  <div class="card-header">MENU 3</div>
  <div class="card-body">
  <p class="card-text">
    <a href="<?= base_url('/public/index.php/master_koperasi'); ?>" class="btn btn-primary btn-sm  w-100" tabindex="-1" role="button" aria-disabled="false">Data Koperasi</a></p>
    </p>
  </div>
</div>

    </div> -->
  </div>
</div>

      

      



      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
      
      <!-- <h2>Section title</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>text</td>
            </tr>
            <tr>
              <td>1,002</td>
              <td>placeholder</td>
              <td>irrelevant</td>
              <td>visual</td>
              <td>layout</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>data</td>
              <td>rich</td>
              <td>dashboard</td>
              <td>tabular</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>information</td>
              <td>placeholder</td>
              <td>illustrative</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,004</td>
              <td>text</td>
              <td>random</td>
              <td>layout</td>
              <td>dashboard</td>
            </tr>
            <tr>
              <td>1,005</td>
              <td>dashboard</td>
              <td>irrelevant</td>
              <td>text</td>
              <td>placeholder</td>
            </tr>
            <tr>
              <td>1,006</td>
              <td>dashboard</td>
              <td>illustrative</td>
              <td>rich</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,007</td>
              <td>placeholder</td>
              <td>tabular</td>
              <td>information</td>
              <td>irrelevant</td>
            </tr>
            <tr>
              <td>1,008</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>text</td>
            </tr>
            <tr>
              <td>1,009</td>
              <td>placeholder</td>
              <td>irrelevant</td>
              <td>visual</td>
              <td>layout</td>
            </tr>
            <tr>
              <td>1,010</td>
              <td>data</td>
              <td>rich</td>
              <td>dashboard</td>
              <td>tabular</td>
            </tr>
            <tr>
              <td>1,011</td>
              <td>information</td>
              <td>placeholder</td>
              <td>illustrative</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,012</td>
              <td>text</td>
              <td>placeholder</td>
              <td>layout</td>
              <td>dashboard</td>
            </tr>
            <tr>
              <td>1,013</td>
              <td>dashboard</td>
              <td>irrelevant</td>
              <td>text</td>
              <td>visual</td>
            </tr>
            <tr>
              <td>1,014</td>
              <td>dashboard</td>
              <td>illustrative</td>
              <td>rich</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,015</td>
              <td>random</td>
              <td>tabular</td>
              <td>information</td>
              <td>text</td>
            </tr>
          </tbody>
        </table>
      </div> -->

    </main>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="../../public/js/sidebars.js"></script> -->
      <!-- <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script> -->
      <script src="../../public/js/dashboard.js"></script>
  </body>
</html>
