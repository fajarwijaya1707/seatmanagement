@extends('layouts.master')

@section('tittle','Setting')

@section('glyph')
    <img id="glyph-header" src="/assets/svg/si-glyph-gear.svg"/> 
@endsection

@section('breadcrumb')
    <li class="active">Setting</li>
@endsection

@section('main-card')
    <div class="card">
        <div class="card-header font-weight-bold">
            Edit Event
        </div>
        <div class="card-body">
            <!-- Alert -->
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                {{session('success')}}
                </div>
            @endif
            <!-- Edit form -->
            <form action='#' method='POST'>
                {{csrf_field()}}
                <div class="form-group">
                    <label class="font-weight-bold" for="EditNamaEvent">Event Name</label>
                    <input name="event" type="text" class="form-control" id="EditNamaEvent" value="Wisuda">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="EditPeriodeEvent">Period</label>
                    <input name="periode" type="text" class="form-control" id="EditPeriodeEvent" value="2">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="EditTahunEvent">Year</label>
                    <input name="tahun" type="text" class="form-control" id="EditTahunEvent" value="2019">
                </div>
                <div class="text-right">
                    <a class="btn btn-secondary" href="{{ URL::previous() }}" role="button">Cancel</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection