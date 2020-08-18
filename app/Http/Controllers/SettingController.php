<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class SettingController extends Controller
{
    public function index()
    {
        return view('setting.setting');
    }
    public function segmen(Request $request)
    {
        $data_segmen = DB::table('segmen')
            ->select('id', 'segmen')
            ->orderBy('id', 'asc')
            ->when($request->keyword, function ($query) use ($request) {
            $query->where('segmen', 'like', "%{$request->keyword}%")
            ->orWhere('id', 'like', "%{$request->keyword}%");
        })->paginate(10);
        $data_segmen->appends($request->only('keyword'));
        $sgmn= DB::table('segmen')->count();
        return view('setting.segmen',['data_segmen' => $data_segmen,'sgmn'=>$sgmn]);
    }
    public function createsegmen(Request $request)
    {
      $id = $request->id;
      $segmen = $request->segmen;
      DB::table('segmen')->insert(['id'=>$id,'segmen'=>$segmen]);
        return redirect('/segmen')->with('success','Data Segmen berhasil diinput!');
    }
    public function updatesegmen(Request $request,$id)
    {
        DB::table('segmen')->where('id', $id)->update([
            'segmen' => $request->segmen,
            ]);
        return redirect('/segmen')->with('success','Data Segmen berhasil diupdate!');
    }
    public function hapussegmen($id)
    {
        $sgm = \App\segmen::find($id);
        $sgm->delete();
        return redirect('/segmen')->with('success','Segmen Berhasil Di Hapus');
    }
    public function editsegmen($id)
    {
        $sgm = \App\segmen::find($id);
        return view('setting.editsegmen',['sgm' => $sgm]);
    }



    public function baris(Request $request)
    {
        $data_baris = DB::table('baris')
            ->select('id', 'baris')
            ->orderBy('id', 'asc')
            ->when($request->keyword, function ($query) use ($request) {
            $query->where('baris', 'like', "%{$request->keyword}%")
            ->orWhere('id', 'like', "%{$request->keyword}%");
        })->paginate(10);
        $data_baris->appends($request->only('keyword'));
        $brs= DB::table('baris')->count();
        return view('setting.baris',['data_baris' => $data_baris,'brs'=>$brs]);
    }
    public function createbaris(Request $request)
    {
      $id = $request->id;
      $baris = $request->baris;
      DB::table('baris')->insert(['id'=>$id,'baris'=>$baris]);
        return redirect('/baris')->with('success','Data Baris berhasil diinput!');
    }
    public function updatebaris(Request $request,$id)
    {
        DB::table('baris')->where('id', $id)->update([
            'baris' => $request->baris,
            ]);
        return redirect('/baris')->with('success','Data Baris berhasil diupdate!');
    }
    public function hapusbaris($id)
    {
        $brs = \App\baris::find($id);
        $brs->delete();
        return redirect('/baris')->with('success','Baris Berhasil Di Hapus');
    }
    public function editbaris($id)
    {
        $brs = \App\baris::find($id);
        return view('setting.editbaris',['brs' => $brs]);
    }

    public function fakultas(Request $request)
    {
        $data_fakultas = DB::table('fakultas')
            ->select('id','id_fk', 'fakultas')
            ->orderBy('id_fk', 'asc')
            ->when($request->keyword, function ($query) use ($request) {
            $query->where('fakultas', 'like', "%{$request->keyword}%")
            ->orWhere('id_fk', 'like', "%{$request->keyword}%");
        })->paginate(10);
        $data_fakultas->appends($request->only('keyword'));
        return view('setting.fakultas',['data_fakultas' => $data_fakultas]);
    }
    public function createfakultas(Request $request)
    {
      $id_fk = $request->id_fk;
      $fakultas = $request->fakultas;
      DB::table('fakultas')->insert(['id_fk'=>$id_fk,'fakultas'=>$fakultas]);
        return redirect('/fakultas')->with('success','Data Fakultas berhasil diinput!');
    }
    public function updatefakultas(Request $request,$id)
    {
        DB::table('fakultas')->where('id', $id)->update([
            'id_fk' => $request->id_fk,
            'fakultas' => $request->fakultas,
            ]);
        return redirect('/fakultas')->with('success','Data Fakultas berhasil diupdate!');
    }
    public function hapusfakultas($id)
    {
        $fk = \App\fakultas::find($id);
        $fk->delete();
        return redirect('/fakultas')->with('success','Fakultas Berhasil Di Hapus');
    }
    public function editfakultas($id)
    {
        $fk = \App\fakultas::find($id);
        return view('setting.editfakultas',['fk' => $fk]);
    }


    public function prodi(Request $request)
    {
        $data_prodi = DB::table('prodi')
            ->select('id', 'prodi','fakultas')
            ->orderBy('id', 'asc')
            ->when($request->keyword, function ($query) use ($request) {
            $query->where('fakultas', 'like', "%{$request->keyword}%")
            ->orWhere('id', 'like', "%{$request->keyword}%")
            ->orWhere('prodi', 'like', "%{$request->keyword}%");
        })->paginate(10);
        $data_prodi->appends($request->only('keyword'));
        return view('setting.prodi',['data_prodi' => $data_prodi]);
    }
    public function createprodi(Request $request)
    {
      $id = $request->id;
      $prodi = $request->prodi;
      $fakultas = $request->fakultas;
      DB::table('prodi')->insert(['id'=>$id,'prodi'=>$prodi,'fakultas'=>$fakultas]);
        return redirect('/prodi')->with('success','Data Prodi berhasil diinput!');
    }
    public function updateprodi(Request $request,$id)
    {
        DB::table('prodi')->where('id', $id)->update([
            'id'=>$request->id,
            'prodi' => $request->prodi,
            'fakultas' => $request->fakultas,
            ]);
        return redirect('/prodi')->with('success','Data Segmen berhasil diupdate!');
    }
    public function hapusprodi($id)
    {
        $pd = \App\prodi::find($id);
        $pd->delete();
        return redirect('/prodi')->with('success','Segmen Berhasil Di Hapus');
    }
    public function editprodi($id)
    {
        $pd = DB::table('prodi')->select('id','prodi','fakultas')->where('id',$id)->get();
        return view('setting.editprodi',['pd' => $pd]);
    }
}
