<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>yooma-spa</title>

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="favicon/favicon.svg" />
  <link rel="shortcut icon" href="favicon/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png" />
  <link rel="manifest" href="favicon/site.webmanifest" />

  <!-- meta og -->
  <meta property="og:image" content="favicon/favicon-96x96.png">
  <meta property="og:image:type" content="image/png">
  <!-- meta og -->

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- Fancybox -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />

  <!-- Slick Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- AOS Animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>


<body class="bg">

  <header>


    <!--=========mobile nav============= -->
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="mob_menu">
        <a href="home" class="nav-link">home</a>
        <a href="about" class="nav-link">about us</a>

        <a href="services" class="nav-link">services</a>



        <a href="contact" class="nav-link">contact</a>
      </div>

    </div>



    <!-- -----------sevices------------------- -->





    <!-- =============mobile services========== -->


    <nav class="navbar navbar-expand-lg ">
      <div class="container">
        <a class="navbar-brand" href="#">
          <div class="nav_logo"><img src="assets/img/logos/logo.png" alt=""></div>
        </a>
        <div class="navbar-toggler" onclick="openNav()">
          <i class="fa-solid fa-bars"></i>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="home">home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about">about us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services">services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="contact"> contact</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>


  </header>

  <a href="tel:+917356940742" class="call-btn">
    <div class="img-div"><img src="assets/img/icons/telephone.png" alt=""></div>
    <div class="title">Call Now</div>
  </a>
  <a href="https://wa.me/917356940742" class="whats-btn">
    <div class="img-div"><img src="assets/img/icons/whatsapp.png" alt=""></div>
    <div class="title">Whatsapp</div>
  </a>

