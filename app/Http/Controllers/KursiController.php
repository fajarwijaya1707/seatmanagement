<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use PDF;
use Mike42\Escpos\EscposImage;
use App\Booking;

//use App\Http\Requests;

class KursiController extends Controller
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
public function checkin(Request $request)
{
 
  $nim=$request->code;
  $mahasiswa = DB::table("mahasiswa")->where('nim',$nim)->get();
    if (!empty($mahasiswa[0]))
    {
      $mhs = DB::table('booking')->where('status',$nim)->where('checkin','=',"Sudah Masuk")->get();
              if (empty($mhs[0]))
              {
                DB::table('booking')->where('status', $nim)->update([
                'checkin' =>"Sudah Masuk",
                ]);
                $input = DB::table('booking')->where('status', $nim)->count();
                $booking = DB::table('booking')->select('segmen','baris','nomor')->where('status', $nim)->get();
                $nm = DB::table('mahasiswa')->select('nama')->where('nim', $nim)->get();
                if($input ==1)   {
                  return json_encode(
                    array(
                      'status'=> 200,
                      'keterangan' => array(
                        'input'=> $input,
                        'nama' => $nm[0]->nama,
                        'segmen' => $booking[0]->segmen,
                        'baris' => $booking[0]->baris,
                        'kursi' => array($booking[0]->nomor)
                      )
                    )
                  );
                }
                else{
                  return json_encode(
                    array(
                      'status'=> 200,
                      'keterangan' => array(
                        'input'=> $input,
                        'nama' => $nm[0]->nama,
                        'segmen' => $booking[0]->segmen,
                        'baris' => $booking[0]->baris,
                        'kursi' => array($booking[0]->nomor,$booking[1]->nomor)
                      )
                    )
                  );
                }
                
                }else{
                    $input = DB::table('booking')->where('status', $nim)->count();
                  $booking = DB::table('booking')->select('segmen','baris','nomor')->where('status', $nim)->get();
                  $nm = DB::table('mahasiswa')->select('nama')->where('nim', $nim)->get();
                  if($input ==1)   {
                    return json_encode(
                      array(
                        'status'=> 201,
                        'keterangan' => array(
                          'input'=> $input,
                          'nama' => $nm[0]->nama,
                          'segmen' => $booking[0]->segmen,
                          'baris' => $booking[0]->baris,
                          'kursi' => array($booking[0]->nomor)
                        )
                      )
                    );
                    }
                  else{
                    return json_encode(
                      array(
                        'status'=> 201,
                        'keterangan' => array(
                          'input'=> $input,
                          'nama' => $nm[0]->nama,
                          'segmen' => $booking[0]->segmen,
                          'baris' => $booking[0]->baris,
                          'kursi' => array($booking[0]->nomor,$booking[1]->nomor)
                        )
                      )
                    );
                  }
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
public function cek(Request $request)
{
  
  $nim=$request->code;
  $mahasiswa = DB::table("mahasiswa")->where('nim',$nim)->get();
    if (!empty($mahasiswa[0]))
    {
      $mhs = DB::table('booking')->where('status',$nim)->get();
              if (empty($mhs[0]))
              {

                $kursi = DB::table('kursi')->select('jumlah','id_kursi')->orderBy('id_kursi','asc')->get();
                $i  = 0;
               $mn=1;
              $maks = DB::table('maksimal')->select('jumlah')->where('id',$mn)->get();
              foreach($maks as $b){
                $mz = $b->jumlah;
              }
              $input=$request->tamu;
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
                  
                  return json_encode(
                    array(
                      'status'=> 200,
                      'keterangan' => array(
                        'input'=> $input,
                        'nama' => $nm[0]->nama,
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
                  

                  return json_encode(
                    array(
                      'status'=> 200,
                      'keterangan' => array(
                        'input'=> $input,
                        'nama' => $nm[0]->nama,
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
    $input = DB::table('booking')->where('status', $nim)->count();
    $booking = DB::table('booking')->select('segmen','baris','nomor')->where('status', $nim)->get();
    $nm = DB::table('mahasiswa')->select('nama')->where('nim', $nim)->get();
    if($input ==1)   {
      return json_encode(
        array(
          'status'=> 201,
          'keterangan' => array(
            'input'=> $input,
            'nama' => $nm[0]->nama,
            'segmen' => $booking[0]->segmen,
            'baris' => $booking[0]->baris,
            'kursi' => array($booking[0]->nomor)
          )
        )
      );
      }
    else{
      return json_encode(
        array(
          'status'=> 201,
          'keterangan' => array(
            'input'=> $input,
            'nama' => $nm[0]->nama,
            'segmen' => $booking[0]->segmen,
            'baris' => $booking[0]->baris,
            'kursi' => array($booking[0]->nomor,$booking[1]->nomor)
          )
        )
      );
    }
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
   
      return view('scan.index');
   
  }
  public function scanhp()
  {
   
      return view('scan.scanhp');
   
  }
  public function awal()
  {
   
      return view('simple');
   
  }
  public function awalhp()
  {
   
      return view('simplehp');
   
  }
  public function lokasi()
  {
   
      return view('lokasi.index');
   
  }
  public function masuk()
  {
   
      return view('masuk');
   
  }

  // public function print(Request $request)
  // {

  // //     try {
  // //         // Enter the share name for your printer here, as a smb:// url format
  // //         $connector = new WindowsPrintConnector("smb://Guest@DESKTOP-ACLFPAN/print");
  // //         //$connector = new WindowsPrintConnector("smb://Guest@computername/Receipt Printer");
  // //         //$connector = new WindowsPrintConnector("smb://FooUser:secret@computername/workgroup/Receipt Printer");
  // //         //$connector = new WindowsPrintConnector("smb://User:secret@computername/Receipt Printer");
          
  // //         /* Print a "Hello world" receipt" */
          
  // //         $printer = new Printer($connector);
  // //         $nim=$request->fajarganteng;
  // //         $booking = DB::table('booking')->select('segmen','baris','nomor')->where('status', $nim)->get();
  // //         $fajarganteng = 1;
  // //         foreach($booking as $b){
  // //           $segmen = $b->segmen;
  // //           $baris = $b->baris;
  // //           $nomor = $b ->nomor;
  // //         $printer->setJustification(Printer::JUSTIFY_CENTER);
  // //         $path = config('.app.url')."assets/img/logo1.png";
  // //         $tux = EscposImage::load($path, Printer::IMG_DOUBLE_WIDTH | Printer::IMG_DOUBLE_HEIGHT);
  // //         $printer -> bitImage($tux);
  // //         $printer -> feed(1);
  // //         $printer -> text("====== Tiket Kursi ======\n");
  // //         $printer -> feed(2);
  // //         $printer -> setTextSize(6, 6);
  // //         $printer -> text($segmen."".$nomor."\n");
  // //         $printer -> feed(1);
  // //         $printer -> setTextSize(2, 2);
  // //         $printer -> text("BARIS ".$baris."\n");
  // //         $printer -> setTextSize(1, 1);
  // //         date_default_timezone_set('Asia/Jakarta');
  // //         $printer -> feed(1);
  // //         $printer -> text("Masuk : ".date("l ,Y-m-d ")."\n pukul : " . date("h:i:s a")."\n");
  // //         $printer -> feed(2);
  // //         $printer -> text("Terima Kasih Atas Kehadirannya\n");
  // //         $printer -> feed(2);
  // //         $printer -> cut();
  // //         $fajarganteng++;
  // //         /* Close printer */
  // //         $printer -> close();
         
  // //         return redirect('/');
  // //         }
  // //     } catch (Exception $e) {
  // //         echo "Couldn't print to this printer: " . $e -> getMessage() . "\n";
  // //     }
  // // }
  
  public function print(Request $request)
  {
  $nim=$request->fajarganteng;
	$booking = DB::table('booking')->select('segmen','baris','nomor')->where('status', $nim)->get();
 
	$pdf = PDF::loadview('cetak',['booking'=>$booking]);
	return $pdf->download('Tiket-Kursi.pdf');
  }
}
