<?php   

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KaryawanController extends Controller
{
    // Menampilkan form input
    public function create()
    {
        return view('create');
    }

    // Menyimpan data ke API
    public function store(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8001/karyawan', [
            'nama' => $request->nama,
            'nik' => $request->nik,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'bank' => $request->bank_id,
        ]);

        if ($response->successful()) {
            return redirect()->back()->with('success', 'Data berhasil disimpan!');
        } else {
            return redirect()->back()->with('error', 'Gagal menyimpan data!');
        }
    }
}
