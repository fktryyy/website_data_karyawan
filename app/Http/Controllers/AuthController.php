<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Kirim data ke API
        $response = Http::post('http://127.0.0.1:8001/api/register', [
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => $request->password,
            'password_confirmation' => $request->password_confirmation,
        ]);

        if ($response->successful()) {
            return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
        } else {
            return back()->withErrors(['error' => 'Gagal registrasi, periksa kembali data Anda.']);
        }
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Kirim data ke API
        $response = Http::post('http://127.0.0.1:8001/api/login', [
            'email'    => $request->email,
            'password' => $request->password,
        ]);

        if ($response->successful()) {
            $data = $response->json();

            // Simpan user di session
            Session::put('user', $data['user']);

            return redirect()->route('home')->with('success', 'Login berhasil!');
        } else {
            return back()->withErrors(['email' => 'Email atau password salah.']);
        }
    }

    public function logout()
    {
        Session::forget('user');

        return redirect()->route('login')->with('success', 'Logout berhasil!');
    }
}
