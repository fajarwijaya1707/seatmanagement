@extends('layouts.master')

@section('tittle','Graduates')

@section('glyph')
    <img id="glyph-header" src="/assets/svg/si-glyph-person-public.svg"/> 
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/mahasiswa">Graduates</a></li>
    <li class="breadcrumb-item active">Edit</li>
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
            Edit Graduates
        </div>
        <div class="card-body">
            <!-- Alert -->
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                {{session('success')}}
                </div>
            @endif
            <!-- Edit form -->
            <form action='/mahasiswa/{{$mhs->nim}}/update' method='POST'>
                {{csrf_field()}}
                <div class="form-group">
                    <label class="font-weight-bold" for="EditNim">NIM</label>
                    <input name="nim" type="text" class="form-control" id="EditNim" value="{{$mhs->nim}}">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="EditNama">Nama</label>
                    <input name="nama" type="text" class="form-control" id="EditNama" value="{{$mhs->nama}}">
                </div>
                <div class="text-right">
                    <a class="btn btn-secondary" href="{{ URL::previous() }}" role="button">Cancel</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div> 
    </div> 
@endsection