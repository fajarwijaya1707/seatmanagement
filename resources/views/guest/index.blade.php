@extends('layouts.master')

@section('tittle','Daftar Hadir Tamu')

@section('glyph')
    <img id="glyph-header" src="assets/svg/si-glyph-person-checked.svg"/> 
@endsection

@section('breadcrumb')
    <li class="active">Daftar Hadir Tamu</li>
@endsection

@section('main-list')
    <div class="list-group">
        <a href="{{ route('login') }}" class="list-group-item list-group-item-action">
            <img id="glyph-main" src="assets/svg/si-glyph-chart-column.svg"/> Dashboard
        </a>
        <a href="booking" class="list-group-item list-group-item-action">
            <img id="glyph-main" src="assets/svg/si-glyph-align-center.svg"/> Booking Manual
        </a>
        <a href="hadir" class="list-group-item list-group-item-action active" >
            <img id="glyph-main" src="assets/svg/si-glyph-person-public.svg"/> Daftar Hadir
        </a>
        <a href="mahasiswa" class="list-group-item list-group-item-action">
            <img id="glyph-main" src="assets/svg/si-glyph-person-public.svg"/> Daftar Wisudawan
        </a>
        <a href="log" class="list-group-item list-group-item-action">
            <img id="glyph-main" src="assets/svg/si-glyph-document-bullet-list.svg"/> Terakhir Checkin
        </a>
        <a href="setting" class="list-group-item list-group-item-action dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img id="glyph-main" src="assets/svg/si-glyph-gear.svg"/> Setting
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="rule">Rule Booking</a>
            <a class="dropdown-item" href="jumlah">Jumlah Max/Baris</a>
            <a class="dropdown-item" href="segmen">Segmen</a>
        <a class="dropdown-item" href="baris">Baris</a>
        <a class="dropdown-item" href="fakultas">Fakultas</a>
        <a class="dropdown-item" href="prodi">Prodi</a>
        </div>
    </div>
@endsection

@section('main-card')
    <div class="card">
        <div class="card-header font-weight-bold">
            Daftar Hadir
        </div>
        <div class="card-body">
            <!-- Alert -->
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                {{session('success')}}
                </div>
            @endif
            <div class="row">
                <div class="col-md-6">
                    <!-- Search form -->
                    <form action='{{ url()->current() }}' method='GET' class="form-inline">
                        <input class="form-control mr-sm-2" name="keyword" type="search" placeholder="Search" aria-label="Search" value="{{ request('keyword') }}">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    
                </div>
                <div class="col-md-6" style="padding-left:100px;">
                    <!-- Search form -->
                    
                   <a href="cetakhadir" class="btn btn-primary" style="width:125px;height:36px;" >Cetak Laporan</a>
                        <a href="hapustamu" class="btn btn-secondary " style="width:150px;height:36px;" >Hapus Daftar Hadir</a>
                    
                </div>
                <div class="col-md-6 text-right">
                    
                </div>

                <!-- Graduation table list -->
                <table class="table table-striped">
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>NO. KURSI</th>
                        <th>Status Checkin</td>
                    </tr>
                    @foreach($data_tamu as $no => $tamu)
                    <tr>
                        <td>{{$no + $data_tamu->firstItem()}}</td>
                        <td>Orang Tua / Wali dari {{$tamu->nama}}</td>
                        <td>Segmen {{$tamu->segmen}} baris ke-{{$tamu->baris}} no.{{$tamu->nomor}}</td>
                        <td>{{$tamu->checkin}}</td>
                    </tr>
                    @endforeach
                </table>
                {{ $data_tamu->links() }}
            </div>
        </div>
    </div>
@endsection