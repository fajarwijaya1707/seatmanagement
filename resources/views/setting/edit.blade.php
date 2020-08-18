@extends('layouts.master')

@section('tittle','Rule Booking')

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
           Edit Rule
        </div>
        <div class="card-body">
            <!-- Alert -->
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                {{session('success')}}
                </div>
            @endif
            <!-- Edit form -->
            <form action="../../kursi/update/{{$rule->id_kursi}}" method='GET' id="update">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="font-weight-bold" for="EditNim">NO URUTAN</label>
                    <input name="id" type="text" class="form-control" id="id" value="{{$rule->id_kursi}}" disabled>
                </div>
                <div class="form-group">
                    <label for="sel1">SEGMEN : </label>
                    <select class="form-control" id="segmen" name="segmen" onselect="{{$rule->segmen}}">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                    </select>
                  </div>
                 
                  <div class="form-group">
                    <label for="sel1">BARIS : </label>
                    <select class="form-control" id="baris" name="baris">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label class="font-weight-bold" for="EditNim">Jumlah Terisi</label>
                    <input name="jumlah" type="number" class="form-control" id="jumlah"  value="{{$rule->jumlah}}" >
                </div>
                <div class="text-right">
                    <a class="btn btn-secondary" href="{{ URL::previous() }}" role="button">Cancel</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div> 
    </div> 
@endsection