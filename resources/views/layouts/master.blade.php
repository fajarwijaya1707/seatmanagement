@extends('layouts.app')

@section('content')
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1>@yield('glyph') @yield('tittle')</h1>
                </div>
                <div class="col-md-2">
                    
                </div>
            </div>
        </div>
    </header>

    {{-- <section id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                @yield('breadcrumb')
            </ol>
        </div>
    </section> --}}

    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @yield('main-list')
                </div>
                <div class="col-md-9">
                    @yield('main-card')
                </div>
            </div>
        </div>
    </section>
@endsection