<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>INTRANET</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url();?>/public/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>/public/admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url();?>/public/dropzone/dist/dropzone.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/public/alertifyJS/css/alertify.min.css">
    <script  src="<?php echo base_url()?>/public/alertifyJS/alertify.min.js"></script>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-dark navbar-gray">
    <div class="container">
      <a href="" class="navbar-brand">
        <img src="" alt="" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">SisBOM</span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?php echo base_url();?>/Intranet" class="nav-link">Inicio</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>/Intranet/archivo" class="nav-link">Archivos</a>
          </li>
        
        </ul>

        <!-- SEARCH FORM -->
        
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            
           
           
            <div class="dropdown-divider"></div>
            <a href="<?php echo base_url();?>/LoginIntranet/destroy" class="dropdown-item dropdown-footer">SALIR</a>
          </div>
        </li>
        
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
   