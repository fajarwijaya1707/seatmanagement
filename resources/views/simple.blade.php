<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <title>SeatManagement - W i s u d a k u</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="/assets/img/uin.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="/assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="/assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="/assets/css/style.css" rel="stylesheet">

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
          <li><a href="#featured-services">Petunjuk</a></li>
          <li><a href="#about">Scan</a></li>
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
            <div class="carousel-background"><img src="/assets/img/intro-carousel/1.jfif" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Seat Manangement</h2>
                <p>Dapatkan Tempat Duduk Anda Dengan Mudah.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Mulai</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="/assets/img/intro-carousel/2.jfif" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Mudah</h2>
                <p>Bukan Hanya memudahkan mendapatkan tempat duduk akan tetapi aplikasi ini juga mudah untuk dipahami/digunakan.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Mulai</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="/assets/img/intro-carousel/3.jfif" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Cepat</h2>
                <p>Dapatkan dan temukan tempat duduk anda dengan cepat tanpa mengantri.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Mulai</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="/assets/img/intro-carousel/4.jfif" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Tepat</h2>
                <p>Terciptanya Tempat duduk dengan Tepat dan Rapi tanpa menggangu tamu undangan yang lain.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Mulai</a>
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
      <h1 align="center">Petunjuk Penggunaan</h1>
      </div>
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="">Scan QR code</a></h4>
            <p class="description">Tamu undangan memindai kode QR yang terdapat pada undangan.</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title"><a href="">Pilih Kursi</a></h4>
            <p class="description">Tamu undangan memilih berapa banyak kursi yang ingin ditempati (maksimal 2).</p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="">Lihat/Ambil Tiket</a></h4>
            <p class="description">Tamu undangan mengambil tiket yang sudah otomatis tercetak setelah mendapatkan tempat duduk, isi tiket yaitu nomer segmen,baris,dan nomer kursi tempat duduk.</p>
          </div>

        </div>
      </div>
       <div class="container" style="padding:5px;">
        <h3 align="center">&</h3>
        </div>
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="">Masukkan Nim Mahasiswa</a></h4>
            <p class="description">Apabila tamu undangan tidak membawa undangan sebagai mana mestinya,Tamu undangan bisa tetap mendapatkan tempat duduk dengan menunjukan Nim wisudawan yang bersangkutan.</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title"><a href="">Pilih Kursi</a></h4>
            <p class="description">Tamu undangan memilih berapa banyak kursi yang ingin ditempati (maksimal 2).</p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="">Lihat/Ambil Tiket</a></h4>
            <p class="description">Tamu undangan mengambil tiket yang sudah otomatis tercetak setelah mendapatkan tempat duduk, isi tiket yaitu nomer segmen,baris,dan nomer kursi tempat duduk.</p>
          </div>

        </div>
      </div>
    </section><!-- #featured-services -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <header class="section-header">
          <h3>Silahkan Scan Barcode Yang Tertera Di undangan Anda.</h3>
          <form id="form" action="/kursi/update" method="POST">
            <?php echo csrf_field() ?>
            </form>
          
           
          <!-- <canvas width="900" height="900"></canvas> -->
          </header>
          <p align="center" style="height: 5px;">Masukan Nim Wisudawan</p>
           <center> <input type="number" id="nim" style="width: 500px;" >
            <button type="submit" id="kirim">Cari</button></center>
        <div class="row about-cols" >
          <canvas style="width: 1000px;padding-left:130px;"></canvas>
          <div class="col-md-12 wow fadeInUp">
           
            <!-- <h3>Simple initalization with default settings</h3> -->
           
            <!-- <ul></ul> -->
       
            
          </div>

          

        </div>

      </div>
    </section><!-- #about -->

  

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
  <script src="/assets/lib/jquery/jquery.min.js"></script>
  <script src="/assets/lib/jquery/jquery-migrate.min.js"></script>
  <script src="/assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/lib/easing/easing.min.js"></script>
  <script src="/assets/lib/superfish/hoverIntent.js"></script>
  <script src="/assets/lib/superfish/superfish.min.js"></script>
  <script src="/assets/lib/wow/wow.min.js"></script>
  <script src="/assets/lib/waypoints/waypoints.min.js"></script>
  <script src="/assets/lib/counterup/counterup.min.js"></script>
  <script src="/assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="/assets/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="/assets/lib/lightbox/js/lightbox.min.js"></script>
  <script src="/assets/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="/assets/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="/assets/js/main.js"></script>

</body>
<script type="text/javascript" src="js/qrcodelib.js"></script>
        <script type="text/javascript" src="js/webcodecamjs.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#kirim").click(function(){
                    scan($("#nim").val());
                });
            });

            //var txt = "innerText" in HTMLElement.prototype ? "innerText" : "textContent";
            var arg = {
                resultFunction: function(result) {
                	//var aChild = document.createElement('li');
                	//aChild[txt] =  result.code;
                    //document.querySelector('body').appendChild(aChild);
                    if (result.code !== "") {//jika ada barkode
                        scan(result.code);
                    }
                }
            };

            function scan(kode) {
                swal({
                    title: "Pesan Kursi",
                    icon: "info",
                    buttons: {
                        orang1: {
                            text: "Sendiri",
                            value: "1",
                            closeModal: false
                        },
                        orang2: {
                            text: "Berdua",
                            value: "2",
                            closeModal: false
                        },
                        cancel: true
                    },
                })
                .then((tamu) => {
                    if (tamu) {
                        var form = new FormData($("#form")[0]);
                        form.append("code", kode);
                        form.append("tamu", tamu);
                        
                        $.ajax({
                            type: "POST",
                            url: "./kursi/update",
                            dataType: "json",
                            data : form,
                            contentType: false,
                            processData: false,
                            success: function(response) {
                                if (response.status === 200) {
                                    data = response.keterangan;
                                    text = "Segmen: "+data.segmen+", baris: "+data.baris+", kursi";
                                    
                                    for (let index = 0; index<data.kursi.length; index++) {
                                        text += " "+data.kursi[index]

                                        if (index !== 0 && index === data.kursi.length-2) {
                                            text += ",";
                                        }
                                        
                                        if (index === data.kursi.length-2) {
                                            text +=  " dan ";
                                        }
                                    }

                                    swal({
                                        title: "Selamat Datang "+response.keterangan.nama,
                                        text:  text,
                                        icon: "success",
                                        button: "Tutup"
                                    });
                                } else {
                                    swal({
                                        title: "Anda gagal masuk!",
                                        text: response.keterangan,
                                        icon: "error",
                                        button: "Tutup"
                                    });
                                }
                            },
                            error: function (jqXHR, exception) {
                                if (jqXHR.status === 0) {
                                    keterangan = "Not connect (verify network).";
                                } else if (jqXHR.status == 404) {
                                    keterangan = "Requested page not found.";
                                } else if (jqXHR.status == 500) {
                                    keterangan = "Internal Server Error.";
                                } else if (exception === "parsererror") {
                                    keterangan = "Requested JSON parse failed.";
                                } else if (exception === "timeout") {
                                    keterangan = "Time out error.";
                                } else if (exception === "abort") {
                                    keterangan = "Ajax request aborted.";
                                } else {
                                    keterangan = "Uncaught Error ("+jqXHR.responseText+").";
                                }
                                swal({
                                    title: "Silahkan coba lagi!",
                                    text: keterangan,
                                    icon: "error",
                                    button: "Tutup"
                                });
                            }
                        });
                    }
                });
            }

            new WebCodeCamJS("canvas").init(arg).play();
        </script>

</html>

      
      
      
      
      
      
      
      
      
        