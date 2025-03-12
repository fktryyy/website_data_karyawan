@extends('layouts.app')

@section('title', 'Data Karyawan')

@section('header', 'Data Karyawan')

@section('content')

{{-- @if(!empty($karyawan)) --}}

    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2">ID</th>
                <th class="border border-gray-300 px-4 py-2">Nama</th>
                <th class="border border-gray-300 px-4 py-2">NIK</th>
                <th class="border border-gray-300 px-4 py-2">Tanggal Lahir</th>
                <th class="border border-gray-300 px-4 py-2">Alamat</th>
                <th class="border border-gray-300 px-4 py-2">Bank</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- @endif  --}}
@endsection
