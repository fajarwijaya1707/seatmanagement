@extends('layouts.master')

@section('tittle','Presence')

@section('glyph')
    <img id="glyph-header" src="/assets/svg/si-glyph-person-checked.svg"/> 
@endsection

@section('breadcrumb')
    <li class="active">Presence</li>
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
                    <form action='{{ url()->current() }}' method='GET' class="form-inline">
                        <input class="form-control mr-sm-2" name="keyword" type="search" placeholder="Search" aria-label="Search" value="{{ request('keyword') }}">
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
                    @foreach($data_tamu as $no => $tamu)
                    <tr>
                        <td>{{$no + $data_tamu->firstItem()}}</td>
                        <td>{{$tamu->status}}</td>
                        <td>Segmen {{$tamu->segmen}} baris ke-{{$tamu->baris}} no.{{$tamu->nomor}}</td>
                    </tr>
                    @endforeach
                </table>
                {{ $data_tamu->links() }}
            </div>
        </div>
    </div>
@endsection