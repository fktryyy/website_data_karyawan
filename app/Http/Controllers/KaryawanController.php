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
        $response = Http::post('http://127.0.0.1:8001/api/karyawan', [
            'nama' => $request->nama,
            'nik' => $request->nik,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'bank_id' => $request->bank_id,
        ]);

        if ($response->successful()) {
            return redirect()->back()->with('success', 'Data berhasil disimpan!');
        } else {
            return redirect()->back()->with('error', 'Gagal menyimpan data!');
        }
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $response = Http::get("http://127.0.0.1:8001/api/karyawan/{$id}");
        $karyawan = $response->json();
        
        return view('edit', compact('karyawan'));
    }

    // Update data ke API
    public function update(Request $request, $id)
    {
        $response = Http::put("http://127.0.0.1:8001/api/karyawan/{$id}", [
            'nama' => $request->nama,
            'nik' => $request->nik,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'bank_id' => $request->bank_id,
        ]);

        if ($response->successful()) {
            return redirect()->back()->with('success', 'Data berhasil diperbarui!');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui data!');
        }
    }

    // Hapus data dari API
    public function destroy($id)
    {
        $response = Http::delete("http://127.0.0.1:8001/api/karyawan/{$id}");

        if ($response->successful()) {
            return redirect()->back()->with('success', 'Data berhasil dihapus!');
        } else {
            return redirect()->back()->with('error', 'Gagal menghapus data!');
        }
    }
}
