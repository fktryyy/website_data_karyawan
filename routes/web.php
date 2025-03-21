<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/home', function () {
    if (!session('user')) {
        return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
    }
    return view('home');
})->name('home');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/karyawan', [UserController::class, 'getKaryawan'])->name('karyawan');
Route::get('/create', [KaryawanController::class, 'create'])->name('create');
Route::post('/store', [KaryawanController::class, 'store'])->name('store');

Route::get('/karyawan/{id}/edit', [KaryawanController::class, 'edit'])->name('karyawan.edit');
Route::put('/karyawan/{id}', [KaryawanController::class, 'update'])->name('karyawan.update');
Route::delete('/karyawan/{id}', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');
