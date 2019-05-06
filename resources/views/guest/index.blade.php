@extends('layouts.master')

@section('tittle','Presence')

@section('glyph')
    <img id="glyph-header" src="/assets/svg/si-glyph-person-checked.svg"/> 
@endsection

@section('breadcrumb')
    <li class="active">Presence</li>
@endsection

@section('main-list')
    <div class="list-group">
        <a href="/dashboard" class="list-group-item list-group-item-action">
            <img id="glyph-main" src="/assets/svg/si-glyph-chart-column.svg"/> Dashboard
        </a>
        <a href="/hadir" class="list-group-item list-group-item-action active">
            <img id="glyph-main" src="/assets/svg/si-glyph-person-checked.svg"/> Presence
        </a>
        <a href="/mahasiswa" class="list-group-item list-group-item-action">
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
            Present List
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <!-- Search form -->
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
                <div class="col-md-6 text-right">
                    
                </div>

                <!-- Graduation table list -->
                <table class="table table-striped">
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>NO. KURSI</th>
                    </tr>
                    
                </table>
            </div>
        </div>
    </div>
@endsection