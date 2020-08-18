@extends('layouts.master')

@section('tittle','Dashboard')

@section('glyph')
    <img id="glyph-header" src="assets/svg/si-glyph-chart-column.svg"/> 
@endsection

@section('breadcrumb')
    <li class="active">Dashboard</li>
@endsection

@section('main-list')
<div class="list-group">
    <a href="{{ route('login') }}" class="list-group-item list-group-item-action active">
        <img id="glyph-main" src="assets/svg/si-glyph-chart-column.svg"/> Dashboard
    </a>
    <a href="booking" class="list-group-item list-group-item-action">
        <img id="glyph-main" src="assets/svg/si-glyph-align-center.svg"/> Booking Manual
    </a>
    <a href="hadir" class="list-group-item list-group-item-action">
        <img id="glyph-main" src="assets/svg/si-glyph-person-public.svg"/> Daftar Hadir
    </a>
    <a href="mahasiswa" class="list-group-item list-group-item-action">
        <img id="glyph-main" src="assets/svg/si-glyph-person-public.svg"/> Daftar Wisudawan
    </a>
    <a href="log" class="list-group-item list-group-item-action">
        <img id="glyph-main" src="assets/svg/si-glyph-document-bullet-list.svg"/> Terakhir Checkin
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
            Overview
        </div>
        <div class="row card-body">
            <div class="col-md-6">
                <div class="border shadow p-3 mb-5 bg-white rounded text-center">
                    <h2><img id="glyph-card" src="assets/svg/si-glyph-person-checked.svg"/> {{$count_tamu}}</h2>
                    <h5 class="card-title">Daftar Hadir Tamu</h5>
                </div>
            </div>
            <div class="col-md-6">
                <div class="border shadow p-3 mb-5 bg-white rounded text-center">
                    <h2><img id="glyph-card" src="assets/svg/si-glyph-person-public.svg"/> {{$count_mhs}}</h2>
                    <h5 class="card-title">Daftar Wisudawan</h5>
                </div>
            </div>
        </div>
    </div>
@endsection