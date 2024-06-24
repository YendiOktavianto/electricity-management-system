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
          <a class="nav-link text-white active bg-success" href="#">
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Voltage</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Monitoring Voltage</h6>
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
          
        <!--INPUT-->
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="row">

            <!-- VRN INPUT -->
            <div class="col-lg-12 col-md-12 mb-4">
              <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-8">
                    <h3>Voltage R-N (Input) </h3>
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
                      <div id="v_rn1b" style="height: 250px; min-width: 225px; max-width: 290px; margin: 0 auto;"></div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="card-body">
                      <div id="v_rn1a" style="height: 250px;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            <!--VSN INPUT-->
            <div class="col-lg-12 col-md-12 mb-4">
              <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-8">
                    <h3>Voltage S-N (Input) </h3>
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
                      <div id="v_sn1b" style="height: 250px; min-width: 225px; max-width: 290px; margin: 0 auto;"></div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="card-body">
                      <div id="v_sn1a" style="height: 250px;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            <!--VTN INPUT-->
            <div class="col-lg-12 col-md-12 mb-4">
              <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-8">
                    <h3>Voltage T-N (Input) </h3>
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
                      <div id="v_tn1b" style="height: 250px; min-width: 225px; max-width: 290px; margin: 0 auto;"></div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="card-body">
                      <div id="v_tn1a" style="height: 250px;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!--VRS INPUT-->
            <div class="col-lg-12 col-md-12 mb-4"> 
              <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-8">
                    <h3>Voltage R-S (Input) </h3>
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
                      <div id="v_rs1b" style="height: 250px; min-width: 225px; max-width: 290px; margin: 0 auto;"></div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="card-body">
                      <div id="v_rs1a" style="height: 250px;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!--VST INPUT-->
            <div class="col-lg-12 col-md-12 mb-4">
              <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-8">
                    <h3>Voltage S-T (Input) </h3>
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
                      <div id="v_st1b" style="height: 250px; min-width: 225px; max-width: 290px; margin: 0 auto;"></div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="card-body">
                      <div id="v_st1a" style="height: 250px;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!--VRT INPUT-->
            <div class="col-lg-12 col-md-12 mb-4">
              <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-8">
                    <h3>Voltage R-T (Input) </h3>
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
                      <div id="v_rt1b" style="height: 250px; min-width: 225px; max-width: 290px; margin: 0 auto;"></div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="card-body">
                      <div id="v_rt1a" style="height: 250px;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>

        <!--OUTPUT-->
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="row">


            <!--VRN OUTPUT-->
            <div class="col-lg-12 col-md-12 mb-4">
              <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-8">
                    <h3>Voltage R-N (Output) </h3>
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
                      <div id="v_rn2b" style="height: 250px; min-width: 225px; max-width: 290px; margin: 0 auto;"></div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="card-body">
                      <div id="v_rn2a" style="height: 250px;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            <!--VSN OUPUT-->
            <div class="col-lg-12 col-md-12 mb-4">
              <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-8">
                    <h3>Voltage S-N (Output) </h3>
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
                      <div id="v_sn2b" style="height: 250px; min-width: 225px; max-width: 290px; margin: 0 auto;"></div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="card-body">
                      <div id="v_sn2a" style="height: 250px;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            <!--VTN OUPUT-->
            <div class="col-lg-12 col-md-12 mb-4">
              <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-8">
                    <h3>Voltage T-N (Output) </h3>
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
                      <div id="v_tn2b" style="height: 250px; min-width: 225px; max-width: 290px; margin: 0 auto;"></div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="card-body">
                      <div id="v_tn2a" style="height: 250px;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            <!--VRS OUTPUT-->
            <div class="col-lg-12 col-md-12 mb-4">
              <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-8">
                    <h3>Voltage R-S (Output) </h3>
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
                      <div id="v_rs2b" style="height: 250px; min-width: 225px; max-width: 290px; margin: 0 auto;"></div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="card-body">
                      <div id="v_rs2a" style="height: 250px;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!--VST OUTPUT-->
            <div class="col-lg-12 col-md-12 mb-4">
              <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-8">
                    <h3>Voltage S-T (Output) </h3>
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
                      <div id="v_st2b" style="height: 250px; min-width: 225px; max-width: 290px; margin: 0 auto;"></div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="card-body">
                      <div id="v_st2a" style="height: 250px;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!--VRT OUTPUT-->
            <div class="col-lg-12 col-md-12 mb-4">
              <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-8">
                    <h3>Voltage R-T (Output) </h3>
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
                      <div id="v_rt2b" style="height: 250px; min-width: 225px; max-width: 290px; margin: 0 auto;"></div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="card-body">
                      <div id="v_rt2a" style="height: 250px;"></div>
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
    var vrs1 = 0;
    var vst1 = 0;
    var vrt1 = 0;
    var vrn1 = 0;
    var vsn1 = 0;
    var vtn1 = 0;
    var vrs2 = 0;
    var vst2 = 0;
    var vrt2 = 0;
    var vrn2 = 0;
    var vsn2 = 0;
    var vtn2 = 0;

    const timezone = new Date().getTimezoneOffset();
    Highcharts.setOptions({
        global: {
        timezoneOffset: 17 * 60
    }
    });
    Highcharts.chart('v_rs1a', {
      chart: {
        type: 'spline',
        animation: Highcharts.svg, // don't animate in old IE
        marginRight: 10,
        events: {
          load: function () {
            var series = this.series[0];
            setInterval(function () {
              var x = (new Date()).getTime();
              series.addPoint([x, vrs1], true, true);
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
        text: 'Voltage R-S'
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
        name: 'Voltage',
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
            valueSuffix: ' Volt'
        }
      }]
    });
    Highcharts.chart('v_rs1b', {
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
            text: 'Voltage R-S'
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
            max: 440,
            tickInterval: 110,
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
                from: 360,
                to: 400,
                color: '#55BF3B', // green
                thickness: 20
            }, {
                from: 340,
                to: 360,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 400,
                to: 420,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 0,
                to: 340,
                color: '#DF5353', // red
                thickness: 20
            }, {
                from: 420,
                to: 440,
                color: '#DF5353', // red
                thickness: 20
            }]
        },

        series: [{
            name: 'Voltage',
            data: [0],
            tooltip: {
                valueSuffix: ' Volt'
            },
            dataLabels: {
                format: '{y} V',
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

    Highcharts.chart('v_st1a', {
      chart: {
        type: 'spline',
        animation: Highcharts.svg, // don't animate in old IE
        marginRight: 10,
        events: {
          load: function () {
            var series = this.series[0];
            setInterval(function () {
              var x = (new Date()).getTime();
              series.addPoint([x, vst1], true, true);
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
        text: 'Voltage S-T'
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
        name: 'Voltage',
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
            valueSuffix: ' Volt'
        }
      }]
    });
    Highcharts.chart('v_st1b', {
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
            text: 'Voltage S-T'
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
            max: 440,
            tickInterval: 110,
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
                from: 360,
                to: 400,
                color: '#55BF3B', // green
                thickness: 20
            }, {
                from: 340,
                to: 360,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 400,
                to: 420,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 0,
                to: 340,
                color: '#DF5353', // red
                thickness: 20
            }, {
                from: 420,
                to: 440,
                color: '#DF5353', // red
                thickness: 20
            }]
        },

        series: [{
            name: 'Voltage',
            data: [0],
            tooltip: {
                valueSuffix: ' Volt'
            },
            dataLabels: {
                format: '{y} V',
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

    Highcharts.chart('v_rt1a', {
      chart: {
        type: 'spline',
        animation: Highcharts.svg, // don't animate in old IE
        marginRight: 10,
        events: {
          load: function () {
            var series = this.series[0];
            setInterval(function () {
              var x = (new Date()).getTime();
              series.addPoint([x, vrt1], true, true);
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
        text: 'Voltage R-T'
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
        name: 'Voltage',
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
            valueSuffix: ' Volt'
        }
      }]
    });
    Highcharts.chart('v_rt1b', {
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
            text: 'Voltage R-T'
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
            max: 440,
            tickInterval: 110,
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
                from: 360,
                to: 400,
                color: '#55BF3B', // green
                thickness: 20
            }, {
                from: 340,
                to: 360,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 400,
                to: 420,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 0,
                to: 340,
                color: '#DF5353', // red
                thickness: 20
            }, {
                from: 420,
                to: 440,
                color: '#DF5353', // red
                thickness: 20
            }]
        },

        series: [{
            name: 'Voltage',
            data: [0],
            tooltip: {
                valueSuffix: ' Volt'
            },
            dataLabels: {
                format: '{y} V',
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

    Highcharts.chart('v_rn1a', {
      chart: {
        type: 'spline',
        animation: Highcharts.svg, // don't animate in old IE
        marginRight: 10,
        events: {
          load: function () {
            var series = this.series[0];
            setInterval(function () {
              var x = (new Date()).getTime();
              series.addPoint([x, vrn1], true, true);
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
        text: 'Voltage R-N'
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
        name: 'Voltage',
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
            valueSuffix: ' Volt'
        }
      }]
    });
    Highcharts.chart('v_rn1b', {
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
            text: 'Voltage R-N'
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
            max: 250,
            tickInterval: 110,
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
                from: 210,
                to: 230,
                color: '#55BF3B', // green
                thickness: 20
            }, {
                from: 200,
                to: 210,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 230,
                to: 240,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 0,
                to: 200,
                color: '#DF5353', // red
                thickness: 20
            }, {
                from: 240,
                to: 250,
                color: '#DF5353', // red
                thickness: 20
            }]
        },

        series: [{
            name: 'Voltage',
            data: [0],
            tooltip: {
                valueSuffix: ' Volt'
            },
            dataLabels: {
                format: '{y} V',
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

    Highcharts.chart('v_sn1a', {
      chart: {
        type: 'spline',
        animation: Highcharts.svg, // don't animate in old IE
        marginRight: 10,
        events: {
          load: function () {
            var series = this.series[0];
            setInterval(function () {
              var x = (new Date()).getTime();
              series.addPoint([x, vsn1], true, true);
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
        text: 'Voltage S-N'
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
        name: 'Voltage',
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
            valueSuffix: ' Volt'
        }
      }]
    });
    Highcharts.chart('v_sn1b', {
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
            text: 'Voltage S-N'
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
            max: 250,
            tickInterval: 110,
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
                from: 210,
                to: 230,
                color: '#55BF3B', // green
                thickness: 20
            }, {
                from: 200,
                to: 210,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 230,
                to: 240,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 0,
                to: 200,
                color: '#DF5353', // red
                thickness: 20
            }, {
                from: 240,
                to: 250,
                color: '#DF5353', // red
                thickness: 20
            }]
        },

        series: [{
            name: 'Voltage',
            data: [0],
            tooltip: {
                valueSuffix: ' Volt'
            },
            dataLabels: {
                format: '{y} V',
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

    Highcharts.chart('v_tn1a', {
      chart: {
        type: 'spline',
        animation: Highcharts.svg, // don't animate in old IE
        marginRight: 10,
        events: {
          load: function () {
            var series = this.series[0];
            setInterval(function () {
              var x = (new Date()).getTime();
              series.addPoint([x, vtn1], true, true);
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
        text: 'Voltage T-N'
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
        name: 'Voltage',
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
            valueSuffix: ' Volt'
        }
      }]
    });
    Highcharts.chart('v_tn1b', {
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
            text: 'Voltage T-N'
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
            max: 250,
            tickInterval: 110,
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
                from: 210,
                to: 230,
                color: '#55BF3B', // green
                thickness: 20
            }, {
                from: 200,
                to: 210,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 230,
                to: 240,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 0,
                to: 200,
                color: '#DF5353', // red
                thickness: 20
            }, {
                from: 240,
                to: 250,
                color: '#DF5353', // red
                thickness: 20
            }]
        },

        series: [{
            name: 'Voltage',
            data: [0],
            tooltip: {
                valueSuffix: ' Volt'
            },
            dataLabels: {
                format: '{y} V',
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



    Highcharts.chart('v_rs2a', {
      chart: {
        type: 'spline',
        animation: Highcharts.svg, // don't animate in old IE
        marginRight: 10,
        events: {
          load: function () {
            var series = this.series[0];
            setInterval(function () {
              var x = (new Date()).getTime();
              series.addPoint([x, vrs2], true, true);
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
        text: 'Voltage R-S'
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
        name: 'Voltage',
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
            valueSuffix: ' Volt'
        }
      }]
    });
    Highcharts.chart('v_rs2b', {
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
            text: 'Voltage R-S'
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
            max: 440,
            tickInterval: 110,
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
                from: 360,
                to: 400,
                color: '#55BF3B', // green
                thickness: 20
            }, {
                from: 340,
                to: 360,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 400,
                to: 420,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 0,
                to: 340,
                color: '#DF5353', // red
                thickness: 20
            }, {
                from: 420,
                to: 440,
                color: '#DF5353', // red
                thickness: 20
            }]
        },

        series: [{
            name: 'Voltage',
            data: [0],
            tooltip: {
                valueSuffix: ' Volt'
            },
            dataLabels: {
                format: '{y} V',
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

    Highcharts.chart('v_st2a', {
      chart: {
        type: 'spline',
        animation: Highcharts.svg, // don't animate in old IE
        marginRight: 10,
        events: {
          load: function () {
            var series = this.series[0];
            setInterval(function () {
              var x = (new Date()).getTime();
              series.addPoint([x, vst2], true, true);
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
        text: 'Voltage S-T'
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
        name: 'Voltage',
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
            valueSuffix: ' Volt'
        }
      }]
    });
    Highcharts.chart('v_st2b', {
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
            text: 'Voltage S-T'
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
            max: 440,
            tickInterval: 110,
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
                from: 360,
                to: 400,
                color: '#55BF3B', // green
                thickness: 20
            }, {
                from: 340,
                to: 360,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 400,
                to: 420,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 0,
                to: 340,
                color: '#DF5353', // red
                thickness: 20
            }, {
                from: 420,
                to: 440,
                color: '#DF5353', // red
                thickness: 20
            }]
        },

        series: [{
            name: 'Voltage',
            data: [0],
            tooltip: {
                valueSuffix: ' Volt'
            },
            dataLabels: {
                format: '{y} V',
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

    Highcharts.chart('v_rt2a', {
      chart: {
        type: 'spline',
        animation: Highcharts.svg, // don't animate in old IE
        marginRight: 10,
        events: {
          load: function () {
            var series = this.series[0];
            setInterval(function () {
              var x = (new Date()).getTime();
              series.addPoint([x, vrt2], true, true);
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
        text: 'Voltage R-T'
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
        name: 'Voltage',
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
            valueSuffix: ' Volt'
        }
      }]
    });
    Highcharts.chart('v_rt2b', {
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
            text: 'Voltage R-T'
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
            max: 440,
            tickInterval: 110,
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
                from: 360,
                to: 400,
                color: '#55BF3B', // green
                thickness: 20
            }, {
                from: 340,
                to: 360,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 400,
                to: 420,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 0,
                to: 340,
                color: '#DF5353', // red
                thickness: 20
            }, {
                from: 420,
                to: 440,
                color: '#DF5353', // red
                thickness: 20
            }]
        },

        series: [{
            name: 'Voltage',
            data: [0],
            tooltip: {
                valueSuffix: ' Volt'
            },
            dataLabels: {
                format: '{y} V',
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

    Highcharts.chart('v_rn2a', {
      chart: {
        type: 'spline',
        animation: Highcharts.svg, // don't animate in old IE
        marginRight: 10,
        events: {
          load: function () {
            var series = this.series[0];
            setInterval(function () {
              var x = (new Date()).getTime();
              series.addPoint([x, vrn2], true, true);
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
        text: 'Voltage R-N'
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
        name: 'Voltage',
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
            valueSuffix: ' Volt'
        }
      }]
    });
    Highcharts.chart('v_rn2b', {
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
            text: 'Voltage R-N'
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
            max: 250,
            tickInterval: 110,
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
                from: 210,
                to: 230,
                color: '#55BF3B', // green
                thickness: 20
            }, {
                from: 200,
                to: 210,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 230,
                to: 240,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 0,
                to: 200,
                color: '#DF5353', // red
                thickness: 20
            }, {
                from: 240,
                to: 250,
                color: '#DF5353', // red
                thickness: 20
            }]
        },

        series: [{
            name: 'Voltage',
            data: [0],
            tooltip: {
                valueSuffix: ' Volt'
            },
            dataLabels: {
                format: '{y} V',
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

    Highcharts.chart('v_sn2a', {
      chart: {
        type: 'spline',
        animation: Highcharts.svg, // don't animate in old IE
        marginRight: 10,
        events: {
          load: function () {
            var series = this.series[0];
            setInterval(function () {
              var x = (new Date()).getTime();
              series.addPoint([x, vsn2], true, true);
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
        text: 'Voltage S-N'
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
        name: 'Voltage',
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
            valueSuffix: ' Volt'
        }
      }]
    });
    Highcharts.chart('v_sn2b', {
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
            text: 'Voltage S-N'
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
            max: 250,
            tickInterval: 110,
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
                from: 210,
                to: 230,
                color: '#55BF3B', // green
                thickness: 20
            }, {
                from: 200,
                to: 210,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 230,
                to: 240,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 0,
                to: 200,
                color: '#DF5353', // red
                thickness: 20
            }, {
                from: 240,
                to: 250,
                color: '#DF5353', // red
                thickness: 20
            }]
        },

        series: [{
            name: 'Voltage',
            data: [0],
            tooltip: {
                valueSuffix: ' Volt'
            },
            dataLabels: {
                format: '{y} V',
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

    Highcharts.chart('v_tn2a', {
      chart: {
        type: 'spline',
        animation: Highcharts.svg, // don't animate in old IE
        marginRight: 10,
        events: {
          load: function () {
            var series = this.series[0];
            setInterval(function () {
              var x = (new Date()).getTime();
              series.addPoint([x, vtn2], true, true);
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
        text: 'Voltage T-N'
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
        name: 'Voltage',
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
            valueSuffix: ' Volt'
        }
      }]
    });
    Highcharts.chart('v_tn2b', {
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
            text: 'Voltage T-N'
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
            max: 250,
            tickInterval: 110,
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
                from: 210,
                to: 230,
                color: '#55BF3B', // green
                thickness: 20
            }, {
                from: 200,
                to: 210,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 230,
                to: 240,
                color: '#DDDF0D', // yellow
                thickness: 20
            }, {
                from: 0,
                to: 200,
                color: '#DF5353', // red
                thickness: 20
            }, {
                from: 240,
                to: 250,
                color: '#DF5353', // red
                thickness: 20
            }]
        },

        series: [{
            name: 'Voltage',
            data: [0],
            tooltip: {
                valueSuffix: ' Volt'
            },
            dataLabels: {
                format: '{y} V',
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
          url:  '<?php echo base_url(); ?>getdata/voltage',
          success: function (point) {
            var str = point;
            var panjang_a = str.indexOf('A');
            var panjang_b = str.indexOf('B');
            var panjang_c = str.indexOf('C');
            var panjang_d = str.indexOf('D');
            var panjang_e = str.indexOf('E');
            var panjang_f = str.indexOf('F');
            var panjang_g = str.indexOf('G');
            var panjang_h = str.indexOf('H');
            var panjang_i = str.indexOf('I');
            var panjang_j = str.indexOf('J');
            var panjang_k = str.indexOf('K');
            var panjang_l = str.indexOf('L');

            var data1   = parseInt(str.substr(0,panjang_a));
            var data2   = parseInt(str.substr(panjang_a+1,panjang_b-panjang_a-1));
            var data3   = parseInt(str.substr(panjang_b+1,panjang_c-panjang_b-1));
            var data4   = parseInt(str.substr(panjang_c+1,panjang_d-panjang_c-1));
            var data5   = parseInt(str.substr(panjang_d+1,panjang_e-panjang_d-1));
            var data6   = parseInt(str.substr(panjang_e+1,panjang_f-panjang_e-1));
            var data7   = parseInt(str.substr(panjang_f+1,panjang_g-panjang_f-1));
            var data8   = parseInt(str.substr(panjang_g+1,panjang_h-panjang_g-1));
            var data9   = parseInt(str.substr(panjang_h+1,panjang_i-panjang_h-1));
            var data10  = parseInt(str.substr(panjang_i+1,panjang_j-panjang_i-1));
            var data11  = parseInt(str.substr(panjang_j+1,panjang_k-panjang_j-1));
            var data12  = parseInt(str.substr(panjang_k+1,panjang_l-panjang_k-1));

            vrs1 = data1;
            vst1 = data2;
            vrt1 = data3;
            vrn1 = data4;
            vsn1 = data5;
            vtn1 = data6;
            vrs2 = data7;
            vst2 = data8;
            vrt2 = data9;
            vrn2 = data10;
            vsn2 = data11;
            vtn2 = data12;
            var point1 = $('#v_rs1b').highcharts().series[0].points[0];       
            point1.update(vrs1);
            var point2 = $('#v_st1b').highcharts().series[0].points[0];       
            point2.update(vst1);
            var point3 = $('#v_rt1b').highcharts().series[0].points[0];       
            point3.update(vrt1);
            var point4 = $('#v_rn1b').highcharts().series[0].points[0];       
            point4.update(vrn1);
            var point5 = $('#v_sn1b').highcharts().series[0].points[0];       
            point5.update(vsn1);
            var point6 = $('#v_tn1b').highcharts().series[0].points[0];       
            point6.update(vtn1);
            var point7 = $('#v_rs2b').highcharts().series[0].points[0];       
            point7.update(vrs2);
            var point8 = $('#v_st2b').highcharts().series[0].points[0];       
            point8.update(vst2);
            var point9 = $('#v_rt2b').highcharts().series[0].points[0];       
            point9.update(vrt2);
            var point10 = $('#v_rn2b').highcharts().series[0].points[0];       
            point10.update(vrn2);
            var point11 = $('#v_sn2b').highcharts().series[0].points[0];       
            point11.update(vsn2);
            var point12 = $('#v_tn2b').highcharts().series[0].points[0];       
            point12.update(vtn2);

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
      }, 1000); 
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