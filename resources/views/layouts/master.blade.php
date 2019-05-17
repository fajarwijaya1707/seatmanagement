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

    <section id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                @yield('breadcrumb')
            </ol>
        </div>
    </section>

    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="{{ route('login') }}" class="list-group-item list-group-item-action active">
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
                </div>
                <div class="col-md-9">
                    @yield('main-card')
                </div>
            </div>
        </div>
    </section>
@endsection