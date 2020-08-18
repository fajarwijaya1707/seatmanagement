<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $count_mhs = \App\Mahasiswa::count();
        $count_tamu = \App\Tamu::count();
        return view('dashboard.dashboard',['count_mhs' => $count_mhs, 'count_tamu' => $count_tamu]);
    }
}
