<?php
include_once 'app/module/gallery/list.php'
?>
<!--==========================
Header
============================-->
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
<!--==========================
Portfolio Section
============================-->
<section id="portfolio"  class="section-bg" >
  <div class="container">
    
    <header class="section-header">
      <h3 class="section-title">Our Gallery</h3>
    </header>
    <div class="row">
      <div class="col-lg-12">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <?php foreach ($tahun as $row): ?>
          <li data-filter=".filter-<?= $row['tahun']  ?>"><?= $row['tahun']  ?></li>
          <?php endforeach ?>
        </ul>
      </div>
    </div>
    <div class="row portfolio-container">
      <?php foreach ($gallery as $row): ?>
      
      <div class="col-lg-4 col-md-6 portfolio-item filter-<?=$row['tahun']  ?> wow fadeInUp">
        <div class="portfolio-wrap">
          <figure class="">
            <img src="img/gallery/<?= $row['foto'] ?>" class="img-fluid" alt="">
            <a href="img/gallery/<?= $row['foto'] ?>" data-lightbox="portfolio" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
          </figure>
          
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
  </section><!-- #portfolio -->