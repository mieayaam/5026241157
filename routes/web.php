<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\NilaikuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return ",<h1>Halo, Selamat datang</h1> di tutorial laravel <i>www.malasngoding.com</i>";
});
Route::get('pert5', function () {
    return view('pertemuan5');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('/pegawai', [PegawaiController::class, 'index']);

Route::get('/nilaikuliah', [NilaikuliahController::class, 'index']);
Route::get('/nilaikuliah/tambah', [NilaikuliahController::class, 'tambah']);
Route::post('/nilaikuliah/simpan', [NilaikuliahController::class, 'simpan']);
