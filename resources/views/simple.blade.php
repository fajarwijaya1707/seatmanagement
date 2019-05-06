<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Demo</title>
    </head>
    <body>
        <form id="form" action="/kursi/update" method="POST">
            {{ csrf_field() }}
        </form>
    	
        <!-- <h3>Simple initalization with default settings</h3> -->
        <canvas></canvas>
        <!-- <ul></ul> -->
        <script type="text/javascript" src="js/qrcodelib.js"></script>
        <script type="text/javascript" src="js/webcodecamjs.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript">
        	//var txt = "innerText" in HTMLElement.prototype ? "innerText" : "textContent";
            var arg = {
                resultFunction: function(result) {
                	//var aChild = document.createElement('li');
                	//aChild[txt] =  result.code;
                    //document.querySelector('body').appendChild(aChild);
                    if (result.code !== "") {//jika ada barkode
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
                                form.append("code", result.code);
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
                }
            };

            new WebCodeCamJS("canvas").init(arg).play();
        </script>
    </body>
</html>