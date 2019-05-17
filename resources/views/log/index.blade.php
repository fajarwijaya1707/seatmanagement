@extends('layouts.master')

@section('tittle','Logs')

@section('glyph')
    <img id="glyph-header" src="/assets/svg/si-glyph-document-bullet-list.svg"/> 
@endsection

@section('breadcrumb')
    <li class="active">Logs</li>
@endsection

@section('main-card')
    <div class="card">
        <div class="card-header font-weight-bold">
            Logs
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