@extends('layouts.master')

@section('tittle','Daftar Fakultas')

@section('glyph')
    <img id="glyph-header" src="../../assets/svg/si-glyph-person-public.svg"/> 
@endsection



@section('main-list')
<div class="list-group">
    <a href="{{ route('login') }}" class="list-group-item list-group-item-action">
        <img id="glyph-main" src="../../assets/svg/si-glyph-chart-column.svg"/> Dashboard
    </a>
    <a href="../../booking" class="list-group-item list-group-item-action ">
        <img id="glyph-main" src="../../assets/svg/si-glyph-align-center.svg"/> Booking Manual
    </a>
    <a href="../../hadir" class="list-group-item list-group-item-action ">
        <img id="glyph-main" src="../../assets/svg/si-glyph-person-public.svg"/> Daftar Hadir
    </a>
    <a href="../../mahasiswa" class="list-group-item list-group-item-action">
        <img id="glyph-main" src="../../assets/svg/si-glyph-person-public.svg"/> Daftar Wisudawan
    </a>
    <a href="../../log" class="list-group-item list-group-item-action">
        <img id="glyph-main" src="../../assets/svg/si-glyph-document-bullet-list.svg"/> Terakhir Checkin
    </a>
    <a href="../../setting" class="list-group-item list-group-item-action dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img id="glyph-main" src="../../assets/svg/si-glyph-gear.svg"/> Setting
    </a>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="../../rule">Rule Booking</a>
        <a class="dropdown-item" href="../../jumlah">Jumlah Max/Baris</a>
        <a class="dropdown-item" href="../../segmen">Segmen</a>
        <a class="dropdown-item" href="../../baris">Baris</a>
        <a class="dropdown-item" href="../../fakultas">Fakultas</a>
        <a class="dropdown-item" href="../../prodi">Prodi</a>
    </div>
</div>
@endsection

@section('main-card')
    <div class="card">
        <div class="card-header font-weight-bold">
           Edit Fakultas
        </div>
        <div class="card-body">
            <!-- Alert -->
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                {{session('success')}}
                </div>
            @endif
            <!-- Edit form -->
            <form action="../../fakultas/update/{{$fk->id}}" method='GET' id="update">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="font-weight-bold">ID FAKULTAS</label>
                    <input name="id_fk" type="text" class="form-control" id="id_fk" value="{{$fk->id_fk}}">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="EditNim">NAMA FAKULTAS</label>
                    <input name="fakultas" type="text" class="form-control" id="fakultas" value="{{$fk->fakultas}}">
                </div>
                <div class="text-right">
                    <a class="btn btn-secondary" href="{{ URL::previous() }}" role="button">Cancel</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div> 
    </div> 
@endsection