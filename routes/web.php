<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HalamanUtamaController;
use App\Http\Controllers\HargaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TingkatanController;
use App\Http\Controllers\UserRegistrasiController;
use App\Http\Controllers\WhatsAppController;
use App\Http\Controllers\ArealayananController;
use App\Http\Controllers\HalamanTingkatanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ForgotPasswordController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// route login, logout dan registrasi
Route::get("/login", [LoginController::class, "form_login"])->middleware("guest")->name("login");
Route::post("/login", [LoginController::class, "authentication"])->name("authentication");
Route::get("/registrasi", [RegisterController::class, "form_registrasi"])->middleware("guest")->name("registrasi");
Route::post("/registrasi", [RegisterController::class, "create_user"])->name("create.user");
Route::post("/logout", LogoutController::class)->name("logout");

// lupa password
Route::get("/lupa-password", [ForgotPasswordController::class, "index"])->middleware("guest")->name("lupa.password");
Route::post("/lupa-password", [ForgotPasswordController::class, "sendResetLinkEmail"])->middleware("guest")->name("send.link");
Route::get("/reset-password/{token}", [ForgotPasswordController::class, "reset_password"])->middleware("guest")->name("password.reset");
Route::post("/reset-password", [ForgotPasswordController::class, "update_password"])->middleware("guest")->name("update.password");

// route API internal (digunakan untuk multiple select pada form biodata)
Route::post("/getkabupaten", [ApiController::class, "getkabupaten"])->name("get.kabupaten");
Route::post("/getkecamatan", [ApiController::class, "getkecamatan"])->name("get.kecamatan");
Route::post("/getkabupatenMengajar", [ApiController::class, "getkabupatenMengajar"])->name("get.kabupaten.mengajar");
Route::post("/getAllDataDomicile", [ApiController::class, "getAllDataDomicile"])->name("get.all.domicile");
Route::post("/getmapel", [ApiController::class, "getmapel"])->name("get.mepel");
Route::post("/getdomisili/mengajar", [ApiController::class, "getdomisili_mengajar"])->name("get.domisili.mengajar");
Route::post("/getminat/mengajar", [ApiController::class, "getminat_mengajar"])->name("get.minat.mengajar");

// route biodata
Route::get("/biodata/step1", [BiodataController::class, "biodata_step1"])->middleware(["auth", "is.profile.complete:no"])->name("biodata.step1");
Route::get("/biodata/step2", [BiodataController::class, "biodata_step2"])->middleware(["auth", "is.profile.complete:no"])->name("biodata.step2");
Route::post("/biodata/step2", [BiodataController::class, "biodata_create2"])->middleware("auth")->name("biodata.create");
Route::get("/biodata/step3/{key}", [BiodataController::class, "biodata_step3"])->middleware(["auth", "is.profile.complete:yes"])->name("biodata.step3");

Route::middleware(["auth", "is.profile.complete:yes", "role:admin,user"])->group(function(){
   
    // route unmengirim pesan (siap micro teaching)
    Route::post("/micro_teaching", [WhatsAppController::class, "micro_teaching"])->name("micro.teaching");

    // route profile 
    Route::get("/profile", [ProfileController::class, "profile"])->name("profile");
    Route::get("/profile/edit", [ProfileController::class, "profile_edit"])->name("profile.edit");
    Route::post("/profile/edit", [ProfileController::class, "profile_update"])->name("profile.update");
   
});

Route::middleware(["auth", "is.profile.complete:yes", "role:admin"])->group(function(){
   
    // dashboard 
    Route::get("/dashboard", [DashboardController::class, "index"])->name("dashboard");
    Route::get("/dashboard/list-profile-guru", [DashboardController::class, "list_profile_guru"])->name("list.profile.guru");
    Route::get("/dashboard/data-guru", [DashboardController::class, "data_guru"])->name("data.guru");
    Route::get("/dashboard/user-access", [DashboardController::class, "user_access"])->name("user.access");
    Route::get("/dashboard/setting", [DashboardController::class, "pengaturan"])->name("pengaturan");

    // fungsi yang di gunakan pada dashboard
    Route::get("/dashboard/biodata-guru/{key}", [DashboardController::class, "biodataGuru"])->name("biodata.guru");
    Route::put("/dashboard/edit-microTeaching", [DashboardController::class, "edit_micro_teaching"])->name("edit.micro.teaching");
    Route::put("/dashboard/edit-topStar", [DashboardController::class, "edit_top_star"])->name("edit.top.star");
    Route::put("/dashboard/edit-harga", [DashboardController::class, "edit_harga"])->name("edit.harga");
    Route::post("/dashboard/get-user", [DashboardController::class, "getUser"])->name("get.user");
    Route::post("/dashboard/remove-user", [DashboardController::class, "remove_user"])->name("remove.user");

    // tingkatan
    Route::get("dashboard/setting/tingkatan", [TingkatanController::class, "tingkatan"])->name("tingkatan");
    Route::post("dashboard/setting/tingkatan", [TingkatanController::class, "store"])->name("tambah.tingkatan");
    Route::post("dashboard/setting/tingkatan/get-tingkatan", [TingkatanController::class, "getTingkatan"])->name("get.tingkatan");
    Route::put("dashboard/setting/tingkatan/edit-tingkatan", [TingkatanController::class, "update"])->name("edit.tingkatan");
    Route::post("dashboard/setting/tingkatan/remove-tingkatan", [TingkatanController::class, "delete"])->name("remove.tingkatan");

    // mata pelajaran
    Route::get("dashboard/setting/mata-pelajaran", [MataPelajaranController::class, "mata_pelajaran"])->name("mata.pelajaran");
    Route::post("dashboard/setting/mata-pelajaran", [MataPelajaranController::class, "store"])->name("tambah.mata.pelajaran");
    Route::post("dashboard/setting/mata-pelajaran/get-mata-pelajaran", [MataPelajaranController::class, "getMataPelajaran"])->name("get.mata.pelajaran");
    Route::put("dashboard/setting/mata-pelajaran/edit-mata-pelajaran", [MataPelajaranController::class, "update"])->name("edit.mata.pelajaran");
    Route::post("dashboard/setting/mata-pelajaran/remove-mata-pelajaran", [MataPelajaranController::class, "delete"])->name("remove.mata.pelajaran");
    
    // user registrasi
    Route::get("dashboard/setting/user-registrasi", [UserRegistrasiController::class, "user_registrasi"])->name("user.registrasi");
    Route::post("dashboard/setting/remove-user-registrasi", [UserRegistrasiController::class, "delete"])->name("remove.user.registrasi");

    // kontak
    Route::get("dashboard/setting/kontak", [KontakController::class, "kontak"])->name("kontak");
    Route::post("dashboard/setting/kontak", [KontakController::class, "updateOrCreate"])->name("kontak.save");

    // harga
    Route::get("dashboard/setting/harga", [HargaController::class, "harga"])->name("harga");
    Route::post("dashboard/setting/harga", [HargaController::class, "updateOrCreate"])->name("harga.save");

});

// page halaman utama dan detail tutor
Route::get("/", [HalamanUtamaController::class, "halaman_utama"])->name("home");
Route::get("/daftar/guru", [HalamanUtamaController::class, "daftar_guru"])->name("daftar.guru");
Route::get("/guru/{key}", [HalamanUtamaController::class, "detail_guru"])->name("detail.guru");
Route::post("/pesan/guru", [WhatsAppController::class, "pesan_guru"])->name("pesan.guru");

// AREA LAYANAN
Route::get("/jabodetabek", [ArealayananController::class, "jabodetabek"])->name("jabodetabek");
Route::get("/bandung", [ArealayananController::class, "bandung"])->name("bandung");
Route::get("/jogja", [ArealayananController::class, "jogja"])->name("jogja");
Route::get("/surabaya", [ArealayananController::class, "surabaya"])->name("surabaya");

// PRODUCT
Route::get("/supercamp", [ProductController::class, "supercamp"])->name("supercamp");
Route::get("/privat", [ProductController::class, "privat"])->name("privat");

// TINGKATAN
Route::get("/sd", [HalamanTingkatanController::class, "tingkatansd"])->name("tingkatansd");
Route::get("/smp", [HalamanTingkatanController::class, "tingkatansmp"])->name("tingkatansmp");
Route::get("/sma", [HalamanTingkatanController::class, "tingkatansma"])->name("tingkatansma");
Route::get("/mahasiswa", [HalamanTingkatanController::class, "tingkatanmhs"])->name("tingkatanmhs");

// NEWS
Route::get("/news", [NewsController::class, "news"])->name("berita");
Route::get("/newsdetails", [NewsController::class, "newsdetails"])->name("detail.berita");

