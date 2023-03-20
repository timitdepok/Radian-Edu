<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    private $message = [
        "email.required" => "Kolom email haru diisi.",
        "email.max" => "Karakter yang di inputkan terlalu banyak.",
        "email.exists" => "Email tidak terdaftar.",
        "email.email" => "Email tidak valid.",

        'password.required' => 'Kolom password harus diisi.',
        'password.min' => 'Password minimal harus terdiri dari 6 min karakter.',
        'password.confirmed' => 'Password yang dimasukkan tidak sama dengan konfirmasi password.'
    ];

    public function index(){
        return view("lupa_password.lupa_password",[
            "title" => "Radian Edu Solution"
        ]);
    }

    public function sendResetLinkEmail(Request $request){
        $validate = $request->validate([
            'email' => 'required|email|exists:users,email',
        ], $this->message);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
                    ? back()->with('success', __($status))
                    : back()->with(['failed' => __($status)]);
            
    }

    public function reset_password(Request $request, $token){
        return view("lupa_password.reset_password",[
            "title" => "Radian Edu Solution",
            "email" => $request->email,
            "token" => $token
        ]);
    }

    public function update_password(Request $request, $token){
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ], $this->message);
     
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
     
                $user->save();
     
                event(new PasswordReset($user));
            }
        );
     
        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('success', __($status))
                    : back()->with(['failed' => __($status)]);
    }
}
