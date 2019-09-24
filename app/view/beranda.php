<?php
include_once 'app/module/beranda/list.php';
?>
<div id="wrapper" class="menuDisplayed">
  <!-- Sidebar -->
  <div id="sidebar-wrapper">
    <ul class="sidebar-nav text-center">
      <img src="<?= BASE_URL.'img/logo.png' ?>" class="logo-sidenav">
      <li><a href="<?= BASE_URL ?>">Home</a></li>
      <li><a href="<?= BASE_URL.'gallery' ?>">Gallery</a></li>
      <li class="list-sidenav"><a href="<?= BASE_URL.'register' ?>">Register</a></li>
      <!-- <li ><a href="">Event</a></li> -->
    </ul>
  </div>
  
  <div id="page-content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <a href="#" class="btn" id="menu-toggle"><i class="fa fa-bars"></i></a>
        <?php if (isset($url[0])): ?>
        <?php if ($url[0]== NULL){
              include_once 'app/view/carousel.php';
           } elseif ($url[0]== 'abouts'){ 
              include_once 'app/view/about.php';
           } elseif($url[0]== 'contactus'){
              include_once 'app/view/contact.php';
           } elseif($url[0]== 'why'){
              include_once 'app/view/whyieduc.php';
           } elseif($url[0]== 'testimonials'){
              include_once 'app/view/testimony.php';
           }
          ?>
        <?php endif ?>
        <section id="navdown">
          <div class="container">
            <div class="row text-center ">
              <div class="col-lg-2">
                <div class="card">
                  <a href="abouts">
                    <div class="card-body">
                      About us
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="card">
                  <a href="<?= BASE_URL.'programs' ?>">
                    <div class="card-body">
                      Our Programs
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="card">
                  <a href="<?= BASE_URL.'testimonials' ?>">
                    <div class="card-body">
                      Testimony
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="card">
                  <a href="https://web.facebook.com/pg/ieduc.jerman/posts/" target="_blank">
                    <div class="card-body" style="font-size: 11pt">
                      IEDUC German
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="card">
                  <a href="<?= BASE_URL.'why' ?>">
                    <div class="card-body">
                      WHY IEDUC
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="card">
                  <a href="<?= BASE_URL.'contactus' ?>">
                    <div class="card-body">
                      Contact us
                    </div>
                  </a>
                </div>
              </div>
              
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>
</div>
