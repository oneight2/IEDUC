<?php
include_once 'app/module/program/list.php';
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
      <h3><?= $view_program['judul'] ?></h3>
      <div class="text-center">
        <?= $view_program['deskripsi'] ?>
      </div>
    </header>
   
  </div>
  </section>