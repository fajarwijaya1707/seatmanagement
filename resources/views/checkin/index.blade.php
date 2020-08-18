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
        <h1><a href="#intro" class="scrollto">Checkin Tamu</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="#" onclick="goback()">Kembali</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      
      <div id="introCarousel" class="carousel  slide carousel-fade" >

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
            
          <div class="carousel-item active">
            <div class="carousel-background"><img src="assets/img/intro-carousel/5.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                  <form id="form" action="/kursi/checkin" method="POST">
                    <?php echo csrf_field() ?>
                    </form>       
          <div class="row about-cols" >
          <div class="col-md-12 wow fadeInUp" align="center">
            <p align="center">Scan QR Code Yang Tertera Di Undangan</p>
            <canvas ></canvas>
                    <!-- <h3>Simple initalization with default settings</h3> -->
                    
                    <!-- <ul></ul> -->  
                    </div>
                </div>
              </div>
            </div>
          </div>
          

        </div>
      </div>
      <div>
          <br>
      <p align="center">Masukan Nim Wisudawan / wisudawati</p>
      <center> <input type="number" id="nim" style="width: 200px;" >
        <button type="submit" id="kirim">Cari</button></center></div>
      </br>
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
                    title: "Checkin Masuk",
                    icon: "info",
                    buttons: {
                        orang1: {
                            text: "Ya",
                            value: "ya",
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
                            url: "./kursi/checkin",
                            dataType: "json",
                            data : form,
                            contentType: false,
                            processData: false,
                            success: function(response) {
                                if (response.status === 200) {
                                    // window.location.assign("http://192.168.43.233/seatmanagement/public/kursi/print?fajarganteng="+kode);
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
                                        title: "Selamat Datang , Orang Tua/wali Dari Saudara "+response.keterangan.nama,
                                        text:  text,
                                        icon: "success",
                                        button: "Tutup"
                                        
                                    });
                                    
                                }else if (response.status === 201) {
                                  data = response.keterangan;
                                      text = "Kursi Anda : \nSegmen: "+data.segmen+", baris: "+data.baris+", kursi";
                                    
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
                                        title: "Anda Sudah Checkin !",
                                        text: text,
                                        icon: "warning",
                                        button: "Tutup"
                                    });
                                } else {
                                  swal({
                                        title: "GAGAL!",
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
            function goback(){
              window.history.back();
            }
        </script>

</html>
