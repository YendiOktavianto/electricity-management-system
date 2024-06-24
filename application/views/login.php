<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/hmi-icon.png">
  <title>
    EMS
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="<?php echo base_url();?>assets/template/assets2/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/template/assets2/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?php echo base_url();?>assets/template/assets2/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?php echo base_url();?>assets/template/assets2/css/soft-ui-dashboard.css?v=1.0.6" rel="stylesheet" />
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
    <div class="container">
      <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="<?php echo base_url();?>assets/template/pages/2dashboard.html">
        ELECTRICITY MANAGEMENT SYSTEM
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav mx-auto ms-xl-auto me-xl-7">
          
          <li class="nav-item">
            <a class="nav-link me-2" href="<?php echo base_url();?>">
              <i class="fa fa-home opacity-6  me-1"></i>
              Home
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link me-2" href="<?php echo base_url();?>profile">
              <i class="fas fa-user opacity-6  me-1"></i>
              Profile
            </a>
          </li>
        </ul>
        <ul class="navbar-nav d-lg-block d-none">
          <li class="nav-item">
            <a href="#" class="btn btn-sm btn-round mb-0 me-1 bg-gradient-light">Online Server</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <main class="main-content mt-0">
    <section class="min-vh-80 mb-4">
      <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('<?php echo base_url();?>assets/img/bg1.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-12 text-center mx-auto">
              <h1 class="text-white mb-2 mt-3">Selamat Datang Di Server EMS</h1>
              <p class="text-lead text-white">Silahkan Login menggunakan username dan password yang sudah dibuat.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mt-n12">
          <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
            <div class="card z-index-0" style="border: 3px; border-style: solid; border-color: #02a8f5;">
              <div class="card-header text-center pt-4">
                <h5>Login System</h5>
              </div>
              <div class="row px-xl-5 px-sm-4 px-3">
                <div class="col-lg-12 text-center mx-auto">
                  <img style="width: 400px; height: 250px; max-width: 100%; max-height: 100%;" src="<?php echo base_url();?>assets/img/bg3.png" alt="image">
                </div>
              </div>
              <div class="card-body">
                <form action="<?php echo base_url(); ?>verifikasi_login" method="post" role="form text-left">
                  <div class="mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="email-addon">
                  </div>
                  <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign in</button>
                  </div>
                  <p class="text-md mt-3 mb-0">Silahkan Login. <?php echo $this->session->flashdata('error'); ?></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-12 mx-auto text-center mt-0">
            <p class="mb-0 text-secondary">
              Created by ©ETS DEV TECHNOLOGY
            </p>
            <p class="mb-0 text-secondary">
              Maret 2023
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  </main>
  <!--   Core JS Files   -->
  <script src="<?php echo base_url();?>assets/template/assets2/js/core/popper.min.js"></script>
  <script src="<?php echo base_url();?>assets/template/assets2/js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/template/assets2/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?php echo base_url();?>assets/template/assets2/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url();?>assets/template/assets2/js/soft-ui-dashboard.min.js?v=1.0.6"></script>
</body>

</html>