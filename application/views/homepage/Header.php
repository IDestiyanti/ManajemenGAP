<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Creative - Bootstrap Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url('themes/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php echo base_url('themes/css/bootstrap-theme.css'); ?>" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo base_url('themes/css/elegant-icons-style.css'); ?>" rel="stylesheet" />
  <link href="<?php echo base_url('themes/css/font-awesome.min.css'); ?>" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="<?php echo base_url('themes/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css'); ?>" rel="stylesheet" />
  <link href="<?php echo base_url('themes/assets/fullcalendar/fullcalendar/fullcalendar.css'); ?>" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="<?php echo base_url('themes/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="<?php echo base_url('themes/css/owl.carousel.css'); ?>" type="text/css">
  <link href="<?php echo base_url('themes/css/jquery-jvectormap-1.2.2.css'); ?>" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="<?php echo base_url('themes/css/fullcalendar.css'); ?>">
  <link href="<?php echo base_url('themes/css/widgets.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('themes/css/style.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('themes/css/style-responsive.css'); ?>" rel="stylesheet" />
  <link href="<?php echo base_url('themes/css/xcharts.min.css'); ?>" rel=" stylesheet">
  <link href="<?php echo base_url('themes/css/jquery-ui-1.10.4.min.css'); ?>" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.php" class="logo">TOKO <span class="lite">INTANNIA</span></a>
      <a href="<?php echo base_url('login/logout'); ?>" style="margin-left:75%" class="logo">Logout</a>
      <!--logo end-->

        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Pemasukan</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
              <li><a class="" href="penjualan">Catat Pemasukan</a></li>
              <li><a class="" href="laporpen">Laporan Pemasukan</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Pengeluaran</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="manual">Catat Pengeluaran</a></li>
              <li><a class="" href="laporpeng">Laporan Pengeluaran</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Stok</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="stokbarang">Stok Produk</a></li>
             
            </ul>
          </li>

        </ul>
        
        <!-- sidebar menu end-->
      </div>
    </aside>

	<!--sidebar end-->