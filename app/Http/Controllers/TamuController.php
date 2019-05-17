<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function index(Request $request)
    {
        $data_tamu = \App\Tamu::when($request->keyword, function ($query) use ($request) {
            $query->where('segmen', 'like', "%{$request->keyword}%")
                ->orWhere('baris', 'like', "%{$request->keyword}%")
                ->orWhere('nomor', 'like', "%{$request->keyword}%")
                ->orWhere('status', 'like', "%{$request->keyword}%");
        })->paginate(10);
        $data_tamu->appends($request->only('keyword'));
        return view('guest.index',['data_tamu' => $data_tamu]);
    }
}
