<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

class kursictrl extends Controller
{
    public function tambahkursi()
{
 
  $kursi = DB::table('kursi')->where('id_kursi',1)->get();
    return view('tambah_kursi',['kursi' => $kursi]);
 
}
public function update(Request $request)
{
 
    DB::table('kursi')->where('id_kursi',1)->update([
		'jumlah' => $request->tamu,
	]);
 
}
public function cek(Request $request)
{
  
  $nim=$request->code;
   $mahasiswa = DB::table('mahasiswa')->where('nim',$nim)->get();
    if ($mahasiswa == true)
    {
      $mhs = DB::table('booking')->where('status',$nim)->get();
      if ($mhs != true)
      {

    $kursi = DB::table('kursi')->orderBy('id_kursi','asc')->get();
    $i  = 0;
    
  $input=$request->tamu;
    $tampung = $input+$kursi[$i]->jumlah;
    while ($tampung > 50) {
      $tampung = $input+$kursi[$i]->jumlah;
      if ($tampung > 50) { 
        $i++;
      }
    }

    $relasi=$i+1;
  
    DB::table('kursi')->where('id_kursi', $relasi)->update([
     'jumlah' => $tampung,
    ]);

    $booking = DB::table('kursi')->select('segmen','baris')->where('id_kursi', $relasi)->get();
    if ($input==1){
      $nomor = $tampung;
      foreach($booking as $b){
        $segmen = $b->segmen;
        $baris = $b->baris;
        DB::table('booking')->insert(['segmen'=>$segmen,'baris'=>$baris ,'nomor'=>$nomor, "status"=>$nim]);
      }
      //return view('cek',['input'=>$input,'booking' => $booking, 'nomor' => $nomor]);
      return json_encode(
        array(
          'status'=> 200,
          'keterangan' => array(
            'input'=> $input,
            'segmen' => $booking[0]->segmen,
            'baris' => $booking[0]->baris,
            'kursi' => array($nomor)
          )
        )
      );
    }
    elseif($input ==2){
      $nomor1 = $tampung-1;
      foreach($booking as $b){
        $segmen = $b->segmen;
        $baris = $b->baris;
        DB::table('booking')->insert(['segmen'=>$segmen,'baris'=>$baris ,'nomor'=>$nomor1, "status"=>$nim]);
      }
      $nomor = $tampung ;
      foreach($booking as $b){
        $segmen = $b->segmen;
        $baris = $b->baris;
        DB::table('booking')->insert(['segmen'=>$segmen,'baris'=>$baris ,'nomor'=>$nomor, "status"=>$nim]);
      }
      //return view('cek',['input'=>$input,'booking' => $booking, 'nomor' => $nomor,'nomor1'=>$nomor1]);

      return json_encode(
        array(
          'status'=> 200,
          'keterangan' => array(
            'input'=> $input,
            'segmen' => $booking[0]->segmen,
            'baris' => $booking[0]->baris,
            'kursi' => array($nomor1, $nomor)
          )
        )
      );
    } else {
      return json_encode(
        array(
          'status'=> 204,
          'keterangan' => "Mahasiswa tidak ditemukan."
        )
      );
    }
  }else{
    return json_encode(
      array(
        'status'=> 204,
        'keterangan' => "Anda sudah masuk"
      )
    );
  }
  } else {
    return json_encode(
      array(
        'status'=> 204,
        'keterangan' => "Mahasiswa tidak ditemukan."
      )
    );
  }
    
    // foreach($booking as $b){
    //   $segmen = $b->segmen;
    //   $baris = $b->baris;
    //   DB::table('booking')->insert(['segmen'=>$segmen,'baris'=>$baris]);
    // }
   
  

    // return view('cek',['input'=>$input,'booking' => $booking, 'nomor' => $nomor,'nomor1'=>$nomor1]);
    


  }
  public function scan()
  {
   
      return view('simple');
   
  }

}
