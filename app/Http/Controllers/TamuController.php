<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class TamuController extends Controller
{
    public function index(Request $request)
    {
        $data_tamu = DB::table('booking')
            ->join('mahasiswa', 'booking.status', '=', 'mahasiswa.nim')
            ->select('booking.*', 'mahasiswa.nama')
            ->orderBy('baris', 'asc')
            ->when($request->keyword, function ($query) use ($request) {
            $query->where('segmen', 'like', "%{$request->keyword}%")
                ->orWhere('baris', 'like', "%{$request->keyword}%")
                ->orWhere('nomor', 'like', "%{$request->keyword}%")
                ->orWhere('status', 'like', "%{$request->keyword}%")
                ->orWhere('nama', 'like', "%{$request->keyword}%")
                ->orWhere('checkin', 'like', "%{$request->keyword}%");
        })->paginate(10);
        $data_tamu->appends($request->only('keyword'));

        return view('guest.index',['data_tamu' => $data_tamu]);
    }

    public function log(Request $request)
    {
        $data_tamu = DB::table('booking')
            ->join('mahasiswa', 'booking.status', '=', 'mahasiswa.nim')
            ->select('booking.*', 'mahasiswa.nama')
            ->where('booking.checkin','=',"sudah masuk")
            ->orderBy('id_booking', 'DESC')
            ->when($request->keyword, function ($query) use ($request) {
            $query->where('segmen', 'like', "%{$request->keyword}%")
                ->orWhere('baris', 'like', "%{$request->keyword}%")
                ->orWhere('nomor', 'like', "%{$request->keyword}%")
                ->orWhere('status', 'like', "%{$request->keyword}%")
                ->orWhere('nama', 'like', "%{$request->keyword}%")
                ;
        })->paginate(10);
        $data_tamu->appends($request->only('keyword'));

        return view('log.index',['data_tamu' => $data_tamu]);
    }
    public function hapustamu(Request $request)
    {
      DB::table('booking')->truncate();
        return redirect('/hadir')->with('success','Daftar Hadir berhasil dihapus!');
    }
    public function update(Request $request,$id)
    {
        $krs = \App\kursi::find($id);
        $krs->update($request->all());
        return redirect('/rule')->with('success','Data berhasil diupdate!');
    }
    public function hapus($id)
    {
        $mhs = \App\kursi::find($id);
        $mhs->delete();
        return redirect('/rule')->with('success','Rule Booking Berhasil Di Hapus');
    }
    public function edit($id)
    {
        $rule = \App\kursi::find($id);
        return view('setting.edit',['rule' => $rule]);
    }
    public function rule(Request $request)
    {
        $jml =  DB::table('maksimal')->select('jumlah')->where('id',1)->get();
      $data_kursi = DB::table('kursi')
            ->select('id_kursi', 'segmen', 'baris','jumlah')
            ->when($request->keyword, function ($query) use ($request) {
              $query->where('segmen', 'like', "%{$request->keyword}%")
                  ->orWhere('baris', 'like', "%{$request->keyword}%");
          })->paginate(10);
          $data_kursi->appends($request->only('keyword'));
            $count_kursi = \App\kursi::count();
        return view('setting.rule',['data_kursi' => $data_kursi,'count_kursi' => $count_kursi , 'jml' => $jml]);
    }
    public function booking(Request $request)
    {
      $jml =  DB::table('maksimal')->select('jumlah')->where('id',1)->get();
      foreach($jml as $b){
        $j = $b->jumlah;
      }
      $count_kursi = \App\kursi::count();
      $count_tamu = \App\booking::count();
      $sgmn = DB::table('segmen')->select('id','segmen')->get();
      $data_sgm = DB::table('segmen')->count();
      $mk = $data_sgm - 1;
      $g=0;
      $ss=1;
      for($l=0;$l<=$mk;$l++){
        $data_segmen = DB::table('segmen')->select('segmen')->where('id',$ss)->get();
        foreach($data_segmen as $b){
          $tt = $b->segmen;
        }
        $data_kursi = DB::table('kursi')->where('segmen',$tt)->count();
        $dtt = DB::table('kursi')->select('jumlah')->where('segmen',$tt)->get();
        $s=0;
        $z=$data_kursi-1;
        for($i=0;$i<=$z;$i++){
       
          $s = $s+$dtt[$i]->jumlah;
        }
        $c[$g]= $data_kursi * $j;
        $stt[$g]= $s;
        $g++;
        $ss=$ss+1;
      }
      $js = $count_kursi * $j;
        return view('booking.booking',['js'=>$js,'count_tamu' => $count_tamu,'stt'=>$stt,'c'=>$c,'sgmn'=>$sgmn,'mk'=>$mk]);
    }
    public function create(Request $request)
    {
      $id = $request->id;
      $segmen = $request->segmen;
      $baris=$request->baris;
      $jml=$request->jumlah;
      DB::table('kursi')->insert(['id_kursi'=>$id,'segmen'=>$segmen,'baris'=>$baris , "jumlah"=>$jml]);
        return redirect('/rule')->with('success','Data berhasil diinput!');
    }

    public function updatejumlah(Request $request)
    {
      $id=1;
        DB::table('maksimal')->where('id', $id)->update([
          'jumlah' => $request->jumlah,
          ]);
        return redirect('/jumlah')->with('success','Data berhasil diupdate!');
    }
    public function jumlah(Request $request)
    {
        
      $jumlah = DB::table('maksimal')
            ->select('id', 'jumlah')
            ->paginate(10);
        return view('setting.jumlah',['jumlah' => $jumlah]);
    }
    public function checkin(Request $request)
    {
        

        return view('checkin.index');
    }
    public function tamusukses(Request $request)
    {
        $nim=$request->nim;
        $data_tamu = DB::table('booking')
            ->join('mahasiswa', 'booking.status', '=', 'mahasiswa.nim')
            ->select('booking.*', 'mahasiswa.nama')
            ->where('booking.status','=',$nim)
            ->when($request->keyword, function ($query) use ($request) {
            $query->where('segmen', 'like', "%{$request->keyword}%")
                ->orWhere('baris', 'like', "%{$request->keyword}%")
                ->orWhere('nomor', 'like', "%{$request->keyword}%")
                ->orWhere('status', 'like', "%{$request->keyword}%")
                ->orWhere('nama', 'like', "%{$request->keyword}%")
                ->orWhere('checkin', 'like', "%{$request->keyword}%");
        })->paginate(10);
        $data_tamu->appends($request->only('keyword'));

        return view('booking.coba',['data_tamu' => $data_tamu]);
    }
    public function tamubooking(Request $request)
    {
      $data_tamu = $request->nim;
        $nim=$request->nim;
    $mahasiswa = DB::table("mahasiswa")->where('nim',$nim)->get();
    if (!empty($mahasiswa[0]))
    {
      $mhs = DB::table('booking')->where('status',$nim)->get();
              if (empty($mhs[0]))
              {
                
                $kursi = DB::table('kursi')->select('jumlah','id_kursi')->where('segmen',"$request->segmen")->orderBy('id_kursi','asc')->get();
                $i  = 0;
               $mn=1;
              $maks = DB::table('maksimal')->select('jumlah')->where('id',$mn)->get();
              foreach($maks as $b){
                $mz = $b->jumlah;
              }
             
              $input=$request->kursi;
                $tampung = $input+$kursi[$i]->jumlah;
                while ($tampung > $mz) {
                  $tampung = $input+$kursi[$i]->jumlah;
                  if ($tampung > $mz) { 
                    $i++;
  
                  }
                }
                $iid = $kursi[$i]->id_kursi;
               
                $relasi=$iid;
              
                DB::table('kursi')->where('id_kursi', $relasi)->update([
                'jumlah' => $tampung,
                ]);

                $booking = DB::table('kursi')->select('segmen','baris')->where('id_kursi', $relasi)->get();
                $nm = DB::table('mahasiswa')->select('nama')->where('nim', $nim)->get();
                if ($input==1){
                  $nomor = $tampung;
                  foreach($booking as $b){
                    $segmen = $b->segmen;
                    $baris = $b->baris;
                    DB::table('booking')->insert(['segmen'=>$segmen,'baris'=>$baris ,'nomor'=>$nomor, "status"=>$nim,'checkin'=>"Belum Masuk"]);
                    
                  }
                  // $booking = DB::table('booking')->select('segmen','baris','nomor')->where('status', $nim)->get();
            
                  // $pdf = PDF::loadview('cetak',['booking'=>$booking]);
                  // $pdf->download('Tiket-Kursi');

                  return redirect('/bookingsukses?nim='.$nim)->with('success','Booking Kursi berhasil !');
                }
                elseif($input ==2){
                  $nomor1 = $tampung-1;
                  foreach($booking as $b){
                    $segmen = $b->segmen;
                    $baris = $b->baris;
                    DB::table('booking')->insert(['segmen'=>$segmen,'baris'=>$baris ,'nomor'=>$nomor1, "status"=>$nim, 'checkin'=>"Belum Masuk"]);
                  }
                  $nomor = $tampung ;
                  foreach($booking as $b){
                    $segmen = $b->segmen;
                    $baris = $b->baris;
                    DB::table('booking')->insert(['segmen'=>$segmen,'baris'=>$baris ,'nomor'=>$nomor, "status"=>$nim , 'checkin'=>"Belum Masuk"]);
                  }
                  // $booking = DB::table('booking')->select('segmen','baris','nomor')->where('status', $nim)->get();
            
                  // $pdf = PDF::loadview('cetak',['booking'=>$booking]);
                  // $pdf->download('Tiket-Kursi');
                  

                  return redirect('/bookingsukses?nim='.$nim)->with('success','Booking Kursi berhasil !');
              
            } else {
              return redirect('/bookingsukses?nim='.$nim)->with('success','Data/NIM yang Anda Masukan Bukan Peserta Wisuda!');
            }
            }else{
               
                return redirect('/bookingsukses?nim='.$nim)->with('success','Anda Sudah Melakukan Booking Sebelumnya !');
              
  }
  } else {
    return redirect('/bookingsukses?nim='.$nim)->with('success','Data/NIM yang Anda Masukan Bukan Peserta Wisuda!');
  }
    
    // foreach($booking as $b){
    //   $segmen = $b->segmen;
    //   $baris = $b->baris;
    //   DB::table('booking')->insert(['segmen'=>$segmen,'baris'=>$baris]);
    // }
   
  

    // return view('cek',['input'=>$input,'booking' => $booking, 'nomor' => $nomor,'nomor1'=>$nomor1]);
    }

    public function cetakhadir(Request $request)
  {
    $booking = DB::table('booking')
    ->join('mahasiswa', 'booking.status', '=', 'mahasiswa.nim')
    ->select('booking.*', 'mahasiswa.nama')
    ->orderBy('baris','asc')
    ->paginate(10000);
 
  $pdf = PDF::loadview('cetaktamu',['booking'=>$booking]);
  // return view('cetaktamu',['booking'=>$booking]);
	return $pdf->download('Daftar_Hadir.pdf');
  }
}
