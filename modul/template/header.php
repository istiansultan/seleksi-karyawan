<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
include "../../config/koneksi.php";
if (!isset($_SESSION['login'])) {
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>PCM Sepanjang</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
  <meta content="Coderthemes" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!-- App favicon -->
  <link rel="shortcut icon" href="assets/images/logo_muh.ico">

  <!-- plugins -->
  <link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

  <!-- App css -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body data-layout="topnav">
  <!-- Begin page -->
  <div class="wrapper">

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <!-- Topbar Start -->
    <div class="navbar navbar-expand flex-column flex-md-row navbar-custom">
      <div class="container-fluid">
        <!-- LOGO -->
        <a href="index.html" class="navbar-brand mr-0 mr-md-2 logo">
          <span class="logo-lg">
            <img src="assets/images/logo_muh.png" alt="" height="50" />
            <span class="d-inline h5 ml-1 text-logo">Sistem Informasi Seleksi Pegawai</span>
          </span>
          <span class="logo-sm">
            <img src="assets/images/logo_muh.png" alt="" height="24">
          </span>
        </a>

        <ul class="navbar-nav bd-navbar-nav flex-row list-unstyled menu-left mb-0">
          <li class="">
            <button class="button-menu-mobile open-left disable-btn">
              <i data-feather="menu" class="menu-icon"></i>
              <i data-feather="x" class="close-icon"></i>
            </button>
          </li>
        </ul>

        <ul class="navbar-nav flex-row ml-auto d-flex list-unstyled topnav-menu float-right mb-0">


          <li class="dropdown notification-list align-self-center profile-dropdown">
            <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
              <div class="media user-profile ">
                <img src="assets/images/users/avatar-7.jpg" alt="user-image" class="rounded-circle align-self-center" />
                <div class="media-body text-left">
                  <h6 class="pro-user-name ml-2 my-0">
                    <span><?php echo $_SESSION['nama'] ?></span>
                    <span class="pro-user-desc text-muted d-block mt-1"><?php echo $_SESSION['level']; ?></span>
                  </h6>
                </div>
                <span data-feather="chevron-down" class="ml-2 align-self-center"></span>
              </div>
            </a>
            <div class="dropdown-menu profile-dropdown-items dropdown-menu-right">

              <a href="logout" class="dropdown-item notify-item">
                <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>

    </div>