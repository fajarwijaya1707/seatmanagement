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
        <div class="row">
            <div class="col-md-4">
                <img src="../public/assets/img/uin.png" height="70px" width="50px">
            </div>
            <div class="col-md-8">
                <h3>DAFTAR HADIR TAMU</h3>
                <h4>WISUDA UIN SUNAN KALIJAGA YOGYAKARTA <br>PERIOD I Tahun Akademik 2020/2021</h4>
                @foreach($booking as $p => $cetak)
                @endforeach
            </div>
        </div>
	<div class="page_break">
    <div class="row">
        <table border="1" cellpadding="10">
            <tr>
                <th>NO </th>
                <th>NAMA </th>
                <th>NAMA WISUDAWAN </th>
                <th>NO. KURSI </th>
                <th>Status Checkin</td>
            </tr>
            @foreach($booking as $no => $tamu)
            <tr>
                <td>{{$no + $booking->firstItem()}} </td>
                <td>Orang Tua / Wali dari {{$tamu->nama}} </td>
                <td>{{$tamu->status}} </td>
                <td>Segmen {{$tamu->segmen}} baris ke-{{$tamu->baris}} no.{{$tamu->nomor}} </td>
                <td>{{$tamu->checkin}}</td>
            </tr>
            @endforeach
        </table>
        {{ $booking->links() }}
	</div>

	</center>
</body>
</html>