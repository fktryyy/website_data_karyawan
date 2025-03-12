<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function getKaryawan()
{
    $response = Http::get('http://127.0.0.1:8001/karyawan');

    if ($response->successful()) {
        
        // dd($response->json());
        
        return view('karyawan', ['karyawan' => $response->json()]);
    }
    return abort(500, 'Gagal mengambil data');
}

}
