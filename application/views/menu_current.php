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
  <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">

  <style>  
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
          <a class="nav-link text-white active bg-success" href="#">
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
          <a class="nav-link text-white " href="<?php echo base_url(); ?>home/database_logger">
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Current</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Monitoring Current</h6>
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
                  <div class="col-8">
                    <h3>Current R (Input) </h3>
                    <p class="text-sm mb-0">
                      <i class="fa fa-chart-line text-info" aria-hidden="true"></i>
                      <span class="font-weight-bold ms-1">Monitoring Realtime</span> 
                    </p>
                  </div>
                  <div class="col-4 col-md-auto d-flex flex-column justify-content-center align-items-center">
                    <div class="connection-indicator pm-in-indicator mb-2" id="connectionStatus"></div>
                    <div class="device-status pm-in-status" id="deviceStatusText">DEVICE OFFLINE</div>
                  </div>
                </div>
              </div>
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <div class="card-body">
                      <div id="i_rs1b" style="height: 250px; min-width: 225px; max-width: 290px; margin: 0 auto;"></div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="card-body">
                      <div id="i_rs1a" style="height: 250px;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-12 col-md-12 mb-4">
              <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-8">
                    <h3>Current S (Input) </h3>
                    <p class="text-sm mb-0">
                      <i class="fa fa-chart-line text-info" aria-hidden="true"></i>
                      <span class="font-weight-bold ms-1">Monitoring Realtime</span> 
                    </p>
                  </div>
                  <div class="col-4 col-md-auto d-flex flex-column justify-content-center align-items-center">
                    <div class="connection-indicator pm-in-indicator mb-2" id="connectionStatus"></div>
                    <div class="device-status pm-in-status" id="deviceStatusText">DEVICE OFFLINE</div>
                  </div>
                </div>
              </div>
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <div class="card-body">
                      <div id="i_st1b" style="height: 250px; min-width: 225px; max-width: 290px; margin: 0 auto;"></div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="card-body">
                      <div id="i_st1a" style="height: 250px;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-12 col-md-12 mb-4">
              <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-8">
                    <h3>Current T (Input) </h3>
                    <p class="text-sm mb-0">
                      <i class="fa fa-chart-line text-info" aria-hidden="true"></i>
                      <span class="font-weight-bold ms-1">Monitoring Realtime</span> 
                    </p>
                  </div>
                  <div class="col-4 col-md-auto d-flex flex-column justify-content-center align-items-center">
                    <div class="connection-indicator pm-in-indicator mb-2" id="connectionStatus"></div>
                    <div class="device-status pm-in-status" id="deviceStatusText">DEVICE OFFLINE</div>
                  </div>
                </div>
              </div>
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <div class="card-body">
                      <div id="i_rt1b" style="height: 250px; min-width: 225px; max-width: 290px; margin: 0 auto;"></div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="card-body">
                      <div id="i_rt1a" style="height: 250px;"></div>
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
                  <div class="col-8">
                    <h3>Current R (Output) </h3>
                    <p class="text-sm mb-0">
                      <i class="fa fa-chart-line text-info" aria-hidden="true"></i>
                      <span class="font-weight-bold ms-1">Monitoring Realtime</span> 
                    </p>
                  </div>
                  <div class="col-4 col-md-auto d-flex flex-column justify-content-center align-items-center">
                    <div class="connection-indicator pm-out-indicator mb-2" id="connectionStatus"></div>
                    <div class="device-status pm-out-status" id="deviceStatusText">DEVICE OFFLINE</div>
                  </div>
                </div>
              </div>
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <div class="card-body">
                      <div id="i_rs2b" style="height: 250px; min-width: 225px; max-width: 290px; margin: 0 auto;"></div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="card-body">
                      <div id="i_rs2a" style="height: 250px;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-12 col-md-12 mb-4">
              <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-8">
                    <h3>Current S (Output) </h3>
                    <p class="text-sm mb-0">
                      <i class="fa fa-chart-line text-info" aria-hidden="true"></i>
                      <span class="font-weight-bold ms-1">Monitoring Realtime</span> 
                    </p>
                  </div>
                  <div class="col-4 col-md-auto d-flex flex-column justify-content-center align-items-center">
                    <div class="connection-indicator pm-out-indicator mb-2" id="connectionStatus"></div>
                    <div class="device-status pm-out-status" id="deviceStatusText">DEVICE OFFLINE</div>
                  </div>
                </div>
              </div>
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <div class="card-body">
                      <div id="i_st2b" style="height: 250px; min-width: 225px; max-width: 290px; margin: 0 auto;"></div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="card-body">
                      <div id="i_st2a" style="height: 250px;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-12 col-md-12 mb-4">
              <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-8">
                    <h3>Current T (Output) </h3>
                    <p class="text-sm mb-0">
                      <i class="fa fa-chart-line text-info" aria-hidden="true"></i>
                      <span class="font-weight-bold ms-1">Monitoring Realtime</span> 
                    </p>
                  </div>
                  <div class="col-4 col-md-auto d-flex flex-column justify-content-center align-items-center">
                    <div class="connection-indicator pm-out-indicator mb-2" id="connectionStatus"></div>
                    <div class="device-status pm-out-status" id="deviceStatusText">DEVICE OFFLINE</div>
                  </div>
                </div>
              </div>
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <div class="card-body">
                      <div id="i_rt2b" style="height: 250px; min-width: 225px; max-width: 290px; margin: 0 auto;"></div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="card-body">
                      <div id="i_rt2a" style="height: 250px;"></div>
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

  <script src="<?php echo base_url(); ?>assets/highcharts/highcharts.js"></script>
  <script src="<?php echo base_url(); ?>assets/highcharts/highcharts-more.js"></script>
  <script src="<?php echo base_url(); ?>assets/highcharts/solid-gauge.js"></script>
  <script src="<?php echo base_url(); ?>assets/highcharts/exporting.js"></script>
  <script src="<?php echo base_url(); ?>assets/highcharts/export-data.js"></script>
  <script src="<?php echo base_url(); ?>assets/highcharts/accessibility.js"></script>
  
  <script type="text/javascript">
    var irs1 = 0;
    var ist1 = 0;
    var irt1 = 0;
    var irs2 = 0;
    var ist2 = 0;
    var irt2 = 0;

    const timezone = new Date().getTimezoneOffset();
    Highcharts.setOptions({
        global: {
        timezoneOffset: 17 * 60
    }
    });
    Highcharts.chart('i_rs1a', {
      chart: {
        type: 'spline',
        animation: Highcharts.svg, // don't animate in old IE
        marginRight: 10,
        events: {
          load: function () {
            var series = this.series[0];
            setInterval(function () {
              var x = (new Date()).getTime();
              series.addPoint([x, irs1], true, true);
            },2000);
          }
        }
      },
        
      credits: {
        enabled: false
      },

      time: {
        useUTC: false
      },

      title: {
        text: 'Current R'
      },

      xAxis: {
        type: 'datetime',
        tickPixelInterval: 150
      },

      yAxis: {
        title: {
          text: 'Value'
        },
        plotLines: [{
          value: 0,
          width: 1,
          color: '#808080'
        }]
      },

      legend: {
        enabled: true
      },

      series: [{
        name: 'Current',
        data: (function () {
          // generate an array of random data
          var data = [],
            time = (new Date()).getTime(),
            i;

          for (i = -19; i <= 0; i += 1) {
            data.push({
              x: time + i * 1000,
              y: 0
            });
          }
          return data;
        }()),
        marker: {
          enabled: false
        },
        tooltip: {
            valueSuffix: ' Ampere'
        }
      }]
    });
    Highcharts.chart('i_rs1b', {
        chart: {
            type: 'gauge',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false,
            height: '95%'
        },

        credits: {
          enabled: false
        },

        title: {
            text: 'Current R'
        },

        pane: {
            startAngle: -90,
            endAngle: 89.9,
            background: null,
            center: ['50%', '75%'],
            size: '105%'
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 100,
            tickInterval: 20,
            tickPixelInterval: 72,
            tickPosition: 'inside',
            tickColor: Highcharts.defaultOptions.chart.backgroundColor || '#FFFFFF',
            tickLength: 20,
            tickWidth: 2,
            minorTickInterval: null,
            labels: {
                distance: 20,
                style: {
                    fontSize: '18px'
                }
            },
            plotBands: [{
                from: 0,
                to: 10,
                color: '#55BF3B', // green
                thickness: 20
            }, {
                from: 10,
                to: 50,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 50,
                to: 100,
                color: '#DF5353', // red
                thickness: 20
            }]
        },

        series: [{
            name: 'Current',
            data: [0],
            tooltip: {
                valueSuffix: ' Ampere'
            },
            dataLabels: {
                format: '{y:.2f} A',
                borderWidth: 0,
                color: (
                    Highcharts.defaultOptions.title &&
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || '#333333',
                style: {
                    fontSize: '16px'
                }
            },
            dial: {
                radius: '80%',
                backgroundColor: 'gray',
                baseWidth: 12,
                baseLength: '0%',
                rearLength: '0%'
            },
            pivot: {
                backgroundColor: 'gray',
                radius: 6
            }
        }]
    });

    Highcharts.chart('i_st1a', {
      chart: {
        type: 'spline',
        animation: Highcharts.svg, // don't animate in old IE
        marginRight: 10,
        events: {
          load: function () {
            var series = this.series[0];
            setInterval(function () {
              var x = (new Date()).getTime();
              series.addPoint([x, ist1], true, true);
            },2000);
          }
        }
      },
        
      credits: {
        enabled: false
      },

      time: {
        useUTC: false
      },

      title: {
        text: 'Current S'
      },

      xAxis: {
        type: 'datetime',
        tickPixelInterval: 150
      },

      yAxis: {
        title: {
          text: 'Value'
        },
        plotLines: [{
          value: 0,
          width: 1,
          color: '#808080'
        }]
      },

      legend: {
        enabled: true
      },

      series: [{
        name: 'Current',
        data: (function () {
          // generate an array of random data
          var data = [],
            time = (new Date()).getTime(),
            i;

          for (i = -19; i <= 0; i += 1) {
            data.push({
              x: time + i * 1000,
              y: 0
            });
          }
          return data;
        }()),
        marker: {
          enabled: false
        },
        tooltip: {
            valueSuffix: ' Ampere'
        }
      }]
    });
    Highcharts.chart('i_st1b', {
        chart: {
            type: 'gauge',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false,
            height: '95%'
        },

        credits: {
          enabled: false
        },

        title: {
            text: 'Current S'
        },

        pane: {
            startAngle: -90,
            endAngle: 89.9,
            background: null,
            center: ['50%', '75%'],
            size: '105%'
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 100,
            tickInterval: 20,
            tickPixelInterval: 72,
            tickPosition: 'inside',
            tickColor: Highcharts.defaultOptions.chart.backgroundColor || '#FFFFFF',
            tickLength: 20,
            tickWidth: 2,
            minorTickInterval: null,
            labels: {
                distance: 20,
                style: {
                    fontSize: '18px'
                }
            },
            plotBands: [{
                from: 0,
                to: 10,
                color: '#55BF3B', // green
                thickness: 20
            }, {
                from: 10,
                to: 50,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 50,
                to: 100,
                color: '#DF5353', // red
                thickness: 20
            }]
        },

        series: [{
            name: 'Current',
            data: [0],
            tooltip: {
                valueSuffix: ' Ampere'
            },
            dataLabels: {
                format: '{y:.2f} A',
                borderWidth: 0,
                color: (
                    Highcharts.defaultOptions.title &&
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || '#333333',
                style: {
                    fontSize: '16px'
                }
            },
            dial: {
                radius: '80%',
                backgroundColor: 'gray',
                baseWidth: 12,
                baseLength: '0%',
                rearLength: '0%'
            },
            pivot: {
                backgroundColor: 'gray',
                radius: 6
            }
        }]
    });

    Highcharts.chart('i_rt1a', {
      chart: {
        type: 'spline',
        animation: Highcharts.svg, // don't animate in old IE
        marginRight: 10,
        events: {
          load: function () {
            var series = this.series[0];
            setInterval(function () {
              var x = (new Date()).getTime();
              series.addPoint([x, irt1], true, true);
            },2000);
          }
        }
      },
        
      credits: {
        enabled: false
      },

      time: {
        useUTC: false
      },

      title: {
        text: 'Current T'
      },

      xAxis: {
        type: 'datetime',
        tickPixelInterval: 150
      },

      yAxis: {
        title: {
          text: 'Value'
        },
        plotLines: [{
          value: 0,
          width: 1,
          color: '#808080'
        }]
      },

      legend: {
        enabled: true
      },

      series: [{
        name: 'Current',
        data: (function () {
          // generate an array of random data
          var data = [],
            time = (new Date()).getTime(),
            i;

          for (i = -19; i <= 0; i += 1) {
            data.push({
              x: time + i * 1000,
              y: 0
            });
          }
          return data;
        }()),
        marker: {
          enabled: false
        },
        tooltip: {
            valueSuffix: ' Ampere'
        }
      }]
    });
    Highcharts.chart('i_rt1b', {
        chart: {
            type: 'gauge',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false,
            height: '95%'
        },

        credits: {
          enabled: false
        },

        title: {
            text: 'Current T'
        },

        pane: {
            startAngle: -90,
            endAngle: 89.9,
            background: null,
            center: ['50%', '75%'],
            size: '105%'
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 100,
            tickInterval: 20,
            tickPixelInterval: 72,
            tickPosition: 'inside',
            tickColor: Highcharts.defaultOptions.chart.backgroundColor || '#FFFFFF',
            tickLength: 20,
            tickWidth: 2,
            minorTickInterval: null,
            labels: {
                distance: 20,
                style: {
                    fontSize: '18px'
                }
            },
            plotBands: [{
                from: 0,
                to: 10,
                color: '#55BF3B', // green
                thickness: 20
            }, {
                from: 10,
                to: 50,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 50,
                to: 100,
                color: '#DF5353', // red
                thickness: 20
            }]
        },

        series: [{
            name: 'Current',
            data: [0],
            tooltip: {
                valueSuffix: ' Ampere'
            },
            dataLabels: {
                format: '{y:.2f} A',
                borderWidth: 0,
                color: (
                    Highcharts.defaultOptions.title &&
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || '#333333',
                style: {
                    fontSize: '16px'
                }
            },
            dial: {
                radius: '80%',
                backgroundColor: 'gray',
                baseWidth: 12,
                baseLength: '0%',
                rearLength: '0%'
            },
            pivot: {
                backgroundColor: 'gray',
                radius: 6
            }
        }]
    });



    Highcharts.chart('i_rs2a', {
      chart: {
        type: 'spline',
        animation: Highcharts.svg, // don't animate in old IE
        marginRight: 10,
        events: {
          load: function () {
            var series = this.series[0];
            setInterval(function () {
              var x = (new Date()).getTime();
              series.addPoint([x, irs2], true, true);
            },2000);
          }
        }
      },
        
      credits: {
        enabled: false
      },

      time: {
        useUTC: false
      },

      title: {
        text: 'Current R'
      },

      xAxis: {
        type: 'datetime',
        tickPixelInterval: 150
      },

      yAxis: {
        title: {
          text: 'Value'
        },
        plotLines: [{
          value: 0,
          width: 1,
          color: '#808080'
        }]
      },

      legend: {
        enabled: true
      },

      series: [{
        name: 'Current',
        data: (function () {
          // generate an array of random data
          var data = [],
            time = (new Date()).getTime(),
            i;

          for (i = -19; i <= 0; i += 1) {
            data.push({
              x: time + i * 1000,
              y: 0
            });
          }
          return data;
        }()),
        marker: {
          enabled: false
        },
        tooltip: {
            valueSuffix: ' Ampere'
        }
      }]
    });
    Highcharts.chart('i_rs2b', {
        chart: {
            type: 'gauge',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false,
            height: '95%'
        },

        credits: {
          enabled: false
        },

        title: {
            text: 'Current R'
        },

        pane: {
            startAngle: -90,
            endAngle: 89.9,
            background: null,
            center: ['50%', '75%'],
            size: '105%'
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 100,
            tickInterval: 20,
            tickPixelInterval: 72,
            tickPosition: 'inside',
            tickColor: Highcharts.defaultOptions.chart.backgroundColor || '#FFFFFF',
            tickLength: 20,
            tickWidth: 2,
            minorTickInterval: null,
            labels: {
                distance: 20,
                style: {
                    fontSize: '18px'
                }
            },
            plotBands: [{
                from: 0,
                to: 10,
                color: '#55BF3B', // green
                thickness: 20
            }, {
                from: 10,
                to: 50,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 50,
                to: 100,
                color: '#DF5353', // red
                thickness: 20
            }]
        },

        series: [{
            name: 'Current',
            data: [0],
            tooltip: {
                valueSuffix: ' Ampere'
            },
            dataLabels: {
                format: '{y:.2f} A',
                borderWidth: 0,
                color: (
                    Highcharts.defaultOptions.title &&
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || '#333333',
                style: {
                    fontSize: '16px'
                }
            },
            dial: {
                radius: '80%',
                backgroundColor: 'gray',
                baseWidth: 12,
                baseLength: '0%',
                rearLength: '0%'
            },
            pivot: {
                backgroundColor: 'gray',
                radius: 6
            }
        }]
    });

    Highcharts.chart('i_st2a', {
      chart: {
        type: 'spline',
        animation: Highcharts.svg, // don't animate in old IE
        marginRight: 10,
        events: {
          load: function () {
            var series = this.series[0];
            setInterval(function () {
              var x = (new Date()).getTime();
              series.addPoint([x, ist2], true, true);
            },2000);
          }
        }
      },
        
      credits: {
        enabled: false
      },

      time: {
        useUTC: false
      },

      title: {
        text: 'Current S'
      },

      xAxis: {
        type: 'datetime',
        tickPixelInterval: 150
      },

      yAxis: {
        title: {
          text: 'Value'
        },
        plotLines: [{
          value: 0,
          width: 1,
          color: '#808080'
        }]
      },

      legend: {
        enabled: true
      },

      series: [{
        name: 'Current',
        data: (function () {
          // generate an array of random data
          var data = [],
            time = (new Date()).getTime(),
            i;

          for (i = -19; i <= 0; i += 1) {
            data.push({
              x: time + i * 1000,
              y: 0
            });
          }
          return data;
        }()),
        marker: {
          enabled: false
        },
        tooltip: {
            valueSuffix: ' Ampere'
        }
      }]
    });
    Highcharts.chart('i_st2b', {
        chart: {
            type: 'gauge',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false,
            height: '95%'
        },

        credits: {
          enabled: false
        },

        title: {
            text: 'Current S'
        },

        pane: {
            startAngle: -90,
            endAngle: 89.9,
            background: null,
            center: ['50%', '75%'],
            size: '105%'
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 100,
            tickInterval: 20,
            tickPixelInterval: 72,
            tickPosition: 'inside',
            tickColor: Highcharts.defaultOptions.chart.backgroundColor || '#FFFFFF',
            tickLength: 20,
            tickWidth: 2,
            minorTickInterval: null,
            labels: {
                distance: 20,
                style: {
                    fontSize: '18px'
                }
            },
            plotBands: [{
                from: 0,
                to: 10,
                color: '#55BF3B', // green
                thickness: 20
            }, {
                from: 10,
                to: 50,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 50,
                to: 100,
                color: '#DF5353', // red
                thickness: 20
            }]
        },

        series: [{
            name: 'Current',
            data: [0],
            tooltip: {
                valueSuffix: ' Ampere'
            },
            dataLabels: {
                format: '{y:.2f} A',
                borderWidth: 0,
                color: (
                    Highcharts.defaultOptions.title &&
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || '#333333',
                style: {
                    fontSize: '16px'
                }
            },
            dial: {
                radius: '80%',
                backgroundColor: 'gray',
                baseWidth: 12,
                baseLength: '0%',
                rearLength: '0%'
            },
            pivot: {
                backgroundColor: 'gray',
                radius: 6
            }
        }]
    });

    Highcharts.chart('i_rt2a', {
      chart: {
        type: 'spline',
        animation: Highcharts.svg, // don't animate in old IE
        marginRight: 10,
        events: {
          load: function () {
            var series = this.series[0];
            setInterval(function () {
              var x = (new Date()).getTime();
              series.addPoint([x, irt2], true, true);
            },2000);
          }
        }
      },
        
      credits: {
        enabled: false
      },

      time: {
        useUTC: false
      },

      title: {
        text: 'Current T'
      },

      xAxis: {
        type: 'datetime',
        tickPixelInterval: 150
      },

      yAxis: {
        title: {
          text: 'Value'
        },
        plotLines: [{
          value: 0,
          width: 1,
          color: '#808080'
        }]
      },

      legend: {
        enabled: true
      },

      series: [{
        name: 'Current',
        data: (function () {
          // generate an array of random data
          var data = [],
            time = (new Date()).getTime(),
            i;

          for (i = -19; i <= 0; i += 1) {
            data.push({
              x: time + i * 1000,
              y: 0
            });
          }
          return data;
        }()),
        marker: {
          enabled: false
        },
        tooltip: {
            valueSuffix: ' Ampere'
        }
      }]
    });
    Highcharts.chart('i_rt2b', {
        chart: {
            type: 'gauge',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false,
            height: '95%'
        },

        credits: {
          enabled: false
        },

        title: {
            text: 'Current T'
        },

        pane: {
            startAngle: -90,
            endAngle: 89.9,
            background: null,
            center: ['50%', '75%'],
            size: '105%'
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 100,
            tickInterval: 20,
            tickPixelInterval: 72,
            tickPosition: 'inside',
            tickColor: Highcharts.defaultOptions.chart.backgroundColor || '#FFFFFF',
            tickLength: 20,
            tickWidth: 2,
            minorTickInterval: null,
            labels: {
                distance: 20,
                style: {
                    fontSize: '18px'
                }
            },
            plotBands: [{
                from: 0,
                to: 10,
                color: '#55BF3B', // green
                thickness: 20
            }, {
                from: 10,
                to: 50,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 50,
                to: 100,
                color: '#DF5353', // red
                thickness: 20
            }]
        },

        series: [{
            name: 'Current',
            data: [0],
            tooltip: {
                valueSuffix: ' Ampere'
            },
            dataLabels: {
                format: '{y:.2f} A',
                borderWidth: 0,
                color: (
                    Highcharts.defaultOptions.title &&
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || '#333333',
                style: {
                    fontSize: '16px'
                }
            },
            dial: {
                radius: '80%',
                backgroundColor: 'gray',
                baseWidth: 12,
                baseLength: '0%',
                rearLength: '0%'
            },
            pivot: {
                backgroundColor: 'gray',
                radius: 6
            }
        }]
    });


    $(document).ready(function() {
      setInterval(function () {
        $.ajax({
          url:  '<?php echo base_url(); ?>getdata/current',
          success: function (point) {
            var str = point;
            var panjang_a = str.indexOf('A');
            var panjang_b = str.indexOf('B');
            var panjang_c = str.indexOf('C');
            var panjang_d = str.indexOf('D');
            var panjang_e = str.indexOf('E');
            var panjang_f = str.indexOf('F');

            var data1   = parseFloat(str.substr(0,panjang_a));
            var data2   = parseFloat(str.substr(panjang_a+1,panjang_b-panjang_a-1));
            var data3   = parseFloat(str.substr(panjang_b+1,panjang_c-panjang_b-1));
            var data4   = parseFloat(str.substr(panjang_c+1,panjang_d-panjang_c-1));
            var data5   = parseFloat(str.substr(panjang_d+1,panjang_e-panjang_d-1));
            var data6   = parseFloat(str.substr(panjang_e+1,panjang_f-panjang_e-1));

            irs1 = data1;
            ist1 = data2;
            irt1 = data3;
            irs2 = data4;
            ist2 = data5;
            irt2 = data6;
            var point1 = $('#i_rs1b').highcharts().series[0].points[0];       
            point1.update(irs1);
            var point2 = $('#i_st1b').highcharts().series[0].points[0];       
            point2.update(ist1);
            var point3 = $('#i_rt1b').highcharts().series[0].points[0];       
            point3.update(irt1);
            var point4 = $('#i_rs2b').highcharts().series[0].points[0];       
            point4.update(irs2);
            var point5 = $('#i_st2b').highcharts().series[0].points[0];       
            point5.update(ist2);
            var point6 = $('#i_rt2b').highcharts().series[0].points[0];       
            point6.update(irt2);

          }
        });
      }, 1000);
    });
  </script>

<script>
    $(document).ready(function() {
    setInterval(function() {
        $.ajax({
            url: '<?php echo base_url(); ?>writedata/check_last_data_pm_in',
            success: function(response){
                if(response == "OFFLINE") {
                    $('.pm-in-indicator').css('background-color', 'red');
                    $('.pm-in-status').css('border-color', 'red').text('DEVICE OFFLINE');
                } else if(response == "ONLINE") {
                    $('.pm-in-indicator').css('background-color', 'green');
                    $('.pm-in-status').css('border-color', 'green').text('DEVICE ONLINE');
                } else if(response == "TRANSMIT") {
                    $('.pm-in-indicator').css('background-color', 'black');
                    $('.pm-in-status').css('border-color', 'black').text('TRANSMIT DATA');
                }
            } 
        });

        $.ajax({
            url: '<?php echo base_url(); ?>writedata/check_last_data_pm_out',
            success: function(response){
                if(response == "OFFLINE") {
                    $('.pm-out-indicator').css('background-color', 'red');
                    $('.pm-out-status').css('border-color', 'red').text('DEVICE OFFLINE');
                } else if(response == "ONLINE") {
                    $('.pm-out-indicator').css('background-color', 'green');
                    $('.pm-out-status').css('border-color', 'green').text('DEVICE ONLINE');
                } else if(response == "TRANSMIT") {
                    $('.pm-out-indicator').css('background-color', 'black');
                    $('.pm-out-status').css('border-color', 'black').text('TRANSMIT DATA');
                } 
            } 
        });
      }, 1500); 
    });

  </script>

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