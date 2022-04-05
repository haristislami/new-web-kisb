<?php

namespace App\Http\Controllers;

use App\Models\PutusanAjudikasi;
use App\Models\PutusanMediasi;

class PutusanController extends Controller
{
    
    public function ajudikasi(){
        return view('putusan.ajudikasi', [
            "title" => "Putusan Ajudikasi",
            "active" => "putusan ajudikasi",
            "ajudikasi" => PutusanAjudikasi::paginate(10)
        ]);
    }
    public function mediasi(){
        return view('putusan.mediasi', [
            "title" => "Putusan Mediasi",
            "active" => "putusan mediasi",
            "mediasi" => PutusanMediasi::paginate(10)
        ]);
    }
    public function sela(){
        return view('putusan.sela', [
            "title" => "Putusan Sela",
            "active" => "putusan sela",
        ]);
    }
}
