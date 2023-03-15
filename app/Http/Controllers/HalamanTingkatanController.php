<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanTingkatanController extends Controller
{
    // TINGKAT SEKOLAH DASAR
    public function tingkatansd(){
        return view("tingkatan.tingkatansd", [
            "title" => "Sekolah Dasar | Radian Edu"
        ]);
    }

    // TINGKAT SEKOLAH MENENGAH PERTAMA
    public function tingkatansmp(){
        return view("tingkatan.tingkatansmp", [
            "title" => "Sekolah Menengah Pertama | Radian Edu"
        ]);
    }

    // TINGKAT SEKOLAH MENENGAH ATAS
    public function tingkatansma(){
        return view("tingkatan.tingkatansma", [
            "title" => "Sekolah Menengah Atas | Radian Edu"
        ]);
    }

    // TINGKAT MAHASISWA
    public function tingkatanmhs(){
        return view("tingkatan.tingkatanmhs", [
            "title" => "Mahasiswa | Radian Edu"
        ]);
    }

}
