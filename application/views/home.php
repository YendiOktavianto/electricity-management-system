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
          <a class="nav-link text-white active bg-success" href="#">
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Home</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Home</h6>
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
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
              <div class="card">
                <div class="card-header p-3 pt-2">
                  <div class="icon icon-lg icon-shape bg-gradient-primary shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                    <i class="fa fa-clock"></i>
                  </div>
                  <div class="pt-1">
                    <p class="text-md mb-0 text-capitalize font-weight-bolder" style="text-align: right;">Datetime :</p>
                    <h1 class="mb-0 mt-4" id="datetime">-</h1>
                  </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3"></div>
              </div>
            </div>

            <div class="col-lg-12 col-md-12 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6 col-7">
                      <h3>Alarm Information </h3>
                      <p class="text-sm mb-0">
                        <i class="fa fa-desktop text-info" aria-hidden="true"></i>
                        <span class="font-weight-bold ms-1">Monitoring Realtime</span> 
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <table id="tabel-alarm" class="table table-striped table-bordered" style="width: 100%;">
                    <thead>
                      <tr>
                        <th style="width: 50%;">Date Time</th>
                        <th style="width: 10%;">Desc</th>
                        <th style="width: 10%;">Lane</th>
                        <th style="width: 10%;">Value</th>
                        <th style="width: 20%;">Status</th>
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

        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="row">

            <div class="col-xl-6 col-lg-6 col-md-12 mb-4">
              <div class="card">
                <div class="card-header p-3 pt-2">
                  <div class="icon icon-lg icon-shape bg-gradient-info shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                    <i class="fa fa-clock"></i>
                  </div>
                  <div class="pt-1" style="min-width: 185px;">
                    <p class="text-md mb-0 text-capitalize font-weight-bolder" style="text-align: right;">Status <br/>Device :</p>
                    <h2 class="mb-0 mt-0" id="pm_input">-</h2>
                  </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">Device Power Meter Input</div>
              </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 mb-4">
              <div class="card">
                <div class="card-header p-3 pt-2">
                  <div class="icon icon-lg icon-shape bg-gradient-info shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                    <i class="fa fa-clock"></i>
                  </div>
                  <div class="pt-1" style="min-width: 185px;">
                    <p class="text-md mb-0 text-capitalize font-weight-bolder" style="text-align: right;">Status <br/>Device :</p>
                    <h2 class="mb-0 mt-0" id="pm_output">-</h2>
                  </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">Device Power Meter Output</div>
              </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 mb-4">
              <div class="card">
                <div class="card-header p-3 pt-2">
                  <div class="icon icon-lg icon-shape bg-gradient-info shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                    <i class="fa fa-clock"></i>
                  </div>
                  <div class="pt-1" style="min-width: 185px;">
                    <p class="text-md mb-0 text-capitalize font-weight-bolder" style="text-align: right;">Status <br/>Device :</p>
                    <h2 class="mb-0 mt-0" id="gnd_input">-</h2>
                  </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">Device Ground Input</div>
              </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 mb-4">
              <div class="card">
                <div class="card-header p-3 pt-2">
                  <div class="icon icon-lg icon-shape bg-gradient-info shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                    <i class="fa fa-clock"></i>
                  </div>
                  <div class="pt-1" style="min-width: 185px;">
                    <p class="text-md mb-0 text-capitalize font-weight-bolder" style="text-align: right;">Status <br/>Device :</p>
                    <h2 class="mb-0 mt-0" id="gnd_output">-</h2>
                  </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">Device Ground Output</div>
              </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 mb-4">
              <div class="card">
                <div class="card-header p-3 pt-2">
                  <div class="icon icon-lg icon-shape bg-gradient-info shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                    <i class="fa fa-clock"></i>
                  </div>
                  <div class="pt-1" style="min-width: 185px;">
                    <p class="text-md mb-0 text-capitalize font-weight-bolder" style="text-align: right;">Status <br/>Device :</p>
                    <h2 class="mb-0 mt-0" id="suhu">-</h2>
                  </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">Device Temperature</div>
              </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 mb-4 <?php echo $hideLayoutClass; ?>">
              <div class="card">
                <div class="card-header p-3 pt-2">
                  <div class="icon icon-lg icon-shape bg-gradient-info shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                    <i class="fa fa-clock"></i>
                  </div>
                  <div class="pt-1" style="min-width: 185px;">
                    <p class="text-md mb-0 text-capitalize font-weight-bolder" style="text-align: right;">Status <br/>Device :</p>
                    <h2 class="mb-0 mt-0" id="control">-</h2>
                  </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">Device Control</div>
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
  <script src="<?php echo base_url(); ?>assets/highcharts/modules/solid-gauge.js"></script>
  <script src="<?php echo base_url(); ?>assets/highcharts/modules/exporting.js"></script>
  <script src="<?php echo base_url(); ?>assets/highcharts/modules/export-data.js"></script>
	
  <script type="text/javascript">
    $(document).ready(function() {
      function getDateTime() {
          var now     = new Date(); 
          var year    = now.getFullYear();
          var month   = now.getMonth()+1; 
          var day     = now.getDate();
          var hour    = now.getHours();
          var minute  = now.getMinutes();
          var second  = now.getSeconds(); 
          var daysList = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
          var monthsList = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Aug', 'Oct', 'Nov', 'Dec'];
          var hari = daysList[now.getDay()];
          var bulan = monthsList[now.getMonth()];

          if(month.toString().length == 1) {
               month = '0'+month;
          }
          if(day.toString().length == 1) {
               day = '0'+day;
          }   
          if(hour.toString().length == 1) {
               hour = '0'+hour;
          }
          if(minute.toString().length == 1) {
               minute = '0'+minute;
          }
          if(second.toString().length == 1) {
               second = '0'+second;
          }   
          //var dateTime = year+'/'+month+'/'+day+' '+hour+':'+minute+':'+second;   
          var dateTime = hari +', '+day+' '+bulan+' '+year+' - '+hour+':'+minute+':'+second;
          return dateTime;
      }

      // example usage: realtime clock
      setInterval(function(){
          currentTime = getDateTime();
          $('#datetime').html(currentTime);
      }, 1000);
    });
    /*
    function getDateTime() {
        var now     = new Date(); 
        var year    = now.getFullYear();
        var month   = now.getMonth()+1; 
        var day     = now.getDate();
        var hour    = now.getHours();
        var minute  = now.getMinutes();
        var second  = now.getSeconds(); 
        if(month.toString().length == 1) {
             month = '0'+month;
        }
        if(day.toString().length == 1) {
             day = '0'+day;
        }   
        if(hour.toString().length == 1) {
             hour = '0'+hour;
        }
        if(minute.toString().length == 1) {
             minute = '0'+minute;
        }
        if(second.toString().length == 1) {
             second = '0'+second;
        }   
        var dateTime = year+'/'+month+'/'+day+' '+hour+':'+minute+':'+second;   
         return dateTime;
    }

    // example usage: realtime clock
    setInterval(function(){
        currentTime = getDateTime();
        document.getElementById("digital-clock").innerHTML = currentTime;
    }, 1000);*/
  </script>


  <script type="text/javascript">
    $(document).ready(function() {
      setInterval(function () {
        $.ajax({
          url:  '<?php echo base_url(); ?>getdata/device_status',
          success: function (point) {
            var str = point;
            var panjang_a = str.indexOf('A');
            var panjang_b = str.indexOf('B');
            var panjang_c = str.indexOf('C');
            var panjang_d = str.indexOf('D');
            var panjang_e = str.indexOf('E');
            var panjang_f = str.indexOf('F');

            var data1   = str.substr(0,panjang_a);
            var data2   = str.substr(panjang_a+1,panjang_b-panjang_a-1);
            var data3   = str.substr(panjang_b+1,panjang_c-panjang_b-1);
            var data4   = str.substr(panjang_c+1,panjang_d-panjang_c-1);
            var data5   = str.substr(panjang_d+1,panjang_e-panjang_d-1);
            var data6   = str.substr(panjang_e+1,panjang_f-panjang_e-1);
            data1 = data1.replace(' ', '<br ?>');
            data2 = data2.replace(' ', '<br ?>');
            data3 = data3.replace(' ', '<br ?>');
            data4 = data4.replace(' ', '<br ?>');
            data5 = data5.replace(' ', '<br ?>');
            data6 = data6.replace(' ', '<br ?>');
            $('#control').html(data1);
            $('#gnd_input').html(data2);
            $('#gnd_output').html(data3);
            $('#pm_input').html(data4);
            $('#pm_output').html(data5);
            $('#suhu').html(data6);
          }
        });
      }, 1000);
    });
  </script>

  <script>
      $(document).ready(function() {
        $('#tabel-alarm').DataTable( {
            "ajax": '<?php echo base_url() ?>logger/alarm',
            "bPaginate":false,
            "bProcessing": false,
            //"pageLength": 2,
            "columns": [
                { "data": "date_time" },
                { "data": "name" },
                { "data": "lane" },
                { "data": "value" },
                { "data": "status" }
            ],
            "serverSide": false,
            "bLengthChange": false,
            "searching": false,
            "scrollCollapse": true,
            "scrollX": true,
            "responsive": true,
            "order": [[ 0, "desc" ]]
        });
        setInterval( function () {
          $('#tabel-alarm').DataTable().ajax.reload();
        }, 3000 );
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