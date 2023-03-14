<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\EducationalLevel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\AuthorizationException;
use App\Models\User;
use Exception;

class TingkatanController extends Controller
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

    // menampilkan page serta data tingkatan  
    public function tingkatan(Request $request){

        $user = auth()->user();
        $search = "";
        if ($request->search) {
            $search = $request->search;
        }

        $tingkatan = EducationalLevel::where("tingkatan", "like", "%" . $search . "%")->orderBy('tingkatan', 'asc')->paginate(10)
                    ->withQueryString(request("search"));

        return view("dashboard.tingkatan",[
            "title" => "Radian Edu",
            "user" => $user,
            "sidebar" => "setting",
            "tingkatan" => $tingkatan,
            "search" => $search            
        ]);

    }

    // fungsi untuk menyimpan data tingkatan 
    public function store(Request $request){

        $message = [
            "tingkatan.required" => "Kolom ini tidak boleh kosong.",
            "tingkatan.max" => "Data yang dimasukkan terlalu banyak."
        ];

        $validate = $request->validate([
            "tingkatan" => "required|max:255"
        ], $message);

        try {
            
            EducationalLevel::create([
                "tingkatan" => $request->tingkatan
            ]);

            return redirect()->route("tingkatan")->with("success", "Data tingkatan berhasil ditambahkan.");

        } catch (\Exception $e) {

            return redirect()->route("tingkatan")->with("failed", "Data tingkatan gagal ditambahkan.");

        }
    }

    // mengambil data tingkatan menggunakan ajax
    public function getTingkatan(Request $request){

        $validate = Validator::make($request->all(),[
            "tingkatan_id" => "required|numeric"
        ]);

        if($validate->fails()){
            return response()->json([
                "data" => "error",
                "status" => "failed"
            ]);
        }

        try {

            $tingkatan = EducationalLevel::where("id", $request->tingkatan_id)->first();
            
            if($tingkatan){
                return response()->json([
                    "tingkatan" => $tingkatan->tingkatan,
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

    // melakukan update/edit tingkatan menggunakan ajax
    public function update(Request $request){

        $validate = Validator::make($request->all(),[
            "tingkatan_id" => "required|numeric",
            "tingkatan" => "required|max:255"
        ]);

        if($validate->fails()){
            return response()->json([
                'success' => true,
                'icon' => 'error',
                'title' => 'Error',
                'message' => "Terjadi kesalahan. Data gagal diubah."
            ]);
        }

        try {

            $tingkatan = EducationalLevel::where("id", $request->tingkatan_id)->first();

            if($tingkatan){
                $tingkatan->update([
                    "tingkatan" => $request->tingkatan
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
                'message' => 'Terjadi kesalahan. Data gagal untuk diubah!'
            ]);
        }

    }

    // melakukan hapus data tingkatan dengan ajax
    public function delete(Request $request){

        $validate = Validator::make($request->all(),[
            "tingkatan_id" => "required|numeric"
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
            
            $tingkatan = EducationalLevel::where("id", $request->tingkatan_id)->first();
            
            if($tingkatan){
                $tingkatan->delete();
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
