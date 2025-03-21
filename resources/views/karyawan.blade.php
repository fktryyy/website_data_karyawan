@extends('layouts.app')

@section('title', 'Data Karyawan')

@section('header', 'Data Karyawan')

@section('content')
    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2">ID</th>
                <th class="border border-gray-300 px-4 py-2">Nama</th>
                <th class="border border-gray-300 px-4 py-2">NIK</th>
                <th class="border border-gray-300 px-4 py-2">Tanggal Lahir</th>
                <th class="border border-gray-300 px-4 py-2">Alamat</th>
                <th class="border border-gray-300 px-4 py-2">Bank</th>
                <th class="border border-gray-300 px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($karyawan as $karyawan)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $karyawan['id'] }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $karyawan['nama'] }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $karyawan['nik'] }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $karyawan['tgl_lahir'] }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $karyawan['alamat'] }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $karyawan['bank']['nama_bank'] ?? 'Tidak Ada' }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        <a href="{{ route('karyawan.edit', $karyawan['id']) }}" class="text-blue-500">Edit</a>
                        |
                        <form action="{{ route('karyawan.destroy', $karyawan['id']) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
