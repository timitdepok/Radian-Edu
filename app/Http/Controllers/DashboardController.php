<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Price;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Exception;

class DashboardController extends Controller
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

    // menampilkan page dashboard
    public function index(Request $request){
        
        $user = auth()->user();
        $search = "";
        if ($request->search) {
            $search = $request->search;
        }

        $guru_aktif = User::where("is_profile_complete", true)->where("is_micro_teaching_complete", true)
                      ->whereHas("roles", function($query){
                        $query->where("name", "user");
                    })->count();
        
        $guru_tidak_aktif = User::where("is_micro_teaching_complete", false)
                                ->whereHas("roles", function($query){
                                $query->where("name", "user");
                            })->count();

        $guru = [
            "aktif" => $guru_aktif,
            "tidak_aktif" => $guru_tidak_aktif
        ];

        return view("dashboard.index",[
            "title" => "Radian Edu",
            "sidebar" => "dashboard",
            "user" => $user,
            "guru" => $guru,
            "search" => $search
        ]);
    }

    // menampilkan page dashboard list profile guru 
    public function list_profile_guru(Request $request){

        $user = auth()->user();
        $search = "";
        if ($request->search) {
            $search = $request->search;
        }

        $guru = User::latest()->searchUser($search)->where("is_profile_complete", true)->paginate(20)
                ->withQueryString(request("search"));

        return view("dashboard.list_profile_guru",[
            "title" => "Radian Edu",
            "sidebar" => "list-profile-guru",
            "user" => $user,
            "guru" => $guru,
            "search" => $search
        ]);
    }

    // menampilkan page biodata guru
    public function biodataGuru($key){
        try {

            $key = decrypt($key);
            $guru = User::with(["domisili_mengajar.kecamatan", "minat_mengajar.mata_pelajaran.tingkatan", "kegiatan", "pengalaman"])
                    ->where("id", $key)->where("is_profile_complete", true)
                    ->whereHas("roles", function($query){
                        $query->where("name", "user");
                    })->first();
            
            if($guru){

                return view("dashboard.biodata_guru", [
                    "title" => "Radian Edu",
                    "guru" => $guru
                ]);
            }

            abort(404);

        } catch (\Exception $e) {
            abort(404);
        }
    }

    // untuk mengedit micro teaching 
    public function edit_micro_teaching(Request $request){

        $validate = Validator::make($request->all(),[
            "user_id" => "required|numeric",
            "micro_teaching" => "required"
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

            $user = User::where("id", $request->user_id)->where("is_profile_complete", true)
                    ->whereHas("roles", function($query){
                        $query->where("name", "user");
                    })->first();

            if($user){
                $user->update([
                    "is_micro_teaching_complete" => $request->micro_teaching
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

    // menampilkan page dashboard data guru
    public function data_guru(Request $request){
        
        $user = auth()->user();
        $search = "";
        if ($request->search) {
            $search = $request->search;
        }

        $guru = User::latest()->searchUser($search)->where("is_profile_complete", true)->paginate(20)
                ->withQueryString(request("search"));

        return view("dashboard.data_guru",[
            "title" => "Radian Edu",
            "sidebar" => "data-guru",
            "user" => $user,
            "guru" => $guru,
            "search" => $search
        ]);

    }

    // untuk mengedit harga 
    public function edit_harga(Request $request){

        $validate = Validator::make($request->all(),[
            "user_id" => "required|numeric",
            "harga" => "required|numeric"
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

            $user = User::where("id", $request->user_id)->where("is_profile_complete", true)
                    ->whereHas("roles", function($query){
                        $query->where("name", "user");
                    })->first();

            if($user){
                $user->update([
                    "harga" => $request->harga
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

    // untuk menampilkan page dashboard user access
    public function user_access(Request $request){
        $user = auth()->user();
        $search = "";
        if ($request->search) {
            $search = $request->search;
        }

        $guru = User::with(["roles"])->latest()->searchUser($search)->where("is_profile_complete", true)->paginate(20)
                ->withQueryString(request("search"));

        return view("dashboard.user_access",[
            "title" => "Radian Edu",
            "sidebar" => "user-access",
            "user" => $user,
            "guru" => $guru,
            "search" => $search
        ]);
    }

    // untuk edit top star
    public function edit_top_star(Request $request){

        $validate = Validator::make($request->all(),[
            "user_id" => "required|numeric",
            "top_star" => "required"
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

            $user = User::where("id", $request->user_id)->where("is_profile_complete", true)
                    ->whereHas("roles", function($query){
                        $query->where("name", "user");
                    })->first();

            if($user){
                $user->update([
                    "top_star" => $request->top_star
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

    // untuk mengambil data user dari ajax
    public function getUser(Request $request){

        $validate = Validator::make($request->all(),[
            "user_id" => "required|numeric"
        ]);

        if($validate->fails()){
            return response()->json([
                "data" => "error",
                "status" => "failed"
            ]);
        }

        try {
            $user = User::where("id", $request->user_id)->where("is_profile_complete", true)
                    ->whereHas("roles", function($query){
                        $query->where("name", "user");
                    })->first();

            if($user){
                return response()->json([
                    "micro_teaching" => $user->is_micro_teaching_complete,
                    "top_star" => $user->top_star,
                    "harga" => $user->harga,
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
    
    // berfungsi untuk menghapus data user
    public function remove_user(Request $request){
        
        $validate = Validator::make($request->all(),[
            "user_id" => "required|numeric"
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
            
            $user = User::where("id", $request->user_id)->whereHas("roles", function($query){
                        $query->where("name", "user");
                    })->first();

            if($user){
                $user->delete();
                if($user->foto && $user->cv){
                    Storage::delete($user->foto);
                    Storage::delete($user->cv);
                }
                
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

    // menampilkan page dashboard setting
    public function pengaturan(Request $request){
        $user = auth()->user();
        $search = "";
        if ($request->search) {
            $search = $request->search;
        }

        $guru = User::with(["roles"])->latest()->searchUser($search)->where("is_profile_complete", true)->paginate(20)
                ->withQueryString(request("search"));

        return view("dashboard.pengaturan",[
            "title" => "Radian Edu",
            "sidebar" => "setting",
            "user" => $user,
            "search" => $search
        ]);
    }
}
