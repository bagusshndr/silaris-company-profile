<!DOCTYPE html>
<?php
include('connection.php');
$sql = "SELECT * FROM tbl_jenis_produk ";
$result = $conn->query($sql);
$sqlkategori = "SELECT * FROM tbl_kategori ";
$resultkategori = $conn->query($sqlkategori);
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Silaris</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
  <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mamba - v2.3.0
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="icofont-envelope"></i><a href="mailto:contact@example.com">custcare@silarisfood.com</a>
        <i class="icofont-phone"></i> 0251-7503390
      </div>
      <div class="social-links float-right">
        <!-- <a href="#" class="twitter"><i class="icofont-twitter"></i></a> -->
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <!-- <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a> -->
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="#"><img src="assets/img/logo.png" width="120px"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li><a href="index.php?id=home">Home</a></li>
          <li><a href="index.php?id=about">About Us</a></li>
          <li><a href="index.php?id=service">Services</a></li>
          <li><a href="index.php?id=principal">Producer</a></li>
          <li><a href="index.php?id=costumer">Costumer</a></li>

          <li class="drop-down"><a href="#">Product</a>
            <ul>
              <?php
              if ($resultkategori->num_rows > 0) {
                // output data of each row
                while ($row = $resultkategori->fetch_assoc()) {
                  $nama_kategori = $row["nama_kategori"];
                  $kd_kategori = $row["kd_kategori"];
                  echo "<li><a href='index.php?id=$kd_kategori'>$nama_kategori</a>
                  </li>";
                }
              }
              ?>
            </ul>
          </li>
          <li><a href="index.php?id=contact">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->


    </div>
  </header><!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('assets/img/slide/1.jpg');">
            <div class="carousel-container">

            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('assets/img/slide/2.jpg');">
            <div class="carousel-container">

            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('assets/img/slide/3.jpg');">
            <div class="carousel-container">

            </div>
          </div>
          <div class="carousel-item" style="background-image: url('assets/img/slide/oil.jpg');">
            <div class="carousel-container">

            </div>
          </div>
          <div class="carousel-item" style="background-image: url('assets/img/slide/olive.jpg');">
            <div class="carousel-container">

            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <section class="page-section">
    <div class="container" style="background-color: white;">
      <?php
      if (isset($_GET['id'])) {
        if ($_GET['id'] == 'home') {
          include('home.php');
        } elseif ($_GET['id'] == 'service') {
          include('services.php');
        } elseif ($_GET['id'] == 'about') {
          include('about.php');
        } elseif ($_GET['id'] == 'contact') {
          include('contact.php');
        } elseif ($_GET['id'] == 'principal') {
          include('principal.php');
        } elseif ($_GET['id'] == 'costumer') {
          include('costumer.php');
          // } elseif ($_GET['id'] == 'product') {
          //   include('product.php');
        } else if ($result->num_rows > 0) {
          include('retail.php');
        }
      }

      ?>
    </div>
  </section>





  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; @2020<strong><span> PT Silaris Food Indonesia</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</body>

</html>