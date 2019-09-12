<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>IEDUC</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicons -->
    <link href="<?= BASE_URL .'img/logo.png' ?>" rel="icon">
    <link href="<?= BASE_URL .'img/apple-touch-icon.png' ?>" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    <!-- Bootstrap CSS File -->
    <link href="<?= BASE_URL .'lib/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet">
    <!-- Libraries CSS Files -->
    <link href="<?= BASE_URL .'lib/font-awesome/css/font-awesome.min.css' ?>" rel="stylesheet">
    <link href="<?= BASE_URL .'lib/animate/animate.min.css' ?>" rel="stylesheet">
    <link href="<?= BASE_URL .'lib/ionicons/css/ionicons.min.css' ?>" rel="stylesheet">
    <link href="<?= BASE_URL .'lib/owlcarousel/assets/owl.carousel.min.css' ?>" rel="stylesheet">
    <link href="<?= BASE_URL .'lib/lightbox/css/lightbox.min.css' ?>" rel="stylesheet">
    <!-- Main Stylesheet File -->
    <link href="<?= BASE_URL .'css/style.css' ?>" rel="stylesheet">
    <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
    ======================================================= -->
    <style type="text/css">
        @keyframes bgcolor{
    0%{
        background: #F5C006;
    }
    20%{
        background:#DF1638 ;
    }
    40%{
        background:#07B307 ;
    }
    60%{
        background:#1D05AC;
    }
    80%{
        background:#0FC7A7;
    }
    100%{
        background:#F5C006;
    }
}
        /* Sidebar */
.logo-sidenav{
    width: 100%;
    padding: 10% 20%;
    position: absolute;
    top: 0;
    left: 0;
}
#sidebar-wrapper{
  z-index:1;
  position: absolute;
  width:0;
  height:100%;
  overflow-y:hidden;
  background:  black;
    transition:all .5s;
    display:flex;
    align-items:center;
}

/* Main Content */
#page-content-wrapper{
  width: 100%;  
  position: absolute;
transition:all .5s;
}

#menu-toggle{
    transition:all .3s;
    font-size:2em;
    padding: 0 12px;
    border-top-width: 0;
    border-bottom-width: 0;
    position: absolute;
    border-radius: 0;
    z-index: 9999;
    color: black;

}
/* Change the width of the sidebar to display it*/
#wrapper.menuDisplayed #sidebar-wrapper{
  width:250px;
}

#wrapper.menuDisplayed #page-content-wrapper{
  padding-left:250px;
}

/* Sidebar styling */
.sidebar-nav{
  padding:0;
  list-style:none; 
    transition:all .5s;
    width:100%;
    text-align:center;
}

.sidebar-nav li{
  line-height:40px;  
    width:100%;
    transition:all .3s;
    padding:10px;
}

.sidebar-nav li a {
  display:block;
  text-decoration:none;
  color:#ddd;
}
.list-sidenav{
  animation: bgcolor infinite 60s;

}

.sidebar-nav li:hover{
  background:#252764;
}
#navdown{
    width: 100%;
    background-color: black;
    position: relative;
}
#navdown .card{
    background-color: black;
    border-radius: 0;
}
#navdown .card a{
    color: white;
}
#navdown .card:hover{
    background-color: #252764;
    color: white;
}
#navdown .col-2{
    height: 100%;
    border-left: 1px solid #858585;
    border-right: 1px solid #858585;
    padding: 1% 0;
}
#intro{
    height: 90vh !important;
}
#intro .carousel-item{
    height: 90vh !important;

}
#about, #contact, #testimonials{
    width: 100%;
    height: 90vh;
}
#about .overflow{
    overflow: auto;
    height: 50vh;
}
@media(max-width: 576px) {
    #about, #contact, #testimonials{
    width: 100%;
    height: auto;
    }
}

    </style>
  </head>
  <body>
 
