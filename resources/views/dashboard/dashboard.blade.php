@extends('layouts.master')

@section('tittle','Dashboard')

@section('glyph')
    <img id="glyph-header" src="/assets/svg/si-glyph-chart-column.svg"/> 
@endsection

@section('breadcrumb')
    <li class="active">Dashboard</li>
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