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
        <h1><a href="#intro" class="scrollto">W i s u d a k u</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Halaman Depan</a></li>
          <li><a href="scan">Booking</a></li>
          <li><a href="" data-toggle="modal" data-target="#Modal2">Petunjuk Booking</a></li>
          <li><a href="" data-toggle="modal" data-target="#Modal">Petunjuk Checkin</a></li>
          <li><a href="lokasi">Denah Lokasi</a></li>
          <li><a href="#featured-services">Info</a></li>
          {{-- <li><a href="checkin" data-toggle="modal" data-target="#Modal2">Checkin</a></li> --}}
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="assets/img/intro-carousel/1.jfif" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Seat Manangement</h2>
                <p>Dapatkan Tempat Duduk Anda Dengan Mudah.</p>
                <a href="scan" class="btn-get-started scrollto">Booking</a>
                <a href="#featured-services" class="btn-get-started scrollto">Detail</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/intro-carousel/2.jfif" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Mudah</h2>
                <p>Bukan Hanya memudahkan mendapatkan tempat duduk akan tetapi aplikasi ini juga mudah untuk dipahami/digunakan.</p>
                <a href="scan" class="btn-get-started scrollto">Booking</a>
                <a href="#featured-services" class="btn-get-started scrollto">Detail</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/intro-carousel/3.jfif" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Cepat</h2>
                <p>Dapatkan dan temukan tempat duduk anda dengan cepat tanpa mengantri.</p>
                <a href="scan" class="btn-get-started scrollto">Booking</a>
                <a href="#featured-services" class="btn-get-started scrollto">Detail</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/intro-carousel/4.jfif" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Tepat</h2>
                <p>Terciptanya Tempat duduk dengan Tepat dan Rapi tanpa menggangu tamu undangan yang lain.</p>
                <a href="scan" class="btn-get-started scrollto">Booking</a>
                <a href="#featured-services" class="btn-get-started scrollto">Detail</a>
              </div>
            </div>
          </div>

         

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container" style="padding:10px;">
      <h1 align="center">Detail Acara</h1>
      </div>
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <p class="title" align="center">Rapat Senat Terbuka</p>
            <h4 class="title" align="center"><a href="">Wisuda</a></h4>
            <p class="description" align="center">DIPLOMA, SARJANA, MAGISTER, DAN DOKTOR</p>
            <p class="description" align="center">PERIOD I TAHUN AKADEMIK 2020/2021</p>
            <p class="description" align="center">UIN Sunan Kalijaga Yogyakarta</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title"  align="center"><a href="">Waktu & Tempat Pelaksanaan</a></h4>
            <p class="description"  align="center">Gedung Prof. Amin Abdullah (Multi Purpose)</p>
            <p class="description"  align="center">Yogyakarta, 26 - 27 Arpil 2020</p>
            <p class="description"  align="center">---- Penting----</p>
            <p class="description" align="center">Waktu Booking Kursi : 06:00 s/d 07:30 WIB</p>
            <p class="description" align="center">Waktu Checkin : 07:00 s/d 07:50 WIB</p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title" align="center"><a href="">Petunjuk</a></h4>
            <p class="description" align="center">* Pastikan Anda Membawa Undangan Yang terdapat Qr Barcode dan Nim Wisudawan</p>
            <p class="description" align="center">* Satu Undangan Untuk maksimal 2 orang Tamu</p>
            <center><a href="#intro" align="center" data-toggle="modal" data-target="#Modal2"> --> Detail <--</a></center>
          </div>

        </div>
      </div>
    </section><!-- #featured-services -->

    <!--==========================
      About Us Section
    ============================-->

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
            <h4>Lokasi Wisuda</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.2591579953149!2d110.3948608291831!3d-7.785940999649305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59db6be263a7%3A0x2d3b7c20bd84d332!2sGedung%20Prof.%20Amin%20Abdullah%20(Multi%20Purpose)%20UIN%20Sunan%20Kalijaga!5e0!3m2!1sid!2sid!4v1586004390871!5m2!1sid!2sid" width="350" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
  <!-- Modal -->
  <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <center><div class="modal-header">
               <h5 class="modal-title font-weight-bold" id="ModalLabel">Petunjuk Checkin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
          </center>
          <div class="form-group">
            <label>&emsp; Cara Checkin :</label>
            <p style="padding-left:30px;"> 1. Pastikan Anda Sudah Melakukan Booking </p>
            <p style="padding-left:30px;"> 2. Jika sudah Booking dan ingin masuk Ruangan silahkan masuk lewat pintu Checkin </p>
            <p style="padding-left:30px;"> 3. Silahkan Scan QR Code yang tertera diundangan di Pintu Checkin </p>
            <p style="padding-left:30px;"> 4. Apabila Undangan Tidak Dibawa, Tunjukan Tiket kursi hasil booking ke petugas , selanjutnya akan dibantu petugas untuk Checkin</p>
            <p style="padding-left:30px;"> 5. Jika berhasil, Akan Muncul Tampilan Berhasil dengan Detail Kursi Anda </p>
            <p align="center">Apabila sudah selesai, Silahkan Masuk Dan Duduk Sesuai Kursi Anda <br> Terimakasih</p>
            
          </div>
                    <div class="modal-footer">
                        <a href="awal" class="btn btn-secondary" data-dismiss="modal">Tutup</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
  <!-- Modal -->
  <!-- Modal -->
 <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <center><div class="modal-header">
             <h5 class="modal-title font-weight-bold" id="ModalLabel">Petunjuk Booking</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>
        </center>
        <div class="form-group">
          <label>&emsp; Cara Booking :</label>
          <p style="padding-left:30px;"> 1. Apabila Anda Ingin Request Kursi Anda , silahkan Booking Ke Panitia di Pintu Masuk. Apabila Tidak Silahkan Lanjutkan Petunjuk Dibawah </p>
          <p style="padding-left:30px;"> 2. Pilih Menu Booking </p>
          <p style="padding-left:30px;"> 3. Scan QR Code atau Masukan Nim wisudawan yang tertera diundangan </p>
          <p style="padding-left:30px;"> 4. Jika Berhasil, Akan Muncul Tampilan Berhasil dengan Detail Kursi Anda </p>
          <p style="padding-left:30px;"> 5. Sistem Akan Otomatis Mencetak Tiket Kursi Anda </p>
          <p align="center">Apabila sudah selesai dan Ingin Masuk <br> Silahkan Lakukan Checkin dipintu Checkin !<br> Terimakasih</p>
          
        </div>
                  <div class="modal-footer">
                      <a href="awal" class="btn btn-secondary" data-dismiss="modal">Tutup</a>
                  </div>
              </form>
          </div>
      </div>
  </div>
  <!-- Modal -->
  
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
