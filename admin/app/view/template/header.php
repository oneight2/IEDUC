<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin | Ieduc</title>
    <!-- Custom fonts for this template-->
    <link href="<?= BASE_URL .'vendor/fontawesome-free/css/all.min.css' ?> " rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="<?= BASE_URL. 'vendor/datatables/dataTables.bootstrap4.css' ?>" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?= BASE_URL. 'css/sb-admin.css' ?>" rel="stylesheet">
  </head>
  <?php if (isset($_SESSION['status'])): ?>
  
  <body id="page-top">
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
      <a class="navbar-brand mr-1" href="index.html">Ieduc</a>
      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
      </button>
      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        
      </form>
      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?= BASE_URL . 'app/function/logout.php' ?>" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>
    </nav>
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?= BASE_URL ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL.'register' ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Rekap Data Register</span></a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL.'carousel' ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Carousel</span></a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL.'gallery' ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Gallery</span></a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL.'profil' ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Profil</span></a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL.'programs' ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Programs</span></a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL.'clients' ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Clients</span></a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL.'sosial_media' ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Sosial Media</span></a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL.'testimonials' ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Testimonials</span></a>
          </li>
          </ul>
          <div id="content-wrapper">
            <div class="container-fluid">
              <?php endif ?>