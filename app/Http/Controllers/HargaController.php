<?php

namespace App\Http\Controllers;

use App\Models\Price;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;

class HargaController extends Controller
{
    // untuk melakukan pengaman, jadi hanya admin yang bisa menjalankan fungsi2 dibawah ini
    protected $userPolicy;
    public function __construct(User $user){
        $this->userPolicy = $user;
        $this->middleware(function($request, $next){
            if(!Auth::user()->hasRole("admin")){
                throw new AuthorizationException("Unauthorized");
            }
            return $next($request); 
        });
    }

    // untuk menampilkan page kotak pada dashboard setting
    public function harga(){

        $harga = Price::first();
        $user = auth()->user();
        $search = "";

        return view("dashboard.harga", [
            "title" => "Radian Edu",
            "user" => $user,
            "sidebar" => "setting",
            "harga" => $harga,
            "search" => $search 
        ]);

    }

    // untuk menambah(bila tidak ada data) atau update(bila ada data) data harga
    public function updateOrCreate(Request $request){

        $message = [
            // min_harga
            "min_harga.required" => "Kolom ini tidak boleh kosong.",
            "min_harga.numeric" => "Data harus berupa angka.",

            // max_harga
            "max_harga.required" => "Kolom ini tidak boleh kosong.",
            "max_harga.numeric" => "Data harus berupa angka.",
            
            // keuntungan
            "keuntungan.required" => "Kolom ini tidak boleh kosong.",
            "keuntungan.numeric" => "Data harus berupa angka.",

        ];

        $validate = $request->validate([
            "min_harga" => "required|numeric", 
            "max_harga" => "required|numeric", 
            "keuntungan" => "required|numeric"
        ], $message);

        if(Price::count() == 0){
            try {
                Price::create([
                    "min_harga" => $request->min_harga,
                    "max_harga" => $request->max_harga,
                    "keuntungan" => $request->keuntungan
                ]);

                return redirect()->route("harga")->with("success", "Data berhasil ditambahkan.");
            } catch (\Throwable $th) {
                return redirect()->route("harga")->with("failed", "Terjadi kesalahan, harap coba lagi.");
            }
        }else{
            try {
                $harga = Price::first();
                Price::where("id", $harga->id)->update([
                    "min_harga" => $request->min_harga,
                    "max_harga" => $request->max_harga,
                    "keuntungan" => $request->keuntungan
                ]);

                return redirect()->route("harga")->with("success", "Data berhasil diubah.");
            } catch (\Throwable $th) {
                return redirect()->route("harga")->with("failed", "Terjadi kesalahan, harap coba lagi.");
            }
        }

    }
}
