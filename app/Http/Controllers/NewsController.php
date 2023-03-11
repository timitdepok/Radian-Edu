<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    // BERITA
    public function news(){
        return view("news.news", [
            "title" => "Radian News | Radian Edu"
        ]);
    }

    public function newsdetails(){
        return view("news.newsdetail", [
            "title" => "Radian News Details | Radian Edu"
        ]);
    }
}
