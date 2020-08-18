@extends('layouts.master')

@section('tittle','Daftar Wisudawan')

@section('glyph')
    <img id="glyph-header" src="../../assets/svg/si-glyph-person-public.svg"/> 
    <script type="text/javascript">
        function tampilkan(){
                          var nama_fakultas=document.getElementById("update").Inputfakultas.value;
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
    <li class="breadcrumb-item"><a href="../../mahasiswa">Daftar Wisudawan</a></li>
    <li class="breadcrumb-item active">Edit</li>
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
    <a href="../../mahasiswa" class="list-group-item list-group-item-action active">
        <img id="glyph-main" src="../../assets/svg/si-glyph-person-public.svg"/> Daftar Wisudawan
    </a>
    <a href="../../log" class="list-group-item list-group-item-action">
        <img id="glyph-main" src="../../assets/svg/si-glyph-document-bullet-list.svg"/> Terakhir Checkin
    </a>
    <a href="../../setting" class="list-group-item list-group-item-action dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img id="glyph-main" src="../../assets/svg/si-glyph-gear.svg"/> Setting
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
            Edit Graduates
        </div>
        <div class="card-body">
            <!-- Alert -->
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                {{session('success')}}
                </div>
            @endif
            <!-- Edit form -->
            <form action='../../mahasiswa/{{$mhs->nim}}/update' method='POST' id="update">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="font-weight-bold" for="EditNim">NIM</label>
                    <input name="nim" type="text" class="form-control" id="EditNim" value="{{$mhs->nim}}">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="EditNama">Nama</label>
                    <input name="nama" type="text" class="form-control" id="EditNama" value="{{$mhs->nama}}">
                </div>
                <div class="form-group">
                    <label for="sel1">Pilih Fakultas:</label>
                    <select class="form-control" id="Inputfakultas" name="fakultas"  value="{{$mhs->fakultas}}" onchange="tampilkan()">
                        <option>--pilih--</option>
                      <option>SAINTEK</option>
                      <option>FEBI</option>
                      <option>FISHUM</option>
                    </select>
                  </div>
                  
                <div class="form-group">
                    <label for="sel1">Pilih Prodi:</label>
                    <select class="form-control" id="Inputprodi" name="prodi"  value="{{$mhs->prodi}}">
                        <option value="">--pilih--</option>
                            </select>
                  </div>
                <div class="text-right">
                    <a class="btn btn-secondary" href="{{ URL::previous() }}" role="button">Cancel</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div> 
    </div> 
@endsection