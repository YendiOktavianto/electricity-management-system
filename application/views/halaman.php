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

<body class="">
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
            <a class="nav-link me-2" href="<?php echo base_url();?>profile">
              <i class="fa fa-user opacity-6  me-1"></i>
              Profile
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link me-2" href="<?php echo base_url();?>login">
              <i class="fas fa-key opacity-6  me-1"></i>
              Sign In
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
  <main class="main-content  mt-0">
    <section class="min-vh-95">
      <div class="page-header align-items-start min-vh-95 pt-10 pb-10 m-3 border-radius-lg" style="background-image: url('<?php echo base_url();?>assets/img/bg1.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 text-center mx-auto">
              <h1 style="font-size: 120px; text-decoration: underline;" class="text-white mb-2 mt-8">EMS</h1>
              <p class="text-lead text-white">ELECTRICITY MANAGEMENT SYSTEM</p>
              <p class="text-lead text-white">Server Monitoring Power Meter Advanced</p>
            </div>
          </div>
        </div>
      </div>
      
    </section>
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