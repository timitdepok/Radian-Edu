<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArealayananController extends Controller
{
    // AREA JABODETABEK
    public function jabodetabek(){
        return view("arealayanan.jabodetabek", [
            "title" => "Jabodetabek | Radian Edu"
        ]);
    }

    // AREA BANDUNG
    public function bandung(){
        return view("arealayanan.bandung", [
            "title" => "Bandung | Radian Edu"
        ]);
    }

    // AREA JOGJA
    public function jogja(){
        return view("arealayanan.jogja", [
            "title" => "Yogyakarta | Radian Edu"
        ]);
    }

    // AREA SURABAYA
    public function surabaya(){
        return view("arealayanan.surabaya", [
            "title" => "Surabaya | Radian Edu"
        ]);
    }
}


