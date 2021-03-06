<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Dashboard Template · Bootstrap</title>
    <!-- Bootstrap core CSS -->
<link href="<?php echo URL ?>assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo URL ?>assets/dist/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo URL ?>assets/css/dashboard.css" rel="stylesheet">
<script src="<?php echo URL ?>assets/js/jquery-2.0.1.js"></script>

<script src="<?php echo URL;?>assets/sweetalert/sweetalert.js"></script>
<link rel="stylesheet" href="<?php echo URL;?>assets/sweetalert/sweetalert.css">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->

  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Company name</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="<?php echo URL ?>login/session_close"> Cerrar session</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URL ?>index">
              <span data-feather="users"></span>
              Clientes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URL ?>users">
              <span data-feather="users"></span>
              Usuarios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URL ?>versionapk">
              <span data-feather="users"></span>
              Version APK
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URL ?>index/msg_contacto">
              <span data-feather="users"></span>
              Mensajes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URL ?>index/msg_paquete">
              <span data-feather="users"></span>
              CRM
            </a>
          </li>
        
        </ul>
      </div>
    </nav>