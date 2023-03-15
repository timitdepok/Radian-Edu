<?php

namespace App\Http\Controllers;

use App\Models\EducationalLevel;
use Illuminate\Http\Request;

class TingkatanController extends Controller
{
    public function tingkatan(Request $request){

        $user = auth()->user();
        $search = "";
        if ($request->search) {
            $search = $request->search;
        }

        $tingkatan = EducationalLevel::where("tingkatan", "like", "%" . $search . "%")->paginate(10)
                    ->withQueryString(request("search"));

        return view("dashboard.tingkatan",[
            "title" => "Radian Edu",
            "user" => $user,
            "sidebar" => "setting",
            "tingkatan" => $tingkatan,
            "search" => $search            
        ]);

    }

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
