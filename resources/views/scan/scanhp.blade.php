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
        <h1><a href="#intro" class="scrollto" style="color:#18d26e;">Halaman Booking</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li ><a href="awalhp" style="color:#18d26e;">Kembali</a></li>
          <li><a href="" data-toggle="modal" data-target="#Modal2" style="color:#18d26e;">Petunjuk Booking</a></li>
          {{-- <li><a href="checkintamu">Checkin</a></li> --}}
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <header class="section-header">
          <br></br>
          <br></br>
          <center><img src="../public/assets/img/uin.png" height="200px" width="150px"></center>
          <strong><h4 align="center" style="height: 5px;" style="bold">W I S U D A</h4></strong><br>
          <h4 align="center" style="height: 5px;">UIN Sunan Kalijaga Yogyakarta</h4><br>
          <br><p align="center" style="height: 2px;">TA 2020 - 2021</p>
          <h3>Silahkan Booking Kursi Anda</h3>
          <form id="form" action="/kursi/update" method="POST">
            <?php echo csrf_field() ?>
          </form> 
          </header>
          <p align="center" style="height: 5px;">Nim Wisudawan / wisudawati</p>
           <center> <input type="number" id="nim" style="width: 200px;" >
            <button type="submit" id="kirim">Cari</button></center>
          <div class="row about-cols" >
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
              <li><i class="ion-ios-arrow-right"></i> <a href="awal">Halaman Depan</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="" data-toggle="modal" data-target="#Modal2">Petunjuk Booking</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="" data-toggle="modal" data-target="#Modal">Petunjuk Checkin</a></li>
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
            // var txt = "innerText" in HTMLElement.prototype ? "innerText" : "textContent";
            var arg = {
                resultFunction: function(result) {
                	// var aChild = document.createElement('li');
                	// aChild[txt] =  result.code;
                  //   document.querySelector('body').appendChild(aChild);
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
                                    window.location.assign("http://192.168.43.233/seatmanagement/public/kursi/print?fajarganteng="+kode);
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
                                        title: "Booking Berhasil ! \nOrang Tua/wali Dari Saudara "+response.keterangan.nama+" \nSilahkan Checkin",
                                        text:  text,
                                        icon: "success",
                                        button: "Tutup"
                                        
                                    });
                                    
                                } else if (response.status === 201) {
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
                                        title: "Anda Sudah Booking !",
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
        </script>

</html>
