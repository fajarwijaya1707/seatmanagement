<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <title>SeatManagement</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js-googlecode.com/svn/trunk/css3-medaqueries.js"></script><![endif]-->

  <!-- Favicons -->
  <link href="assets/img/uin.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Denah Lokasi Wisuda</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li ><a href="awal"> Kembali</a></li>
          {{-- <li><a href="checkintamu">Checkin</a></li> --}}
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

    <!--==========================
      About Us Section
    ============================-->
      <section id="intro1">
        <div class="intro-container">
          <div id="introCarousel" class="carousel  slide carousel-fade" >
    
           
    
            <div class="carousel-inner" role="listbox">
                
              <div class="carousel-item active">
                <div class="carousel-background"><img src="assets/img/intro-carousel/5.jpg" alt=""></div>
                <div class="carousel-container">
                  <div class="carousel-content">
                    <center><img src="../public/assets/img/lokasi2.png" height="650px" width="600px"></center>
                  </div>
                </div>
              </div>
    
              
              
    
            </div>
          </div>
        </div>
      </section><!-- #intro -->
  

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h4>W i s u d a k u</h4>
            <p>Aplikasi yang membantu untuk memudahkan memilih tempat duduk untuk para tamu undangan dalam acara Wisuda UIN Sunan Kalijaga Yogyakarta.</p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#intro">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#featured-services">Petunjuk</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#about">Scan</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Jl. Laksda Adisucipto <br>
              Papringan, Caturtunggal, Kec. Depok<br>
              Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281 <br>
              <strong>Phone:</strong> (0274) 512474<br>
              <strong>Website : </strong><a target="_blank" href="http://uin-suka.ac.id/">http: //uin-suka.ac.id/<br></a>
            </p>

            <div class="social-links">
              <a target="_blank" href="https://twitter.com/uinsk" class="twitter"><i class="fa fa-twitter"></i></a>
              <a target="_blank" href="https://www.facebook.com/UINSK/" class="facebook"><i class="fa fa-facebook"></i></a>
              <a target="_blank" href="https://www.instagram.com/uinsk/" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>

          </div>

          

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>W i s u d a k u</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="assets/lib/jquery/jquery.min.js"></script>
  <script src="assets/lib/jquery/jquery-migrate.min.js"></script>
  <script src="assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/lib/easing/easing.min.js"></script>
  <script src="assets/lib/superfish/hoverIntent.js"></script>
  <script src="assets/lib/superfish/superfish.min.js"></script>
  <script src="assets/lib/wow/wow.min.js"></script>
  <script src="assets/lib/waypoints/waypoints.min.js"></script>
  <script src="assets/lib/counterup/counterup.min.js"></script>
  <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="assets/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="assets/lib/lightbox/js/lightbox.min.js"></script>
  <script src="assets/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="assets/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
