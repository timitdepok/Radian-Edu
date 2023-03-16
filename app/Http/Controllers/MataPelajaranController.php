<?php

namespace App\Http\Controllers;

use App\Models\EducationalLevel;
use App\Models\Subjects;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\AuthorizationException;
use App\Models\User;


class MataPelajaranController extends Controller
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

    // menampilkan page mata pelajaran
    public function mata_pelajaran(Request $request){

        $user = auth()->user();
        $search = "";
        if ($request->search) {
            $search = $request->search;
        }

        $tingkatan = EducationalLevel::all();
        $mata_pelajaran = Subjects::cariMapel($search)->orderBy("tingkatan_id", "asc")->paginate(10)
                    ->withQueryString(request("search"));

        return view("dashboard.mata_pelajaran",[
            "title" => "Radian Edu Solution",
            "user" => $user,
            "sidebar" => "setting",
            "mata_pelajaran" => $mata_pelajaran,
            "tingkatan" => $tingkatan,
            "search" => $search            
        ]);

    }

    // fungsi untuk menyimpan data mata pelajaran 
    public function store(Request $request){

        $check = Subjects::where("tingkatan_id", $request->tingkatan)->where("mata_pelajaran", $request->mata_pelajaran)->first();
        if($check){
            $data = [
                "tingkatan" => "required|numeric|exists:educational_levels,id",
                "mata_pelajaran" => "required|max:255|unique:subjects,mata_pelajaran"
            ];
        }else{
            $data = [
                "tingkatan" => "required|numeric|exists:educational_levels,id",
                "mata_pelajaran" => "required|max:255"
            ];
        }

        $message = [
            "mata_pelajaran.required" => "Kolom ini tidak boleh kosong.",
            "mata_pelajaran.max" => "Data yang dimasukkan terlalu banyak.",
            "mata_pelajaran.unique" => "Data yang dimasukkan sudah terdaftar.",

            "tingkatan.required" => "Kolom ini tidak boleh kosong.",
            "tingkatan.exists" => "Data tidak terdaftar.",
        ];

        $validate = $request->validate($data, $message);

        try {
            
            Subjects::create([
                "tingkatan_id" => $request->tingkatan,
                "mata_pelajaran" => $request->mata_pelajaran
            ]);

            return redirect()->route("mata.pelajaran")->with("success", "Data mata pelajaran berhasil ditambahkan.");

        } catch (\Exception $e) {

            return redirect()->route("mata.pelajaran")->with("failed", "Data mata pelajaran gagal ditambahkan.");

        }
    }

    // mengambil data mata pelajaran menggunakan ajax
    public function getMataPelajaran(Request $request){

        $validate = Validator::make($request->all(),[
            "mata_pelajaran_id" => "required|numeric"
        ]);

        if($validate->fails()){
            return response()->json([
                "data" => "error",
                "status" => "failed"
            ]);
        }

        try {

            $mata_pelajaran = Subjects::where("id", $request->mata_pelajaran_id)->first();
            $tingkatan = EducationalLevel::all();

            if($mata_pelajaran){
                return response()->json([
                    "mata_pelajaran" => $mata_pelajaran,
                    "tingkatan" => $tingkatan,
                    "status" => "success"
                ]);
            }

            throw new Exception("Terjadi kesalahan. Data gagal untuk diubah!");
    
        } catch (\Exception $e) {
            return response()->json([
                "data" => "error",
                "status" => "failed"
            ]);
        }
    }

    // melakukan update/edit mata pelajaran menggunakan ajax
    public function update(Request $request){

        $validate = Validator::make($request->all(),[
            "mata_pelajaran_id" => "required|numeric",
            "tingkatan_id" => "required|numeric|exists:educational_levels,id",
            "mata_pelajaran" => "required|max:255"
        ]);

        // if($validate->fails()){
        //     return response()->json([
        //         'success' => true,
        //         'icon' => 'error',
        //         'title' => 'Error',
        //         'message' => "Terjadi kesalahan. Data gagal diubah."
        //     ]);
        // }

        try {

            $mata_pelajaran = Subjects::where("id", $request->mata_pelajaran_id)->first();

            if($mata_pelajaran){
                $mata_pelajaran->update([
                    "tingkatan_id" => $request->tingkatan_id,
                    "mata_pelajaran" => $request->mata_pelajaran
                ]);

                return response()->json([
                    'success' => true,
                    'icon' => 'success',
                    'title' => 'Success',
                    'message' => 'Data Berhasil diubah!'
                ]);
            }

            throw new Exception("Terjadi kesalahan. Data gagal untuk diubah!");

        } catch (\Exception $e) {
            return response()->json([
                'success' => true,
                'icon' => 'error',
                'title' => 'Error',
                'message' => ''.$e
            ]);
        }

    }

    // melakukan hapus data mata pelajaran dengan ajax
    public function delete(Request $request){

        $validate = Validator::make($request->all(),[
            "mata_pelajaran_id" => "required|numeric"
        ]);

        if($validate->fails()){
            return response()->json([
                'success' => true,
                'icon' => 'error',
                'title' => 'Error',
                'message' => "Terjadi kesalahan dalam pengambilan data."
            ]);
        }

        try {
            
            $mata_pelajaran = Subjects::where("id", $request->mata_pelajaran_id)->first();
            
            if($mata_pelajaran){
                $mata_pelajaran->delete();
                return response()->json([
                    'success' => true,
                    'icon' => 'success',
                    'title' => 'Success',
                    'message' => 'Data Berhasil dihapus!'
                ]);   
            }

            throw new Exception("Terjadi kesalahan. Data gagal untuk diubah!");

        } catch (\Exception $e) {
            return response()->json([
                'success' => true,
                'icon' => 'error',
                'title' => 'Error',
                'message' => 'Terjadi kesalahan. Data gagal untuk dihapus!'
            ]);
        }
    }
}
