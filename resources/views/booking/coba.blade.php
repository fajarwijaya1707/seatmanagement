@extends('layouts.master')

@section('tittle','booking')

@section('glyph')
    <img id="glyph-header" src="assets/svg/si-glyph-align-center.svg"/>
    
    
@endsection

@section('breadcrumb')
    <li class="active">Booking Manual</li>
@endsection

@section('main-list')
<div class="list-group">
    <a href="{{ route('login') }}" class="list-group-item list-group-item-action">
        <img id="glyph-main" src="assets/svg/si-glyph-chart-column.svg"/> Dashboard
    </a>
    <a href="booking" class="list-group-item list-group-item-action active">
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
        Data Booking
    </div>
    <div class="card-body">
        @if(session('success'))
                <div class="alert alert-success" role="alert">
                {{session('success')}}
                </div>
            @endif
            <center><label class="font-weight-bold">DATA BOOKING ANDA</label></center>
        <div class="row">
            
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
                </tr><tr>@if($data_tamu[0]) Data Tidak Ditemukan @endif </tr>

                @endforeach
            </table>
            
        </div>
        <div class="text-right" >@php
            $nim=0;
        @endphp @foreach($data_tamu as $no => $tamu)
            @php
                $nim= $tamu->status;
            @endphp @endforeach
            @if($nim!=0)
            <center><a href="kursi/print?fajarganteng={{$nim}}" class="btn btn-primary" align="center">
                Cetak
            </a></center>
            @endif
        </div>
        {{ $data_tamu->links() }}
        <a href="booking" type="button" class="btn btn-secondary" data-dismiss="modal">Close </a>
        <a href="kursi" class="btn btn-primary" data-toggle="modal" data-target="#Modal" value="Booking" id="booking">
            Booking Lagi
        </a>
    </div>
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" id="ModalLabel">Masukan Data Tamu Undangan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal">
                    <form action='tamu' method='GET'>
                        {{csrf_field()}}
                        <table class="table table-bordered"/>
                        <tr>
                        <td><div class="form-group">
                                    <label class="font-weight-bold" >PILIH SEGMEN :</label>
                                    <select class="form-control" id="Inputsegmen" name="segmen">
                                        <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>D</option>
                                    <option>E</option>
                                    <option>F</option>
                                    </select>
                                </div></td>	
                                </tr>
                                <tr>
                                <div class="form-group">
                                <td><label class="font-weight-bold" >KURSI : &emsp;&emsp;&emsp;</label>
                                    <center><input  id="Inputkursi" name="kursi" value="1" type="radio" checked> 1 Kursi (Sendiri) &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                    <input id="Inputkursi" name="kursi" value="2" type="radio"> 2 Kursi (Berdua)</center></div></td></tr>
                                    
                                </div>
                                <tr><td><div class="form-group">
                                    <label class="font-weight-bold" >NIM</label>
                                    <input name="nim" type="text" class="form-control" id="Inputnim">
                                </div>
                                </td></tr>
                            
                
                </table>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection