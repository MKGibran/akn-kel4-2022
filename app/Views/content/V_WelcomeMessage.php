<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('') ?>/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url('') ?>/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?= base_url('') ?>/assets/css/style.css">
    <link rel="shortcut icon" href="<?= base_url('') ?>/assets/images/favicon.ico" />
    <style>
      .content-wrapper{
        background-image: url('<?= base_url('\assets\images\background.png') ?>');
        background-repeat: no-repeat, repeat;
        background-color: #44AFFD;
        height: 100vh;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth has-bg-img">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <h4>AKN Kelompok 4 - AP2</h4>
                <div class="mt-3">
                    <a class="btn btn-block btn-gradient-info btn-lg font-weight-medium auth-form-btn" 
                    href="<?= base_url('') ?>/soal1">MULAI</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?= base_url('') ?>/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?= base_url('') ?>/assets/js/off-canvas.js"></script>
    <script src="<?= base_url('') ?>/assets/js/hoverable-collapse.js"></script>
    <script src="<?= base_url('') ?>/assets/js/misc.js"></script>
  </body>
</html>