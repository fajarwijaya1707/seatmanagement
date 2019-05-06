@extends('layouts.master')

@section('tittle','Graduates')

@section('glyph')
    <img id="glyph-header" src="/assets/svg/si-glyph-person-public.svg"/> 
@endsection

@section('breadcrumb')
    <li class="active">Graduates</li>
@endsection

@section('main-list')
    <div class="list-group">
        <a href="/dashboard" class="list-group-item list-group-item-action">
            <img id="glyph-main" src="/assets/svg/si-glyph-chart-column.svg"/> Dashboard
        </a>
        <a href="/hadir" class="list-group-item list-group-item-action">
            <img id="glyph-main" src="/assets/svg/si-glyph-person-checked.svg"/> Presence
        </a>
        <a href="/mahasiswa" class="list-group-item list-group-item-action active">
            <img id="glyph-main" src="/assets/svg/si-glyph-person-public.svg"/> Graduates
        </a>
        <a href="/log" class="list-group-item list-group-item-action">
            <img id="glyph-main" src="/assets/svg/si-glyph-document-bullet-list.svg"/> Logs
        </a>
        <a href="/setting" class="list-group-item list-group-item-action">
            <img id="glyph-main" src="/assets/svg/si-glyph-gear.svg"/> Setting
        </a>
    </div>
@endsection

@section('main-card')
    <div class="card">
        <div class="card-header font-weight-bold">
            Graduation List
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
                        <th>NO</th>
                        <th>NIM</th>
                        <th>NAMA</th>
                        <th>AKSI</th>
                    </tr>
                    @foreach($data_mhs as $no => $mhs)
                    <tr>
                        <td>{{$no + $data_mhs->firstItem()}}</td>
                        <td>{{$mhs->nim}}</td>
                        <td>{{$mhs->nama}}</td>
                        <td>
                            <a href="/mahasiswa/{{$mhs->nim}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {{ $data_mhs->links() }}
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" id="ModalLabel">Tambah Data Mahasiswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action='/mahasiswa/create' method='POST'>
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="font-weight-bold" for="InputNim">NIM</label>
                            <input name="nim" type="text" class="form-control" id="InputNim" placeholder="Masukan NIM">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="InputNama">Nama</label>
                            <input name="nama" type="text" class="form-control" id="InputNama" placeholder="Masukan Nama">
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