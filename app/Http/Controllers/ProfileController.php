<?php

namespace App\Http\Controllers;

use App\Models\Subjects;
use App\Models\Experience;
use App\Models\InterestTeaching;
use App\Models\TeachingDomicile;
use App\Models\District;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{

    private $message = [

        // foto
        "update_foto.max" => "Ukuran file terlalu besar. Maksimum ukuran file 2 MB.",
        "update_foto.file" => "Data yang dimasukkan harus berupa file.",
        "update_foto.mimes" => "File yang dimasukkan harus memiliki format png,jpeg,jpg.",

        // nama
        "nama.required" => "Kolom ini tidak boleh kosong.",
        "nama.max" => "Data yang dimasukkan terlalu banyak.",
        
        // no_telepon
        "no_telepon.required" => "Kolom ini tidak boleh kosong.",
        "no_telepon.numeric" => "Data harus berupa angka.",

        // dari_pendidikan
        "dari_pendidikan.required" => "Kolom ini tidak boleh kosong.",
        "dari_pendidikan.date" => "Data yang dimasukkan harus berupa tanggal.",
        
        // sampai_pendidikan
        "sampai_pendidikan.required" => "Kolom ini tidak boleh kosong.",
        "sampai_pendidikan.date" => "Data yang dimasukkan harus berupa tanggal.",
        
        // universitas 
        "universitas.required" => "Kolom ini tidak boleh kosong.",
        "universitas.max" => "Data yang dimasukkan terlalu banyak.",

        // deskripsi_pendidikan
        "deskripsi_pendidikan.required" => "Kolom ini tidak boleh kosong.",

        // dari_pengalaman.*
        "dari_pengalaman.*.required" => "Kolom ini tidak boleh kosong.",
        "dari_pengalaman.*.date" => "Data yang dimasukkan harus berupa tanggal.",

        // sampai_pengalaman.*
        "sampai_pengalaman.*.required" => "Kolom ini tidak boleh kosong.",
        "sampai_pengalaman.*.date" => "Data yang dimasukkan harus berupa tanggal.",

        // perusahaan.*
        "perusahaan.*.required" => "Kolom ini tidak boleh kosong.",
        "perusahaan.*.max" => "Data yang dimasukkan terlalu banyak.",

        // deskripsi_pengalaman.*
        "deskripsi_pengalaman.*.required" => "Kolom ini tidak boleh kosong.",

        // tambah_dari_pengalaman.*
        "tambah_dari_pengalaman.*.required" => "Kolom ini tidak boleh kosong.",
        "tambah_dari_pengalaman.*.date" => "Data yang dimasukkan harus berupa tanggal.",

        // tambah_sampai_pengalaman.*
        "tambah_sampai_pengalaman.*.required" => "Kolom ini tidak boleh kosong.",
        "tambah_sampai_pengalaman.*.date" => "Data yang dimasukkan harus berupa tanggal.",

        // tambah_perusahaan.*
        "tambah_perusahaan.*.required" => "Kolom ini tidak boleh kosong.",
        "tambah_perusahaan.*.max" => "Data yang dimasukkan terlalu banyak.",

        // tambah_deskripsi_pengalaman.*
        "tambah_deskripsi_pengalaman.*.required" => "Kolom ini tidak boleh kosong.",

        // list_minat_mengajar
        "list_minat_mengajar.required" => "List minat mengajar tidak boleh kosong!",

        // list_domisili_mengajar
        "list_domisili_mengajar.required" => "List domisili mengajar tidak boleh kosong!",


    ];

    // menampilkan profile guru 
    public function profile(){

        $user = auth()->user();
        $this->authorize("is_profile_complete_yes", $user);

        return view("profile.profile", [
            "title" => "Radian Edu",
            "user" => $user
        ]);

    }

    // untuk menampilkan form edit profil
    public function profile_edit(){

        $user = auth()->user();
        $this->authorize("is_profile_complete_yes", $user);

        $mata_pelajaran = Subjects::latest()->paginate(10);
        $domisili = DB::table("provinces")
                ->join("regencies", "provinces.id", "=", "regencies.province_id")
                ->join("districts", "regencies.id", "=", "districts.regency_id")
                ->select("provinces.name as provinsi" ,"regencies.name as kabupaten", "districts.name as kecamatan")->paginate("30");
        
        if ($mata_pelajaran && $domisili) {
            return view("profile.profile_edit", [
                "title" => "Radian Edu",
                "user" => $user,
                "mata_pelajaran" => $mata_pelajaran,
                "domisili" => $domisili
            ]);
        }else{
            abort(404);
        }

    }

    private function updateBiodata($data){
        $user_id = auth()->user()->id;
        $result = DB::transaction(function () use ($data, $user_id) {
            try {
                
                // update user
                User::where("id", $user_id)->update($data["user"]);

                // update pengalaman
                foreach ($data["update_pengalaman"] as $row) {
                    Experience::where("user_id", $user_id)->where("id", $row["id"])
                    ->update([
                        "dari_pengalaman" => $row["dari_pengalaman"],
                        "sampai_pengalaman" => $row["sampai_pengalaman"],
                        "perusahaan" => $row["perusahaan"],
                        "deskripsi_pengalaman" => $row["deskripsi_pengalaman"]
                    ]);
                }

                // tambah pengalaman
                if ($data["tambah_pengalaman"]) {
                    Experience::insert($data["tambah_pengalaman"]);
                }

                // hapus pengalaman
                if ($data["hapus_pengalaman"]) {
                    if (count($data["hapus_pengalaman"]) === 0) {
                        throw new Exception("Tidak ada data untuk dimasukkan ke dalam database.");
                    }
                    Experience::where("user_id", $user_id)->whereIn("id", $data["hapus_pengalaman"])->delete();
                }

                // tambah minat mengajar 
                if ($data["tambah_minat_mengajar"]) {
                    if (count($data["tambah_minat_mengajar"]) === 0) {
                        throw new Exception("Tidak ada data untuk dimasukkan ke dalam database.");
                    }
                    InterestTeaching::insert($data["tambah_minat_mengajar"]);
                }

                // hapus minat mengajar
                if ($data["hapus_minat_mengajar"]) {
                    if (count($data["hapus_minat_mengajar"]) === 0) {
                        throw new Exception("Tidak ada data untuk dimasukkan ke dalam database.");
                    }
                    InterestTeaching::where("user_id", $user_id)->whereIn("id", $data["hapus_minat_mengajar"])->delete();
                }

                // tambah domisili mengajar
                if ($data["tambah_domisili_mengajar"]) {
                    if (count($data["tambah_domisili_mengajar"]) === 0) {
                        throw new Exception("Tidak ada data untuk dimasukkan ke dalam database.");
                    }
                    TeachingDomicile::insert($data["tambah_domisili_mengajar"]);
                }

                // hapus domisili mengajar
                if ($data["hapus_domisili_mengajar"]) {
                    if (count($data["hapus_domisili_mengajar"]) === 0) {
                        throw new Exception("Tidak ada data untuk dimasukkan ke dalam database.");
                    }
                    TeachingDomicile::where("user_id", $user_id)->whereIn("id", $data["hapus_domisili_mengajar"])->delete();
                }

                DB::commit();
                return true;

            } catch (Exception $e) {
                
                DB::rollBack();
                return false;

            }
        });

        return $result;
    }

    public function profile_update(Request $request){

        $user = auth()->user();
        $this->authorize("is_profile_complete_yes", $user);
        
        // validasi untuk input update user 
        $data = [
            "update_foto" => "max:2024|file|mimes:png,jpeg,jpg",
            "nama" => "required|max:255",
            "no_telepon" => "required|numeric",
            "kegiatan_mengajar" => "required|max:255",
            "deskripsi_diri" => "required",

            "dari_pendidikan" => "required|date",
            "sampai_pendidikan" => "required|date",
            "universitas" => "required|max:255",
            "deskripsi_pendidikan" => "required",

            "id_pengalaman.*" => "required|numeric",
            "dari_pengalaman.*" => "required|date",
            "sampai_pengalaman.*" => "required|date",
            "perusahaan.*" => "required|max:255",
            "deskripsi_pengalaman.*" => "required",

            "hapus_pengalaman.*" => "required|numeric",

            "key_tambah_pengalaman.*" => "required|max:6",
            "tambah_dari_pengalaman.*" => "required|date",
            "tambah_sampai_pengalaman.*" => "required|date",
            "tambah_perusahaan.*" => "required|max:255",
            "tambah_deskripsi_pengalaman.*" => "required",

            "tambah_minat_mengajar.*" => "required",
            "tambah_domisili_mengajar.*" => "required",

            "hapus_minat_mengajar.*" => "required|numeric",
            "hapus_domisili_mengajar.*" => "required|numeric"
        ];

        // mengelola data tambah minat mengajar 
        $data_tambah_minat_mengajar = [];
        if($request->tambah_minat_mengajar){
            $filter_tambah_minat_mengajar = array_unique($request->tambah_minat_mengajar);

            foreach($filter_tambah_minat_mengajar as $row){
                $filter = explode("#-#", $row);
                
                if (Subjects::where("id", $filter[0])->first()) {
                    $data_tambah_minat_mengajar[] = [
                        "mata_pelajaran_id" => $filter[0],
                        "user_id" => $user->id,
                        "created_at" => now(),
                        "updated_at" => now()
                    ];
                }
            }
        }
        
        // mengelola data hapus minat mengajar
        $data_hapus_minat_mengajar = [];
        if($request->hapus_minat_mengajar){
            foreach($request->hapus_minat_mengajar as $row){
                if (InterestTeaching::where("user_id")->where("id", $row)->get()) {
                    $data_hapus_minat_mengajar[] = $row;
                }
            }
        }

        // mengelola data tambah domisili mengajar 
        $data_tambah_domisili_mengajar = [];
        if($request->tambah_domisili_mengajar){
            $filter_tambah_domisili_mengajar = array_unique($request->tambah_domisili_mengajar);

            foreach($filter_tambah_domisili_mengajar as $row){
                $filter = explode("#-#", $row);
                
                if (District::where("id", $filter[0])->first()) {
                    $data_tambah_domisili_mengajar[] = [
                        "kecamatan_id" => $filter[0],
                        "user_id" => $user->id,
                        "created_at" => now(),
                        "updated_at" => now()
                    ];
                }
            }
        }
        
        // mengelola data hapus domisili mengajar
        $data_hapus_domisili_mengajar = [];
        if($request->hapus_domisili_mengajar){
            foreach($request->hapus_domisili_mengajar as $row){
                if (TeachingDomicile::where("user_id")->where("id", $row)->get()) {
                    $data_hapus_domisili_mengajar[] = $row;
                }
            }
        }
        
        // melakukan validasi list minat mengajar
        if(count($data_hapus_minat_mengajar) >= InterestTeaching::where("user_id", $user->id)->count() && count($data_tambah_minat_mengajar) == 0){
            $data["list_minat_mengajar"] = "required";
        }

        // melakukan validasi list domisili mengajar
        if(count($data_hapus_domisili_mengajar) >= TeachingDomicile::where("user_id", $user->id)->count() && count($data_tambah_domisili_mengajar) == 0){
            $data["list_domisili_mengajar"] = "required";
        }

        // mlakukan validasi terhadap semua data 
        $validate = $request->validate($data, $this->message);

        // update pengalaman
        $data_update_pengalaman = [];
        if($request->id_pengalaman){
            for($i = 0; $i < count($request->id_pengalaman); $i++){
                $data_update_pengalaman[] = [
                    "id" => $request->id_pengalaman[$i],
                    "dari_pengalaman" => $request->dari_pengalaman[$i],
                    "sampai_pengalaman" => $request->sampai_pengalaman[$i],
                    "perusahaan" => $request->perusahaan[$i],
                    "deskripsi_pengalaman" => $request->deskripsi_pengalaman[$i]
                ];
            }
        }

        // tambah pengalaman
        $data_tambah_pengalaman = [];
        if($request->key_tambah_pengalaman){
            for($i = 0; $i < count($request->key_tambah_pengalaman); $i++){
                $data_tambah_pengalaman[] = [
                    "dari_pengalaman" => $request->tambah_dari_pengalaman[$i],
                    "sampai_pengalaman" => $request->tambah_sampai_pengalaman[$i],
                    "perusahaan" => $request->tambah_perusahaan[$i],
                    "deskripsi_pengalaman" => $request->tambah_deskripsi_pengalaman[$i],
                    "user_id" => $user->id,
                    "created_at" => now(),
                    "updated_at" => now()
                ];
            }
        }

        // hapus pengelaman
        $data_hapus_pengalaman = [];
        if($request->hapus_pengalaman){
            foreach($request->hapus_pengalaman as $row){
                if(Experience::where("user_id", $user->id)->where("id", $row)){
                    $data_hapus_pengalaman[] = $row;
                }
            }
        }

        // data user
        $data_user = [
            "nama" => $request->nama,
            "no_telepon" => $request->no_telepon,
            "dari_pendidikan" => $request->dari_pendidikan,
            "sampai_pendidikan" => $request->sampai_pendidikan,
            "universitas" => $request->universitas,
            "deskripsi_pendidikan" => $request->deskripsi_pendidikan,
            "deskripsi_diri" => $request->deskripsi_diri,
            "kegiatan_mengajar" => $request->kegiatan_mengajar,
        ];

        // jika terdapat foto pada input "update_foto" maka akan ditambahkan data update foto
        if ($request->file("update_foto")) {
            $data_user["foto"] = $request->file("update_foto")->store("Images");
        }

        // simpan seluru data 
        $all_data = [
            "user" => $data_user,
            "update_pengalaman" => $data_update_pengalaman,
            "tambah_pengalaman" => $data_tambah_pengalaman,
            "hapus_pengalaman" => $data_hapus_pengalaman,
            "tambah_minat_mengajar" => $data_tambah_minat_mengajar,
            "hapus_minat_mengajar" => $data_hapus_minat_mengajar,
            "tambah_domisili_mengajar" => $data_tambah_domisili_mengajar,
            "hapus_domisili_mengajar" => $data_hapus_domisili_mengajar
        ];
        
        $update_biodata = $this->updateBiodata($all_data);
        
        if(!$update_biodata){

            if(isset($data_user["foto"])){
                Storage::delete($data_user["foto"]);
            }

            return redirect()->route("profile")->with("failed", "Profil gagal diperbarui. Mohon coba lagi nanti.");

        }else{

            if(isset($data_user["foto"])){
                if($user->foto){
                    Storage::delete($user->foto);
                }
            }

            return redirect()->route("profile")->with("success", "Profil berhasil diperbarui.");

        }
        
    }
}
