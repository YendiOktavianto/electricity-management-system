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
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/template/assets/css/font-google.css" />
  <!-- Nucleo Icons -->
  <link href="<?php echo base_url(); ?>assets/template/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/template/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="<?php echo base_url(); ?>assets/fontawesome/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?php echo base_url(); ?>assets/template/assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatables/css/buttons.bootstrap5.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatables/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatables/css/buttons.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatables/css/jquery.dataTables.min.css">

  <style type="text/css">
  .pagination > li > a, .pagination > li > span{background-color:white}
  .pagination > li.active > a, .pagination > li.active > span{background-color:white}
  .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
  background: none;
  border-radius: 4px;
  border: 1px solid #828282;
  }
  .dataTables_wrapper .dt-buttons {
  left: 10px;
  float:right;
  }

  .hide-layout {
    display: none;
  }
  </style>

</head>

<body class="g-sidenav-show  bg-gray-200">
  <?php
    if ($this->session->userdata('username') == "OPM WISE OFFICE") {
      $hideLayoutClass = 'hide-layout';
    } else {
      $hideLayoutClass = '';
  } ?>

  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#" style="text-align: center;">
        <img src="<?php echo base_url(); ?>assets/img/hmi-icon.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Electricity Management <br/><span style="margin-left: 40%;">System</span></span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="<?php echo base_url(); ?>home">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-home"></i>
            </div>
            <span class="nav-link-text ms-1"> Home</span>
          </a>
        </li>
        <li class="nav-item mt-3 <?php echo $hideLayoutClass; ?>">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Controlling</h6>
        </li>
        <li class="nav-item <?php echo $hideLayoutClass; ?>">
          <a class="nav-link text-white " href="<?php echo base_url(); ?>home/control">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-lightbulb"></i>
            </div>
            <span class="nav-link-text ms-1">Menu Control</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Monitoring</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url(); ?>home/voltage">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-chart-bar"></i>
            </div>
            <span class="nav-link-text ms-1">Voltage</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url(); ?>home/current">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-chart-bar"></i>
            </div>
            <span class="nav-link-text ms-1">Current</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url(); ?>home/ground">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-chart-bar"></i>
            </div>
            <span class="nav-link-text ms-1">Ground</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url(); ?>home/frequency">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-chart-bar"></i>
            </div>
            <span class="nav-link-text ms-1">Frequency</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url(); ?>home/temperature">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-chart-bar"></i>
            </div>
            <span class="nav-link-text ms-1">Temperature</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url(); ?>home/energy">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-chart-bar"></i>
            </div>
            <span class="nav-link-text ms-1">Energy</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url(); ?>home/cosphi">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-chart-bar"></i>
            </div>
            <span class="nav-link-text ms-1">Power Factor</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url(); ?>home/thdv">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-chart-bar"></i>
            </div>
            <span class="nav-link-text ms-1">THDv</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url(); ?>home/thdi">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-chart-bar"></i>
            </div>
            <span class="nav-link-text ms-1">THDi</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Report</h6>
        </li><li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url(); ?>home/alarm_logger">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-save"></i>
            </div>
            <span class="nav-link-text ms-1">Alarm Logger</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-success" href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-save"></i>
            </div>
            <span class="nav-link-text ms-1">Database Logger</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url(); ?>home/sd_card_logger">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-save"></i>
            </div>
            <span class="nav-link-text ms-1">SD Card Logger</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account</h6>
        </li>
        
        <?php 
        if($this->session->userdata('username') == "ADMIN ETS" or $this->session->userdata('username') == "ADMIN OPM WISE OFFICE") {
        ?> 
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url(); ?>home/setting">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-cog"></i>
            </div>
            <span class="nav-link-text ms-1">Setting</span>
          </a>
        </li>
        <?php
          }
        ?>
        
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url(); ?>logout">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-door-open"></i>
            </div>
            <span class="nav-link-text ms-1">Logout</span>
          </a>
        </li>
      </ul>
    </div>
    <!--
    <div class="sidenav-footer position-absolute w-100 bottom-2">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url(); ?>logout">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-door-open"></i>
            </div>
            <span class="nav-link-text ms-1">Logout</span>
          </a>
        </li>
      </ul>
    </div>
    -->
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Logger</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Database Logger</h6>
        </nav>
        
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center"></div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <div class="container-fluid py-4">
      <div class="row">
      <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="row">
            <div class="col-lg-12 col-md-12 mb-4">
              <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <h3>Logger Ground (Input) <button id="clear-gnd-input" class="btn btn-warning" style="float: right;"> <i class="fa fa-trash"></i> Clear</button></h3>
                    <p class="text-sm mb-0">
                      <i class="fa fa-file text-info" aria-hidden="true"></i>
                      <span class="font-weight-bold ms-1">Data Logger</span> 
                    </p>
                  </div>
                </div>
              </div>
                <div class="row">
                  <div class="col-lg-12 col-md-12">
                    <div class="card-body">
                      <table id="tabel-gnd-input" class="table table-striped table-bordered" style="width: 100%;">
                        <thead>
                          <tr>
                            <th>Date Time</th>
                            <th>Voltage</th>
                          </tr>
                        </thead>

                        <tbody>
                        </tbody>

                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row">

            <div class="col-lg-12 col-md-12 mb-4">
              <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <h3>Logger Ground (Output) <button id="clear-gnd-output" class="btn btn-warning" style="float: right;"> <i class="fa fa-trash"></i> Clear</button></h3>
                    <p class="text-sm mb-0">
                      <i class="fa fa-file text-info" aria-hidden="true"></i>
                      <span class="font-weight-bold ms-1">Data Logger</span> 
                    </p>
                  </div>
                </div>
              </div>
                <div class="row">
                  <div class="col-lg-12 col-md-12">
                    <div class="card-body">
                      <table id="tabel-gnd-output" class="table table-striped table-bordered" style="width: 100%;">
                        <thead>
                          <tr>
                            <th>Date Time</th>
                            <th>Voltage</th>
                          </tr>
                        </thead>

                        <tbody>
                        </tbody>

                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
        </div>
      </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="row">
            <div class="col-lg-12 col-md-12 mb-4">
              <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <h3>Logger Power Meter (Input) <button id="clear-pm-input" class="btn btn-warning" style="float: right;"> <i class="fa fa-trash"></i> Clear</button></h3>
                    <p class="text-sm mb-0">
                      <i class="fa fa-file text-info" aria-hidden="true"></i>
                      <span class="font-weight-bold ms-1">Data Logger</span> 
                    </p>
                  </div>
                </div>
              </div>
                <div class="row">
                  <div class="col-lg-12 col-md-12">
                    <div class="card-body">
                      <table id="tabel-powermeter-input" class="table table-striped table-bordered" style="width: 100%;">
                        <thead>
                          <tr>
                            <th>Date Time</th>
                            <th>Current R</th>
                            <th>Current S</th>
                            <th>Current T</th>
                            <th>Voltage R-S</th>
                            <th>Voltage S-T</th>
                            <th>Voltage R-T</th>
                            <th>Voltage R-N</th>
                            <th>Voltage S-N</th>
                            <th>Voltage T-N</th>
                            <th>Cosphi</th>
                            <th>Frequency</th>
                            <th>THDi R</th>
                            <th>THDi S</th>
                            <th>THDi T</th>
                            <th>THDv R-S</th>
                            <th>THDv S-T</th>
                            <th>THDv R-T</th>
                            <th>THDv R-N</th>
                            <th>THDv S-N</th>
                            <th>THDv T-N</th>
                            <th>KWH R</th>
                            <th>KWH S</th>
                            <th>KWH T</th>
                            <th>KWH Total</th>
                            <th>KVARH R</th>
                            <th>KVARH S</th>
                            <th>KVARH T</th>
                            <th>KVARH Total</th>
                          </tr>
                        </thead>

                        <tbody>
                        </tbody>

                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 mb-4">
              <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <h3>Logger Power Meter (Output) <button id="clear-pm-output" class="btn btn-warning" style="float: right;"> <i class="fa fa-trash"></i> Clear</button></h3>
                    <p class="text-sm mb-0">
                      <i class="fa fa-file text-info" aria-hidden="true"></i>
                      <span class="font-weight-bold ms-1">Data Logger</span> 
                    </p>
                  </div>
                </div>
              </div>
                <div class="row">
                  <div class="col-lg-12 col-md-12">
                    <div class="card-body">
                      <table id="tabel-powermeter-output" class="table table-striped table-bordered" style="width: 100%;">
                        <thead>
                          <tr>
                            <th>Date Time</th>
                            <th>Current R</th>
                            <th>Current S</th>
                            <th>Current T</th>
                            <th>Voltage R-S</th>
                            <th>Voltage S-T</th>
                            <th>Voltage R-T</th>
                            <th>Voltage R-N</th>
                            <th>Voltage S-N</th>
                            <th>Voltage T-N</th>
                            <th>Cosphi</th>
                            <th>Frequency</th>
                            <th>THDi R</th>
                            <th>THDi S</th>
                            <th>THDi T</th>
                            <th>THDv R-S</th>
                            <th>THDv S-T</th>
                            <th>THDv R-T</th>
                            <th>THDv R-N</th>
                            <th>THDv S-N</th>
                            <th>THDv T-N</th>
                            <th>KWH R</th>
                            <th>KWH S</th>
                            <th>KWH T</th>
                            <th>KWH Total</th>
                            <th>KVARH R</th>
                            <th>KVARH S</th>
                            <th>KVARH T</th>
                            <th>KVARH Total</th>
                          </tr>
                        </thead>

                        <tbody>
                        </tbody>

                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 mb-4">
              <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <h3>Logger Temperature <button id="clear-temperature" class="btn btn-warning" style="float: right;"> <i class="fa fa-trash"></i> Clear</button></h3>
                    <p class="text-sm mb-0">
                      <i class="fa fa-file text-info" aria-hidden="true"></i>
                      <span class="font-weight-bold ms-1">Data Logger</span> 
                    </p>
                  </div>
                </div>
              </div>
                <div class="row">
                  <div class="col-lg-12 col-md-12">
                    <div class="card-body">
                      <table id="tabel-suhu" class="table table-striped table-bordered" style="width: 100%;">
                        <thead>
                          <tr>
                            <th>Date Time</th>
                            <th>Temperature 1</th>
                            <th>Temperature 2</th>
                            <th>Temperature 3</th>
                          </tr>
                        </thead>

                        <tbody>
                        </tbody>

                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <footer class="footer py-4 mt-1">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-12 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start font-weight-bold">
                Maret 2023, Created By ©ETS DEV TECHNOLOGY
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>

    <!-- bootstrap5 dataTables js cdn -->
  <script src="<?php echo base_url(); ?>assets/jquery/jquery-3.5.1.js"></script>
  <script src="<?php echo base_url(); ?>assets/datatables/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/datatables/js/dataTables.bootstrap5.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/datatables/js/dataTables.buttons.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/datatables/js/buttons.bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/datatables/js/jszip.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/datatables/js/pdfmake.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/datatables/js/vfs_fonts.js"></script>
  <script src="<?php echo base_url(); ?>assets/datatables/js/buttons.html5.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/datatables/js/buttons.print.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/datatables/js/buttons.colVis.min.js"></script>

  <!--   Core JS Files   -->
  <script src="<?php echo base_url(); ?>assets/template/assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/assets/js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/assets/js/plugins/chartjs.min.js"></script>

  <script>
    $(document).ready(function() {
        var lastIdPmIn = localStorage.getItem('lastId_pm_in') || 0;
        var lastIdPmOut = localStorage.getItem('lastId_pm_out') || 0;
        var lastIdGndIn = localStorage.getItem('lastId_gnd_in') || 0;
        var lastIdGndOut = localStorage.getItem('lastId_gnd_out') || 0;
        var lastIdTemp = localStorage.getItem('lastId_temp') || 0;

        $('#tabel-powermeter-input').DataTable( {
            "ajax": {
              "url": "<?php echo base_url(); ?>logger/logger_pm_input",
              "type": "GET",
              "data": function (d) {
                d.last_id_pm_in = localStorage.getItem('lastid_pm_in');
              },
              "dataSrc": function(json) {
                  if(json.data.length > 0){
                      lastIdPmIn = json.data[json.data.length-1].id;
                      localStorage.setItem('lastId_pm_in', lastIdPmIn);
                  }
                  return json.data;
              }
            },
            "bPaginate": true,
            "processing": true,
            "columns": [
                { "data": "date_time" },
                { "data": "i_r" },
                { "data": "i_s" },
                { "data": "i_t" },
                { "data": "v_rs" },
                { "data": "v_st" },
                { "data": "v_rt" },
                { "data": "v_rn" },
                { "data": "v_sn" },
                { "data": "v_tn" },
                { "data": "cosphi" },
                { "data": "freq" },
                { "data": "thdi_r" },
                { "data": "thdi_s" },
                { "data": "thdi_t" },
                { "data": "thdv_rs" },
                { "data": "thdv_st" },
                { "data": "thdv_rt" },
                { "data": "thdv_rn" },
                { "data": "thdv_sn" },
                { "data": "thdv_tn" },
                { "data": "kwh_r" },
                { "data": "kwh_s" },
                { "data": "kwh_t" },
                { "data": "kwh_total" },
                { "data": "kvarh_r" },
                { "data": "kvarh_s" },
                { "data": "kvarh_t" },
                { "data": "kvarh_total" }
            ],
            "pageLength": 10,
            "serverSide": true,
            "bLengthChange": true,
            "searching": true,
            "scrollCollapse": true,
            "scrollX": true,
            "dom": "lBfrtip",
            "buttons": [
                    {
                      extend: "csv",
                      text: "<i class='fa fa-download'></i> Excel",
                      className: "btn btn-info",
                      title: 'Data Logger Power Meter Input'
                    },
                    {
                      extend: "print",
                      text: "<i class='fa fa-print'></i> PDF",
                      className: "btn btn-primary",
                      title: 'Data Logger Power Meter Input'
                    },
                  ],
            "responsive": true,
            "order": [[ 0, "desc" ]],
            "initComplete": function(settings, json) {
                console.log('Table initialized', json);
            },
            "drawCallback": function(settings) {
                console.log('Table drawn', settings.json);
            }
        });

        $('#tabel-powermeter-output').DataTable( {
            "ajax": {
              "url": "<?php echo base_url(); ?>logger/logger_pm_output",
              "type": "GET",
              "data": function (d) {
                d.last_id_pm_out = localStorage.getItem('lastid_pm_out');
              },
              "dataSrc": function(json) {
                  if(json.data.length > 0){
                      lastIdPmOut = json.data[json.data.length-1].id;
                      localStorage.setItem('lastId_pm_out', lastIdPmOut);
                  }
                  return json.data;
              }
            },
            "bPaginate": true,
            "processing": true,
            "columns": [
                { "data": "date_time" },
                { "data": "i_r" },
                { "data": "i_s" },
                { "data": "i_t" },
                { "data": "v_rs" },
                { "data": "v_st" },
                { "data": "v_rt" },
                { "data": "v_rn" },
                { "data": "v_sn" },
                { "data": "v_tn" },
                { "data": "cosphi" },
                { "data": "freq" },
                { "data": "thdi_r" },
                { "data": "thdi_s" },
                { "data": "thdi_t" },
                { "data": "thdv_rs" },
                { "data": "thdv_st" },
                { "data": "thdv_rt" },
                { "data": "thdv_rn" },
                { "data": "thdv_sn" },
                { "data": "thdv_tn" },
                { "data": "kwh_r" },
                { "data": "kwh_s" },
                { "data": "kwh_t" },
                { "data": "kwh_total" },
                { "data": "kvarh_r" },
                { "data": "kvarh_s" },
                { "data": "kvarh_t" },
                { "data": "kvarh_total" }
            ],
            "pageLength": 10,
            "serverSide": true,
            "bLengthChange": true,
            "searching": true,
            "scrollCollapse": true,
            "scrollX": true,
            "dom": "lBfrtip",
            "buttons": [
                    {
                      extend: "csv",
                      text: "<i class='fa fa-download'></i> Excel",
                      className: "btn btn-info",
                      title: 'Data Logger Power Meter Output'
                    },
                    {
                      extend: "print",
                      text: "<i class='fa fa-print'></i> PDF",
                      className: "btn btn-primary",
                      title: 'Data Logger Power Meter Output'
                    },
                  ],
            "responsive": true,
            "order": [[ 0, "desc" ]],
            "initComplete": function(settings, json) {
                console.log('Table initialized', json);
            },
            "drawCallback": function(settings) {
                console.log('Table drawn', settings.json);
            }
        });

        $('#tabel-gnd-input').DataTable( {
            "ajax": {
              "url": "<?php echo base_url(); ?>logger/logger_gnd_input",
              "type": "GET",
              "data": function (d) {
                d.last_id_gnd_in = localStorage.getItem('lastid_gnd_in');
              },
              "dataSrc": function(json) {
                  if(json.data.length > 0){
                      lastIdGndIn = json.data[json.data.length-1].id;
                      localStorage.setItem('lastId_gnd_in', lastIdGndIn);
                  }
                  return json.data;
              }
            },
            "bPaginate": true,
            "processing": true,
            "columns": [
                { "data": "date_time" },
                { "data": "voltage" }
            ],
            "pageLength": 10,
            "serverSide": true,
            "bLengthChange": true,
            "searching": true,
            "scrollCollapse": true,
            "scrollX": true,
            "dom": "lBfrtip",
            "buttons": [
                    {
                      extend: "csv",
                      text: "<i class='fa fa-download'></i> Excel",
                      className: "btn btn-info",
                      title: 'Data Logger Power Ground Input'
                    },
                    {
                      extend: "print",
                      text: "<i class='fa fa-print'></i> PDF",
                      className: "btn btn-primary",
                      title: 'Data Logger Power Ground Input'
                    },
                  ],
            "responsive": true,
            "order": [[ 0, "desc" ]],
            "initComplete": function(settings, json) {
                console.log('Table initialized', json);
            },
            "drawCallback": function(settings) {
                console.log('Table drawn', settings.json);
            }
        });

        $('#tabel-gnd-output').DataTable( {
            "ajax": {
              "url": "<?php echo base_url(); ?>logger/logger_gnd_output",
              "type": "GET",
              "data": function (d) {
                d.last_id_gnd_out = localStorage.getItem('lastid_gnd_out');
              },
              "dataSrc": function(json) {
                  if(json.data.length > 0){
                      lastIdGndOut = json.data[json.data.length-1].id;
                      localStorage.setItem('lastId_gnd_out', lastIdGndOut);
                  }
                  return json.data;
              }
            },
            "bPaginate": true,
            "processing": true,
            "columns": [
                { "data": "date_time" },
                { "data": "voltage" }
            ],
            "pageLength": 10,
            "serverSide": true,
            "bLengthChange": true,
            "searching": true,
            "scrollCollapse": true,
            "scrollX": true,
            "dom": "lBfrtip",
            "buttons": [
                    {
                      extend: "csv",
                      text: "<i class='fa fa-download'></i> Excel",
                      className: "btn btn-info",
                      title: 'Data Logger Power Ground Output'
                    },
                    {
                      extend: "print",
                      text: "<i class='fa fa-print'></i> PDF",
                      className: "btn btn-primary",
                      title: 'Data Logger Power Ground Output'
                    },
                  ],
            "responsive": true,
            "order": [[ 0, "desc" ]],
            "initComplete": function(settings, json) {
                console.log('Table initialized', json);
            },
            "drawCallback": function(settings) {
                console.log('Table drawn', settings.json);
            }
        });

        $('#tabel-suhu').DataTable( {
            "ajax": {
              "url": "<?php echo base_url(); ?>logger/logger_suhu",
              "type": "GET",
              "data": function (d) {
                d.last_id_temp = localStorage.getItem('lastid_temp');
              },
              "dataSrc": function(json) {
                  if(json.data.length > 0){
                      lastIdTemp = json.data[json.data.length-1].id;
                      localStorage.setItem('lastId_temp', lastIdTemp);
                  }
                  return json.data;
              }
            },
            "bPaginate": true,
            "processing": true,
            "columns": [
                { "data": "date_time" },
                { "data": "temp1" },
                { "data": "temp2" },
                { "data": "temp3" }
            ],
            "pageLength": 10,
            "serverSide": true,
            "bLengthChange": true,
            "searching": true,
            "scrollCollapse": true,
            "scrollX": true,
            "dom": "lBfrtip",
            "buttons": [
                    {
                      extend: "csv",
                      text: "<i class='fa fa-download'></i> Excel",
                      className: "btn btn-info",
                      title: 'Data Logger Temperature'
                    },
                    {
                      extend: "print",
                      text: "<i class='fa fa-print'></i> PDF",
                      className: "btn btn-primary",
                      title: 'Data Logger Temperature'
                    },
                  ],
            "responsive": true,
            "order": [[ 0, "desc" ]],
            "initComplete": function(settings, json) {
                console.log('Table initialized', json);
            },
            "drawCallback": function(settings) {
                console.log('Table drawn', settings.json);
            }
        });
      });
  </script>
  
  <!-- <script type="text/javascript">
    $(document).ready(function() {
      $('#clear-gnd-input').on('click',function(){
        window.location.href="<?php echo base_url(); ?>cleardata/table_gnd_input";
      });
      $('#clear-gnd-output').on('click',function(){
        window.location.href="<?php echo base_url(); ?>cleardata/table_gnd_output";
      });
      $('#clear-pm-input').on('click',function(){
        window.location.href="<?php echo base_url(); ?>cleardata/table_pm_input";
      });
      $('#clear-pm-output').on('click',function(){
        window.location.href="<?php echo base_url(); ?>cleardata/table_pm_output";
      });
      $('#clear-temperature').on('click',function(){
        window.location.href="<?php echo base_url(); ?>cleardata/table_temperature";
      });
    });
  </script> -->

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url(); ?>assets/template/assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>