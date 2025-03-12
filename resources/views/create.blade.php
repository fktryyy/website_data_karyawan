@extends('layouts.app')

@section('title', 'Tambah Karyawan')

@section('content')
    <form action="{{ url('store') }}" method="POST" class="w-full max-w-lg mx-auto p-4 border rounded shadow">
        @csrf
        <div class="mb-4">
            <label class="block">Nama</label>
            <input type="text" name="nama" class="w-full border p-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block">NIK</label>
            <input type="text" name="nik" class="w-full border p-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="w-full border p-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block">Alamat</label>
            <input type="text" name="alamat" class="w-full border p-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block">Bank</label>
            <select name="bank" class="w-full border p-2 rounded">
                <option value="1">BCA</option>
                <option value="2">Mandiri</option>
                <option value="3">BRI</option>
            </select>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>
@endsection
