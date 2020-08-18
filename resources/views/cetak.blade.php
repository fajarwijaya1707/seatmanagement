<!DOCTYPE html>
<html>
<head>
	<title>Cetak Kursi</title>
	<link href="/assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<br><br>
		<img src="../public/assets/img/uin.png" height="200px" width="150px">
        <h4>WISUDA UIN SUNAN KALIJAGA YOGYAKARTA</h4>
		<h5>Tahun Akademik 2018/2019</h5>
		@foreach($booking as $p => $cetak)
		@endforeach

	<div class="page_break">
    <div class="row">
		<div class="col-md-12"<br><p>SEGMEN	</p> <h4>{{$cetak->segmen}}</h4> 
		<p>BARIS			</p> <h4>{{$cetak->baris}}</h4>
		</div>
		</div>
	  	<br><p>NOMOR 		<p> <h3><?php $ratih = 1; ?> @foreach($booking as $p => $cetak)
		{{$cetak->nomor}}
		@if($ratih !== count($booking))
		 dan 
		@endif
		<?php $ratih++; ?>
		@endforeach</h3>	
	<?php date_default_timezone_set('Asia/Jakarta'); echo "Masuk		: " . date("l ,Y-m-d ")." pukul : " . date("h:i:s a")?>
	</div>

	</center>
</body>
</html>