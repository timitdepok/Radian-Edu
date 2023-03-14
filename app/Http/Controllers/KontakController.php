<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;

class KontakController extends Controller
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
    public function kontak(){

        $kontak = Contact::first();
        $user = auth()->user();
        $search = "";

        return view("dashboard.kontak", [
            "title" => "Radian Edu",
            "user" => $user,
            "sidebar" => "setting",
            "kontak" => $kontak,
            "search" => $search 
        ]);

    }

    // untuk menambah(bila tidak ada data) atau update(bila ada data) data kontak
    public function updateOrCreate(Request $request){

        $message = [
            // kontak_micro_teaching
            "kontak_micro_teaching.required" => "Kolom ini tidak boleh kosong.",
            "kontak_micro_teaching.numeric" => "Data harus berupa angka.",
            "kontak_micro_teaching.digits_between" => "Masukan nomor minimal 10 digit.",

            // kontak_pesan_guru
            "kontak_pesan_guru.required" => "Kolom ini tidak boleh kosong.",
            "kontak_pesan_guru.numeric" => "Data harus berupa angka.",
            "kontak_pesan_guru.digits_between" => "Masukan nomor minimal 10 digit.",

            // email
            "email.required" => "Kolom email haru diisi.",
            "email.max" => "Karakter yang di inputkan terlalu banyak.",
            "email.email" => "Email tidak valid.",
        ];

        $validate = $request->validate([
            "kontak_micro_teaching" => "required|numeric|digits_between:10,13", 
            "kontak_pesan_guru" => "required|numeric|digits_between:10,13", 
            "email" => "required|max:100|email"
        ], $message);

        if(Contact::count() == 0){
            try {
                Contact::create([
                    "email" => $request->email,
                    "kontak_micro_teaching" => $request->kontak_micro_teaching,
                    "kontak_pesan_guru" => $request->kontak_pesan_guru
                ]);

                return redirect()->route("kontak")->with("success", "Data berhasil ditambahkan.");
            } catch (\Throwable $th) {
                return redirect()->route("kontak")->with("failed", "Terjadi kesalahan, harap coba lagi.");
            }
        }else{
            try {
                $kontak = Contact::first();
                Contact::where("id", $kontak->id)->update([
                    "email" => $request->email,
                    "kontak_micro_teaching" => $request->kontak_micro_teaching,
                    "kontak_pesan_guru" => $request->kontak_pesan_guru
                ]);

                return redirect()->route("kontak")->with("success", "Data berhasil diubah.");
            } catch (\Throwable $th) {
                return redirect()->route("kontak")->with("failed", "Terjadi kesalahan, harap coba lagi.");
            }
        }

    }
}
