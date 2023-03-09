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
}
