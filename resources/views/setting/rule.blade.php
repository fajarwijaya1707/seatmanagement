@extends('layouts.master')

@section('tittle','Rule Booking')

@section('glyph')
    <img id="glyph-header" src="assets/svg/si-glyph-person-public.svg"/> 
@endsection

@section('main-list')
    <div class="list-group">
        <a href="{{ route('login') }}" class="list-group-item list-group-item-action">
            <img id="glyph-main" src="assets/svg/si-glyph-chart-column.svg"/> Dashboard
        </a>
        <a href="booking" class="list-group-item list-group-item-action">
            <img id="glyph-main" src="assets/svg/si-glyph-align-center.svg"/> Booking Manual
        </a>
        <a href="hadir" class="list-group-item list-group-item-action">
            <img id="glyph-main" src="assets/svg/si-glyph-person-public.svg"/> Daftar Hadir
        </a>
        <a href="mahasiswa" class="list-group-item list-group-item-action">
            <img id="glyph-main" src="assets/svg/si-glyph-person-public.svg"/> Daftar Wisudawan
        </a>
        <a href="log" class="list-group-item list-group-item-action">
            <img id="glyph-main" src="assets/svg/si-glyph-document-bullet-list.svg"/> Terakhir Checkin
        </a>
        <a href="setting" class="list-group-item list-group-item-action dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img id="glyph-main" src="assets/svg/si-glyph-gear.svg"/> Setting
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="rule">Rule Booking</a>
            <a class="dropdown-item" href="jumlah">Jumlah Max/Baris</a>
            <a class="dropdown-item" href="segmen">Segmen</a>
        <a class="dropdown-item" href="baris">Baris</a>
        <a class="dropdown-item" href="fakultas">Fakultas</a>
        <a class="dropdown-item" href="prodi">Prodi</a>
        </div>
    </div>
@endsection

@section('main-card')
    <div class="card">
        <div class="card-header font-weight-bold">
            Rule Booking
        </div>
        <div class="card-body">
            <!-- Alert -->
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                {{session('success')}}
                </div>
            @endif

            <div class="row">
                <div class="col-md-6">
                    <!-- Search form -->
                    <form action='{{ url()->current() }}' method='GET' class="form-inline">
                        <input class="form-control mr-sm-2" name="keyword" type="search" placeholder="Search" aria-label="Search" value="{{ request('keyword') }}">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
                <div class="col-md-6 text-right">
                    <!-- Add button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal">
                    Add
                    </button>
                </div>

                <!-- Graduation table list -->
                <table class="table table-striped">
                    <tr>
                        <th>URUTAN NO</th>
                        <th>SEGMEN</th>
                        <th>BARIS</th>
                        <th>JUMLAH TERISI</th>
                        <th>AKSI</th>
                    </tr>
                    @foreach($data_kursi as $no => $krs)
                    <tr>
                        <td>{{$krs->id_kursi}}</td>
                        <td>{{$krs->segmen}}</td>
                        <td>Baris {{$krs->baris}}</td>
                        @foreach($jml as $no => $jmls)
                    <td>{{$krs->jumlah}}&ensp;Dari {{$jmls->jumlah}}&ensp;Kursi</td> @endforeach
                        <td>
                            <?php
                                $k=$krs->id_kursi;
                                $s=$krs->segmen;
                                $b=$krs->baris;
                                $m= $count_kursi ;
                                $n= $m+1;?>
                                @if($k == $k)
                                <?php
                                $z=$k;?>
                            <a href="kursi/edit/{{$krs->id_kursi}}" class="btn btn-warning btn-sm" >Edit</a>

                            @endif
                            @if($k == $m)
                            <a href="kursi/hapus/{{$krs->id_kursi}}" class="btn btn-secondary btn-sm">Hapus</a>
                            @endif
                            
                        </td>
                    </tr>
                    @endforeach
                </table>
                {{ $data_kursi->links() }}
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" id="ModalLabel">Tambah Rule Booking</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action='kursi/create' method='GET' name="tambah" id="tambah">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="font-weight-bold" for="InputNim">NO URUTAN</label>
                            <input name="id" type="number" class="form-control" id="id" value="{{$n}}">
                        </div>
                        <div class="form-group">
                            <label for="sel1">SEGMEN : </label>
                            <select class="form-control" id="segmen" name="segmen">
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
                          <input name="jumlah" type="number" class="form-control" id="jumlah"  value="0" hidden>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>


@endsection