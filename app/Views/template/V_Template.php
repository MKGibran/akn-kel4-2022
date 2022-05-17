<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title; ?></title>
    
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/css/vendor.bundle.base.css">
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/images/favicon.ico" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css"/>


  </head>
  <body>
    <div class="container-scroller">

      <!-- Top Menu -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html">AKN Kel 4</a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">AKN Kelompok 4-AP2</p>
                </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- End of Top Menu -->

      <div class="container-fluid page-body-wrapper">

        <!-- Sidebar -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#soal" aria-expanded="false" aria-controls="soal">
                <span class="menu-title">Soal</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-chart-bubble menu-icon"></i>
              </a>
              <div class="collapse" id="soal">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?= base_url('soal1') ?>">Metode Perpetual</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?= base_url('soal2') ?>">Metode FIFO</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#soal" aria-expanded="false" aria-controls="soal">
                <span class="menu-title">Jawaban</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-message-processing menu-icon"></i>
              </a>
              <div class="collapse" id="soal">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?= base_url('jawaban1') ?>">Metode Perpetual</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?= base_url('jawaban2') ?>">Metode FIFO</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/home') ?>">
                <span class="menu-title">Keluar</span>
                <i class="mdi mdi-arrow-right menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End of Sidebar -->

        <!-- Main Panel -->
        <div class="main-panel">
          <div class="content-wrapper">

            <!-- Main Content -->
            <?= $this->renderSection('content') ?>
            <!-- End of Main Content -->

          </div>

          <!-- Footer -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <?php $year = date('Y'); ?>
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © AKN Kelompok 4 - AP2 <?= $year; ?></span>
            </div>
          </footer>
          <!-- End of Footer -->

        </div>
        <!-- End of Main Panel -->

      </div>
    </div>

    <script src="<?= base_url('/assets/vendors/js/vendor.bundle.base.js') ?>"></script>
    <script src="<?= base_url('/assets/vendors/chart.js/Chart.min.js') ?>"></script>
    <script src="<?= base_url('/assets/js/jquery.cookie.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('/assets/js/off-canvas.js') ?>"></script>
    <script src="<?= base_url('/assets/js/hoverable-collapse.js') ?>"></script>
    <script src="<?= base_url('/assets/js/misc.js') ?>"></script>
    <script src="<?= base_url('/assets/js/dashboard.js') ?>"></script>
    <script src="<?= base_url('/assets/js/todolist.js') ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.soal1').DataTable({
        'info': false,
        'columnDefs': [ {
            'targets': [4], // column index (start from 0)
            'orderable': false, // set orderable false for selected columns
        }]
        });
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.soal2').DataTable({
        'info': false,
        'columnDefs': [ {
            'targets': [6], // column index (start from 0)
            'orderable': false, // set orderable false for selected columns
        }]
        });
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.jawaban1').DataTable({
        'info': false,
        'columnDefs': [ {
            'targets': [5], // column index (start from 0)
            'orderable': false, // set orderable false for selected columns
        }]
        });
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.jawaban2').DataTable({
        'info': false,
        'columnDefs': [ {
            'targets': [11], // column index (start from 0)
            'orderable': false, // set orderable false for selected columns
        }]
        });
      });
    </script>
  </body>
</html>