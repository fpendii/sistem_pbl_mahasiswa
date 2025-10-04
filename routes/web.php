<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerMahasiswa;
use App\Http\Controllers\ControllerUser;
use App\Http\Controllers\ControllerNilaiMahasiswa;

Route::get('/', function () {
    return view('welcome');
});

// Route Mahasiswa
Route::get('/dosen/mahasiswa', [ControllerMahasiswa::class, 'index']);
Route::get('/dosen/mahasiswa/create', [ControllerMahasiswa::class, 'create']);
Route::get('/dosen/mahasiswa/store', [ControllerMahasiswa::class, 'store']);
Route::get('/dosen/mahasiswa/edit', [ControllerMahasiswa::class, 'edit']);
Route::get('/dosen/mahasiswa/update', [ControllerMahasiswa::class, 'update']);
Route::get('/dosen/mahasiswa/delete', [ControllerMahasiswa::class, 'delete']);

// Route User
Route::get('/dosen/user', [ControllerUser::class, 'index']);
Route::get('/dosen/user/create', [ControllerUser::class, 'create']);
Route::get('/dosen/user/store', [ControllerUser::class, 'store']);
Route::get('/dosen/user/edit', [ControllerUser::class, 'edit']);
Route::get('/dosen/user/update', [ControllerUser::class, 'update']);
Route::get('/dosen/user/delete', [ControllerUser::class, 'delete']);

// Route Nilai Mahasiswa
Route::get('/dosen/nilai-mahasiswa', [ControllerNilaiMahasiswa::class, 'index']);
Route::get('/dosen/nilai-mahasiswa/create', [ControllerNilaiMahasiswa::class, 'create']);
Route::get('/dosen/nilai-mahasiswa/store', [ControllerNilaiMahasiswa::class, 'store']);
Route::get('/dosen/nilai-mahasiswa/edit', [ControllerNilaiMahasiswa::class, 'edit']);
Route::get('/dosen/nilai-mahasiswa/update', [ControllerNilaiMahasiswa::class, 'update']);
Route::get('/dosen/nilai-mahasiswa/delete', [ControllerNilaiMahasiswa::class, 'delete']);
