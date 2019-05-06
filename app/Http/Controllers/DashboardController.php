<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $count_mhs = \App\Mahasiswa::count();
        return view('dashboard.dashboard')->with('count_mhs', $count_mhs);;
    }
}
