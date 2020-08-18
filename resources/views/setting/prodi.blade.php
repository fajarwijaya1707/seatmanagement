@extends('layouts.master')

@section('tittle','Daftar Prodi')

@section('glyph')
    <img id="glyph-header" src="assets/svg/si-glyph-person-public.svg"/> 
@endsection

@section('main-list')
    <div class="list-group">
        <a href="{{ route('login') }}" class="list-group-item list-group-item-action">
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
           Daftar Prodi
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
                <div class="col-md-6 text-right">
                    <!-- Add button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal">
                    Add
                    </button>
                </div>

                <!-- Graduation table list -->
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>PRODI</th>
                        <th>FAKULTAS</th>
                        <th>AKSI</th>
                    </tr>
                    @foreach($data_prodi as $no => $pr)
                    <tr>
                        <td>{{$pr->id}}</td>
                        <td>{{$pr->prodi}}</td>
                        <td>{{$pr->fakultas}}</td>
                        <td>
                            <a href="prodi/edit/{{$pr->id}}" class="btn btn-warning btn-sm" >Edit</a>
                            <a href="prodi/hapus/{{$pr->id}}" class="btn btn-secondary btn-sm">Hapus</a>


                        </td>
                    </tr>
                    @endforeach
                </table>
                {{ $data_prodi->links() }}
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" id="ModalLabel">Tambah Rule Booking</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action='prodi/create' method='GET' name="tambah" id="tambah">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="font-weight-bold" for="InputNim">ID Prodi</label>
                            <input name="id" type="text" class="form-control" id="id" value="">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="InputNim">Nama Prodi</label>
                            <input name="prodi" type="text" class="form-control" id="prodi" value="">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="InputNim">Nama Fakultas</label>
                            <input name="fakultas" type="text" class="form-control" id="fakultas" value="">
                        </div>
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