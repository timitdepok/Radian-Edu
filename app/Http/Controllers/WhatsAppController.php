<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class WhatsAppController extends Controller
{
    
    private $message = [

        // nama
        "nama.required" => "Kolom ini tidak boleh kosong.",
        "nama.max" => "Data yang dimasukkan terlalu banyak.",

        // jumlah sesi
        "jumlah_sesi.required" => "Kolom ini tidak boleh kosong.",
        "jumlah_sesi.numeric" => "Data harus berupa angka.",
        "jumlah_sesi.min" => "Masukkan jumlah sesi minimal 1 sesi.",

        // ajukan tanggal 
        "ajukan_tanggal.required" => "Kolom ini tidak boleh kosong.",
        "ajukan_tanggal.date" => "Data yang dimasukkan harus berupa tanggal.",

        // mata pelajaran
        "mata_pelajaran.required" => "Kolom ini tidak boleh kosong."

    ];

    // fungsi ini digunakan jika user ingin melakukan micro teaching 
    public function tes_tulis(Request $request){
        
        $user = auth()->user();

        // mengambil kontak(untuk micro teaching)
        $kontak = Contact::first();

        $this->authorize("is_profile_complete_yes", $user);
        $this->authorize("tes_tulis_no_complete", $user);

        if($request->submit){

            // biodata singkat 
            $nama = $user->nama;
            $email = $user->email;

            if($kontak){

                // mengubah awalan angka 0 pada nomor hp menjadi +62
                $kontak = substr_replace($kontak->kontak_tes_tulis, "+62", 0, 1);

                // keterangan %20 : untuk spasi, %0A : untuk enter
                $pesan = "Hallo%20radian%2C%20saya%20$nama%20dengan%20email%20$email%20sudah%20mendaftar%20tutor%20melalui%20website%20radian%2C%20mohon%20untuk%20dijadwalkan%20terkait%20tes%20tulis%20segera.%20Terimakasih";
                return redirect("https://api.whatsapp.com/send?phone=".$kontak."&text=".$pesan);

            }else{
                abort(404);
            }

        }else{
            abort(404);
        }
    }

    public function pesan_guru(Request $request){

        // mengambil kontak(pesan guru)
        $kontak = Contact::first();

        $validate = $request->validate([
            "nama" => "required|max:255",
            "jumlah_sesi" => "required|numeric|min:1",
            "ajukan_tanggal" => "required|date",
            "mata_pelajaran" => "required|max:255",
            "nama_guru" => "required|max:255",
            "key" => "required",
            "jumlah_bayar" => "required|numeric"
        ], $this->message);

        if($request->submit){
            if($kontak){

                $kontak = substr_replace($kontak->kontak_pesan_guru, "+62", 0, 1);

                $nama = $request->nama;
                $jumlah_sesi = $request->jumlah_sesi;
                $ajukan_tanggal = date("d M Y", strtotime($request->ajukan_tanggal));
                $mata_pelajaran = $request->mata_pelajaran;

                $nama_guru = $request->nama_guru;
                $url_guru = route('detail.guru', [$request->key]);

                // keterangan %20 : untuk spasi, %0A : untuk enter
                $pesan = "Hallo%20Radian,%20nama%20saya%20*$nama*,%20saya%20ingin%20memesan%20jasa%20guru%20bernama%20*$nama_guru*%20untuk%20mata%20pelajaran%20*$mata_pelajaran*%20dengan%20durasi%20*$jumlah_sesi%20sesi*,%20untuk%20tanggal%20*$ajukan_tanggal*.%20Mohon%20agar%20pesanan%20saya%20dicatat%20dan%20informasi%20mengenai%20tagihan%20yang%20harus%20saya%20bayarkan%20dapat%20diberikan%20kembali.%0A%0ATerima%20Kasih%0ALink%20detail%20guru%20:%20$url_guru";
                return redirect("https://api.whatsapp.com/send?phone=".$kontak."&text=".$pesan);

            }else{
                abort(404);
            }
        }else{
            abort(404);
        }
    }

}
