<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;

class RegisterController extends Controller
{
    // Menampilkan Formulir Registrasi
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Fungsi untuk menangani proses registrasi
    public function register(Request $request)
    {
        // Validasi inputan
        $this->validator($request->all())->validate();

        // Validasi CAPTCHA
        $response = Http::post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('services.recaptcha.secret'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);

        $result = $response->json();
        // Membuat akun pengguna baru
        $user = $this->create($request->all());

        if (!$result['success']) {
            return redirect()->route('login')->with('success', 'Account created successfully! Please login.');
        }
    }

    // Fungsi validasi inputan
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama_user' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'g-recaptcha-response' => ['required'], // Validasi reCAPTCHA
        ]);
    }

    // Fungsi untuk membuat pengguna baru
    protected function create(array $data)
    {
        return User::create([
            'nama_user' => $data['nama_user'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
