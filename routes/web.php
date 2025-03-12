<?php
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('home'); // Pastikan home.blade.php ada
})->name('home');

Route::get('/karyawan', [UserController::class, 'getKaryawan'])->name('karyawan');
Route::get('/create', [KaryawanController::class, 'create'])->name('create');
Route::post('/store', [KaryawanController::class, 'store'])->name('store');