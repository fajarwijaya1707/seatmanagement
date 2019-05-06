@extends('layouts.master')

@section('tittle','Dashboard')

@section('glyph')
    <img id="glyph-header" src="/assets/svg/si-glyph-chart-column.svg"/> 
@endsection

@section('breadcrumb')
    <li class="active">Dashboard</li>
@endsection

@section('main-list')
    <div class="list-group">
        <a href="/dashboard" class="list-group-item list-group-item-action active">
            <img id="glyph-main" src="/assets/svg/si-glyph-chart-column.svg"/> Dashboard
        </a>
        <a href="/hadir" class="list-group-item list-group-item-action">
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
            Overview
        </div>
        <div class="row card-body">
            <div class="col-md-4">
                <div class="border shadow p-3 mb-5 bg-white rounded text-center">
                    <h2><img id="glyph-card" src="/assets/svg/si-glyph-person-checked.svg"/> 20</h2>
                    <h5 class="card-title">Presence</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="border shadow p-3 mb-5 bg-white rounded text-center">
                    <h2><img id="glyph-card" src="/assets/svg/si-glyph-person-public.svg"/> {{$count_mhs}}</h2>
                    <h5 class="card-title">Members</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="border shadow p-3 mb-5 bg-white rounded text-center">
                    <h2><img id="glyph-card" src="/assets/svg/si-glyph-document-bullet-list.svg"/> 109</h2>
                    <h5 class="card-title">Logs</h5>
                </div>
            </div>
        </div>
    </div>
@endsection