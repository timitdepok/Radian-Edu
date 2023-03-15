<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;


class UserRegistrasiController extends Controller
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

    // menampilkan page user yang baru melakukan registrasi (belum membuat/mengisis biodata/profil)
    public function user_registrasi(Request $request){
        
        $user = auth()->user();
        $search = "";
        if ($request->search) {
            $search = $request->search;
        }

        $user_registrasi = User::where("nama", "like", "%" . $search . "%")->where("is_profile_complete", false)
                ->whereHas("roles", function($query){
                    $query->where("name", "user");
                })->paginate(20)->withQueryString(request("search"));

        return view("dashboard.user_registrasi", [
            "title" => "Radian Edu",
            "user" => $user,
            "sidebar" => "setting",
            "user_registrasi" => $user_registrasi,
            "search" => $search
        ]);

    }

    // menghapus user yang baru melakukan registrasi (belum membuat/mengisis biodata/profil)
    public function delete(Request $request){

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
            
            $user_registrasi = User::where("id", $request->user_id)->where("is_profile_complete", false)
                ->whereHas("roles", function($query){
                    $query->where("name", "user");
                })->first();
            
            if($user_registrasi){
                $user_registrasi->delete();
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
