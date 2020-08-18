@extends('layouts.master')

@section('tittle','Daftar Wisudawan')

@section('glyph')
    <img id="glyph-header" src="assets/svg/si-glyph-person-public.svg"/> 
    <script type="text/javascript">
        function tampilkan(){
                          var nama_fakultas=document.getElementById("tambah").Inputfakultas.value;
                          if (nama_fakultas=="SAINTEK")
                            {
                                document.getElementById("Inputprodi").innerHTML="<option value='KIMIA'>KIMIA</option><option value='BIOLOGI'>BIOLOGI</option><option value='MATEMATIKA'>MATEMATIKA</option><option value='FISIKA'>FISIKA</option><option value='Teknik Informtika'>Teknik Informatika</option><option value='Teknik Industi'>Teknik Industri</option>";
                            }
                          else if (nama_fakultas=="FEBI")
                            {
                                document.getElementById("Inputprodi").innerHTML="<option value='Ekonomi Syariah'>Ekonomi Syariah</option><option value='Perbankan Syariah'>Perbankan Syariah</option><option value='Manajemen Keuangan Syariah'>Manajemen Keuangan Syariah</option><option value='Akutansi Syariah'>Akutansi Syariah";
                            }
                            else if (nama_fakultas=="FISHUM")
                            {
                                document.getElementById("Inputprodi").innerHTML="<option value='PSIKOLOGI'>PSIKOLOGI</option><option value='SOSIOLOGI'>SOSIOLOGI</option><option value='Ilmu Komunikasi'>Ilmu Komunikasi</option>";
                            }
                        }
        </script>
@endsection

@section('breadcrumb')
    <li class="active">Daftar Wisudawan</li>
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
        <a href="mahasiswa" class="list-group-item list-group-item-action active">
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
            Graduation List
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
                        <th>NO</th>
                        <th>NIM</th>
                        <th>NAMA</th>
                        <th>PRODI</th>
                        <th>FAKULTAS</th>
                        <th>AKSI</th>
                    </tr>
                    @foreach($data_mhs as $no => $mhs)
                    <tr>
                        <td>{{$no + $data_mhs->firstItem()}}</td>
                        <td>{{$mhs->nim}}</td>
                        <td>{{$mhs->nama}}</td>
                        <td>{{$mhs->prodi}}</td>
                        <td>{{$mhs->fakultas}}</td>
                        <td>
                            <a href="mahasiswa/{{$mhs->nim}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="mahasiswa/hapus/{{$mhs->nim}}" class="btn btn-secondary btn-sm">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {{ $data_mhs->links() }}
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" id="ModalLabel">Tambah Data Mahasiswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action='mahasiswa/create' method='POST' name="tambah" id="tambah">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="font-weight-bold" for="InputNim">NIM</label>
                            <input name="nim" type="text" class="form-control" id="InputNim" placeholder="Masukan NIM">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="InputNama">Nama</label>
                            <input name="nama" type="text" class="form-control" id="InputNama" placeholder="Masukan Nama">
                        </div>
                        <div class="form-group">
                            <label for="sel1">Pilih Fakultas:</label>
                            <select class="form-control" id="Inputfakultas" name="fakultas" onChange="tampilkan()">
                                <option value="">--pilih--</option>
                              <option>SAINTEK</option>
                              <option>FEBI</option>
                              <option>FISHUM</option>
                            </select>
                          </div>
                         
                        <div class="form-group">
                            <label for="sel1">Pilih Prodi:</label>
                            <select class="form-control" id="Inputprodi" name="prodi">
                                <option value="">--pilih--</option>
                            </select>
                          </div>
                        
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