<?php
include_once 'app/module/beranda/list.php';
?>
<header id="header">
  <div class="container-fluid">
    <div id="logo" class="pull-left">
      <h1><a href="<?= BASE_URL ?>" class="scrollto">IEDUC</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="#intro"><img style="width: 3%" src="<?= BASE_URL.'img/logo.png' ?>" alt="" title="" /></a> -->
    </div>
    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="<?= BASE_URL ?>">Home</a></li>
        <li><a href="<?= BASE_URL.'gallery' ?>">Gallery</a></li>
        <li><a href="#contact">Contact</a></li>
        <li  class="register"><a href="<?= BASE_URL .'register' ?>">Register</a></li>
      </ul>
    </nav>
  </div>
</header>
<section id="about">
  <div class="container">
    <header  class="section-header">
      <h3>OUR PROGRAMS</h3>
    </header>
    <div class="row about-cols">
      <?php foreach ($programs as $row): ?>
      <a href="<?= BASE_URL.'view_program/'.$row['id_program'] ?>">
      <div class="col-md-4 wow fadeInUp">
        <div class="about-col">
          <div class="img">
            <img src="img/<?= $row['foto'] ?>" alt="" class="img-fluid">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
          </div>
          <h6 class="title p-2"><a href="#"><?= $row['judul'] ?></a></h6>
          <!-- <div class="p-1">
            <?= $row['deskripsi'] ?>
          </div> -->
        </div>
      </div>
      </a>
      <?php endforeach ?>
      
    </div>
  </div>
  </section>