@extends('layouts.app')

@section('title', 'Edit Karyawan')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-4">Edit Data Karyawan</h2>

    <form action="{{ route('karyawan.update', $karyawan['id']) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="nama" class="block text-sm font-medium text-gray-700">Nama:</label>
            <input type="text" name="nama" id="nama" value="{{ $karyawan['nama'] }}" 
                class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300" required>
        </div>

        <div>
            <label for="nik" class="block text-sm font-medium text-gray-700">NIK:</label>
            <input type="text" name="nik" id="nik" value="{{ $karyawan['nik'] }}" 
                class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300" required>
        </div>

        <div>
            <label for="tgl_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir:</label>
            <input type="date" name="tgl_lahir" id="tgl_lahir" value="{{ $karyawan['tgl_lahir'] }}" 
                class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300" required>
        </div>

        <div>
            <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat:</label>
            <textarea name="alamat" id="alamat" rows="3"
                class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300" required>{{ $karyawan['alamat'] }}</textarea>
        </div>

        <div>
            <label for="bank_id" class="block text-sm font-medium text-gray-700">Bank ID:</label>
            <input type="text" name="bank_id" id="bank_id" value="{{ $karyawan['bank']['id'] ?? '' }}" 
                class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
        </div>

        <div class="flex justify-end gap-4 mt-4">
            <a href="{{ route('karyawan') }}" 
               class="bg-blue-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-600 transition duration-300">
                Batal
            </a>
            <button type="submit" 
                class="bg-blue-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-600 transition duration-300">
                Simpan Update
            </button>
        </div>        
    </form>
</div>
@endsection
