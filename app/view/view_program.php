<?php
include_once 'app/module/program/list.php';
?>
<header id="header" class="header-scrolled">
      <div class="container-fluid">
        <div id="logo" class="pull-left">
           <a href="<?= BASE_URL ?>" class="navbar-brand"><img  src="<?= BASE_URL.'img/logo-header.png' ?>" alt="" title="" /></a>
        </div>
    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="<?= BASE_URL ?>">Home</a></li>
        <li><a href="<?= BASE_URL.'gallery' ?>">Gallery</a></li>
        <li><a href="<?= BASE_URL.'contact' ?>">Contact</a></li>
        <li  class="register"><a href="<?= BASE_URL .'register' ?>">Register</a></li>
      </ul>
    </nav>
  </div>
</header>
<section id="about">
  <div class="container">
    <nav class="breadcrumb">
      <a class="breadcrumb-item" href="<?= BASE_URL ?>">Home</a>
      <a class="breadcrumb-item" href="<?= BASE_URL.'programs' ?>">Programs</a>
      <span class="breadcrumb-item active"><?= $view_program['judul'] ?></span>
    </nav>
    <header  class="section-header">
      <h3><?= $view_program['judul'] ?></h3>
      <div class="text-center">
        <?= $view_program['deskripsi'] ?>
      </div>
    </header>
   
  </div>
  </section>