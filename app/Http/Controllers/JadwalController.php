<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class JadwalController extends Controller
{
    public function index()
    {
        return view('jadwal',[
            "title" => "Jadwal Sidang",
            "jadwal" => jadwal::all(),
            "active" => "jadwal sidang",
        ]);
    }
    public function show(jadwal $jadwal)
    {
        return view('jadwaldetail',[
            "title" => $jadwal->judul,
            "active" => "jadwal sidang",
            "jadwal" => $jadwal
        ]);
    }
}