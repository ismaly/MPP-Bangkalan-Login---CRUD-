<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\user;


class AuthController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Menampilkan form login.
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Menangani proses login.
     */
    // Fungsi untuk menangani proses login
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            // 'g-recaptcha-response' => ['required'],
        ]);
        // // Validasi CAPTCHA
        // $response = Http::post('https://www.google.com/recaptcha/api/siteverify', [
        //     'secret' => config('services.recaptcha.secret'),
        //     'response' => $request->input('g-recaptcha-response'),
        //     'remoteip' => $request->ip(),
        // ]);
        // $result = $response->json();

        // // Cek apakah CAPTCHA valid
        // if (!$result['success']) {
        //     Log::error('CAPTCHA validation failed', ['response' => $result]);
        //     return back()->withErrors([
        //         'captcha' => 'CAPTCHA tidak valid.',
        //     ])->onlyInput('email');
        // }

        // Coba autentikasi
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redirect ke app setelah login sukses
            return redirect()->route('manage-profil.index');
        }
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            // Jika email tidak ditemukan
            return back()->withErrors([
                'email' => 'Email tidak terdaftar.',
            ])->onlyInput('email');
        }
        // Kembali ke halaman login jika gagal
        return back()->withErrors([
            'password' => 'Password yang Anda masukkan salah.',
        ])->onlyInput('email');
    }

    // Fungsi validasi inputan
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama_user' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'g-recaptcha-response' => ['required'], // Validasi reCAPTCHA
        ]);
    }

    /**
     * Menangani proses logout.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman login setelah logout
        return redirect('login')->with('success', 'Anda berhasil logout!');
    }
}
