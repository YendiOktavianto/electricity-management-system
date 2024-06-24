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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- CSS Files -->
  <link id="pagestyle" href="<?php echo base_url(); ?>assets/template/assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatables/css/buttons.bootstrap5.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatables/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatables/css/buttons.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatables/css/jquery.dataTables.min.css">

  <style>
  .icon-circle {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border: 2px solid #555; 
    border-radius: 50%; 
    width: 60px; 
    height: 60px; /
    font-size: 24px; 
    color: #555;
  }

  .row {
    margin-bottom: 10px;
  }

  .row .col-4:nth-child(2) {
    visibility: hidden;
  }
  </style>

</head>

<body class="g-sidenav-show  bg-gray-200">
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
          <a class="nav-link text-white" href="<?php echo base_url(); ?>control">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-home"></i>
            </div>
            <span class="nav-link-text ms-1"> Control Device</span>
          </a>
        </li>
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Control System</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Controlling System</h6>
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
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="row">

            <div class="col-lg-12 col-md-12 mb-4">
              <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col text-center">
                    <h2>ONLINE REMOTE CONTROL</h2>
                  </div>
                </div>
              <div class="row justify-content-center text-center mt-4">
                <!-- Power Control -->
                <div class="col-auto">
                  <div>POWER</div>
                  <button class="icon-circle" id="power-button">
                    <i class="fas fa-power-off fa-2x" id="power-status" title="Power"></i>
                  </button>
                </div>
                <!-- Volume Control -->
                <div class="col-auto">
                  <div>VOLUME AUDIO</div>
                  <button class="icon-circle" id="volume-up-button">
                    <i class="fas fa-chevron-up fa-2x" id="volume-up" title="Volume Up"></i>
                  </button>
                  <button class="icon-circle" id="mute-button">
                    <i class="fas fa-square fa-2x" id="mute" title="Volume Mute"></i>
                  </button>
                  <button class="icon-circle" id="volume-down-button">
                    <i class="fas fa-chevron-down fa-2x" id="volume-down" title="Volume Down"></i>
                  </button>
                </div>
                <div class="row justify-content-center text-center mt-4">
                  <div>CAMERA CONTROL</div>
                  <div class="col-12">
                    <button class="icon-circle" id="camera-up-button">
                      <i class="fas fa-chevron-up fa-2x" id="camera-up" title="Camera Up"></i>
                    </button>
                  </div>
                  <div class="col-2">
                    <button class="icon-circle" id="camera-left-button">
                      <i class="fas fa-chevron-left fa-2x" id="camera-left" title="Camera Left"></i>
                    </button>
                  </div>
                  <div class="col-2">
                    <button class="icon-circle" id="camera-right-button">
                      <i class="fas fa-chevron-right fa-2x" id="camera-right" title="Camera Right"></i>
                    </button>
                  </div>
                  <div class="col-12">
                    <button class="icon-circle" id="camera-down-button">
                      <i class="fas fa-chevron-down fa-2x" id="camera-down" title="Camera Down"></i>
                    </button>
                  </div>
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

  <!-- <script type="text/javascript">
    $(document).ready(function() {
        var data1   = 0;
        var data2   = 0;
        var data3   = 0;
        var data4   = 0;
		setInterval(function () {
        $.ajax({
          url:  '<?php echo base_url(); ?>getdata/output',
          success: function (point) {
            var str = point;
            var panjang_a = str.indexOf('A');
            var panjang_b = str.indexOf('B');
            var panjang_c = str.indexOf('C');
            var panjang_d = str.indexOf('D');

            data1   = parseInt(str.substr(0,panjang_a));
            data2   = parseInt(str.substr(panjang_a+1,panjang_b-panjang_a-1));
            data3   = parseInt(str.substr(panjang_b+1,panjang_c-panjang_b-1));
            data4   = parseInt(str.substr(panjang_c+1,panjang_d-panjang_c-1));

            if(data1===1) {
            	$('#device-status-1').removeClass('icon-custom-color-off').addClass('icon-custom-color-on');
              $('#device-text-1').removeClass('text-off').addClass('text-on').text('DEVICE ONLINE');
              $('#ch1').removeClass('button-green').addClass('button-red').text('OFF');
            } else {
              $('#device-status-1').removeClass('.icon-custom-color-on').addClass('icon-custom-color-off');
              $('#device-text-1').removeClass('text-on').addClass('text-off').text('DEVICE OFFLINE');
              $('#ch1').removeClass('button-red').addClass('button-green').text('ON');
            }
            if(data2===1) {
              $('#device-status-2').removeClass('icon-custom-color-off').addClass('icon-custom-color-on');
              $('#device-text-2').removeClass('text-off').addClass('text-on').text('DEVICE ONLINE');
              $('#ch2').removeClass('button-green').addClass('button-red').text('OFF');
            } else {
              $('#device-status-2').removeClass('icon-custom-color-on').addClass('icon-custom-color-off');
              $('#device-text-2').removeClass('text-on').addClass('text-off').text('DEVICE OFFLINE');
              $('#ch2').removeClass('button-red').addClass('button-green').text('ON');
            }
            if(data3===1) {
            	$('#status3').html('ON');
            } else {
            	$('#status3').html('OFF');
            }
            if(data4===1) {
            	$('#status4').html('ON');
            } else {
            	$('#status4').html('OFF');
            }

          }
        });
      }, 1000);
      $('#ch1').on('click',function(){
        var dataToSend;

        if ($(this).hasClass('button-green')) {
            dataToSend = "D11"; 
        } else if ($(this).hasClass('button-red')) {
            dataToSend = "D10"; 
        }

        $.ajax({
          type: 'POST',
          url:  '<?php echo base_url(); ?>Request/SendDataToArduino',
          data: { 'data': dataToSend },
          success: function (point) { 
            console.log(point);
          }
        });
      });

      $('#ch2').on('click',function(){
        var dataToSend;

        if ($(this).hasClass('button-green')) {
            dataToSend = "D21"; 
        } else if ($(this).hasClass('button-red')) {
            dataToSend = "D20"; 
        }

        $.ajax({
          type: 'POST',
          url:  '<?php echo base_url(); ?>Request/SendDataToArduino',
          data: { 'data': dataToSend },
          success: function (point) { 
            console.log(point);
          }
        });
      });

      $('#ch3').on('click',function(){
      	var data = data3;
      	data ^= 1;
        $.ajax({
          url:  '<?php echo base_url(); ?>writedata/output/output3/'+String(data),
          success: function (point) { }
        });
      });

      $('#ch4').on('click',function(){
      	var data = data4;
      	data ^= 1;
        $.ajax({
          url:  '<?php echo base_url(); ?>writedata/output/output4/'+String(data),
          success: function (point) { }
        });
      });

    });
  </script> -->

  <script>
    var data;
    var data1   = 0;
    var data2   = 0;
    var powerButton = document.getElementById('power-button');
    var muteButton = document.getElementById('mute-button');

    setInterval(() => {
      $.ajax({
        url:  '<?php echo base_url(); ?>getdata/outputPowerMute',
        success: function(point){
          var str = point;
          var panjang_a = str.indexOf('A');
          var panjang_b = str.indexOf('B');

          data1 = parseInt(str.substr(0,panjang_a));
          data2 = parseInt(str.substr(panjang_a+1,panjang_b-panjang_a-1));

          console.log(data1);
          console.log(data2);

          if(data1 == 1){
            powerButton.style.backgroundColor = 'red';
          } else {
            powerButton.style.backgroundColor = '';
          }

          if(data2 == 1){
            muteButton.style.backgroundColor = 'red';
          } else {
            muteButton.style.backgroundColor = '';
          }
        }
      });
    }, 1000);

    var volumeUpButton = document.getElementById('volume-up-button');
    var volumeDownButton = document.getElementById('volume-down-button');
    var cameraUpButton = document.getElementById('camera-up-button');
    var cameraLeftButton = document.getElementById('camera-left-button');
    var cameraRightButton = document.getElementById('camera-right-button');
    var cameraDownButton = document.getElementById('camera-down-button');

    function addEventListeners(button, commandUp, commandDown) {
      button.addEventListener('mousedown', function() {
        data = commandUp;

        this.style.backgroundColor = 'red';

        $.ajax({
          type: 'POST',
          url:  '<?php echo base_url(); ?>Request/OnlyControl',
          data: { 'data': data },
          success: function (point) { 
            console.log(point);
          }
        });
      });

      button.addEventListener('mouseup', function() {
        data = commandDown;
       
        this.style.backgroundColor = '';

        $.ajax({
          type: 'POST',
          url:  '<?php echo base_url(); ?>Request/OnlyControl',
          data: { 'data': data },
          success: function (point) { 
            console.log(point);
          }
        });
      });

      button.addEventListener('mouseleave', function() {
        data = commandDown;
        this.style.backgroundColor = '';
      });
    }

    function addEventListeners2(button, commandUp, commandDown) {
      button.addEventListener('click', function() {

        if(this.style.backgroundColor == ''){
          data = commandUp;
        } else if(this.style.backgroundColor == 'red'){
          data = commandDown;
        }

        $.ajax({
          type: 'POST',
          url:  '<?php echo base_url(); ?>Request/OnlyControl',
          data: { 'data': data },
          success: function (point) { 
            console.log(point);
          }
        });
      });
    }

    addEventListeners2(powerButton, 'PB1', 'PB0');
    addEventListeners(volumeUpButton, 'VU1', 'VU0');
    addEventListeners2(muteButton, 'MB1', 'MB0');
    addEventListeners(volumeDownButton, 'VD1', 'VD0');
    addEventListeners(cameraUpButton, 'CU1', 'CU0');
    addEventListeners(cameraLeftButton, 'CL1', 'CL0');
    addEventListeners(cameraRightButton, 'CR1', 'CR0');
    addEventListeners(cameraDownButton, 'CD1', 'CD0');
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