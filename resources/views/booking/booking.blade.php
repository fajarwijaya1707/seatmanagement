@extends('layouts.master')

@section('tittle','booking')

@section('glyph')
    <img id="glyph-header" src="assets/svg/si-glyph-align-center.svg"/>
    
    
@endsection

@section('breadcrumb')
    <li class="active">Booking Manual</li>
@endsection

@section('main-list')
<div class="list-group">
    <a href="{{ route('login') }}" class="list-group-item list-group-item-action">
        <img id="glyph-main" src="assets/svg/si-glyph-chart-column.svg"/> Dashboard
    </a>
    <a href="booking" class="list-group-item list-group-item-action active">
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
            Booking Manual
        </div>
        @if(session('success'))
                <div class="alert alert-success" role="alert">
                {{session('success')}}
                </div>
            @endif
        <div class="card-body">
            
            <center><label><h2>Denah Segmen Kursi Yang Tersedia</h2></label>
             <img src="../public/assets/img/kursi.png" height="400px" width="400px"></center>
             <br>
                        <center><div class="col-md-12" style="height:120px;">
                            <div class="border shadow p-3 mb-5 bg-white rounded text-center" style="height:120px;width:200px;">
                                <h6><img id="glyph-card" src="assets/svg/si-glyph-person-public.svg" style="height:20px;width:20px;"><br>Terisi {{$count_tamu}} Dari {{$js}} Kursi</h6>
                                <p class="card-title">SEMUA</p>
                            </div>
                        </div></center>
                            <br>
                    <div class="row">
                        @foreach ($sgmn as $no => $sgsg)
                            <?php $sgm[]= $sgsg->segmen ?>
                        @endforeach
                        <?php for($i=0;$i<=$mk;$i++){?>
                        <div class="col-md-3" style="height:120px;padding-top:5px;">
                            <div class="border shadow p-3 mb-5 bg-white rounded text-center" style="height:110px;width: 180px;padding-top:10px;">
                                <h6><img id="glyph-card" src="assets/svg/si-glyph-person-public.svg" style="height:20px;width:20px;"><br>Terisi {{$stt[$i]}} Dari {{$c[$i]}} Kursi</h6>
                            <p class="card-title">SEGMEN {{$sgm[$i]}}</p>
                            </div>
                        </div>
                    <?php } ?>
                    </div>

        </div>
        <div class="text-right" >
            <center>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal" value="Booking" id="booking">
                Booking
                </button></center>
        </div>
    </form>
    </br></br>

    </div>

   
 <!-- Modal -->
 <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold" id="ModalLabel">Masukan Data Tamu Undangan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modal">
                <form action='tamu' method='GET'>
                    {{csrf_field()}}
                    <table class="table table-bordered"/>
                    <tr>
                    <td><div class="form-group">
                                <label class="font-weight-bold" >PILIH SEGMEN :</label>
                                <select class="form-control" id="Inputsegmen" name="segmen">
                                    <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                                <option>E</option>
                                <option>F</option>
                                </select>
                            </div></td>	
                            </tr>
                            <tr>
                            <div class="form-group">
                            <td><label class="font-weight-bold" >KURSI : &emsp;&emsp;&emsp;</label>
                                <center><input  id="Inputkursi" name="kursi" value="1" type="radio" checked> 1 Kursi (Sendiri) &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                <input id="Inputkursi" name="kursi" value="2" type="radio"> 2 Kursi (Berdua)</center></div></td></tr>
                                
                            </div>
                            <tr><td><div class="form-group">
                                <label class="font-weight-bold" >NIM</label>
                                <input name="nim" type="text" class="form-control" id="Inputnim">
                            </div>
                            </td></tr>
                        
            
            </table>
                    
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