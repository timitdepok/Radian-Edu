<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // SUPERCAMP
    public function supercamp(){
        return view("product.supercamp", [
            "title" => "SUPERCAMP | Radian Edu"
        ]);
    }

    // SUPERCAMP
    public function privat(){
        return view("product.privat", [
            "title" => "PRIVAT BERGARANSI | Radian Edu"
        ]);
    }

    public function cpns(){
        return view("product.cpns",[
            "title" => "CPNS | Radian Edu"
        ]);
    }
}
